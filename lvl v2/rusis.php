<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo "<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Nusistato rusi...";
include("config.php");
include("us_xgrx_inf/$ka.txt");


if ($id == "") {

  echo"<p align=\"left\"><small>
<b>Turite pasirinkti savo kovojimo tipa. Sis jusu pasirinkimas jus lydes visa zaidima.</b><br/>
<img src=\"imgs/magas.gif\" alt=\"magas\"/><br/>
$ico <a href=\"rusis.php?nick=$nick&amp;pass=$pass&amp;id=magas\">Magas</a><br/>
<img src=\"imgs/karys.gif\" alt=\"karys\"/><br/>
$ico <a href=\"rusis.php?nick=$nick&amp;pass=$pass&amp;id=karys\">Karys</a><br/>
<img src=\"imgs/lankinikas.gif\" alt=\"lankinikas\"/><br/>
$ico <a href=\"rusis.php?nick=$nick&amp;pass=$pass&amp;id=lankinikas\">Lankininkas</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "karys") {
 $mm = explode("|",file_get_contents("us_xgrx_inf147258369/$nick.txt"));

if ($mm[111] > 100)
{
echo"<p align=\"left\"><small>
keisti nebegalima!<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
else
{ $mm = explode("|",file_get_contents("us_xgrx_inf147258369/$nick.txt"));

$mm[111]="$mm[111]"+"10000000";
$mm[110]="Karys";

if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu+0);
fclose($fp);
        chmod("kronoss/$nick.txt",0777);




include("icludekitainf/mm.php");

$klaida = "Sekmingai pasirinkai !";
}

  echo"<p align=\"left\"><small>
$klaida<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}


if ($id == "lankininkas") {
 $mm = explode("|",file_get_contents("us_xgrx_inf147258369/$nick.txt"));

if ($mm[111] > 100)
{
echo"<p align=\"left\"><small>
keisti nebegalima!<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
else
{ $mm = explode("|",file_get_contents("us_xgrx_inf/$nick.txt"));

$mm[111]="$mm[111]"+"10000000";
$mm[110]="Lankininkas";

if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu+0);
fclose($fp);
        chmod("kronoss/$nick.txt",0777);




include("icludekitainf/mm.php");

$klaida = "Sekmingai pasirinkai !";
}

  echo"<p align=\"left\"><small>
$klaida<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}



if ($id == "magas") {
 $mm = explode("|",file_get_contents("us_xgrx_inf/$nick.txt"));

if ($mm[111] > 100)
{
echo"<p align=\"left\"><small>
keisti nebegalima!<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
else
{ $mm = explode("|",file_get_contents("us_xgrx_inf/$nick.txt"));

$mm[111]="$mm[111]"+"10000000";
$mm[110]="Magas";

if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu+0);
fclose($fp);
        chmod("kronoss/$nick.txt",0777);




include("icludekitainf/mm.php");

$klaida = "Sekmingai pasirinkai !";
}

  echo"<p align=\"left\"><small>
$klaida<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}




echo"<b>@spawn</b><BR>";
print '</card></wml>';
?>
