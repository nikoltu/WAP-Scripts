<?

@unlink("castle/$pilis/fort.php");
mysql_query("insert into cbuildings (castle,build) values ('$pilis','fort')");
mysql_query("insert into cbuildings (castle,build,lvl) values ('$pilis','siena','600')");

?>