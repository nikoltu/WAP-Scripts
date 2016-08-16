<?php
$i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
$show_topics = 8;
$hot_topics = 250;
$login = $user[llogin];
if ($i == "help") {
	echo"<small><b>Forumo per&#382;i&#363;ra</b></small><br/><small>[?] Pagalba</small><br/>$line<br/><small>&#352;iek tiek paai&#353;kinim&#371; ir ikon&#371; apib&#363;dinimai.</small><br/>";
echo"$line</p><p align=\"left\"><img src=\"img/folder.gif\" alt=\"[-]\"/>&nbsp;<small>Paprasta tema</small><br/><img src=\"img/folder_new.gif\" alt=\"[+]\"/>&nbsp;<small>Aktyvi tema*</small><br/><img src=\"img/folder_hot.gif\" alt=\"[-]\"/>&nbsp;<small>Kar&#353;ta tema ($hot_topics arba daugiau &#382;inu&#269;i&#371;)</small><br/><img src=\"img/folder_hot_new.gif\" alt=\"[+]\"/>&nbsp;<small>Aktyvi kar&#353;ta tema*</small><br/><img src=\"img/locked.gif\" alt=\"[#]\"/>&nbsp;<small>U&#382;rakinta tema</small><br/><img src=\"img/locked_new.gif\" alt=\"[#]\"/>&nbsp;<small>Aktyvi u&#382;rakinta tema*</small><br/><img src=\"img/pinned.gif\" alt=\"[!]\"/>&nbsp;<small>Prisegta tema</small><br/><img src=\"img/pinned_new.gif\" alt=\"[!]\"/>&nbsp;<small>Aktyvi prisegta tema*</small><br/><img src=\"img/pinned_locked.gif\" alt=\"[!]\"/>&nbsp;<small>Prisegta ir u&#382;rakinta tema</small><br/><img src=\"img/pinned_locked_new.gif\" alt=\"[!]\"/>&nbsp;<small>Aktyvi prisegta ir u&#382;rakinta tema*</small></p><p align=\"center\">$line<br/><small>Pastaba: * aktyvios temos yra tos, kuriose buvo atsakyta kol j&#363;s buvote atsijung&#281;s arba per dabartin&#303; apsilankym&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
$title = mysql_fetch_array(mysql_query("SELECT title, topics, topic FROM forums WHERE id='$forum' LIMIT 1"));
$ttopic = mysql_fetch_array(mysql_query("SELECT DISTINCT COUNT(id) FROM topics WHERE forum='$forum' and pinned='1' and hidden='0'"));
$ttopics = $frm[topics] - $ttopic[0];
echo"<small><b>$title[0]</b></small><br/>";
$date = date("m-d H:i");
echo"<small><a href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum\">[Online: $online[0]]</a></small><br/><small>$date</small><br/>$line";
if ($frm[topic] !== "") {
	echo"<br/><small><u>$frm[topic]</u></small><br/>$line";
}
echo"</p><p align=\"left\">";
$limit = $page * $show_topics;
$show = $tposts - $limit;
if ($show > $show_topics) { $show = $show_topics; }
if ($page == "") {
	$topics = mysql_query("SELECT id, topic, posts, closed, time, forum, bold, author, viewed, poll FROM topics WHERE pinned='2' and hidden='0' ORDER by time DESC LIMIT 3");
	while ($topic = mysql_fetch_array($topics)) {	
		$perm = mysql_fetch_array(mysql_query("SELECT forum FROM topics WHERE id='$topic[0]' LIMIT 1"));
		$poll = "";
		if ($topic[9] !== "") { $poll = "Apklausa: "; }
		$n++;
		if ($topic[6] > 0) { $b1 = "<b>"; $b2 = "</b>"; } else { $b1 = ""; $b2 = ""; }
		if (($topic[3] > 0) and ($login[0] < $topic[4])) {
			echo"<img src=\"img/pinned_locked_new.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		elseif ($topic[3] > 0) {
			echo"<img src=\"img/pinned_locked.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		elseif ($login[0] < $topic[4]) {
			echo"<img src=\"img/pinned_new.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		else {
			echo"<img src=\"img/pinned.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		$on = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM users WHERE online>'$time' and topic='$topic[0]'"));
		echo"<small>[$topic[2]/$topic[8]-$on[0]]</small><br/>";
	}
}
$onl = mysql_query("SELECT topic FROM users WHERE time>'$time' and forum='$forum' and topic!='' ORDER by topic ASC LIMIT $online[0]");
while ($onn = mysql_fetch_array($onl)) {
	@$on[$onn[0]]++;
	}
$topics = mysql_query("SELECT id, topic, posts, closed, time, bold, author, viewed, poll FROM topics WHERE forum='$forum' and pinned='1' and hidden='0' ORDER by time DESC LIMIT 5");
while ($topic = mysql_fetch_array($topics)) {	
	$m++;
	if ($page == "") {
		$poll = "";
		if ($topic[8] !== "") { $poll = "Apklausa: "; }
		if ($topic[5] > 0) { $b1 = "<b>"; $b2 = "</b>"; } else { $b1 = ""; $b2 = ""; }
		if (($topic[3] > 0) and ($login[0] < $topic[4])) {
			echo"<img src=\"img/pinned_locked_new.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		elseif ($topic[3] > 0) {
			echo"<img src=\"img/pinned_locked.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		elseif ($login[0] < $topic[4]) {
			echo"<img src=\"img/pinned_new.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		else {
			echo"<img src=\"img/pinned.gif\" alt=\"[!]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		$onl = $on[$topic[0]]; if ($onl == "") { $onl = 0; }
		echo"<small>[$topic[2]/$topic[7]-$onl]</small><br/>";
	}
}
if ($page == "") { if ((($m > 0) or ($n > 0)) and ($title[1] > $m)) { echo"<br/>"; } }
$topics = mysql_query("SELECT id, topic, posts, closed, time, bold, author, viewed, poll FROM topics WHERE forum='$forum' and pinned='0' and hidden='0' ORDER by time DESC LIMIT $limit, $show_topics");
while ($topic = mysql_fetch_array($topics)) {	
	$k++;
	$poll = "";
	if ($topic[8] !== "") { $poll = "Apklausa: "; }
	if ($topic[5] > 0) { $b1 = "<b>"; $b2 = "</b>"; } else { $b1 = ""; $b2 = ""; }
	if (($login[0] < $topic[4])  and ($topic[3] > 0)) {
		echo"<img src=\"img/locked_new.gif\" alt=\"[#]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
	}
	elseif ($topic[3] > 0) {
		echo"<img src=\"img/locked.gif\" alt=\"[#]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
	}
	elseif ($login[0] < $topic[4]) {
		if ($topic[2] >= $hot_topics) {
			echo"<img src=\"img/folder_hot_new.gif\" alt=\"[+]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		else {
			echo"<img src=\"img/folder_new.gif\" alt=\"[+]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
	}
	else {
		if ($topic[2] >= $hot_topics) {
			echo"<img src=\"img/folder_hot.gif\" alt=\"[-]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
		else {
			echo"<img src=\"img/folder.gif\" alt=\"[-]\"/><small>$poll$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic[0]\">$topic[1]</a>$b2</small>&nbsp;";
		}
	}
	$onl = $on[$topic[0]]; if ($onl == "") { $onl = 0; }
	echo"<small>[$topic[2]/$topic[7]-$onl]</small><br/>";
	}
echo"</p><p align=\"center\">";
if (($k == "") and ($n == "") and ($m == "")) {
	echo"<small>N&#279;ra tem&#371;.</small><br/>";
}
echo"$line<br/>";



$pages = ceil($ttopics/$show_topics);
if ($pages == "0") { $pages++; }
if ((($page * $show_topics) + $show_topics) < $ttopics) {
	$pager = $page + 1;
	echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;page=$pager\">$next</a></small><br/>";
	}
if ($page > 0) {
	$pager = $page - 1;
	echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;page=$pager\">$back</a></small><br/>";
	}
$page++;
echo"<small>Puslapis: $page/$pages</small><br/>$line<br/>";
if ($mod == "true") {
	echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum\">MOD</a></small><br/>$line<br/>";
}
echo"<small><a href=\"forum.php?action=addtopic&amp;id=$id&amp;forum=$forum\">Kurti tem&#261;</a></small><br/><small><a href=\"forum.php?action=addpoll&amp;id=$id&amp;forum=$forum\">Kurti apklaus&#261;</a></small><br/><small><a href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum\">Paie&#353;ka</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;i=help\">Pagalba</a></small><br/>$line<br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small>";
?>