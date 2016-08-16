<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], &#382;valgyba [1].";
   $heroe_info[biography] = "Broghildo senis i&#353;moko susekti laukinius Vyvernus su &#353;nyp&#371; skraidanci&#371; palei Tatalijos pakra&#353;cius pagalba. &#353;iu padar&#371; prijaukinimo paslaptys buvo perduotos Broghildo t&#279;vui, o paskui ir jam.";
   $heroe_info[speciality] = "+3 Atakos ir +3 Gynybos visiems Vyvernams ir Vyvern&#371; Monarchams jo armijoje.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "zval|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|4-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "wyvern") or ($unit == "wyvern_monarch")) {
      $unit_info[attack] = $unit_info[attack] + 3;
      $unit_info[defense] = $unit_info[defense] + 3;
   }
   return $unit_info;
}
?>