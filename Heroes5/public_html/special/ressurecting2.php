<?
if(($unit_info[spec]=="ressurecting") or ($unit_info[spec2]=="ressurecting") or ($unit_info[spec3]=="ressurecting") or ($unit_info[spec4]=="ressurecting") or ($unit_info[spec5]=="ressurecting")){
$heap=$dmg;
if(!$kill){
$kill=0;}
if(($battle[q_unit]+$kill)*$uunit_health+$battle[health]<$heap){
$heap=$battle[q_unit]*$uunit_health+$battle[health];}

$ressu=$heap/2;

$ressu2=$army_health[$who]-$army_hp[$who];
$ressu=$ressu-$ressu2;
$kressu=floor($ressu/$army_health[$who]);

if($army_unit[$who]=="blood_dragon"){

$kwho=@file_get_contents("spec/res/drk/$battle[heroe].txt");}
if($army_unit[$who]=="vampire_lord"){

$kwho=@file_get_contents("spec/res/vam/$battle[heroe].txt");}

if($kwho-$army_quantity[$who]<$kressu){
$kressu=$kwho-$army_quantity[$who];}
if($kressu>0){
echo"<small>Sugri&#382;o $kressu.</small><br/>";
mysql_query("UPDATE army SET hp=hp+$ressu2,quantity=quantity+$kressu where username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");}
else {
mysql_query("UPDATE army SET hp=hp+$ressu2 where username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
}

}

?>