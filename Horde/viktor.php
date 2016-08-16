<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Valo viktorina"; 
include("config.php"); 
if ($id == "") 
 
{
    if ($stat != "mod")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
    }
    else
    {

$fp = fopen("txt/zinutes2.txt","w");
fwrite($fp,"@SISTEMA|$vrd isvale viktorina!|\n");
fclose($fp);

echo"<p align=\"left\"><small>Viktorina isvalyta!<br/>
$lin<br/>
$iconas<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorina</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>"; 
}
}

print'</card></wml>';

?>