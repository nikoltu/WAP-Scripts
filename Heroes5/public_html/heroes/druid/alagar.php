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
   $heroe_info[biography] = "Sklando gandai, kad Alagaras yra ka&#382;kada gyvenes pas sniego elfus. Jo vandens elemento, ypa&#269; ledo kontroliavimas yra legendinis. Jis tarnavo Avijoje dar prie&#353; Krygano invazij&#261;.";
   $heroe_info[speciality] = "Stiprina Ledin&#279;s Str&#279;l&#279;s burto efekt&#261;.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "Burtas Ledin&#279; Str&#279;l&#279;.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "sorcery|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="ice_arrow";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>