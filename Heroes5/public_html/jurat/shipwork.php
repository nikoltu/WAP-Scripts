<?php
$gaga=$_GET['gaga'];
$ia=$_GET['ia'];
$gag=$_GET['up'];
if($gaga==""){
if(($upg[crystal]>$lav[upgcrystal]) and ($upg[crystal]-$lav[upgcrystal]=="1")){
include_once("upgrade/crystal.php");
$lev=$upgr[$upg[crystal]];
$lev2=$upgc[$upg[crystal]];

echo"<small>Kitame lygije:<b>$lev</b>.</small><br/><small>Kaina:$lev2.</small><br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ia=$ia&amp;gaga=crystal&amp;up=up\">Tobulinti krystal&#371; skyri&#371;</a></small><br/>$line<br/>";}
if(($upg[gem]>$lav[upggem]) and ($upg[gem]-$lav[upggem]=="1")){
include_once("upgrade/gem.php");
$lev=$upgr[$upg[gem]];
$lev2=$upgc[$upg[gem]];

echo"<small>Kitame lygije:<b>$lev</b>.</small><br/><small>Kaina:$lev2.</small><br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ia=$ia&amp;gaga=gem&amp;up=up\">Tobulinti gems&#371; skyri&#371;</a></small><br/>$line<br/>";}

if(($upg[mercury]>$lav[upgmercury]) and ($upg[mercury]-$lav[upgmercury]=="1")){
include_once("upgrade/mercury.php");
$lev=$upgr[$upg[mercury]];
$lev2=$upgc[$upg[mercury]];

echo"<small>Kitame lygije:<b>$lev</b>.</small><br/><small>Kaina:$lev2.</small><br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ia=$ia&amp;gaga=mercury&amp;up=up\">Tobulinti gems&#371; skyri&#371;</a></small><br/>$line<br/>";}



}

if($gag=="up"){
$grad="upg$gaga";
include_once("upgrade/$gaga.php");
$yes=$upg[$gaga]-$lav[$grad];
if($yes=="1"){$yes="taip";}
if($yes!=="taip"){
echo"<small>Taip tobulinti negalima</small>";}
else{
$kai=explode("|",$cst[$upg[$gaga]]);
for($i=0; $i<count($kai); $i++){
$kain=explode("-",$kai[$i]);
if($user[$kain[1]]<$kain[0]){
include_once("core/resources.php");
if($kain[1]=="gold"){
$res="aukso";}
$res=resource($kain[1], 10);

echo"<small>Nepakanka $res</small>";}
else{
mysql_query("UPDATE users SET $kain[1]=$kain[1]-$kain[0] where username='$user[username]'");

mysql_query("UPDATE laivynas SET $grad='$upg[$gaga]' where user='$user[username]'");

}}
echo"<small>Patobulinta</small>";}

}

?>