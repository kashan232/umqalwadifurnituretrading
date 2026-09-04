<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$office_chair = 'https://images.unsplash.com/photo-1505843490538-5133c6c7d0e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80';
$gaming_chair = 'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80';
$premium = 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80';

DB::table('categories')->where('id', 1)->update(['photo' => $office_chair]);
DB::table('categories')->where('id', 2)->update(['photo' => $gaming_chair]);
DB::table('categories')->where('id', 3)->update(['photo' => $premium]);

echo "Category photos updated to lifestyle images.\n";
