<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("ip.php");
$nkd2="$koks_ip|$browserjgmgmg";
if($_COOKIE['nakedlops']=="$nkd2"){
include_once("anth.php");}
else {
include_once("core.php");
echo"<wml><card id=\"heroes\" title=\"Isigijimas\"><p align=\"center\">";
include_once("mukaka.php");
$i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
if($i==""){
echo"<small>&#268;ia galite isigyti heroj&#371; su kuriuo jau buvo &#382;aista, bet d&#279;l tam tikr&#371; prieza&#353;i&#371; jis buvo i&#353;trintas.</small><br/>
<small>Nurodomas herojus ir lygis.</small>";
echo"</p><p>";
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*15-15;
$nicks=mysql_query("SELECT username,level from users where deleted='1' order by level desc LIMIT $nuo,15");
$kk=0;
while($row=mysql_fetch_array($nicks)){
echo"<small><a href=\"isigyti.php?i=nick&amp;nick=$row[0]\">$row[0]</a>&nbsp;[$row[1]]</small><br/>";
$kk++;}
if($kk=="0"){
echo"<small>Kolkas i&#353;trint&#371;j&#371; n&#279;ra</small>";}
echo"</p><p align=\"center\">";
$cnic=mysql_num_rows(mysql_query("SELECT * FROM users where deleted='1'"));
$cpsl=ceil($cnic/15);
if($cpsl>$psl){

$npsl=$psl+1;
echo"<small><anchor>Toliau<go method=\"post\" href=\"isigyti.php\"><postfield name=\"psl\" value=\"$npsl\"/></go></anchor></small><br/>";}
if($psl>1){

$opsl=$psl+1;
echo"<small><anchor>Atgal<go method=\"post\" href=\"isigyti.php\"><postfield name=\"psl\" value=\"$opsl\"/><br/>";}


echo"<small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
 }

if($i=="nick"){
$nick=$_GET['nick'];
$nick=strtolower($nick);
echo"<small>Nor&#279;dami isigyti $nick heroj&#371; siuskite sms numeriu <b>1371</b> su tekstu <b>isigyti $nick</b>.Sms kaina 10 Lit&#371;</small><br/>";
echo"<small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
 }

}

?>