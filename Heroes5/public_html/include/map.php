<?php
$place = "$i|$j|$k";
include_once("online.php");
$queries++;
$on = mysql_query("SELECT * FROM users WHERE time>$time and place='$place'");
if ($k !== "") {
   include_once("names/objects.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>$territory</b></small><br/><small>$territory2</small><br/>";
   if (!file_exists("img/territories2/$k.gif")) {
      if ($header !== "") {
         echo"<br/>$line<br/><small>$header</small>";
      }
   }
   else {
      echo"<br/><img src=\"img/territories2/$k.gif\" alt=\"$territory2\"/>";
      if ($header !== "") {
         echo"<br/><small>$header</small>";
      }
   }
   echo"$line</p><p align=\"left\">";
   for ($ii = 0; $ii < count($obj); $ii++) {
      $obb = $object_name[$obj[$ii]];
      echo"<small><b>#</b>&nbsp;<a href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$obj[$ii]\">$obb</a></small><br/>";
   }
$osk=6;
include_once("skils/zval.php");
include_once("artifact/act/spyglass.php");
   $tobj = $osk - count($obj);
   $queries++;
   $obj = mysql_query("SELECT * FROM map WHERE location='$i-$j-$k' ORDER by id ASC LIMIT $tobj");
   $o = 0;
   while ($objj = mysql_fetch_array($obj)) {
      $uunit[$o] = $objj[unit];
      $unit_exp[$o] = $objj[expierence];
      $resource[$o] = $objj[resource];
      $q_unit[$o] = $objj[q_unit];
      $q_res[$o] = $objj[q_res];
      $artifact[$o] = $objj[artifact];
      $o++;
   }
   while ($o < $tobj) {
$r=count($army) - 1;
$r=mt_rand(0, $r);
include_once("skils/diplo.php");
      $iires = mt_rand("1", "$gold_get");
      if ("$iires" == "$gold_get") {
         $igold = mt_rand($gold_min, $gold_max);
         $uunit[$o] = "";
         $unit_exp[$o] = 0;
         $q_unit[$o] = 0;
         $artifact[$o] = "";
         $resource[$o] = "gold";
         $q_res[$o] = $igold;
         $queries++;
         mysql_query("INSERT INTO map(location, resource, q_res) VALUES ('$i-$j-$k', 'gold', '$igold')");
      }
      elseif (($army_get[$r] > 0) and (mt_rand(0, $army_get[$r]) == $army_get[$r])) {
         $iq = mt_rand($armi_min[$r], $armi_max[$r]);
         $uunit[$o] = "";
         $unit_exp[$o] = 0;
         $q_unit[$o] = 0;
         $artifact[$o] = "";
         $resource[$o] = "$army[$r]";
         $q_res[$o] = $iq;
         $queries++;
         mysql_query("INSERT INTO map(location, resource, q_res) VALUES ('$i-$j-$k', '$army[$r]', '$iq')");
      }
elseif (($other_get > 0) and (mt_rand(0, $other_get) == $other_get)) {
         $iq = mt_rand($other_min, $other_max);
         $uunit[$o] = "";
         $unit_exp[$o] = 0;
         $q_unit[$o] = 0;
         $artifact[$o] = "";
         $resource[$o] = "$other";
         $q_res[$o] = $iq;
         $queries++;
         mysql_query("INSERT INTO map(location, resource, q_res) VALUES ('$i-$j-$k', '$other', '$iq')");
      }
      
else {
         $total_units = count($unit) - 1;
         $s = mt_rand(0, $total_units);
         $unit_name = $unit[$s];
         $iq = mt_rand($q_min[$s], $q_max[$s]);
         $iexp = mt_rand($exp_min[$s], $exp_max[$s]);
         $iress = mt_rand(0, $u_gold_get[$s]);
         if ($iress == $u_gold_get[$s]) {
            $ires = "gold";
            $iq_res = mt_rand($u_gold_min[$s], $u_gold_max[$s]);
         }
         elseif (mt_rand(0, $u_other_get[$s]) == $u_other_get[$s]) {
            $ires = $u_other[$s];
            $iq_res = mt_rand($u_other_min[$s], $u_other_max[$s]);
         }
         $iart = mt_rand(0, $u_artifact_get[$s]);
         if ($iart == $u_artifact_get[$s]) {
            $iartifact = $u_artifact[$s];
         }
         $uunit[$o] = $unit_name;
         $unit_exp[$o] = $iexp;
         $resource[$o] = $ires;
         $q_unit[$o] = $iq;
         $q_res[$o] = $iq_res;
         $artifact[$o] = $iartifact;
         $queries++;
         mysql_query("INSERT INTO map(location, unit, expierence, resource, q_unit, q_res, artifact) VALUES ('$i-$j-$k', '$unit_name', '$iexp', '$ires', '$iq', '$iq_res', '$iartifact')");
      }
      $o++;
   }
   include_once("names/units.php");
   include_once("core/resources.php");
   for ($o = 0; $o < $tobj; $o++) {
      $oo = $o + 1;
      if ($uunit[$o] !== "") {
         if ($q_unit[0] == "1") {
            $unit_name = $unit_name_p3[$uunit[$o]];
         }
         else {
              $unit_name = $unit_name_p3[$uunit[$o]];
            
           }
if($q_unit[$o]>=1000){
$nam="Legionas";}
elseif($q_unit[$o]>=500){
$nam="Kuopa";}
elseif($q_unit[$o]>=250){
$nam="Pulkas";}
elseif($q_unit[$o]>=100){
$nam="Minia";}
elseif($q_unit[$o]>=50){
$nam="Spie&#269;ius";}
elseif($q_unit[$o]>=20){
$nam="Daug";}
elseif($q_unit[$o]>=10){
$nam="Gauja";}
elseif($q_unit[$o]>=5){
$nam="Keletas";}
elseif($q_unit[$o]>=1){
$nam="Ma&#382;ai";}
echo"<small><b>*</b>&nbsp;<a href=\"index.php?action=event&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$oo\">$nam $unit_name</a></small><br/>";
      }
      else {
         if ($resource[$o] == "gold") {
            $q_res[$o] = $q_res[$o] * 10;
            $res = "Aukso";
         }
         elseif(($resource[$o]!=="gold") and ($resource[$o]!=="gem") and ($resource[$o]!=="mercury") and ($resource[$o]!=="sulfur") and ($resource[$o]!=="crystal")){
         if ($q_res[0] == "1") {
            $res = $unit_name_s2[$resource[$o]];
         }
               $res = $unit_name_p3[$resource[$o]];

if($q_res[$o]>=1000){
$nam2="Legionas";}
elseif($q_res[$o]>=500){
$nam2="Kuopa";}
elseif($q_res[$o]>=250){
$nam2="Pulkas";}
elseif($q_res[$o]>=100){
$nam2="Minia";}
elseif($q_res[$o]>=50){
$nam2="Spie&#269;ius";}
elseif($q_res[$o]>=20){
$nam2="Daug";}
elseif($q_res[$o]>=10){
$nam2="Gauja";}
elseif($q_res[$o]>=5){
$nam2="Keletas";}
elseif($q_res[$o]>=1){
$nam2="Ma&#382;ai";}
         
} else {
            $res = resource($resource[$o], $q_res[$o]);
         }
         echo"<small><b>+</b>&nbsp;<a href=\"index.php?action=event&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$oo\">";
if($nam2){
echo"$nam2";}
else {echo"$q_res[$o]";}
echo" $res</a></small><br/>";
      }
   }
   if ($user[battle] > $time) {
      $left = $user[battle] - $time;
      echo"<br/><small><u>Negalite kovoti <b>$left</b> s</u><br/></small>";
   }
   $onn = mysql_num_rows($on);
   if (($onn > 1) and ($onn <= 5)) {
      if ($left == "") { echo"<br/>"; }
      echo"<small>Prisijung&#281;:</small>&nbsp;";
      while ($onn = mysql_fetch_array($on)) {
         if ($onn[username] !== $user['username']) {
            $z++;
            if ($z > 1) echo"<small>,</small>";
            echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;name=$onn[username]\">$onn[username]</a></small>";
         }
      }
   echo"<br/>";
   }
   elseif ($onn > 5) {
      if ($left == "") { echo"<br/>"; }
      echo"<small><a href=\"index.php?action=online&amp;i=$i&amp;j=$j&amp;k=$k&amp;id=$id\">Prisijung&#281; [$onn]</a></small><br/>";
   }
   echo"<br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small>";
}
elseif ($j !== "") {
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $territory = $territory_name[$j];
   echo"<small><b>$land</b></small><br/><small>$territory</small><br/>";
   $header = "";
   include("map/$i/$j.php");
   if (!file_exists("img/territories/$j.gif")) {
      if ($header !== "") {
         echo"$line<br/><small>$header</small><br/>";
      }
   }
   else {
      echo"<br/><img src=\"img/territories/$j.gif\" alt=\"$territory\"/>";
      if ($header !== "") {
         echo"<br/><small>$header</small><br/>";
      }
   }
if(($j=="barbarians_land") or ($j=="swamp_of_tatalia") or ($j=="city_of_erathia") or ($j=="enroth_woods")){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$j\">Pilis</a></small><br/>";}

   echo"$line</p><p align=\"left\">";
   if ($handle = opendir("map/$i/$j/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php" && $file != "$j.php") {
            $file = explode(".", $file);
            $territory2 = $territory2_name[$file[0]];
            include_once("map/$i/$j/$file[0].php");
            if ($level_limit <= $user[level]) $level_limit = ""; else $level_limit = " (x)";
            echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$file[0]\">$territory2$level_limit</a></small><br/>";
         }
      }
      closedir($handle);
   }
   if ($user[battle] > $time) {
      $left = $user[battle] - $time;
      echo"<br/><small><u>Negalite kovoti <b>$left</b> s</u><br/></small>";
   }
   $onn = mysql_num_rows($on);
   if (($onn > 1) and ($onn <= 5)) {
      if ($left == "") { echo"<br/>"; }
      echo"<small>Prisijung&#281;:</small>&nbsp;";
      while ($onn = mysql_fetch_array($on)) {
         if ($onn[username] !== $user['username']) {
            $z++;
            if ($z > 1) echo"<small>,</small>";
            echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;name=$onn[username]\">$onn[username]</a></small>";
         }
      }
   echo"<br/>";
   }
   elseif ($onn > 5) {
      if ($left == "") { echo"<br/>"; }
      echo"<small><a href=\"index.php?action=online&amp;i=$i&amp;j=$j&amp;id=$id\">Prisijung&#281; [$onn]</a></small><br/>";
   }
   echo"<br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small>";
}
else {
   include_once("names/lands.php");
   $land = $land_name[$i];
   echo"<small><b>$land</b></small>";
   $header = "";
   include("map/$i.php");
   if (!file_exists("img/lands/$i.gif")) {
      if ($header !== "") {
         echo"<br/>$line<br/><small>$header</small>";
      }
   }
   else {
      echo"<br/><img src=\"img/lands/$i.gif\" alt=\"$land\"/>";
      if ($header !== "") {
         echo"<br/><small>$header</small>";
      }
   }
   echo"<br/>$line</p><p align=\"left\">";
   include_once("names/territories.php");
   if ($handle = opendir("map/$i/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php") {
            $file = explode(".", $file);
            if ($file[1] == "php") {
               include_once("map/$i/$file[0].php");
               if ($level_limit <= $user[level]) $level_limit = ""; else $level_limit = " (x)";
               $territory = $territory_name[$file[0]];
               echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$file[0]\">$territory$level_limit</a></small><br/>";
            }
         }
      }
      closedir($handle);
   }
   if ($user[battle] > $time) {
      $left = $user[battle] - $time;
      echo"<br/><small><u>Negalite kovoti <b>$left</b> s</u><br/></small>";
   }
   $onn = mysql_num_rows($on);
   if (($onn > 1) and ($onn <= 5)) {
      if ($left == "") { echo"<br/>"; }
      echo"<small>Prisijung&#281;:</small>&nbsp;";
      while ($onn = mysql_fetch_array($on)) {
         if ($onn[username] !== $user['username']) {
            $z++;
            if ($z > 1) echo"<small>,</small>";
            echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;name=$onn[username]\">$onn[username]</a></small>";
         }
      }
   echo"<br/>";
   }
   elseif ($onn > 5) {
      if ($left == "") { echo"<br/>"; }
      echo"<small><a href=\"index.php?action=online&amp;i=$i&amp;id=$id\">Prisijung&#281; [$onn]</a></small><br/>";
   }
}
echo"<br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
?>