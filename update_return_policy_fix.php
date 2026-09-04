<?php

function getBladeFiles($dir) {
    $results = [];
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            if (str_ends_with($path, '.blade.php')) {
                $results[] = $path;
            }
        } else if ($value != "." && $value != "..") {
            $results = array_merge($results, getBladeFiles($path));
        }
    }
    return $results;
}

$files = getBladeFiles('resources/views/frontend');
$count = 0;

foreach ($files as $path) {
    $content = file_get_contents($path);
    $original = $content;

    // 1. Replace "Free Return" with "7 Days Return"
    $content = str_replace('<h4>Free Return</h4>', '<h4>7 Days Return</h4>', $content);
    $content = str_replace('<h4>Free return</h4>', '<h4>7 Days Return</h4>', $content);
    $content = str_replace('<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">Free Return</h4>', '<h4 style="font-size: 16px; font-weight: 700; color: #333; margin-bottom: 5px; text-transform: uppercase;">7 Days Return</h4>', $content);
    
    // 2. Replace "Within 14 days returns" with "Original box required"
    $content = str_replace('<p>Within 14 days returns</p>', '<p>Original box required</p>', $content);
    $content = str_replace('<p style="font-size: 13px; color: #777;">Within 14 days returns</p>', '<p style="font-size: 13px; color: #777;">Original box required</p>', $content);
    
    // 3. For any other "14 Days" references like in the return policy cards
    if (strpos($path, 'index.blade.php') !== false) {
        $content = str_replace('14 Days', '7 Working Days', $content);
        $content = str_replace('You have up to 14 days from the date of delivery to request a return if you change your mind.', 'You have up to 7 working days from the date of delivery to request a return if you change your mind.', $content);
        $content = str_replace('Original Condition', 'Box & Unassembled', $content);
        $content = str_replace('Items must be unused, un-assembled, and in their original factory packaging to qualify.', 'Must be in the original box. If the product is fitted or assembled, it is strictly non-returnable.', $content);
    }
    
    // 4. Also check if FAQs / Exchange have 14 days mentioned
    $content = str_replace('14 days', '7 working days', $content);
    $content = str_replace('14-day', '7 working days', $content);

    if ($original !== $content) {
        file_put_contents($path, $content);
        $count++;
    }
}

echo "Updated return policy in $count files.\n";
