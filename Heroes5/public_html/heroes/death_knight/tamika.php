<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Tamikos neiveikiami kovos igud&#382;iai dav&#279; jai vald&#382;ios Deyjos kovin&#279;se paj&#279;gose. Ji netik vadovauja kariuomenei, ji taip pat treniruoja Juoduosius raitelius ir Mirusius raitelius";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Juodiesiems ir Mirusiems Raiteliams jos armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;, keli Negyv&#279;liai ir kelios &#352;m&#279;klos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   $basic_army[2] = "wight|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "black_knight") or ($unit == "dread_knight")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>