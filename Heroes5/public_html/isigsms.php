<?php
include_once("aps.php");
    if( goodRequest() ){   

include('mukaka.php');
$sms=$_GET['sms'];
$nr=$_GET['from'];
$oper=$_GET['operator'];
$kaina=$_GET['amount'];
$kaina=$kaina/100;

$data=date("Y-m-d");
$time=date("H:i:s");
$rr=explode(" ",$sms);
$user=mysql_fetch_array(mysql_query("SELECT * FROM users where deleted='1' and username='$rr[1]'"));
if(!$user[username]){
echo"Toks herojus neegzistuoja arba jis neistrintas";}
else {

   $array = array("A","a","B","b","C","c","D","d","E","e","F","f","G","g","H","h","I","i","J","j","K","k","L","l","M","m","N","n","O","o","P","p","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z","0","1","2","3","4","5","6","7","8","9");
      for ($i = 1; $i <= 20; $i++) {
         $n = mt_rand(0,59);
         $idi = "$idi$array[$n]";
      }

      for ($j = 1; $j <= 7; $j++) {
         $o = mt_rand(0,59);
         $pasw = "$pasw$array[$o]";
      }

      $passw = md5(md5($pasw));
mysql_query("UPDATE users SET session='$idi',password='$passw',deleted='0' where username='$rr[1]'");


mysql_query("insert into sms (data,raktas,sms,kaina,oper,nr,time) values ('$data','$rr[0]','$sms','$kaina','$oper','$nr','$time')");

echo"Sekmingai isigyjote $rr[1] heroju. Jusu slaptazodis yra $pasw. Prisijunge galesite ji pasikeisti.\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!";

}
    }else {
        echo"Uzjauciu apgauti nepavyko xP";  }


