<?php
function level() {
	$level[2] = 100;
	$level[3] = 200;
	$level[4] = 320;
	$level[5] = 460;
	$level[6] = 620;
	$level[7] = 800;
	$level[8] = 1000;
	$level[9] = 1220;
	return $level;
}
function expierence($exp) {
	if ($exp >= 1220) { $lvl = 9; }
	elseif ($exp >= 1000) { $lvl = 8; }
	elseif ($exp >= 800) { $lvl = 7; }
	elseif ($exp >= 620) { $lvl = 6; }
	elseif ($exp >= 460) { $lvl = 5; }
	elseif ($exp >= 320) { $lvl = 4; }
	elseif ($exp >= 200) { $lvl = 3; }
	elseif ($exp >= 100) { $lvl = 2; }
	else { $lvl = 1; }
	return $lvl;
}
?>