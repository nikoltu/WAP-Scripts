<?php
$gold_day = 500;
$ccda=mysql_query("SELECT * FROM castles where user='$user[username]'");
while($ccda2=mysql_fetch_array($ccda)){

$cas=mysql_query("SELECT * FROM cbuildings where castle='$ccda2[castle]'");
while($cas2=mysql_fetch_array($cas)){
if($cas2[build]=="village_hall"){
$gold_day=$gold_day+1000;}
if($cas2[build]=="town_hall"){
$gold_day=$gold_day+2000;}
if($cas2[build]=="capital"){
$gold_day=$gold_day+4000;}
}}
if($gold_day<1){
$gold_day = 500;}

if ($user[identify] == "lord_haart") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "grindan") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "gelare") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "caitlin") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "nagash") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "aine") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "clavius") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "damacon") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "gerwulf") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "octavia") { $gold_day = $gold_day + 200; }
elseif ($user[identify] == "jenova") { $gold_day = $gold_day + 200; }
include_once("core/my_army.php");
if (($army_unit[0] == "battle_dwarf") or ($army_unit[1] == "battle_dwarf") or ($army_unit[2] == "battle_dwarf") or ($army_unit[3] == "battle_dwarf")) {
   $gold_day = $gold_day + 50;
}
include_once("core/my_skills.php");
if ($user_skill[0] == "estates") {
   if ($user_skill_lvl[0] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[0] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[0] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[1] == "estates") {
   if ($user_skill_lvl[1] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[1] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[1] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[2] == "estates") {
   if ($user_skill_lvl[2] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[2] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[2] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[3] == "estates") {
   if ($user_skill_lvl[3] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[3] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[3] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[4] == "estates") {
   if ($user_skill_lvl[4] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[4] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[4] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[5] == "estates") {
   if ($user_skill_lvl[5] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[5] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[5] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[6] == "estates") {
   if ($user_skill_lvl[6] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[6] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[6] == "3") { $gold_day = $gold_day + 200; }
}
elseif ($user_skill[7] == "estates") {
   if ($user_skill_lvl[7] == "1") { $gold_day = $gold_day + 50; }
   if ($user_skill_lvl[7] == "2") { $gold_day = $gold_day + 100; }
   if ($user_skill_lvl[7] == "3") { $gold_day = $gold_day + 200; }
}
include_once("artifact/act/endless_purse_of_gold.php");
if($goldas[name]){
$gold_day=$gold_day+500;}

include_once("artifact/act/endless_bag_of_gold.php");
if($goldas[name]){
$gold_day=$gold_day+750;}

include_once("artifact/act/endless_sack_of_gold.php");
if($goldas[name]){
$gold_day=$gold_day+1000;}





?>