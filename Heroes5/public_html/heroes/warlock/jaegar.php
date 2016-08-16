<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Neiprasta matyti troglodit&#261; lord&#261;, dar kes&#269;iau matyti troglodit&#261; okultist&#261;. D&#382;egaras irod&#279; es&#261;s geras magas. Jis teigia, kad kasdienin&#279;s meditacijos yra jo sekm&#279;s paslaptis.";
   $heroe_info[speciality] = "Dvigubina Mistikos igud&#382;io efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371;, keli Beholderiai ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
   $basic_army[1] = "harpy|3-7";
   $basic_army[2] = "beholder|1-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>