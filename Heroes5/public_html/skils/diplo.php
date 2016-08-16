<?php

$d = "none";
if ($user_skill[0] == "diplo") { $d = "0"; }
if ($user_skill[1] == "diplo") { $d = "1"; }
if ($user_skill[2] == "diplo") { $d = "2"; }
if ($user_skill[3] == "diplo") { $d = "3"; }
if ($user_skill[4] == "diplo") { $d = "4"; }
if ($user_skill[5] == "diplo") { $d = "5"; }
if ($user_skill[6] == "diplo") { $d = "6"; }
if ($user_skill[7] == "diplo") { $d = "7"; }
if ($user_skill[8] == "diplo") { $d = "8"; }
if ($user_skill[9] == "diplo") { $d = "9"; }
if ($user_skill[10] == "diplo") { $d = "10"; }
if ($user_skill[11] == "diplo") { $d = "11"; }

if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$army_get[$r]=floor($army_get[$r]*0.95);}
if($user_skill_lvl[$d]=="2"){
$army_get[$r]=floor($army_get[$r]*0.9);}
if($user_skill_lvl[$d]=="3"){
$army_get[$r]=floor($army_get[$r]*0.8);}}


?>