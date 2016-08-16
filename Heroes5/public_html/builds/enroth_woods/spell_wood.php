<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='spell_wood'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','dragon_wood','1','dragon_wood2','army')");

?>