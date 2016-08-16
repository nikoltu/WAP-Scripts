<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Olema praleido visa savo gyvenim&#261; Eofolije, bet kai Kryganas atvyko, Olema ikalb&#279;jo juos, kad jei leistu vadaovauti armijai ir duotu jai &#382;em&#279;s, ir nuo to laiko irod&#279; jog ji puikiai vadovauja.";
   $heroe_info[speciality] = "Stiprina Silpninimo burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "Burtas:Silpninimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "balistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-30";
   $basic_army[1] = "gog|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="weaknes";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>