<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Taktika [1].";
   $heroe_info[biography] = "Tair&#279; labai greitai keliasi tarnybos kopeciomis Erafijos kavalerijoje. Taip vyksta ne tod&#279;l, kad ji puiki raitel&#279;, bet ir d&#279;kojant jos neitik&#279;tinai intuicijai, tame kas liecia karines taktikas. Ji niekada nepraranda kovos dvasios.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Raiteliams ir Karo Raiteliams jos armijoje.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "luck|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[0] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "cavalier") or ($unit == "champion")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>