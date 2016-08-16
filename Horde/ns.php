<?php

header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "NON-STOP";
include("config.php"); 

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="NON-STOP"){ $pok[] = $et[0]; }}
$online2 = count($pok); 

$nnn2=file("txt/ns_dalyviai.txt");
$kiek2=count($nnn2);
for($i2=0; $i2<$kiek2; $i2++) {
$et2=explode("|",$nnn2[$i2]);
if ($et2[0]==$nick){ $yrans = "yra"; break; }}

/*
if ($id == ""){ echo"<p align=\"left\"><small><b>NON-STOP</b><br/>
-<br/>
</small></p><p align=\"left\"><small>
Kolkas informacijos nera apie sekanti NON-STOP...<br/>
</small></p><p align=\"left\"><small>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p></card></wml>"; 
exit; }
*/

if ($id == ""){ echo"<p align=\"left\"><small><u>NON-STOP</u><br/>
-<br/>
</small></p><p align=\"left\"><small>
<u>Pradzia:</u> 2008-09-26 23h.<br/><br/>
<u>Vedejas(ai):</u> kolkas nera!<br/><br/>
<u>Prizai:</u> 1vt-30krd, 2vt-20krd, 3vt-15krd, 4vt-10krd, 5vt-5krd.<br/><br/>
<u>Dalyviai ($kiek2):</u> "; 
for($i2=0; $i2<$kiek2; $i2++) {
$et2=explode("|",$nnn2[$i2]);
if ($i2==0){ echo"$et2[0]"; } else {
echo", $et2[0]"; }}
echo".<br/><br/>
<u>Registracija i NON-STOP</u><br/>
Registracija apmokestinta simboline <u>$kaina0</u> suma, siekiant isvengti betvarkes. Norint uzsiregistruoti reikes issiusti sms.<br/>
Tekstas: <u>$sms0 $nick ns</u><br/>
Numeriu: <u>$nr2</u><br/>
</small></p><p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p></card></wml>"; 
exit; }

if ($yrans != "yra"){ echo"<p align=\"left\"><small>
Siuo metu vyksta NON-STOP, jo metu zaidejai, kurie neuzsiregistravo, neileidziami<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p></card></wml>"; 
exit; }
/////////////////Pagr pokalbiu lapas//////////////////

if ($id == ""){
echo"<onevent type=\"ontimer\"><go href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"150\"/>";
echo"
<do type=\"Options\" label=\"Rasyti\"><go href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\"/></do>
<do type=\"Options\" label=\"Zaidimas\"><go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"Online: $online2\"><go href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=on\"/></do>
<do type=\"Options\" label=\"Atnaujinti\"><go href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"Smiles\"><go href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=smiles\"/></do>";
echo"
<p align=\"center\"><small>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">Atnaujinti</a><br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\">Rasyti</a>
<br/>
-<br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=on\">Online: $online2</a><br/></small></p>";

$DATA_FILE = "txt/ns_zinutes.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);

echo '<p align="left"><small>';

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = 0; $c < 10; $c++)
        {
            $in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);

$masyw = array("@","*");
$nck = str_replace($masyw,"",$nickas);

echo"
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nck\">$nickas</a>: $zinute<br/>
";

}

echo '</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
Zinuciu: $viso_pm<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/>
</small></p>
";

}


/////////////////Rasymas///////////////////////

if ($id == "rasyti") {
echo'<onevent type="onenterforward"><refresh><setvar name="zinute" value=""/></refresh></onevent>';
	?>
	<p align="center">
<small>
Zinute:<br/>
<input name="zinute" type="text" maxlength="200" title="Zinute" value=""/><br/>
<anchor title="Irasyti">
	Irasyti<go href="<? print "ns.php?nick=$nick&amp;pass=$pass&amp;id=rasau"; ?>" method="post">

	<postfield name="zinute" value="$zinute"/>

<small></go></anchor></p>
	<?
}

/////////////////Rasymo funkc///////////////////////

if ($id == "rasau"){
if (time() < $floo){ echo"<p align=\"left\"><small>
Palauk kelias sekundes<br/>
$lin<br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/></small></p>"; }
else{
$zinute = $_POST['zinute'];

$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);

$arr = array("^","%","\n");

$zinute = str_replace($arr,"",$zinute);

$zinute = htmlspecialchars($zinute);

$arr = array("wen.ru","wab.lt","wab.ru","gprs.lt","wapamp.com","uzeik.com","ten.lt","tik.lt","dar.lt","avita.lt","yours.lt",
"zjbs.eu","tinklapiai.com","puslapiai.lt","joui.net","hei.lt","lya.ru","kmx.lt","kmx.ru","da.ru","hostingas.in",
"kissme.in","wapers.us","failai.lt","xfailai.net","domenas.net","tai.lt","wen9.com","wen9.org","wen9.net",
"unixas.org","mix69.net","comein.us","wap3.be",".net",".org",".be",".info",".in","lithit-host.net",

"wen,ru","wab,lt","wab,ru","gprs,lt","wapamp,com","uzeik,com","ten,lt","tik,lt","dar,lt","avita,lt","yours,lt",
"zjbs,eu","tinklapiai,com","puslapiai,lt","joui,net","hei,lt","lya,ru","kmx,lt","kmx,ru","da,ru","hostingas,in",
"kissme,in","wapers,us","failai,lt","xfailai,net","domenas,net","tai,lt","wen9,com","wen9,org","wen9,net",
"unixas,org","mix69,net","comein,us","wap3,be",",com",",net",",org",",be",",info",",in",",lt","lithit-host,net",

"wen ru","wab lt","wab ru","gprs lt","wapamp com","uzeik com","ten lt","tik lt","dar lt","avita lt","yours lt",
"zjbs eu","tinklapiai com","puslapiai lt","joui net","hei lt","lya ru","kmx lt","kmx ru","da ru","hostingas in",
"kissme in","wapers us","failai lt","xfailai net","domenas net","tai lt","wen9 com","wen9 org","wen9 net",
"unixas org","mix69 net","comein us","wap3 be","lithit-host net",

"wenru","wablt","wabru","gprslt","wapampcom","uzeikcom","tenlt","tiklt","darlt","avitalt","yourslt",
"zjbseu","tinklapiaicom","puslapiailt","jouinet","heilt","lyaru","kmxlt","kmxru","daru","hostingasin",
"kissmein","wapersus","failailt","xfailainet","domenasnet","tailt","wen9com","wen9org","wen9net",
"unixasorg","mix69net","comeinus","wap3be",

"wen-ru","wab-lt","wab-ru","gprs-lt","wapamp-com","uzeik-com","ten-lt","tik-lt","dar-lt","avita-lt","yours-lt",
"zjbs-eu","tinklapiai-com","puslapiai-lt","joui-net","hei-lt","lya-ru","kmx-lt","kmx-ru","da-ru","hostingas-in",
"kissme-in","wapers-us","failai-lt","xfailai-net","domenas-net","tai-lt","wen9-com","wen9-org","wen9-net",
"unixas-org","mix69-net","comein-us","wap3-be","-com","-net","-org","-be","-info","-in","-lt",

"wen/ru","wab/lt","wab/ru","gprs/lt","wapamp/com","uzeik/com","ten/lt","tik/lt","dar/lt","avita/lt","yours/lt",
"zjbs/eu","tinklapiai/com","puslapiai/lt","joui/net","hei/lt","lya/ru","kmx/lt","kmx/ru","da/ru","hostingas/in",
"kissme/in","wapers/us","failai/lt","xfailai/net","domenas/net","tai/lt","wen9/com","wen9/org","wen9/net",
"unixas/org","mix69/net","comein/us","wap3/be","/com","/net","/org","/be","/info","/in","/lt","lithit-host/net");

$zinute = str_ireplace($arr,"*****",$zinute);

include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }
if (strlen($zinute) > 250){ $zin = "Zinute per ilga!"; }

if ($zinute == "") { $zin = "Neparasyta zinute!"; }
$kiek_nv = count(file("txt/ns_zinutes.txt"));
if ($kiek_nv > 10000){ $openn = fopen("txt/ns_zinutes.txt","w");
        fwrite($openn, "");
        fclose($openn); }

if ($zin == ""){
$open = fopen("txt/ns_zinutes.txt","a+");
        fwrite($open, "$vrd|$zinute|\n");
        fclose($open);

$zin = "Zinute irasyta"; }
echo" <p align=\"left\"><small>
$zin<br/>
$lin<br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] NON-STOP</a></small></p>
";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} }

if ($id == "on"){echo "<p align=\"left\"><small>
Dabar NON-STOPe:<br/>
$lin<br/></small></p>";

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) { 
$e=explode("|",$nnn[$i]); 
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$e[0]);
if ($e[2]=="NON-STOP"){
echo"<p align=\"left\"><small>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$e[0]</a><br/></small></p>"; }}

echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] NON-STOP</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}

if ($id == "smiles"){echo"<p align=\"left\">
<small>Smiles<br/>
-<br/>
:) <img src=\"smiles/1.gif\" alt=\":)\"/><br/>
:D <img src=\"smiles/2.gif\" alt=\":D\"/><br/>
=) <img src=\"smiles/3.gif\" alt=\"=)\"/><br/>
:P <img src=\"smiles/4.gif\" alt=\":P\"/><br/>
:( <img src=\"smiles/5.gif\" alt=\":(\"/><br/>
:* <img src=\"smiles/6.gif\" alt=\":*\"/><br/>
:@ <img src=\"smiles/7.gif\" alt=\":@\"/><br/>
:fuck <img src=\"smiles/8.gif\" alt=\":fuck\"/><br/>
:ne <img src=\"smiles/9.gif\" alt=\":ne\"/><br/>
:lol <img src=\"smiles/10.gif\" alt=\":lol\"/><br/>
:A <img src=\"smiles/11.gif\" alt=\":A\"/><br/>
:B <img src=\"smiles/12.gif\" alt=\":B\"/><br/>
:O <img src=\"smiles/13.gif\" alt=\":O\"/><br/>
;) <img src=\"smiles/14.gif\" alt=\";)\"/><br/>
=D <img src=\"smiles/15.gif\" alt=\"=D\"/><br/>
:good <img src=\"smiles/16.gif\" alt=\":good\"/><br/>
:rofl <img src=\"smiles/17.gif\" alt=\":rofl\"/><br/>
:xi <img src=\"smiles/18.gif\" alt=\":xi\"/><br/>
:piktas <img src=\"smiles/19.gif\" alt=\":piktas\"/><br/>
:N <img src=\"smiles/20.gif\" alt=\":N\"/><br/>
:box <img src=\"smiles/21.gif\" alt=\":box\"/><br/>
:geda <img src=\"smiles/22.gif\" alt=\":geda\"/><br/></small></p>
<p align=\"left\">
<small>
$lin<br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}

print'</card></wml>';

?>