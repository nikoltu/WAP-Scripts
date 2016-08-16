<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
$redi=$_GET['url'];
if(substr_count($redi,".")>"0"){
header("Location: $redi");
echo"Perkeliama";}
setcookie("cokeia","taip",time()+999999999);


print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("core.php");
include_once("ip.php");
$action = addslashes(htmlspecialchars($_GET['action'])); if (!$action) { $action = ""; }

if ($action !== "arena") echo"<wml><card id=\"heroes\" title=\"$title_total\"><p align=\"center\">";
if ($HTTP_USER_AGENT == "") {
   
}
include("mukaka.php");
$id = addslashes(htmlspecialchars($_GET['id'])); if (!$id) { $id = ""; }
$topic = mysql_fetch_array(mysql_query("SELECT max,topic FROM spec LIMIT 1"));
if(!$topic[max]){
mysql_query("insert into spec (max,topic) values ('0','')");}

include_once("check.php");
if($koks_ip=="7.0.99.205"){
echo"Won is cia";}
elseif($koks_ip=="9196.20"){
echo"Won is cia";}
elseif((strtolower($user[username])=="sharasx") or (strtolower($user[username])=="swapkjmj") or (strtolower($user[username])=="actmgmgmgion") or ($user[blokas]=="1") or (strtolower($browser)=="6610i")){
echo"Tau uzrausta cia ieiti";} else{
include_once("functions.php");
if ($action !== "arena") {
if($user[ship]>time()){
echo"<small>Jusu laivas atakuojamas!</small><br/><small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand\">Vandenynas</a></small><br/>";}}

$par=mysql_fetch_array(mysql_query("SELECT * FROM para where nick='$user[username]'"));
$data=date("Y-m-d");
if(!$par[nick]){
mysql_query("insert into para (nick,data) values ('$user[username]','$data')");$par=mysql_fetch_array(mysql_query("SELECT * FROM para where nick='$user[username]'"));
}

if($par[data]!=="$data"){
mysql_query("DELETE FROM para");}

if(($action!=="arena") and ($action!=="map") and ($action!=="nbattle") and ($action!=="run") and ($action!=="laiv")){
$nn=strtolower($user[username]);
$kauk=mysql_fetch_array(mysql_query("select * from nbattle where heroe='$nn' and active='0' limit 1"));
if($kauk[id]){
if($kauk[vnd]=="0"){
$wow="action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k";}
else{
$wow="action=laiv&amp;la=kov&amp;id=$id";}

echo"<small>Norint pabegti is kovos butinai reikia paspausti <b>pab&#279;gti</b></small><br/><small><anchor>I kova<go method=\"post\" href=\"index.php?$wow\"><postfield name=\"event\" value=\"$kauk[id]\"/></go></anchor></small><br/><small><anchor>&#171; Pab&#279;gti<go method=\"post\" href=\"index.php?action=run&amp;id=$id\"><postfield name=\"mekeke\" value=\"$kauk[id]\"/></go></anchor></small><br/></p></card></wml>";exit;}}

include_once("skils/strategy.php");
$npm=mysql_query("SELECT COUNT(id) AS num FROM pm where nick='$user[username]' and active='0'");
$newpmm=($npm) ? mysql_result($npm, 0, 'num') : 0;
$apm=mysql_query("SELECT COUNT(id) AS num FROM pm where nick='$user[username]'");
if (($newpmm == "1") or ($newpmm == "21")) {
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $newpmm nauj&#261; &#382;inut&#281;!</a></small><br/>$line<br/>";
}
elseif ((($newpmm > 1) and ($newpmm <= 9)) or (($newpmm > 21) and ($newpmm < 30)))
{
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $newpmm naujas &#382;inutes!</a></small><br/>$line<br/>";
}
elseif ((($newpmm > 9) and ($newpmm <= 20)) or ($newpmm == "30"))
{
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $newpmm nauj&#371; &#382;inu&#269;i&#371;!</a></small><br/>$line<br/>";
}

if($user[trade]=="1"){
$trd=mysql_fetch_array(mysql_query("SELECT * FROM trade where name='$user[username]'"));
}
if($user[trade]=="2"){
$trd=mysql_fetch_array(mysql_query("SELECT * FROM trade where name2='$user[username]'"));
}
if(($trd[id]) and ($action!=="trade")){
if(($trd[act]=="0") and (strtolower($trd[name2])==strtolower($user[username]))){
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$trd[name]\">$trd[name]</a> jums siulo mainus.</small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=sut&amp;idzz=$trd[id]\">Sutikti</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=atm&amp;idzz=$trd[id]\">Atmesti</a></small><br/>";
}
else {
if(strtolower($user[username])==strtolower($trd[name])){
echo"<small>Vyksta mainai su <a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$trd[name2]\">$trd[name2]</a>.</small><br/>";
}
if(strtolower($user[username])==strtolower($trd[name2])){
echo"<small>Vyksta mainai su <a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$trd[name]\">$trd[name]</a>.</small><br/>";
}
if((strtolower($user[username])==strtolower($trd[name])) and ($trd[act]=="0")){
echo"<small>Dar neatsakyta</small><br/><small><a href=\"index.php?id=$id&amp;action=trade&amp;da=ats&amp;idzz=$trd[id]\">At&#353;aukti</a></small><br/>";}
else {
echo"<small><a href=\"index.php?id=$id&amp;action=trade&amp;da=trade&amp;idzz=$trd[id]\">I mainus</a></small><br/>";}}}


mysql_query("DELETE FROM magic where name=''");
mysql_query("UPDATE users SET onl='$browser',ip='$koks_ip' where session='$id'");
$idm="$koks_ip|$browser";
if($user[username]=="Nakked"){
@file_put_contents("nak.txt","$idm");}
include_once("include/shop.php");
if (($action == "map") or ($action == "object") or ($action == "nbattle") or ($action == "event") or ($action == "online") or ($action == "nick_info")) {
        $i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
        $j = addslashes(htmlspecialchars($_GET['j'])); if (!$j) { $j = ""; }
        $k = addslashes(htmlspecialchars($_GET['k'])); if (!$k) { $k = ""; }
        if ($action !== "nbattle") {
                $place = "$i|$j|$k";
                if (addslashes(htmlspecialchars($_GET['event'])) == "arena") $place = "arena";
                include_once("online.php");
        }
        else {
                $place = addslashes(htmlspecialchars($_GET['event']));
                include_once("online.php");
        }
        if ((($k !== "") and (!file_exists("map/$i/$j/$k.php"))) or (($j !== "") and (!file_exists("map/$i/$j"))) or ((!file_exists("map/$i")))) {
                echo"<small><b>Neegzistuojanti teritorija.</b></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
                mysql_close($db);
                exit;
        }
        if ($i !== "") {
                $header = "";
                include("map/$i.php");
if($need){
$kei=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$need'"));
if(!$kei[name]){
include_once("names/artifacts.php");

echo"<small>Turite tur&#279;ti <b>$artifact_name[$need]</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
}


                if ($level_limit > $user[level]) {
                        echo"<small>Turite b&#363;ti <b>$level_limit lygio</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
        }
        if ($j !== "") {
                $header = "";
                include_once("map/$i/$j.php");
                include_once("names/lands.php");
                $land = $land_name[$i];
if($need){
$kei=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$need'"));
if(!$kei[name]){
include_once("names/artifacts.php");

echo"<small>Turite tur&#279;ti <b>$artifact_name[$need]</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
}


                if ($level_limit > $user[level]) {
                        echo"<small>Turite b&#363;ti <b>$level_limit lygio</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
        }
        if ($k !== "") {
                $header = "";
                include_once("names/territories.php");
                $territory = $territory_name[$j];
                include("map/$i/$j/$k.php");
                if($need){
$kei=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$need'"));
if(!$kei[name]){
include_once("names/artifacts.php");

echo"<small>Turite tur&#279;ti <b>$artifact_name[$need]</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
}


                if ($level_limit > $user[level]) {
                        echo"<small>Turite b&#363;ti <b>$level_limit lygio</b>, jei norite &#269;ia patekti.</small><br/>$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
                        mysql_close($db);
                        exit;
                }
        }
}
elseif ($action == "object") {
        $place = $i;
        include_once("online.php");
}
elseif ($action == "arena") {
        include_once("include/arena.php");
}
elseif ($action == "abattle") {
        $p = addslashes(htmlspecialchars($_GET['p'])); if (!$p) { $p = ""; }
        if ($p == "") {
                include_once("include/arena_battle.php");
        }
        elseif ($p == "spells") {
                include_once("include/arena_spells.php");
        }
        elseif ($p == "info") {
                include_once("include/arena_info.php");
        }
}
else {
        include_once("online.php");
}
if ($action == "map") {
        include_once("include/map.php");
}
if ($action == "smslt") {
echo"<small>&#381;inutes si&#371;skite numeriu <b>1371</b></small>.$line
        </p><p align=\"left\">
        <small><b>hero1 ".strtolower($user[username])."</b> - gausite <b>1</b> Kredita. kaina 1Lt</small><br/>
        <small><b>hero2 ".strtolower($user[username])."</b> - gausite <b>2</b> Kreditus. kaina 2Lt</small><br/>
        <small><b>hero3 ".strtolower($user[username])."</b> - gausite <b>3</b> Kreditus. kaina 3Lt</small><br/>
        <small><b>hero4 ".strtolower($user[username])."</b> - gausite <b>4</b> Kreditus. kaina 4Lt</small><br/>
        <small><b>hero5 ".strtolower($user[username])."</b> - gausite <b>6</b> Kreditus. kaina 5Lt</small><br/>
        <small><b>hero7 ".strtolower($user[username])."</b> - gausite <b>9</b> Kreditus. kaina 7Lt</small><br/>
      
<small><b>hero10 ".strtolower($user[username])."</b> - gausite <b>13</b> Kredit&#371;. kaina 10Lt</small><br/>
      
        </p><p align=\"center\">
        $line<br/>
        <small><a href=\"index.php?id=$id\">$home</a></small>";}

if ($action == "smsen") {
echo"<small>&#381;inutes si&#371;skite numeriu <b>60999</b></small>.$line
        </p><p align=\"left\">
        <small><b>DAM 02heroen05 ".strtolower($user[username])."</b> - gausite <b>1</b> Kredita. kaina 0.5 GBP</small><br/>
        <small><b>DAM 01heroen1 ".strtolower($user[username])."</b> - gausite <b>3</b> Kreditus. kaina 1 GBP</small><br/>
        <small><b>DAM 03heroen3 ".strtolower($user[username])."</b> - gausite <b>5</b> Kreditus. kaina 1.5 GBP</small><br/>
        <small><b>DAM 05heroen5 ".strtolower($user[username])."</b> - gausite <b>18</b> Kreditu. kaina 5 GBP</small><br/>
        </p><p align=\"center\">
        $line<br/>
        <small><a href=\"index.php?id=$id\">$home</a></small>";}

if ($action == "smsai") {
echo"<small>&#381;inutes si&#371;skite numeriu <b>57778</b></small>.$line
        </p><p align=\"left\">
        <small><b>DAM 01heroai1 ".strtolower($user[username])."</b> - gausite <b>3</b> Kreditus. kaina 2 EUR</small><br/>
        </p><p align=\"center\">
        $line<br/>
        <small><a href=\"index.php?id=$id\">$home</a></small>";}



if ($action == "ref") {
        echo"<small>Si&#363;lome &#353;auni&#261; prog&#261; u&#382;sidirbti kredit&#371; nemokamai. Jums tereikia patalpinti &#353;i&#261; nuorod&#261; internete ir u&#382; kiekvien&#261; u&#382;siregistravus&#303; heroj&#371;, at&#279;jus&#303; i&#353; j&#363;s&#371; nuorodos, j&#363;s gausite 0.2 kredito! Idealiausia, jei turite savo tinklap&#303; - tada tai padaryti lengviausia. Kod&#279;l tai padaryta? Taip daugiau &#382;moni&#371; &#382;ais &#353;&#303; &#382;aidim&#261;. Daugiau &#382;aid&#279;j&#371; - didesn&#279; motyvacija tobulinti toliau! :)</small><br/>$line<br/><small>Dabartin&#279; nuoroda</small><br/><small><u>http://".strtolower($user[username]).".dmnx.net</u></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if ($action == "object") {
        include_once("include/object.php");
}
if ($action == "event") {
        include_once("include/event.php");
}
if ($action == "nbattle") {
        $p = addslashes(htmlspecialchars($_GET['p'])); if (!$p) { $p = ""; }
        if ($p == "") {
                include_once("include/neutral_battle.php");
        }
        elseif ($p == "spells") {
                include_once("include/nbattle_spells.php");
        }
        elseif ($p == "info") {
                include_once("include/nbattle_info.php");
        }
}

include_once("include/newskill.php");
include_once("include/aukcionas.php");

include_once("include/ally.php");
if($action=="rekla"){
include_once("rekla.php");}
if($action=="frenzy"){
include_once("include/frenzy.php");}
if($action=="kred"){
echo"<small>Gauti kredit&#371; galima 3 budais.</small><br/><small><a href=\"index.php?id=$id&amp;action=sms\">SMS</a></small><br/><small>
<a href=\"index.php?id=$id&amp;action=linija\">900-toji Linija</a></small><br/>";
echo"<small><a href=\"index.php?action=ref&amp;id=$id\">Nemokami kreditai</a></small><br/>";
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


if($action=="sms"){
echo"<small>Pasirinkite &#353;aly:</small><br/>$line<br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=smslt\">Lietuva</a></small><br/>";

echo"<small><a href=\"index.php?id=$id&amp;action=smsen\">Jungtin&#279; Karalyst&#279;(Anglija)</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=smsai\">Airija</a></small><br/>";


echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="catapulta"){
$war=mysql_fetch_array(mysql_query("SELECT hp FROM war where user='$user[username]' and machine='catapulta'"));
if($war[hp]){
echo"<small>Katapulta jau turite</small>";}
elseif(($user[gold]<15000) or ($user[wood]<5)){
echo"<small>Nepakanka resurs&#371;</small>";}
else{
mysql_query("update users set wood=wood-5,gold=gold-15000 where username='$user[username]'");
mysql_query("insert into war (user,machine,hp) values ('$user[username]','catapulta','1000')");
echo"<small>Nupirkta</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



if($action=="laiv"){
include_once("include/laiv.php");}


if($action=="akad"){
include_once("include/akad.php");}
if($action=="viktz"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}

/*
include_once("vikt.php");
for($i=$nuo; $i<count($kls); $i++){
mysql_query("insert into viktorinos_klausimai (klausimas,atsakymas) values ('$kls[$i]','$ats[$i]')");}
*/
    $nph = array_reverse(file("kls.txt"));
    $kiek_nph = count($nph);
    for ($oh = 0; $oh < $kiek_nph; $oh++)
    {
        $oph = explode("|", $nph[$oh]);
mysql_query("insert into viktorinos_klausimai (klausimas,atsakymas) values ('$oph[0]','$oph[1]')");
    }

echo"ikelta";}

if($action=="vikt"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
    include_once("include/viktorina.class.php");
    $cViktorina = new cViktorina(1);
    if ($cViktorina->start)
    {
        $cViktorina->stop();
        echo "Isjungta";
    }
    else
    {
        $cViktorina->start();
        echo "Ijungta";
    }
}
if($action=="linija"){
include_once("include/linija.php");}
if($action=="linija2"){
include_once("include/linija2.php");}
if($action=="trade"){
include_once("include/trade.php");}
if($action=="scholar"){
include_once("include/scholar.php");}

if($action=="castle"){
include_once("include/castle.php");}
if($action=="find"){
include_once("include/find.php");}
if($action=="game"){
include_once("game.php");}
if($action=="krdinf"){
include_once("include/krdinf.php");}
if($action=="delpm"){
$pid=$_GET['pid'];
mysql_query("delete from pm where id='$pid' limit 1");
echo"<small>OK</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



if($action=="run"){
include_once("include/run.php");}
if($action=="barak"){
include_once("include/barak.php");}
if($action=="member"){
include_once("member.php");}
if($action=="infor"){
include_once("include/info.php");}
if($action=="rpmd"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("rpmd.php");}
if($action=="armtop"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("armtop.php");}
if($action=="bartop"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("bartop.php");}

if($action=="gtop"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("gtop.php");}
if($action=="ktop"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("ktop.php");}
if($action=="aukats"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("aukats.php");}
if($action=="barak5"){
include_once("include/barak.php");}
if($action=="barak2"){
include_once("include/barak.php");}
if($action=="barak3"){
include_once("include/barak.php");}
if($action=="barak4"){
include_once("include/barak.php");}
if($action=="krd"){
include_once("include/krd.php");}

if($action=="next"){
include_once("include/next.php");}




if ($action == "") {
$place="pagr";
include_once("online.php");
$usr=strtolower($user[username]);
$nauj=mysql_fetch_array(mysql_query("SELECT date FROM news order by date desc LIMIT 1"));
mysql_query("UPDATE laivynas SET ejimas='99999' where user='@Makatas'");
      $day = mysql_fetch_array(mysql_query("SELECT day, time FROM time LIMIT 1"));
        $queries++;
        if ($day[1] < $time) {
                $dd = ($time - $day[1]) / $day_length;
                $days = ceil($dd);
                $day[1] = $day_length - ($day_length + ceil(($dd - $days) * $day_length)) + $time;
                $day[0] = $days + $day[0];
                mysql_query("UPDATE time SET day='$day[0]', time='$day[1]' LIMIT 1");
                $queries++;
        }
        if ($user[day] < $day[0]) {
                $days = $day[0] - $user[day];
$mp2=2;
include_once("skils/mistic.php");
include_once("artifact/act/charm_of_mana.php");
include_once("artifact/act/talisman_of_mana.php");
if($mp4>"0"){
$mp2=$mp2+$mp4;}
if($mp5>"0"){
$mp2=$mp2+$mp5;}


$mp2=$mp2*$days;
if($user[maxmana]-$user[mana]<$mp2){
$mp2=$user[maxmana]-$user[mana];}
mysql_query("UPDATE users SET mana=mana+$mp2 where username='$user[username]'");
                if ($days > 6) $days = 6;
if(date("H")<"22"){
mysql_query("UPDATE time SET ns='0' LIMIT 1");}

                include_once("core/gold.php");
include_once("res/mercury.php");
include_once("res/sulfur.php");
include_once("res/gem.php");
include_once("res/stone.php");
include_once("res/wood.php");
include_once("res/crystal.php");
include_once("res/cor.php");
if($crt>0){
$crt=$crt*$days;
mysql_query("UPDATE users SET crystal=crystal+$crt where session='$id' LIMIT 1");}
if($stn>0){
$stn=$stn*$days;
mysql_query("UPDATE users SET stone=stone+$stn where session='$id' LIMIT 1");}
if($wd>0){
$wd=$wd*$days;
mysql_query("UPDATE users SET wood=wood+$wd where session='$id' LIMIT 1");}
if($mer>0){
$mer=$mer*$days;
mysql_query("UPDATE users SET mercury=mercury+$mer where session='$id' LIMIT 1");}
if($gms>0){
$gms=$gms*$days;
mysql_query("UPDATE users SET gem=gem+$gms where session='$id' LIMIT 1");}

if($sul>0){
$sul=$sul*$days;
mysql_query("UPDATE users SET sulfur=sulfur+$sul where session='$id' LIMIT 1");}



$lai=mysql_fetch_array(mysql_query("SELECT * FROM laivynas where user='$user[username]'"));
if($lai[user]){
include_once("ships/$lai[name].php");
include_once("skils/navigace.php");
if($nav>0){
$speed=round($speed*$nav);
}
mysql_query("UPDATE laivynas SET ejimas='$speed' where user='$user[username]'");}
               $gold = $days * $gold_day;
                mysql_query("UPDATE users SET day='$day[0]', gold=gold+$gold WHERE session='$id' LIMIT 1");
mysql_query("UPDATE castles SET statybos='0' WHERE user='$user[username]'");                $queries++;
        }
        include_once("names/classes.php");
        $class = $class_name[$user['class']];
        $date = date("m-d H:i");
$alpm=($apm) ? mysql_result($apm, 0, 'num') : 0;  
$mana=$user[knowledge]*10;
include_once("skils/intelekt.php");
if($user[maxmana]<$mana){
mysql_query("UPDATE users SET maxmana='$mana' where session='$id'");
}
/*
echo"<small>Heroes Of Might And Magic V Tribes of the east</small><br/>"; 
echo"<small><a href=\"http://homamv.net\">HOMAMV.net</a></small><br/>";
*/



if($user[informacija]=="0"){
echo"<small><a href=\"index.php?id=$id&amp;action=infor\">PASKAITYK!!!</a></small><br/>";
}
if($user[skill_points]>"0"){
echo"<small><a href=\"index.php?id=$id&amp;action=newskill\">Turi nepanaudotu skill pointu!</a></small><br/>";
}
if($user[kvietimas]!=="0"){
$aly=mysql_fetch_array(mysql_query("SELECT * FROM ally where id='$user[kvietimas]'"));
echo"<small>Jus kvieciamas istoti i <a href=\"index.php?id=$id&amp;action=ally&amp;idz=$aly[id]\">$aly[pavadinimas]</a> alijansa!</small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=stot&amp;idz=$aly[id]\">Istoti</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=mest&amp;idz=$aly[id]\">Atmesti</a></small><br/>$line<br/>";}
if($user[member]=="0"){
echo"<small><a href=\"index.php?id=$id&amp;action=member\">Tapk tikru nariu!!!</a></small><br/>";
}

      echo"<img src=\"dmnxnet.gif\" alt=\"HEROES\"/><br/><small>[$date]</small><br/>$line<br/>";
        if ($topic[topic]){ echo"<small><b>Topikas:</b><br/>$topic[topic]</small><br/>$line<br/>";}
echo"<small><a href=\"index.php?action=topic&amp;id=$id\">Keisti topic</a></small><br/>$line<br/>";
echo"<small><b><u>$user[username]</u></b></small><br/><small><u>$class [$user[level]]</u></small>";
        include_once("core/level.php");
        $level = level($user[level]);
        if ($level[$user[level]] <= $user[expierence]) {
                $lev = $user[level] + 1;
                echo"<small><i><b><a href=\"index.php?id=$id&amp;action=level\">Herojus pasiek&#279; $lev lyg&#303;!</a></b></i></small><br/>";
        }
        if ($user[battle] > $time) {
                $left = $user[battle] - $time;
                echo"<br/>$line<br/><small><u>Negalite kovoti <b>$left</b> s</u></small>";
        }


echo"<br/>$line<br/><small><b><a href=\"index.php?action=mymenu&amp;id=$id\">Mano Pilis</a></b></small><br/>";
if($user[ally]!=="0"){
echo"<small><b><a href=\"index.php?action=ally&amp;id=$id&amp;idz=$user[ally]\">Mano Alijansas</a></b></small><br/>";}

echo"<small><a href=\"pm.php?id=$id\">D&#279;&#382;ut&#279; [$newpmm/$alpm]</a></small><br/>$line<br/>";
        echo"<small><b><a href=\"index.php?action=news&amp;id=$id\">Naujienos[$nauj[date]]</a></b></small><br/>$line<br/>";

echo"<small><b><a href=\"index.php?action=krd&amp;id=$id\">[&#187;]Kreditai [$user[kred]][&#171;]</a></b></small><br/>$line<br/>";

        if ($user[rain] > time()){ echo"<small><b>Patirties lietus!!!</b></small><br/>";
$left2=$user[rain]-$time;
$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;
        echo"<small>Iki pabaigos liko:</small><br/>
        <small><b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";}
        if (($user[immortal] > time()) or ($user[fre]>0)){ echo"<small><b>FRENZY!!!</b></small><br/>";
if($user[immortal]>time()){
$left2=$user[immortal]-$time;}
else {
$left2=$user[fre];}

$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;
        echo"<small>Iki pabaigos liko:</small><br/>
        <small><b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";
if($user[immortal]>time()){
$fr="Sustabdyti";} else {
$fr="Paleisti";}
echo"<small><a href=\"index.php?action=frenzy&amp;id=$id\">$fr</a></small><br/>";}
                $on = mysql_query("SELECT place FROM users WHERE time>$time");
        $queries++;
        $onl[kaln] = 0;
        $onl[arena] = 0;
        $onl[forum] = 0;
        $onl[zod] = 0;
        $onl[gb] = 0;
        $onl[nonst] = 0;

        while ($onn = mysql_fetch_row($on)) {
                $online++;
                @$onl[$onn[0]]++;
        }

        echo"</p><p align=\"left\">
<small><b>[&#187;]</b>&nbsp;<b><a href=\"index.php?action=laiv&amp;id=$id\">Uostas</a></b></small><br/>
        <small><b>[&#187;]</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Heroj&#371; Arena [".$onl[arena]."]</a></small><br/>";
        $lands = 0;
        if ($handle = opendir("map/")) {
                while (false !== ($file = readdir($handle))) {
                        if ($file != "." && $file != ".." && $file != "index.php" && $file != "act.php") {
                                $file = explode(".", $file);
                                if ($file[1] == "") {
                                        $land[$lands] = "$file[0]";
                                        $lands++;
                                }
                        }
                }
                closedir($handle);
        }
        include_once("names/lands.php");
        for ($t = 0; $t < count($land); $t++) {
                $landn = $land_name[$land[$t]];
                if ($t > 0) { echo"<br/>"; }
if($land[$t]!=="act"){
                echo"<small><b>[&#187;]</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$land[$t]\">$landn</a></small>";
}        }

        $left = $day[1] - $time;
        $file = @fopen("online.txt", "r");
        @flock($file, 1);
        @$count = fgets($file, 255);
        @fclose($file);
        $count = explode("|", $count);
        if ($online >= $count[0]) {
                $file = @fopen("online.txt", "w");
                $date = date("m-d H:i");
                $count = "$online|$date";
                fputs($file, $count);
                flock($file, 2);
                fclose($file);
        }
        $h = floor($left / 3600);
        $m = floor(($left- ($h * 3600)) / 60);
        $s = $left - $h * 3600 - $m * 60;
echo"</p><p align=\"center\">$line<br/></p><p><small><b>[&#187;]</b>&nbsp;<a href=\"index.php?action=next&amp;id=$id\">Kita</a></small><br/>";


        echo"</p><p align=\"center\">$line<br/>
        <small><u>Dabar: $day[0] d.</u></small><br/>
        <small>Iki kitos dienos liko:</small><br/>
        <small><b>$h</b> val. <b>$m</b> min. <b>$s</b> sek.</small><br/>
        $line<br/>";
        

if($topic[max]<$online){
$dta=date("Y-m-d H:i:s");
$max="$online $dta";
mysql_query("UPDATE spec SET max='$max'");}
$to=explode(" ",$topic[max]);        echo"<small><a href=\"index.php?action=online&amp;id=$id\">Prisijung&#281; [$online]</a><br/><a href=\"index.php?action=maxon&amp;id=$id\">Max online[$to[0]]</a></small><br/>
<small><a href=\"index.php?action=logout&amp;id=$id\">&#171; Atsijungti</a></small><br/>$line<br/>";
echo"<small><b><a href=\"index.php?id=$id&amp;action=game\">Viktorina</a></b>&nbsp;[$onl[zod]]</small><br/>";

echo"<small><b><a href=\"index.php?id=$id&amp;action=chat\">Non-stop</a></b>&nbsp;[$onl[nonst]]</small><small><a href=\"index.php?id=$id&amp;action=nsinfo\">?</a></small><br/>";



        echo"<small><b><a href=\"gb.php?id=$id\">Chat</a></b>&nbsp;[$onl[gb]]</small><br/>
    <small><b><a href=\"forum.php?id=$id\">Forumas</a></b>&nbsp;[$onl[forum]]</small><br/>$line<br/><small><a href=\"index.php?action=rekla&amp;id=$id\">Mokama reklama</a><br/></small>";
$rk=mysql_query("SELECT url,ant FROM rkl order by id desc LIMIT 3");
while($row=mysql_fetch_array($rk)){
$url=$row['url'];
$ant=$row['ant'];
$url=str_replace("ehero.in","dune.lt/?kas=makatas",$url);


echo"<small><a href=\"index.php?url=$url\">$ant</a></small><br/>";}
echo"<small><a href=\"http://hero.vhost.lt/hero\">Patikimas partneris</a></small><br/>";
echo"$line<br/><a href=\"http://wtop.us/i.php?id=dmnx\"><img src=\"http://wtop.us/count.php?id=dmnx\" alt=\"WAP TOP\"/></a>";
if($user[username]=="@Makatas"){echo"<br/>$line<br/><small><a href=\"index.php?action=adminc&amp;id=$id\">AdminCP</a></small><br/>";}

}

elseif($action=="allyreit"){
include_once("include/reit.php");}



elseif ($action == "mymenu") {
        include_once("include/my_menu.php");
}
elseif ($action == "nsinfo") {
        include_once("include/ns.php");
}
elseif ($action == "chat") {
        include_once("chat.php");
}
elseif ($action == "huinfo") {
        include_once("include/my_unit_info.php");
}
elseif ($action == "sinfo") {
        include_once("include/skill_info.php");
}
elseif ($action == "ainfo") {
include("names/artifacts.php");
include("names/artap.php");
        include_once("include/artifacts_info.php");
}
elseif($action=="useart"){
include_once("include/useart.php");}
elseif ($action == "online") {
        include_once("include/online.php");
}
elseif ($action == "level") {
        include_once("include/level.php");
}
elseif ($action == "nick_info") {
        include_once("include/view_nick_info.php");
}
elseif ($action == "top") {
        include_once("include/top.php");
}
elseif ($action == "toplan") {
        include_once("include/toplan.php");
}
elseif ($action == "logout") {
        $name = strtolower($user[username]);
        $queries++;
        mysql_query("UPDATE users SET time='$time' WHERE username='$name' LIMIT 1");
        echo"<small>J&#363;s atsijung&#279;te! Linkime &#269;ia sugr&#303;&#382;ti!</small><br/>$line<br/><small><a href=\"index.php?lang=$lang\">$home</a></small>";
}

elseif($action=="asms"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
echo"Metai:<br/><input name=\"met\" format=\"*N\" type=\"text\" value=\"".date("Y")."\"/><br/>
Menuo:<br/><input name=\"men\" format=\"*N\" type=\"text\" value=\"".date("m")."\"/><br/>
Diena:<br/><input name=\"den\" format=\"*N\" type=\"text\" value=\"".date("d")."\"/><br/>
<anchor>Zeti<go method=\"post\" href=\"index.php?id=$id&amp;action=asms2\">
<postfield name=\"met\" value=\"$(met)\"/>
<postfield name=\"men\" value=\"$(men)\"/>
<postfield name=\"den\" value=\"$(den)\"/>
</go></anchor>
<br/>$line<br/>
<a href=\"index.php?id=$id\">$home</a>";}
elseif($action=="asms2"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
$met=$_POST['met'];
$men=$_POST['men'];
$den=$_POST['den'];
$dti="$met-$men-$den";
$sm=mysql_query("SELECT * FROM sms where data='$dti'");
while($row=mysql_fetch_array($sm)){
$raktas=$row['raktas'];
$sms=$row['sms'];
$kaina=$row['kaina'];
$oper=$row['oper'];
$nr=$row['nr'];
$time=$row['time'];
echo"<small>Raktas:<b>$raktas</b><br/>
Sms:<b>$sms</b><br/>
Kaina:<b>$kaina LT</b><br/>
Operatorius:<b>$oper</b><br/>
Numeris:<b>$nr</b><br/>
Laikas:<b>$time</b></small><br/>$line<br/>";}
echo"<a href=\"index.php?id=$id\">$home</a>";}

elseif($action=="avand"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
include_once("jura.php");
mysql_query("DELETE FROM jura where type!='game'");
mysql_query("DELETE FROM artifacts where user='@Makatas'");
for($p=0; $p<count($jura); $p++){
$obi=explode("-",$jura[$p]);
$ex=explode("|",$obi[4]);
$ex2=explode("|",$obi[5]);
$tim=time()+$ex[0]*$ex[1];
$tim2=$ex2[0]*$ex2[1];

mysql_query("insert into jura (name,type,kiek,loc,time,time2,subtype,res,kres) values ('$obi[0]','$obi[1]','$obi[2]','$obi[3]','$tim','$tim2','$obi[6]','$obi[7]','$obi[8]')");}
if ($handle = opendir("artifact/use/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != ".htaccess" && $file != "." && $file != ".." && $file != "index.php") {
            $file = explode(".", $file);

include_once("artifact/use/$file[0].php");
mysql_query("insert into artifacts (user,name,type,kiek) values ('@Makatas','$file[0]','$atype','99')");
     }
      }
      closedir($handle);
   }


echo"<small>Atnaujinta</small>";}

if($action=="gold"){
$name=$_GET['name'];
echo"<small>Pervedate <b>$name</b></small><br/><small>Kiek:</small><br/><input type=\"texu\" name=\"gold\" format=\"*N\"/><br/><small><anchor>Pervesti<go method=\"post\" href=\"index.php?id=$id&amp;action=gold2&amp;name=$name\"><postfield name=\"gold\" value=\"$(gold)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="gold2"){
$name=$_GET['name'];
$gold=$_POST['gold'];
$usr=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$name'"));
if(($user[ally]<1) or ($user[ally]!==$usr[ally])){
echo"<small>Negalima jam pervesti</small>";}
elseif($gold>$user[gold]){
echo"<small>Tiek auso neturite</small>";}
elseif($user[perv]>time()){
echo"<small>Dar negalite perwesti</small>";}
elseif($usr[level]*2000<$gold){
$pgo=$usr[level]*2000;
echo"<small>&#352;iam &#382;aid&#279;jui galima pervesti nedaugiau nei $pgo aukso.</small>";}
else {
$ti=time()+3600*24;
mysql_query("UPDATE users SET gold=gold-$gold,perv='$ti' where username='$user[username]'");
mysql_query("UPDATE users SET gold=gold+$gold where username='$name'");
echo"<small>Peved&#279;te $gold aukso &#382;aid&#279;jui $name</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="adminc"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
$dti=date("Y-m-d");
$sn=mysql_query("SELECT COUNT(id) AS num FROM sms where data='$dti'");
$snd=($sn) ? mysql_result($sn,0, 'num') : 0;
$al=mysql_query("SELECT COUNT(id) AS num FROM sms");
$all=($al) ? mysql_result($al,0, 'num') : 0;
$lt=0;
$lt2=0;
$ltu=mysql_query("SELECT kaina FROM sms where data='$dti'");
while($row=mysql_fetch_array($ltu)){
$li=$row['kaina'];
$lt=$lt+$li;}
$ltu2=mysql_query("SELECT kaina FROM sms");
while($row2=mysql_fetch_array($ltu2)){
$li2=$row2['kaina'];
$lt2=$lt2+$li2;}


echo"<small><a href=\"index.php?id=$id&amp;action=aukats\">Ataskaitos</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=rpmd\">PM</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=gtop\">Aukso top</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=armtop\">Armiju top</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=bartop\">Baraku top</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=ktop\">Krd top</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=vikt\">Viktorina</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=viktz\">Viktorinos &#382;od&#382;iai</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=avand\">Atnaujinti vandenyna</a></small><br/>";


echo"<small><a href=\"index.php?action=asms&amp;id=$id\">[&#187;] SMS $snd/$all($lt/$lt2)LT</a><br/><a href=\"index.php?action=topic&amp;id=$id\">[&#187;] Keisti topic</a><br/><a href=\"index.php?action=dnew&amp;id=$id\">[&#187;] Deti naujiena</a><br/><a href=\"forum.php?action=ban&amp;id=$id\">[&#187;] Deti bana</a><br/><a href=\"forum.php?action=unban&amp;id=$id\">[&#187;] Nuimti bana</a><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="dnew"){
if($user[username]!=="@Makatas"){echo"tau negalima</p></card></wml>";exit;}
echo"<small>Title<br/><input type=\"text\" name=\"title\"/><br/>Naujiena<br/><input type=\"text\" name=\"new\"/><br/>Kas idejo<br/><input type=\"text\" name=\"what\"/><br/><anchor>Deti<go method=\"post\" href=\"index.php?action=dnew2&amp;id=$id\">
<postfield name=\"title\" value=\"$(title)\"/><postfield name=\"new\" value=\"$(new)\"/><postfield name=\"what\" value=\"$(what)\"/></go></anchor><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="dnew2"){
$dat=date("Y-m-d H:i:s");
$title=$_POST['title'];
$new=$_POST['new'];
$useris=$_POST['what'];
mysql_query("insert into news (title,zin,date,user) values ('$title','$new','$dat','$useris')");
echo"<small>Ideta<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="news"){
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
echo"<a href=\"index.php?action=snew&amp;id=$id&amp;idz=$idz\">$tit</a><br/>";}
echo"<br/>";
if($ntot>10){
$tol=$psl+1;
echo"<anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=news&amp;id=$id\"><postfield name=\"psl\" value=\"$tol\"/></go></anchor><br/>";}
if($psl>1){
$atg=$psl-1;
echo"<anchor>[-]Atgal[-]<go method=\"post\" href=\"index.php?action=news&amp;id=$id\"><postfield name=\"psl\" value=\"$atg\"/></go></anchor><br/>";}}
echo"$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="snew"){
$idz=$_GET['idz'];
$qua=mysql_fetch_array(mysql_query("SELECT date,zin,user FROM news where id='$idz'"));


if($qua[user]==""){$qua[user]="@Makatas";}

echo"<small>$qua[zin]<br/>Naujiena ideta <b>$qua[date]</b><br/>Naujiena idejo <b>$qua[user]</b><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}

elseif($action=="blokas"){
if(($user[status]!=="King") and ($user[status]!=="Master") and ($user[status]!=="Captain")){
echo"<small>Tau &#269;ia negalima</small></p></card></wml>";exit;mysql_close($db);}
echo"<small>Blokuota</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
$name=$_GET['name'];
mysql_query("UPDATE users SET blokas='1' where username='$name'");}

elseif($action=="deletintuseritotaliai"){

if($user[username]!=="@Makatas"){
echo"<small>Tau &#269;ia negalima</small></p></card></wml>";exit;mysql_close($db);}
echo"<small>I&#353;trinta</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
$name=$_GET['name'];
$mame=strtolower($name);
mysql_query("DELETE FROM users where username='$name'");
mysql_query("DELETE FROM army where username='$name'");
mysql_query("DELETE FROM artifacts where user='$name'");
mysql_query("DELETE FROM aukcionas where user='$name'");
mysql_query("DELETE FROM war where user='$name'");
mysql_query("DELETE FROM nbattle where heroe='$name'");
mysql_query("DELETE FROM barak where user='$name'");

}

elseif($action=="deletintuseri"){
if($user[username]!=="@Makatas"){
echo"<small>Tau &#269;ia negalima</small></p></card></wml>";exit;mysql_close($db);}
echo"<small>I&#353;trinta</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
$name=$_GET['name'];
mysql_query("UPDATE users SET deleted='1' where username='$name'");}


elseif($action=="blokas2"){
if(($user[status]!=="King") and ($user[status]!=="Master") and ($user[status]!=="Captain")){
echo"<small>Tau &#269;ia negalima</small></p></card></wml>";exit;mysql_close($db);}
echo"<small>Atblokuota</small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
$name=$_GET['name'];
mysql_query("UPDATE users SET blokas='0' where username='$name'");}


elseif($action=="topic"){
echo"<small><i>Topic keitimas kainuoja"; 
if(($user[status]=="King") or ($user[status]=="Master") or ($user[status]=="Captain")){
echo"0";}
else{
echo $user[level]*1000;}
echo" aukso</i></small><br/><small>Reklama draud&#382;iama!</small><br/>";

echo"<input type=\"text\" name=\"topic\"/><br/><anchor>Keisti<go method=\"post\" href=\"index.php?action=topic2&amp;id=$id\"><postfield name=\"topic\" value=\"$(topic)\"/></go></anchor><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="topic2"){
$top=$_POST['topic'];
$top=htmlspecialchars($top);
$top="$top <b>[$user[username]]</b>";
if(($user[status]=="King") or ($user[status]=="Master") or ($user[status]=="Captain")){
$gld=0;}
else{
$gld=$user[level]*1000;}
if($gld>$user[gold]){
echo"<small>Truksta aukso</small>";} elseif(strtolower($top)>230){
echo"<small>Topic per ilgas</small>";}
elseif(($user[member]!=="1") and ($user[level]<30)){
echo"<small>Galima tik tikriems nariams arba tiems kuri&#371; lygis didesnis nei 29</small><br/>";}

elseif($top2[1]>time){
echo"<small>Topic bus galima keisti u&#382; $top2[1] sec.</small>";}
elseif($user[ban]>time()){
echo"<small>Uzbanintiems negalima.</small>";} else {
$toc=$user[level]*1000;
mysql_query("UPDATE users SET gold=gold-$gld where username='$user[username]'");
mysql_query("UPDATE spec SET topic='$top'");
echo"<small>Pakeista</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
elseif($action=="maxon"){
$max=explode(" ",$topic[max]);
echo"<small>Max online buvo<b>$max[0]</b><br/>Tai iviko <b>$max[1]<br/>$max[2]</b><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if ($action == "map") {
        echo"<do type=\"Options\" name=\"i\" label=\"D&#279;&#382;ut&#279; [$user[new_pm]/$user[all_pm]]\"><go href=\"pm.php?id=$id&amp;i=$i&amp;j=$j&amp;k=$k\"/></do>";
                echo"<do type=\"Options\" name=\"r\" label=\"[+Atnaujinti+]\"><go href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\"/></do>";
        if ($k !== "") {
                echo"<do type=\"Options\" name=\"k\" label=\"&#171; $territory\"><go href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\"/></do>";
        }
        if ($j !== "") {
                echo"<do type=\"Options\" name=\"j\" label=\"&#171; $land\"><go href=\"index.php?action=map&amp;id=$id&amp;i=$i\"/></do>";
        }
        echo"<do type=\"Options\" name=\"pm\" label=\"&#171; $homet\"><go href=\"index.php?id=$id\"/></do>";
}
}
function microtime_float() { list($usec,$sec)=explode(" ",microtime()); return((float)$usec+(float)$sec); } $time_start=microtime_float(); $time_end=microtime_float(); $micro=$time_end-$time_start; $microtime=substr($micro,0,4); 
echo"<br/><small>U&#382;klausa truko:<b>$microtime</b> ms</small><br/>";
$andada=htmlspecialchars("&");
echo"<small>&#169;Makatas $andada @Action</small><br/>";
echo"<small><b>info@dmnx.net</b></small><br/>";

echo"</p></card></wml>";
mysql_close($db);
exit;
?>
