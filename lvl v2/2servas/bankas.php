<?php
include_once("core.php");
$kur = "Bankas";
include ("config.php");

if ($id == ""){ 



echo"<div class=\"center\">Bankas</div>
     Pinigai esantys banke priauga po 0.2% kas 3h,nes banka remia <a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=\"><font color=\"Blue\">kazino</font></a>,jeigu kazino sedi minuse tada pinigai nepriauga,jei norite kad priaugtu pinigai reikia buti kokiame nors pulke arba tureti pulka<br/>
     <br><b>Pinigu paemimas/padejimas</b>
     <b>Turi banke pinigu: $kit[54]</b><br/>
     Kiek isimsi:<br/>
     <form action='bankas.php?nick=$nick&amp;pass=$pass&amp;id=imu' method='post'>
     <input name=\"kiek\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/><br/>
     <input type='submit' value='Imti'></form>
     <b>Turi pinigu: $pinigai</b><br/>
     Kiek padesi:<br/>
     <form action='bankas.php?nick=$nick&amp;pass=$pass&amp;id=dedu' method='post'>
     <input name=\"kiek2\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"Kiek\"/><br/>
     <input type='submit' value='Deti'></form>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

if($kit[54] < 0){
            echo "<p align=\"center\"><small><b>Atrodo, kad chytinate - jums banas iki gyvos galvos.</b><br/>
            $lin<br/>";
            echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Pradzia</a><br/></small></p>";

        // dedu bana zaidejui, kuris bande deti i topica savo reklama
             $ban_time = time() + 15 * 60 * 6000; // 90000 minuciu banas
             $fp = fopen("txt/nick_bans.txt", "a");
             fwrite($fp, "$nick|$ban_time|dx|\n");
             fclose($fp);
             $iras = $ban_time - time();
             $fp6 = fopen("txt/ban_log.txt", "a");
             /*
             $kam_ban - kam skirtas banas
             $iras - kiek laiko, sekundemis
             $kuode - kodel uzbanino
             $vrd - kas uzbanino
             $laikas - kada uzbanino

             */
             fwrite($fp6, "$nick|$iras|del banko|$laikas|\n");
             fclose($fp6);
 }

if ($id == "imu") {
$kiek = $_POST['kiek'];
$kiek=ereg_replace("[^0-9]","",$kiek); 


if ($kit[54]<$kiek){ $badux = "<div class='klaida'>Klaida!</div>Tiek pinigu banke nera!"; }
if ($badux == ""){
$badux = "Paimta <u>$kiek</u> pinigu.";
$kit[54] = $kit[54]-$kiek;
$pinigai = $pinigai+$kiek;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<div class=\"center\">$badux</div><br>
     <div class=\"center\"><a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">I Banka</a></div>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

if ($id == "dedu") {
$kiek = $_POST['kiek2'];
$kiek=ereg_replace("[^0-9]","",$kiek); 
if ($pinigai<$kiek){ $badux = "Klaida!<br>Tiek pinigu neturi!"; }
if (1000>$kiek){ $badux = "Klaida!<br>Turi deti minimum 1000!"; }
if ($badux == ""){
$nuska = round(($kiek/100)*0,0); 
$pad = $kiek-$nuska; 
$badux = "Pasidejai y banka <u>$kiek</u> pinigu.";
$kit[54] = $kit[54]+$kiek;
$pinigai = $pinigai-$kiek;
if($kit[54] > 2000000000){

$number = $kit[54];

$kit[54] = sprintf("%.3e", $number); // outputs 3.625e+8
}
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
} 
echo"<div class=\"center\">$badux</div><br>
     <div class=\"center\"><a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">I Banka</a></div>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}


print '</body></html>';

?>