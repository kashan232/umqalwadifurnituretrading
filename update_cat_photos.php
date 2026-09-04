<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

DB::table('categories')->where('id', 1)->update(['photo' => '/images/chairs/maf_9947_black.jpg']);
DB::table('categories')->where('id', 2)->update(['photo' => '/images/chairs/maf_2279_black.jpg']);
DB::table('categories')->where('id', 3)->update(['photo' => '/images/chairs/maf_1687_brown.jpg']);

echo "Category photos updated successfully.\n";
