<?
$btype="torso";
mysql_query("UPDATE users SET attack=attack-1,defense=defense-1,knowledge=knowledge-1,power=power-1 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-1,defense=defense-1 where username='$user[username]'");
?>