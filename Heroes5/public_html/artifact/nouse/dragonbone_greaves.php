<?
$btype="boots";
mysql_query("UPDATE users SET knowledge=knowledge-1,power=power-1 where username='$user[username]'");
?>