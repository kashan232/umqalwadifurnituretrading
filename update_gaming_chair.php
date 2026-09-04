<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

DB::table('categories')->where('id', 2)->update([
    'photo' => 'https://img.magnific.com/premium-photo/black-background-with-deep-black-background-white-gaming-chair-generative-ai_1219269-3619.jpg?semt=ais_hybrid&w=740&q=80'
]);

echo "Gaming Chairs category background updated.\n";
