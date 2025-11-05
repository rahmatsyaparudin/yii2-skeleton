<?php
// Ambil argumen dari command-line, skip "update-skeleton"
$args = array_slice($argv, 1);

// Default perintah update skeleton
$cmd = 'composer update rahmatsyaparudin/yii2-api-skeleton';

// Tambahkan argumen tambahan jika ada
if (!empty($args)) {
    $cmd .= ' ' . implode(' ', $args);
}

echo "Running: $cmd\n";
passthru($cmd);
