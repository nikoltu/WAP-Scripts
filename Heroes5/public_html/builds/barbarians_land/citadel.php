<?

mysql_query("update cbuildings set build='citadel',upg='castle' where castle='$pilis' and build='fort'");
mysql_query("insert into map (location,unit,q_unit,castle) values ('tower1','cyclop_king','50','$pilis')");
mysql_query("insert into cbuildings (castle,build,lvl) values ('$pilis','tower1','400')");
mysql_query("insert into cbuildings (castle,build) values ('$pilis','apkasai')");

?>