<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "&#382;inomam Enroto herojui Kregui nusibodo s&#279;d&#279;ti namie ir jis nusprend&#279; ie&#353;koti kito gyvenimo Erafijoje. Jis smagiai leidosi i kelia ir buvo laimingas surades &#382;eme kur jo sugeb&#279;jimams buvo rasta vieta.";
   $heroe_info[speciality] = "5% padidina kariu daroma &#382;ala.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|2";
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