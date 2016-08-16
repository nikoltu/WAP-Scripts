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
   $heroe_info[biography] = "Ogras magas V&#279;jus jau nekarta irod&#279;, kad jo vadovavimo igud&#382;iai yra neiveikiami. Barono sunui suabejojus mu&#353;io metu v&#279;jus butu skaitomas pagrindiniu kandidatu i Krevlodo sost&#261;";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Ograms ir Ograms Magams jo armijoje.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "leadership|1";
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
   if (($unit == "ogre") or ($unit == "ogre_magi")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>