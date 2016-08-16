<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Kai Zydaras n&#279;ra kov&#371; lauke, jis studijuoja naujus budus kaip padidinti jo ker&#371; potencija. Jis tikrai rodo daugiau iniciatyvos negu bet kuris is velni&#371; mag&#371;.";
   $heroe_info[speciality] = "Padidina Stebuklingumo igud&#382;io veiksmingum&#261; tiek % koks Stebuklingumo lygis.";
   $heroe_info[army] = "keliasde&#353;imt Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "sorcery|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-30";
   $basic_army[1] = "gog|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>