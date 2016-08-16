<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Fermu statyboje";
include("config.php");


if ($id == "")
{
echo"<p align=\"center\"><small>
<b>Lentpjuves</b><br/>
$lin<br/>
Fermu: <b>$fermu</b><br/>
Aukso: <b>$aukso</b><br/>
Gelezies: <b>$gelezies</b><br/>
Medienos: <b>$medienos</b><br/>
$lin<br/>
Kaina: <b>80</b> aukso, <b>20</b> gelezies, <b>50</b> medienos.<br/>
<b>Kiek statyti:</b><br/>
<input name=\"fermos\" format=\"*N\" maxlength=\"1000\" title=\"fermos\"/><br/>
<anchor>$iconas Statyti<go href=\"fermos.php?nick=$nick&amp;pass=$pass&amp;id=statau\" method=\"post\">
    <postfield name=\"fermos\" value=\"$(fermos)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "statau")
{
$fermos = $_POST['fermos'];
$auksokaina = 80 * $fermos;
$gelezieskaina = 20 * $fermos;
$medienoskaina = 50 * $fermos;

$fermos = htmlspecialchars($fermos);

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
echo"<p align=\"center\"><small>Tu pastatei: <b>$fermos</b> fermu uz <b>$auksokaina</b> aukso, <b>$gelezieskaina</b> gelezies ir <b>$medienoskaina</b> medienos.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $fermu + $fermos;
$fpa = fopen("pastatai/fermos/$nick.txt","w");
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