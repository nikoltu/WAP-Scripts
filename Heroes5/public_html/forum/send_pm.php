<?php
$name = addslashes(htmlspecialchars($_GET['name'])); if (!$name) { $name = ""; }
$i= addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
if(($user[level]<5) and ($name!=="@Makatas")){
echo"<small>Rasyti galima tik nuo 5 levelio<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
if(($user[member]=="0") and ($name!=="@Makatas")){
echo"<small>Rasyti pm gali tik tikri nariai<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
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
if (strtolower($nick) == strtolower($name)) {
   echo"<small>Negalite si&#371;sti priva&#269;ios &#382;inut&#279;s sau.</small><br/>$line<br/>";
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
$check = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='$name' LIMIT 1"));
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
if ($i == "") { 
echo"<small><b>Privati &#382;inut&#279;</b></small><br/>$line<br/>";
$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
for ($i = 0; $i < 8; $i++) {
   $n = mt_rand(0,24);
   $tname = "$tname$array[$n]";
   }
for ($i = 0; $i < 8; $i++) {
   $n = mt_rand(0,24);
   $mname = "$mname$array[$n]";
   }
$flood[0] = $user[flood];
if ($flood[0] > time()) {
   $left = $flood[0] - time();
   if ($left > 0) {
      echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>";
   }
}
echo"<small>Vardas:</small><br/><input type=\"text\" name=\"$tname\" value=\"$name\" maxlength=\"14\"/><br/><small>&#381;inut&#279;:</small><br/><input type=\"text\" name=\"$mname\" value=\"$msg[0]\" maxlength=\"500\"/><br/><small><anchor>I&#353;si&#371;sti<go href=\"forum.php?action=sendpm&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;name=$name\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/>";
if ($topic !== "") {
   echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
}
if ($forum !== "") {
   echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
}
if ($forum == "") {
   echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
}
echo"</p></card></wml>";
mysql_close($db);
exit;
}
if ($i == "2") {
$tname = addslashes(htmlspecialchars($_GET['tname'])); if (!$tname) { $tname = ""; }
$name = $_POST["$tname"];
$mname = addslashes(htmlspecialchars($_GET['mname'])); if (!$mname) { $mname = ""; }
$text = $_POST["$mname"];
if ($text == "") {
   echo"<small>J&#363;s nepara&#353;&#279;te &#382;inut&#279;s.</small><br/>$line<br/>";
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
$flood[0] = $user[flood];
if ($flood[0] > time()) {
   $left = $flood[0] - time();
   echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/><small><anchor>Atnaujinti<go href=\"forum.php?action=sendpm&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;name=$name\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/>";
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
$flood = $flood[0] + 20;
mysql_query("UPDATE users SET flood='$flood' WHERE username='$nick' LIMIT 1");
$text=str_replace("TOB.lt","",$text);
@include_once("smilies.php");
$date = date("m-d H:i");
mysql_query("INSERT INTO pm(nick, name, text, date, active) VALUES ('$name','$nick','$text','[$date]','0')");
mysql_query("UPDATE users SET all_pm=all_pm+1, new_pm=new_pm+1 WHERE username='$name' LIMIT 1");
echo"<small>Privati &#382;inut&#279; i&#353;si&#371;sta s&#279;kmingai!</small><br/>$line<br/><small><b>&#381;inut&#279;:</b></small><br/><small>$text</small><br/>$line<br/>";
if ($topic !== "") {
   echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/>";
}
if ($forum !== "") {
   echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
}
if ($forum == "") {
   echo"<small><a href=\"forum.php?id=$id\">$back_forums</a></small><br/>";
}
}
?>