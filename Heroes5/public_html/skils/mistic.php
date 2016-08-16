<?php
if($user[identify]=="halon"){
$mp2=$mp2+2;}
$d = "none";
if ($user_skill[0] == "mistic") { $d = "0"; }
if ($user_skill[1] == "mistic") { $d = "1"; }
if ($user_skill[2] == "mistic") { $d = "2"; }
if ($user_skill[3] == "mistic") { $d = "3"; }
if ($user_skill[4] == "mistic") { $d = "4"; }
if ($user_skill[5] == "mistic") { $d = "5"; }
if ($user_skill[6] == "mistic") { $d = "6"; }
if ($user_skill[7] == "mistic") { $d = "7"; }
if ($user_skill[8] == "mistic") { $d = "8"; }
if ($user_skill[9] == "mistic") { $d = "9"; }
if ($user_skill[10] == "mistic") { $d = "10"; }
if ($user_skill[11] == "mistic") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$mp3=1;}
if($user_skill_lvl[$d]=="2"){
$mp3=2;}
if($user_skill_lvl[$d]=="3"){
$mp3=3;}
if(($user[identify]=="axsis") or ($user[identify]=="rosic") or ($user[identify]=="jaegar")){
$mp3=$mp3*2;}
$mp2=$mp2+$mp3;
}


?>