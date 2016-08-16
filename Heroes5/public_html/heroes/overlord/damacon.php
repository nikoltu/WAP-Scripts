<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Tuo metu, kai Damaconas visada budavo truputi niekam tikes, net tarp kitu troglodit&#371;, jis galedavo u&#382;uosti auks&#261; beveik be bandymo. Jis paaukos auksa bet kam, kas leis jam vadovauti.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-35";
   $basic_army[1] = "harpy|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>