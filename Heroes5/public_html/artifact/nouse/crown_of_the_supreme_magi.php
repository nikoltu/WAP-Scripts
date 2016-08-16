<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-4 where username='$user[username]'");
?>