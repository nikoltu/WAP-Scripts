<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Edriko senelis buvo pirmasis &#382;mogus Erafijoje, kuris sugeb&#279;jo pa&#382;aboti ir treniruoti laukin&#303; grifin&#261;. Dabar Edriko &#353;eima valdo did&#382;iausius grifin&#371; b&#363;rius Erafijoje ir padeda kovoti armijoje.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Grifinams ir Karali&#353;kiesiems Grifinams jo armijoje.";
   $heroe_info[army] = "keliolika Grifin&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "armorer|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "griffin|10-15";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "griffin") or ($unit == "royal_griffin")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>