<?
if($magi){
include_once("names/magic.php");
$sp=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$magi'"));
if(!$sp[name]){
echo"<small>Tokio burto nemokate</small><br/>";}
elseif($army_mag[$who]=="hipnoze"){
echo"<small>Negalima naudoti ant Uzhipnotizuotu kari&#371;</small><br/>";}
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
if($user[identify]=="adela"){
$eji=$eji+2;}
mysql_query("UPDATE army SET mag='bless',trk='$eji' where username='$usr' and unit='$army_unit[$who]'");

$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].</small>";}}
}
if((0<$army_trk[$who]) and ($army_mag[$who]=="bless")){
$army_min[$who]=$army_max[$who];
$ejimasbl=$army_trk[$who]-1;
mysql_query("UPDATE army SET trk='$ejimasbl' where username='$battle[heroe]' and unit='$army_unit[$who]'");

}

?>