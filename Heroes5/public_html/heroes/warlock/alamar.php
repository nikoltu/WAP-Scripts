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
   $heroe_info[biography] = "Alamaras tarnavo Archibaldui Ironfistui ip&#279;dinyst&#279;s karuose. Po Archibaldo pralaim&#279;jimo jam vos pavyko i&#353;gyventi ir pab&#279;gti i&#353; Erafijos. &#352;iuo metu jis gyvena Nigone kur jis slapta tarnauja po&#382;emi&#371; lordams.";
   $heroe_info[speciality] = "Stiprina Reanimacijos burto efekt&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371; ir kelios Harpijos.";
   $heroe_info[extra] = "Burtas:Reanimacija.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "scholar|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
   $basic_army[1] = "harpy|3-7";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="reanim";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>