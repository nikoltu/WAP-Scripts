<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Sleptuvese";
include("config.php"); 



if ($id == ""){ 
echo"<p align=\"left\"><small>
<b>Pasirinkite sleptuve i kuria eisite</b><br/>
$lin<br/>
$iconas<a href=\"sleptuve.php?nick=$nick&amp;pass=$pass&amp;id=\">Aukso sleptuve</a><br/>
$iconas<a href=\"sleptuve2.php?nick=$nick&amp;pass=$pass&amp;id=\">Medienos sleptuve</a><br/>
$iconas<a href=\"sleptuve3.php?nick=$nick&amp;pass=$pass&amp;id=\">Gelezies sleptuve</a><br/>
$lin<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a>
</small></p>";
}

print'</card></wml>';

?>