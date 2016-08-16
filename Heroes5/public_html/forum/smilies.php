<?php
$show_smilies[0] = 6;
$tsmilies = mysql_fetch_array(mysql_query("SELECT COUNT(code) FROM smilies WHERE alt!='' LIMIT 1"));
echo"<small><b>Veidukai</b></small><br/><small>Viso: $tsmilies[0]</small><br/>$line<br/>";
$limit = $page * $show_smilies[0];
$show = $tsmilies[0] - $limit;
if ($show > $show_smilies[0]) {
	$show = $show_smilies[0];
}
$smiles = mysql_query("SELECT code, url FROM smilies WHERE alt!='' LIMIT $limit, $show_smilies[0]");
while ($smile = mysql_fetch_array($smiles)) {	
	$k++;
	echo"<small>$smile[0]</small>&nbsp;<img src=\"smilies/$smile[1]\" alt=\"$smile[0]\"/><br/>";
}
if ($k == "") {
	echo"<small>Veiduk&#371; n&#279;ra.</small><br/>";
}
echo"$line<br/>";
$pages = ceil($tsmilies[0]/$show_smilies[0]);
if ($pages == "0") { $pages++; }
$page++;
if (($page == 1) and ($pages > 1)) {
	echo"<small><b>1</b></small><small>-</small>";
}
elseif ($pages > 1) {
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id\">1</a></small><small>-</small>";
}
$temp = $page - 2;
$paging = $temp - 1;
if ($paging > 1) {
	echo"<small>...-</small>";
}
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page - 1;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page;
if (($temp > 1) and ($temp < $pages)) {
	echo"<small><b>$temp</b></small><small>-</small>";
}
$temp = $page + 1;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$temp = $page + 2;
if (($temp > 1) and ($temp < $pages)) {
	$paging = $temp - 1;
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$temp</a></small><small>-</small>";
}
$paging = $temp + 1; 
if ($paging < $pages) {
	echo"<small>...-</small>";
}
if ($pages > 1) {
	if (($page == $pages) and ($pages > 1)) {
		echo"<small><b>$pages</b></small>";
	}
	elseif ($page !== $pages) {
	$paging = $pages - 1;
	echo"<small><a href=\"forum.php?action=smilies&amp;id=$id&amp;forum=$forum&amp;page=$paging&amp;topic=$topic&amp;order=$order\">$pages</a></small>";
	}
	elseif ($page > 1) {
		echo"<small><b>$page</b></small>";
	}
}
if ($pages > 1) {
	echo"<br/>";
}
echo"<small>Puslapis: $page/$pages</small><br/>$line<br/><small><a href=\"forum.php?id=$id\">$back_forums</a></small>";
?>