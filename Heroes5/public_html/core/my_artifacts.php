<?php
$artifacts = explode("=", $user[artifacts]);
$total_artifacts = 0;
for ($ac = 0; $ac < 6; $ac++) {
	if ($artifacts[$ac] !== "") {
		$user_artifact[$sc] = $artifacts[$ac];
		$total_artifacts++;
	}
}
?>