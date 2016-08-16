<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Slenkant 6 m&#279;nesiams karo pasienyje su Krevlodais ma&#382;a Tazaro komanda sugeb&#279;jo paimti tatalijos posta ir islaikyti ji 5kartus kol atviks pastiprinimas.";
   $heroe_info[speciality] = "5% suma&#382;ina prie&#353;ininko daroma &#382;ala.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|4-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>
