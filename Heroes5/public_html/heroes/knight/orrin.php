<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "&#352;audymas [1], Vadovavimas [1].";
   $heroe_info[biography] = "Pirmaisiais tarnybos metais Orina apmok&#279; vienas i&#353; geriausiu Erafijos taktiku. Visi arteleristai kuriems Orinas vadovavo, labai greitai i&#353;mokdavo pataikyti i objektus kurie budavo pasl&#279;pti.";
   $heroe_info[speciality] = "&#353;audantys kariai daro 5% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[1] = "archery|1";
   $basic_skills[0] = "leadership|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[0] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>