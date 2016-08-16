<?
$ns=$_GET['ns'];
if($ns==""){

echo"<small>NON-STOP prasideda <b>Kasdien 22:00</b></small><br/>$line<br/>";

echo"<small>Ved&#279;jai:<b>@Makatas, !@SYS.</b></small><br/>$line<br/>";

echo"<small>Prizai: 1vieta-<b>3 kreditai</b></small><br/>$line<br/>";
$sus=mysql_fetch_array(mysql_query("SELECT * FROM robo LIMIT 1"));
if($sus[sustime]){
echo"<small>Jau vyksta. Palaukite, kol pasibaigs</small><br/>$line<br/>";}

elseif($user[ns]!=="1"){
echo"<small>Registracija nemokama</small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=nsinfo&amp;ns=reg\">Registruotis!</a></small><br/>$line<br/>";}


echo"<small><a href=\"index.php?id=$id&amp;action=nsinfo&amp;ns=info\">&#382;aidimo taisykl&#279;s</a></small><br/>$line<br/>";
if(!$sus[sustime]){
echo"<small>Dalyvi&#371; sara&#353;as</small><br/>";
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*15-15;
$tot=mysql_query("SELECT COUNT(ns) AS num FROM users where ns='1'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;

$dal=mysql_query("SELECT username FROM users where ns='1' order by expierence desc LIMIT $nuo,15");
while($row=mysql_fetch_array($dal)){
$us=$row['username'];
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$us\">$us</a></small><br/>";
}
$vpsl=ceil($total/15);
if(($total>15) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>&gt;&gt;&gt;<go method=\"post\" href=\"index.php?action=nsinfo&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>&lt;&lt;&lt;<go method=\"post\" href=\"index.php?action=nsinfo&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}}

echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}




if($ns=="reg"){
if($sus[sustime]){
echo"<small>Jau vyksta. Palaukite, kol pasibaigs</small><br/>$line<br/>";}

elseif($user[ns]=="1"){
echo"<small>Jus jau dalyvaujate</small>";}
else {
mysql_query("UPDATE users SET ns='1' where username='$user[username]'");
echo"<small>OK!</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($ns=="info"){
echo"<small><b>NON-STOP taisykl&#279;s</b></small><br/>$line<br/>";
echo"<small>Pagrindin&#279; taisykl&#279;:<b>Kuo ilgiau neu&#382;migti.</b></small><br/>$line<br/>";
echo"<small>Butina bendrauti. Neparase 5minutes krenta i&#353; &#382;aidimo.</small><br/>$line<br/>";
echo"<small>Ved&#279;jai betkada gali paskelbti susira&#353;im&#261;. Tada dalyviai turi parasyti esu iki susira&#353;imo pabaigos. Jei nepara&#353;o-krenta i&#353; &#382;aidimo.</small><br/>$line<br/>";
echo"<small>&#382;aidimas baigiasi kai lieka tik 1aktyvus dalyvis kuris ir u&#382;ima pirmaja vieta.</small><br/>$line<br/>";
echo"<small>&#381;aidimas turi vykti bent 1 valand&#261;. Jei truks trumpiau - bus u&#382;skaitytas kaip ne&#303;vyk&#281;s.</small><br/>$line<br/>";
echo"<small>Jei ko nors nesupratote ar kazko trusta informacijos skyrelije-rasykite @Makatas privacia &#382;inute.</small><br/>$line<br/>";
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";}


?> 