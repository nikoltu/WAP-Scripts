<?php
mysql_query("UPDATE artifacts SET type='potion' where name='magic_potion'");
$tot3=mysql_query("SELECT COUNT(name) AS num FROM artifacts where user='$user[username]'");
$totar=($tot3) ? mysql_result($tot3, 0, 'num') : 0;
if($totar=="0"){
echo"<small>Artifaktu neturite</small><br/>";}
else {
$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*10-10;
$iki=10;
echo"</p><p>";
$arti=mysql_query("SELECT * FROM artifacts where user='$user[username]' order by name asc LIMIT $nuo,$iki");
while($row=mysql_fetch_array($arti)){
$name=$row['name'];
$kiek=$row['kiek'];
$use=$row['det'];
$name2=$artifact_name[$name];
echo"<small><a href=\"index.php?action=ainfo&amp;id=$id&amp;art=$name\">$name2</a>&nbsp;[$kiek]";
if($use=="1"){
echo"&nbsp;Naudojama";}
echo"</small><br/>";}
$tarti=mysql_query("SELECT COUNT(name) AS num FROM artifacts where user='$user[username]'");
$total=($tarti) ? mysql_result($tarti, 0, 'num') : 0;
$vpsl=ceil($total/10);
if(($total>10) and ($vpsl>$psl)){
$psl2=$psl+1;
echo"<small><anchor>[+]Toliau[+]<go method=\"post\" href=\"index.php?action=mymenu&amp;id=$id&amp;n=artifacts\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}
if($psl3>1){
$psl=$psl-1;
echo"<small><anchor>[+]Atgal[+]<go method=\"post\" href=\"index.php?action=mymenu&amp;id=$id&amp;n=artifacts\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}

}




?>