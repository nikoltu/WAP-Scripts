<?php
$poll = addslashes(htmlspecialchars($_POST['poll']));
if ($top[closed] == "1") {
	echo"<small>&#352;i apklausa yra u&#382;rakinta ir negalite balsuoti.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
$polll = $top[poll];
if ($polll == "") {
	echo"<small>Tai ne apklausa.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($poll == "") {
	echo"<small>J&#363;s nepasirinkote atsakymo.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
$checkk = mysql_num_rows(mysql_query("SELECT id FROM voting WHERE nick='$nick' and topic='$topic' LIMIT 1"));
if ($checkk > 0) {
	echo"<small>J&#363;s jau balsavote.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/></p></card></wml>";
	mysql_close($db);
	exit;
}
$pol = explode("|=-anSwer-=|", $polll);
$an = count($pol);
for ($t = 1; $t < $an; $t++) {
	$p = explode("-==v0teS==-", $pol[$t]);
	if ($t == $poll) { $p[1]++; }
	$pp = "$pp |=-anSwer-=| $p[0] -==v0teS==- $p[1]";
}
$pp = str_replace(" |=-anSwer-=| ", "|=-anSwer-=|", $pp);
$pp = str_replace(" -==v0teS==- ", "-==v0teS==-", $pp);
if (($poll > $an) or ($poll < 1)) {
	echo"<small>Neteisingas atsakymas.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
mysql_query("INSERT INTO voting(nick, topic, time) VALUES ('$nick','$topic','$time')");
mysql_query("UPDATE topics SET poll='$pp' WHERE id='$topic' LIMIT 1");
echo"<small>Balsas &#303;ra&#353;ytas s&#279;kmingai!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
?>