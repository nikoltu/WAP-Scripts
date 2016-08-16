<?
$btype="right_hand";
mysql_query("UPDATE users SET attack=attack-3 where username='$user[username]'");
mysql_query("UPDATE army SET attack=attack-3 where username='$user[username]'");
?>