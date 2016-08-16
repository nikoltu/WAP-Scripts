<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Vadovavimas [1], Apsauga [1].";
   $heroe_info[biography] = "Dymeris buvo beveik nu&#382;udytas, nes jo magi&#353;kos galios buvo ant tiek nevaldomos, kad jis buvo gr&#279;sm&#279; sau ir artimiesiems. Nuo to laiko Dymeris i&#353;moko kontroliuoti savo jeg&#261; ir yra daugiau nei pavojingas prie&#353;as kovoje.";
   $heroe_info[speciality] = "Stiprina Meteorit&#371; lietaus burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371;, keli Beholderiai ir kelios Harpijos.";
   $heroe_info[extra] = "Burtas:Meteorit&#371; Lietus.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "zval|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
   $basic_army[1] = "harpy|3-7";
   $basic_army[2] = "beholder|1-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="meteor_rain";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>