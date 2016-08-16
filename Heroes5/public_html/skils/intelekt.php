<?php
include_once("core/my_skills.php");
$a = "none";
if ($user_skill[0] == "intelekt") { $a = "0"; }
if ($user_skill[1] == "intelekt") { $a = "1"; }
if ($user_skill[2] == "intelekt") { $a = "2"; }
if ($user_skill[3] == "intelekt") { $a = "3"; }
if ($user_skill[4] == "intelekt") { $a = "4"; }
if ($user_skill[5] == "intelekt") { $a = "5"; }
if ($user_skill[6] == "intelekt") { $a = "6"; }
if ($user_skill[7] == "intelekt") { $a = "7"; }
if ($user_skill[8] == "intelekt") { $a = "8"; }
if ($user_skill[9] == "intelekt") { $a = "9"; }
if ($user_skill[10] == "intelekt") { $a = "10"; }
if ($user_skill[11] == "intelekt") { $a = "11"; }
if($a!=="none"){
if($user_skill_lvl[$a]=="1"){
if($user[identify]=="ayden"){
$didi=1.06;}
elseif($user[identify]=="andra"){
$didi=1.1;}
elseif($user[identify]=="elleshar"){
$didi=1.1;}
else{
$didi=1.05;}
$mana=$mana*$didi;}
if($user_skill_lvl[$a]=="2"){
if($user[identify]=="ayden"){
$didi=1.17;}
elseif($user[identify]=="andra"){
$didi=1.25;}
elseif($user[identify]=="elleshar"){
$didi=1.25;}
else{
$didi=1.15;}
$mana=$mana*$didi;}
if($user_skill_lvl[$a]=="3"){
if($user[identify]=="ayden"){
$didi=1.28;}
elseif($user[identify]=="andra"){
$didi=1.4;}
elseif($user[identify]=="elleshar"){
$didi=1.4;}
else{
$didi=1.25;}
$mana=$mana*$didi;}}


?>