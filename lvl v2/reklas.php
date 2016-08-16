<?php
// Si faila includinti galesite kur noresite matyti savo reklama



$reklamu=mysql_num_rows(mysql_query("SELECT * FROM reklama"));
$nusk = mysql_query("SELECT * FROM reklama ORDER BY RAND() DESC LIMIT 1");
while($view = mysql_fetch_array($nusk)) {
$antraste = $view["antraste"];
$url = $view["url"];
echo" <a href=\"rek.php\">* Rondom Reklama *</a><br/>";
print"<small><a href=\"http://$url\">$antraste</a></small><br/>";}
if($reklamu=="0"){print"<small><a href=\"rek.php\">* Rondom Reklama *</a></small><br/>";}

?>
