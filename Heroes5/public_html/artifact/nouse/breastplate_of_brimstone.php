<?
$btype="torso";
mysql_query("UPDATE users SET power=power-5 where username='$user[username]'");
?>