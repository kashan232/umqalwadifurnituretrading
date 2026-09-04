<?php
$search_str = 'UMQ AL WADI FURNITURE TRADING';
$replace_str = 'UMQ AL WADI FURNITURE TRADING';
$exclude_dirs = ['.git', 'vendor', 'storage', 'node_modules', '.github'];
$exclude_exts = ['png', 'jpg', 'jpeg', 'gif', 'ico', 'zip', 'pdf', 'woff', 'woff2', 'ttf', 'eot', 'phar'];

$iter = new RecursiveIteratorIterator(
    new RecursiveCallbackFilterIterator(
        new RecursiveDirectoryIterator('.'),
        function ($file, $key, $iterator) use ($exclude_dirs) {
            if ($iterator->hasChildren() && !in_array($file->getFilename(), $exclude_dirs)) {
                return true;
            }
            if (!$iterator->hasChildren()) return true;
            return false;
        }
    )
);

foreach ($iter as $file) {
    if ($file->isFile()) {
        $ext = $file->getExtension();
        if (in_array(strtolower($ext), $exclude_exts)) continue;
        
        $path = $file->getPathname();
        if ($path == '.\search.php') continue;

        $content = @file_get_contents($path);
        if ($content !== false && stripos($content, $search_str) !== false) {
            echo "Found in: " . $path . PHP_EOL;
            // Case-insensitive replace but preserve case if possible, or just replace all matches with $replace_str
            $new_content = str_ireplace($search_str, $replace_str, $content);
            file_put_contents($path, $new_content);
            echo "Replaced in: " . $path . PHP_EOL;
        }
    }
}
echo "Done.\n";
