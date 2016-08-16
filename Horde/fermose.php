<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Fermose";
include("config.php");

if ($id == "")
{
echo"<p align=\"center\"><small>
Fermos<b>[$fermu]</b><br/>
$lin<br/>
Fermose laisvu vietu: <b>$fermosevietu</b><br/>
Fermose dirba: <b>$fermeriu</b><br/>
Darbininku: <b>$darbininku</b><br/>
$lin<br/>
<b>Kiek darbininku i fermas:</b><br/>
<input name=\"kiekdarbininku\" format=\"*N\" maxlength=\"1000\" title=\"kiekdarbininku\"/><br/>
<anchor>$iconas OK<go href=\"fermose.php?nick=$nick&amp;pass=$pass&amp;id=siunciu\" method=\"post\">
    <postfield name=\"kiekdarbininku\" value=\"$(kiekdarbininku)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}







if ($id == "siunciu")
{
$kiekdarbininku = $_POST['kiekdarbininku'];

$kiekdarbininku = htmlspecialchars($kiekdarbininku);

include("tsr.php");



if ($fermosevietu < $kiekdarbininku)
{
echo"<p align=\"center\"><small>Neuztenka vietu fermose!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($darbininku < $kiekdarbininku)
{
echo"<p align=\"center\"><small>Neuztenka darbininku!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Atlikta<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $fermeriu + $kiekdarbininku;
$fpa = fopen("kariai/fermeriai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$darbininkaz = $darbininku - $kiekdarbininku;
$fpa = fopen("kariai/darbininkai/$nick.txt","w");
fwrite($fpa, "$darbininkaz");
fclose($fpa);

}
 }
  }







print'</card></wml>';

?>