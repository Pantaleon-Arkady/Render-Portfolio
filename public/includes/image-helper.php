<?php

function getOrientationClass($imagePath) {
    if (!file_exists($imagePath)) {
        return 'unknown';
    }

    [$width, $height] = getimagesize($imagePath);

    if ($width > $height) {
        return 'landscape';
    } elseif ($height > $width) {
        return 'portrait';
    } else {
        return 'square';
    }
}
?>