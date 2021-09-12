<?php
$fl = $_GET['path'] ?? 'default.jpg';

$flag = false;
$dir = new DirectoryIterator('./doc/');

foreach ($dir as $file) {
    if ($file->isFile() && $file->getFilename() === $fl) {
        $fl = $file->getFilename();
        $flag = true;
        break;
    }
}

if (!$flag) {
    die('不正な要求です。');
}

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$fl.'"');
print file_get_contents("./doc/{$fl}");