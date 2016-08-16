<?php

$d = "none";
if ($user_skill[0] == "sorcery") { $d = "0"; }
if ($user_skill[1] == "sorcery") { $d = "1"; }
if ($user_skill[2] == "sorcery") { $d = "2"; }
if ($user_skill[3] == "sorcery") { $d = "3"; }
if ($user_skill[4] == "sorcery") { $d = "4"; }
if ($user_skill[5] == "sorcery") { $d = "5"; }
if ($user_skill[6] == "sorcery") { $d = "6"; }
if ($user_skill[7] == "sorcery") { $d = "7"; }
if ($user_skill[8] == "sorcery") { $d = "8"; }
if ($user_skill[9] == "sorcery") { $d = "9"; }
if ($user_skill[10] == "sorcery") { $d = "10"; }
if ($user_skill[11] == "sorcery") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
if($user['identify']=="zydar"){

$dmg=$dmg*1.06;}
elseif($user['identify']=="sandro"){

$dmg=$dmg*1.10;}
elseif($user['identify']=="styg"){

$dmg=$dmg*1.10;}
elseif($user['identify']=="malekith"){

$dmg=$dmg*1.10;}
elseif($user['identify']=="gird"){

$dmg=$dmg*1.10;}
else{

$dmg=$dmg*1.05;}}

if($user_skill_lvl[$d]=="2"){
if($user['identify']=="zydar"){

$dmg=$dmg*1.12;}
elseif($user['identify']=="styg"){

$dmg=$dmg*1.2;}
elseif($user['identify']=="malekith"){

$dmg=$dmg*1.2;}
elseif($user['identify']=="sandro"){

$dmg=$dmg*1.2;}
elseif($user['identify']=="gird"){

$dmg=$dmg*1.2;}
else{

$dmg=$dmg*1.10;}}
if($user_skill_lvl[$d]=="3"){
if($user['identify']=="zydar"){

$dmg=$dmg*1.18;}
elseif($user['identify']=="sandro"){

$dmg=$dmg*1.3;}
elseif($user['identify']=="styg"){

$dmg=$dmg*1.3;}
elseif($user['identify']=="malekith"){

$dmg=$dmg*1.3;}
elseif($user['identify']=="gird"){

$dmg=$dmg*1.3;}
else{

$dmg=$dmg*1.15;}
}}


?>