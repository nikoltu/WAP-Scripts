<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Kovose"; 
include("config.php"); 
/////////////////Kur kautis///////////////////////

if ($id == "kautis"){
$like = file_get_contents("lyyygiz/$nick.txt"); 
echo"<p align=\"center\"><small>
<b>Kovos</b><br/>
<b>Kovojant reikalingos gyvybes, damage ir defense.</b><br/>
<b>Kuo didesnis defense uz priesininko, tuo labiau sumazes priesininko damage.</b><br/>
<b>Kuo didesnis damage, tuo didesne zala padaroma priesininkui.</b><br/>
<b>Kuo daugiau gyvybiu, tuo ilgiau atsilaikoma kovoje.</b><br/>
$lin<br/>";
echo"<br/></small></p>";
echo"<p align=\"left\"><small>
<b><u>Pasirinkite vietove:</u><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=sklepas\">Pozemis</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=miskas\">Miskas</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=dykuma\">Dykuma</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=uzburtas_miskas\">Uzburtas miskas</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=mages\">Uzburtas krastas</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=ismires_miestelis\">Ismires miestelis</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=apleistas_namas\">Apleistas namas</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=drakonai\">Drakonu urvai</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=ugnies\">Ugnies zeme</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=mirties\">Mirties sala</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=slenis\">Tamsusis slenis</a><br/>
[*]<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=drakonu\">Drakonu sventykla</a><br/></b><br/>";
echo"<br/></small></p>";
echo"<p align=\"center\"><small>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
}

if ($id == "lyyygis"){ 
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, tu pavarges...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{

 $hit = 0; 
if ($lygis >= 100){ $hit = $damage/4; } 
if ($lygis >= 300){ $hit = $damage/3; } 
if ($lygis >= 400){ $hit = $damage/2; }
if ($lygis >= 500){ $hit = $damage; } 

if ($hit == 0){ $lops = "aha"; }
if ($gyvybes <= 50){ $lops = "aha"; }
if ($defense <= 100){ $lops = "aha"; }
$like = file_get_contents("lyyygiz/$nick.txt"); 
if ($like-$hit > 0){ $lops = "aha"; }
if ($lops == "aha"){ 
echo"<p align=\"center\"><small><b>Lyyygis uz tave kietesnis! :P</b><br/>
Pralaimejai... Ir praradai puse pinigu<br/>
Lyyygiui nuemei <b>$hit</b> gyvybes, jam dar liko <b>"; echo $like-$hit; echo"</b> gyvybes...<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">Informacija apie tave</a><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

$likd = $like-$hit;
    $atidarymass = fopen("lyyygiz/$nick.txt", "w+");
        fwrite($atidarymass,$likd);
        fclose($atidarymass); 
        
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp); } else {

echo"<p align=\"center\"><small>
<b>Tu Laimejai!<br/></b>
Nukovei <b>Lyyygi</b>!!!<br/>
Visas zaidimas restartavosi, gauni raundo priza 30 kronu!<br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
</small></p>";
$rou = explode("|",file_get_contents("txt/round.txt")); 
$data = date("Y-m-d");
$vyk = $rou[0]+1; 
$kass = $nick;
$laim = "$rou[1]$kass!"; 
$num = "$rou[2]$data!"; 
$ikim = "$rou[3]$data!"; 
$atidarymasss = fopen("txt/round.txt", "w");
        fwrite($atidarymasss, "$vyk|$laim|$num|$ikim|");
        fclose($atidarymasss);

$t1 = glob("us_xgrx_inf147258369/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
$j = explode("|",file_get_contents($t1[$i])); 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "1|$j[1]|$j[2]|1|7|7|1|500|0|0|0|Beginklis|$j[12]|$j[13]|$j[14]|0|1|0|$j[18]|10|12.1|aps_kodas|0|Be_sarvu|0|");
        fclose($atidarymass); }
        
$t1 = glob("priv_zin/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "");
        fclose($atidarymass); }
        
$t1 = glob("miners/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|1|");
        fclose($atidarymass); }
        
$t1 = glob("kitaaainf/*.ly"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
        fclose($atidarymass); }
        
$t1 = glob("darinfos/*.ly"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
        fclose($atidarymass); }
        
$t1 = glob("fyshers/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "1|0|0|0|0|0|0|0|0|");
        fclose($atidarymass); }
        
$t1 = glob("lyyygiz/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "100000");
        fclose($atidarymass); }
        
$t1 = glob("kronoss/*.txt"); 
for ($i=0; $i<count($t1); $i++){ 
if ($t1[$i]=="kronoss/$nick.txt"){ 
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "30");
        fclose($atidarymass); 
        @chmod("kronoss/$nick.txt",0777); } else {     
    $atidarymass = fopen("$t1[$i]", "w+");
        fwrite($atidarymass, "0");
        fclose($atidarymass); @chmod("$t1[$i]",0777); }}

}}}



/////////////////Pries ka kautis///////////////////////

if ($id == "sklepas"){
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
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ziurke&amp;kd=$kodase\">Ziurke</a> (1 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=peles&amp;kd=$kodase\">Peliu lizdas</a> (2 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=motinine&amp;kd=$kodase\">Motinine ziurke</a> (5 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dvarfas&amp;kd=$kodase\">Dvarfas</a> (10 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=skeletas&amp;kd=$kodase\">Skeletas</a> (20 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=gholem&amp;kd=$kodase\">Gholem</a> (50 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dvasia&amp;kd=$kodase\">Dvasia</a> (80 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "miskas"){ if ($lygis < 3 ) {echo"<p align=\"center\"><small>
<b>Tu cia nieko nenukausi, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=driezas&amp;kd=$kodase\">Driezas</a> (3 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vovere&amp;kd=$kodase\">Vovere</a> (6 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=barsukas&amp;kd=$kodase\">Barsukas</a> (8 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lape&amp;kd=$kodase\">Lape</a> (13 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lusis&amp;kd=$kodase\">Lusis</a> (16 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=gyvate&amp;kd=$kodase\">Gyvate</a> (20 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vilkas&amp;kd=$kodase\">Vilkas</a> (28 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lokys&amp;kd=$kodase\">Lokys</a> (40 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vilkai&amp;kd=$kodase\">Vilku irstva</a> (55 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=trolis&amp;kd=$kodase\">Trolis</a> (75 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vilkolakis&amp;kd=$kodase\">Vilkolakis</a> (85 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lokiai&amp;kd=$kodase\">Lokiu seimyna</a> (95 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=misko_demonas&amp;kd=$kodase\">Misko demonas</a> (111 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "mages"){ if ($lygis < 10 ) {echo"<p align=\"center\"><small>
<b>Tau cia nera ka veikt, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ponis&amp;kd=$kodase\">Ponis</a> (17 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vienaragis&amp;kd=$kodase\">Vienaragis</a> (23 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=uz_karys&amp;kd=$kodase\">Uzkeretas karys</a> (30 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=mag_pradz&amp;kd=$kodase\">Magijos pradziamokslis</a> (40 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=uz_hero&amp;kd=$kodase\">Uzkeretas herojus</a> (60 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ragana&amp;kd=$kodase\">Ragana</a> (70 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=fenixas&amp;kd=$kodase\">Didysis fenixas</a> (80 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=magas&amp;kd=$kodase\">Magas</a> (90 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=mag_vadas&amp;kd=$kodase\">Magijos valdovas</a> (100 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "drakonai"){ if ($lygis < 60 ) {echo"<p align=\"center\"><small>
<b>Nu ir sumastei! tokio lygio eit kautis pries drakonus! eik keltis lygi</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=jauniklis&amp;kd=$kodase\">Drakono jauniklis</a> (90 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=sviesos&amp;kd=$kodase\">Sviesos drakonas</a> (95 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=zaliasis&amp;kd=$kodase\">Zaliasis drakonas</a> (100 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dangaus&amp;kd=$kodase\">Dangaus drakonas</a> (110 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=pozemiu&amp;kd=$kodase\">Pozemiu drakonas</a> (120 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugnies&amp;kd=$kodase\">ugnies drakonas</a> (150 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=aukso&amp;kd=$kodase\">Aukso drakonas</a> (200 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "slenis"){ if ($lygis < 30 ) {echo"<p align=\"center\"><small>
<b>Nu ir sumastei! tokio lygio eit kautis pries drakonus! eik keltis lygi</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=golemas1&amp;kd=$kodase\">Golemas</a> (135 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=blogasis1&amp;kd=$kodase\">Blogasis skeletas</a> (450 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=tamsusis1&amp;kd=$kodase\">Tamsusis demonas</a> (800 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=juodas1&amp;kd=$kodase\">Juodasis velnias</a> (1320 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "dykuma"){ if ($lygis < 5 ) {echo"<p align=\"center\"><small>
<b>Tau cia nera ka veikt, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=kobra&amp;kd=$kodase\">Kobra</a> (7 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=skorp&amp;kd=$kodase\">Skorpijonu vadas</a> (15 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=mumija&amp;kd=$kodase\">Mumija</a> (25 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=karavanas&amp;kd=$kodase\">Karavanas</a> (60 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=orcas&amp;kd=$kodase\">Orcas</a> (70 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=anuby&amp;kd=$kodase\">Anuby</a> (90 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=RA&amp;kd=$kodase\">RA</a> (100 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "apleistas_namas"){ if ($lygis < 17 ) {echo"<p align=\"center\"><small>
<b>Tu cia nieko nenukausi, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=impas&amp;kd=$kodase\">Impas</a> (23 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=frankensteinas&amp;kd=$kodase\">Frankensteinas</a> (65 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vyvernas&amp;kd=$kodase\">Vyvernas</a> (72 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vaiduoklis&amp;kd=$kodase\">Vaiduoklis</a> (82 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=chimera&amp;kd=$kodase\">Chimera</a> (93 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=vampyras&amp;kd=$kodase\">Vampyras</a> (105 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

if ($id == "uzburtas_miskas"){ if ($lygis < 7 ) {echo"<p align=\"center\"><small>
<b>Tu cia nieko nenukausi, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=nykstukas&amp;kd=$kodase\">Nykstukas</a> (9 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=goblinas&amp;kd=$kodase\">Goblinas</a> (22 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=elfukas&amp;kd=$kodase\">Elfukas</a> (28 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=gnomas&amp;kd=$kodase\">Gnomas</a> (43 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=minotauras&amp;kd=$kodase\">Minotauras</a> (68 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=kentauras&amp;kd=$kodase\">Kentauras</a> (78 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=samanas&amp;kd=$kodase\">Samanas</a> (88 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=uzburtas_medis&amp;kd=$kodase\">Uzburtas medis</a> (115 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

if ($id == "ismires_miestelis"){ if ($lygis < 10 ) {echo"<p align=\"center\"><small>
<b>Tu cia nieko nenukausi, nes tu per silpnas...</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi? Sio miestelio griuvesiuose slepiasi daug ivairiu kariu...</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=druidas&amp;kd=$kodase\">Druidas</a> (16 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=cerberis&amp;kd=$kodase\">Cerberis</a> (42 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=gladiatorius&amp;kd=$kodase\">Gladiatorius</a> (46 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=cronusas&amp;kd=$kodase\">Cronusas</a> (61 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=paladinas&amp;kd=$kodase\">Paladinas</a> (66 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=raitelis&amp;kd=$kodase\">Raitelis</a> (76 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=gorgonas&amp;kd=$kodase\">Gorgonas</a> (83 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=archangelas&amp;kd=$kodase\">Archangelas</a> (91 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

if ($id == "ugnies"){ if ($lygis < 120 ) {echo"<p align=\"center\"><small>
<b>Tu per silpnas</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugnine_gyvate&amp;kd=$kodase\">Ugnine gyvate</a> (180 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugninis_vilkas&amp;kd=$kodase\">Ugninis vilkas</a> (230 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lava_troll&amp;kd=$kodase\">Lava troll</a> (250 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugnikalnio_sargas&amp;kd=$kodase\">Ugnikalnio sargas</a> (280 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugnikalniu_paukstis&amp;kd=$kodase\">Ugnikalniu paukstis</a> (300 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lava_demon&amp;kd=$kodase\">Lava demon</a> (350 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=ugnies_dievas&amp;kd=$kodase\">Ugnies dievas</a> (400 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
} }

if ($id == "drakonu"){ if ($lygis < 120 ) {echo"<p align=\"center\"><small>
<b>Tu per silpnas</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr1&amp;kd=$kodase\">Drakono jauniklis</a> (1420 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr2&amp;kd=$kodase\">Baltasis drakonas</a> (1850 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr3&amp;kd=$kodase\">Juodasis drakonas</a> (2000 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr4&amp;kd=$kodase\">Pragaro drakonas</a> (2800 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr5&amp;kd=$kodase\">Pozemiu drakonas</a> (3000 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr6&amp;kd=$kodase\">Zemes drakonas</a> (3426 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=dr7&amp;kd=$kodase\">Metalo drakonas</a> (4126 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }

if ($id == "mirties"){ 
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a></small></p>"; }
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
echo"<p align=\"center\"><small>
<b>Ka pulsi?</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=hiter&amp;kd=$kodase&amp;kas=mem\">Hiter</a> (30 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=hite&amp;kd=$kodase&amp;kas=mem\">Hard hiter</a> (80 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=lukn&amp;kd=$kodase&amp;kas=mem\">Lunker</a> (130 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=fle&amp;kd=$kodase&amp;kas=mem\">Flem</a> (170 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=anab&amp;kd=$kodase&amp;kas=mem\">Anabola</a> (220 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=grum&amp;kd=$kodase&amp;kas=mem\">Grumble</a> (300 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=liza&amp;kd=$kodase&amp;kas=mem\">Lizard</a> (330 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=opla&amp;kd=$kodase&amp;kas=mem\">Ops lava</a> (380 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=diadra&amp;kd=$kodase&amp;kas=mem\">Diamond dragon</a> (450 lvl)<br/>
#<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kova&amp;vs=draking&amp;kd=$kodase&amp;kas=mem\">Dragon king</a> (500 lvl)<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }


/////////////////Vyksta kova///////////////////////

if ($id == "kova") {

if ($vs == "hiter") {
$dstone = array("brown","","","",); 
$lyyygis = 30;
$x = 2; }

if ($vs == "hite") {
$dstone = array("brown","gray","",""); 
$lyyygis = 80;
$x = 8.5; }

if ($vs == "lukn") {
$dstone = array("brown","gray","white","",""); 
$lyyygis = 130;
$x = 50; }

if ($vs == "fle") {
$dstone = array("brown","gray","white",""); 
$lyyygis = 170;
$x = 60; }

if ($vs == "anab") {
$dstone = array("brown","gray","white","yellow","","","",""); 
$lyyygis = 220;
$x = 73; }

if ($vs == "grum") {
$dstone = array("brown","gray","white","yellow","orange","green","","","","","");  
$lyyygis = 300;
$x = 120; }

if ($vs == "liza") {
$dstone = array("brown","gray","white","yellow","orange","green","red","","","","","");  
$lyyygis = 330;
$x = 130; }

if ($vs == "opla") {
$dstone = array("brown","gray","white","yellow","orange","green","red","black","","","","");  
$lyyygis = 380;
$x = 180; }

if ($vs == "diadra") {
$dstone = array("stone","brown","gray","white","yellow","orange","green","red","black","","","");  
$lyyygis = 450;
$x = 250; }

if ($vs == "draking") {
$dstone = array("stone","stone","brown","gray","white","yellow","orange","green","red","black","",""); 
$lyyygis = 500;
$x = 300; }


////////ugnies zemes kariai/////////

if ($vs == "ugnine_gyvate") {
$lyyygis = 180;
$x = 65; }

if ($vs == "ugninis_vilkas") {
$lyyygis = 230;
$x = 75; }

if ($vs == "lava_troll") {
$lyyygis = 250;
$x = 85; }

if ($vs == "ugnikalnio_sargas") {
$lyyygis = 280;
$x = 100; }

if ($vs == "ugnikalniu_paukstis") {
$lyyygis = 300;
$x = 120; }

if ($vs == "lava_demon") {
$lyyygis = 350;
$x = 150; }

if ($vs == "ugnies_dievas") {
$lyyygis = 400;
$x = 200; }

////////slenio kariai/////////

if ($vs == "golemas1") {
$lyyygis = 135;
$x = 65; }

if ($vs == "blogasis1") {
$lyyygis = 450;
$x = 75; }

if ($vs == "tamsusis1") {
$lyyygis = 800;
$x = 85; }

if ($vs == "juodas1") {
$lyyygis = 1320;
$x = 100; }

////////ismirusio miestelio kariai/////////

if ($vs == "druidas") {
$lyyygis = 16;
$x = 1.1; }

if ($vs == "cerberis") {
$lyyygis = 42;
$x = 3; }

if ($vs == "gladiatorius") {
$lyyygis = 46;
$x = 4; }

if ($vs == "cronusas") {
$lyyygis = 61;
$x = 5.7; }

if ($vs == "paladinas") {
$lyyygis = 66;
$x = 6.2; }

if ($vs == "raitelis") {
$lyyygis = 76;
$x = 7.6; }

if ($vs == "gorgonas") {
$lyyygis = 83;
$x = 8.7; }

if ($vs == "archangelas") {
$lyyygis = 91;
$x = 9.7; }

////////uzburto misko kariai/////////

if ($vs == "nykstukas") {
$lyyygis = 9;
$x = 0.7; }

if ($vs == "goblinas") {
$lyyygis = 22;
$x = 1.5; }

if ($vs == "elfukas") {
$lyyygis = 28;
$x = 1.9; }

if ($vs == "gnomas") {
$lyyygis = 43;
$x = 3.5; }

if ($vs == "minotauras") {
$lyyygis = 68;
$x = 6.6; }

if ($vs == "kentauras") {
$lyyygis = 78;
$x = 8; }

if ($vs == "samanas") {
$lyyygis = 88;
$x = 9.3; }

if ($vs == "uzburtas_medis") {
$lyyygis = 115;
$x = 30; }

////////apleisto namo kariai/////////

if ($vs == "impas") {
$lyyygis = 23;
$x = 1.7; }

if ($vs == "frankensteinas") {
$lyyygis = 65;
$x = 6; }

if ($vs == "vyvernas") {
$lyyygis = 72;
$x = 7.2; }

if ($vs == "vaiduoklis") {
$lyyygis = 82;
$x = 8.5; }

if ($vs == "chimera") {
$lyyygis = 93;
$x = 10; }

if ($vs == "vampyras") {
$lyyygis = 105;
$x = 20; }

         ////////Pozemio kariai/////////

if ($vs == "ziurke") {
$lyyygis = 1;
$x = 0.2; }


if ($vs == "peles") {
$lyyygis = 2;
$x = 0.3; }

if ($vs == "motinine") {
$lyyygis = 5;
$x = 0.5; }

if ($vs == "dvarfas") {
$lyyygis = 10;
$x = 0.8; }

if ($vs == "skeletas") {
$lyyygis = 20;
$x = 1.5; }

if ($vs == "gholem") {
$lyyygis = 50;
$x = 4.5; }

if ($vs == "dvasia") {
$lyyygis = 80;
$x = 8.2; }

////////Dukumos kariai/////////

if ($vs == "kobra") {
$lyyygis = 7;
$x = 0.6; }

if ($vs == "skorp") {
$lyyygis = 15;
$x = 1; }

if ($vs == "mumija") {
$lyyygis = 25;
$x = 1.8; }

if ($vs == "karavanas") {
$lyyygis = 60;
$x = 5.5; }

if ($vs == "orcas") {
$lyyygis = 70;
$x = 7; }

if ($vs == "anuby") {
$lyyygis = 90;
$x = 9.5; }

if ($vs == "RA") {
$lyyygis = 100;
$x = 15; }

         ////////drakonu urvu kariai/////////

if ($vs == "jauniklis") {
$lyyygis = 90;
$x = 9.5; }

if ($vs == "sviesos") {
$lyyygis = 95;
$x = 12; }

if ($vs == "zaliasis") {
$lyyygis = 100;
$x = 15; }

if ($vs == "dangaus") {
$lyyygis = 110;
$x = 25; }

if ($vs == "pozemiu") {
$lyyygis = 120;
$x = 40; }

if ($vs == "ugnies") {
$lyyygis = 150;
$x = 55; }

if ($vs == "aukso") {
$lyyygis = 200;
$x = 70; }



         ////////Uzburto krasto kariai/////////
if ($vs == "ponis") {
$lyyygis = 17;
$x = 1.2; }

if ($vs == "vienaragis") {
$lyyygis = 23;
$x = 1.7; }

if ($vs == "uz_karys") {
$lyyygis = 30;
$x = 2; }

if ($vs == "mag_pradz") {
$lyyygis = 40;
$x = 2.5; }

if ($vs == "uz_hero") {
$lyyygis = 60;
$x = 5.5; }

if ($vs == "ragana") {
$lyyygis = 70;
$x = 7; }

if ($vs == "fenixas") {
$lyyygis = 80;
$x = 8.2; }

if ($vs == "magas") {
$lyyygis = 90;
$x = 9.5; }

if ($vs == "mag_vadas") {
$lyyygis = 100;
$x = 15; }

 ////////drakonu urvai/////////
if ($vs == "dr1") {
$lyyygis = 1420;
$x = 80; }

if ($vs == "dr2") {
$lyyygis = 1850;
$x = 95; }

if ($vs == "dr3") {
$lyyygis = 2000;
$x = 110; }

if ($vs == "dr4") {
$lyyygis = 2800;
$x = 128; }

if ($vs == "dr5") {
$lyyygis = 3000;
$x = 145; }

if ($vs == "dr6") {
$lyyygis = 3426;
$x = 160; }

if ($vs == "dr7") {
$lyyygis = 4126;
$x = 180; }


         ////////Misko kariai/////////

if ($vs == "driezas") {
$lyyygis = 3;
$x = 0.4; }

if ($vs == "vovere") {
$lyyygis = 6;
$x = 0.6; }

if ($vs == "barsukas") {
$lyyygis = 8;
$x = 0.7; }

if ($vs == "lape") {
$lyyygis = 13;
$x = 0.9; }

if ($vs == "lusis") {
$lyyygis = 16;
$x = 1.1; }

if ($vs == "gyvate") {
$lyyygis = 20;
$x = 1.5; }

if ($vs == "vilkas") {
$lyyygis = 28;
$x = 1.9; }

if ($vs == "lokys") {
$lyyygis = 40;
$x = 2.5; }

if ($vs == "vilkai") {
$lyyygis = 55;
$x = 5; }

if ($vs == "trolis") {
$lyyygis = 75;
$x = 7.5; }

if ($vs == "vilkolakis") {
$lyyygis = 85;
$x = 9; }

if ($vs == "lokiai") {
$lyyygis = 95;
$x = 12; }

if ($vs == "misko_demonas") {
$lyyygis = 111;
$x = 27; }

$att = round((($lyyygis*2)/4),1);
$att2 = round((($lyyygis*2)/4),1);
$penk = 5*$att;
$ket = 4*$att;
$tri = 3*$att;
$two = 2*$att;
if ($two > $defense) {
$gyvs = $gyvybes-$att; }
if ($two <= $defense) {
$att = $att-round(($att/4),1);
$gyvs = $gyvybes-$att; }
if ($tri <= $defense) {
$att = $att-round(($att/3),1);
$gyvs = $gyvybes-$att; }
if ($ket <= $defense) {
$att = $att-round(($att/2),1);
$gyvs = $gyvybes-$att; }
if ($penk <= $defense) {
$att = 0;
$gyvs = $gyvybes-$att; }

         ////////Pralaimejimas/////////
$kdp = $_GET['kd']; 
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima! turi eiti atgal ir vel pulti!</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{

if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
include("icludekitainf/nuskait2.php"); 
if ($kas == "mem" && $dari[0]!="+"){ echo"<p align=\"center\"><small><b>Cia isrinktuju zona!</b><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{

if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){

echo"<p align=\"center\"><small><b>Tu pralaimejai....</b><br/>
Ir praradai puse pinigu<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">Informacija apie tave</a><br/>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pinigai|$wins|$los|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}

         ////////Laimejimas/////////

else {


$netekai = $gyvybes-$gyvs;

echo"<p align=\"center\"><small>
<b>Tu Laimejai!<br/></b>
Nukovei <b>$lyyygis</b> lygio kari!<br/>
$lin<br/></small></p>";

$suma = $x+$exp; 

$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $left = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
echo"<p align=\"center\"><small>
<b>Sveikinu! Tu pasikelei lygi<br/>
Dabar tavo lygis: $lvl</b><br/>
$lin<br/></small></p>"; 
$pointsr = "$points"+"2"; 
} else { $pointsr = $points; }

if ($kas == "mem" && $dari[0]=="+"){ 
$ds = rand(0,count($dstone)-1); 
if ($dstone[$ds] == ""){ $dsto = ""; }  
if ($dstone[$ds] == "stone"){ $dsto = "Dragon akmeni"; $masyve = 2; }  
if ($dstone[$ds] == "brown"){ $dsto = "Brown material"; $masyve = 4; }  
if ($dstone[$ds] == "gray"){ $dsto = "Gray material"; $masyve = 5; }  
if ($dstone[$ds] == "white"){ $dsto = "White material"; $masyve = 6; }  
if ($dstone[$ds] == "yellow"){ $dsto = "Yellow material"; $masyve = 7; }  
if ($dstone[$ds] == "orange"){ $dsto = "Orange material"; $masyve = 8; }  
if ($dstone[$ds] == "green"){ $dsto = "Green material"; $masyve = 9; }  
if ($dstone[$ds] == "red"){ $dsto = "Red material"; $masyve = 10; }  
if ($dstone[$ds] == "black"){ $dsto = "Black material"; $masyve = 11; }  

if ($dsto != ""){ 
$dari[$masyve]=$dari[$masyve]+1; 
echo"<p align=\"center\"><small>Karys ismete: <b>$dsto</b><br/>$lin<br/></small></p>"; }
include("icludekitainf/iras2.php");
}

$winai = "$wins"+"1";
$pinig = $pinigai+$lyyygis;
echo"
<p align=\"left\"><small>
Praradai gyvybiu: $netekai<br/>
Liko gyvybiu: $gyvs<br/>"; 
$det = round(($gyvs*10)/$gyvybess,0); 
if ($det == 0){ echo"[----------]"; }
if ($det == 1){ echo"[*---------]"; }
if ($det == 2){ echo"[**--------]"; }
if ($det == 3){ echo"[***-------]"; }
if ($det == 4){ echo"[****------]"; }
if ($det == 5){ echo"[*****-----]"; }
if ($det == 6){ echo"[******----]"; }
if ($det == 7){ echo"[*******---]"; }
if ($det == 8){ echo"[********--]"; }
if ($det == 9){ echo"[*********-]"; }
if ($det == 10){ echo"[**********]"; }
echo"<br/>Gavai XP: $x [$suma / $left]<br/>
Gavai pinigu: $lyyygis<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">Informacija apie tave</a><br/>
<a accesskey=\"2\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Inventorius</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinig|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpa);
}
}
}
}}

print'</card></wml>';

?>