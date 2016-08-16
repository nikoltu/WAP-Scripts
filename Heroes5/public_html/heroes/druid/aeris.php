<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Aeris yra vienas geriausi&#371; gyvun&#371; jaukintoj&#371; visoje Avlijoje. Jis gali pajusti idealias poras tarp elf&#371; ir pegas&#371; kas pavert&#279; ji vienu geid&#382;iamiausiu druidu.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Pegasams ir Sidabriniams Pegasams jo armijoje.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "zval|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "pegasus") or ($unit == "silver_pegasus")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>