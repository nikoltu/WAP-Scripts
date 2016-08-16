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
   $heroe_info[biography] = "Prie&#353; leisdamas Andrai, paprastai moteriai, vadovauti vienai i&#353; jo armij&#371; Karalius Tralaksas liep&#279; jai pereiti kelis i&#353;bandymus kurie patikrintu jos &#382;inias. Ji n&#279;karto neapsiriko, tod&#279;l karaliui neliko kitos i&#353;eities kaip priimti j&#261;.";
   $heroe_info[speciality] = "+5% prie Intelekto igu&#382;io nuo kiekvieno Intelekto lygio.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "intelekt|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>