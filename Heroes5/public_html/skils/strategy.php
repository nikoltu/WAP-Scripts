<?php
$toar=4;
if($user[identify]=="gunnar"){
$toar=$toar+1;}
include_once("core/my_skills.php");
$rola = "none";
if ($user_skill[0] == "strategy") { $rola = "0"; }
if ($user_skill[1] == "strategy") { $rola = "1"; }
if ($user_skill[2] == "strategy") { $rola = "2"; }
if ($user_skill[3] == "strategy") { $rola = "3"; }
if ($user_skill[4] == "strategy") { $rola = "4"; }
if ($user_skill[5] == "strategy") { $rola = "5"; }
if ($user_skill[6] == "strategy") { $rola = "6"; }
if ($user_skill[7] == "strategy") { $rola = "7"; }
if ($user_skill[8] == "strategy") { $rola = "8"; }
if ($user_skill[9] == "strategy") { $rola = "9"; }
if ($user_skill[10] == "strategy") { $rola = "10"; }
if ($user_skill[11] == "strategy") { $rola = "11"; }
if($rola!=="none"){
if($user_skill_lvl[$rola]=="1"){
$toar=$toar+1;}
if($user_skill_lvl[$rola]=="2"){
$toar=$toar+2;}
if($user_skill_lvl[$rola]=="3"){
$toar=$toar+3;}}


?>