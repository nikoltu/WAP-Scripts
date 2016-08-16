<?php

$d = "none";
if ($user_skill[0] == "water_magic") { $d = "0"; }
if ($user_skill[1] == "water_magic") { $d = "1"; }
if ($user_skill[2] == "water_magic") { $d = "2"; }
if ($user_skill[3] == "water_magic") { $d ="3"; }
if ($user_skill[4] == "water_magic") { $d = "4"; }
if ($user_skill[5] == "water_magic") { $d = "5"; }
if ($user_skill[6] == "water_magic") { $d = "6"; }
if ($user_skill[7] == "water_magic") { $d = "7"; }
if ($user_skill[8] == "water_magic") { $d = "8"; }
if ($user_skill[9] == "water_magic") { $d = "9"; }
if ($user_skill[10] == "water_magic") { $d = "10"; }
if ($user_skill[11] == "water_magic") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$uatk=$uatk+1;$dmg=floor($dmg*1.05);$heal=$heal+5;}
if($user_skill_lvl[$d]=="2"){
$uatk=$uatk+2;$dmg=floor($dmg*1.1);$heal=$heal+10;}
if($user_skill_lvl[$d]=="3"){
$uatk=$uatk+3;$dmg=floor($dmg*1.15);$heal=$heal+20;}}


?>