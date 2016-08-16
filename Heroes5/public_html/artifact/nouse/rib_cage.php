<?
$btype="torso";
mysql_query("UPDATE users SET power=power-2 where username='$user[username]'");
?>