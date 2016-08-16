<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Puolimas [1].";
   $heroe_info[biography] = "Sekdama karalien&#279;s Katerinos pavyzd&#382;iu, ji &#303;stojo &#303; Erafijos armij&#261; ir greitai &#303;rod&#279; savo sugeb&#279;jimus elgtis su kardu. Jai buvo patik&#279;ta ginti Erafij&#261; nuo Krygano armijos.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos Kruseideriams ir Paladinams jos armijoje.";
   $heroe_info[army] = "keli Kruseideriai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "swordsman|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "swordsman") or ($unit == "crusader")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>