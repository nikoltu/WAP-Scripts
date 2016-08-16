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
   $heroe_info[biography] = "Sanija visada spar&#269;iai mok&#279;si, greit aplenkdama kitus.Ji turi naturali&#261; burt&#371; mokymosi savybe, kartais ji perpranta burt&#261; tik pama&#269;iusi kaip kiti juo naudojasi.";
   $heroe_info[speciality] = "+5% prie Reg&#279;jimo igu&#382;io nuo kiekvieno Reg&#279;jimo lygio.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "see|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[1] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>