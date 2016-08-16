<?php
$idzz=$_GET['idz'];
if($action=="kviest"){
$name=$_GET['name'];
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz' and username!='$ally[vadas]'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$user[ally]' LIMIT 1"));
$cla=$user['class'];
$cla2=$names['class'];
if($cla!==$cla2){
echo"<small>Negalite jo kviesti i alijansa</small>";}
elseif($names[level]<5){
echo"<small>I alijansa galima imti tik tuos kuriu lygis didesnis nei 5</small>";}
elseif($names[kvietimas]!=="0"){
echo"<small>&#352;iam &#382;aid&#279;jui jau yra i&#353;siustas pakvietimas i alijansa</small>";}
elseif($tnar>="$user[level]"){
echo"<small>Daugiau kviesti negalite</small>";}
elseif(strtolower($ally[vadas])!==strtolower($user[username])){
echo"<small>Jus nesate alijanso ikurejas</small>";}
elseif($names[ally]!=="0"){
echo"<small>&#352;is &#382;aid&#279;jas jau priklauso alijansui</small>";}
else {
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$user[ally]','$dti','I alijansa pakviestas $name')");
mysql_query("UPDATE users SET kvietimas='$user[ally]' where username='$name'");
echo"<small>Pakvietimas issiustas</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="stot"){
if($user[kvietimas]=="0"){
echo"<small>Jus negavote pakvietimo</small>";
}
else{
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$user[kvietimas]','$dti','$user[username] istojo i alijansa')");
mysql_query("UPDATE users SET ally='$user[kvietimas]',kvietimas='0' where username='$user[username]'");
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
$lwl=0;
$poi=mysql_query("SELECT level FROM users where ally='$idzz'");
while($row=mysql_fetch_array($poi)){
$lvl=$row['level'];
$lwl=$lwl+$lvl;
}
$lwl=round($lwl/$tnar);
$alij=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz'"));
$topa=$lwl+$alij[taskai];

mysql_query("UPDATE ally SET vidurkis='$lwl',top='$topa' where id='$idzz'");




echo"<small>Sekmingai istojote i alijansa</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="mest"){
if($user[kvietimas]=="0"){
echo"<small>Jus negavote pakvietimo</small>";
}
else{
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$user[kvietimas]','$dti','$user[username] atmet&#279; pasiulyma istoti i alijansa')");
mysql_query("UPDATE users SET kvietimas='0' where username='$user[username]'");
echo"<small>Pakvietimas atmestas</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="logo"){
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
echo"<input type=\"text\" name=\"logo\" value=\"$ally[logo]\"/><br/><small>
<anchor>Keisti<go method=\"post\" href=\"index.php?id=$id&amp;action=logo2&amp;idz=$idzz\">
<postfield name=\"logo\" value=\"$(logo)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="logo2"){
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if(strtolower($ally[vadas])!==strtolower($user[username])){
echo"<small>Tau cia negalima</small>";}
else {
$logo=$_POST['logo'];
mysql_query("UPDATE ally SET logo='$logo' where id='$idzz'");
echo"<small>Naujas logotipas
yra</small><br/><img src=\"$logo\" alt=\"LOGO\"/>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="ally"){
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
$lwl=0;
$poi=mysql_query("SELECT level FROM users where ally='$idzz'");
while($row=mysql_fetch_array($poi)){
$lvl=$row['level'];
$lwl=$lwl+$lvl;
}
$lwl=round($lwl/$tnar);
$alij=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz'"));
$topa=$lwl+$alij[taskai];
if($idzz=="1"){
$lwl=0;
$topa=0;}

mysql_query("UPDATE ally SET vidurkis='$lwl',top='$topa' where id='$idzz'");




$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if(!$ally[id]){
echo"<small>Toks alijansas neegzistuoja</small>";}
else {
echo"<small><b>".htmlspecialchars($ally[pavadinimas])."</b></small><br/>$line<br/>";
if(($ally[logo]!=="http://") and ($ally[logo]!=="")){
echo"<img src=\"".htmlspecialchars($ally[logo])."\" alt=\"LOGO\"/><br/>$line<br/>";}
if($ally[topic2]=="2"){
echo"<small>Alijanso topic:</small><br/><small><b>$ally[topic]</b></small><br/>$line<br/>";}
elseif(($ally[topic2]=="1") and ($user[ally]=="$idzz")){
echo"<small>Alijanso topic:</small><br/><small><b>$ally[topic]</b></small><br/>$line<br/>";}
echo"<small>Alijanso taskai:<b>$ally[top]</b></small><br/>";
$reit=mysql_num_rows(mysql_query("SELECT * FROM ally where top>$ally[top]"))+1;
echo"<small>Vieta reitinge:<b>$reit</b></small><br/>$line<br/>";

echo"<small>Alijanso ikur&#279;jas:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$ally[vadas]\">$ally[vadas]</a></small><br/>$line<br/></p><p>";
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz' and username!='$ally[vadas]'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
if($tnar=="0"){
echo"<small>Nari&#371; n&#279;ra</small>";}
else {
$psl=$_POST['psl'];
if(!$psl){
$psl=1;}
$nuo=$psl*10-10;
$iki=10;
$nr=$nuo+1;
$nariai=mysql_query("SELECT username,level FROM users where ally='$idzz' and username!='$ally[vadas]' LIMIT $nuo,$iki");
while($row=mysql_fetch_array($nariai)){
$usr=$row['username'];
$lvl=$row['level'];
echo"<small>$nr.<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a>&nbsp;[$lvl]</small>";
if(strtolower($user[username])==strtolower($ally[vadas])){
echo"<small>&nbsp;<a href=\"index.php?id=$id&amp;action=snar&amp;idz=$idzz&amp;name=$usr\">(X)</a></small>";}
echo"<br/>";
$nr++;
}
$apsl=ceil($tnar/10);
if(($tnar>10) and ($psl<$apsl)){
$ts=$psl+1;
echo"<small><anchor>&gt;&gt;&gt;<go method=\"post\" href=\"index.php?id=$id&amp;action=ally&amp;idz=$idzz\"><postfield name=\"psl\" value=\"$ts\"/></go></anchor></small><br/>";}

if($psl>1){
$as=$psl-1;
echo"<small><anchor>&lt;&lt;&lt;<go method=\"post\" href=\"index.php?id=$id&amp;action=ally&amp;idz=$idzz\"><postfield name=\"psl\" value=\"$as\"/></go></anchor></small><br/>";}}
echo"</p><p align=\"center\">$line<br/>";
if($user[ally]=="$idzz"){
echo"<small><a href=\"index.php?id=$id&amp;action=allymenu&amp;idz=$idzz\">Alijanso meniu</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($action=="snar"){
$name=$_GET['name'];
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
if($names[ally]!=="$idzz"){
echo"<small>&#353;is &#382;aid&#279;jas nepriklauso &#353;iam alijansui</small>";}
else {
echo"<small>Ar tikrai norite pa&#353;alinti $name i&#353; alijanso?</small><br/><small><a href=\"index.php?id=$id&amp;action=snar2&amp;idz=$idzz&amp;name=$name\">TAIP!</a></small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="snar2"){
$name=$_GET['name'];
$names=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if($names[ally]!=="$idzz"){
echo"<small>&#353;is &#382;aid&#279;jas nepriklauso &#353;iam alijansui</small>";}
elseif(strtolower($user[username])!==strtolower($ally[vadas])){
echo"<small>Tau cia negalima</small>";}
else {
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$user[ally]','$dti','$name pa&#353;alintas i&#353; alijanso')");
mysql_query("UPDATE users SET ally='0' where username='$name'");
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
$lwl=0;
$poi=mysql_query("SELECT level FROM users where ally='$idzz'");
while($row=mysql_fetch_array($poi)){
$lvl=$row['level'];
$lwl=$lwl+$lvl;
}
$lwl=round($lwl/$tnar);
$alij=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz'"));
$topa=$lwl+$alij[taskai];

mysql_query("UPDATE ally SET vidurkis='$lwl',top='$topa' where id='$idzz'");





echo"<small>$name pa&#353;alintas i&#353; alijanso</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


if($action=="allymenu"){
if($user[ally]!=="$idzz"){
echo"<small>Tau cia negalima</small>";}
else
{
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if(strtolower($user[username])==strtolower($ally[vadas])){
echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=logo\">Keisti logotipa</a></small><br/>";
if($ally[pavk]=="0"){
echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=name\">Keisti pavadinima</a></small><br/>";}}
echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=allytopic\">Keisti alijanso topika</a></small><br/>";
$dat=mysql_fetch_array(mysql_query("SELECT data FROM anews where id='$idzz' order by data desc LIMIT 1"));

echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=allynew\">Alijanso naujienos[$dat[data]]</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=saally&amp;idz=$idzz\">I&#353;stoti i&#353; alijanso</a></small><br/>";}}
if($action=="saally"){
echo"<small>Ar tikrai norite palikti alijansa?</small><br/>";
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if(strtolower($user[username])==strtolower($ally[vadas])){
echo"<small>Kadangi esate alijanso &#303;kur&#279;jas turite pasirinkti kas u&#382;ims vado viet&#261;</small><br/>";
echo"<input type=\"text\" name=\"newwad\"/><br/>";}

echo"<small><anchor>Taip<go method=\"post\" href=\"index.php?id=$id&amp;action=saally2&amp;idz=$idzz\"><postfield name=\"newwad\" value=\"$(newwad)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="saally2"){
$newwad=$_POST['newwad'];
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
$wad=mysql_fetch_array(mysql_query("SELECT * FROM users where ally='$idzz' and username='$newwad' LIMIT 1"));

if((strtolower($user[username])==strtolower($ally[vadas])) and (!$newwad)){
echo"<small>Nenurodytas naujasis vadas</small><br/>";}
elseif((strtolower($user[username])==strtolower($ally[vadas])) and (!$wad[username])){
echo"<small>Negalite padaryti vadu &#382;aid&#279;jo nepriklausan&#269;io &#353;iam alijansui.</small><br/>";}
else {
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$user[ally]','$dti','$user[username] pasi&#353;alino i&#353; alijanso')");
if(strtolower($user[username])==strtolower($ally[vadas])){
mysql_query("UPDATE ally SET vadas='$newwad' where id='$idzz'");

mysql_query("insert into anews (id,data,text) values ('$user[ally]','$dti','$newwad tapo alijanso vadu')");


}

mysql_query("UPDATE users SET ally='0' where username='$user[username]'");
$nar=mysql_query("SELECT COUNT(username) AS num FROM users where ally='$idzz'");
$tnar=($nar) ? mysql_result($nar, 0, 'num') : 0;
$lwl=0;
$poi=mysql_query("SELECT level FROM users where ally='$idzz'");
while($row=mysql_fetch_array($poi)){
$lvl=$row['level'];
$lwl=$lwl+$lvl;
}
$lwl=round($lwl/$tnar);
$alij=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz'"));
$topa=$lwl+$alij[taskai];

mysql_query("UPDATE ally SET vidurkis='$lwl',top='$topa' where id='$idzz'");




echo"<small>I&#353;stojote</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="allytopic"){

echo"<input type=\"text\" name=\"topic\"/><br/>
<small>Rodyti:</small><br/><select name=\"topic2\">
<option value=\"all\">Visiems</option>
<option value=\"nall\">Tik alijanso nariams</option></select><br/>
<small>
<anchor>Keisti<go method=\"post\" href=\"index.php?id=$id&amp;action=allytopic2&amp;idz=$idzz\">
<postfield name=\"topic\" value=\"$(topic)\"/>
<postfield name=\"topic2\" value=\"$(topic2)\"/>
</go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="allytopic2"){
if($user[ally]!=="$idzz"){
echo"<small>Tau cia negalima</small>";}
else {
$top=$_POST['topic'];
$top2=$_POST['topic2'];
if($top2=="all"){
$al=2;}
if($top2=="nall"){
$al=1;}
$topic="$top [$user[username]]";
mysql_query("UPDATE ally SET topic='$topic',topic2='$al' where id='$idzz'");
echo"<small>Topic pakeistas</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="name"){
echo"<small>Pavadinima keisti galima tik karta tad bukit atydus</small><br/>";
echo"<input type=\"text\" name=\"name\"/><br/><small>
<anchor>Keisti<go method=\"post\" href=\"index.php?id=$id&amp;action=name2&amp;idz=$idzz\">
<postfield name=\"name\" value=\"$(name)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="name2"){
$ally=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$idzz' LIMIT 1"));
if(strtolower($ally[vadas])!==strtolower($user[username])){
echo"<small>Tau cia negalima</small>";}
elseif($ally[pavk]=="1"){
echo"<small>Pavadinimo keisti negalima</small>";}
else {
$name=$_POST['name'];
mysql_query("UPDATE ally SET pavadinimas='$name',pavk='1' where id='$idzz'");
echo"<small>Pavadinimas pakeistas</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="allynew"){
if($user[ally]!=="$idzz"){
echo"<small>Tau cia negalima</small><br/>";} else {
$new=mysql_query("SELECT COUNT(data) AS num FROM anews where id='$idzz'");
$tnew=($new) ? mysql_result($new, 0, 'num') : 0;
if($tnew=="0"){
echo"<small>Naujien&#371; n&#279;ra</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){
$psl=1;}
$nuo=10*$psl-10;
$iki=10*$psl;
$nr=$nuo+1;
$nariai=mysql_query("SELECT data,idz FROM anews where id='$idzz' order by data desc LIMIT $nuo,$iki");
while($row=mysql_fetch_array($nariai)){
$data=$row['data'];
$nid=$row['idz'];
echo"<small><a href=\"index.php?id=$id&amp;idz=$idzz&amp;action=readnew&amp;nid=$nid\">$data</a></small><br/>";}
$apsl=ceil($tnew/10);
if(($tnew>10) and ($psl<$apsl)){
$ts=$psl+1;
echo"<small><anchor>&gt;&gt;&gt;<go method=\"post\" href=\"index.php?id=$id&amp;action=allynew&amp;idz=$idzz\"><postfield name=\"psl\" value=\"$ts\"/></go></anchor></small><br/>";}

if($psl>1){
$as=$psl-1;
echo"<small><anchor>&lt;&lt;&lt;<go method=\"post\" href=\"index.php?id=$id&amp;action=allynew&amp;idz=$idzz\"><postfield name=\"psl\" value=\"$as\"/></go></anchor></small><br/>";}}}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="readnew"){
if($user[ally]!=="$idzz"){
echo"<small>Tau cia negalima</small>";}
else {
$nid=$_GET['nid'];
$new=mysql_fetch_array(mysql_query("SELECT text FROM anews where id='$idzz' and idz='$nid' LIMIT 1"));
if(!$new[text]){
echo"<small>Tokia naujiena neegzistuoja</small>";}
else {
echo"<small>$new[text]</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

?>