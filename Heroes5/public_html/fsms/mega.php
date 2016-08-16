<?php
/*
* Seekoo@mail.ru
* www.zelek.com.ru
* wap.zelek.com.ru
*/


header("Content-type: text/vnd.wap.wml");
include("wml.php");
echo "<wml>";
echo "<card id=\"mega\" title=\"&#x041C;&#x0435;&#x0433;&#x0430;&#x0444;&#x043E;&#x043D; &#x043C;&#x043E;&#x0441;&#x043A;&#x0432;&#x0430;\">";
echo "<p>";
echo "<img src=\"wap.zelek.com.ru/logo_2004.gif\" alt=\"Logo\"/><br/>";
echo "<i>-------</i><br/>";
echo "<i>[&#x0412;&#x0440;&#x0435;&#x043C;&#x044F;] </i>";
$tm=date("H:i:s");
echo "$tm";
echo "<br/>";
echo "<i>[&#x0414;&#x0430;&#x0442;&#x0430;] </i>";
$dat=date("j.m.Y");
echo "$dat";
echo "<br/>";
echo "<i>-------</i><br/>";
echo "<i>+</i>";
echo "<input format=\"*N\" emptyok=\"false\" size=\"4\" maxlength=\"4\" name=\"prefix\" value=\"7926\"/>";
echo "<input format=\"*N\" emptyok=\"true\" size=\"7\" maxlength=\"7\" name=\"To\" value=\"\"/><br/>";
echo "<i>&#x0422;&#x0435;&#x043A;&#x0441;&#x0442;: <br/></i>";
echo "<input emptyok=\"true\" maxlength=\"140\" name=\"Msg\" value=\"&#x041F;&#x0440;&#x0438;&#x0432;&#x0435;&#x0442;! \"/><br/>";
echo "<i>-------</i><br/>";
echo "<i>Seekoo 2007&#169;</i><br/>";
echo "<i>-------</i><br/>";
echo "<do type=\"accept\" label=\"Send\">";
echo "<go href=\"http://www.megafonmoscow.ru/misc/sms2\" method=\"post\">";
echo "<postfield name=\"transliterate\" value=\"off\"/>";
echo "<postfield name=\"messlen\" value=\"160\"/>";
echo "<postfield name=\"send\" value=\"%CE%F2%EF%F0%E0%E2%E8%F2%FC\"/>";
echo "<postfield name=\"mlength\" value=\"%28%EC%E0%EA%F1%E8%EC%F3%EC+160+%F1%E8%EC%E2%EE%EB%EE%E2%29%3A\"/>";
echo "<postfield name=\"prefix\" value=\"$(prefix)\"/>";
echo "<postfield name=\"addr\" value=\"$(To)\"/>";
echo "<postfield name=\"message\" value=\"$(Msg)\"/>";
echo "</go>";
echo "</do>";
echo "</p>";
echo "</card>";
echo "</wml>";
?>