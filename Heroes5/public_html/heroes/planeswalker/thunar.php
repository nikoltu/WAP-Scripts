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
   $heroe_info[biography] = "Gyvendama arti Erafijos kapitolijaus Tunar&#279; i&#353;moko taktikos ir kaip gauti pinig&#371;. Jos smalsumas ir pagarba mirtingiems dav&#279; jai vieta Konfliukse.";
   $heroe_info[speciality] = "+2 atakos, +1 gynybos ir +5 &#382;alos visiem &#381;em&#279;s ir Magmos Elementalams jos armijoje.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "luck|1";
   $basic_skills[1] = "estates|1";
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
   if (($unit == "earth_elemental") or ($unit == "magma_elemental")) {
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[min] = $unit_info[min] + 5;
      $unit_info[max] = $unit_info[max] + 5;
      $unit_info[defense] = $unit_info[defense] + 1;
   }
   return $unit_info;
}
?>