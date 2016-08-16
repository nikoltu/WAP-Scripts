<?php
$prm = mysql_fetch_array(mysql_query("SELECT nick, name, date, text, active, action FROM pm WHERE id='$pm' LIMIT 1"));
if (strtolower($prm[1]) !== strtolower($user[username])) { 
	echo"<small>Negalite skaityti ne savo &#382;inutes!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small><br/></p></card></wml>";
	mysql_close($db);
	exit;
}
echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>Skaityti &#382;inut&#281;</small><br/>$line</p><p align=\"left\"><small><a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$prm[1]\">$prm[1]:</a></small>&nbsp;<small>$prm[3]</small><br/><small>$prm[2]</small></p><p align=\"center\">$line<br/>";
if ($prm[5] == "") {
	echo"<small><a href=\"pm.php?action=compose&amp;id=$id&amp;pm=$pm\">Persi&#371;sti</a></small><br/><small><a href=\"pm.php?action=save&amp;id=$id&amp;pm=$pm\">I&#353;saugoti</a></small><br/>$line<br/>";
}
echo"<small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>