<?
$crd=$_GET['crd'];
if($crd==""){

echo"<small>Pasirinkite ka norite patobulinti</small><br/>
<select name=\"buy\"><option value=\"power\">Gali&#261;</option>
<option value=\"attack\">Atak&#261;</option>
<option value=\"defense\">Gynyb&#261;</option>
<option value=\"knowledge\">Isminti</option>
</select>
<br/><small>Pasirinkite ka norite suma&#382;inti</small><br/>
<select name=\"sell\"><option value=\"power\">Gali&#261;</option>
<option value=\"attack\">Atak&#261;</option>
<option value=\"defense\">Gynyb&#261;</option>
<option value=\"knowledge\">Isminti</option>
</select>
<br/><small><anchor>Mokytis<go method=\"post\" href=\"index.php?action=akad&amp;id=$id&amp;crd=learn\"><postfield name=\"buy\" value=\"$(buy)\"/>
<postfield name=\"sell\" value=\"$(sell)\"/>
</go></anchor></small><br/><small><a href=\"index.php?id=$id&amp;action=akad&amp;crd=info\">Informacija</a></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



if($crd=="info"){
echo"<small>Akademijoje galite patobulinti kuri nors Herojaus status&#261; +1 taciau tam reikia sumazinti kita status&#261; -2.</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


if($crd=="learn"){
$buy=$_POST['buy'];
$sell=$_POST['sell'];
if($buy=="$sell"){
echo"<small>Reik&#353;m&#279;s turi buti skirtingos</small>";}
elseif($user[$sell]<2){
echo"<small>Negalima prarasti statuso i minus&#261;.</small>";}
else {

mysql_query("UPDATE users SET $buy=$buy+1,$sell=$sell-2 where username='$user[username]'");
include_once("names/stat.php");
echo"<small>Gavote +1 $stat[$buy], bet praradote -2 $stat[$sell].</small>";}

echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}




?>