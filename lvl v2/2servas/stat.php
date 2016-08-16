<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Statistikoj";
include("config.php"); 

if ($id == ""){
$a = glob("us_xgrx_inf147258369/*.txt");
for ($i = 0; $i<count($a); $i++){
$b = explode("|",file_get_contents($a[$i]));
if ($b[18]=="Elf"){ $elfu[] = $i; }
if ($b[18]=="Dark_elf"){ $dark[] = $i; }
if ($b[18]=="Human"){ $hum[] = $i; }
if ($b[18]=="Orc"){ $orcu[] = $i; }
if ($b[18]=="Attacer"){ $attac[] = $i; }
if ($b[18]=="Dwarf"){ $dwarfu[] = $i; }
if ($b[18]=="Fisher"){ $fishu[] = $i; }
if ($b[18]=="Farmer"){ $farm[] = $i; }
if ($b[18]=="Crafter"){ $cra[] = $i; }
}
$u1 = count($elfu);
$u2 = count($dark);
$u3 = count($hum);
$u4 = count($attac);
$u5 = count($dwarfu);
$u6 = count($fishu);
$u7 = count($orcu);
$u8 = count($farm);
$u9 = count($cra);
$pr1 = round(($u1*100)/count($a),1);
$pr2 = round(($u2*100)/count($a),1);
$pr3 = round(($u3*100)/count($a),1);
$pr4 = round(($u4*100)/count($a),1);
$pr5 = round(($u5*100)/count($a),1);
$pr6 = round(($u6*100)/count($a),1);
$pr7 = round(($u7*100)/count($a),1);
$pr8 = round(($u8*100)/count($a),1);
$pr9 = round(($u9*100)/count($a),1);

$n = glob("darinfos/*.ly");
for ($i = 0; $i<count($a); $i++){
$b = explode("|",file_get_contents($n[$i]));
if ($b[0]=="+"){ $isr[] = $i; }}
echo"<p align=\"center\"><small><b>Statistika</b><br/>$lin<br/></small></p>
<p align=\"left\"><small><b>Is viso zmoniu:</b> "; echo count($a); echo"<br/>
<b>Is ju isrinktuju:</b> "; echo count($isr); echo"<br/>
<br/>
<b>Rasiu statistika</b><br/>
Elf: <b>$u1 [$pr1 %]</b><br/>
<img src=\"gd.php?ka=$pr1\" alt=\"juosta\"/><br/>
Dark elf: <b>$u2 [$pr2 %]</b><br/>
<img src=\"gd.php?ka=$pr2\" alt=\"juosta\"/><br/>
Human: <b>$u3 [$pr3 %]</b><br/>
<img src=\"gd.php?ka=$pr3\" alt=\"juosta\"/><br/>
Orc: <b>$u7 [$pr7 %]</b><br/>
<img src=\"gd.php?ka=$pr7\" alt=\"juosta\"/><br/>
Attacer: <b>$u4 [$pr4 %]</b><br/>
<img src=\"gd.php?ka=$pr4\" alt=\"juosta\"/><br/>
Dwarf: <b>$u5 [$pr5 %]</b><br/>
<img src=\"gd.php?ka=$pr5\" alt=\"juosta\"/><br/>
Fisher: <b>$u6 [$pr6 %]</b><br/>
<img src=\"gd.php?ka=$pr6\" alt=\"juosta\"/><br/>
Farmer: <b>$u8 [$pr8 %]</b><br/>
<img src=\"gd.php?ka=$pr8\" alt=\"juosta\"/><br/>
Crafter: <b>$u9 [$pr9 %]</b><br/>
<img src=\"gd.php?ka=$pr9\" alt=\"juosta\"/><br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/></small></p>";
}

print'</card></wml>';

?>