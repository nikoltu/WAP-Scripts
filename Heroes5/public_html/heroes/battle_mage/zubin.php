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
   $heroe_info[biography] = "Zubinas ka&#382;kada buvo genties vadas ir kovojo prie&#353; baron&#261; Boragus&#261;. Kai pagaliau ivyko derybos d&#279;l taikos Zubinui buvo pasiulyta tapti auk&#353;to rango lyderiu Krevlodo armijoje.";
   $heroe_info[speciality] = "Padidina Taiklumo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "Burtas:Taiklumas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "artilery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|10-20";
   $basic_army[1] = "wolf_rider|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="agility";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>