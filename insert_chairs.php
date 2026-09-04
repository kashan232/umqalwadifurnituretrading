<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Clear existing products
DB::table('products')->truncate();
// Remove the Shirts category
DB::table('categories')->where('id', 4)->delete();

$products = [
    [
        'title' => 'MAF 6937 Black Executive Chair',
        'slug' => 'maf-6937-black-executive-chair',
        'summary' => 'Premium black executive chair with ultimate comfort and ergonomic support. SKU: PE-1702277180',
        'description' => '<p>High-quality office chair designed for long hours of work. Features padded armrests, tilt mechanism, and a strong steel base.</p>',
        'photo' => '/images/chairs/maf_6937_black.jpg',
        'stock' => 50,
        'size' => 'M',
        'condition' => 'default',
        'status' => 'active',
        'price' => 17000,
        'discount' => 10,
        'is_featured' => 1,
        'cat_id' => 1,
        'child_cat_id' => null,
        'brand_id' => null
    ],
    [
        'title' => 'MAF 9947 Black Manager Chair',
        'slug' => 'maf-9947-black-manager-chair',
        'summary' => 'Sleek and luxurious manager chair. SKU: PE-1402277150',
        'description' => '<p>Enhance your office space with this beautiful manager chair. Ergonomic design ensures a healthy posture throughout the day.</p>',
        'photo' => '/images/chairs/maf_9947_black.jpg',
        'stock' => 30,
        'size' => 'L',
        'condition' => 'new',
        'status' => 'active',
        'price' => 14000,
        'discount' => 5,
        'is_featured' => 1,
        'cat_id' => 1,
        'child_cat_id' => null,
        'brand_id' => null
    ],
    [
        'title' => 'MAF 7825 Black Mesh Chair',
        'slug' => 'maf-7825-black-mesh-chair',
        'summary' => 'Breathable mesh back office chair for daily tasks. SKU: PE-702277075',
        'description' => '<p>Stay cool and comfortable with this mesh back chair. Perfect for workstations and home offices.</p>',
        'photo' => '/images/chairs/maf_7825_black.jpg',
        'stock' => 100,
        'size' => 'S',
        'condition' => 'hot',
        'status' => 'active',
        'price' => 7500,
        'discount' => 0,
        'is_featured' => 0,
        'cat_id' => 1,
        'child_cat_id' => null,
        'brand_id' => null
    ],
    [
        'title' => 'MAF 2279 Black Ergonomic Chair',
        'slug' => 'maf-2279-black-ergonomic-chair',
        'summary' => 'Advanced ergonomic mesh chair with headrest. SKU: PE-2852277285',
        'description' => '<p>Top of the line ergonomic chair featuring adjustable armrests, lumbar support, and a breathable headrest.</p>',
        'photo' => '/images/chairs/maf_2279_black.jpg',
        'stock' => 20,
        'size' => 'XL',
        'condition' => 'hot',
        'status' => 'active',
        'price' => 28500,
        'discount' => 15,
        'is_featured' => 1,
        'cat_id' => 1,
        'child_cat_id' => null,
        'brand_id' => null
    ],
    [
        'title' => 'MAF 1687 Brown Boss Chair',
        'slug' => 'maf-1687-brown-boss-chair',
        'summary' => 'Luxurious brown leather boss chair. SKU: PE-2802277280',
        'description' => '<p>Make a statement with this premium brown leather chair. Crafted with high-density foam and a heavy-duty chrome base.</p>',
        'photo' => '/images/chairs/maf_1687_brown.jpg',
        'stock' => 15,
        'size' => 'XL',
        'condition' => 'new',
        'status' => 'active',
        'price' => 28000,
        'discount' => 12,
        'is_featured' => 1,
        'cat_id' => 1,
        'child_cat_id' => null,
        'brand_id' => null
    ]
];

foreach ($products as $p) {
    DB::table('products')->insert($p);
}

echo "Chairs uploaded and added successfully!\n";
