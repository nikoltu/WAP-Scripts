<?php

if(($uunit_special=="cause_fear") or ($uunit_special2=="cause_fear") or ($uunit_special3=="cause_fear") or ($uunit_special4=="cause_fear") or ($uunit_special5=="cause_fear")){
include_once("units/$army_unit[$who].php");
$fetk=mt_rand(1, 2);
if($fetk=="2"){
if(($unit_info[spec]=="nofear") or ($unit_info[spec2]=="nofear") or ($unit_info[spec3]=="nofear") or ($unit_info[spec4]=="nofear") or ($unit_info[spec5]=="nofear")){
echo"<small>I&#353;gasdinti nepavyko</small><br/>";} else {
echo"<small>I&#353;gasdinta</small><br/>";
mysql_query("update army set fear='1' where unit='$army_unit[$who]' and username='$battle[heroe]'");}}}

?>