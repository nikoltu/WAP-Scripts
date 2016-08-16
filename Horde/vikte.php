<?php

header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Viktorinoje";
include("config.php"); 

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Viktorinoje"){ $pok[] = $et[0]; }}
$online3 = count($pok); 

/////////////////Pagr pokalbiu lapas//////////////////

if ($id == ""){
echo"<onevent type=\"ontimer\"><go href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"150\"/>";
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
        fclose($open); echo"Ruosiamas kitas klausimas...<br/>
-<br/>";  }
if (time() >= $baiksis){ if (time() < $ruosiama){
$liko = $ruosiama-time(); 
echo"Ruosiamas kitas klausimas...<br/>
Iki klausimo liko $liko sec.<br/>-<br/>"; }}
if (time() >= $ruosiama){ $file = file("vikt_klsms_ir_atss256.txt"); $rand = rand(0,count($file)); $is = explode("|",$file[$rand]); 
$t = time();
$open = fopen("txt/vikte.txt","w");
        fwrite($open, "$is[0]|$is[1]|$t|\n");
        fclose($open);
} 
if ($baiksis > time()){ echo"$klausimas<br/>
$rodoma$nerodoma<br/>-<br/>"; }

echo"
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=on\">Online: $online3</a><br/>-<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Atnaujinti</a><br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=rasyti\">Rasyti</a><br/>
</small></p>";

$DATA_FILE = "txt/zinutes2.txt";
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

	?>
	<p align="center">
<small>
Zinute:<br/>
	<input name="zinute" type="text" maxlength="200" title="Zinute" value=""/><br/>
<anchor title="Irasyti">
	Irasyti<go href="<? print "vikte.php?nick=$nick&amp;pass=$pass&amp;id=rasau"; ?>" method="post">

	<postfield name="zinute" value="$zinute"/>

</go></anchor></small></p>
	<?
}

/////////////////Rasymo funkc///////////////////////

if ($id == "rasau"){
if (time() < $floo){ echo"<p align=\"center\"><small>Palauk kelias sekundes<br/>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/></small></p>"; }
else{
$zinute = $_POST['zinute'];

$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);

$arr = array("^","%","\n");

$zinute = str_replace($arr,"",$zinute);

$zinute = htmlspecialchars($zinute);
include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>5){ $zin = "Perdaug smailu!"; }

$np = file("txt/zinutes2.txt");
$kiek_np = count($np);
for($o=0; $o < $kiek_np; $o++) {
$op = explode("|",$np[$o]);
if ($zinute == $op[1]){ $zin = "Tokia zinute jau yra!"; } }

if (strlen($zinute) > 250){ $zin = "Zinute per ilga!"; }

if ($turixp < 500){ $zin = "Rasyti galesi tik nuo 500xp!"; }

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
        fwrite($open2, "@BOTAS|$vrd atsake teisingai! Gavo 0.02kristalo!|\n");
        fclose($open2); $kristalu = $kristalu + 0.02; 

$file = file("vikt_klsms_ir_atss256.txt"); $rand = rand(0,count($file)); $is = explode("|",$file[$rand]); 
$t = time();
$opent = fopen("txt/vikte.txt","w");
        fwrite($opent, "$is[0]|$is[1]|$t|\n");
        fclose($opent); }

$zin = "Zinute irasyta"; }
echo"<onevent type=\"ontimer\"><go href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\"/></onevent><timer value=\"2\"/>";
    echo"<p align=\"center\"><small>$zin<br/>
$lin<br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorina</a></small></p>
";
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kristalu");
fclose($fp);
} }

if ($id == "on"){echo "<p align=\"left\"><small>Dabar viktorinoje:<br/>
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
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorina</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a><br/></small></p>";
}

print'</card></wml>';

?>