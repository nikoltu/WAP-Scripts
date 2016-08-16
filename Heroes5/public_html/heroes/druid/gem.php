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
   $heroe_info[biography] = "Gem&#279; buvo viena galingiausi&#371; bur&#279;j&#371; visoje Erafijoje. Ji tarnavo karaliui Rolandui Ironfistui paveld&#279;jimo karuose. Neu&#382;ilgo, po Rolando pergal&#279;s, Gem&#279; paliko Erafij&#261; ir surado namus Avlijoje.";
   $heroe_info[speciality] = "+5% Gydimo igud&#382;io nuo kiekvieno gydymo lygio.";
   $heroe_info[army] = "keliolika Kentaur&#371;, keli Nyk&#353;tukai ir keli Elfai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "healing|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   $basic_army[2] = "elf|2-4";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>