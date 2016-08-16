<?
include_once("names/magic.php");
$sp=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$magi'"));
if(!$sp[name]){
echo"<small>Tokio burto nemokate</small><br/>";}
elseif($magic[mp]>$user[mana]){
echo"<small>Nepakanka manos</small><br/>";}
else {
$usr=strtolower($user[username]);
mysql_query("UPDATE users SET mana=mana-$magic[mp] where username='$user[username]'");
include_once("units/$battle[unit].php");
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="fire_immunity") or ($unit_info[spec2]=="fire_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity")){
echo"<small>Burtas atremtas</small>";}
else {
$dmg=50*$user[power]+90+370;
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
      if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
         $uunit_name = $unit_name_p3[$battle[unit]];
      }
      elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
         $uunit_name = $unit_name_s2[$battle[unit]];
      }
      else {
         $uunit_name = $unit_name_p2[$battle[unit]];
      }
$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi] prie&#353; $battle[q_unit] $uunit_name. Padarei &#382;alos $dmg. Nu&#382;udei $kill.</small><br/>";
      $battle[q_unit] = $battle[q_unit] - $kill;}
include_once("artifact/act/armageddons_blade.php");

$myrm=mysql_query("select * from army where username='$usr'");
while($roz=mysql_fetch_array($myrm)){
include_once("units/$roz[unit].php");
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="fire_immunity") or ($unit_info[spec2]=="fire_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity") or ($armb[name])){
echo"<small>Burtas atremtas</small>";}
else {
include_once("names/units.php");
$dmg=50*$user[power]+90+370;
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
      if ($dmg >= $roz[hp]) {
         $kill = 1;
         if ($dmg - $roz[hp] >= $roz[hp]) {
            $roz[hp] = $roz[hp] - $dmg;
            while ($roz[hp] < 0) $roz[hp] += $roz[health];
            if ($roz[unit] == "wight") {
               $battle[hp] = $roz[health];
            }
            $kill = $kill + floor($dmg/$roz[health]) - 1;
         }
         else {
            $roz[hp] = $roz[hp] - $dmg;
         }
         $queries++;
         mysql_query("UPDATE army SET quantity=quantity-$kill WHERE username='$usr' and unit='$roz[unit]'");
      }
      else {
         $roz[hp] = $roz[hp] - $dmg;
         $queries++;
         mysql_query("UPDATE army SET hp='$battle[hp]' WHERE username='$usr' and unit='$roz[unit]'");
      }
      if ($kill >= $roz[quantity]) {
         $kill = $roz[quantity];
      }
      if (((substr($roz[quantity], strlen($roz[quantity]) - 2, 2) >= 10) and (substr($roz[quantity], strlen($roz[quantity]) - 2, 2) <= 20)) or ((substr($roz[quantity], strlen($roz[quantity]) - 1, 1) == "0"))) {
         $uuunit_name = $unit_name_p3[$roz[unit]];
      }
      elseif (substr($roz[quantity], strlen($roz[quantity]) - 1, 1) == "1") {
         $uuunit_name = $unit_name_s2[$roz[unit]];
      }
      else {
         $uuunit_name = $unit_name_p2[$roz[unit]];
      }
echo"<small>Panaudojai $magic_name[$magi] prie&#353; $roz[quantity] $uuunit_name. Padarei &#382;alos $dmg. Nu&#382;udei $kill.</small><br/>";
}}
}

?>