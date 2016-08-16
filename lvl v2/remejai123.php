<?php

$browser=$HTTP_USER_AGENT;
if(empty($browser)) {
$browser=$_SERVER['HTTP_USER_AGENT']; }

$narsykle_mano=$browser;
$narsykle_mano = substr($narsykle_mano, 0, 3);

if ($narsykle_mano == "Moz")
{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "Win")
{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "SIE")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Mot")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Nok")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Ope")
{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "Son")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Sam")
{ $msg = "Tau cia negalima."; }

if ($msg != "")
{
echo"
$msg";
exit;
} 

$zinute = $_GET['sms']; 
$siuntejo_nr = $_GET['from']; 
$to_nr = $_GET['to'];
$ex = explode(" ",$zinute);
$kategorija = $ex[1];
$kategorija = htmlspecialchars($kategorija);
$kategorija = substr("$kategorija",0,20);
$raktazodis = $ex[0];
$zinute = htmlspecialchars($zinute);
$zinute = substr("$zinute",0,150);


if($to_nr == "1679"){
$fg = fopen("txxt1231272/$kategorija.txt","a+");
fwrite($fg,"$siuntejo_nr|$zinute|\n");
fclose($fg);

$fp = fopen("txxt1231272/visi.txt","a+");
fwrite($fp,"$siuntejo_nr|$zinute|\n");
fclose($fp);
echo "Aciu kad remiate musu zaidima :)";
}


?>