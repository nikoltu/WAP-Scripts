<?php

$d = "none";
if ($user_skill[0] == "tactik") { $d = "0"; }
if ($user_skill[1] == "tactik") { $d = "1"; }
if ($user_skill[2] == "tactik") { $d = "2"; }
if ($user_skill[3] == "tactik") { $d = "3"; }
if ($user_skill[4] == "tactik") { $d = "4"; }
if ($user_skill[5] == "tactik") { $d = "5"; }
if ($user_skill[6] == "tactik") { $d = "6"; }
if ($user_skill[7] == "tactik") { $d = "7"; }
if ($user_skill[8] == "tactik") { $d = "8"; }
if ($user_skill[9] == "tactik") { $d = "9"; }
if ($user_skill[10] == "tactik") { $d = "10"; }
if ($user_skill[11] == "tactik") { $d = "11"; }
if($d!=="none"){
if($user_skill_lvl[$d]=="1"){
$lu=5;}
if($user_skill_lvl[$d]=="2"){
$lu=10;}
if($user_skill_lvl[$d]=="3"){
$lu=20;}

if(mt_rand(1, 101)-1<$lu){
echo"<small>Jums pasisek&#279;.</small><br/>";
      $dmg = mt_rand($army_max[$who] * $army_quantity[$who], $army_max[$who] *  $army_quantity[$who]);
}
}


?>