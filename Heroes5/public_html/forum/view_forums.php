<?php
echo"<img src=\"img/banner.gif\" alt=\"[Heroes]\"/><br/>";
$saved = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM pm WHERE nick='$nick' and active='2' LIMIT 50"));
echo"<small><b>Forumas</b></small><br/>";
echo"<small><a href=\"forum.php?action=online&amp;id=$id\">[Online: $online[0]]</a></small><br/>$line</p><p align=\"left\">";
echo"<img src=\"img/inbox.gif\" alt=\"\"/>&nbsp;<small><a href=\"pm.php?id=$id&amp;forum=$forum\">D&#279;&#382;ut&#279; [$pm/$tpm]</a></small><br/>";
echo"<img src=\"img/saved.gif\" alt=\"\"/>&nbsp;<small><a href=\"pm.php?action=saved&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">I&#353;saugotos [$saved[0]]</a></small></p><p align=\"center\">$line</p><p align=\"left\">";
$onl = mysql_query("SELECT forum FROM users WHERE time>'$time' and place='forum' and forum!='' ORDER by forum DESC LIMIT $online[0]");
while ($onn = mysql_fetch_array($onl)) {
	@$on[$onn[0]]++;
}
if ($lvl > 2) {
	$forums = mysql_query("SELECT id, title, topics, posts FROM forums ORDER by id ASC");
}
else {
	$forums = mysql_query("SELECT id, title, topics, posts FROM forums WHERE level!=1 ORDER by id ASC");
}
while ($forum = mysql_fetch_array($forums)) {
	$onl = $on[$forum[0]]; if ($onl == "") { $onl = 0; }
	if ($forum[0] == "2") {
		echo"<b>";
	}
	echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum[0]\">$forum[1]</a></small>";
	if ($forum[0] == "2") {
		echo"</b>";
	}
	echo"&nbsp;<small>[$forum[2]/$forum[3]-$onl]</small><br/>";
	if ($forum[0] == "5") {
		echo"</p><p align=\"center\">$line</p><p align=\"left\">";
	}
}
echo"</p><p align=\"center\">$line</p><p align=\"left\"><img src=\"img/my_topics.gif\" alt=\"\"/>&nbsp;<small><a href=\"forum.php?action=mytopics&amp;id=$id\">Mano Temos</a></small><br/><img src=\"img/active_topics.gif\" alt=\"\"/>&nbsp;<small><a href=\"forum.php?action=activetopics&amp;id=$id\">Aktyvios Temos</a></small><br/><img src=\"img/new_topics.gif\" alt=\"\"/>&nbsp;<small><a href=\"forum.php?action=newtopics&amp;id=$id\">Naujos Temos</a></small></p><p align=\"center\">$line<br/><small><a href=\"forum.php?action=search&amp;id=$id\">Paie&#353;ka</a></small><br/><small><a href=\"forum.php?action=smilies&amp;id=$id\">Veidukai</a></small><br/>";
///echo"<small><a href=\"forum.php?action=stats&amp;id=$id\">Statistika</a></small><br/>";
///if (($level == "Administrator") or ($level == "Moderator") or ($level == "Global Moderator")) {
///	echo"<small><a href=\"forum.php?id=$id&amp;action=modlog\">MODLOG</a></small><br/>";
///}
include_once("names/classes.php");
$class = $class_name[$user['class']];
echo"$line<br/><small><b><u>$nick</u></b></small><br/><small><u>$class [$user[level]]</u></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small><br/>";
?>