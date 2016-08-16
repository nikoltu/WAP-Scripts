<?php
$i = addslashes(htmlspecialchars($_GET['i']));
$mname = addslashes(htmlspecialchars($_GET['mname']));
$text = $_POST["$mname"];
if ($mod !== "true") {
   if ($top[closed] == "1") {
      echo"<small>&#352;i tema yra u&#382;rakinta ir joje negalite ra&#353;yti.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
   mysql_close($db);
   exit;
   }
}
if ($i == "") {
   $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
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
   echo"<small>&#381;inut&#279;:</small><br/><input type=\"text\" name=\"$mname\" maxlength=\"500\"/><br/>";
echo"<small><anchor>Ra&#353;yti<go href=\"forum.php?action=reply&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;mname=$mname&amp;i=2\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
}
if ($i == "2") {
   if ($text == "") {
      echo"<small>J&#363;s nepara&#353;&#279;te savo &#382;inut&#279;s.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   @include_once("smilies.php");
   $flood = mysql_fetch_array(mysql_query("SELECT id FROM posts WHERE text='$text' and nick='$nick' and topic='$topic'"));
   if ($flood[0] > 0) {
      echo"<small>&#352;i &#382;inut&#279; jau egzistuoja.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/></p></card></wml>";
      mysql_close($db);
      exit;
   }   
   $flood[0] = $user[flood];
   if ($flood[0] > time()) {
      $left = $flood[0] - time();
      echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/><small><anchor>Atnaujinti<go href=\"forum.php?action=reply&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;mname=$mname&amp;i=2\" method=\"post\"><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $flood = $flood[0] + 20;
   mysql_query("UPDATE users SET posts=posts+1, flood='$flood' WHERE username='$nick' LIMIT 1");
   $date = date("m-d H:i");
if(($user[level]<5) and ($name!=="@Makatas")){
echo"<small>Rasyti galima tik nuo 5 levelio<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
if(($user[member]=="0") and ($name!=="@Makatas")){
echo"<small>Rasyti forume gali tik tikri nariai<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
   mysql_query("INSERT INTO posts(nick, text, date, topic) VALUES ('$nick','$text','[$date]','$topic')");
   mysql_query("UPDATE topics SET time='$time', posts=posts+1 WHERE id='$topic' LIMIT 1");
   mysql_query("UPDATE forums SET posts=posts+1 WHERE id='$top[forum]'");
   echo"<small>&#381;inut&#279; &#303;ra&#353;yta s&#279;kmingai!</small>";

echo"<br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/>";
}
?>