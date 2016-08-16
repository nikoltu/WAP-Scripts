<?php
include_once("ip.php");
if($koks_ip=="77.90.99.205"){
echo"Won is cia";
exit;
mysql_close($db);}
$name = addslashes(htmlspecialchars($_GET['name'])); if (!$name) { $name = ""; }
if ($i == "") { 
   if (($pm == "") and ($name == "")) {
      echo"<small><b>Sukurti nauj&#261; &#382;inut&#281;</b></small><br/>$line<br/>";
   }
   elseif ($name !== "") {
      echo"<small><b>Atsakyti</b></small><br/>$line<br/>";
   }
   elseif ($pm !== "") {
   echo"<small><b>Persi&#371;sti</b></small><br/>$line<br/>";
   }
   $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
   for ($i = 0; $i < 8; $i++) {
      $n = mt_rand(0,24);
      $tname = "$tname$array[$n]";
      }
   for ($i = 0; $i < 8; $i++) {
      $n = mt_rand(0,24);
      $mname = "$mname$array[$n]";
      }
   if ($user[flood] > time()) {
      $left = $user[flood] - time();
      if ($left > 0) {
         echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>";
      }
   }
   if ($pm !== "") {
      $msg = mysql_fetch_array(mysql_query("SELECT text FROM pm WHERE id='$pm' LIMIT 1"));
      $msg[0] = preg_replace("'<img src=\"[^>]*?\" alt=\"'si", "", $msg[0]);
      $msg[0] = str_replace("\"/>", "", $msg[0]);
      $msg[0] = preg_replace("'<a href=\"[^>]*?\">'si", "", $msg[0]);
      $msg[0] = str_replace("</a>", "", $msg[0]);
      $msg[0] = str_replace("<b>", "[b]", $msg[0]);
      $msg[0] = str_replace("</b>", "[/b]", $msg[0]);
   }
   echo"<small>Vardas:</small><br/><input type=\"text\" name=\"$tname\" value=\"$name\" maxlength=\"20\"/><br/><small>&#381;inut&#279;:</small><br/><input type=\"text\" name=\"$mname\" value=\"$msg[0]\" maxlength=\"500\"/><br/><small><anchor>I&#353;si&#371;sti<go href=\"pm.php?action=compose&amp;id=$id&amp;tname=$tname&amp;mname=$mname&amp;i=2&amp;name=$name\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small><br/></p></card></wml>";
   mysql_close($db);
   exit;
}
if ($i == "2") {
   $tname = addslashes(htmlspecialchars($_GET['tname'])); if (!$tname) { $tname = ""; }
   $name = $_POST["$tname"];
   $mname = addslashes(htmlspecialchars($_GET['mname'])); if (!$mname) { $mname = ""; }
   $text = $_POST["$mname"];
   if (strtolower($nick) == strtolower($name)) {
      echo"<small>Negalite si&#371;sti priva&#269;ios &#382;inut&#279;s sau.</small><br/>$line<br/><small><a href=\"pm.php?action=compose&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id&amp;lang=$lang\">$home</a></small><br/></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $check = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='$name' LIMIT 1"));
   if ($check[0] == "") {
      echo"<small>Toks vartotojas neegzistuoja.</small><br/>$line<br/><small><a href=\"pm.php?action=compose&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small><br/>";
      echo"</p></card></wml>";
      mysql_close($db);
      exit;
   }
   if ($text == "") {
      echo"<small>J&#363;s nepara&#353;&#279;te &#382;inut&#279;s.</small><br/>$line<br/><small><a href=\"pm.php?action=compose&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if ($user[flood] > time()) {
      $left = $user[flood] - time();
      echo"<small><b>Floodo Apsauga</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/><small><anchor>Atnaujinti<go href=\"pm.php?action=compose&amp;id=$id&amp;tname=$tname&amp;mname=$mname&amp;i=2\" method=\"post\"><postfield name=\"$tname\" value=\"$($tname)\"/><postfield name=\"$mname\" value=\"$($mname)\"/></go></anchor></small><br/>$line<br/><small><a href=\"pm.php?action=compose&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
if(($user[level]<5) and ($name!=="@Makatas")){
echo"<small>Rasyti galima tik nuo 5 levelio<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
if(($user[member]=="0") and ($name!=="@Makatas")){
echo"<small>Rasyti pm gali tik tikri nariai<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
mysql_close($db);
exit;}
   $user[flood] = time() + 20;
   mysql_query("UPDATE users SET flood='$user[flood]' WHERE username='$user[username]' LIMIT 1");
$text=str_replace("TOB.lt","",$text);

   @include_once("smilies.php");
   $txt = stripslashes($text);   
   $date = date("m-d H:i");

   mysql_query("INSERT INTO pm(nick, name, text, date, active) VALUES ('$name','$user[username]','$text','[$date]','0')");
   mysql_query("UPDATE users SET new_pm=new_pm+1, all_pm=all_pm+1 WHERE username='$name' LIMIT 1");
   echo"<small>Privati &#382;inut&#279; i&#353;si&#371;sta s&#279;kmingai!</small><br/>$line<br/><small><b>&#381;inut&#279;:</b></small><br/><small>$txt</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
?>