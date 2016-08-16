<?
$m = addslashes(htmlspecialchars($_GET['m'])); if (!$m) { $m = ""; }
$n = addslashes(htmlspecialchars($_GET['n'])); if (!$n) { $n = ""; }

$queries++;
$battle = mysql_fetch_array(mysql_query("SELECT * FROM abattle WHERE id='$m' LIMIT 1"));

if (($battle[id] == "") or ($battle[heroe2] == "")) {
   echo"<small><b>Neegzistuojantis kova.</b></small><br/>$line</p><p align=\"left\">
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

$name = strtolower($user[username]);
$enemy[username] = strtolower($enemy[username]);

if ($battle[heroe] == $name) $heroe = 1;
elseif ($battle[heroe2] == $name) $heroe = 2;
else {
   echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$battle[heroe2]\">$battle[heroe2]</a>&nbsp;jau kaunasi &#353;ioje kovoje.</small><br/>$line<br/>
   <small><a href=\"index.php?action=arena&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

if ($battle[active] > 0) {
   if ($battle[active] == $heroe) echo"<small><b>J&#363;s laim&#279;jote kov&#261;.</b></small>";
   else echo"<small><b>J&#363;s pralaim&#279;jote kov&#261;.</b></small>";
   if ($heroe == 1) $xp = floor(0.5 * $battle[xp1]); else $xp = floor(0.5 * $battle[xp2]);
   echo"<br/><small><u>Gavote patirties: $xp</u></small>";
   echo"<br/>$line</p><p align=\"left\">
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

if ($user[battle] > time()) {
   $s = $user[battle] - time();
   echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

$place = "arena";
$arena = $m;
include_once("online.php");

$time = addslashes(htmlspecialchars($_GET['time'])); if (!$time) $time = 0;

if ($heroe == 1) $enemy = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$battle[heroe2]' LIMIT 1"));
else $enemy = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$battle[heroe]' LIMIT 1"));
if($user[enm]=="$enemy[username]"){
echo"<small><b>Negalima kovoti 2kartus is eiles pries ta pati priesininka.</b></small><br/>$line</p><p align=\"left\">
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}
if(abs($user[level]-$enemy[level])>"5"){
echo"<small><b>Jusu ir prie&#353;ininko lygiu skirtumas negali buti didesnis nei 5.</b></small><br/>$line</p><p align=\"left\">
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
   <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}

$turn = explode("|", $battle[turn]);

$total[1] = 0;
$total[2] = 0;

///if (($enemy[time] < time()) or ($enemy[arena] !== $m)) $total[2] = -1;
///elseif ((($battle[time] + 120) < time()) and ($heroe !== $turn[0])) $total[2] = -1;

if (($turn[0] == $heroe) and ($total[1] >= 0) and ($total[2] >= 0))  {
   include_once("core/arena_army.php");
   include("names/units.php");
   $turn[1]--;
   if (($turn[1] > 0) and ($time !== "no") and ($time >= $battle[time])) {
      include_once("core/unit_level.php");
      $level = level();

      $w1 = $turn[1] - 1;
      $w2 = $n;
      if ($heroe == 1) if ($w2 > $battle[u2]) $w2 = 1;
      if ($heroe == 2) if ($w2 > $battle[u1]) $w2 = 1;
      $w2--;
      if ($w2 < 0) $w2 = 0;

      // my unit

      include("units/$army_unit[$w1].php");
      $s1[1] = $unit_info[spec];
      $s2[1] = $unit_info[spec2];
      $shoot = $unit_info[shoot];
      $xpp[1] = $unit_info[exp];
      @$exp = floor($army_unit[$w1] / $army_quantity[$w1]);
      $lvl = expierence($exp);
      if ($lvl > 1) {
         $k = $w1;
         include_once("core/level_up.php");
      }

      // enemy unit

      include("units/$army_unit2[$w2].php");
      $s1[2] = $unit_info[spec];
      $s2[2] = $unit_info[spec2];
      $xpp[2] = $unit_info[exp];
      @$exp = floor($army_unit2[$w2] / $army_quantity2[$w2]);
      $lvl = expierence($exp);
      if ($lvl > 1) {
         $k = $w2;
         include_once("core/level_up2.php");
      }
      $dmg = mt_rand($army_min[$w1] * $army_quantity[$w1], $army_max[$w1] *  $army_quantity[$w1]);
      if ($army_attack[$w1] >= $army_defense2[$w2]) {
         @$dmg = floor($dmg + $dmg * (($army_attack[$w1] - $army_defense2[$w2]) * 2 / 100) + 1);
      }
      else {
         @$dmg = floor($dmg - $dmg * (($army_defense2[$w2] - $army_attack[$w1]) * 1.5 / 100) + 1);
      }

      /// SPECIALITIES 

      if (($s1[1] == "attack_twice") or ($s2[1] == "attack_twice")) {
         $dmg = $dmg * 2;
      }
      if (($s1[1] == "hate_efreet") and (($army_unit2[$w2] == "efreet") or ($army_unit2[$w2]  == "efreet_sultan"))) {
         $dmg = $dmg * 1.5;
      }
      if (($s1[1] == "do_150_against_dragons") and ($army_unit2[$w2] == "bone_dragon")) {
         $dmg = $dmg * 1.5;
      }
      if (($user[identify] == "valeska") and (($army_unit[$w1] == "archer") or ($army_unit[$w1] == "marksman"))) {
         $dmg = floor($dmg * 1.15);
      }
      if (($user[identify] == "kyrre") and (($army_unit[$w1] == "elf") or ($army_unit[$w1] == "grand_elf"))) {
         $dmg = floor($dmg * 1.1);
      }
      if (($user[identify] == "wystan") and (($army_unit[$w1] == "lizardman") or ($army_unit[$w1] == "lizard_warrior"))) {
         $dmg = floor($dmg * 1.15);
      }
      if (($user[identify] == "jabarkas") and (($army_unit[$w1] == "orc") or ($army_unit[$w1] == "orc_chieftan"))) {
         $dmg = floor($dmg * 1.2);
      }

      if ($dmg > 4 * $army_max[$w1] *  $army_quantity[$w1]) {
         $dmg = 4 * $army_max[$w1] *  $army_quantity[$w1];
      }
      if ($dmg < floor(0.3 * $army_min[$w1] * $army_quantity[$w1])) {
         $dmg = floor(0.3 * $army_min[$w1] * $army_quantity[$w1]);
      }



      $kill = 0;
      if ($dmg >= $army_hp2[$w2]) {
         $kill = 1;
         if ($dmg - $army_hp2[$w2] >= $army_health2[$w2]) $kill += floor($dmg/$army_health2[$w2]) - 1;
         $army_hp2[$w2] = $army_hp2[$w2] - $dmg;
         while ($army_hp2[$w2] <= 0) $army_hp2[$w2] += $army_health2[$w2];
         if ($army_unit2[$w2] == "wight") $army_hp2[$w2] = $army_health2[$w2];
         $queries++;
         if ($kill >= $army_quantity2[$w2]) {
            $kill = $army_quantity2[$w2];
            $queries++;
            $total[2]--;
$enemy[username]=strtolower($enemy[username]);           mysql_query("DELETE FROM army WHERE username='$enemy[username]' and unit='$army_unit2[$w2]' LIMIT 1");
         }
         else {
$enemy[username]=strtolower($enemy[username]);            mysql_query("UPDATE army SET quantity=quantity-$kill, hp='$army_hp2[$w2]' WHERE username='$enemy[username]' and unit='$army_unit2[$w2]' LIMIT 1");         
         }
         if ($heroe == 1) $xp[1] = ceil(($kill * $xpp[2]) / 2); else $xp[2] = ceil(($kill * $xpp[1]) / 2);
      }
      else {
$enemy[username]=strtolower($enemy[username]);
         $army_hp2[$w2] = $army_hp2[$w2] - $dmg;
         $queries++;
         mysql_query("UPDATE army SET hp='$army_hp2[$w2]' WHERE username='$enemy[username]' and unit='$army_unit2[$w2]' LIMIT 1");
      }
      if ($kill >= $army_quantity2[$w2]) $kill = $army_quantity2[$w2];


      if (((substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 2, 2) >= 10) and (substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 2, 2) <= 20)) or ((substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$w1]];
      }
      elseif (substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$w1]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$w1]];
      }

      if (((substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 2, 2) >= 10) and (substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 2, 2) <= 20)) or ((substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 1, 1) == "0"))) {
         $uunit_name = $unit_name_p3[$army_unit2[$w2]];
      }
      elseif (substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 1, 1) == "1") {
         $uunit_name = $unit_name_s2[$army_unit2[$w2]];
      }
      else {
         $uunit_name = $unit_name_p2[$army_unit2[$w2]];
      }
      $uu = $unit_name_s1[$army_unit[$w1]];

      if ($heroe == 1) $text = $battle[text2]; else $text = $battle[text1];
      $text = "$text|$army_quantity[$w1]-$army_unit[$w1]-$army_quantity2[$w2]-$army_unit2[$w2]-$dmg-$kill";

      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$w1].gif\" alt=\"$uu\"/><br/>";
      echo"<small><u>$army_quantity[$w1] $unit_name atakavo $army_quantity2[$w2] $uunit_name.</u></small><br/>";
      echo"<small>Padar&#279; $dmg &#382;alos.</small>";

      $army_quantity2[$w2] -= $kill;
      if ($kill > 0) {
         if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
            $unit_name = $unit_name_p3[$army_unit2[$w2]];
         }
         elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
            $unit_name = $unit_name_s2[$army_unit2[$w2]];
         }
         else {
            $unit_name = $unit_name_p2[$army_unit2[$w2]];
         }
         echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
      }
      echo"<br/>";
      if (($army_quantity2[$w2] > 0) and ($shoot == "0") and ($s1[1] !== "no_retaliaton") and ($s2[1] !== "no_retaliaton")) {
         $dmg = mt_rand($army_min2[$w2] * $army_quantity2[$w2], $army_max2[$w2] *  $army_quantity2[$w2]);
         if ($army_attack[$w2] >= $army_defense[$w1]) {
            @$dmg = floor($dmg + $dmg * (($army_attack2[$w2] - $army_defense[$w1]) * 2 / 100) + 1);
         }
         else {
            @$dmg = floor($dmg - $dmg * (($army_defense[$w1] - $army_attack2[$w2]) * 1.5 / 100) + 1);
         }

         /// SPECIALITIES 

         if (($s1[2] == "attack_twice") or ($s2[2] == "attack_twice")) {
            $dmg = $dmg * 2;
         }
         if (($s1[2] == "hate_efreet") and (($army_unit[$w1] == "efreet") or ($army_unit[$w1]  == "efreet_sultan"))) {
            $dmg = $dmg * 1.5;
         }
         if (($s1[2] == "do_150_against_dragons") and ($army_unit[$w1] == "bone_dragon")) {
            $dmg = $dmg * 1.5;
         }
         if (($enemy[identify] == "valeska") and (($army_unit2[$w2] == "archer") or ($army_unit[$w1] == "marksman"))) {
            $dmg = floor($dmg * 1.15);
         }
         if (($enemy[identify] == "kyrre") and (($army_unit2[$w2] == "elf") or ($army_unit[$w1] == "grand_elf"))) {
            $dmg = floor($dmg * 1.1);
         }
         if (($enemy[identify] == "wystan") and (($army_unit2[$w2] == "lizardman") or ($army_unit[$w1] == "lizard_warrior"))) {
            $dmg = floor($dmg * 1.15);
         }
         if (($enemy[identify] == "jabarkas") and (($army_unit2[$w2] == "orc") or ($army_unit[$w1] == "orc_chieftan"))) {
            $dmg = floor($dmg * 1.2);
         }

         if ($dmg > 4 * $army_max2[$w2] *  $army_quantity2[$w2]) {
            $dmg = 4 * $army_max2[$w2] *  $army_quantity2[$w2];
         }
         if ($dmg < floor(0.3 * $army_min2[$w2] * $army_quantity2[$w2])) {
            $dmg = floor(0.3 * $army_min2[$w2] * $army_quantity2[$w2]);
         }

         $kill = 0;
         if ($dmg >= $army_hp[$w1]) {
            $kill = 1;
            if ($dmg - $army_hp[$w1] >= $army_health[$w1]) $kill += floor($dmg/$army_health[$w1]) - 1;
            $army_hp[$w1] = $army_hp[$w1] - $dmg;
            while ($army_hp[$w1] <= 0) $army_hp[$w1] += $army_health[$w1];
            if ($army_unit[$w1] == "wight") $army_hp[$w1] = $army_health[$w1];
            $queries++;
            if ($kill >= $army_quantity[$w1]) {
               $kill = $army_quantity[$w1];
               $total[1]--;
               $queries++;

$name=strtolower($user[username]);               mysql_query("DELETE FROM army WHERE username='$name' and unit='$army_unit[$w1]'");
            }
            else {
$name=strtolower($user[username]);               mysql_query("UPDATE army SET quantity=quantity-$kill, hp='$army_hp[$w1]' WHERE username='$name' and unit='$army_unit[$w1]'");         
            }
            if ($heroe == 1) $xp[2] = ceil(($kill * $xpp[1]) / 2); else $xp[1] = ceil(($kill * $xpp[2]) / 2);
         }
         else {
            $army_hp[$w1] = $army_hp[$w1] - $dmg;
            $queries++;
$name=strtolower($user[username]);            mysql_query("UPDATE army SET hp='$army_hp[$w1]' WHERE username='$name' and unit='$army_unit[$w1]' LIMIT 1");
         }
         if ($kill >= $army_quantity[$w1]) $kill = $army_quantity[$w1];


         if (((substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 2, 2) >= 10) and (substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 2, 2) <= 20)) or ((substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 1, 1) == "0"))) {
            $unit_name = $unit_name_p3[$army_unit2[$w2]];
         }
         elseif (substr($army_quantity2[$w2], strlen($army_quantity2[$w2]) - 1, 1) == "1") {
            $unit_name = $unit_name_s1[$army_unit2[$w2]];
         }
         else {
            $unit_name = $unit_name_p1[$army_unit2[$w2]];
         }
         $uu = $unit_name_s1[$army_unit2[$w2]];

         $text = "$text-$dmg-$kill";

         if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit2[$w2].gif\" alt=\"$uu\"/><br/>";
         echo"<small><u>$army_quantity2[$w2] $unit_name kontraatakavo.</u></small><br/>";
         echo"<small>Padar&#279; $dmg &#382;alos.</small>";

         if ($kill > 0) {
            if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
               $unit_name = $unit_name_p3[$army_unit[$w1]];
            }
            elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
               $unit_name = $unit_name_s2[$army_unit[$w1]];
            }
            else {
               $unit_name = $unit_name_p2[$army_unit[$w1]];
            }
            echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
         }
         echo"<br/>";
         if ($turn[1] < $total[1]) echo"$line<br/>";
      }
   }
   elseif (($turn[1] > 0) and ($time == "no")) {
      $time = $battle[time];
      $w1 = $turn[1] - 1;
      if (((substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 2, 2) >= 10) and (substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 2, 2) <= 20)) or ((substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$w1]];
      }
      elseif (substr($army_quantity[$w1], strlen($army_quantity[$w1]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$w1]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$w1]];
      }
      $uu = $unit_name_s1[$army_unit[$w1]];
      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$w1].gif\" alt=\"$uu\"/><br/>";
      echo"<small><u>$army_quantity[$w1] $unit_name praleido &#279;jim&#261;.</u></small><br/>";
   }
   if ((($turn[1] < $total[1]) or ($time < $battle[time])) and ($total[1] > 0) and ($total[2] > 0)){
      $text = "";
      $w = $turn[1];
      if ($time < $battle[time]) $w--;
      if ($w < 0) $w = 0;

      if (((substr($army_quantity[$w], strlen($army_quantity[$w]) - 2, 2) >= 10) and (substr($army_quantity[$w], strlen($army_quantity[$w]) - 2, 2) <= 20)) or ((substr($army_quantity[$w], strlen($army_quantity[$w]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$w]];
      }
      elseif (substr($army_quantity[$w], strlen($army_quantity[$w]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$w]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$w]];
      }
      $uu = $unit_name_s1[$army_unit[$w]];

      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$w].gif\" alt=\"$uu\"/><br/>";
      echo"<small><b>Esate $army_quantity[$w] $unit_name</b></small><br/><small>Pasirinkite k&#261; atakuoti:</small><br/>";


      for ($i = 0; $i < $total[2]; $i++) {
         if (((substr($army_quantity2[$i], strlen($army_quantity2[$i]) - 2, 2) >= 10) and (substr($army_quantity2[$i], strlen($army_quantity2[$i]) - 2, 2) <= 20)) or ((substr($army_quantity2[$i], strlen($army_quantity2[$i]) - 1, 1) == "0"))) {
            $uunit_name = $unit_name_p3[$army_unit2[$i]];
         }
         elseif (substr($army_quantity2[$i], strlen($army_quantity2[$i]) - 1, 1) == "1") {
            $uunit_name = $unit_name_s2[$army_unit2[$i]];
         }
         else {
            $uunit_name = $unit_name_p2[$army_unit2[$i]];
         }
         $ii = $i + 1;
         echo"<small><a href=\"index.php?action=abattle&amp;id=$id&amp;m=$m&amp;time=".time()."&amp;n=$ii\">$army_quantity2[$i] $uunit_name</a></small><br/>";
      }

      echo"$line<br/><small><a href=\"index.php?action=abattle&amp;id=$id&amp;m=$m&amp;time=no\">Praleisti &#279;jim&#261;</a></small><br/>";

   }
   else {
      if (($total[1] > 0) and ($total[2] > 0)) {
      echo"<small><a href=\"index.php?action=abattle&amp;id=$id&amp;m=$m&amp;time=".time()."\">&#187;&#187;&#187;</a></small><br/>";
      }
   }
   $turn[1]++;
}
elseif (($total[1] >= 0) and ($total[2] >= 0)) {
   $total[1] += 2;
   $total[2] += 2;
   if ($heroe == 1) $text = explode("|", trim($battle[text1])); else $text = explode("|", trim($battle[text2]));
   if ((($heroe == 1) and ($battle[text1] == "")) or (($heroe == 2) and ($battle[text2] == ""))) {
      echo"<small><a href=\"index.php?action=abattle&amp;id=$id&amp;m=$m\">[Atnaujinti]</a></small><br/><small>Pra&#353;ome palaukti, kol var&#382;ovas padarys &#279;jim&#261;.</small><br/>";
   }
   else {
      include("names/units.php");
      for ($i = 1; $i < count($text); $i++) {
         if ($i > 1) echo"$line<br/>";
         $u = explode("-", $text[$i]);
         if (((substr($u[0], strlen($u[0]) - 2, 2) >= 10) and (substr($u[0], strlen($u[0]) - 2, 2) <= 20)) or ((substr($u[0], strlen($u[0]) - 1, 1) == "0"))) {
            $unit_name = $unit_name_p3[$u[1]];
         }
         elseif (substr($u[0], strlen($u[0]) - 1, 1) == "1") {
            $unit_name = $unit_name_s1[$u[1]];
         }
         else {
            $unit_name = $unit_name_p1[$u[1]];
         }
         if (((substr($u[2], strlen($u[2]) - 2, 2) >= 10) and (substr($u[2], strlen($u[2]) - 2, 2) <= 20)) or ((substr($u[2], strlen($u[2]) - 1, 1) == "0"))) {
            $uunit_name = $unit_name_p3[$u[3]];
         }
         elseif (substr($u[2], strlen($u[2]) - 1, 1) == "1") {
            $uunit_name = $unit_name_s2[$u[3]];
         }
         else {
            $uunit_name = $unit_name_p2[$u[3]];
         }
         $uu = $unit_name_s1[$u[1]];
         if ($user[pics] > 0) echo"<img src=\"img/units/$u[1].gif\" alt=\"$uu\"/><br/>";
         echo"<small><u>$u[0] $unit_name atakavo $u[2] $uunit_name.</u></small><br/>";
         echo"<small>Padar&#279; $u[4] &#382;alos.</small>";

         if (((substr($u[5], strlen($u[5]) - 2, 2) >= 10) and (substr($u[5], strlen($u[5]) - 2, 2) <= 20)) or ((substr($u[5], strlen($u[5]) - 1, 1) == "0"))) {
            $unit_name = $unit_name_p3[$u[3]];
         }
         elseif (substr($u[5], strlen($u[5]) - 1, 1) == "1") {
            $unit_name = $unit_name_s2[$u[3]];
         }
         else {
            $unit_name = $unit_name_p2[$u[3]];
         }
         if ($u[5] > 0) echo"<small> Nu&#382;ud&#279; $u[5] $unit_name.</small>";
         echo"<br/>";
         if ($u[6] > 0) {
            $u[2] -= $u[5];
            if (((substr($u[2], strlen($u[2]) - 2, 2) >= 10) and (substr($u[2], strlen($u[2]) - 2, 2) <= 20)) or ((substr($u[2], strlen($u[2]) - 1, 1) == "0"))) {
               $unit_name = $unit_name_p3[$u[3]];
            }
            elseif (substr($u[2], strlen($u[2]) - 1, 1) == "1") {
               $unit_name = $unit_name_s1[$u[3]];
            }
            else {
               $unit_name = $unit_name_p1[$u[3]];
            }
            $uu = $unit_name_s1[$u[3]];
            if ($user[pics] > 0) echo"<img src=\"img/units/$u[3].gif\" alt=\"$uu\"/><br/>";
            echo"<small><u>$u[2] $unit_name kontraatakavo.</u></small><br/>";
            echo"<small>Padar&#279; $u[6] &#382;alos.</small>";
            if (((substr($u[7], strlen($u[7]) - 2, 2) >= 10) and (substr($u[7], strlen($u[7]) - 2, 2) <= 20)) or ((substr($u[7], strlen($u[7]) - 1, 1) == "0"))) {
               $unit_name = $unit_name_p3[$u[1]];
            }
            elseif (substr($u[7], strlen($u[7]) - 1, 1) == "1") {
               $unit_name = $unit_name_s2[$u[1]];
            }
            else {
               $unit_name = $unit_name_p2[$u[1]];
            }
            if ($u[7] > 0) echo"<small> Nu&#382;ud&#279; $u[7] $unit_name.</small>";
            echo"<br/>";
         }
      }
      echo"<small><a href=\"index.php?action=abattle&amp;id=$id&amp;m=$m&amp;time=".time()."\">&#187;&#187;&#187;</a></small><br/>";
   }
   $text = "";
}

if ($total[2] == "0") {
   $btime = time() + 600;
   if ($user[immortal] > time()) $btime = time() + 200;
   if ($heroe == 1) $xp[1] = $battle[xp1] + $xp[1]; else $xp[1] = $battle[xp2] + $xp[1];
   if ($heroe == 1) $xp[2] = $battle[xp2] + $xp[2]; else $xp[2] = $battle[xp1] + $xp[2];
   $xp[2] = floor($xp[1] * 0.5);
   mysql_query("UPDATE users SET battle='$btime', expierence=expierence+'$xp[1]' WHERE username='$user[username]' LIMIT 1");
   $btime = time() + 1200;
   if ($enemy[immortal] > time()) $btime = time() + 600;
   mysql_query("UPDATE users SET battle='$btime', expierence=expierence+'$xp[2]' WHERE username='$enemy[username]' LIMIT 1");
   if ($heroe == 1) $active = 1; else $active = 2;
   mysql_query("UPDATE abattle SET active='$active',win='1' WHERE id='$m' LIMIT 1");
$usr=$user[username];
$usr1=$enemy[username];
$turny=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$usr'"));
$turny2=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$usr1'"));if(($turny[user]) and ($turny2[user])){
mysql_query("UPDATE turnyras SET wins=wins+1 where user='$usr' LIMIT 1");}
mysql_query("UPDATE users SET enm='$enemy[username]' where username='$user[username]'");
$cls=$enemy['class'];
mysql_query("insert into wins (user,class,lvl) values ('$user[username]','$cls','$enemy[level]')");


   echo"$line<br/><small><b>J&#363;s laim&#279;jote!</b></small><br/><small><u>Gavote patirties: $xp[1]</u></small><br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=arena\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
if ($total[1] == "0") {
   $btime = time() + 600;
   if ($enemy[immortal] > time()) $btime = time() + 200;
   if ($heroe == 1) $xp[1] = $battle[xp1] + $xp[1]; else $xp[1] = $battle[xp2] + $xp[1];
   if ($heroe == 1) $xp[2] = $battle[xp2] + $xp[2]; else $xp[2] = $battle[xp1] + $xp[2];
   $xp[1] = floor($xp[1] * 0.5);
   mysql_query("UPDATE users SET battle='$btime', expierence=expierence+'$xp[1]' WHERE username='$enemy[username]' LIMIT 1");
   $btime = time() + 1200;
   if ($user[immortal] > time()) $btime = time() + 600;
   mysql_query("UPDATE users SET battle='$btime', expierence=expierence+'$xp[2]' WHERE username='$user[username]' LIMIT 1");
   if ($heroe == 1) $active = 2; else $active = 1;
   mysql_query("UPDATE abattle SET active='$active',win='1' WHERE id='$m' LIMIT 1");
$usr=$user[username];
$usr1=$enemy[username];
$turny=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$usr1'"));
$turny2=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$usr'"));if(($turny[user]) and ($turny2[user])){
mysql_query("UPDATE turnyras SET wins=wins+1 where user='$usr1' LIMIT 1");}
mysql_query("UPDATE users SET enm='$enemy[username]' where username='$user[username]'");
$cls=$user['class'];
mysql_query("insert into wins (user,class,lvl) values ('$enemy[username]','$cls','$user[level]')");
   echo"$line<br/><small><b>J&#363;s pralaim&#279;jote!</b></small><br/><small><u>Gavote patirties: $xp[1]</u></small><br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=arena\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}

echo"$line<br/>";
if ($turn[0] == $heroe) {
   $t = $turn[1] - 1;
   if ($t < 1) $t = 1;
   echo"<small><u>J&#363;s&#371; eil&#279;</u></small><br/>";
   if ($heroe == 1) echo"<small>&#278;jimas [$t/".$battle[u1]."]</small><br/>";
   else echo"<small>&#278;jimas [$t/".$battle[u2]."]</small><br/>";
}
else {
   $t = $turn[1] - 1;
   if ($t < 1) $t = 1;
   echo"<small><u>Prie&#353;o eil&#279;</u></small><br/>";
   if ($heroe == 1) echo"<small>&#278;jimas [$t/".$battle[u2]."]</small><br/>";
   else echo"<small>&#278;jimas [$t/".$battle[u1]."]</small><br/>";
}
echo"<small>Raundas [$battle[round]]</small><br/>$line<br/><small><a href=\"index.php?action=arena&amp;id=$id\">&#171; Pab&#279;gti</a></small>";

if (($turn[0] == $heroe) and (($time >= $battle[time]) or ($turn[1] == 1))) {
   $turn[1]++;
   if ((($heroe == 1) and ($turn[1] > $battle[u1]+1)) or (($heroe == 2) and ($turn[1] > $battle[u2]+1))) {
      if ($heroe == 1) $turn[0] = 2; else $turn[0] = 1;
      $turn[1] = 1;
      $battle[u1] = $total[1];
      $battle[u2] = $total[2];
      if ($heroe == 2) $battle[round]++;
      $text = "";
   }
   $queries++;
   if ($heroe == 1) mysql_query("UPDATE abattle SET round='$battle[round]', turn='$turn[0]|$turn[1]', time='".time()."', text2='$text', text1='', xp1=xp1+'$xp[1]', xp2=xp2+'$xp[2]' WHERE id='$m' LIMIT 1");
   else mysql_query("UPDATE abattle SET round='$battle[round]', turn='$turn[0]|$turn[1]', time='".time()."', text1='$text', text2='', xp1=xp1+'$xp[1]', xp2=xp2+'$xp[2]' WHERE id='$m' LIMIT 1");
}
?>