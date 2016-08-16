<?
$dsp=@file_get_contents("sp/dspy/$battle[heroe].txt");
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
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="air_immunity") or ($unit_info[spec2]=="air_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity")){
echo"<small>Burtas atremtas</small>";}
else {
$eji=$user[power]*1;
include_once("artifact/act/collar_of_conjuring.php");
include_once("artifact/act/ring_of_conjuring.php");
@file_put_contents("sp/dspy/$battle[heroe].txt","$eji");
$who=$turn[1]-1;
echo"<small>Panaudojai $magic_name[$magi].</small>";}}
}
if(0<$dsp){
$udf=3;
if($user[identify]=="aenain"){
$udf=$udf+1;}
include_once("skils/air_magic.php");
$uunit_defense=$uunit_defense-$udf;
$dsp=$dsp-1;
@file_put_contents("sp/dspy/$battle[heroe].txt","$dsp");
}
?>