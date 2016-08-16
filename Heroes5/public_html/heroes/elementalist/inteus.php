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
   $heroe_info[biography] = "Ankstyvuose Int&#279;jo metuose jo meistri&#353;kumas valdant ugn&#303; ji sudur&#279; su grupe linksmintoj&#371;. Kai kas man&#279;, kad Int&#279;jus yra Ugnies Elementalo sunus. Vien&#261; nakt&#303; jis i&#353;girdo pa&#353;aukim&#261; ir met&#279; savo profesij&#261;.Dabar jis tarnauja Konfliukse.";
   $heroe_info[speciality] = "Stiprina Kraujo tro&#353;kulio burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas:Kraujo tro&#353;kulys.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "fire_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="bloodlust";
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