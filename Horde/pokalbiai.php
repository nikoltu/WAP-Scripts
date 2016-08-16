<?php

header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Chate";
include("config.php"); 

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Chate"){ $pok[] = $et[0]; }}
$online2 = count($pok); 

/////////////////Pagr pokalbiu lapas//////////////////

if ($id == ""){
echo"<onevent type=\"ontimer\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"150\"/>";
echo"
<do type=\"Options\" label=\"Rasyti\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\"/></do>
<do type=\"Options\" label=\"Zaidimas\"><go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"On: $online2\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=on\"/></do>
<do type=\"Options\" label=\"Refresh\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"Smiles\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=smiles\"/></do>";
echo"
<p align=\"center\"><small>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=on\">Online: $online2</a><br/>-<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">Atnaujinti</a><br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\">Rasyti</a><br/></small></p>";

$DATA_FILE = "txt/zinutes.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);

echo '<p align="left"><small>';

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = 0; $c < 20; $c++)
        {
            $in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);

$masyw = array("@","*");
$nck = str_replace($masyw,"",$nickas);

if ($nickas != "@SISTEMA")
{
echo"
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nck\">$nickas</a></b>: $zinute<br/>";
}
else
{
echo"
<b>$nickas</b>: <u>$zinute</u><br/>";
}
}

echo '</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorina</a> | <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/>
Zinuciu: $viso_pm<br/>
$lin<br/><br/><br/>
</small></p>
";

}
echo '</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>


";
$DATA_FILE = "txt/zinutes.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);

echo '<p align="left"><small>';

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = 0; $c < 20; $c++)
        {
            $in = explode('|', $masyvo_apvertimas[$c]);
$nickas = $in[0];
$zinute = stripslashes($in[1]);
$masyw = array("@","*");
$nck = str_replace($masyw,"",$nickas);
if ($nickas != "@ArChAnGeL!"){
echo"
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nck\">$nickas</a></b>: $zinute<br/>
"; } else { echo"
<b>$nickas</b>: <u>$zinute</u><br/>";  }

}

echo '</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>


";
    if ($stat == "mod")
    {
        echo "
          $iconas<a href=\"viktor.php?nick=$nick&amp;pass=$pass\">Isvalyti zinutes</a><br/>
$lin<br/>
";
    }

echo "
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/>
Zinuciu: $viso_pm<br/>
$lin<br/></small></p>";

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
	Irasyti<go href="<? print "pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=rasau"; ?>" method="post">

	<postfield name="zinute" value="$zinute"/>

</go></anchor></small></p>
	<?
}

/////////////////Rasymo funkc///////////////////////

if ($id == "rasau"){
if (time() < $floo){ echo"<p align=\"center\"><small>Palauk kelias sekundes<br/>
$lin<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/></small></p>"; }
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

if (strlen($zinute) > 200){ $zin = "Zinute per ilga!"; }

if ($zinute == "") { $zin = "Neparasyta zinute!"; }

$np = file("txt/zinutes.txt");
$kiek_np = count($np);
for($o=0; $o < $kiek_np; $o++) {
$op = explode("|",$np[$o]);
if ($zinute == $op[1]){ $zin = "Tokia zinute jau yra!"; } }

if ($lygis < 50){ $zin = "Rasyti galesi tik nuo 50lvl!"; }

$kiek_nv = count(file("txt/zinutes.txt"));
if ($kiek_nv > 10000){ $openn = fopen("txt/zinutes.txt","w");
        fwrite($openn, "");
        fclose($openn); }

if ($zin == ""){
$open = fopen("txt/zinutes.txt","a+");
        fwrite($open, "$vrd|$zinute|\n");
        fclose($open);

$zin = "Zinute irasyta"; }
echo"<onevent type=\"ontimer\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"2\"/>";
echo" <p align=\"center\"><small>$zin<br/>
$lin<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">Chatas</a></small></p>
";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} }

if ($id == "on"){echo "<p align=\"left\"><small>Dabar chate:<br/>
$lin<br/></small></p>";

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) { 
$e=explode("|",$nnn[$i]); 
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$e[0]);
if ($e[2]=="Chate"){
echo"<p align=\"left\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$e[0]</a><br/></small></p>"; }}

echo "<p align=\"center\"><small>$lin<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">Chatas</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/></small></p>";
}

if ($id == "smiles"){echo"<p align=\"left\">
<small>Smiles<br/>
$lin<br/></p>
<p align=\"left\">
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
:geda <img src=\"smiles/22.gif\" alt=\":geda\"/><br/></p>
<p align=\"left\">
$lin<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}

print'</card></wml>';

?>