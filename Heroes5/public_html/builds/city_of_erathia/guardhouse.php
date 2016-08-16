<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='guardhouse'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','archers_tower','1','archers_tower2','army')");

?>