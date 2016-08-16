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
$heal=10;
if($user[identify]=="uland"){
$heal=20;}

$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].</small><br/>";}}

?>