<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='dwarf_cottage'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','homestead','1','homestead2','army')");

?>