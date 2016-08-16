<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 3;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Taktika [1], Mistika [1].";
   $heroe_info[biography] = "Kaltas sugeba lengvai i&#353;studijuoti prie&#353;ininko veiksmus,tod&#279;l ir buvo pakviestas tarnauti Konfliukse, kur jis prad&#279;jo mokytis daug ivairi&#371; dalyk&#371;.";
   $heroe_info[speciality] = "+5 atakos ir +5 gynybos visiems Vandens ir Ledo Elementalams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Vandens Elementalai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "luck|1";
   $basic_skills[1] = "mistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pixie|20-30";
   $basic_army[1] = "water_elemental|5-10";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "water_elemental") or ($unit == "ice_elemental")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>