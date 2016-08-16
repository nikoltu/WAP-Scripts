<?php

if(($unit_info[spec]=="cause_fear") or ($unit_info[spec2]=="cause_fear") or ($unit_info[spec3]=="cause_fear") or ($unit_info[spec4]=="cause_fear") or ($unit_info[spec5]=="cause_fear")){
$fetk=mt_rand(1, 2);
if($fetk=="2"){
if(($uunit_special=="nofear") or ($uunit_special2=="nofear") or ($uunit_special3=="nofear") or ($uunit_special4=="nofear") or ($uunit_special5=="nofear")){
echo"<small>I&#353;gasdinti nepavyko</small><br/>";} else {
echo"<small>I&#353;gasdinta</small><br/>";
@file_put_contents("spec/fear/$battle[heroe].txt","$battle[unit]");}}}

?>