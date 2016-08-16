<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"Dragon Ball GT $dsghj\">";
$kur = "Auksine pupa";
include("config.php");
include("us_xgrx_inf147258369/$ka.txt");


if ($id == "") {

  echo"<p align=\"left\"><small>
Sveiki nori pasimti tau priklausancius kreditus spausk pasimti...<br/>
BEje tik viena karta tai tegalesi pasimti :D...<br/>
<b>navigacija</b><br/>
$ico <a href=\"kre.php?nick=$nick&amp;pass=$pass&amp;id=kreo\">pasimti</a><br/>

$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}





if ($id == "kreo") {
 $mm = explode("|",file_get_contents("us_xgrx_inf147258369/$nick.txt"));

if ($mm[100] > 100)
{
echo"<p align=\"left\"><small>
ko dar nori !<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
else
{ $mm = explode("|",file_get_contents("us_xgrx_inf147258369/$nick.txt"));

$mm[100]="$mm[100]"+"10000000";


if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu+5);
fclose($fp);
        chmod("kronoss/$nick.txt",0777);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);


include("icludekitainf/mm.php");

$klaida = "Sekmingai iskeitei !";
}

  echo"<p align=\"left\"><small>
$klaida<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}





echo"<div class=\"table\"> <b>@ZiPO</b></div><BR>";
?>
</body>
</html>