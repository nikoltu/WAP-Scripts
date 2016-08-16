<?php
$show_pm = 10;
$tpm = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM pm WHERE nick='$user[username]' and active='2' LIMIT 50"));
echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>I&#353;saugotos [$tpm[0]]</small><br/>$line<br/>";
$limit = $page * $show_pm;
$show = $tpm[0] - $limit;
if ($show > $show_pm) {
	$show = $show_pm;
}
$pms = mysql_query("SELECT id, name, action FROM pm WHERE active=2 and nick='$user[username]' ORDER by id DESC LIMIT $limit, $show_pm");
while ($pm = mysql_fetch_array($pms)) {	
	$k++;
	echo"<small><a href=\"pm.php?action=readsaved&amp;id=$id&amp;pm=$pm[0]\">$pm[1]</a></small><br/>";
}
if ($k == "") {
	echo"<small>N&#279;ra priva&#269;i&#371; &#382;inu&#269;i&#371;.</small><br/>";
}
echo"$line<br/>";
$pages = ceil($tpm[0]/$show_pm);
if ($pages == "0") {
	$pages++;
}
if ((($page * $show_pm) + $show_pm) < $tpm[0]) {
	$pager = $page + 1;
	echo"<small><a href=\"pm.php?action=saved&amp;id=$id&amp;page=$pager\">$next</a></small><br/>";
}
if ($page > 0) {
	$pager = $page - 1;
	echo"<small><a href=\"pm.php?action=saved&amp;id=$id&amp;page=$pager\">$back</a></small><br/>";
}
$page++;
@$pr = ceil($tpm[0]/$tpm[0] * 100);
echo"<small>Puslapis: $page/$pages</small><br/><small><u>$tpm[0]/$tpm[0] [$pr%]</u></small><br/>$line<br/><small><a href=\"pm.php?action=deletesaved&amp;id=$id\">I&#353;trinti visas</a></small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>