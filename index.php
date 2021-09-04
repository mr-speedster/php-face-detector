<?php

include "FaceDetector.php";

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect('moon.jpg');
$detector->toJpeg();

?>
