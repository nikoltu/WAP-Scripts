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
   $heroe_info[biography] = "Jabarkas yra vyriausias Duko Borago s&#363;nus ir jis &#382;ino, kad vien&#261; dien&#261; jis valdys visas Tartaro &#382;emes. Kaip ir t&#279;vas, jis i&#353;moko surasti tiesiausi&#261; keli&#261; &#303; s&#279;km&#281;.";
   $heroe_info[speciality] = "Orkai ir Ork&#371; Vadai daro 20% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Ork&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "archery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "orc|10-15";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>