<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='lizard_den'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','serpent_fly_hive','1','serpent_fly_hive2','army')");

?>