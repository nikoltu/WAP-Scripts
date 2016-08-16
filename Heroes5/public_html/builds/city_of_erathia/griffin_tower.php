<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='griffin_tower'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','barracks','1','barracks2','army')");

?>