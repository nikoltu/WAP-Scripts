<?
$btype="torso";
mysql_query("UPDATE users SET attack=attack-4,defense=defense-4 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-4,defense=defense-4 where username='$user[username]'");
?>