<?php
$place = $i;
include_once("online.php");
$m = addslashes(htmlspecialchars($_GET['m'])) - 1;
$queries++;
$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE location='$i-$j-$k' ORDER by id ASC LIMIT $m, 1"));
if ($event[id] == "") {
   echo"<small><b>Neteisingas &#303;vykis.</b></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}
if ($event[unit] == "") {
   include_once("core/resources.php");
if(($event[resource]!=="gold") and ($event[resource]!=="gem") and ($event[resource]!=="crystal") and ($event[resource]!=="sulfur") and ($event[resource]!=="mercury")){
include("names/units.php");
if (((substr($event[q_res], strlen($event[q_res]) - 2, 2) >= 10) and (substr($event[q_res], strlen($event[q_res]) - 2, 2) <= 20)) or ((substr($event[q_res], strlen($event[q_res]) - 1, 1) == "0"))) {
      $res = $unit_name_p3[$event[resource]];
   }
   elseif (substr($event[q_res], strlen($event[q_res]) - 1, 1) == "1") {
      $res = $unit_name_s1[$event[resource]];
   }
   else {
      $res = $unit_name_p1[$event[resource]];
   }}
elseif ($event[resource] == "gold") {
      $event[q_res] = $event[q_res] * 10;
      $res = "Aukso";
      $ress = "Auksas";
   }
   else {
      $res = resourcee($event[resource], $event[q_res]);
      $ress = resource($event[resource], 1);
   }
   $res = strtolower($res);
$usr=strtolower($user[username]);
if(($event[resource]!=="gold") and ($event[resource]!=="mercury") and ($event[resource]!=="gem") and ($event[resource]!=="sulfur") and ($event[resource]!=="crystal")){
$units=mysql_fetch_array(mysql_query("SELECT * FROM barak where user='$usr' and unit='$event[resource]'"));
if(!$units[unit]){
include_once("units/$event[resource].php");
mysql_query("insert into barak (user,kiek,unit,atk,def,mindmg,maxdmg,healt,hp) values ('$usr','$event[q_res]','$event[resource]','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','$unit_info[health]')");}
else {
mysql_query("UPDATE barak SET kiek=kiek+$event[q_res] where user='$usr' and unit='$event[resource]'");
}}
   echo"<small><b>J&#363;s radote $event[q_res] $res!</b></small><br/>";
if(($event[resource]!=="gold") and ($event[resource]!=="mercury") and ($event[resource]!=="gem") and ($event[resource]!=="sulfur") and ($event[resource]!=="crystal")){
$img="units";} else {
$img="resources";}
echo"<img src=\"img/$img/$event[resource].gif\" alt=\"$ress\"/><br/>$line</p><p align=\"left\">";
   $queries++;
   mysql_query("DELETE FROM map WHERE id='$event[id]' and location='$i-$j-$k' LIMIT 1");
   $queries++;
   mysql_query("UPDATE users SET $event[resource]=$event[resource]+$event[q_res] WHERE session='$id' LIMIT 1");
}
elseif($user[battle]>time()){
$s = $user[battle] - $time;
   echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">";
   include_once("names/lands.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $land = $land_name[$i];
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
} else {
   include_once("units/$event[unit].php");
   include_once("names/units.php");
   include_once("names/special.php");
   $kk = $k;
   $k = "0";
   $army_attack[0] = $unit_info[attack];
   $army_defense[0] = $unit_info[defense];
   $army_health[0] = $unit_info[health];
   $army_min[0] = $unit_info[min];
   $army_max[0] = $unit_info[max];
   include_once("core/unit_level.php");
   $level = level();
   $exp = floor($event[expierence] / $event[q_unit]);
   $lvl = expierence($exp);
   if ($lvl < 9) {
      $nextlvl = $level[$lvl+1] * $event[q_unit];
      $left = $nextlvl - $event[expierence];
   }
   if ($lvl > 1) {
      include_once("core/level_up.php");
   }
      $unit_name = $unit_name_p3[$event[unit]];
if($event[q_unit]>=1000){
$nam="Legionas";}
elseif($event[q_unit]>=500){
$nam="Kuopa";}
elseif($event[q_unit]>=250){
$nam="Pulkas";}
elseif($event[q_unit]>=100){
$nam="Minia";}
elseif($event[q_unit]>=50){
$nam="Spie&#269;ius";}
elseif($event[q_unit]>=20){
$nam="Daug";}
elseif($event[q_unit]>=10){
$nam="Gauja";}
elseif($event[q_unit]>=5){
$nam="Keletas";}
elseif($event[q_unit]>=1){
$nam="Ma&#382;ai";}
   $sunit_name = $unit_name_s1[$event[unit]];
   echo"<small><b>$nam $unit_name</b></small><br/><img src=\"img/units/$event[unit].gif\" alt=\"$sunit_name\"/><br/><small><i>Lygis: $lvl</i></small><br/><small><i>Ataka: $unit_info[attack] ($army_attack[$k])</i></small><br/><small><i>Gynyba: $unit_info[defense] ($army_defense[$k])</i></small><br/>";
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
      if (($army_min[$k] == $army_max[$k])) {
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
   $k = $kk;
   $queries++;
   $c = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE place='$event[id]' and time>'$time' LIMIT 1"));
   if ($c[0] == "") {
      echo"<small><anchor>[Atakuoti]<go method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;\"><postfield name=\"event\" value=\"$event[id]\"/></go></anchor></small><br/>";
   }
   else {
      echo"$line<br/><small><a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;name=$c[0]\">$c[0]</a>&nbsp;jau kaunasi &#353;ioje kovoje.</small><br/>";
   }
   echo"$line</p><p align=\"left\">";
}
include_once("names/lands.php");
include_once("names/territories.php");
include_once("names/territories2.php");
$land = $land_name[$i];
$territory = $territory_name[$j];
$territory2 = $territory2_name[$k];
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
?>