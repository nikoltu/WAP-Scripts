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
   $heroe_info[biography] = "Gal Melodija n&#279;ra stipriausi&#261; druid&#279; Avlijos teritorijoje, bet ji tikrai s&#279;kmingiausi&#261;. Net kai prie&#353;u daug kart&#371; daugiau, nei jos kari&#371; jai vistiek pavygdavo pasiekti nuostabias pergales. Kariai noriai pasisiulo jai tarnauti.";
   $heroe_info[speciality] = "Stiprina S&#279;km&#279;s burto efekt&#261;.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "Burtas:S&#279;km&#279;.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "tactik|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="luck";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>