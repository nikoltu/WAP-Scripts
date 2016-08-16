<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Miskas";
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
<b>Tu miske</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=med\">Kirsti medzius</a><br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioti\">Medzioti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "medzioti"){ 
include("icludekitainf/nuskait.php");
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
<b>Su kokiu lanku medziosi?</b><br/>
(minim medziokles lygis)<br/>
$lin<br/>Jusu medziokles lygis: <b>$medziokle</b><br/></small></p>
<p align=\"left\"><small>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=alk&amp;kd=$kodase\">Alksnio lanku</a>(1)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=iev&amp;kd=$kodase\">Ievos lanku</a>(30)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=glu&amp;kd=$kodase\">Gluosnio lanku</a>(100)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=top&amp;kd=$kodase\">Topolio lanku</a>(500)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=kle&amp;kd=$kodase\">Klevo lanku</a>(1000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=kle&amp;kd=$kodase\">Klevo lanku</a>(1000)<br/>
<a 
href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioju&amp;ka=azu&amp;kd=$kodase\">Azuolo lanku</a>(2000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }

if ($id == "medzioju") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel medzioti!</b><br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ 
include("icludekitainf/nuskait.php");
	if ($ka == "alk") {
    $minimum = '0'; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 15){ 
$zuv = array("Zuiki","Balandi","","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Zuiki","Balandi","Fazana","","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[18] < 1){ $badux = "Tu neturi alksnio lanko!"; }}

	if ($ka == "iev") {
    $minimum = 30; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 70){ 
$zuv = array("Zuiki","Balandi","Fazana","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Zuiki","Balandi","Fazana","Tetervina","","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[19] < 1){ $badux = "Tu neturi ievos lanko!"; }}

	if ($ka == "glu") {
    $minimum = 100; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 300){ 
$zuv = array("Zuiki","Balandi","Fazana","Tetervina","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Zuiki","Stirna","Fazana","Tetervina","","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[20] < 1){ $badux = "Tu neturi gluosnio lanko!"; }}

	if ($ka == "top") {
    $minimum = 500; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 700){ 
$zuv = array("Zuiki","Stirna","Fazana","Tetervina","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Elnia","Stirna","Fazana","Tetervina","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[21] < 1){ $badux = "Tu neturi topolio lanko!"; }}

	if ($ka == "kle") {
    $minimum = 1000; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 1500){ 
$zuv = array("Elnia","Stirna","Stirna","Tetervina","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Elnia","Stirna","Stirna","Briedi","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[22] < 1){ $badux = "Tu neturi klevo lanko!"; }}

	if ($ka == "azu") {
    $minimum = 2000; 
    $kit[27] = $kit[27]-1; 
    if ($medziokle < 3000){ 
$zuv = array("Elnia","Stirna","Stirna","Briedi","",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; } else { 
$zuv = array("Elnia","Briedi","Serna",""); 
$s=count($zuv)-1; $r=mt_rand(0,$s); 
$pagavai = $zuv[$r]; }
if ($kit[23] < 1){ $badux = "Tu neturi azuolo lanko!"; }}

 
if ($minimum == ""){ $badux = "Pize kietekas, bbd"; }
if ($medziokle < $minimum) { $badux = "Tavo medzioles lygis per mazas";} 
if ($kit[27] < 0){ $badux = "Nebeturi streliu!"; $kit[27]=$kit[27]+1; } 
if ($badux==""){ 

if ($pagavai == "Balandi"){ $fish_l = 0.2; $kit[29] = $kit[29]+1; }
if ($pagavai == "Zuiki"){ $fish_l = 0.3; $kit[30] = $kit[30]+1; }
if ($pagavai == "Fazana"){ $fish_l = 0.5; $kit[31] = $kit[31]+1; }
if ($pagavai == "Tetervina"){ $fish_l = 1; $kit[32] = $kit[32]+1; }
if ($pagavai == "Stirna"){ $fish_l = 3; $kit[33] = $kit[33]+1; }
if ($pagavai == "Elnia"){ $fish_l = 5; $kit[34] = $kit[34]+1; }
if ($pagavai == "Briedi"){ $fish_l = 10; $kit[35] = $kit[35]+1; }
if ($pagavai == "Serna"){ $fish_l = 20; $kit[36] = $kit[36]+1; }

if ($pagavai == ""){ $badux = "Tu nieko nesumedziojai..."; $fish_l = 0; }
else{ 
$yrax = $fish_l+$exp; 
$badux = "Tu sumedziojai <u>$pagavai</u><br/>Gavai <u>$fish_l</u> medziokles lygio ir <u>$fish_l</u> XP.<br/>
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

$kit[28] = $kit[28]+$fish_l;
include("icludekitainf/iras.php");

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=medzioti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }


if ($id == "med"){ include("icludekitainf/nuskait.php");
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
<b>Tu miske, koki medi kirsi?</b><br/>
(minim medkircio lygis)<br/>
$lin<br/>Jusu medkirtystes lygis: <b>$medkirtyste</b><br/></small></p>
<p align=\"left\"><small>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=alk&amp;kd=$kodase\">Alksnis</a>(1)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=iev&amp;kd=$kodase\">Ieva</a>(50)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=glu&amp;kd=$kodase\">Gluosnis</a>(300)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=top&amp;kd=$kodase\">Topolis</a>(1000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=kle&amp;kd=$kodase\">Klevas</a>(3000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=azu&amp;kd=$kodase\">Azuolas</a>(5000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=mau&amp;kd=$kodase\">Maumedis</a>(7000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=uos&amp;kd=$kodase\">Uosis</a>(10000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=ber&amp;kd=$kodase\">Berzas</a>(15000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=skr&amp;kd=$kodase\">Skroblas</a>(20000)<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=kertu&amp;ka=sek&amp;kd=$kodase\">Sekvoja</a>(50000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kertu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel kirsti!</b><br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
	if ($ka == "alk") {
$minimum = 0;
$min_lvl = 0.1;
$kit[12] = $kit[12]+1;
if ($kit[7]>0 or $kit[8]>0 or $kit[9]>0 or $kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 0.2; 
}
if ($ka == "iev") {
$minimum = 50;
$min_lvl = 0.2;
$kit[13] = $kit[13]+1;
if ($kit[8]>0 or $kit[9]>0 or $kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 0.6; 
}
if ($ka == "glu") {
$minimum = 300;
$min_lvl = 0.3;
$kit[14] = $kit[14]+1;
if ($kit[8]>0 or $kit[9]>0 or $kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 1; 
}
if ($ka == "top") {
$minimum = 1000;
$min_lvl = 0.4;
$kit[15] = $kit[15]+1;
if ($kit[9]>0 or $kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 5; 
}
if ($ka == "kle") {
$minimum = 3000;
$min_lvl = 0.5;
$kit[16] = $kit[16]+1;
if ($kit[9]>0 or $kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 10; 
}
if ($ka == "azu") {
$minimum = 5000;
$min_lvl = 0.7;
$kit[17] = $kit[17]+1;
if ($kit[10]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 20; 
}
if ($ka == "mau") {
$minimum = 7000;
$min_lvl = 0.9;
$kit[18] = $kit[18]+1;
if ($kit[11]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 50; 
}
if ($ka == "uos") {
$minimum = 10000;
$min_lvl = 1.2;
$kit[19] = $kit[19]+1;
if ($kit[12]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 100; 
}
if ($ka == "ber") {
$minimum = 15000;
$min_lvl = 1.7;
$kit[20] = $kit[20]+1;
if ($kit[13]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 200; 
}
if ($ka == "skr") {
$minimum = 20000;
$min_lvl = 2.5;
$kit[21] = $kit[21]+1;
if ($kit[14]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 500; 
}
if ($ka == "sek") {
$minimum = 50000;
$min_lvl = 4.5;
$kit[22] = $kit[22]+1;
if ($kit[15]>0){ } else { $badux = "Neturi tinkamo kirvio!"; }
$x = 1000; 
}
if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($medkirtyste < $minimum) { $badux = "Tavo medkircio lygis per mazas";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Nukirsta,</u><br/></b>
Gavai <u>$min_lvl</u> medkircio lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[11] = $kit[11]+$min_lvl;

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

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }


print'</card></wml>';

?>