<?
$btype="torso";
mysql_query("UPDATE users SET power=power-4 where username='$user[username]'");
?>