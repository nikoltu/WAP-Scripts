<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Konkursas";
include("config.php"); 

if (file_get_contents("txt/konk.ly")==""){ 
$open = fopen("txt/konk.ly","w+");
        fwrite($open, "$laikas|$time|\n");
        fclose($open); }

if ($id == ""){ 
$a = explode("|", file_get_contents("txt/konk.ly")); 
$b = round(((($a[1]+3*24*60*60)-time())/60)/60,0); 
$da = file("txt/konk_dal.ly"); 
$kiek2 = count($da); 
echo"<p align=\"center\"><small><b>Konkursas</b><br/>
$lin<br/>
</small></p><p align=\"left\"><small>
<b>Informacija:</b> konkursas vis is naujo prasiseda kas 3 dienos, 
tu 3 dienu metu konkurse uzsiregistrave zaidejai turi stengtis surinkti kuo daugiau XP, daugiausiai surinke gauna prizus.<br/>
<b>Prasidejo:</b> $a[0].<br/>
<b>Baigsis uz:</b> $b h.<br/>
<b>Prizai:</b> 1vt-3kronos, 2vt-2kronos, 3vt-1krona.<br/>
<b>Dalyviai ($kiek2):</b> "; 
for($i2=0; $i2<$kiek2; $i2++) {
$et2=explode("|",$da[$i2]);
if ($i2==0){ echo"$et2[0]"; } else {
echo", $et2[0]"; }}
echo".<br/>
<b>Registracija i konkursa:</b> registracija apmokestinta simboline 1LT suma, siekiant isvengti bereikalingu simtiniu nariu sarasu, kas labai apkrautu serveri. 
Norint uzsiregistruoti reikes issiusti sms.<br/>
<b>Tekstas:</b> lgzz1 $nick<br/>
<b>Numeriu:</b> 1679<br/>
<b>Dalyvaujanciuju TOP</b>:<br/>"; 
if ($b > 12){ echo"---Topas pasirodys likus 12 valandu iki konkurso pabaigos.<br/>"; } else {
for($y=0; $y<$kiek2; $y++){
$nar = explode("|",$da[$y]); 
$infa = explode("|", @file_get_contents("us_xgrx_inf147258369/$nar[0].txt"));
$ski = round($infa[19]-$nar[1],1); 
$arr[]=array($ski,$nar[0]);
} 
rsort($arr);
for($f=0; $f<$kiek2; $f++){ 
echo" - <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> [+{$arr[$f][0]} XP]<br/>"; }}
echo"<b>Visu konkursu rezultatai</b>:<br/>";
$da = array_reverse(file("txt/konk_rez.ly")); 
for($i2=0; $i2<count($da); $i2++) {
$et2=explode("|",$da[$i2]);
echo"<b>Prasidejo:</b> $et2[0] | <b>Laimetojai:</b> 1vt-$et2[1], 2vt-$et2[2], 3vt-$et2[3].<br/>"; }
echo"</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></small></p>";  }


print'</card></wml>';

?>