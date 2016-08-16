<?php  
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Pasiulymuose";
include("config.php"); 
if ($id == "pasiulimutvark"){
if ($vrd != "@spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a></small></p>"; }
else {
$nv = file("txt/pasiulymai.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);



echo"<p align=\"left\"><small>

<b>Siulo:</b> $kv[3]<br/>
<b>Pasiulymas:</b> $kv[2]<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=trintipas&amp;kam=$kv[2]\">Trinti</a><br/><br/>
</small></p>"; }

echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=pasiulymai\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}


if ($id == "trintipas"){
if ($vrd != "@spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a></small></p>"; }

else{
$kam=$_GET['kam'];
$er = "<b>Istrinta</b>";
$nv = file("txt/pasiulymai.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
if ($kam == $kv[2]){
$nv[$pv] = "";
$fpv = fopen("txt/pasiulymai.txt","w");
fwrite($fpv,implode($nv));
fclose($fpv);
}}

echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=pasiulimutvark\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "pasiulymai"){
if ($stat == "Niekas"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$kam = $_GET['kam'];
echo"<p align=\"center\"><a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=pasiulimutvark\">Pasiulymu Tvarkymas</a><br/>
<small><b>Pasiulymai zaidimui</b><br/>
<form action=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=siulau&amp;kam=$kam\" method=\"post\">
$lin<br/></small></p>";
echo"<p align=\"center\"><small>Pasiulymas:<br/></small>
<input name=\"kuode\" type=\"text\" maxlength=\"1000\" title=\"kode\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Pasiulyti\"/>
    
    <postfield name=\"kuode\" value=\"$(kuode)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=jususiulymai\">[&#187;]Visi Pasiulymai</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#171;] I pradzia</a><br/>
</small></p>
";
}}

if ($id == "siulau"){

$kam = $_GET['kam'];
if ($kam == ""){
$kam_ban = $_POST['kam_ban']; } else {
$kam_ban = $kam; }
$laiks = $_POST['laiks'];
$kuode = $_POST['kuode'];

if ($kuode == "") { $er = "<b>[!] Nera pasiulymo</b>"; }
if ($kam_ban == $nick) { $er = "<b>Tokio pasiulymo rasyt negalima</b>"; }
$g6 = file("txt/pasiulymai.txt");
$kiek_g6 = count($g6);
for($pf=0; $pf < $kiek_g6; $pf++) {
$k6 = explode("|",$g6[$pf]);
 }


if ($kuode == $k6[2]) { $er = "<b>Toks pasiulymas jau yra</b>"; }

$NKM = file_get_contents("us_xgrx_inf147258369/$kam_ban.txt");
$infa = explode("|", $NKM);
if ($infa[16] == "@spawn") { $er = "<b>Adminu baninti negalima!</b>"; }
if ($er == "") {
$laiks2 = $laiks*60;
$ban_time = time()+$laiks2;
$fp = fopen("txt/pasiulymai.txt","a");
fwrite($fp,"$kam_ban|$ban_time|$kuode|$vrd|\n");
fclose($fp);
$iras = $ban_time-time();
$fp6 = fopen("txt/ban_logs.txt","a");
fwrite($fp6,"$kam_ban|$iras|$kuode|$vrd|Nick ban|$laikas|\n");
fclose($fp6);
$er = "Pasiulymas irasytas";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a 
href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=pasiulymai\">[&#171;]Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#171;]I pradzia</a><br/>
</small></p>";
}



if ($id == "jususiulymai"){
echo"<p align=\"center\"><small><b>Jusu pasiulymai<br/></b>
Jei Pasiulymas Isbuna Daugiau Nei 48valandas , tai tikriausiai jis bus itrauktas i planus ir padarytas ;) Uz Kronu prasinejima , reklama ir visa kita kas nesusije su pasiulymais Ban!<br/>
$lin<br/>
</small></p>";
echo'<p align="left"><small>';
$np = file("txt/pasiulymai.txt");
echo $_GET['sh']; 
$kiek_np = count($np);
if ($kiek_np == "0"){ echo"[!] Pasiulymu nera"; }
else{
for($o=$kiek_np-1; $o >= 0; $o--) {
$op = explode("|",$np[$o]);
$uz_lk = $op[1]-time();
$uz_lk2 = round(($uz_lk)/60,0);
echo"
<b>Siulo</b>: $op[3]<br/>
<b>Pasiulymas</b>: $op[2]<br/>
$lin<br/>"; }}
echo'</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=pasiulymai\">[&#171;]Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#171;]I pradzia</a><br/></small></p>";
}



 
print'</card></wml>';

?>

