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
   $heroe_info[biography] = "Atrodo, Ksyronas m&#279;gsta ugni labiau negu kiti efrytai. Ksyrono m&#279;gstamiausi dalykai susije su ugnimi ir lava.";
   $heroe_info[speciality] = "Stiprina Pragaro burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "Burtas: Pragaras.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "scholar|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|20-30";
   $basic_army[1] = "gog|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="inferno";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>