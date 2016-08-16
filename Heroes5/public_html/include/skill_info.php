<?php
$m = addslashes(htmlspecialchars($_GET['m'])); if (!$m) { $m = ""; }
include("core/my_skills.php");
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
if ($k == "none") {
   echo"<small><b>Tokio sugeb&#279;jimo nemokate.</b></small>";
}
else {
   $level = $user_skill_lvl[$k];
   include_once("names/skills.php");
   include_once("core/skills.php");
   $sk = "$m$level";
   $skill_info = $skill_info[$sk];
   $skill = $skill_name[$m];
   echo"<small><b>$skill</b> [$level]</small><br/><img src=\"img/skils/$m$level.gif\" alt=\"$skill\"/><br/>$line<br/><small>$skill_info</small>";
echo"<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=pns&amp;m=$m\">Panaikinti</a></small>";}
echo"<br/>$line<br/><small><a href=\"index.php?action=mymenu&amp;id=$id&amp;n=skills\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>