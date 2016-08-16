<?php
if (!get_magic_quotes_gpc()) {
        $_GET = array_map('trim', $_GET);
        $_POST = array_map('trim', $_POST);
        $_COOKIE = array_map('trim', $_COOKIE);
        $_GET = array_map('addslashes', $_GET);
        $_POST = array_map('addslashes', $_POST);
        $_COOKIE = array_map('addslashes', $_COOKIE);
}
include_once("pizdauskas.php");
$db = @mysql_connect($dbhost, $dbuser, $dbpass) or die("<img src=\"img/banner.gif\" alt=\"$title\"/><br/>$line<br/><small>Problemos jungiantis prie serverio. Pabandykite v&#279;liau.</small><br/></p></card></wml>");
mysql_select_db($dbname, $db);
?>
