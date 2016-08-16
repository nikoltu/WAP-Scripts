<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='dendroid_arches'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','enchanted_spring','1','enchanted_spring2','army')");

?>