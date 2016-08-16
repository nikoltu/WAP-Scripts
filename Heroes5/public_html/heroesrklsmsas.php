<?php 
include_once("aps.php");
    if( goodRequest() ){   
$sms = $_GET['sms']; 
$from = $_GET['from']; 
$nuo = $_GET['to']; 
if(!eregi("http://","$sms")){
echo"Neteisingas sms tekstas. Neparasyta http:// ::\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!:: ;)"; exit;}
echo"Reklama uzdeta sekmingai ::\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!:: ;)"; $sms=str_replace("$","",$sms);
$rr=explode(" ",$sms);
include_once("mukaka.php");
$rkl=stristr("$sms","http://");
$rkl2=explode(" ",$rkl);
$rkl3=strlen($rkl2[0]) +1;
$rkl4=substr($rkl,$rkl3,30);
if($rr[1]=="http://zaidimas.failai.lt"){
$rr[1]="http://dmnx.net";}
if($rkl4==""){
$rkl4="Be antra&#353;t&#279;s";}
mysql_query("insert into rkl (url,ant) values ('$rkl2[0]','$rkl4')");
       }else {
        echo"Uzjauciu apgauti nepavyko xP";  }
?>