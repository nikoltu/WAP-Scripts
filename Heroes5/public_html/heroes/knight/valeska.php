<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "&#352;audymas [1], Vadovavimas [1].";
   $heroe_info[biography] = "Valeska tarnaudama Erafijos armijoje tapo garsia Arbaletinink&#371; vadove. Dabar ji ne tik puikiai vadovauja savo armijai, bet ir papildomai treniruoja savo Arbaletininkus.";
   $heroe_info[speciality] = "Lankininkai ir Arbaletininkai daro 15% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Lankinink&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[1] = "archery|1";
   $basic_skills[0] = "leadership|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "archer|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>