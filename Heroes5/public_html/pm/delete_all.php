<?php
mysql_query("DELETE FROM pm WHERE nick='$user[username]' and active<2");
mysql_query("UPDATE users SET all_pm=0, new_pm=0 WHERE username='$user[username]' LIMIT 1");
echo"<small>Visos gautos priva&#269;ios &#382;inut&#279;s i&#353;trintos!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>