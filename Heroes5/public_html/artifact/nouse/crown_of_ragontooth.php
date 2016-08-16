<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-4,power=power-4 where username='$user[username]'");
?>