<?
$btype="neck";
mysql_query("UPDATE users SET attack=attack-3,defense=defense-3,knowledge=knowledge-3,power=power-3 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-3,defense=defense-3 where username='$user[username]'");
?>