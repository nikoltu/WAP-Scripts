<?

$name=$_GET['name'];
$sm=$_GET['sm'];
if($sm=="sp"){
echo"<small>Pasirinkite burt&#261; kurio norite i&#353;mokyti $name</small><br/>$line<br/>";
$bur=0;
$mag=mysql_query("SELECT name FROM magic where user='$user[username]'");
while($mag2=mysql_fetch_array($mag)){
$mname=$mag2['name'];
include_once("names/magic.php");
echo"<small><a
href=\"index.php?action=scholar&amp;id=$id&amp;magi=$mname&amp;name=$name&amp;sm=mok\">$magic_name[$mname]</a></small><br/>";
$bur++;}
if($bur=="0"){
echo"<small>Burt&#371; nemokate</small><br/>";}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($sm=="mok"){
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
include_once("core/enemy_skills.php");
include_once("skils/scholar.php");
include_once("skils/scholar2.php");
include_once("skils/knowledge2.php");

$magi=$_GET['magi'];
include_once("magic/$magi.php");
$spu=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$user[username]' and name='$magi'"));
$nma=mysql_fetch_array(mysql_query("SELECT * FROM magic where user='$name' and name='$magi'"));
if(!$spu[name]){
echo"<small>Tokio burto nemokate</small><br/>";}
elseif($user[onl]==$names[onl]){
echo"<small>Gausi ban!</small><br/>";}
elseif($magi=="armagedon"){
echo"<small>&#352;io burto mokyti negalima</small><br/>";}
elseif($bu<$magic[lvl]){
echo"<small>Tokio lygio burto mokyti negalite</small><br/>";}
elseif($bus<$magic[lvl]){
echo"<small>&#352;is herojus negali i&#353;mokti tokio lygio burto</small><br/>";}
elseif($ll<$magic[lvl]){
echo"<small>&#352;is herojus negali i&#353;mokti okio lygio burto</small><br/>";}
elseif($nma[name]){
echo"<small>&#352;is herojus jau moka toki burt&#261;</small><br/>";}
else {
mysql_query("insert into magic (user,name) values ('$name','$magi')");
mysql_query("INSERT INTO pm(nick, name, text, date, active, action) VALUES ('$name','I&#353;mokote!','$user[username] i&#353;mok&#279; jus naujo burto!','[$date]','0','note')");echo"<small>$name S&#279;kmingai i&#353;moko naujo burto</small><br/>";}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
