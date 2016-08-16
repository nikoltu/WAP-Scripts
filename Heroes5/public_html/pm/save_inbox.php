<?php
$prm = mysql_fetch_array(mysql_query("SELECT nick, active FROM pm WHERE id='$pm' LIMIT 1"));
if (strtolower($prm[0]) !== strtolower($user[username])) { 
	echo"<small>Negalite i&#353;saugoti ne savo &#382;inutes!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
$saved = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM pm WHERE nick='$nick' LIMIT 50"));
if ($saved[0] + 1 == 50) {
	echo"<small>Negalite i&#353;saugoti daugiau nei 50 &#382;inu&#269;i&#371;.</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($prm[1] !== "2") {
	mysql_query("UPDATE pm SET active='2' WHERE id='$pm' LIMIT 1");
	mysql_query("UPDATE users SET all_pm=all_pm-1 WHERE nick='$user[username]' LIMIT 1");
}
echo"<small>Privati &#382;inut&#279; i&#353;saugota s&#279;kmingai!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>