<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "&#352;nekama, kad Oktavija gal&#279;jo nukniaukti auksa toli nuo miegancio drakono, bet ji aukso daug neturi, kadangi ji pastoviai leid&#382;ia savo turta ka&#382;kam, kas kutena jos vaizduote.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliolika Imp&#371; ir keli Gogai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "imp|10-25";
   $basic_army[1] = "gog|3-10";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>