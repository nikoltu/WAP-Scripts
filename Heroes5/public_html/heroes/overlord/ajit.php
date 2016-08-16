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
   $heroe_info[biography] = "Ajitas rupestingai studijavo Agaro darbus, kuris atsitiktinai sukur&#279; beholderius ir baisiasias akis, kurias jis dabar treniruoja, kad panaudotu kovoje.";
   $heroe_info[speciality] = "+1 Atakos ir +1 Gynybos visiems Beholderiams ir Basiosioms Akims jo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir keli Beholderiai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-35";
   $basic_army[1] = "beholder|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "beholder") or ($unit == "evil_eye")) {
      $unit_info[attack] = $unit_info[attack] + 1;
      $unit_info[defense] = $unit_info[defense] + 1;
   }
   return $unit_info;
}
?>
