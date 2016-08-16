<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 3;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], Balistika [1].";
   $heroe_info[biography] = "Budamas grynos energijos butyb&#279; Moneras d&#382;iaugiasi savo naturalia laisve, bet jo smalsumas fizin&#279;ms butyb&#279;ms atved&#279; ji i Konfliuks&#261;.";
   $heroe_info[speciality] = "+3 atakos ir +3 gynybos visiem Magi&#353;kiems ir Psichiniams Elementalams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "strategy|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pixie|15-30";
   $basic_army[1] = "air_elemental|5-10";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "magic_elemental") or ($unit == "psychic_elemental")) {
      $unit_info[attack] = $unit_info[attack] + 3;
      $unit_info[defense] = $unit_info[defense] + 3;
   }
   return $unit_info;
}
?>