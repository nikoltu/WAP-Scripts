<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Beveik penkiolika met&#371; atgal Desos kaimas buvo sunaikintas &#382;moni&#371; ple&#353;ik&#371;. Desa buvo vienas i&#353; &#353;e&#353;i&#371; vaik&#371; kurie i&#353;gyveno. Nuo to meto Desa svajoja atker&#353;yti &#382;mon&#279;ms.";
   $heroe_info[speciality] = "+6 Atakos ir +4 Gynybos visiems Orkams ir Ork&#371; Vadams jos armijoje.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "strategy|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|10-20";
   $basic_army[1] = "wolf_rider|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "orc") or ($unit == "orc_chieftan")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>