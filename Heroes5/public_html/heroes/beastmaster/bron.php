<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], Rezistencija [1].";
   $heroe_info[biography] = "Nors Bronas &#382;mogus jis turi sugeb&#279;jima atremti Basilisko &#382;vilksni. Tai jam dav&#279; prana&#353;umo perprasti Basiliska ir su&#382;inoti apie ji daug daugiau negu &#382;ino koks nors gyvas padaras.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Basiliskams ir Nuostabiesiems Basiliskams jo armijoje.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|4-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "basilisk") or ($unit == "greater_basilisk")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>