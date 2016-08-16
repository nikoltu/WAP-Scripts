<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";


if ($id == "") {
echo"<p align=\"center\"><small>
Jeigu norite patalpinti reklama zaidimo apacioj <br/>irasykite <b>lgzzreklama jusu_saitas pavadinimas</b>.<br/>
Pvz.: <b>lgzzreklama google.lt Gera svetaine ;D</b><br/>Numeriu: 1679<br/>Kaina: 50 Centu<br/>
---=*=---<br/>
$lin <br/>
<a href=\"index.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small></p>";
}

print'</card></wml>';

?>