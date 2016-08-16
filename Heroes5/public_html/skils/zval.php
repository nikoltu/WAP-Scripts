<?php
include_once("core/my_skills.php");
$a = "none";
if ($user_skill[0] == "zval") { $a = "0"; }
if ($user_skill[1] == "zval") { $a = "1"; }
if ($user_skill[2] == "zval") { $a = "2"; }
if ($user_skill[3] == "zval") { $a = "3"; }
if ($user_skill[4] == "zval") { $a = "4"; }
if ($user_skill[5] == "zval") { $a = "5"; }
if ($user_skill[6] == "zval") { $a = "6"; }
if ($user_skill[7] == "zval") { $a = "7"; }
if ($user_skill[8] == "zval") { $a = "8"; }
if ($user_skill[9] == "zval") { $a = "9"; }
if ($user_skill[10] == "zval") { $a = "10 "; }
if ($user_skill[11] == "zval") { $a = "11"; }
if($a!=="none"){
if($user_skill_lvl[$a]=="1"){
$osk=$osk+1;}
if($user_skill_lvl[$a]=="2"){
$osk=$osk+2;}
if($user_skill_lvl[$a]=="3"){
$osk=$osk+3;}}


?>