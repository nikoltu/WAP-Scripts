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
   $heroe_info[biography] = "Sefinr&#279; teig&#279;, kad ji yra neteis&#279;ta karaliaus Gryfonherto dukt&#279;. Jo neigimas maitina jos neapykantos Erafijos sostui ugn&#303;, kur&#303;  ji planuoja u&#382;imti. Istojusi i okultistu gretas ji tapo pirm&#261;j&#261; ir vienintele moterimi kuri gavo &#353;&#303; post&#261;";
   $heroe_info[speciality] = "+1 Krystalas per dien&#261;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371;.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "intelekt|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-45";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>