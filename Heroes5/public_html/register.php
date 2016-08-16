<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
setcookie("cokeia","taip",time()+999999999);
$i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
if($i=="6"){
setcookie("regaps","taip",time()+999999999);}

print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("ip.php");
include_once("core.php");
echo"<wml><card id=\"heroes\" title=\"Registracija\"><p align=\"center\">";
include_once("mukaka.php");
$rio=explode(".",$_SERVER['HTTP_HOST']);
if($rio[0]!=="dmnx"){
$ref = $rio[0];}

if ($i > 0) {
   $name = addslashes(htmlspecialchars($_POST['name'])); if (!$name) { $name = ""; }
   if ($name == "") {
      echo"<small>Ne&#303;vestas herojaus vardas.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   $check = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='$name' LIMIT 1"));
   if ($check[0] > 0) {
      echo"<small>&#352;is vardas jau u&#382;registruotas.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (eregi("y","$name")) {
      echo"<small>Herojaus varde negali buti y raides.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (is_numeric(substr($name,0,1))) {
      echo"<small>Herojaus vardas negali prasid&#279;ti skai&#269;iu.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($name) < 3) {
      echo"<small>Herojaus vardas turi b&#363;ti bent i&#353; trij&#371; simboli&#371;.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($name) > 20) {
      echo"<small>Herojaus vardas negali b&#363;ti ilgesnis nei dvide&#353;imt simboli&#371;.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   for ($k = 0; $k < strlen($name); $k++) {
      $symbol = ord($name[$k]);
      if ((($symbol >= 48) and ($symbol <= 57)) or (($symbol >= 65) and ($symbol <= 80)) or (($symbol >= 82) and ($symbol <= 90)) or (($symbol >= 97) and ($symbol <= 112)) or (($symbol >= 114) and ($symbol <= 122))) { }
      else {
         echo"<small>Naudojate blogus simbolius savo herojaus varde.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
   }
}

if ($i > 2) {
   $class = addslashes(htmlspecialchars($_POST['class'])); if (!$class) { $class = ""; }
   if (!file_exists("heroes/$class")) {
      echo"<small>Neegzistuojanti herojaus klas&#279;.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
}

if ($i > 3) {
   $identify = addslashes(htmlspecialchars($_POST['identify'])); if (!$identify) { $identify = ""; }
   if (!file_exists("heroes/$class/$identify.php")) {
      echo"<small>Neegzistuojantis herojus.</small><br/>$line<br/><small><a href=\"register.php?ref=$ref\">$back</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
}

if ($i > 5) {
   $code = addslashes(htmlspecialchars($_POST['code']));
   $pass = addslashes(htmlspecialchars($_POST['pass']));
   $vpass = addslashes(htmlspecialchars($_POST['vpass']));
$tikr=mysql_fetch_array(mysql_query("SELECT * FROM reg where code='$code' and act='0'"));
if ($pass == "") {
      echo"<small>Ne&#303;vestas slapta&#382;odis.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if ($vpass == "") {
      echo"<small>Nepakartotas slapta&#382;odis.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($pass) < 3) {
      echo"<small>Slapta&#382;odis turi b&#363;ti bent i&#353; trij&#371; simboli&#371;.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($pass) > 40) {
      echo"<small>Slapta&#382;odis negali b&#363;ti ilgesnis nei keturiasde&#353;imt simboli&#371;.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if ($pass !== $vpass) {
      echo"<small>Slapta&#382;od&#382;iai nesutampa.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
   mysql_close($db);
   exit;
}
   if ($pass == $name) {
      echo"<small>Nenaudokite vietoj slapta&#382;od&#382;io savo herojaus vardo.</small><br/>$line<br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
}

if ($i == "") {
   echo"<small><u>Labai atid&#382;iai i&#353;sirinkite heroj&#371; - v&#279;liau jo negal&#279;site pakeisti ir nuo pasirinkimo labai priklausys &#382;aidimo eiga.</u></small><br/>$line<br/><small><b>Herojaus vardas*:</b></small><br/><input type=\"text\" name=\"name\" maxlength=\"20\"/><br/><small><anchor>$next<go href=\"register.php?m=$m&amp;i=2&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/></go></anchor></small><br/>$line<br/><small>Pastaba: * naudokite tik raides ir skai&#269;ius.</small><br/>$line<br/><small>&#381;ingsnis: 1 i&#353; 5</small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}

if ($i == "2") {
   echo"<small>Pasirinkite herojaus klas&#281;:</small><br/><select name=\"class\">";
   include_once("names/classes.php");
   if ($handle = opendir("heroes/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php") {
            $class = $class_name[$file];
            echo"<option value=\"$file\">$class</option>";
         }
      }
      closedir($handle);
   }
   echo"</select><br/><small><anchor>$next<go href=\"register.php?m=$m&amp;i=3&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/></go></anchor></small><br/><small><a href=\"register.php?ref=$ref\">$back</a></small><br/>$line<br/><small>&#381;ingsnis: 2 i&#353; 5</small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}

if ($i == "3") {
   include_once("names/heroes.php");
   echo"<small>Pasirinkite heroj&#371;:</small><br/><select name=\"identify\">";
   if ($handle = opendir("heroes/$class")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php") {
            $file = explode(".", $file);
            $heroe = $heroe_name[$file[0]];
            echo"<option value=\"$file[0]\">$heroe</option>";
         }
      }
      closedir($handle);
   }
   echo"</select><br/><small><anchor>$next<go href=\"register.php?m=$m&amp;i=4&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small><br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=2&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/></go></anchor></small><br/>$line<br/><small>&#381;ingsnis: 3 i&#353; 5</small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}

if ($i == "4") {
   include_once("heroes/$class/$identify.php");
   include_once("names/heroes.php");
   include_once("names/skills.php");
   $basic_primary_skills = basic_primary_skills();
   $basic_skills = basic_skills();
   $heroe_info = heroe_info();
   $heroe = $heroe_name[$identify];
   echo"<small><b>$heroe</b></small><br/><img src=\"img/heroes/$identify.gif\" alt=\"$heroe\"/><br/><small><i>Ataka: $basic_primary_skills[attack]</i></small><br/><small><i>Gynyba: $basic_primary_skills[defense]</i></small><br/><small><i>Galia: $basic_primary_skills[power]</i></small><br/><small><i>I&#353;mintis: $basic_primary_skills[knowledge]</i></small><br/>$line</p><p align=\"left\"><small><b>Biografija:</b>&nbsp;$heroe_info[biography]</small><br/><small><b>Specialyb&#279;:</b>&nbsp;$heroe_info[speciality]</small><br/><small><b>Sugeb&#279;jimai:</b>&nbsp;";
   for ($u = 0; $u < count($basic_skills); $u++) {
      if ($u > 0) { echo", "; }
      $skill = explode("|", $basic_skills[$u]);
      echo"".$skill_name[$skill[0]]." ($skill[1])";
   }echo".</small><br/><small><b>Armija:</b>&nbsp;$heroe_info[army]</small><br/><small><b>Papildoma:</b>&nbsp;$heroe_info[extra]</small></p><p align=\"center\">$line<br/><small><anchor>$next<go href=\"register.php?m=$m&amp;i=5&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small><br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=3&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/></go></anchor></small><br/>$line<br/><small>&#381;ingsnis: 4 i&#353; 5</small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}

if ($i == "5") {
if($ref==""){
$rew[id]=1;}
else{

$rew=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$ref' LIMIT 1"));}


echo"<small><b>Slapta&#382;odis*:</b></small><br/><input type=\"password\" name=\"pass\" maxlength=\"40\"/><br/><small><b>Pakartokite Slapta&#382;od&#303;*:</b></small><br/><input type=\"password\" name=\"vpass\" maxlength=\"40\"/><br/>$line<br/><small>Pastaba: * patariame slapta&#382;odyje naudoti did&#382;i&#261;sias bei ma&#382;i&#261;sias raides ir skai&#269;ius. Naudoti ne trumpesn&#303; nei i&#353; a&#353;tuoni&#371; simboli&#371;. Slapta&#382;od&#382;iai yra koduojami, tad nepamir&#353;kite jo.</small><br/>$line<br/><small><anchor>$next<go href=\"register.php?m=$m&amp;i=6&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/><postfield name=\"code\" value=\"$(code)\"/><postfield name=\"pass\" value=\"$(pass)\"/><postfield name=\"vpass\" value=\"$(vpass)\"/></go></anchor></small><br/><small><anchor>$back<go href=\"register.php?m=$m&amp;i=4&amp;ref=$ref\" method=\"post\"><postfield name=\"name\" value=\"$(name)\"/><postfield name=\"class\" value=\"$(class)\"/><postfield name=\"identify\" value=\"$(identify)\"/></go></anchor></small><br/>$line<br/><small>&#381;ingsnis: 5 i&#353; 5</small><br/>$line<br/><small><a href=\"index.php?ref=$ref\">$home</a></small>";
}

if ($i == "6") {
   mysql_query("UPDATE sms SET text='$name', type='registered' WHERE id='$validate[0]' LIMIT 1");
   $array = array("A","a","B","b","C","c","D","d","E","e","F","f","G","g","H","h","I","i","J","j","K","k","L","l","M","m","N","n","O","o","P","p","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z","0","1","2","3","4","5","6","7","8","9");
   while ($session == "") {
      for ($i = 1; $i <= 20; $i++) {
         $n = mt_rand(0,59);
         $id = "$id$array[$n]";
      }
      $check = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE session='$id' LIMIT 1"));
      if ($check[0] > 0) $id = "";
         else break;
   }
   $pass = md5(md5($pass));
   @$day = mysql_fetch_array(mysql_query("SELECT day FROM time LIMIT 1"));
   if ($day[0] == "") {
      $day[0] = 1;
      $day[1] = time() + $day_length;
      mysql_query("INSERT INTO time(day, time) VALUES ('$day[0]','$day[1]')");
   }
   include_once("heroes/$class/$identify.php");
   $basic_primary_skills = basic_primary_skills();
   $time = time();
   $spell_points = $basic_primary_skills[knowledge] * 10;
   $basic_skills = basic_skills();
   $skills = "$basic_skills[0]=$basic_skills[1]=$basic_skills[2]=$basic_skills[3]=$basic_skills[4]=$basic_skills[5]=$basic_skills[6]=$basic_skills[7]";
   $artifacts = "=======";
$basic_magic=basic_magic();
mysql_query("insert into magic (user,name) values ('$name','$basic_magic[0]')");
mysql_query("insert into war (user,machine,hp) values ('$name','catapulta','1000')");

   mysql_query("INSERT INTO users(username, password, session, class, identify, attack, defense, power, knowledge, spell_points, day, reg, login, skills, artifacts, online) VALUES ('$name','$pass','$id','$class','$identify','$basic_primary_skills[attack]','$basic_primary_skills[defense]','$basic_primary_skills[power]','$basic_primary_skills[knowledge]','$spell_points','$day[0]','$time','$time','$skills','$artifacts','$time')");
$fnid=mysql_fetch_array(mysql_query("SELECT id FROM users where username='$name'"));

if(($class=="wizard") or ($class=="alchemist")){
$pilty="tower";}
if(($class=="overlord") or ($class=="warlock")){
$pilty="dungeon";}
if(($class=="knight") or ($class=="cleric")){
$pilty="castle";}
if(($class=="barbarian") or ($class=="battle_mage")){
$pilty="stronghold";}
if(($class=="beastmaster") or ($class=="witch")){
$pilty="fortress";}
if(($class=="ranger") or ($class=="druid")){
$pilty="rampart";}
if(($class=="heretic") or ($class=="demoniac")){
$pilty="inferno";}
if(($class=="necromancer") or ($class=="death_knight")){
$pilty="necropolis";}
if(($class=="elementalist") or ($class=="planeswalker")){
$pilty="magic";}




   $date = date("m-d H:i");


   mysql_query("INSERT INTO pm(nick, name, text, date, active) VALUES ('$name','@Makatas','Sveiki atvyke &#303; Heroj&#371; pasaul&#303;. Prie&#353; prad&#279;dami &#382;aisti butinai perskaitykite informacija ir taisykles. Jei kas neai&#353;ku galite pasiteirauti priva&#269;ia &#382;inute administratoriaus, <b>@Makatas</b>.S&#279;km&#279;s &#382;aidime! :)','[$date]','0')");

mysql_query("UPDATE reg SET act='1' where code='$code'");
   $name = strtolower($name);
   $basic_army = basic_army();
   for ($i = 0; $i < count($basic_army); $i++) {
      $unit = explode("|", $basic_army[$i]);
      include_once("units/$unit[0].php");
      $q = explode("-", $unit[1]);
      $qq = mt_rand($q[0], $q[1]);
      $unit_info[attack] = $unit_info[attack] + $basic_primary_skills[attack];
      $unit_info[defense] = $unit_info[defense] + $basic_primary_skills[defense];
      @$unit_info = @buy_unit($unit[0], $unit_info);
      mysql_query("INSERT INTO army(username, unit, quantity, attack, defense, min_damage, max_damage, health) VALUES ('$name','$unit[0]','$qq','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]')");
   }
include("ip.php");
$unik=mysql_fetch_array(mysql_query("SELECT * FROM refas where ref='$koks_ip' and refa='$browser' and user='$ref'"));
if(!$unik[user]){
mysql_query("insert into refas (ref,refa,user) values ('$koks_ip','$browser','$ref')");
mysql_query("UPDATE users SET kred=kred+0.2,atve=atve+1 where username='$ref'");}

   echo"<small><b>Herojus s&#279;kmingai u&#382;registruotas!</b></small><br/>$line<br/><small><a href=\"index.php?m=$m&amp;id=$id\">&gt;&gt;&gt;</a></small>";

   }
echo"</p></card></wml>";
mysql_close($db);
?>
