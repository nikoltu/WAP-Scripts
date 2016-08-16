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
   $heroe_info[biography] = "Adela naudojo savo &#303;gud&#382;ius tik prie&#353; mu&#353;ius. Jei jai nepavykdavo perkalb&#279;ti savo vir&#353;ininko vengti kovos, tuomet ji bentjau pa&#353;ventindavo karius. V&#279;liau ji gavo visa Baltojo Akmens pulk&#261;.";
   $heroe_info[speciality] = "Stiprina Pa&#353;ventinimo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Ietinink&#371;, keli Lankininkai ir keli Grifinai.";
   $heroe_info[extra] = "Burtas:Pa&#353;ventinimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "diplo|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-15";
   $basic_army[1] = "archer|3-7";
   $basic_army[2] = "griffin|1-3";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="bless";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>