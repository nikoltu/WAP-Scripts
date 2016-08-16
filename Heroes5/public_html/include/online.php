<?php
if (addslashes(htmlspecialchars($_GET['event'])) == "arena") $place = "arena";
$page = addslashes(htmlspecialchars($_GET['page'])); if (!$page) { $page = 0; }
$queries++;
$limit = $page * 20;
$llimit = $limit + 20;
if ($place !== "||") {

   $on = mysql_query("SELECT username, level,place FROM users WHERE time>$time and place='$place' ORDER by username ASC LIMIT $limit,20");
}
else {
   $on = mysql_query("SELECT username, level,place FROM users WHERE time>$time ORDER by username ASC LIMIT $limit,20");
}
$online=mysql_num_rows(mysql_query("SELECT username FROM users where time>$time"));
echo"<small><b><u>Prisijung&#281; [$online]</u></b></small><br/>$line</p><p align=\"left\">";
while ($onn = mysql_fetch_row($on)) {
if($onn[0]=="action"){
$onn[2]="j";}
include_once("names/place.php");
$pna=$pla[$onn[2]];
if($pna==""){
include_once("names/territories2.php");
$plc=explode("|",$onn[2]);
$kury=$plc[2];
$pna=$territory2_name[$kury];}
if($pna==""){
include_once("names/territories.php");
$plc=explode("|",$onn[2]);
$kury=$plc[1];
$pna=$territory_name[$kury];}
if($pna==""){
include_once("names/lands.php");
$plc=explode("|",$onn[2]);
$kury=$plc[0];
$pna=$land_name[$kury];}
if($pna==""){
$pna="Kazkur &#382;aidime";}

   echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$onn[0]&amp;i=$i&amp;j=$j&amp;k=$k\">$onn[0]</a>&nbsp;[$pna]</small><br/>";
}
echo"</p><p align=\"center\">$line<br/>";
$pages = ceil($online/20);
if ($pages > $page + 1) {
   $pager = $page + 1;
   echo"<small><a href=\"index.php?action=online&amp;id=$id&amp;page=$pager&amp;i=$i&amp;j=$j&amp;k=$k\">$next</a></small><br/>";
}
if ($page > 0) {
   $pager = $page - 1;
   echo"<small><a href=\"index.php?action=online&amp;id=$id&amp;page=$pager&amp;i=$i&amp;j=$j&amp;k=$k\">$back</a></small><br/>";
}
if ($place == "arena") {
   $page++;
   echo"<small><u>Puslapis: $page/$pages</u></small><br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=arena\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
elseif ($place !== "||") {
   $page++;
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><u>Puslapis: $page/$pages</u></small><br/>$line</p><p align=\"left\">";
   if ($k !== "") {
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>";
   }
   if ($j !== "") {
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>";
   }
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small>";
}
else {
   $page++;
   echo"<small><u>Puslapis: $page/$pages</u></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
?>