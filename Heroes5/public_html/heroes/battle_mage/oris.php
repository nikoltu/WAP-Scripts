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
   $heroe_info[biography] = "Oris nerod&#279; ipating&#371; sugeb&#279;jim&#371; savo karjeros prad&#382;ioje, bet jos neiprasta savyb&#279; i&#353;mokti betkok&#303; pamatyt&#261; burt&#261; kompensavo jos silpn&#261; gali&#261;.";
   $heroe_info[speciality] = "+5% prie Reg&#279;jimo igu&#382;io nuo kiekvieno Reg&#279;jimo lygio.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "see|1";
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