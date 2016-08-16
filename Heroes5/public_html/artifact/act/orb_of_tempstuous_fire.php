<?

$fire=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and name='orb_of_tempstuous_fire'"));
if($fire[name]){
$dmg=floor($dmg*1.5);}

?>