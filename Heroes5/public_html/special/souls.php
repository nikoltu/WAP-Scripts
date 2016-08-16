<?
if(($uunit_special=="souls") or ($uunit_special2=="souls") or ($uunit_special3=="souls") or ($uunit_special4=="souls") or ($uunit_special5=="souls")){

if($kill>0){
echo"<small>Pagrob&#279; $kill.</small><br/>";
mysql_query("UPDATE nbattle SET q_unit=q_unit+$kill where id='$m' LIMIT 1");
$battle[q_unit]=$battle[q_unit]+$kill;
}

}

?>