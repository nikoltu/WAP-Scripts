<?php
$i = addslashes(htmlspecialchars($_GET['i']));
$type = addslashes(htmlspecialchars($_GET['type']));
$mname = addslashes(htmlspecialchars($_GET['mname']));
$page = addslashes(htmlspecialchars($_GET['page']));
$text = $_POST["$mname"];
if ($i == "") {
	$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$mname = "$mname$array[$n]";
		}
	echo"<small><b>Forumo paie&#353;ka</b></small><br/>$line<br/><small>Pagal &#382;od&#303;:</small><br/><input type=\"text\" name=\"$mname\" maxlength=\"180\"/><br/><small><anchor>Tem&#371; pavadinimuose<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=tnames\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	if ($forum == "") {
		echo"<small><anchor>Tem&#371; &#382;inut&#279;se<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=tposts\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	}
	echo"$line<br/><small>Pagal nario vard&#261;:</small><br/><input type=\"text\" name=\"$mname\" maxlength=\"180\"/><br/>";
	if ($forum == "") {
		echo"<small><anchor>Nario &#382;inut&#279;s<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=uposts\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	}
	echo"<small><anchor>Nario temos<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=utopics\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/>";
	if ($forum !== "") {
		echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
	}
	echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
}
if ($i == "2") {	
	if ($text == "") {
		echo"<small>J&#363;s nepara&#353;&#279;te paie&#353;kos &#382;inut&#279;s.</small><br/>$line<br/>";
		if ($forum !== "") {
			echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
		}
		echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
		echo"</p></card></wml>";
		mysql_close($db);
		exit;
	}
	$show_topics[0] = 8;
	$limit = $page * $show_topics[0];
	if (($type !== "tnames") and ($type !== "utopics")) { @include_once("smilies.php"); }
	if ($forum !== "") {
		if ($type == "tnames") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT id FROM topics WHERE forum='$forum' and topic LIKE '%".$text."%'")); }
		if ($type == "utopics") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT id FROM topics WHERE forum='$forum' and author='$text'")); }
	}
	else {
		if ($type == "tnames") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT id FROM topics WHERE topic LIKE '%".$text."%'")); }
		if ($type == "tposts") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT topic FROM posts WHERE text LIKE '%".$text."%'")); }
		if ($type == "uposts") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT topic FROM posts WHERE nick='$text'")); }
		if ($type == "utopics") { $total = mysql_num_rows(mysql_query("SELECT DISTINCT id FROM topics WHERE author='$text'")); }
	}
	echo"<small><b>Forumo paie&#353;ka</b></small><br/>";	
	if ($total == "0") {
		echo"$line<br/><small>Nerasta rezultat&#371;.</small><br/>";
	}
	else {
		echo"<small>Rasta: $total</small><br/>$line<br/>";
	}
	if ($forum !== "") {
		if ($type == "tnames") { $searching = mysql_query("SELECT id, topic FROM topics WHERE forum='$forum' and topic LIKE '%".$text."%' LIMIT $limit, $show_topics[0]"); }
		if ($type == "utopics") { $searching = mysql_query("SELECT id, topic FROM topics WHERE forum='$forum' and author='$text' LIMIT $limit, $show_topics[0]"); }
	}
	else {
		if ($type == "tnames") { $searching = mysql_query("SELECT id, topic, forum FROM topics WHERE topic LIKE '%".$text."%' LIMIT $limit, $show_topics[0]"); }
		if ($type == "tposts") { $searching = mysql_query("SELECT DISTINCT topic FROM posts WHERE text LIKE '%".$text."%' LIMIT $limit, $show_topics[0]"); }
		if ($type == "uposts") { $searching = mysql_query("SELECT DISTINCT topic FROM posts WHERE nick='$text' LIMIT $limit, $show_topics[0]"); }
		if ($type == "utopics") { $searching = mysql_query("SELECT id, topic, forum FROM topics WHERE author='$text' LIMIT $limit, $show_topics[0]"); }
	}
	while ($search = mysql_fetch_array($searching))
	{
		if ($type == "tnames") {
			if ($forum !== "") {
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$search[0]\">$search[1]</a></small><br/>";
			}
			else {
				$for = mysql_fetch_array(mysql_query("SELECT title FROM forums WHERE id='$search[2]' LIMIT 1"));
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$search[2]&amp;topic=$search[0]\">$search[1]</a>&nbsp;[$for[0]]</small><br/>";
			}
		}
		if ($type == "utopics") {
			if ($forum !== "") {
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$search[0]\">$search[1]</a></small><br/>";
			}
			else {
				$for = mysql_fetch_array(mysql_query("SELECT title, level FROM forums WHERE id='$search[2]' LIMIT 1"));
			if (($for[1] == "1") and ($lvl <= 2)) {
				echo"<small>[SLAPTA]</small><br/>";
			}
			else {
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$search[2]&amp;topic=$search[0]\">$search[1]</a>&nbsp;[$for[0]]</small><br/>";
			}
		}
	}
	if ($type == "tposts") {
		if ($forum !== "") {
			$top = mysql_fetch_array(mysql_query("SELECT topic FROM topics WHERE id='$search[0]' LIMIT 1"));
			echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$search[0]\">$top[0]</a></small><br/>";
		}
		else {
			$top = mysql_fetch_array(mysql_query("SELECT topic, forum FROM topics WHERE id='$search[0]' LIMIT 1"));
			$for = mysql_fetch_array(mysql_query("SELECT title, level FROM forums WHERE id='$top[1]' LIMIT 1"));
			if (($for[1] == "1") and ($lvl <= 2)) {
				echo"<small>[SLAPTA]</small><br/>";
			}
			else {
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$top[1]&amp;topic=$search[0]\">$top[0]</a>&nbsp;[$for[0]]</small><br/>";
			}
		}
	}
	if ($type == "uposts") {
		if ($forum !== "") {
			$top = mysql_fetch_array(mysql_query("SELECT topic FROM topics WHERE id='$search[0]' LIMIT 1"));
			echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$search[0]\">$top[0]</a></small><br/>";
		}
		else {
			$top = mysql_fetch_array(mysql_query("SELECT topic, forum FROM topics WHERE id='$search[0]' LIMIT 1"));
			$for = mysql_fetch_array(mysql_query("SELECT title, level FROM forums WHERE id='$top[1]' LIMIT 1"));
			if (($for[1] == "1") and ($lvl <= 2)) {
				echo"<small>[SLAPTA]</small><br/>";
			}
			else {
				echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$top[1]&amp;topic=$search[0]\">$top[0]</a>&nbsp;[$for[0]]</small><br/>";
			}
		}
		}
	}
	$pages = ceil($total / $show_topics[0]);
	if ($pages == "0" ) { $pages = 1; }
	echo"$line<br/>";
	if ($pages > $page + 1) {
		$pager = $page + 1;
		echo"<small><anchor>$next<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=$type&amp;page=$pager\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	}
	if ($page > 0) {
		$pager = $page - 1;
		echo"<small><anchor>$back<go href=\"forum.php?action=search&amp;id=$id&amp;forum=$forum&amp;mname=$mname&amp;i=2&amp;type=$type&amp;page=$pager\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	}
	$page++;
	echo"<small>Puslapis: $page/$pages</small><br/>$line<br/><small><a href=\"forum.php?id=$id&amp;action=search&amp;forum=$forum\">$back</a></small><br/>";
	if ($forum !== "") {
		echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>"; 	}
	else {
		echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
	}
}
?>