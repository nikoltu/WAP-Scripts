<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Medienos sleptuveje";
include("config.php"); 



if ($id == ""){ 
echo"<p align=\"left\"><small>
<b>Medienos sleptuve</b><br/>
$lin<br/>
Uzkasta medienos: <u>$sleptuvejemed</u><br/>
Kiek atkasi:<br/>
<input name=\"kieg\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kieg\"/><br/>
<anchor>$iconas Atkasti<go href=\"sleptuve2.php?nick=$nick&amp;pass=$pass&amp;id=atkasu\" method=\"post\">
<postfield name=\"kieg\" value=\"$(kieg)\"/>
</go></anchor></small><br/>-<br/>

<small>Turi medienos: <u>$medienos</u><br/>
Kiek uzkasi:<br/>
<input name=\"kieg2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kieg2\"/><br/>
<anchor>$iconas Uzkasti<go href=\"sleptuve2.php?nick=$nick&amp;pass=$pass&amp;id=dedu\" method=\"post\">
<postfield name=\"kieg2\" value=\"$(kieg2)\"/>
</go></anchor></small><br/>
<small>
$lin<br/>
$iconas<a href=\"sleptuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}


if ($id == "atkasu") {
$kieg = $_POST['kieg'];
if ($sleptuvejemed < $kieg){ $badux = "Tiek usikases neturi!"; }
if ($badux == ""){
$badux = "Atkasta <u>$kieg</u> medienos.";
$sleptmed = $sleptuvejemed -$kieg;
$medienazz = $medienos+$kieg;
$fp = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fp,"$medienazz");
fclose($fp);
$fp = fopen("banke/mediena/$nick.txt","w");
fwrite($fp,"$sleptmed");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve2.php?nick=$nick&amp;pass=$pass&amp;id=\">I medienos sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

if ($id == "dedu") {
$kieg2 = $_POST['kieg2'];
if ($medienos < $kieg2){ $badux = "Tiek medienos neturi!"; }
if ($badux == ""){
$nuska = round($kieg2); 
$pad = $kieg2-$nuska; 
$badux = "Uzkasei <u>$kieg2</u> medienos.";
$kit[54] = $kit[54]+$pad;
$medena = $medienos-$kieg2;
$sleptuvenmed = $sleptuvejemed + $kieg2;
$fp = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fp,"$medena");
fclose($fp);
$fp = fopen("banke/mediena/$nick.txt","w");
fwrite($fp,"$sleptuvenmed");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve2.php?nick=$nick&amp;pass=$pass&amp;id=\">I medienos sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

print'</card></wml>';

?>