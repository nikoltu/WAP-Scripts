<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Pilije";
include("config.php");


if ($id == "")
{
echo"<p align=\"center\"><small>
<b>Mano pilis</b><br/>
$lin<br/>
Turi XP:<b>$turixp</b><br/>
Tavo jega:<b>$tavojega</b><br/>
Tavo ginyba:<b>$tavoginyba</b><br/>
Darbininku: <b>$darbininku</b><br/>
Vergu: <b>$vergu</b><br/>
Sachtu: <b>$sachtu</b><br/>
Lentpjuviu: <b>$lentpjuviu</b><br/>
Fermu: <b>$fermu</b><br/>
Kareiviniu: <b>$kareiviniu</b><br/>
Aukso: <b>$aukso</b><br/>
Gelezies: <b>$gelezies</b><br/>
Medienos: <b>$medienos</b><br/>
$lin<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/></small></p>";
}


print'</card></wml>';

?>