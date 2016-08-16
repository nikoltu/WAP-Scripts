<?

$spy=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and name='spyglass'"));
if($spy[name]){
$osk=$osk+1;}

?>