<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 4;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], Taktika [1].";
   $heroe_info[biography] = "Pats Tyraksoras buvo vilk&#371; kari&#371; kapitonas. Galu gale jis istojo i Krevlod&#371; heroj&#371; armija kai sugeb&#279;jo atlaikyti Tatalieci&#371; ataka dviej&#371; &#353;ali&#371; pasienyje";
   $heroe_info[speciality] = "+2 Atakos ir +2 Gynybos visiems Vilkams ir Koviniams Vilkams jo armijoje.";
   $heroe_info[army] = "keliolika Vilk&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "luck|1";
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
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[defense] = $unit_info[defense] + 2;
   }
   return $unit_info;
}
?>