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
   $heroe_info[biography] = "Na&#353;lait&#279; nuo gimimo, Gundula, buvo i&#353;auginta Barono Buraguso. Supratusi kad Buragas nebuvo jos tikras t&#279;vas, Gundula istojo &#303; kariuomene, tik&#279;damasi mirti garbingai. Bet ji nemir&#279;, o tapo bauginan&#269;ia lydere.";
   $heroe_info[speciality] = "+5% prie Puolimo igu&#382;io nuo kiekvieno Puolimo lygio.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Goblin&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|30-40";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>