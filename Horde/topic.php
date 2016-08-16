<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Keicia topica";
include("config.php");
if ($id == "")
{
echo"<p align=\"left\"><small>"; 
if ($stat == "mod" or $vrd == "@$nick")
{
echo"Topic pakeitimas NEMOKAMAS.";
}
else
{
echo"Topic pakeitimas kainuoja 0.5kristalu.";
}
echo"<br/>
-<br/>
<input name=\"topic\" type=\"text\" maxlength=\"1000\" title=\"Topicas\"/><br/>
<anchor>[&#187;] Keisti<go href=\"topic.php?nick=$nick&amp;pass=$pass&amp;id=keiciu\" method=\"post\">
    <postfield name=\"topic\" value=\"$(topic)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
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

if (substr_count($topic, "<img src=")>4)
{
echo"<p align=\"left\"><small>Parasei per daug smailu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}
else
{
if ($kreditai < 0.5 && $stat=="Narys")
{
echo"<p align=\"left\"><small>Neuztenka kristalu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"left\"><small>Topic pakeistas!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";

if ($stat=="Narys")
{
$kredits = "$kreditai "-"0.5";

$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kredits");
fclose($fp);
}
$fpa = fopen("txt/topic.txt","w");
fwrite($fpa, "$topic");
fclose($fpa);
}
$fpa = fopen("txt/topic_keitejas.txt","w");
fwrite($fpa, "$nick");
fclose($fpa);
$fpa = fopen("txt/topic_keitejo.txt","w");
fwrite($fpa, "$vrd");
fclose($fpa);
 }
  }

print'</card></wml>';

?>