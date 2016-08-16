<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ismintis [2].";
   $heroe_info[biography]="Astralas atvyko i Erafija ma&#382;daug prie&#353; 10 metu ir i&#353;kart buvo priimtas i Brakados magu gildija. Jo greitas kilimas gildijoje vert&#279; kaikuriuos manyti, kad &#353;ito jis pasiek&#279; tik magi&#353;ku budu.";
   $heroe_info[speciality] = "Padidina Hipnoz&#279;s burto stipruma";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "Burtas: Hipnoz&#279;.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="hipnoze";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|2";
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