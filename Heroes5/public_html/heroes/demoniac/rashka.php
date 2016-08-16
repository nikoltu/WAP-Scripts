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
   $heroe_info[biography] = "Ra&#353;ka yra vienas i&#353; stipriausi&#371; ir pavojingiausi&#371; i&#353; viso Efryto. Jo vadovavimo metodai susitelkia ties labiausiai bauginanciu metodu. Ligi &#353;iol, tai padejo.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Efrytams ir Efrytams Sultonams jo armijoje.";
   $heroe_info[army] = "keliolika Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|10-25";
   $basic_army[1] = "gog|3-10";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "efreet") or ($unit == "efreet_sultan")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>