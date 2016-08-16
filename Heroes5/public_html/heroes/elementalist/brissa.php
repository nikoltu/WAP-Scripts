<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ataka [1], Mokslo Zmogus [1].";
   $heroe_info[biography] = "Jauna d&#382;in&#279; Bris&#279; &#303;&#382;eng&#279; &#303; Restoracijos kar&#261; nebaigusi savo treniruo&#261;i&#371;. Ko ji neteko treniruot&#279;se tas jai at&#279;jo su patirtimi.";
   $heroe_info[speciality] = "Padidina Pagreitinimo burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas:Pagreitinimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "air_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="haste";
return $basic_magic;
}

function basic_army() {
   $basic_army[0] = "pixie|25-30";
   $basic_army[1] = "air_elemental|3-7";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>