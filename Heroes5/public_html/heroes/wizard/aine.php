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
   $heroe_info[biography]="Ain&#279; gyveno Brakadoje ilgiau, nei daugelis atsimena, ir kaip sakoma, yra viena i&#353; turtingiausi&#371; Heroj&#371; &#382;em&#279;je. Ji turi pasl&#279;pta lobi. Ji aukoja stambias pinig&#371; sumas nor&#279;dama pagauti betkuri kuris j&#261; pradeda persekioti.";
   $heroe_info[speciality] = "Papildomi 200 aukso per dien&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_magic(){
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1]="scholar|1";
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