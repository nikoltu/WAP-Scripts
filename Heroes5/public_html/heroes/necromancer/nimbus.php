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
   $heroe_info[biography] = "Kai Nimb&#279; buvo ma&#382;a ji tur&#279;jo &#353;un&#303;, kuris mir&#279; nuo senatv&#279;s. Nimb&#279; pasteb&#279;jo, kad paukojus pauk&#353;t&#303; arba kokinors kita padar&#261; ji gali atgaivinti savo &#353;un&#303;. Tuo metu ji dar ne&#382;inojo, bet ji jau tyrin&#279;jo Nekromantija.";
   $heroe_info[speciality] = "+5% prie Reg&#279;jimo igu&#382;io nuo kiekvieno Reg&#279;jimo lygio";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "see|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>