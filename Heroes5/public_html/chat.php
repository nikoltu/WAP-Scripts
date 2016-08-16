<?php

$sus=mysql_fetch_array(mysql_query("SELECT * FROM robo LIMIT 1"));
if((date("H")>="22") and (date("H")<"23")){
if(!$sus[sustime]){
$tmn2=time()+600;
$tmn=time()+1800;
mysql_query("UPDATE users SET ntm='$tmn2' where ns='1'");
mysql_query("insert into robo (sus,sustime,nrtm) values ('0','$tmn','$tmn2')");
$user=mysql_fetch_array(mysql_query("SELECT * FROM users where session='$id' LIMIT 1"));
$sus=mysql_fetch_array(mysql_query("SELECT * FROM robo LIMIT 1"));
}}
$delns=mysql_fetch_array(mysql_query("SELECT * FROM time LIMIT 1"));

if((!$sus[sustime]) or ($delns[ns]=="1")){
echo"Prad&#382;ia 22:00 val.</p></card></wml>";exit;mysql_close($db);
}

$place="nonst";
include_once("online.php");


if(($user[ns]!=="1") and ($user[username]!=="@Makatas")){
echo"Tu nedalyvauji</p></card></wml>";exit;mysql_close($db);
}

$dalyvia=mysql_num_rows(mysql_query("SELECT * FROM users where ns='1'"));
if($dalyvia=="1"){
if(date("H")=="22"){
mysql_query("DELETE FROM robo");
mysql_query("DELETE FROM chat");
mysql_query("UPDATE time SET ns='1'");
echo"<small>NON-stop neivyko!</small></p></card></wml>";exit;mysql_close($db);}

$winner=mysql_fetch_array(mysql_query("SELECT * FROM users where ns='1' LIMIT 1"));
mysql_query("UPDATE users SET kred=kred+3,ns='0' where username='$winner[username]'");
mysql_query("DELETE FROM robo");
mysql_query("DELETE FROM chat");
echo"<small>Laim&#279;jai NON-stop!</small></p></card></wml>";exit;mysql_close($db);}

if(($user[ntm]<time()) and ($user[username]!=="@Makatas")){
mysql_query("UPDATE users SET ns='0' where username='$user[username]'");
mysql_query("insert into chat (nick,text) values ('!@SYS','$user[username] i&#353;krito nes nepara&#353;&#279; 5 minutes')");

echo"Tu nedalyvauji nes nepara&#353;ei 5min.</p></card></wml>";exit;mysql_close($db);}


$ct=$_GET['ct'];
$place="kaln";
include_once("online.php");


if($ct==""){

$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*12-12;
if($sus[nrtm]<time()){
$stm=time()+1200;
mysql_query("update robo set nrtm='$stm'");

$ti=mysql_query("SELECT COUNT(username) AS num FROM users where ns='1'");
$toti=($ti) ? mysql_result($ti, 0, 'num') : 0;

$isks=mysql_query("SELECT * FROM users where ns='1'");
while($rw=mysql_fetch_array($isks)){
$iskr="$iskr,$rw[username]";}



mysql_query("insert into chat (nick,text) values ('!@SYS','Dalyvi&#371; sara&#353;as<br/>$iskr')");



}

$text=$_POST['text'];
if($text){
if($sus[sus]=="1"){
$tx=strtolower($text);

if(eregi("esu","$tx")){
mysql_query("UPDATE users SET sus='1' where username='$user[username]'");}
}
$tma=time()+300;
mysql_query("UPDATE users SET ntm='$tma' where username='$user[username]'");
mysql_query("insert into chat (nick,text) values ('$user[username]','$text')");


}

if($sus[sustime]<time()){
if($sus[sus]=="0"){

mysql_query("update users set sus='0'");
$stm=time()+420;

mysql_query("update robo set sus='1',sustime='$stm'");

mysql_query("insert into chat (nick,text) values ('!@SYS','SUSIRA&#352;YMAS!!!')");

}
if($sus[sus]=="1"){
$stm=time()+1800;
mysql_query("update robo set sus='0',sustime='$stm'");

$ti=mysql_query("SELECT COUNT(username) AS num FROM users where sus='0' and ns='1'");
$toti=($ti) ? mysql_result($ti, 0, 'num') : 0;

$isks=mysql_query("SELECT * FROM users where sus='0' and ns='1'");
while($rw=mysql_fetch_array($isks)){
$iskr="$iskr,$rw[username]";}



mysql_query("insert into chat (nick,text) values ('!@SYS','SUSIRA&#352;YMAS baigtas!!!<br/>I&#353;krito: $iskr')");



mysql_query("update users set ns='0' where sus='0'");

}}
$dalyvia=mysql_num_rows(mysql_query("SELECT * FROM users where ns='1'"));
echo"<small>Dalyviu:$dalyvia</small><br/>";


echo"</p><p><small><a href=\"index.php?id=$id\">&#382;aidimas</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=chat&amp;ct=write\">Ra&#353;yti</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=chat&amp;time=".time()."\">Atnaujinti</a></small><br/>--<br/>";

$zin=mysql_query("SELECT * FROM chat order by id desc LIMIT $nuo,12");
while($row=mysql_fetch_array($zin)){

echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$row[nick]\">$row[nick]</a>:$row[text]</small><br/>";
}
echo"</p><p align=\"center\">";

$tot=mysql_query("SELECT COUNT(id) AS num FROM chat");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;


$vpsl=ceil($total/12);
if(($total>12) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>Toliau<go method=\"post\" href=\"index.php?action=chat&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>Atgal<go method=\"post\" href=\"index.php?action=chat&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}


echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($ct=="write"){
echo"<input type=\"text\" name=\"text\" maxlength=\"255\"/><br/>";
echo"<small><anchor>Ra&#353;yti<go method=\"post\" href=\"index.php?id=$id&amp;action=chat\"><postfield name=\"text\" value=\"$(text)\"/></go></anchor></small>";}


?>