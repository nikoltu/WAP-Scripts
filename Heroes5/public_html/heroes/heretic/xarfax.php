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
   $heroe_info[biography] = "Ksarfaksas tarnavo Erafijos Kariuomen&#279;je, iki tol kol ji sulaik&#279; kovoje su krygan&#371; 1162m. Kryganas, pasteb&#279;jas vald&#382;ia jo viduje, (suremontavo) Ksarfaks&#261;, paversdamas ji i i&#353;tikim&#261; ir gabu pad&#279;j&#279;j&#261;.";
   $heroe_info[speciality] = "Stiprina Ugnies kamuolio burto efekt&#261;.";
   $heroe_info[army] = "keliolika Imp&#371; ir keli Pragaro &#352;unys.";
   $heroe_info[extra] = "Burtas: Ugnies kamuolys.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "leadership|1";
   $basic_skills[1] = "knowledge|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|10-20";
   $basic_army[1] = "gog|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="fireball";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>