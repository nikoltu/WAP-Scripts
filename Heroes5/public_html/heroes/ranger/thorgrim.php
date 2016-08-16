<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 3;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Likes na&#353;laiciu dar vaikyst&#279;je Torgrimas persik&#279;l&#279; i &#353;iaurinius Avlijos mi&#353;kus. Jis pasidar&#279; &#382;inomas visai savo &#353;aliai nepaprastu sugeb&#279;jimu gintis nuo betkokios magijos.";
   $heroe_info[speciality] = "5% suma&#382;ina burt&#371; ir magi&#353;k&#371; efekt&#371; daroma &#382;ala.
";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nykstukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "resistance|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>