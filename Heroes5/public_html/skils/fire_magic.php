<?php

$d = "none";
if ($user_skill[0] == "fire_magic") { $d = "0"; }
if ($user_skill[1] == "fire_magic") { $d = "1"; }
if ($user_skill[2] == "fire_magic") { $d = "2"; }
if ($user_skill[3] == "fire_magic") { $d = "3"; }
if ($user_skill[4] == "fire_magic") { $d = "4"; }
if ($user_skill[5] == "fire_magic") { $d = "5"; }
if ($user_skill[6] == "fire_magic") { $d = "6"; }
if ($user_skill[7] == "fire_magic") { $d = "7"; }
if ($user_skill[8] == "fire_magic") { $d = "8"; }
if ($user_skill[9] == "fire_magic") { $d = "9"; }
if ($user_skill[10] == "fire_magic") { $d = "10"; }
if ($user_skill[11] == "fire_magic") { $d = "11"; }

if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$rn=$rn+0.05;
$atk=$atk+1;
$dmg=$dmg*1.05;}
if($user_skill_lvl[$d]=="2"){
$rn=$rn+0.1;
$atk=$atk+2;
$dmg=$dmg*1.10;}
if($user_skill_lvl[$d]=="3"){
$rn=$rn+0.15;
$atk=$atk+3;
$dmg=$dmg*1.15;}}


?>