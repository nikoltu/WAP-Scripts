<?php
include_once("core.php");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Valdymo CP"; 
include("config.php"); 

if ($id=="ban_logs"){
if ($stat != "mod"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
echo"<p align=\"center\"><small><b>Ban logai</b><br/>
$lin</small></p>";

$log_file = "txt/ban_log.txt";
$nuskk = file($log_file);
$viso_logu = count($nuskk);
$puslapiu_skaicius = 5;
if ($viso_logu == 0)
    {
echo " <p align=\"center\"><small>
        Dar niekas nieko nebanino<br/></small></p>"; }
        else
        {
if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }
if ($viso_logu <= $page * $puslapiu_skaicius)
        { $iki = $viso_logu; }
echo '<p align="left"><small>';
for( $g = $nuo; $g < $iki; $g++ ){
$g6 = array_reverse($nuskk);
$k6 = explode("|",$g6[$g]);
$bn_l = round(($k6[1])/60,0);
echo "
<b>Kam ban</b>: $k6[0]<br/>
<b>Kuriam laikui</b>: $bn_l minutems<br/>
<b>Kas uzbanino</b>: $k6[3]<br/>
<b>Kodel</b>: $k6[2]<br/>
<b>Kada</b>: $k6[4]<br/>
<br/>";
}
echo '</small></p>';
         $viso_puslapiu = $viso_logu / $puslapiu_skaicius;
    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        { echo "<p align=\"center\"><small>[$starto_skaicius]</small></p>"; }
        else
        { echo "<p align=\"center\"><small><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ban_logs&amp;page=$starto_skaicius\">($starto_skaicius)</a></small></p>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}

echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}


if ($id == "pervestikrd"){ echo"<p align=\"center\"><small><b>
Kreditu pervedimas</b><br/>
$lin<br/></small></p>";
echo"
<p align=\"left\"><small><b>Kam pervesi</b>:
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=siusti_kred\" method=\"post\">
<input name=\"kam\" type=\"text\" maxlength=\"50\" title=\"Kam\"/><br/>
<b>Norima suma kreditu</b>:<br/>
<input name=\"kiek\" type=\"text\" maxlength=\"5\" title=\"Kiek\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Pervesti\"/>
<postfield name=\"kam\" value=\"$(kam)\"/>
<postfield name=\"kiek\" value=\"$(kiek)\"/>
</go></anchor></small></p>
<p align=\"center\">
<small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=main\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
    </p>"; }

if ($id == "siusti_kred"){ 
if (!file_exists("kronoss/$nick.txt")){ $kred = 0; } else { $kred = file_get_contents("kronoss/$nick.txt"); }
$kiek=ereg_replace("[^0-9.]","",$_POST['kiek']);
$hex=explode(".",$kiek);
$kam = $_POST['kam'];
if (count($hex)>2){ $bl = "Prasome ivesti norima kieki!"; }
if (strlen($hex[1]) > 2){ $bl = "Prasome ivesti norima kieki!"; }
if ($kam == $nick){ $bl = "Sau? pz gudras..."; }
if (!file_exists("us_xgrx_inf147258369/$kam.txt")){ $bl = "Sis zaidejas neregistruotas!"; }
if (empty($kiek)){ $bl = "Neivestas kiekis!"; }
if (empty($kam)){ $bl = "Sis zaidejas neregistruotas!"; }
if ($kred < $kiek){ $bl = "Tiek kreditu neturi!"; }

if ($bl == ''){
$bl = "Pervesta ;)"; 
$kred = $kred-$kiek; 
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kred");
fclose($fp); 
if (!file_exists("kronoss/$kam.txt")){ $kred = 0; } else { $kred = file_get_contents("kronoss/$kam.txt"); }
$kred = $kred+$kiek; 
$fp = fopen("kronoss/$kam.txt","w+");
fwrite($fp,"$kred");
fclose($fp); 
@chmod("kronoss/$kam.txt",0777); 
$atidaryma = fopen("priv_zin/$kam.txt", "a");
        fwrite($atidaryma, "@SISTEMA|$vrd pervede tau $kiek kred||\n");
        fclose($atidaryma);
$cyks2 = explode("|",file_get_contents("us_xgrx_inf147258369/$kam.txt")); 
 $fop = fopen("us_xgrx_inf147258369/$kam.txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);
}
echo"<p align=\"center\"><small><b>$bl</b><br/>
$lin<br/>
<a href=\"zaisti.php?id=apie&amp;nick=$nick&amp;pass=$pass&amp;ka=$kam\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/></small></p>";}

if ($id == "mod_ban"){
if ($stat != "mod"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$kam = $_GET['kam'];
echo"<p align=\"center\"><small><b>Deti nick ban</b><br/>
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_baninu&amp;kam=$kam\" method=\"post\">
$lin<br/>
Nick:<br/></small></p>";
if ($kam != ""){ echo"<p align=\"center\"><small><b>$kam</b><br/></small></p>"; } else { echo"<p align=\"center\">
<input name=\"kam_ban\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"$kam\"/><br/></p>"; }
echo"<p align=\"center\">
<small>Laikas (minutemis):<br/></small>
<input name=\"laiks\" type=\"text\" format=\"*N\" maxlength=\"5\" title=\"laikas\" value=\"\"/><br/>
<small>Kodel banini:<br/></small>
<input name=\"kuode\" type=\"text\" maxlength=\"180\" title=\"kode\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Baninti\"/>
    <postfield name=\"kam_ban\" value=\"$(kam_ban)\"/>
    <postfield name=\"laiks\" value=\"$(laiks)\"/>
    <postfield name=\"kuode\" value=\"$(kuode)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}

if ($id == "ziu_pass")
{
if ($nick != "$admin")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small>
</p>";
}
else
{
echo "	<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ziu_pass2\" method=\"post\">
<p align=\"left\"><small>
Ziureti zaidejo slaptazodi.<br/>
$lin<br/>
Zaidejo nickas:<br/>

<input name=\"nickas\" type=\"text\" maxlength=\"20\" title=\"Nickas\" value=\"\"/><br/>

	<input type=\"submit\" title=\"dtghj\" value=\"&#187;Ziureti&#187;\"/>

    <postfield name=\"nickas\" value=\"$(nickas)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}
 }

if ($id == "ziu_pass2")
{
if ($nick != "$admin")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small>
</p>";
}
else
{
  $nickas = $_POST['nickas'];

if (!file_exists("us_xgrx_inf147258369/$nickas.txt"))
{
$wrong = "Sis zaidejas neuzregistruotas!";
}
if ($nickas == "")
{
$wrong = "Nenurodei zaidejo nick!";
}
if ($nickas == "spawn")
{
$wrong = "negalima ziureti spawn paswordo :D!";
}
if ($wrong == "")
{
        $pas = @explode("|",@file_get_contents("us_xgrx_inf147258369/$nickas.txt"));

$wrong = "Zaidejo $nickas slaptazodis yra <b>$pas[1]</b> !";
}
 echo"<p align=\"left\"><small>
$wrong<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ziu_pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
</p>";
}
 }

if ($id == "mod_baninu"){
if ($stat != "mod"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$kam = $_GET['kam'];
if ($kam == ""){
$kam_ban = $_POST['kam_ban']; } else {
$kam_ban = $kam; }
$laiks = $_POST['laiks'];
$kuode = $_POST['kuode'];
if ($kam_ban == "") { $er = "<b>Nenurodei ka baninti</b>"; }
if ($kuode == "") { $er = "<b>Nenurodei kodel banini</b>"; }
if ($laiks == "") { $er = "<b>Nenurodei kokiam laikui uzbaninti</b>"; }
if (!file_exists("us_xgrx_inf147258369/$kam_ban.txt")){ $er = "<b>Sis zaidejas neuzregistruotas!</b>"; }
if ($laiks > 99999) { $er = "<b>Tokiam laikui baninti negali</b>"; }
if ($laiks == 0) { $er = "<b>Tokiam laikui baninti negali</b>"; }
if ($kam_ban == $nick) { $er = "<b>Saves baninti negalima</b>"; }
$g6 = file("txt/nick_bans.txt");
$kiek_g6 = count($g6);
for($pf=0; $pf < $kiek_g6; $pf++) {
$k6 = explode("|",$g6[$pf]);
if ($kam_ban == $k6[0]) { $er = "<b>Sis zaidejas jau uzbanintas</b>"; }
}
if ($kam_ban == "spawn") { $er = "<b>Suski tu kurva! nebandyk!</b>"; }
if ($er == "") {
$arre = array("<",">","&","^","%","\n","|");
$kuode = str_replace($arre,"",$kuode);
$laiks2 = $laiks*60;
$ban_time = time()+$laiks2; 
$fp = fopen("txt/nick_bans.txt","a"); 
fwrite($fp,"$kam_ban|$ban_time|$kuode|$vrd|\n");
fclose($fp);
$iras = $ban_time-time();
$fp6 = fopen("txt/ban_log.txt","a");
fwrite($fp6,"$kam_ban|$iras|$kuode|$vrd|$laikas|\n");
fclose($fp6);
$er = "<b>Uzbaninta</b>";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "daryti_modu"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
echo"<p align=\"center\"><small><b>Daryti modu</b><br/>
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=darau_mod\" method=\"post\">
$lin<br/>
Nick:<br/></small>
<input name=\"kam_mod\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Daryti\"/>
    <postfield name=\"kam_mod\" value=\"$(kam_mod)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}

if ($id == "darau_mod"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$kam_mod = $_POST['kam_mod'];
if ($kam_mod == "") { $er = "<b>Nenurodei kam suteikti mod</b>"; }
if (!file_exists("us_xgrx_inf147258369/$kam_mod.txt")){ $er = "<b>Sis zaidejas neuzregistruotas!</b>"; }
$nv = file("txt/mods.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
if ($kam_mod == $kv[0]){
$er = "<b>Sis zaidejas jau moderatorius!</b>"; }}
if ($er == "") {

$fp1 = fopen("txt/mods.txt","a");
fwrite($fp1,"$kam_mod|mod|\n");
fclose($fp1);
$er = "<b>$kam_mod padarei moderatoriumi</b>";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "nuimti_mod"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
echo"<p align=\"center\"><small><b>Nuimti mod</b><br/>
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=nuimu_mod\" method=\"post\">
$lin<br/>
Nick:<br/></small>
<input name=\"kam_mod\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Nuimti\"/>
    <postfield name=\"kam_mod\" value=\"$(kam_mod)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}

if ($id == "nuimu_mod"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$kam_mod = $_POST['kam_mod'];
if ($kam_mod == "") { $er = "<b>Nenurodei kam nuimti mod</b>"; }
if (!file_exists("us_xgrx_inf147258369/$kam_mod.txt")){ $er = "<b>Sis zaidejas neuzregistruotas!</b>"; }
if ($er == "") {
$nkh2y = file("txt/mods.txt"); 
$kiek_nkh2y = count($nkh2y);
for($py2y=0; $py2y < $kiek_nkh2y; $py2y++) {
$kly2y = explode("|",$nkh2y[$py2y]); 
if ($kam_mod == $kly2y[0]){ 
$nkh2y[$py2y] = ""; 
$fpz2y = fopen("txt/mods.txt","w"); 
fwrite($fpz2y,implode($nkh2y)); 
fclose($fpz2y); 
}}
$er = "<b>$kam_mod nuemei moderatoriaus statusa</b>";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "unban"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$nv = array_reverse(file("txt/nick_bans.txt"));
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
$uzb_lv = $kv[1]-time();
$uzb_lv2 = round(($uzb_lv)/60,0);

echo"<p align=\"left\"><small>
<b>Kan:</b> $kv[0]<br/>
<b>Uzbanintas del:</b> $kv[2]<br/>
<b>Uzbanino:</b> $kv[3]<br/>
<b>Banas dar tesis:</b> $uzb_lv2 minutes<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban2&amp;kam=$kv[0]\">Nuimti ban</a><br/><br/>
</small></p>"; }

echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "unban2"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else { $kam = $_GET['kam'];

$er = "<b>Atbaninta</b>";
$nv = file("txt/nick_bans.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
if ($kam == $kv[0]){
$nv[$pv] = "";
$fpv = fopen("txt/nick_bans.txt","w");
fwrite($fpv,implode($nv));
fclose($fpv); break; 
}}

echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id=="sms_log"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
$log_file = "txt/sms_log.txt";
$nuskk = file($log_file);
$viso_logu = count($nuskk);

$lol=0; 
for($nx=0; $nx<$viso_logu; $nx++) { 
$dfsg = explode("|",$nuskk[$nx]); 
$blet=$dfsg[4]; 
$lol=$lol+$blet; }  
$a = $lol/100; 

echo"<p align=\"center\"><small><b>Siandienos SmS logai </b> ($viso_logu sms&apos;u uz $a Lt)<br/>
$lin</small></p>";

$puslapiu_skaicius = 10;
if ($viso_logu == 0)
    {
echo " <p align=\"center\"><small>
        Dar niekas nesiunte mokamu sms<br/></small></p>"; }
        else
        {
if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }
if ($viso_logu <= $page * $puslapiu_skaicius)
        { $iki = $viso_logu; }
echo '<p align="left"><small>';
for( $g = $nuo; $g < $iki; $g++ ){
$g6 = array_reverse($nuskk);
$k6 = explode("|",$g6[$g]); 
$lk = substr($k6[2], 0, 10); 
if ($lk == $ll1){
echo "
<b>Siuntejas</b>: $k6[0]<br/>
<b>Gavimo nr.</b>: $k6[3]<br/>
<b>Kaina</b>: $k6[4]<br/>
<b>Zinutes tekstas</b>: $k6[1]<br/>
<b>Siuntimo laikas</b>: $k6[2]<br/><br/>"; }
}
echo '</small></p>';
         $viso_puslapiu = $viso_logu / $puslapiu_skaicius;
    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        { echo "<p align=\"center\"><small>[$starto_skaicius]</small></p>"; }
        else
        { echo "<p align=\"center\"><small><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=sms_log&amp;page=$starto_skaicius\">($starto_skaicius)</a></small></p>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}

echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=admin\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
"; 
}}

if ($id=="empty_ban_logs"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
echo"<p align=\"center\"><small><b>Isvalyta</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
"; 
$fp6 = fopen("txt/ban_log.txt","w");
fwrite($fp6,"");
fclose($fp6);
}
}

if ($id == "duoti_lvl"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {
echo"<p align=\"center\"><small><b>Duoti lygiu</b><br/>
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=duoti_lvl2\" method=\"post\">
$lin<br/>
Nick:<br/></small>
<input name=\"kam2\" type=\"text\" maxlength=\"50\" title=\"kam\" value=\"\"/><br/>
<small>XP:<br/></small>
<input name=\"xp2\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"XP\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Toliau\"/>
    <postfield name=\"kam2\" value=\"$(kam2)\"/>
    <postfield name=\"xp2\" value=\"$(xp2)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}

if ($id == "duoti_lvl2"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else { 
$kam2 = $_POST['kam2'];
$xp2 = $_POST['xp2']; 
if ($kam2 == "") { $er = "<b>Nenurodei kam duosi lygiu</b>"; }
if (!file_exists("us_xgrx_inf147258369/$kam2.txt")){ $er = "<b>Sis zaidejas neuzregistruotas!</b>"; }
if ($er == "") { 

$NKMi = file_get_contents("us_xgrx_inf147258369/$kam2.txt");
$infa = explode("|", $NKMi);
$xp1 = $infa[19]; 
$lv1 = $infa[0]; 
$xp_gal1 = $xp1+$xp2;  


$lvl = 99999; 
$enda = 99999; 
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){ 
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $xp_gal1/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $lieka = round($buves*10,1); break; }
}

  $fdkjg = "$lvl"-"$lv1"; 
  $kiekupp = ($fdkjg*2)+$points; 
$fpr = fopen("us_xgrx_inf147258369/$kam2.txt","w");
fwrite($fpr,"$lvl|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$kiekupp|$infa[16]|$infa[17]|$infa[18]|$xp_gal1|$lieka|$infa[21]|$infa[22]|$infa[23]||\n");
fclose($fpr);
$er = "Davei $xp2 XP, to $kam2"; }
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=duoti_lvl\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}}

/////////////////Pervesti pinigu///////////////////////

if ($id == "pervesti") { 
if ($stat != "mod"){echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; } else {
$kam = $_GET['kam'];
echo"<p align=\"center\"><small>
Pinigus gaus $kam<br/>
<form action=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=pervesti2&amp;kam=$kam\" method=\"post\">
<b>Kiek pervesi?<br/></b></small>
<input name=\"howy\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek?\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Pervesti\"/>
    <postfield name=\"howy\" value=\"$(howy)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>
"; }}

if ($id == "pervesti2") { if ($stat != "mod"){echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; } else {
$kam = $_GET['kam'];
$howy = $_POST['howy'];

if (!file_exists("us_xgrx_inf147258369/$kam.txt")){ $er="Sis zaidejas neuzregistruotas!"; }
if ($kam == $nick){ $er="Sau pervest negalima"; }
if ($pinigai < $howy){ $er="Neturi tiek pinigu"; }
if ($er == ""){
$us = @file_get_contents("us_xgrx_inf147258369/$kam.txt");
    $infa = explode("|", $us);
$gavejo_pinigai = $infa[7];
$piny = round(($pinigai-$howy),2);
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
$gavejo_piny = round(($gavejo_pinigai+$howy),2);
$fp1 = fopen("us_xgrx_inf147258369/$kam.txt","w");
fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);
$er = "Pervedei $howy to $kam";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=pervesti&amp;kam=$kam\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }}

if ($id == "trinti_nenaud"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else {/*
echo"<p align=\"center\"><small><b>Nickai su kuriais niekas neprisijunge 10 dienu</b><br/>
$lin<br/></small></p>"; 
echo'<p align="left"><small>';
$link="us_xgrx_inf147258369/"; 
$zin=10; 
$dir = glob($link."*");
$eil=count($dir);
for($it=0; $it<$eil; $it++){
$dr=str_replace($link,"",$dir[$it]); 
$dr=str_replace(".txt","",$dr); 
$po = file_get_contents("us_xgrx_inf147258369/$dr.txt"); 
$pi = explode("|",$po); 
$min = $pi[13]/60; 
$val = $min/60; 
$dienos = $val/24; 
if ($dienos >= 10){ echo"
<b>$dr</b>-$dienos<br/>"; }
} 
echo'</small></p>'; 
echo"<p align=\"center\"><small>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=trinti_nenaud2\">Trinti visus nenaudojamus</a><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=admin\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";*/
}}

if ($id == "trinti_nenaud2"){
if ($nick != "spawn"){ echo"<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"; }
else { /*
echo"<p align=\"center\"><small><b>Istrinta</b><br/>
$lin<br/></small></p>"; 
echo'<p align="left"><small>';
$link="us_xgrx_inf147258369/"; 
$zin=10; 
$dir = glob($link."*");
$eil=count($dir);
for($it=0; $it<$eil; $it++){
$dr=str_replace($link,"",$dir[$it]); 
$dr=str_replace(".txt","",$dr); 
$po = file_get_contents("us_xgrx_inf147258369/$dr.txt"); 
$pi = explode("|",$po); 
$min = $pi[13]/60; 
$val = $min/60; 
$dienos = $val/24; 
if ($dienos >= 10){ 
unlink("us_xgrx_inf147258369/$gr.txt"); 
unlink("priv_zin/$gr.txt"); 
unlink("kovos/$gr.txt"); 
unlink("miners/$gr.txt"); 
unlink("fyshers/$gr.txt"); 
}} 
echo'</small></p>'; 
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=admin\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";*/
}}

if ($id == "trint_tema"){ 
if ($vrd == "@$nick"){ 
echo"<p align=\"center\"><small><b>Istrinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($te == $kly2[1]){ 
$nkh2[$py2] = ""; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}
unlink("frm_temos/$te.txt"); 
}}

if ($id == "rakint_tema"){ 
if ($vrd == "@$nick"){ 
echo"<p align=\"center\"><small><b>Uzrakinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($te == $kly2[1]){ 
$lko = time(); 
$nkh2[$py2] = "$lko|$kly2[1]|$kly2[2]|taip|$kly2[4]"; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}

if ($id == "atrakint_tema"){ 
if ($vrd == "@$nick"){ 
echo"<p align=\"center\"><small><b>Atrakinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($te == $kly2[1]){ 
$lko = time(); 
$nkh2[$py2] = "$lko|$kly2[1]|$kly2[2]|ne|$kly2[4]"; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}

if ($id == "kabint_tema"){ 
if ($vrd == "@$nick"){ 
echo"<p align=\"center\"><small><b>Prikabinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($te == $kly2[1]){ 
$lko = time(); 
$nkh2[$py2] = "$lko|$kly2[1]|Prikabinta|$kly2[3]|$kly2[4]"; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}

if ($id == "nukabint_tema"){ 
if ($vrd == "@$nick"){ 
echo"<p align=\"center\"><small><b>Nukabinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($te == $kly2[1]){ 
$lko = time(); 
$nkh2[$py2] = "$lko|$kly2[1]|Laisva|$kly2[3]|$kly2[4]"; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}

if ($id == "trint_kom"){ 
if ($vrd == "@$nick"){ 
if (file_exists("frm_temos/$te.txt")){ 
echo"<p align=\"center\"><small><b>Istrinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$te\">I tema</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>"; 
$nkh2 = file("frm_temos/$te.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($kj == $kly2[4]){ 
$nkh2[$py2] = ""; 
$fpz2 = fopen("frm_temos/$te.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); break; 
}}}}}

print'</card></wml>';
?>

