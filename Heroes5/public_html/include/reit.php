<?php
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*15-15;
$nr=$nuo+1;

echo"</p><p>";
$reit=mysql_query("SELECT * FROM ally order by top desc LIMIT $nuo,15");
while($row=mysql_fetch_array($reit)){
$idz=$row['id'];
$pavad=$row['pavadinimas'];
$top=$row['top'];
echo"<small><a href=\"index.php?id=$id&amp;action=ally&amp;idz=$idz\">$nr.".htmlspecialchars($pavad)."</a>&nbsp;[$top]</small><br/>";
$nr++;}
$tot=mysql_query("SELECT COUNT(id) AS num FROM ally");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;

$vpsl=ceil($total/15);
if(($total>15) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>&gt;&gt;&gt;<go method=\"post\" href=\"index.php?action=allyreit&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>&lt;&lt;&lt;<go method=\"post\" href=\"index.php?action=allyreit&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}


echo"</p><p align=\"center\">$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";


?>