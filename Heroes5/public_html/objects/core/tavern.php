<?php
$m = date("i");
if ($m == "0") { $m = 1; }
$m = ceil($m / (60 / count($hh))) - 1;
if ($head !== "") {
	echo"<small>$head</small><br/>$line<br/>";
}
echo"<small><i>$hh[$m]</i></small><br/>";
?>