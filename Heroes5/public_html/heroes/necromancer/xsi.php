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
   $heroe_info[biography] = "Ksi buvo viena i&#353; nedaugelio moteru kuriai dav&#279; garbe tapti pilnu li&#269;u. Ksi i&#353;rinko d&#279;l jos unikalios savyb&#279;s atsispirti fizinei &#382;alai - triukas kuris i&#353;gelb&#279;jo jai gyvybe daugeli kartu.";
   $heroe_info[speciality] = "Stiprina akmenin&#279;s odos burto poveik&#303;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "Burtas:Akmenin&#279; oda.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="stone_oda";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>