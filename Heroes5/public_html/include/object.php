<?php
$place = $i;
include_once("online.php");
$m = addslashes(htmlspecialchars($_GET['m'])); if (!$m) { $m = ""; }
$n = addslashes(htmlspecialchars($_GET['n'])); if (!$n) { $n = ""; }
include_once("map/$i/$j/$k.php");
if (($obj[0] !== "$m") and ($obj[1] !== "$m") and ($obj[2] !== "$m") and ($obj[3] !== "$m") and ($obj[4] !== "$m") and ($obj[5] !== "$m")) {
	echo"<small><b>Neegzistuojantis objektas.</b></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
include_once("objects/$m.php");
include_once("names/objects.php");
include_once("names/lands.php");
include_once("names/territories.php");
include_once("names/territories2.php");
$object = $object_name[$m];
$land = $land_name[$i];
$territory = $territory_name[$j];
$territory2 = $territory2_name[$k];
echo"<small><b>$territory2</b></small><br/><small>$object</small>";
if ($n == "") {
	if (!file_exists("img/objects/$m.gif")) {
		if ($header !== "") {
			echo"<br/>$line<br/><small>$header</small>";
		}
	}
	else {
		echo"<br/><img src=\"img/objects/$m.gif\" alt=\"$object\"/>";
		if ($header !== "") {
			echo"<br/><small>$header</small>";
		}
	}
}
echo"<br/>$line<br/>";
$queries++;
$object = mysql_fetch_array(mysql_query("SELECT * FROM objects WHERE location='$i-$j-$k' and object='$m' LIMIT 1"));
$oobject = $object[info];
include_once("objects/core/$type.php");
if ($object[id] == "") {
	$queries++;
	mysql_query("INSERT INTO objects(location, object, time, info) VALUES ('$i-$j-$k', '$m', '$time', '$object[info]')");
}
elseif ($object[time] + $refresh_time < $time) {
	$queries++;
	mysql_query("UPDATE objects SET time='$time', info='$object[info]' WHERE location='$i-$j-$k' and object='$m' LIMIT 1");
}
elseif ($oobject !== $object[info]) {
	$queries++;
	mysql_query("UPDATE objects SET info='$object[info]' WHERE location='$i-$j-$k' and object='$m' LIMIT 1");
}
echo"$line</p><p align=\"left\"><small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
?>