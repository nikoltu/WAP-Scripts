<?php
// Nurodyti faila:
$src_file = "1.gif";
// Nurodyti kur rasomi duomenys:
$file = "skaitliukas.txt";

$datei = date('H:i:s');
$date = date("Y/m/d");
$data = fopen($file, "r");
$count = fread($data, filesize($file)); fclose($data);
$count = explode("|", $count);

$ip = $REMOTE_ADDR; // Duomenys rusiuojami pagal IP.
$duomenys = "skaitliukas.txt"; // Irasymo duomenys.
$time_out = 120; // Kas kiek laiko tikrins (Sekund.)
$time = time(); // Dabartinis laikas.
$timeout = $time - $time_out; // Tikrinimo laikas.

$arr = file($duomenys);$h = fopen($duomenys, "a");
$fp_isvaloma = fopen ($duomenys, "w+");
fwrite ($fp_isvaloma, "");fclose ($fp_isvaloma);
for($i = 0; $i < count($arr); $i++){
list($name, $time_failo) = explode("|", $arr[$i]);
if ($name != ""){if ($name != $ip){
if ($time_failo > $timeout){fwrite ($h, $arr[$i]);
}}}}fclose ($h);$irasas = "$ip|$time|\n";
$fp_irasas = fopen ($duomenys, "a+");
fwrite ($fp_irasas, $irasas);fclose ($fp_irasas);
$failas = $duomenys;$arr = file($failas);
$online_skaicius = count($arr);

// Online by Ozas
// Count by @Trixas
// Daugiau ávairiø skriptø tinklapyje trixas.tik.lt
// Jeigu rasite sistemoje klaidu praðome praneðti mums.

$ip = $REMOTE_ADDR; // Duomenys rusiuojami pagal IP.
$duomenys = "online.txt"; // Irasymo duomenys.
$time_out = 120; // Kas kiek laiko tikrins (Sekund.)
$time = time(); // Dabartinis laikas.
$timeout = $time - $time_out; // Tikrinimo laikas.

$arr = file($duomenys);$h = fopen($duomenys, "a");
$fp_isvaloma = fopen ($duomenys, "w+");
fwrite ($fp_isvaloma, "");fclose ($fp_isvaloma);
for($i = 0; $i < count($arr); $i++){
list($name, $time_failo) = explode("|", $arr[$i]);
if ($name != ""){if ($name != $ip){
if ($time_failo > $timeout){fwrite ($h, $arr[$i]);
}}}}fclose ($h);$irasas = "$ip|$time|\n";
$fp_irasas = fopen ($duomenys, "a+");
fwrite ($fp_irasas, $irasas);fclose ($fp_irasas);
$failas = $duomenys;$arr = file($failas);
$online_skaicius = count($arr);



if($count[2] < $date)
{
	$count[0] = 1; $count[2] = $date;
}
	else{$count[0] = $count[0] + 1;
}
$count[1] = $count[1] + 1;
$siandien = $count[0]; $viso = $count[1];
$count = "$count[0]|$count[1]|$count[2]";
$open = fopen($file, "w+");
fwrite($open, $count);
fclose($open);

$src = ImageCreateFromGif($src_file);
$text = ImageColorAllocate($src, 715, 715, 250);

ImageString($src, 1, 13, 1, "          $viso", $text);
ImageString($src, 1, 12, 10, "          +$siandien", $text);
ImageString($src, 1, 32, 18, "      ON:$online_skaicius", $text);
ImageString($src, 1, -45, 0, "          $datei", $text);


$text = ImageColorAllocate($src, 1, 1, 400);  #red
ImageString($src, 1, 1, 23, "Legend", $text);
header("Content-type: image/gif");
ImageGif($src); ImageDestroy($src);
?>