<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
header('Pragma: no-cache');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.2//EN\"". " \"http://www.wapforum.org/DTD/wml12.dtd\">";
include_once("ip.php");
include_once("core.php");

$id = addslashes(htmlspecialchars($_GET['id'])); if (!$id) { $id = ""; }
include("mukaka.php");

include_once("check.php");

echo "<wml><card title=\"Chat\"><p>";

$place="gb";
include_once("online.php");

if(strtolower($user[username])=="frystailasjmjmjmj"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="vejus"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="smoukis"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="adzibadzi"){
echo"tau cia negalima</p></card></wml>";exit;}

if(strtolower($user[username])=="dzimka"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="knopa2"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="j"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="dedemitia"){
echo"tau cia negalima</p></card></wml>";exit;}
if(strtolower($user[username])=="bear"){
echo"tau cia negalima</p></card></wml>";exit;}
if ($user[ban] > time()) {
   echo"<small>Jums u&#382;d&#279;tas banas!</small></p></card></wml>";
   mysql_close($db);
   exit;
}

$ct=$_GET['ct'];


if($ct==""){

$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*12-12;

$text=$_POST['text'];
if($text){
$text=addslashes($text);
$text=str_replace("'","",$text);
$text=str_replace("","",$text);
$text=str_replace("}","",$text);
$text=str_replace("{","",$text);
$text=str_replace("href","",$text);
$text=str_replace("&","",$text);


$text=htmlspecialchars($text);
$zinut=mysql_fetch_array(mysql_query("SELECT * FROM gchat where text='$text'"));
if($zinut[id]){
echo"<small>Tokia &#382;inut&#279; jau egzistuoja</small><br/>";}
elseif(($user[member]!=="1") and ($user[level]<30)){
echo"<small>Galima tik tikriems nariams arba tiems kuri&#371; lygis didesnis nei 29</small><br/>";}

else{

mysql_query("insert into gchat (nick,text) values ('$user[username]','$text')");
}
}
echo"<small><a href=\"index.php?id=$id\">".htmlspecialchars("< ")."&#382;aidimas</a></small><br/>";
echo"<small><b><a href=\"gb.php?id=$id&amp;ct=write\">".htmlspecialchars("^ ")."Ra&#353;yti</a></b></small><br/>";
echo"<small><b><a href=\"gb.php?id=$id&amp;time=".time()."\">Atnaujinti</a></b></small><br/>";
$tmn=time();
echo"<small><b><a href=\"gb.php?id=$id&amp;ct=onl\">Chate&nbsp;[".mysql_num_rows(mysql_query("select * from users where place='gb' and time>$tmn"))."]</a></b></small><br/>--<br/>";

$zin=mysql_query("SELECT * FROM gchat order by id desc LIMIT $nuo,12");
while($row=mysql_fetch_array($zin)){
if(eregi("vivis","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
if(eregi("horro","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
if(eregi("mon.lt","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
$zinute=$row[text];
include("include/text.php");

echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$row[nick]\">$row[nick]</a>:$zinute</small>";
if($user[username]=="@Makatas"){
echo"<small><a href=\"gb.php?id=$id&amp;ct=del&amp;idz=$row[id]\">(X)</a></small>";}
echo"<br/>";
}
$tot=mysql_query("SELECT COUNT(id) AS num FROM gchat");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;


$vpsl=ceil($total/12);
if(($total>12) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>Toliau<go method=\"post\" href=\"gb.php?id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>Atgal<go method=\"post\" href=\"gb.php?id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}


echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($ct=="write"){
echo"<input type=\"text\" name=\"text\" maxlength=\"255\" value=\"\"/><br/>";
echo"<small><anchor>Ra&#353;yti<go method=\"post\" href=\"gb.php?id=$id\"><postfield name=\"text\" value=\"$(text)\"/></go></anchor></small>";}

if($ct=="onl"){
$tmn=time();
$cha=mysql_query("select * from users where place='gb' and time>$tmn");
echo"</p><p>";
while($chat=mysql_fetch_array($cha)){
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$chat[username]\">$chat[username]</a></small><br/>";}
echo"</p><p align=\"center\">";
echo"$line<br/><small><a href=\"gb.php?id=$id\">Chatas</a></small>";}

if($ct=="del"){
$idz=$_GET['idz'];
mysql_query("delete from gchat where id='$idz'");
echo"ok";}
echo"</p></card></wml>";mysql_close($db);exit;

?>

