<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$ti = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $ti\">";
$kur = "Balsavime"; 
include("config.php");

$kitabls = @file_get_contents("txt/bals.txt");
$kitm = explode("|", $kitabls);
$klausimas = $kitm[0];
$ats1 = $kitm[1];
$ats2 = $kitm[2];
$ats3 = $kitm[3];
$autorius = $kitm[4];

$kitablss = @file_get_contents("txt/bals_rez.txt");
$kitmm = explode("|", $kitablss);
$bir1 = $kitmm[0];
$bir2 = $kitmm[1];
$bir3 = $kitmm[2];

$bls = $_GET['bls'];

if ($id == ""){
echo"<p align=\"center\"><small> 
<b>[&#171;]Balsavimas[&#187;]</b><br/>
$klausimas<br/>
<br/>
<b>Klausima Sukure: $autorius</b><br/>
<form action=\"bals.php?nick=$nick&amp;pass=$pass&amp;id=balsuo\" method=\"post\">
[&#187;]<a href=\"bals.php?id=keisti&amp;nick=$nick&amp;pass=$pass\">Keisti</a>[&#171;]<br/>
$lin<br/>";

echo "<select name=\"bls\">";
echo "<option value=\"a\">$ats1</option>";
echo "<option value=\"aa\">$ats2</option>";
echo "<option value=\"aaa\">$ats3</option>";
echo "</select><br/>";

echo "
$lin<br/>
<input type=\"submit\" title=\"lgzz.eu\" value=\"Balsuoti\"/>
    <postfield name=\"bls\" value=\"$(bls)\"/>
</go></anchor><br/>
<a href=\"bals.php?id=rez&amp;nick=$nick&amp;pass=$pass\">Rezultatai</a><br/>
<a href=\"bals.php?id=keisti&amp;nick=$nick&amp;pass=$pass\">Keisti balsavima</a><br/>
$lin<br/>
<a href=\"zaisti.php?id=miestas&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/></small>
</p>";
}

if ($id == "balsuo"){

$bls = $_POST['bls'];

$airr = array("<", ">", "&", "^", "%", "'", '"', "$", "\n", "|");
$bls = str_replace($airr, "", $bls);

$m = file_get_contents("txt/bals_nick.txt");

if (substr_count($m, "$nick")>0){
echo "<p align=\"center\"><small>
<b>Balsavai jau!</b><br/>
$lin<br/>
[&#171;]<a href=\"bals.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a>[&#187;]<br/></small>
</p>";
}
else
{
if($bls == ""){
$kld = "Klaida!";
}

if($kld == ""){

if($bls == "a"){
$bir1 = $bir1+1;
}
if($bls == "aa"){
$bir2 = $bir2+1;
}
if($bls == "aaa"){
$bir3 = $bir3+1;
}
$bll = fopen("txt/bals_rez.txt","w");
fwrite($bll,"$bir1|$bir2|$bir3|");
fclose($bll);

$bll = fopen("txt/bals_nick.txt","a+");
fwrite($bll,"$nick\n");
fclose($bll);

$kld = "Balsas Uzskaitytas!";

echo"<p align=\"center\"><small>
$kld<br/>
<br/>
[&#171;]<a href=\"bals.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradia</a>[&#187;]<br/></small>
</p>";
}
}
}
if ($id == "rez"){
$bv = count(file("txt/bals_nick.txt"));
echo"<p align=\"center\"><small> 
<b>[&#171;]Rezultatai[&#187;]</b><br/>
<br/>
Balsavo: $bv Zaidejai<br/>
<br/>
</small></p>
<p align=\"center\"><small>
<u>$ats1</u> - <b>$bir1</b><br/>
<u>$ats2</u> - <b>$bir2</b><br/>
<u>$ats3</u> - <b>$bir3</b><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
[&#171;]<a href=\"bals.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a>[&#187;]<br/></small>
</p>";
}

if ($id == "keisti")
{
    if ($stat != "mod")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
    }
    else
    {
        echo "<p align=\"center\"><small><b>Balsavimo keitimas</b><br/>
<br/>
$lin<br/>
Klausimas:<br/></small>
<form action=\"bals.php?nick=$nick&amp;pass=$pass&amp;id=keiciu\" method=\"post\">
<input name=\"klsm\" type=\"text\" maxlength=\"800\" title=\"Klausimas\"/><br/>

<small>1 atsakymas:<br/></small>
<input name=\"kats1\" type=\"text\" maxlength=\"160\" title=\"Ats\"/><br/>

<small>2 atsakymas:<br/></small>
<input name=\"kats2\" type=\"text\" maxlength=\"160\" title=\"Ats\"/><br/>

<small>3 atsakymas:<br/></small>
<input name=\"kats3\" type=\"text\" maxlength=\"160\" title=\"Ats\"/><br/>

<input type=\"submit\" title=\"lgzz.eu\" value=\"Keisti\"/>
    <postfield name=\"klsm\" value=\"$(klsm)\"/>
    <postfield name=\"kats1\" value=\"$(kats1)\"/>
    <postfield name=\"kats2\" value=\"$(kats2)\"/>
    <postfield name=\"kats3\" value=\"$(kats3)\"/>
</go></anchor><br/><small>
$lin<br/>
<a href=\"bals.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/></small>
</p>";
}
}

if ($id == "keiciu")
{
    if ($stat != "mod")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
    }
    else
    {

$klsm = $_POST['klsm'];
$kats1 = $_POST['kats1'];
$kats2 = $_POST['kats2'];
$kats3 = $_POST['kats3'];

$arr = array("<", ">", "&", "^", "%", "'", '"', "$", "\n", "|");
$klsm = str_replace($arr, "", $klsm);
$kats1 = str_replace($arr, "", $kats1);
$kats2 = str_replace($arr, "", $kats2);
$kats3 = str_replace($arr, "", $kats3);

if($klsm == ""){
$bad = "Tusces laukelis!";
}
if($kats1 == ""){
$bad = "Tusces laukelis!";
}
if($kats2 == ""){
$bad = "Tusces laukelis!";
}
if($kats3 == ""){
$bad = "Tusces laukelis!";
}
if (strlen($klsm) < 800){
$klaida = "Klausimas per ilgas!";
}
if (strlen($kats1) < 150){
$klaida = "1 atsakymas per ilgas!";
}
if (strlen($kats2) < 150){
$klaida = "2 atsakymas per ilgas!";
}
if (strlen($kats3) < 150){
$klaida = "3 atsakymas per ilgas!";
}

if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }

if($kronu < 0){
$bad = "Nepakanka kronu!";
}

if($bad == ""){

$kronu = $kronu-5;

$bll = fopen("kronoss/$nick.txt","w");
fwrite($bll,"$kronu");
fclose($bll);

$blle = fopen("txt/bals.txt","w");
fwrite($blle,"$klsm|$kats1|$kats2|$kats3|$vrd|");
fclose($blle);

$blla = fopen("txt/bals_nick.txt","w");
fwrite($blla,"");
fclose($blla);

$bllu = fopen("txt/bals_rez.txt","w");
fwrite($bllu,"0|0|0|");
fclose($bllu);

$bad = "Pakeista!";
}

echo"<p align=\"center\"><small>
$bad<br/>
$lin<br/>
<a href=\"bals.php?id=keisti&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradia</a><br/></small>
</p>";
}
}

print'</card></wml>';

?>