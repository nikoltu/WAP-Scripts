<?php
$m=addslashes(htmlspecialchars($_GET['m']));
$mag=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$m'"));
if(!$mag[user]){
echo"<small>Tokio burto nemokate</small>";} else {
include_once("names/magic.php");
include_once("magic/$m.php");
include_once("names/magic2.php");
$magicn=$magic_name[$m];
$type=$type[$magic[type]];
   echo"<small><b>$magicn</b></small><br/><img src=\"img/magic/$m.gif\" alt=\"$magic\"/><br/>$line<br/><small>Burto lygis:<b>$magic[lvl]</b><br/>Naudoja manos:<b>$magic[mp]</b><br/>Tipas:<b>$type</b><br/>Apra&#353;ymas:<b>$magic[apr]</b></small>";
}
echo"<br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=magic\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>