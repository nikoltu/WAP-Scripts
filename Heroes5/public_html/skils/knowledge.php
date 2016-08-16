<?php

$d = "none";
if ($user_skill[0] == "knowledge") { $d = "0"; }
if ($user_skill[1] == "knowledge") { $d = "1"; }
if ($user_skill[2] == "knowledge") { $d = "2"; }
if ($user_skill[3] == "knowledge") { $d = "3"; }
if ($user_skill[4] == "knowledge") { $d = "4"; }
if ($user_skill[5] == "knowledge") { $d = "5"; }
if ($user_skill[6] == "knowledge") { $d = "6"; }
if ($user_skill[7] == "knowledge") { $d = "7"; }
if ($user_skill[8] == "knowledge") { $d = "8"; }
if ($user_skill[9] == "knowledge") { $d = "9"; }
if ($user_skill[10] == "knowledge") { $d = "10"; }
if ($user_skill[11] == "knowledge") { $d = "11"; }

if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$l=3;}
if($user_skill_lvl[$d]=="2"){
$l=4;}
if($user_skill_lvl[$d]=="3"){
$l=5;}} else {$l=2;}


?>