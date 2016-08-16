<?
$btype="right_hand";
mysql_query("UPDATE users SET attack=attack-2,defense=defense-2 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-2,defense=defense-2 where username='$user[username]'");
?>