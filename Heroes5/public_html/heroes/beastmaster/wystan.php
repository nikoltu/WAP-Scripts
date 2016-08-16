<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Ved&#281;s vyriausi&#261;j&#261; Karaliaus Tralakso dukr&#261;, Vystanas patarin&#279;ja auk&#353;&#269;iausiems karo vadams Tatalijoje ir mokosi i&#353; j&#371;. Ateityje jis tikisi vadovauti savo gen&#269;iai.";
   $heroe_info[speciality] = "Pelki&#371; Drie&#382;ai ir Kariai Drie&#382;ai daro 15% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Pelki&#371; Drie&#382;&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "lizardman|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>