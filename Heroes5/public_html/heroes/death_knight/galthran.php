<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Per metu metus eksperimentavimo Galthranas i&#353;rado naujus metodus kuriu pagalba galima sukurti ir vadovauti skeletais. &#352;ie metodai duoda jam ry&#353;ku prana&#353;uma mu&#353;io lauke";
   $heroe_info[speciality] = "+1 Atakos ir +1 Gynybos visiems Skeletams ir Skeletams Kariamsjo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "armorer|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-50";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "skeleton") or ($unit == "skeleton_worrior")) {
      $unit_info[attack] = $unit_info[attack] + 1;
      $unit_info[defense] = $unit_info[defense] + 1;
   }
   return $unit_info;
}
?>