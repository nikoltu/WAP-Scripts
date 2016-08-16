<?
$rnd=@file_get_contents("sp/stoda/$battle[heroe].txt");
if($magi){
include_once("skils/knowledge.php");
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
$eji=$user[power]*1;
include_once("artifact/act/collar_of_conjuring.php");
include_once("artifact/act/ring_of_conjuring.php");
@file_put_contents("sp/stoda/$battle[heroe].txt","$eji");
$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].</small>";}}
}
if(0<$rnd){
$rn=0.2;
include_once("skils/earth_magic.php");
$rn=$rn+1;
$army_defense[$who]=$army_defense[$who]*$rn;
$rnd=$rnd-1;
@file_put_contents("sp/stoda/$battle[heroe].txt","$rnd");
}
?>