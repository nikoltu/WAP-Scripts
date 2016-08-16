<?php
$name = strtolower(addslashes(htmlspecialchars($_GET['nick'])));
if ($name == "") {
	echo"<small>Nepasirinkote vartotojo, kurio informacij&#261; norite per&#382;i&#363;r&#279;ti.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
	if ($forum !== "") {
		echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
		}
	if ($forum == "") {
		echo"<small><a href=\"index.php?id=$id\">$home</a></small><br/>";
		}
	echo"</p></card></wml>";
	mysql_close($db);
	exit;
}

$info = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$name' LIMIT 1"));




if (($info[status] !== "King") and ($info[status] !== "Master") and ($info[status] !== "Captain")) {
	$posts = $info[posts];
	if (($info[9] < 2) and ($posts >= 100)) {
		$update = mysql_query("UPDATE users SET status='2' WHERE username='$name' LIMIT 1");
		$info[9] = 2;
	}
	elseif (($info[9] < 3) and ($posts >= 250)) {
		$update = mysql_query("UPDATE users SET status='3' WHERE username='$name' LIMIT 1");
		$info[9] = 3;
	}
	elseif (($info[9] < 4) and ($posts >= 500)) {
		$update = mysql_query("UPDATE users SET status='4' WHERE username='$name' LIMIT 1");
		$info[9] = 4;
	}
	elseif (($info[9] < 5) and ($posts >= 1000)) {
		$update = mysql_query("UPDATE users SET status='5' WHERE username='$name' LIMIT 1");
		$info[9] = 5;
	}
	elseif (($info[9] < 6) and ($posts >= 2500)) {
		$update = mysql_query("UPDATE users SET status='6' WHERE username='$name' LIMIT 1");
		$info[9] = 6;
	}
	elseif (($info[9] < 7) and ($posts >= 5000)) {
		$update = mysql_query("UPDATE users SET status='7' WHERE username='$name' LIMIT 1");
		$info[9] = 7;
	}
	elseif (($info[9] < 8) and ($posts >= 10000)) {
		$update = mysql_query("UPDATE users SET status='8' WHERE username='$name' LIMIT 1");
		$info[9] = 8;
	}
	elseif (($info[9] < 9) and ($posts >= 25000)) {
		$update = mysql_query("UPDATE users SET status='9' WHERE username='$name' LIMIT 1");
		$info[9] = 9;
	}
}
if ($info[id] == "") {
	echo"<small>Toks vartotojas neegzistuoja.</small><br/>$line<br/>";
	if ($topic !== "") {
		echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
		}
	if ($forum !== "") {
		echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
		}
	if ($forum == "") {
		echo"<small><a href=\"index.php?id=$id\">$home</a></small><br/>";
		}
	echo"</p></card></wml>";
	mysql_close($db);
	exit;
}
include("names/classes.php");
$class = $class_name[$info['class']];
echo"<small><b>Herojaus informacija</b></small><br/><small><u>$info[username]</u></small><br/><small>$class</small><br/>";
if ($info[time] > $time) {
	echo"<small>[Prisijung&#281;s]</small><br/>";
}
else {
	echo"<small>[Neprisijung&#281;s]</small><br/>";
}
echo"$line<br/><small><a href=\"forum.php?action=sendpm&amp;id=$id&amp;forum=$forum&amp;name=$name&amp;topic=$topic\">Si&#371;sti priva&#269;i&#261; &#382;inut&#281; &gt;</a></small><br/>$line<br/>";
echo"<small>ID: $info[0]</small><br/>";
include("names/heroes.php");
$heroe = $heroe_name[$info[identify]];
echo"<img src=\"img/heroes/$info[identify].gif\" alt=\"$heroe\"/><br/>";

if ($info[ban] > $time) {
	$left = $info[ban] - $time;
	echo"<small><b>Narys u&#382;banintas!</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>";
}
echo"<small><b><u>Lygis: $info[level]</u></b></small><br/><small><b>Ataka: $info[attack]</b></small><br/><small><b>Gynyba: $info[defense]</b></small><br/><small><b>I&#353;mintis: $info[knowledge]</b></small><br/><small><b>Galia: $info[power]</b></small><br/>$line<br/>";

if ($info[status] == "Master") {
	$status = "Moderatorius";
}
elseif ($info[status] == "King") {
	$status = "Administratorius";
}
elseif ($info[status] == "Captain") {
	$status = "Globalus Moderatorius";
}
else {
	$status = "Narys";
}
echo"<small><b>Forumo statusas:</b> $status</small><br/><small><b>&#381;inut&#279;s forume:</b> $info[posts]</small><br/><small><b>Temos forume:</b> $info[topics]</small><br/>$line<br/>";
if (($user[status] == "King") or ($user[status] == "Master") or ($user[status] == "Captain")) {
	if (($status !== "King") and ($status !== "Master") and ($status !== "Captain")) {
		if ($info[ban] <= $time) {
			echo"<small><a href=\"forum.php?action=ban&amp;id=$id&amp;forum=$forum&amp;name=$name&amp;topic=$topic\">U&#382;baninti nar&#303;</a></small><br/>";
		}
		else {
			echo"<small><a href=\"forum.php?action=unban&amp;id=$id&amp;forum=$forum&amp;name=$name&amp;topic=$topic\">Atbaninti nar&#303;</a></small><br/>";
		}
	}
echo"$line<br/>";
}
if ($topic !== "") { echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>"; }
if ($forum !== "") { echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>"; }
if ($forum == "") { echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";	}
?>