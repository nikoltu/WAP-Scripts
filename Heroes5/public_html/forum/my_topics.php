<?php
$ttopics = mysql_num_rows(mysql_query("SELECT id FROM topics WHERE author='$nick' ORDER by id DESC LIMIT 20"));
$show_topics = 10;
$hot_topics = 250;
$login = $user[llogin];
echo"<small><b>Mano Temos</b></small><br/>$line</p><p align=\"left\">";
$limit = $page * $show_topics;
$topics = mysql_query("SELECT id, topic, posts, closed, time, bold, forum FROM topics WHERE hidden='0' and author='$nick' ORDER by time DESC LIMIT $limit, $show_topics");
while ($topic = mysql_fetch_array($topics)) {	
	$k++;
	$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$topic[6]' LIMIT 1"));
	if ($topic[5] > 0) { $b1 = "<b>"; $b2 = "</b>"; } else { $b1 = ""; $b2 = ""; }	
	if (($login[0] < $topic[4])  and ($topic[3] > 0)) {
	echo"<img src=\"img/locked_new.gif\" alt=\"[#]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
	}
	elseif ($topic[3] > 0) {
	echo"<img src=\"img/locked.gif\" alt=\"[#]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
	}
	elseif ($login[0] < $topic[4]) {
	if ($topic[2] >= $hot_topics) {
		echo"<img src=\"img/folder_hot_new.gif\" alt=\"[+]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
		}
	else {
		echo"<img src=\"img/folder_new.gif\" alt=\"[+]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
		}
	}
	else {
	if ($topic[2] >= $hot_topics) {
		echo"<img src=\"img/folder_hot.gif\" alt=\"[-]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
		}
	else {
		echo"<img src=\"img/folder.gif\" alt=\"[-]\"/><small>$b1<a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$topic[6]&amp;topic=$topic[0]\">$topic[1] [$for[0]]</a>$b2</small>&nbsp;";
		}
	}
	echo"<small>[$topic[2]]</small><br/>";
	}
echo"</p><p align=\"center\">";
if ($k == "") {
	echo"<small>N&#279;ra tem&#371;.</small><br/>";
}
echo"$line<br/>";
@$pages = ceil($ttopics/$show_topics);
if ($pages == "0") { $pages++; }
if ((($page * $show_topics) + $show_topics) < $ttopics) {
	$pager = $page + 1;
	echo"<small><a href=\"forum.php?action=mytopics&amp;id=$id&amp;page=$pager\">$next</a></small><br/>";
}
if ($page > 0) {
	$pager = $page - 1;
	echo"<small><a href=\"forum.php?action=mytopics&amp;id=$id&amp;page=$pager\">$back</a></small><br/>";
}
$page++;
echo"<small>Puslapis: $page/$pages</small><br/>$line<br/><small>Pastaba: parodoma 20 j&#363;s&#371; sukurt&#371; tem&#371;, &#303; kurias buvo v&#279;liausiai atsakyta - taip patogiau bus pasiekti jas.</small><br/>$line<br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small>";
?>