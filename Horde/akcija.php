<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Akcijoje"; 
include("config.php");

if ($id == "")
{
      echo"<p align=\"center\"><small>

SMS: <b>$sms10 $nick akcija</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina10</b><br/>
Kristalu: <b>40</b><br/>

$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}


print'</card></wml>';

?>