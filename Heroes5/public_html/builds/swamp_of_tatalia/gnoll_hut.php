<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='gnoll_hut'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','lizard_den','1','lizard_den2','army')");

?>