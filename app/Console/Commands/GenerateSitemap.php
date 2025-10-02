<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Storage;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {--save : Save sitemap to public directory}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml based on SEO settings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');
        
        $controller = new SitemapController();
        $response = $controller->sitemap();
        
        if ($this->option('save')) {
            // Save to public directory
            $path = public_path('sitemap.xml');
            file_put_contents($path, $response->getContent());
            $this->info("Sitemap saved to: {$path}");
        } else {
            // Just output the XML
            $this->info('Sitemap generated successfully!');
            if ($this->confirm('Do you want to see the XML output?', false)) {
                $this->line($response->getContent());
            }
        }
        
        $this->info('You can access the sitemap at: ' . url('sitemap.xml'));
    }
}
