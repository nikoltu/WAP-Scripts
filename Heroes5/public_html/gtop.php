<?php
$page = addslashes(htmlspecialchars($_GET['page'])); if (!$page) { $page = 0; }
$queries++;
$queries++;
$limit = $page * 20;
$llimit = $limit + 20;
$cnt=mysql_query("SELECT COUNT(username) AS num FROM users");
$count=($cnt) ? mysql_result($cnt, 0, 'num') : 0;
echo"<small><b><u>Aukso TOP</u></b></small><br/>$line<br/><small>J&#363;s u&#382;imate <b>$pl</b> viet&#261;.</small><br/>$line</p><p align=\"left\">";
$on = mysql_query("SELECT username, gold FROM users ORDER by gold DESC LIMIT $limit, 20");
$top = 0;
while ($onn = mysql_fetch_row($on)) {
   $top++;
   $o = $page * 20 + $top;
   echo"<small><b>$o</b>&nbsp;<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$onn[0]\">$onn[0] [$onn[1]]</a></small>";
   if ($i < $llimit - 1) echo"<br/>";
}
echo"</p><p align=\"center\">$line<br/>";
$pages = ceil($count/20);
if ($pages > $page + 1) {
   $pager = $page + 1;
   echo"<small><a href=\"index.php?action=gtop&amp;id=$id&amp;page=$pager\">$next</a></small><br/>";
}
if ($page > 0) {
   $pager = $page - 1;
   echo"<small><a href=\"index.php?action=gtop&amp;id=$id&amp;page=$pager\">$back</a></small><br/>";
}
$page++;
$para=mysql_num_rows(mysql_query("SELECT * FROM para"));

echo"<small><u>Puslapis: $page/$pages</u></small><br/><small><u>Viso heroj&#371;: $count</u></small><br/>";

echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>