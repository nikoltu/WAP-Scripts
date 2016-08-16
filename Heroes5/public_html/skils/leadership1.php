<?php

$d = "none";
if ($user_skill[0] == "leadership") { $d = "0"; }
if ($user_skill[1] == "leadership") { $d = "1"; }
if ($user_skill[2] == "leadership") { $d = "2"; }
if ($user_skill[3] == "leadership") { $d = "3"; }
if ($user_skill[4] == "leadership") { $d = "4"; }
if ($user_skill[5] == "leadership") { $d = "5"; }
if ($user_skill[6] == "leadership") { $d = "6"; }
if ($user_skill[7] == "leadership") { $d = "7"; }
if ($user_skill[8] == "leadership") { $d = "8"; }
if ($user_skill[9] == "leadership") { $d = "9"; }
if ($user_skill[10] == "leadership") { $d = "10"; }
if ($user_skill[11] == "leadership") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$nti=15;}
if($user_skill_lvl[$d]=="2"){
$nti=30;}
if($user_skill_lvl[$d]=="3"){
$nti=45;}
$btime=$btime-$nti;}


?>