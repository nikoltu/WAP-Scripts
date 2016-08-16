<?php

$w = "none";
if ($enemy_skill[0] == "knowledge") { $w = "0"; }
if ($enemy_skill[1] == "knowledge") { $w = "1"; }
if ($enemy_skill[2] == "knowledge") { $w = "2"; }
if ($enemy_skill[3] == "knowledge") { $w = "3"; }
if ($enemy_skill[4] == "knowledge") { $w = "4"; }
if ($enemy_skill[5] == "knowledge") { $w = "5"; }
if ($enemy_skill[6] == "knowledge") { $w = "6"; }
if ($enemy_skill[7] == "knowledge") { $w = "7"; }
if ($enemy_skill[8] == "knowledge") { $w = "8"; }
if ($enemy_skill[9] == "knowledge") { $w = "9"; }
if ($enemy_skill[10] == "knowledge") { $w = "10"; }
if ($enemy_skill[11] == "knowledge") { $w = "11"; }

if($w!=="none"){
if($enemy_skill_lvl[$w]=="1"){
$ll=3;}
if($enemy_skill_lvl[$w]=="2"){
$ll=4;}
if($enemy_skill_lvl[$w]=="3"){
$ll=5;}} else {$ll=2;}


?>