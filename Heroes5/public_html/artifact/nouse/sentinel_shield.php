<?
$btype="left_hand";
mysql_query("UPDATE users SET attack=attack+3,defense=defense-12 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack+3,defense=defense-12 where username='$user[username]'");
?>