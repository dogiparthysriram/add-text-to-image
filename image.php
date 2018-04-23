<?php
    header("Content-type: image/jpeg");
    $imgPath = 'image.jpg';
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 255, 255, 255);
    $string = "this is sriram";
    $fontSize = 3;
    $x = 115;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);
?>