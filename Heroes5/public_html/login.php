<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("ip.php");
$nkd2="$koks_ip|$browserjgmgmg";
if($_COOKIE['nakedlops']=="$nkd2"){
include_once("anth.php");}
else {
include_once("core.php");
echo"<wml><card id=\"heroes\" title=\"Prisijungimas\"><p align=\"center\">";
include_once("mukaka.php");
$i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
$ref = addslashes(htmlspecialchars($_GET['ref']));
if ($i == "") {
   echo"<small><b>Prisijungimas</b></small><br/>$line<br/><small><b>Vardas:</b></small><br/><input type=\"text\" name=\"name\" maxlength=\"14\"/><br/><small><b>Slapta&#382;odis:</b></small><br/><input type=\"password\" name=\"pass\" maxlength=\"40\"/><br/><small><anchor>Prisijungti<go href=\"login.php?i=2\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"pass\" value=\"$(pass)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}
if ($i == "2") {
   $name = addslashes(htmlspecialchars($_POST['name']));
   $pass = addslashes(htmlspecialchars($_POST['pass']));
   if ($name == "") {
      echo"<small>Ne&#303;vestas herojaus vardas.</small><br/>$line<br/><small><a href=\"login.php\">$back</a></small><br/><small><a href=\"index.php\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $check = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='$name' LIMIT 1"));
   if ($check[0] == "") {
      echo"<small>Toks herojus neegzistuoja.</small><br/>$line<br/><small><a href=\"login.php\">$back</a></small><br/><small><a href=\"index.php\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
      }
   if ($pass == "") {
      echo"<small>Ne&#303;vestas slapta&#382;odis.</small><br/>$line<br/><small><a href=\"login.php\">$back</a></small><br/><small><a href=\"index.php\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $pass = md5(md5($pass));
   $id = mysql_fetch_array(mysql_query("SELECT session FROM users WHERE username='$name' and password='$pass' LIMIT 1"));
   if ($id[0] == "") {
      echo"<small>Neteisingas slapta&#382;odis.</small><br/>$line<br/><small><a href=\"login.php\">$back</a></small><br/><small><a href=\"index.php\">$home</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   mysql_query("UPDATE users SET username='$name' WHERE session='$id[0]' LIMIT 1");
   echo"<small><b>Prisijung&#279;te s&#279;kmingai!</b></small><br/>$line<br/><small><a href=\"index.php?id=$id[0]\">&gt;&gt;&gt;</a></small>";
}}
echo"</p></card></wml>";
mysql_close($db);

?>
