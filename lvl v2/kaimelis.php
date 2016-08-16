<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Kaimelyje"; 
include("config.php"); 


if ($id == "")
{
    if ($lygis < 1)
    {
        echo "<p align=\"center\"><small>
<img src=\"http://artixas.puslapiai.lt/kaimelis.gif\" alt=\"kaimelis\"/><br/>
Deja i kaimeli galima ieiti tik nuo 1 lygio eik kelkis ;)<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
    }
    else
    {
       echo"<p align=\"center\"><small>
Wap LYGIO Kaimelis<br/>
<img src=\"http://artixas.puslapiai.lt/kaimelis.gif\" alt=\"kaimelis\"/><br/>
$lin<br/>
<b>Sveika(s)  <b>$nick</b> Atejai y Kaimeli! cia rasi ivairiu kariu, igijimu ir t.t.  ;)</b><br/>
$lin<br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=patirtis\"><b>Igauk Patirties</b></a><br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=gynyba\"><b>Igauk Ginybos</b></a><br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=jega\"><b>Igauk Jegos</b></a><br/>
 $lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";

}
 }

if ($id == "jega")
{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);

     echo"<p align=\"center\"><small>
Noriu Kad Suteiktu Jegos<br/>
$lin<br/>
Turi pinigu: <b>$pinigai</b><br/>
Turi jegos: <b>$jega</b><br/>
$lin<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wjega&amp;kas=1&amp;kd=$kodase\">Suteikia uz 10.000 $</a>[+1] Jegos<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wjega&amp;kas=2&amp;kd=$kodase\">Suteikia uz 60.000 $</a>[+5] Jegos<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wjega&amp;kas=3&amp;kd=$kodase\">Suteikia uz 500.000 $</a>[+55] Jegos<br/>
<br/>
</small></p>
<p align=\"center\"><small>
<a href=\"wizard.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}

if ($id == "wjega")
{
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5)
{
     echo"<p align=\"left\"><small>
Taip negalima! Turi eiti atgal ir vel treniruotis!<br/>
</small></p>";
}
else
{
if (time() < $floo)
{
     echo"<p align=\"left\"><small>
Palauk kelias sekundes, padusai!<br/>
</small></p>";
}
else
{
$kas = $_GET['kas'];

if ($kas == "1") {
$pinigai = $pinigai-10000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$jega = $jega+1; }

if ($kas == "2") {
$pinigai = $pinigai-60000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$jega = $jega+5; }

if ($kas == "3") {
$pinigai = $pinigai-500000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$jega = $jega+55; }

if ($er == ""){
$er = "Sekmingai igavai jegos!<br/>Sekmes kovose $nick !";

   $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

}
 }
  }

     echo"<p align=\"center\"><small>
$er<br/>
$lin<br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=jega\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}

if ($id == "gynyba")
{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);

      echo"<p align=\"center\"><small>
Noriu Kad Suteiktu Gynybos<br/>
$lin<br/>
Turite pinigu: <b>$pinigai</b><br/>
Turi gynybos: <b>$gynyba</b><br/>
$lin<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=krc&amp;kas=1&amp;kd=$kodase\">Suteikia uz 5.000 $</a>[+1] Gynybos<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=krc&amp;kas=2&amp;kd=$kodase\">Suteikia uz 40.000 $</a>[+5] Gynybos<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=krc&amp;kas=3&amp;kd=$kodase\">Suteikia uz 200.000 $</a>[+30] Gynybos<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=krc&amp;kas=4&amp;kd=$kodase\">Suteikia uz 1.000.000 $</a>[+150] Gynybos<br/>$lin<br/>
</small></p>
<p align=\"center\"><small>
<a href=\"wizard.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}

if ($id == "krc")
{
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5)
{
     echo"<p align=\"left\"><small>
Taip negalima!<br/>
</small></p>";
}
else
{
if (time() < $floo)
{
     echo"<p align=\"left\"><small>
Palauk kelias sekundes, padusai!<br/>
</small></p>";
}
else
{
$kas = $_GET['kas'];

if ($kas == "1") {
$pinigai = $pinigai-5000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$gynyba = $gynyba+1; }

if ($kas == "2") {
$pinigai = $pinigai-40000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$gynyba = $gynyba+5; }

if ($kas == "3") {
$pinigai = $pinigai-200000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$gynyba = $gynyba+30; }

if ($kas == "4") {
$pinigai = $pinigai-1000000;
if ($pinigai < 0) { $er = "Neuztenka pinigu!"; }
$gynyba = $gynyba+150; }

if ($er == ""){
$er = "Sekmingai igavai gynybos!<br/>Sekmes kovose $nick !";

     $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
 
}
 }
  }

     echo"<p align=\"left\"><small>
$er<br/>
$lin<br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=gynyba\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}

if ($id == "patirtis")
{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);

     echo"<p align=\"center\"><small>
Noriu Kad Suteiktu Patirties<br/>
<br/>Turi pinigu: <b>$pinigai</b><br/>
Turi patirties: <b>$sugebejimas</b><br/>
<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wpatirtis&amp;kas=1&amp;kd=$kodase\">Suteikia uz 5.000 $</a> [+2] Patirties<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wpatirtis&amp;kas=2&amp;kd=$kodase\">Suteikia uz 40.000 $ </a>[+10] Patirties<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wpatirtis&amp;kas=3&amp;kd=$kodase\">Suteikia uz 200.000 $</a>[+55] Patirties<br/>
$ico <a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=wpatirtis&amp;kas=4&amp;kd=$kodase\">Suteikia uz 1.000.000 $ </a>[+300] Patirties<br/>$lin<br/>
</small></p>
<p align=\"center\"><small>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}

if ($id == "wpatirtis")
{
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5)
{
     echo"<p align=\"center\"><small>
Taip negalima!<br/>
</small></p>";
}
else
{
if (time() < $floo)
{
     echo"<p align=\"left\"><small>
Palauk kelias sekundes, padusai!<br/>
</small></p>";
}
else
{
$kas = $_GET['kas'];

if ($kas == "1") {
$pinigai = $pinigai-5000;
if ($pinigai < 0) { $er = "Nepakanka pinigu!!"; }
$sugebejimas = $sugebejimas+2; }

if ($kas == "2") {
$pinigai = $pinigai-40000;
if ($pinigai < 0) { $er = "Nepakanka pinigu!!"; }
$sugebejimas = $sugebejimas+10; }

if ($kas == "3") {
$pinigai = $pinigai-200000;
if ($pinigai < 0) { $er = "Nepakanka pinigu!!"; }
$sugebejimas = $sugebejimas+55; }

if ($kas == "4") {
$pinigai = $pinigai-1000000;
if ($pinigai < 0) { $er = "Nepakanka pinigu!!"; }
$sugebejimas = $sugebejimas+300; }

if ($er == ""){
$er = "Sekmingai suteike tau patirties!!<br/>Sekmes kovose $nick !";

       $fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

}
 }
  }
     echo"<p align=\"center\"><small>
$er<br/>
$lin<br/>
<a href=\"kaimelis.php?nick=$nick&amp;pass=$pass&amp;id=patirtis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Y Pradzia</a></small></p>";
}




print'</card></wml>';

?>