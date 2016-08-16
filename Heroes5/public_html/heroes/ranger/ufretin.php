<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 3;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "S&#279;km&#279; [1], Rezistencija [1].";
   $heroe_info[biography] = "Yra ne&#303;prasta matyti reind&#382;er&#303;-nyk&#353;tuk&#261;, bet Ufretas tur&#279;jo &#303;gimtus sugeb&#279;jimus. Jis tapo vis&#371; nyk&#353;tuk&#371; lyderiu ir simboliu.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Nyk&#353;tukams ir Kovos Nyk&#353;tukams jo armijoje.";
   $heroe_info[army] = "keliolika Nyk&#353;tuk&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "tactik|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "dwarf|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "dwarf") or ($unit == "battle_dwarf")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>