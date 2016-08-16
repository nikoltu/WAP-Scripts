<?

$rw=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='castle'"));
if($rw[build]){
$jo="capital";}
else{
$jo="";}


mysql_query("update cbuildings set build='town_hall',upg='$jo' where castle='$pilis' and build='village_hall'");


?>
