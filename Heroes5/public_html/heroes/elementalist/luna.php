<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Mokslo &#381;mogus [1], Ugnies Magija [1].";
   $heroe_info[biography] = "Gimusi Enroto kari&#371; &#353;eimoje Luna pajuto Konfliukso pa&#353;aukim&#261; ir nukeliavo i Erafijos &#382;emes. Luna nepasitenkino vandens magijos galiomis,tad prad&#279;jo i&#353;samiau studijuoti ugnies magij&#261;.";
   $heroe_info[speciality] = "Stiprina Ugnies Sienos burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas:Ugnies Siena.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "fire_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="fire_wall";
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