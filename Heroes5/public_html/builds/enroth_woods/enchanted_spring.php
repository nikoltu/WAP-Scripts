<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='enchanted_spring'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','spell_wood','1','spell_wood2','army')");

?>