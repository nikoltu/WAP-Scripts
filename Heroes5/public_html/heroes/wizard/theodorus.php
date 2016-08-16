<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ismintis [2].";
   $heroe_info[biography]="Teodoras yra vienas is geriausi&#371; burtinink&#371;, kada nors matyt&#371; Brakadoje. Tod&#279;l, nepatyre magai da&#382;nai siekia pasimokyti i&#353; jo. Teodoras prad&#279;jo mokyti kitus magus, kad jie gal&#279;tu pasisemti i&#353; jo patirties.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Magams ir Raudoniesiems Magams jo armijoje.";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_magic(){
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "balistic|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "magi") or ($unit == "arch_magi")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>