<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Pinigai [1].";
   $heroe_info[biography] = "Kai kurie sako, kad Lordo Harto departavimas i&#353; Erafijos yra susij&#281;s su jo nekromancijos kultu, bet tarnaudamas pagrindin&#279;je armijoje jis daug prisid&#279;jo siekiant pergali&#371; kovose iki Rolando at&#279;jimo.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Ietinink&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "estates|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>