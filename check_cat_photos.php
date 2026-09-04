<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$cats = DB::table('categories')->get();
foreach($cats as $c) {
    echo $c->id . " - " . $c->title . " - " . $c->photo . "\n";
}
