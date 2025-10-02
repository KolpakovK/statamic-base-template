<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Statamic\Facades\Entry;
use Statamic\Facades\GlobalSet;
use Statamic\Facades\Site;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function sitemap(): Response
    {
        // Get SEO settings
        $seoSettings = GlobalSet::findByHandle('seo');
        $sitemapCollections = $seoSettings?->in(Site::default()->handle())?->get('sitemap_collections', []);
        
        if (empty($sitemapCollections)) {
            $sitemapCollections = ['pages']; // Default fallback
        }
        
        $urls = [];
        
        // Get entries from selected collections
        foreach ($sitemapCollections as $collectionHandle) {
            $entries = Entry::whereCollection($collectionHandle)
                ->filter(function ($entry) {
                    return $entry->status() === 'published';
                });
                
            foreach ($entries as $entry) {
                // Skip entries that are marked as noindex
                if ($entry->get('seo_noindex', false)) {
                    continue;
                }
                
                $urls[] = [
                    'loc' => $entry->absoluteUrl(),
                    'lastmod' => $entry->lastModified()?->toISOString() ?? Carbon::now()->toISOString(),
                    'changefreq' => $this->getChangeFrequency($collectionHandle),
                    'priority' => $this->getPriority($entry, $collectionHandle),
                ];
            }
        }
        
        // Add homepage if not already included
        $homepage = Entry::findByUri('/');
        if ($homepage && !$homepage->get('seo_noindex', false)) {
            $homepageExists = collect($urls)->contains(function ($url) use ($homepage) {
                return $url['loc'] === $homepage->absoluteUrl();
            });
            
            if (!$homepageExists) {
                $urls[] = [
                    'loc' => $homepage->absoluteUrl(),
                    'lastmod' => $homepage->lastModified()?->toISOString() ?? Carbon::now()->toISOString(),
                    'changefreq' => 'weekly',
                    'priority' => '1.0',
                ];
            }
        }
        
        // Sort by priority (highest first)
        usort($urls, function ($a, $b) {
            return (float)$b['priority'] <=> (float)$a['priority'];
        });
        
        $xml = view('sitemap.xml', compact('urls'))->render();
        
        return response($xml, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=3600', // Cache for 1 hour
        ]);
    }
    
    private function getChangeFrequency(string $collection): string
    {
        return match ($collection) {
            'posts', 'blog', 'news' => 'weekly',
            'pages' => 'monthly',
            'products' => 'daily',
            default => 'monthly',
        };
    }
    
    private function getPriority($entry, string $collection): string
    {
        // Homepage gets highest priority
        if ($entry->uri() === '/') {
            return '1.0';
        }
        
        // Check if entry has custom priority
        if ($customPriority = $entry->get('seo_sitemap_priority')) {
            return (string)$customPriority;
        }
        
        // Default priorities by collection
        return match ($collection) {
            'pages' => '0.8',
            'posts', 'blog' => '0.6',
            'products' => '0.7',
            default => '0.5',
        };
    }
}