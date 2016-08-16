<?
$btype="misc";
mysql_query("UPDATE army SET health=health-2 where username='$user[username]'");
?>