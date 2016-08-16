<?php
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
   $army_mag[$total_units] = $army[magic];
   $army_trk[$total_units] = $army[trk];
   $army_fear[$total_units] = $army[fear];
if(($army_unit[$total_units]=="blood_dragon") and (!file_exists("spec/res/drk/$name.txt"))){
@file_put_contents("spec/res/drk/$name.txt","$army_quantity[$total_units]");}
if(($army_unit[$total_units]=="vampire_lord") and (!file_exists("spec/res/vam/$name.txt"))){
@file_put_contents("spec/res/vam/$name.txt","$army_quantity[$total_units]");}


   $total_units++;
}
$tot=mysql_query("SELECT COUNT(username) AS num FROM army where username='$name'");
$tota=($tot) ? mysql_result($tot, 0, 'num') : 0;
$usrna=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$name'"));
$tot2=mysql_query("SELECT COUNT(user) AS num FROM barak where user='$name' and unit!='$usrna[unit]'");
$tota2=($tot2) ? mysql_result($tot2, 0, 'num') : 0;
$tot3=mysql_query("SELECT COUNT(user) AS num FROM aukcionas where user='$user[username]' and unit!='$usrna[unit]'");
$tota3=($tot3) ? mysql_result($tot3, 0, 'num') : 0;
$total_units2=$tota2+$tota+$tota3;
if ($total_units2 == "0") {
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
?>