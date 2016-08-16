<?php

$pilis=$_GET['pilis'];
$door=$_GET['door'];
if(!file_exists("castle/$pilis.php")){
echo"<small>Tokios pilies n&#279;ra arba ji dar nesukurta</small></p></card></wml>";exit;mysql_close($db);}


if($door==""){
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));

if(!$ho[user]){
echo"<small>Pilis niekam nepriklauso</small>";}
else{
echo"<small>Pilis priklauso:<b><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$ho[user]\">$ho[user]</a></b></small>";}
echo"<br/>$line<br/>";

if(strtolower($user[username])==strtolower($ho[user])){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis&amp;door=vidus\">Eiti vidun</a></small>";
}
else{

echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis&amp;door=attack\">Pulti</a></small>";

}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($door=="vidus"){
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
echo"<small>Pilis</small><br/>$line<br/>";
echo"<small><a href=\"index.php?id=$id&amp;pilis=$pilis&amp;action=castle&amp;door=army\">Palikti karius saugoti pili</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=build&amp;pilis=$pilis\">Statyti pastatus</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=houses&amp;pilis=$pilis\">Pastatyti pastatai</a></small>";

echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($door=="army"){
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
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
echo"</select><br/><small><b>Kiek:</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small>Pasirinkite kur palikti:</small><br/><select name=\"kur\">
<option value=\"vartai\">U&#382; vart&#371;</option>
<option value=\"castle\">Pilije</option>
</select><br/><small><anchor>Palikti pilije<go method=\"post\" href=\"index.php?action=castle&amp;pilis=$pilis&amp;door=army2&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"kur\" value=\"$(kur)\"/><postfield name=\"quan\" value=\"$(quan)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($door=="army2"){
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
$units=$_POST['units'];
$kur=$_POST['kur'];
$quan=$_POST['quan'];
$usr=strtolower($user[username]);
if((empty($kur)) or (empty($units)) or (empty($quan))){
echo"<small>Palikai tu&#353;cia laukeli</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$units'"));
if(!$unitas[unit]){
echo"<small>Tokios kariu ru&#353;ies neturite</small>";}
elseif($quan>$unitas[quantity]){
echo"<small>Neturite tiek kariu</small>";}
elseif($unitas[magic]=="hipnoze"){
echo"<small>Negalima palikti uzhipnotizuot&#371; kari&#371;</small>";}
elseif($unitas[magic]=="reanim"){
echo"<small>Negalima palikti reanimuot&#371; kari&#371;</small>";}
else {
$kik=mysql_num_rows(mysql_query("SELECT * FROM map where castle='$pilis' and location='$kur'"));
if(($kur=="tower1") and ($kik>0) or ($kur=="tower2") and ($kik>0) or ($kur=="vartai") and ($kik>5) or ($kur=="castle") and ($kik>5)){
echo"<small>Daugiau ten siusti negalima</small>";}
else
{
$ex=($unitas[expierence]/$unitas[quantity])*$quan;
mysql_query("UPDATE army SET quantity=quantity-$quan,expierence=expierence-$ex where unit='$units' and username='$usr'");

mysql_query("insert into map (location,unit,expierence,resource,q_unit,q_res,artifact,castle) values ('$kur','$units','$ex','','$quan','0','','$pilis')");
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
echo"<small>Pilije palikote $quan $units</small>";}}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


if($door=="attack"){
$tok=mysql_num_rows(mysql_query("SELECT * FROM map where castle='$pilis' and location='vartai'"));
$tok2=mysql_num_rows(mysql_query("SELECT * FROM map where castle='$pilis' and location='castle'"));
$tok3=$tok+$tok2;
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if((strtolower($ho[user])!==strtolower($user[username])) and ($tok3<1)){
if(!$ho[user]){
mysql_query("insert into castles (user,castle) values ('$user[username]','$pilis')");}
else
{
mysql_query("UPDATE castles SET user='$user[username]' where castle='$pilis'");}
$bui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='siena'"));
if($bui[lvl]){
mysql_query("update cbuildings set lvl='600' where castle='$pilis' and build='siena'");
}
$tow1=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower1'"));
if($tow1[lvl]){
mysql_query("update cbuildings set lvl='400' where castle='$pilis' and build='tower1'");
}
$tow3=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower3'"));
if($tow3[lvl]){
mysql_query("update cbuildings set lvl='400' where castle='$pilis' and build='tower3'");
}
$tow2=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower2'"));
if($tow2[lvl]){
mysql_query("update cbuildings set lvl='400' where castle='$pilis' and build='tower2'");
}


echo"<small>Okupavote pili!</small>";
echo"<br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=castle&amp;door=vidus&amp;pilis=$pilis\">I pili</a></small></p></card></wml>";exit;mysql_close($db);}
if(($door=="attack") or ($door=="atk")){
$to=mysql_fetch_array(mysql_query("SELECT * FROM map where location='tower1' and castle='$pilis'"));
$tohp=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where build='tower1' and castle='$pilis'"));
if(($to[unit]) and ($tohp[lvl]>0)){
include_once("include/nt3.php");}
$to2=mysql_fetch_array(mysql_query("SELECT * FROM map where location='tower2' and castle='$pilis'"));
$tohp2=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where build='tower2' and castle='$pilis'"));
if(($to2[unit]) and ($tohp2[lvl]>0)){
include_once("include/nt4.php");}
$to3=mysql_fetch_array(mysql_query("SELECT * FROM map where location='tower3' and castle='$pilis'"));
$tohp3=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where build='tower3' and castle='$pilis'"));
if(($to3[unit]) and ($tohp3[lvl]>0)){
include_once("include/nt5.php");}
}


$war=mysql_fetch_array(mysql_query("SELECT hp FROM war where user='$user[username]' and machine='catapulta'"));
$sn=$_GET['sn'];
if($sn=="sn"){
if(!$war[hp]){
echo"<small>Neturite katapultos</small><br/>";}
else{
$sans=mt_rand(1, 100);
if($sans>70){
echo"<small>Nepataik&#279;te</small><br/>";}
if($sans<=70){
$dmg=mt_rand(1, 200);
mysql_query("UPDATE cbuildings SET lvl=lvl-$dmg where castle='$pilis' and build='siena'");
echo"<small>Padar&#279;te $dmg &#382;alos sienai</small><br/>";
$bui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='siena'"));
if($bui[lvl]-$dmg<0){
echo"<small>Nugriovet&#279; siena</small><br/>";}
}}}
if(($sn=="tower1") or ($sn=="tower2") or ($sn=="tower3")){
if(!$war[hp]){
echo"<small>Neturite katapultos</small><br/>";}
else{
$sans=mt_rand(1, 100);
if($sans>70){
echo"<small>Nepataik&#279;te</small><br/>";}
if($sans<=70){
$dmg=mt_rand(1, 200);
mysql_query("UPDATE cbuildings SET lvl=lvl-$dmg where castle='$pilis' and build='$sn'");
echo"<small>Padar&#279;te $dmg &#382;alos sienai</small><br/>";
$tw=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='$sn'"));
if($tw[lvl]-$dmg<0){
echo"<small>Nugriovet&#279; bok&#353;t&#261;</small><br/>";}
}}}

echo"<small>Kariai u&#382; vart&#371;</small><br/>";
echo"</p><p>";
   $tobj = 6;
   $queries++;
   $o = 0;
   $obj = mysql_query("SELECT * FROM map WHERE castle='$pilis' and location='vartai' ORDER by id ASC LIMIT $tobj");
   while ($objj = mysql_fetch_array($obj)) {
   include_once("names/units.php");
   include_once("core/resources.php");
      if ($objj[unit] !== "") {
         if ($objj[q_unit] == "1") {
            $unit_name = $unit_name_s2[$objj[unit]];
         }
         else {
            if (((substr($objj[q_unit], strlen($objj[q_unit]) - 2, 2) >= 10) and (substr($objj[q_unit], strlen($objj[q_unit]) - 2, 2) <= 20)) or ((substr($objj[q_unit], strlen($objj[q_unit]) - 1, 1) == "0"))) {
               $unit_name = $unit_name_p3[$objj[unit]];
            }
            elseif (substr($objj[q_unit], strlen($objj[q_unit]) - 1, 1) == "1") {
               $unit_name = $unit_name_s1[$objj[unit]];
            }
            else {
               $unit_name = $unit_name_p1[$objj[unit]];
            }
         }
         echo"<small><b>*</b>&nbsp;<anchor>$objj[q_unit] $unit_name<go method=\"post\" href=\"index.php?action=castle&amp;id=$id&amp;pilis=$pilis&amp;door=event\"><postfield name=\"event\" value=\"$objj[id]\"/><postfield name=\"jap\" value=\"$objj[location]\"/></go></anchor></small><br/>";
      }
$o++;}
if($o=="0"){
echo"<small>N&#279;ra</small>";}
echo"</p><p align=\"center\">";
$bui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='siena'"));
if(($bui[lvl]>0) and ($war[hp])){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=attack&amp;pilis=$pilis&amp;sn=sn\">Griauti siena</a></small><br/>$line<br/>";}
$tow1=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower1'"));
if(($tow1[lvl]>0) and ($war[hp])){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=attack&amp;pilis=$pilis&amp;sn=tower1\">Griauti pirma bok&#353;t&#261;</a></small><br/>$line<br/>";}
$tow2=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower2'"));
if(($tow2[lvl]>0) and ($war[hp])){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=attack&amp;pilis=$pilis&amp;sn=tower2\">Griauti antra bok&#353;t&#261;</a></small><br/>$line<br/>";}
$tow3=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='tower3'"));
if(($tow3[lvl]>0) and ($war[hp])){
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=attack&amp;pilis=$pilis&amp;sn=tower3\">Griauti trecia bok&#353;t&#261;</a></small><br/>$line<br/>";}

echo"<small>Kariai Viduje</small><br/>";
echo"</p><p>";
$tobj=6;
if($bui[lvl]<=0){
$o=0;
   $queries++;
   $obj = mysql_query("SELECT * FROM map WHERE castle='$pilis' and location='castle' ORDER by id ASC LIMIT $tobj");
   while ($objj = mysql_fetch_array($obj)) {
$o++;
   include_once("names/units.php");
               $unit_name = $unit_name_p1[$objj[unit]];
         echo"<small><b>*</b>&nbsp;<anchor>$unit_name<go method=\"post\" href=\"index.php?action=castle&amp;id=$id&amp;pilis=$pilis&amp;door=event\"><postfield name=\"event\" value=\"$objj[id]\"/><postfield name=\"jap\" value=\"$objj[location]\"/></go></anchor></small><br/>";
}      
}
if($o=="0"){
echo"<small>N&#279;ra</small>";}
echo"</p><p align=\"center\">";


echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($door=="atk"){
$apk=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='apkasai'"));
if($apk[build]){
$war=mysql_fetch_array(mysql_query("SELECT hp FROM war where user='$user[username]' and machine='catapulta'"));
if($war[hp]){

mysql_query("UPDATE war SET hp=hp-50 where user='$user[username]' and machine='catapulta'");
echo"<small>Apkasai
padar&#279; 50 &#382;alos katapultai.";
if($war[hp]-50<0){
echo"Sunaikino katapult&#261;";}
echo"</small>";}}

include_once("include/neutral_battle.php");}
if($door=="event"){
include_once("include/cevent.php");}
if($door=="build"){
echo"<small>Pasirinkite ka statysite</small><br/>$line<br/></p><p>";
$tq=0;
$past=mysql_query("select * from cbuildings where castle='$pilis' and leid='1'");
while($row=mysql_fetch_array($past)){
include_once("names/builds.php");
$bname=$build_name[$row[build]];
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=build2&amp;pilis=$pilis&amp;build=$row[build]\">$bname</a></small><br/>";
$tq++;
}


if($tq=="0"){
echo"<small>Negalite nieko statyti</small><br/>";}
echo"</p><p align=\"center\">";
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($door=="build2"){
$build=$_GET['build'];
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("builds/$pilis/$build.php")){
echo"<small>Tokio pastato n&#279;ra</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("castle/$pilis/$build.php")){
echo"<small>Tokio pastato statyti negalite</small></p></card></wml>";exit;mysql_close($db);}
include_once("castle/$pilis/$build.php");
include_once("names/builds.php");
echo"<small><b>$build_name[$build]</b></small><br/>$line<br/>";
echo"<small>Apra&#353;ymas:$hou[apr]</small><br/>";
echo"<small>Kaina:";
if($cost[gold]>0){echo"$cost[gold] aukso";}
if($cost[gem]>0){echo", gems&#371; $cost[gem]";}
if($cost[mercury]>0){echo", puod&#371; $cost[mercury]";}
if($cost[sulfur]>0){echo", sulfur&#371; $cost[sulfur]";}
if($cost[wood]>0){echo", med&#382;i&#371; $cost[wood]";}
if($cost[crystal]>0){echo", krystal&#371; $cost[crystal]";}
if($cost[stone]>0){echo", akmen&#371; $cost[stone]";}
echo"</small><br/><small><a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis&amp;door=build3&amp;build=$build\">Statyti</a></small>";
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$homet</a></small>";}
if($door=="build3"){
$build=$_GET['build'];
include_once("castle/$pilis/$build.php");
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("builds/$pilis/$build.php")){
echo"<small>Tokio pastato &#279;</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("castle/$pilis/$build.php")){
echo"<small>Tokio pastato statyti negalite</small></p></card></wml>";exit;mysql_close($db);}
if($ho[time]>time()){
$left2=$ho[time]-time();
$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;
echo"<small>Nauja pastata statyti galima tik po 4valand&#371;</small>";
        echo"<small>Gal&#279;site statyti po:</small><br/>
        <small><b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";

echo"</p></card></wml>";exit;mysql_close($db);}

if(($user[gold]<$cost[gold]) or ($user[gem]<$cost[gem]) or ($user[crystal]<$cost[crystal]) or ($user[sulfur]<$cost[sulfur]) or ($user[mercury]<$cost[mercury]) or ($user[wood]<$cost[wood]) or ($user[stone]<$cost[stone])){
echo"<small>Nepakanka resurs&#371; statyboms</small></p></card></wml>";exit;mysql_close($db);} 

mysql_query("UPDATE users SET gold=gold-$cost[gold],gem=gem-$cost[gem],sulfur=sulfur-$cost[sulfur],mercury=mercury-$cost[mercury],crystal=crystal-$cost[crystal],wood=wood-$cost[wood],stone=stone-$cost[stone] where username='$user[username]'");
include_once("builds/$pilis/$build.php");
$tmn=time()+14400;
mysql_query("UPDATE castles SET time='$tmn' where castle='$pilis'");

echo"<small>Pastatyta</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($door=="houses"){
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}

$tq=0;
echo"</p><p>";
$hou=mysql_query("SELECT * FROM cbuildings where castle='$pilis' and leid='2'");
while($row=mysql_fetch_array($hou)){
include_once("names/builds.php");
$bname=$build_name[$row[build]];
echo"<small><a href=\"index.php?id=$id&amp;action=castle&amp;door=upgrade&amp;pilis=$pilis&amp;build=$row[build]\">$bname</a></small><br/>";
$tq++;}
if($tq=="0"){
echo"<small>Pastat&#371; n&#279;ra</small><br/>";}
echo"</p><p align=\"center\">$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($door=="upgrade"){
$build=$_GET['build'];
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
$nbui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='$build'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("builds/$pilis/$build.php")){
echo"<small>Tokio pastato &#279;</small></p></card></wml>";exit;mysql_close($db);}

if(!$nbui[build]){
echo"<small>Toks pastatas nepastatytas</small></p></card></wml>";exit;mysql_close($db);}

include_once("names/builds.php");
echo"<small><b>$build_name[$build]</b></small><br/>$line<br/>";
include_once("castle/$pilis/$build.php");
echo"<small>Apra&#353;ymas:$hou[apr]</small><br/>$line<br/>";
if($nbui[type]=="army"){
$object = mysql_fetch_array(mysql_query("SELECT * FROM objects WHERE  location='$pilis' and object='$build' LIMIT 1"));
include_once("objects/$build.php");
include_once("map/recruit_army.php");}

if($nbui[upg]!==""){
include_once("castle/$pilis/$nbui[upg].php");
echo"<small>Apra&#353;ymas kitame lygije:$hou[apr]</small><br/>";
echo"<small>Kaina kitame lygije:";
if($cost[gold]>0){echo"$cost[gold] aukso";}
if($cost[gem]>0){echo", gems&#371; $cost[gem]";}
if($cost[mercury]>0){echo", puod&#371; $cost[mercury]";}
if($cost[sulfur]>0){echo", sulfur&#371; $cost[sulfur]";}
if($cost[wood]>0){echo", med&#382;i&#371; $cost[wood]";}
if($cost[crystal]>0){echo", krystal&#371; $cost[crystal]";}
if($cost[stone]>0){echo", akmen&#371; $cost[stone]";}
include_once("names/builds.php");
$upname=$build_name[$nbui[upg]];

echo"</small><br/><small><a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis&amp;door=upg&amp;build=$nbui[upg]\">Tobulinti i $upname</a></small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$homet</a></small>";}
if($door=="upg"){
$build=$_GET['build'];
$nbui=mysql_fetch_array(mysql_query("SELECT * FROM cbuildings where castle='$pilis' and build='$build'"));
include_once("castle/$pilis/$build.php");
$ho=mysql_fetch_array(mysql_query("SELECT * FROM castles where castle='$pilis'"));
if(strtolower($ho[user])!==strtolower($user[username])){
echo"<small>&#352;i pilis ne tavo</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("builds/$pilis/$build.php")){
echo"<small>Tokio pastato &#279;</small></p></card></wml>";exit;mysql_close($db);}
if(!file_exists("castle/$pilis/$build.php")){
echo"<small>Tokio pastato statyti negalite</small></p></card></wml>";exit;mysql_close($db);}
if($ho[time]>time()){
$left2=$ho[time]-time();
$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;
echo"<small>Nauja pastata statyti galima tik po 4valand&#371;</small>";
        echo"<small>Gal&#279;site statyti po:</small><br/>
        <small><b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";
echo"</p></card></wml>";exit;mysql_close($db);}

if(($user[gold]<$cost[gold]) or ($user[gem]<$cost[gem]) or ($user[crystal]<$cost[crystal]) or ($user[sulfur]<$cost[sulfur]) or ($user[mercury]<$cost[mercury]) or ($user[wood]<$cost[wood]) or ($user[stone]<$cost[stone])){
echo"<small>Nepakanka resurs&#371; statyboms</small></p></card></wml>";exit;mysql_close($db);} 

mysql_query("UPDATE users SET gold=gold-$cost[gold],gem=gem-$cost[gem],sulfur=sulfur-$cost[sulfur],mercury=mercury-$cost[mercury],crystal=crystal-$cost[crystal],wood=wood-$cost[wood],stone=stone-$cost[stone] where username='$user[username]'");
include_once("builds/$pilis/$build.php");
$tmn=time()+14400;
mysql_query("UPDATE castles SET time='$tmn' where castle='$pilis'");

echo"<small>Pastatyta</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



?>