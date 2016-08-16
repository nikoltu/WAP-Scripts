<?
$koks_ip ="".$_SERVER['REMOTE_ADDR']."";
setcookie("nakedlops","$koks_ip", time() + 999999);
 echo $_COOKIE["nakedlops"];
echo"a";