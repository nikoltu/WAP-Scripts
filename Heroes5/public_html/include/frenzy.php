<?
$tn=time();
if($user[immortal]>time()){
$fre=$user[immortal]-$tn;
mysql_query("UPDATE users SET immortal='0',fre='$fre' where username='$user[username]'");
$fr="Sustabdyta";}
else {
$fre=$user[fre]+$tn;
mysql_query("UPDATE users SET immortal='$fre',fre='0' where username='$user[username]'");
$fr="Paleista";}
echo"<small>$fr</small>";
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";