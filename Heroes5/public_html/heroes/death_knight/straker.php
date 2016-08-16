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
   $heroe_info[biography] = "Strakeris pasirinko tamsuji nekromantijos keli&#261;, bet greit i&#353;siai&#353;kino kad jo kovos igud&#382;iai &#382;ymiai stipresni uz jo magijos galimybes. Dabar jis tarnauja Deyjos armijose, tik&#279;damasis viena diena istoti i tikru nekromantu gretas.";
   $heroe_info[speciality] = "+2 Atakos ir +2 Gynybos visiems Negyv&#279;liams ir Zombiams jo armijoje.";
   $heroe_info[army] = "keliolika Negyv&#279;li&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "walking_dead|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "walking_dead") or ($unit == "zombie")) {
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[defense] = $unit_info[defense] + 2;
   }
   return $unit_info;
}
?>