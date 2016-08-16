<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("ip.php");
if($koks_ip=="216.135.5.10"){
echo"<wml><card><p></p></card></wml>";exit;}

$nkd2="$koks_ip|$browserajaka";
if($_COOKIE['nakedlops']=="$nkd2"){
include_once("anth.php");}
else {
include_once("core.php");
echo"<wml><card id=\"heroes\" title=\"Forumas\"><p align=\"center\">";
include("mukaka.php");
$action = addslashes(htmlspecialchars($_GET['action'])); if (!$action) { $action = ""; }
$forum = addslashes(htmlspecialchars($_GET['forum'])); if (!$forum) { $forum = ""; }
$topic = addslashes(htmlspecialchars($_GET['topic'])); if (!$topic) { $topic = ""; }
$page = addslashes(htmlspecialchars($_GET['page'])); if (!$page) { $page = ""; }
$id = addslashes(htmlspecialchars($_GET['id'])); if (!$id) { $id = ""; }
include_once("check.php");
$time = time();
$ontime = $time + 300;
if ($user[time] < $time) {
        $on = $user[time] - $user[login];
        mysql_query("UPDATE users SET llogin='$user[time]', login='$time', time='$ontime', place='forum', online=online+$on, forum='$forum', topic='$topic' WHERE session='$id' LIMIT 1");
}
else {
        mysql_query("UPDATE users SET time='$ontime', place='forum', forum='$forum', topic='$topic' WHERE session='$id' LIMIT 1");
}
$nick = $user[username];
$level = $user[status];
$copyright = "<small><a href=\"http://tampyk.kar.lt\">tampyk.kar.lt</a></small>";
if($user[username]=="@Makatas"){
$mod="true";}

if ($level == "King") {
        $mod = "true";
}
if ($level == "Captain") {
        $mod = "true";
}
if (($forum !== "") and ($level == "Master")) {
        $moderator = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM moderators WHERE nick='$nick' and forum='$forum' LIMIT 1"));
        if ($moderator[0] > 0) {
                $mod = "true";
        }
}
if ((($action == "reply") or ($action == "addtopic") or ($action == "sendpm")) and ($user[ban] > time())) {
        $bantime = $user[ban] - time();
        echo"<img src=\"img/banner.gif\" alt=\"Heroes\"/><br/>$line<br/>J&#363;s esate u&#382;banintas!<br/>Liko: <b>$bantime</b> s<br/>$line<br/>$copyright</p></card></wml>";
        mysql_close($db);
        exit;
}
if($user[username]=="@Makatas"){
$lvl="4";}
if ($level == "King") {
        $lvl = "4";
}
elseif (($level == "Master") or ($level == "Captain")) {
        $lvl = "3";
}
else {
        $lvl = "2";
}
if ($forum !== "") {
        $frm = mysql_fetch_array(mysql_query("SELECT * FROM forums WHERE id='$forum' LIMIT 1"));
        if ($frm[id] < 1) {
                echo"<small>Toks forumas neegzistuoja.</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
                mysql_close($db);
                exit;
        }
        if ((($frm[level] == "2") and ($lvl !== "4")) and (($action == "reply") or ($action == "addtopic") or ($action == "addpoll"))) {
                echo"<small>Negalite ra&#353;yti &#353;iame forume.</small><br/>$line<br/><small><a href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\">$back_forum</a></small></p></card></wml>";
                mysql_close($db);
                exit;
        }
        elseif (($frm[level] >= $lvl - 1) and ($frm[level] !== "2")) {
                echo"<small>Negalite patekti &#303; &#353;&#303; forum&#261;.</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
                mysql_close($db);
                exit;
        }
}
if ($topic !== "") {
        $top = mysql_fetch_array(mysql_query("SELECT * FROM topics WHERE id='$topic' LIMIT 1"));
        if ($top[id] < 1) {
                echo"Tokia tema neegzistuoja.<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></p></card></wml>";
                mysql_close($db);
                exit;
        }
}
if ((($action == "viewforum") or ($action == "addtopic")) and ($forum == "")) {
        echo"Toks forumas neegzistuoja.<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></p></card></wml>";
        mysql_close($db);
        exit;
}
if ((($action == "viewtopic") or ($action == "reply")) and ($topic == "")) {
        echo"Tokia tema neegzistuoja.<br/>$line<br/><a href=\"index.php?id=$id\">$home</a></p></card></wml>";
        mysql_close($db);
        exit;
}
if ($action == "") {
        $forum = "00";
}
if ($action == "") {
        $online = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM users WHERE time>$time and place='forum'"));
}
if ($action == "viewtopic") {
        $online = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM users WHERE topic='$topic' and time>$time and place='forum'"));
}
if ($action == "viewforum") {
        $online = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM users WHERE forum='$forum' and time>$time and place='forum'"));
}
$pm = $user[new_pm];
$tpm = $user[all_pm];
if (($pm[0] == "1") or ($pm[0] == "21")) {
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $pm[0] nauj&#261; &#382;inut&#281;!</a></small><br/>$line<br/>";
}
elseif ((($pm[0] > 1) and ($pm[0] <= 9)) or (($pm[0] > 21) and ($pm[0] < 30)))
{
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $pm[0] naujas &#382;inutes!</a></small><br/>$line<br/>";
}
elseif ((($pm[0] > 9) and ($pm[0] <= 20)) or ($pm[0] == "30"))
{
        echo"<small><a href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\">J&#363;s gavote $pm[0] nauj&#371; &#382;inu&#269;i&#371;!</a></small><br/>$line<br/>";
}
if ($action == "") { include_once("forum/view_forums.php"); }
elseif ($action == "viewforum") { include_once("forum/view_forum.php"); }
elseif ($action == "addtopic") { include_once("forum/add_topic.php"); }
elseif ($action == "viewtopic") { include_once("forum/view_topic.php"); }
elseif ($action == "reply") { include_once("forum/reply.php"); }
elseif ($action == "viewnickinfo") { include_once("forum/view_nick_info.php"); }
elseif ($action == "online") { include_once("forum/online.php"); }
elseif ($action == "mod") { include_once("forum/mod.php"); }
elseif ($action == "smilies") { include_once("forum/smilies.php"); }
elseif ($action == "sendpm") { include_once("forum/send_pm.php"); }
elseif ($action == "ban") { include_once("forum/ban.php"); }
elseif ($action == "unban") { include_once("forum/unban.php"); }
elseif ($action == "newtopics") { include_once("forum/latest_topics.php"); }
elseif ($action == "mytopics") { include_once("forum/my_topics.php"); }
elseif ($action == "deletetopic") { include_once("forum/delete_topic.php"); }
elseif ($action == "postinfo") { include_once("forum/post_info.php"); }
elseif ($action == "activetopics") { include_once("forum/active_topics.php"); }
elseif ($action == "search") { include_once("forum/search.php"); }
elseif ($action == "stats") { include_once("forum/stats.php"); }
elseif ($action == "addpoll") { include_once("forum/add_poll.php"); }
elseif ($action == "vote") { include_once("forum/vote.php"); }
echo"</p>";
if (($action == "") or ($action == "clubs") or ($action == "usersforums")) {
        echo"<do type=\"Options\" name=\"on\" label=\"Online: $online[0]\"><go href=\"forum.php?action=online&amp;id=$id\"/></do>";
}
if ($action == "viewtopic") {
        echo"<do type=\"Options\" name=\"refresh\" label=\"Atnaujinti\"><go href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
        echo"<do type=\"Options\" name=\"reply\" label=\"Atsakyti\"><go href=\"forum.php?action=reply&amp;id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
if ($mod == "true") {
        echo"<do type=\"Options\" name=\"mod\" label=\"MOD\"><go href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
}
        echo"<do type=\"Options\" name=\"on\" label=\"Online: $online[0]\"><go href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
}
if ($action == "viewforum") {
        echo"<do type=\"Options\" name=\"r\" label=\"Atnaujinti\"><go href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\"/></do>";
        echo"<do type=\"Options\" name=\"at\" label=\"Kurti Tem&#261;\"><go href=\"forum.php?action=addtopic&amp;id=$id&amp;forum=$forum\"/></do>";
if ($mod == "true") {
        echo"<do type=\"Options\" name=\"mod\" label=\"MOD\"><go href=\"forum.php?action=mod&amp;id=$id&amp;forum=$forum\"/></do>";
}
        echo"<do type=\"Options\" name=\"on\" label=\"Online: $online[0]\"><go href=\"forum.php?action=online&amp;id=$id&amp;forum=$forum\"/></do>";
}
echo"<do type=\"Options\" name=\"inbox\" label=\"D&#279;&#382;ut&#279; [$pm[0]/$tpm[0]]\"><go href=\"pm.php?id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
if ($action == "reply") {
        echo"<do type=\"Options\" name=\"sm\" label=\"Veidukai\"><go href=\"forum.php?action=smilies&amp;id=$id\"/></do>";
}
if (($action !== "viewtopic") and ($forum > 0) and ($topic > 0)) {
        echo"<do type=\"Options\" name=\"btt\" label=\"&#302; Tem&#261;\"><go href=\"forum.php?action=viewtopic&amp;id=$id&amp;forum=$forum&amp;topic=$topic\"/></do>";
}
if (($action !== "viewforum") and (($forum > 0) and ($forum !== "00"))) {
        echo"<do type=\"Options\" name=\"btf\" label=\"&#302; Forum&#261;\"><go href=\"forum.php?action=viewforum&amp;id=$id&amp;forum=$forum\"/></do>";
}
if ($action == "") {
///echo"<do type=\"Options\" name=\"stats\" label=\"Statistika\"><go href=\"forum.php?action=stats&amp;id=$id\"/></do>";
        echo"<do type=\"Options\" name=\"smilies\" label=\"Veidukai\"><go href=\"forum.php?action=smilies&amp;id=$id\"/></do>";
        echo"<do type=\"Options\" name=\"logout\" label=\"Atsijungti\"><go href=\"index.php?action=logout&amp;id=$id\"/></do>";
}
if ($action !== "")  {
        echo"<do type=\"Options\" name=\"btfs\" label=\"&#302; Forumus\"><go href=\"forum.php?id=$id\"/></do>";
}
if (($action == "") or ($action == "clubs") or ($action == "usersforums")) {
        echo"<do type=\"Options\" name=\"h\" label=\"&#302; Prad&#382;i&#261;\"><go href=\"index.php?id=$id\"/></do>";
}}
echo"</card></wml>";
mysql_close($db);
?>
