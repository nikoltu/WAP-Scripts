<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='ogre_fort'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','cliff_nest','1','cliff_nest2','army')");

?>