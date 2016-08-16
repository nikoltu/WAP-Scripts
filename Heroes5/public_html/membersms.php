<?php
include_once("aps.php");
    if( goodRequest() ){   

include('mukaka.php');
$sms=$_GET['sms'];
$nr=$_GET['from'];
$oper=$_GET['operator'];
$kaina=$_GET['amount'];
$tik=mysql_fetch_array(mysql_query("SELECT * FROM numer where nr='$nr'"));
if($tik[nr]){
echo"Taip negalima.\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!";
}
else
{
$rr=explode(" ",$sms);

mysql_query("insert into numer (nr) values ('$nr')");
mysql_query("UPDATE users SET member='1' where username='$rr[1]' LIMIT 1");
echo"Sekmingai tapote tikru nariu!.\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!";
}

    }else {
        echo"Uzjauciu apgauti nepavyko xP";  }

?>