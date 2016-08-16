<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
echo"<wml><card id=\"heroes\" title=\"dmnx.net\"><p align=\"center\">";
if(!$action){
$home="Pradzia";}
include_once("rekla.php");
echo"</p></card></wml>";
exit;

?>