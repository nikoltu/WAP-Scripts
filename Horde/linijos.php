<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Keiciasi linijas";
include("config.php");
if ($id == "")
{
echo"<p align=\"left\"><small>"; 
if ($stat == "mod" or $vrd == "@$nick")
{
echo"Liniju keitimas.";
}
else
{
echo"Liniju keitimas.";
}
echo"<br/>
$lin<br/>
<input name=\"topic\" type=\"text\" maxlength=\"20\" title=\"Topicas\"/><br/>
<anchor>$iconas Keisti<go href=\"linijos.php?nick=$nick&amp;pass=$pass&amp;id=keiciu\" method=\"post\">
    <postfield name=\"topic\" value=\"$(topic)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}

if ($id == "keiciu")
{
$topic = $_POST['topic'];

$topic = htmlspecialchars($topic);
$topic = str_replace("$","",$topic);
$topic = str_replace("{","",$topic);
$topic = str_replace("}","",$topic);
$topic = str_replace("|","",$topic);

include("tsr.php");

if (substr_count($topic, "<img src=")>2)
{
echo"<p align=\"left\"><small>Parasei per daug smailu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kreditai < 0 && $stat=="Narys")
{
echo"<p align=\"left\"><small>Neuztenka litu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"left\"><small>Linijos pakeistos!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";


$fpa = fopen("txt/linijos/$nick.txt","w");
fwrite($fpa, "$topic");
fclose($fpa);
}
 }
  }

print'</card></wml>';

?>