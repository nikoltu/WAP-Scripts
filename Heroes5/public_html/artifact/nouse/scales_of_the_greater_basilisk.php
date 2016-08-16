<?
$btype="torso";
mysql_query("UPDATE users SET power=power-3 where username='$user[username]'");
?>