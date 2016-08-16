<?php

$mekeke=$_POST['mekeke'];
if($mekeke){
$btime=time()+3600;
mysql_query("update users set battle='$btime' where username='$user[username]'");
      mysql_query("DELETE FROM nbattle WHERE id='$mekeke' LIMIT 1");
echo"<small>Pab&#279;gote</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
}

?>