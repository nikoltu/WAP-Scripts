<?
$btype="shou";
mysql_query("UPDATE users SET knowledge=knowledge-2,power=power-2 where username='$user[username]'");
?>