<?
if($army_quantity[$who]>1){
$va="$battle[heroe]$m";
if(!file_exists("spec/ressurecting/$va.txt")){
@file_put_contents("spec/ressurecting/$va.txt","$army_quantity[$who]");}
$vam2=@file_get_contents("spec/ressurecting/$va.txt");
$vam=ceil($vam2*0.2);
$vam=$army_quantity[$who]+$vam;
if($vam>$vam2){
$vam=$vam2;
mysql_query("UPDATE army SET quantity='$vam' WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");} else {
mysql_query("UPDATE army SET quantity=quantity+$vam WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");}}


?>