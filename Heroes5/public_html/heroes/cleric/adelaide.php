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
   $heroe_info[biography] = "Po to, kai jos laivas sudu&#382;o &#353;tormo metu, Adelaid&#279; atsipeik&#279;jo Vori pakrant&#279;je, sniego elf&#371; gimtin&#279;je. Ji treniravosi su jais apie 20 met&#371;. Sugri&#382;usi &#303; Erafij&#261; ji suprato, kad nepra&#279;jo n&#279;kiek laiko po jos i&#353;vykimo";
   $heroe_info[speciality] = "Stiprina Ledinio &#381;iedo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "Burtas:Ledinis &#381;iedas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[1] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="ice_ring";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>