<?
$btype="torso";
mysql_query("UPDATE users SET power=power-1 where username='$user[username]'");
?>