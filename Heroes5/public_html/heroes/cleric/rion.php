<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Rionas dirbo karo mediku Erafijos paj&#279;gose, bet irod&#279; savo j&#279;g&#261;, kai jo kapitonas buvo papjautas Krygano ord&#371;. Rionas sugeb&#279;jo manevruoti pakankamai ilgai iki pastiprinimo atvykimo";
   $heroe_info[speciality] = "+5% prie Gydymo igu&#382;io nuo kiekvieno Gydymo lygio";
   $heroe_info[army] = "keliasde&#353;imt Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "healing|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|20-30";
   $basic_army[1] = "archer|3-4";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>