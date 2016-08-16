<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 1;
   $basic_primary_skills[defense] = 1;
   $basic_primary_skills[power] = 2;
   $basic_primary_skills[knowledge] = 2;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Puolimas [1], &#352;audymas [1].";
   $heroe_info[biography] = "Sakoma, kad Fafneris tapo d&#382;inu dar prie&#353; tukstantmeti. Kai Fafneri surado d&#382;ino buteli, jis papra&#353;&#279;, kad ji padarytu galingu d&#382;inu ir &#353;i jo nor&#261; i&#353;pild&#279;. Po to kai jis tapo d&#382;inu jis visa gyvenim&#261; aptarnavo Brakados lyderius.";
   $heroe_info[speciality] = "+6 Atakos ir +6 Gynybos visoms Nagoms ir Nag&#371; Karalien&#279;ms jo armijoje.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Gremlin&#371; ir keli Gargoilai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "scholar|1";
   $basic_skills[1] = "resistance|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gremlin|20-30";
   $basic_army[1] = "stone_gargoyle|3-5";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "naga") or ($unit == "naga_queen")) {
      $unit_info[attack] = $unit_info[attack] + 6;
      $unit_info[defense] = $unit_info[defense] + 6;
   }
   return $unit_info;
}
?>