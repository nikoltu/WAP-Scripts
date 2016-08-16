<?
$wea=@file_get_contents("sp/weaknes/$battle[heroe].txt");
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
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="water_immunity") or ($unit_info[spec2]=="water_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity")){
echo"<small>Burtas atremtas</small>";}
else {
$eji=$user[power]*1;
include_once("artifact/act/collar_of_conjuring.php");
include_once("artifact/act/ring_of_conjuring.php");
@file_put_contents("sp/weaknes/$battle[heroe].txt","$eji");
$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].</small>";}}
}
if(0<$wea){
$uatk=3;
if(($user[identify]=="olema") or ($user[identify]=="cuthbert") or ($user[identify]=="mirlanda")){
$uatk=$uatk+1;}
include_once("skils/water_magic.php");
$uunit_attack=$uunit_attack-$uatk;
$wea=$wea-1;
@file_put_contents("sp/weaknes/$battle[heroe].txt","$wea");
}
?>