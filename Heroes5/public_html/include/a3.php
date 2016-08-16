<?php
if($action=="aukca"){
if($user[level]<5){
echo"<small>I aukciona galima nuo 5lygio</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
else {
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='art' and patv='1'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='art' and patv='1' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
include_once("names/artap.php");
include_once("names/artifacts.php");
$aname=$artifact_name[$preke[1]];
$ara=$apr[$preke[1]];
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $aname</b></small><br/><img src=\"img/artifact/$preke[1].gif\" alt=\"$aname\"/><br/>";
echo"<small>Apra&#353;imas:<b>$ara</b></small><br/>";
echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small>";
echo"<br/><small><a href=\"index.php?action=aukca4&amp;id=$id&amp;idz=$idz\">Pirkti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukca50&amp;id=$id\">Mano prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcas5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukca&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukca&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}}
if($action=="aukcas5"){
echo"<select name=\"units\">";
$arti=mysql_query("SELECT * FROM artifacts where user='$user[username]'");
while($row=mysql_fetch_array($arti)){
$name=$row['name'];
$kiek=$row['kiek'];
include_once("names/artifacts.php");
$name2=$artifact_name[$name];
echo"<option value=\"$name\"> $kiek $name2</option>";}
echo"</select><br/><small><b>Kiek</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><b>Kaina aukso:</b></small><br/><input type=\"text\" name=\"gold\" format=\"*N\"/><br/>
<small><anchor>Deti<go method=\"post\" href=\"index.php?action=aukcas6&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/><postfield name=\"gold\" value=\"$(gold)\"/></go></anchor><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukcas6"){
$units=$_POST['units'];
$quan=$_POST['quan'];
$gold=$_POST['gold'];
if((empty($units)) or (empty($quan)) or (empty($gold))){
echo"<small>Pirmus tris laukelius u&#382;pildity butina</small>";}
elseif($gold/$quan<10){
echo"<small>Prek&#279; per pigi</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$units'"));
if($unitas[det]=="1"){
echo"<small>Pirma nusiimkite artifakta</small>";}
elseif(!$unitas[name]){
echo"<small>Tokio artifakto neturite</small>";}
elseif($quan>$unitas[kiek]){
echo"<small>Neturite tiek artifakt&#371;</small>";}
else {
mysql_query("UPDATE artifacts SET kiek=kiek-$quan where name='$units' and user='$user[username]'");
mysql_query("insert into aukcionas (user,preke,gold,type,patv) values ('$user[username]','$quan-$units','$gold','art','1')");
include_once("names/artifacts.php");
$units=$artifact_name[$units];
echo"<small>Parduodate $quan $units.</small>";}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}


if($action=="aukca20"){
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='art' and patv='0'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='art' and patv='0' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
include_once("names/artap.php");
include_once("names/artifacts.php");
$aname=$artifact_name[$preke[1]];
$ara=$apr[$preke[1]];
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $aname</b></small><br/><img src=\"img/artifact/$preke[1].gif\" alt=\"$aname\"/><br/>";
echo"<small>Apra&#353;imas:<b>$ara</b></small><br/>";

echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small><br/>";
echo"<small><a href=\"index.php?action=aukca25&amp;id=$id&amp;idz=$idz&amp;m=2\">Patvirtinti</a></small><br/><small><a href=\"index.php?action=aukca25&amp;id=$id&amp;idz=$idz&amp;m=1\">Atmesti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukca50&amp;id=$id\">Mano prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcas5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukca&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukca&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($action=="aukca25"){
$idz=$_GET['idz'];
$m=$_GET['m'];
if($m=="2"){
mysql_query("UPDATE aukcionas SET patv='1' where id='$idz'");
echo"<small>Patvirtinta</small>";}
if($m=="1"){
mysql_query("UPDATE aukcionas SET patv='2' where id='$idz'");
echo"<small>Atmesta</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukca50"){
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='art' and user='$user[username]'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='art' and user='$user[username]' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
$pat=$pre2[patv];
include_once("names/artap.php");
include_once("names/artifacts.php");
$aname=$artifact_name[$preke[1]];
$ara=$apr[$preke[1]];
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $aname</b></small><br/><img src=\"img/artifact/$preke[1].gif\" alt=\"$aname\"/><br/>";
echo"<small>Apra&#353;imas:<b>$ara</b></small><br/>";

echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small><br/>";
echo"<small>Busena:</small>";
if($pat=="0"){
echo"<small>Laukia patvirtinimo</small><br/>";}
if($pat=="1"){
echo"<small>Patvirtinta</small><br/>";}
if($pat=="2"){
echo"<small>Atmesta</small><br/>";}
echo"<small><a href=\"index.php?action=aukca51&amp;id=$id&amp;idz=$idz\">Atsiimti</a></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?action=aukca&amp;id=$id\">Visos prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcas5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukca50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukca50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}}
if($action=="aukca51"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])!==strtolower($user[username])){
echo"<small>&#353;i preke ne jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$unit=explode("-",$quer[preke]);
$arti=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$unit[1]'"));
if(!$arti[name]){
include_once("artifact/use/$unit[1].php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$user[username]','$unit[1]','$unit[0]','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$unit[0] where user='$user[username]' and name='$unit[1]'");}
mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
include_once("names/artifacts.php");
$aname=$artifact_name[$unit[1]];
echo"<small>Atsi&#279;m&#279;te $unit[0] $aname i&#353; aukciono</small>";}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukca4"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])==strtolower($user[username])){
echo"<small>&#353;i prek&#279; yra jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$unit=explode("-",$quer[preke]);
$pirkejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$user[username]'"));
$pardavejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$quer[user]'"));if($quer[gold]>$user[gold]){
echo"<small>Nepakanka resursu pirkimui</small>";}
else {
$arti=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$unit[1]'"));
if(!$arti[name]){
include_once("artifact/use/$unit[1].php");
mysql_query("insert into artifacts (user,name,kiek,type,det) values ('$user[username]','$unit[1]','$unit[0]','$atype','0')");}
else {
mysql_query("UPDATE artifacts SET kiek=kiek+$unit[0] where user='$user[username]' and name='$unit[1]'");}
mysql_query("UPDATE users SET gold=gold-$quer[gold] where username='$user[username]'"); mysql_query("UPDATE users SET gold=gold+$quer[gold] where username='$quer[user]'");
mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
include_once("names/artifacts.php");
$aname=$artifact_name[$unit[1]];
$txt="$user[username] nusipirko $unit[0] $aname i&#353; $quer[user] uz $quer[gold]";
mysql_query("insert into aukatas (text) values ('$txt')");
echo"<small>Nusipirkote $unit[0] $aname i&#353; aukciono</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
