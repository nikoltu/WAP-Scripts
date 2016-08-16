<?

mysql_query("update cbuildings set leid='2' where castle='$pilis' and build='centaur_stables'");

mysql_query("insert into cbuildings (castle,build,leid,upg,type) values ('$pilis','dwarf_cottage','1','dwarf_cottage2','army')");

?>