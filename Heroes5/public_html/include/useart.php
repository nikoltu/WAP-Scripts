<?php
$u=$_GET['u'];
$art=addslashes(htmlspecialchars($_GET['art']));
$tju=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$art'"));
if($tju[kiek]=="0"){
mysql_query("DELETE FROM artifacts where kiek='0' and user='$user[username]'");}
elseif(!$tju[name]){
echo"<small>Tokio artifakto neturite</small>";}
else {
if($tju[type]=="potion"){
if($tju[name]=="magic_potion"){
$time = time() + 1800;
mysql_query("UPDATE users SET immortal='$time' WHERE username='$user[username]' LIMIT 1");
mysql_query("UPDATE artifacts SET kiek=kiek-1 where user='$user[username]' and name='$art'");
echo"<small>Jus igavote papildomos j&#279;gos</small>";}}
else {
include_once("artifact/use/$art.php");}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";


?>