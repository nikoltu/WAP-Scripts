<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 3;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1],Balistika [1].";
   $heroe_info[biography] = "Prie&#352; keturis metus galingas magas i&#353;kviet&#279; Ignis&#261; i&#353; po &#382;emi&#371;.Negal&#279;dama sugri&#382;ti ji istojo i tarnyb&#261; Konfliukse.";
   $heroe_info[speciality] = "+5 atakos ir +5 gynybos visiems Ugnies ir Energijos Elementalams.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "balistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pixie|25-40";
   $basic_army[1] = "air_elemental|5-10";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "fire_elemental") or ($unit == "energy_elemental")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>