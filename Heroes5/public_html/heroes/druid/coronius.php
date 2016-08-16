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
   $heroe_info[biography] = "Koronijus studijavo vien&#261; semestr&#261; Erafijos universitete.Tada suprato, kad akademinis gyvenimas jam nuobodus. Jis paliko Erafij&#261; ir i&#353;va&#382;iavo i Avlyja kur jis rado druid&#261;, kuris mok&#279; j&#303; praktikos, o ne teorijos.";
   $heroe_info[speciality] = "Stiprina &#381;udiko burto efekt&#261;.";
   $heroe_info[army] = "keliolika Kentaur&#371; ir keli Nyk&#353;tukai.";
   $heroe_info[extra] = "Burtas:&#381;udikas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "scholar|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="slayer";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>