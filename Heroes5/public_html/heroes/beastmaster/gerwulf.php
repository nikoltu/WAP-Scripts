<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], &#352;audymas [1].";
   $heroe_info[biography] = "Gervulfas labiausiai i&#353;laik&#281;s &#382;mogi&#353;k&#261;j&#261; prigimt&#303; i&#353; med&#382;iotoj&#371;. Tad jis vadovaujasi savo protu ir apvogin&#279;damas gyvenvietes susirenka papildom&#371; pinig&#371;.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Gnol&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "archery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|20-30";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>