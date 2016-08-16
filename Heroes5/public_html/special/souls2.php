<?
if(($unit_info[spec]=="souls") or ($unit_info[spec2]=="souls") or ($unit_info[spec3]=="souls") or ($unit_info[spec4]=="souls") or ($unit_info[spec5]=="souls")){

if($kill>0){
echo"<small>Pagrob&#279; $kill.</small><br/>";
mysql_query("UPDATE army SET quantity=quantity+$kill where username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
$army_quantity[$who]=$army_quantity[$who]+$kill;}

}

?>