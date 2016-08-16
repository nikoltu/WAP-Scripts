<?php
$name = strtolower(addslashes(htmlspecialchars($_GET['name'])));
if ($name == "") {
   echo"<small>Nepasirinkote vartotojo, kurio informacij&#261; norite per&#382;i&#363;r&#279;ti.</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small><br/>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
$info = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$name' LIMIT 1"));
if (($info[status] !== "King") and ($info[status] !== "Master") and ($info[status] !== "Captain")) {
   $posts = $info[posts];
   if (($info[9] < 2) and ($posts >= 100)) {
      $update = mysql_query("UPDATE users SET status='2' WHERE username='$name' LIMIT 1");
      $info[9] = 2;
   }
   elseif (($info[9] < 3) and ($posts >= 250)) {
      $update = mysql_query("UPDATE users SET status='3' WHERE username='$name' LIMIT 1");
      $info[9] = 3;
   }
   elseif (($info[9] < 4) and ($posts >= 500)) {
      $update = mysql_query("UPDATE users SET status='4' WHERE username='$name' LIMIT 1");
      $info[9] = 4;
   }
   elseif (($info[9] < 5) and ($posts >= 1000)) {
      $update = mysql_query("UPDATE users SET status='5' WHERE username='$name' LIMIT 1");
      $info[9] = 5;
   }
   elseif (($info[9] < 6) and ($posts >= 2500)) {
      $update = mysql_query("UPDATE users SET status='6' WHERE username='$name' LIMIT 1");
      $info[9] = 6;
   }
   elseif (($info[9] < 7) and ($posts >= 5000)) {
      $update = mysql_query("UPDATE users SET status='7' WHERE username='$name' LIMIT 1");
      $info[9] = 7;
   }
   elseif (($info[9] < 8) and ($posts >= 10000)) {
      $update = mysql_query("UPDATE users SET status='8' WHERE username='$name' LIMIT 1");
      $info[9] = 8;
   }
   elseif (($info[9] < 9) and ($posts >= 25000)) {
      $update = mysql_query("UPDATE users SET status='9' WHERE username='$name' LIMIT 1");
      $info[9] = 9;
   }
}
if ($info[id] == "") {
   echo"<small>Toks vartotojas neegzistuoja.</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small><br/>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
include("names/classes.php");
if($info[deleted]=="1"){
echo"<small>&#381;aid&#279;jas i&#353;trintas</small><br/>";}
$class = $class_name[$info['class']];
echo"<small><b>Herojaus informacija</b></small><br/><small><u>$info[username]</u></small><br/><small>$class</small><br/>";
if ($info[time] > $time) {
   echo"<small>[Prisijung&#281;s]</small><br/>";
}
else {
   echo"<small>[Neprisijung&#281;s]</small><br/>";
}
echo"$line<br/><small><a href=\"pm.php?action=compose&amp;id=$id&amp;name=$info[username]\">Si&#371;sti priva&#269;i&#261; &#382;inut&#281; &gt;</a></small><br/>";
if($info[ally]!=="0"){
$ali=mysql_fetch_array(mysql_query("SELECT pavadinimas FROM ally where id='$info[ally]'"));
echo"<small>Alijansas:</small><br/><small><a href=\"index.php?action=ally&amp;id=$id&amp;idz=$info[ally]\">".htmlspecialchars($ali[pavadinimas])."</a></small><br/>";
}
else {
$ali=mysql_fetch_array(mysql_query("SELECT id,vadas FROM ally where id='$user[ally]'"));
if(strtolower($user[username])==strtolower($ali[vadas])){
echo"<small><a href=\"index.php?action=kviest&amp;id=$id&amp;idz=$user[ally]&amp;name=$info[username]\">Kviesti i alijansa</a></small><br/>";}}
if(($user[ally]==$info[ally]) and ($user[ally]>0)){

echo"<small><a href=\"index.php?action=gold&amp;id=$id&amp;name=$info[username]\">Pervesti auksa</a></small><br/>";}

echo"<small><a href=\"index.php?action=trade&amp;id=$id&amp;name=$info[username]&amp;da=siu\">Siulyti mainus</a></small><br/>";
include_once("skils/scholar.php");
if($bu>1){
echo"<small><a href=\"index.php?action=scholar&amp;id=$id&amp;name=$info[username]&amp;da=siu&amp;sm=sp\">Mokyti burto</a></small><br/>";}

echo"$line<br/>";
echo"<small>ID: $info[0]</small><br/>";
include("names/heroes.php");
$heroe = $heroe_name[$info[identify]];
echo"<img src=\"img/heroes/$info[identify].gif\" alt=\"$heroe\"/><br/>";

if ($info[ban] > $time) {
   $left = $info[ban] - $time;
   echo"<small><b>Narys u&#382;banintas!</b></small><br/><small>Liko: <b>$left</b> s</small><br/>$line<br/>";
}
echo"<small><b><u>Lygis: $info[level]</u></b></small><br/><small><b>Ataka: $info[attack]</b></small><br/><small><b>Gynyba: $info[defense]</b></small><br/><small><b>I&#353;mintis: $info[knowledge]</b></small><br/><small><b>Galia: $info[power]</b></small><br/>$line<br/>";
echo"<small>Apranga</small>";
echo"</p><p>";
$ja=0;

$art=mysql_query("SELECT * FROM artifacts where user='$info[username]' and det='1'");
while($row=mysql_fetch_array($art)){
$arti=$row['name'];
$ant=$row['ant'];
$type=$row['type'];
include_once("names/artifacts.php");
echo"<small>$artifact_name[$arti]</small>";
echo"<small>&nbsp;";
if($type=="pir1"){
echo"(ant kair&#279;s rankos)";}
if($type=="pir2"){
echo"(ant de&#353;in&#279;s rankos)";}

if($type=="misc1"){
echo"(pirmoje aksesuar&#371; vietoje)";}
if($type=="misc2"){
echo"(antroje aksesuar&#371; vietoje)";}
if($type=="misc3"){
echo"(trecioje aksesuar&#371; vietoje)";}
if($type=="misc4"){
echo"(ketvirtoje aksesuar&#371; vietoje)";
}
echo"</small>";
echo"<br/>";
$ja++;}
if($ja=="0"){
echo"<small>Aprangos n&#279;ra</small><br/>";}
echo"</p><p align=\"center\">$line<br/>";


if ($info[status] == "Master") {
   $status = "Moderatorius";
}
elseif ($info[status] == "King") {
   $status = "Administratorius";
}
elseif ($info[status] == "Captain") {
   $status = "Globalus Moderatorius";
}
else {
   $status = "Narys";
}
echo"<small><b>Forumo statusas:</b> $status</small><br/><small><b>&#381;inut&#279;s forume:</b> $info[posts]</small><br/><small><b>Temos forume:</b> $info[topics]</small><br/>$line<br/><small>Narsykl&#279;:<b>$info[onl]</b></small><br/>$info[ip]<br/>$line<br/>";

if($user[username]=="@Makatas"){
echo"kreditu:$info[kred]<br/>
<small><a href=\"index.php?action=deletintuseri&amp;id=$id&amp;name=$name\">Trinti</a></small><br/>
<small><a href=\"index.php?action=deletintuseritotaliai&amp;id=$id&amp;name=$name\">Totaliai Trinti</a></small><br/>";}
if (($user[status] == "King") or ($user[status] == "Master") or ($user[status] == "Captain")) {
   if (($status !== "King") and ($status !== "Master") and ($status !== "Captain")) {
      if ($info[ban] <= $time) {
         echo"<small><a href=\"forum.php?action=ban&amp;id=$id&amp;name=$name\">U&#382;baninti nar&#303;</a></small><br/>";
      }
      else {
         echo"<small><a href=\"forum.php?action=unban&amp;id=$id&amp;name=$name\">Atbaninti nar&#303;</a></small><br/>";
      }
      if ($info[blokas] == 0) {
         echo"<small><a href=\"index.php?action=blokas&amp;id=$id&amp;name=$name\">U&#382;blokuoti nar&#303;</a></small><br/>";
      }
      else {
         echo"<small><a href=\"index.php?action=blokas2&amp;id=$id&amp;name=$name\">Atblokuoti nar&#303;</a></small><br/>";
      }
   }
echo"$line";
}
if ($place !== "||") {
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"</p><p align=\"left\">";
   if ($k !== "") {
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>";
   }
   if ($j !== "") {
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>";
   }
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small>";
}
else {
   echo"<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}
?>