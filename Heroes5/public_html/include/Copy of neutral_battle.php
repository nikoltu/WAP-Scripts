<?
if ($user[battle] > time()) {
	$s = $user[battle] - $time;
	echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">";
	include_once("names/lands.php");
	include_once("names/territories.php");
	include_once("names/territories2.php");
	$land = $land_name[$i];
	$territory = $territory_name[$j];
	$territory2 = $territory2_name[$k];
	echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
$m = addslashes(htmlspecialchars($_GET['event'])); if (!$m) { $m = ""; }
$queries++;
$battle = mysql_fetch_array(mysql_query("SELECT * FROM nbattle WHERE id='$m' LIMIT 1"));
if ($battle[active] == "1") {
	$queries++;
	$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
	if ($event[id] > 0) {
		$queries++;
		mysql_query("DELETE FROM nbattle WHERE id='$m' LIMIT 1");
	}
	echo"<small><b>Neegzistuojantis &#303;vykis.</b></small><br/>$line</p><p align=\"left\">";
	include_once("names/lands.php");
	include_once("names/territories.php");
	include_once("names/territories2.php");
	$land = $land_name[$i];
	$territory = $territory_name[$j];
	$territory2 = $territory2_name[$k];
	echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
	mysql_close($db);
	exit;
}
if ($battle[id] == "") {
	$queries++;
	$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
	if ($event[unit] == "") {
		echo"<small><b>Neegzistuojantis &#303;vykis.</b></small><br/>$line</p><p align=\"left\">";
		include_once("names/lands.php");
		include_once("names/territories.php");
		include_once("names/territories2.php");
		$land = $land_name[$i];
		$territory = $territory_name[$j];
		$territory2 = $territory2_name[$k];
		echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
	else {
		$battle[heroe] = strtolower($user[username]);
		$battle[round] = 1;
		$ch = 30;
		if (mt_rand(0, 100) >= $ch) {
			$battle[turn] = "d|1";
		}
		else {
			$battle[turn] = "a|1";
		}
		$battle[unit] = $event[unit];
		$battle[expierence] = $event[expierence];
		$battle[resource] = $event[resource];
		$battle[q_unit] = $event[q_unit];
		$battle[q_res] = $event[q_res];
		$battle[artifact] = $event[artifact];
		$queries++;
		mysql_query("UPDATE army SET hp='0' WHERE username='$battle[heroe]'");
		include("units/$battle[unit].php");
		$army_health[0] = $unit_info[health];
		include_once("core/unit_level.php");
		$level = level();
		$exp = floor($battle[expierence] / $battle[q_unit]);
		$lvl = expierence($exp);
		if ($lvl < 9) {
			$nextlvl = $level[$lvl+1] * $battle[q_unit];
			$left = $nextlvl - $battle[expierence];
		}
		if ($lvl > 1) {
			$kk = $k;
			$k = 0;
			include_once("core/level_up.php");
			$k = $kk;
		}
		$unit_health = $army_health[0];
		$queries++;
		mysql_query("INSERT INTO nbattle(id, health, heroe, round, turn, unit, expierence, resource, q_unit, q_res, artifact, time) VALUES ('$m', '$unit_health', '$battle[heroe]', '$battle[round]', '$battle[turn]', '$battle[unit]', '$battle[expierence]', '$battle[resource]', '$battle[q_unit]', '$battle[q_res]', '$battle[artifact]','$time')");
	}
}
if ($battle[heroe] !== strtolower($user[username])) {
	$c = mysql_fetch_array(mysql_query("SELECT place, time, username FROM users WHERE username='$battle[heroe]' LIMIT 1"));
	$queries++;
	if (($c[0] !== $place) or ($c[1] < $time)) {
		$name = strtolower($user[username]);
		$battle[round] = 1;
		$ch = 30;
		if (mt_rand(0, 100) >= $ch) {
			$battle[turn] = "d|1";
		}
		else {
			$battle[turn] = "a|1";
		}
		$queries++;
		$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
		include("units/$event[unit].php");
		$army_health[0] = $unit_info[health];
		include_once("core/unit_level.php");
		$level = level();
		$exp = floor($event[expierence] / $event[q_unit]);
		$lvl = expierence($exp);
		if ($lvl < 9) {
			$nextlvl = $level[$lvl+1] * $event[q_unit];
			$left = $nextlvl - $event[expierence];
		}
		if ($lvl > 1) {
			$kk = $k;
			$k = 0;
			include_once("core/level_up.php");
			$k = $kk;
		}
		$battle[unit] = $event[unit];
		$battle[heroe] = $name;
		$battle[q_unit] = $event[q_unit];
		$battle[health] = $army_health[0];
		$queries++;
		mysql_query("UPDATE nbattle SET heroe='$name', round='$battle[round]', turn='$battle[turn]', q_unit='$event[q_unit]', health='$battle[health]', time='$time' WHERE id='$m' LIMIT 1");
		$queries++;
		mysql_query("UPDATE army SET hp='0' WHERE username='$battle[heroe]'");
		}
	else {
		echo"<small><a href=\"index.php?action=nick_info&amp;i=$i&amp;j=$j&amp;k=$k&amp;id=$id&amp;name=$c[2]\">$c[2]</a>&nbsp;jau kaunasi &#353;ioje kovoje.</small><br/>$line</p><p align=\"left\">";
		include_once("names/lands.php");
		include_once("names/territories.php");
		include_once("names/territories2.php");
		$land = $land_name[$i];
		$territory = $territory_name[$j];
		$territory2 = $territory2_name[$k];
		echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
		mysql_close($db);
		exit;
	}
}

$turn = explode("|", $battle[turn]);
if ($turn[0] == "d") {
	include("names/units.php");
	include("units/$battle[unit].php");
	$uunit_special = $unit_info[spec];
	$uunit_special2 = $unit_info[spec2];
	$uunit_shoot = $unit_info[shoot];
	$army_attack[0] = $unit_info[attack];
	$army_defense[0] = $unit_info[defense];
	$army_health[0] = $unit_info[health];
	$army_min[0] = $unit_info[min];
	$army_max[0] = $unit_info[max];
	$expp = $unit_info[exp];
	include_once("core/unit_level.php");
	$level = level();
	$exp = floor($battle[expierence] / $battle[q_unit]);
	$lvl = expierence($exp);
	if ($lvl > 1) {
		$kk = $k;
		$k = 0;
		include_once("core/level_up.php");
		$k = $kk;
	}
	$uunit_attack = $army_attack[0];
	$uunit_defense = $army_defense[0];
	$uunit_health = $army_health[0];
	$uunit_max = $army_max[0];
	$uunit_min = $army_min[0];
	include("core/my_army.php");
	$who = mt_rand(1, $total_units) - 1;
	if ($army_hp[$who] == "0") {
		$exppp = $army_expierence[$who];
		include_once("core/unit_level.php");
		$exppp = floor($exppp / $army_quantity[$who]);
		$lvl = expierence($exppp);
		if ($lvl > 1) {
			$kk = $k;
			$k = 5;
			$army_health[$k] = $army_health[$who];
			include("core/level_up.php");
			$army_hp[$who] = $army_health[$k];
			$army_health[$who] = $army_health[$k];
			$k = $kk;
		}
		else {
			$army_hp[$who] = $army_health[$who];
		}
	}
	$dmg = mt_rand($uunit_min * $battle[q_unit], $uunit_max *  $battle[q_unit]);
	if ($uunit_attack >= $army_defense[$who]) {
		$dmg = floor($dmg + $dmg * (($uunit_attack - $army_defense[$who]) * 2 / 100) + 1);
	}
	else {
		$dmg = floor($dmg - $dmg * (($army_defense[$who] - $uunit_attack) * 1.5 / 100) + 1);
	}

	/// SPECIALITIES

	if (($uunit_special == "attack_twice") or ($uunit_special2 == "attack_twice")) {
		$dmg = $dmg * 2;
	}
	if (($uunit_special == "hate_efreet") and (($army_unit[$who] == "efreet") or ($army_unit[$who] == "efreet_sultan"))) {
		$dmg = $dmg * 1.5;
	}
	if (($uunit_special == "do_150_against_dragons") and ($army_unit[$who] == "bone_dragon")) {
		$dmg = $dmg * 1.5;
	}





	if ($dmg > 4 * $uunit_max *  $battle[q_unit]) {
		$dmg = 4 * $uunit_max *  $battle[q_unit];
	}
	if ($dmg < floor(0.3 * $uunit_min *  $battle[q_unit])) {
		$dmg = floor(0.3 * $uunit_min *  $battle[q_unit]);
	}
	if ($dmg >= $army_hp[$who]) {
		$kill = 1;
		if ($dmg - $army_hp[$who] >= $army_health[$who]) {
			$army_hp[$who] = $army_health[$who] - ($dmg - (floor($dmg/$army_health[$who]) * $army_health[$who]));
			if ($army_unit[$who] == "wight") {
				$army_hp[$who] = $army_health[$who];
			}
			$kill = $kill + floor($dmg/$army_health[$who]) - 1;
		}	
		else {
			$army_hp[$who] = $army_health[$who] - $dmg;
		}
		$queries++;
		mysql_query("UPDATE army SET hp=$army_hp[$who], quantity=quantity-$kill WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
	}
	else {
		$army_hp[$who] = $army_health[$who] - $dmg;
		$queries++;
		mysql_query("UPDATE army SET hp=$army_hp[$who] WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
	}

	if ($kill >= $army_quantity[$who]) {
		$kill = $army_quantity[$who];
		$queries++;
		mysql_query("DELETE FROM army WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
	}

	if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
		$unit_name = $unit_name_p3[$battle[unit]];
	}
	elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
		$unit_name = $unit_name_s1[$battle[unit]];
	}
	else {
		$unit_name = $unit_name_p1[$battle[unit]];
	}
	if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
		$uunit_name = $unit_name_p3[$army_unit[$who]];
	}
	elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
		$uunit_name = $unit_name_s2[$army_unit[$who]];
	}
	else {
		$uunit_name = $unit_name_p2[$army_unit[$who]];
	}
	$uu = $unit_name_s1[$battle[unit]];
	if ($user[pics] > 0) echo"<img src=\"img/units/$battle[unit].gif\" alt=\"$uu\"/><br/>";
	echo"<small><u>$battle[q_unit] $unit_name atakavo $army_quantity[$who] $uunit_name.</u></small><br/>";
	if ($kill > 0) {
		if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
			$unit_name = $unit_name_p3[$army_unit[$who]];
		}
		elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
			$unit_name = $unit_name_s2[$army_unit[$who]];
		}
		else {
			$unit_name = $unit_name_p2[$army_unit[$who]];
		}
	}
	echo"<small>Padar&#279; $dmg &#382;alos.</small>";
	if ($kill > 0) {
		echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
	}
	echo"<br/>";
	$army_quantity[$who] = $army_quantity[$who] - $kill;
	if (($army_quantity[$who] > 0) and ($uunit_shoot == "0") and ($uunit_special !== "no_retaliaton") and ($uunit_special2 !== "no_retaliaton")) {
		$dmg = mt_rand($army_min[$who] * $army_quantity[$who], $army_max[$who] *  $army_quantity[$who]);
		if ($army_attack[$who] >= $uunit_defense) {
			$dmg = floor($dmg + $dmg * (($army_attack[$who] - $uunit_defense) * 2 / 100) + 1);
		}
		else {
			$dmg = floor($dmg - $dmg * (($uunit_defense - $army_attack[$who]) * 1.5 / 100) + 1);
		}
		include("units/$army_unit[$who].php");

		/// SPECIALITIES

		if (($unit_info[spec] == "attack_twice") or ($unit_info[spec2] == "attack_twice")) {
			$dmg = $dmg * 2;
		}
		if (($unit_info[spec] == "hate_efreet") and (($battle[unit] == "efreet") or ($battle[unit]  == "efreet_sultan"))) {
			$dmg = $dmg * 1.5;
		}
		if (($unit_info[spec] == "do_150_against_dragons") and ($battle[unit] == "bone_dragon")) {
			$dmg = $dmg * 1.5;
		}
		if (($user[identify] == "valeska") and (($army_unit[$who] == "archer") or ($army_unit[$who] == "marksman"))) {
			$dmg = floor($dmg * 1.15);
		}
		if (($user[identify] == "kyrre") and (($army_unit[$who] == "elf") or ($army_unit[$who] == "grand_elf"))) {
			$dmg = floor($dmg * 1.1);
		}
		if (($user[identify] == "wystan") and (($army_unit[$who] == "lizardman") or ($army_unit[$who] == "lizard_warrior"))) {
			$dmg = floor($dmg * 1.15);
		}
		if (($user[identify] == "jabarkas") and (($army_unit[$who] == "orc") or ($army_unit[$who] == "orc_chieftan"))) {
			$dmg = floor($dmg * 1.2);
		}





		if ($dmg > 4 * $army_max[$who] *  $army_quantity[$who]) {
			$dmg = 4 * $army_max[$who] *  $army_quantity[$who];
		}
		if ($dmg < floor(0.3 * $army_min[$who] * $army_quantity[$who])) {
			$dmg = floor(0.3 * $army_min[$who] * $army_quantity[$who]);
		}
		$kill = 0;
		if ($dmg >= $battle[health]) {
			$kill = 1;
			if ($dmg - $battle[health] >= $uunit_health) {
				$battle[health] = $battle[health] - $dmg;
				while ($battle[health] < 0) $battle[health] += $uunit_health;
				if ($battle[unit] == "wight") {
					$battle[health] = $uunit_health;
				}
				$kill = $kill + floor($dmg/$uunit_health) - 1;
			}
			else {
				$battle[health] = $battle[health] - $dmg;
			}
			$exp = floor((($battle[q_unit]-$kill)/$battle[q_unit]) * $battle[expierence]);
			$queries++;
			mysql_query("UPDATE nbattle SET q_unit=q_unit-$kill, health='$battle[health]', expierence='$exp' WHERE id='$m' LIMIT 1");
		}
		else {
			$battle[health] = $battle[health] - $dmg;
			$queries++;
			mysql_query("UPDATE nbattle SET health='$battle[health]' WHERE id='$m' LIMIT 1");
		}
		if ($kill >= $battle[q_unit]) {
			$kill = $battle[q_unit];
		}
		$battle[q_unit] = $battle[q_unit] - $kill;
		if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
			$unit_name = $unit_name_p3[$army_unit[$who]];
		}
		elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
			$unit_name = $unit_name_s1[$army_unit[$who]];
		}
		else {
			$unit_name = $unit_name_p1[$army_unit[$who]];
		}
		$uu = $unit_name_s1[$army_unit[$who]];
		if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$who].gif\" alt=\"$uu\"/><br/>";
		echo"<small><u>$army_quantity[$who] $unit_name kontraatakavo.</u></small><br/>";

		if ($kill > 0) {
			if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
				$unit_name = $unit_name_p3[$battle[unit]];
			}
			elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
				$unit_name = $unit_name_s2[$battle[unit]];
			}
			else {
				$unit_name = $unit_name_p2[$battle[unit]];
			}
		}
		echo"<small>Padar&#279; $dmg &#382;alos.</small>";
		if ($kill > 0) {
			echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
		}
		echo"<br/>";
	}
	if (($battle[q_unit] > 0) and (($army_quantity[0] > 0) or ($army_quantity[1] > 0) or ($army_quantity[2] > 0) or ($army_quantity[3] > 0))) {
		echo"<small><a href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;event=$m&amp;time=".time()."\">&#187;&#187;&#187;</a></small><br/>";
	}
}
elseif ($turn[0] == "a") {
	include("names/units.php");
	$turn[1]--;
	$time = addslashes(htmlspecialchars($_GET['time']));
	if (($turn[1] > 0) and ($time !== "no")) {
		$who = $turn[1] - 1;
		include("units/$battle[unit].php");
		$uunit_special = $unit_info[spec];
		$uunit_special2 = $unit_info[spec2];
		$army_attack[0] = $unit_info[attack];
		$army_defense[0] = $unit_info[defense];
		$army_health[0] = $unit_info[health];
		$army_min[0] = $unit_info[min];
		$army_max[0] = $unit_info[max];
		$expp = $unit_info[exp];
		include_once("core/unit_level.php");
		$level = level();
		$exp = floor($battle[expierence] / $battle[q_unit]);
		$lvl = expierence($exp);
		if ($lvl < 9) {
			$nextlvl = $level[$lvl+1] * $battle[q_unit];
			$left = $nextlvl - $battle[expierence];
		}
		if ($lvl > 1) {
			$kk = $k;
			$k = 0;
			include_once("core/level_up.php");
			$k = $kk;
		}
		$uunit_attack = $army_attack[0];
		$uunit_defense = $army_defense[0];
		$uunit_health = $army_health[0];
		$uunit_max = $army_max[0];
		$uunit_min = $army_min[0];
		$uunit_special = $unit_info[spec];
		$uunit_special2 = $unit_info[spec2];
		include("core/my_army.php");
		$who = $turn[1] - 1;
		$dmg = mt_rand($army_min[$who] * $army_quantity[$who], $army_max[$who] *  $army_quantity[$who]);
		if ($army_attack[$who] >= $uunit_defense) {
			@$dmg = floor($dmg + $dmg * (($army_attack[$who] - $uunit_defense) * 2 / 100) + 1);
		}
		else {
			@$dmg = floor($dmg - $dmg * (($uunit_defense - $army_attack[$who]) * 1.5 / 100) + 1);
		}
		include("units/$army_unit[$who].php");
		$uunit_shoot = $unit_info[shoot];
		$uunit_special = $unit_info[spec];
		$uunit_special2 = $unit_info[spec2];

		/// SPECIALITIES 

		if (($unit_info[spec] == "attack_twice") or ($unit_info[spec2] == "attack_twice")) {
			$dmg = $dmg * 2;
		}
		if (($unit_info[spec] == "hate_efreet") and (($battle[unit] == "efreet") or ($battle[unit]  == "efreet_sultan"))) {
			$dmg = $dmg * 1.5;
		}
		if (($unit_info[spec] == "do_150_against_dragons") and ($battle[unit] == "bone_dragon")) {
			$dmg = $dmg * 1.5;
		}
		if (($user[identify] == "valeska") and (($army_unit[$who] == "archer") or ($army_unit[$who] == "marksman"))) {
			$dmg = floor($dmg * 1.15);
		}
		if (($user[identify] == "kyrre") and (($army_unit[$who] == "elf") or ($army_unit[$who] == "grand_elf"))) {
			$dmg = floor($dmg * 1.1);
		}
		if (($user[identify] == "wystan") and (($army_unit[$who] == "lizardman") or ($army_unit[$who] == "lizard_warrior"))) {
			$dmg = floor($dmg * 1.15);
		}
		if (($user[identify] == "jabarkas") and (($army_unit[$who] == "orc") or ($army_unit[$who] == "orc_chieftan"))) {
			$dmg = floor($dmg * 1.2);
		}





		if ($dmg > 4 * $army_max[$who] *  $army_quantity[$who]) {
			$dmg = 4 * $army_max[$who] *  $army_quantity[$who];
		}
		if ($dmg < floor(0.3 * $army_min[$who] * $army_quantity[$who])) {
			$dmg = floor(0.3 * $army_min[$who] * $army_quantity[$who]);
		}
		$kill = 0;
		if ($dmg >= $battle[health]) {
			$kill = 1;
			if ($dmg - $battle[health] >= $uunit_health) {
				$battle[health] = $battle[health] - $dmg;
				while ($battle[health] < 0) $battle[health] += $uunit_health;
				if ($battle[unit] == "wight") {
					$battle[health] = $uunit_health;
				}
				$kill = $kill + floor($dmg/$uunit_health) - 1;
			}
			else {
				$battle[health] = $battle[health] - $dmg;
			}
			$exp = floor((($battle[q_unit]-$kill)/$battle[q_unit]) * $battle[expierence]);
			$queries++;
			mysql_query("UPDATE nbattle SET q_unit=q_unit-$kill, health='$battle[health]', expierence=$exp WHERE id='$m' LIMIT 1");
		}
		else {
			$battle[health] = $battle[health] - $dmg;
			$queries++;
			mysql_query("UPDATE nbattle SET health='$battle[health]' WHERE id='$m' LIMIT 1");
		}
		if ($kill >= $battle[q_unit]) {
			$kill = $battle[q_unit];
		}
		if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
			$unit_name = $unit_name_p3[$army_unit[$who]];
		}
		elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
			$unit_name = $unit_name_s1[$army_unit[$who]];
		}
		else {
			$unit_name = $unit_name_p1[$army_unit[$who]];
		}
		if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
			$uunit_name = $unit_name_p3[$battle[unit]];
		}
		elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
			$uunit_name = $unit_name_s2[$battle[unit]];
		}
		else {
			$uunit_name = $unit_name_p2[$battle[unit]];
		}
		$uu = $unit_name_s1[$army_unit[$who]];
		if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$who].gif\" alt=\"$uu\"/><br/>";
		echo"<small><u>$army_quantity[$who] $unit_name atakavo $battle[q_unit] $uunit_name.</u></small><br/>";
		$battle[q_unit] = $battle[q_unit] - $kill;
		if ($kill > 0) {
			if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
				$unit_name = $unit_name_p3[$battle[unit]];
			}
			elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
				$unit_name = $unit_name_s2[$battle[unit]];
			}
			else {
				$unit_name = $unit_name_p2[$battle[unit]];
			}
		}
		echo"<small>Padar&#279; $dmg &#382;alos.</small>";
		if ($kill > 0) {
			echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
		}
		echo"<br/>";
		$kill = 0;
		if (($battle[q_unit] > 0) and ($uunit_shoot == "0") and ($uunit_special !== "no_retaliaton") and ($uunit_special2 !== "no_retaliaton")) {
			if ($army_hp[$who] == "0") {
				$exppp = $army_expierence[$who];
				include_once("core/unit_level.php");
				$exppp = floor($exppp / $army_quantity[$who]);
				$lvl = expierence($exppp);
				if ($lvl > 1) {
					$kk = $k;
					$k = 5;
					$army_health[$k] = $army_health[$who];
					include("core/level_up.php");
					$army_hp[$who] = $army_health[$k];
					$army_health[$who] = $army_health[$k];
					$k = $kk;
				}
				else {
					$army_hp[$who] = $army_health[$who];
				}
			}
			$dmg = mt_rand($uunit_min * $battle[q_unit], $uunit_max *  $battle[q_unit]);
			if ($uunit_attack >= $army_defense[$who]) {
				@$dmg = floor($dmg + $dmg * (($uunit_attack - $army_defense[$who]) * 2 / 100) + 1);
			}
			else {
				@$dmg = floor($dmg - $dmg * (($army_defense[$who] - $uunit_attack) * 1.5 / 100) + 1);
			}
			if (($uunit_special == "attack_twice") or ($uunit_special2 == "attack_twice")) {
				$dmg = $dmg * 2;
			}
			if (($uunit_special == "hate_efreet") and (($army_unit[$who] == "efreet") or ($army_unit[$who] == "efreet_sultan"))) {
				$dmg = $dmg * 1.5;
			}
			if (($uunit_special == "do_150_against_dragons") and ($army_unit[$who] == "bone_dragon")) {
				$dmg = $dmg * 1.5;
			}
			if ($dmg > 4 * $uunit_max *  $battle[q_unit]) {
				$dmg = 4 * $uunit_max *  $battle[q_unit];
			}
			if ($dmg < floor(0.3 * $uunit_min *  $battle[q_unit])) {
				$dmg = floor(0.3 * $uunit_min *  $battle[q_unit]);
			}
			if ($dmg >= $army_hp[$who]) {
				$kill = 1;
				if ($dmg - $army_hp[$who] >= $army_health[$who]) {											$army_hp[$who] = $army_health[$who] - ($dmg - (floor($dmg/$army_health[$who]) * $army_health[$who]));
					if ($army_unit[$who] == "wight") {
						$army_hp[$who] = $army_health[$who];
					}
					$kill = $kill + floor($dmg/$army_health[$who]) - 1;
				}	
				else {
					$army_hp[$who] = $army_health[$who] - $dmg;
				}
				$queries++;
				mysql_query("UPDATE army SET quantity=quantity-$kill, hp=$army_hp[$who] WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
			}
			else {
				$army_hp[$who] = $army_health[$who] - $dmg;
				$queries++;
				mysql_query("UPDATE army SET hp='$army_hp[$who]' WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
			}
			if ($kill >= $army_quantity[$who]) {
				$kill = $army_quantity[$who];
				$queries++;
				mysql_query("DELETE FROM army WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
			}
			$army_quantity[$who] = $army_quantity[$who] - $kill;
			if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
				$unit_name = $unit_name_p3[$battle[unit]];
			}
			elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
				$unit_name = $unit_name_s1[$battle[unit]];
			}
			else {
				$unit_name = $unit_name_p1[$battle[unit]];
			}
			if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
				$uunit_name = $unit_name_p3[$army_unit[$who]];
			}
			elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
				$uunit_name = $unit_name_s2[$army_unit[$who]];
			}
			else {
				$uunit_name = $unit_name_p2[$army_unit[$who]];
			}
			$uu = $unit_name_s1[$battle[unit]];
			if ($user[pics] > 0) echo"<img src=\"img/units/$battle[unit].gif\" alt=\"$uu\"/><br/>";
			echo"<small><u>$battle[q_unit] $unit_name kontraatakavo.</u></small><br/>";
			if ($kill > 0) {
				if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
					$unit_name = $unit_name_p3[$army_unit[$who]];
				}
				elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
					$unit_name = $unit_name_s2[$army_unit[$who]];
				}
				else {
					$unit_name = $unit_name_p2[$army_unit[$who]];
				}
			}
			echo"<small>Padar&#279; $dmg &#382;alos.</small>";
			if ($kill > 0) {
				echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
			}
			echo"<br/>";
			if ($turn[1] < $total_units) {
				echo"$line<br/>";
			}
		}
	}
	elseif (($turn[1] > 0) and ($time == "no")) {
		include("core/my_army.php");
		$who = $turn[1] - 1;
		if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
			$unit_name = $unit_name_p3[$army_unit[$who]];
		}
		elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
			$unit_name = $unit_name_s1[$army_unit[$who]];
		}
		else {
			$unit_name = $unit_name_p1[$army_unit[$who]];
		}
		$uu = $unit_name_s1[$army_unit[$who]];
		if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$who].gif\" alt=\"$uu\"/><br/>";
		echo"<small><u>$army_quantity[$who] $unit_name praleido &#279;jim&#261;.</u></small><br/>";
	}
	else {
		include("core/my_army.php");
	}
	if (($turn[1] < $total_units) and ($battle[q_unit] > 0)) {
		$turn[1]--;
		if ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units <= $turn[1])) {
			$whoo = 0;
		}
		else {
			$whoo = $turn[1] + 1;
		}
		$turn[1]++;
		if (((substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 2, 2) >= 10) and (substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 2, 2) <= 20)) or ((substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 1, 1) == "0"))) {
			$unit_name = $unit_name_p3[$army_unit[$whoo]];
		}
		elseif (substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 1, 1) == "1") {
			$unit_name = $unit_name_s1[$army_unit[$whoo]];
		}
		else {
			$unit_name = $unit_name_p1[$army_unit[$whoo]];
		}
		if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
			$uunit_name = $unit_name_p3[$battle[unit]];
		}
		elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
			$uunit_name = $unit_name_s2[$battle[unit]];
		}
		else {
			$uunit_name = $unit_name_p2[$battle[unit]];
		}
		$uu = $unit_name_s1[$army_unit[$whoo]];
		if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$whoo].gif\" alt=\"$uu\"/><br/>";
		echo"<small><b>Esate $army_quantity[$whoo] $unit_name</b></small><br/><small>Pasirinkite k&#261; atakuoti:</small><br/><small><a href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;event=$m&amp;time=".time()."\">$battle[q_unit] $uunit_name</a></small><br/>$line<br/><small><a href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;event=$m&amp;time=no\">Praleisti &#279;jim&#261;</a></small><br/>";

	}
	else {
		if (($battle[q_unit] > 0) and (($army_quantity[0] > 0) or ($army_quantity[1] > 0) or ($army_quantity[2] > 0) or ($army_quantity[3] > 0))) {
		echo"<small><a href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;event=$m&amp;time=".time()."\">&#187;&#187;&#187;</a></small><br/>";
		}
	}
}
if ($battle[q_unit] == "0") {
	$event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
	include_once("core/unit_level.php");
	$exp = floor($event[expierence] / $event[q_unit]);
	$lvl = expierence($exp);
	$expierence = ceil($expp * $event[q_unit] * ((10 + $lvl) / 10));
	$btime = time() + 180;
	if ($event[unit] == "bone_dragon") {
		$btime = $btime + 60;
	}
	if ($user[immortal] > time()) $btime = time() + 60;
	$exp = floor($expierence / $total_units);
	$queries++;
	mysql_query("UPDATE army SET expierence=expierence+$exp WHERE username='$battle[heroe]' LIMIT $total_units");
	$queries++;
	mysql_query("UPDATE nbattle SET q_unit='$event[q_unit]', active='1' WHERE id='$m' LIMIT 1");
	$queries++;
	mysql_query("DELETE FROM map WHERE id='$m' LIMIT 1");
	echo"$line<br/><small><b>J&#363;s laim&#279;jote!</b></small><br/><small><u>Gavote patirties: $expierence</u></small><br/>$line";
	if ($event[resource] !== "") {
		include_once("core/resources.php");
		if ($event[resource] == "gold") {
			$event[q_res] = $event[q_res] * 10;
			$res = "Aukso";
			$ress = "Auksas";
		}
		else {
			$res = resource($event[resource], $event[q_res]);
			$ress = resource($event[resource], 1);
		}
		$res = strtolower($res);
		echo"<br/><small><u>Gavote $event[q_res] $res!</u></small><br/><img src=\"img/resources/$event[resource].gif\" alt=\"$ress\"/><br/>$line";
		$queries++;
		mysql_query("UPDATE users SET battle='$btime', expierence=expierence+$expierence, $event[resource]=$event[resource]+$event[q_res] WHERE username='$user[username]' LIMIT 1");
	}
	else {
		$queries++;
		mysql_query("UPDATE users SET battle='$btime', expierence=expierence+$expierence WHERE username='$user[username]' LIMIT 1");
	}
	echo"</p><p align=\"left\">";
	include_once("names/lands.php");
	include_once("names/territories.php");
	include_once("names/territories2.php");
	$land = $land_name[$i];
	$territory = $territory_name[$j];
	$territory2 = $territory2_name[$k];
	echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
	echo"</p></card></wml>";
	mysql_close($db);
	exit;
}
elseif (($army_quantity[0] < 1) and ($army_quantity[1] < 1) and ($army_quantity[2] < 1) and ($army_quantity[3] < 1)) {
	$btime = time() + 600;
	if ($event[unit] == "bone_dragon") {
		$btime = $btime + 120;
	}
	if ($user[immortal] > time()) $btime = time() + 200;
	mysql_query("UPDATE users SET battle='$btime' WHERE username='$user[username]' LIMIT 1");
	echo"$line<br/><small><b>J&#363;s pralaim&#279;jote!</b></small><br/>$line</p><p align=\"left\">";
	include_once("names/lands.php");
	include_once("names/territories.php");
	include_once("names/territories2.php");
	$land = $land_name[$i];
	$territory = $territory_name[$j];
	$territory2 = $territory2_name[$k];
	echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/><small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
	echo"</p></card></wml>";
	mysql_close($db);
	exit;
}
$turn[1]++;
echo"$line<br/>";
if ($turn[0] == "a") {
	echo"<small><u>J&#363;s&#371; eil&#279;</u></small><br/>";
	$t = $turn[1] - 1;
	if ($t< 1) {
		$t = 1;
	}
	echo"<small>&#278;jimas [$t/$total_units]</small><br/>";
}
else {
	echo"<small><u>Prie&#353;o eil&#279;</u></small><br/>";
	echo"<small>&#278;jimas [1/1]</small><br/>";
}
echo"<small>Raundas [$battle[round]]</small><br/>$line<br/><small><a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">&#171; Pab&#279;gti</a></small>";
if ($turn[0] == "d") {
	$turn[0] = "a";
	$turn[1] = 1;
}
else {
	$turn[1]++;
	if ($turn[1] == $total_units + 1) {
	}
	elseif ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units <= $turn[1])) {
		$turn[1] = 1;
		$turn[0] = "d";
		$battle[round]++;
	}
	elseif ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units > $turn[1])) {
		$turn[1]++;
	}
}
$queries++;
mysql_query("UPDATE nbattle SET round='$battle[round]', turn='$turn[0]|$turn[1]' WHERE id='$m' LIMIT 1");
?>