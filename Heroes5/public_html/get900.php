<?php
   require_once("socket_functions.php" ); //atraukiama faila su funkcijomis, kad galima but¦ kreiptis a kita svetain¢.
   $MerchantID = 118585; //araªykite savo unikal¦ numera mokejimail.lt sistemoje
   $price = url_get_contents( "https://www.mokejimai.lt/psms/900/?MerchantID={$MerchantID}&code={$_REQUEST['code']}" );
//   $price - kaina centais, kuria sumokejo vartotojas: 500 arba 2500 cent¦.
   if ($price == 500) {
      //sumokejo 5 litus, galima suteikti paslauga
   } elseif ($price  == 2500) {
      //sumokejo 25 litus, galima suteikti paslauga
   } else {
      //kodas netiko, paslaugos nesuteikiame.
   }
   echo $price; //iªtrinkite eilut¢, nes eia tik testavimams skirta.
//   header("Location: /form900.php"); //araªykite adresa ir atkomentuokite, kur permesti vartotoja, po apmokejimo.
?>