<?
$btype="left_hand";
mysql_query("UPDATE users SET defense=defense-3 where username='$user[username]'");
mysql_query("UPDATE army SET defense=defense-3 where username='$user[username]'");
?>