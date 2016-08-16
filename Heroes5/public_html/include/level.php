<?php

include_once("core/level.php");
$level = level($user[level]);
if ($level[$user[level]] > $user[expierence]) {
   echo"<small><b>Herojus dar nepasiek&#279; kit&#261; lyg&#303;.</b></small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=skills\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

if ($user['class'] == "alchemist") {
   if ($user[level] <= 10) {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "barbarian") {
   if ($user[level] <= 10) {
      $attack = 55;
      $defense = 35;
      $power = 5;
      $knowledge = 5;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "battle_mage") {
   if ($user[level] <= 10) {
      $attack = 30;
      $defense = 20;
      $power = 25;
      $knowledge = 25;
   }
   else {
      $attack = 25;
      $defense = 25;
      $power = 25;
      $knowledge = 25;
   }
}
elseif ($user['class'] == "beastmaster") {
   if ($user[level] <= 10) {
      $attack = 30;
      $defense = 50;
      $power = 10;
      $knowledge = 10;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "cleric") {
   if ($user[level] <= 10) {
      $attack = 20;
      $defense = 15;
      $power = 30;
      $knowledge = 35;
   }
   else {
      $attack = 20;
      $defense = 20;
      $power = 30;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "death_knight") {
   if ($user[level] <= 10) {
      $attack = 30;
      $defense = 25;
      $power = 20;
      $knowledge = 25;
   }
   else {
      $attack = 25;
      $defense = 25;
      $power = 25;
      $knowledge = 25;
   }
}
elseif ($user['class'] == "demoniac") {
   if ($user[level] <= 10) {
      $attack = 35;
      $defense = 35;
      $power = 15;
      $knowledge = 15;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "druid") {
   if ($user[level] <= 10) {
      $attack = 10;
      $defense = 20;
      $power = 35;
      $knowledge = 35;
   }
   else {
      $attack = 20;
      $defense = 20;
      $power = 30;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "heretic") {
   if ($user[level] <= 10) {
      $attack = 15;
      $defense = 15;
      $power = 35;
      $knowledge = 35;
   }
   else {
      $attack = 20;
      $defense = 20;
      $power = 30;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "knight") {
   if ($user[level] <= 10) {
      $attack = 35;
      $defense = 45;
      $power = 10;
      $knowledge = 10;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "necromancer") {
   if ($user[level] <= 10) {
      $attack = 15;
      $defense = 15;
      $power = 35;
      $knowledge = 35;
   }
   else {
      $attack = 25;
      $defense = 25;
      $power = 25;
      $knowledge = 25;
   }
}
elseif ($user['class'] == "overlord") {
   if ($user[level] <= 10) {
      $attack = 35;
      $defense = 35;
      $power = 15;
      $knowledge = 15;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "ranger") {
   if ($user[level] <= 10) {
      $attack = 35;
      $defense = 45;
      $power = 10;
      $knowledge = 10;
   }
   else {
      $attack = 30;
      $defense = 30;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "warlock") {
   if ($user[level] <= 10) {
      $attack = 10;
      $defense = 10;
      $power = 50;
      $knowledge = 30;
   }
   else {
      $attack = 20;
      $defense = 20;
      $power = 30;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "witch") {
   if ($user[level] <= 10) {
      $attack = 5;
      $defense = 15;
      $power = 40;
      $knowledge = 40;
   }
   else {
      $attack = 20;
      $defense = 20;
      $power = 30;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "wizard") {
   if ($user[level] <= 10) {
      $attack = 10;
      $defense = 10;
      $power = 40;
      $knowledge = 40;
   }
   else {
      $attack = 30;
      $defense = 20;
      $power = 20;
      $knowledge = 30;
   }
}
elseif ($user['class'] == "planeswalker") {
   if ($user[level] <= 10) {
      $attack = 40;
      $defense = 20;
      $power = 20;
      $knowledge = 20;
   }
   else {
      $attack = 35;
      $defense = 25;
      $power = 20;
      $knowledge = 20;
   }
}
elseif ($user['class'] == "elementalist") {
   if ($user[level] <= 10) {
      $attack = 5;
      $defense = 5;
      $power = 45;
      $knowledge = 45;
   }
   else {
      $attack = 15;
      $defense = 15;
      $power = 35;
      $knowledge = 35;
   }
}

/// planeswalker, elementalist

$sk = mt_rand(1, 100);
if ($sk > $attack + $defense + $power) {
   $skill = "knowledge";
}
elseif ($sk > $attack + $defense) {
   $skill = "power";
}
elseif ($sk > $attack) {
   $skill = "defense";
}
else {
   $skill = "attack";
}
$name = strtolower($user[username]);
$queries++;
mysql_query("UPDATE users SET level=level+1, $skill=$skill+1 WHERE username='$name' LIMIT 1");
$lvl = $user[level] + 1;
echo"<small><b><u>Herojus pasieke $lvl lygi!</u></b></small><br/>$line<br/>";
if(($lvl=="4") or ($lvl=="7") or ($lvl=="10") or ($lvl=="13") or ($lvl=="16") or ($lvl=="19") or ($lvl=="22") or ($lvl=="25") or ($lvl=="28") or ($lvl=="31") or ($lvl=="34") or ($lvl=="37") or ($lvl=="40") or ($lvl=="43") or ($lvl=="46") or ($lvl=="49") or ($lvl=="52") or ($lvl=="55") or ($lvl=="58") or ($lvl=="61") or ($lvl=="64") or ($lvl=="67") or ($lvl=="70") or ($lvl=="73") or ($lvl=="76") or ($lvl=="79") or ($lvl=="82") or ($lvl=="85") or ($lvl=="88") or ($lvl=="91") or ($lvl=="94") or ($lvl=="97") or ($lvl=="100") or ($lvl=="103")){
mysql_query("UPDATE users SET skill_points=skill_points+1 where username='$name' LIMIT 1");
echo"<small>Gavote 1 skill pointa!</small><br/>";}
$mana=$user[knowledge]*10;
include_once("skils/intelekt.php");
mysql_query("UPDATE users SET maxmana='$mana' where session='$id'");
if ($skill == "attack") {
   $queries++;
   mysql_query("UPDATE army SET attack=attack+1 WHERE username='$name' LIMIT $toar");
   echo"<small>Gavote +1 Atakos!</small><br/><img src=\"img/skills/$skill.gif\" alt=\"Ataka\"/><br/>";
}
elseif ($skill == "defense") {
   $queries++;
   mysql_query("UPDATE army SET defense=defense+1 WHERE username='$name' LIMIT $toar");
   echo"<small>Gavote +1 Gynybos!</small><br/><img src=\"img/skills/$skill.gif\" alt=\"Gynyba\"/><br/>";
}
elseif ($skill == "power") {
   echo"<small>Gavote +1 Galios!</small><br/><img src=\"img/skills/$skill.gif\" alt=\"Galia\"/><br/>";
}
elseif ($skill == "knowledge") {
   echo"<small>Gavote +1 Isminties!</small><br/><img src=\"img/skills/$skill.gif\" alt=\"Ismintis\"/><br/>";
}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";