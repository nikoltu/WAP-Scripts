<?
$btype="head";
mysql_query("UPDATE users SET attack=attack-6,defense=defense-6,knowledge=knowledge-6,power=power-6 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-6,defense=defense-6 where username='$user[username]'");
?>