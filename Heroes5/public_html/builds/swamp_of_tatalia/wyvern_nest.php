<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='wyvern_nest'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','fly_tower','1','fly_tower2','army')");

?>