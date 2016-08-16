<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='cliff_nest'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','cyclop_roc','1','cyclop_roc2','army')");

?>