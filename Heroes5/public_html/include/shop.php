<?php

if($action=="shop1"){
if($user[level]<10){
echo"ieiti galima nuo 10lygio";}
elseif($user[shop]>time()){
$time=time();
$left2=$user[shop]-$time;
echo"<small>Per para galima parduoti tik 1karta!</small><br/>";

$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;
        echo"<small>Gal&#279;site parduoti u&#382;:</small><br/>
        <small><b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";}
else {
echo"<small>Parduodami armija cia gausite puse jos vert&#279;s</small><br/>";
$usr=strtolower($user[username]);
echo"<select name=\"units\">";
$det=mysql_query("SELECT unit,quantity FROM army where username='$usr'");
while($row=mysql_fetch_array($det)){
$kie=$row['quantity'];
$uni=$row['unit'];
$uni2=$uni;
include("names/units.php");
if (((substr($kie, strlen($kie) - 2, 2) >= 10) and (substr($kie, strlen($kie) - 2, 2) <= 20)) or ((substr($kie, strlen($kie) - 1, 1) == "0"))) {
      $uni = $unit_name_p3[$uni];
   }
   elseif (substr($kie, strlen($kie) - 1, 1) == "1") {
      $uni = $unit_name_s1[$uni];
   }
   else {
      $uni = $unit_name_p1[$uni];
   }
echo"<option value=\"$uni2\"> $kie $uni</option>";}
echo"</select><br/><small><b>Kiek:</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><anchor>Parduoti<go method=\"post\" href=\"index.php?action=shop2&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}}
if($action=="shop2"){
$units=$_POST['units'];
$quan=$_POST['quan'];
$usr=strtolower($user[username]);
if((empty($units)) or (empty($quan))){
echo"<small>Palikai tu&#353;cia laukeli</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$units'"));
if(!$unitas[unit]){
echo"<small>Tokios kariu ru&#353;ies neturite</small>";}
elseif($quan>$unitas[quantity]){
echo"<small>Neturite tiek kariu</small>";}
elseif($unitas[magic]=="hipnoze"){
echo"<small>Negalima parduoti uzhipnotizuot&#371; kari&#371;</small>";}
elseif($unitas[unit]=="ghost"){
echo"<small>Negalima parduoti Vaiduokli&#371;</small>";}
elseif($unitas[unit]=="skeleton"){
echo"<small>Negalima parduoti Skeleton&#371;</small>";}
elseif($unitas[unit]=="skeleton_warrior"){
echo"<small>Negalima parduoti Skeleton&#371; kari&#371;</small>";}
elseif($unitas[magic]=="reanim"){
echo"<small>Negalima parduoti reanimuot&#371; kari&#371;</small>";}
else {
$ex=($unitas[expierence]/$unitas[quantity])*$quan;
mysql_query("UPDATE army SET quantity=quantity-$quan where unit='$units' and username='$usr'");
include("units/$units.php");
if($unit_info[cost2]==""){
$gld=$unit_info[cost]/2;
$gold=$gld*$quan;
$sh=time()+3600*24;
mysql_query("UPDATE users SET gold=gold+$gold,shop='$sh' where username='$user[username]'");} else {
$gld=$unit_info[cost]/2;
$gold=$gld*$quan;
$other=explode("-",$unit_info[cost2]);
$oth=ceil($other[0]/2*$quan);
$sh=time()+3600*24;
mysql_query("UPDATE users SET gold=gold+$gold,shop='$sh',$other[1]=$other[1]+$oth where username='$user[username]'");}
include("names/units.php");
if (((substr($quan, strlen($quan) - 2, 2) >= 10) and (substr($quan, strlen($quan) - 2, 2) <= 20)) or ((substr($quan, strlen($quan) - 1, 1) == "0"))) {
      $units = $unit_name_p3[$units];
   }
   elseif (substr($quan, strlen($quan) - 1, 1) == "1") {
      $units = $unit_name_s1[$units];
   }
   else {
      $units = $unit_name_p1[$units];
   }
echo"<small>Pardav&#279;te $quan $units u&#382; $gold aukso";
if($oth){
include_once("core/resources.php");
      $ress = strtolower(resource($other[1], $oth));
      echo" ir $oth $ress";}
echo"</small>";}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
