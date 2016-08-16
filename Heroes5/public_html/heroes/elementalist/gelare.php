<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ataka [1], Mokslo Zmogus [1].";
   $heroe_info[biography] = "Nuo gymimo Gelaras i&#353;mintingesnis u&#382; daugel&#303; kit&#371; elf&#371;. Visalaik ramus, susimastes, nuo&#353;irdus, Gelaras neabejojo, kad jo vieta Konfliukse.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "water_magic|1";
   return $basic_skills;
}
function basic_magic(){
return $basic_magic;
}

function basic_army() {
   $basic_army[0] = "pixie|25-30";
   $basic_army[1] = "air_elemental|3-7";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>