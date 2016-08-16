<?php
if ($lvl == "2") {
	$army_attack[$k]++;
	$army_defense[$k]++;
}
if ($lvl == "3") {
	$army_attack[$k] = $army_attack[$k] + 2;
	$army_defense[$k] = $army_defense[$k] + 2;
	$army_health[$k] = ceil($army_health[$k] * 1.05);
}
if ($lvl == "4") {
	$army_attack[$k] = $army_attack[$k] + 3;
	$army_defense[$k] = $army_defense[$k] + 3;
	$army_health[$k] = ceil($army_health[$k] * 1.1) + 1;
	$army_min[$k] = $army_min[$k];
	$army_max[$k] = $army_max[$k];
}
if ($lvl == "5") {
	$army_attack[$k] = $army_attack[$k] + 4;
	$army_defense[$k] = $army_defense[$k] + 4;
	$army_health[$k] = ceil($army_health[$k] * 1.15) + 2;
	$army_min[$k] = $army_min[$k] + 1;
	$army_max[$k] = $army_max[$k] + 1;
}
if ($lvl == "6") {
	$army_attack[$k] = $army_attack[$k] + 5;
	$army_defense[$k] = $army_defense[$k] + 5;
	$army_health[$k] = ceil($army_health[$k] * 1.25) + 3;
	$army_min[$k] = $army_min[$k] + 1;
	$army_max[$k] = $army_max[$k] + 1;
}
if ($lvl == "7") {
	$army_attack[$k] = $army_attack[$k] + 6;
	$army_defense[$k] = $army_defense[$k] + 6;
	$army_health[$k] = ceil($army_health[$k] * 1.25) + 5;
	$army_min[$k] = $army_min[$k] + 2;
	$army_max[$k] = $army_max[$k] + 2;
}
if ($lvl == "8") {
	$army_attack[$k] = $army_attack[$k] + 8;
	$army_defense[$k] = $army_defense[$k] + 8;
	$army_health[$k] = ceil($army_health[$k] * 1.4) + 5;
	$army_min[$k] = ceil($army_min[$k] * 1.1) + 2;
	$army_max[$k] = ceil($army_max[$k] * 1.1) + 2;
}
if ($lvl == "9") {
	$army_attack[$k] = $army_attack[$k] + 10;
	$army_defense[$k] = $army_defense[$k] + 10;
	$army_health[$k] = ceil($army_health[$k] * 1.5) + 5;
	$army_min[$k] = ceil($army_min[$k] * 1.1) + 3;
	$army_max[$k] = ceil($army_max[$k] * 1.5) + 3;
}
?>