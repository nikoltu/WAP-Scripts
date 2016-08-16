<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Voja yra v&#279;jo ragana, j&#261; da&#382;nai pasamdo laiv&#371; kapitonai, u&#382;sitikrindami, kad v&#279;jas bus palankus. Jai labiau patinka surus vandenyn&#371; oras nei pelki&#371; kuriose ji gim&#279;.";
   $heroe_info[speciality] = "+5% prie Navigacijos igu&#382;io nuo kiekvieno Navigacijos lygio.";
   $heroe_info[army] = "keliasde&#353;imt Gnol&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "navigace|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>