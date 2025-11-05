<?php
$vendorPath = __DIR__ . '/../vendor/rahmatsyaparudin/yii2-api-skeleton/';
$rootPath = __DIR__ . '/../';

function copyDir($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    $skipFiles = ['composer.json', 'README.md', '.env'];

    while(false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            $srcPath = "$src/$file";
            $dstPath = "$dst/$file";

            // Kecualikan composer.json
            if (in_array($file, $skipFiles)) {
                continue;
            }

            if (is_dir($srcPath)) {
                copyDir($srcPath, $dstPath);
            } else {
                copy($srcPath, $dstPath);
            }
        }
    }

    closedir($dir);
}

copyDir($vendorPath, $rootPath);
echo "Skeleton installed/updated successfully.\n";
