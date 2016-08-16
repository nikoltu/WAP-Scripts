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
   $heroe_info[biography] = "&#268;arna buvo sugundyta tamsoms galiomis. Nors jos magi&#353;kos j&#279;gos niekada neleis jai buti tikra nekromante, ji vistiek labai efektyvi kar&#279;.";
   $heroe_info[speciality] = "+3 Atakos ir +3 Gynybos visoms &#352;m&#279;kloms ir Tamsos &#352;m&#279;kloms jos armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir kelios &#352;m&#279;klo.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "luck|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "wight|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "wight") or ($unit == "wraith")) {
      $unit_info[attack] = $unit_info[attack] + 3;
      $unit_info[defense] = $unit_info[defense] + 3;
   }
   return $unit_info;
}
?>