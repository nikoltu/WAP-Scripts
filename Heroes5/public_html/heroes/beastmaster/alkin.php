<?php

function basic_primary_skills() {
   $basic_primary_skills[attack] = 0;
   $basic_primary_skills[defense] = 4;
   $basic_primary_skills[power] = 1;
   $basic_primary_skills[knowledge] = 1;
   return $basic_primary_skills;
}

function heroe_info() {
   $heroe_info[skills] = "Apsauga [1], Puolimas [1].";
   $heroe_info[biography] = "Karaliui Tralaksui niekada nepatiko Alkinas, bet jis dav&#279; jam armijd tur&#279;damas vilties, kad viena diena Alkina pagaliau u&#382;mu&#353;. Tai nenutiko ir Alkinas padar&#279; spindincia karjera karaliaus nepasitenkinimui.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Gorgonams ir Kovingiesiems Gorgonams jo armijoje.";
   $heroe_info[army] = "keliolika Gnol&#371; ir keli Pelki&#371; Drie&#382;ai.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "armorer|1";
   $basic_skills[1] = "offense|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "gnoll|10-20";
   $basic_army[1] = "lizardman|4-7";
   return $basic_army;
}
function basic_magic(){
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   if (($unit == "gorgon") or ($unit == "mighty_gorgon")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>