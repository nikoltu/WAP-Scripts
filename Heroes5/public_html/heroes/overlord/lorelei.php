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
   $heroe_info[biography] = "Kai Lorel&#279; buvo vaikas, ji vaik&#353;ciodavo toli nuo nam&#371;, ir ji syki pasiklido urvuose. Ja surado ir uzaugino harpijos raganos, ir galu gale prad&#279;jo tarnauti po&#382;emiu kal&#279;jimu valdovams. Ji neprisimena savo tikr&#371;j&#371; giminaici&#371;.";
   $heroe_info[speciality] = "+2 Atakos ir +2 Gynybos visoms Harpijoms ir Harpij&#371; Valdov&#279;ms jos armijoje.";
   $heroe_info[army] = "keliolika Harpij&#371;";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "zval|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "harpy|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "harpy") or ($unit == "harpy_hag")) {
      $unit_info[attack] = $unit_info[attack] + 2;
      $unit_info[defense] = $unit_info[defense] + 2;
   }
   return $unit_info;
}
?>
