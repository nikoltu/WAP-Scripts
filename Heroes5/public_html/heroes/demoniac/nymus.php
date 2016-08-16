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
   $heroe_info[biography] = "Nym&#279; buvo atsakinga u&#382; mokomuosius Pragaro Pri&#382;iur&#279;tojus ir Pragaro Lordus kovai su Erafija. Jos koviniai igud&#382;iai beveik privert&#279; Eofoli laim&#279;ti kova, bet problemos su Krygan&#371; ir Po&#382;eminio kal&#279;jimo Valdov&#371; atne&#353;&#279; pradine kampanija ankstyvam galui.";
   $heroe_info[speciality] = "+5 Atakos ir +5 Gynybos visiems Pragaro Pri&#382;iur&#279;tojams ir Pragaro Lordams jos armijoje.";
   $heroe_info[army] = "keliolika Gog&#371; ir keli Pragaro &#352;unys.";
   $heroe_info[extra] = "nieko.";
   return $heroe_info;
}

function basic_skills() {
   $basic_skills[0] = "offense|2";
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
   if (($unit == "pit_fiend") or ($unit == "pit_lord")) {
      $unit_info[attack] = $unit_info[attack] + 5;
      $unit_info[defense] = $unit_info[defense] + 5;
   }
   return $unit_info;
}
?>