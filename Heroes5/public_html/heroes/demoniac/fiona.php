<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 2;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Fiona buvo cirko gyvun&#371; trener&#279; rytin&#279;je Erafijoje pries tai kai velniai j&#261; pagrob&#279;. Ji greitai irod&#279; jiems, kad jos gyvun&#371; treniravimas tinkamas visada temperamentingiems pragaro &#353;unims, ir ji buvo nedelsiant priimta i Eofolio kariuomene.";
   $heroe_info[speciality] = "+3 Atakos ir +3 Gynybos visiems Pragaro &#352;unims ir Cerberiams jos armijoje.";
   $heroe_info[army] = "keliolika Gog&#371; ir keli Pragaro &#352;uns.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "zval|2";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gog|10-20";
   $basic_army[1] = "hell_hound|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "hell_hound") or ($unit == "cerberi")) {
      $unit_info[attack] = $unit_info[attack] + 3;
      $unit_info[defense] = $unit_info[defense] + 3;
   }
   return $unit_info;
}
?>