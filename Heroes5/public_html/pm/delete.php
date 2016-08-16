<?php
$prm = mysql_fetch_array(mysql_query("SELECT nick FROM pm WHERE id='$pm' LIMIT 1"));
if (strtolower($prm[0]) !== strtolower($user[username])) { 
	echo"<small>&#352;i privati &#382;inut&#279; neegzistuoja!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small><br/></p></card></wml>";
	mysql_close($db);
	exit;
}
mysql_query("DELETE FROM pm WHERE id='$pm' LIMIT 1");
mysql_query("UPDATE users SET all_pm=all_pm-1 WHERE username='$user[username]' LIMIT 1");
echo"<small>Privati &#382;inut&#279; i&#353;trinta s&#279;kmingai!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>