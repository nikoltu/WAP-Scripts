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
   $heroe_info[biography] = "Verdi&#353;&#279; beveik mir&#279; kai jos kaim&#261; u&#382;puol&#279; po&#382;emi&#371; Lordai. Laimei ji yra gydimo specialyst&#279;, tod&#279;l ji gal&#279;jo i&#353;gyditi savo beveik mirtinas &#382;aizdas kurias ji gavo tame mu&#353;yje";
   $heroe_info[speciality] = "+5% prie Gydymo igu&#382;io nuo kiekvieno Gydymo lygio.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "healing|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>