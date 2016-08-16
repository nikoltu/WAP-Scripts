<?php
$show_pm = 10;
$npm = mysql_num_rows(mysql_query("SELECT id FROM pm WHERE name='$user[username]' and active='0' LIMIT 50"));
$ll = 50 - $npm;
$tpm = mysql_num_rows(mysql_query("SELECT id FROM pm WHERE name='$user[username]' and active='1' LIMIT $ll"));
$tpm = $tpm + $npm;
echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>I&#353;si&#371;stos [$npm/$tpm]</small><br/>$line<br/>";
$limit = $page * $show_pm;
$show = $tpm - $limit;
if ($show > $show_pm) {
	$show = $show_pm;
}
$pms = mysql_query("SELECT id, nick, active, action FROM pm WHERE active<2 and name='$user[username]' ORDER by id DESC LIMIT $limit, $show_pm");
while ($pm = mysql_fetch_array($pms)) {	
	$k++;
	if ($pm[2] == 0) {
		echo"<small>[+]</small>&nbsp;";
	}
	else {
		echo"<small>[-]</small>&nbsp;";
	}
	echo"<small><a href=\"pm.php?action=readsent&amp;id=$id&amp;pm=$pm[0]\">$pm[1]</a></small><br/>";
}
if ($k == "") {
	echo"<small>N&#279;ra priva&#269;i&#371; &#382;inu&#269;i&#371;.</small><br/>";
}
echo"$line<br/>";
$pages = ceil($tpm/$show_pm);
if ($pages == "0") { $pages++; }
if ((($page * $show_pm) + $show_pm) < $tpm) {
	$pager = $page + 1;
	echo"<small><a href=\"pm.php?action=sent&amp;id=$id&amp;page=$pager\">$next</a></small><br/>";
}
if ($page > 0) {
	$pager = $page - 1;
	echo"<small><a href=\"pm.php?action=sent&amp;id=$id&amp;page=$pager\">$back</a></small><br/>";
}
$page++;
@$pr = ceil(($tpm/50) * 100);
echo"<small>Puslapis: $page/$pages</small><br/><small><u>$tpm/50 [$pr%]</u></small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>