<?php
$i = addslashes(htmlspecialchars($_GET['i']));
$tname = addslashes(htmlspecialchars($_GET['tname']));
$mname = addslashes(htmlspecialchars($_GET['mname']));
$topic = $_POST["$tname"];
$text = $_POST["$mname"];
$aname = addslashes(htmlspecialchars($_GET['aname']));
$bname = addslashes(htmlspecialchars($_GET['bname']));
$cname = addslashes(htmlspecialchars($_GET['cname']));
$dname = addslashes(htmlspecialchars($_GET['dname']));
$ename = addslashes(htmlspecialchars($_GET['ename']));
$a = $_POST["$aname"];
$b = $_POST["$bname"];
$c = $_POST["$cname"];
$d = $_POST["$dname"];
$e = $_POST["$ename"];
if ($i == "") {
	$tname = "";
	$mname = "";
	$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$tname = "$tname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$mname = "$mname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$aname = "$aname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$bname = "$bname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$cname = "$cname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$dname = "$dname$array[$n]";
		}
	for ($i = 0; $i < 8; $i++) {
		$n = mt_rand(0,24);
		$ename = "$ename$array[$n]";
		}
	echo"<small><b>Kurti apklaus&#261;</b></small><br/>$line<br/>";
	$t_flood[0] = $user[flood];
	if ($t_flood[0] > time()) {
		$left = $t_flood[0] - time();
		echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>";
	}
	echo"<small>Apklausos pavadinimas:</small><br/><input type=\"text\" name=\"$tname\" maxlength=\"40\"/><br/><small>Klausimas:</small><br/><input type=\"text\" name=\"$mname\" maxlength=\"500\"/><br/>$line<br/><small>Atsakymai (bent du turi b&#363;ti &#303;ra&#353;yti):</small><br/><input type=\"text\" name=\"$aname\" maxlength=\"500\"/><br/><input type=\"text\" name=\"$bname\" maxlength=\"500\"/><br/><input type=\"text\" name=\"$cname\" maxlength=\"500\"/><br/><input type=\"text\" name=\"$dname\" maxlength=\"500\"/><br/><input type=\"text\" name=\"$ename\" maxlength=\"500\"/><br/><small><anchor>Kurti<go href=\"forum.php?action=addpoll&amp;id=$id&amp;forum=$forum&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;lang=$lang&amp;aname=$aname&amp;bname=$bname&amp;cname=$cname&amp;dname=$dname&amp;ename=$ename\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/><postfield name=\"$aname\" value=\"$($aname)\"/><postfield name=\"$bname\" value=\"$($bname)\"/><postfield name=\"$cname\" value=\"$($cname)\"/><postfield name=\"$dname\" value=\"$($dname)\"/><postfield name=\"$ename\" value=\"$($ename)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small>";
}
if ($i == "2") {
	if (!$topic) {
		echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Para&#353;ykite apklausos pavadinim&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/></p></card></wml>";
		mysql_close($db);
		exit;
	}
	if (!$text) {
		echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Para&#353;ykite klausim&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/></p></card></wml>";
		mysql_close($db);
		exit;
	}
	$flood = mysql_fetch_array(mysql_query("SELECT id FROM topics WHERE topic='$topic' and forum='$forum' LIMIT 1"));
	if ($flood[0] > 0) {
		echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Tokia apklausa jau egzistuoja. Pasinaudokite paie&#353;ka prie&#353; kurdami tem&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	$a = str_replace("$", "$$", $a);
	$a = str_replace("'", "\'", $a);
	$a = htmlspecialchars($a);
	$a = stripslashes($a);
	$b = str_replace("$", "$$", $b);
	$b = str_replace("'", "\'", $b);
	$b = htmlspecialchars($b);
	$b = stripslashes($b);
	$c = str_replace("$", "$$", $c);
	$c = str_replace("'", "\'", $c);
	$c = htmlspecialchars($c);
	$c = stripslashes($c);
	$d = str_replace("$", "$$", $d);
	$d = str_replace("'", "\'", $d);
	$d = htmlspecialchars($d);
	$d = stripslashes($d);
	$e = str_replace("$", "$$", $e);
	$e = str_replace("'", "\'", $e);
	$e = htmlspecialchars($e);
	$e = stripslashes($e);
	if ($a !== "") { $answers++; $pp = "$pp |=-anSwer-=| $a -==v0teS==- 0"; }
	if ($b !== "") { $answers++; $pp = "$pp |=-anSwer-=| $b -==v0teS==- 0"; }
	if ($c !== "") { $answers++; $pp = "$pp |=-anSwer-=| $c -==v0teS==- 0"; }
	if ($d !== "") { $answers++; $pp = "$pp |=-anSwer-=| $d -==v0teS==- 0"; }
	if ($e !== "") { $answers++; $pp = "$pp |=-anSwer-=| $e -==v0teS==- 0"; }
	$pp = str_replace(" |=-anSwer-=| ", "|=-anSwer-=|", $pp);
	$pp = str_replace(" -==v0teS==- ", "-==v0teS==-", $pp);
	if ($answers < 2) {
		echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Turite &#303;vesti bent du atsakymus.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	$t_flood[0] = $user[flood];
	if ($t_flood[0] > time()) {
		$left = $t_flood[0] - time();
		echo"<small><b>Floodo Apsauga</b></small><br/><small>Left: <b>$left</b> s</small><br/>$line<br/><small><anchor>Atnaujinti<go href=\"forum.php?action=addpoll&amp;id=$id&amp;forum=$forum&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;lang=$lang\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	$flood = 20 + time();
	mysql_query("UPDATE users SET posts=posts+1, topics=topics+1, flood='$flood' WHERE username='$nick' LIMIT 1");
	$topic = str_replace("$", "$$", $topic);
	$topic = str_replace("'", "\'", $topic);
	$topic = htmlspecialchars($topic);
	$topic = stripslashes($topic);
	mysql_query("INSERT INTO topics (forum, topic, author, time, posts, created, poll) VALUES ('$forum','$topic','$nick','$time','1','$time','$pp')");
	$t_id = mysql_fetch_array(mysql_query("SELECT id FROM topics WHERE topic='$topic' and forum='$forum' LIMIT 1"));
	@include_once("smilies.php");
	$date = date("m-d H:i");
	mysql_query("INSERT INTO posts(nick, text, date, topic) VALUES ('$nick','$text','[$date]','$t_id[0]')"); 	mysql_query("UPDATE forums SET topics=topics+1, posts=posts+1 WHERE id='$forum'");
	echo"<small>Apklausa sukurta s&#279;kmingai!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$t_id[0]&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
}
?>