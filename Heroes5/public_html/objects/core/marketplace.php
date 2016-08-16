<?php

if ($object[info] == "") {
   $object[info] = mt_rand($rmin, $rmax);
}

$buy = $object[info] * 100;
$sell = ceil($buy / $rate);
$bmax = floor($user[gold] / $buy);

if ($r == "gem") { $res = "gems&#371;"; }
elseif ($r == "mercury") { $res = "puod&#371;"; }
elseif ($r == "sulfur") { $res = "sulfur&#371;"; }
elseif ($r == "crystal") { $res = "kristal&#371;"; }


if ($n == "") {
   echo"<small><u>Turite aukso: $user[gold]</u></small><br/><small><u>Turite $res: $user[$r]</u></small><br/><small><u>Galite pirkti: $bmax</u></small><br/><img src=\"img/resources/$r.gif\" alt=\"\"/><br/><input type=\"text\" format=\"*N\" name=\"h$time\" maxlength=\"6\" size=\"6\" value=\"0\"/><br/><small><anchor>[+Pirkti+]<go href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$m&amp;n=buy&amp;nn=$time\" method=\"post\"><postfield name=\"$time\" value=\"$(h$time)\"/></go></anchor></small><br/><small><anchor>[+Parduoti+]<go href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$m&amp;n=sell&amp;nn=$time\" method=\"post\"><postfield name=\"$time\" value=\"$(h$time)\"/></go></anchor></small><br/>$line<br/><small><u>Pirkimo kaina: $buy</u></small><br/><small><u>Pardavimo: $sell</u></small><br/>";
}

if ($n == "buy") {
   $nn = trim(addslashes(htmlspecialchars($_GET['nn'])));
   $q = skaicius(trim(addslashes(htmlspecialchars($_POST["$nn"]))));
   if ($q < 1) {
      $q = 0;
      echo"<small>Negalite nieko nepirkti.</small><br/>";
   }
   elseif ($q > $bmax) {
      echo"<small>Neu&#382;tenka resurs&#371;.</small><br/>";
   }
   else {
      $queries++;
      $c = $q * $buy;
      mysql_query("UPDATE users SET gold=gold-$c, $r=$r+$q WHERE session='$id' LIMIT 1");
      echo"<small>Nupirkote $res: $q</small><br/>";   
   }
}


if ($n == "sell") {
   $nn = trim(addslashes(htmlspecialchars($_GET['nn'])));
   $q = skaicius(trim(addslashes(htmlspecialchars($_POST["$nn"]))));
   if ($q < 1) {
      $q = 0;
      echo"<small>Negalite nieko neparduoti.</small><br/>";
   }
   elseif ($q > $user[$r]) {
      echo"<small>Neturite tiek pardavimui.</small><br/>";
   }
   else {
      $queries++;
      $c = $q * $sell;
      mysql_query("UPDATE users SET gold=gold+$c, $r=$r-$q WHERE session='$id' LIMIT 1");
      echo"<small>Pardav&#279;t&#279; $res: $q</small><br/>";   
   }
}
?>