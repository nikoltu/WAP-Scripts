<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Gunaras is prad&#382;i&#371; tarnavo kaip skautas Po&#382;eminio kal&#279;jimo Valdovams, paskui kaip gidas ir asmens sargybinis ivairiems auk&#353;tiems pareigunams, kol jam suteik&#279; armija tarp nelygi&#371; Nigono tuneliu. Ko jam truksta smegenyse, tai kompensuoja instinktas.";
   $heroe_info[speciality] = "Leid&#382;ia i mu&#353;i pasiimti viena skirtinga kari&#371; ru&#353;imi daugiau.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "luck|1";
   $basic_skills[1] = "strategy|1";
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