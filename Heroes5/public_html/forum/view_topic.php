<?php
$order = addslashes(htmlspecialchars($_GET['order'])); if (!$order) { $order = "DESC"; }
if (($order !== "DESC") and ($order !== "ASC")) {
	echo"</p></card></wml>";
	mysql_close($db);
	exit;
}
$show_posts[0] = 6;
if ($page == "") {
	mysql_query("UPDATE topics SET viewed=viewed+1 WHERE id='$topic' LIMIT 1");
}
echo"<small><b>$frm[title]</b> &#187; </small>";
$title = mysql_fetch_array(mysql_query("SELECT topic, posts, author, viewed, poll FROM topics WHERE id='$topic' LIMIT 1"));
$tposts = $top[posts];
$author = $title[author];
echo"<small>$top[topic]</small><br/>";
$date = date("m-d H:i");
echo"<small><a href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">[Online: $online[0]]</a></small><br/><small>$date</small><br/>$line<br/><small><a href=\"forum.php?action=reply&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">Atsakyti</a></small><br/>";
if ($order == "DESC") {
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;order=ASC\">Skaityti nuo prad&#382;i&#371;</a></small><br/>$line";
}
else {
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;order=DESC\">Skaityti nuo galo</a></small><br/>$line";
}
$limit = $page * $show_posts[0];
$show = $tposts - $limit;
if ($show > $show_posts[0]) { $show = $show_posts[0]; }
if ($top[poll] !== "") { $tposts--; }

if (($top[poll] !== "") and ($page == "")) {
	echo"</p><p align=\"left\">";
	$ppost = mysql_fetch_array(mysql_query("SELECT id, nick, text, date FROM posts WHERE topic='$topic' ORDER by id ASC LIMIT 1"));
	echo"<small><a href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$ppost[0]\">$ppost[1]:</a></small>&nbsp;<small>$ppost[2]</small><br/><small>$ppost[3]</small><br/><br/>";
	$poll = explode("|=-anSwer-=|", $title[4]);
	$an = count($poll);
	$checkk = mysql_num_rows(mysql_query("SELECT id FROM voting WHERE nick='$nick' and topic='$topic' LIMIT 1"));
	if ($checkk == "0") {
		echo"<select name=\"poll\">";
		for ($t = 1; $t < $an; $t++) {
			$p = explode("-==v0teS==-", $poll[$t]);
			$tott = $tott + $p[1];
			echo"<option value=\"$t\">$p[0]</option>";
		}
		echo"</select><br/>";
	echo"<small><anchor>Balsuoti!<go href=\"forum.php?action=vote&amp;id=$id&amp;forum=$forum&amp;topic=$topic\" method=\"post\"><postfield name=\"poll\" value=\"$(poll)\"/></go></anchor></small><br/><br/>";
	}
	else {
		for ($t = 1; $t < $an; $t++) {
			$p = explode("-==v0teS==-", $poll[$t]);
			$tott = $tott + $p[1];
		}
	}
	for ($t = 1; $t < $an; $t++) {
		$p = explode("-==v0teS==-", $poll[$t]);
		@$pr = ceil(($p[1]/$tott) * 100);
		echo"<small>$p[0] [$p[1]/$pr%]</small>";
		if ($t < $an - 1) { echo"<br/>"; }
	}
	echo"<br/><small><u>Viso: $tott</u></small><br/>";
	if ($show > 1) { echo"</p><p align=\"center\">$line"; }
}
if ($k < $show) { echo"</p><p align=\"left\">"; }
$posts = mysql_query("SELECT id, nick, text, date FROM posts WHERE topic='$topic' ORDER by id $order LIMIT $limit, $show_posts[0]");
while (@$post = mysql_fetch_array($posts)) {	
	$k++;
	if ($post[0] !== $ppost[0]) {
	echo"<small><a href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$post[0]\">$post[1]:</a></small>&nbsp;<small>$post[2]</small><br/><small>$post[3]</small>";
	if ($k < $show) { echo"<br/><br/>"; }	
	}
}
echo"</p><p align=\"center\">";
if ($k == "") {
	echo"<small>&#381;inu&#269;i&#371; n&#279;ra.</small><br/>";
}
echo"$line<br/>";
$pages = ceil($tposts/$show_posts[0]);
if ($pages == "0") { $pages++; }
$page++;
if (($page == 1) and ($pages > 1)) {
	echo"<small><b>1</b></small><small>-</small>";
}
elseif ($pages > 1) {
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=0&amp;topic=$topic&amp;order=$order\">1</a></small><small>-</small>";
}
$temp = $page - 2;
$paging = $temp - 1;
if ($paging > 1) {
	echo"<small>...-</small>";
}
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page - 1;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page;
if (($temp > 1) and ($temp < $pages)) {
	echo"<small><b>$temp</b></small><small>-</small>";
}
$temp = $page + 1;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page + 2;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$paging = $temp + 1; 
if ($paging < $pages) {
	echo"<small>...-</small>";
}
if ($pages > 1) {
	if (($page == $pages) and ($pages > 1)) {
		echo"<small><b>$pages</b></small>";
	}
	elseif ($page !== $pages) {
		$paging = $pages - 1;
		echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$pages</a></small>";
	}
	elseif ($page > 1) {
		echo"<small><b>$page</b></small>";
	}
}
if ($pages > 1) {
	echo"<br/>";
}
echo"<small>Puslapis: $page/$pages</small><br/>$line<br/>";
if ($mod == "true") {
	echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">MOD</a></small><br/>$line<br/>";
}
elseif ($author == $nick) {
	echo"<small><a href=\"forum.php?action=deletetopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">I&#353;trinti tem&#261;</a></small><br/>$line<br/>";
}
echo"<small>&#381;inu&#269;i&#371;: $title[1]</small><br/><small>Per&#382;i&#363;r&#279;ta: $title[3]</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small>";
?>