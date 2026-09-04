<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Banner;
use App\Models\Category;

Banner::truncate();
Banner::create([
    'title' => 'Welcome to UMQ AL WADI FURNITURE TRADING',
    'slug' => 'welcome-to-umq-al-wadi',
    'description' => '<p>Discover the finest selection of office chairs, gaming chairs, and premium furniture for your workspace.</p>',
    'photo' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
    'status' => 'active',
]);

// Update first 3 parent categories
$categories = Category::where('is_parent', 1)->take(3)->get();

if(count($categories) >= 1) {
    $categories[0]->update([
        'title' => 'Office Chairs',
        'slug' => 'office-chairs',
        'summary' => 'Ergonomic and comfortable office chairs.',
        'photo' => 'https://images.unsplash.com/photo-1505843490538-5133c6c7d0e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
        'status' => 'active'
    ]);
}

if(count($categories) >= 2) {
    $categories[1]->update([
        'title' => 'Gaming Chairs',
        'slug' => 'gaming-chairs',
        'summary' => 'High-performance gaming chairs.',
        'photo' => 'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
        'status' => 'active'
    ]);
}

if(count($categories) >= 3) {
    $categories[2]->update([
        'title' => 'Premium Furniture',
        'slug' => 'premium-furniture',
        'summary' => 'Luxury and comfortable furniture for your home and office.',
        'photo' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
        'status' => 'active'
    ]);
}

echo "Database updated successfully.\n";
