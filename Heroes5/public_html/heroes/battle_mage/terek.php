<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [2].";
   $heroe_info[biography] = "Terekas praleido kelerius metus dirbdamas raumen&#371; kaln&#371; saul&#279;s cirke. Jis mesdavo akmen&#371; m&#279;tymo i&#353;ukius &#382;iurovams. Vien&#261; dien&#261; jis pralaim&#279;jo ir buvo i&#353;mestas i&#353; cirko, bet &#382;mogus, kuriam jis pralaim&#279;jo, pakviet&#279; j&#303; dirbti Krevlodo armijai";
   $heroe_info[speciality] = "Padidina Pagreitinimo burto efekt&#261;.";
   $heroe_info[army] = "keliolika Goblin&#371; ir keli Vilkai.";
   $heroe_info[extra] = "Burtas:Pagreitinimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "luck|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "goblin|10-20";
   $basic_army[1] = "wolf_rider|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="haste";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>