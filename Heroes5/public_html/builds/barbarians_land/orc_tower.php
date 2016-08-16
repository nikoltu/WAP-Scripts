<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='orc_tower'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','ogre_fort','1','ogre_fort2','army')");

?>