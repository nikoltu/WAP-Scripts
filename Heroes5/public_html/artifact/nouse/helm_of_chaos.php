<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-3 where username='$user[username]'");
?>