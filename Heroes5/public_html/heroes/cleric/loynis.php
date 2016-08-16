<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Loinis visada tik&#279;jo, kad fizinis smurtas n&#279;ra butinas kai galima pasinaudoti magija ir malda. Keista, bet jam tai pavyko ir dabar jis yra s&#279;kmingas, nors neiprastas, lyderis.";
   $heroe_info[speciality] = "Stiprina Maldos burto efekt&#261;.";
   $heroe_info[army] = "keliolika Ietinink&#371;.";
   $heroe_info[extra] = "Burtas:Malda.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="malda";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>