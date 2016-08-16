<?php

$d = "none";
if ($user_skill[0] == "necromanc") { $d = "0"; }
if ($user_skill[1] == "necromanc") { $d = "1"; }
if ($user_skill[2] == "necromanc") { $d = "2"; }
if ($user_skill[3] == "necromanc") { $d = "3"; }
if ($user_skill[4] == "necromanc") { $d = "4"; }
if ($user_skill[5] == "necromanc") { $d = "5"; }
if ($user_skill[6] == "necromanc") { $d = "6"; }
if ($user_skill[7] == "necromanc") { $d = "7"; }
if ($user_skill[8] == "necromanc") { $d = "8"; }
if ($user_skill[9] == "necromanc") { $d = "9"; }
if ($user_skill[10] == "necromanc") { $d = "10"; }
if ($user_skill[11] == "necromanc") { $d = "11"; }


if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$necro=0.1;}
if($user_skill_lvl[$d]=="2"){
$necro=0.2;}
if($user_skill_lvl[$d]=="3"){
$necro=0.3;}
if($user[identify]=="isra"){
$necro=$necro+(0.05*$user_skill_lvl[$d]);}
elseif($user[identify]=="vidomina"){
$necro=$necro+(0.05*$user_skill_lvl[$d]);}
}
include_once("artifact/act/amulet_of_the_undertaker.php");
include_once("artifact/act/vampires_cowl.php");
include_once("artifact/act/dead_mans_boots.php");

if($aotu[name]){
$necro=$necro+0.05;}
if($vaco[name]){
$necro=$necro+0.1;}
if($dmab[name]){
$necro=$necro+0.15;}



?>