<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Dirbtuves";
include("config.php"); 

if ($id == ""){  include("icludekitainf/nuskait.php"); 
echo"<p align=\"center\"><small>
<b>Dirbtuves</b><br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=kotus\">Gaminti streliu kotelius</a> (1 alksnio malka)<br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=streles\">Gaminti streles</a> (1 streles antgalis ir 1 kotelis)<br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=lankus\">Gaminti lankus</a><br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=dragon\">Apdirbti dragon akmenis</a> (butinas 1000 crafting)<br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mat\">Isdirbti materialus</a><br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=pirst\">Gaminti pirstines</a><br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=batus\">Gaminti batus</a><br/>
#<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=aps\">Gaminti apsiaustus</a><br/>

</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "pirst"){ 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); include("icludekitainf/nuskait.php"); 
echo"<p align=\"center\"><small>
<b>Kokias pirstines gaminsi?</b><br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
[turimas_kiekis_materialo tipas (minimum crafting lygis)]<br/>
<b>$dari[12]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=bro&amp;kd=$kodase\">Brown</a>(1)<br/>
<b>$dari[13]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=gra&amp;kd=$kodase\">Gray</a>(50)<br/>
<b>$dari[14]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=whi&amp;kd=$kodase\">White</a>(500)<br/>
<b>$dari[15]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=yel&amp;kd=$kodase\">Yellow</a>(1000)<br/>
<b>$dari[16]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=ora&amp;kd=$kodase\">Orange</a>(2000)<br/>
<b>$dari[17]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=gre&amp;kd=$kodase\">Green</a>(3000)<br/>
<b>$dari[18]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=red&amp;kd=$kodase\">Red</a>(4000)<br/>
<b>$dari[19]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmgaminu&amp;ka=bla&amp;kd=$kodase\">Black</a>(5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mmgaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel gaminti!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=pirst\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=pirst\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
include("icludekitainf/nuskait2.php");
	if ($ka == "bro") {
$minimum = 0;
$min_lvl = 1;
$dari[29] = $dari[29]+1;
if ($dari[12] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[12] = $dari[12]-1;
$x = 10; 
}
	if ($ka == "gra") {
$minimum = 50;
$min_lvl = 1.5;
$dari[30] = $dari[30]+1;
if ($dari[13] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[13] = $dari[13]-1;
$x = 30; 
}
	if ($ka == "whi") {
$minimum = 500;
$min_lvl = 2;
$dari[31] = $dari[31]+1;
if ($dari[14] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[14] = $dari[14]-1;
$x = 50; 
}
	if ($ka == "yel") {
$minimum = 1000;
$min_lvl = 2.5;
$dari[32] = $dari[32]+1;
if ($dari[15] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[15] = $dari[15]-1;
$x = 60; 
}
	if ($ka == "ora") {
$minimum = 2000;
$min_lvl = 3;
$dari[33] = $dari[33]+1;
if ($dari[16] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[16] = $dari[16]-1;
$x = 70; 
}
	if ($ka == "gre") {
$minimum = 3000;
$min_lvl = 3.5;
$dari[34] = $dari[34]+1;
if ($dari[17] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[17] = $dari[17]-1;
$x = 80; 
}
	if ($ka == "red") {
$minimum = 4000;
$min_lvl = 4;
$dari[35] = $dari[35]+1;
if ($dari[18] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[18] = $dari[18]-1;
$x = 90; 
}
	if ($ka == "bla") {
$minimum = 5000;
$min_lvl = 5;
$dari[36] = $dari[36]+1;
if ($dari[19] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[19] = $dari[19]-1;
$x = 100; 
}

if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($crafting < $minimum) { $badux = "Tavo crafting lygis per mazas";}
if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Pagaminta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=pirst\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

if ($id == "batus"){ 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); include("icludekitainf/nuskait.php"); 
echo"<p align=\"center\"><small>
<b>Kokius batus gaminsi?</b><br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
[turimas_kiekis_materialo tipas (minimum crafting lygis)]<br/>
<b>$dari[12]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=bro&amp;kd=$kodase\">Brown</a>(1)<br/>
<b>$dari[13]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=gra&amp;kd=$kodase\">Gray</a>(50)<br/>
<b>$dari[14]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=whi&amp;kd=$kodase\">White</a>(500)<br/>
<b>$dari[15]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=yel&amp;kd=$kodase\">Yellow</a>(1000)<br/>
<b>$dari[16]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=ora&amp;kd=$kodase\">Orange</a>(2000)<br/>
<b>$dari[17]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=gre&amp;kd=$kodase\">Green</a>(3000)<br/>
<b>$dari[18]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=red&amp;kd=$kodase\">Red</a>(4000)<br/>
<b>$dari[19]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmgaminu&amp;ka=bla&amp;kd=$kodase\">Black</a>(5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mmmgaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel gaminti!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=batus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=batus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
include("icludekitainf/nuskait2.php");
	if ($ka == "bro") {
$minimum = 0;
$min_lvl = 1;
$dari[37] = $dari[37]+1;
if ($dari[12] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[12] = $dari[12]-1;
$x = 10; 
}
	if ($ka == "gra") {
$minimum = 50;
$min_lvl = 1.5;
$dari[38] = $dari[38]+1;
if ($dari[13] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[13] = $dari[13]-1;
$x = 30; 
}
	if ($ka == "whi") {
$minimum = 500;
$min_lvl = 2;
$dari[39] = $dari[39]+1;
if ($dari[14] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[14] = $dari[14]-1;
$x = 50; 
}
	if ($ka == "yel") {
$minimum = 1000;
$min_lvl = 2.5;
$dari[40] = $dari[40]+1;
if ($dari[15] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[15] = $dari[15]-1;
$x = 60; 
}
	if ($ka == "ora") {
$minimum = 2000;
$min_lvl = 3;
$dari[41] = $dari[41]+1;
if ($dari[16] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[16] = $dari[16]-1;
$x = 70; 
}
	if ($ka == "gre") {
$minimum = 3000;
$min_lvl = 3.5;
$dari[42] = $dari[42]+1;
if ($dari[17] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[17] = $dari[17]-1;
$x = 80; 
}
	if ($ka == "red") {
$minimum = 4000;
$min_lvl = 4;
$dari[43] = $dari[43]+1;
if ($dari[18] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[18] = $dari[18]-1;
$x = 90; 
}
	if ($ka == "bla") {
$minimum = 5000;
$min_lvl = 5;
$dari[44] = $dari[44]+1;
if ($dari[19] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[19] = $dari[19]-1;
$x = 100; 
}

if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($crafting < $minimum) { $badux = "Tavo crafting lygis per mazas";}
if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Pagaminta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=batus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

if ($id == "aps"){ 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp); include("icludekitainf/nuskait.php"); 
echo"<p align=\"center\"><small>
<b>Koki apsiausta gaminsi?</b><br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
[turimas_kiekis_materialo tipas (minimum crafting lygis)]<br/>
<b>$dari[12]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=bro&amp;kd=$kodase\">Brown</a>(1)<br/>
<b>$dari[13]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=gra&amp;kd=$kodase\">Gray</a>(50)<br/>
<b>$dari[14]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=whi&amp;kd=$kodase\">White</a>(500)<br/>
<b>$dari[15]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=yel&amp;kd=$kodase\">Yellow</a>(1000)<br/>
<b>$dari[16]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=ora&amp;kd=$kodase\">Orange</a>(2000)<br/>
<b>$dari[17]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=gre&amp;kd=$kodase\">Green</a>(3000)<br/>
<b>$dari[18]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=red&amp;kd=$kodase\">Red</a>(4000)<br/>
<b>$dari[19]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mmmmgaminu&amp;ka=bla&amp;kd=$kodase\">Black</a>(5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mmmmgaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel gaminti!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=aps\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=aps\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
include("icludekitainf/nuskait2.php");
	if ($ka == "bro") {
$minimum = 0;
$min_lvl = 1;
$dari[45] = $dari[45]+1;
if ($dari[12] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[12] = $dari[12]-1;
$x = 10; 
}
	if ($ka == "gra") {
$minimum = 50;
$min_lvl = 1.5;
$dari[46] = $dari[46]+1;
if ($dari[13] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[13] = $dari[13]-1;
$x = 30; 
}
	if ($ka == "whi") {
$minimum = 500;
$min_lvl = 2;
$dari[47] = $dari[47]+1;
if ($dari[14] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[14] = $dari[14]-1;
$x = 50; 
}
	if ($ka == "yel") {
$minimum = 1000;
$min_lvl = 2.5;
$dari[48] = $dari[48]+1;
if ($dari[15] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[15] = $dari[15]-1;
$x = 60; 
}
	if ($ka == "ora") {
$minimum = 2000;
$min_lvl = 3;
$dari[49] = $dari[49]+1;
if ($dari[16] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[16] = $dari[16]-1;
$x = 70; 
}
	if ($ka == "gre") {
$minimum = 3000;
$min_lvl = 3.5;
$dari[50] = $dari[50]+1;
if ($dari[17] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[17] = $dari[17]-1;
$x = 80; 
}
	if ($ka == "red") {
$minimum = 4000;
$min_lvl = 4;
$dari[51] = $dari[51]+1;
if ($dari[18] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[18] = $dari[18]-1;
$x = 90; 
}
	if ($ka == "bla") {
$minimum = 5000;
$min_lvl = 5;
$dari[52] = $dari[52]+1;
if ($dari[19] < 1) { $badux = "Nepakanka apdirbto material!";}
$dari[19] = $dari[19]-1;
$x = 100; 
}

if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($crafting < $minimum) { $badux = "Tavo crafting lygis per mazas";}
if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Pagaminta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=aps\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

if ($id == "mat"){ 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
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
<b>Koki materiala apdirbsi?</b><br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
[turimas_kiekis_materialo tipas (minimum crafting lygis)]<br/>
<b>$dari[4]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=bro&amp;kd=$kodase\">Brown</a>(1)<br/>
<b>$dari[5]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=gra&amp;kd=$kodase\">Gray</a>(50)<br/>
<b>$dari[6]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=whi&amp;kd=$kodase\">White</a>(500)<br/>
<b>$dari[7]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=yel&amp;kd=$kodase\">Yellow</a>(1000)<br/>
<b>$dari[8]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=ora&amp;kd=$kodase\">Orange</a>(2000)<br/>
<b>$dari[9]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=gre&amp;kd=$kodase\">Green</a>(3000)<br/>
<b>$dari[10]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=red&amp;kd=$kodase\">Red</a>(4000)<br/>
<b>$dari[11]</b> <a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mgaminu&amp;ka=bla&amp;kd=$kodase\">Black</a>(5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mgaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel gaminti!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mat\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mat\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
include("icludekitainf/nuskait2.php");
	if ($ka == "bro") {
$minimum = 0;
$min_lvl = 1;
$dari[12] = $dari[12]+1;
if ($dari[4] < 1) { $badux = "Nepakanka material!";}
$dari[4] = $dari[4]-1;
$x = 10; 
}
	if ($ka == "gra") {
$minimum = 50;
$min_lvl = 1.5;
$dari[13] = $dari[13]+1;
if ($dari[5] < 1) { $badux = "Nepakanka material!";}
$dari[5] = $dari[5]-1;
$x = 30; 
}
	if ($ka == "whi") {
$minimum = 500;
$min_lvl = 2;
$dari[14] = $dari[14]+1;
if ($dari[6] < 1) { $badux = "Nepakanka material!";}
$dari[6] = $dari[6]-1;
$x = 50; 
}
	if ($ka == "yel") {
$minimum = 1000;
$min_lvl = 2.5;
$dari[15] = $dari[15]+1;
if ($dari[7] < 1) { $badux = "Nepakanka material!";}
$dari[7] = $dari[7]-1;
$x = 60; 
}
	if ($ka == "ora") {
$minimum = 2000;
$min_lvl = 3;
$dari[16] = $dari[16]+1;
if ($dari[8] < 1) { $badux = "Nepakanka material!";}
$dari[8] = $dari[8]-1;
$x = 70; 
}
	if ($ka == "gre") {
$minimum = 3000;
$min_lvl = 3.5;
$dari[17] = $dari[17]+1;
if ($dari[9] < 1) { $badux = "Nepakanka material!";}
$dari[9] = $dari[9]-1;
$x = 80; 
}
	if ($ka == "red") {
$minimum = 4000;
$min_lvl = 4;
$dari[18] = $dari[18]+1;
if ($dari[10] < 1) { $badux = "Nepakanka material!";}
$dari[10] = $dari[10]-1;
$x = 90; 
}
	if ($ka == "bla") {
$minimum = 5000;
$min_lvl = 5;
$dari[19] = $dari[19]+1;
if ($dari[11] < 1) { $badux = "Nepakanka material!";}
$dari[11] = $dari[11]-1;
$x = 100; 
}

if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($crafting < $minimum) { $badux = "Tavo crafting lygis per mazas";}
if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Apdirbta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=mat\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }


if ($id == "dragon") {
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
include("icludekitainf/nuskait2.php");
include("icludekitainf/nuskait.php");
$min_lvl = 2;
$x = 100; 

if ($dari[2] < 1) { $badux = "Nepakanka dragon akmenu!";}
if ($crafting < 1000) { $badux = "Tavo crafting lygis per mazas!";}
if ($dari[0]!="+"){ $badux = "Cia galima tik isrinktiesiems!";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Akmuo apdirbtas,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;
$dari[2] = $kit[2]-1;
$dari[3] = $kit[3]+1;
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
include("icludekitainf/iras2.php");
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

if ($id == "lankus"){  include("icludekitainf/nuskait.php"); 
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
<b>Koki lanka gaminsi?</b><br/>
(minim crafting lygis)<br/>
$lin<br/>Jusu crafting lygis: <b>$crafting</b><br/></small></p>
<p align=\"left\"><small>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=alk&amp;kd=$kodase\">Alksnio lanka</a>(1)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=iev&amp;kd=$kodase\">Ievos lanka</a>(50)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=glu&amp;kd=$kodase\">Gluosnio lanka</a>(300)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=top&amp;kd=$kodase\">Topolio lanka</a>(1000)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=kle&amp;kd=$kodase\">Klevo lanka</a>(3000)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=azu&amp;kd=$kodase\">Azuolo lanka</a>(5000)<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=gaminu&amp;ka=azu&amp;kd=$kodase\">Maumedzio lanka</a>(7000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "gaminu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel gaminti!</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=lankus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=lankus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
	if ($ka == "alk") {
$minimum = 0;
$min_lvl = 0.3;
$kit[18] = $kit[18]+1;
if ($kit[12] < 1) { $badux = "Nepakanka alksnio malku!";}
$kit[12] = $kit[12]-1;
$x = 0.2; 
}
if ($ka == "iev") {
$minimum = 50;
$min_lvl = 0.5;
$kit[19] = $kit[19]+1;
if ($kit[13] < 1) { $badux = "Nepakanka ievos malku!";}
$kit[13] = $kit[13]-1;
$x = 1; 
}
if ($ka == "glu") {
$minimum = 300;
$min_lvl = 0.7;
$kit[20] = $kit[20]+1;
if ($kit[14] < 1) { $badux = "Nepakanka gluosnio malku!";}
$kit[14] = $kit[14]-1;
$x = 3; 
}
if ($ka == "top") {
$minimum = 1000;
$min_lvl = 1;
$kit[21] = $kit[21]+1;
if ($kit[15] < 1) { $badux = "Nepakanka topolio malku!";}
$kit[15] = $kit[15]-1;
$x = 10; 
}
if ($ka == "kle") {
$minimum = 3000;
$min_lvl = 1.2;
$kit[22] = $kit[22]+1;
if ($kit[16] < 1) { $badux = "Nepakanka klevo malku!";}
$kit[16] = $kit[16]-1;
$x = 20; 
}
if ($ka == "azu") {
$minimum = 5000;
$min_lvl = 1.5;
$kit[23] = $kit[23]+1;
if ($kit[17] < 1) { $badux = "Nepakanka azuolo malku!";}
$kit[17] = $kit[17]-1;
$x = 30; 
}
if ($ka == "mau") {
$minimum = 7000;
$min_lvl = 2;
$kit[24] = $kit[24]+1;
if ($kit[18] < 1) { $badux = "Nepakanka maumedzio malku!";}
$kit[18] = $kit[18]-1;
$x = 70; 
}
if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($crafting < $minimum) { $badux = "Tavo crafting lygis per mazas";}

if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Pagaminta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=lankus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

if ($id == "streles") {
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
$min_lvl = 0.3;
$kit[26] = $kit[26]-1;
$kit[24] = $kit[24]-1;
$kit[27] = $kit[27]+1;
$x = 0.2; 

if ($kit[24] < 0 or $kit[26] < 0) { $badux = "Nepakanka antgaliu arba koteliu!";}

if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Strele pagaminta,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;

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
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }


if ($id == "kotus") {
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, pavargai</b><br/>
$lin<br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php"); 
$min_lvl = 0.3;
$kit[26] = $kit[26]+1;
$x = 0.2; 

if ($kit[12] < 1) { $badux = "Nepakanka alksnio malku!";}

if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Streles kotelis pagamintas,</u><br/></b>
Gavai <u>$min_lvl</u> crafting lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";
$kit[25] = $kit[25]+$min_lvl;
$kit[12] = $kit[12]-1;
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
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

print'</card></wml>';

?>