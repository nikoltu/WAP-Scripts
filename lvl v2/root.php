<?php
$tikrina = @mysql_connect("localhost","wxxw_lgzz2","umagas");
@mysql_select_db("wxxw_lgzz2");

if(!$tikrina)
{
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: text/vnd.wap.wml");

print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.2//EN\"". " \"http://www.wapforum.org/DTD/wml12.dtd\">";
echo "<wml>
<card id=\"indexas\" title=\":: KLAIDA! ::\">
";
echo "<p align=\"center\">
<b>Yviko klaida!</b><br/>
<small><b>Nepavyko prisijunkti prie duomenu bazes.<br/>
Pabandykite perkrauti puslapi!<br/>
&#169; Gedas</b></small><br/>
</p></card></wml>
";

exit;
}

?>