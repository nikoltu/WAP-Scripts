<?php
include("connect.php");
mysql_query("insert into magic (user,name) values ('@Makatas','fire_wall')");

setcookie("regaps","taip",time()+1);
echo"ok";
?>