<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Ji ne tik yra nuostabi lyder&#279; kovose - visi, kurie jai pakl&#363;sta sako, kad Gret&#269;ina kaip antra mama, nes visada pasir&#363;pina jais.";
   $heroe_info[speciality] = "+2 Gyvybi&#371; visiems Goblinams ir Hobgoblinams jos armijoje.";
   $heroe_info[army] = "keliasde&#353;imt Goblin&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "goblin") or ($unit == "hobgoblin")) {
      $unit_info[health] = $unit_info[health] + 2;
   }
   return $unit_info;
}
?>