<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Aukso sleptuveje";
include("config.php"); 



if ($id == ""){ 
echo"<p align=\"left\"><small>
<b>Aukso sleptuve</b><br/>
$lin<br/>
Uzkasta aukso: <u>$banke</u><br/>
Kiek atkasi:<br/>
<input name=\"kiekk\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kiekk\"/><br/>
<anchor>$iconas Atkasti<go href=\"sleptuve.php?nick=$nick&amp;pass=$pass&amp;id=atkasu\" method=\"post\">
<postfield name=\"kiekk\" value=\"$(kiekk)\"/>
</go></anchor></small><br/>-<br/>

<small>Turi aukso: <u>$aukso</u><br/>
Kiek uzkasi:<br/>
<input name=\"kiekk2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kiekk2\"/><br/>
<anchor>$iconas Uzkasti<go href=\"sleptuve.php?nick=$nick&amp;pass=$pass&amp;id=dedu\" method=\"post\">
<postfield name=\"kiekk2\" value=\"$(kiekk2)\"/>
</go></anchor></small><br/>
<small>
$lin<br/>
$iconas<a href=\"sleptuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}


if ($id == "atkasu") {
$kiekk = $_POST['kiekk'];
if ($banke<$kiekk){ $badux = "Tiek usikases neturi!"; }
if ($badux == ""){
$badux = "Atkasta <u>$kiekk</u> aukso.";
$bankmoney = $banke-$kiekk;
$auksaaz = $aukso+$kiekk;
$fp = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fp,"$auksaaz");
fclose($fp);
$fp = fopen("banke/$nick.txt","w");
fwrite($fp,"$bankmoney");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve.php?nick=$nick&amp;pass=$pass&amp;id=\">I aukso sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

if ($id == "dedu") {
$kiekk2 = $_POST['kiekk2'];
if ($aukso<$kiekk2){ $badux = "Tiek aukso neturi!"; }
if ($badux == ""){
$nuska = round($kiekk2); 
$pad = $kiekk-$nuska; 
$badux = "Uzkasei <u>$kiekk2</u> aukso.";
$kit[54] = $kit[54]+$pad;
$auksaaaz = $aukso-$kiekk2;
$bankan = $banke+$kiekk2;
$fp = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fp,"$auksaaaz");
fclose($fp);
$fp = fopen("banke/$nick.txt","w");
fwrite($fp,"$bankan");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve.php?nick=$nick&amp;pass=$pass&amp;id=\">I aukso sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

print'</card></wml>';

?>