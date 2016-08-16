<?
if($battle[q_unit]>1){
$vam=ceil($event[q_unit]*0.2);
$vam=$battle[q_unit]+$vam;
if($vam>$event[q_unit]){
$vam=$event[q_unit];
mysql_query("UPDATE nbattle SET q_unit=$vam WHERE id='$m' LIMIT 1");} else {
mysql_query("UPDATE nbattle SET q_unit=q_unit+$vam WHERE id='$m' LIMIT 1");}}


?>