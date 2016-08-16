<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
echo"Buriuose"; 
include("config.php"); 

if ($id == "klanai"){
echo"<p align=\"left\"><small>DBGT gaujos!<br/>-<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=ikurt\">[&#187;] Ikurti savo gauja</a><br/>
-<br/></small></p>"; 
echo"<p align=\"left\"><small>
Rusiuoti gaujas pagal:<br/>";
if ($ka == ""){ echo"[Abecele]"; } else { echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=\">Abecele</a>]"; }
if ($ka == "kov"){ echo"[Laimetas kovas]"; } else { echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=kov\">Laimetas kovas</a>]"; }
if ($ka == "sum"){ echo"[Lygiu suma]"; } else { echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=sum\">Lygiu suma</a>]"; }
if ($ka == "vid"){ echo"[Lygiu vidurki]"; } else { echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=vid\">Lygiu vidurki</a>]"; }
if ($ka == "na"){ echo"[Nariu skaiciu]"; } else { echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=na\">Nariu skaiciu</a>]"; }
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
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
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
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
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
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
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

/*for($f=0; $f<count($blo); $f++){ 
$n = count(file("klaniukos/{$arr[$f][1]}.ta")); 
echo"- <a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>"; }
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
echo"- <a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>";    
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }

echo"</small></p>"; 
echo"<p align=\"left\"><small>
-<br/>
Kreditai bus ismoketi po "; echo round((file_get_contents("txt/klanu.txt")-time())/60,0); echo" minuciu.<br/>
Viso gauju: "; echo count(glob("klaniukos/*.ta")); echo"<br/>
Juose nariu: $na<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
}


if ($id == "klan" && file_exists("klaniukos/$ka.ta")){ 
if (!file_exists("sajungutopicai/$ka.ta")){     
$atidarymasss = fopen("sajungutopicai/$ka.ta", "w");
        fwrite($atidarymasss, "Cia $ka topicas, ji gali keisti tik gaujos nariai!");
        fclose($atidarymasss); 
chmod("sajungutopicai/$ka.ta",0777);       }
$tpc = file_get_contents("sajungutopicai/$ka.ta"); 

$pons = @file("klaniukos/$ka.ta"); 
echo'<p align="left"><small>'; 
$laim = 0; 
$lvlv = 0; 
for($t = 0; $t < @count($pons); $t++){ 
$nary = @explode("|",$pons[$t]); 
if ($nary[0] == $nick){ $sajt = "narys"; }
$nar = @explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
$laim = $laim+$infa[8]; 
$lvlv = $lvlv+$infa[0]; 
if ($nar[0] == $nick){ $saj = "narys"; }
if ($kure[0] == $nick){ $saj = "admins"; }

}
echo"<b>$ka<br/></b>
-<br/>";
if ($sajt != "narys"){ echo"
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=stot&amp;ka=$ka\">[&#187;] Stoti i sia gauja</a><br/>-<br/>"; }
 echo"
$tpc<br/>"; 
 if ($sajt == "narys"){ echo"
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=keistt&amp;ka=$ka\">[&#187;] Keisti</a><br/>"; }
 echo"-<br/></small></p><p align=\"left\"><small>"; 
 $kure = @explode("|",$pons[0]); 
echo"Gaujos ikurejas: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kure[0]\">$kure[0]</a><br/>
Nariai:<br/>";


$viso_tm = count($pons);
$puslapiu_skaicius = 20;

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($t = $nuo; $t < $iki; $t++){
    $nar = @explode("|",$pons[$t]); 
echo"- <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nar[0]\">$nar[0]</a>"; if ($sajt == "narys" && $nar[0] != $nick){ echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=pervesti&amp;ka=$ka&amp;kas=$nar[0]\">Pervesti litu</a>]"; } echo"<br/>"; 
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }


$lvlv2 = round($lvlv/count($pons),1); 
echo"</small></p><p align=\"left\"><small>-<br/>"; 
if ($saj == "narys"){ echo"Tu esi sios gaujos narys!<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=stot&amp;ka=$ka\">[&#187;] Stoti dar karta i sia gauja</a><br/>
<a href=\"klanai.php?id=iseitissaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[&#187;] Iseiti is gaujos</a><br/>-<br/>"; }
if ($saj == "admins"){ echo"Tu esi sios gaujos vadas<br/>
<a href=\"klanai.php?id=istrintsaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[&#187;] Panaikinti gauja</a><br/>-<br/>"; }
echo"Nariu: "; echo count($pons); 
echo"<br/>Nariai laimejo kovu: $laim<br/>
Nariu lygiu suma: $lvlv<br/>
Nariu lygiu vidurkis: $lvlv2<br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>";
 echo'</small></p>'; 
}

if ($id == "keistt" && file_exists("klaniukos/$ka.ta")){ 
echo"<p align=\"left\"><small>Gaujos topico keitimas<br/>
<input name=\"zinute\" type=\"text\" maxlength=\"350\" title=\"Topic zinute\" value=\"\"/><br/>
<anchor>[&#187;] Keisti<go href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=topic2k&amp;ka=$ka\" method=\"post\">
	<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor><br/></small><small>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">[^] Atgal</a></small></p>";
}
if($id=='topic2k'){ 
$zinute = $_POST['zinute']; 
$zinute = htmlspecialchars($zinute); 
$zinute = str_replace("|","l",$zinute);
$zinute = str_replace("$","$$",$zinute); 
$zinute = str_replace(";","; ",$zinute); 
include("smilesreplace.php"); 
if (substr_count($zinute, "<img src=")>2){ $lkjss = "Perdaug smailu!"; }
if (strlen($zinute) > 350){ $lkjss = "Topicas per ilgas!"; }
if (empty($zinute)){ $lkjss = "Topicas neivestas!"; }
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 0; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh!="yra"){ $lkjss = "Tu ne sios gaujos narys!"; }

if (empty($lkjss)){ 
$fpaa = fopen("sajungutopicai/$ka.ta","w");
fwrite($fpaa, "$zinute ($vrd)");
fclose($fpaa); chmod("sajungutopicai/$ka.ta",0777); 
$lkjss = "Pakeista sekmingai!";  }
echo"<p align=\"left\"><small>$lkjss<br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">[^] Atgal</a></small></p>"; 
}

if ($id == "iseitissaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
for($t = 1; $t < @count($pons); $t++){ 
$nar = @explode("|",$pons[$t]); 
if ($nar[0]==$nick){ $sdjh = "yra"; break; }}
if ($sdjh != "yra"){ $df = "Tu nesi sios gaujos narys, arba esi jos vadas!"; } else {
$df = "Tu sekmingai isejai is gaujos!"; 
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
echo"<p align=\"left\"><small>$df<br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>
</small></p>"; 
}

if ($id == "istrintsaj" && file_exists("klaniukos/$ka.ta")){ 
$sdjh = ""; 
$pons = @file("klaniukos/$ka.ta"); 
$kure = @explode("|",$pons[0]); 
if ($kure[0] != $nick){ $df = "Tu nesi sios gaujos vadas!"; } else {
$df = "Tu sekmingai panaikinai gauja"; 
@unlink("klaniukos/$ka.ta"); 
@unlink("sajungutopicai/$ka.ta"); 
}
echo"<p align=\"left\"><small>$df<br/>
$lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>
</small></p>"; 
}


if ($id == "ikurt"){ 
echo'<p align="left"><small>'; 
echo"Gaujos ikurimas<br/>-<br/></small></p><p align=\"left\"><small>";
 echo"Ikure savo gauja, jus busite jos vadas.<br/>
 Priklausomai nuo to, kiek nariu pritrauksite i savo gauja, jus per 3 valandas gausite 0.02 kreditu nuo nario, 
 pvz: jei jusu gaujoje bus 20 nariu, tai jus kas 3 valandas gausite po 0.4 kreditu is zaidimo isdo ;)<br/>
 O pritraukti nariu i savo gauja galesite pasiule jiems tam tikras litu sumas, kreditu kiekius, nes gauju nariai gali pervedineti vieni kitiems litus.<br/>
 Pulko ikurimas kainuoja <b>$kaina3</b><br/>
 Reikia siusti sms su tekstu: <b>$sms3 $nick gauja gaujos_pavadinimas</b><br/>
 Numeriu: <b>$nr</b><br/></small></p><p align=\"left\"><small>
 $lin<br/>
<a href=\"klanai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>";
 echo'</small></p>'; 
}

if ($id == "stot"){ 
echo'<p align="left"><small>'; 
echo"Istojimas i gauja<br/>-<br/></small></p><p align=\"left\"><small>";
 echo"Gaujos nariai gali vieni kitiems pervedineti litus.<br/>
 Uz tai kad busi gaujos narys, gausi 0.02 kreditu kas 3 valandas ;)<br/>
 Istojimas i gauja kainuoja <b>$kaina1</b><br/>
 Reikia siusti sms su tekstu: <b>$sms1 $nick stoju $ka</b><br/>
 Numeriu: <b>$nr</b><br/></small></p><p align=\"left\"><small>
 $lin<br/>
 <a href=\"klanai.php?id=klan&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>";
 echo'</small></p>'; 
}

if ($id == "pervesti") { 
echo"<p align=\"left\"><small>
Litus gaus $kas<br/>
Kiek pervesi litu?<br/>
<input name=\"howy\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek?\"/><br/>
<anchor>[&#187;] Pervesti<go href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=pervesti2&amp;kam=$kas&amp;ka=$ka\" method=\"post\">
    <postfield name=\"howy\" value=\"$(howy)\"/>
</go></anchor></small><small><br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>
"; }

if ($id == "pervesti2") { 
$howy = $_POST['howy'];
$us = @file_get_contents("ndbzgtusrsz/$kam.txt");
    $infa = explode("|", $us);
$gavejo_pinigai = $infa[7];

if (!file_exists("zaideju_inf/$kam.txt")){ $er="Sis zaidejas neuzregistruotas!"; }
if ($kam == $nick){ $er="Sau pervesti litu negalima!"; }
if ($pinigai < $howy){ $er="Neturi tiek litu!"; }
$skaitom = @file_get_contents("klaniukos/$ka.ta"); 
if (!@eregi("$kam",$skaitom)){ $er = "Sis kovotojas ne sioje gaujoje!"; }
if (!@eregi("$nick",$skaitom)){ $er = "Tu ne sios gaujos narys!"; }

if ($er == ""){
$piny = round(($pinigai-$howy),0);
$fp4 = fopen("$gameriai","w");
fwrite($fp4,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp4);
$gavejo_piny = round(($gavejo_pinigai+$howy),0);
$fp1 = fopen("zaideju_inf/$kam.txt","w");
fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);
 $atidaryma = fopen("priv_zin/$kam.txt", "a");
        fwrite($atidaryma, "@spider|$nick pervede tau $howy litu|$laikas|\n");
        fclose($atidaryma);
$er = "Tu pervedei $howy$$ litu $kam";
}
echo"<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka=$ka\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>"; }


print'</card></wml>';

?>