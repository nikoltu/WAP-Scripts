<?php
include("root.php");
function TestTransaction( $transaction, $userPassword, $ordeID, $test = 0, $status = 1 ){
  return ( $transaction == md5($userPassword.'|'.$_SERVER['REMOTE_ADDR'].'|'.$ordeID.'|'.$test.'|'.$status) );
 }
$your_mokejimai_pass = "gudmonas1992"; //mokejimai.lt slaptazodis
if(TestTransaction($_GET['transaction'], $your_mokejimai_pass, $_GET['id'])) 
{ 

$time = time();
$code = str_shuffle('123456789zxcvbnmasdfghjklqwertyuiop');
$code = substr($code, 0, 5);
$reg = "INSERT INTO reklama(kodas, laikas) VALUES('$code', '$time')";
mysql_query($reg);

echo "Reklama nupirkta. Jusu kodas yra: $code";
  

 }
else 
{
	echo "Iviko Klaida";
}
  

?>
