<?php
$h = addslashes(htmlspecialchars($_GET['h']));
if ($object[info] == "") {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   if ($b[$bb] == "gold") {
      $ah = mt_rand(6, 10);
      $bm = $bm * $ah * 150;
   }
   $dm = mt_rand($dmin, $dmax);
   $ttime = ($day_length * $dm) + $time;
   $object[info] = "$bb|$bm|$dm|$ttime";
}
$inf = explode("|", $object[info]);
$resss = $b[$inf[0]];
include_once("core/resources.php");
if ($resss !== "gold") {
   $res = strtolower(resourcee($resss, $inf[1]));
}
else {
   $res = "aukso";
}
if ($inf[3] < $time) {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   if ($b[$bb] == "gold") {
      $ah = mt_rand(3, 5);
      $bm = $bm * $ah * 250;
   }
   $dm = mt_rand($dmin, $dmax);
   $ttime = ($day_length * $dm) + $time;
   $object[info] = "$bb|$bm|$dm|$ttime";
   $changed = 1;
}
if ($h == "") {
   echo"<small>$head</small><br/>$line<br/><small><b>U&#382;duotis:</b></small><br/>";
   if ($inf[2] == "1") {
      echo"<small><i>Atne&#353;ti $inf[1] $res per $inf[2] dien&#261;.</i></small><br/>";
   }
   else {
      echo"<small><i>Atne&#353;ti $inf[1] $res per $inf[2] dienas.</i></small><br/>";
   }
   if ($user[$resss] < $inf[1]) {
      $ttime = $inf[3] - $time;
      echo"$line<br/><small>Liko laiko: <b>$ttime</b> s.</small><br/><small>Turite resurs&#371;: <b>$user[$resss]</b></small><br/>";
   }
   else {
      echo"$line<br/><small><i>Turite resurs&#371;: <b>$user[$resss]</b></i></small><br/><small><a href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$m&amp;h=2\">&#302;vykdyti u&#382;duot&#303;</a></small><br/>";
   }
}

if (($h == "2") and ($user[$resss] >= $inf[1]) and ($inf[3] >= $time)) {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   if ($b[$bb] == "gold") {
      $ah = mt_rand(3, 5);
      $bm = $bm * $ah * 50;
   }
   $dm = mt_rand($dmin, $dmax);
   $ttime = ($day_length * $dm) + $time;
   $object[info] = "$bb|$bm|$dm|$ttime";
   $exp = mt_rand($iq1, $iq2);
   $queries++;
   mysql_query("UPDATE users SET expierence=expierence+$exp, $resss=$resss-$inf[1] WHERE username='$user[username]' LIMIT 1");
   echo"<small><b>J&#363;s &#303;vykd&#279;te u&#382;duot&#303;!</b></small><br/><small><u>Gavote patirties: $exp</u></small><br/>";

if(mt_rand(1, 100)=="15"){

$potion=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='magic_potion'"));
if(!$potion[name]){
mysql_query("insert into artifacts (user,name,kiek,type) values ('$user[username]','magic_potion','1','potion')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+1 where name='magic_potion' and user='$user[username]'");}
echo"<small>Gavote 1 Magi&#353;ka g&#279;rima</small><br/>";
}
}
?>