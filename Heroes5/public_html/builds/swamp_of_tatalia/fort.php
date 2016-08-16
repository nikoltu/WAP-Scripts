<?

mysql_query("update cbuildings set leid='2',upg='citadel' where castle='$pilis' and build='fort'");


mysql_query("insert into cbuildings (castle,build,lvl) values ('$pilis','siena','600')");


mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','goblin_barracks','1','goblin_barracks2','army')");


mysql_query("insert into cbuildings (castle,build,leid,type) values ('$pilis','kalv','1','war')");
mysql_query("insert into cbuildings (castle,build,leid,type,upg) values ('$pilis','mag_gild','1','mag','mag_gild2')");


?>