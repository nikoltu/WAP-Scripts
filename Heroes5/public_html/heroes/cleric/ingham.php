<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Iki Krygano atakos Ingamas tur&#279;jo savo vienuolyn&#261;. Jis ir jo vienuoliai buvo priversti tarnauti Erafijai.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Monkams ir Zylotams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt Ietinink&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "monk") or ($unit == "zealot")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>