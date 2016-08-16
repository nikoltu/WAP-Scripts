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
   $heroe_info[biography] = "Vi&#353;i&#353;kai atsitiktinai Klancis surado savyje galimybe bendrauti su vienaragiu. &#352;i unikali galimyb&#279; pad&#279;jo jam tarnyboje elitin&#279;se Avlijos armijos grup&#279;se.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Vienaragiams ir Karo Vienaragiams jo armijoje.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nykstukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "resistance|1";
   $basic_skills[1] = "kelp|1";
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
   if (($unit == "unicorn") or ($unit == "war_unicorn")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>