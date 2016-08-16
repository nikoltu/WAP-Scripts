<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='archers_tower'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','griffin_tower','1','griffin_tower2','army')");

?>