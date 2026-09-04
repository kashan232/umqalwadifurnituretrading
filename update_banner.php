<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Banner;
$b = Banner::first();
$b->photo = 'https://images.unsplash.com/photo-1618220179428-22790b46a0eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80';
$b->save();
echo "Updated\n";
