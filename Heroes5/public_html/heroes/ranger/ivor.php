<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 3;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "&#352;audymas [1], Puolimas [1].";
   $heroe_info[biography] = "Ivoras tur&#279;t&#371; d&#382;iaugtis vis dar es&#261;s gyvas, nes jo istorija gal&#279;jo jau baigtis. Jis yra didelis kar&#353;tako&#353;is ir da&#382;nai neapgalvotai puola, tad yra tik per plauk&#261; nuo pra&#382;&#363;ties.";
   $heroe_info[speciality] = "+8 Atakos visiems Elfams ir Auksiniams Elfams jo armijoje.";
   $heroe_info[army] = "keliolika Elf&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "archery|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_magic(){
return $basic_magic;
}
function basic_army() {
   $basic_army[0] = "elf|10-15";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "elf") or ($unit == "grand_elf")) {
      $unit_info[attack] = $unit_info[attack] + 8;
   }
   return $unit_info;
}
?>