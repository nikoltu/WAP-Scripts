<?php

$d = "none";
if ($user_skill[0] == "luck") { $d = "0"; }
if ($user_skill[1] == "luck") { $d = "1"; }
if ($user_skill[2] == "luck") { $d = "2"; }
if ($user_skill[3] == "luck") { $d = "3"; }
if ($user_skill[4] == "luck") { $d = "4"; }
if ($user_skill[5] == "luck") { $d = "5"; }
if ($user_skill[6] == "luck") { $d = "6"; }
if ($user_skill[7] == "luck") { $d = "7"; }
if ($user_skill[8] == "luck") { $d = "8"; }
if ($user_skill[9] == "luck") { $d = "9"; }
if ($user_skill[10] == "luck") { $d = "10"; }
if ($user_skill[11] == "luck") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$lu=4;}
if($user_skill_lvl[$d]=="2"){
$lu=10;}
if($user_skill_lvl[$d]=="3"){
$lu=18;}
$ch=$ch+$lu;}


?>