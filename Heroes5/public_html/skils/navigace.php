<?php
include_once("core/my_skills.php");

$d = "none";
if ($user_skill[0] == "navigace") { $d = "0"; }
if ($user_skill[1] == "navigace") { $d = "1"; }
if ($user_skill[2] == "navigace") { $d = "2"; }
if ($user_skill[3] == "navigace") { $d = "3"; }
if ($user_skill[4] == "navigace") { $d = "4"; }
if ($user_skill[5] == "navigace") { $d = "5"; }
if ($user_skill[6] == "navigace") { $d = "6"; }
if ($user_skill[7] == "navigace") { $d = "7"; }
if ($user_skill[8] == "navigace") { $d = "8"; }
if ($user_skill[9] == "navigace") { $d = "9"; }
if ($user_skill[10] == "navigace") { $d = "10"; }
if ($user_skill[11] == "navigace") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$nav=1.1;}
if($user_skill_lvl[$d]=="2"){
$nav=1.25;}
if($user_skill_lvl[$d]=="3"){
$nav=1.5;}
if(($user[identify]=="silvya") or ($user[identify]=="voy")){
$nav=$nav+($user_skill_lvl[$d]*0.05);}}


?>