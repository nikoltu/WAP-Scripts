<?php

/// MY ARMY

$queries++;
$total_units = 0;
$name = strtolower($user[username]);
$aarmy = mysql_query("SELECT * FROM army WHERE username='$name' LIMIT $toar");
while ($army = mysql_fetch_array($aarmy)) {
   $army_unit[$total_units] = $army[unit];
   $army_quantity[$total_units] = $army[quantity];
   $army_attack[$total_units] = $army[attack];
   $army_defense[$total_units] = $army[defense];
   $army_health[$total_units] = $army[health];
   $army_min[$total_units] = $army[min_damage];
   $army_max[$total_units] = $army[max_damage];
   $army_expierence[$total_units] = $army[expierence];
   $army_hp[$total_units] = $army[hp];
   $total_units++;
}
if ($total_units == "") {
   include_once("heroes/$user[class]/$user[identify].php");
   $basic_army = basic_army();
   for ($ii = 0; $ii < count($basic_army); $ii++) {
      $unit = explode("|", $basic_army[$ii]);
      include_once("units/$unit[0].php");
      $q = explode("-", $unit[1]);
      $q[0] = (($user[level] + 20) / 20) * $q[0];
      $q[1] = (($user[level] + 20) / 20) * $q[1];
      $qq = ceil(mt_rand($q[0], $q[1]));
      $unit_info[attack] = $unit_info[attack] + $user[attack];
      $unit_info[defense] = $unit_info[defense] + $user[defense];
      $unit_info = buy_unit($unit[0], $unit_info);
      $queries++;
      mysql_query("INSERT INTO army(username, unit, quantity, attack, defense, min_damage, max_damage, health) VALUES ('$name','$unit[0]','$qq','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]')");
      $army_unit[$ii] = $unit[0];
      $army_quantity[$ii] = $qq;
      $army_attack[$ii] = $unit_info[attack] + $user[attack];
      $army_defense[$ii] = $unit_info[defense] + $user[defense];
      $army_health[$ii] = $unit_info[health];
      $army_min[$ii] = $unit_info[min];
      $army_max[$ii] = $unit_info[max];
      $army_damage[$ii] = $army[damage];
      $army_expierence[$ii] = 0;
      $army_hp[$ii] = $unit_info[health];
      $total_units++;
   }
}
$total[1] = $total_units;

/// ENEMY ARMY

$queries++;
$total_units = 0;
$name = strtolower($enemy[username]);
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
include_once("core/enemy_skills.php");

include_once("skils/strategy2.php");
$aarmy = mysql_query("SELECT * FROM army WHERE username='$name' LIMIT $toar2");
while ($army = mysql_fetch_array($aarmy)) {
   $army_unit2[$total_units] = $army[unit];
   $army_quantity2[$total_units] = $army[quantity];
   $army_attack2[$total_units] = $army[attack];
   $army_defense2[$total_units] = $army[defense];
   $army_health2[$total_units] = $army[health];
   $army_min2[$total_units] = $army[min_damage];
   $army_max2[$total_units] = $army[max_damage];
   $army_expierence2[$total_units] = $army[expierence];
   $army_hp2[$total_units] = $army[hp];
   $total_units++;
}
if ($total_units == "") {
   include_once("heroes/$enemy[class]/$enemy[identify].php");
   $basic_army = basic_army();
   for ($ii = 0; $ii < count($basic_army); $ii++) {
      $unit = explode("|", $basic_army[$ii]);
      include_once("units/$unit[0].php");
      $q = explode("-", $unit[1]);
      $q[0] = (($user[level] + 20) / 20) * $q[0];
      $q[1] = (($user[level] + 20) / 20) * $q[1];
      $qq = ceil(mt_rand($q[0], $q[1]));
      $unit_info[attack] = $unit_info[attack] + $user[attack];
      $unit_info[defense] = $unit_info[defense] + $user[defense];
      $unit_info = buy_unit($unit[0], $unit_info);
      $queries++;
      mysql_query("INSERT INTO army(username, unit, quantity, attack, defense, min_damage, max_damage, health) VALUES ('$name','$unit[0]','$qq','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]')");
      $army_unit2[$ii] = $unit[0];
      $army_quantity2[$ii] = $qq;
      $army_attack2[$ii] = $unit_info[attack] + $user[attack];
      $army_defense2[$ii] = $unit_info[defense] + $user[defense];
      $army_health2[$ii] = $unit_info[health];
      $army_min2[$ii] = $unit_info[min];
      $army_max2[$ii] = $unit_info[max];
      $army_damage2[$ii] = $army[damage];
      $army_expierence2[$ii] = 0;
      $army_hp2[$ii] = $unit_info[health];
      $total_units++;
   }
}
$total[2] = $total_units;

?>