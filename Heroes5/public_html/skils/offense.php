<?php

$d = "none";
if ($user_skill[0] == "offense") { $d = "0"; }
if ($user_skill[1] == "offense") { $d = "1"; }
if ($user_skill[2] == "offense") { $d = "2"; }
if ($user_skill[3] == "offense") { $d = "3"; }
if ($user_skill[4] == "offense") { $d = "4"; }
if ($user_skill[5] == "offense") { $d = "5"; }
if ($user_skill[6] == "offense") { $d = "6"; }
if ($user_skill[7] == "offense") { $d = "7"; }
if ($user_skill[8] == "offense") { $d = "8"; }
if ($user_skill[9] == "offense") { $d = "9"; }
if ($user_skill[10] == "offense") { $d = "10"; }
if ($user_skill[11] == "offense") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$atk=1.05;}
if($user_skill_lvl[$d]=="2"){
$atk=1.1;}
if($user_skill_lvl[$d]=="3"){
$atk=1.15;}
if($user[identify]=="gundula"){
$atk=$atk+($user_skill_lvl[$d]*0.05);}

$dmg=$dmg*$atk;}


?>