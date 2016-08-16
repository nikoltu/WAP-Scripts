<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Iona senai irod&#279;, kad ji galingesn&#279;, u&#382; kitus d&#382;inus, bet jos &#382;avinga asmenyb&#279; trukdo tiems, kas aptarnauja j&#261; d&#279;l jos bauginancios j&#279;gos.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems D&#382;inams ir D&#382;in&#371; Valdovams jos armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Gremlin&#371; ir keli Gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "scholar|1";
   $basic_skills[1] = "intelekt|1";
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
   if (($unit == "genie") or ($unit == "master_genie")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>