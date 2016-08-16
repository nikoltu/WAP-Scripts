<?php
include_once("aps.php");
    if( goodRequest() ){   

include('mukaka.php');
$sms=$_GET['sms'];
$nr=$_GET['from'];
$oper=$_GET['operator'];
$kaina=$_GET['amount'];
$kaina=$kaina/100;
if($kaina=="2"){
$kr=3;
$krd="kreditai";}
$data=date("Y-m-d");
$time=date("H:i:s");
$rr=explode(" ",$sms);
mysql_query("insert into sms (data,raktas,sms,kaina,oper,nr,time) values ('$data','$rr[0] $rr[1]','$sms','$kaina','$oper','$nr','$time')");
$nic=strtolower($rr[2]);
mysql_query("UPDATE users SET kred=kred+$kr where username='$nic' LIMIT 1");
echo"Zaidejui $nic prideta $kr $krd.\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!";


    }else {
        echo"Uzjauciu apgauti nepavyko xP";  }
