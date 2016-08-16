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
   $heroe_info[biography] = "Mefala prad&#279;jo treniruote Erafijos armijos gretose ir genealiai mok&#279;jo i&#353;naudoti teritorijos galimybes armijos vedime i mu&#353;i. Prie&#353; keleta met&#371; ji atsistatydino pasirinkusi tarp Erafijos miesto suirut&#279;s ir Avlijos ramyb&#279;s.";
   $heroe_info[speciality] = "5% suma&#382;ina prie&#353;ininko daroma &#382;ala.
";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nykstukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "armorer|1";
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