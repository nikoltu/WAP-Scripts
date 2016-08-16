<?php
include_once("include/a2.php");
include_once("include/a3.php");
if($action=="aukc"){
if($user[level]<5){
echo"<small>I aukciona galima nuo 5lygio</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
else {
echo"<small><a href=\"index.php?action=aukc2&amp;id=$id\">Armijos aukcionas</a><br/><a href=\"index.php?action=aukca&amp;id=$id\">Artifaktu aukcionas</a><br/><a href=\"index.php?action=aukcr&amp;id=$id\">Resursu aukcionas</a><br/>";
if($user[username]=="@Makatas"){
echo"<a href=\"index.php?id=$id&amp;action=aukc20\">Patvirtinti armijos prekes</a><br/>";
echo"<a href=\"index.php?id=$id&amp;action=aukca20\">Patvirtinti artifaktu prekes</a><br/>";
echo"<a href=\"index.php?id=$id&amp;action=aukcr20\">Patvirtinti resursu prekes</a><br/>";}
echo"$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}}
if($action=="aukc2"){
if($user[level]<5){
echo"<small>I aukciona galima nuo 5lygio</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
else {
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where type='army' and patv='1'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$find=$_POST['find'];
$nuo=$psl*3-3;
$iki=3;
echo"<small>Ie&#353;koti</small><br/><select name=\"find\">";

if ($handle = opendir("units/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php" && $file != "$user_skill[0].php" && $file != "$user_skill[1].php" && $file != "$user_skill[2].php" && $file != "$user_skill[3].php" && $file != "$user_skill[4].php" && $file != "$user_skill[5].php" && $file != "$user_skill[6].php" && $file != "$user_skill[7].php" && $file != "leadership1.php" && $file != "leadership2.php" && $file != "scholar2.php" && $file != "knowledge2.php" && $file != "strategy2.php") {
include_once("names/units.php");
            $file = explode(".", $file);
            $fin = $unit_name_p1[$file[0]];
echo"<option value=\"$file[0]\">$fin</option>";
         }
      }
      closedir($handle);
   }

echo"</select><br/><small><anchor>Ie&#353;koti<go method=\"post\" href=\"index.php?action=aukc2&amp;id=$id\"><postfield name=\"find\" value=\"$(find)\"/></go></anchor></small><br/>$line<br/>";

if(!$find){
$pre=mysql_query("SELECT * FROM aukcionas where type='army' and patv='1' order by id desc LIMIT $nuo,$iki");}
else{
$pre=mysql_query("SELECT * FROM aukcionas where type='army' and patv='1' and unit='$find' order by id desc LIMIT $nuo,$iki");}

while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
$oher=$pre2['other'];
$other=explode("-",$oher);
$exp=$pre2['exp'];
$q=$other[0];
$res=$other[1];
   if ($res == "stone") {
$res1="Akmuo";
$res2="Akmen&#303;";
$res3="Akmenys";
$res4="Akmenys";
$res5="Akmen&#371;";

   }
   elseif ($res == "wood") {
$res1="Medis";
$res2="Med&#303;";
$res3="Med&#382;iai";
$res4="Med&#382;ius";
$res5="Med&#382;i&#371;";
   }
   elseif ($res == "mercury") {
$res1="Puodas";
$res2="Puod&#261;";
$res3="Puodai";
$res4="Puodus";
$res5="Puod&#371;";
   }
   elseif ($res == "gem") {
$res1="Gemsas";
$res2="Gems&#261;";
$res3="Gemsai";
$res4="Gemsus";
$res5="Gems&#371;";
   }
   elseif ($res == "sulfur") {
$res1="Sulfuras";
$res2="Sulfur&#261;";
$res3="Sulfurai";
$res4="Sulfurus";
$res5="Sulfur&#371;";
   }
   elseif ($res == "crystal") {
$res1="Kristalas";
$res2="Kristal&#261;";
$res3="Kristalai";
$res4="Kristalus";
$res5="Kristal&#371;";
   }
if (((substr($q, strlen($q) - 2, 2) >= 10) and (substr($q, strlen($q) - 2, 2) <= 20)) or ((substr($q, strlen($q) - 1, 1) == "0"))) {
      $resource = $res5;
   }
   elseif (substr($q, strlen($q) - 1, 1) == "1") {
      $resource=$res1;
   }
   else {
      $resource=$res3;
   }

include("units/$preke[1].php");
include_once("names/units.php");
include_once("names/special.php");
if (((substr($preke[0], strlen($preke[0]) - 2, 2) >= 10) and (substr($preke[0], strlen($preke[0]) - 2, 2) <= 20)) or ((substr($preke[0], strlen($preke[0]) - 1, 1) == "0"))) {
      $preke2 = $unit_name_p3[$preke[1]];
   }
   elseif (substr($preke[0], strlen($preke[0]) - 1, 1) == "1") {
      $preke2 = $unit_name_s1[$preke[1]];
   }
   else {
      $preke2 = $unit_name_p1[$preke[1]];
   }
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;name=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $preke2</b></small><br/><img src=\"img/units/$preke[1].gif\" alt=\"$preke2\"/><br/><small><i>Ataka: $unit_info[attack]</i></small><br/><small><i>Gynyba: $unit_info[defense]</i></small><br/>";
echo"<small><i>Gyvyb&#279;s: $unit_info[health]</i></small><br/>";
if (($unit_info[min] == $unit_info[max])) {
      $d1 = "$unit_info[min]";
   }
   else {
      $d1 = "$unit_info[min]-$unit_info[max]";
   }
echo"<small><i>&#381;ala: $d1</i></small><br/>";
if (($unit_info[shoot] == "1") or ($unit_info[spec] !== "") or ($unit_info[spec2] !== "")) {
      echo"<small><i><u>Papildoma:</u></i></small><br/>";
      if ($unit_info[shoot] == "1") {
         echo"<small><i>&#353;audo</i></small><br/>";
      }
      if ($unit_info[spec] !== "") {
         $special = $special_name[$unit_info[spec]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec2] !== "") {
         $special = $special_name[$unit_info[spec2]];
         echo"<small><i>$special</i></small><br/>";
      }
   }
echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small>";
if($q>0){
echo"<small> ir <b>$q $resource</b></small>";}
echo"<br/><small>Armijos sukaupta patirtis:<b>$exp</b></small><br/><small><a href=\"index.php?action=aukc4&amp;id=$id&amp;idz=$idz\">Pirkti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukc50&amp;id=$id\">Mano prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukc5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukc2&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukc2&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}}
if($action=="aukc5"){
$usr=strtolower($user[username]);
$dele=mysql_query("SELECT unit,quantity FROM army where username='$usr'");
while($dele2=mysql_fetch_array($dele)){
$ag=$dele2['quantity'];
$agd=$dele2['unit'];
if($ag=="0"){
mysql_query("DELETE FROM army where unit='$agd' and quantity='$ag'");}}
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
echo"</select><br/><small><b>Kiek</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><b>Kaina aukso:</b></small><br/><input type=\"text\" name=\"gold\" format=\"*N\"/><br/><small><b>Papildoma kaina:</b></small><br/>
<select name=\"oth\"><option value=\"gem\">Gemsai</option><option value=\"mercury\">Puodai</option><option value=\"sulfur\">Sulfurai</option><option value=\"crystal\">Krystalai</option></select><br/><small><b>Kiek</b></small><br/>
<input type=\"text\" name=\"oth2\" format=\"*N\"/><br/>
<small><anchor>Deti<go method=\"post\" href=\"index.php?action=aukc6&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/><postfield name=\"gold\" value=\"$(gold)\"/><postfield name=\"oth\" value=\"$(oth)\"/>
<postfield name=\"oth2\" value=\"$(oth2)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukc6"){
$units=$_POST['units'];
$quan=$_POST['quan'];
$gold=$_POST['gold'];
$oth=$_POST['oth'];
$oth2=$_POST['oth2'];
include_once("units/$units.php");
if($unit_info[cost]<20000){
$limi=$unit_info[cost]+10000;
$limi2=$unit_info[cost]-10000;}
if($unit_info[cost]<15000){
$limi=$unit_info[cost]+7000;
$limi2=$unit_info[cost]-7000;}
if($unit_info[cost]<10000){
$limi=$unit_info[cost]+5000;
$limi2=$unit_info[cost]-5000;}
if($unit_info[cost]<5000){
$limi=$unit_info[cost]+2500;
$limi2=$unit_info[cost]-2500;}
if($unit_info[cost]<4000){
$limi=$unit_info[cost]+2000;
$limi2=$unit_info[cost]-2000;}
if($unit_info[cost]<3000){
$limi=$unit_info[cost]+1500;
$limi2=$unit_info[cost]-1500;}
if($unit_info[cost]<2000){
$limi=$unit_info[cost]+1200;
$limi2=$unit_info[cost]-1200;}
if($unit_info[cost]<1000){
$limi=$unit_info[cost]+1000;
$limi2=$unit_info[cost]-1000;}


$usr=strtolower($user[username]);
if((empty($units)) or (empty($quan)) or (empty($gold))){
echo"<small>Pirmus tris laukelius u&#382;pildity butina</small>";}
elseif($gold/$quan>$limi){
echo"<small>Prek&#279; per brangi</small>";}
elseif($gold/$quan<$limi2){
echo"<small>Prek&#279; per pigi</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$units'"));
if(!$unitas[unit]){
echo"<small>Tokios kariu ru&#353;ies neturite</small>";}
elseif($quan>$unitas[quantity]){
echo"<small>Neturite tiek kariu</small>";}
elseif($unitas[magic]=="hipnoze"){
echo"<small>Uzhipnotizuot&#371; kari&#371; parduoti negalite</small>";}
elseif($unitas[magic]=="reanim"){
echo"<small>Negalima parduoti reanimuot&#371; kari&#371;</small>";}
else {
$ex=($unitas[expierence]/$unitas[quantity])*$quan;
mysql_query("UPDATE army SET quantity=quantity-$quan,expierence=expierence-$ex where unit='$units' and username='$usr'");
mysql_query("insert into aukcionas (user,preke,gold,other,type,patv,exp,unit) values ('$user[username]','$quan-$units','$gold','$oth2-$oth','army','1','$ex','$units')");
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
echo"<small>Parduodate $quan $units ,bet jusu preke kiti nupirkti gales tik kai skelbima per&#382;iur&#279;s Administratorius</small>";}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}

if($action=="aukc20"){
$tot=mysql_query("SELECT COUNT(id) AS num FROM aukcionas where patv='0' and type='army'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where patv='0' and type='army' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
$oher=$pre2['other'];
$other=explode("-",$oher);
$exp=$pre2['exp'];
$q=$other[0];
$res=$other[1];
   if ($res == "mercury") {
      if (($q == "1") or ($q == "21")) { $resource = "Puodas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Puodai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Puod&#371;"; }
   }
   elseif ($res == "gem") {
      if (($q == "1") or ($q == "21")) { $resource = "Gemsas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Gemsai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Gems&#371;"; }
   }
   elseif ($res == "sulfur") {
      if (($q == "1") or ($q == "21")) { $resource = "Sulfuras"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Sulfurai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Sulfur&#371;"; }
   }
   elseif ($res == "crystal") {
      if (($q == "1") or ($q == "21")) { $resource = "Kristalas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Kristalai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Kristal&#371;"; }
   }
include("units/$preke[1].php");
include_once("names/units.php");
include_once("names/special.php");
if (((substr($preke[0], strlen($preke[0]) - 2, 2) >= 10) and (substr($preke[0], strlen($preke[0]) - 2, 2) <= 20)) or ((substr($preke[0], strlen($preke[0]) - 1, 1) == "0"))) {
      $preke2 = $unit_name_p3[$preke[1]];
   }
   elseif (substr($preke[0], strlen($preke[0]) - 1, 1) == "1") {
      $preke2 = $unit_name_s1[$preke[1]];
   }
   else {
      $preke2 = $unit_name_p1[$preke[1]];
   }
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;nick=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $preke2</b></small><br/><img src=\"img/units/$preke[1].gif\" alt=\"$preke2\"/><br/><small><i>Ataka: $unit_info[attack]</i></small><br/><small><i>Gynyba: $unit_info[defense]</i></small><br/>";
echo"<small><i>Gyvyb&#279;s: $unit_info[health]</i></small><br/>";
if (($unit_info[min] == $unit_info[max])) {
      $d1 = "$unit_info[min]";
   }
   else {
      $d1 = "$unit_info[min]-$unit_info[max]";
   }
echo"<small><i>&#381;ala: $d1</i></small><br/>";
if (($unit_info[shoot] == "1") or ($unit_info[spec] !== "") or ($unit_info[spec2] !== "")) {
      echo"<small><i><u>Papildoma:</u></i></small><br/>";
      if ($unit_info[shoot] == "1") {
         echo"<small><i>&#353;audo</i></small><br/>";
      }
      if ($unit_info[spec] !== "") {
         $special = $special_name[$unit_info[spec]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec2] !== "") {
         $special = $special_name[$unit_info[spec2]];
         echo"<small><i>$special</i></small><br/>";
      }
   }
echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small>";
if($q>0){
echo"<small> ir <b>$q $resource</b></small>";}
echo"<br/><small>Armijos sukaupta patirtis:<b>$exp</b></small><br/><small><a href=\"index.php?action=aukc25&amp;id=$id&amp;idz=$idz&amp;m=2\">Patvirtinti</a></small><br/><small><a href=\"index.php?action=aukc25&amp;id=$id&amp;idz=$idz&amp;m=1\">Atmesti</a></small><br/>$line<br/>";}}
$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukc20&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukc20&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";
}
if($action=="aukc25"){
$idz=$_GET['idz'];
$m=$_GET['m'];
if($m=="2"){
mysql_query("UPDATE aukcionas SET patv='1' where id='$idz'");
echo"<small>Patvirtinta</small>";}
if($m=="1"){
mysql_query("UPDATE aukcionas SET patv='2' where id='$idz'");
echo"<small>Atmesta</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukc50"){
$tot=mysql_query("SELECT COUNT(preke) AS num FROM aukcionas where type='army' and user='$user[username]'");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
if($total=="0"){
echo"<small>Prekiu nera</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*3-3;
$iki=3;
$pre=mysql_query("SELECT * FROM aukcionas where type='army' and user='$user[username]' order by id desc LIMIT $nuo,$iki");
while($pre2=mysql_fetch_array($pre)){
$idz=$pre2['id'];
$usr=$pre2['user'];
$prke=$pre2['preke'];
$preke=explode("-",$prke);
$gold=$pre2['gold'];
$oher=$pre2['other'];
$other=explode("-",$oher);
$exp=$pre2['exp'];
$pat=$pre2['patv'];
$q=$other[0];
$res=$other[1];
   if ($res == "mercury") {
      if (($q == "1") or ($q == "21")) { $resource = "Puodas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Puodai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Puod&#371;"; }
   }
   elseif ($res == "gem") {
      if (($q == "1") or ($q == "21")) { $resource = "Gemsas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Gemsai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Gems&#371;"; }
   }
   elseif ($res == "sulfur") {
      if (($q == "1") or ($q == "21")) { $resource = "Sulfuras"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Sulfurai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Sulfur&#371;"; }
   }
   elseif ($res == "crystal") {
      if (($q == "1") or ($q == "21")) { $resource = "Kristalas"; }
      if ((($q > 1) and ($q < 10)) or (($q > 21) and ($q < 30))) { $resource = "Kristalai"; }
      if (($q >= 10) and ($q <= 20)) { $resource = "Kristal&#371;"; }
   }

include("units/$preke[1].php");
include_once("names/units.php");
include_once("names/special.php");
if (((substr($preke[0], strlen($preke[0]) - 2, 2) >= 10) and (substr($preke[0], strlen($preke[0]) - 2, 2) <= 20)) or ((substr($preke[0], strlen($preke[0]) - 1, 1) == "0"))) {
      $preke2 = $unit_name_p3[$preke[1]];
   }
   elseif (substr($preke[0], strlen($preke[0]) - 1, 1) == "1") {
      $preke2 = $unit_name_s1[$preke[1]];
   }
   else {
      $preke2 = $unit_name_p1[$preke[1]];
   }
echo"<small>Parduoda:<a href=\"index.php?action=nick_info&amp;id=$id&amp;nick=$usr\">$usr</a></small><br/><small>Prek&#279;:<b>$preke[0] $preke2</b></small><br/><img src=\"img/units/$preke[1].gif\" alt=\"$preke2\"/><br/><small><i>Ataka: $unit_info[attack]</i></small><br/><small><i>Gynyba: $unit_info[defense]</i></small><br/>";
echo"<small><i>Gyvyb&#279;s: $unit_info[health]</i></small><br/>";
if (($unit_info[min] == $unit_info[max])) {
      $d1 = "$unit_info[min]";
   }
   else {
      $d1 = "$unit_info[min]-$unit_info[max]";
   }
echo"<small><i>&#381;ala: $d1</i></small><br/>";
if (($unit_info[shoot] == "1") or ($unit_info[spec] !== "") or ($unit_info[spec2] !== "")) {
      echo"<small><i><u>Papildoma:</u></i></small><br/>";
      if ($unit_info[shoot] == "1") {
         echo"<small><i>&#353;audo</i></small><br/>";
      }
      if ($unit_info[spec] !== "") {
         $special = $special_name[$unit_info[spec]];
         echo"<small><i>$special</i></small><br/>";
      }
      if ($unit_info[spec2] !== "") {
         $special = $special_name[$unit_info[spec2]];
         echo"<small><i>$special</i></small><br/>";
      }
   }
echo"$line<br/><small>Kaina:<b>$gold</b> aukso</small>";
if($q>0){
echo"<small> ir <b>$q $resource</b></small><br/>";}
echo"<small>Armijos sukaupta patirtis:<b>$exp</b></small><br/><small>Busena:</small>";
if($pat=="0"){
echo"<small>Laukia patvirtinimo</small><br/>";}
if($pat=="1"){
echo"<small>Patvirtinta</small><br/>";}
if($pat=="2"){
echo"<small>Atmesta</small><br/>";}
echo"<small><a href=\"index.php?action=aukc51&amp;id=$id&amp;idz=$idz\">Atsiimti</a></small><br/>$line<br/>";}}
echo"<small><a href=\"index.php?action=aukc2&amp;id=$id\">Visos prek&#279;s</a></small><br/><small><a href=\"index.php?action=aukc5&amp;id=$id\">Deti preke</a></small><br/>$line<br/>";$vpsl=ceil($total/3);
if($total>3){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukc50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>$line<br/>";}
if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukc50&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>$line<br/>";}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukc51"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])!==strtolower($user[username])){
echo"<small>&#353;i preke ne jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$usr=strtolower($user[username]);
$unia=mysql_query("SELECT COUNT(unit) AS num FROM army where username='$usr'");
$numu=($unia) ? mysql_result($unia, 0, 'num') : 0;
if($numu>="$toar"){
echo"<small>Negalite atsiimti prek&#279;s nes i mu&#353;i galima pasiimti tik $toar ru&#353;iu karius</small>";}
else {
$unit=explode("-",$quer[preke]);
$unija=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$unit[1]' and magic='hipnoze'"));
if($unija[unit]){
echo"<small>Negalite atsiimti nes turite tokios ru&#353;ies uzhipnotizuotu kari&#371;</small>";}
else {
$unitas3=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$unit[1]'"));
if(!$unitas3[unit]){
include("units/$unit[1].php");
mysql_query("insert into army (username,quantity,unit,attack,defense,min_damage,max_damage,health,hp,expierence) values ('$usr','$unit[0]','$unit[1]','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','0','$quer[exp]')");}
else {
mysql_query("UPDATE army SET quantity=quantity+'$unit[0]',expierence=expierence+'$quer[exp]' where username='$usr' and unit='$unit[1]'");}

mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
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
echo"<small>Atsi&#279;m&#279;te $quan $units i&#353; aukciono</small>";}}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukc3"){
echo"<small>Kuriama...</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="aukc4"){
$idz=$_GET['idz'];
$quer=mysql_fetch_array(mysql_query("SELECT * FROM aukcionas where id='$idz'"));
if(strtolower($quer[user])==strtolower($user[username])){
echo"<small>&#353;i prek&#279; yra jusu</small>";}
elseif(!$quer[id]){
echo"<small>Tokia prek&#279; neegzistuoja</small>";}
else {
$usr=strtolower($user[username]);
$unia=mysql_query("SELECT COUNT(unit) AS num FROM army where username='$usr'");
$numu=($unia) ? mysql_result($unia, 0, 'num') : 0;
if($numu>="4"){
echo"<small>Negalite atsiimti prek&#279;s nes i mu&#353;i galima pasiimti tik 4 ru&#353;iu karius</small>";}
else {
$unit=explode("-",$quer[preke]);
$other=explode("-",$quer[other]);
$pirkejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$user[username]'"));
$pardavejas=mysql_fetch_array(mysql_query("SELECT * FROM users where username='$quer[user]'"));if(abs($pirkejas[level]-$pardavejas[level])>10){
echo"<small>Pirk&#279;jo ir pardav&#279;jo lygi&#371; skirtumas negali buti didesnis nei 10</small>";}

elseif(($quer[gold]>$pirkejas[gold]) or ($other[0]>$pirkejas[$other[1]])){
echo"<small>Nepakanka resursu pirkimui</small>";}
else {
$unija=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$unit[1]' and magic='hipnoze'"));
if($unija[unit]){
echo"<small>Negalite pirkti nes turite tokios ru&#353;ies uzhipnotizuotu kari&#371;</small>";}
else {
$unitas3=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$unit[1]'"));
if(!$unitas3[unit]){
include("units/$unit[1].php");
mysql_query("insert into army (username,quantity,unit,attack,defense,min_damage,max_damage,health,hp,expierence) values ('$usr','$unit[0]','$unit[1]','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','0','$quer[exp]')");}
else {
mysql_query("UPDATE army SET quantity=quantity+'$unit[0]',expierence=expierence+'$quer[exp]' where username='$usr' and unit='$unit[1]'");
}
mysql_query("UPDATE users SET gold=gold-$quer[gold] where username='$user[username]'");
mysql_query("UPDATE users SET $other[1]=$other[1]-$other[0] where username='$user[username]'");
mysql_query("UPDATE users SET $other[1]=$other[1]+$other[0] where username='$quer[user]'");
mysql_query("UPDATE users SET gold=gold+$quer[gold] where username='$quer[user]'");mysql_query("DELETE FROM aukcionas where id='$idz' LIMIT 1");
include("names/units.php");
if (((substr($unit[0], strlen($$unit[0]) - 2, 2) >= 10) and (substr($$unit[0], strlen($$unit[0]) - 2, 2) <= 20)) or ((substr($$unit[0], strlen($$unit[0]) - 1, 1) == "0"))) {
      $units = $unit_name_p3[$unit[1]];
   }
   elseif (substr($$unit[0], strlen($$unit[0]) - 1, 1) == "1") {
      $units = $unit_name_s1[$unit[1]];
   }
   else {
      $units = $unit_name_p1[$unit[1]];
   }
$txt="$user[username] nusipirko $unit[0] $units i&#353; $quer[user] uz $quer[gold] aukso ir $other[1]";
mysql_query("insert into aukatas (text) values ('$txt')");

echo"<small>Nusipirkote $quan $units i&#353; aukciono</small>";}}}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}




?>