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
   $heroe_info[biography] = "Geonas yra geras okultistas, d&#279;l to, kad jis moka isibrauti &#303; oponent&#371; protus, skaityti mintis, kai jie pasiruo&#353;e &#353;auti burt&#261;, ir daugum&#261; atvej&#371; jis tuopa&#269;iu i&#353;moksta to burto.";
   $heroe_info[speciality] = "+5% prie Reg&#279;jimo igu&#382;io nuo kiekvieno Reg&#279;jimo lygio.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "see|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
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