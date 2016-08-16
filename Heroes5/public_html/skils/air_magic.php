<?php

$d = "none";
if ($user_skill[0] == "air_magic") { $d = "0"; }
if ($user_skill[1] == "air_magic") { $d = "1"; }
if ($user_skill[2] == "air_magic") { $d = "2"; }
if ($user_skill[3] == "air_magic") { $d = "3"; }
if ($user_skill[4] == "air_magic") { $d = "4"; }
if ($user_skill[5] == "air_magic") { $d = "5"; }
if ($user_skill[6] == "air_magic") { $d = "6"; }
if ($user_skill[7] == "air_magic") { $d = "7"; }
if ($user_skill[8] == "air_magic") { $d = "8"; }
if ($user_skill[9] == "air_magic") { $d = "9"; }
if ($user_skill[10] == "air_magic") { $d = "10"; }
if ($user_skill[11] == "air_magic") { $d = "11"; }


if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$ej=$ej+0.05;$dmg=$dmg*1.05;$eji=$eji+1;$udf=$udf+1;$updmg=$updmg+0.05;}
if($user_skill_lvl[$d]=="2"){
$ej=$ej+0.1;$dmg=$dmg*1.10;$eji=$eji+2;$udf=$udf+2;$updmg=$updmg+0.1;}
if($user_skill_lvl[$d]=="3"){
$ej=$ej+0.15;$dmg=$dmg*1.15;$eji=$eji+3;$udf=$udf+3;$updmg=$updmg+0.15;}}


?>