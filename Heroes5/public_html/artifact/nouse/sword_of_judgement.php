<?
$btype="right_hand";
mysql_query("UPDATE users SET attack=attack-5,defense=defense-5,knowledge=knowledge-5,power=power-5 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-5,defense=defense-5 where username='$user[username]'");
?>