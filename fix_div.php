<?php
$file = "resources/views/frontend/index.blade.php";
$content = file_get_contents($file);

// We need to find this pattern in New Arrivals:
/*
                                </div>
                            <!-- End Single List  -->
                                @endforeach
*/
// It's missing a </div> for single-product.
// Let's just find the End Shop Home List block and fix it.
$pattern = '/<!-- Start Shop Home List  -->.*?<!-- End Shop Home List  -->/s';
preg_match($pattern, $content, $matches);
if (!empty($matches)) {
    $shopHomeList = $matches[0];
    
    // In $shopHomeList, find:
    // </div>
    // <!-- End Single List  -->
    // @endforeach
    
    $fixed = preg_replace(
        '/<\/div>\s*<!-- End Single List  -->\s*@endforeach/s',
        '</div>
                          </div>
                          <!-- End Single List  -->
                              @endforeach',
        $shopHomeList
    );
    
    $content = str_replace($matches[0], $fixed, $content);
    file_put_contents($file, $content);
    echo "Fixed missing div.\n";
} else {
    echo "Could not find Shop Home List.\n";
}
