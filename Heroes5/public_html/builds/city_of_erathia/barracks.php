<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='barracks'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','monastery','1','monastery2','army')");

?>