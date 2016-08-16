<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='goblin_barracks'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','wolf_pen','1','wolf_pen2','army')");

?>