<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], Rezistencija [1].";
   $heroe_info[biography] = "Krelijonas pateko &#303; elitines armijos gretas po laim&#279;to konkurso ir nuo tada savo fan&#371; &#303;kvepiamas jis visada stengiasi vesti savo armij&#261; tik &#303; pergal&#281;. Jis ne itin pasi&#382;ymi protingais sprendimais, bet yra laikomas kovos lyderiu ir ypa&#269; j&#303; gerbia Ograi.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Ograms ir Ogr&#371; Magams jo armijoje.";
   $heroe_info[army] = "keli Ograi.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "ogre|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "ogre") or ($unit == "ogre_magi")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>