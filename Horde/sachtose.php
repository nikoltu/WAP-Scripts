<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Sachtose";
include("config.php");

if ($id == "")
{
echo"<p align=\"center\"><small>
Sachtos<b>[$sachtu]</b><br/>
$lin<br/>
Sachtose laisvu vietu: <b>$sachtosevietu</b><br/>
Sachtose dirba: <b>$sachtininku</b><br/>
Darbininku: <b>$darbininku</b><br/>
$lin<br/>
<b>Kiek statyti:</b><br/>
<input name=\"kiekisachtas\" format=\"*N\" maxlength=\"1000\" title=\"kiekisachtas\"/><br/>
<anchor>$iconas OK<go href=\"sachtose.php?nick=$nick&amp;pass=$pass&amp;id=siunciu\" method=\"post\">
    <postfield name=\"kiekisachtas\" value=\"$(kiekisachtas)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}







if ($id == "siunciu")
{
$kiekisachtas = $_POST['kiekisachtas'];

$kiekisachtas = htmlspecialchars($kiekisachtas);

include("tsr.php");


if ($sachtosevietu < $kiekisachtas)
{
echo"<p align=\"center\"><small>Neuztenka vietu lentpjuvese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($darbininku < $kiekisachtas)
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

$kiek = $sachtininku + $kiekisachtas;
$fpa = fopen("kariai/sachtininkai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$barbininkaz = $darbininku - $kiekisachtas;
$fpa = fopen("kariai/darbininkai/$nick.txt","w");
fwrite($fpa, "$barbininkaz");
fclose($fpa);

}
 }
  }







print'</card></wml>';

?>