<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-5 where username='$user[username]'");
?>