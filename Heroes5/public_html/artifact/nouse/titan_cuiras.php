<?
$btype="torso";
mysql_query("UPDATE users SET knowledge=knowledge+2,power=power-10 where username='$user[username]'");
?>