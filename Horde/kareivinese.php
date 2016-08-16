<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Kareivinese";
include("config.php");


if ($id == "")
{
echo"<p align=\"center\"><small>
Kareivines<b>[$kareiviniu]</b><br/>
$lin<br/>
Aukso: <b>$aukso</b><br/>
Vergu: <b>$vergu</b><br/>
Kareivinese laisvu vietu: <b>$kareivinesevietu</b><br/>
$lin<br/>
Lankininku: <b>$lankininku</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Lankininku\">[Pirkti]</a>
<br/>
Riteriu: <b>$riteriu</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Riteriu\">[Pirkti]</a>
<br/>
Padegeju: <b>$padegeju</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Padegeju\">[Pirkti]</a>
<br/>
Sunkiuju riteriu: <b>$sunkiujuriteriu</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Sunkiujuriteriu\">[Pirkti]</a>
<br/>
Ietininku: <b>$ietininku</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Ietininku\">[Pirkti]</a>
<br/>
Lankininku su kardais: <b>$lankininkusukardais</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Lankininkusukardais\">[Pirkti]</a>
<br/>
Raiteliu: <b>$raiteliu</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Raiteliu\">[Pirkti]</a>
<br/>
Sakalininku: <b>$sakalininku</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Sakalininku\">[Pirkti]</a>
<br/>
Kariu su arbaletais: <b>$kariusuarbaletais</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Kariusuarbaletais\">[Pirkti]</a>
<br/>
Negru: <b>$negru</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Negru\">[Pirkti]</a>
<br/>
Kariu su kuokomis: <b>$kariusukuokomis</b>
<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=Kariusukuokomis\">[Pirkti]</a>
<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}







if ($id == "Lankininku")
{
echo"<p align=\"center\"><small>
<b>Lankininku pirkimas</b><br/>
$lin<br/>
Lankininku: <b>$lankininku</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>10</b> aukso.<br/>
<b>Kiek statyti:</b><br/>
<input name=\"kariukiek\" format=\"*N\" maxlength=\"1000\" title=\"kariukiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku1\" method=\"post\">
    <postfield name=\"kariukiek\" value=\"$(kariukiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}

if ($id == "Riteriu")
{
echo"<p align=\"center\"><small>
<b>Riteriu pirkimas</b><br/>
$lin<br/>
Riteriu: <b>$riteriu</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>20</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariaikiek\" format=\"*N\" maxlength=\"1000\" title=\"kariaikiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku2\" method=\"post\">
    <postfield name=\"kariaikiek\" value=\"$(kariaikiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Padegeju")
{
echo"<p align=\"center\"><small>
<b>Padegeju pirkimas</b><br/>
$lin<br/>
Padegeju: <b>$padegeju</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>30</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"karizkiek\" format=\"*N\" maxlength=\"1000\" title=\"karizkiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku3\" method=\"post\">
    <postfield name=\"karizkiek\" value=\"$(karizkiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}


if ($id == "Sunkiujuriteriu")
{
echo"<p align=\"center\"><small>
<b>Sunkiuju riteriu pirkimas</b><br/>
$lin<br/>
Sunkiuju riteriu: <b>$sunkiujuriteriu</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>50</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariuzkiek\" format=\"*N\" maxlength=\"1000\" title=\"kariuzkiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku4\" method=\"post\">
    <postfield name=\"kariuzkiek\" value=\"$(kariuzkiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Ietininku")
{
echo"<p align=\"center\"><small>
<b>Ietininku pirkimas</b><br/>
$lin<br/>
Ietininku: <b>$ietininku</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>60</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kareiviaikiek\" format=\"*N\" maxlength=\"1000\" title=\"kareiviaikiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku5\" method=\"post\">
    <postfield name=\"kareiviaikiek\" value=\"$(kareiviaikiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}

if ($id == "Lankininkusukardais")
{
echo"<p align=\"center\"><small>
<b>Lankininku su kardais pirkimas</b><br/>
$lin<br/>
Lankininku su kardais: <b>$lankininkusukardais</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>80</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kareivizkiek\" format=\"*N\" maxlength=\"1000\" title=\"kareivizkiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku6\" method=\"post\">
    <postfield name=\"kareivizkiek\" value=\"$(kareivizkiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Raiteliu")
{
echo"<p align=\"center\"><small>
<b>Raiteliu pirkimas</b><br/>
$lin<br/>
Raiteliu: <b>$raiteliu</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>100</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariokiek\" format=\"*N\" maxlength=\"1000\" title=\"kariokiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku7\" method=\"post\">
    <postfield name=\"kariokiek\" value=\"$(kariokiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Sakalininku")
{
echo"<p align=\"center\"><small>
<b>Sakalininku pirkimas</b><br/>
$lin<br/>
Sakalininku: <b>$sakalininku</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>110</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariukukiek\" format=\"*N\" maxlength=\"1000\" title=\"kariukukiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku8\" method=\"post\">
    <postfield name=\"kariukukiek\" value=\"$(kariukukiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Kariusuarbaletais")
{
echo"<p align=\"center\"><small>
<b>Kariu su arbaletais pirkimas</b><br/>
$lin<br/>
Kariu su arbaletais: <b>$kariusuarbaletais</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>140</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kaleiviaikiek\" format=\"*N\" maxlength=\"1000\" title=\"kaleiviaikiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku9\" method=\"post\">
    <postfield name=\"kaleiviaikiek\" value=\"$(kaleiviaikiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Negru")
{
echo"<p align=\"center\"><small>
<b>Negru pirkimas</b><br/>
$lin<br/>
Negru: <b>$negru</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>150</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariuukiek\" format=\"*N\" maxlength=\"1000\" title=\"kariuukiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku10\" method=\"post\">
    <postfield name=\"kariuukiek\" value=\"$(kariuukiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}



if ($id == "Kariusukuokomis")
{
echo"<p align=\"center\"><small>
<b>Kariu su kuokomis pirkimas</b><br/>
$lin<br/>
Kariu su kuokomis: <b>$kariusukuokomis</b><br/>
Aukso: <b>$aukso</b><br/>
$lin<br/>
Kaina: <b>200</b> aukso.<br/>
<b>Kiek:</b><br/>
<input name=\"kariuuukiek\" format=\"*N\" maxlength=\"1000\" title=\"kariuuukiek\"/><br/>
<anchor>$iconas OK<go href=\"kareivinese.php?nick=$nick&amp;pass=$pass&amp;id=perku11\" method=\"post\">
    <postfield name=\"kariuuukiek\" value=\"$(kariuuukiek)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}





if ($id == "perku1")
{
$kariukiek = $_POST['kariukiek'];

$auksokaina = 10 * $kariukiek;

$kariukiek = htmlspecialchars($kariukiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariukiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariukiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$kariukiek</b> lankininku uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $lankininku + $kariukiek;
$fpa = fopen("kariai/lankininkai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariukiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}







if ($id == "perku2")
{
$kariaikiek = $_POST['kariaikiek'];

$auksokaina = 20 * $kariaikiek;

$kariaikiek = htmlspecialchars($kariaikiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$kariaikiek</b> riteriu uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $riteriu + $kariaikiek;
$fpa = fopen("kariai/riteriai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariaikiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}






if ($id == "perku3")
{
$karizkiek = $_POST['karizkiek'];

$auksokaina = 30 * $karizkiek;

$karizkiek = htmlspecialchars($karizkiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $karizkiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $karizkiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$karizkiek</b> padegeju uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $padegeju + $karizkiek;
$fpa = fopen("kariai/padegejai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $karizkiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}



if ($id == "perku4")
{
$kariuzkiek = $_POST['kariuzkiek'];

$auksokaina = 50 * $kariuzkiek;

$kariuzkiek = htmlspecialchars($kariuzkiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariuzkiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariuzkiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$kariuzkiek</b> sunkiuju riteriu uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $sunkiujuriteriu + $kariuzkiek;
$fpa = fopen("kariai/sunkiejiriteriai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariuzkiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}




if ($id == "perku5")
{
$kareiviaikiek = $_POST['kareiviaikiek'];

$auksokaina = 60 * $kareiviaikiek;

$kareiviaikiek = htmlspecialchars($kareiviaikiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kareiviaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kareiviaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$kareiviaikiek</b> ietininku riteriu uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $ietininku + $kareiviaikiek;
$fpa = fopen("kariai/ietininkai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kareiviaikiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}


if ($id == "perku6")
{
$kareivizkiek = $_POST['kareivizkiek'];

$auksokaina = 80 * $kareivizkiek;

$kareivizkiek = htmlspecialchars($kareivizkiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kareivizkiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kareivizkiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu pastatei: <b>$kareivizkiek</b> lankininku su kardais uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $lankininkusukardais + $kareivizkiek;
$fpa = fopen("kariai/lankininkaisukardais/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kareivizkiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}


if ($id == "perku7")
{
$kariokiek = $_POST['kariokiek'];

$auksokaina = 100 * $kariokiek;

$kariokiek = htmlspecialchars($kariokiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariokiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariokiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu nupirkai: <b>$kariokiek</b> raiteliu uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $raiteliu + $kariokiek;
$fpa = fopen("kariai/raiteliai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariokiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}


if ($id == "perku8")
{
$kariukukiek = $_POST['kariukukiek'];

$auksokaina = 110 * $kariukukiek;

$kariukukiek = htmlspecialchars($kariukukiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariukukiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariukukiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu nupirkai: <b>$kariukukiek</b> sakalininku uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $sakalininku + $kariukukiek;
$fpa = fopen("kariai/sakalininkai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariukukiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}

if ($id == "perku9")
{
$kaleiviaikiek = $_POST['kaleiviaikiek'];

$auksokaina = 140 * $kaleiviaikiek;

$kariukukiek = htmlspecialchars($kaleiviaikiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kaleiviaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kaleiviaikiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu nupirkai: <b>$kaleiviaikiek</b> kariu su arbaletais uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $kariusuarbaletais + $kaleiviaikiek;
$fpa = fopen("kariai/kariaisuarbaletais/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kaleiviaikiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}




if ($id == "perku10")
{
$kariuukiek = $_POST['kariuukiek'];

$auksokaina = 150 * $kariuukiek;

$kariuukiek = htmlspecialchars($kariuukiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariuukiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariuukiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu nupirkai: <b>$kariuukiek</b> negru uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $negru + $kariuukiek;
$fpa = fopen("kariai/negrai/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariuukiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}

if ($id == "perku11")
{
$kariuuukiek = $_POST['kariuuukiek'];

$auksokaina = 200 * $kariuuukiek;

$kariuukiek = htmlspecialchars($kariuuukiek);

include("tsr.php");

if ($aukso < $auksokaina)
{
echo"<p align=\"center\"><small>Neuztenka aukso!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($kareivinesevietu < $kariuuukiek)
{
echo"<p align=\"center\"><small>Neuztenka vietu kareivinese!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
if ($vergu < $kariuuukiek)
{
echo"<p align=\"center\"><small>Neuztenka vergu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";
}
else
{
echo"<p align=\"center\"><small>Tu nupirkai: <b>$kariuuukiek</b> kariusukuokomis uz <b>$auksokaina</b> aukso.<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">$iconas Zaidimas</a><br/></small></p>";

$kiek = $kariusukuokomis + $kariuuukiek;
$fpa = fopen("kariai/kariaisukuokomis/$nick.txt","w");
fwrite($fpa, "$kiek");
fclose($fpa);

$vergaz = $vergu - $kariuuukiek;
$fpa = fopen("kariai/vergai/$nick.txt","w");
fwrite($fpa, "$vergaz");
fclose($fpa);

$auksaz = $aukso - $auksokaina ;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$auksaz");
fclose($fpa);
}
 }
  }
}







print'</card></wml>';

?>