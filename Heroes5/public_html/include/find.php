<?

$hero=$_POST['hero'];
$psl=$_POST['psl'];
if(!$psl){
$psl=1;}
$nuo=$psl*15-15;
echo"<small><i>Nebutina rasyti pilno vardo ($user[username]) galima pvz. Pirmas 3raides</i></small><br/>";
echo"<input type=\"text\" name=\"hero\"/><br/>
<small><anchor>Ie&#353;koti<go method=\"post\" href=\"index.php?id=$id&amp;action=find\"><postfield name=\"hero\" value=\"$(hero)\"/></go></anchor></small>";
echo"<br/>$line<br/>";
if($hero){
$ies=mysql_query("SELECT COUNT(username) AS num FROM users where username LIKE '%$hero%'");
$ties=($ies) ? mysql_result($ies, 0, 'num') : 0;

$find=mysql_query("SELECT username  FROM users where username LIKE '%$hero%' LIMIT $nuo,15");
while($row=mysql_fetch_array($find)){
$usr=$row['username'];
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$usr\">$usr</a></small><br/>";}
$vpsl=ceil($ties/15);
if(($ties>15) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>&gt;&gt;&gt;<go method=\"post\" href=\"index.php?action=ns&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>&lt;&lt;&lt;<go method=\"post\" href=\"index.php?action=ns&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}
echo"<small>Viso rasta:<b>$ties</b></small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";



?>