<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Daiktu uzsidejimas/nuemimas";
include("config.php"); 

if ($id == "use_weap"){
$ka = $_GET['ka'];
if ($ka == "bro"){ $weap = $bronze_swordu;
$bronze_swordu = $bronze_swordu-1;
$g_pavad = "Bronzinis kardas";
$g_att = 2;
$min = 1;
}

if ($ka == "spy") { $weap = $spyziaus_swordu;
$spyziaus_swordu = $spyziaus_swordu-1;
$g_pavad = "Spyzinis kardas";
$g_att = 5;
$min = 3; }

if ($ka == "zal") { $weap = $zalvario_swordu;
$zalvario_swordu = $zalvario_swordu-1;
$g_pavad = "Zalvarinis kardas";
$g_att = 10;
$min = 8; }

if ($ka == "var") { $weap = $vario_swordu;
$vario_swordu = $vario_swordu-1;
$g_pavad = "Varinis kardas";
$g_att = 20;
$min = 15; }

if ($ka == "gel") { $weap = $gelezies_swordu;
$gelezies_swordu = $gelezies_swordu-1;
$g_pavad = "Gelezinis kardas";
$g_att = 25;
$min = 20; }

if ($ka == "pli") { $weap = $plieno_swordu;
$plieno_swordu = $plieno_swordu-1;
$g_pavad = "Plieninis kardas";
$g_att = 30;
$min = 25; }

if ($ka == "sid") { $weap = $sidabro_swordu;
$sidabro_swordu = $sidabro_swordu-1;
$g_pavad = "Sidabribis kardas";
$g_att = 40;
$min = 30; }

if ($ka == "auk") { $weap = $aukso_swordu;
$aukso_swordu = $aukso_swordu-1;
$g_pavad = "Auksinis kardas";
$g_att = 50;
$min = 40; }

if ($ka == "dra") { $weap = $dragon_swordu;
$dragon_swordu = $dragon_swordu-1;
$g_pavad = "Dragon kardas";
$g_att = 70;
$min = 50; }

if ($weap < 1) { $er = "Sio ginklo neturi!"; }
if (0<$ginklo_att){$er = "Noredami uzsideti nauja ginkla, pirma turite nusiimti senaji!"; }
if ($min > $sugebejimas2) { $er = "Tavo patirties lygis per mazas!"; }

if ($er == ""){
$er="Ginklas uzdetas";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$g_att|$g_pavad|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "use_sar"){

if ($ka == "bro"){ $weap = $bronze_sarvu;
$bronze_sarvu = $bronze_sarvu-1;
$g_pavad = "Bronziniai sarvai";
$g_att = 1;
$min = 1;
}

if ($ka == "spy") { $weap = $spyziaus_sarvu;
$spyziaus_sarvu = $spyziaus_sarvu-1;
$g_pavad = "Spyziniai sarvai";
$g_att = 2;
$min = 3; }

if ($ka == "zal") { $weap = $zalvario_sarvu;
$zalvario_sarvu = $zalvario_sarvu-1;
$g_pavad = "Zalvariniai sarvai";
$g_att = 3;
$min = 8; }

if ($ka == "var") { $weap = $vario_sarvu;
$vario_sarvu = $vario_sarvu-1;
$g_pavad = "Variniai sarvai";
$g_att = 5;
$min = 15; }

if ($ka == "gel") { $weap = $gelezies_sarvu;
$gelezies_sarvu = $gelezies_sarvu-1;
$g_pavad = "Geleziniai sarvai";
$g_att = 6;
$min = 20; }

if ($ka == "pli") { $weap = $plieno_sarvu;
$plieno_sarvu = $plieno_sarvu-1;
$g_pavad = "Plieniniai sarvai";
$g_att = 8;
$min = 25; }

if ($ka == "sid") { $weap = $sidabro_sarvu;
$sidabro_sarvu = $sidabro_sarvu-1;
$g_pavad = "Sidabriniai sarvai";
$g_att = 10;
$min = 30; }

if ($ka == "auk") { $weap = $aukso_sarvu;
$aukso_sarvu = $aukso_sarvu-1;
$g_pavad = "Auksiniai sarvai";
$g_att = 20;
$min = 40; }

if ($ka == "dra") { $weap = $dragon_sarvu;
$dragon_sarvu = $dragon_sarvu-1;
$g_pavad = "Dragon sarvai";
$g_att = 30;
$min = 50; }

if ($weap < 1) { $er = "Siu sarvu neturi!"; }
if (0<$sarvu_prot){$er = "Noredami uzsideti naujus sarvus, pirma turite nusiimti senuosius!"; }
if ($min > $gynyba2) { $er = "Tavo gynybos lygis per mazas!"; }

if ($er == ""){
$er="Sarvai uzdeti";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$g_att|$g_pavad||\n");
fclose($fp);

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}


if ($id == "use_salm"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){ $weap = $dari[20];
$dari[20] = $dari[20]-1;
$g_pavad = "Bronzinis salmas";
$g_att = 1;
$min = 1;
}

if ($ka == "spy") { $weap = $dari[21];
$dari[21] = $dari[21]-1;
$g_pavad = "Spyzinis salmas";
$g_att = 2;
$min = 3; }

if ($ka == "zal") { $weap = $dari[22];
$dari[22] = $dari[22]-1;
$g_pavad = "Zalvarinis salmas";
$g_att = 3;
$min = 8; }

if ($ka == "var") { $weap = $dari[23];
$dari[23] = $dari[23]-1;
$g_pavad = "Varinis salmas";
$g_att = 4;
$min = 15; }

if ($ka == "gel") { $weap = $dari[24];
$dari[24] = $dari[24]-1;
$g_pavad = "Gelezinis salmas";
$g_att = 5;
$min = 20; }

if ($ka == "pli") { $weap = $dari[25];
$dari[25] = $dari[25]-1;
$g_pavad = "Plieninis salmas";
$g_att = 6;
$min = 25; }

if ($ka == "sid") { $weap = $dari[26];
$dari[26] = $dari[26]-1;
$g_pavad = "Sidabrinis salmas";
$g_att = 7;
$min = 30; }

if ($ka == "auk") { $weap = $dari[27];
$dari[27] = $dari[27]-1;
$g_pavad = "Auksinis salmas";
$g_att = 8;
$min = 40; }

if ($ka == "dra") { $weap = $dari[28];
$dari[28] = $dari[28]-1;
$g_pavad = "Dragon salmas";
$g_att = 10;
$min = 50; }

if ($weap < 1) { $er = "Sio salmo neturi!"; }
if ($min > $gynyba2) { $er = "Tavo gynybos lygis per mazas!"; }
if (0<$dari[53]){$er = "Noredami uzsideti nauja salma, pirma turite nusiimti senaji!"; }

if ($er == ""){
$er="Salmas uzdetas";
$dari[53]=$g_att; 
$dari[54]=$g_pavad; 
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "use_pirst"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){ $weap = $dari[29];
$dari[29] = $dari[29]-1;
$g_pavad = "Brown pirstines";
$g_att = 1;
$min = 0;
}

if ($ka == "gra"){ $weap = $dari[30];
$dari[30] = $dari[30]-1;
$g_pavad = "Gray pirstines";
$g_att = 2;
$min = 8;
}

if ($ka == "whi"){ $weap = $dari[31];
$dari[31] = $dari[31]-1;
$g_pavad = "White pirstines";
$g_att = 3;
$min = 15;
}

if ($ka == "yel"){ $weap = $dari[32];
$dari[32] = $dari[32]-1;
$g_pavad = "Yellow pirstines";
$g_att = 4;
$min = 20;
}

if ($ka == "ora"){ $weap = $dari[33];
$dari[33] = $dari[33]-1;
$g_pavad = "Orange pirstines";
$g_att = 5;
$min = 25;
}

if ($ka == "gre"){ $weap = $dari[34];
$dari[34] = $dari[34]-1;
$g_pavad = "Green pirstines";
$g_att = 6;
$min = 30;
}

if ($ka == "red"){ $weap = $dari[35];
$dari[35] = $dari[35]-1;
$g_pavad = "Red pirstines";
$g_att = 8;
$min = 40;
}

if ($ka == "bla"){ $weap = $dari[36];
$dari[36] = $dari[36]-1;
$g_pavad = "Black pirstines";
$g_att = 10;
$min = 50;
}


if ($weap < 1) { $er = "Siu pirstiniu neturi!"; }
if ($min > $gynyba2) { $er = "Tavo gynybos lygis per mazas!"; }
if (0<$dari[55]){$er = "Noredami uzsideti naujas pirstines, pirma turite nusiimti senasias!"; }
if ($er == ""){
$er="Pirstines uzdetos";
$dari[55]=$g_att; 
$dari[56]=$g_pavad; 
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "use_bat"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){ $weap = $dari[37];
$dari[37] = $dari[37]-1;
$g_pavad = "Brown batai";
$g_att = 1;
$min = 0;
}

if ($ka == "gra"){ $weap = $dari[38];
$dari[38] = $dari[38]-1;
$g_pavad = "Gray batai";
$g_att = 2;
$min = 8;
}

if ($ka == "whi"){ $weap = $dari[39];
$dari[39] = $dari[39]-1;
$g_pavad = "White batai";
$g_att = 3;
$min = 15;
}

if ($ka == "yel"){ $weap = $dari[40];
$dari[40] = $dari[40]-1;
$g_pavad = "Yellow batai";
$g_att = 4;
$min = 20;
}

if ($ka == "ora"){ $weap = $dari[41];
$dari[41] = $dari[41]-1;
$g_pavad = "Orange batai";
$g_att = 5;
$min = 25;
}

if ($ka == "gre"){ $weap = $dari[42];
$dari[42] = $dari[42]-1;
$g_pavad = "Green batai";
$g_att = 6;
$min = 30;
}

if ($ka == "red"){ $weap = $dari[43];
$dari[43] = $dari[43]-1;
$g_pavad = "Red batai";
$g_att = 7;
$min = 40;
}

if ($ka == "bla"){ $weap = $dari[44];
$dari[44] = $dari[44]-1;
$g_pavad = "Black batai";
$g_att = 8;
$min = 50;
}

if ($weap < 1) { $er = "Siu batu neturi!"; }
if ($min > $gynyba2) { $er = "Tavo gynybos lygis per mazas!"; }
if (0<$dari[57]){$er = "Noredami uzsideti naujus batus, pirma turite nusiimti senuosius!"; }
if ($er == ""){
$er="Batai uzdeti";
$dari[57]=$g_att; 
$dari[58]=$g_pavad; 
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "use_aps"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a></small></p>"; }
else{
if ($ka == "bro"){ $weap = $dari[45];
$dari[45] = $dari[45]-1;
$g_pavad = "Brown apsiaustas";
$g_att = 1;
$min = 0;
}

if ($ka == "gra"){ $weap = $dari[46];
$dari[46] = $dari[46]-1;
$g_pavad = "Gray apsiaustas";
$g_att = 2;
$min = 8;
}

if ($ka == "whi"){ $weap = $dari[47];
$dari[47] = $dari[47]-1;
$g_pavad = "White apsiaustas";
$g_att = 3;
$min = 15;
}

if ($ka == "yel"){ $weap = $dari[48];
$dari[48] = $dari[48]-1;
$g_pavad = "Yellow apsiaustas";
$g_att = 4;
$min = 20;
}

if ($ka == "ora"){ $weap = $dari[49];
$dari[49] = $dari[49]-1;
$g_pavad = "Orange apsiaustas";
$g_att = 5;
$min = 25;
}

if ($ka == "gre"){ $weap = $dari[50];
$dari[50] = $dari[50]-1;
$g_pavad = "Green apsiaustas";
$g_att = 6;
$min = 30;
}

if ($ka == "red"){ $weap = $dari[51];
$dari[51] = $dari[51]-1;
$g_pavad = "Red apsiaustas";
$g_att = 8;
$min = 40;
}

if ($ka == "bla"){ $weap = $dari[52];
$dari[52] = $dari[52]-1;
$g_pavad = "Black apsiaustas";
$g_att = 10;
$min = 50;
}

if ($weap < 1) { $er = "Sio apsiausto neturi!"; }
if ($min > $gynyba2) { $er = "Tavo gynybos lygis per mazas!"; }
if (0<$dari[59]){$er = "Noredami uzsideti nauja apsiausta, pirma turite nusiimti senaji!"; }
if ($er == ""){
$er="Apsiaustas uzdetas";
$dari[59]=$g_att; 
$dari[60]=$g_pavad; 
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == ""){ 
echo"<p align=\"center\"><small>
<b>Daiktu esanciu ant tavo kuno tvarkymas</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>";
echo"<b>Kardas: </b>"; 
if ($ginklo_att<=0){ echo"-"; 
} else { echo"$ginklas (+$ginklo_att jegos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_weap\">Nusiimti</a>]"; } echo"<br/>"; 
echo"<b>Sarvai: </b>";
if ($sarvu_prot<=0){ echo"-"; 
} else { echo"$sarvai (+$sarvu_prot gynybos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_sarv\">Nusiimti</a>]"; } echo"<br/>"; 
echo"<b>Salmas: </b>";
if ($dari[53]<=0){ echo"-"; 
} else { echo"$dari[54] (+$dari[53] gynybos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_salm\">Nusiimti</a>]"; } echo"<br/>"; 
echo"<b>Pirstines: </b>";
if ($dari[55]<=0){ echo"-"; 
} else { echo"$dari[56] (+$dari[55] gynybos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_pirst\">Nusiimti</a>]"; } echo"<br/>"; 
echo"<b>Batai: </b>";
if ($dari[57]<=0){ echo"-"; 
} else { echo"$dari[58] (+$dari[57] gynybos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_bat\">Nusiimti</a>]"; } echo"<br/>"; 
echo"<b>Apsiaustas: </b>";
if ($dari[59]<=0){ echo"-"; 
} else { echo"$dari[60] (+$dari[59] gynybos) [<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_aps\">Nusiimti</a>]"; } echo"<br/>"; 
echo"</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}


if ($id == "nuimti_weap"){

if ($ginklas == "Bronzinis kardas"){
$bronze_swordu = $bronze_swordu+1;
}

if ($ginklas == "Spyzinis kardas") {
$spyziaus_swordu = $spyziaus_swordu+1;
}

if ($ginklas == "Zalvarinis kardas") {
$zalvario_swordu = $zalvario_swordu+1;
$g_pavad = "Zalvarinis kardas";
}

if ($ginklas == "Varinis kardas") {
$vario_swordu = $vario_swordu+1;
}

if ($ginklas == "Gelezinis kardas") {
$gelezies_swordu = $gelezies_swordu+1;
}

if ($ginklas == "Plieninis kardas") {
$plieno_swordu = $plieno_swordu+1;
}

if ($ginklas == "Sidabribis kardas") {
$sidabro_swordu = $sidabro_swordu+1;
}

if ($ginklas == "Auksinis kardas") {
$aukso_swordu = $aukso_swordu+1;
}

if ($ginklas == "Dragon kardas") {
$dragon_swordu = $dragon_swordu+1;
}
if ($ginklo_att <= 0){
echo"<p align=\"center\"><small><b>Tu sio daikto neturi uzsidejes!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|0|Beginklis|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
echo"<p align=\"center\"><small><b>Ginklas nuimtas</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "nuimti_sarv"){

if ($sarvai == "Bronziniai sarvai"){
$bronze_sarvu = $bronze_sarvu+1;
}

if ($sarvai == "Spyziniai sarvai") {
$spyziaus_sarvu = $spyziaus_sarvu+1;
}

if ($sarvai == "Zalvariniai sarvai") {
$zalvario_sarvu = $zalvario_sarvu+1;
}

if ($sarvai == "Variniai sarvai") {
$vario_sarvu = $vario_sarvu+1;
}

if ($sarvai == "Geleziniai sarvai") {
$gelezies_sarvu = $gelezies_sarvu+1;
}

if ($sarvai == "Plieniniai sarvai") {
$plieno_sarvu = $plieno_sarvu+1;
}

if ($sarvai == "Sidabriniai sarvai") {
$sidabro_sarvu = $sidabro_sarvu+1;
}

if ($sarvai == "Ausiniai sarvai") {
$aukso_sarvu = $aukso_sarvu+1;
}

if ($sarvai == "Dragon sarvai") {
$dragon_sarvu = $dragon_sarvu+1;
}
if ($sarvu_prot <= 0){
echo"<p align=\"center\"><small><b>Tu ir taip be sarvu!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||0|Be_sarvu||\n");
fclose($fp);
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1);
echo"<p align=\"center\"><small><b>Sarvai nuimti</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "nuimti_salm"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
if ($dari[54] == "Bronzinis salmas"){
$dari[20] = $dari[20]+1;
}

if ($dari[54] == "Spyzinis salmas") {
$dari[21] = $dari[21]+1;
}

if ($dari[54] == "Zalvarinis salmas") {
$dari[22] = $dari[22]+1;
}

if ($dari[54] == "Varinis salmas") {
$dari[23] = $dari[23]+1;
}

if ($dari[54] == "Gelezinis salmas") {
$dari[24] = $dari[24]+1;
}

if ($dari[54] == "Plieninis salmas") {
$dari[25] = $dari[25]+1;
}

if ($dari[54] == "Sidabrinis salmas") {
$dari[26] = $dari[26]+1;
}

if ($dari[54] == "Ausinis salmas") {
$dari[27] = $dari[27]+1;
}

if ($dari[54] == "Dragon salmas") {
$dari[28] = $dari[28]+1;
}
if ($dari[53] <= 0){
echo"<p align=\"center\"><small><b>Tu ir taip be salmo!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$dari[54]="0";
$dari[53]="0";
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Salmas nuimtas</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}}

if ($id == "nuimti_pirst"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
if ($dari[56] == "Brown pirstines"){
$dari[29] = $dari[29]+1;
}

if ($dari[56] == "Gray pirstines") {
$dari[30] = $dari[30]+1;
}

if ($dari[56] == "White pirstines") {
$dari[31] = $dari[31]+1;
}

if ($dari[56] == "Yellow pirstines") {
$dari[32] = $dari[32]+1;
}

if ($dari[56] == "Orange pirstines") {
$dari[33] = $dari[33]+1;
}

if ($dari[56] == "Green pirstines") {
$dari[34] = $dari[34]+1;
}

if ($dari[56] == "Red pirstines") {
$dari[35] = $dari[35]+1;
}

if ($dari[56] == "Black pirstines") {
$dari[36] = $dari[36]+1;
}

if ($dari[55] <= 0){
echo"<p align=\"center\"><small><b>Tu ir taip be pirstiniu!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$dari[56]="0";
$dari[55]="0";
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Pirstines nuimtos</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}}

if ($id == "nuimti_bat"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
if ($dari[58] == "Brown batai"){
$dari[37] = $dari[37]+1;
}

if ($dari[58] == "Gray batai") {
$dari[38] = $dari[38]+1;
}

if ($dari[58] == "White batai") {
$dari[39] = $dari[39]+1;
}

if ($dari[58] == "Yellow batai") {
$dari[40] = $dari[40]+1;
}

if ($dari[58] == "Orange batai") {
$dari[41] = $dari[41]+1;
}

if ($dari[58] == "Green batai") {
$dari[42] = $dari[42]+1;
}

if ($dari[58] == "Red batai") {
$dari[43] = $dari[43]+1;
}

if ($dari[58] == "Black batai") {
$dari[44] = $dari[44]+1;
}

if ($dari[57] <= 0){
echo"<p align=\"center\"><small><b>Tu ir taip be batu!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$dari[57]="0";
$dari[58]="0";
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Batai nuimti</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}}

if ($id == "nuimti_aps"){
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else{
if ($dari[60] == "Brown apsiaustas"){
$dari[45] = $dari[45]+1;
}

if ($dari[60] == "Gray apsiaustas") {
$dari[46] = $dari[46]+1;
}

if ($dari[60] == "White apsiaustas") {
$dari[47] = $dari[47]+1;
}

if ($dari[60] == "Yellow apsiaustas") {
$dari[48] = $dari[48]+1;
}

if ($dari[60] == "Orange apsiaustas") {
$dari[49] = $dari[49]+1;
}

if ($dari[60] == "Green apsiaustas") {
$dari[50] = $dari[50]+1;
}

if ($dari[60] == "Red apsiaustas") {
$dari[51] = $dari[51]+1;
}

if ($dari[60] == "Black apsiaustas") {
$dari[52] = $dari[52]+1;
}

if ($dari[59] <= 0){
echo"<p align=\"center\"><small><b>Tu ir taip be apsiausto!</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}else{
$dari[59]="0";
$dari[60]="0";
include("icludekitainf/iras2.php");
echo"<p align=\"center\"><small><b>Apsiaustas nuimtas</b><br/>
$lin<br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}}

print'</card></wml>';

?>