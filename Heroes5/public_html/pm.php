<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
include_once("core.php");
echo"<wml><card id=\"heroes\" title=\"$title_total\"><p align=\"center\">";
include("mukaka.php");
$action = addslashes(htmlspecialchars($_GET['action'])); if (!$action) { $action = ""; }
$place="pm";
include_once("online.php");
$id = addslashes(htmlspecialchars($_GET['id'])); if (!$id) { $id = ""; }
$page = addslashes(htmlspecialchars($_GET['page'])); if (!$page) { $page = ""; }
$pm = addslashes(htmlspecialchars($_GET['pm'])); if (!$pm) { $pm = ""; }
$i = addslashes(htmlspecialchars($_GET['i'])); if (!$i) { $i = ""; }
include_once("check.php");
include_once("online.php");

if ($user[ban] > time() && $action == "compose") {
   echo"<small>Jums u&#382;d&#279;tas banas!</small></p></card></wml>";
   mysql_close($db);
   exit;
}

if ($action == "") {
   include_once("pm/show_inbox.php");
}
elseif ($action == "sent") {
   include_once("pm/show_sent.php");
}
elseif ($action == "saved") {
   include_once("pm/show_saved.php");
}
elseif ($action == "summary") {
   include_once("pm/summary.php");
}
elseif ($action == "read") {
   include_once("pm/read_inbox.php");
}
elseif ($action == "readsent") {
   include_once("pm/read_sent.php");
}
elseif ($action == "readsaved") {
   include_once("pm/read_saved.php");
}
elseif ($action == "save") {
   include_once("pm/save_inbox.php");
}
elseif ($action == "savesent") {
   include_once("pm/save_sent.php");
}
elseif ($action == "delete") {
   include_once("pm/delete.php");
}
elseif ($action == "compose") {
   include_once("pm/compose.php");
}
elseif ($action == "deleteread") {
   include_once("pm/delete_read.php");
}
elseif ($action == "deleteall") {
   include_once("pm/delete_all.php");
}
elseif ($action == "deletesaved") {
   include_once("pm/delete_saved.php");
}
echo"</p></card></wml>";
mysql_close($db);
?>
