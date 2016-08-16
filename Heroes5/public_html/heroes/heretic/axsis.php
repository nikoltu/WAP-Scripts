<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Aksis parod&#279; natural&#371; gabum&#261; magijai kai jis dar buvo jaunas. Jis  daro keistus daiktus. Kadangi velniai retai turi natural&#371; gabum&#261; ka&#382;kam, Aksis yra reikalingas.";
   $heroe_info[speciality] = "Dvigubina Mistikos igud&#382;io efekt&#261;.";
   $heroe_info[army] = "keliolika Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|10-20";
   $basic_army[1] = "gog|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>