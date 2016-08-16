<?php 
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Kariu pulkai"; 
include("config.php"); 

if ($id == "klanai"){
echo"<p align=\"center\"><small><b>Kariu pulkai</b><br/>$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=search\">Klanu paieska</a><br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=ikurt\">Ikurti savo pulka</a><br/>
$lin<br/></small></p>"; 
echo"<p align=\"left\"><small>
<b>Rikiuoti pulkus pagal:</b><br/>";
if ($ka == ""){ echo"Abecele|"; } else { echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=\">Abecele</a>|"; }
if ($ka == "kov"){ echo"Laimetas kovas|"; } else { echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=kov\">Laimetas kovas</a>|"; }
if ($ka == "sum"){ echo"Lygiu suma|"; } else { echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=sum\">Lygiu suma</a>|"; }
if ($ka == "vid"){ echo"Lygiu vidurki|"; } else { echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=vid\">Lygiu vidurki</a>|"; }
if ($ka == "na"){ echo"Nariu skaiciu"; } else { echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=na\">Nariu skaiciu</a>"; }
echo"<br/><br/>"; 
$na = 0; 
$blo = glob("klaniukos/*.ta"); 
if ($ka == ""){ 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array("$a","$a");
} }
if ($ka == "kov"){ 
$laim = 0; 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("us_xgrx_inf147258369/$nar[0].txt"));
$laim = $laim+$infa[8]; }
$arr[]=array($laim,"$a");
} }
if ($ka == "sum"){ 
$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("us_xgrx_inf147258369/$nar[0].txt"));
$lvlv = $lvlv+$infa[0]; }
$arr[]=array($lvlv,"$a");
} }
if ($ka == "vid"){ 
foreach($blo as $a){ 
$lvlv = 0; 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("us_xgrx_inf147258369/$nar[0].txt"));
$lvlv = $lvlv+$infa[0]; }
$lvlv2 = round($lvlv/count($pons),1); 
$arr[]=array($lvlv2,"$a");
} }
if ($ka == "na"){ 
$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("klaniukos/",".ta"),"",$a);
$pons = file("klaniukos/$a.ta"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array($n,"$a");
} }

rsort($arr);
/*for($f=0; $f<count($blo); $f++){ 
$n = count(file("klaniukos/{$arr[$f][1]}.ta")); 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>"; }
*/


$viso_tm = count($arr);
$puslapiu_skaicius = 20;

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($f = $nuo; $f < $iki; $f++){
    $n = count(file("klaniukos/{$arr[$f][1]}.ta")); 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>";    
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;page=$starto_skaicius&amp;ka=$ka\">($starto_skaicius)</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }

echo"</small></p>"; 
echo"<p align=\"center\"><small>
$lin<br/>
Kronos bus ismoketos po <b>"; echo round((file_get_contents("txt/klanu.txt")-time())/60,0); echo"</b> minuciu.<br/>
Pulku: <b>"; echo count(glob("klaniukos/*.ta")); echo"</b><br/>
Juose nariu: <b>$na</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
}

/////////////////klanu paieska///////////////////////

if ($id == "search") { echo"<p align=\"center\"><small>
<b>Klanu paieska</b><br/>
$lin<br/>
Klano pavadinimas: [rasykite pilna pavadinima]<br/></small>
<form action=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$(ko)\" method=\"post\">
<input name=\"ko\" type=\"text\" maxlength=\"20\" title=\"useris\" value=\"\"/><br/>

<input type=\"submit\" title=\"lgzz.eu\" value=\"Ieskoti\"/>
    <postfield name=\"ko\" value=\"$(ko)\"/>
</go></anchor><br/><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small>
    </p>";
}

if ($id == "klan" && file_exists("klaniukos/$ka.ta")){ 
if (!file_exists("sajungutopicai/$ka.ta")){     
$atidarymasss = fopen("sajungutopicai/$ka.ta", "w");
        fwrite($atidarymasss, "Cia $ka topic, ji gali keisti tik pulko nariai");
        fclose($atidarymasss); 
chmod("sajungutopicai/$ka.ta",0777);       }
$tpc = file_get_contents("sajungutopicai/$ka.ta"); 

$pons = @file("klaniukos/$ka.ta"); 
echo'<p align="center"><small>'; 
$laim = 0; 
$lvlv = 0; 
for($t = 0; $t < @count($pons); $t++){ 
$nary = @explode("|",$pons[$t]); 
if ($nary[0] == $nick){ $sajt = "narys"; }
$nar = @explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("us_xgrx_inf147258369/$nar[0].txt"));
$laim = $laim+$infa[8]; 
$lvlv = $lvlv+$infa[0]; 
if ($nar[0] == $nick){ $saj = "narys"; }
if ($kure[0] == $nick){ $saj = "admins"; }

}
echo"<b>$ka<br/></b>
$lin<br/>";
if ($sajt != "narys"){ echo"
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=stot&amp;ka=$ka\">Stoti i si pulka</a><br/>$lin<br/>"; }
 echo"
$tpc<br/>"; 
 if ($sajt == "narys"){ echo"
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=keistt&amp;ka=$ka\">Keisti</a><br/>"; }
 echo"$lin<br/></small></p><p align=\"left\"><small><b>"; 
 $kure = @explode("|",$pons[0]); 
echo"Pulko ikurejas: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kure[0]\">$kure[0]</a><br/>
Nariai:</b><br/>";


$viso_tm = count($pons);
$puslapiu_skaicius = 20;

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($t = $nuo; $t < $iki; $t++){
    $nar = @explode("|",$pons[$t]); 
echo"<b>-<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nar[0]\">$nar[0]</a></b>"; if ($sajt == "narys" && $nar[0] != $nick){echo "-"; } echo"<br/>"; 
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;page=$starto_skaicius&amp;ka=$ka\">($starto_skaicius)</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }


$lvlv2 = round($lvlv/count($pons),1); 
echo"</small></p><p align=\"center\"><small>$lin<br/>"; 
if ($saj == "narys"){ echo"Tu esi sio pulko narys<br/>
<a href=\"klanai.php?id=iseitissaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">Iseiti is pulko</a><br/>$lin<br/>"; }
if ($saj == "admins"){ echo"Tu esi sio pulko ikurejas<br/>
<a href=\"klanai.php?id=istrintsaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">Panaikinti pulka</a><br/>$lin<br/>"; }
echo"<b>Nariu:</b> "; echo count($pons); 
echo"<br/><b>Nariai laimejo kovu:</b> $laim<br/>
<b>Nariu lygiu suma:</b> $lvlv<br/>
<b>Nariu lygiu vidurkis:</b> $lvlv2<br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/>";
 echo'</small></p>'; 
}

if ($id == "keistt" && file_exists("klaniukos/$ka.ta")){ 
echo"<p align=\"center\"><small><b>Pulko topic keitimas</b><br/></small>
<input name=\"zinute\" type=\"text\" maxlength=\"150\" title=\"Topic zinute\" value=\"\"/><br/>
<anchor>Keisti<go href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=topic2k&amp;ka=$ka\" method=\"post\">
	<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor><br/><small>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">Atgal</a></small></p>";
}
if($id=='topic2k'){ 
$zinute = $_POST['zinute']; 
$zinute = htmlspecialchars($zinute); 
$zinute = str_replace("|","l",$zinute);
$zinute = str_replace("$","$$",$zinute); 
$zinute = str_replace(";","; ",$zinute); 
include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>2){ $lkjss = "Perdaug smailu!"; }
if (strlen($zinute) > 200){ $lkjss = "Topic per ilgas!"; }
if (empty($zinute)){ $lkjss = "Topic neivestas!"; }
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 0; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh!="yra"){ $lkjss = "Jus ne sio pulko narys!"; }

if (empty($lkjss)){ 
$fpaa = fopen("sajungutopicai/$ka.ta","w");
fwrite($fpaa, "$zinute ($vrd)");
fclose($fpaa); chmod("sajungutopicai/$ka.ta",0777); 
$lkjss = "Pakeista";  }
echo"<p align=\"center\"><small>$lkjss<br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">Atgal</a></small></p>"; 
}

if ($id == "iseitissaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 1; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh != "yra"){ $df = "Tu nesi sio pulko narys arba esi jo ikurejas!"; } else {
$df = "Jus sekmingai isejote is pulko"; 
$nkh2 = file("klaniukos/$ka.ta");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if ($nick==$kly2[0]){
$nkh2[$py2] = "";
$fpz2 = fopen("klaniukos/$ka.ta","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}}
echo"<p align=\"center\"><small><b>$df</b><br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/>
</small></p>"; 
}

if ($id == "istrintsaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
if ($kure[0] != $nick){ $df = "Tu nesi sio pulko ikurejas!"; } else {
$df = "Jus sekmingai panaikinote pulka"; 
@unlink("klaniukos/$ka.ta"); 
@unlink("sajungutopicai/$ka.ta"); 
}
echo"<p align=\"center\"><small><b>$df</b><br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/>
</small></p>"; 
}


if ($id == "ikurt"){ 
echo'<p align="center"><small>'; 
echo"<b>Pulko ikurimas</b><br/>$lin<br/></small></p><p align=\"left\"><small>";
 echo"Ikure savo pulka jus busite jos virsininkas.<br/>
 Priklausomai nuo to kiek nariu pritrauksite i savo pulka jus per 3 valandas gausite 0.01 kronos nuo nario, 
 pvz: jei jusu pulke bus 20 nariu tai jus kas 3 valandas gausite po 0.2 kronos is zaidimo isdo ;)<br/>
 O pritraukti nariu i savo pulka galesite pasiule jiems tam tikras pinigu sumas, nes pulku nariai gali pervedineti vieni kitiems pinigus.<br/>
 Pulko ikurimas kainuoja <b>3 litus</b><br/>
 Reikia siusti sms su tekstu: <b>lgzz3 $nick pulkas pulkopavadinimas</b><br/>
 Numeriu: <b>1679</b><br/></small></p><p align=\"center\"><small>
 $lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/>";
 echo'</small></p>'; 
}

if ($id == "stot"){ 
echo'<p align="center"><small>'; 
echo"<b>Istojimas i pulka</b><br/>$lin<br/></small></p><p align=\"left\"><small>";
 echo"Pulko nariai gali vieni kitiems pervedineti pinigus.<br/>
 Uz tai kad busite pulko narys gausite 0.01 kronos kas 3 valandas ;)<br/>
 Istojimas i pulka kainuoja <b>0.5 lita</b><br/>
 Reikia siusti sms su tekstu: <b>lgzz05 $nick stoju $ka</b><br/>
 Numeriu: <b>1679</b><br/></small></p><p align=\"center\"><small>
 $lin<br/>
 <a href=\"klanai.php?id=klan&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/>";
 echo'</small></p>'; 
}

if ($id == "pervesti") { 
echo"<p align=\"center\"><small>
Pinigus gaus $kas<br/>
<b>Kiek pervesi?<br/></b></small>
<input name=\"howy\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek?\"/><br/>
<anchor>Pervesti<go href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=pervesti2&amp;kam=$kas&amp;ka=$ka\" method=\"post\">
    <postfield name=\"howy\" value=\"$(howy)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>
"; }

if ($id == "pervesti2") { 
$howy = $_POST['howy'];
$us = @file_get_contents("us_xgrx_inf147258369/$kam.txt");
    $infa = explode("|", $us);
$gavejo_pinigai = $infa[7];

if (!file_exists("us_xgrx_inf147258369/$kam.txt")){ $er="Sis zaidejas neuzregistruotas!"; }
if ($kam == $nick){ $er="Sau pervest negalima!"; }
if ($pinigai < $howy){ $er="Neturi tiek pinigu!"; }
$skaitom = @file_get_contents("klaniukos/$ka.ta"); 
if (!@eregi("$kam",$skaitom)){ $er = "Sis zmogus ne siame pulke!"; }
if (!@eregi("$nick",$skaitom)){ $er = "Tu ne sio pulko narys!"; }

if ($er == ""){
$piny = round(($pinigai-$howy),0);
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
$gavejo_piny = round(($gavejo_pinigai+$howy),0);
$fp1 = fopen("us_xgrx_inf147258369/$kam.txt","w");
fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);
 $atidaryma = fopen("priv_zin/$kam.txt", "a");
        fwrite($atidaryma, "@SISTEMA|$nick pervede tau $howy $$|$laikas|\n");
        fclose($atidaryma);
$er = "Pervedei $howy$$ to $kam";
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }


print'</card></wml>';

?>