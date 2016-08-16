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
   $heroe_info[biography] = "&#352;aktis turi nuostabia vizija kai reikia sukurti mu&#353;io lauko taktika. Jo Troglodit&#371; ordos bijo visame pasaulyje, ypac tamsiuose, po&#382;eminiuose tuneliuose.";
   $heroe_info[speciality] = "+1 Atakos ir +1 Gynybos visiems Trogloditams ir Po&#382;emi&#371; Trogloditams jo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371;";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "luck|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-55";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "troglodyte") or ($unit == "infernal_troglodyte")) {
      $unit_info[attack] = $unit_info[attack] + 1;
      $unit_info[defense] = $unit_info[defense] + 1;
   }
   return $unit_info;
}
?>