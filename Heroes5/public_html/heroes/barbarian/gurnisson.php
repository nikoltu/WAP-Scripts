<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Yra ne&#303;prasta matyti goblin&#261;, kuris &#303;gyja tiek j&#279;g&#371;, kiek j&#371; sugeb&#279;jo &#303;gauti Gurnisonas. Jis laikomas tvirtu lyderiu.";
   $heroe_info[speciality] = "+8 Atakos ir +6 Gynybos visiems Vilkams ir Koviniams Vilkams jo armijoje.";
   $heroe_info[army] = "keliolika Vilk&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "archery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "wolf_rider|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "wolf_rider") or ($unit == "wolf_raider")) {
      $unit_info[attack] = $unit_info[attack] + 8;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>