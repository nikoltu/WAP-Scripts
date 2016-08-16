<?php
if($action=="turn"){
$tutime=mysql_fetch_array(mysql_query("SELECT iki FROM turnyras LIMIT 1"));
if($tutime[iki]<time()){
$laim=mysql_fetch_array(mysql_query("SELECT * FROM turnyras order by wins desc LIMIT 1"));
$potion=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$laim[user]' and name='magic_potion'"));
if(!$potion[name]){
mysql_query("insert into artifacts (user,name,kiek,type) values ('$laim[user]','magic_potion','5','potion')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+5 where name='magic_potion' and user='$laim[user]'");}
mysql_query("UPDATE users SET gold=gold+50000,expierence=expierence+50000,attack=attack+1,defense=defense+1,power=power+1,knowledge=knowledge+1,gem=gem+10,sulfur=sulfur+10,crystal=crystal+10,mercury=mercury+10 where username='$laim[user]'");
mysql_query("UPDATE turnyras SET tes='$laim[user]'");
mysql_query("DELETE FROM turnyras");
$tmi=time()+((3600*4)*20);
mysql_query("insert into turnyras (user,wins,iki) values ('@Makatas','0','$tmi')");}
$left=$tutime[iki]-time();
$h = floor($left / 3600);
        $m = floor(($left- ($h * 3600)) / 60);
        $s = $left - $h * 3600 - $m * 60;
echo"<small>Iki naujo turnyro prad&#382;ios liko:</small><br/><small><b>$h</b> val. <b>$m</b> min. <b>$s</b> sec.</small><br/>";

$dal=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$user[username]'"));
if(!$dal[user]){
echo"<small><b>Jus turnyre nedalyvaujate!</b><br/><a href=\"index.php?action=turn3&amp;id=$id\">Dalyvauti!</a></small><br/>";}
else {
echo"<small>Turite pergaliu: <b>$dal[wins]</b></small><br/>";}
echo"<small><a href=\"index.php?action=turn1&amp;id=$id\">Prizai</a></small>
<br/>
<small><a href=\"index.php?action=turn2&amp;id=$id\">Informacija</a></small>
<br/>$line<br/>";
echo"</p><p>";
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*15-15;
$iki=$psl*15;
$nuo2=$psl*15-15+1;
$tot=mysql_query("SELECT COUNT(user) AS num FROM turnyras");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Dalyviu nera</small><br/>";} else {
$dal1=mysql_query("SELECT * FROM turnyras order by wins desc LIMIT $nuo,$iki");
while($dal2=mysql_fetch_array($dal1)){
$usr=$dal2['user'];
$win=$dal2['wins'];
echo"<small><a href=\"index.php?action=nick_info&amp;id=$id&amp;nickas=$usr\">$nuo2.$usr($win)</a></small><br/>";
$nuo2++;
}}
echo"</p><p align=\"center\">";
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="turn3"){
$que=mysql_fetch_array(mysql_query("SELECT * FROM turnyras where user='$user[username]'"));
if($user[level]<20){
echo"<small>Dalyvauti turnyre galima tik nuo 20lygio</small><br/>";}
elseif($que[user]){
echo"<small>Jus jau dalyvaujate</small><br/>";}
else {
mysql_query("insert into turnyras (user,wins) values ('$user[username]','0')");
echo"<small>S&#279;kmingai u&#382;siregistravote turnyre</small><br/>";}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="turn1"){
echo"<small>Turnyro nugal&#279;tojas gauna <b>50000</b> aukso, <b>50000</b> patirties, <b>po 10</b> visu resursu <b>5</b> Magi&#353;kus g&#279;rimus ir <b>po 1</b> atakos,gynybos,i&#353;minties,galios!</small><br/>$line<br/>
<small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="turn2"){
echo"<small>Turnyras i&#353; naujo prasideda kas 20 &#382;aidimo dienu</small><br/>$line<br/><small>Turnyra laimi &#382;aid&#279;jas jo pabaigoje turintis daugiausiai pergaliu</small><br/>$line<br/><small>Pergal&#279; bus u&#382;skaityta tik jeigu ir jus ir prie&#353;ininkas bus turnyro dalyviai</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


?>