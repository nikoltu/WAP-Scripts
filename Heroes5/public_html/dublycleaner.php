<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-Control: no-store, no-cache, must-revalidate");
print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.1//EN\""
. " \"http://www.wapforum.org/DTD/wml_1.1.xml\">";
echo"<wml><card id=\"Heroes\" title=\"Heroes\"><p>";
include("mukaka.php");

$dubl=mysql_query("select * from users order by username asc");
while(($dubla=mysql_fetch_array($dubl)) or ($skam[$dubla[username]]<"1")){
if(!$skam[$dubla[username]]){
$skam[$dubla[username]]=0;}
$skam[$dubla[username]]++;
if($skam[$dubla[username]]>"1"){
$skamj=$skam[$dubla[username]];
echo"$dubla[username] $skamj";}
}

echo"</p></card></wml>";
?>