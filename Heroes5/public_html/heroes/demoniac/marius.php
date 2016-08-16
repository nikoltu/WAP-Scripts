<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Marija buvo Kalho pagalbinink&#279; kelis metus, pagaliau issiskir&#279;, kai tapo aisku, kad Kalhas nesutiko su jos (meistro planu) atsikratyti slyksci&#371; padar&#371; ir padaryti - geros mi&#353;kingos vietov&#279;s.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Demonams ir Raguotiesiems Demonams jos armijoje.";
   $heroe_info[army] =  "keliasde&#353;imt Imp&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-40";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "demon") or ($unit == "horned_demon")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>