<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

// Sitemap
Route::get('sitemap.xml', [SitemapController::class, 'sitemap'])->name('sitemap');
