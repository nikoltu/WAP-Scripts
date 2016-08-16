<?php
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*10-10;
$iki=10;
$arti=mysql_query("SELECT * FROM pm order by id desc LIMIT $nuo,$iki");
while($row=mysql_fetch_array($arti)){
$name=$row['name'];
$nick=$row['nick'];
$text=$row['text'];
echo"<small>Kas:<a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$name\">$name</a></small><br/><small>Kam:<a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$nick\">$nick</a></small><br/><small>Tekstas:$text<a href=\"index.php?id=$id&amp;action=delpm&amp;pid=$row[id]\">[X]</a>";
echo"</small><br/>$line<br/>";}
$tarti=mysql_query("SELECT COUNT(name) AS num FROM pm");
$total=($tarti) ? mysql_result($tarti, 0, 'num') : 0;
$vpsl=ceil($total/10);
if(($total>10) and ($vpsl>$psl)){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=rpmd&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=rpmd&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}






?>