<?

$n = addslashes(htmlspecialchars($_GET['n'])); if (!$n) $n = "";

if(strtolower($user[username])=="maxline"){
echo"<small>Tau uzdrausta eiti i arena d&#279;l sukciavimu</small>";}
else {
if ($n == "") {
   $place = "arena";
   include_once("online.php");
   echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
   $page = addslashes(htmlspecialchars($_GET['page'])); if (!$page) $page = "";
   $time = time() - 3600;
   $online = mysql_num_rows(mysql_query("SELECT id FROM users WHERE time>'".time()."' and place='arena'"));

   echo"<small><b>Heroj&#371; Arena</b></small><br/><img src=\"img/arena.jpg\" alt=\"\"/><br/><small><a href=\"index.php?action=arena&amp;id=$id&amp;n=add\">&#187; Sukurti kov&#261; &#171;</a></small><br/>$line<br/>
   <small>Tik stipriausieji i&#353;dr&#303;sta &#269;ia &#303;&#382;engti..</small><br/>";


   echo"<br/>";

   echo"$line</p><p align=\"left\">";
   $limit = $page * 10;
   $battles = mysql_query("SELECT * FROM abattle WHERE time>$time and heroe2='' LIMIT $limit, 11");
   while ($battle = mysql_fetch_array($battles)) {
      $k++;
      if ($k > 1) echo"<br/>";
      if ($k <= 10) {
         echo"<small><a href=\"index.php?id=$id&amp;action=arena&amp;n=$battle[id]\">&#187; $battle[heroe]</a></small>";
      }
   }
   if ($k == "") echo"<small>N&#279;ra kov&#371;.</small>";
   echo"</p><p align=\"center\">";
   if ($k == 11) {
      $p = $page + 1;
      echo"<small><a href=\"index.php?action=arena&amp;id=$id&amp;page=$p\">&#187;&#187;&#187;</a></small><br/>";
   }
   if ($page > 0) {
      $p = $page - 1;
      echo"<small><a href=\"index.php?action=arena&amp;id=$id&amp;page=$p\">&#171;&#171;&#171;</a></small><br/>";
   }
   echo"$line<br/><small><a href=\"index.php?action=online&amp;id=$id&amp;event=arena\">Prisijung&#281; [$online]</a></small><br/>$line<br/>
   <small><a href=\"index.php?id=$id\">$home</a></small>";
}
elseif ($n == "add") {
   if ($user[battle] > time()) {
      $s = $user[battle] - time();
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
      echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">
      <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
      <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($_GET['i']) > 0) {
      $name = strtolower($user[username]);
      $battle = mysql_fetch_array(mysql_query("SELECT * FROM abattle WHERE heroe='$name' ORDER by time DESC LIMIT 1"));
      if (($battle[time] + 600 < time()) or ($battle[active] > 0)) {
         include_once("core/my_army.php");
         mysql_query("DELETE FROM abattle WHERE id='$battle[id]'");
         mysql_query("INSERT INTO abattle (heroe, u1, time) VALUES ('$name', '$total_units', '".time()."')");
         $battle[id] = mysql_insert_id();
         $battle[heroe2] = "";
      }
      $place = "arena";
      $arena = $battle[id];
      include_once("online.php");
      if (strlen(trim($battle[heroe2])) > 0) {
         echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><onevent type=\"ontimer\"><go href=\"index.php?action=abattle&amp;id=$id&amp;m=$battle[id]\"/></onevent><timer value=\"30\"/><p align=\"center\">";
         echo"$line<br/><small>Einama &#303; kov&#261;!</small><br/>$line";
      }
      else {
         echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><onevent type=\"ontimer\"><go href=\"index.php?action=arena&amp;id=$id&amp;n=add&amp;i=2\"/></onevent><timer value=\"50\"/><p align=\"center\">";
         echo"$line<br/><small>Pra&#353;ome palaukti, kol kitas herojus &#303;&#382;engs &#303; &#353;i&#261; kov&#261;.</small><br/>$line";
      }
   }
   else {
      $place = "arena";
      include_once("online.php");
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
      echo"<small><b>Ar tikrai norite sukurti kov&#261;?</b></small><br/>$line</p><p align=\"left\">
   <small><b>[*]</b> J&#363;s prarasite savo armij&#261; kovoje.</small><br/>
   <small><b>[*]</b> Galite gauti pagarbos ta&#353;k&#371;, jei laim&#279;site, arba prarasti, jei pralaim&#279;site (kolkas neveikia, kadangi testuojama).</small><br/>
   <small><b>[*]</b> Po laim&#279;tos kovos j&#363;s&#371; herojus gaus patirties.</small><br/>
   <small><b>[*]</b> J&#363;s&#371; negal&#279;s u&#382;pulti herojai, turintys auk&#353;tesn&#303; lyg&#303; nei j&#363;s&#371;.</small><br/>
   <small><b>[*]</b> J&#363;s&#371; herojus tur&#279;s ilgiau ils&#279;tis nei kad po kovos su neutraliais monstrais.</small><br/>
   <small><b>[*]</b> J&#363;s bet kada gal&#279;site pab&#279;gti ir taip i&#353;saugoti dal&#303; armijos.</small><br/>
   </p><p align=\"center\">$line<br/>
   <small><a href=\"index.php?action=arena&amp;id=$id&amp;n=add&amp;i=2\">&#187; TAIP &#171;</a></small><br/>
   <small><a href=\"index.php?action=arena&amp;id=$id\">&#187; NE &#171;</a></small><br/>$line<br/>
   <small><a href=\"index.php?id=$id\">$home</a></small>";
   }
}
elseif (is_numeric($n)) {
   $place = "arena";
   include_once("online.php");
   $name = strtolower($user[username]);
   $battle = mysql_fetch_array(mysql_query("SELECT * FROM abattle WHERE id='$n' LIMIT 1"));
   if ($battle[id] == "") {
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
      echo"<small>Tokia kova nerasta.</small><br/>$line<br/><small><a href=\"index.php?action=arena&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
      echo"</p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (($battle[heroe2] !== "") and ($battle[heroe2] !== $name)) {
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
      echo"<small>&#352;ioje kovoje jau kaunasi kitas herojus.</small><br/>$line<br/><small><a href=\"index.php?action=arena&amp;id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
      echo"</p></card></wml>";
      mysql_close($db);
      exit;
   }
   if (strlen($_GET['i']) > 0) {
      if ($user[battle] > time()) {
         $s = $user[battle] - time();
         echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
         echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">
         <small><b>&#171;</b>&nbsp;<a href=\"index.php?action=arena&amp;id=$id\">Atgal</a></small><br/>
         <small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
         mysql_close($db);
         exit;
      }
      include_once("core/my_army.php");
      mysql_query("UPDATE abattle SET heroe2='$name', u2='$total_units', time='".time()."' WHERE id='$n' LIMIT 1");
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><onevent type=\"ontimer\"><go href=\"index.php?action=abattle&amp;id=$id&amp;m=$n\"/></onevent><timer value=\"30\"/><p align=\"center\">";
      echo"$line<br/><small>Einama &#303; kov&#261;!</small><br/>$line";
   }
   else {
      $info = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$battle[heroe]' LIMIT 1"));
      include("names/classes.php");
      $class = $class_name[$info['class']];
      include("names/heroes.php");
      $heroe = $heroe_name[$info[identify]];
      echo"<wml><card id=\"heroes\" title=\"Heroes Online\"><p align=\"center\">";
      echo"<small><b>Ar norite kautis su &#353;iuo herojumi?</b></small><br/>$line<br/>
   <small><u><b>$info[username]</b></u></small><br/><small>$class</small><br/>
   <img src=\"img/heroes/$info[identify].gif\" alt=\"$heroe\"/><br/>
   <small><b><u>Lygis: $info[level]</u></b></small><br/><small><b>Ataka: $info[attack]</b></small><br/><small><b>Gynyba: $info[defense]</b></small><br/><small><b>I&#353;mintis: $info[knowledge]</b></small><br/><small><b>Galia: $info[power]</b></small><br/>$line<br/>
   <small><a href=\"index.php?action=arena&amp;id=$id&amp;i=2&amp;n=$battle[id]\">&#187; TAIP &#171;</a></small><br/>
   <small><a href=\"index.php?action=arena&amp;id=$id\">&#187; NE &#171;</a></small><br/>$line<br/>
   <small><a href=\"index.php?id=$id\">$home</a></small>";
   }
}}
?>