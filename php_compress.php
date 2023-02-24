<?php

// Define the path to the original image
$original_image = 'WallPaper3.jpg';

// Define the path to the compressed image
$compressed_image = 'compressed/compressed_image.jpg';

// Get the image dimensions
list($width, $height) = getimagesize($original_image);

// Create a new image with the same dimensions
$new_image = imagecreatetruecolor($width, $height);

// Load the original image
$original = imagecreatefromjpeg($original_image);

// Copy and resize the original image to the new image
imagecopyresized($new_image, $original, 0, 0, 0, 0, $width, $height, $width, $height);

// Compress the new image and save it as a JPEG with a quality of 75%
imagejpeg($new_image, $compressed_image, 75);

// Free up memory
imagedestroy($new_image);
imagedestroy($original);

?>