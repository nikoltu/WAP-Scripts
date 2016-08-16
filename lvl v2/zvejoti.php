<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Zvejoja";
include("config.php"); 

if ($id == ""){ 
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
<b>Pasirink ant ko zvejosi</b><br/>
(butinas zvejybos lygis)<br/>
$lin<br/>Jusu zvejybos lygis: <b>$fishing2</b><br/></small></p>
<p align=\"left\"><small>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=zvejoju&amp;ka=sliekas&amp;kd=$kodase\">Sliekas</a> (1)<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=zvejoju&amp;ka=tesla&amp;kd=$kodase\">Tesla</a> (50)<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=zvejoju&amp;ka=karos&amp;kd=$kodase\">Karosiukas</a> (500)<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=zvejoju&amp;ka=zui&amp;kd=$kodase\">Zuikiena</a> (2000)<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=zvejoju&amp;ka=el&amp;kd=$kodase\">Elniena</a> (5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "zvejoju") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel zvejoti!</b><br/>
$lin<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ 
include("icludekitainf/nuskait.php");
	if ($ka == "sliekas") {
    $minimum = 0; 
    $masalas = $slieku; 
    $slieku = $slieku-1; 
    if ($fishing < 20){ 
$zuv = array("Karosa","Eseri","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Karosa","Eseri","Lyna","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[0] < 1){ $badux = "Tu neturi lazdinines meskeres!"; }
}
	if ($ka == "tesla") {
    $minimum = 50; 
    $masalas = $teslos; 
    $teslos = $teslos-1; 
if ($fishing < 120){ 
$zuv = array("Karosa","Karpi","Raude","Karosa","","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Karosa","Karpi","Raude","Karpi","Raude","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[1] < 1){ $badux = "Tu neturi bambukines meskeres!"; }
}
	if ($ka == "karos") {
$minimum = 500;
$masalas = $karosu; 
$karosu = $karosu-1; 
if ($fishing < 1000){ 
$zuv = array("Eseri","Lydeka","Starki","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Eseri","Lydeka","Starki","Lydeka","Lydeka","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[2] < 1){ $badux = "Tu neturi spiningo!"; }
 }
 
if ($ka == "karos") {
$minimum = 500000;
$masalas = $karosu; 
$karosu = $karosu-1; 
if ($fishing < 1000){ 
$zuv = array("Eseri","Lydeka","Starki","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Eseri","Lydeka","Starki","Lydeka","Lydeka","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[2] < 1){ $badux = "Tu neturi spiningo!"; }
 }
 
	if ($ka == "zui") {
    if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
$minimum = 2000;
$masalas = $kit[30]; 
$kit[30] = $kit[30]-1; 
if ($fishing < 3000){ 
$zuv = array("Vezi","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Vezi","Kardzuve","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[2] < 1){ $badux = "Tu neturi spiningo!"; }
 }
 
  	if ($ka == "el") {
    if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
$minimum = 5000;
$masalas = $kit[34]; 
$kit[34] = $kit[34]-1; 
if ($fishing < 6000){ 
$zuv = array("Kardzuve","Kardzuve","Rykli","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Kardzuve","Rykli","Rykli",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[2] < 1){ $badux = "Tu neturi spiningo!"; }
 }
 
if ($masalas == ""){ $badux = "Pize kietekas, bbd"; }
if ($fishing2 < $minimum) { $badux = "Tavo zvejybos lygis per mazas";} 
if ($masalas < 1){ $badux = "Nebeturi masalo"; } 
if ($badux==""){ 

if ($pagavai == "Karosa"){ $fish_l = 0.1; $karosu = $karosu+1; }
if ($pagavai == "Eseri"){ $fish_l = 0.2; $eseriu = $eseriu+1; }
if ($pagavai == "Lyna"){ $fish_l = 0.3; $lynu = $lynu+1; }
if ($pagavai == "Raude"){ $fish_l = 0.5; $raudziu = $raudziu+1; }
if ($pagavai == "Karpi"){ $fish_l = 1; $karpiu = $karpiu+1; }
if ($pagavai == "Starki"){ $fish_l = 2; $starkiu = $starkiu+1; }
if ($pagavai == "Lydeka"){ $fish_l = 3; $lydeku = $lydeku+1; }
if ($pagavai == "Vezi"){ $fish_l = 5; $dari[61] = $dari[61]+1; }
if ($pagavai == "Kardzuve"){ $fish_l = 7; $dari[62] = $dari[62]+1; }
if ($pagavai == "Rykli"){ $fish_l = 10; $dari[63] = $dari[63]+1; }

if ($pagavai == ""){ $badux = "Tu nieko nepagavai"; $fish_l = 0; }
else{ 
$yrax = $fish_l+$exp; 
$badux = "Tu pagavai <u>$pagavai</u><br/>Gavai <u>$fish_l</u> zvejybos lygio ir <u>$fish_l</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>"; }

//lvl kilimas
$suma = $fish_l+$exp; 
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

$fishin = $fishing+$fish_l;
$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishin|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

print'</card></wml>';

?>