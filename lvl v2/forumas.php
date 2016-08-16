<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Forume"; 
include("config.php"); 

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Forume"){ $pok[] = $et[0]; }}
$online2 = count($pok); 


if ($id == ''){ 
echo"<p align=\"center\"><small><b>Forumas</b><br/>
Butinai laikykites istatymu! [jie yra mieste].<br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=kurti_tema\">Kurti tema</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a><br/>
$lin<br/></small></p><p align=\"left\"><small>"; 

$DATA_FILE = "txt/temos.txt";
$nuskk = file($DATA_FILE);
$viso_tm = count($nuskk);
$puslapiu_skaicius = 15;

for($ie=0; $ie<$viso_tm; $ie++) {
$koo2=explode("|",$nuskk[$ie]); 
$fdg = str_replace("_"," ",$koo2[1]); 
if ($koo2[2] == "Prikabinta"){ 
$kiekk = count(file("frm_temos/$koo2[1].txt")); 
if ($koo2[3] != "taip"){ 
echo"<b>!!! <a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$koo2[1]\">$fdg</a></b> [$kiekk]"; 
if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trinti_tema&amp;te=$koo2[1]\">[X]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=nukabinti_tema&amp;te=$koo2[1]\">[D]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=uzrakinti_tema&amp;te=$koo2[1]\">[U]</a>"; }
echo"<br/>"; }
if ($koo2[3] == "taip"){ 
echo"<b>!X <a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$koo2[1]\">$fdg</a></b> [$kiekk]"; 
if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trinti_tema&amp;te=$koo2[1]\">[X]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=atrakinti_tema&amp;te=$koo2[1]\">[A]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=nukabinti_tema&amp;te=$koo2[1]\">[D]</a>"; }
echo"<br/>"; 
}
} }
if ($viso_tm == 0)
    { echo "<b>Forumas tuscias...</b>"; } else {
if ($page == "") { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius)
        { $iki = $viso_tm; }
sort($nuskk,SORT_NUMERIC); 
$p2 = array_reverse($nuskk);
for($pl2=$nuo; $pl2 < $iki; $pl2++) {
$kloo2 = explode("|",$p2[$pl2]); 
$fdg = str_replace("_"," ",$kloo2[1]); 
$kiekk = count(file("frm_temos/$kloo2[1].txt")); 
if ($kloo2[2]=="Laisva"){ 
if ($kloo2[3]!="taip"){
echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$kloo2[1]\">$fdg</a> [$kiekk]";
if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trinti_tema&amp;te=$kloo2[1]\">[X]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=kabinti_tema&amp;te=$kloo2[1]\">[^]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=uzrakinti_tema&amp;te=$kloo2[1]\">[U]</a>"; }
echo"<br/>"; } 
if ($kloo2[3]=="taip"){
echo"X <a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$kloo2[1]\">$fdg</a> [$kiekk]"; 
if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trinti_tema&amp;te=$kloo2[1]\">[X]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=kabinti_tema&amp;te=$kloo2[1]\">[^]</a><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=atrakinti_tema&amp;te=$kloo2[1]\">[A]</a>"; }
echo"<br/>"; }
}}
$viso_puslapiu = $viso_tm / $puslapiu_skaicius;
    $viso_puslapiai = 0; $starto_skaicius = 1;
    while ($viso_puslapiai < $viso_puslapiu)
        { if ($page == $starto_skaicius) { echo "[$starto_skaicius]"; } else
        { echo "<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=&amp;page=$starto_skaicius\">($starto_skaicius)</a>"; }
        $viso_puslapiai++;
            $starto_skaicius++; }
            }
 echo'<br/>'; 
$zinc = $viso_tm+$kiekk; 
echo"</small></p><p align=\"center\"><small>
$lin<br/>
<b>Paiskinimai:</b><br/>
tema [zinuciu temoj]<br/>
<b>!!!</b> - Prikabinta<br/>
<b>!X</b> - Prikabinta ir uzrakinta<br/>
<b>X</b> - Uzrakinta<br/>"; 
if ($vrd == "@$nick"){ echo"
<b>[X]</b> - Trinti<br/>
<b>[U]</b> - Uzrakinti<br/>
<b>[A]</b> - Atrakinti<br/>
<b>[^]</b> - Prikabinti<br/>
<b>[D]</b> - Nukabinti<br/>
"; }
echo"
$lin<br/>
Temu: $viso_tm<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=on\">Dabar forume: $online2</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
"; 
 echo'</small></p>'; 
}


if ($id == "kurti_tema") {
 echo'<onevent type="onenterforward"><refresh>
<setvar name="tema" value=""/>
<setvar name="zinute" value=""/>
</refresh></onevent>';
echo"<p align=\"center\">
<small>
<b>Kurti tema<br/></b>
<form action=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=kuriu_tema\" method=\"post\">
$lin<br/>
Tema:<br/></small>
	<input name=\"tema\" type=\"text\" maxlength=\"30\" title=\"Tema\" value=\"\"/><br/>
<small>Zinute:<br/></small>
	<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Kurti\"/>
    <postfield name=\"tema\" value=\"$(tema)\"/>
	<postfield name=\"zinute\" value=\"$(zinute)\"/><br/><small>$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a></small></p>";
}

if ($id == "kuriu_tema"){ 
$aps = file_get_contents("txt/frm_antiflood.txt"); 
if (time() < $aps){ echo"<p align=\"center\"><small><b>Antiflood! bandyk uz keliu minuciu</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small></p>"; }
else{
$tema = $_POST['tema'];
$zinute = $_POST['zinute'];

$tema = ereg_replace("[^A-Za-z0-9?,.! ]","",$tema);

$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute); 
$zinute = str_replace("\n"," ",$zinute); 
$tema = str_replace(" ","_",$tema);

$zinute = htmlspecialchars($zinute);
$tema = htmlspecialchars($tema);

include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }
if (strlen($zinute) > 350){ $zin = "Zinute per ilga!"; }
if (strlen($tema) > 30){ $zin = "Tema per ilga!"; }
if ($lygis < 20){ $zin = "Kurti tema galesi tik nuo 20lvl!"; }
if ($zinute == "") { $zin = "Neparasyta zinute!"; }
if ($tema == "") { $zin = "Neparasyta tema!"; }


if (file_exists("frm_temos/$tema.txt")){ $zin = "Tokia tema jau yra!"; }
$lks = time(); 
$lks2 = time()+20; 
if ($zin == ""){
$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$kod = "$k1$k2$k3$k4$k5"; 
$laikas = date("Y-m-d H:i"); 
$openr = fopen("frm_temos/$tema.txt","w+");
        fwrite($openr, "$lks|$zinute|$vrd|$laikas|$kod|\n"); 
        fclose($openr); 
chmod("frm_temos/$tema.txt",0777); 
$openrt = fopen("txt/frm_antiflood.txt","w");
        fwrite($openrt, "$lks2"); 
        fclose($openrt);
$penrt = fopen("txt/temos.txt","a");
        fwrite($penrt, "$lks|$tema|Laisva|ne|\n"); 
        fclose($penrt);   

$zin = "Tema sukurta"; }
echo" <p align=\"center\"><small><b>$zin</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a></small></p>
";
} }

if ($id == "skaityti_tema"){ 
$ka = $_GET['ka']; 
$fdg = str_replace("_"," ",$ka); 
echo"<p align=\"center\"><small><b>$fdg</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=rasyt_i_tm&amp;ka=$ka\">Rasyti</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema2&amp;ka=$ka\">Skaityti tema nuo pradziu</a><br/>
$lin<br/></small></p>"; 
$DATA_FILE = "frm_temos/$ka.txt";
$nuskk = file($DATA_FILE);
$viso_tm = count($nuskk);
$puslapiu_skaicius = 10;

if ($viso_tm == 0)
    {
echo " <p align=\"center\"><small>
        Tema tuscia...<br/></small></p>"; }
        else
        {
if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; } else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_tm <= $page * $puslapiu_skaicius)
        { $iki = $viso_tm; }
echo '<p align="left"><small>';
           $masyvo_apvertimas = array_reverse($nuskk);
        for ($c = $nuo; $c < $iki; $c++)
        {
            $in = explode('|', $masyvo_apvertimas[$c]);
                $masyw = array("@","*");
                $nuo_ko2 = str_replace($masyw,"",$in[2]);
                $in[1] = stripslashes($in[1]); 
                               echo "<b>&#187; <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nuo_ko2\">$in[2]</a></b>: $in[1]<br/><i>[$in[3]]</i>"; 
                if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trint_kom&amp;te=$ka&amp;kj=$in[4]\">[X]</a>"; }
                echo"<br/>";        }
echo '</small></p>';

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "<p align=\"center\"><small>[$starto_skaicius]</small></p>";
        }
        else{ 
echo "<p align=\"center\"><small><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$ka&amp;page=$starto_skaicius\">($starto_skaicius)</a></small></p>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/></small></p>";
}

if ($id == "skaityti_tema2"){ 
$ka = $_GET['ka']; 
$fdg = str_replace("_"," ",$ka); 
echo"<p align=\"center\"><small><b>$fdg</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=rasyt_i_tm&amp;ka=$ka\">Rasyti</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$ka\">Skaityti tema nuo galo</a><br/>
$lin<br/></small></p>"; 
$DATA_FILE = "frm_temos/$ka.txt";
$nuskk = file($DATA_FILE);
$viso_tm = count($nuskk);
$puslapiu_skaicius = 10;

if ($viso_tm == 0)
    {
echo " <p align=\"center\"><small>
        Tema tuscia...<br/></small></p>"; }
        else
        {
if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; } else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_tm <= $page * $puslapiu_skaicius)
        { $iki = $viso_tm; }
echo '<p align="left"><small>';
           $masyvo_apvertimas = $nuskk;
        for ($c = $nuo; $c < $iki; $c++)
        {
            $in = explode('|', $masyvo_apvertimas[$c]);
                $masyw = array("@","*");
                $nuo_ko2 = str_replace($masyw,"",$in[2]);
                $in[1] = stripslashes($in[1]); 
                echo "<b>&#187; <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nuo_ko2\">$in[2]</a></b>: $in[1]<br/><i>[$in[3]]</i>"; 
                if ($vrd == "@$nick"){ echo"<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=trint_kom&amp;te=$ka&amp;kj=$in[4]\">[X]</a>"; }
                echo"<br/>";
        }
echo '</small></p>';

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "<p align=\"center\"><small>[$starto_skaicius]</small></p>";
        }
        else
        {

echo "<p align=\"center\"><small><a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema2&amp;ka=$ka&amp;page=$starto_skaicius\">($starto_skaicius)</a></small></p>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/></small></p>";
}

if ($id == "rasyt_i_tm") {
$ka = $_GET['ka']; 
echo'<onevent type="onenterforward"><refresh>
<setvar name="tema" value=""/>
<setvar name="zinute" value=""/>
</refresh></onevent>';
echo"<p align=\"center\">
<small>
<b>Rasyti<br/></b>
$lin<br/>
Zinute:<br/></small>
<form action=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=rasau_i_tm&amp;ka=$ka\" method=\"post\">
	<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\" emptyok=\"false\" value=\"\"/><br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Irasyti\"/>
	<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor><br/><small>$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$ka\">I tema</a><br/></small>
</p>"; 
}

if ($id == "rasau_i_tm"){ 
$ka = $_GET['ka']; 
$aps = file_get_contents("txt/tm_aps.txt"); 
if (time() < $aps){ echo"<p align=\"center\"><small><b>Antiflood! bandyk uz keliu sekundziu</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$ka\">Atgal</a><br/></small></p>"; }
else{
$zinute = $_POST['zinute'];
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute); 
$zinute = str_replace("\n"," ",$zinute); 
$zinute = htmlspecialchars($zinute);
include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }
if (strlen($zinute) > 350){ $zin = "Zinute per ilga!"; }
if ($zinute == "") { $zin = "Neparasyta zinute!"; }
if ($lygis < 20){ $zin = "Rasyti galesi tik nuo 20lvl!"; }

$DATA_FILE = "txt/temos.txt";
$nuskk = file($DATA_FILE);
$viso_tm = count($nuskk);
for($ie=0; $ie<$viso_tm; $ie++) {
$koo2=explode("|",$nuskk[$ie]);
if ($koo2[1] == $ka && $koo2[3] == "taip" && $vrd != "@$nick"){ $zin="Tema uzrakinta! joje rasyti nebegalima"; } }

$np = file("frm_temos/$ka.txt");
$kiek_np = count($np);
for($o=0; $o < $kiek_np; $o++) {
$op = explode("|",$np[$o]);
if ($zinute == $op[1]){ $zin = "Tokia zinute jau yra!"; } } 
$lks = time(); 
$lks2 = time()+10; 
if ($zin == ""){
$k1 = rand(0,9); 
$k2 = rand(0,9); 
$k3 = rand(0,9); 
$k4 = rand(0,9); 
$k5 = rand(0,9); 
$kod = "$k1$k2$k3$k4$k5"; 
        $laikas = date("Y-m-d H:i"); 
$openr = fopen("frm_temos/$ka.txt","a");
        fwrite($openr, "$lks|$zinute|$vrd|$laikas|$kod|\n"); 
        fclose($openr); 
$openrt = fopen("txt/tm_aps.txt","w");
        fwrite($openrt, "$lks2"); 
        fclose($openrt); 
$nkh2 = file("txt/temos.txt"); 
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]); 
if ($ka == $kly2[1]){ 
$nkh2[$py2] = "$lks|$ka|$kly2[2]|$kly2[3]|$kly2[4]"; 
$fpz2 = fopen("txt/temos.txt","w"); 
fwrite($fpz2,implode($nkh2)); 
fclose($fpz2); 
}}
$zin = "Zinute irasyta"; }
echo" <p align=\"center\"><small><b>$zin</b><br/>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$ka\">I tema</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a></small></p>
";
} }

if ($id == "on"){echo "<p align=\"center\"><small><b>Dabar forume:</b><br/>
$lin<br/></small></p>";

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) { 
$e=explode("|",$nnn[$i]); 
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$e[0]);
if ($e[2]=="Forume"){
echo"<p align=\"left\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$e[0]</a><br/></small></p>"; }}

echo "<p align=\"center\"><small>$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";
}


if ($id == "trint_kom"){ 
echo"<p align=\"left\"><small><b>Tikrai istrint?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=trint_kom&amp;te=$te&amp;kj=$kj\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;te=$te\">Nea</a><br/></b></small></p>"; }

if ($id == "trinti_tema"){ if(file_exists("frm_temos/$te.txt")){
echo"<p align=\"left\"><small><b>Tikrai istrinti tema?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=trint_tema&amp;te=$te\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=\">Nea</a><br/></b></small></p>";
}}

if ($id == "uzrakinti_tema"){ if(file_exists("frm_temos/$te.txt")){
echo"<p align=\"left\"><small><b>Tikrai uzrakinti tema?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=rakint_tema&amp;te=$te\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=\">Nea</a><br/></b></small></p>";
}}

if ($id == "atrakinti_tema"){ if(file_exists("frm_temos/$te.txt")){
echo"<p align=\"left\"><small><b>Tikrai atrakinti tema?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=atrakint_tema&amp;te=$te\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=\">Nea</a><br/></b></small></p>";
}}

if ($id == "kabinti_tema"){ if(file_exists("frm_temos/$te.txt")){
echo"<p align=\"left\"><small><b>Tikrai prikabinti tema?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=kabint_tema&amp;te=$te\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=\">Nea</a><br/></b></small></p>";
}}

if ($id == "nukabinti_tema"){ if(file_exists("frm_temos/$te.txt")){
echo"<p align=\"left\"><small><b>Tikrai nukabinti tema?<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=nukabint_tema&amp;te=$te\">Aha</a>-<a href=\"f.php?nick=$nick&amp;pass=$pass&amp;id=\">Nea</a><br/></b></small></p>";
}}

print'</card></wml>';

?>
