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
   $heroe_info[biography] = "Keleta paskutiniuju metu Sylvija buvo pirat&#279;. Paskui ji suprato, kad toks gyvenimas ne jei. Ji prad&#279;jo nauja gyvenima Erafijos karyn&#279;se paj&#279;gose. Ir dabar ji tarnauja kranto patrulyje su tokiais pat pl&#279;&#353;ikais kokia ji buvo ank&#353;ciau.";
   $heroe_info[speciality] = "+5% prie Navigacijos igu&#382;io nuo kiekvieno Navigacijos lygio.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "navigace|1";
   $basic_skills[1] = "leadership|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[1] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>