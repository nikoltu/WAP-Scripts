<?php 
header("Content-type: image/png");
header("Cache-control: no-store,no-cache,must-revalidate");
$im = imagecreate(102,5);
$ka= $_GET['ka']*3; 

$melyna=imagecolorallocate($im,100,140,200);
imagefilledrectangle($im, 0, 0, 102, 5, $melyna); 

$juoda=imagecolorallocate($im,000,000,000); 
imagerectangle($im, 0, 0, 101, 4, $juoda); 

$raudona = imagecolorallocate($im,200,200,000); 
if ($ka != 0){ 
Imagefilledrectangle($im,1,1,$ka,3,$raudona); }

imagepng($im); 
imagedestroy($im); 


?>