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
   $heroe_info[biography] = "Septiena ken&#269;ia nuo to kas vadinoma (&#353;vaistoma magija) - i&#353; savo prie&#353;u ji i&#353;siurbia daugiau gyvyb&#279;s energijos nei ji duoda savo pavaldiniams. Kaikurie sako kad likusia energija ji pasilieka sau, tai paai&#353;kintu kod&#279;l ji nesensta.";
   $heroe_info[speciality] = "Stiprina Mirties virpesio burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "Burtas:Mirties virpesys.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="death_virp";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>