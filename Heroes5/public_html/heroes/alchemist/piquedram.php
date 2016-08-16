<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Pikedramas praleido did&#382;i&#261;j&#261; dali savo gyvenimo mokydamasis Alchemijos, turincios reikal&#371; su ivairiais nevertingos uolos tirpalais. Nera keista, kad tada kai Brakada papra&#353;&#279; jis sugeb&#279;jo pagerinti pagrindini Chimeros projekt&#261;.";
   $heroe_info[speciality] = "+2 Atakos ir +2 Gynybos visiems Gargoilams ir Akmeniniams Gargoilams jo armijoje.";
   $heroe_info[army] = "keliolika Gargoil&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "mistic|1";
   $basic_skills[1] = "zval|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "stone_gargoyle|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "stone_gargoyle") or ($unit == "obsidian_gargoyle")) {
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[defense] = $unit_info[defense] + 2;
   }
   return $unit_info;
}
?>
