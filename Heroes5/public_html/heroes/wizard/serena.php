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
   $heroe_info[biography]="Serena vos neu&#382;simu&#353;&#279; savo pirmuoju u&#382;keikimu. Ji id&#279;jo i ji tiek daug magi&#353;kos energijos, kad netgi magas kaimyniniame mieste pajuto. Jis i&#353;gelbejo Serena ir ived&#279; i magu gildija, kad jinai i&#353;moktu apsiginti nuo savo pacios energijos.";
   $heroe_info[speciality] = "Padidina Reg&#279;jimo igud&#382;io veiksminguma";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "Burtas: Burtu panaikinimas.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="dispel";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "see|1";
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