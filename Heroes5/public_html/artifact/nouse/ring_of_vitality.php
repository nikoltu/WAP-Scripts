<?
$btype="pir";
mysql_query("UPDATE army SET health=health-1 where username='$user[username]'");
?>