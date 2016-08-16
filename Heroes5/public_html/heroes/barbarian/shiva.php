<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#382;valgyba [1].";
   $heroe_info[biography] = "&#353;iva-pati jauniausia dukra i&#353; &#353;e&#353;eri&#371; cirko dresuotoj&#371; dukter&#371;. Tai, kad jai ne&#353;i&#353;ypsojo perspektyva pratesti &#353;eimos versla jai leido palikti cirka ir istoti i Krevlod&#371; armija.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Uol&#371; Pauk&#353;ciams ir &#382;aib&#371; Pauk&#353;ciams jos armijoje.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "zval|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "wolf_rider|5-7";
   $basic_army[0] = "goblin|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "roc") or ($unit == "thunderbird")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>