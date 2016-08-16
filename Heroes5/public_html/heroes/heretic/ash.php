<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "A&#353;k&#279;ja gavo jos vard&#261; per pradine Enroto ataka. Jos paj&#279;gos sugeb&#279;jo ivilioti i spastus kelis tuzinus elf&#371; dideliame mediniame forte, kuri A&#353;k&#279;ja susprogdino su savo galingais burtais, kurie visa medinio forto struktur&#261; apdenge pelenais.";
   $heroe_info[speciality] = "Stiprina Kraujo tro&#353;kulio burto efekt&#261;.";
   $heroe_info[army] = "keliolika Imp&#371; ir keli Pragaro &#352;unys.";
   $heroe_info[extra] = "Burtas: Kraujo tro&#353;kulys.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "see|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|10-20";
   $basic_army[1] = "hell_hound|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="bloodlust";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>