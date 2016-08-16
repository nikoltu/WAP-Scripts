<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='monastery'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','stable','1','stable2','army')");

?>