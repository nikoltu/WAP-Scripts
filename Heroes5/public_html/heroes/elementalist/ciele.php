<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 3;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Mokslo &#381;mogus [1], Vandens Magija [1].";
   $heroe_info[biography] = "Augant prie vandenyno juosian&#269;io Avlij&#261; Sil&#279; visada pasinerdavo &#303; senovinius vandenys.V&#279;liau ji keliavo per &#382;emes, kad surasti savo pa&#353;aukim&#261;. Ji ji atrado Konfliukse.";
   $heroe_info[speciality] = "Stiprina Magi&#353;kos Str&#279;l&#279;s burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt F&#279;j&#371; ir keli Oro Elementalai.";
   $heroe_info[extra] = "Burtas Magi&#353;ka Str&#279;l&#279;.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "water_magic|1";
   return $basic_skills;
}
function basic_magic(){
$basic_magic[0]="magic_arrow";
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