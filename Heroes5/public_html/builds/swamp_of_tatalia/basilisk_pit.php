<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='basilisk_pit'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','gorgon_lair','1','gorgon_lair2','army')");

?>