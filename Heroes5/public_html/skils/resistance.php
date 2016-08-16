<?php

$d = "none";
if ($user_skill[0] == "resistance") { $d = "0"; }
if ($user_skill[1] == "resistance") { $d = "1"; }
if ($user_skill[2] == "resistance") { $d = "2"; }
if ($user_skill[3] == "resistance") { $d = "3"; }
if ($user_skill[4] == "resistance") { $d = "4"; }
if ($user_skill[5] == "resistance") { $d = "5"; }
if ($user_skill[6] == "resistance") { $d = "6"; }
if ($user_skill[7] == "resistance") { $d = "7"; }
if ($user_skill[8] == "resistance") { $d = "8"; }
if ($user_skill[9] == "resistance") { $d = "9"; }
if ($user_skill[10] == "resistance") { $d = "10"; }
if ($user_skill[11] == "resistance") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$madmg=0.95;}
if($user_skill_lvl[$d]=="2"){
$madmg=0.9;}
if($user_skill_lvl[$d]=="3"){
$madmg=0.80;}
}else{$madmg=1;}
include_once("artifact/act/boots_of_polarity.php");
if($boop[name]){
$madmg=$madmg-0.15;}
include_once("artifact/act/garniture_of_interference.php");
if($grnt[name]){
$madmg=$madmg-0.05;}
include_once("artifact/act/surcoat_of_counterpoise.php");
if($suoc[name]){
$madmg=$madmg-0.1;}
$dmg2=$dmg2*$madmg;


?>