<?php
$idkodas="q";

    if($idkodas=="q"){   

include('mukaka.php');
$sms=$_GET['zin'];
$nr=$_GET['tel'];
$oper=$_GET['operator'];
$kaina=$_GET['suma'];
if($sms==""){
$sms=$_GET['sms'];
$nr=$_GET['from'];
$oper=$_GET['operator'];
$kaina=$_GET['amount'];
$kaina=$kaina/100;}

if($kaina=="1"){
$kr=1;
$krd="kreditas";}
if($kaina=="2"){
$kr=2;
$krd="kreditai";}
if($kaina=="3"){
$kr=3;
$krd="kreditai";}
if($kaina=="4"){
$kr=4;
$krd="kreditai";}
if($kaina=="5"){
$kr=6;
$krd="kreditai";}
if($kaina=="7"){
$kr=9;
$krd="kreditai";}
if($kaina=="10"){
$kr=13;
$krd="kreditu";}
$data=date("Y-m-d");
$time=date("H:i:s");
$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
      for ($i = 0; $i < 6; $i++) {
         $n = mt_rand(0,24);
         $code = "$code$array[$n]";
      }


      mysql_query("insert into reg (code,suma) VALUES ('$code','$kaina')");

$raktas=$_GET['raktas'];
mysql_query("insert into sms (data,raktas,sms,kaina,oper,nr,time) values ('$data','$raktas','$sms','$kaina','$oper','$nr','$time')");
if($oper==""){
echo"sms kodas yra $code. iveskite ji ir gausite kreditus";
}
else {
$rr=explode(" ",$sms);
$nic=strtolower($rr[1]);
mysql_query("UPDATE users SET kred=kred+$kr where username='$nic'");
echo"Zaidejui $nic prideta $kr $krd.\n-------\nTau ir Tavo draugams\nhttp://dmnx.net ;)!";}


    }else {
        echo"Uzjauciu apgauti nepavyko xP";  }

/*
$textas = substr($text,0,8);
$textas= strtolower($textas);
if($textas=="hero reg"){

                $time = time();
                $array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","w","x","y","z");
                for ($i = 0; $i < 6; $i++) {
                        $n = mt_rand(0,24);
                        $code = "$code$array[$n]";
                }

                mysql_query("INSERT INTO sms (type, text, time) VALUES ('register','$code','$time')");
                mysql_close($db);

               echo"Jusu registracijos kodas: $code\n-------\nTau ir Tavo draugams\nhttp://tampyk.uzeik.in ;)";
exit;
}
*/

