<?php
mysql_query("DELETE FROM pm WHERE username='$user[username]' and active='2'");
echo"<small>I&#353;saugotos priva&#269;ios &#382;inut&#279;s i&#353;trintos!</small><br/>$line<br/><small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>