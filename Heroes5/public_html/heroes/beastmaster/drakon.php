<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], Vadovavimas [1].";
   $heroe_info[biography] = "Drekonas buvo geriausias karys savo kaime, o v&#279;liau ir visame aplinkiniame regione, tad buvo pakviestas &#303; pagrindines Tatalijos armijos gretas. Jo charizmati&#353;kas bendravimas (bent tarp Gnol&#371;) padeda jo armijai susivienyti ir tapti stipresnei.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visiems Gnolams ir Pelki&#371; Gnolams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt Gnol&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "leadership|1";
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
   if (($unit == "gnoll") or ($unit == "gnoll_marauder")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>