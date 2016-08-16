<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='serpent_fly_hive'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','basilisk_pit','1','basilisk_pit2','army')");

?>