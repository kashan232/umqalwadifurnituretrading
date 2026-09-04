<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

DB::table('categories')->where('id', 1)->update([
    'photo' => 'https://www.shutterstock.com/image-photo/wooden-work-desk-laptop-books-260nw-2461784635.jpg'
]);

echo "Office Chairs category background updated.\n";
