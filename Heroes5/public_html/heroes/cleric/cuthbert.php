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
   $heroe_info[biography] = "Budamas jaunuoliu Kubertas m&#279;gavosi tamsi&#261;j&#261; magija, bet kai jo &#382;mona mir&#279;, d&#279;l pral&#279;kusio pro &#353;al&#303; burto, jis pasikeit&#279; &#303; ger&#261;j&#261; puse ir niekados neapgailestavo. Jo tamsiosios magijos &#382;inios duoda jam prana&#353;umo kurio neturi niekas kitas.";
   $heroe_info[speciality] = "Stiprina Silpninimo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Ietinink&#371; ir keli Lankininkai.";
   $heroe_info[extra] = "Burtas:Silpninimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "estates|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "pikeman|10-20";
   $basic_army[1] = "archer|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="weaknes";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>