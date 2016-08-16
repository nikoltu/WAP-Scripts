<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 0;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 3;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Ismintis [1], Mistika [1].";
   $heroe_info[biography]="Halonas buvo gan gerbiamas Enroto herojus. Bet jam pasidar&#279; taip liudna po s&#279;kmingu karu, kad jis i&#353;keliavo i&#353;tirti pasaulio. Nesenai jis prisiek&#279; vadovauti Brakados armijai tik&#279;damasis, kad pagaliau ras saves verta i&#353;&#353;uki.";
   $heroe_info[speciality] = "Pra&#279;jus dienai susigra&#382;ina 2 manos ta&#353;kais daugiau";
   $heroe_info[army] = "keliasde&#353;imt Gremlin&#371; ir keli gargoilai.";
   $heroe_info[extra] = "Burtas: Akmenin&#279; oda;.";
   return $heroe_info;
}

function basic_magic(){
$basic_magic[0]="stone_oda";
return $basic_magic;
}
function basic_skills() {
   $basic_skills[0] = "knowledge|1";
  $basic_skills[1] = "mistic|1";
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