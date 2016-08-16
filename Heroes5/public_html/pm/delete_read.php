<?php
mysql_query("DELETE FROM pm WHERE nick='$user[username]' and active='1'");
mysql_query("UPDATE users SET all_pm=new_pm WHERE username='$user[username]' LIMIT 1");
echo"<small>Skaitytos priva&#269;ios &#382;inut&#279;s i&#353;trintos!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>