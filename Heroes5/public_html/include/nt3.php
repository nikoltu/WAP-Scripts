<?
include_once("units/$to[unit].php");
include_once("core/my_army.php");
$jop=$total_units+1;
   $who = mt_rand(1, $jop)-1;
$war=mysql_fetch_array(mysql_query("SELECT hp FROM war where user='$user[username]' and machine='catapulta'"));
if(!$war[hp]){
$who=0;}


if($who>$total_units-1){
   $dmg = mt_rand($unit_info[min] * $to[q_unit], $unit_info[max] *  $to[q_unit]);
$dmg=$dmg/10;
mysql_query("UPDATE war SET hp=hp-$dmg where user='$user[username]' and machine='catapulta'");
include_once("names/units.php");
   if (((substr($to[q_unit], strlen($to[q_unit]) - 2, 2) >= 10) and (substr($to[q_unit], strlen($to[q_unit]) - 2, 2) <= 20)) or ((substr($to[q_unit], strlen($to[q_unit]) - 1, 1) == "0"))) {
      $unit_name = $unit_name_p3[$to[unit]];
   }
   elseif (substr($to[q_unit], strlen($to[q_unit]) - 1, 1) == "1") {
      $unit_name = $unit_name_s1[$to[unit]];
   }
   else {
      $unit_name = $unit_name_p1[$to[unit]];
   }
echo"<small><u>$to[q_unit] $unit_name atakavo 1 Katapult&#261; i&#353; bok&#353;to</u></small><br/>";
echo"<small>Padar&#279; $dmg &#382;alos</small><br/>";
if($war[hp]-$dmg<0){
mysql_query("DELETE FROM war where user='$user[username]' and machine='catapulta' and hp<'0'");
echo"<small>Sunaikino katapulta</small><br/>";}}

else {
include_once("names/units.php");
   if ($army_hp[$who] == "0") {
      $exppp = $army_expierence[$who];
      include_once("core/unit_level.php");
      $exppp = floor($exppp / $army_quantity[$who]);
      $lvl = expierence($exppp);
      if ($lvl > 1) {
         $kk = $k;
         $k = 5;
         $army_health[$k] = $army_health[$who];
         include("core/level_up.php");
         $army_hp[$who] = $army_health[$k];
         $army_health[$who] = $army_health[$k];
         $k = $kk;
      }
      else {
         $army_hp[$who] = $army_health[$who];
      }
   }

   $dmg = mt_rand($unit_info[min] * $to[q_unit], $unit_info[max] *  $to[q_unit]);
include_once("magic2/stone_oda.php");

   if ($unit_inf[attack] >= $army_defense[$who]) {
      $dmg = floor($dmg + $dmg * (($unit_info[attack] - $army_defense[$who]) * 2 / 100) + 1);
   }
   else {
      $dmg = floor($dmg - $dmg * (($army_defense[$who] - $unit_info[attack]) * 1.5 / 100) + 1);
   }

   /// SPECIALITIES

   if (($uunit_special == "attack_twice") or ($uunit_special2 == "attack_twice")) {
      $dmg = $dmg * 2;
   }
   if (($uunit_special == "hate_efreet") and (($army_unit[$who] == "efreet") or ($army_unit[$who] == "efreet_sultan"))) {
      $dmg = $dmg * 1.5;
   }
if (($uunit_special == "do_150_against_angels") and (($army_unit[$who] == "angel") or ($army_unit[$who] == "archangel"))) {
      $dmg = $dmg * 1.5;
   }
   if (($uunit_special == "do_150_against_dragons") and (($army_unit[$who] == "bone_dragon") or ($army_unit[$who]=="ghost_dragon"))) {
      $dmg = $dmg * 1.5;
   }
include_once("skils/armorer.php");





   if ($dmg > 4 * $unit_info[max] *  $to[q_unit]) {
      $dmg = 4 * $unit_info[max] *  $to[q_unit];
   }
   if ($dmg < floor(0.3 * $unit_info[min] *  $to[q_unit])) {
      $dmg = floor(0.3 * $unit_info[min] *  $to[q_unit]);
   }
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
$usr=strtolower($user[username]);
      mysql_query("UPDATE army SET hp=$army_hp[$who], quantity=quantity-$kill WHERE username='$usr' and unit='$army_unit[$who]' LIMIT 1");
   }
   else {
      $army_hp[$who] = $army_health[$who] - $dmg;
      $queries++;
      mysql_query("UPDATE army SET hp=$army_hp[$who] WHERE username='$usr' and unit='$army_unit[$who]' LIMIT 1");
   }

   if ($kill >= $army_quantity[$who]) {
      $kill = $army_quantity[$who];
      $queries++;
      mysql_query("DELETE FROM army WHERE username='$usr' and unit='$army_unit[$who]' LIMIT 1");
   }

   if (((substr($to[q_unit], strlen($to[q_unit]) - 2, 2) >= 10) and (substr($to[q_unit], strlen($to[q_unit]) - 2, 2) <= 20)) or ((substr($to[q_unit], strlen($to[q_unit]) - 1, 1) == "0"))) {
      $unit_name = $unit_name_p3[$to[unit]];
   }
   elseif (substr($to[q_unit], strlen($to[q_unit]) - 1, 1) == "1") {
      $unit_name = $unit_name_s1[$to[unit]];
   }
   else {
      $unit_name = $unit_name_p1[$to[unit]];
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
   $uu = $unit_name_s1[$to[unit]];
   if ($user[pics] > 0) echo"<img src=\"img/units/$battle[unit].gif\" alt=\"$uu\"/><br/>";
   echo"<small><u>$to[q_unit] $unit_name atakavo $army_quantity[$who] $uunit_name i&#353; bok&#353;to.</u></small><br/>";
   if ($kill > 0) {
      if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$who]];
      }
      elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
         $unit_name = $unit_name_s2[$army_unit[$who]];
      }
      else {
         $unit_name = $unit_name_p2[$army_unit[$who]];
      }
   }
echo"<small>Padar&#279; $dmg &#382;alos.</small><br/>";
   if ($kill > 0) {
      echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
   }
   echo"<br/>";
   $army_quantity[$who] = $army_quantity[$who] - $kill;
}
?>