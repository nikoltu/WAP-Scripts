<?php
if($action=="aukcr"){
if($user[level]<5){
echo"<small>I aukciona galima nuo 5lygio</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
else {
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='res' and patv='1'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='res' and patv='1' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
include_once("core/resources.php");
$res=resource($preke[1], $preke[0]);
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $res</b></small><br/><img src=\"img/resource/$preke[1].gif\" alt=\"$res\"/><br/>";

echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small>";
echo"<br/><small><a href=\"index.php?action=aukcr4&amp;id=$id&amp;idz=$idz\">Pirkti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukcr50&amp;id=$id\">Mano prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcr5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukcr&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukcr&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}}
if($action=="aukcr5"){
$usr=strtolower($user[username]);
$qu=mysql_fetch_array(mysql_query("SELECT mercury,gem,sulfur,crystal,wood,stone FROM users where username='$user[username]'"));
include_once("core/resources.php");
$res=resource(gem, $qu[gem]);
$res2=resource(sulfur, $qu[sulfur]);
$res3=resource(crystal, $qu[crystal]);
$res5=resource(stone, $qu[stone]);
$res6=resource(wood, $qu[wood]);
$res4=resource(mercury, $qu[mercury]);
echo"<select name=\"units\">";
if($qu[gem]>0){
echo"<option value=\"gem\"> $qu[gem] $res</option>";}
if($qu[sulfur]>0){
echo"<option value=\"sulfur\"> $qu[sulfur] $res2</option>";}
if($qu[crystal]>0){
echo"<option value=\"crystal\"> $qu[crystal] $res3</option>";}
if($qu[wood]>0){
echo"<option value=\"wood\"> $qu[wood] $res6</option>";}
if($qu[stone]>0){
echo"<option value=\"stone\"> $qu[stone] $res5</option>";}
if($qu[mercury]>0){
echo"<option value=\"mercury\"> $qu[mercury] $res4</option>";}
echo"</select><br/><small><b>Kiek</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><b>Kaina aukso:</b></small><br/><input type=\"text\" name=\"gold\" format=\"*N\"/><br/><small><anchor>Deti<go method=\"post\" href=\"index.php?action=aukcr6&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/><postfield name=\"gold\" value=\"$(gold)\"/></go></anchor><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukcr6"){
$units=$_POST['units'];
$quan=$_POST['quan'];
$gold=$_POST['gold'];
$usr=strtolower($user[username]);
if((empty($units)) or (empty($quan)) or (empty($gold))){
echo"<small>Pirmus tris laukelius u&#382;pildity butina</small>";}
elseif($gold/$quan>7000){
echo"<small>Prek&#279; per brangi</small>";}
elseif($gold/$quan<2000){
echo"<small>Prek&#279; per pigi</small>";}


else {
$resu=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$user[username]'"));
if($resu[$units]<$quan){
echo"<small>Negalite tiek parduoti</small>";}
else {
mysql_query("UPDATE users SET $units=$units-$quan where username='$user[username]'");
mysql_query("insert into aukcionas (user,preke,gold,type,patv) values ('$user[username]','$quan-$units','$gold','res','1')");
include_once("core/resources.php");
$units=resource($units, $quan);
echo"<small>Parduodate $quan $units</small>";}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukcr20"){
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='res' and patv='0'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='res' and patv='0' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
include_once("core/resources.php");
$res=resource($preke[1], $preke[0]);
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $res</b></small><br/><img src=\"img/resource/$preke[1].gif\" alt=\"$res\"/><br/>";

echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small><br/>";
echo"<small><a href=\"index.php?action=aukcr25&amp;id=$id&amp;idz=$idz&amp;m=2\">Patvirtinti</a></small><br/><small><a href=\"index.php?action=aukcr25&amp;id=$id&amp;idz=$idz&amp;m=1\">Atmesti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukcr50&amp;id=$id\">Mano prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcr5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukcr&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukcr&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($action=="aukcr25"){
$idz=$_GET['idz'];
$m=$_GET['m'];
if($m=="2"){
mysql_query("UPDATE aukcionas SET patv='1' where id='$idz'");
echo"<small>Patvirtinta</small>";}
if($m=="1"){
mysql_query("UPDATE aukcionas SET patv='2' where id='$idz'");
echo"<small>Atmesta</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukcr50"){
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='res' and user='$user[username]'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='res' and user='$user[username]' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
$pat=$pre2[patv];
include_once("core/resources.php");
$res=resource($preke[1], $preke[0]);
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $res</b></small><br/><img src=\"img/resource/$preke[1].gif\" alt=\"$res\"/><br/>";

echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small><br/>";
echo"<small>Busena:</small>";
if($pat=="0"){
echo"<small>Laukia patvirtinimo</small><br/>";}
if($pat=="1"){
echo"<small>Patvirtinta</small><br/>";}
if($pat=="2"){
echo"<small>Atmesta</small><br/>";}
echo"<small><a href=\"index.php?action=aukcr51&amp;id=$id&amp;idz=$idz\">Atsiimti</a></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?action=aukcr&amp;id=$id\">Visos prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukcr5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukcr50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukcr50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}}
if($action=="aukcr51"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])!==strtolower($user[username])){
echo"<small>&#353;i preke ne jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$unit=explode("-",$quer[preke]);
mysql_query("UPDATE users SET $unit[1]=$unit[1]+$unit[0] where username='$user[username]'");
mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
include_once("core/resources.php");
$units=resource($unit[1], $unit[0]);
echo"<small>Atsi&#279;m&#279;te $unit[0] $units i&#353; aukciono</small>";}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukcr4"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])==strtolower($user[username])){
echo"<small>&#353;i prek&#279; yra jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$unit=explode("-",$quer[preke]);
$pirkejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$user[username]'"));
$pardavejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$quer[user]'"));if($quer[gold]>$pirkejas[gold]){
echo"<small>Nepakanka resursu pirkimui</small>";}
else {
mysql_query("UPDATE users SET gold=gold-$quer[gold],$unit[1]=$unit[1]+$unit[0] where username='$user[username]'");
mysql_query("UPDATE users SET gold=gold+$quer[gold] where username='$quer[user]'");
mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
include_once("core/resources.php");
$units=resource($unit[1], $unit[0]);
$txt="$user[username] nusipirko $unit[0] $units i&#353; $quer[user] uz $quer[gold]";
mysql_query("insert into aukatas (text) values ('$txt')");

echo"<small>Nusipirkote $unit[0] $units i&#353; aukciono</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

?>