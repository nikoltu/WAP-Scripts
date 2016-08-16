<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='wolf_pen'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','orc_tower','1','orc_tower2','army')");

?>