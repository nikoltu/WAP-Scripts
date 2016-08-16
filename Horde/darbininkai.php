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
<b>1vergas ir 100aukso = 1darbininkas</b><br/>
$lin<br/>
Aukso: <b>$aukso</b><br/>
Darbininku: <b>$darbininku</b><br/>
Vergu: <b>$vergu</b><br/>
$lin<br/>
<b>Kiek darbininku pirksi:</b><br/>
<input name=\"keitciam\" format=\"*N\" maxlength=\"1000\" title=\"keitciam\"/><br/>
<anchor>$iconas OK<go href=\"darbininkai.php?nick=$nick&amp;pass=$pass&amp;id=keiciam\" method=\"post\">
    <postfield name=\"keitciam\" value=\"$(keitciam)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "keiciam")
{
$keitciam = $_POST['keitciam'];
$auksokaina = 100 * $keitciam;

$keitciam = htmlspecialchars($keitciam);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $keitciam)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Atlikta.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiekg = $darbininku + $keitciam;
$fpa = fopen("kariai/darbininkai/$nick.txt","w");
fwrite($fpa, "$kiekg");
fclose($fpa);

$auksax = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksax");
fclose($fpa);

$vergz = $vergu - $keitciam;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergz");
fclose($fpa);

}
 }
  }

print'</card></wml>';

?>