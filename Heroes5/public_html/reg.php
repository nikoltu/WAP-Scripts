<?php
include_once("aps.php");
    if( goodRequest() ){   
$sms=$_GET['sms'];
if($sms=="heroreg"){
echo"blogas sms tekstas";}
else {
$na=explode(" ",$sms);

include('mukaka.php');


      $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
      for ($i = 0; $i < 6; $i++) {
         $n = mt_rand(0,24);
         $code = "$code$array[$n]";
      }
mysql_query("UPDATE users SET kred=kred+0.2,atve=atve+1 where id='$na[1]'");

      mysql_query("INSERT INTO reg (code) VALUES ('$code')");
      mysql_close($db);
      echo"Jusu registracijos kodas: $code\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)";
exit;}

}

