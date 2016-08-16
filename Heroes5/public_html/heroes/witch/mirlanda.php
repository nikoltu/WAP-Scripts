<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Mirlanda praleido did&#382;i&#261;j&#261; savo jaunatv&#279;s laiko dal&#303; &#382;aisdama su tamsiais ritualais prie&#353; suprasdama, kad toks kelias da&#382;niausiai veda prie saves susinaikinimo. Ji i&#353;moko eiti linija tarp g&#279;rio ir blogio, visada &#382;inodama, kad viena pus&#279; nei&#353;augs stipriau u&#382; kita.";
   $heroe_info[speciality] = "Stiprina Silpninimo burto efekt&#261;.";
   $heroe_info[army] = "keliasde&#353;imt Gnol&#371;.";
   $heroe_info[extra] = "Burtas:Silpninimas.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|20-30";
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