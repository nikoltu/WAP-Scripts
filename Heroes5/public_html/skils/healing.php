<?php

$d = "none";
if ($user_skill[0] == "healing") { $d = "0"; }
if ($user_skill[1] == "healing") { $d = "1"; }
if ($user_skill[2] == "healing") { $d = "2"; }
if ($user_skill[3] == "healing") { $d = "3"; }
if ($user_skill[4] == "healing") { $d = "4"; }
if ($user_skill[5] == "healing") { $d = "5"; }
if ($user_skill[6] == "healing") { $d = "6"; }
if ($user_skill[7] == "healing") { $d = "7"; }
if ($user_skill[8] == "healing") { $d = "8"; }
if ($user_skill[9] == "healing") { $d = "9"; }
if ($user_skill[10] == "healing") { $d = "10"; }
if ($user_skill[11] == "healing") { $d = "11"; }


if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$he=0.1;}
if($user_skill_lvl[$d]=="2"){
$he=0.25;}
if($user_skill_lvl[$d]=="3"){
$he=0.5;}
if($user[identify]=="rion"){
$he=$he+($user_skill_lvl[$d]*0.05);}
elseif($user[identify]=="verdish"){
$he=$he+($user_skill_lvl[$d]*0.05);}
elseif($user[identify]=="gem"){
$he=$he+($user_skill_lvl[$d]*0.05);}

$hea=$army_health[$who]*$he;
if($army_hp[$who]<$he){
$army_hp[$who]=$army_hp[$who]+$hea;}
else {
$army_hp[$who]=$army_health[$who];}}


?>