<?
include_once("names/magic.php");
$sp=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$magi'"));
if(!$sp[name]){
echo"<small>Tokio burto nemokate</small><br/>";}
elseif($magic[mp]>$user[mana]){
echo"<small>Nepakanka manos</small><br/>";}
else {
$usr=strtolower($user[username]);
mysql_query("UPDATE users SET mana=mana-$magic[mp] where username='$user[username]'");
include_once("units/$battle[unit].php");
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel")){
echo"<small>Burtas atremtas</small>";}
else {
@unlink("spec/stoning/$battle[heroe].tx");
@unlink("spec/blind/$battle[heroe].tx");
@unlink("spec/curse/$battle[heroe].tx");
@unlink("spec/poison/$battle[heroe].tx");
@unlink("spec/paralyze/$battle[heroe].tx");
$heal=15;
if($user[identify]=="uland"){
$heal=25;}

include_once("skils/water_magic.php");
$usr=strtolower($user[username]);

mysql_query("update army set hp=hp+$heal where username='$usr' and unit='$army_unit[$who]'");
$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].Atstatei gyvybi&#371; $heal.</small><br/>";}}

?>