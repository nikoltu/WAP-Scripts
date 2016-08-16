<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Mokslo &#381;mogus [1], Turtas [1].";
   $heroe_info[biography] = "Nyk&#353;tukai myli auks&#261; &#353;iek tiek daugiau negu kiti. Niekas &#382;em&#279;je nesugeba jo rasti taip reguliariai kaip Grindanas.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "estates|1";
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