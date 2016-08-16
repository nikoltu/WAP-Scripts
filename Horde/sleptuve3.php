<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Gelezies sleptuveje";
include("config.php"); 



if ($id == ""){ 
echo"<p align=\"left\"><small>
<b>Gelezies sleptuve</b><br/>
$lin<br/>
Uzkasta gelezies: <u>$sleptgelez</u><br/>
Kiek atkasi:<br/>
<input name=\"kieks\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kieks\"/><br/>
<anchor>$iconas Atkasti<go href=\"sleptuve3.php?nick=$nick&amp;pass=$pass&amp;id=atkasu\" method=\"post\">
<postfield name=\"kieks\" value=\"$(kieks)\"/>
</go></anchor></small><br/>-<br/>

<small>Turi gelezies: <u>$gelezies</u><br/>
Kiek uzkasi:<br/>
<input name=\"kieks2\" type=\"text\" format=\"*N\" maxlength=\"1000\" title=\"kieks2\"/><br/>
<anchor>$iconas Uzkasti<go href=\"sleptuve3.php?nick=$nick&amp;pass=$pass&amp;id=dedu\" method=\"post\">
<postfield name=\"kieks2\" value=\"$(kieks2)\"/>
</go></anchor></small><br/>
<small>
$lin<br/>
$iconas<a href=\"sleptuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}


if ($id == "atkasu") {
$kieks = $_POST['kieks'];
if ($sleptgelez < $kieks){ $badux = "Tiek usikases neturi!"; }
if ($badux == ""){
$badux = "Atkasta <u>$kieks</u> gelezies.";
$sleptagelezis = $sleptgelez-$kieks;
$gelezzizz = $gelezies+$kieks;
$fp = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fp,"$gelezzizz");
fclose($fp);
$fp = fopen("banke/gelezis/$nick.txt","w");
fwrite($fp,"$sleptagelezis");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve3.php?nick=$nick&amp;pass=$pass&amp;id=\">I gelezies sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

if ($id == "dedu") {
$kieks2 = $_POST['kieks2'];
if ($gelezies < $kieks2){ $badux = "Tiek gelezies neturi!"; }
if ($badux == ""){
$nuska = round($kieks2); 
$pad = $kieks2-$nuska; 
$badux = "Uzkasei <u>$kieks2</u> gelezies.";
$kit[54] = $kit[54]+$pad;
$geleziuks = $gelezies-$kieks2;
$uzkasgelez = $sleptgelez+$kieks2;
$fp = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fp,"$geleziuks");
fclose($fp);
$fp = fopen("banke/gelezis/$nick.txt","w");
fwrite($fp,"$uzkasgelez");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"left\"><small>$badux<br/>
$lin<br/>
$iconas<a href=\"sleptuve3.php?nick=$nick&amp;pass=$pass&amp;id=\">I gelezies sleptuve</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

print'</card></wml>';

?>