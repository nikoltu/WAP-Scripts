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
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="earth_immunity") or ($unit_info[spec2]=="earth_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity")){
echo"<small>Burtas atremtas</small>";}
else {
if($user[identify]=="thant"){
$hp=$user[power]*30;
}
else{
$hp=$user[power]*25;}
$un=$event[q_unit]-$battle[q_unit];
include_once("units/$battle[unit].php");
$atg=floor($hp/$unit_info[health]);
$unitsne=mysql_fetch_array(mysql_query("SELECT * FROM barak where user='$battle[heroe]' and unit='$battle[unit]'"));
if(!$unitsne[unit]){
include_once("units/$battle[unit].php");
mysql_query("insert into barak (user,kiek,unit,atk,def,mindmg,maxdmg,healt,hp) values ('$battle[heroe]','$atg','$battle[unit]','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','$unit_info[health]')");}
else {
mysql_query("UPDATE barak SET kiek=kiek+$atg where user='$battle[heroe]' and unit='$battle[unit]'");
}

echo"<small>Panaudojai $magic_name[$magi]. Atgaivinote $atg</small><br/>";}}
?>