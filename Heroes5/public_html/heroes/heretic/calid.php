<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Kalid&#279; turi neiprast&#261;, bet nauding&#261; gebejim&#261; u&#382;uosti pasl&#279;ptus sulfur&#371; indelius. Po&#382;eminio kal&#279;jimo Valdovai panaudojo ta geb&#279;jim&#261; kelis kartus kai rinko sulfurus savo bauginantiems drakonams.";
   $heroe_info[speciality] = "+1 Sulfuras per dien&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Imp&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>
