<?php
$toar2=4;
if($names[identify]=="gunnar"){
$toar2=$toar2+1;}

$rola2 = "none";
if ($user_skill[0] == "strategy") { $rola2 = "0"; }
if ($user_skill[1] == "strategy") { $rola2 = "1"; }
if ($user_skill[2] == "strategy") { $rola2 = "2"; }
if ($user_skill[3] == "strategy") { $rola2 = "3"; }
if ($user_skill[4] == "strategy") { $rola2 = "4"; }
if ($user_skill[5] == "strategy") { $rola2 = "5"; }
if ($user_skill[6] == "strategy") { $rola2 = "6"; }
if ($user_skill[7] == "strategy") { $rola2 = "7"; }
if ($user_skill[8] == "strategy") { $rola2 = "8"; }
if ($user_skill[9] == "strategy") { $rola2 = "9"; }
if ($user_skill[10] == "strategy") { $rola2 = "10"; }
if ($user_skill[11] == "strategy") { $rola2 = "11"; }
if($rola2!=="none"){
if($user_skill_lvl[$rola2]=="1"){
$toar2=$toar2+1;}
if($user_skill_lvl[$rola2]=="2"){
$toar2=$toar2+2;}
if($user_skill_lvl[$rola2]=="3"){
$toar2=$toar2+3;}}


?>