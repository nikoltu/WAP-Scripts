<?php
$n = addslashes(htmlspecialchars($_GET['n']));
$tforum = $frm[title];

if ($top[author] !== "$nick") {
	echo"<small><b>Negalima i&#353;trinti!</b></small><br/>$line<br/><small>Tai gali tik temos autorius.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($top[pinned] > 0) {
	echo"<small><b>Negalima i&#353;trinti!</b></small><br/>$line<br/><small>Tema yra prisegta.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($top[closed] > 0) {
	echo"<small><b>Negalima i&#353;trinti!</b></small><br/>$line<br/><small>Tema yra u&#382;rakinta.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($top[bold] > 0) {
	echo"<small><b>Negalima i&#353;trinti!</b></small><br/>$line<br/><small>Tema yra pary&#353;kinta.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($top[hidden] > 0) {
	echo"<small><b>Negalima i&#353;trinti!</b></small><br/>$line<br/><small>Tema yra pasl&#279;pta.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($n == "") {
	echo"<small><b>$tforum</b></small><br/><small>$top[topic]</small><br/>$line<br/><small>Ar j&#363;s &#303;sitikin&#281;s, kad norite i&#353;trinti savo sukurt&#261; tem&#261;?</small><br/>$line<br/><small><a href=\"forum.php?action=deletetopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=delete\">Taip</a></small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "delete") {
	mysql_query("DELETE FROM posts WHERE topic='$topic' LIMIT $top[posts]");
	mysql_query("DELETE FROM topics WHERE id='$topic' LIMIT 1");
	mysql_query("DELETE FROM voting WHERE topic='$topic'");
	mysql_query("UPDATE forums SET posts=posts-$top[posts], topics=topics-1 WHERE id='$forum' LIMIT 1");
	echo"<small>J&#363;s i&#353;tryn&#279;te savo tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id&amp;forum=$forum\">$back_forums</a></small>";
}
?>