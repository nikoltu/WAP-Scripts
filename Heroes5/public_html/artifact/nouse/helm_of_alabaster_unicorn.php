<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-1 where username='$user[username]'");
?>