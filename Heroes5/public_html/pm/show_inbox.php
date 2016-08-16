<?php
$npm=mysql_query("SELECT COUNT(id) AS num FROM pm where nick='$user[username]' and active='0'");
$newpmm=($npm) ? mysql_result($npm, 0, 'num') : 0;
$apm=mysql_query("SELECT COUNT(id) AS num FROM pm where nick='$user[username]'");
$alpm=($apm) ? mysql_result($apm, 0, 'num') : 0;$nick = strtolower($user[username]);
$show_pm = 10;
if ($alpm - $newpmm > 100) {
   $newpmm++;
   $alpm = $newpmm;
   mysql_query("UPDATE users SET all_pm='$user[new_pm]' WHERE username='$nick' LIMIT 1");
   mysql_query("DELETE FROM pm WHERE nick='$nick' and active='1'");
   $date = date("m-d H:i");
   $text = "Sveiki! J&#363;s&#371; senos priva&#269;ios &#382;inut&#279;s buvo i&#353;trintos! Sistema tai automati&#353;kai padarys kit&#261; kart&#261;, kai j&#363;s gausite daugiau nei <b>100</b> &#382;inu&#269;i&#371;, tad patariame patiems jas i&#353;sitrinti. Tai yra padaryta d&#279;l to, kad nenorime per daug apkrauti tinklap&#303;.<br/>Su pagarba, <b>DMNX.NET</b> administracija.";
   mysql_query("INSERT INTO pm(nick, name, text, date, active, action) VALUES ('$nick','DMNX.NET','$text','[$date]','0','note')");
}
echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>Gautos [$newpmm/$alpm]</small><br/>$line<br/>";

if ($user[all_pm] >= 90) {
   echo"<small><b>Pra&#353;ome i&#353;sitrinti arba i&#353;saugoti savo gautas &#382;inutes, nes j&#371; galite gauti iki 100 ir sistema i&#353;trins jas automati&#353;kai, jei to nepadarysite patys.</b></small><br/>$line<br/>";
}
$limit = $page * $show_pm;
$show = $alpm - $limit;
if ($show > $show_pm) {
   $show = $show_pm;
}
$pms = mysql_query("SELECT id, name, active, action FROM pm WHERE active<2 and nick='$nick' ORDER by id DESC LIMIT $limit, $show_pm");
while ($pm = mysql_fetch_array($pms)) {   
   $k++;
   if ($pm[2] == 0) {
      echo"<small>[+]</small>&nbsp;";
   }
   else {
      echo"<small>[-]</small>&nbsp;";
   }
   if ($pm[3] !== "") { $b[0] = "<b>"; $b[1] = "</b>"; } else { $b[0] = ""; $b[1] = ""; }
   echo"<small>$b[0]<a href=\"pm.php?action=read&amp;id=$id&amp;pm=$pm[0]\">$pm[1]</a>$b[1]</small><br/>";
}
if ($k == "") {
   echo"<small>N&#279;ra priva&#269;i&#371; &#382;inu&#269;i&#371;.</small><br/>";
}
echo"$line<br/>";
$pages = ceil($alpm/$show_pm);
if ($pages == "0") {
   $pages++;
}
if ((($page * $show_pm) + $show_pm) < $alpm) {
   $pager = $page + 1;
   echo"<small><a href=\"pm.php?id=$id&amp;page=$pager\">$next</a></small><br/>";
}
if ($page > 0) {
   $pager = $page - 1;
   echo"<small><a href=\"pm.php?id=$id&amp;page=$pager\">$back</a></small><br/>";
}
$page++;
$pr = ceil($alpm/100 * 100);
echo"<small>Puslapis: $page/$pages</small><br/><small><u>$alpm/100 [$pr%]</u></small><br/>$line<br/><small><b><a href=\"pm.php?action=summary&amp;id=$id\">Santrauka</a></b></small><br/><small><b><a href=\"pm.php?action=compose&amp;id=$id\">Sukurti</a></b></small><br/><small><a href=\"pm.php?action=deleteread&amp;id=$id\">I&#353;trinti skaitytas</a></small><br/><small><a href=\"pm.php?action=deleteall&amp;id=$id\">I&#353;trinti visas</a></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>