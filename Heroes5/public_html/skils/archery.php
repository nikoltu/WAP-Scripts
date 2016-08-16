<?php

$d = "none";
if ($user_skill[0] == "archery") { $d = "0"; }
if ($user_skill[1] == "archery") { $d = "1"; }
if ($user_skill[2] == "archery") { $d = "2"; }
if ($user_skill[3] == "archery") { $d = "3"; }
if ($user_skill[4] == "archery") { $d = "4"; }
if ($user_skill[5] == "archery") { $d = "5"; }
if ($user_skill[6] == "archery") { $d = "6"; }
if ($user_skill[7] == "archery") { $d = "7"; }
if ($user_skill[8] == "archery") { $d = "8"; }
if ($user_skill[9] == "archery") { $d = "9"; }
if ($user_skill[10] == "archery") { $d = "10"; }
if ($user_skill[11] == "archery") { $d = "11"; }

if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$sh=1.06;}
if($user_skill_lvl[$d]=="2"){
$sh=1.14;}
if($user_skill_lvl[$d]=="3"){
$sh=1.25;}
if($shot2=="1"){
$dmg=$dmg*$sh;}}


?>