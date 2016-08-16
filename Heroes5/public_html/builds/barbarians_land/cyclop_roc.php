<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='cyclop_roc'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','behemoth_lair','1','behemoth_lair2','army')");

?>