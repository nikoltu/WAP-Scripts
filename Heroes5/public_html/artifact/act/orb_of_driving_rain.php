<?

$wtr=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and name='orb_of_driving_rain'"));
if($wtr[name]){
$dmg=floor($dmg*1.5);}

?>