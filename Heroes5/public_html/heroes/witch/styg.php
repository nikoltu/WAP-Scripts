<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Vienuolikta Tatalijos karaliaus Tralakso dukt&#279;, Styg&#279; tapo ragana, nes ji netur&#279;jo &#353;ans&#371; tapti Tatalijos ip&#279;dine su tiek broli&#371; ir seser&#371;";
   $heroe_info[speciality] = "+5% prie Stebuklingumo igu&#382;io nuo kiekvieno Stebuklingumo lygio.";
   $heroe_info[army] = "keliasde&#353;imt Gnol&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "sorcery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>