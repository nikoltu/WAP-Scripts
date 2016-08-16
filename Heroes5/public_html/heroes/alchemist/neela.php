<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Nyla yra viena i&#353; stipriausi&#371; d&#382;in&#371;, ji gali pasiprie&#353;inti dideliam skausmui. Ji ka&#382;kaip sugeba iteigti &#353;i pasiprie&#353;inima kariams, kuriems ji komanduoja.";
   $heroe_info[speciality] = "5% suma&#382;ina prie&#353;ininko daroma &#382;ala.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Gremlin&#371; ir keli Gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>
