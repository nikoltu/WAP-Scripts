<?php
include_once("online.php");
$jap=$_POST['jap'];
$m = addslashes(htmlspecialchars($_POST['event']));
$queries++;
$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE location='$jap' and castle='$pilis' and id='$m' ORDER by id ASC LIMIT 1"));
$bui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tvora'"));
if($bui[build]){
   echo"<small><b>Neteisingas &#303;vykis.</b></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

if ($event[id] == "") {
   echo"<small><b>Neteisingas &#303;vykis.</b></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}
if($user[battle]>time()){
$s = $user[battle] - $time;
   echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">";
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
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
   $sunit_name = $unit_name_p1[$event[unit]];
   echo"<small><b>$sunit_name</b></small><br/><img src=\"img/units/$event[unit].gif\" alt=\"$sunit_name\"/><br/><small><i>Lygis: $lvl</i></small><br/><small><i>Ataka: $unit_info[attack] ($army_attack[$k])</i></small><br/><small><i>Gynyba: $unit_info[defense] ($army_defense[$k])</i></small><br/>";
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
   }
   $k = $kk;
   $queries++;
   $c = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE place='$event[id]' and time>'$time' LIMIT 1"));
   if ($c[0] == "") {
      echo"<small><anchor>[Atakuoti]<go method=\"post\" href=\"index.php?action=castle&amp;id=$id&amp;door=atk&amp;pilis=$pilis\"><postfield name=\"event\" value=\"$m\"/><postfield name=\"jap\" value=\"$jap\"/></go></anchor></small><br/>";
   }
   else {
      echo"$line<br/><small><a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$c[0]\">$c[0]</a>&nbsp;jau kaunasi &#353;ioje kovoje.</small><br/>";
   }
   echo"$line</p><p align=\"left\">";
}
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
?>