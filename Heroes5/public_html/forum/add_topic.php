<?php
$i = addslashes(htmlspecialchars($_GET['i']));
$tname = addslashes(htmlspecialchars($_GET['tname']));
$mname = addslashes(htmlspecialchars($_GET['mname']));
$topic = $_POST["$tname"];
$text = $_POST["$mname"];
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

   echo"<small><b>Kurti tem&#261;</b></small><br/>$line<br/>";
   $t_flood[0] = $user[flood];
   if ($t_flood[0] > time()) {
      $left = $t_flood[0] - time();
      echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>"; 
   }
   echo"<small>Tema:</small><br/><input type=\"text\" name=\"$tname\" maxlength=\"40\"/><br/><small>&#381;inut&#279;:</small><br/><input type=\"text\" name=\"$mname\" maxlength=\"500\"/><br/><small><anchor>Kurti<go href=\"forum.php?action=addtopic&amp;id=$id&amp;forum=$forum&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;lang=$lang\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id&amp;lang=$lang\">$back_forums</a></small>";
}
if ($i == "2") {
   if (!$topic) {
      echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Para&#353;ykite temos pavadinim&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (!$text) {
      echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Para&#353;ykite temos &#382;inut&#281;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
if(($user[level]<5) and ($name!=="@Makatas")){
echo"<small>Kurti galima tik nuo 5 levelio<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
if(($user[member]=="0") and ($name!=="@Makatas")){
echo"<small>Kurti gali tik tikri nariai<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
   $flood = mysql_fetch_array(mysql_query("SELECT id FROM topics WHERE topic='$topic' and forum='$forum' LIMIT 1"));
   if ($flood[0] > 0) {
      echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Tokia tema jau egzistuoja. Pasinaudokite paie&#353;ka prie&#353; kurdami tem&#261;.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $t_flood[0] = $user[flood];
   if ($t_flood[0] > time()) {
      $left = $t_flood[0] - time();
      echo"<small><b>Floodo Apsauga</b></small><br/><small>Left: <b>$left</b> s</small><br/>$line<br/><small><anchor>Atnaujinti<go href=\"forum.php?action=addtopic&amp;id=$id&amp;forum=$forum&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;lang=$lang\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $flood = 20 + time();
   mysql_query("UPDATE users SET posts=posts+1, topics=topics+1, flood='$flood' WHERE username='$nick' LIMIT 1");
   $topic = htmlspecialchars($topic);
   $topic = str_replace("$", "$$", $topic);
   $topic = str_replace("'", "\'", $topic);
   $topic = stripslashes($topic);
   mysql_query("INSERT INTO topics (forum, topic, author, time, posts, created) VALUES ('$forum','$topic','$nick','$time','1','$time')");
   $t_id = mysql_fetch_array(mysql_query("SELECT id FROM topics WHERE topic='$topic' and forum='$forum' LIMIT 1"));
   @include_once("smilies.php");
   $date = date("m-d H:i");
   mysql_query("INSERT INTO posts(nick, text, date, topic) VALUES ('$nick','$text','[$date]','$t_id[0]')");
   mysql_query("UPDATE forums SET topics=topics+1, posts=posts+1 WHERE id='$forum'");
   echo"<small>Tema sukurta s&#279;kmingai!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$t_id[0]&amp;lang=$lang\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum&amp;lang=$lang\">$back_forum</a></small><br/>";
}
?>