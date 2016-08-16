<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Merista tur&#279;jo buti paprasta kaimo gyditoja, bet kai i&#353;ai&#353;k&#279;jo, kad jos galios gerokai didesn&#279;s nei prireiktu buti kaimo gyditoja, j&#261; i&#353;siunt&#279; tarnauti Tatalijai";
   $heroe_info[speciality] = "Stiprina Akmenin&#279;s odos burto efekt&#261;.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "Burtas:Akmenin&#279; Oda.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="stone_oda";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>