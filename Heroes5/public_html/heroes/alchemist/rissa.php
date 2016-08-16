<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [2].";
   $heroe_info[biography] = "Risa buvo pirma Alchemik&#279;, kuri patobulino men&#261; paversti nenaudingus mink&#353;tus metalus i puodus. Nors dabar ji komanduoja savai kariuomenei, ji did&#382;i&#261;j&#261; savo laisvalaikio dali, praleid&#382;ia bandymams su kitomis med&#382;iagomis.";
   $heroe_info[speciality] = "+1 Puodas per dien&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Gremlin&#371; ir keli Gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "mistic|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>
