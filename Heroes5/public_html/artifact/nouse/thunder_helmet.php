<?
$btype="head";
mysql_query("UPDATE users SET knowledge=knowledge-10,power=power+2 where username='$user[username]'");
?>