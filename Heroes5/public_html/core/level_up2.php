<?php
if ($lvl == "2") {
	$army_attack2[$k]++;
	$army_defense2[$k]++;
}
if ($lvl == "3") {
	$army_attack2[$k] = $army_attack2[$k] + 2;
	$army_defense2[$k] = $army_defense2[$k] + 2;
	$army_health2[$k] = ceil($army_health2[$k] * 1.05);
}
if ($lvl == "4") {
	$army_attack2[$k] = $army_attack2[$k] + 3;
	$army_defense2[$k] = $army_defense2[$k] + 3;
	$army_health2[$k] = ceil($army_health2[$k] * 1.1) + 1;
	$army_min2[$k] = $army_min2[$k];
	$army_max2[$k] = $army_max2[$k];
}
if ($lvl == "5") {
	$army_attack2[$k] = $army_attack2[$k] + 4;
	$army_defense2[$k] = $army_defense2[$k] + 4;
	$army_health2[$k] = ceil($army_health2[$k] * 1.15) + 2;
	$army_min2[$k] = $army_min2[$k] + 1;
	$army_max2[$k] = $army_max2[$k] + 1;
}
if ($lvl == "6") {
	$army_attack2[$k] = $army_attack2[$k] + 5;
	$army_defense2[$k] = $army_defense2[$k] + 5;
	$army_health2[$k] = ceil($army_health2[$k] * 1.25) + 3;
	$army_min2[$k] = $army_min2[$k] + 1;
	$army_max2[$k] = $army_max2[$k] + 1;
}
if ($lvl == "7") {
	$army_attack2[$k] = $army_attack2[$k] + 6;
	$army_defense2[$k] = $army_defense2[$k] + 6;
	$army_health2[$k] = ceil($army_health2[$k] * 1.25) + 5;
	$army_min2[$k] = $army_min2[$k] + 2;
	$army_max2[$k] = $army_max2[$k] + 2;
}
if ($lvl == "8") {
	$army_attack2[$k] = $army_attack2[$k] + 8;
	$army_defense2[$k] = $army_defense2[$k] + 8;
	$army_health2[$k] = ceil($army_health2[$k] * 1.4) + 5;
	$army_min2[$k] = ceil($army_min2[$k] * 1.1) + 2;
	$army_max2[$k] = ceil($army_max2[$k] * 1.1) + 2;
}
if ($lvl == "9") {
	$army_attack2[$k] = $army_attack2[$k] + 10;
	$army_defense2[$k] = $army_defense2[$k] + 10;
	$army_health2[$k] = ceil($army_health2[$k] * 1.5) + 5;
	$army_min2[$k] = ceil($army_min2[$k] * 1.1) + 3;
	$army_max2[$k] = ceil($army_max2[$k] * 1.5) + 3;
}
?>