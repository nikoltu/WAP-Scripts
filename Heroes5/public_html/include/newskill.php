<?php
if($action=="newskill"){
if($user[skill_points]<1){
echo"Negalima!<br/>";}
else {
echo"<small>Turite <b>$user[skill_points]</b> nepanaudotus skill pointus</small><br/>";
echo"<big>Igud&#382;iu daug&#279;s</big><br/>";include_once("names/skills.php");
include_once("core/my_skills.php");
include_once("core/skills.php");
if(($user_skill_lvl[0]!=="3") or ($user_skill_lvl[1]!=="3") or ($user_skill_lvl[2]!=="3") or ($user_skill_lvl[3]!=="3") or ($user_skill_lvl[4]!=="3") or ($user_skill_lvl[5]!=="3") or ($user_skill_lvl[6]!=="3") or ($user_skill_lvl[7]!=="3") or ($user_skill_lvl[8]!=="3") or ($user_skill_lvl[9]!=="3") or ($user_skill_lvl[10]!=="3") or ($user_skill_lvl[11]!=="3")){
echo"<small>Pasirinkite kuri igudi norite patobulinti</small><br/>";
   for ($k = 0; $k < $total_skills; $k++) {
   $skill = $skill_name[$user_skill[$k]];
$slvl=$user_skill_lvl[$k]+1;
$inf="$user_skill[$k]$slvl";
$inf2=$skill_info[$inf];
if($slvl=="4"){}
else{

   echo"<small><a href=\"index.php?id=$id&amp;action=newskill2&amp;m=$user_skill[$k]\">$skill</a>&nbsp;[$user_skill_lvl[$k]]</small><br/><small>Kitame lygije:<b>$inf2</b></small><br/>$line<br/>";
   }}




echo"<small>Kuri igudi norite i&#353;mokti</small><br/>";
if ($handle = opendir("skils/")) {
      while (false !== ($file = readdir($handle))) { 
         if ($file != "." && $file != ".." && $file != "index.php" && $file != "$user_skill[0].php" && $file != "$user_skill[1].php" && $file != "$user_skill[2].php" && $file != "$user_skill[3].php" && $file != "$user_skill[4].php" && $file != "$user_skill[5].php" && $file != "$user_skill[6].php" && $file != "$user_skill[7].php" && $file != "$user_skill[8].php" && $file != "$user_skill[9].php" && $file != "$user_skill[10].php" && $file != "$user_skill[11].php" && $file != "leadership1.php" && $file != "leadership2.php" && $file != "scholar2.php" && $file != "knowledge2.php" && $file != "strategy2.php") {
            $file = explode(".", $file);
            $skill2 = $skill_name[$file[0]];
$vl=1;
$sks="$file[0]$vl";
$sks2=$skill_info[$sks];
echo"<small><a href=\"index.php?id=$id&amp;action=newskill2&amp;n=$file[0]\">$skill2</a>&nbsp;[$vl]</small><br/><small><b>$sks2</b></small><br/>$line<br/>";
         }
      }
      closedir($handle);
   }
}}
echo"<small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="newskill2"){
$m=addslashes(htmlspecialchars($_GET['m']));
$n=addslashes(htmlspecialchars($_GET['n']));
include_once("core/my_skills.php");
if(!$n){
$k = "none";
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
if($k=="none"){
echo"<small>Negalite tobulinti &#353;io igud&#382;io nes jo nemokate</small><br/>";}
elseif($user[skill_points]<1){
echo"<small>Nepakanka skill pointu</small><br/>";}
else {
$slwl=$user_skill_lvl[$k]+1;
$upskil="$m|$slwl";
if($slwl=="4"){
echo"<small>Igudis pasiek&#279; maximalu lygi</small><br/>";}
else
{
if($k=="0"){
$upskill="$upskil=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="1"){
$upskill="$skills[0]=$upskil=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="2"){
$upskill="$skills[0]=$skills[1]=$upskil=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="3"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$upskil=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="4"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$upskil=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="5"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$upskil=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="6"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$upskil=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="7"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$upskil=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
if($k=="8"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$upskil=$skills[9]=$skills[10]=$skills[11]";}
if($k=="9"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$upskil=$skills[10]=$skills[11]";}
if($k=="10"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$upskil=$skills[11]";}
if($k=="11"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$upskil";}
mysql_query("UPDATE users SET skill_points=skill_points-1,skills='$upskill' where username='$user[username]'");
echo"<small>Patobulinote igudi</small>";}}}
elseif(!$m){
$k = "none";
if ($user_skill[0] == "$n") { $k = "0"; }
if ($user_skill[1] == "$n") { $k = "1"; }
if ($user_skill[2] == "$n") { $k = "2"; }
if ($user_skill[3] == "$n") { $k = "3"; }
if ($user_skill[4] == "$n") { $k = "4"; }
if ($user_skill[5] == "$n") { $k = "5"; }
if ($user_skill[6] == "$n") { $k = "6"; }
if ($user_skill[7] == "$n") { $k = "7"; }
if ($user_skill[8] == "$n") { $k = "8"; }
if ($user_skill[9] == "$n") { $k = "9"; }
if ($user_skill[10] == "$n") { $k = "10"; }
if ($user_skill[11] == "$n") { $k = "11"; }
if($k!=="none"){
echo"<small>&#353;i igudi jau mokate</small><br/>";}
elseif($user[skill_points]<1){
echo"<small>Nepakanka skill pointu</small><br/>";}
else {
$slwl=1;
$upskil="$n|$slwl";
if($total_skills=="$user[kskil]"){
echo"<small>Jus jau mokate $user[kskil] igud&#382;ius</small><br/>";}
else
{
if($total_skills=="0"){
$upskill="$upskil=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="1"){
$upskill="$skills[0]=$upskil=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="2"){
$upskill="$skills[0]=$skills[1]=$upskil=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="3"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$upskil=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="4"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$upskil=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="5"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$upskil=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="6"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$upskil=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="7"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$upskil=$skills[8]=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="8"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$upskil=$skills[9]=$skills[10]=$skills[11]";}
elseif($total_skills=="9"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$upskil=$skills[10]=$skills[11]";}
elseif($total_skills=="10"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$upskil=$skills[11]";}
elseif($total_skills=="11"){
$upskill="$skills[0]=$skills[1]=$skills[2]=$skills[3]=$skills[4]=$skills[5]=$skills[6]=$skills[7]=$skills[8]=$skills[9]=$skills[10]=$upskil";}

mysql_query("UPDATE users SET skill_points=skill_points-1,skills='$upskill' where username='$user[username]'");
echo"<small>I&#353;mokote nauja igudi</small>";}}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
?>