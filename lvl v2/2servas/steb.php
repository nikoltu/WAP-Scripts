<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Tamsiajame Slenyje"; 
include("config.php"); 
/////////////////Kur kautis///////////////////////

if ($id == "paslaptingas"){
echo"<p align=\"center\"><small>
<img src=\"http://ok.our.lt/imgs/steb.jpg\" alt=\"steb\"/><br/>
<b>Jus Atkeliavote Y Tamsiaji Sleni!! Cia rasite kariu kurie ismes paslaptingus,retus,gerus! Daigtus!</b><br/>
[&#171;]<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Toliau</a>[&#187;]<br/>

</small></p><p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
}


/////////////////Stebuklinga vietove///////////////////////

if ($id == "steb"){ include("icludekitainf/nuskait2.php");
if ($dari[0] != "+") {echo"<p align=\"center\"><small>
<b>Cia galima tik isrinktiesiems!</b><br/>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=paslaptingas\">Atgal</a></small></p>"; }
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
<b>Jus Tamsiajame Slenyje! Pasirinkite Koki Kary Zudysite!</b><br/>
$lin<br/></small>
<small><b>[&#187;]</b><a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=kovoju&amp;vs=golemas&amp;kd=$kodase&amp;kas=steb\">Golemas (Lygis: 135)</a><b>[&#171;]</b><br/>
<b>[&#187;]</b><a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=kovoju&amp;vs=blogasisskeletas&amp;kd=$kodase&amp;kas=steb\">Blogasis Skeletas (Lygis: 450)</a><b>[&#171;]</b><br/>
<b>[&#187;]</b><a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=kovoju&amp;vs=tamsusisdemonas&amp;kd=$kodase&amp;kas=steb\">Tamsusis Demonas (Lygis: 800)</a><b>[&#171;]</b><br/>
<b>[&#187;]</b><a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=kovoju&amp;vs=juodasisvelnias&amp;kd=$kodase&amp;kas=steb\">Juodasis Velnias (Lygis: 1320)</a><b>[&#171;]</b><br/></small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=paslaptingas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

} }


/////////////////IVyko kova///////////////////////

if ($id == "kovoju") {


if ($vs == "golemas") {
$dstone = array("","","","","gole","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",); 
$gstone = array("","","","","","","","","","","",""); 
$ranpinig = rand(1, 1000);
$pinigai = $pinigai+$ranpinig;
$lyyygis = 135;
$x = 300; }

if ($vs == "blogasisskeletas") {
$dstone = array("","","","","skelet","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""); 
$gstone = array("","","","","","","","","","","",""); 
$ranpinig = rand(1000, 2500);
$pinigai = $pinigai+$ranpinig;
$lyyygis = 450;
$x = 900; }

if ($vs == "tamsusisdemonas") {
$dstone = array("","","","","","","","demon","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""); 
$gstone = array("","","","","","","","","","","",""); 
$ranpinig = rand(1000, 4000);
$pinigai = $pinigai+$ranpinig;
$lyyygis = 800;
$x = 1900; }

if ($vs == "juodasisvelnias") {
$dstone = array("","","","","uodega","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""); 
$gstone = array("","","","","","","","","","","",""); 
$ranpinig = rand(2000, 6000);
$pinigai = $pinigai+$ranpinig;
$lyyygis = 1320;
$x = 3000; }

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
if ($kdp != $aps_kodas or $kdp == "" or strlen($kdp) != 5){ echo"<p align=\"center\"><small><b>Taip negalima!</b><br/>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else{

if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes, padusai</b><br/>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
include("icludekitainf/nuskait2.php"); 
if ($kas == "membbbb"){ echo"<p align=\"center\"><small><b>lialia</b><br/>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{

if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){

echo"<p align=\"center\"><small><b>Pralaimejai</b><br/>
Ir praradai puse pinigu<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">Informacija apie tave</a><br/>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Atgal</a><br/>
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
<b>Sia Kova Laimejai!<br/></b>
Uzmusei <b>$lyyygis</b> Lygio Kari!<br/>
$lin<br/></small></p>";

$suma = $x+$exp; 

$lvl = 99999; 
$enda = 99999; 
$qq = 1.05;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.05; } else { $qq = $qq*1.05; }
if ($qq >= $suma/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $left = round($buves*10,1); break; }
}
if ($lvl > $lygis){ 
echo"<p align=\"center\"><small>
<b>Sveikinu! Tu pasikelei lygi<br/>
Dabar tavo lygis: $lvl</b><br/>
$lin<br/></small></p>"; 
$sakiai = ($lvl - $lygis)*3;
$pointsr = "$points"+"$sakiai"; 
} else { $pointsr = $points; }

if ($kas == "steb" && $dari[0]=="+"){ 
$ds = rand(0,count($dstone)-1); 
$gs = rand(0,count($gstone)-1);
if ($dstone[$ds] == ""){ $dsto = ""; } 
if ($gstone[$gs] == ""){ $gsto = ""; }  
if ($dstone[$ds] == "nera0"){ $dsto = "Nera0"; $masyve = 2; }  
if ($dstone[$ds] == "gole"){ $dsto = "Golemo Naga"; $masyve = 4; }  
if ($dstone[$ds] == "skelet"){ $dsto = "Skeleto Dulkes"; $masyve = 5; }  
if ($dstone[$ds] == "demon"){ $dsto = "Tamsiojo Demono Auskara"; $masyve = 6; }  
if ($dstone[$ds] == "uodega"){ $dsto = "Juodojo Velnio Uodega"; $masyve = 7; }  
if ($dstone[$ds] == "nesukurta4"){ $dsto = "nesukurta4"; $masyve = 8; }  
if ($dstone[$ds] == "nesukurta3"){ $dsto = "nesukurta3"; $masyve = 9; }  
if ($dstone[$ds] == "nesukurta2"){ $dsto = "nesukurta2"; $masyve = 10; }  
if ($dstone[$ds] == "nesukurta"){ $dsto = "nesukurta"; $masyve = 11; }  
if ($gstone[$gs] == "nesukurta6"){ $gsto = "nesukurta6"; $xaxaxa = 0; } 
if ($gstone[$gs] == "nesukurta7"){ $gsto = "nesukurta7"; $xaxaxa = 1; }

if ($dsto != ""){ 
$dari[$masyve]=$dari[$masyve]+1; 
$inw[$xaxaxa]=$inw[$xaxaxa]+1; 

echo"<p align=\"center\"><small>Karys Pamete: <b>$dsto</b><br/>$lin<br/></small></p>";

$fop15 = fopen("material/$nick.txt", "w");
        fwrite($fop15, "$inw[0]|$inw[1]|$inw[2]|$inw[3]|$inw[4]|$inw[5]|$inw[6]|$inw[7]|$inw[8]|$inw[9]|$inw[10]|$inw[11]|$inw[12]|$inw[13]|$inw[14]|$inw[15]|$inw[16]|$inw[17]|$inw[18]|$inw[19]|$inw[20]|$inw[21]|$inw[22]|$inw[23]|$inw[24]|$inw[25]|$inw[26]|$inw[27]|$inw[28]|$inw[29]|$inw[30]|$inw[31]|$inw[32]|$inw[33]|$inw[34]|$inw[35]|$inw[36]|$inw[37]|$inw[38]|$inw[39]|");
        fclose($fop15);

include("icludekitainf/iras2.php");
}

if ($gsto != ""){ 
 
$inw[$xaxaxa]=$inw[$xaxaxa]+1; 

echo"<p align=\"center\"><small>Karys Pamete: <b>$gsto</b><br/>$lin<br/></small></p>";

$fop15 = fopen("material/$nick.txt", "w");
        fwrite($fop15, "$inw[0]|$inw[1]|$inw[2]|$inw[3]|$inw[4]|$inw[5]|$inw[6]|$inw[7]|$inw[8]|$inw[9]|$inw[10]|$inw[11]|$inw[12]|$inw[13]|$inw[14]|$inw[15]|$inw[16]|$inw[17]|$inw[18]|$inw[19]|$inw[20]|$inw[21]|$inw[22]|$inw[23]|$inw[24]|$inw[25]|$inw[26]|$inw[27]|$inw[28]|$inw[29]|$inw[30]|$inw[31]|$inw[32]|$inw[33]|$inw[34]|$inw[35]|$inw[36]|$inw[37]|$inw[38]|$inw[39]|");
        fclose($fop15);

}}

$winai = "$wins"+"1";
$pinig = $pinigai+$ranpinig;
echo"
<p align=\"center\"><small>
Karys Ismete <b>$ranpinig</b> Pinigu!<br/>Netekai Gyvybiu: $netekai<br/>
Liko Gyvybiu: $gyvs<br/>"; 
echo"<br/>Gavai Expierence: $x [$suma / $left]<br/>
<br/>
<a accesskey=\"1\" href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">Informacija apie tave</a><br/>
<a accesskey=\"2\" href=\"inv.php?nick=$nick&amp;pass=$pass&amp;id=\">Inventorius</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"steb.php?nick=$nick&amp;pass=$pass&amp;id=steb\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

$fp3 = fopen("$juvelyrics","w");
fwrite($fp3,"$med_amu|$kal_amu|$zve_amu|$pat_amu|$gyv_amu|$gyn_amu|$jeg_amu|$pow_amu|$med_zied|$kal_zied|$zve_zied|$pat_zied|$gyv_zied|$gyn_zied|$jeg_zied|$pow_zied|$med_ausk|$kal_ausk|$zve_ausk|$pat_ausk|$gyv_ausk|$gyn_ausk|$jeg_ausk|$pow_ausk|$juvelyrics_lvl|\n");
fclose($fp3);

$fpa = fopen("$gameriai","w");
fwrite($fpa,"$lvl|$inf[1]|$inf[2]|$jega|$gyvs|$gyvybess|$sugebejimas|$pinig|$winai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$pointsr|$gynyba|$tim|$rase|$suma|$left||$sarvu_prot|$sarvai||\n");
fclose($fpa);
}
}
}
}}

print'</card></wml>';

?>