<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Teisinga tik&#279;tis, kad minotauras turi buti ar&#353;us kovotojas, bet Malekitas naudojasi magija su tokiu inir&#353;iu kuris konkuruoja su Nigono geriausiais kovotojais.";
   $heroe_info[speciality] = "+5% prie Stebuklingumo igu&#382;io nuo kiekvieno Stebuklingumo lygio.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "sorcery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
   $basic_army[1] = "harpy|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>