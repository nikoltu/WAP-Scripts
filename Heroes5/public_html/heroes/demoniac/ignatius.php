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
   $heroe_info[biography] = "Kai Velniai atvyko i Erafija, Ignacijus suprato, kad jo vienintel&#279; islikimo viltis prisijungti prie j&#371;. Jis sugeb&#279;jo itikinti juos, kad jis visada atitinka kazkokia paskirti, bet bijo, kad viena diena jie nuspres, kad jiems daugiau nereikia zmogaus pagalbos.";
   $heroe_info[speciality] = "+1 Atakos ir +1 Gynybos visiems Impams ir Ugnies Impams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt Imp&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "luck|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-50";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "imp") or ($unit == "familiar")) {
      $unit_info[attack] = $unit_info[attack] + 1;
      $unit_info[defense] = $unit_info[defense] + 1;
   }
   return $unit_info;
}
?>