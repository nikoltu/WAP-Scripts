<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 2;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Beveik keturis am&#382;ius atgal Vokialas vald&#279; nuosava &#353;ali, bet laikui b&#279;gant jam nusibodo rutinin&#279;s atsakomyb&#279;s. Galu gale jis paliko visk&#261; tam, kad v&#279;l gal&#279;tu gyventi gyvenim&#261; piln&#261; nuotyki&#371;. Jis yra senas net tarp vampyr&#371;.";
   $heroe_info[speciality] = "+4 Atakos ir +4 Gynybos visiems Vampyrams ir Vampyr&#371; Lordams jo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Skelet&#371; ir keli Negyv&#279;liai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "necromanc|1";
   $basic_skills[1] = "artilery|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "skeleton|20-30";
   $basic_army[1] = "walking_dead|3-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "vampire") or ($unit == "vampire_lord")) {
      $unit_info[attack] = $unit_info[attack] + 4;
      $unit_info[defense] = $unit_info[defense] + 4;
   }
   return $unit_info;
}
?>