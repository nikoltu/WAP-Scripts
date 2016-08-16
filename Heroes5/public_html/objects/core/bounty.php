<?php
function multi_array_search($search_value, $the_array)
{
   if (is_array($the_array))
   {
       foreach ($the_array as $key => $value)
       {
           $result = multi_array_search($search_value, $value);
           if (is_array($result)) 
           {
               $return = $result;
               array_unshift($return, $key);
               return $return;
           }
           elseif ($result == true)
           {
               $return[] = $key;
               return $return;
           }
       }
       return false;
   }
   else
   {
       if ($search_value == $the_array)
       {
           return true;
       }
       else return false;
   }
}

if ($object[info] == "") {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   $dm = mt_rand($dmin, $dmax);
   $ttime = ($day_length * $dm) + $time;
   $object[info] = "$bb|$bm|$dm|$ttime";
}
$inf = explode("|", $object[info]);
$unit = $b[$inf[0]];
include_once("names/units.php");
if (((substr($inf[1], strlen($inf[1]) - 2, 2) >= 10) and (substr($inf[1], strlen($inf[1]) - 2, 2) <= 20)) or ((substr($inf[1], strlen($inf[1]) - 1, 1) == "0"))) {
   $unit_name = $unit_name_p3[$unit];
}
elseif (substr($inf[1], strlen($inf[1]) - 1, 1) == "1") {
   $unit_name = $unit_name_s2[$unit];
}
else {
   $unit_name = $unit_name_p2[$unit];
}
echo"<small>$head</small><br/>$line<br/><small><b>U&#382;duotis:</b></small><br/>";
if ($inf[2] == "1") {
   echo"<small><i>Nu&#382;udyti $inf[1] $unit_name per $inf[2] dien&#261;.</i></small><br/>";
}
else {
   echo"<small><i>Nu&#382;udyti $inf[1] $unit_name per $inf[2] dienas.</i></small><br/>";
}
$nick = strtolower($user[username]);
$mtime = $inf[2];
$queries++;
$dd = mysql_query("SELECT heroe, q_unit FROM nbattle WHERE active='1' and unit='$unit' and time>'$mtime' ORDER by q_unit DESC");
while ($ddd = mysql_fetch_array($dd)) {
   $o++;
   $ddd[0] = strtolower($ddd[0]);
   @$key = multi_array_search("$ddd[0]", $h);
   if ($key == TRUE) {
      $h[$key[0]][0] = $ddd[1] + $h[$key[0]][0];
   }
   else {
      $h[$o][0] = $ddd[1] + $h[$o][0];
      $h[$o][1] = $ddd[0];
   }
   $key = FALSE;
   if ($ddd[0] == $nick) { $d[0] = $d[0] + $ddd[1]; }
}
if (($d[0] >= $inf[1]) and ($inf[3] >= $time)) {
   $queries++;
   mysql_query("UPDATE nbattle SET time='$mtime' WHERE heroe='$nick'");
   if (($gi1 > 0) and ($gi2 > 0)) {
      $exp = mt_rand($iq1, $iq2);
      $go = mt_rand($gi1, $gi2);
      $queries++;
      mysql_query("UPDATE users SET expierence=expierence+$exp, gold=gold+$go WHERE username='$nick' LIMIT 1");
      echo"$line<br/><small><b>J&#363;s &#303;vykd&#279;te u&#382;duot&#303;!</b></small><br/><small>Esate nu&#382;ud&#281;: <b>$d[0]</b></small><br/><small><u>Gavote patirties: $exp</u></small><br/>$line<br/><small><u>Gavote $go aukso!</u></small><br/><img src=\"img/resources/gold.gif\" alt=\"Auksas\"/><br/>";
   }
   else {
      echo"$line<br/><small><b>J&#363;s &#303;vykd&#279;te u&#382;duot&#303;!</b></small><br/>
<small>Esate nu&#382;ud&#281;: <b>$d[0]</b></small><br/>";
         $ah = mt_rand(1, 4);
      if ($ah == "1") {
         $queries++;
         mysql_query("UPDATE users SET attack=attack+1 WHERE username='$user[username]' LIMIT 1");
         echo"<small>Gavote +1 Atakos!</small><br/><img src=\"img/skills/attack.gif\" alt=\"Ataka\"/><br/>";
      }
      elseif ($ah == "2") {
         $queries++;
         mysql_query("UPDATE users SET defense=defense+1 WHERE username='$user[username]' LIMIT 1");
         echo"<small>Gavote +1 Gynybos!</small><br/><img src=\"img/skills/defense.gif\" alt=\"Gynyba\"/><br/>";
      }
      elseif ($ah == "3") {
         $queries++;
         mysql_query("UPDATE users SET power=power+1 WHERE username='$user[username]' LIMIT 1");
         echo"<small>Gavote +1 Galios!</small><br/><img src=\"img/skills/power.gif\" alt=\"Galia\"/><br/>";
      }
      elseif ($ah == "4") {
         $queries++;
         mysql_query("UPDATE users SET knowledge=knowledge+1 WHERE username='$user[username]' LIMIT 1");
         echo"<small>Gavote +1 I&#353;minties!</small><br/><img src=\"img/skills/knowledge.gif\" alt=\"I&#353;mintis\"/><br/>";
      }
   }
}
else {
   $ttime = $inf[3] - $time;
   if ($d[0] == "") { $d[0] = 0; }
   echo"$line<br/><small>Liko laiko: <b>$ttime</b> s.</small><br/><small>Esate nu&#382;ud&#281;: <b>$d[0]</b></small><br/>";
   function multi_sort($tab,$key){
      $compare = create_function('$a,$b','if ($a["'.$key.'"] == $b["'.$key.'"]) {return 0;}else {return ($a["'.$key.'"] > $b["'.$key.'"]) ? -1 : 1;}');
      @usort($tab,$compare) ;
      return $tab ;
   }
   $h = multi_sort($h, 0);
   if ($h[0][0] > 0) {
      echo"$line</p><p align=\"left\"><small><u>Daugiausiai nu&#382;ud&#281;:</u></small><br/>";
      $n = $h[0][1];
      $queries++;
      $dd = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE username='$n' LIMIT 1"));
      echo"<small><b>1</b>&nbsp;<a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;name=$dd[0]\">$dd[0] [";
      echo $h[0][0];
      echo"]</a></small>";
   }
   if ($h[1][0] > 0) {
      $n = $h[1][1];
      $queries++;
      $dd = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE username='$n' LIMIT 1"));
      echo"<br/><small><b>2</b>&nbsp;<a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;name=$dd[0]\">$dd[0] [";
      echo $h[1][0];
      echo"]</a></small>";
   }
   if ($h[2][0] > 0) {
      $n = $h[2][1];
      $queries++;
      $dd = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE username='$n' LIMIT 1"));
      echo"<br/><small><b>3</b>&nbsp;<a href=\"index.php?action=nick_info&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;name=$dd[0]\">$dd[0] [";
      echo $h[2][0];
      echo"]</a></small>";
   }
   if ($h[0][0] > 0) {
      echo"</p><p align=\"center\">";
   }
}
if (($d[0] >= $inf[1]) or ($inf[3] < $time)) {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   $dm = mt_rand($dmin, $dmax);
   $ttime = ($day_length * $dm) + $time;
   $object[info] = "$bb|$bm|$dm|$ttime";
}
?>