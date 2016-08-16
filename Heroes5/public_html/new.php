<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
echo"<wml><card id=\"Heroes\" title=\"Heroes\"><p align=\"center\">";
include_once("core.php");
include_once("mukaka.php");
$id=$_GET['id'];
if($id=="gnew"){
$nws=mysql_query("SELECT COUNT(id) AS num FROM news");
$ntot=($nws) ? mysql_result($nws, 0, 'num') : 0;
echo"<small><b>HEROES Naujienos</b><br/>";
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*10-10;
$iki=$psl*10;
if($ntot<1){
echo"Naujienu nera";} else {
$news=mysql_query("SELECT title,id FROM news order by id desc LIMIT $nuo,$iki");
while($rowz=mysql_fetch_array($news)){
$tit=$rowz['title'];
$idz=$rowz['id'];
echo"<a href=\"new.php?id=snew&amp;idz=$idz\">$tit</a><br/>";}
echo"<br/>";
if($ntot>10){
$tol=$psl+1;
echo"<anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?Id=gnew\"><postfield name=\"psl\" value=\"$tol\"/></go></anchor><br/>";}
if($psl>1){
$atg=$psl-1;
echo"<anchor>[-]Atgal[-]<go method=\"post\" href=\"index.php?id=gnew\"><postfield name=\"psl\" value=\"$atg\"/></go></anchor><br/>";}}
echo"$line<br/><a href=\"index.php\">$home</a></small>";}
if($id=="snew"){
$idz=$_GET['idz'];
$qua=mysql_query("SELECT date,zin FROM news where id='$idz'");
while($rows=mysql_fetch_array($qua)){
$dti=$rows['date'];
$zin=$rows['zin'];}
echo"<small>$zin<br/>Naujiena ideta <b>$dti</b><br/>$line<br/><a href=\"index.php\">$home</a></small>";}
echo"</p></card></wml>";
exit;
mysql_close($db);
?>