<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Kai Rosik&#279; buvo vaiku ji susirgo nei&#353;gydoma liga kurios negal&#279;jo pagyditi, net kaimo senoliai. Niekas nesitik&#279;jo, kad ji i&#353;gyvens, bet ji i&#353;gyveno. &#352;iandien ji sako, kad butent d&#279;l ligos ji gavo savo magi&#353;kas galias.";
   $heroe_info[speciality] = "Dvigubina Mistikos igud&#382;io efekt&#261;.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>