<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Puldineja kitus"; 
include("config.php");

$ka = $_GET['ka']; 

if ($id == "") 
{
    if ($turiejimu < 1)
    {
        echo "<p align=\"center\"><small>
Neuztenka ejimu!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
  else
    {
    if (!file_exists("ndbzgtusrsz/$ka.txt"))
    {
        echo "<p align=\"center\"><small>
Sis kovotojas neuzregistruotas!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
  else
    {
        $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));

    if ($tavojega < 5)
{
    echo"<p align=\"left\"><small>
Tu neturi armijos!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";

}
else
{

    if ($kaginyb < 5)
{
    echo"<p align=\"left\"><small>
$ka neturi armijos!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";

}
else
{



$ki = explode("|", file_get_contents("ndbzgtusrsz/$ka.txt"));

$kito = $ki[10]+$ki[3]+$ki[16]+$ki[22]+$ki[6];
$rand1 = rand(50,200);
$kito = "$kito"*"$rand1";
$rand2 = rand(10,99);
$rand3 = rand(1,200);
$kab = $rand2/$rand3;
$kito = "$kito"+"$kab";
$kito = round($kito,1);

        $kit = explode("|", file_get_contents("ndbzgtusrsz/$nick.txt"));

$mano = $ginklo_att+$jega+$kit[16]+$kit[22]+$kit[6];
$rand4 = rand(50,200);
$mano = "$mano"*"$rand4";
$rand5 = rand(10,99);
$rand6 = rand(1,200);
$kab2 = $rand5/$rand6;
$mano = "$mano"+"$kab2";
$mano = round($mano,1);











    if ($tavojega > $kaginyb)
{

$gaunix = round(($turixpka / 100), 0) + 1;
$gaunixp = round(($turixpka / 100), 0) + $turixp + 1;

echo"<p align=\"center\"><small>
</small></p>"; 

    echo"<p align=\"left\"><small>
Tavo jega <b>$tavojega</b><br/>
$ka ginyba <b>$kaginyb</b><br/>
$lin<br/>
Tu laimejai pries <b>$ka</b><br/>
$lin<br/>
Gavai:<br/>
 XP:<b>$gaunix</b><br/>
Aukso: <b>$auksoka</b><br/>
Medienos: <b>$medienoska</b><br/>
Gelezies: <b>$gelezieska</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";

$winsumaaukso = $aukso + $auksoka;
$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "$winsumaaukso");
fclose($fpa);

$winsumagelezies = $gelezies + $gelezieska;
$fpa = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fpa, "$winsumagelezies");
fclose($fpa);

$winsumamedienos = $medienos + $medienoska;
$fpa = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fpa, "$winsumamedienos");
fclose($fpa);

$fpa = fopen("pastatai/auksas/$ka.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$fpa = fopen("pastatai/gelezis/$ka.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$fpa = fopen("pastatai/mediena/$ka.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$atidaryma = fopen("priv_zin/$ka.txt", "a");
fwrite($atidaryma, "@ArChAnGeL!|Tave uzpuole <b>$nick</b>!!!. Tavo ginyba <b>$kaginyb</b>, <b>$nick</b> jega <b>$tavojega</b>. Pralaimejai praradai <b>$auksoka</b> aukso!|$laikas|\n");
fclose($atidaryma);

$ejimuliko = $turiejimu - 1;
$fpa = fopen("ejimai/$nick.txt","w");
fwrite($fpa, "$ejimuliko");
fclose($fpa);

$fpa = fopen("pastatai/xp/$nick.txt","w");
fwrite($fpa, "$gaunixp");
fclose($fpa);

}








    if ($tavojega < $kaginyb)
{

$gaunax = round(($turixp / 100), 0) + 1;
$gaunaxp = round(($turixp / 100), 0) + $turixpka + 1;

   echo"<p align=\"left\"><small>
Tavo jega <b>$tavojega</b><br/>
$ka ginyba <b>$kaginyb</b><br/>
$lin<br/>
Pralaimejai pries <b>$ka</b><br/>
$lin<br/>
$ka gavo:<br/>
 XP:<b>$gaunax</b><br/>
Aukso: <b>$aukso</b><br/>
Medienos: <b>$medienos</b><br/>
Gelezies: <b>$gelezies</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";



$loseaukso = $auksoka + $aukso;
$fpa = fopen("pastatai/auksas/$ka.txt","w");
fwrite($fpa, "$loseaukso");
fclose($fpa);

$losegelezies = $gelezieska + $gelezies;
$fpa = fopen("pastatai/gelezis/$ka.txt","w");
fwrite($fpa, "$losegelezies");
fclose($fpa);

$losemedienos = $medienoska + $medienos;
$fpa = fopen("pastatai/mediena/$ka.txt","w");
fwrite($fpa, "$losemedienos");
fclose($fpa);

$fpa = fopen("pastatai/gelezis/$nick.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$fpa = fopen("pastatai/mediena/$nick.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$fpa = fopen("pastatai/auksas/$nick.txt","w");
fwrite($fpa, "0");
fclose($fpa);

$atidaryma = fopen("priv_zin/$ka.txt", "a");
fwrite($atidaryma, "@ArChAnGeL!|Tave uzpuole <b>$nick</b>!!!. Tavo ginyba <b>$kaginyb</b>, <b>$nick</b> jega <b>$tavojega</b>. Tu laimejai ir gavai $pralostaaukso aukso!|$laikas|\n");
fclose($atidaryma);


$ejimuliko = $turiejimu- 1;
$fpa = fopen("ejimai/$nick.txt","w");
fwrite($fpa, "$ejimuliko");
fclose($fpa);

$fpa = fopen("pastatai/xp/$ka.txt","w");
fwrite($fpa, "$gaunaxp");
fclose($fpa);

}








   if ($tavojega == $kaginyb)
{
   echo"<p align=\"center\"><small>
Lygiosios, nieko neprarandi ir nieko nelaimi!!!<br/>
$lin<br/>
Tavo jega: <b>$tavojega</b><br/>
$ka gynyba: <b>$kaginyb</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";

$ejimuliko = $turiejimu - 1;
$fpa = fopen("ejimai/$nick.txt","w");
fwrite($fpa, "$ejimuliko");
fclose($fpa);

}
 }
  }
   }
    }
     }

print'</card></wml>';

?>