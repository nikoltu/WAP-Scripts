<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Viktorinoje";
include("config.php"); 

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Viktorinoje"){ $pok[] = $et[0]; }}
$online2 = count($pok); 

/////////////////Pagr pokalbiu lapas//////////////////

if ($id == ""){
echo"<onevent type=\"ontimer\"><go href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"150\"/>";
echo"
<do type=\"Options\" label=\"* Rasyti\"><go href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\"/></do>
<do type=\"Options\" label=\"* I zaidima\"><go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"* Refresh\"><go href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\"/></do>
<do type=\"Options\" label=\"* On: $online2\"><go href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=on\"/></do>"; 
echo"<p align=\"center\"><small>"; 
$nss = file_get_contents("txt/vikte.txt"); 
$klu = explode("|",$nss); 
$klausimas = $klu[0]; 
$atsakymas = $klu[1]; 
$pradeta = $klu[2]; 
$raidziu = strlen($atsakymas);
$baiksis = $pradeta+(($raidziu-1)*20); 
$prejo_laiko = time()-$pradeta; 
$rodyt_raidziu = round(($prejo_laiko/20),0); 
$nerodyt = $raidziu-$rodyt_raidziu; 
$rodoma = substr($atsakymas, 0, $rodyt_raidziu); 
$zvs = "*****************************************************************"; 
$nerodoma = substr($zvs, $rodyt_raidziu, $nerodyt); 
$ruosiama = $baiksis+30; 
if ($klausimas == ""){ $file = file("vikt_klsms_ir_atss256.txt"); $rand = rand(0,count($file)); $is = explode("|",$file[$rand]); 
$t = time();
$open = fopen("txt/vikte.txt","w");
        fwrite($open, "$is[0]|$is[1]|$t|\n");
        fclose($open); echo"<b>Ruosiamas kitas klausimas</b><br/>
$lin<br/>";  }
if (time() >= $baiksis){ if (time() < $ruosiama){
$liko = $ruosiama-time(); 
echo"<b>Ruosiamas kitas klausimas</b><br/>
Liko: $liko<br/>$lin<br/>"; }}
if (time() >= $ruosiama){ $file = file("vikt_klsms_ir_atss256.txt"); $rand = rand(0,count($file)); $is = explode("|",$file[$rand]); 
$t = time();
$open = fopen("txt/vikte.txt","w");
        fwrite($open, "$is[0]|$is[1]|$t|\n");
        fclose($open);
} 
if ($baiksis > time()){ echo"$klausimas<br/>
$rodoma$nerodoma<br/>$lin<br/>"; }

echo"

<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\">Rasyti</a> <a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Refresh</a><br/>
</small></p>";

$DATA_FILE = "txt/zinutes2.txt";
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
if ($nickas != "@SISTEMA"){
echo"
<b>&#187; <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nck\">$nickas</a></b>: $zinute<br/>
"; } else { echo"
<b>&#187; $nickas</b>: $zinute<br/>";  }

}

echo '</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=on\">Online: $online2</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a><br/>
$lin<br/>
&#169;finx</small></p>
";

}


/////////////////Rasymas///////////////////////

if ($id == "rasyti") {

	?>
	<p align="center">
<small>
Zinute:<br/></small>
	<input name="zinute" type="text" maxlength="200" title="Zinute" value=""/><br/>
<anchor title="Irasyti">
	Irasyti<go href="<? print "vikte.php?nick=$nick&amp;pass=$pass&amp;id=rasau"; ?>" method="post">

	<postfield name="zinute" value="$zinute"/>

</go></anchor></p>
	<?
}

/////////////////Rasymo funkc///////////////////////

if ($id == "rasau"){
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes</b><br/>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small></p>"; }
else{
$zinute = $_POST['zinute'];

$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);

$arr = array("^","%","\n");

$zinute = str_replace($arr,"",$zinute);

$zinute = htmlspecialchars($zinute);
include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }

if (strlen($zinute) > 250){ $zin = "Zinute per ilga!"; }

if ($zinute == "") { $zin = "Neparasyta zinute!"; }

$kiek_nv = count(file("txt/zinutes2.txt"));
if ($kiek_nv > 10000){ $openn = fopen("txt/zinutes2.txt","w");
        fwrite($openn, "");
        fclose($openn); } 

if ($zin == ""){
$open = fopen("txt/zinutes2.txt","a+");
        fwrite($open, "$vrd|$zinute|\n");
        fclose($open);
        
$nss = file_get_contents("txt/vikte.txt"); 
$klu = explode("|",$nss); 
$atsakymas = $klu[1]; 
if (strtolower($zinute) == strtolower($atsakymas)){
$open2 = fopen("txt/zinutes2.txt","a+");
        fwrite($open2, "@SISTEMA|$vrd atsake teisingai! Gavo 10$$|\n");
        fclose($open2); $pinigai = $pinigai+10; 

$file = file("vikt_klsms_ir_atss256.txt"); $rand = rand(0,count($file)); $is = explode("|",$file[$rand]); 
$t = time();
$opent = fopen("txt/vikte.txt","w");
        fwrite($opent, "$is[0]|$is[1]|$t|\n");
        fclose($opent); }

$zin = "Zinute irasyta"; }
echo" <p align=\"center\"><small><b>$zin</b><br/>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">I viktorina</a></small></p>
";
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} }

if ($id == "on"){echo "<p align=\"center\"><small><b>Dabar viktorinoje:</b><br/>
$lin<br/></small></p>";

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) { 
$e=explode("|",$nnn[$i]); 
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$e[0]);
if ($e[2]=="Viktorinoje"){
echo"<p align=\"left\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$e[0]</a><br/></small></p>"; }}

echo "<p align=\"center\"><small>$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">I viktorina</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";
}

print'</card></wml>';

?>