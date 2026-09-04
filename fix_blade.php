<?php
$file = 'resources/views/frontend/pages/contact.blade.php';
$content = file_get_contents($file);
$content = preg_replace('/\{\{\s*ext\{\$data->(address|phone|email)\}\}\}/', '{{$data->$1}}', $content);
// Just in case it has actual tabs:
$content = preg_replace('/\{\{\t?ext\{\$data->(address|phone|email)\}\}\}/', '{{$data->$1}}', $content);
// If it has \text:
$content = preg_replace('/\{\{\\\text\{\$data->(address|phone|email)\}\}\}/', '{{$data->$1}}', $content);
file_put_contents($file, $content);
echo "Fixed contact blade syntax.\n";
