<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-2 where username='$user[username]'");
?>