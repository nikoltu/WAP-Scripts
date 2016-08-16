<?php
if ($i == "") {
	$nsent = mysql_num_rows(mysql_query("SELECT id FROM pm WHERE name='$user[username]' and active='0' LIMIT 50"));
	$ll = 50 - $nsent;
	$sent = mysql_num_rows(mysql_query("SELECT id FROM pm WHERE name='$user[username]' and active='1' LIMIT $ll"));
	$sent = $sent + $nsent;
	$saved = mysql_num_rows(mysql_query("SELECT id FROM pm WHERE nick='$user[username]' and active='2' LIMIT 50"));
	echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>Santrauka</small><br/>$line<br/><small><a href=\"pm.php?action=sent&amp;id=$id\">I&#353;si&#371;stos [$nsent/$sent]</a></small><br/><small><a href=\"pm.php?action=saved&amp;id=$id\">I&#353;saugotos [$saved]</a></small><br/>$line<br/><small><a href=\"pm.php?action=summary&amp;id=$id&amp;i=help\">[?] Pagalba</a></small><br/>$line<br/>";
}
if ($i == "help") {
	echo"<small><b>Priva&#269;ios &#382;inut&#279;s</b></small><br/><small>[?] Pagalba</small><br/>$line<br/><small><b>Gautos:</b> galite gauti iki 100 priva&#269;i&#371; &#382;inu&#269;i&#371;. Jei tur&#279;site daugiau, tada sistema jas automati&#353;kai i&#353;trins, tad patariame i&#353;sitrinti nereikalingas patiems prie&#353; tai. Pliusas rei&#353;kia, kad j&#363;s dar neperskait&#279;te &#382;inut&#279;s, o minusas, kad j&#363;s jau tai padar&#279;te.<br/><b>I&#353;si&#371;stos:</b> yra parodoma 50 j&#363;s&#371; v&#279;liausiai i&#353;si&#371;st&#371; priva&#269;i&#371; &#382;inu&#269;i&#371;. Pliusas rei&#353;kia, kad vartotojas dar neperskait&#279; j&#363;s&#371; &#382;inut&#279;s, o minusas, kad jis jau tai padar&#279;.<br/><b>I&#353;saugotos:</b> galite i&#353;saugoti iki 50 pa&#269;i&#371; svarbiausi&#371; &#382;inu&#269;i&#371;.</small><br/>$line<br/>";
}
echo"<small><a href=\"pm.php?id=$id\">$back</a></small><br/><small><a href=\"index.php?id=$id&amp;lang=$lang\">$home</a></small>";
?>