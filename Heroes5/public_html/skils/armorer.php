<?php

$d = "none";
if ($user_skill[0] == "armorer") { $d = "0"; }
if ($user_skill[1] == "armorer") { $d = "1"; }
if ($user_skill[2] == "armorer") { $d = "2"; }
if ($user_skill[3] == "armorer") { $d = "3"; }
if ($user_skill[4] == "armorer") { $d = "4"; }
if ($user_skill[5] == "armorer") { $d = "5"; }
if ($user_skill[6] == "armorer") { $d = "6"; }
if ($user_skill[7] == "armorer") { $d = "7"; }
if ($user_skill[8] == "armorer") { $d = "8"; }
if ($user_skill[9] == "armorer") { $d = "9"; }
if ($user_skill[10] == "armorer") { $d = "10"; }
if ($user_skill[11] == "armorer") { $d = "11"; }

if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$df=0.95;}
if($user_skill_lvl[$d]=="2"){
$df=0.9;}
if($user_skill_lvl[$d]=="3"){
$df=0.85;}
$dmg=$dmg*$df;}


?>