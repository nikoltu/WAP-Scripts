<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ismintis [1], Intelektas [1].";
   $heroe_info[biography]="Nuostabu tai, kad Darem&#279; dar gyva. Jos gyvenimo kredo: eisiu kur noriu, darysiu ka noriu. Ji da&#382;nai isiveldavo i tokias situacijas i&#353; kuriu ji nebutu i&#353;sikap&#353;ciusi gyva ir visgi ji rasdavo i&#353;eiti.";
   $heroe_info[speciality] = "Padidina S&#279;km&#279;s burto veiksminguma";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "Burtas: S&#279;km&#279;.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="luck";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1]="intelekt|1";
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