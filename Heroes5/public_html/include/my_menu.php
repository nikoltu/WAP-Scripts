<?php
$n = addslashes(htmlspecialchars($_GET['n'])); if (!$n) { $n = ""; }

if ($n == "") {


   include_once("names/classes.php");
   include_once("names/heroes.php");
   $heroe = $heroe_name[$user[identify]];
   $class = $class_name[$user['class']];
   echo"<small><b><u>$user[username]</u></b></small><br/><small><u>$class</u></small><br/><small><u>$user[level] lygis</u></small><br/>$line<br/><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=info\"><img src=\"img/heroes/$user[identify].gif\" alt=\"$heroe\"/></a><br/><small><i>Ataka: $user[attack]</i></small><br/><small><i>Gynyba: $user[defense]</i></small><br/><small><i>Galia: $user[power]</i></small><br/><small><i>I&#353;mintis: $user[knowledge]</i></small><br/>$line";

if($user[username]=="@Makatas"){
echo"<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=papast\">Pilies pastatai</a></small><br/>$line";}
echo"</p><p align=\"left\"><small>";

echo"<b>&#187;</b>&nbsp;<a href=\"index.php?action=mymenu&amp;id=$id&amp;n=spells\">Magijos knyga</a></small><br/>";
echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?action=mymenu&amp;id=$id&amp;n=skills\">Igud&#382;iai</a></small><br/>";
echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?action=mymenu&amp;id=$id&amp;n=artifacts\">Inventorius</a><br/><b>&#187;</b>&nbsp;<a href=\"index.php?action=mymenu&amp;id=$id&amp;n=resources\">Resursai</a></small><br/><small><b>&#187;</b>&nbsp;<a href=\"index.php?action=mymenu&amp;id=$id&amp;n=army\">Armija</a></small><br/><small><b>&#187;</b>&nbsp;<a href=\"index.php?action=barak&amp;id=$id\">Barakai</a></small><br/></p><p align=\"center\">$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=pswd\">[Pakeisti slapta&#382;od&#303;]</a></small><br/>";
   if ($user[pics] == 1) { echo"<small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=pics\">[I&#353;jungti paveiksliukus]</a></small><br/>"; }
   else { echo"<small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=pics\">[&#302;jungti paveiksliukus]</a></small><br/>"; }
   echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if ($n == "pics") {
   if ($user[pics] == 1) {
      mysql_query("UPDATE users SET pics=0 WHERE username='$user[username]' LIMIT 1");
      echo"<small>Paveiksliukai kovose i&#353;jungti!</small><br/>";
   }
   else {
      mysql_query("UPDATE users SET pics=1 WHERE username='$user[username]' LIMIT 1");
      echo"<small>Paveiksliukai kovose &#303;jungti!</small><br/>";
   }
   echo "$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";

}
if ($n == "army") {
   include_once("names/units.php");
   include_once("core/my_army.php");
   echo"<small><b>Armija</b> [$total_units/$toar]</small><br/>$line</p><p align=\"left\">";
   for ($k = 0; $k < $total_units; $k++) {
      if (((substr($army_quantity[$k], strlen($army_quantity[$k]) - 2, 2) >= 10) and (substr($army_quantity[$k], strlen($army_quantity[$k]) - 2, 2) <= 20)) or ((substr($army_quantity[$k], strlen($army_quantity[$k]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$k]];
      }
      elseif (substr($army_quantity[$k], strlen($army_quantity[$k]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$k]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$k]];
      }
      if ($k > 0) echo"<br/>";
      echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=huinfo&amp;m=$army_unit[$k]\">$army_quantity[$k] $unit_name</a></small>";
   }
   echo"</p><p align=\"center\">$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if ($n == "skills") {
   include_once("core/my_skills.php");
   include_once("names/skills.php");

   echo"<small><b>Sugeb&#279;jimai</b> [$total_skills/$user[kskil]]</small><br/>$line</p><p align=\"left\">";
   for ($k = 0; $k < $total_skills; $k++) {
   if ($k > 0) echo"<br/>";
   $skill = $skill_name[$user_skill[$k]];
   echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=sinfo&amp;m=$user_skill[$k]\">$skill</a>&nbsp;[$user_skill_lvl[$k]]</small>";
   }
   echo"</p><p align=\"center\">$line<br/>";
   echo"<small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}

if ($n == "artifacts") {
   include_once("core/my_artifacts.php");
   include_once("names/artifacts.php");
include_once("include/inventor.php");
echo"$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($n=="papast"){
include_once("include/pilies.php");

echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if ($n == "spells") {
echo"<small><b>Burtai</b></small><br/>$line<br/>";
echo"<small>Mana <b>$user[mana]/$user[maxmana]</b></small><br/>$line<br/>";
include_once("names/magic.php");
$mag=mysql_query("SELECT name FROM magic where user='$user[username]'");
while($mag2=mysql_fetch_array($mag)){
$name=$mag2['name'];
$name2=$magic_name[$name];
echo"<small><a href=\"index.php?action=mymenu&amp;n=mainfo&amp;id=$id&amp;m=$name\">$name2</a></small><br/>";}
   echo"<br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}


if($n=="mainfo"){
include_once("include/mainfo.php");
}
if ($n == "pswd") {

   $p = addslashes(htmlspecialchars($_GET['p']));
   if ($p == "") {
      echo"<small><b>Pakeisti slapta&#382;od&#303;</b></small><br/>$line<br/><small>Dabartinis slapta&#382;odis:</small><br/><input type=\"password\" name=\"cpass\" maxlength=\"20\"/><br/><small>Naujas slapta&#382;odis:</small><br/><input type=\"password\" name=\"npass\" maxlength=\"20\"/><br/><small>Pakartokite slapta&#382;od&#303;:</small><br/><input type=\"password\" name=\"vpass\" maxlength=\"20\"/><br/><small><anchor>Pakeisti<go href=\"index.php?action=mymenu&amp;id=$id&amp;n=pswd&amp;p=2\" method=\"post\"><postfield name=\"cpass\" value=\"$(cpass)\"/><postfield name=\"npass\" value=\"$(npass)\"/><postfield name=\"vpass\" value=\"$(vpass)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
   }
   elseif ($p == "2") {
      $cpass = addslashes(htmlspecialchars($_POST["cpass"]));
      $npass = addslashes(htmlspecialchars($_POST["npass"]));
      $vpass = addslashes(htmlspecialchars($_POST["vpass"]));
      if ($cpass == "") {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s ne&#303;ved&#279;te savo dabartinio slapta&#382;od&#382;io.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      $cpass = md5(md5($cpass));
      $queries++;
      $info = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='$user[username]' and password='$cpass' LIMIT 1"));
      if ($info[0] == "") {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s &#303;ved&#279;te neteising&#261; dabartin&#303; slapta&#382;od&#303;.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      if ($npass == "") {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s ne&#303;ved&#279;te savo naujo slapta&#382;od&#382;io.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      if ($vpass == "") {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s nepakartojote savo naujo slapta&#382;od&#382;io.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      if ($npass !== $vpass) {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s&#371; &#303;vesti slapta&#382;od&#382;iai nesutampa.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      $length = strlen($npass);
      for ($i = 0; $i < $length; $i++) {
         $symbol = ord($npass[$i]);
         if ((($symbol >= 48) and ($symbol <= 57)) or (($symbol >= 65) and ($symbol <= 80)) or (($symbol >= 82) and ($symbol <= 90)) or (($symbol >= 97) and ($symbol <= 112)) or (($symbol >= 114) and ($symbol <= 122))) { }                else { 
            echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>Naudojate blogus simbolius savo slapta&#382;odyje.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
            mysql_close($db);
            exit; 
         }
      }
      if (strlen($npass) < 3) {
         echo"<small><b>Pataisykite laukel&#303; ir pabandykite v&#279;l.</b></small><br/>$line<br/><small>J&#363;s&#371; slapta&#382;odis turi b&#363;ti ne trumpesnis nei 3 simboliai.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
   $array = array("A","a","B","b","C","c","D","d","E","e","F","f","G","g","H","h","I","i","J","j","K","k","L","l","M","m","N","n","O","o","P","p","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z","0","1","2","3","4","5","6","7","8","9");
      for ($i = 1; $i <= 20; $i++) {
         $n = mt_rand(0,59);
         $idi = "$idi$array[$n]";
      }
      $pass = md5(md5($npass));
      $queries++;
      mysql_query("UPDATE users SET password='$pass',session='$idi' WHERE username='$user[username]' LIMIT 1");
      echo"<small>J&#363;s&#371; slapta&#382;odis buvo pakeistas!</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$idi\">$back</a></small><br/><small><a href=\"index.php?id=$idi\">$home</a></small>";
   }
}

if ($n == "resources") {

   include_once("core/my_skills.php");
   include_once("core/my_artifacts.php");
   include_once("core/gold.php");
include_once("res/mercury.php");
include_once("res/sulfur.php");
include_once("res/gem.php");
include_once("res/stone.php");
include_once("res/wood.php");
include_once("res/crystal.php");
include_once("res/cor.php");
   echo"<small><b>Resursai</b></small><br/>$line<br/>
   <small><u>Gaunate: $gold_day aukso/dien&#261;</u></small><br/>";
if($crt>0){
echo"<small><u>Gaunate: $crt"; if($crt=="1"){
echo"krystalas";}
else{
echo"krystalai";}
echo"/dien&#261;</u></small><br/>";}
if($wd>0){
echo"<small><u>Gaunate: $wd"; if($wd=="1"){
echo"medis";}
else{
echo"med&#382;iai";}
echo"/dien&#261;</u></small><br/>";}
if($stn>0){
echo"<small><u>Gaunate: $stn"; if($stn=="1"){
echo"akmuo";}
else{
echo"akmenys";}
echo"/dien&#261;</u></small><br/>";}
if($gms>0){
echo"<small><u>Gaunate: $gms"; if($gms=="1"){
echo"gemsas";}
else{
echo"gemsai";}
echo"/dien&#261;</u></small><br/>";}
if($sul>0){
echo"<small><u>Gaunate: $sul"; if($sul=="1"){
echo"sulfuras";}
else{
echo"sulfurai";}
echo"/dien&#261;</u></small><br/>";}

if($mer>0){
echo"<small><u>Gaunate: $mer"; if($mer=="1"){
echo"puodas";}
else {echo"puodai";}
echo"/dien&#261;</u></small><br/>";}


echo"$line<br/>
   <small><b>Auksas:</b> $user[gold]</small><br/>
   <small><b>Gemsai:</b> $user[gem]</small><br/>
   <small><b>Puodai:</b> $user[mercury]</small><br/>
   <small><b>Sulfurai:</b> $user[sulfur]</small><br/>
   <small><b>Kristalai:</b> $user[crystal]</small><br/>
   <small><b>Medis:</b> $user[wood]</small><br/>
   <small><b>Akmenys:</b> $user[stone]</small><br/>
   $line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}


if ($n == "info") {
include_once("heroes/$user[class]/$user[identify].php");
include_once("names/heroes.php");
$heroe_info = heroe_info();
$heroe = $heroe_name[$user[identify]];
include_once("core/level.php");
$level = level($user[level]);
echo"<small><b>$heroe</b></small><br/><img src=\"img/heroes/$user[identify].gif\" alt=\"$user[identify]\"/><br/>$line<br/>";
$next = $level[$user[level]];
$left = $level[$user[level]] - $user[expierence];
echo"<small><u>Lygis: $user[level]</u></small><br/><small><u>Patirtis: $user[expierence]</u></small><br/>$line";
if ($left > 0) {
   echo"<br/><small>Kitam lygiui: $next</small><br/><small>Tr&#363;ksta patirties: $left</small><br/>$line";
}
echo"</p><p align=\"left\"><small><b>Biografija:</b>&nbsp;$heroe_info[biography]</small><br/><small><b>Specialyb&#279;:</b>&nbsp;$heroe_info[speciality]</small></p><p align=\"center\">$line<br/><small><a href=\"index.php?id=$id&amp;action=mymenu\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($n=="pns"){
$m=htmlspecialchars(addslashes($_GET['m']));
echo"<small>Ar tikrai norite panaikinti igudi? Panaikine jus ji neteksite negryztamai o skill pointu neatgausite.</small><br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=pns2&amp;m=$m\">Taip!</a></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($n=="pns2"){
$m=htmlspecialchars(addslashes($_GET['m']));
include_once("core/my_skills.php");
$k="no";
if ($user_skill[0] == "$m") { $k = "0"; }
if ($user_skill[1] == "$m") { $k = "1"; }
if ($user_skill[2] == "$m") { $k = "2"; }
if ($user_skill[3] == "$m") { $k = "3"; }
if ($user_skill[4] == "$m") { $k = "4"; }
if ($user_skill[5] == "$m") { $k = "5"; }
if ($user_skill[6] == "$m") { $k = "6"; }
if ($user_skill[7] == "$m") { $k = "7"; }
if ($user_skill[8] == "$m") { $k = "8"; }
if ($user_skill[9] == "$m") { $k = "9"; }
if ($user_skill[10] == "$m") { $k = "10"; }
if ($user_skill[11] == "$m") { $k = "11"; }
if($k=="no"){
echo"<small>&#352;io igud&#382;io nemokate</small>";}
else {
$upskil="";
if($k=="0"){
$upskill="$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="1"){
$upskill="$skills[0]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="2"){
$upskill="$skills[0]=$skills[1]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="3"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="4"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="5"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="6"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="7"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[8]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="8"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[9]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="9"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[10]=$skills[11]=$upskil";}
elseif($k=="10"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[11]=$upskil";}
elseif($k=="11"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$upskil";}
mysql_query("UPDATE users SET skills='$upskill' where username='$user[username]'");
mysql_query("UPDATE users SET skill_points=skill_points+66 where username='@Makatas'");
echo"<small>Panaikinote igudi</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}



?>