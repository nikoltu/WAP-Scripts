<?php
if ($object[info] == "") {
   $bb = mt_rand(0, count($b) - 1);
   $bm = mt_rand($bmin, $bmax);
   $object[info] = "$bb|$bm";
}
$inf = explode("|", $object[info]);
$clas = $b[$inf[0]];
include_once("names/classes.php");
$usr=strtolower($user[username]);
$raktai=@file_get_contents("counter/$usr.txt");
$ke=explode("|",$raktai);
if(($prize=="dark_key") and ($ke[0]=="1") or ($prize=="air_key") and ($ke[1]=="1") or ($prize=="ice_key") and ($ke[2]=="1") or ($prize=="fire_key") and ($ke[3]=="1") or ($prize=="star_key") and ($ke[4]=="1")){
echo"<small>Mano u&#382;duot&#303; jau ivykdei</small></p></card></wml>";exit;} 
$class = $class_name2[$clas];
echo"<small>$head</small><br/>$line<br/><small><b>U&#382;duotis:</b></small><br/>";
$lv=$inf[1]+1;

echo"<small><i>Nu&#382;udyti bent $lv lygio $class ir sugr&#303;&#382;ti ne v&#279;liau, nei u&#382; savait&#279;s, pasiimti atlyg&#303;.</i></small><br/>";
$winner=mysql_fetch_array(mysql_query("select * from wins where user='$user[username]' and lvl>$inf[1] and class='$clas' LIMIT 1"));
if($winner[user]){
$ke2=explode("|",$raktai);

if($prize=="dark_key"){
$keke="1|$ke2[1]|$ke2[2]|$ke2[3]|$ke2[4]";}
if($prize=="air_key"){
$keke="$ke2[0]|1|$ke2[2]|$ke2[3]|$ke2[4]";}
if($prize=="ice_key"){
$keke="$ke2[0]|$ke2[1]|1|$ke2[3]|$ke2[4]";}
if($prize=="fire_key"){
$keke="$ke2[0]|$ke2[1]|$ke2[2]|1|$ke2[4]";}
if($prize=="star_key"){
$keke="$ke2[0]|$ke2[1]|$ke2[2]|$ke2[3]|1";}
$usr=strtolower($user[username]);
@file_put_contents("counter/$usr.txt","$keke");
mysql_query("delete from wins where user='$user[username]' and lvl>$inf[1] and class='$clas'");
mysql_query("delete from objects where object='$m'");
$prz=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$prize'"));
if(!$prz[name]){
mysql_query("insert into artifacts (user,name,kiek,type) values ('$user[username]','$prize','1','key')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+1 where name='$prize' and user='$user[username]'");}
include_once("names/artifacts.php");

      echo"$line<br/><small><b>J&#363;s &#303;vykd&#279;te u&#382;duot&#303;!</b></small><br/><small><u>Gavote: $artifact_name[$prize]</u></small><br/>";

}


?>