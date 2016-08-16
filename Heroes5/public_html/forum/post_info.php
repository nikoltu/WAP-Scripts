<?php
$n = addslashes(htmlspecialchars($_GET['n']));
$i = addslashes(htmlspecialchars($_GET['i']));
$nr = addslashes(htmlspecialchars($_GET['nr']));
$post = mysql_fetch_array(mysql_query("SELECT nick, text, date, id FROM posts WHERE id='$nr' LIMIT 1"));
if ($post[3] == "") {
	echo"<small><b>Negalima patekti!</b></small><br/>$line<br/><small>Tokia &#382;inut&#279; neegzistuoja.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($n == "") {
	echo"<small><b>&#381;inut&#279;s informacija</b></small><br/>$line</p><p align=\"left\"><small><a href=\"forum.php?action=viewnickinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nick=$post[0]\">$post[0]:</a></small>&nbsp;<small>$post[1]</small><br/><small>$post[2]</small></p><p align=\"center\">$line<br/>";
	if ($mod == "true") {
		echo"<small><a href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$nr&amp;n=delete\">I&#353;trinti &#382;inut&#281;</a></small><br/>$line<br/>";
	}
	if (($mod == "true") or ($post[0] == "$nick")) {
		echo"<small><a href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$nr&amp;n=edit\">Redaguoti &#382;inut&#281;</a></small><br/>";
	}
	echo"<small><a href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$nr&amp;n=save\">I&#353;saugoti &#382;inut&#281;</a></small><br/>";
}
if ($n == "delete") {
	if ($mod !== "true") {
		echo"<small><b>Negalima patekti!</b></small><br/>$line<br/><small>Tik moderatoriai ir administratoriai gali tai padaryti.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	mysql_query("DELETE FROM posts WHERE id='$nr' LIMIT 1");
	mysql_query("UPDATE topics SET posts=posts-1 WHERE id='$topic' LIMIT 1");
	mysql_query("UPDATE forums SET posts=posts-1 WHERE id='$forum' LIMIT 1");
	echo"<small>&#381;inut&#279; buvo i&#353;trinta s&#279;kmingai!</small><br/>";
}
if ($n == "save") {
	$ps = mysql_fetch_array(mysql_query("SELECT id FROM pm WHERE nick='$nick' and name='$post[0]' and text='$post[1]' and date='$post[2]' and active='2' LIMIT 1"));
	if ($ps[0] > 0) {
		echo"<small>J&#363;s jau turite &#353;i&#261; &#382;inut&#281; i&#353;saugoj&#281;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	mysql_query("INSERT INTO pm(nick, name, text, date, active) VALUES ('$nick','$post[0]','$post[1]','$post[2]','2')");
	echo"<small>&#381;inut&#279; i&#353;saugota!</small><br/>$line<br/><small>Pastaba: dabar galite j&#261; rasti tarp j&#363;s&#371; i&#353;saugot&#371; priva&#269;i&#371; &#382;inu&#269;i&#371;.</small><br/>";
}
if ($n == "edit") {
	if (($mod !== "true") and ($post[0] !== "$nick")) {
		echo"<small><b>Negalite patekti!</b></small><br/>$line<br/>";
echo"<small>Tik moderatoriai, administratoriai ir autorius gali redaguoti &#353;i&#261; &#382;inut&#281;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
	mysql_close($db);
	exit;
	}
	if ($i == "") {
		echo"<small><b>Redaguoti &#382;inut&#281;</b></small><br/>$line<br/>";
		$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
		for ($i = 0; $i < 8; $i++) {
			$n = mt_rand(0,24);
			$mname = "$mname$array[$n]";
		}
		$post[1] = preg_replace("'<img src=\"[^>]*?\" alt=\"'si", "", $post[1]);
		$post[1] = str_replace("\"/>", "", $post[1]);
		$post[1] = preg_replace("'<a href=\"[^>]*?\">'si", "", $post[1]);
		$post[1] = str_replace("</a>", "", $post[1]);
		$post[1] = str_replace("</b>", "[/b]", $post[1]);
		$post[1] = str_replace("<b>", "[b]", $post[1]);
		$post = explode("<br/>", $post[1]);
		echo"<small>&#381;inut&#279;:</small><br/><input type=\"text\" name=\"$mname\" value=\"$post[0]\" maxlength=\"500\"/><br/><small><anchor>Redaguoti<go href=\"forum.php?action=postinfo&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;nr=$nr&amp;mname=$mname&amp;n=edit&amp;i=2\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>";
	}
	elseif ($i == "2") {
		$mname = addslashes(htmlspecialchars($_GET['mname']));
		$text = $_POST["$mname"];
		if ($text == "") {
			echo"<small>J&#363;s nepara&#353;&#279;te &#382;inut&#279;s.</small><br/>$line<br/>";
			echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
			mysql_close($db);
			exit;
		}
		@include_once("smilies.php");
		$date = date("m-d H:i");
		$text = "$text<br/><b>Redagavo $nick [$date]</b>";
		mysql_query("UPDATE posts SET text='$text' WHERE id='$nr' LIMIT 1");
		echo"<small>&#381;inut&#279; paredaguota!</small><br/>";
	}
}
echo"$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
?>