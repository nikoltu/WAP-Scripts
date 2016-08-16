<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Keicia topica";
include("config.php");


if ($id == "")
{
echo"<p align=\"center\"><small>
<b>Lentpjuves</b><br/>
$lin<br/>
Lentpjuviu: <b>$lentpjuviu</b><br/>
Aukso: <b>$aukso</b><br/>
Gelezies: <b>$gelezies</b><br/>
Medienos: <b>$medienos</b><br/>
$lin<br/>
Kaina: <b>100</b> aukso, <b>30</b> gelezies, <b>130</b> medienos.<br/>
<b>Kiek statyti:</b><br/>
<input name=\"lentpjuves\" format=\"*N\" maxlength=\"1000\" title=\"lentpjuves\"/><br/>
<anchor>$iconas Statyti<go href=\"lentpjuves.php?nick=$nick&amp;pass=$pass&amp;id=statau\" method=\"post\">
    <postfield name=\"lentpjuves\" value=\"$(lentpjuves)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "statau")
{
$lentpjuves = $_POST['lentpjuves'];
$auksokaina = 100 * $lentpjuves;
$gelezieskaina = 30 * $lentpjuves;
$medienoskaina = 130 * $lentpjuves;

$lentpjuves = htmlspecialchars($lentpjuves);

include("tsr.php");

if ($aukso < $auksokaina || $medienos < $medienoskaina || $gelezies < $gelezieskaina)
{
echo"<p align=\"center\"><small>Neuztenka resursu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if (0 > $gelezies)
{
echo"<p align=\"center\"><small>!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$lentpjuves</b> lentpjuviu uz <b>$auksokaina</b> aukso, <b>$gelezieskaina</b> gelezies ir <b>$medienoskaina</b> medienos.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $lentpjuviu + $lentpjuves;
$fpa = fopen("pastatai/lentpjuves/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);

$geleziez = $gelezies - $gelezieskaina;
$fpa = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fpa, "$geleziez");
fclose($fpa);

$medienoz = $medienos - $medienoskaina;
$fpa = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fpa, "$medienoz");
fclose($fpa);



}
 }
  }

print'</card></wml>';

?>