<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='gorgon_lair'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','wyvern_nest','1','wyvern_nest2','army')");

?>