<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Klavijaus &#353;eimos balsas Deyjos teisme visada buvo stipriai vertinamas, &#352;eima tur&#279;jo nema&#382;ai &#382;emiu ir politin&#279;s itakos. Budamas vyriausiuju sunumi Klavijus buvo nusiustas tarnauti armijoje, pagal &#353;eimos tradicija. Jis tarnauja noriai ir gerai.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
  return $unit_info;
}
?>