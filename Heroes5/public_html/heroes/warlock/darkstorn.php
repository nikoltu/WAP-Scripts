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
   $heroe_info[biography] = "Darkstornas met&#279; i&#353;ukius visiems Nigono kariams slap&#269;ia naudodamasis magija, isitikindamas tuo, kad jis laim&#279;s kekviena dvikov&#261;. Kai jis u&#382;&#279;m&#279; svarb&#371; post&#261;, jis pagaliau atskleid&#279; savo tikrasias galias. Nuo to laiko niekas neabejojo jo j&#279;gomis.";
   $heroe_info[speciality] = "Stiprina akmenin&#279;s odos burto poveik&#303;.";
   $heroe_info[army] = "kelia&#353;de&#353;imt Troglodit&#371;, keli Beholderiai ir kelios Harpijos.";
   $heroe_info[extra] = "Burtas:Akmenin&#279; oda.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "knowledge|1";
   $basic_skills[1] = "learning|1";
   return $basic_skills;
}

function basic_army() {
   $basic_army[0] = "troglodyte|20-30";
   $basic_army[1] = "harpy|3-7";
   $basic_army[2] = "beholder|1-5";
   return $basic_army;
}
function basic_magic(){
$basic_magic[0]="stone_oda";
return $basic_magic;
}

function buy_unit($unit, $unit_info) {
   return $unit_info;
}
?>