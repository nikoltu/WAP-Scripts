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
   $heroe_info[biography] = "Aislina visada m&#279;go &#382;em&#279;s jutima labiau nei dangaus. Daug kas tiki, kad ji gali siurbti gyvybe i&#353; &#382;em&#279;s tiesiog liesdama j&#261;.";
   $heroe_info[speciality] = "Stiprina Meteorit&#371; lietaus burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;, keli Negyv&#279;liai ir kelios &#352;m&#279;klos.";
   $heroe_info[extra] = "Burtas:Meteorit&#371; Lietus.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   $basic_army[2] = "wight|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="meteor_rain";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>