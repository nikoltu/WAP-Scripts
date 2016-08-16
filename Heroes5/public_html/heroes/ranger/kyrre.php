<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 3;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "&#352;audymas [2].";
   $heroe_info[biography] = "Kyr&#279; ilgai buvo Enroto skaute per gynim&#261;si nuo Krygano atakos. Ji yra puiki lankinink&#279; ir u&#382;sitarnavo pagarb&#261; tarp Elf&#371; visame Enrote.";
   $heroe_info[speciality] = "Elfai ir Auksiniai Elfai daro 10% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Elf&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "archery|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "elf|10-15";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>