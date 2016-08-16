<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Mokslo &#381;mogus [1], Oro Magija [1].";
   $heroe_info[biography] = "Sukurti galing&#371; j&#279;g&#371; ir misti&#353;k&#371; gali&#371; D&#382;inai yra magi&#353;ki padarai. Aynas buvo sukurtas netobulas. Per am&#382;ius jis treniravosi, kad nustelbt&#371; savo netobulum&#261;. U&#382; savo atkaklum&#261; ir talent&#261; Oro Magijai Aynas buvo pakviestas tarnybai Konfliukse.";
   $heroe_info[speciality] = "Stiprina Naikinan&#269;io Spyndulio burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas:Naikinantis Spindulys.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "air_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="dspy";
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