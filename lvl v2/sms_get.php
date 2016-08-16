<?php
$aps = $_GET['from'];
$ap = $_GET['id'];

/* tikrinam jei keli parametrai tusti tada vartotojas sukciauja ir nutraukiam skripto vygdyma*/
if($aps== '' or $ap=='')
{
echo "Nesukciauk, reklama kaiciama tik per sms! $aps";
exit;
}
//priimam sms, irasom i faila
$ppp = addslashes(htmlspecialchars($_GET['sms']));

$ppp = str_replace("lgzzreklama ", "", $ppp);
$ppp = str_replace("Lgzzreklama ", "", $ppp);
$ppp = str_replace("LGZZREKLAMA ", "", $ppp);

echo "Reklama sekmingai pakeista! Artixas.Puslapiai.lt";  ///cia ta isvedam vartotojui jei reklama pakeista
$wau = @explode(' ', $ppp);
$aaa = @file_get_contents('sms_reklama.txt');
$as=@explode('|', $aaa);
$onwrite = "$wau[0]|$wau[1] $wau[2] $wau[3] $wau[4]|$as[0]|$as[1]|$as[2]|$as[3]|";
$bug=fopen('sms_reklama.txt', "w+");
fwrite($bug, $onwrite);
fclose($bug);

?>
