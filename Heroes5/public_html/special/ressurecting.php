<?
if(($uunit_special=="ressurecting") or ($uunit_special2=="ressurecting") or ($uunit_special3=="ressurecting") or ($uunit_special4=="ressurecting") or ($uunit_special5=="ressurecting")){
$heap=$dmg;

$gyda=$army_quantity[$who]*$army_health[$who]+$army_hp[$who];
if($gyda<$heap){
$heap=$army_quantity[$who]*$army_health[$who]+$army_hp[$who];}

$ressu=$heap/2;

$ressu2=$uunit_health-$battle[health];
$ressu=$ressu-$ressu2;
$kressu=floor($ressu/$uunit_health);
$evnt=@file_get_contents("spec/res/$battle[heroe].txt");

if($evnt-$battle[q_unit]<$kressu){
$kressu=$evnt-$battle[q_unit];}
if($kressu>0){
echo"<small>Sugri&#382;o $kressu.</small><br/>";
mysql_query("UPDATE nbattle SET health=health+$ressu2,q_unit=q_unit+$kressu where id='$m' LIMIT 1");}
else {
mysql_query("UPDATE nbattle SET health=health+$ressu2 where id='$m' LIMIT 1");
}

}

?>