<?
$btype="right_hand";
mysql_query("UPDATE users SET attack=attack-3,defense=defense-3,power=power-3,knowledge=knowledge-6 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-3,defense=defense-3 where username='$user[username]'");
?>