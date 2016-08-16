<?php
$show = $page * 15;
if (($topic > 0) and ($forum > 0)) {
	$users = mysql_query("SELECT COUNT(id) FROM users WHERE time>$time and topic='$topic' and place='forum'");
}
elseif ($forum > 0) {
	$users = mysql_query("SELECT COUNT(id) FROM users WHERE time>$time and forum='$forum' and place='forum'");
}
else {
	$users = mysql_query("SELECT COUNT(id) FROM users WHERE time>$time and place='forum'");
}
$online = mysql_fetch_array($users);
echo"<small><b>Online</b></small><br/><small>Nariai: $online[0]</small><br/>$line</p><p align=\"left\">";
$h = $online[0] - $show; if ($h > 15) { $h = "15"; }


if ($topic > 0) {
	$users = mysql_query("SELECT id, username FROM users WHERE time>$time and topic='$topic' and place='forum' LIMIT $show, 15");
	while ($on = mysql_fetch_array($users)) {
		$l++;	
		echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>";
		if ($l < $h) { echo"<br/>"; }
	}
}
elseif ($forum > 0) {
	$users = mysql_query("SELECT id, username, topic FROM users WHERE time>$time and forum='$forum' and place='forum' LIMIT $show, 15");
	while ($on = mysql_fetch_array($users)) {
		$l++;	
		if ($on[2] == 0) {
			echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>";
		}
		else {
			$top = mysql_fetch_array(mysql_query("SELECT topic FROM topics WHERE id='$on[2]' LIMIT 1"));
			$top[0] = "[$top[0]]";
			echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>&nbsp;<small>$top[0]</small>";
		}
		if ($l < $h) { echo"<br/>"; }
	}
}
else {
	$users = mysql_query("SELECT id, username, forum, topic FROM users WHERE time>$time and place='forum' LIMIT $show, 15");
	while ($on = mysql_fetch_array($users)) {	
		$l++;
		if (($on[2] == 0) or ($on[2] == "100") or ($on[2] == "101")) {
			echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>";
		}
		elseif ($on[3] == 0) {
			if ($lvl > 2) {
				$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$on[2]' LIMIT 1"));
			}
			else {
				$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$on[2]' and level!=1 LIMIT 1"));
			}
			if ($for[0] == "") { $for[0] = ""; } else { $for[0] = "[$for[0]]"; }
			echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>&nbsp;<small>$for[0]</small>";
		}
		else {
			if ($lvl > 2) {
				$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$on[2]' LIMIT 1"));
			}
			else {
				$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$on[2]' and level!='1' LIMIT 1"));
			}	
			if ($for[0] == "") { $for[0] = ""; } else { $top = mysql_fetch_array(mysql_query("SELECT topic FROM topics WHERE id='$on[3]' LIMIT 1"));
			$for[0] = "[$for[0] &gt; $top[0]]";
		}
		echo"<small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$on[1]\">$on[1]</a></small>&nbsp;<small>$for[0]</small>";
		}
	if ($l < $h) { echo"<br/>"; }
	}
}
echo"</p><p align=\"center\">$line<br/>";
$show = $show + 15;
$pages = ceil($online[0]/15);
if ($pages == "0") { $pages++; }
if ($show < $online[0]) {
	$pager = $page + 1;
	echo"<small><a href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;page=$pager\">$next</a></small><br/>";
	}
if ($page > 0) {
	$pager = $page - 1;
	echo"<small><a href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum&amp;page=$pager\">$back</a></small><br/>";
	}
$page++;
echo"<small>Puslapis: $page/$pages</small><br/>$line<br/>";
if ($topic > 0) {
	echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";		}
elseif ($forum > 0) {
	echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
}
else {
	echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
}
?>