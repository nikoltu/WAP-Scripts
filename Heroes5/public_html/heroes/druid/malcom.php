<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Malkomas yra vienas i&#353; nedaugelio nyk&#353;tuk&#371;, kurie parodo naturalius sugeb&#279;jimus mokytis magijos. Da&#382;nai jis gali atkartoti burt&#261; pamates ji vos karta. Ji pa&#279;me &#303; armij&#261;, kad jis gintu Avlija nuo Eofolio velni&#371;.";
   $heroe_info[speciality] = "+5% prie Reg&#279;jimo igu&#382;io nuo kiekvieno Reg&#279;jimo lygio.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "see|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>