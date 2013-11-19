<?php

session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size = 25;

$image_width = 120;
$image_height = 50;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 126, 0, 255); //violet
$text_color = imagecolorallocate($image, 255, 255, 255);
$noise_color = imagecolorallocate($image, 255, 228, 0); //yellow

for($x=1; $x<=30; $x++)  {

	$x1 = rand(1, 100);

	$y1 = rand(1, 100);

	$x2 = rand(1, 100);

	$y2 = rand(1, 100);
imageline($image, $x1, $y1, $x2, $y2, $noise_color);
}

imagettftext($image, $font_size, 10, 25, 45, $text_color, 'scood.ttf', $text);
imagejpeg($image);

?>