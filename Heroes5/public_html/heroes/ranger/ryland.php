<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 3;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Rylandas buvo pirmas ir kolkas vienintelis &#382;mogus priimtas i seniausi&#371;j&#371; Dendroid&#371; rat&#261;, kaip Avlijos reind&#382;eris. Kai kurie juokauja, kad praieitame gyvenime jis buvo Elfas paskui buvo nu&#382;udytas ir atsitiktinai persikunijo &#382;mogaus pavidalu.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Dendroidams ir Kariams Dendroidams jo armijoje.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nykstukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "diplo|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "dendroid_guard") or ($unit == "dendroid_soldier")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>