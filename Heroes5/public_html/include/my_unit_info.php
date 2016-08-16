<?php
$m = addslashes(htmlspecialchars($_GET['m'])); if (!$m) { $m = ""; }
$n = addslashes(htmlspecialchars($_GET['n'])); if (!$n) { $n = ""; }
include("core/my_army.php");
$k = "none";
if ($army_unit[0] == "$m") { $k = "0"; }
if ($army_unit[1] == "$m") { $k = "1"; }
if ($army_unit[2] == "$m") { $k = "2"; }
if ($army_unit[3] == "$m") { $k = "3"; }
if ($army_unit[4] == "$m") { $k = "4"; }
if ($army_unit[5] == "$m") { $k = "5"; }
if ($army_unit[6] == "$m") { $k = "6"; }
if ($army_unit[7] == "$m") { $k = "7"; }
if ($k == "none") {
   echo"<small><b>Tokios armijos neturite.</b></small>";
}
elseif ($n == "") {
   include_once("units/$m.php");
   include_once("names/units.php");
   include_once("names/special.php");
   include_once("core/unit_level.php");
   $level = level();
   @$exp = floor($army_expierence[$k] / $army_quantity[$k]);
   $lvl = expierence($exp);
   if ($lvl < 9) {
      $nextlvl = $level[$lvl+1] * $army_quantity[$k];
      $left = $nextlvl - $army_expierence[$k];
   }
   if ($lvl > 1) {
      include_once("core/level_up.php");
   }
   @$buy = floor(($army_expierence[$k] - ($level[$lvl] * $army_quantity[$k])) / $level[$lvl]);
   if (((substr($army_quantity[$k], strlen($army_quantity[$k]) - 2, 2) >= 10) and (substr($army_quantity[$k], strlen($army_quantity[$k]) - 2, 2) <= 20)) or ((substr($army_quantity[$k], strlen($army_quantity[$k]) - 1, 1) == "0"))) {
      $unit_name = $unit_name_p3[$army_unit[$k]];
   }
   elseif (substr($army_quantity[$k], strlen($army_quantity[$k]) - 1, 1) == "1") {
      $unit_name = $unit_name_s1[$army_unit[$k]];
   }
   else {
      $unit_name = $unit_name_p1[$army_unit[$k]];
   }
   $sunit_name = $unit_name_s1[$army_unit[$k]];
   echo"<small><b>$army_quantity[$k] $unit_name</b></small><br/><img src=\"img/units/$m.gif\" alt=\"$sunit_name\"/><br/><small><i>Ataka: $unit_info[attack] ($army_attack[$k])</i></small><br/><small><i>Gynyba: $unit_info[defense] ($army_defense[$k])</i></small><br/>";
   if ("$army_health[$k]" !== "$unit_info[health]") {
      echo"<small><i>Gyvyb&#279;s: $unit_info[health] ($army_health[$k])</i></small><br/>";
   }
   else {
      echo"<small><i>Gyvyb&#279;s: $unit_info[health]</i></small><br/>";
   }
   if (($unit_info[min] == $unit_info[max])) {
      $d1 = "$unit_info[min]";
   }
   else {
      $d1 = "$unit_info[min]-$unit_info[max]";
   }
   if (("$army_min[$k]" !== "$unit_info[min]") or ("$army_max[$k]" !== "$unit_info[max]")) {
      if (($army_min[$k] == $unit_info[max])) {
         $d2 = "$army_min[$k]";
      }
      else {
         $d2 = "$army_min[$k]-$army_max[$k]";
      }
      echo"<small><i>&#381;ala: $d1 ($d2)</i></small><br/>";
   }
   else {
      echo"<small><i>&#381;ala: $d1</i></small><br/>";
   }
   if (($unit_info[shoot] == "1") or ($unit_info[spec] !== "") or ($unit_info[spec2] !== "")) {
      echo"<small><i><u>Papildoma:</u></i></small><br/>";
      if ($unit_info[shoot] == "1") {
         echo"<small><i>&#353;audo</i></small><br/>";
      }
      if ($unit_info[spec] !== "") {
         $special = $special_name[$unit_info[spec]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec2] !== "") {
         $special = $special_name[$unit_info[spec2]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec3] !== "") {
         $special = $special_name[$unit_info[spec3]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec4] !== "") {
         $special = $special_name[$unit_info[spec4]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec5] !== "") {
         $special = $special_name[$unit_info[spec5]];
         echo"<small><i>$special</i></small><br/>";
      }
   }
   echo"$line<br/><small><i>Lygis: $lvl</i></small><br/><small><i>Patirtis: $army_expierence[$k]</i></small><br/>";
   if ($lvl < 9) {
      echo"<small><i>Kitam lygiui: $nextlvl</i></small><br/><small><i>Tr&#363;ksta: $left</i></small><br/>";
   }
   echo"<small><i>Galima pirkti: $buy</i></small>";
   echo"<br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=huinfo&amp;m=$m&amp;n=dismiss\">[Panaikinti]</a></small><br/>";
}
elseif ($n == "dismiss") {
   $o = addslashes(htmlspecialchars($_GET['o']));
   if ($total_units == "1") {
      echo"<small>Negalite panaikinti vienintel&#279;s savo turimos armijos.</small><br/>";
   }
   elseif ($o == "") {
      include_once("names/units.php");
      if ($army_quantity[$k] == "1") {
         $unit_name = $unit_name_s2[$army_unit[$k]];
      }
      else {
         $unit_name = $unit_name_p2[$army_unit[$k]];
      }
      echo"<small>Ar tikrai norite panaikinti $army_quantity[$k] $unit_name?</small><br/><small><a href=\"index.php?id=$id&amp;action=huinfo&amp;m=$m&amp;n=dismiss&amp;o=2\">[TAIP]</a></small><br/>";
   }
   elseif ($o == "2") {
      $name = strtolower($user[username]);
      $queries++;
      mysql_query("DELETE FROM army WHERE username='$name' and unit='$m' LIMIT 1");
      include_once("names/units.php");
      if ($army_quantity[$k] == "1") {
         $unit_name = $unit_name_s2[$army_unit[$k]];
      }
      else {
         $unit_name = $unit_name_p2[$army_unit[$k]];
      }
      echo"<small>Panaikinote $army_quantity[$k] $unit_name.</small><br/>";
   }
}
echo"$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=army\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>