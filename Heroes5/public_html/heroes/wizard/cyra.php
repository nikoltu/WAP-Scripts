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
   $heroe_info[biography]="Kyra i&#353; prad&#382;iu siek&#279; mokytis magijos, kad gal&#279;tu mesti meil&#279;s kerus ant vyru, jog priverstu juos j&#261; myl&#279;ti. Ji met&#279; t&#261; svajone, taciau, ji suprato, kad ji turi tikrus misti&#353;kus talentus, kurie gali buti geriau panaudoti.";
   $heroe_info[speciality] = "Padidina Pagreitinimo burto efekt&#261;";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "Burtas: Pagreitinimas.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="haste";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "diplo|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>