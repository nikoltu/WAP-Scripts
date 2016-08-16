<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Sandro mok&#279;si nekromantijos i&#353; burtininko, v&#279;liau nekromanto, Etriko. Sandro mat&#279; beveik visa Enrot&#261; ir Erafij&#261; ir dabar tarnauja Fineasui Vilmarui, Deyjos nekromant&#371; lyderiui.";
   $heroe_info[speciality] = "+5% prie Stebuklingumo igu&#382;io nuo kiekvieno Stebuklingumo lygio.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;, keli Negyv&#279;liai ir kelios &#352;m&#279;klos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "sorcery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   $basic_army[2] = "wight|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>