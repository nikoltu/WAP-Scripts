<?php
$name = addslashes(htmlspecialchars($_GET['name'])); if (!$name) { $name = ""; }
$i= addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
if (($level !== "Master") and ($user[username]!=="@Makatas") and ($level !== "King") and ($level !== "Captain")) {
   echo"<small>Negalite to daryti.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";    }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
$check = mysql_fetch_array(mysql_query("SELECT id, level FROM users WHERE username='$name' LIMIT 1"));
if ($check[0] == "") {
   echo"<small>Toks vartotojas neegzistuoja.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";    }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
if (($check[1] == "King") or ($check[1] == "Master") or ($chech[1]=="@Makatas") or ($check[1] == "Captain")) {
   echo"<small>Negalite u&#382;baninti administratori&#371; ar moderatori&#371;.</small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";    }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
   }
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
if ($i == "") { 
   echo"<small><b>U&#382;baninti nar&#303;</b></small><br/>$line<br/><small>Prie&#382;astis:</small><br/><input type=\"text\" name=\"reason\"/><br/><small>Bano trukm&#279;:</small><br/><select name=\"ban\"><option value=\"10\">10 minu&#269;i&#371;</option><option value=\"30\">30 minu&#269;i&#371;</option><option value=\"60\">1 valanda</option><option value=\"120\">2 valandos</option><option value=\"360\">6 valandos</option><option value=\"720\">12 valand&#371;</option><option value=\"1440\">1 diena</option><option value=\"2880\">2 dienos</option><option value=\"10080\">7 dienos</option></select><br/><small><anchor>U&#382;baninti<go href=\"forum.php?action=ban&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;i=2&amp;name=$name\" method=\"post\"><postfield name=\"ban\" value=\"$(ban)\"/><postfield name=\"reason\" value=\"$(reason)\"/></go></anchor></small><br/>$line<br/>";
   if ($topic !== "") {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
   }
   if ($forum !== "") {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";    }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
   }
}
if ($i == "2") {
   $ban = $_POST['ban'];
   $reason = $_POST['reason'];
   $btime = $ban * 60 + $time;
   $update = mysql_query("UPDATE users SET ban='$btime' WHERE username='$name' LIMIT 1");
   echo"<small>Narys u&#382;banintas s&#279;kmingai!</small><br/>$line<br/>";
   $date = date("m-d H:i");
   mysql_query("INSERT INTO modlog (nick, action, name, date, message) VALUES ('$user[username]','ban','$name','$date','$reason|--TiMe--|$ban')");
   if ($topic > 0) {
      echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
   }
   if ($forum > 0) {
      echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";    }
   if ($forum == "") {
      echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
   }
}
?>