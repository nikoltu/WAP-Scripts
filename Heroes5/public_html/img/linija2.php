<?php
   require_once("socket_functions.php" );
   $MerchantID = 118585;
   $price = url_get_contents( "https://www.mokejimai.lt/psms/900/?MerchantID={$MerchantID}&code={$_REQUEST['code']}" );
if ($price == 500) {
mysql_query("UPDATE users SET kred=kred+7 where username='$user[username]'");
echo"<small>Jums prideti 7kreditai</small>";
      } elseif ($price  == 2500) {
mysql_query("UPDATE users SET kred=kred+40 where username='$user[username]'");
echo"<small>Jums prideti 40kredit&#371;</small>";
   } else {
   echo"<small>Jusu ivestas kodas ".$_REQUEST['code']." yra neteisingas</small>";}
  echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>