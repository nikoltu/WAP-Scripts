<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='mag_gild'");

mysql_query("insert into cbuildings (castle,build,leid,upg) values ('$pilis','village_hall','1','town_hall')");

?>