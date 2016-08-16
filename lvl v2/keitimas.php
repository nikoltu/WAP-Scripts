<?php
include_once("core.php");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo"<card id=\"index\" title=\"Keitimas $dsghj\">";
$kur = "Keicia pinigus";
include("config.php"); 

if ($id == ""){ 
echo"<b>Pinigu keitejas</b><br/><br/>
<form action=\"keitimas.php?nick=$nick&amp;pass=$pass&amp;id=keiciu\" method=\"post\">
<img src=\"imgs/keiti.gif\" alt=\"bankas\"/>
<p align=\"left\"><small>$lin<br/><b>Pinigu keitimas i Kronas</b><br/>
Kursas: "; echo substr(time(), 0, 7); echo" = 1 Krona<br/></small></p>
<p align=\"left\"><small>
<b>Turi pinigu: $pinigai</b><br/>
- Kiek kronu pirksi:<br/></small>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek\"/><br/>
<input type=\"submit\" title=\"dtghj\" value=\"&#187;Keisti&#187;\"/>
<postfield name=\"kiek3\" value=\"$(kiek3)\"/>
</go><br/>

</p><p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "keiciu") {
$kiek3 = $_POST['kiek3'];
$moket = $kiek3*substr(time(), 0, 7);
if ($pinigai<$moket){ $badux = "Nepakanka pinigu!"; }
if ($badux == ""){
$badux = "Pakeista, isleidai <u>$moket</u> pinigu, gavai <u>$kiek3</u> Euru.";
$pinigai = $pinigai-$moket;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu+$kiek3);
fclose($fp);
        chmod("kronoss/$nick.txt",0777); 
} 
echo"<p align=\"left\"><small><b>$badux</b><br/>
$lin<br/>
<a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">I banka</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "imu") {
$kiek = $_POST['kiek'];
if ($kit[54]<$kiek){ $badux = "Tiek pinigu banke nera!"; }
if ($badux == ""){
$badux = "Paimta <u>$kiek</u> pinigu.";
$kit[54] = $kit[54]-$kiek;
$pinigai = $pinigai+$kiek;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small><b>$badux</b><br/>
$lin<br/>
<a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">I banka</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "dedu") {
$kiek = $_POST['kiek2'];
if ($pinigai<$kiek){ $badux = "Tiek pinigu neturi!"; }
if (1000>$kiek){ $badux = "Turi deti minimum 1000!"; }
if ($badux == ""){
$nuska = round(($kiek/100)*2,0); 
$pad = $kiek-$nuska; 
$badux = "Dejai <u>$kiek</u> pinigu. Nuskaiciuota <u>$nuska</u> uz padejima, i banka pasidejo <u>$pad</u>.";
$kit[54] = $kit[54]+$pad;
$pinigai = $pinigai-$kiek;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small><b>$badux</b><br/>
$lin<br/>
<a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">I banka</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

print'</card></wml>';

?>