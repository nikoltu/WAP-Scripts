<?php

$da=$_GET['da'];
if(($da!=="siu") and ($da!=="info")){
$idzz=$_GET['idzz'];
}
if($da=="atm"){
if($user[trade]=="0"){
echo"<small>Jums niekas mainu nepasiul&#279;</small>";}
else {
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if(strtolower($user[username])!==strtolower($tre[name2])){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
mysql_query("UPDATE users SET trade='0' where username='$tre[name]'");
mysql_query("UPDATE users SET trade='0' where username='$tre[name2]'");
mysql_query("DELETE FROM trade where id='$idzz'");
echo"<small>Mainai atmesti</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($da=="sut"){
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if($user[trade]=="0"){
echo"<small>Jums niekas mainu nepasiul&#279;</small>";}
elseif($tre[act]=="1"){
echo"<small>Jus jau sutikote</small>";}
elseif(strtolower($user[username])!==strtolower($tre[name2])){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
mysql_query("UPDATE trade SET act='1' where id='$idzz'");
echo"<small>Mainytis sutikote</small><br/><small><a href=\"index.php?id=$id&amp;action=trade&amp;da=trade&amp;idzz=$idzz\">I mainus</a></small>";}}
if($da=="ats"){
if($user[trade]=="0"){
echo"<small>Jus nepasiul&#279;te</small>";}
else {
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if(strtolower($user[username])!==strtolower($tre[name])){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
mysql_query("UPDATE users SET trade='0' where username='$tre[name]'");
mysql_query("UPDATE users SET trade='0' where username='$tre[name2]'");
mysql_query("DELETE FROM trade where id='$idzz'");
echo"<small>Mainai atmesti</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



if($da=="siu"){
$name=$_GET['name'];
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
if($user[trade]!=="0"){
echo"<small>Jus jau esate pasiules mainus</small>";}
elseif($names[trade]!=="0"){
echo"<small>Jis jau mainosi</small>";}
else {
mysql_query("UPDATE users SET trade='1' where username='$user[username]'");
mysql_query("UPDATE users SET trade='2' where username='$name'");
mysql_query("insert into trade (name,name2) values ('$user[username]','$name')");
echo"<small>Mainai pasiulyti</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($da=="ats"){
if($user[trade]=="0"){
echo"<small>Jus mainu niekam nepasiul&#279;te</small>";}
else {
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if(strtolower($user[username])!==strtolower($tre[name])){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
mysql_query("UPDATE users SET trade='0' where username='$tre[name]'");
mysql_query("UPDATE users SET trade='0' where username='$tre[name2]'");
mysql_query("DELETE FROM trade where id='$idzz'");
echo"<small>Mainai at&#353;aukti</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($da=="trade"){
$aa=$_GET['aa'];
$trei=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if(!$trei[id]){
echo"<small>Tokie mainai neegzistuoja</small>";}
elseif((strtolower($user[username])!==strtolower($trei[name])) and (strtolower($user[username])!==strtolower($trei[name2]))){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
if(strtolower($user[username])==strtolower($trei[name])){
$nn=$trei[name2];
if($trei[stk2]=="1"){
$tin="Sutinka";}
else {
$tin="Nesutinka";}


}
else {
$nn=$trei[name];
if($trei[stk]=="1"){
$tin="Sutinka";}
else {
$tin="Nesutinka";}
}
if(($trei[stk]=="1") and ($trei[stk2]=="1")){
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
mysql_query("UPDATE users SET trade='0' where username='$tre[name]'");
mysql_query("UPDATE users SET trade='0' where username='$tre[name2]'");
mysql_query("DELETE FROM trade where id='$idzz'");
$kei=mysql_query("SELECT * FROM trade2 where user='$tre[name]'");
while($row=mysql_fetch_array($kei)){
$kiek=$row['kiek'];
$pre=$row['preke'];
$uni3=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$tre[name2]' and name='$pre'"));
if(!$uni3[name]){
include_once("artifact/use/$pre.php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$tre[name2]','$pre','$kiek','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$kiek where user='$tre[name2]' and name='$pre'");}
}
mysql_query("DELETE FROM trade2 where user='$tre[name]'");

$kei2=mysql_query("SELECT * FROM trade2 where user='$tre[name2]'");
while($row2=mysql_fetch_array($kei2)){
$kiek2=$row2['kiek'];
$pre2=$row2['preke'];
$uni4=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$tre[name]' and name='$pre2'"));
if(!$uni4[name]){
include_once("artifact/use/$pre2.php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$tre[name]','$pre2','$kiek2','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$kiek2 where user='$tre[name]' and name='$pre2'");}
}
mysql_query("DELETE FROM trade2 where user='$tre[name2]'");
echo"<small>Mainai ivyko</small></p></card></wml>";
exit;
mysql_close($db);
}



if($aa=="det"){
$units=$_POST['units'];
$quan=$_POST['quan'];
if((empty($units)) or (empty($quan))){
echo"<small>abu laukelius u&#382;pildity butina</small><br/>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$units'"));
if($unitas[det]=="1"){
echo"<small>Pirma nusiimkite artifakta</small><br/>";}
elseif(!$unitas[name]){
echo"<small>Tokios artifakto neturite</small><br/>";}
elseif($quan>$unitas[kiek]){
echo"<small>Neturite tiek artifaktu</small><br/>";}
else {
mysql_query("UPDATE artifacts SET kiek=kiek-$quan where name='$units' and user='$user[username]'");
$uni=mysql_fetch_array(mysql_query("SELECT * FROM trade2 where user='$user[username]' and preke='$units'"));
if(!$uni[id]){
mysql_query("insert into trade2 (user,id,preke,kiek) values ('$user[username]','$idzz','$units','$quan')");}
else {
mysql_query("UPDATE trade2 SET kiek=kiek+$quan where user='$user[username]' and id='$idzz' and preke='$units'");}
mysql_query("UPDATE trade SET stk='0',stk2='0' where id='$idzz'");
$tr=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and kiek='0'"));
if($tr[kiek]=="0"){
mysql_query("DELETE FROM artifacts where kiek='0' and user='$user[username]'");}
}
}}
if($aa=="aart"){
$art=$_GET['art'];
$artis=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$art'"));
$uni=mysql_fetch_array(mysql_query("SELECT * FROM trade2 where user='$user[username]' and preke='$art'"));
if(!$uni[id]){
echo"<small>Negalite atsiimti</small><br/>";}
else
{
if(!$artis[name]){
include_once("artifact/use/$art.php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$user[username]','$art','$uni[kiek]','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$uni[kiek] where user='$user[username]' and name='$art'");}
mysql_query("DELETE FROM trade2 where user='$user[username]' and preke='$art' LIMIT 1");
mysql_query("UPDATE trade SET stk='0',stk2='0' where id='$idzz'");

}}

if($aa=="sut"){
if(strtolower($user[username])==strtolower($trei[name])){

mysql_query("UPDATE trade SET stk='1' where name='$user[username]'");
}
else
{
mysql_query("UPDATE trade SET stk2='1' where name2='$user[username]'");
}
}
echo"<small>Jus siulote:</small><br/>";
$tk=0;
$kei=mysql_query("SELECT * FROM trade2 where user='$user[username]'");
while($row=mysql_fetch_array($kei)){
$kiek=$row['kiek'];
$pre=$row['preke'];
include_once("names/artifacts.php");
$preke=$artifact_name[$pre];
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;idzz=$idzz&amp;da=trade&amp;art=$pre&amp;aa=aart&amp;idzz=$idzz\">$kiek $preke</a></small><br/>";
$tk++;}
if($tk=="0"){
echo"<small>Nesiulote nieko</small><br/>";}
echo"$line<br/>";
echo"<small>$nn siulo:</small><br/>";
$tk2=0;
$kei2=mysql_query("SELECT * FROM trade2 where user='$nn'");
while($row2=mysql_fetch_array($kei2)){
$kiek2=$row2['kiek'];
$pre2=$row2['preke'];
include_once("names/artifacts.php");
$preke2=$artifact_name[$pre2];
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;idzz=$idzz&amp;da=sart&amp;art=$pre2\">$kiek2 $preke2</a></small><br/>";
$tk2++;}
if($tk2=="0"){
echo"<small>$nn nesiulo nieko</small><br/>";}
echo"$line<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=trade&amp;idzz=$idzz&amp;aa=sut\">Sutikti</a></small><br/>";
echo"<small>$nn $tin</small><br/>";
echo"<select name=\"units\">";
$arti=mysql_query("SELECT * FROM artifacts where user='$user[username]'");
while($row=mysql_fetch_array($arti)){
$name=$row['name'];
$kiek=$row['kiek'];
include_once("names/artifacts.php");
$name2=$artifact_name[$name];
echo"<option value=\"$name\"> $kiek $name2</option>";}
echo"</select><br/><small><b>Kiek</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><anchor>Siulyti<go method=\"post\" href=\"index.php?action=trade&amp;id=$id&amp;idzz=$idzz&amp;aa=det&amp;da=trade\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/></go></anchor></small><br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=info\">Informacija</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=ats2&amp;idzz=$idzz\">Atmesti</a></small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($da=="info"){
echo"<small>Kad mainai ivyktu abi pus&#279;s turi sutikti su mainais</small><br/>$line<br/>";
echo"<small>Paspaude ant savo artifakto jus ji atsiimsite</small><br/>$line<br/>";
echo"<small>Paspaude ant kito &#382;mogaus artifakto jus pamatysite jo informacija</small><br/>$line<br/>";
echo"<small>Pakeitus pasiulyma(pridejus/isemus artifakta) automatiskai abi pus&#279;s su mainais nebesutinka</small><br/>$line<br/>";
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";}

if($da=="ats2"){
if($user[trade]=="0"){
echo"<small>Jus nesimainote</small>";}
else {
$tre=mysql_fetch_array(mysql_query("SELECT * FROM trade where id='$idzz'"));
if((strtolower($user[username])!==strtolower($tre[name])) and (strtolower($user[username])!==strtolower($tre[name2]))){
echo"<small>&#352;ie mainai ne jusu</small>";}
else {
mysql_query("UPDATE users SET trade='0' where username='$tre[name]'");
mysql_query("UPDATE users SET trade='0' where username='$tre[name2]'");
mysql_query("DELETE FROM trade where id='$idzz'");
$kei=mysql_query("SELECT * FROM trade2 where user='$tre[name]'");
while($row=mysql_fetch_array($kei)){
$kiek=$row['kiek'];
$pre=$row['preke'];
$uni=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$tre[name]' and name='$pre'"));
if(!$uni[name]){
include_once("artifact/use/$pre.php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$tre[name]','$pre','$kiek','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$kiek where user='$tre[name]' and name='$pre'");}
}
mysql_query("DELETE FROM trade2 where user='$tre[name]'");
$kei2=mysql_query("SELECT * FROM trade2 where user='$tre[name2]'");
while($row=mysql_fetch_array($kei2)){
$kiek2=$row['kiek'];
$pre2=$row['preke'];
$uni2=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$tre[name2]' and name='$pre2'"));
if(!$uni2[name]){
include_once("artifact/use/$pre2.php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$tre[name2]','$pre2','$kiek2','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$kiek2 where user='$tre[name2]' and name='$pre2'");}
}
mysql_query("DELETE FROM trade2 where user='$tre[name2]'");

echo"<small>Mainai atmesti</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($da=="sart"){
$art=$_GET['art'];
include_once("names/artifacts.php");
include_once("names/artap.php");

echo"<small><b>$artifact_name[$art]</b></small><br/><img src=\"img/artifact/$art.gif\" alt=\"+\"/><br/>$line<br/><small>$apr[$art]</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

?>