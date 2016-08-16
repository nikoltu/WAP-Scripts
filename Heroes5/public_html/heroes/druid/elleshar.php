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
   $heroe_info[biography] = "Ele&#353;aras yra pats protingiausias magijos mokinys visoje Avlijoje. Jeigu jis taip ir toliau mokysis tai uz keli&#371; de&#353;imntmeci&#371; jis taps jauniausi&#353; druidu patekusiu &#303; senoli&#353; rat&#261;.";
   $heroe_info[speciality] = "+5% prie Intelekto igu&#382;io nuo kiekvieno Intelekto lygio.";
   $heroe_info[army] = "keliolika Kentaur&#371;, keli Nyk&#353;tukai ir keli Elfai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "intelekt|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "centaur|10-20";
   $basic_army[1] = "dwarf|3-5";
   $basic_army[2] = "elf|2-4";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>