<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Kalhas buvo susituokes su Marija kelis metus, bet netrukus tapo ai&#353;ku, kad ji buvo aps&#279;sta visi&#353;ko dendrid&#371; naikinimo. Jie i&#353;siskir&#279; ir Kalhas tes&#279; puiki&#261; karine karjer&#261;.";
   $heroe_info[speciality] = "+2 Atakos ir +2 Gynybos visiems Gogams ir Magogams jo armijoje.";
   $heroe_info[army] = "keliolika Gog&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "zval|1";
   $basic_skills[1] = "archery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gog|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "gog") or ($unit == "magog")) {
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[defense] = $unit_info[defense] + 2;
   }
   return $unit_info;
}
?>