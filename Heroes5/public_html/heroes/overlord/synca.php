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
   $heroe_info[biography] = "Synka i&#353; prad&#382;i&#371; gyveno ne po&#382;emiuose, ir nors ji i&#353;tikimai aptarnauja Po&#353;eminio kal&#279;jimo Valdovus, ji i&#353; tikruju teikia pirmenybe dienos &#353;viesai.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Mantikorams ir Skorpikorams jos armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-40";
   $basic_army[1] = "harpy|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "manticore") or ($unit == "scorpicore")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>