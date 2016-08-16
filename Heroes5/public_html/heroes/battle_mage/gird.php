<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Gird&#279; i&#353;moko beveik visk&#261;, k&#261; ji &#382;ino i&#353; jos kaimelio &#353;amano. Buvo manyta kad ji u&#382;ims jo viet&#261;, bet ji buvo paimta i&#353; kaimo, kai Krevlodo magai prad&#279;jo verbuoti vaikus kurie gal&#279;jo naudoti magij&#261;.";
   $heroe_info[speciality] = "+5% prie Stebuklingumo igu&#382;io nuo kiekvieno Stebuklingumo lygio.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "sorcery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|10-20";
   $basic_army[1] = "wolf_rider|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>