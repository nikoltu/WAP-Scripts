<?
if(($unit_info[spec]=="fire_immunity") or ($unit_info[spec2]=="fire_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity") or ($unit_info[spec]=="fly") or ($unit_info[spec2]=="fly") or ($unit_info[spec3]=="fly") or ($unit_info[spec4]=="fly") or ($unit_info[spec5]=="fly")){
echo"<small>Ugnies siena atremta</small>";}
else {
$dmg=25*$user[power];
if($user[identify]=="luna"){
$dmg=$dmg+1.10;}
include_once("artifact/act/orb_of_tempstuous_fire.php");
include_once("skils/fire_magic.php");
include_once("skils/sorcery.php");
if(($unit_info[spec]=="magic_resistance_20") or ($unit_info[spec2]=="magic_resistance_20")){
$dmg=$dmg*0.8;}
if(($unit_info[spec]=="magic_resistance_40") or ($unit_info[spec2]=="magic_resistance_40")){
$dmg=$dmg*0.6;}
if(($unit_info[spec]=="resist_85_magic_dmg") or ($unit_info[spec2]=="resist_85_magic_dmg")){
$dmg=$dmg*0.15;}
if(($unit_info[spec]=="resist_95_magic_dmg") or ($unit_info[spec2]=="resist_95_magic_dmg")){
$dmg=$dmg*0.05;}
if(($unit_info[spec]=="get_50_from_spells") or ($unit_info[spec2]=="get_50_from_spells")){
$dmg=$dmg*0.5;}
      $kill = 0;
   if ($dmg >= $army_hp[$who]) {
      $kill = 1;
      if ($dmg - $army_hp[$who] >= $army_health[$who]) {
         $army_hp[$who] = $army_health[$who] - ($dmg - (floor($dmg/$army_health[$who]) * $army_health[$who]));
         if ($army_unit[$who] == "wight") {
            $army_hp[$who] = $army_health[$who];
         }
include_once("skils/healing.php");
         $kill = $kill + floor($dmg/$army_health[$who]) - 1;
      }   
      else {
         $army_hp[$who] = $army_health[$who] - $dmg;
      }
      $queries++;
      mysql_query("UPDATE army SET hp=$army_hp[$who], quantity=quantity-$kill WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }
   else {
      $army_hp[$who] = $army_health[$who] - $dmg;
      $queries++;
      mysql_query("UPDATE army SET hp=$army_hp[$who] WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }

   if ($kill >= $army_quantity[$who]) {
      $kill = $army_quantity[$who];
      $queries++;
      mysql_query("DELETE FROM army WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }

   if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
      $unit_name = $unit_name_p3[$battle[unit]];
   }
   elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
      $unit_name = $unit_name_s1[$battle[unit]];
   }
   else {
      $unit_name = $unit_name_p1[$battle[unit]];
   }
   if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
      $uunit_name = $unit_name_p3[$army_unit[$who]];
   }
   elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
      $uunit_name = $unit_name_s2[$army_unit[$who]];
   }
   else {
      $uunit_name = $unit_name_p2[$army_unit[$who]];
   }
echo"<small>Ugnies siena suveik&#279; prie&#353; $army_quantity[$who] $uunit_name. Padar&#279; &#382;alos $dmg. Nu&#382;ud&#279; $kill.</small><br/>";
}

?>