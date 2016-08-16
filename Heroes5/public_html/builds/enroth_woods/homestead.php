<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='homestead'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','dendroid_arches','1','dendroid_arches2','army')");

?>