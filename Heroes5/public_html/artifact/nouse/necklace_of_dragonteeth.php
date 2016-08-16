<?
$btype="neck";
mysql_query("UPDATE users SET knowledge=knowledge-3,power=power-3 where username='$user[username]'");
?>