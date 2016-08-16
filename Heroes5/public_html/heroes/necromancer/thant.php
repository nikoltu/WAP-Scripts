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
   $heroe_info[biography] = "Niekas tiksliai ne&#353;ino kiek laiko gyvena Tantas. Kaikurie sako kad jis dalyvavo kovoje uz Erafij&#261; Malk&#371; karo metu, bet buvo su&#382;alotas vampyr&#371; naktinio mar&#353;o metu.";
   $heroe_info[speciality] = "Stiprina Atgaivinimo burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "Burtas:Atgaivinimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="reborn";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>