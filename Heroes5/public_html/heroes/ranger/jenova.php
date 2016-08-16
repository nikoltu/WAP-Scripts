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
   $heroe_info[biography] = "Jenovos prigimtis pad&#279;jo jai prasiskinti keli&#261; Erafijoje ir Enrote. Ji sugeba gauti pinig&#371; bet kur, nes yra kantri ir sugeba siekti tikslo.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Kentaur&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "archery|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>