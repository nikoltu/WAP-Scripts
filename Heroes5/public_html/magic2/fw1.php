<?
if(($uunit_special=="fire_immunity") or ($uunit_special2=="fire_immunity") or ($uunit_special=="spell_immunitya") or ($uunit_special2=="spell_immunitya") or ($uunit_special=="spell_immunityb") or ($uunit_special2=="spell_immunityb") or ($uunit_special=="spell_immunity") or ($uunit_special2=="spell_immunity") or ($uunit_special=="fly") or ($uunit_special2=="fly") or ($uunit_special3=="fly") or ($uunit_special4=="fly") or ($uunit_special5=="fly")){
echo"<small>Ugnies siena atremta</small>";}
else {
$dmg=25*$user[power];
if($user[identify]=="luna"){
$dmg=$dmg+1.10;}
include_once("artifact/act/orb_of_tempstuous_fire.php");
include_once("skils/fire_magic.php");
include_once("skils/sorcery.php");
if(($uunit_special=="magic_resistance_20") or ($uunit_special2=="magic_resistance_20")){
$dmg=$dmg*0.8;}
if(($uunit_special=="magic_resistance_40") or ($uunit_special2=="magic_resistance_40")){
$dmg=$dmg*0.6;}
if(($uunit_special=="resist_85_magic_dmg") or ($uunit_special2=="resist_85_magic_dmg")){
$dmg=$dmg*0.15;}
if(($uunit_special=="resist_95_magic_dmg") or ($uunit_special2=="resist_95_magic_dmg")){
$dmg=$dmg*0.05;}
if(($uunit_special=="get_50_from_spells") or ($uunit_special2=="get_50_from_spells")){
$dmg=$dmg*0.5;}
      $kill = 0;
      if ($dmg >= $battle[health]) {
         $kill = 1;
         if ($dmg - $battle[health] >= $uunit_health) {
            $battle[health] = $battle[health] - $dmg;
            while ($battle[health] < 0) $battle[health] += $uunit_health;
            if ($battle[unit] == "wight") {
               $battle[health] = $uunit_health;
            }
            $kill = $kill + floor($dmg/$uunit_health) - 1;
         }
         else {
            $battle[health] = $battle[health] - $dmg;
         }
         $exp = floor((($battle[q_unit]-$kill)/$battle[q_unit]) * $battle[expierence]);
         $queries++;
         mysql_query("UPDATE nbattle SET q_unit=q_unit-$kill, health='$battle[health]', expierence='$exp' WHERE id='$m' LIMIT 1");
      }
      else {
         $battle[health] = $battle[health] - $dmg;
         $queries++;
         mysql_query("UPDATE nbattle SET health='$battle[health]' WHERE id='$m' LIMIT 1");
      }
      if ($kill >= $battle[q_unit]) {
         $kill = $battle[q_unit];
      }
include_once("names/units.php");
      if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
         $uunit_name = $unit_name_p3[$battle[unit]];
      }
      elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
         $uunit_name = $unit_name_s2[$battle[unit]];
      }
      else {
         $uunit_name = $unit_name_p2[$battle[unit]];
      }
echo"<small>Ugnies siena suveik&#279; prie&#353; $battle[q_unit] $uunit_name. Padar&#279; &#382;alos $dmg. Nu&#382;ud&#279; $kill.</small><br/>";
      $battle[q_unit] = $battle[q_unit] - $kill;
}

?>