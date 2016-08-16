<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='stable'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','portal_of_glory','1','portal_of_glory2','army')");

?>