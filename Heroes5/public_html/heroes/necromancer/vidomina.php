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
   $heroe_info[biography] = "Dar budama jauna Vidomina parodp&#279; talent&#261; Alchemijai, bet buvo i&#353;tremta i&#353; Brakados, kai i&#353;ai&#353;k&#279;jo, kad ji naudojo savo galias ne tam, kad suteikti gyvybe negyvam daiktui, bet gra&#382;inti gyvybe nebegyvam padarui.";
   $heroe_info[speciality] = "+5% prie Nekromantijos igu&#382;io nuo kiekvieno Nekromantijos lygio.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>