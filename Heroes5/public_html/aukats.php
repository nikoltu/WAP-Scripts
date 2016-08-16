<?php
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*10-10;
$iki=10;
$arti=mysql_query("SELECT * FROM aukatas order by id desc LIMIT $nuo,$iki");
while($row=mysql_fetch_array($arti)){
$text=$row['text'];
echo"<small>Tekstas:$text";
echo"</small><br/>$line<br/>";}
$tarti=mysql_query("SELECT COUNT(id) AS num FROM aukatas");
$total=($tarti) ? mysql_result($tarti, 0, 'num') : 0;
$vpsl=ceil($total/10);
if(($total>10) and ($vpsl>$psl)){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=aukats&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=aukats&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}






?>