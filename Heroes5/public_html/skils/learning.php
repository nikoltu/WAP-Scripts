<?php

$d = "none";
if ($user_skill[0] == "learning") { $d = "0"; }
if ($user_skill[1] == "learning") { $d = "1"; }
if ($user_skill[2] == "learning") { $d = "2"; }
if ($user_skill[3] == "learning") { $d = "3"; }
if ($user_skill[4] == "learning") { $d = "4"; }
if ($user_skill[5] == "learning") { $d = "5"; }
if ($user_skill[6] == "learning") { $d = "6"; }
if ($user_skill[7] == "learning") { $d = "7"; }
if ($user_skill[8] == "learning") { $d = "8"; }
if ($user_skill[9] == "learning") { $d = "9"; }
if ($user_skill[10] == "learning") { $d = "10 "; }
if ($user_skill[11] == "learning") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$expierence=round($expierence*1.05);}
if($user_skill_lvl[$d]=="2"){
$expierence=round($expierence*1.1);}
if($user_skill_lvl[$d]=="3"){
$expierence=round($expierence*1.15);}}


?>