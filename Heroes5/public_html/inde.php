
<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("core.php");
$action = addslashes(htmlspecialchars($_GET['action'])); if (!$action) { $action = ""; }
if ($action !== "arena") echo"<wml><card id=\"heroes\" title=\"$title_total\"><p align=\"center\">";
if ($HTTP_USER_AGENT == "") {
   
}
include("connect.php");
$id = addslashes(htmlspecialchars($_GET['id'])); if (!$id) { $id = ""; }
include_once("check.php");
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
if ($action == "sms") {

        echo"<small>&#381;inutes si&#371;skite numeriu <b>1371</b>. Kaina 1 Lt.</small><br/>$line
        </p><p align=\"left\">
        <small><b>hero gold ".strtolower($user[username])."</b> - gausite <b>5000</b> aukso.</small><br/>
        <small><b>hero exp ".strtolower($user[username])."</b> - gausite <b>2000</b> patirties arba <b>20%</b> iki kito lygio, jei esate didesnio nei 30 lygio.</small><br/>
        <small><b>hero frenzy ".strtolower($user[username])."</b> - po kov&#371; j&#363;s&#371; herojus ils&#279;sis tris kartus trumpiau ir tai t&#281;sis net <b>4 h</b>, tad sp&#279;site nukauti daugiau prie&#353;&#371;.</small><br/>
        <small><b>hero attack ".strtolower($user[username])."</b> - gausite <b>+1</b> atakos.</small><br/>
        <small><b>hero defence ".strtolower($user[username])."</b> - gausite <b>+1</b> gynybos.</small><br/>
        <small><b>hero knowledge ".strtolower($user[username])."</b> - gausite <b>+1</b> i&#353;minties.</small><br/>
        <small><b>hero power ".strtolower($user[username])."</b> - gausite <b>+1</b> galios.</small><br/>
        </p><p align=\"center\">
        $line<br/>
        <small><a href=\"index.php?id=$id\">$home</a></small>";
}
if ($action == "ref") {
        echo"<small><b><u>Pakviesk kitus ir u&#382;sidirbk aukso!</u></b></small><br/>$line<br/>
        <small>Si&#363;lome &#353;auni&#261; prog&#261; u&#382;sidirbti aukso papildomai. Jums tereikia patalpinti &#353;i&#261; nuorod&#261; internete ir u&#382; kiekvien&#261; u&#382;siregistravus&#303; heroj&#371;, at&#279;jus&#303; i&#353; j&#363;s&#371; nuorodos, j&#363;s gausite 1000 aukso! Idealiausia, jei turite savo tinklap&#303; - tada tai padaryti lengviausia. Kod&#279;l tai padaryta? Taip daugiau &#382;moni&#371; &#382;ais &#353;&#303; &#382;aidim&#261;. Daugiau &#382;aid&#279;j&#371; - didesn&#279; motyvacija tobulinti toliau! :)</small><br/>$line<br/><small>Dabartin&#279; nuoroda</small><br/><small><u>http://$title_total/?ref=".strtolower($user[username])."</u></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
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

if ($action == "") {
        $day = mysql_fetch_array(mysql_query("SELECT day, time FROM time LIMIT 1"));
        $queries++;
        if ($day[1] < $time) {
                $dd = ($time - $day[1]) / $day_length;
                $days = ceil($dd);
                $day[1] = $day_length - ($day_length + ceil(($dd - $days) * $day_length)) + $time;
                $day[0] = $days + $day[0];
                $upd=mysql_query("UPDATE time SET day='$day[0]', time='$day[1]' LIMIT 1");
                $queries++;
        }
        if ($user[day] < $day[0]) {
                $days = $day[0] - $user[day];
                if ($days > 6) $days = 6;
                include_once("core/gold.php");
                $gold = $days * $gold_day;
                $update=mysql_query("UPDATE users SET day='$day[0]', gold=gold+$gold WHERE username='$user[username]' LIMIT 1");
                $queries++;
        }
        include_once("names/classes.php");
        $class = $class_name[$user['class']];
        $date = date("m-d H:i");
        echo"<img src=\"img/banner.gif\" alt=\"Heroes Online\"/><br/><small>[$date]</small><br/>$line<br/><small><b><a href=\"index.php?action=mymenu&amp;id=$id\">Mano Meniu</a></b></small><br/><small><a href=\"pm.php?id=$id\">D&#279;&#382;ut&#279; [$user[new_pm]/$user[all_pm]]</a></small><br/>$line<br/>";
        if ($user[immortal] > time()) echo"<small><b>FRENZY!!!</b></small><br/>";
        include_once("core/level.php");
        $level = level($user[level]);
        if ($level[$user[level]] <= $user[expierence]) {
                $lvl = $user[level] + 1;
                echo"<small><i><b><a href=\"index.php?id=$id&amp;action=level\">Herojus pasiek&#279; $lvl lyg&#303;!</a></b></i></small><br/>";
        }
        echo"<small><b><u>$user[username]</u></b></small><br/><small><u>$class [$user[level]]</u></small>";
        if ($user[battle] > $time) {
                $left = $user[battle] - $time;
                echo"<br/>$line<br/><small><u>Negalite kovoti <b>$left</b> s</u></small>";
        }
        $on = mysql_query("SELECT place FROM users WHERE time>$time");
        $queries++;
        $onl[arena] = 0;
        $onl[forum] = 0;
        while ($onn = mysql_fetch_row($on)) {
                $online++;
                @$onl[$onn[0]]++;
        }
$qua=mysql_query("SELECT COUNT(id) AS num FROM news");
$news=($qua) ? mysql_result($qua, 0, 'num') : 0;

        echo"<br/>$line<br/><small><b><a href=\"index.php?action=new&amp;id=$id\">&#187;Naujienos[$news]&#171;</a><br/><a href=\"index.php?action=sms&amp;id=$id\">&#187;SMS paslaugos&#171;</a></b></small><br/>
        <small><a href=\"index.php?action=ref&amp;id=$id\">Pakviesk kitus ir u&#382;sidirbk aukso!</a></small><br/>$line<br/>";

        echo"</p><p align=\"left\">
        <small><a href=\"index.php?action=arena&amp;id=$id\">Heroj&#371; Arena [".$onl[arena]."]</a></small><br/>";
        $lands = 0;
        if ($handle = opendir("map/")) {
                while (false !== ($file = readdir($handle))) {
                        if ($file != "." && $file != ".." && $file != "index.php") {
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
                echo"<small><b>&#187;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$land[$t]\">$landn</a></small>";
        }
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
        echo"</p><p align=\"center\">$line<br/>
        <small><u>Dabar: $day[0] d.</u></small><br/>
        <small>Iki kitos dienos liko:</small><br/>
        <small><b>$h</b> val. <b>$m</b> min. <b>$s</b> sek.</small><br/>
        $line<br/>";
        $topic = file("topic.txt");
        if ($topic) echo"<small><b>Topikas:</b><br/>$topic[0]</small><br/>$line<br/>";
        echo"<small><a href=\"index.php?action=online&amp;id=$id\">Prisijung&#281; [$online]</a></small><br/>
<small><a href=\"index.php?action=logout&amp;id=$id\">&#171; Atsijungti</a></small><br/>$line<br/>
        <small><b><a href=\"gb.php?id=$id\">Chat</a></b></small><br/>
    <small><b><a href=\"forum.php?id=$id\">Forumas</a></b>&nbsp;[$onl[forum]]</small><br/>
        <small><a href=\"index.php?action=top&amp;id=$id\">Heroj&#371; TOP</a></small><br/>
        <small><a href=\"contacts.php?id=$id\">Kontaktai</a></small><br/><br/>";
if($user[username]=="@Makatas"){
echo"<a href=\"index.php?action=admincp&amp;id=$id\">AdminCP</a><br/>";}
        echo"<small><a href=\"http://tampyk.gan.lt\">tampyk.gan.lt</a></small>";
}
elseif ($action=="admincp"){
echo"<small><a href=\"index.php?action=detnew&amp;id=$id\">[&#187;] Deti naujiena</a></small>";}
elseif ($action=="detnew"){
echo"<small><b>Title</b><br/><input type=\"text\" name=\"title\"/><br/><b>Naujiena</b><br/><input type=\"text\" name=\"new\"/><br/><anchor>+Deti+<go method=\"post\" href=\"index.php?action=detnew2&amp;id=$id\"><postfield name=\"title\" value=\"$(title)\"/>
<postfield name=\"new\" value=\"$(new)\"/></go></anchor><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif ($action=="detnew2"){
$dat=date("Y-m-d H:i:s");
$title=$_POST['title'];
$new=$_POST['new'];
$sql=mysql_query("insert into news (title,zin,date) values ('$title','$new','$dat')");
echo"<small>Ideta<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif ($action == "mymenu") {
        include_once("include/my_menu.php");
}
elseif ($action=="new"){
$psl=$_POST['psl'];
if(!$psl){
$psl=1;}
$nuo=$psl*15-15;
$iki=$psl*15;
$tonew=mysql_query("SELECT COUNT(id) AS num FROM news");
$total=($tonew) ? mysql_result($tonew, 0, 'num') : 0;
$nws=mysql_query("SELECT id,title,date FROM news order by date desc LIMIT $nuo,$iki");
while($rws=mysql_fetch_array($nws)){
$idz=$rws['id'];
$title=$rws['title'];
$dat=$rws['date'];
echo"<small><b>Naujienos</b><br/>$line<br/><a href=\"index.php?action=snew&amp;id=$id&amp;idz=$idz\">$title</a><br/>";}
echo"$line<br/>";
$tol=$psl+1;
$atg=$psl-1;
if($total>$iki){
echo"<anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=new&amp;id=$id\"><postfield name=\"psl\" value=\"$tol\"/></go></anchor><br/>";}
if($psl>1){
echo"<anchor>[-]Atgal[-]<go method=\"post\" href=\"index.php?action=new&amp;id=$id\"><postfield name=\"psl\" value=\"$atg\"/></go></anchor><br/>";}
echo"$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif ($action=="snew"){
$idz=$_GET['idz'];
$read=mysql_query("SELECT zin,date FROM news where id='$idz'");
while($rea=mysql_fetch_array($read)){
$newa=$rea['zin'];
$dat=$rea['date'];}
echo"<small>$newa<br/><b>Naujiena ideta $dat</b><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
elseif ($action == "huinfo") {
        include_once("include/my_unit_info.php");
}
elseif ($action == "sinfo") {
        include_once("include/skill_info.php");
}
elseif ($action == "ainfo") {
        include_once("include/artifact_info.php");
}
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
elseif ($action == "logout") {
        $name = strtolower($user[username]);
        $queries++;
        mysql_query("UPDATE users SET time='$time' WHERE username='$name' LIMIT 1");
        echo"<small>J&#363;s atsijung&#279;te! Linkime &#269;ia sugr&#303;&#382;ti!</small><br/>$line<br/><small><a href=\"index.php?lang=$lang\">$home</a></small>";
}
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

echo"</p></card></wml>";
mysql_close($db);
exit;
?>
