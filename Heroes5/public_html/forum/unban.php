<?php
$name = addslashes(htmlspecialchars($_GET['name'])); if (!$name) { $name = ""; }
if (($level !== "King") and ($level !== "Master") and ($user[username]!=="@Makatas") and ($level !== "Captain")) {
   echo"<small>Negalite to daryti.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
   }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
$i = addslashes(htmlspecialchars($_GET['i']));
$check = mysql_fetch_array(mysql_query("SELECT id, level FROM users WHERE username='$name' LIMIT 1"));
if ($check[0] == "") {
   echo"<small>Toks vartotojas neegzistuoja.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
   }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
if (($check[1] == "King") or ($check[1] == "Master") or ($check[1] == "Captain")) {
   echo"<small>Negalite atbaninti administratori&#371; ar moderatori&#371;.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
   }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
if ($i == "") { 
   echo"<small><b>Atbaninti nar&#303;</b></small><br/>$line<br/><small>Prie&#382;astis:</small><br/><input type=\"text\" name=\"reason\"/><br/><small><anchor>Atbaninti<go href=\"forum.php?action=unban&amp;id=$id&amp;lang=$lang&amp;i=2&amp;name=$name\" method=\"post\"><postfield name=\"reason\" value=\"$(reason)\"/></go></anchor></small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
   }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small><br/>";
   }
}
if ($i == "2") {
   $reason = $_POST['reason'];
   mysql_query("UPDATE users SET ban='' WHERE username='$name' LIMIT 1");
   echo"<small>Narys atbanintas s&#279;kmingai!</small><br/>$line<br/>";
   $date = date("m-d H:i");
   mysql_query("INSERT INTO modlog (nick, action, name, date, message) VALUES ('$nick','unban','$name','$date','$reason')");
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;lang=$lang\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
   }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small><br/>";
   }
}
?>