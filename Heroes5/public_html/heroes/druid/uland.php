<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Ulandas praleido daug laiko budamas karo mediku, prie&#353; tapdamas druidu, bet pamokos, kurias jis i&#353;moko mu&#353;yje, pavert&#353; ji nuostabiu lyderiu.";
   $heroe_info[speciality] = "Stiprina Gydimo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "Burtas:Gydymas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "balistic|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="healing";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>