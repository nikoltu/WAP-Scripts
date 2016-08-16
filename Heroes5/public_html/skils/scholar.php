<?php
include_once("core/my_skills.php");
$d = "none";
if ($user_skill[0] == "scholar") { $d = "0"; }
if ($user_skill[1] == "scholar") { $d = "1"; }
if ($user_skill[2] == "scholar") { $d = "2"; }
if ($user_skill[3] == "scholar") { $d = "3"; }
if ($user_skill[4] == "scholar") { $d = "4"; }
if ($user_skill[5] == "scholar") { $d = "5"; }
if ($user_skill[6] == "scholar") { $d = "6"; }
if ($user_skill[7] == "scholar") { $d = "7"; }
if ($user_skill[8] == "scholar") { $d = "8"; }
if ($user_skill[9] == "scholar") { $d = "9"; }
if ($user_skill[10] == "scholar") { $d = "10"; }
if ($user_skill[11] == "scholar") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$bu=2;}
if($user_skill_lvl[$d]=="2"){
$bu=3;}
if($user_skill_lvl[$d]=="3"){
$bu=4;}}


?>