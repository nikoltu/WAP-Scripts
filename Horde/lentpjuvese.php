<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Lentpjuvese";
include("config.php");

if ($id == "")
{
echo"<p align=\"center\"><small>
Lentpjuves<b>[$lentpjuviu]</b><br/>
$lin<br/>
Lentpjuvese laisvu vietu: <b>$lentpjuvesevietu</b><br/>
Lentpjuvese dirba: <b>$lentpjuvininku</b><br/>
Darbininku: <b>$darbininku</b><br/>
$lin<br/>
<b>Kiek statyti:</b><br/>
<input name=\"kiekilentpjuves\" format=\"*N\" maxlength=\"1000\" title=\"kiekilentpjuves\"/><br/>
<anchor>$iconas OK<go href=\"lentpjuvese.php?nick=$nick&amp;pass=$pass&amp;id=siunciu\" method=\"post\">
    <postfield name=\"kiekilentpjuves\" value=\"$(kiekilentpjuves)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}







if ($id == "siunciu")
{
$kiekilentpjuves = $_POST['kiekilentpjuves'];

$kiekilentpjuves = htmlspecialchars($kiekilentpjuves);

include("tsr.php");


if ($lentpjuvesevietu < $kiekilentpjuves)
{
echo"<p align=\"center\"><small>Neuztenka vietu lentpjuvese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($darbininku < $kiekilentpjuves)
{
echo"<p align=\"center\"><small>Neuztenka darbininku!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Atlikta.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $lentpjuvininku + $kiekilentpjuves;
$fpa = fopen("kariai/lentpjuviai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$barbininkaz = $darbininku - $kiekilentpjuves;
$fpa = fopen("kariai/darbininkai/$nick.txt","w");
fwrite($fpa, "$barbininkaz");
fclose($fpa);

}
 }
  }







print'</card></wml>';

?>