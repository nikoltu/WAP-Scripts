<?
$text = str_replace(";)", "-:-:-:WiNk:-:-:-", $text);
$text = str_replace("$", "$$", $text);
$text = str_replace("'", "\'", $text);
$text = htmlspecialchars($text);
$text = stripslashes($text);
$text = trim($text);
$text = str_replace(";)", "---WiNk---", $text);
$text = str_replace("-:-:-:WiNk:-:-:-", ";)", $text);
$smiles = mysql_query("SELECT code, url, alt FROM smilies");
while ($smile = mysql_fetch_array($smiles)) {
	$text = str_replace("$smile[0]", "<img src=\"smilies/$smile[1]\" alt=\"$smile[2]\"/>", $text);
}
$text = str_replace("---WiNk---", ";)", $text);
$text = str_replace("[img]http://", "[img]", $text);
$text = preg_replace("/\[img\](.*?)\[\/img\]/i","<<img src=\"\\1\" alt=\"\"/>", $text);
$text = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\">\\0</a>", $text);
$text = str_replace("<<img src=\"", "<img src=\"http://", $text);
$text = preg_replace("/\[b\](.*?)\[\/b\]/i","<b>\\1</b>", $text);
?>