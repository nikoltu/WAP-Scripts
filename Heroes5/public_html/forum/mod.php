<?php
$n = addslashes(htmlspecialchars($_GET['n']));
$i = addslashes(htmlspecialchars($_GET['i']));
if ($mod !== "true") {
   echo"<small><b>Negalite &#303;ieti!</b></small><br/>$line<br/><small>Tai skirta tik &#353;io forumo moderatoriams ir administratoriams.</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}


if ($topic > 0) {
   $tforum[0] = $frm[title];
   if ($n == "") {
   echo"<small><b>$tforum[0]</b></small><br/><small>$top[topic]</small><br/>$line<br/><small>Pasirinkite k&#261; norite daryti:</small><br/>$line<br/><small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=delete\">I&#353;trinti tem&#261;</a></small><br/><small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=rename\">Pervadinti tem&#261;</a></small><br/>$line<br/>";
   if ($level == "King" || $user[username]=="@Makatas") {
      if ($top[pinned] == 2) {
         echo"<small>Global topic</small><br/>";
      }
      else {
         echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=global\">Globali tema</a></small><br/>";
      }
   }
   if ($top[pinned] == 0) {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=pin\">Prisegti tem&#261;</a></small><br/>";
   }
   else {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=unpin\">Nusegti tem&#261;</a></small><br/>";
   }
   echo"$line<br/>";
   if ($top[closed] == 0) {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=close\">U&#382;rakinti tem&#261;</a></small><br/>";
   }
   else {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=open\">Atrakinti tem&#261;</a></small><br/>";
   }
   if ($top[bold] == 0) {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=bold\">Pary&#353;kinti tem&#261;</a></small><br/>";
   }
   else {
      echo"<small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;n=normal\">Nuimti pary&#353;kinim&#261;</a></small><br/>";
   }
   echo"$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "global") {
   mysql_query("UPDATE topics SET pinned='2' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s padar&#279;te &#353;i&#261; tem&#261; globalia!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "bold") {
   mysql_query("UPDATE topics SET bold='1' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s pary&#353;kinote tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "normal") {
   mysql_query("UPDATE topics SET bold='0' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s nu&#279;mete pary&#353;kinim&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "pin") {
   mysql_query("UPDATE topics SET pinned='1' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s priseg&#279;te tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "unpin") {
   mysql_query("UPDATE topics SET pinned='0',time=$time WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s nuseg&#279;te tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "hide") {
   mysql_query("UPDATE topics SET hidden='1' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s pasl&#279;p&#267;te tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "show") {
   mysql_query("UPDATE topics SET hidden='0' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s prad&#279;jote rodyti tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "close") {
   mysql_query("UPDATE topics SET closed='1' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s u&#382;rakinote tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "open") {
   mysql_query("UPDATE topics SET closed='0' WHERE id='$topic' LIMIT 1");
   echo"<small>J&#363;s atrakinote tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "delete") {
   mysql_query("DELETE FROM voting WHERE topic='$topic'");
   mysql_query("DELETE FROM posts WHERE topic='$topic' LIMIT $top[posts]");
   mysql_query("DELETE FROM topics WHERE id='$topic' LIMIT 1");   
   mysql_query("UPDATE forums SET posts=posts-$top[posts], topics=topics-1 WHERE id='$top[forum]' LIMIT 1");
   echo"<small>J&#363;s i&#353;tryn&#279;te tem&#261;!</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}
if ($n == "rename") {
   if ($i == "") {
      $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
      for ($i = 0; $i < 8; $i++) {
         $n = mt_rand(0,24);
         $tname = "$tname$array[$n]";
         }
      echo"<small>Tema:</small><br/><input type=\"text\" name=\"$tname\" value=\"$top[0]\" maxlength=\"40\"/><br/><small><anchor>Pervadinti<go href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic&amp;i=2&amp;n=rename&amp;tname=$tname\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/></go></anchor></small><br/>$line<br/>";
   }
   elseif ($i == "2") {
      $tname = addslashes(htmlspecialchars($_GET['tname']));
      $top = $_POST["$tname"];
      $top = htmlspecialchars($top);
      $top = str_replace("$", "$$", $top);
      $top = str_replace("'", "\'", $top);
      $top = stripslashes($top);
      mysql_query("UPDATE topics SET topic='$top' WHERE id='$topic' LIMIT 1");
      echo"<small>J&#363;s pervadinote tem&#261;!</small><br/>$line<br/>";
   }
echo"<small><a href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\">$back_topic</a></small><br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small>";
}


}



if ($topic == "") {
$tforum[0] = $frm[title];
if ($n == "") {
   echo"<small><b>$tforum[0]</b></small><br/>$line<br/><small><a href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;n=changetopic\">Pakeisti topik&#261;</a></small><br/>$line<br/>";
}
if ($n == "changetopic") {
   if ($i == "") {
      $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
      for ($i = 0; $i < 8; $i++) {
         $n = mt_rand(0,24);
         $tname = "$tname$array[$n]";
         }
      $top = explode(":</b> ", $frm[topic]);
      $top[1] = str_replace("<b>", "[b]", $top[1]);
      $top[1] = str_replace("</b>", "[/b]", $top[1]);
      $top[1] = preg_replace("'<img src=\"[^>]*?\" alt=\"'si", "", $top[1]);
      $top[1] = str_replace("\"/>", "", $top[1]);
      $top[1] = preg_replace("'<a href=\"[^>]*?\">'si", "", $top[1]);
      $top[1] = str_replace("</a>", "", $top[1]);
      echo"<small>Topikas:</small><br/><input type=\"text\" value=\"$top[1]\" name=\"$tname\" maxlength=\"140\"/><br/><small><anchor>Pakeisti<go href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;i=2&amp;n=changetopic&amp;tname=$tname\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/></go></anchor></small><br/>$line<br/>";
   }
   elseif ($i == "2") {
      $tname = addslashes(htmlspecialchars($_GET['tname']));
      $text = $_POST["$tname"];
      @include_once("smilies.php");
      if ($text !== "") { $text = "<b>$nick:</b> $text"; }
      $update = mysql_query("UPDATE forums SET topic='$text' WHERE id='$forum' LIMIT 1");
      echo"<small>J&#363;s pakeit&#279;te topik&#261;!</small><br/>$line<br/>";
   }
}
echo"<small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small><br/><small><a href=\"forum.php?id=$id&amp;forum=$forum\">$back_forums</a></small>";
}
?>