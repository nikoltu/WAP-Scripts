<?
include_once("skils/knowledge.php");
include_once("names/magic.php");
$sp=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$magi'"));
$usr=strtolower($user[username]);
$unitas9=mysql_fetch_array(mysql_query("SELECT * FROM army where unit='$battle[unit]' and username='$usr'"));
if(($unitas9[unit]) and ($unitas9[magic]!=="hipnoze")){
echo"<small>Negalima hipnotizuoti kari&#371; kuriuos jau turite</small>";}
elseif(!$sp[name]){
echo"<small>Tokio burto nemokate</small><br/>";}
elseif($magic[mp]>$user[mana]){
echo"<small>Nepakanka manos</small><br/>";}
elseif($total_units=="$toar"){
echo"<small>Mu&#353;yje galima tureti tik $toar skirtingas kariu ru&#353;is</small><br/>";} else {
$usr=strtolower($user[username]);
mysql_query("UPDATE users SET mana=mana-$magic[mp] where username='$user[username]'");
include_once("units/$battle[unit].php");
if(($unit_info[spec]=="dispel") or ($unit_info[spec2]=="dispel") or ($unit_info[spec]=="air_immunity") or ($unit_info[spec2]=="air_immunity") or ($unit_info[spec]=="spell_immunitya") or ($unit_info[spec2]=="spell_immunitya") or ($unit_info[spec]=="spell_immunityb") or ($unit_info[spec2]=="spell_immunityb") or ($unit_info[spec]=="spell_immunity") or ($unit_info[spec2]=="spell_immunity") or ($unit_info[spec2]=="hipnoze_immunity") or ($unit_info[spec5]=="hipnoze_immunity")){
echo"<small>Burtas atremtas</small>";}
else {
$ej=0.2;
if($user[identify] == "astral"){
$ej=$ej+0.1;}
include_once("skils/air_magic.php");
$ha=ceil($battle[q_unit]*$ej);

$unitas3=mysql_fetch_array(mysql_query("SELECT * FROM army where unit='$battle[unit]' and username='$usr' and magic='hipnoze'"));
if(!$unitas3[unit]){

$trk=1*$user[power];mysql_query("insert into army (username,quantity,unit,attack,defense,min_damage,max_damage,health,hp,expierence,magic,trk) values ('$usr','$ha','$battle[unit]','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','$unit_info[health]','0','hipnoze','$trk')");} else {
mysql_query("UPDATE army SET quantity=quantity+$ha where username='$usr' and magic='hipnoze' and unit='$battle[unit]'");}
mysql_query("UPDATE nbattle SET q_unit=q_unit-$ha, health='$battle[health]', expierence='$exp' WHERE id='$m' LIMIT 1");
if (((substr($ha, strlen($ha) - 2, 2) >= 10) and (substr($ha, strlen($ha) - 2, 2) <= 20)) or ((substr($ha, strlen($ha) - 1, 1) == "0"))) {
      $uni = $unit_name_p3[$battle[unit]];
   }
   elseif (substr($ha, strlen($ha) - 1, 1) == "1") {
      $uni = $unit_name_s1[$battle[unit]];
   }
   else {
      $uni = $unit_name_p1[$battle[unit]];
   }
$who=$turn[1]-1;

echo"<small>Panaudojai $magic_name[$magi]. U&#382;hipnotizavote $ha $uni</small><br/>";}}

?>