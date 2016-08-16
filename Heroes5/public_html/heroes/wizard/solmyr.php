<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ismintis [2].";
   $heroe_info[biography]="Solmyras buvo iviliotas i d&#382;ino buteli, kuriame i&#353;buvo daugiau nei tukstantmeti, ir buvo labai d&#279;kingas &#382;mogui, kuris pagaliau i&#382;laisvino ji ir Solmyras atsitiktinai prisiek&#279; aptarnauti vyra visa lykusi jo gyvenima. O tas vyras yra Gavinas Magnusas, nemirtingas Brakados Auk&#353;tum&#371; vadovas.";
   $heroe_info[speciality] = "Padidina Grandininio &#382;aibo burto stipruma";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371;, keli Gargoilai ir keli Akmeniniai Golemai.";
   $heroe_info[extra] = "Burtas: Grandininis &#382;aibas.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="chain_lightning";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "sorcery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   $basic_army[2] = "stone_golem|3-5";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>