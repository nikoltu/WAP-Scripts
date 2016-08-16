<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Krosnele";
include("config.php"); 

if ($id == ""){ include("icludekitainf/nuskait.php");
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
<b>Krosnele, ka kepsi?</b><br/>
(minim kepimo lygis)<br/>
$lin<br/>Jusu kepimo lygis: <b>$kepimas</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=kar&amp;kd=$kodase\">Karosa</a>(1)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=ese&amp;kd=$kodase\">Eseri</a>(5)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=lyn&amp;kd=$kodase\">Lyna</a>(20)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=rau&amp;kd=$kodase\">Raude</a>(30)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=karp&amp;kd=$kodase\">Karpi</a>(50)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=sta&amp;kd=$kodase\">Starki</a>(200)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=lyd&amp;kd=$kodase\">Lydeka</a>(300)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=vez&amp;kd=$kodase\">Vezi</a>(2000)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=kard&amp;kd=$kodase\">Kardzuve</a>(3000)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=ryk&amp;kd=$kodase\">Rykli</a>(5000)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=bal&amp;kd=$kodase\">Balandi</a>(10)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=zui&amp;kd=$kodase\">Zuikiena</a>(60)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=faz&amp;kd=$kodase\">Fazana</a>(100)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=tet&amp;kd=$kodase\">Tetervina</a>(150)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=sti&amp;kd=$kodase\">Stirniena</a>(250)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=eln&amp;kd=$kodase\">Elniena</a>(400)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=bri&amp;kd=$kodase\">Briedzio mesa</a>(500)<br/>
#<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=ser&amp;kd=$kodase\">Serniena</a>(1000)<br/>

</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "gaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel kepti!</b><br/>
$lin<br/>
<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
   
      if ($ka == "vez") { if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
$minimum = 2000;
$min_lvl = 5;
$dari[64] = $dari[64]+1;
if ($dari[61] < 1) { $badux = "Nebeturi nekeptu veziu!";}
$dari[61] = $dari[61]-1;
$x = 150; 
}
   
   if ($ka == "kard") { if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
$minimum = 3000;
$min_lvl = 7;
$dari[65] = $dari[65]+1;
if ($dari[62] < 1) { $badux = "Nebeturi nekeptu kardzuviu!";}
$dari[62] = $dari[62]-1;
$x = 200; 
}
   
   if ($ka == "ryk") { if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
$minimum = 5000;
$min_lvl = 10;
$dari[66] = $dari[66]+1;
if ($dari[63] < 1) { $badux = "Nebeturi nekeptu rykliu!";}
$dari[63] = $dari[63]-1;
$x = 300; 
}
   
    if ($ka == "kar") {
$minimum = 0;
$min_lvl = 0.2;
$kit[38] = $kit[38]+1;
if ($karosu < 1) { $badux = "Nepakanka karosu!";}
$karosu = $karosu-1;
$x = 0.2; 
}

if ($ka == "ese") {
$minimum = 5;
$min_lvl = 0.3;
$kit[39] = $kit[39]+1;
if ($eseriu < 1) { $badux = "Nepakanka eseriu!";}
$eseriu = $eseriu-1;
$x = 0.3; 
}

if ($ka == "lyn") {
$minimum = 20;
$min_lvl = 0.4;
$kit[40] = $kit[40]+1;
if ($lynu < 1) { $badux = "Nepakanka lynu!";}
$lynu = $lynu-1;
$x = 0.5; 
}

if ($ka == "rau") {
$minimum = 30;
$min_lvl = 0.5;
$kit[41] = $kit[41]+1;
if ($raudziu < 1) { $badux = "Nepakanka raudziu!";}
$raudziu = $raudziu-1;
$x = 0.6; 
}

if ($ka == "karp") {
$minimum = 50;
$min_lvl = 0.6;
$kit[42] = $kit[42]+1;
if ($karpiu < 1) { $badux = "Nepakanka karpiu!";}
$karpiu = $karpiu-1;
$x = 1; 
}

if ($ka == "sta") {
$minimum = 200;
$min_lvl = 0.7;
$kit[43] = $kit[43]+1;
if ($starkiu < 1) { $badux = "Nepakanka starkiu!";}
$starkiu = $starkiu-1;
$x = 5; 
}

if ($ka == "lyd") {
$minimum = 300;
$min_lvl = 1;
$kit[44] = $kit[44]+1;
if ($lydeku < 1) { $badux = "Nepakanka lydeku!";}
$lydeku = $lydeku-1;
$x = 15; 
}

if ($ka == "bal") {
$minimum = 10;
$min_lvl = 0.3;
$kit[45] = $kit[45]+1;
if ($kit[29] < 1) { $badux = "Nepakanka balandziu!";}
$kit[29] = $kit[29]-1;
$x = 0.6; 
}

if ($ka == "zui") {
$minimum = 60;
$min_lvl = 0.6;
$kit[46] = $kit[46]+1;
if ($kit[30] < 1) { $badux = "Nepakanka zuikienos!";}
$kit[30] = $kit[30]-1;
$x = 1.2; 
}

if ($ka == "faz") {
$minimum = 100;
$min_lvl = 0.6;
$kit[47] = $kit[47]+1;
if ($kit[31] < 1) { $badux = "Nepakanka fazanu!";}
$kit[31] = $kit[31]-1;
$x = 2; 
}

if ($ka == "tet") {
$minimum = 150;
$min_lvl = 0.6;
$kit[48] = $kit[48]+1;
if ($kit[32] < 1) { $badux = "Nepakanka tetervinu!";}
$kit[32] = $kit[32]-1;
$x = 3; 
}

if ($ka == "sti") {
$minimum = 250;
$min_lvl = 0.8;
$kit[49] = $kit[49]+1;
if ($kit[33] < 1) { $badux = "Nepakanka stirnienos!";}
$kit[33] = $kit[33]-1;
$x = 10; 
}

if ($ka == "eln") {
$minimum = 400;
$min_lvl = 1.2;
$kit[50] = $kit[50]+1;
if ($kit[34] < 1) { $badux = "Nepakanka elnienos!";}
$kit[34] = $kit[34]-1;
$x = 20; 
}

if ($ka == "bri") {
$minimum = 500;
$min_lvl = 1.5;
$kit[51] = $kit[51]+1;
if ($kit[35] < 1) { $badux = "Nepakanka briedzio mesos!";}
$kit[35] = $kit[35]-1;
$x = 30; 
}

if ($ka == "ser") {
$minimum = 1000;
$min_lvl = 2;
$kit[52] = $kit[52]+1;
if ($kit[36] < 1) { $badux = "Nepakanka sernienos!";}
$kit[36] = $kit[36]-1;
$x = 50; 
}

if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($kepimas < $minimum) { $badux = "Tavo kepimo lygis per mazas";}

if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Iskepta,</u><br/></b>
Gavai <u>$min_lvl</u> kepimo lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[37] = $kit[37]+$min_lvl;

//lvl kilimas
$suma = $x+$exp; 
$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $ex_left = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
$badux="$badux<br/>$lin<br/>
<b>Sveikinu! Tu pasikelei lygi<br/>
Dabar tavo lygis: $lvl</b>"; 
$points = "$points"+"2"; 
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1); 

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

print'</card></wml>';

?>