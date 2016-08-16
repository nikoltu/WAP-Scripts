<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo "<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Arenoje";
include ("config.php");
if ($id == "kova_on"){ 

  if (!file_exists("kovos/$nick.txt")){echo"<p align=\"center\"><small>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=sukurti_kovu_faila\">Sukurti kovu faila</a> 
  (butina norint kovoti su kitais zaidejais)<br/></small>
  $lin<br/>
  if (file_exists("kovos/$nick.txt")){
  echo $_GET['sh']; 
    $kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
    $kas_siulo = $lo[1]; 
    $siul_iki = $lo[2]; 
    $siul_susk = $lo[3];
    $siul_rez = $lo[4];
$siul_galios = $siul_iki-time();
    $ar_siulai = $lo[5];
    $kam_siulai = $lo[6];
    $siulai_iki = $lo[7];
    $siulai_susk = $lo[8];
    $siulei_rez = $lo[9]; 
    $atsisake = $lo[10]; 
$siulai_galios = $siulai_iki-time();
}

  echo"<p align=\"center\"><small>
  <b><u>Kitu zaideju siulymai ir rezultatai</u></b><br/></small></p>";
  if ($ar_siulo == "+"){
    if ($siul_iki > time()){ echo"<p align=\"left\"><small><b>Tau siulo kautis</b>: <br/>
  <u>$kas_siulo</u>, pasiulymas galios dar <u>$siul_galios</u> sekundes<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=sutinku_kautis\">Sutinku! kautis!</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nesutinku_kautis\">Nesutinku kautis...</a><br/>
  </small></p>";
  }
  }
  if ($siul_rez == "+"){ echo"<p align=\"left\"><small><b>Tu laimejai paskutine kova ($kas_siulo)</b><br/></small></p>"; }
  if ($siul_rez == "-"){ echo"<p align=\"left\"><small><b>Tu pralaimejai paskutine kova ($kas_siulo)</b><br/></small></p>"; }
  
  echo"<p align=\"center\"><small>$lin<br/>
  <b><u>Tavo siulymai ir rezultatai</u></b><br/></small></p>";
  
  echo"<p align=\"left\"><small>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siulau_kautis\">Siulyti kautis!</a><br/></small></p>";
  
  if ($ar_siulai == "+"){
    if ($siulai_iki > time()){ echo"<p align=\"left\"><small><b>Tu siulai kautis</b>: <br/>
  <u>$kam_siulai</u>, pasiulymas galios dar <u>$siulai_galios</u> sekundes<br/>
  </small></p>";
  }
  }
  if ($siulei_rez == "+"){ echo"<p align=\"left\"><small><b>Tu laimejai paskutine kova ($kam_siulai)</b><br/></small></p>"; }
  if ($siulei_rez == "-"){ echo"<p align=\"left\"><small><b>Tu pralaimejai paskutine kova ($kam_siulai)</b><br/></small></p>"; }
  if ($atsisake == "+"){ echo"<p align=\"left\"><small><b>$kam_siulai atsisake kautis</b><br/></small></p>"; }
echo"<p align=\"center\"><small>$lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; 
}

if ($id == "sutinku_kautis"){
$kp = file_get_contents("kovos/$nick.txt");
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
if ($ar_siulo == "+"){
  $kp = file_get_contents("kovos/$nick.txt");
    $lo = explode("|",$kp);  
    $ar_siulo = $lo[0]; 
    $kas_siulo = $lo[1]; 
    $siul_iki = $lo[2]; 
    $siul_susk = $lo[3];
    $siul_rez = $lo[4];
$siul_galios = $siul_iki-time();
    $ar_siulai = $lo[5];
    $kam_siulai = $lo[6];
    $siulai_iki = $lo[7];
    $siulai_susk = $lo[8];
    $siulei_rez = $lo[9];
    $atsisake = $lo[10]; 
$siulai_galios = $siulai_iki-time();

$us = @file_get_contents("us_xgrx_inf147258369/$kas_siulo.txt");
    $infa = explode("|", $us);

if ($infa[16] == "Narys"){ $vrdll = "$infa[2]"; }
if ($infa[16] == "Adminas"){ $vrdll = "@$infa[2]"; }
if ($infa[16] == "Moderatorius"){ $vrdll = "*$infa[2]"; }

$dem = "$infa[3]"+"$infa[10]";

  $tavo_points = round(($gyvybes+$damage)/2,0);
  $enemio_points = round(($infa[4]+$dem)/2,0);

  echo"<p align=\"center\"><small><b>Sutikai kautis su $vrdll</b><br/>
  $lin<br/><b>Rezultatai:</b><br/></small></p>";
  
  if ($tavo_points > $enemio_points){
    $laimeta = round(($infa[7])/2,0);
    $winsai = $wins+1;
    $pin = $pinigai+$laimeta;
    echo"<p align=\"left\"><small><u>Tu laimejai!!!</u><br/>
  Gavai <i>$laimeta</i>$$<br/></small></p><p align=\"center\"><small>
  $lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kova_on\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
$fpyy = fopen("$gameriai","w");
fwrite($fpyy,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$winsai|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$ip|$stat|$floo|$banke|\n");
fclose($fpyy);

$prarado = $infa[7]-$laimeta; 
$ls = $infa[9]+1;
$fph = fopen("us_xgrx_inf147258369/$kas_siulo.txt","w");
fwrite($fph,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|0|$infa[5]|$infa[6]|$prarado|$infa[8]|$ls|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|\n");
fclose($fph);

$ud = @file_get_contents("kovos/$kas_siulo.txt");
    $io = explode("|", $ud);

$fpz = fopen("kovos/$kas_siulo.txt","w+");
fwrite($fpz,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|+|-|-|\n");
fclose($fpz);

$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|+|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);
  }
 
 if ($tavo_points < $enemio_points){
    $praradai = round(($pinigai)/2,0);
    $losai = $loses+1;
    $pin = $pinigai-$praradai;
    echo"<p align=\"left\"><small><u>Tu prakisai!!!</u><br/>
  Praradai <i>$praradai</i>$$<br/></small></p><p align=\"center\"><small>
  $lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kova_on\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
$fpyy = fopen("$gameriai","w");
fwrite($fpyy,"$lygis|$inf[1]|$inf[2]|$jega|0|$gyvybess|$sugebejimas|$pin|$wins|$losai|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$ip|$stat|$floo|$banke|\n");
fclose($fpyy);

$gavo = $infa[7]+$praradai;
$wns = $infa[8]+1;
$fpr = fopen("us_xgrx_inf147258369/$kas_siulo.txt","w");
fwrite($fpr,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavo|$wns|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|\n");
fclose($fpr);

$ud = @file_get_contents("kovos/$kas_siulo.txt");
    $io = explode("|", $ud);

$fpt = fopen("kovos/$kas_siulo.txt","w+");
fwrite($fpt,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|+|+|-|\n");
fclose($fpt);
$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|-|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);
  }

}
}
if ($id=="gm"){ echo $_POST['kiek_imt'];
echo"<p align=\"center\">
<input name=\"kiek_imt\" type=\"text\" value=\"\"/><br/>
<anchor>Imti<go href=\"on_kovos.php?nick=$nick&amp;pass=$pass&amp;id=gm\" method=\"post\">
    <postfield name=\"kiek_imt\" value=\"$(kiek_imt)\"/>
</go></anchor></p>
";  }
if ($id == "nesutinku_kautis"){
$kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp); 
$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|$lo[1]|0|+|$lo[4]|$lo[5]|$lo[6]|$lo[7]|$lo[8]|$lo[9]|$lo[10]|\n");
fclose($fpg);

$ud = @file_get_contents("kovos/$lo[1].txt");
    $io = explode("|", $ud);

$fpt = fopen("kovos/$lo[1].txt","w+");
fwrite($fpt,"$io[0]|$io[1]|$io[2]|$io[3]|$io[4]|-|$io[6]|0|-|*|+|\n");
fclose($fpt);

echo"<p align=\"center\"><small>
  <b>Atsisakyta</b><br/>
  $lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kova_on\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
  </small></p>";
}

if ($id == "siulau_kautis"){
echo"<p align=\"center\"><small><b>Siulyti kautis</b><br/>
  $lin<br/>
  Kam:<br/></small>
  <input name=\"ka\" type=\"text\" maxlength=\"30\" title=\"Siulyti kautis\" value=\"\"/><br/>

<anchor>Siulyti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siulau_kautis2\" method=\"post\">
    <postfield name=\"ka\" value=\"$(ka)\"/>
</go></anchor><small><br/>
$lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kova_on\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small>
  </p>";

}

if ($id == "siulau_kautis2"){
$kp = file_get_contents("kovos/$nick.txt"); 
    $lo = explode("|",$kp); 
$ka = $_POST['ka'];

if ($ka == "") { $bad = "Nenurodei kam siulyti!"; }
if ($ka == "$nick") { $bad = "Sau siulyti negalima!"; }
if (!file_exists("us_xgrx_inf147258369/$ka.txt")){
        $bad = "Sis zaidejas neuzregistruotas!"; }
        $ud = @file_get_contents("kovos/$ka.txt");
    $io = explode("|", $ud); 
if ($io[2] > time()){ $bad = "Sis jau turi pasiulyma!"; }
if ($io[0] == "+"){ $bad = "Sis jau turi pasiulyma!"; } 
if ($lo[5] == "+"){ $bad = "tu jau esi pasiules vienam zaidejui!"; } 
if ($bad == "") { $bad = "Pasiulyta. lauk sutikimo arba atsisakymo!";

$ik = time()+25000; 
$fpt = fopen("kovos/$ka.txt","w+");
fwrite($fpt,"+|$nick|$ik|-|*|$io[5]|$io[6]|$io[7]|$io[8]|$io[9]|$io[10]|\n");
fclose($fpt);

$fpt = fopen("kovos/$nick.txt","w+");
fwrite($fpt,"$lo[0]|$lo[1]|$lo[2]|$lo[3]|$lo[4]|+|$ka|$ik|-|*|*|\n");
fclose($fpt);
}
echo"<p align=\"center\"><small>
  <b>$bad</b><br/>
  $lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siulau_kautis\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
  </small></p>";
}



if ($id == "sukurti_kovu_faila"){ 

$fpg = fopen("kovos/$nick.txt","w+");
fwrite($fpg,"-|-|0|*|*|-|-|0|*|*|*|\n");
fclose($fpg); 
chmod("kovos/$nick.txt", 0777);
echo"<p align=\"center\"><small>
  <b>Atlikta</b><br/>
  $lin<br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kova_on\">Atgal</a><br/>
  <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
  </small></p>";
  }

?>