<?

mysql_query("update cbuildings set build='castle',upg='' where castle='$pilis' and build='citadel'");

mysql_query("insert into map (location,unit,q_unit,castle) values ('tower2','sharpshooter','80','$pilis')");

mysql_query("insert into cbuildings (castle,build,lvl) values ('$pilis','tower2','400')");

mysql_query("insert into map (location,unit,q_unit,castle) values ('tower3','sharpshooter','90','$pilis')");

mysql_query("insert into cbuildings (castle,build,lvl) values ('$pilis','tower3','400')");

mysql_query("update cbuildings set upg='capital' where castle='$pilis' and build='town_hall'");
?>