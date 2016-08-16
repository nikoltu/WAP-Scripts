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
<b>Karo laukas</b><br/>
$lin<br/>
Karo lauke kariu: <b>$karolaukekovoja</b><br/>
Aukso: <b>$aukso</b><br/>
Gelezies: <b>$gelezies</b><br/>
Medienos: <b>$medienos</b><br/>
$lin<br/>
Kaina: <b>150</b> aukso, <b>50</b> gelezies, <b>30</b> medienos, <b>1</b> darbininko vienam 1 samdomam kariui nupirkti.<br/>
<b>Kiek:</b><br/>
<input name=\"kiiek\" format=\"*N\" maxlength=\"1000\" title=\"kiiek\"/><br/>
<anchor>$iconas Statyti<go href=\"karo_laukas.php?nick=$nick&amp;pass=$pass&amp;id=pirkti\" method=\"post\">
    <postfield name=\"kiiek\" value=\"$(kiiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "pirkti")
{
$kiiek = $_POST['kiiek'];
$auksokainaa = 150 * $kiiek;
$gelezieskainaa = 50 * $kiiek;
$medienoskainaa = 30 * $kiiek;

$kiiek = htmlspecialchars($kiiek);

include("tsr.php");

if ($aukso < $auksokainaa || $medienos < $medienoskainaa || $gelezies < $gelezieskainaa)
{
echo"<p align=\"center\"><small>Neuztenka resursu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($darbininku < $kiiek)
{
echo"<p align=\"center\"><small>!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Atlikta.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiekk = $karolaukekovoja + $kiiek;
$fpa = fopen("kariai/karolauke/$nick.txt","w");
fwrite($fpa, "$kiekk");
fclose($fpa);

$auksazz = $aukso - $auksokainaa;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksazz");
fclose($fpa);

$geleziezz = $gelezies - $gelezieskainaa;
$fpa = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fpa, "$geleziezz");
fclose($fpa);

$medienozz = $medienos - $medienoskainaa;
$fpa = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fpa, "$medienozz");
fclose($fpa);



}
 }
  }

print'</card></wml>';

?>