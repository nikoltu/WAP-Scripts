<?php
function resource($res, $q) {
   if ($res == "stone") {
$res1="Akmuo";
$res2="Akmen&#303;";
$res3="Akmenys";
$res4="Akmenys";
$res5="Akmen&#371;";

   }
   elseif ($res == "wood") {
$res1="Medis";
$res2="Med&#303;";
$res3="Med&#382;iai";
$res4="Med&#382;ius";
$res5="Med&#382;i&#371;";
   }
   elseif ($res == "mercury") {
$res1="Puodas";
$res2="Puod&#261;";
$res3="Puodai";
$res4="Puodus";
$res5="Puod&#371;";
   }
   elseif ($res == "gem") {
$res1="Gemsas";
$res2="Gems&#261;";
$res3="Gemsai";
$res4="Gemsus";
$res5="Gems&#371;";
   }
   elseif ($res == "sulfur") {
$res1="Sulfuras";
$res2="Sulfur&#261;";
$res3="Sulfurai";
$res4="Sulfurus";
$res5="Sulfur&#371;";
   }
   elseif ($res == "crystal") {
$res1="Kristalas";
$res2="Kristal&#261;";
$res3="Kristalai";
$res4="Kristalus";
$res5="Kristal&#371;";
   }
if (((substr($q, strlen($q) - 2, 2) >= 10) and (substr($q, strlen($q) - 2, 2) <= 20)) or ((substr($q, strlen($q) - 1, 1) == "0"))) {
      $resource = $res5;
   }
   elseif (substr($q, strlen($q) - 1, 1) == "1") {
      $resource=$res1;
   }
   else {
      $resource=$res3;
   }

   return $resource;
}
function resourcee($res, $q) {
   if ($res == "stone") {
      if (($q == "1") or ($q == "21")) { $resource = "Akmeni"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Akmenys"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Akmen&#371;"; }
   }
   elseif ($res == "wood") {
      if (($q == "1") or ($q == "21")) { $resource = "Medi"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Med&#382;ius"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Med&#382;i&#371;"; }
   }
   if ($res == "mercury") {
      if (($q == "1") or ($q == "21")) { $resource = "Puod&#261;"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Puodus"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Puod&#371;"; }
   }
   elseif ($res == "gem") {
      if (($q == "1") or ($q == "21")) { $resource = "Gems&#261;"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Gemsus"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Gems&#371;"; }
   }
   elseif ($res == "sulfur") {
      if (($q == "1") or ($q == "21")) { $resource = "Sulfur&#261;"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Sulfurus"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Sulfur&#371;"; }
   }
   elseif ($res == "crystal") {
      if (($q == "1") or ($q == "21")) { $resource = "Kristal&#261;"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Kristalus"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Kristal&#371;"; }
   }
   return $resource;
}
?>