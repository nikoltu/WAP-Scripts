<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Mokslo Zmogus [1], &#381;emes Magija [1].";
   $heroe_info[biography] = "Gimusia skurde Lebet&#279;s tevai buvo paversti vergais per Restoracijos karus. Apsaugota dendroid&#371; ji buvo nune&#353;ta i j&#371; buveine Avlijoje.Jos &#382;em&#279;s j&#279;gos buvo i&#353;treniruotos greitai. Kai ji buvo pa&#353;aukta tarnybai i Konfliuks&#261;, ji sutiko n&#279; nedv&#279;jodama.";
   $heroe_info[speciality] = "Stiprina akmenin&#279;s odos burto poveik&#303;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas:Akmenin&#279; Oda.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "earth_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="stone_oda";
return $basic_magic;
}

function basic_army() {
   $basic_army[0] = "pixie|25-30";
   $basic_army[1] = "air_elemental|3-7";
   return $basic_army;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>