<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], &#352;audymas [1].";
   $heroe_info[biography] = "Keista, ta&#269;iau Erafijos &#382;mon&#279;ms jis tapo &#382;inomas kaip herojus, pad&#279;j&#281;s i&#353;gelb&#279;ti svarbius ra&#353;tus. Nors tai gal ir t&#279;ra gandai, bet Korbakas savo dr&#261;s&#261; ne kart&#261; parod&#279; tarnaudamas Tatalijos armijai.";
   $heroe_info[speciality] = "Pelki&#371; Drie&#382;ai ir Kariai Drie&#382;ai daro 15% daugiau &#382;alos.";
   $heroe_info[army] = "keliolika Pelki&#371; Drie&#382;&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "archery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "lizardman|10-20";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>