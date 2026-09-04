<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

DB::table('categories')->where('id', 3)->update([
    'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXansTidKc0L3rwEvukPxjtDLfslIExngSkuzTxJ5-Aw&s=10'
]);

echo "Premium Furniture category background updated.\n";
