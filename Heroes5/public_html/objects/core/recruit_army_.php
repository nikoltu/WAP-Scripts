<?php
$file = @fopen("users.txt", "r");
flock($file, 1);
$count = fgets($file, 255);
if ($count == "") { $count = 0; }
fclose($file);

$refresh_time = floor($refresh * $day_length);
if ((($object[id] == "")) or (($object[time] + $refresh_time < $time))) {
	$object[info] = mt_rand($basic + floor($count * $i1), $basic + floor($count * $i1));
}

if ($n == "") {
	include_once("units/$unit.php");
	include_once("names/units.php");
	include_once("names/special.php");
	include_once("core/my_army.php");
	if (((substr($object[info], strlen($object[info]) - 2, 2) >= 10) and (substr($object[info], strlen($object[info]) - 2, 2) <= 20)) or ((substr($object[info], strlen($object[info]) - 1, 1) == "0"))) {
		$unit_name = $unit_name_p3[$unit];
	}
	elseif (substr($object[info], strlen($object[info]) - 1, 1) == "1") {
		$unit_name = $unit_name_s1[$unit];
	}
	else {
		$unit_name = $unit_name_p1[$unit];
	}
	$sunit_name = $unit_name_s1[$unit];
	$uunit_info = $unit_info;
	$user_unit_info = $uunit_info;
	@include_once("heroes/$user[class]/$user[identify].php");
	$user_unit_info = @buy_unit($unit, $user_unit_info);
	$user_unit_info[attack] = $user_unit_info[attack] + $user[attack];
	$user_unit_info[defense] = $user_unit_info[defense] + $user[defense];
	echo"<small><b>$object[info] $unit_name</b></small><br/><img src=\"img/units/$unit.gif\" alt=\"$sunit_name\"/><br/><small><i>Ataka: $uunit_info[attack] ($user_unit_info[attack])</i></small><br/><small><i>Gynyba: $uunit_info[defense] ($user_unit_info[defense])</i></small><br/>";
	if ("$user_unit_info[health]" !== "$uunit_info[health]") {
		echo"<small><i>Gyvyb&#279;s: $uunit_info[health] ($user_unit_info[health])</i></small><br/>";
	}
	else {
		echo"<small><i>Gyvyb&#279;s: $uunit_info[health]</i></small><br/>";
	}
	if (($uunit_info[min] == $uunit_info[max])) {
		$d1 = "$uunit_info[min]";
	}
	else {
		$d1 = "$uunit_info[min]-$uunit_info[max]";
	}
	if (("$user_unit_info[min]" !== "$uunit_info[min]") or ("$user_unit_info[max]" !== "$uunit_info[max]")) {
		if (($user_unit_info[min] == $user_unit_info[max])) {
			$d2 = "$user_unit_info[min]";
		}
		else {
			$d2 = "$user_unit_info[min]-$user_unit_info[max]";
		}
		echo"<small><i>&#381;ala: $d1 ($d2)</i></small><br/>";
	}
	else {
		echo"<small><i>&#381;ala: $d1</i></small><br/>";
	}
	if (($uunit_info[shoot] == "1") or ($uunit_info[spec] !== "") or ($uunit_info[spec2] !== "")) {
		echo"<small><i><u>Papildoma:</u></i></small><br/>";
		if ($uunit_info[shoot] == "1") {
			echo"<small><i>&#353;audo</i></small><br/>";
		}
		if ($uunit_info[spec] !== "") {
			$special = $special_name[$uunit_info[spec]];
			echo"<small><i>$special</i></small><br/>";
		}
		if ($uunit_info[spec2] !== "") {
			$special = $special_name[$uunit_info[spec2]];
			echo"<small><i>$special</i></small><br/>";
		}
	}
	if ($uunit_info[cost2] !== "") {
		include_once("core/resources.php");
		$res = explode("-", $uunit_info[cost2]);
		$ress = strtolower(resource($res[1], $res[0]));
		echo"<small><i>Kaina: $uunit_info[cost] aukso ir $res[0] $ress</i></small><br/>$line<br/>";
	}
	else {
		echo"<small><i>Kaina: $uunit_info[cost] aukso</i></small><br/>$line<br/>";
	}
	$have = 0;
	if ($army_unit[0] == "$unit") { $have = $army_quantity[0]; }
	if ($army_unit[1] == "$unit") { $have = $army_quantity[1]; }
	if ($army_unit[2] == "$unit") { $have = $army_quantity[2]; }
	if ($army_unit[3] == "$unit") { $have = $army_quantity[3]; }
	$non = "none";
	if ($uunit_info[nonupg] !== "") {
		if ($army_unit[0] == "$uunit_info[nonupg]") { $non = 0; }
		if ($army_unit[1] == "$uunit_info[nonupg]") { $non = 1; }
		if ($army_unit[2] == "$uunit_info[nonupg]") { $non = 2; }
		if ($army_unit[3] == "$uunit_info[nonupg]") { $non = 3; }
	}
	if (($have == "0") and ($total_units == "4")) {
		echo"<small>Negalite tur&#279;ti daugiau nei keturi&#371; r&#363;&#353;i&#371; kari&#371;.</small><br/>";
	}
	if ($total_units < 5) {
		if ($uunit_info[cost2] !== "") {
			$max1 = floor($user[gold]/$uunit_info[cost]);
			$max2 = floor($user[$res[1]]/$uunit_info[cost2]);
			if ($max1 <= $max2) {
				$max = $max1;
			}
			else {
				$max = $max2;
			}
			if ($max > $object[info]) {
				$max = $object[info];
			}
		}
		else {
			$max = floor($user[gold]/$uunit_info[cost]);
			if ($max > "$object[info]") {
				$max = $object[info];
			}
		}
		$punit_name = $unit_name_p3[$unit];
		echo"<small><u>Turite $punit_name: $have</u></small><br/><input format=\"*N\" name=\"h$time\" maxlength=\"6\" size=\"6\" value=\"$max\"/><br/><small><anchor>[+Pirkti+]<go href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$m&amp;n=buy&amp;nn=$time\" method=\"post\"><postfield name=\"$time\" value=\"$(h$time)\"/></go></anchor></small><br/>";
		if ($non !== "none") {
			echo"$line<br/>";
		}
	}
	if ($non !== "none") {
		require_once("units/$uunit_info[nonupg].php");
		$uuunit_info = $unit_info;
		$res1 = explode("-", $uunit_info[cost2]);
		$res2 = explode("-", $uuunit_info[cost2]);
		$max1 = floor($user[gold]/($uunit_info[cost]-$uuunit_info[cost]));
		if (strlen($res1[1]) > 0) {
			if ($res2[0] == "") {
				$res2[0] = 0;
			}
			@$max2 = floor($user['$res1[1]']/($res1[0]-$res2[0]));
			if ($max2 == "") { $max2 = 0; }
			if ($max1 < $max2) {
				$max = $max1;
			}
			else {
				$max = $max2;
			}
		}
		else {
			$max = $max1;
		}
		if ($max1 > $army_quantity[$non]) {
			$max = $army_quantity[$non];
		}
		if ($max == "1") {
			$uunit_name = $unit_name_s2[$uunit_info[nonupg]];
		}
		else {
			$uunit_name = $unit_name_p2[$uunit_info[nonupg]];
		}
		$ttime = $time - 1;
		$punit_name = $unit_name_p3[$uunit_info[nonupg]];
		echo"<small><u>Turite $punit_name: $army_quantity[$non]</u></small><br/><input format=\"*N\" name=\"h$ttime\" maxlength=\"6\" size=\"6\" value=\"$max\"/><br/><small><anchor>[+Tobulinti+]<go href=\"index.php?action=object&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;m=$m&amp;n=upgrade&amp;nn=$ttime\" method=\"post\"><postfield name=\"$ttime\" value=\"$(h$ttime)\"/></go></anchor></small><br/>";
	}
	if (($total_units < 4) or ($non !== "none")) {
		echo"$line<br/>";
		echo"<small><u>Turite aukso: $user[gold]</u></small><br/>";
		if ($uunit_info[cost2] !== "") {
			$ress = strtolower(resource($res[1], 10));
			$res = $user[$res[1]];
			echo"<small><u>Turite $ress: $res</u></small><br/>";
		}
	}
}

if ($n == "upgrade") {
	$nn = addslashes(htmlspecialchars($_GET['nn']));
	$q = addslashes(htmlspecialchars($_POST["$nn"]));



	if (($q == "") or ($q < 0)) {
		$q = 0;
		echo"<small>Negalite nieko netobulinti.</small><br/>";
	}
	else {
		include_once("units/$unit.php");
		$uunit_info = $unit_info;
		include_once("names/units.php");
		include_once("core/my_army.php");
		if ($q == "1") {
			$unit_name = $unit_name_s2[$unit_info[nonupg]];
		}
		else
			$unit_name = $unit_name_p2[$unit_info[nonupg]];
		}
		$non = "none";
		if ($uunit_info[nonupg] !== "") {
			if ($army_unit[0] == "$uunit_info[nonupg]") { $non = 0; }
			if ($army_unit[1] == "$uunit_info[nonupg]") { $non = 1; }
			if ($army_unit[2] == "$uunit_info[nonupg]") { $non = 2; }
			if ($army_unit[3] == "$uunit_info[nonupg]") { $non = 3; }
		}
	}
	if (($q > 0) and ($non == "none")) {
		echo"<small>Nieko negalite &#269;ia tobulinti.</small><br/>";
	}
	if (($q > 0) and ($non !== "")) {
		include_once("units/$uunit_info[nonupg].php");
		$uuunit_info = $unit_info;
		$res1 = explode("-", $uunit_info[cost2]);
		$res2 = explode("-", $uuunit_info[cost2]);
		$max1 = floor($user[gold]/($uunit_info[cost]-$uuunit_info[cost]));
		if (strlen($res1[1]) > 0) {
			if ($res2[0] == "") {
				$res2[0] = 0;
			}
			@$max2 = floor($user['$res1[1]']/($res1[0]-$res2[0]));
			if ($max2 == "") { $max2 = 0; }
			if ($max1 < $max2) {
				$max = $max1;
			}
			else {
				$max = $max2;
			}
		}
		else {
			$max = $max1;
		}
		if ($max1 > $army_quantity[$non]) {
			$max = $army_quantity[$non];
		}
		if ($max == "1") {
			$uunit_name = $unit_name_s2[$uunit_info[nonupg]];
		}
		else {
			$uunit_name = $unit_name_p2[$uunit_info[nonupg]];
		}
		if (($q > $max) and ($non !== "none")) {
			echo"<small>Neu&#382;tenka resurs&#371;.</small><br/>";
		}
		elseif ($non !== "none") {
			if (($total_units == "4") and ($q < $army_quantity[$non])) {
				echo"<small>Neu&#382;tenka resurs&#371; patobulinti visus $uunit_name.</small>";
			}
			elseif ($q >= $army_quantity[$non]) {
				$q = $army_quantity[$non];
				$attack = $uunit_info[attack] - $uuunit_info[attack];
				$defense = $uunit_info[defense] - $uuunit_info[defense];
				$health = $uunit_info[health] - $uuunit_info[health];
				$min = $uunit_info[min] - $uuunit_info[min];
				$max = $uunit_info[max] - $uuunit_info[max];
				$name = strtolower($user[username]);
				if (($army_unit[0] == $unit) or ($army_unit[1] == $unit) or ($army_unit[2] == $unit) or ($army_unit[3] == $unit)) {
					$queries++;
					$queries++;
					mysql_query("UPDATE army SET quantity=quantity+$army_quantity[$non] WHERE username='$name' and unit='$unit' LIMIT 1");
					mysql_query("DELETE FROM army WHERE username='$name' and unit='$uunit_info[nonupg]' LIMIT 1");
				}
				else {
					$queries++;
					mysql_query("UPDATE army SET unit='$unit', attack=attack+$attack, defense=defense+$defense, health=health+$health, min_damage=min_damage+$min, max_damage=max_damage+$max WHERE username='$name' and unit='$uunit_info[nonupg]' LIMIT 1");
				}
				if (strlen($res1[1]) > 0) {
					$c1 = $q * ($uunit_info[cost] - $uuunit_info[cost]); 
					$c2 = $q * ($res1[0] - $res2[0]);
					$cc = $user[$res[1]];
					$queries++;
					mysql_query("UPDATE users SET gold=gold-$c1, $cc=$cc-$c2 WHERE session='$id' LIMIT 1");
				}
				else {
					$c1 = $q * ($uunit_info[cost] - $uuunit_info[cost]);
					$queries++;
					mysql_query("UPDATE users SET gold=gold-$c1 WHERE session='$id' LIMIT 1");
				}
			}
			elseif ($q < $army_quantity[$non]) {
				$name = strtolower($user[username]);
				if (($army_unit[0] == $unit) or ($army_unit[1] == $unit) or ($army_unit[2] == $unit) or ($army_unit[3] == $unit)) {
					$queries++;
					$queries++;
					mysql_query("UPDATE army SET quantity=quantity+$q WHERE username='$name' and unit='$unit' LIMIT 1");
					mysql_query("UPDATE army SET quantity=quantity-$q WHERE username='$name' and unit='$uunit_info[nonupg]' LIMIT 1");
				}
				else {

					include_once("heroes/$user[class]/$user[identify].php");
					$unit_info = @buy_unit($unit, $unit_info);
					$unit_info[attack] = $unit_info[attack] + $user[attack];
					$unit_info[defense] = $unit_info[defense] + $user[defense];
					$name = strtolower($user[username]);
					$queries++;
					mysql_query("INSERT INTO army(username, unit, quantity, attack, defense, min_damage, max_damage, health) VALUES ('$name','$unit','$q','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]')");
					$queries++;
					mysql_query("UPDATE army SET quantity=quantity-$q WHERE username='$name' and unit='$uunit_info[nonupg]' LIMIT 1");
				}
				if (strlen($res1[1]) > 0) {
					$c1 = $q * ($uunit_info[cost] - $uuunit_info[cost]); 
					$c2 = $q * ($res1[0] - $res2[0]);
					$cc = $user[$res[1]];
					$queries++;
					mysql_query("UPDATE users SET gold=gold-$c1, $cc=$cc-$c2 WHERE session='$id' LIMIT 1");
				}
				else {
					$c1 = $q * ($uunit_info[cost] - $uuunit_info[cost]);
					$queries++;
					mysql_query("UPDATE users SET gold=gold-$c1 WHERE session='$id' LIMIT 1");
				}
			}
			echo"<small>Patobulinote $q $unit_name.</small><br/>";
		}
}


if ($n == "buy") {
	$nn = addslashes(htmlspecialchars($_GET['nn']));
	$q = addslashes(htmlspecialchars($_POST["$nn"]));
	if (($q == "") or ($q < 0)) {
		$q = 0;
		echo"<small>Negalite nieko nepirkti.</small><br/>";
	}
	else {
		include_once("units/$unit.php");
		include_once("names/units.php");
		include_once("core/my_army.php");
		if ($q == "1") {
			$unit_name = $unit_name_s2[$unit];
		}
		else
			$unit_name = $unit_name_p2[$unit];
		}
		$have = 0;
		if ($army_unit[0] == "$unit") { $have = $army_quantity[0]; }
		if ($army_unit[1] == "$unit") { $have = $army_quantity[1]; }
		if ($army_unit[2] == "$unit") { $have = $army_quantity[2]; }
		if ($army_unit[3] == "$unit") { $have = $army_quantity[3]; }
	}
	if (($q > 0) and ($have == "0") and ($total_units == "4")) {
		echo"<small>Negalite tur&#279;ti daugiau nei keturi&#371; r&#363;&#353;i&#371; kari&#371;.</small><br/>";

	}
	if (($q > 0) and ($have > 0)) {
		if ($unit_info[cost2] !== "") {
			$res = explode("-", $unit_info[cost2]);
		}
		if ($unit_info[cost2] !== "") {
			$max1 = floor($user[gold]/$unit_info[cost]);
			$max2 = floor($user[$res[1]]/$res[0]);
			if ($max1 <= $max2) {
				$max = $max1;
			}
			else {
				$max = $max2;
			}
			if ($max > $object[info]) {
				$max = $object[info];
			}
		}
		else {
			$max = floor($user[gold]/$unit_info[cost]);
			if ($max > "$object[info]") {
				$max = $object[info];
			}
		}
		$punit_name = $unit_name_p3[$unit];
		if ($q > $max) {
			echo"<small>Neu&#382;tenka resurs&#371;.</small><br/>";
		}
		else {
			$name = strtolower($user[username]);
			mysql_query("UPDATE army SET quantity=quantity+$q WHERE username='$name' and unit='$unit' LIMIT 1");
			$object[info] = $object[info] - $q;
			if (strlen($unit_info[cost2]) > 0) {
				$c1 = $q * $unit_info[cost]; 
				$c2 = $q * $res[0];
				$cc = $user[$res[1]];
				$queries++;
				mysql_query("UPDATE users SET gold=gold-$c1, $res[1]=$res[1]-$c2 WHERE session='$id' LIMIT 1");
			}
			else {
				$c1 = $q * $unit_info[cost];
				$queries++;
				mysql_query("UPDATE users SET gold=gold-$c1 WHERE session='$id' LIMIT 1");
			}
		echo"<small>Nupirkote $q $unit_name.</small><br/>";
		}
	}
	elseif (($q > 0) and ($total_units < 4) and ($have == "0")) {
		if ($unit_info[cost2] !== "") {
			$res = explode("-", $unit_info[cost2]);
		}
		if ($unit_info[cost2] !== "") {
			$max1 = floor($user[gold]/$unit_info[cost]);
			$max2 = floor($user[$res[1]]/$res[0]);
			if ($max1 <= $max2) {
				$max = $max1;
			}
			else {
				$max = $max2;
			}
			if ($max > $object[info]) {
				$max = $object[info];
			}
		}
		else {
			$max = floor($user[gold]/$unit_info[cost]);
			if ($max > "$object[info]") {
				$max = $object[info];
			}
		}
		$punit_name = $unit_name_p3[$unit];
		if ($q > $max) {
			echo"<small>Neu&#382;tenka resurs&#371;.</small><br/>";
		}
		else {
			include_once("heroes/$user[class]/$user[identify].php");
			$unit_info = @buy_unit($unit, $unit_info);
			$unit_info[attack] = $unit_info[attack] + $user[attack];
			$unit_info[defense] = $unit_info[defense] + $user[defense];
			$object[info] = $object[info] - $q;
			$queries++;
			$name = strtolower($user[username]);
			mysql_query("INSERT INTO army(username, unit, quantity, attack, defense, min_damage, max_damage, health) VALUES ('$name','$unit','$q','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]')");
			if (strlen($unit_info[cost2]) > 0) {
				$c1 = $q * $unit_info[cost]; 
				$c2 = $q * $res[0];
				$cc = $user[$res[1]];
				$queries++;
				mysql_query("UPDATE users SET gold=gold-$c1, $cc=$cc-$c2 WHERE session='$id' LIMIT 1");
			}
			else {
				$c1 = $q * $unit_info[cost];
				$queries++;
				mysql_query("UPDATE users SET gold=gold-$c1 WHERE session='$id' LIMIT 1");
			}
			echo"<small>Nupirkote $q $unit_name.</small><br/>";			
	}
}

?>