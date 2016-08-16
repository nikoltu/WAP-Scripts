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
   $heroe_info[biography] = "Moandoro harizmatinis stilius ka&#382;kaip pasiliko su juo po to kaip jis buvo paverstas li&#269;u. Keista, bet &#353;i jo savyb&#279; padeda valdyti ir privilioti naujus li&#269;us efektyviau nei betkam kitam.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Li&#269;ams ir Galingiesiems Li&#269;ams jo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;, keli Negyv&#279;liai ir kelios &#352;m&#279;klos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   $basic_army[2] = "wight|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "lich") or ($unit == "power_lich")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>