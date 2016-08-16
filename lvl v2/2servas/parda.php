<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Parduotuviu kvartale"; 
include("config.php"); 
/*
if ($id == "parde" or $id=="") { echo"<p align=\"center\"><small>
<b>Sveiki atvyke i Parduotuviu kvartala!</b><br/>
$lin<br/><b>
Turgus vienai dienai isjungtas.<br/>
</b>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}
*/

 $nuskg = @file_get_contents("txt/parda.txt");
    $items = explode("|", $nuskg); 
$bk = $items[0]; 
$spk = $items[1]; 
$zk = $items[2]; 
$vk = $items[3]; 
$gk = $items[4]; 
$pk = $items[5]; 
$sk = $items[6]; 
$ak = $items[7]; 
$dk = $items[8]; 
$bs = $items[9]; 
$sps = $items[10]; 
$zs = $items[11]; 
$vs = $items[12]; 
$gs = $items[13]; 
$ps = $items[14]; 
$ss = $items[15]; 
$as = $items[16]; 
$ds = $items[17]; 

if ($id == "parde" or $id=="") { echo"<p align=\"center\"><small>
<b>Sveiki atvyke i Parduotuviu kvartala!</b><br/>
$lin<br/><b>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginklai1\">Ginklu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=sarvu_turgus\">Sarvu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=masalai\">Masalu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=meskeres\">Meskeriu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirtikliai\">Kirtikliu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirviai\">Kirviu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys1\">Zuvu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Mesos skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=medziai\">Medziu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=lankai\">Lanku skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=rud\">Rudu ir plyteliu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=salmai\">Salmu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=material\">&Materialu skyrius</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirstines\">Pirstiniu skyrius&</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=apsiaustai\">Apsiaustu skyrius&</a><br/>
[*]<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=batai\">Batu skyrius</a><br/>
</b>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}

if ($id == "batai") { 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Batai</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
<b>Pirkti</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=bro\">Brown</a>(100)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=gra\">Gray</a>(700)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=whi\">White</a>(8000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=yel\">Yellow</a>(15000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=ora\">Orange</a>(80000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=gre\">Green</a>(150000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=red\">Red</a>(600000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_bat&amp;kas=bla\">Black</a>(800000)<br/>
<b>Parduoti</b><br/>
[<b>turi</b> tipas (kaina)]<br/>
<b>$dari[37]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=bro\">Brown</a>(20)<br/>
<b>$dari[38]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=gra\">Gray</a>(300)<br/>
<b>$dari[39]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=whi\">White</a>(2000)<br/>
<b>$dari[40]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=yel\">Yellow</a>(3000)<br/>
<b>$dari[41]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=ora\">Orange</a>(8000)<br/>
<b>$dari[42]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=gre\">Green</a>(15000)<br/>
<b>$dari[43]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=red\">Red</a>(20000)<br/>
<b>$dari[44]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_bat&amp;ka=bla\">Black</a>(30000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "perku_bat") {
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro") {
$g_kaina = 100;
$dari[37] = $dari[37]+1; }

if ($kas == "gra") {
$g_kaina = 700;
$dari[38] = $dari[38]+1; }

if ($kas == "whi") {
$g_kaina = 8000;
$dari[39] = $dari[39]+1; }

if ($kas == "yel") {
$g_kaina = 15000;
$dari[40] = $dari[40]+1; }

if ($kas == "ora") {
$g_kaina = 80000;
$dari[41] = $dari[41]+1; }

if ($kas == "gre") {
$g_kaina = 150000;
$dari[42] = $dari[42]+1; }

if ($kas == "red") {
$g_kaina = 600000;
$dari[43] = $dari[43]+1; }

if ($kas == "bla") {
$g_kaina = 800000;
$dari[44] = $dari[44]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Batai nupirkti!<br/>Jie atsirado tavo inventoriuje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=batai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pard_bat"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){
$ginklas2 = $dari[37];
$kaina = 20;
$dari[37] = $dari[37]-1;  }

if ($ka == "gra"){
$ginklas2 = $dari[38];
$kaina = 300;
$dari[38] = $dari[38]-1;  }

if ($ka == "whi"){
$ginklas2 = $dari[39];
$kaina = 2000;
$dari[39] = $dari[39]-1;  }

if ($ka == "yel"){
$ginklas2 = $dari[40];
$kaina = 3000;
$dari[40] = $dari[40]-1; ; }

if ($ka == "ora"){
$ginklas2 = $dari[41];
$kaina = 8000;
$dari[41] = $dari[41]-1;  }

if ($ka == "gre"){
$ginklas2 = $dari[42];
$kaina = 14200;
$dari[42] = $dari[42]-1;  }

if ($ka == "red"){
$ginklas2 = $dari[43];
$kaina = 20000;
$dari[43] = $dari[43]-1; }

if ($ka == "bla"){
$ginklas2 = $dari[44];
$kaina = 30000;
$dari[44] = $dari[44]-1;  }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Siu batu neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Batai parduoti,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=batai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "apsiaustai") { 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Apsiaustai</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
<b>Pirkti</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=bro\">Brown</a>(100)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=gra\">Gray</a>(800)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=whi\">White</a>(10000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=yel\">Yellow</a>(20000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=ora\">Orange</a>(100000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=gre\">Green</a>(200000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=red\">Red</a>(700000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_aps&amp;kas=bla\">Black</a>(1000000)<br/>
<b>Parduoti</b><br/>
[<b>turi</b> tipas (kaina)]<br/>
<b>$dari[45]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=bro\">Brown</a>(30)<br/>
<b>$dari[46]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=gra\">Gray</a>(500)<br/>
<b>$dari[47]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=whi\">White</a>(3000)<br/>
<b>$dari[48]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=yel\">Yellow</a>(5000)<br/>
<b>$dari[49]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=ora\">Orange</a>(10000)<br/>
<b>$dari[50]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=gre\">Green</a>(20000)<br/>
<b>$dari[51]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=red\">Red</a>(30000)<br/>
<b>$dari[52]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_aps&amp;ka=bla\">Black</a>(50000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "perku_aps") {
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro") {
$g_kaina = 100;
$dari[45] = $dari[45]+1; }

if ($kas == "gra") {
$g_kaina = 800;
$dari[46] = $dari[46]+1; }

if ($kas == "whi") {
$g_kaina = 10000;
$dari[47] = $dari[47]+1; }

if ($kas == "yel") {
$g_kaina = 20000;
$dari[48] = $dari[48]+1; }

if ($kas == "ora") {
$g_kaina = 100000;
$dari[49] = $dari[49]+1; }

if ($kas == "gre") {
$g_kaina = 200000;
$dari[50] = $dari[50]+1; }

if ($kas == "red") {
$g_kaina = 700000;
$dari[51] = $dari[51]+1; }

if ($kas == "bla") {
$g_kaina = 1000000;
$dari[52] = $dari[52]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Apsiaustas nupirktas!<br/>Jis atsirado tavo inventoriuje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=apsiaustai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pard_aps"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){
$ginklas2 = $dari[45];
$kaina = 30;
$dari[45] = $dari[45]-1;  }

if ($ka == "gra"){
$ginklas2 = $dari[46];
$kaina = 500;
$dari[46] = $dari[46]-1;  }

if ($ka == "whi"){
$ginklas2 = $dari[47];
$kaina = 3000;
$dari[47] = $dari[47]-1;  }

if ($ka == "yel"){
$ginklas2 = $dari[48];
$kaina = 5000;
$dari[48] = $dari[48]-1; ; }

if ($ka == "ora"){
$ginklas2 = $dari[49];
$kaina = 10000;
$dari[49] = $dari[49]-1;  }

if ($ka == "gre"){
$ginklas2 = $dari[50];
$kaina = 20000;
$dari[50] = $dari[50]-1;  }

if ($ka == "red"){
$ginklas2 = $dari[51];
$kaina = 30000;
$dari[51] = $dari[51]-1; }

if ($ka == "bla"){
$ginklas2 = $dari[52];
$kaina = 50000;
$dari[52] = $dari[52]-1;  }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Sio apsiausto neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Apsiaustas parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=apsiaustai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pirstines") { 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Pirstines</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
<b>Pirkti</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=bro\">Brown</a>(100)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=gra\">Gray</a>(800)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=whi\">White</a>(10000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=yel\">Yellow</a>(20000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=ora\">Orange</a>(100000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=gre\">Green</a>(200000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=red\">Red</a>(700000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_pirst&amp;kas=bla\">Black</a>(1000000)<br/>
<b>Parduoti</b><br/>
[<b>turi</b> tipas (kaina)]<br/>
<b>$dari[29]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=bro\">Brown</a>(30)<br/>
<b>$dari[30]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=gra\">Gray</a>(500)<br/>
<b>$dari[31]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=whi\">White</a>(3000)<br/>
<b>$dari[32]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=yel\">Yellow</a>(5000)<br/>
<b>$dari[33]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=ora\">Orange</a>(10000)<br/>
<b>$dari[34]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=gre\">Green</a>(20000)<br/>
<b>$dari[35]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=red\">Red</a>(30000)<br/>
<b>$dari[36]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_pirst&amp;ka=bla\">Black</a>(50000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "perku_pirst") {
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro") {
$g_kaina = 100;
$dari[29] = $dari[29]+1; }

if ($kas == "gra") {
$g_kaina = 800;
$dari[30] = $dari[30]+1; }

if ($kas == "whi") {
$g_kaina = 10000;
$dari[31] = $dari[31]+1; }

if ($kas == "yel") {
$g_kaina = 20000;
$dari[32] = $dari[32]+1; }

if ($kas == "ora") {
$g_kaina = 100000;
$dari[33] = $dari[33]+1; }

if ($kas == "gre") {
$g_kaina = 200000;
$dari[34] = $dari[34]+1; }

if ($kas == "red") {
$g_kaina = 700000;
$dari[35] = $dari[35]+1; }

if ($kas == "bla") {
$g_kaina = 1000000;
$dari[36] = $dari[36]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Pirstines nupirktos!<br/>Jos atsirado tavo inventoriuje.";
$pin = "$pinigai"-"$g_kaina";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirstines\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pard_pirst"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){
$ginklas2 = $dari[29];
$kaina = 30;
$dari[29] = $dari[29]-1;  }

if ($ka == "gra"){
$ginklas2 = $dari[30];
$kaina = 500;
$dari[30] = $dari[30]-1;  }

if ($ka == "whi"){
$ginklas2 = $dari[31];
$kaina = 3000;
$dari[31] = $dari[31]-1;  }

if ($ka == "yel"){
$ginklas2 = $dari[32];
$kaina = 5000;
$dari[32] = $dari[32]-1; ; }

if ($ka == "ora"){
$ginklas2 = $dari[33];
$kaina = 10000;
$dari[33] = $dari[33]-1;  }

if ($ka == "gre"){
$ginklas2 = $dari[34];
$kaina = 20000;
$dari[34] = $dari[34]-1;  }

if ($ka == "red"){
$ginklas2 = $dari[35];
$kaina = 30000;
$dari[35] = $dari[35]-1; }

if ($ka == "bla"){
$ginklas2 = $dari[36];
$kaina = 50000;
$dari[36] = $dari[36]-1;  }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Siu pirstiniu neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Pirstines parduotos,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirstines\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "material") { 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Isdirbti materialai</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
<b>Pirkti</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=bro\">Brown</a>(50)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=gra\">Gray</a>(300)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=whi\">White</a>(5000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=yel\">Yellow</a>(10000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=ora\">Orange</a>(50000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=gre\">Green</a>(100000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=red\">Red</a>(300000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mat&amp;kas=bla\">Black</a>(500000)<br/>
<b>Parduoti</b><br/>
[<b>turi</b> pavadinimas (kaina)]<br/>
<b>$dari[12]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=bro\">Brown</a>(10)<br/>
<b>$dari[13]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=gra\">Gray</a>(100)<br/>
<b>$dari[14]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=whi\">White</a>(1000)<br/>
<b>$dari[15]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=yel\">Yellow</a>(3000)<br/>
<b>$dari[16]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=ora\">Orange</a>(5000)<br/>
<b>$dari[17]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=gre\">Green</a>(10000)<br/>
<b>$dari[18]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=red\">Red</a>(20000)<br/>
<b>$dari[19]</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mat&amp;kas=bla\">Black</a>(30000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "perku_mat") {
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro") {
$g_kaina = 50;
$dari[12] = $dari[12]+1; }

if ($kas == "gra") {
$g_kaina = 300;
$dari[13] = $dari[13]+1; }

if ($kas == "whi") {
$g_kaina = 5000;
$dari[14] = $dari[14]+1; }

if ($kas == "yel") {
$g_kaina = 10000;
$dari[15] = $dari[15]+1; }

if ($kas == "ora") {
$g_kaina = 50000;
$dari[16] = $dari[16]+1; }

if ($kas == "gre") {
$g_kaina = 100000;
$dari[17] = $dari[17]+1; }

if ($kas == "red") {
$g_kaina = 300000;
$dari[18] = $dari[18]+1; }

if ($kas == "bla") {
$g_kaina = 500000;
$dari[19] = $dari[19]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Materialas nupirktas!<br/>Jis atsirado tavo inventoriuje.";

$pin = "$pinigai"-"$g_kaina";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=material\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pard_mat"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro"){
$ginklas2 = $dari[12];
$kaina = 10;
$dari[12] = $dari[12]-1;  }

if ($kas == "gra"){
$ginklas2 = $dari[13];
$kaina = 100;
$dari[13] = $dari[13]-1;  }

if ($kas == "whi"){
$ginklas2 = $dari[14];
$kaina = 1000;
$dari[14] = $dari[14]-1;  }

if ($kas == "yel"){
$ginklas2 = $dari[15];
$kaina = 3000;
$dari[15] = $dari[15]-1; ; }

if ($kas == "ora"){
$ginklas2 = $dari[16];
$kaina = 5000;
$dari[16] = $dari[16]-1;  }

if ($kas == "gre"){
$ginklas2 = $dari[17];
$kaina = 10000;
$dari[17] = $dari[17]-1;  }

if ($kas == "red"){
$ginklas2 = $dari[18];
$kaina = 20000;
$dari[18] = $dari[18]-1; }

if ($kas == "bla"){
$ginklas2 = $dari[19];
$kaina = 30000;
$dari[19] = $dari[19]-1;  }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Sio material neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Material parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=material\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "salmai"){ 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Salmai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirkti_salm\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_salm\">Parduoti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pirkti_salm") { 
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small>
<b>Ginklai</b><br/>
Salmas (Salmo protection / kaina / min gynybos lygis)<br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=bro\">Bronzinis salmas</a>(+1/ 100 / 1)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=spy\">Spyzinis salmas</a>(+2 / 500/ 3)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=zal\">Zalvarinis salmas</a>(+3 / 1000 / 8)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=var\">Varinis salmas</a>(+4 / 5000 / 15)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=gel\">Gelezinis salmas</a>(+5/ 10000 / 20)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=pli\">Plieninis salmas</a>(+6 / 50000 / 25)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=sid\">Sidabrinis salmas</a>(+7 / 100000 / 30)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=auk\">Auksinis salmas</a>(+8 / 500000 / 40)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_salm&amp;kas=dra\">Dragon salmas</a>(+10 / 1000000 / 50)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=salmai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "perku_salm") {
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($kas == "bro") {
$g_kaina = 100;
$dari[20] = $dari[20]+1; }

if ($kas == "spy") {
$g_kaina = 500;
$dari[21] = $dari[21]+1; }

if ($kas == "zal") {
$g_kaina = 1000;
$dari[22] = $dari[22]+1; }

if ($kas == "var") {
$g_kaina = 5000;
$dari[23] = $dari[23]+1; }

if ($kas == "gel") {
$g_kaina = 10000;
$dari[24] = $dari[24]+1; }

if ($kas == "pli") {
$g_kaina = 50000;
$dari[25] = $dari[25]+1; }

if ($kas == "sid") {
$g_kaina = 100000;
$dari[26] = $dari[26]+1; }

if ($kas == "auk") {
$g_kaina = 500000;
$dari[27] = $dari[27]+1; }

if ($kas == "dra") {
$g_kaina = 1000000;
$dari[28] = $dari[28]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Salmas nupirktas!<br/>Jis atsirado tavo inventoriuje, nueik i ji ir uzsidek salma.";

$pin = "$pinigai"-"$g_kaina";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirkti_salm\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "parduoti_salm"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
echo"<p align=\"center\"><small><b>Kokius salmus parduosi?</b><br/>
(Kiek turi / Kaina)<br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=bro\">Bronzinius salma</a>($dari[20] / 20)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=spy\">Spyzinius salma</a>($dari[21] / 50)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=zal\">Zalvarinius salma</a>($dari[22] / 100)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=var\">Varinius salma</a>($dari[23] / 300)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=gel\">Gelezinius salma</a>($dari[24] / 3000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=pli\">Plieninius salma</a>($dari[25] / 5000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=sid\">Sidabrinius salma</a>($dari[26] / 8000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=auk\">Auksinius salma</a>($dari[27] / 15000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sal&amp;ka=dra\">Dragon salma</a>($dari[28] / 50000)<br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=salmai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "parduodu_sal"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){
$ginklas2 = $dari[20];
$kaina = 20;
$dari[20] = $dari[20]-1;  }

if ($ka == "spy"){
$ginklas2 = $dari[21];
$kaina = 50;
$dari[21] = $dari[21]-1;  }

if ($ka == "zal"){
$ginklas2 = $dari[22];
$kaina = 100;
$dari[22] = $dari[22]-1;  }

if ($ka == "var"){
$ginklas2 = $dari[23];
$kaina = 300;
$dari[23] = $dari[23]-1; ; }

if ($ka == "gel"){
$ginklas2 = $dari[24];
$kaina = 3000;
$dari[24] = $dari[24]-1;  }

if ($ka == "pli"){
$ginklas2 = $dari[25];
$kaina = 5000;
$dari[25] = $dari[25]-1;  }

if ($ka == "sid"){
$ginklas2 = $dari[26];
$kaina = 8000;
$dari[26] = $dari[26]-1; }

if ($ka == "auk"){
$ginklas2 = $dari[27];
$kaina = 15000;
$dari[27] = $dari[27]-1;  }

if ($ka == "dra"){
$ginklas2 = $dari[28];
$kaina = 50000;
$dari[28] = $dari[28]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Sio salmo neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Salmas parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_salm\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "rud"){ echo"<p align=\"center\"><small>
<b>Rudos ir plyteles</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Parduoti</b><br/>
(Pavadinimas [kaina|turimas kiekis])<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=gelru\">Gelezies rudos</a> [5|$iron_ores]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=zalru\">Zalvario rudos</a> [20|$zalvario_ores]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=sidru\">Sidabro rudos</a> [500|$sidabro_ores]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=aukru\">Aukso rudos</a> [1000|$aukso_ores]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=gelba\">Gelezies plyteles</a> [10|$iron_baru]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=zalba\">Zalvario plyteles</a> [30|$zalvario_baru]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=sidba\">Sidabro plyteles</a> [1000|$sidabro_baru]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pardrud&amp;ka=aukba\">Aukso plyteles</a> [2000|$aukso_baru]<br/>
<b>Pirkti</b><br/>
(Pavadinimas [kaina])<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=gelru\">Gelezies rudos</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=zalru\">Zalvario rudos</a> [1000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=sidru\">Sidabro rudos</a> [10000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=aukru\">Aukso rudos</a> [20000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=gelba\">Gelezies plyteles</a> [300]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=zalba\">Zalvario plyteles</a> [3000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=sidba\">Sidabro plyteles</a> [30000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perkrud&amp;ka=aukba\">Aukso plyteles</a> [50000]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perkrud"){
if ($ka == "gelru"){
$kaina = 100;
$iron_ores = $iron_ores+1; }

if ($ka == "zalru"){
$kaina = 1000;
$zalvario_ores = $zalvario_ores+1; }

if ($ka == "sidru"){
$kaina = 10000;
$sidabro_ores = $sidabro_ores+1; }

if ($ka == "aukru"){
$kaina = 20000;
$aukso_ores = $aukso_ores+1; }

if ($ka == "gelba"){
$kaina = 300;
$iron_baru = $iron_baru+1; }

if ($ka == "zalba"){
$kaina = 3000;
$zalvario_baru = $zalvario_baru+1; }

if ($ka == "sidba"){
$kaina = 30000;
$sidabro_baru = $sidabro_baru+1; }

if ($ka == "aukba"){
$kaina = 50000;
$aukso_baru = $aukso_baru+1; }
if ($kaina != ""){
if ($kaina > $pinigai){ echo "<p align=\"center\"><small><b>Neuztenka pinigu!</b><br/></small></p>"; }
else { 
$pin = $pinigai-$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
echo"<p align=\"center\"><small><b>Preke nupirkta.</b></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=rud\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "pardrud"){
if ($ka == "gelru"){
$ginklas2 = $iron_ores;
$kaina = 5;
$iron_ores = $iron_ores-1; }

if ($ka == "zalru"){
$ginklas2 = $zalvario_ores;
$kaina = 20;
$zalvario_ores = $zalvario_ores-1; }

if ($ka == "sidru"){
$ginklas2 = $sidabro_ores;
$kaina = 500;
$sidabro_ores = $sidabro_ores-1; }

if ($ka == "aukru"){
$ginklas2 = $aukso_ores;
$kaina = 1000;
$aukso_ores = $aukso_ores-1; }

if ($ka == "gelba"){
$ginklas2 = $iron_baru;
$kaina = 10;
$iron_baru = $iron_baru-1; }

if ($ka == "zalba"){
$ginklas2 = $zalvario_baru;
$kaina = 30;
$zalvario_baru = $zalvario_baru-1; }

if ($ka == "sidba"){
$ginklas2 = $sidabro_baru;
$kaina = 1000;
$sidabro_baru = $sidabro_baru-1; }

if ($ka == "aukba"){
$ginklas2 = $aukso_baru;
$kaina = 2000;
$aukso_baru = $aukso_baru-1; }
if ($ginklas2 != "" && $kaina != ""){
if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Siu prekiu nebeturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
echo"<p align=\"center\"><small><b>Preke parduota,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=rud\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mesa1"){ echo"<p align=\"center\"><small>
<b>Mesa</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Nekepta</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa2\">Parduoti</a><br/>
<b>Kepta</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kmesa\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kmesa2\">Parduoti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "mesa") { echo"<p align=\"center\"><small>
<b>Mesa</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Balandziu (800$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"5\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Zuikiu (6000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Fazanu (7000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Tetervinu (8000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Stirnienos (12000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Elnienos (20000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Briedzio mesos (25000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Sernienos (35000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mes&amp;kas=ser'' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_mes") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "ser"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
include("icludekitainf/nuskait.php");
if ($kas == "kar") {
$g_kaina = 800*$kiek;
$kit[29] = $kit[29]+$kiek; }

if ($kas == "ese") {
$g_kaina = 6000*$kiek2;
$kit[30] = $kit[30]+$kiek2; }

if ($kas == "lyn") {
$g_kaina = 7000*$kiek3;
$kit[31] = $kit[31]+$kiek3; }

if ($kas == "rau") {
$g_kaina = 8000*$kiek4;
$kit[32] = $kit[32]+$kiek4; }

if ($kas == "kap") {
$g_kaina = 12000*$kiek5;
$kit[33] = $kit[33]+$kiek5; }

if ($kas == "sta") {
$g_kaina = 20000*$kiek6;
$kit[34] = $kit[34]+$kiek6; }

if ($kas == "lyd") {
$g_kaina = 25000*$kiek7;
$kit[35] = $kit[35]+$kiek7; }

if ($kas == "ser") {
$g_kaina = 35000*$kiek8;
$kit[36] = $kit[36]+$kiek8; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Mesa nupirkta";

$pin = $pinigai-$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}


if ($id == "mesa2") { 
include("icludekitainf/nuskait.php");
echo"<p align=\"center\"><small>
<b>Mesos pardavimas</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Balandziu (20$$ vnt)[$kit[29]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=kar' method='post'>
<input name=\"kiek1\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Zuikiu (50$$ vnt)[$kit[30]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Fazanu (70$$ vnt)[$kit[31]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Tetervinu (100$$ vnt)[$kit[32]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Stirnienos (300$$ vnt)[$kit[33]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Elnienos (700$$ vnt)[$kit[34]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Briedzio mesos (1000$$ vnt)[$kit[35]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Sernienos (1200$$ vnt)[$kit[36]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_mes&amp;kas=ser' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pard_mes") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "ser"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 

if ($kas == "kar") {
$g_kaina = 20*$kiek; if ($kit[29]<$kiek){ $er = "Tiek balandziu neturi!"; }
$kit[29] = $kit[29]-$kiek; }

if ($kas == "ese") {
$g_kaina = 50*$kiek2; if ($kit[30]<$kiek2){ $er = "Tiek zuikiu neturi!"; }
$kit[30] = $kit[30]-$kiek2; }

if ($kas == "lyn") {
$g_kaina = 70*$kiek3; if ($kit[31]<$kiek3){ $er = "Tiek fazanu neturi!"; }
$kit[31] = $kit[31]-$kiek3; }

if ($kas == "rau") {
$g_kaina = 100*$kiek4; if ($kit[32]<$kiek4){ $er = "Tiek tetervinu neturi!"; }
$kit[32] = $kit[32]-$kiek4; }

if ($kas == "kap") {
$g_kaina = 300*$kiek5; if ($kit[33]<$kiek5){ $er = "Tiek stirnienos neturi!"; }
$kit[33] = $kit[33]-$kiek5; }

if ($kas == "sta") {
$g_kaina = 700*$kiek6; if ($kit[34]<$kiek6){ $er = "Tiek elnienos neturi!"; }
$kit[34] = $kit[34]-$kiek6; }

if ($kas == "lyd") {
$g_kaina = 1000*$kiek7; if ($kit[35]<$kiek7){ $er = "Tiek briedzio mesos neturi!"; }
$kit[35] = $kit[35]-$kiek7; }

if ($kas == "ser") {
$g_kaina = 1200*$kiek8; if ($kit[36]<$kiek8){ $er = "Tiek sernienos neturi!"; }
$kit[36] = $kit[36]-$kiek8; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Mesa parduota, gavai <u>$g_kaina</u> pinigu.";

$pin = $pinigai+$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kmesa2") { 
include("icludekitainf/nuskait.php");
echo"<p align=\"center\"><small>
<b>Keptos mesos pardavimas</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Keptu balandziu (30$$ vnt)[$kit[45]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu zuikiu (80$$ vnt)[$kit[46]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu fazanu (100$$ vnt)[$kit[47]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=lyn' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu tetervinu (120$$ vnt)[$kit[48]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=rau' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptos stirnienos (500$$ vnt)[$kit[49]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=kap' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptos elnienos (900$$ vnt)[$kit[50]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=sta' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>


- Keptos briedzio mesos (1200$$ vnt)[$kit[51]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=lyd' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptos sernienos (1500$$ vnt)[$kit[52]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kmes&amp;kas=ser' method='post'>
<input name=\"kiek11\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pard_kmes") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "ser"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 

if ($kas == "kar") {
$g_kaina = 30*$kiek; if ($kit[45]<$kiek){ $er = "Tiek keptu balandziu neturi!"; }
$kit[45] = $kit[45]-$kiek; }

if ($kas == "ese") {
$g_kaina = 80*$kiek2; if ($kit[46]<$kiek2){ $er = "Tiek keptu zuikiu neturi!"; }
$kit[46] = $kit[46]-$kiek2; }

if ($kas == "lyn") {
$g_kaina = 100*$kiek3; if ($kit[47]<$kiek3){ $er = "Tiek keptu fazanu neturi!"; }
$kit[47] = $kit[47]-$kiek3; }

if ($kas == "rau") {
$g_kaina = 120*$kiek4; if ($kit[48]<$kiek4){ $er = "Tiek keptu tetervinu neturi!"; }
$kit[48] = $kit[48]-$kiek4; }

if ($kas == "kap") {
$g_kaina = 500*$kiek5; if ($kit[49]<$kiek5){ $er = "Tiek keptos stirnienos neturi!"; }
$kit[49] = $kit[49]-$kiek5; }

if ($kas == "sta") {
$g_kaina = 900*$kiek6; if ($kit[50]<$kiek6){ $er = "Tiek keptos elnienos neturi!"; }
$kit[50] = $kit[50]-$kiek6; }

if ($kas == "lyd") {
$g_kaina = 1200*$kiek7; if ($kit[51]<$kiek7){ $er = "Tiek keptos briedzio mesos neturi!"; }
$kit[51] = $kit[51]-$kiek7; }

if ($kas == "ser") {
$g_kaina = 1500*$kiek8; if ($kit[52]<$kiek8){ $er = "Tiek keptos sernienos neturi!"; }
$kit[52] = $kit[52]-$kiek8; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Kepta mesa parduota, gavai <u>$g_kaina</u> pinigu.";

$pin = $pinigai+$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kmesa") { echo"<p align=\"center\"><small>
<b>Kepta mesa</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Keptu balandziu (700$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu zuikiu (5000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu fazanu (6000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu tetervinu (7000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptos stirnienos (10000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptos elnienos (15000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptos briedzio mesos (20000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptos sernienos (30000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kmes&amp;kas=ser' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mesa1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_kmes") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "ser"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
include("icludekitainf/nuskait.php");
if ($kas == "kar") {
$g_kaina = 700*$kiek;
$kit[45] = $kit[45]+$kiek; }

if ($kas == "ese") {
$g_kaina = 5000*$kiek2;
$kit[46] = $kit[46]+$kiek2; }

if ($kas == "lyn") {
$g_kaina = 6000*$kiek3;
$kit[47] = $kit[47]+$kiek3; }

if ($kas == "rau") {
$g_kaina = 7000*$kiek4;
$kit[48] = $kit[48]+$kiek4; }

if ($kas == "kap") {
$g_kaina = 10000*$kiek5;
$kit[49] = $kit[49]+$kiek5; }

if ($kas == "sta") {
$g_kaina = 15000*$kiek6;
$kit[50] = $kit[50]+$kiek6; }

if ($kas == "lyd") {
$g_kaina = 20000*$kiek7;
$kit[51] = $kit[51]+$kiek7; }

if ($kas == "ser") {
$g_kaina = 30000*$kiek8;
$kit[52] = $kit[52]+$kiek8; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Kepta mesa nupirkta";

$pin = $pinigai-$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kmesa\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "lankai"){ echo"<p align=\"center\"><small>
<b>Lankai, streles</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Streliu antgaliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=ant\">Pirkti</a> [30]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=ant\">Parduoti</a> [5]<br/>
<b>Streliu koteliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=kot\">Pirkti</a> [30]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=kot\">Parduoti</a> [5]<br/>
<b>Streles<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=str\">Pirkti</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=str\">Parduoti</a> [10]<br/>
<b>Alksnio lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=alk\">Pirkti</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=alk\">Parduoti</a> [20]<br/>
<b>Ievos lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=iev\">Pirkti</a> [1000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=iev\">Parduoti</a> [80]<br/>
<b>Gluosnio lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=glu\">Pirkti</a> [10000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=glu\">Parduoti</a> [200]<br/>
<b>Topolio lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=top\">Pirkti</a> [50000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=top\">Parduoti</a> [600]<br/>
<b>Klevo lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=kle\">Pirkti</a> [100000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=kle\">Parduoti</a> [1500]<br/>
<b>Azuolo lankai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpirkt&amp;kas=azu\">Pirkti</a> [300000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=strelpard&amp;kas=azu\">Parduoti</a> [2000]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "strelpard"){
if ($kas == "ant" or $kas == "kot" or $kas == "str" or $kas == "alk" or $kas == "iev" or $kas == "glu" or $kas == "top" or $kas == "kle" or $kas == "azu"){ 
include("icludekitainf/nuskait.php");
if ($kas == "ant"){
$ginklas2 = $kit[24];
$kaina = 5;
$kit[24] = $kit[24]-1; }
if ($kas == "kot"){
$ginklas2 = $kit[26];
$kaina = 5;
$kit[26] = $kit[26]-1; }
if ($kas == "str"){
$ginklas2 = $kit[27];
$kaina = 10;
$kit[27] = $kit[27]-1; }
if ($kas == "alk"){
$ginklas2 = $kit[18];
$kaina = 20;
$kit[18] = $kit[18]-1; }
if ($kas == "iev"){
$ginklas2 = $kit[19];
$kaina = 80;
$kit[19] = $kit[19]-1; }
if ($kas == "glu"){
$ginklas2 = $kit[20];
$kaina = 200;
$kit[20] = $kit[20]-1; }
if ($kas == "top"){
$ginklas2 = $kit[21];
$kaina = 600;
$kit[21] = $kit[21]-1; }
if ($kas == "kle"){
$ginklas2 = $kit[22];
$kaina = 1500;
$kit[22] = $kit[22]-1; }
if ($kas == "azu"){
$ginklas2 = $kit[23];
$kaina = 2000;
$kit[23] = $kit[23]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokio daikto neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras.php");
echo"<p align=\"center\"><small><b>Daiktas parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "strelpirkt") {
if ($kas == "ant" or $kas == "kot" or $kas == "str" or $kas == "alk" or $kas == "iev" or $kas == "glu" or $kas == "top" or $kas == "kle" or $kas == "azu"){ 
include("icludekitainf/nuskait.php");
if ($kas == "ant") { 
$g_kaina = 30;
$kit[24] = $kit[24]+1; }

if ($kas == "kot") { 
$g_kaina = 30;
$kit[26] = $kit[26]+1; }

if ($kas == "str") { 
$g_kaina = 100;
$kit[27] = $kit[27]+1; }

if ($kas == "alk") { 
$g_kaina = 100;
$kit[18] = $kit[18]+1; }

if ($kas == "iev") { 
$g_kaina = 1000;
$kit[19] = $kit[19]+1; }

if ($kas == "glu") { 
$g_kaina = 10000;
$kit[20] = $kit[20]+1; }

if ($kas == "top") { 
$g_kaina = 50000;
$kit[21] = $kit[21]+1; }

if ($kas == "kle") { 
$g_kaina = 100000;
$kit[22] = $kit[22]+1; }

if ($kas == "azu") { 
$g_kaina = 300000;
$kit[23] = $kit[23]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Daiktas nupirktas!<br/>Jis atsirado tavo inventoriuje.";
$pin = $pinigai-$g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "medziai"){ include("icludekitainf/nuskait.php"); echo"<p align=\"center\"><small>
<b>Medziai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Alksniai [$kit[12]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=al\">Pirkti</a> [50]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=al\">Parduoti</a> [10]<br/>
<b>Ievos [$kit[13]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=ie\">Pirkti</a> [100]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=ie\">Parduoti</a> [30]<br/>
<b>Gluosniai [$kit[14]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=gl\">Pirkti</a> [300]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=gl\">Parduoti</a> [70]<br/>
<b>Topoliai [$kit[15]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=to\">Pirkti</a> [3000]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=to\">Parduoti</a> [400]<br/>
<b>Klevai [$kit[16]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=kl\">Pirkti</a> [10000]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=kl\">Parduoti</a> [2000]<br/>
<b>Azuolai [$kit[17]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=az\">Pirkti</a> [30000]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=az\">Parduoti</a> [3000]<br/>
<b>Maumedziai [$kit[18]]<br/></b>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepirkt&amp;kas=ma\">Pirkti</a> [40000]<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mepard&amp;kas=ma\">Parduoti</a> [5000]<br/>

</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "mepirkt") {
if ($kas == "al" or $kas == "ie" or $kas == "gl" or $kas == "to" or $kas == "kl" or $kas == "az" or $kas == "ma"){ 
include("icludekitainf/nuskait.php");
if ($kas == "al") { 
$g_kaina = 50;
$kit[12] = $kit[12]+1; }
if ($kas == "ie") { 
$g_kaina = 100;
$kit[13] = $kit[13]+1; }
if ($kas == "gl") { 
$g_kaina = 300;
$kit[14] = $kit[14]+1; }
if ($kas == "to") { 
$g_kaina = 3000;
$kit[15] = $kit[15]+1; }
if ($kas == "kl") { 
$g_kaina = 10000;
$kit[16] = $kit[16]+1; }
if ($kas == "az") { 
$g_kaina = 30000;
$kit[17] = $kit[17]+1; }
if ($kas == "ma") { 
$g_kaina = 40000;
$kit[18] = $kit[18]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Medis nupirktas!<br/>Jis atsirado tavo inventoriuje.";
$pin = $pinigai-$g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=medziai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mepard"){
if ($kas == "al" or $kas == "ie" or $kas == "gl" or $kas == "to" or $kas == "kl" or $kas == "az" or $kas == "ma"){ 
include("icludekitainf/nuskait.php");
if ($kas == "al"){
$ginklas2 = $kit[12];
$kaina = 10;
$kit[12] = $kit[12]-1; }

if ($kas == "ie"){
$ginklas2 = $kit[13];
$kaina = 30;
$kit[13] = $kit[13]-1; }

if ($kas == "gl"){
$ginklas2 = $kit[14];
$kaina = 70;
$kit[14] = $kit[14]-1; }

if ($kas == "to"){
$ginklas2 = $kit[15];
$kaina = 400;
$kit[15] = $kit[15]-1; }

if ($kas == "kl"){
$ginklas2 = $kit[16];
$kaina = 2000;
$kit[16] = $kit[16]-1; }

if ($kas == "az"){
$ginklas2 = $kit[17];
$kaina = 3000;
$kit[17] = $kit[17]-1; }

if ($kas == "ma"){
$ginklas2 = $kit[18];
$kaina = 5000;
$kit[18] = $kit[18]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokio medzio malkos neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras.php");
echo"<p align=\"center\"><small><b>Medis parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=medziai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}


if ($id == "kirviai"){ echo"<p align=\"center\"><small>
<b>Kirviai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Bronze kirviai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpirkt&amp;kas=bro\">Pirkti</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpard&amp;kas=bro\">Parduoti</a> [50]<br/>
<b>Spyziniai kirviai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpirkt&amp;kas=spy\">Pirkti</a> [3000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpard&amp;kas=spy\">Parduoti</a> [1000]<br/>
<b>Geleziniai kirviai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpirkt&amp;kas=gel\">Pirkti</a> [50000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpard&amp;kas=gel\">Parduoti</a> [20000]<br/>
<b>Plieniniai kirviai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpirkt&amp;kas=pli\">Pirkti</a> [100000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kkpard&amp;kas=pli\">Parduoti</a> [30000]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kkpirkt") {
if ($kas == "bro" or $kas == "spy" or $kas == "gel" or $kas == "pli"){ 
include("icludekitainf/nuskait.php");
if ($kas == "bro") { 
$g_kaina = 100;
$kit[7] = $kit[7]+1; }
if ($kas == "spy") { 
$g_kaina = 3000;
$kit[8] = $kit[8]+1; }
if ($kas == "gel") { 
$g_kaina = 50000;
$kit[9] = $kit[9]+1; }
if ($kas == "pli") { 
$g_kaina = 100000;
$kit[10] = $kit[10]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Kirvis nupirktas!<br/>Jis atsirado tavo inventoriuje.";
$pin = $pinigai-$g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirviai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kkpard"){
if ($kas == "bro" or $kas == "spy" or $kas == "gel" or $kas == "pli"){ 
include("icludekitainf/nuskait.php");
if ($kas == "bro"){
$ginklas2 = $kit[7];
$kaina = 50;
$kit[7] = $kit[7]-1; }
if ($kas == "spy"){
$ginklas2 = $kit[8];
$kaina = 1000;
$kit[8] = $kit[8]-1; }
if ($kas == "gel"){
$ginklas2 = $kit[9];
$kaina = 20000;
$kit[9] = $kit[9]-1; }
if ($kas == "pli"){
$ginklas2 = $kit[10];
$kaina = 30000;
$kit[10] = $kit[10]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokio kirvio neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras.php");
echo"<p align=\"center\"><small><b>Kirvis parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirviai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "zuvys1"){ echo"<p align=\"center\"><small>
<b>Zuvys</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Nekeptos</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys2\">Parduoti</a><br/>
<b>Keptos</b><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kzuvys\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kzuvys2\">Parduoti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kzuvys2") { 
include("icludekitainf/nuskait.php");
echo"<p align=\"center\"><small>
<b>Keptu zuvu pardavimas</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Keptu karosu (5$$ vnt)[$kit[38]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu eseriu (20$$ vnt)[$kit[39]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu lynu (80$$ vnt)[$kit[40]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu raudziu (200$$ vnt)[$kit[41]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu karpiu (300$$ vnt)[$kit[42]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu starkiu (500$$ vnt)[$kit[43]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu lydeku (800$$ vnt)[$kit[44]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu veziu (3000$$ vnt)[$dari[64]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=vez' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu kardzuviu (6000$$ vnt)[$dari[65]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=kard' method='post'>
<input name=\"kiek9\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Keptu rykliu (10000$$ vnt)[$dari[66]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_kzuv&amp;kas=ryk' method='post'>
<input name=\"kiek10\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pard_kzuv") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "vez" or $kas == "kard" or $kas == "ryk"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
$kiek9 = ereg_replace("[^0-9]","",$_POST['kiek9']); 
$kiek10 = ereg_replace("[^0-9]","",$_POST['kiek10']); 

if ($kas == "kar") {
$g_kaina = 5*$kiek; if ($kit[38]<$kiek){ $er = "Tiek keptu karosu neturi!"; }
$kit[38] = $kit[38]-$kiek; }

if ($kas == "ese") {
$g_kaina = 20*$kiek2; if ($kit[39]<$kiek2){ $er = "Tiek keptu eseriu neturi!"; }
$kit[39] = $kit[39]-$kiek2; }

if ($kas == "lyn") {
$g_kaina = 80*$kiek3; if ($kit[40]<$kiek3){ $er = "Tiek keptu lynu neturi!"; }
$kit[40] = $kit[40]-$kiek3; }

if ($kas == "rau") {
$g_kaina = 200*$kiek4; if ($kit[41]<$kiek4){ $er = "Tiek keptu raudziu neturi!"; }
$kit[41] = $kit[41]-$kiek4; }

if ($kas == "kap") {
$g_kaina = 300*$kiek5; if ($kit[42]<$kiek5){ $er = "Tiek keptu karpiu neturi!"; }
$kit[42] = $kit[42]-$kiek5; }

if ($kas == "sta") {
$g_kaina = 500*$kiek6; if ($kit[43]<$kiek6){ $er = "Tiek keptu starkiu neturi!"; }
$kit[43] = $kit[43]-$kiek6; }

if ($kas == "lyd") {
$g_kaina = 800*$kiek7; if ($kit[44]<$kiek7){ $er = "Tiek keptu lydeku neturi!"; }
$kit[44] = $kit[44]-$kiek7; }

if ($kas == "vez") {
$g_kaina = 2000*$kiek8; if ($dari[64]<$kiek8){ $er = "Tiek keptu veziu neturi!"; }
$dari[64] = $dari[64]-$kiek8; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($kas == "kard") {
$g_kaina = 3000*$kiek9; if ($dari[65]<$kiek9){ $er = "Tiek keptu kardzuviu neturi!"; }
$dari[65] = $dari[65]-$kiek9; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($kas == "ryk") {
$g_kaina = 5000*$kiek10; if ($dari[66]<$kiek10){ $er = "Tiek keptu rykliu neturi!"; }
$dari[66] = $dari[66]-$kiek10; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Keptos zuvys parduotos, gavai <u>$g_kaina</u> pinigu.";

$pin = $pinigai+$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kzuvys") { echo"<p align=\"center\"><small>
<b>Keptos zuvys</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Keptu karosu (150$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu eseriu (600$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu lynu (1300$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu raudziu (3500$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu karpiu (5500$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu starkiu (8000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu lydeku (13000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu veziu (40000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=vez' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu kardzuviu (50000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=kard' method='post'>
<input name=\"kiek9\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Keptu rykliu (70000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_kzuv&amp;kas=ryk' method='post'>
<input name=\"kiek10\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_kzuv") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "vez" or $kas == "kard" or $kas == "ryk"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
$kiek9 = ereg_replace("[^0-9]","",$_POST['kiek9']); 
$kiek10 = ereg_replace("[^0-9]","",$_POST['kiek10']); 
include("icludekitainf/nuskait.php");
if ($kas == "kar") {
$g_kaina = 150*$kiek;
$kit[38] = $kit[38]+$kiek; }

if ($kas == "ese") {
$g_kaina = 600*$kiek2;
$kit[39] = $kit[39]+$kiek2; }

if ($kas == "lyn") {
$g_kaina = 1300*$kiek3;
$kit[40] = $kit[40]+$kiek3; }

if ($kas == "rau") {
$g_kaina = 3500*$kiek4;
$kit[41] = $kit[41]+$kiek4; }

if ($kas == "kap") {
$g_kaina = 5500*$kiek5;
$kit[42] = $kit[42]+$kiek5; }

if ($kas == "sta") {
$g_kaina = 8000*$kiek6;
$kit[43] = $kit[43]+$kiek6; }

if ($kas == "lyd") {
$g_kaina = 13000*$kiek7;
$kit[44] = $kit[44]+$kiek7; }

if ($kas == "vez") {
$g_kaina = 40000*$kiek8; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[64] = $dari[64]+$kiek8; }

if ($kas == "kard") {
$g_kaina = 50000*$kiek9; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[65] = $dari[65]+$kiek9; }

if ($kas == "ryk") {
$g_kaina = 70000*$kiek10; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[66] = $dari[66]+$kiek10; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Keptos zuvys nupirktos";

$pin = $pinigai-$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kzuvys\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "zuvys2") { echo"<p align=\"center\"><small>
<b>Zuvu pardavimas</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Karosai (10$$ vnt)[$karosu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=' method=kar'post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Eseriu (30$$ vnt)[$eseriu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Lynu (100$$ vnt)[$lynu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Raudziu (300$$ vnt)[$raudziu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Karpiu (500$$ vnt)[$karpiu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Starkiu (700$$ vnt)[$starkiu]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Lydeku (1000$$ vnt)[$lydeku]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Veziu (1500$$ vnt)[$dari[61]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=vez' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Kardzuviu (3000$$ vnt)[$dari[62]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=kard' method='post'>
<input name=\"kiek9\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/>

- Rykliu (6000$$ vnt)[$dari[63]]<br/>
Kiek parduosi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=pard_zuv&amp;kas=ryk' method='post'>
<input name=\"kiek10\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Parduoti'></form><br/><br/></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pard_zuv") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "vez" or $kas == "kard" or $kas == "ryk"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
$kiek9 = ereg_replace("[^0-9]","",$_POST['kiek9']); 
$kiek10 = ereg_replace("[^0-9]","",$_POST['kiek10']); 

if ($kas == "kar") {
$g_kaina = 10*$kiek; if ($karosu<$kiek){ $er = "Tiek karosu neturi!"; }
$karosu = $karosu-$kiek; }

if ($kas == "ese") {
$g_kaina = 30*$kiek2; if ($eseriu<$kiek2){ $er = "Tiek eseriu neturi!"; }
$eseriu = $eseriu-$kiek2; }

if ($kas == "lyn") {
$g_kaina = 100*$kiek3; if ($lynu<$kiek3){ $er = "Tiek lynu neturi!"; }
$lynu = $lynu-$kiek3; }

if ($kas == "rau") {
$g_kaina = 300*$kiek4; if ($raudziu<$kiek4){ $er = "Tiek raudziu neturi!"; }
$raudziu = $raudziu-$kiek4; }

if ($kas == "kap") {
$g_kaina = 500*$kiek5; if ($karpiu<$kiek5){ $er = "Tiek karpiu neturi!"; }
$karpiu = $karpiu-$kiek5; }

if ($kas == "sta") {
$g_kaina = 700*$kiek6; if ($starkiu<$kiek6){ $er = "Tiek starkiu neturi!"; }
$starkiu = $starkiu-$kiek6; }

if ($kas == "lyd") {
$g_kaina = 1000*$kiek7; if ($lydeku<$kiek7){ $er = "Tiek lydeku neturi!"; }
$lydeku = $lydeku-$kiek7; }

if ($kas == "vez") {
$g_kaina = 1500*$kiek8; if ($dari[61]<$kiek8){ $er = "Tiek veziu neturi!"; }
$dari[61] = $dari[61]-$kiek8; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($kas == "kard") {
$g_kaina = 2000*$kiek9; if ($dari[62]<$kiek9){ $er = "Tiek kardzuviu neturi!"; }
$dari[62] = $dari[62]-$kiek9; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($kas == "ryk") {
$g_kaina = 3000*$kiek10; if ($dari[63]<$kiek10){ $er = "Tiek rykliu neturi!"; }
$dari[63] = $dari[63]-$kiek10; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}}

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Zyvys parduotos, gavai <u>$g_kaina</u> pinigu.";

$pin = $pinigai+$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras2.php");
$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|");
fclose($fp1);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}


if ($id == "zuvys") { echo"<p align=\"center\"><small>
<b>Zuvys</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Karosai (100$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=kar' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Eseriu (500$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=ese' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Lynu (1000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=lyn' method='post'>
<input name=\"kiek3\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Raudziu (3000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=rau' method='post'>
<input name=\"kiek4\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Karpiu (5000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=kap' method='post'>
<input name=\"kiek5\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Starkiu (7000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=sta' method='post'>
<input name=\"kiek6\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Lydeku (10000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=lyd' method='post'>
<input name=\"kiek7\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Veziu (40000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=vez' method='post'>
<input name=\"kiek8\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Kardzuviu (50000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=kard' method='post'>
<input name=\"kiek9\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Rykliu (70000$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_zuv&amp;kas=ryk' method='post'>
<input name=\"kiek10\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_zuv") {
if ($kas == "kar" or $kas == "ese" or $kas == "lyn" or $kas == "rau" or $kas == "kap" or $kas == "sta" or $kas == "lyd" or $kas == "vez" or $kas == "kard" or $kas == "ryk"){
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 
$kiek3 = ereg_replace("[^0-9]","",$_POST['kiek3']); 
$kiek4 = ereg_replace("[^0-9]","",$_POST['kiek4']); 
$kiek5 = ereg_replace("[^0-9]","",$_POST['kiek5']); 
$kiek6 = ereg_replace("[^0-9]","",$_POST['kiek6']); 
$kiek7 = ereg_replace("[^0-9]","",$_POST['kiek7']); 
$kiek8 = ereg_replace("[^0-9]","",$_POST['kiek8']); 
$kiek9 = ereg_replace("[^0-9]","",$_POST['kiek9']); 
$kiek10 = ereg_replace("[^0-9]","",$_POST['kiek10']); 
if ($kas == "kar") {
$g_kaina = 100*$kiek;
$karosu = $karosu+$kiek; }

if ($kas == "ese") {
$g_kaina = 500*$kiek2;
$eseriu = $eseriu+$kiek2; }

if ($kas == "lyn") {
$g_kaina = 1000*$kiek3;
$lynu = $lynu+$kiek3; }

if ($kas == "rau") {
$g_kaina = 3000*$kiek4;
$raudziu = $raudziu+$kiek4; }

if ($kas == "kap") {
$g_kaina = 5000*$kiek5;
$karpiu = $karpiu+$kiek5; }

if ($kas == "sta") {
$g_kaina = 7000*$kiek6;
$starkiu = $starkiu+$kiek6; }

if ($kas == "lyd") {
$g_kaina = 10000*$kiek7;
$lydeku = $lydeku+$kiek7; }

if ($kas == "vez") {
$g_kaina = 40000*$kiek8; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[61] = $dari[61]+$kiek8; }

if ($kas == "kard") {
$g_kaina = 50000*$kiek9; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[62] = $dari[62]+$kiek9; }

if ($kas == "ryk") {
$g_kaina = 70000*$kiek10; if ($dari[0]!="+"){ $er = "Cia galima tik isrinktiesiems!";}
$dari[63] = $dari[63]+$kiek10; }
if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Zyvys nupirktos";

$pin = $pinigai-$g_kaina;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||");
fclose($fp);
include("icludekitainf/iras2.php");
$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|");
fclose($fp1);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=zuvys\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kirtikliai"){ echo"<p align=\"center\"><small>
<b>Kirtikliai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Bronze kirtikliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpirkt&amp;kas=bro\">Pirkti</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpard&amp;kas=bro\">Parduoti</a> [50]<br/>
<b>Spyziniai kirtikliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpirkt&amp;kas=spy\">Pirkti</a> [3000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpard&amp;kas=spy\">Parduoti</a> [1000]<br/>
<b>Geleziniai kirtikliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpirkt&amp;kas=gel\">Pirkti</a> [50000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpard&amp;kas=gel\">Parduoti</a> [20000]<br/>
<b>Plieniniai kirtikliai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpirkt&amp;kas=pli\">Pirkti</a> [100000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kpard&amp;kas=pli\">Parduoti</a> [30000]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kpirkt") {
if ($kas == "bro" or $kas == "spy" or $kas == "gel" or $kas == "pli"){ 
include("icludekitainf/nuskait.php");
if ($kas == "bro") { 
$g_kaina = 100;
$kit[3] = $kit[3]+1; }
if ($kas == "spy") { 
$g_kaina = 3000;
$kit[4] = $kit[4]+1; }
if ($kas == "gel") { 
$g_kaina = 50000;
$kit[5] = $kit[5]+1; }
if ($kas == "pli") { 
$g_kaina = 100000;
$kit[6] = $kit[6]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Kirtiklis nupirktas!<br/>Jis atsirado tavo inventoriuje.";
$pin = $pinigai-$g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirtikliai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "kpard"){
if ($kas == "bro" or $kas == "spy" or $kas == "gel" or $kas == "pli"){ 
include("icludekitainf/nuskait.php");
if ($kas == "bro"){
$ginklas2 = $kit[3];
$kaina = 50;
$kit[3] = $kit[3]-1; }
if ($kas == "spy"){
$ginklas2 = $kit[4];
$kaina = 1000;
$kit[4] = $kit[4]-1; }
if ($kas == "gel"){
$ginklas2 = $kit[5];
$kaina = 20000;
$kit[5] = $kit[5]-1; }
if ($kas == "pli"){
$ginklas2 = $kit[6];
$kaina = 30000;
$kit[6] = $kit[6]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokio kirtiklio neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras.php");
echo"<p align=\"center\"><small><b>Kirtiklis parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=kirtikliai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}


if ($id == "meskeres"){ echo"<p align=\"center\"><small>
<b>Meskeres</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>Lazdinines meskeres<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpirkt&amp;kas=laz\">Pirkti</a> [100]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpard&amp;kas=laz\">Parduoti</a> [50]<br/>
<b>Bambukines meskeres<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpirkt&amp;kas=bam\">Pirkti</a> [5000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpard&amp;kas=bam\">Parduoti</a> [2000]<br/>
<b>Spiningai<br/></b>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpirkt&amp;kas=spi\">Pirkti</a> [100000]<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=mpard&amp;kas=spi\">Parduoti</a> [30000]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "mpirkt") {
if ($kas == "laz" or $kas == "bam" or $kas == "spi"){ 
include("icludekitainf/nuskait.php");
if ($kas == "laz") { 
$g_kaina = 100;
$kit[0] = $kit[0]+1; }
if ($kas == "bam") { 
$g_kaina = 5000;
$kit[1] = $kit[1]+1; }
if ($kas == "spi") { 
$g_kaina = 100000;
$kit[2] = $kit[2]+1; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Meskere nupirkta!<br/>Ji atsirado tavo inventoriuje.";
$pin = $pinigai-$g_kaina;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=meskeres\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mpard"){
if ($kas == "laz" or $kas == "bam" or $kas == "spi"){ 
include("icludekitainf/nuskait.php");
if ($kas == "laz"){
$ginklas2 = $kit[0];
$kaina = 50;
$kit[0] = $kit[0]-1; }
if ($kas == "bam"){
$ginklas2 = $kit[1];
$kaina = 2000;
$kit[1] = $kit[1]-1; }
if ($kas == "spi"){
$ginklas2 = $kit[2];
$kaina = 30000;
$kit[2] = $kit[2]-1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokios meskeres neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
include("icludekitainf/iras.php");
echo"<p align=\"center\"><small><b>Meskere parduota,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=meskeres\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "ginklai1"){ echo"<p align=\"center\"><small>
<b>Ginklai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginklai\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_ginklus\">Parduoti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "ginklai") { echo"<p align=\"center\"><small>
<b>Ginklai</b><br/>
Kiek_yra_partuotuvej Ginklo_pavadinimas (Ginklo ataka / kaina / min patirties lygis)<br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>$bk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=bro\">Bronzinis kardas</a>(+2/ 100 / 1)<br/>
<b>$spk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=spy\">Spyzinis kardas</a>(+5 / 500/ 3)<br/>
<b>$zk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=zal\">Zalvarinis kardas</a>(+10 / 1000 / 8)<br/>
<b>$vk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=var\">Varinis kardas</a>(+20 / 5000 / 15)<br/>
<b>$gk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=gel\">Gelezinis kardas</a>(+25/ 10000 / 20)<br/>
<b>$pk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=pli\">Plieninis kardas</a>(+30 / 50000 / 25)<br/>
<b>$sk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=sid\">Sidabrinis kardas</a>(+40 / 100000 / 30)<br/>
<b>$ak</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=auk\">Auksinis kardas</a>(+50 / 500000 / 40)<br/>
<b>$dk</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginkla&amp;kas=dra\">Dragon kardas</a>(+70 / 1000000 / 50)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginklai1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "ginkla") {
if ($kas == "bro") {
$g_kaina = 100;
$bronze_swordu = $bronze_swordu+1; 
$items[0] = $items[0]-1; $kiekis = $items[0]; }

if ($kas == "spy") {
$g_kaina = 500;
$spyziaus_swordu = $spyziaus_swordu+1; 
$items[1] = $items[1]-1; $kiekis = $items[1]; }

if ($kas == "zal") {
$g_kaina = 1000;
$zalvario_swordu = $zalvario_swordu+1; 
$items[2] = $items[2]-1; $kiekis = $items[2]; }

if ($kas == "var") {
$g_kaina = 5000;
$vario_swordu = $vario_swordu+1; 
$items[3] = $items[3]-1; $kiekis = $items[3]; }

if ($kas == "gel") {
$g_kaina = 10000;
$gelezies_swordu = $gelezies_swordu+1; 
$items[4] = $items[4]-1; $kiekis = $items[4]; }

if ($kas == "pli") {
$g_kaina = 50000;
$plieno_swordu = $plieno_swordu+1; 
$items[5] = $items[5]-1; $kiekis = $items[5]; }

if ($kas == "sid") {
$g_kaina = 100000;
$sidabro_swordu = $sidabro_swordu+1; 
$items[6] = $items[6]-1; $kiekis = $items[6]; }

if ($kas == "auk") {
$g_kaina = 500000;
$aukso_swordu = $aukso_swordu+1; 
$items[7] = $items[7]-1; $kiekis = $items[7]; }

if ($kas == "dra") {
$g_kaina = 1000000;
$dragon_swordu = $dragon_swordu+1;  
$items[8] = $items[8]-1; $kiekis = $items[8]; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($kiekis < 1){ $er = "Parduotuveje sie kardai ispirkti, lauk kol kas pagamins ir parduos!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Ginklas nupirktas!<br/>Jis atsirado tavo inventoriuje, nueik i ji ir uzsidek ginkla.";

$pin = "$pinigai"-"$g_kaina";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);

$fp2 = fopen("txt/parda.txt","w");
fwrite($fp2,"$items[0]|$items[1]|$items[2]|$items[3]|$items[4]|$items[5]|$items[6]|$items[7]|$items[8]|$items[9]|$items[10]|$items[11]|$items[12]|$items[13]|$items[14]|$items[15]|$items[16]|$items[17]|\n");
fclose($fp2);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginklai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "parduoti_ginklus"){
echo"<p align=\"center\"><small><b>Kokius kardus parduosi?</b><br/>
(Kiek turi / Kaina)<br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=bro\">Bronzini karda</a>($bronze_swordu/ 20)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=spy\">Spyzini karda</a>($spyziaus_swordu / 50)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=zal\">Zalvarini karda</a>($zalvario_swordu / 100)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=var\">Varini karda</a>($vario_swordu / 300)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=gel\">Gelezini karda</a>($gelezies_swordu / 3000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=pli\">Plienini karda</a>($plieno_swordu / 5000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=sid\">Sidabrini karda</a>($sidabro_swordu / 8000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=auk\">Auksini karda</a>($aukso_swordu / 15000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu&amp;ka=dra\">Dragon karda</a>($dragon_swordu / 50000)<br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=ginklai1\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "parduodu"){

if ($ka == "bro"){
$ginklas2 = $bronze_swordu;
$kaina = 20;
$bronze_swordu = $bronze_swordu-1;
$items[0] = $items[0]+1; }

if ($ka == "spy"){
$ginklas2 = $spyziaus_swordu;
$kaina = 50;
$spyziaus_swordu = $spyziaus_swordu-1;
$items[1] = $items[1]+1; }

if ($ka == "zal"){
$ginklas2 = $zalvario_swordu;
$kaina = 100;
$zalvario_swordu = $zalvario_swordu-1;
$items[2] = $items[2]+1; }

if ($ka == "var"){
$ginklas2 = $vario_swordu;
$kaina = 300;
$vario_swordu = $vario_swordu-1;
$items[3] = $items[3]+1; }

if ($ka == "gel"){
$ginklas2 = $gelezies_swordu;
$kaina = 3000;
$gelezies_swordu = $gelezies_swordu-1;
$items[4] = $items[4]+1; }

if ($ka == "pli"){
$ginklas2 = $plieno_swordu;
$kaina = 5000;
$plieno_swordu = $plieno_swordu-1;
$items[5] = $items[5]+1; }

if ($ka == "sid"){
$ginklas2 = $sidabro_swordu;
$kaina = 8000;
$sidabro_swordu = $sidabro_swordu-1;
$items[6] = $items[6]+1; }

if ($ka == "auk"){
$ginklas2 = $aukso_swordu;
$kaina = 15000;
$aukso_swordu = $aukso_swordu-1;
$items[7] = $items[7]+1; }

if ($ka == "dra"){
$ginklas2 = $dragon_swordu;
$kaina = 50000;
$dragon_swordu = $dragon_swordu-1; 
$items[8] = $items[8]+1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Tokio ginklo neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 

$fp2 = fopen("txt/parda.txt","w");
fwrite($fp2,"$items[0]|$items[1]|$items[2]|$items[3]|$items[4]|$items[5]|$items[6]|$items[7]|$items[8]|$items[9]|$items[10]|$items[11]|$items[12]|$items[13]|$items[14]|$items[15]|$items[16]|$items[17]|\n");
fclose($fp2);

echo"<p align=\"center\"><small><b>Ginklas parduotas,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "sarvu_turgus"){ echo"<p align=\"center\"><small>
<b>Sarvai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirkti_sarvus\">Pirkti</a><br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_sarvus\">Parduoti</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pirkti_sarvus") { echo"<p align=\"center\"><small>
<b>Ginklai</b><br/>
Kiek_sarvu_yra_parduotuvej Sarvu_pavadinimas (Sarvu protection / kaina / min gynybos lygis)<br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
<b>$bs</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=bro\">Bronziniai sarvai</a>(+1/ 200 / 1)<br/>
<b>$sps</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=spy\">Spyziniai sarvai</a>(+2 / 1000/ 3)<br/>
<b>$zs</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=zal\">Zalvariniai sarvai</a>(+3 / 2000 / 8)<br/>
<b>$vs</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=var\">Variniai sarvai</a>(+5 / 10000 / 15)<br/>
<b>$gs</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=gel\">Geleziniai sarvai</a>(+6/ 20000 / 20)<br/>
<b>$ps</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=pli\">Plieniniai sarvai</a>(+8 / 100000 / 25)<br/>
<b>$ss</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=sid\">Sidabriniai sarvai</a>(+10 / 200000 / 30)<br/>
<b>$as</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=auk\">Auksiniai sarvai</a>(+20 / 1000000 / 40)<br/>
<b>$ds</b> <a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_sarv&amp;kas=dra\">Dragon sarvai</a>(+30 / 2000000 / 50)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=sarvu_turgus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_sarv") {
if ($kas == "bro") {
$g_kaina = 200;
$bronze_sarvu = $bronze_sarvu+1; 
$items[9] = $items[9]-1; $kiekis = $items[9]; }

if ($kas == "spy") {
$g_kaina = 1000;
$spyziaus_sarvu = $spyziaus_sarvu+1; 
$items[10] = $items[10]-1; $kiekis = $items[10]; }

if ($kas == "zal") {
$g_kaina = 2000;
$zalvario_sarvu = $zalvario_sarvu+1; 
$items[11] = $items[11]-1; $kiekis = $items[11]; }

if ($kas == "var") {
$g_kaina = 10000;
$vario_sarvu = $vario_sarvu+1; 
$items[12] = $items[12]-1; $kiekis = $items[12]; }

if ($kas == "gel") {
$g_kaina = 20000;
$gelezies_sarvu = $gelezies_sarvu+1; 
$items[13] = $items[13]-1; $kiekis = $items[13]; }

if ($kas == "pli") {
$g_kaina = 100000;
$plieno_sarvu = $plieno_sarvu+1; 
$items[14] = $items[14]-1; $kiekis = $items[14]; }

if ($kas == "sid") {
$g_kaina = 200000;
$sidabro_sarvu = $sidabro_sarvu+1; 
$items[15] = $items[15]-1; $kiekis = $items[15]; }

if ($kas == "auk") {
$g_kaina = 1000000;
$aukso_sarvu = $aukso_sarvu+1; 
$items[16] = $items[16]-1; $kiekis = $items[16]; }

if ($kas == "dra") {
$g_kaina = 2000000;
$dragon_sarvu = $dragon_sarvu+1;  
$items[17] = $items[17]-1; $kiekis = $items[17]; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }
if ($kiekis < 1){ $er = "Parduotuveje sie sarvai ispirkti, lauk kol kas pagamins ir parduos!"; }
if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Sarvai nupirkti!<br/>Jie atsirado tavo inventoriuje, nueik i ji ir uzsidek sarvus.";

$pin = "$pinigai"-"$g_kaina";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);

$fp2 = fopen("txt/parda.txt","w");
fwrite($fp2,"$items[0]|$items[1]|$items[2]|$items[3]|$items[4]|$items[5]|$items[6]|$items[7]|$items[8]|$items[9]|$items[10]|$items[11]|$items[12]|$items[13]|$items[14]|$items[15]|$items[16]|$items[17]|\n");
fclose($fp2); 
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=pirkti_sarvus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "parduoti_sarvus"){
echo"<p align=\"center\"><small><b>Kokius sarvus parduosi?</b><br/>
(Kiek turi / Kaina)<br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=bro\">Bronzinius sarvus</a>($bronze_sarvu / 30)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=spy\">Spyzinius sarvus</a>($spyziaus_sarvu / 70)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=zal\">Zalvarinius sarvus</a>($zalvario_sarvu / 200)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=var\">Varinius sarvus</a>($vario_sarvu / 500)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=gel\">Gelezinius sarvus</a>($gelezies_sarvu / 5000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=pli\">Plieninius sarvus</a>($plieno_sarvu / 8000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=sid\">Sidabrinius sarvus</a>($sidabro_sarvu / 10000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=auk\">Auksinius sarvus</a>($aukso_sarvu / 20000)<br/>
#<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduodu_sar&amp;ka=dra\">Dragon sarvus</a>($dragon_sarvu / 70000)<br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=sarvu_turgus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "parduodu_sar"){

if ($ka == "bro"){
$ginklas2 = $bronze_sarvu;
$kaina = 30;
$bronze_sarvu = $bronze_sarvu-1;
$items[9] = $items[9]+1; }

if ($ka == "spy"){
$ginklas2 = $spyziaus_sarvu;
$kaina = 70;
$spyziaus_sarvu = $spyziaus_sarvu-1;
$items[10] = $items[10]+1; }

if ($ka == "zal"){
$ginklas2 = $zalvario_sarvu;
$kaina = 200;
$zalvario_sarvu = $zalvario_sarvu-1;
$items[11] = $items[11]+1; }

if ($ka == "var"){
$ginklas2 = $vario_sarvu;
$kaina = 500;
$vario_sarvu = $vario_sarvu-1;
$items[12] = $items[12]+1; }

if ($ka == "gel"){
$ginklas2 = $gelezies_sarvu;
$kaina = 5000;
$gelezies_sarvu = $gelezies_sarvu-1;
$items[13] = $items[13]+1; }

if ($ka == "pli"){
$ginklas2 = $plieno_sarvu;
$kaina = 8000;
$plieno_sarvu = $plieno_sarvu-1;
$items[14] = $items[14]+1; }

if ($ka == "sid"){
$ginklas2 = $sidabro_sarvu;
$kaina = 10000;
$sidabro_sarvu = $sidabro_sarvu-1;
$items[15] = $items[15]+1; }

if ($ka == "auk"){
$ginklas2 = $aukso_sarvu;
$kaina = 20000;
$aukso_sarvu = $aukso_sarvu-1;
$items[16] = $items[16]+1; }

if ($ka == "dra"){
$ginklas2 = $dragon_sarvu;
$kaina = 70000;
$dragon_sarvu = $dragon_sarvu-1; 
$items[17] = $items[17]+1; }

if ($ginklas2 < 1 ){ echo "<p align=\"center\"><small><b>Siu sarvu neturi!</b><br/></small></p>"; }
else { 
$pin = $pinigai+$kaina;
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);

$fp2 = fopen("txt/parda.txt","w");
fwrite($fp2,"$items[0]|$items[1]|$items[2]|$items[3]|$items[4]|$items[5]|$items[6]|$items[7]|$items[8]|$items[9]|$items[10]|$items[11]|$items[12]|$items[13]|$items[14]|$items[15]|$items[16]|$items[17]|\n");
fclose($fp2); 

echo"<p align=\"center\"><small><b>Sarvai parduoti,</b><br/>
Gavai <b>$kaina</b> pinigu<br/></small></p>";
}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parduoti_sarvus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "masalai") { echo"<p align=\"center\"><small>
<b>Masalai</b><br/>
$lin<br/>
</small></p>
<p align=\"left\"><small>
- Sliekai (5$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mas&amp;kas=sli' method='post'>
<input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>

- Tesla (10$$ vnt)<br/>
Kiek pirksi:
<form action='parda.php?nick=$nick&amp;pass=$pass&amp;id=perku_mas&amp;kas=tes' method='post'>
<input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\"/><br/>
<input type='submit' value='Pirkti'></form><br/><br/>
</p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "perku_mas") {
$kiek = ereg_replace("[^0-9]","",$_POST['kiek']); 
$kiek2 = ereg_replace("[^0-9]","",$_POST['kiek2']); 

if ($kas == "sli") {
$g_kaina = 5*$kiek;
$slieku = $slieku+$kiek; 
 }

if ($kas == "tes") {
$g_kaina = 10*$kiek2;
$teslos = $teslos+$kiek2; 
 }
if ($kas == "sli"){ $er1 = "ak"; }
if ($kas == "tes"){ $er1 = "ak"; }
if ($er1 != "ak") { $er = "LAMA!"; }

if ($pinigai < $g_kaina) { $er = "Neuztenka pinigu!"; }

if ($g_kaina == "") { $er = "Nebugink!"; }

if ($er == ""){
$er = "Masalas nupirktas!";

$pin = "$pinigai"-"$g_kaina";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=masalai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

print'</card></wml>';

?>