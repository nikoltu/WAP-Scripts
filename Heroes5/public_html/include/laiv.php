<?php
/*
if(!$mgmgmg){
echo"Vandenynas laikinai uzdarytas</p></card></wml>";exit;mysql_close($db);}
*/
$lav=mysql_fetch_array(mysql_query("SELECT * FROM laivynas where user='$user[username]'"));
$sh=$_GET['la'];
if($sh==""){
if(!$lav[loc]){
echo"<small>Jus neturite laivo!</small><br/>";}
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=shop\">Kapitonas Ronas</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand\">Vandenynas</a></small><br/>";
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($sh=="shop"){
echo"<small>Sveikas nepazystamasis! Ko noretum?</small><br/>$line<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=info\">Informacija</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=buy\">Pirkti laiv&#261;</a></small><br/>";
if($lav[user]){
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=sell\">Parduoti laiv&#261;</a></small><br/>";}
echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($sh=="sell"){
if(!$lav[user]){
echo"<small>Jus neturite laivo!</small></p></card></wml>";
exit;
mysql_close($db);
}
include_once("names/jura.php");
$lname=$jname[$lav[name]];
echo"<small>Jus&#371; laivas yra <b>$lname</b>.Ar tikrai norite j&#303; parduoti? Pardave gausite tik puse pirkimo kainos.<a href=\"index.php?id=$id&amp;action=laiv&amp;la=sell2\">Taip!</a></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($sh=="sell2"){
if(!$lav[user]){
echo"<small>Jus neturite laivo!</small></p></card></wml>";
exit;
mysql_close($db);
}
if($lav[loc]!=="a1"){
echo"<small>Norint parduoti laiva jums reikia grizti i uost&#261;!</small></p></card></wml>";
exit;
mysql_close($db);
}
include_once("ships/$lav[name].php");
$cost[gold]=$cost[gold]/2;
$cost[stone]=$cost[stone]/2;
$cost[wood]=$cost[wood]/2;
$cost[crystal]=$cost[crystal]/2;
$cost[sulfur]=$cost[sulfur]/2;
$cost[mercury]=$cost[mercury]/2;
$cost[gem]=$cost[gem]/2;

mysql_query("UPDATE users SET gold=gold+$cost[gold],gem=gem+$cost[gem],crystal=crystal+$cost[crystal],sulfur=sulfur+$cost[sulfur],mercury=mercury+$cost[mercury],stone=stone+$cost[stone],wood=wood+$cost[wood] where username='$user[username]'");
mysql_query("delete from laivynas where user='$user[username]'");
mysql_query("delete from jura where name='$user[username]'");

echo"<small>Parduota.</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

$blaiv=$_GET['blaiv'];
if(($sh=="buy") and (!$blaiv)){
echo"<small>Pasirinkite laiv&#261;</small><br/>";
include_once("names/jura.php");
if ($handle = opendir("ships/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php") {
            $file = explode(".", $file);
            $lname = $jname[$file[0]];
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=buy&amp;blaiv=$file[0]\">$lname</a></small><br/>";
         }
      }
      closedir($handle);
   }

}
if(($sh=="buy") and ($blaiv)){
if(!file_exists("ships/$blaiv.php")){
echo"<small>Toks laivas neegzistuoja</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";exit;}
include_once("ships/$blaiv.php");
echo"<small>Laive telpa aukso:<b>[$oth[gold]]</b>,patirties:<b>[$oth[exp]]</b>,gems&#371;:<b>[$oth[gem]]</b>,puod&#371;:<b>[$oth[mercury]]</b>,sulfur&#371;:<b>[$oth[sulfur]]</b>,krystal&#371;:<b>[$oth[crystal]]</b>,akmen&#371;:<b>[$oth[stone]]</b>,med&#382;io:<b>[$oth[wood]]</b></small><br/>$line<br/>";
echo"<small>Laivo greitis:[<b>$speed</b>/dien&#261;]</small><br/>";
echo"<small>Laivo gyvyb&#279;s:[<b>$hp</b>]</small><br/>";
echo"<small>Laive yra patrank&#371;:[<b>$cannons</b>]</small><br/>";
echo"<small>Laive daugiausia gali buti patrank&#371;:[<b>$maxcan</b>]</small><br/>";
echo"<small>Laive telpa artifakt&#371;:[<b>$art</b>]</small><br/>";
echo"<small>Laivo kaina:";
if($cost[gold]>0){
echo"aukso:<b>[$cost[gold]]</b>,";}
if($cost[gem]>0){
echo"gems&#371;:<b>[$cost[gem]]</b>,";}
if($cost[mercury]>0){
echo"puod&#371;:<b>[$cost[mercury]]</b>,";}
if($cost[sulfur]>0){
echo"sulfur&#371;:<b>[$cost[sulfur]]</b>,";}
if($cost[crystal]>0){
echo"krystal&#371;:<b>[$cost[crystal]]</b>,";}
if($cost[wood]>0){
echo"med&#382;io:<b>[$cost[wood]]</b>,";}
if($cost[stone]>0){
echo"akmen&#371;:<b>[$cost[stone]]</b>,";}
echo".</small><br/>$line<br/>"; 
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=buy2&amp;ship=$blaiv\">Pirkti</a></small>";
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($sh=="buy2"){
$ship=$_GET['ship'];
$shi=@include_once("ships/$ship.php");
if(!$shi){
echo"<small>Tokio laivo n&#279;ra</small></p></card></wml>";
exit;
mysql_close($db);}
if($lav[name]){
echo"<small>Laiva jau turite</small></p></card></wml>";
exit;
mysql_close($db);}

if(($cost[wood]>0) and ($cost[wood]>$user[wood]) or ($cost[stone]>0) and ($cost[stone]>$user[stone]) or ($cost[mercury]>0) and ($cost[mercury]>$user[mercury]) or ($cost[gem]>0) and ($cost[gem]>$user[gem]) or ($cost[sulfur]>0) and ($cost[sulfur]>$user[sulfur]) or ($cost[crystal]>0) and ($cost[crystal]>$user[crystal]) or ($cost[gold]>$user[gold])){
echo"<small>Nepakanka resursu!</small></p></card></wml>";
exit;
mysql_close($db);}
mysql_query("UPDATE users SET gold=gold-$cost[gold],gem=gem-$cost[gem],crystal=crystal-$cost[crystal],sulfur=sulfur-$cost[sulfur],mercury=mercury-$cost[mercury],stone=stone-$cost[stone],wood=wood-$cost[wood] where username='$user[username]'");
mysql_query("insert into laivynas (user,name,ejimas,hp,cannons,maxcan) values ('$user[username]','$ship','$speed','$hp','$cannons','$maxcan')");
mysql_query("insert into jura (name,type,loc) values ('$user[username]','game','a1')");
echo"<small>Nusipirkote laiv&#261;</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



if($sh=="info"){
echo"<small>Informacija apie vandenyna</small><br/>$line<br/>";
echo"<small>Pralaim&#279;ja kova vandenyne ils&#279;sit&#279;s 1valanda o laim&#279;jus 20min.!</small><br/>$line<br/>";
echo"<small>Nor&#279;dami atsiimti rasta laimiki turite sugrizti i uosta</small><br/>$line<br/>";
echo"<small>Cia netaip kaip sausumoje. Ne jus puolate monstrus o jie jus. Tad jeigu baiminat&#279;s d&#279;l savo armijos geriau plaukiokite netoli uosto be armijos</small><br/>$line<br/>";
echo"<small>* Reiskia, kad tame kelyje yra kitas laivas ar monstrai</small><br/>$line<br/>";
echo"<small>[#] Reiskia, kad uzpulsite laiv&#261;</small><br/>$line<br/>";
echo"<small>Vandenynas visiems bendras. Tai rei&#353;kia, kad jai jus ka nors paimsite tai kitas &#382;aid&#279;jas to daikto toje vietoje neras.</small><br/>$line<br/>";
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";}

if($sh=="vand"){
if(!$lav[user]){
echo"<small>Jus neturite laivo!</small></p></card></wml>";
exit;
mysql_close($db);
}
include_once("ships/$lav[name].php");
echo"</p><p><small>[$lav[hp]/$hp]</small><br/>";
if($lav[pirat]>time()){
$left2=$lav[pirat]-time();
$h2 = floor($left2 / 3600);
        $m2 = floor(($left2- ($h2 * 3600)) / 60);
        $s2 = $left2 - $h2 * 3600 - $m2 * 60;

echo"<small>Jus busite <b>piratas</b> dar <b>$h2</b> val. <b>$m2</b> min. <b>$s2</b> sek.</small><br/>";}

$acti=$_GET['acti'];
if($acti=="atkship"){
if($lav[cannons]<1){
echo"<small>Jus neturite patrank&#371;!</small></p></card></wml>";
exit;
mysql_close($db);
}
if($lav[ejimas]<1){
echo"<small>Nepakanka &#279;jim&#371;</small></p></card></wml>";
exit;
mysql_close($db);}

$names=strtolower($_POST['name']);
$enlav=mysql_fetch_array(mysql_query("SELECT * FROM laivynas where user='$names'"));
if($enlav[loc]!==$lav[loc]){
echo"<small>Taip negalima!</small></p></card></wml>";
exit;
mysql_close($db);
}
$pirat=time()+3600*24;
if($enlav[pirat]<time()){

mysql_query("UPDATE laivynas SET pirat='$pirat' where user='$user[username]'");
}
$attime=time()+1200;
mysql_query("UPDATE users SET ship='$attime' where username='$names'");

mysql_query("UPDATE laivynas SET ejimas=ejimas-1 where user='$user[username]'");

$dmg=mt_rand(5, 30)*$lav[cannons];
echo"<small>Atakavote $names laiv&#261;.Padar&#279;te $dmg &#382;alos.</small>";
if($enlav[hp]-$dmg<=0){
echo"<small>Paskandinote laiv&#261;</small>";
include_once("ships/$lav[name].php");

if($enlav[wood]>$oth[wood]-$lav[wood]){
$enlav[wood]=$oth[wood]-$lav[wood];
}
if($enlav[stone]>$oth[stone]-$lav[stone]){
$enlav[stone]=$oth[stone]-$lav[stone];
}
if($enlav[exp]>$oth[exp]-$lav[exp]){
$enlav[exp]=$oth[exp]-$lav[exp];
}
if($enlav[gold]>$oth[gold]-$lav[gold]){
$enlav[gold]=$oth[gold]-$lav[gold];
}
if($enlav[gem]>$oth[gem]-$lav[gem]){
$enlav[gem]=$oth[gem]-$lav[gem];
}
if($enlav[mercury]>$oth[mercury]-$lav[mercury]){
$enlav[mercury]=$oth[mercury]-$lav[mercury];
}
if($enlav[crystal]>$oth[crystal]-$lav[crystal]){
$enlav[crystal]=$oth[crystal]-$lav[crystal];
}
if($enlav[sulfur]>$oth[sulfur]-$lav[sulfur]){
$enlav[sulfur]=$oth[sulfur]-$lav[sulfur];
}

echo"<small>Gavote aukso:<b>$enlav[gold]</b>,patirties:<b>$enlav[exp]</b>,gems&#371;:<b>$enlav[gem]</b>,puod&#371;:<b>$enlav[mercury]</b>,sulfur&#371;:<b>$enlav[sulfur]</b>,krystal&#371;:<b>$enlav[crystal]</b>,akmen&#371;:<b>$enlav[stone]</b>,
med&#382;io:<b>$enlav[wood]</b></small><br/>.";





mysql_query("update laivynas set wood=wood+$enlav[wood],stone=stone+$enlav[stone],exp=exp+$enlav[exp],mercury=mercury+$enlav[mercury],sulfur=sulfur+$enlav[sulfur],crystal=crystal+$enlav[crystal],gem=gem+$enlav[gem],gold=gold+$enlav[gold] where user='$user[username]'");


mysql_query("delete from journal where user='$names'");

   $date = date("m-d H:i");
   $text = "Vandenyne buvo u&#382;pultas ir paskandintas &#363;s&#371; laivas. Tai padar&#279; $user[username].";
   mysql_query("INSERT INTO pm(nick, name, text, date, active, action) VALUES ('$names','!@SYS','$text','[$date]','0','note')");
mysql_query("delete from jura where name='$names'");
mysql_query("delete from laivynas where user='$names'");}
else {
mysql_query("update laivynas set hp=hp-$dmg where user='$names'");
$dmg2=mt_rand(5, 30)*$enlav[cannons];
echo"<small>$names kontraatakavo.Padar&#279; $dmg2 &#382;alos.</small>";
if($lav[hp]-$dmg2<=0){
echo"<small>Paskandino laiv&#261;</small>";
include_once("ships/$enlav[name].php");

if($lav[wood]>$oth[wood]-$enlav[wood]){
$lav[wood]=$oth[wood]-$enlav[wood];
}
if($lav[stone]>$oth[stone]-$enlav[stone]){
$lav[stone]=$oth[stone]-$enlav[stone];
}
if($lav[exp]>$oth[exp]-$enlav[exp]){
$lav[exp]=$oth[exp]-$enlav[exp];
}
if($lav[gold]>$oth[gold]-$enlav[gold]){
$lav[gold]=$oth[gold]-$enlav[gold];
}
if($lav[gem]>$oth[gem]-$enlav[gem]){
$lav[gem]=$oth[gem]-$enlav[gem];
}
if($lav[mercury]>$oth[mercury]-$enlav[mercury]){
$lav[mercury]=$oth[mercury]-$enlav[mercury];
}
if($lav[crystal]>$oth[crystal]-$enlav[crystal]){
$lav[crystal]=$oth[crystal]-$enlav[crystal];
}
if($lav[sulfur]>$oth[sulfur]-$enlav[sulfur]){
$lav[sulfur]=$oth[sulfur]-$enlav[sulfur];
}






mysql_query("update laivynas set wood=wood+$lav[wood],stone=stone+$lav[stone],exp=exp+$lav[exp],mercury=mercury+$lav[mercury],sulfur=sulfur+$lav[sulfur],crystal=crystal+$lav[crystal],gem=gem+$lav[gem],gold=gold+$lav[gold] where user='$names'");


mysql_query("delete from journal where user='$user[username]'");

mysql_query("delete from jura where name='$user[username]'");
mysql_query("delete from laivynas where user='$user[username]'");
}
else{ mysql_query("update laivynas set hp=hp-$dmg2 where user='$user[username]'");
}
}
echo"<br/>";
$zaid=mysql_query("SELECT name FROM jura where loc='$lav[loc]' and type='game' and name!='$user[username]' and name!='$names'");
while($ro=mysql_fetch_array($zaid)){
$nn=$ro['name'];
if(($enlav[hp]-$dmg>0) and ($lav[hp]-$dmg2>0)){

mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> atakavo $names.Padar&#279; $dmg &#382;alos.$names kontraatakavo.Padar&#279; $dmg2 &#382;alos.')");
}
elseif($enlav[hp]-$dmg<=0){
mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> atakavo $names.Padar&#279; $dmg &#382;alos.Paskandino laiv&#261;')");
}
elseif($lav[hp]-$dmg2<=0){

mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> atakavo $names.Padar&#279; $dmg &#382;alos.$names kontraatakavo.Padar&#279; $dmg2 &#382;alos.Paskandino laiv&#261;')");


}}
if(($enlav[hp]-$dmg>0) and ($lav[hp]-$dmg2>0)){

mysql_query("insert into journal (user,text) values ('$names','<b>$user[username]</b> atakavo jusu laiv&#261;.Padar&#279; $dmg &#382;alos.Jus kontratakavote.Padar&#279;te $dmg2 &#382;alos.')");
}
elseif($enlav[hp]-$dmg<=0){
mysql_query("insert into journal (user,text) values ('$names','<b>$user[username]</b> atakavo jusu laiv&#261;.Padar&#279; $dmg &#382;alos.Paskandino jusu laiv&#261;')");
}
elseif($lav[hp]-$dmg2<=0){
mysql_query("insert into journal (user,text) values ('$names','<b>$user[username]</b> atakavo jusu laiv&#261;.Padar&#279; $dmg &#382;alos.Jus kontratakavote.Padar&#279;te $dmg2 &#382;alos.Paskandinote laiv&#261;.Gavote aukso:<b>$lav[gold]</b>,patirties:<b>$lav[exp]</b>,gems&#371;:<b>$lav[gem]</b>,puod&#371;:<b>$lav[mercury]</b>,sulfur&#371;:<b>$lav[sulfur]</b>,krystal&#371;:<b>$lav[crystal]</b>,akmen&#371;:<b>$lav[stone]</b>,
med&#382;io:<b>$lav[wood]</b>.
')");
}

}

$loc=$_POST['loc'];
if(!$loc){
$loc=$lav[loc];}
$ita=$_GET['ia'];
$nr=$_POST['nr'];
$loca=$lav[loc];
include_once("include/loc.php");

$dink=mysql_query("select * from laivynas where truks>'0' and loc='$loc'");
while($dinks=mysql_fetch_array($dink)){

if($dinks[truks]<time()){
mysql_query("delete from jura where name='$dinks[user]'");
mysql_query("delete from laivynas where user='$dinks[user]'");

$zaid2=mysql_query("SELECT name FROM jura where loc='$loc' and type='game'");
while($ro2=mysql_fetch_array($zaid2)){
$nn2=$ro2['name'];
mysql_query("insert into journal (user,text) values ('$nn2','<b>$dinks[user] [Sargyba]</b> Nuplauk&#279;<br/>')");}
}
}

if($loc!=="$lav[loc]"){
if($lav[ejimas]<1){
echo"<small>Nepakanka &#279;jim&#371;</small></p></card></wml>";
exit;
mysql_close($db);}

if(count($lok)=="0"){
echo"<small>Kolkas ten plaukti negalima.</small><br/><small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ti=".time()."\">Vandenynas</a></small></p></card></wml>";
exit;
mysql_close($db);}


if($loc=="a1"){
mysql_query("UPDATE users SET gem=gem+$lav[gem],gold=gold+$lav[gold],expierence=expierence+$lav[exp],sulfur=sulfur+$lav[sulfur],crystal=crystal+$lav[crystal],mercury=mercury+$lav[mercury] where username='$user[username]'");
mysql_query("UPDATE laivynas SET exp='0',gem='0',gold='0',sulfur='0',crystal='0',mercury='0',art='' where user='$user[username]'");
$kea=explode("-",$lav[art]);
$d=0;
for($m=0; $m<count($kea); $m++){
if($kea[$m]!==""){
$d++;}
}
for($n=0; $n<count($kea); $n++){
if($kea[$n]!==""){

$pot[$n]=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$kea[$n]'"));
if(!$pot[$n][name]){
include_once("artifacts/use/$kea[$n].php");
mysql_query("insert into artifacts (user,name,kiek,type) values ('$user[username]','$kea[$n]','1','$atype')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+1 where name='$kea[$n]' and user='$user[username]'");}}}


echo"<small>I&#353; vandenyno parsiplukd&#279;te:$lav[gold] aukso, $lav[exp] patirties, gems&#371; $lav[gem], sulfur&#371; $lav[sulfur], puod&#371; $lav[mercury], krystal&#371; $lav[crystal], artifakt&#371; $d.</small><br/>";}


$zaid=mysql_query("SELECT name FROM jura where loc='$lav[loc]' and type='game' and name!='$user[username]'");
while($ro=mysql_fetch_array($zaid)){
$nn=$ro['name'];
$loc2=explode("|",$lokg[$nr]);
mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> nuplauk&#279; keliu: <b>$loc2[1]</b><br/>')");
}
$zaid2=mysql_query("SELECT name FROM jura where loc='$loc' and type='game' and name!='$user[username]'");
while($ro2=mysql_fetch_array($zaid2)){
$nn2=$ro2['name'];
mysql_query("insert into journal (user,text) values ('$nn2','Atplauk&#279; <b>$user[username]</b><br/>')");}
mysql_query("UPDATE jura SET loc='$loc' where name='$user[username]'");
mysql_query("UPDATE laivynas SET loc='$loc',ejimas=ejimas-1 where user='$user[username]'");

}

$mons=mysql_fetch_array(mysql_query("SELECT * FROM jura where loc='$loc' and rod='1' and type='mob' LIMIT 1"));
if($mons[type]=="mob"){
mysql_query("insert into map (location,unit,expierence,resource,q_unit,q_res,artifact) values ('$loc','$mons[name]','999999','$mons[res]','$mons[kiek]','$mons[kres]','')");
$mid=mysql_fetch_array(mysql_query("select * from map where location='$loc'"));

echo"<small>Jus u&#382;puol&#279; monstras!.</small><br/><small><anchor>I kova!<go method=\"post\" href=\"index.php?id=$id&amp;action=laiv&amp;la=kov&amp;loc=$loc&amp;ti=".time()."\"><postfield name=\"event\" value=\"$mid[id]\"/></go></anchor></small></p></card></wml>";
exit;
mysql_close($db);}



if($lav[secury]!=="$secury"){
if($secury=="1"){
mysql_query("update laivynas set secury='1' where user='$user[username]'");

echo"<small>Jus &#303;plauk&#279;te i saugomus vandenys</small><br/>";}
if($secury=="0"){
mysql_query("update laivynas set secury='0' where user='$user[username]'");

echo"<small>Jus &#303;plauk&#279;te i nesaugomus vandenys</small><br/>";}
}

if($secury=="1"){

$pira=mysql_fetch_array(mysql_query("SELECT * FROM laivynas where loc='$loc' and pirat>'0' LIMIT 1"));

if($pira[user]){
$sarg=mysql_fetch_array(mysql_query("SELECT * FROM jura where loc='$loc' and type='sarg'"));
if(!$sarg[name]){
include_once("ships/galeo.php");
$kek=mt_rand(1, 3);
   $array = array("A","a","B","b","C","c","D","d","E","e","F","f","G","g","H","h","I","i","J","j","K","k","L","l","M","m","N","n","O","o","P","p","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z","0","1","2","3","4","5","6","7","8","9");
if($kek>0){

for($g=0; $g<7; $g++){
         $n = mt_rand(0,59);
         $snam = "$snam$array[$n]";
      }
$snam=substr("$snam",0,7);
$snam="*$snam";

 $truk=time()+600;
mysql_query("insert into laivynas (user,name,ejimas,hp,cannons,maxcan,truks,exp,loc) values ('$snam','galeo','$speed','$hp','$cannons','$maxcan','$truk','10000000','$loc')");
mysql_query("insert into jura (name,type,loc) values ('$snam','sarg','$loc')");
$zaid2=mysql_query("SELECT name FROM jura where loc='$loc' and type='game'");
while($ro2=mysql_fetch_array($zaid2)){
$nn2=$ro2['name'];
mysql_query("insert into journal (user,text) values ('$nn2','Atplauk&#279; <b>$snam [Sargyba]</b><br/>')");}

}
if($kek>1){

for($g2=0; $g2<7; $g2++){
         $n = mt_rand(0,59);
         $snam2 = "$snam2$array[$n]";
      }
$snam2=substr("$snam2",0,7);
$snam2="*$snam2";

 $truk=time()+600;
mysql_query("insert into laivynas (user,name,ejimas,hp,cannons,maxcan,truks,exp,loc) values ('$snam2','galeo','$speed','$hp','$cannons','$maxcan','$truk','10000000','$loc')");
mysql_query("insert into jura (name,type,loc) values ('$snam2','sarg','$loc')");
$zaid3=mysql_query("SELECT name FROM jura where loc='$loc' and type='game'");
while($ro3=mysql_fetch_array($zaid3)){
$nn3=$ro3['name'];
mysql_query("insert into journal (user,text) values ('$nn3','Atplauk&#279; <b>$snam2 [Sargyba]</b><br/>')");}

}
if($kek>2){

for($g3=0; $g3<7; $g3++){
         $n = mt_rand(0,59);
         $snam3 = "$snam3$array[$n]";

      }
$snam3=substr("$snam3",0,7);
$snam3="*$snam3";

 $truk=time()+600;
mysql_query("insert into laivynas (user,name,ejimas,hp,cannons,maxcan,truks,exp,loc) values ('$snam3','galeo','$speed','$hp','$cannons','$maxcan','$truk','10000000','$loc')");
mysql_query("insert into jura (name,type,loc) values ('$snam3','sarg','$loc')");
$zaid4=mysql_query("SELECT name FROM jura where loc='$loc' and type='game'");
while($ro4=mysql_fetch_array($zaid4)){
$nn4=$ro4['name'];
mysql_query("insert into journal (user,text) values ('$nn4','Atplauk&#279; <b>$snam3 [Sargyba]</b><br/>')");}

}

}

$atak=mysql_query("SELECT * FROM laivynas where loc='$loc' and truks>'0'");
while($srst=mysql_fetch_array($atak)){

$attime=time()+1200;
mysql_query("UPDATE users SET ship='$attime' where username='$pira[user]'");

$dmg=mt_rand(5, 30)*$srst[cannons];
if($pira[hp]-$dmg<=0){
mysql_query("delete from journal where user='$names'");
   $date = date("m-d H:i");
   $text = "Vandenyne buvo u&#382;pultas ir paskandintas &#363;s&#371; laivas. Tai padar&#279; $srst[user] [Sargyba].";
   mysql_query("INSERT INTO pm(nick, name, text, date, active, action) VALUES ('$pira[user]','!@SYS','$text','[$date]','0','note')");

mysql_query("delete from jura where name='$pira[user]'");
mysql_query("delete from laivynas where user='$pira[user]'");}
else {
mysql_query("update laivynas set hp=hp-$dmg where user='$pira[user]'");
$dmg2=mt_rand(5, 30)*$pira[cannons];
mysql_query("update laivynas set hp=hp-$dmg2 where user='$srst[user]'");


}

$zaid=mysql_query("SELECT name FROM jura where loc='$loc' and type='game'");
while($ro=mysql_fetch_array($zaid)){
$nn=$ro['name'];
if($pira[hp]-$dmg>0){

mysql_query("insert into journal (user,text) values ('$nn','<b>$srst[user] [Sargyba]</b> atakavo $pira[user].Padar&#279; $dmg &#382;alos.$pira[user] kontraatakavo.Padar&#279; $dmg2 &#382;alos.')");
}
else {
mysql_query("insert into journal (user,text) values ('$nn','<b>$srst[user] [Sargyba]</b> atakavo $pira[user].Padar&#279; $dmg &#382;alos.Paskandino laiv&#261;')");
}}

}}
}
$txt=mysql_query("SELECT text FROM journal where user='$user[username]' order by id");
while($text=mysql_fetch_array($txt)){
$tx=$text['text'];
if($tx!==""){

echo"<small>$tx</small><br/>";
}}
mysql_query("DELETE FROM journal where user='$user[username]'");

if($ita){
$dai=mysql_fetch_array(mysql_query("SELECT * FROM jura where id='$ita'"));
if($dai[loc]!=="$lav[loc]"){
echo"<small>Taip negalima.</small><br/><small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ti=".time()."\">Vandenynas</a></small></p></card></wml>";
exit;
mysql_close($db);}


if($dai[type]=="other"){
include_once("jura/$dai[name].php");
include_once("jurat/$dai[subtype].php");

echo"<br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ti=".time()."\">Vandenynas</a></small></p></card></wml>";
exit;
mysql_close($db);
}


if(($dai[type]=="res") or ($dai[type]=="exp") or ($dai[type]=="gold") or ($dai[type]=="art")){

if(($dai[name]) and ($dai[rod]=="1")){
include_once("ships/$lav[name].php");

if($dai[type]!=="art"){
$upgra="upg$dai[name]";


if($lav[$upgra]=="1"){
$oth[$dai[name]]=$oth[$dai[name]]*1.2;}
if($lav[$upgra]=="2"){
$oth[$dai[name]]=$oth[$dai[name]]*1.4;}
if($lav[$upgra]=="3"){
$oth[$dai[name]]=$oth[$dai[name]]*1.6;}
if($lav[$upgra]=="4"){
$oth[$dai[name]]=$oth[$dai[name]]*1.8;}
if($lav[$upgra]=="5"){
$oth[$dai[name]]=$oth[$dai[name]]*2;}



if($lav[$dai[name]]>=$oth[$dai[name]]){
echo"<small>Laivas pilnas</small><br/>";}
else {
if($dai[kiek]>$oth[$dai[name]]-$lav[$dai[name]]){
$dai[kiek]=$oth[$dai[name]]-$lav[$dai[name]];
}

if($dai[type]=="res"){
include_once("core/resources.php");
$res=resource($dai[name], $dai[kiek]);}
if($dai[type]=="gold"){
$res="aukso";}
$zaid=mysql_query("SELECT name FROM jura where loc='$lav[loc]' and type='game' and name!='$user[username]'");
while($ro=mysql_fetch_array($zaid)){
$nn=$ro['name'];
mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> paeme <b>$dai[kiek] $res</b>')");
}
mysql_query("UPDATE jura SET rod='0' where id='$ita'");
echo"<small>Paimete $dai[kiek] $res</small><br/>";
mysql_query("UPDATE laivynas SET $dai[name]=$dai[name]+$dai[kiek] where user='$user[username]'");
}}
else {
include_once("names/artifacts.php");
$res=$artifact_name[$dai[name]];
$kea=explode("-",$lav[art]);
$d=0;
for($m=0; $m<count($kea); $m++){
if($kea[$m]!==""){
$d++;}}
if($d>="$art"){
echo"<small>Laivas pilnas</small><br/>";}
else {
if($kea[0]==""){
$artf="$dai[name]-";}
else {
$artf="$lav[art]$dai[name]-";
}
$zaid=mysql_query("SELECT name FROM jura where loc='$lav[loc]' and type='game' and name!='$user[username]'");
while($ro=mysql_fetch_array($zaid)){
$nn=$ro['name'];
mysql_query("insert into journal (user,text) values ('$nn','<b>$user[username]</b> paeme <b>$dai[kiek] $res</b>')");
}
mysql_query("UPDATE jura SET rod='0' where id='$ita'");
echo"<small>Paimete $dai[kiek] $res</small><br/>";
mysql_query("UPDATE laivynas SET art='$artf' where user='$user[username]'");
}}
}}
}


$atn=mysql_query("SELECT * FROM jura where loc='$loc'");
while($atnm=mysql_fetch_array($atn)){
if($atnm[time]<time()){
$time2=time()+$atnm[time2];
mysql_query("UPDATE jura SET rod='1',time='$time2' where id='$atnm[id]'");}}

include_once("names/jura.php");
$j=0;
$itm=mysql_query("SELECT * FROM jura where loc='$loc' and rod='1'");
while($item=mysql_fetch_array($itm)){
$name=$item['name'];
$kiek=$item['kiek'];
$type=$item['type'];
$ia=$item['id'];
if($type=="gold"){
$re="Aukso";}
if($type=="art"){
include_once("names/artifacts.php");
$re=$artifact_name[$name];}
if($type=="exp"){
$re="Patirties";}
if($type=="res"){
include_once("core/resources.php");
$re=resource($name, $kiek);}
if(($type=="game") and (strtolower($user[username])!==strtolower($name)) or ($type=="sarg")){
$enla=mysql_fetch_array(mysql_query("SELECT * FROM laivynas where user='$name'"));
$laname=$jname[$enla[name]];
include_once("ships/$enla[name].php");
$hpp[$j]=round(($enla[hp]/$hp)*100);
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$name\">$laname *$name
";
if($enla[pirat]>time()){
echo"[Piratas]";}
if($type=="sarg"){
echo"[Sargyba]";}
echo"*</a><b>[$hpp[$j]%]</b></small><small><anchor>[#]<go method=\"post\" href=\"index.php?id=$id&amp;action=laiv&amp;acti=atkship&amp;la=vand&amp;time=".time()."\"><postfield name=\"name\" value=\"$name\"/></go></anchor></small><br/>";
$j++;
}

if($type=="other"){
include_once("names/jura.php");
$re=$jname[$name];

echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ia=$ia\">$re</a></small><br/>";}

if(($type=="res") or ($type=="gold") or ($type=="exp") or ($type=="art")){
echo"<small><a href=\"index.php?id=$id&amp;action=laiv&amp;la=vand&amp;ia=$ia\">$kiek $re</a></small><br/>";}
}
echo"$line<br/>";
for($l=0; $l<count($lok); $l++){
$loka=explode("|",$lok[$l]);
$mob=mysql_fetch_array(mysql_query("SELECT * FROM jura where loc='$loka[0]' and type='mob' and rod='1'"));
$moba=mysql_fetch_array(mysql_query("SELECT * FROM jura where loc='$loka[0]' and type='game'"));
echo"<small><anchor>$loka[1]<go method=\"post\" href=\"index.php?id=$id&amp;action=laiv&amp;la=vand\"><postfield name=\"loc\" value=\"$loka[0]\"/><postfield name=\"nr\" value=\"$l\"/></go></anchor>";
if(($mob[name]) or ($moba[name])){
echo"&nbsp;*";}
echo"</small><br/>";}
echo"</p><p align=\"center\">$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($sh=="kov"){
$loc=$_GET['loc'];

include_once("include/vand_battle.php");
}


?>