<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Kasimas, kalve";
include("config.php"); 
/////////////////Kasimas///////////////////////

if ($id == "mining"){ 
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
<b>Ka kasi?</b><br/>
(minim kasimo lygis)<br/>
$lin<br/>Jusu kasimo lygis: <b>$mining_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mininu&amp;ka=iron&amp;kd=$kodase\">Gelezies ruda</a>(1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mininu&amp;ka=zalvari&amp;kd=$kodase\">Zalvario ruda</a>(100)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mininu&amp;ka=sidabra&amp;kd=$kodase\">Sidabro ruda</a>(1000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mininu&amp;ka=auksa&amp;kd=$kodase\">Aukso ruda</a>(3000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "mininu") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel kasti!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mining\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mining\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ include("icludekitainf/nuskait.php");
	if ($ka == "iron") {
$minimum = 0; $x = 0.2; 
$min_lvl = 0.2;
$iron_ores = $iron_ores+1;
if ($kit[6]>0 or $kit[5]>0 or $kit[4]>0 or $kit[3]>0){ } else { $badux = "Neturi tinkamo kirtiklio!"; }
}
	if ($ka == "zalvari") {
$minimum = 100; $x = 5; 
$min_lvl = 0.4;
$zalvario_ores = $zalvario_ores+1;
if ($kit[6]>0 or $kit[5]>0 or $kit[4]>0){ } else { $badux = "Neturi tinkamo kirtiklio!"; }
}
	if ($ka == "sidabra") {
$minimum = 1000; $x = 10; 
$min_lvl = 0.6;
$sidabro_ores = $sidabro_ores+1;
if ($kit[6]>0 or $kit[5]>0){ } else { $badux = "Neturi tinkamo kirtiklio!"; }
 }
 
if ($ka == "auksa") {
$minimum = 3000; $x = 30; 
$min_lvl = 1;
$aukso_ores = $aukso_ores+1;
if ($kit[6]>0){ } else { $badux = "Neturi tinkamo kirtiklio!"; }
 }
if ($min_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($mining_lvl2 < $minimum) { $badux = "Tavo kasimo lygis per mazas";}
if ($badux == ""){
$yrax = $x+$exp; 
$badux = "<b><u>Nukasta,</u><br/></b>
Gavai <u>$min_lvl</u> kasimo lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";

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
$points = $points+2; 
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$mine_lvl = $mining_lvl+$min_lvl;
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mine_lvl|$smithing_lvl|\n");
fclose($fp1);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} 
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mining\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

/////////////////kalve///////////////////////

if ($id == "kalve"){
echo"<p align=\"center\"><small><b>Kalve</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydyti\">Aukstakrosne</a><br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Priekalas</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }

/////////////////lydyti///////////////////////

if ($id == "lydyti") {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"<p align=\"center\"><small><b>Koki metala darysi?</b><br/>
(kiek ir ko reikia / minim kalv lvl)<br/>
$lin<br/>Jusu kalvininkavimo lygis: <b>$smithing_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydau&amp;ka=irona&amp;kd=$kodase\">Gelezi</a>( 2 gelezies rudos / 1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydau&amp;ka=zalvar&amp;kd=$kodase\">Zalvari</a>( 2 zalvario rudos / 100)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydau&amp;ka=sidab&amp;kd=$kodase\">Sidabra</a>( 2 sidabro rudos / 1000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydau&amp;ka=auks&amp;kd=$kodase\">Auksa</a>( 2 aukso rudos / 3000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kalve\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

}

if ($id == "lydau") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel lydyti!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydyti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydyti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{ 
if ($ka == "irona") {
$minim = 0; $x = 0.2; 
$smith_lvl = 0.1; 
$iron_baru = $iron_baru+1; 
$iron_ores = $iron_ores-2;
if ($iron_ores<0){ $badux = "Neuztenka gelezies rudu"; } 
}

if ($ka == "zalvar") {
$minim = 100; $x = 3; 
$smith_lvl = 0.3;
$zalvario_baru = $zalvario_baru+1;
$zalvario_ores = $zalvario_ores-2;
if ($zalvario_ores<0){ $badux = "Neuztenka zalvario rudu"; }
}

if ($ka == "sidab") {
$minim = 1000; $x = 10; 
$smith_lvl = 0.5;
$sidabro_baru = $sidabro_baru+1; 
$sidabro_ores = $sidabro_ores-2;
if ($sidabro_ores<0){ $badux = "Neuztenka sidabro rudu"; }
}

if ($ka == "auks") {
$minim = 3000; $x = 30; 
$smith_lvl = 1;
$aukso_baru = $aukso_baru+1; 
$aukso_ores = $aukso_ores-2;
if ($aukso_ores<0){ $badux = "Neuztenka aukso rudu"; }
}

if ($smith_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($smithing_lvl2<$minim){ $badux = "Kalvininkavimo lygis per mazas, kad isgautum si metala"; }
if ($badux == "") {
$smit_lvl = $smithing_lvl+$smith_lvl;
$yrax = $x+$exp; 
$badux = "<b>Sulydyta</b><br/>
Gavai <b>$smith_lvl</b> kalvininkavimo lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";

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
$points = $points+2; 
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smit_lvl|\n");
fclose($fp1);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

}
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=lydyti\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }

/////////////////Daryti ginkla///////////////////////
if ($id == "gaminti_ginklus") {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo"<p align=\"center\"><small><b>Priekalas</b><br/>
$lin<br/>Jusu kalvininkavimo lygis: <b>$smithing_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=str&amp;kd=$kodase\">Gaminti streles antgali</a>(1 gelezies plytele / 1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kardus\">Gaminti kardus</a><br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=sarvus\">Gaminti sarvus</a><br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=salmus\">Gaminti salmus</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kalve\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

}
if ($id == "kardus") {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo" <p align=\"center\"><small><b>Koki karda darysi?</b><br/>
(Kiek ir kokiu plyteliu reikes / butinas kalvio lygis)<br/>
$lin<br/>Jusu kalvininkavimo lygis: <b>$smithing_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=bronz&amp;kd=$kodase\">Bronzini karda</a>(1 gelezies plytele / 1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=spyz&amp;kd=$kodase\">Spyzini karda</a>(2 gelezies plyteles / 50)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=zalv&amp;kd=$kodase\">Zalvarini karda</a>(5 zalvarines plyteles / 100)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=var&amp;kd=$kodase\">Varini karda</a>(10 zalvariniu plyteliu / 300)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=gelez&amp;kd=$kodase\">Gelezini karda</a>(10 gelezies plyteliu / 500)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=plien&amp;kd=$kodase\">Plienini karda</a>(15 gelezies plyteliu / 700)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=sid&amp;kd=$kodase\">Sidabrini karda</a>(20 sidabro plyteliu / 1000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=auks&amp;kd=$kodase\">Auksini karda</a>(20 aukso plyteliu / 3000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=dka&amp;kd=$kodase\">Dragon karda</a>(5 apdirbti dragon akmenys / 5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "sarvus") {
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo" <p align=\"center\"><small><b>Kokius sarvus darysi?</b><br/>
(Kiek ir kokiu plyteliu reikes / butinas kalvio lygis)<br/>
$lin<br/>Jusu kalvininkavimo lygis: <b>$smithing_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=bronz2&amp;kd=$kodase\">Bronzinius sarvus</a>(3 gelezies plyteles / 1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=spyz2&amp;kd=$kodase\">Spyzinius sarvus</a>(5 gelezies plyteles / 60)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=zalv2&amp;kd=$kodase\">Zalvarinius sarvus</a>(6 zalvarines plyteles / 200)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=var2&amp;kd=$kodase\">Varinius sarvus</a>(12 zalvariniu plyteliu / 400)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=gelez2&amp;kd=$kodase\">Gelezinius sarvus</a>(15 gelezies plyteliu / 600)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=plien2&amp;kd=$kodase\">Plieninius sarvus</a>(20 gelezies plyteliu / 700)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=sid2&amp;kd=$kodase\">Sidabrinius sarvus</a>(30 sidabro plyteliu / 1500)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kaldinti&amp;ka=auks2&amp;kd=$kodase\">Auksinius sarvus</a>(30 aukso plyteliu / 3500)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=dsa&amp;kd=$kodase\">Dragon sarvu</a>(8 apdirbti dragon akmenys / 6000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kaldinti") {
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel kalti!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
include("icludekitainf/nuskait.php");

if ($ka == "str") {
$minim = 0; $x = 0.2; 
$smith_lvl = 0.1;
$ir_baru = 1; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$kit[24] = $kit[24]+1; 
}

if ($ka == "bronz") {
$minim = 0; $x = 0.2; 
$smith_lvl = 0.1;
$ir_baru = 1; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$bronze_swordu = $bronze_swordu+1; 
}

if ($ka == "spyz") {
$minim = 50; $x = 1.5; 
$smith_lvl = 0.2;
$ir_baru = 2; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$spyziaus_swordu = $spyziaus_swordu+1; 
}

if ($ka == "zalv") {
$minim = 100; $x = 2; 
$smith_lvl = 0.3;
$zal_baru = 5; 
$ir_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$zalvario_swordu = $zalvario_swordu+1; 
}

if ($ka == "var") {
$minim = 300; $x = 5; 
$smith_lvl = 0.4;
$zal_baru = 10; 
$ir_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$vario_swordu = $vario_swordu+1; 
}

if ($ka == "gelez") {
$minim = 500; $x = 7; 
$smith_lvl = 0.5;
$ir_baru = 10; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$gelezies_swordu = $gelezies_swordu+1; 
}

if ($ka == "plien") {
$minim = 700; $x = 10; 
$smith_lvl = 0.6;
$ir_baru = 15; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$plieno_swordu = $plieno_swordu+1; 
}

if ($ka == "sid") {
$minim = 1000; $x = 20; 
$smith_lvl = 0.7;
$sid_baru = 20; 
$ir_baru = 0; 
$zal_baru = 0; 
$au_baru = 0; 
$sidabro_swordu = $sidabro_swordu+1; 
}

if ($ka == "auks") {
$minim = 3000; $x = 30; 
$smith_lvl = 1;
$au_baru = 20; 
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$aukso_swordu = $aukso_swordu+1; 
}

if ($ka == "bronz2") {
$minim = 0; $x = 0.2; 
$smith_lvl = 0.2;
$ir_baru = 3;  
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$bronze_sarvu = $bronze_sarvu+1; 
}

if ($ka == "spyz2") {
$minim = 60; $x = 1.6; 
$smith_lvl = 0.3;
$ir_baru = 5; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$spyziaus_sarvu = $spyziaus_sarvu+1; 
}

if ($ka == "zalv2") {
$minim = 200; $x = 3; 
$smith_lvl = 0.4;
$zal_baru = 6; 
$ir_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$zalvario_sarvu = $zalvario_sarvu+1; 
}

if ($ka == "var2") {
$minim = 400; $x = 6; 
$smith_lvl = 0.5;
$zal_baru = 12; 
$ir_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$vario_sarvu = $vario_sarvu+1; 
}

if ($ka == "gelez2") {
$minim = 600; $x = 8; 
$smith_lvl = 0.6;
$ir_baru = 15;  
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$gelezies_sarvu = $gelezies_sarvu+1; 
}

if ($ka == "plien2") {
$minim = 700; $x = 10; 
$smith_lvl = 0.7;
$ir_baru = 20; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$plieno_sarvu = $plieno_sarvu+1; 
}

if ($ka == "sid2") {
$minim = 1500; $x = 20; 
$smith_lvl = 0.8;
$sid_baru = 30; 
$ir_baru = 0; 
$zal_baru = 0; 
$au_baru = 0; 
$sidabro_sarvu = $sidabro_sarvu+1; 
}

if ($ka == "auks2") {
$minim = 3500; $x = 40; 
$smith_lvl = 2;
$au_baru = 30; 
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$aukso_sarvu = $aukso_sarvu+1; 
}
if ($smith_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($smithing_lvl2<$minim){ $badux = "Kalvininkavimo lygis per mazas!"; }
if ($iron_baru<$ir_baru){ $badux = "Neuztenka gelezies plyteliu!"; }
if ($zalvario_baru<$zal_baru){ $badux = "Neuztenka zalvario plyteliu!"; }
if ($sidabro_baru<$sid_baru){ $badux = "Neuztenka sidabro plyteliu!"; }
if ($aukso_baru<$au_baru){ $badux = "Neuztenka aukso plyteliu!"; }
if ($badux == ""){
$sm_lvl = $smithing_lvl+$smith_lvl;
$yrax = $x+$exp; 
$badux = "<b>Nukalta<br/></b>
Gavai <u>$smith_lvl</u> kalvininkavimo lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"8\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";

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
$points = $points+2; 
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$iron_baru = $iron_baru-$ir_baru;
$zalvario_baru = $zalvario_baru-$zal_baru;
$sidabro_baru = $sidabro_baru-$sid_baru;
$aukso_baru = $aukso_baru-$au_baru;
include("icludekitainf/iras.php");
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$sm_lvl|\n");
fclose($fp1);
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }


if ($id == "salmus") {
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a></small></p>"; }
else{
$dfskjl1 = rand(0,9); 
$dfskjl2 = rand(0,9); 
$dfskjl3 = rand(0,9); 
$dfskjl4 = rand(0,9); 
$dfskjl5 = rand(0,9); 
$kodase = "$dfskjl1$dfskjl2$dfskjl3$dfskjl4$dfskjl5"; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left|$kodase|$sarvu_prot|$sarvai||\n");
fclose($fp);
echo" <p align=\"center\"><small><b>Koki salma darysi?</b><br/>
(Kiek ir kokiu plyteliu reikes / butinas kalvio lygis)<br/>
$lin<br/>Jusu kalvininkavimo lygis: <b>$smithing_lvl2</b><br/></small></p>
<p align=\"left\"><small>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=bro&amp;kd=$kodase\">Bronzini salma</a>(1 gelezies plyteles / 1)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=spy&amp;kd=$kodase\">Spyzini salma</a>(2 gelezies plyteles / 50)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=zal&amp;kd=$kodase\">Zalvarini salma</a>(3 zalvarines plyteles / 100)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=var&amp;kd=$kodase\">Varini salma</a>(5 zalvariniu plyteliu / 300)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=gel&amp;kd=$kodase\">Gelezini salma</a>(8 gelezies plyteliu / 500)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=pli&amp;kd=$kodase\">Plienini salma</a>(10 gelezies plyteliu / 700)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=sid&amp;kd=$kodase\">Sidabrini salma</a>(15 sidabro plyteliu / 1000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=auk&amp;kd=$kodase\">Auksini salma</a>(20 aukso plyteliu / 3000)<br/>
#<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mkaldinti&amp;ka=dhe&amp;kd=$kodase\">Dragon salma</a>(5 apdirbti dragon akmenys / 5000)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}

if ($id == "mkaldinti") {
$kdp = $_GET['kd']; 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a></small></p>"; }
else{
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel kalti!</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
include("icludekitainf/nuskait.php");

if ($ka == "bro") {
$minim = 0; 
$x = 0.3; 
$smith_lvl = 0.2;
$ir_baru = 1; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[20] = $dari[20]+1; 
}

if ($ka == "spy") {
$minim = 50; 
$x = 0.4; 
$smith_lvl = 0.3;
$ir_baru = 2; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[21] = $dari[21]+1; 
}

if ($ka == "zal") {
$minim = 100; 
$x = 1; 
$smith_lvl = 0.4;
$ir_baru = 0; 
$zal_baru = 3; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[22] = $dari[22]+1; 
}

if ($ka == "var") {
$minim = 300; 
$x = 2; 
$smith_lvl = 0.5;
$ir_baru = 0; 
$zal_baru = 5; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[23] = $dari[23]+1; 
}

if ($ka == "gel") {
$minim = 500; 
$x = 3; 
$smith_lvl = 0.7;
$ir_baru = 8; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[24] = $dari[24]+1; 
}

if ($ka == "pli") {
$minim = 700; 
$x = 5; 
$smith_lvl = 0.9;
$ir_baru = 10; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 0; 
$dari[25] = $dari[25]+1; 
}

if ($ka == "sid") {
$minim = 1000; 
$x = 10; 
$smith_lvl = 1;
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 15; 
$au_baru = 0; 
$dstone = 0; 
$dari[26] = $dari[26]+1; 
}

if ($ka == "auk") {
$minim = 3000; 
$x = 30; 
$smith_lvl = 2;
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 20; 
$dstone = 0; 
$dari[27] = $dari[27]+1; 
}

if ($ka == "dhe") {
$minim = 5000; 
$x = 250; 
$smith_lvl = 9;
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 5; 
$dari[28] = $dari[28]+1; 
}

if ($ka == "dka") {
$minim = 5000; 
$x = 250; 
$smith_lvl = 9;
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 5; 
$dragon_swordu = $dragon_swordu+1; 
}

if ($ka == "dsa") {
$minim = 6000; 
$x = 300; 
$smith_lvl = 10;
$ir_baru = 0; 
$zal_baru = 0; 
$sid_baru = 0; 
$au_baru = 0; 
$dstone = 8; 
$dragon_sarvu = $dragon_sarvu+1; 
}

if ($smith_lvl == ""){ $badux = "Pize kietekas, bbd"; }
if ($smithing_lvl2<$minim){ $badux = "Kalvininkavimo lygis per mazas!"; }
if ($iron_baru<$ir_baru){ $badux = "Neuztenka gelezies plyteliu!"; }
if ($zalvario_baru<$zal_baru){ $badux = "Neuztenka zalvario plyteliu!"; }
if ($sidabro_baru<$sid_baru){ $badux = "Neuztenka sidabro plyteliu!"; }
if ($aukso_baru<$au_baru){ $badux = "Neuztenka aukso plyteliu!"; }
if ($dstone>$dari[3]){ $badux = "Neuztenka apdirbtu dragon akmenu!"; }
if ($badux == ""){
$sm_lvl = $smithing_lvl+$smith_lvl;
$yrax = $x+$exp; 
$badux = "<b>Nukalta<br/></b>
Gavai <u>$smith_lvl</u> kalvininkavimo lygio ir <u>$x</u> XP.<br/>
Turi <u>$yrax</u> is <u>$ex_left</u> XP<br/>
<a accesskey=\"8\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a>";

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
$points = $points+2; 
$lygis = $lvl; 
} $exp = $suma; 
//lvl kilimo pabaiga

$iron_baru = $iron_baru-$ir_baru;
$zalvario_baru = $zalvario_baru-$zal_baru;
$sidabro_baru = $sidabro_baru-$sid_baru;
$aukso_baru = $aukso_baru-$au_baru;
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$sm_lvl|\n");
fclose($fp1);
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small>$badux<br/>
$lin<br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=gaminti_ginklus\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} } }}

print'</card></wml>';

?>