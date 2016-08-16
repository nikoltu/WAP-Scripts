<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Aukcijone"; 
include("config.php"); 
if ($id == "") { 
$lj = glob("aukcj/*.txt"); 
for ($p=0; $p < count($lj); $p++){ 
$ei = explode("|",file_get_contents($lj[$p])); 
if ($ei[6]+3*60*60<time()){ 

$privatujj = "Tavo prekes ($ei[1] $ei[2]) aukcijone niekas nenupirko, ji grazinta atgal tau!"; 
$atidaryma = fopen("priv_zin/$ei[0].txt", "a");
        fwrite($atidaryma, "ofka|$privatujj|$laikas|\n");
        fclose($atidaryma);
    $cyks2 = explode("|",file_get_contents("ndbzgtusrsz/$ei[0].txt")); 
   if($ei[3]=="p"){ $cyks2[7]=$cyks2[7]+$ei[1]; } 
 if($ei[3]=="r"){ 
$cyt = explode("|",file_get_contents("miners/$ei[0].txt")); 
$cyt[$ei[4]]=$cyt[$ei[4]]+$ei[1]; 
$fop = fopen("miners/$ei[0].txt", "w");
        fwrite($fop, "$cyt[0]|$cyt[1]|$cyt[2]|$cyt[3]|$cyt[4]|$cyt[5]|$cyt[6]|$cyt[7]|$cyt[8]|$cyt[9]|$cyt[10]|$cyt[11]|$cyt[12]|$cyt[13]|$cyt[14]|$cyt[15]|$cyt[16]|$cyt[17]|$cyt[18]|$cyt[19]|$cyt[20]|$cyt[21]|$cyt[22]|$cyt[23]|$cyt[24]|$cyt[25]|$cyt[26]|$cyt[27]|");
        fclose($fop); }   
if($ei[3]=="z"){ $tyu = explode("|",file_get_contents("fyshers/$ei[0].txt")); 
$tyu[$ei[4]]=$tyu[$ei[4]]+$ei[1]; 
$fop = fopen("fyshers/$ei[0].txt", "w");
        fwrite($fop, "$tyu[0]|$tyu[1]|$tyu[2]|$tyu[3]|$tyu[4]|$tyu[5]|$tyu[6]|$tyu[7]|$tyu[8]|$tyu[9]|");
        fclose($fop); }
if($ei[3]=="k"){ $tyu = explode("|",file_get_contents("kitaaainf/$ei[0].ly")); 
$tyu[$ei[4]]=$tyu[$ei[4]]+$ei[1]; 
$fp5g5 = fopen("kitaaainf/$ei[0].ly", "w");
fwrite($fp5g5,"$tyu[0]|$tyu[1]|$tyu[2]|$tyu[3]|$tyu[4]|$tyu[5]|$tyu[6]|$tyu[7]|$tyu[8]|$tyu[9]|$tyu[10]|$tyu[11]|$tyu[12]|$tyu[13]|$tyu[14]|$tyu[15]|$tyu[16]|$tyu[17]|$tyu[18]|$tyu[19]|$tyu[20]|$tyu[21]|$tyu[22]|$tyu[23]|$tyu[24]|$tyu[25]|$tyu[26]|$tyu[27]|$tyu[28]|$tyu[29]|$tyu[30]|$tyu[31]|$tyu[32]|$tyu[33]|$tyu[34]|$tyu[35]|$tyu[36]|$tyu[37]|$tyu[38]|$tyu[39]|$tyu[40]|$tyu[41]|$tyu[42]|$tyu[43]|$tyu[44]|$tyu[45]|$tyu[46]|$tyu[47]|$tyu[48]|$tyu[49]|$tyu[50]|$tyu[51]|$tyu[52]|$tyu[53]|$tyu[54]|$tyu[55]|$tyu[56]|$tyu[57]|$tyu[58]|$tyu[59]|$tyu[60]|$tyu[61]|$tyu[62]|$tyu[63]|$tyu[64]|$tyu[65]|$tyu[66]|");
fclose($fp5g5); }
    $atidaryma = fopen("priv_zin/$ei[0].txt", "a");
        fwrite($atidaryma, "gedas|$privatujj|$laikas|\n");
        fclose($atidaryma);
$fop = fopen("ndbzgtusrsz/$ei[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);

@unlink($lj[$p]); 
}}


echo"<p align=\"left\"><small>
Aukcijonas ;)<br/>
-<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=idet\">[&#187;] Ideti savo preke</a><br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=tava\">[&#187;] Tavo prekes</a><br/>
-<br/>
"; 

$nuskk = glob("aukcj/*.txt"); 
$viso_tm = count($nuskk);
$puslapiu_skaicius = 20;

if ($viso_tm == 0)
    {
echo "Prekiu nera...<br/>"; }
        else
        {
if ($page == "")
    { $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; } else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_tm <= $page * $puslapiu_skaicius)
        { $iki = $viso_tm; }
        for ($c = $nuo; $c < $iki; $c++)
        {
$r = file($nuskk[$c]); 
$e = explode("|",$r[0]); 
$pavd = str_replace(array("aukcj/",".txt"),"",$nuskk[$c]); 

echo"<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=preke&amp;ka=$pavd\">$e[1] $e[2] ($e[7] krd)</a><br/>"; }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "[$starto_skaicius]";
        }
        else{ 
echo "<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=&amp;page=$starto_skaicius\">($starto_skaicius)</a>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}

echo"<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
}

if ($id == "tava") { 
echo"<p align=\"left\"><small>
Aukcijonas ;)<br/>
-<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=idet\">[&#187;] Ideti dar prekiu</a><br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Visos prekes</a><br/>
-<br/>
"; 

$nuskk = glob("aukcj/$nick-*.txt"); 
$viso_tm = count($nuskk);

        for ($c =0; $c < $viso_tm; $c++)        {
$e = explode("|",file_get_contents($nuskk[$c])); 
$pavd = str_replace(array("aukcj/",".txt"),"",$nuskk[$c]); 
echo"<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=preke&amp;ka=$pavd\">$e[1] $e[2] ($e[7] krd)</a><br/>"; }

echo"<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
}

if ($id == "preke" && file_exists("aukcj/$ka.txt")){ 
$e = explode("|",file_get_contents("aukcj/$ka.txt")); 
$likt = round((($e[6]+3*60*60)-time())/60,0);
echo"<p align=\"left\"><small>
<b>Prekes info</b><br/>
-<br/></small></p><p align=\"left\"><small>
<b>Preke:</b> $e[1] $e[2]<br/>
<b>Preke parduoda:</b> $e[0]<br/>
<b>Ideta:</b> $e[5]<br/>
<b>Preke dings uz:</b> $likt min<br/>
<b>Prasoma kreditu:</b> $e[7]<br/></small></p><p align=\"left\"><small>
[ <a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=perku&amp;ka=$ka\">Pirkti</a> ]<br/>
$lin<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>"; }

if ($id == "perku" && file_exists("aukcj/$ka.txt")){ 
$kj=ereg_replace("[^0-9.]","",$kj); 
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$e = explode("|",file_get_contents("aukcj/$ka.txt")); 
if ($kronu < $e[7]){ $bad = "Tiek kreditu neturi!"; }
if ($bad == ""){ 
$bad = "Nupirkta sekmingai."; 

$fop = fopen("kronoss/$nick.txt", "w+");
        fwrite($fop,$kronu-$e[7]);
        fclose($fop);
if($e[3]=="p"){ $pinigai=$pinigai+$e[1]; 
$fop = fopen("ndbzgtusrsz/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        fclose($fop);
}
if($e[3]=="r"){ 
$in[$e[4]]=$in[$e[4]]+$e[1]; 
$fop = fopen("miners/$nick.txt", "w");
        fwrite($fop, "$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
        fclose($fop); }
        
if($e[3]=="z"){ 
$fis[$e[4]]=$fis[$e[4]]+$e[1]; 
$fop = fopen("fyshers/$nick.txt", "w");
        fwrite($fop, "$fis[0]|$fis[1]|$fis[2]|$fis[3]|$fis[4]|$fis[5]|$fis[6]|$fis[7]|$fis[8]|$fis[9]|");
        fclose($fop); }
if($e[3]=="k"){ 
include("icludekitainf/nuskait.php"); 
$kit[$e[4]]=$kit[$e[4]]+$e[1]; 
    include("icludekitainf/iras.php"); }
        
        if (!file_exists("kronoss/$e[0].txt")){ $kronu2 = 0; } else { $kronu2 = file_get_contents("kronoss/$e[0].txt"); }
$fop = fopen("kronoss/$e[0].txt", "w+");
        fwrite($fop,$kronu2+$e[7]);
        fclose($fop);
$privatuj = "Tavo preke ($e[1] $e[2]) aukcijone nupirko $nick, gavai <b>$e[7]</b> kreditu!"; 

$atidaryma = fopen("priv_zin/$e[0].txt", "a");
        fwrite($atidaryma, "gedas|$privatuj|$laikas|\n");
        fclose($atidaryma);
    $cyks2 = explode("|",file_get_contents("$geimeriai/$e[0].txt")); 
$fop = fopen("zaideju_inf/$e[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop); 
@unlink("aukcj/$ka.txt"); 
        
}
echo"<p align=\"left\"><small>$bad<br/>$lin<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Aukcijonas</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
}

if ($id == "idet"){ 
echo"<p align=\"left\"><small>
Idek savo preke i aukcijona<br/>
-<br/>Ka desi i aukcijona?<br/><select name=\"kan\">";
 if ($pinigai > 0){ echo"<option value=\"p7\">Litu [$pinigai]</option>"; }
if ($iron_ores > 0){ echo"<option value=\"r0\">Gelezies rudu [$iron_ores]</option>"; }
if ($zalvario_ores > 0){ echo"<option value=\"r1\">Zalvario rudu [$zalvario_ores]</option>"; }
if ($sidabro_ores > 0){ echo"<option value=\"r2\">Sidabro rudu [$sidabro_ores]</option>"; }
if ($aukso_ores > 0){ echo"<option value=\"r3\">Aukso rudu [$aukso_ores]</option>"; }
if ($iron_baru > 0){ echo"<option value=\"r4\">Gelezies plyteliu [$iron_baru]</option>"; }
if ($zalvario_baru > 0){ echo"<option value=\"r5\">Zalvario plyteliu [$zalvario_baru]</option>"; }
if ($sidabro_baru > 0){ echo"<option value=\"r6\">Sidabro plyteliu [$sidabro_baru]</option>"; }
if ($aukso_baru > 0){ echo"<option value=\"r7\">Aukso plyteliu [$aukso_baru]</option>"; }
if ($bronze_swordu > 0){ echo"<option value=\"r8\">Bronze kardu [$bronze_swordu]</option>"; }
if ($spyziaus_swordu > 0){ echo"<option value=\"r9\">Spyziaus kardu [$spyziaus_swordu]</option>"; }
if ($zalvario_swordu > 0){ echo"<option value=\"r10\">Zalvario kardu [$zalvario_swordu]</option>"; }
if ($vario_swordu > 0){ echo"<option value=\"r11\">Vario kardu [$vario_swordu]</option>"; }
if ($gelezies_swordu > 0){ echo"<option value=\"r12\">Gelezies kardu [$gelezies_swordu]</option>"; }
if ($plieno_swordu > 0){ echo"<option value=\"r13\">Plieno kardu [$plieno_swordu]</option>"; }
if ($sidabro_swordu > 0){ echo"<option value=\"r14\">Sidabro kardu [$sidabro_swordu]</option>"; }
if ($aukso_swordu > 0){ echo"<option value=\"r15\">Aukso kardu [$aukso_swordu]</option>"; }
if ($dragon_swordu > 0){ echo"<option value=\"r16\">Z kardu [$dragon_swordu]</option>"; }
if ($bronze_sarvu > 0){ echo"<option value=\"r17\">Bronze sarvu [$bronze_sarvu]</option>"; }
if ($spyziaus_sarvu > 0){ echo"<option value=\"r18\">Spyziaus sarvu [$spyziaus_sarvu]</option>"; }
if ($zalvario_sarvu > 0){ echo"<option value=\"r19\">Zalvario sarvu [$zalvario_sarvu]</option>"; }
if ($vario_sarvu > 0){ echo"<option value=\"r20\">Vario sarvu [$vario_sarvu]</option>"; }
if ($gelezies_sarvu > 0){ echo"<option value=\"r21\">Gelezies sarvu [$gelezies_sarvu]</option>"; }
if ($plieno_sarvu > 0){ echo"<option value=\"r22\">Plieno sarvu [$plieno_sarvu]</option>"; }
if ($sidabro_sarvu > 0){ echo"<option value=\"r23\">Sidabro sarvu [$sidabro_sarvu]</option>"; }
if ($aukso_sarvu > 0){ echo"<option value=\"r24\">Aukso sarvu [$aukso_sarvu]</option>"; }
if ($dragon_sarvu > 0){ echo"<option value=\"r25\">Z sarvu [$dragon_sarvu]</option>"; }
if ($slieku > 0){ echo"<option value=\"z1\">Slieku [$slieku]</option>"; }
if ($teslos > 0){ echo"<option value=\"z2\">Teslos [$teslos]</option>"; }
if ($karosu > 0){ echo"<option value=\"z3\">Karosu [$karosu]</option>"; }
if ($eseriu > 0){ echo"<option value=\"z4\">Eseriu [$eseriu]</option>"; }
if ($lynu > 0){ echo"<option value=\"z5\">Lynu [$lynu]</option>"; }
if ($raudziu > 0){ echo"<option value=\"z6\">Raudziu [$raudziu]</option>"; }
if ($karpiu > 0){ echo"<option value=\"z7\">Karpiu [$karpiu]</option>"; }
if ($starkiu > 0){ echo"<option value=\"z8\">Starkiu [$starkiu]</option>"; }
if ($lydeku > 0){ echo"<option value=\"z9\">Lydeku [$lydeku]</option>"; }
include("icludekitainf/nuskait.php"); 
if ($kit[0] > 0){ echo"<option value=\"k0\">Lazdininiu meskeriu [$kit[0]]</option>"; }
if ($kit[1] > 0){ echo"<option value=\"k1\">Bambukiniu meskeriu [$kit[1]]</option>"; }
if ($kit[2] > 0){ echo"<option value=\"k2\">Spiningu [$kit[2]]</option>"; }
if ($kit[3] > 0){ echo"<option value=\"k3\">Bronze kirtikliu [$kit[3]]</option>"; }
if ($kit[4] > 0){ echo"<option value=\"k4\">Spyziniu kirtikliu [$kit[4]]</option>"; }
if ($kit[5] > 0){ echo"<option value=\"k5\">Geleziniu kirtikliu [$kit[5]]</option>"; }
if ($kit[6] > 0){ echo"<option value=\"k6\">Plieniniu kirtikliu [$kit[6]]</option>"; }
if ($kit[7] > 0){ echo"<option value=\"k7\">Bronze kirviu [$kit[7]]</option>"; }
if ($kit[8] > 0){ echo"<option value=\"k8\">Spyziniu kirviu [$kit[8]]</option>"; }
if ($kit[9] > 0){ echo"<option value=\"k9\">Geleziniu kirviu [$kit[9]]</option>"; }
if ($kit[10] > 0){ echo"<option value=\"k10\">Plieniniu kirviu [$kit[10]]</option>"; }
if ($kit[12] > 0){ echo"<option value=\"k12\">Alksnio malku [$kit[12]]</option>"; }
if ($kit[13] > 0){ echo"<option value=\"k13\">Ievos malku [$kit[13]]</option>"; }
if ($kit[14] > 0){ echo"<option value=\"k14\">Gluosnio malku [$kit[14]]</option>"; }
if ($kit[15] > 0){ echo"<option value=\"k15\">Topolio malku [$kit[15]]</option>"; }
if ($kit[16] > 0){ echo"<option value=\"k16\">Klevo malku [$kit[16]]</option>"; }
if ($kit[17] > 0){ echo"<option value=\"k17\">Azuolo malku [$kit[17]]</option>"; }
if ($kit[24] > 0){ echo"<option value=\"k24\">Streliu antgaliu [$kit[24]]</option>"; }
if ($kit[26] > 0){ echo"<option value=\"k26\">Streliu koteliu [$kit[26]]</option>"; }
if ($kit[27] > 0){ echo"<option value=\"k27\">Streliu [$kit[27]]</option>"; }
if ($kit[18] > 0){ echo"<option value=\"k18\">Alksnio lanku [$kit[18]]</option>"; }
if ($kit[19] > 0){ echo"<option value=\"k19\">Ievos lanku [$kit[19]]</option>"; }
if ($kit[20] > 0){ echo"<option value=\"k20\">Gluosnio lanku [$kit[20]]</option>"; }
if ($kit[21] > 0){ echo"<option value=\"k21\">Topolio lanku [$kit[21]]</option>"; }
if ($kit[22] > 0){ echo"<option value=\"k22\">Klevo lanku [$kit[22]]</option>"; }
if ($kit[23] > 0){ echo"<option value=\"k23\">Azuolo lanku [$kit[23]]</option>"; }
if ($kit[29] > 0){ echo"<option value=\"k29\">Nekeptu balandziu [$kit[29]]</option>"; }
if ($kit[30] > 0){ echo"<option value=\"k30\">Nekeptos zuikienos [$kit[30]]</option>"; }
if ($kit[31] > 0){ echo"<option value=\"k31\">Nekeptu fazanu [$kit[31]]</option>"; }
if ($kit[32] > 0){ echo"<option value=\"k32\">Nekeptu tetervinu [$kit[32]]</option>"; }
if ($kit[33] > 0){ echo"<option value=\"k33\">Nekeptos stirnienos [$kit[33]]</option>"; }
if ($kit[34] > 0){ echo"<option value=\"k34\">Nekeptos elnienos [$kit[34]]</option>"; }
if ($kit[35] > 0){ echo"<option value=\"k35\">Nekeptos briedzio mesos [$kit[35]]</option>"; }
if ($kit[36] > 0){ echo"<option value=\"k36\">Nekeptos sernienos [$kit[36]]</option>"; }
if ($kit[38] > 0){ echo"<option value=\"k38\">Keptu karosu [$kit[38]]</option>"; }
if ($kit[39] > 0){ echo"<option value=\"k39\">Keptu eseriu [$kit[39]]</option>"; }
if ($kit[40] > 0){ echo"<option value=\"k40\">Keptu lynu [$kit[40]]</option>"; }
if ($kit[41] > 0){ echo"<option value=\"k41\">Keptu raudziu [$kit[41]]</option>"; }
if ($kit[42] > 0){ echo"<option value=\"k42\">Keptu karpiu [$kit[42]]</option>"; }
if ($kit[43] > 0){ echo"<option value=\"k43\">Keptu starkiu [$kit[43]]</option>"; }
if ($kit[44] > 0){ echo"<option value=\"k44\">Keptu lydeku [$kit[44]]</option>"; }
if ($kit[45] > 0){ echo"<option value=\"k45\">Keptu balandziu [$kit[45]]</option>"; }
if ($kit[46] > 0){ echo"<option value=\"k46\">Keptos zuikienos [$kit[46]]</option>"; }
if ($kit[47] > 0){ echo"<option value=\"k47\">Keptu fazanu [$kit[47]]</option>"; }
if ($kit[48] > 0){ echo"<option value=\"k48\">Keptu tetervinu [$kit[48]]</option>"; }
if ($kit[49] > 0){ echo"<option value=\"k49\">Keptos stirnienos [$kit[49]]</option>"; }
if ($kit[50] > 0){ echo"<option value=\"k50\">Keptos elnienos [$kit[50]]</option>"; }
if ($kit[51] > 0){ echo"<option value=\"k51\">Keptos briedzio mesos [$kit[51]]</option>"; }
if ($kit[52] > 0){ echo"<option value=\"k52\">Keptos sernienos [$kit[52]]</option>"; }

echo"</select><br/></small><small>Kiek desi?:<br/>
<input name=\"da\" type=\"text\" maxlength=\"10\" format=\"*N\" title=\"info\" value=\"\" size=\"16\"/><br/>
Prasoma kreditu suma (pvz: 2 arba 0.1):<br/>
<input name=\"kj\" type=\"text\" maxlength=\"10\" title=\"info\" value=\"\" size=\"16\"/><br/>
<anchor>- Deti preke [&#187;&#187;&#187;]<go href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=dedu&amp;kan=$(kan)&amp;da=$(da)&amp;kj=$(kj)\"></go></anchor></small><br/>
<small>$lin<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>"; }

if ($id == "dedu"){ 
$da=ereg_replace("[^0-9]","",$da); 
$kj=ereg_replace("[^0-9.]","",$kj); 
if ($kan=="p7"){ $dkfl = "ok"; $pavd="Pinigu"; }
if ($kan=="r0"){ $dkfl = "ok"; $pavd="Gelezies rudu"; }
if ($kan=="r1"){ $dkfl = "ok"; $pavd="Zalvario rudu"; }
if ($kan=="r2"){ $dkfl = "ok"; $pavd="Sidabro rudu"; }
if ($kan=="r3"){ $dkfl = "ok"; $pavd="Aukso rudu"; }
if ($kan=="r4"){ $dkfl = "ok"; $pavd="Gelezies plyteliu"; }
if ($kan=="r5"){ $dkfl = "ok"; $pavd="Zalvario plyteliu"; }
if ($kan=="r6"){ $dkfl = "ok"; $pavd="Sidabro plyteliu"; }
if ($kan=="r7"){ $dkfl = "ok"; $pavd="Aukso plyteliu"; }
if ($kan=="r8"){ $dkfl = "ok"; $pavd="Bronze kardu"; }
if ($kan=="r9"){ $dkfl = "ok"; $pavd="Spyziaus kardu"; }
if ($kan=="r10"){ $dkfl = "ok"; $pavd="Zalvario kardu"; }
if ($kan=="r11"){ $dkfl = "ok"; $pavd="Vario kardu"; }
if ($kan=="r12"){ $dkfl = "ok"; $pavd="Gelezies kardu"; }
if ($kan=="r13"){ $dkfl = "ok"; $pavd="Plieno kardu"; }
if ($kan=="r14"){ $dkfl = "ok"; $pavd="Sidabro kardu"; }
if ($kan=="r15"){ $dkfl = "ok"; $pavd="Aukso kardu"; }
if ($kan=="r16"){ $dkfl = "ok"; $pavd="Z kardu"; }
if ($kan=="r17"){ $dkfl = "ok"; $pavd="Bronze sarvu"; }
if ($kan=="r18"){ $dkfl = "ok"; $pavd="Spyziaus sarvu"; }
if ($kan=="r19"){ $dkfl = "ok"; $pavd="Zalvario sarvu"; }
if ($kan=="r20"){ $dkfl = "ok"; $pavd="Vario sarvu"; }
if ($kan=="r21"){ $dkfl = "ok"; $pavd="Gelezies sarvu"; }
if ($kan=="r22"){ $dkfl = "ok"; $pavd="Plieno sarvu"; }
if ($kan=="r23"){ $dkfl = "ok"; $pavd="Sidabro sarvu"; }
if ($kan=="r24"){ $dkfl = "ok"; $pavd="Aukso sarvu"; }
if ($kan=="r25"){ $dkfl = "ok"; $pavd="Z sarvu"; }
if ($kan=="z1"){ $dkfl = "ok"; $pavd="Slieku"; }
if ($kan=="z2"){ $dkfl = "ok"; $pavd="Teslos"; }
if ($kan=="z3"){ $dkfl = "ok"; $pavd="Karosu"; }
if ($kan=="z4"){ $dkfl = "ok"; $pavd="Eseriu"; }
if ($kan=="z5"){ $dkfl = "ok"; $pavd="Lynu"; }
if ($kan=="z6"){ $dkfl = "ok"; $pavd="Raudziu"; }
if ($kan=="z7"){ $dkfl = "ok"; $pavd="Karpiu"; }
if ($kan=="z8"){ $dkfl = "ok"; $pavd="Starkiu"; }
if ($kan=="z9"){ $dkfl = "ok"; $pavd="Lydeku"; }

if ($kan=="k0"){ $dkfl = "ok"; $pavd="Lazdininiu meskeriu"; }
if ($kan=="k1"){ $dkfl = "ok";  $pavd="Bambukiniu meskeriu"; }
if ($kan=="k2"){ $dkfl = "ok";  $pavd="Spiningu"; }
if ($kan=="k3"){ $dkfl = "ok";  $pavd="Bronze kirtikliu"; }
if ($kan=="k4"){ $dkfl = "ok";  $pavd="Spyziniu kirtikliu"; }
if ($kan=="k5"){ $dkfl = "ok";  $pavd="Geleziniu kirtikliu"; }
if ($kan=="k6"){ $dkfl = "ok";  $pavd="Plieniniu kirtikliu"; }
if ($kan=="k7"){ $dkfl = "ok";  $pavd="Bronze kirviu"; }
if ($kan=="k8"){ $dkfl = "ok";  $pavd="Spyziniu kirviu"; }
if ($kan=="k9"){ $dkfl = "ok";  $pavd="Geleziniu kirviu"; }
if ($kan=="k10"){ $dkfl = "ok"; $pavd="Plieniniu kirviu"; }
if ($kan=="k12"){ $dkfl = "ok"; $pavd="Alksnio malku"; }
if ($kan=="k13"){ $dkfl = "ok"; $pavd="Ievos malku"; }
if ($kan=="k14"){ $dkfl = "ok"; $pavd="Gluosnio malku"; }
if ($kan=="k15"){ $dkfl = "ok"; $pavd="Topolio malku"; }
if ($kan=="k16"){ $dkfl = "ok"; $pavd="Klevo malku"; }
if ($kan=="k17"){ $dkfl = "ok"; $pavd="Azuolo malku"; }
if ($kan=="k24"){ $dkfl = "ok"; $pavd="Streliu antgaliu"; }
if ($kan=="k26"){ $dkfl = "ok"; $pavd="Streliu koteliu"; }
if ($kan=="k27"){ $dkfl = "ok"; $pavd="Streliu"; }
if ($kan=="k18"){ $dkfl = "ok"; $pavd="Alksnio lanku"; }
if ($kan=="k19"){ $dkfl = "ok"; $pavd="Ievos lanku"; }
if ($kan=="k20"){ $dkfl = "ok"; $pavd="Gluosnio lanku"; }
if ($kan=="k21"){ $dkfl = "ok"; $pavd="Topolio lanku"; }
if ($kan=="k22"){ $dkfl = "ok"; $pavd="Klevo lanku"; }
if ($kan=="k23"){ $dkfl = "ok"; $pavd="Azuolo lanku"; }
if ($kan=="k29"){ $dkfl = "ok"; $pavd="Nekeptu balandziu"; }
if ($kan=="k30"){ $dkfl = "ok"; $pavd="Nekeptos zuikienos"; }
if ($kan=="k31"){ $dkfl = "ok"; $pavd="Nekeptu fazanu"; }
if ($kan=="k32"){ $dkfl = "ok"; $pavd="Nekeptu tetervinu"; }
if ($kan=="k33"){ $dkfl = "ok"; $pavd="Nekeptos stirnienos"; }
if ($kan=="k34"){ $dkfl = "ok"; $pavd="Nekeptos elnienos"; }
if ($kan=="k35"){ $dkfl = "ok"; $pavd="Nekeptos briedzio mesos"; }
if ($kan=="k36"){ $dkfl = "ok"; $pavd="Nekeptos sernienos"; }
if ($kan=="k38"){ $dkfl = "ok"; $pavd="Keptu karosu"; }
if ($kan=="k39"){ $dkfl = "ok"; $pavd="Keptu eseriu"; }
if ($kan=="k40"){ $dkfl = "ok"; $pavd="Keptu lynu"; }
if ($kan=="k41"){ $dkfl = "ok"; $pavd="Keptu raudziu"; }
if ($kan=="k42"){ $dkfl = "ok"; $pavd="Keptu karpiu"; }
if ($kan=="k43"){ $dkfl = "ok"; $pavd="Keptu starkiu"; }
if ($kan=="k44"){ $dkfl = "ok"; $pavd="Keptu lydeku"; }
if ($kan=="k45"){ $dkfl = "ok"; $pavd="Keptu balandziu"; }
if ($kan=="k46"){ $dkfl = "ok"; $pavd="Keptos zuikienos"; }
if ($kan=="k47"){ $dkfl = "ok"; $pavd="Keptu fazanu"; }
if ($kan=="k48"){ $dkfl = "ok"; $pavd="Keptu tetervinu"; }
if ($kan=="k49"){ $dkfl = "ok"; $pavd="Keptos stirnienos"; }
if ($kan=="k50"){ $dkfl = "ok"; $pavd="Keptos elnienos"; }
if ($kan=="k51"){ $dkfl = "ok"; $pavd="Keptos briedzio mesos"; }
if ($kan=="k52"){ $dkfl = "ok"; $pavd="Keptos sernienos"; }

include("icludekitainf/nuskait.php"); 
$hex=explode(".",$kj);
if (count($hex)>2){ $bad = "Prasome ivesti norima kaina!"; }
if (strlen($hex[1]) > 2){ $bad = "Prasome ivesti norima kaina!"; }
if (count($hex)>2){ $bad = "Prasome ivesti norima kaina!"; }
if (count($hex)<2){ if (substr($hex[0],0,1)==0){ $bad = "Prasome ivesti kaina normaliu formatu, pvz 2 arba 0.2!"; }}
if ($dkfl != "ok"){ $bad = "Prasome pasirinkti dedama preke!"; }
if ($da == ""){ $bad = "Prasome ivesti kieki!"; }
if ($kj == ""){ $bad = "Prasome ivesti norima kaina!"; }
if ($kan == ""){ $bad = "Prasome pasirinkti dedama preke!"; }
if (count(glob("aukcj/$nick-*.txt"))>5){ 
 $bad = "Daugiau prekiu siuo metu deti negali!"; }

$c = substr($kan, 0, 1); 
if ($c == "p"){ $kint = $inf[7]; $inf[7]=$inf[7]-$da; $m = 7; }
if ($c == "r"){ $m = str_replace("r","",$kan);
$kint = $in[$m];  $in[$m]=$in[$m]-$da; }
if ($c == "z"){ $m = str_replace("z","",$kan);
$kint = $fis[$m];  $fis[$m]=$fis[$m]-$da; }
if ($c == "k"){ $m = str_replace("k","",$kan);
$kint = $kit[$m];  $kit[$m]=$kit[$m]-$da; }

if ($kint < $da){  $bad = "Tiek siu prekiu neturi!"; }

if ($bad == ""){  $bad = "Ideta! Dabar si preke is tavo saugyklos isimama, bet jei jos niekas nenupirks ji vel bus grazinta. Prekes dalyvavimo aukcijone laikas 3h. Siam laikui visam praeiti nebutina, nes preke is aukcijono dings kai tik kas nors pirmas ja pirks ;)"; 
$kodas = rand(0,999999999); 
$tim = time(); 
$fop = fopen("aukcj/$nick-$kodas.txt", "w+");
        fwrite($fop, "$nick|$da|$pavd|$c|$m|$laikas|$tim|$kj|\n");
        fclose($fop);
        chmod("aukcj/$nick-$kodas.txt",0777); 
$fop = fopen("fyshers/$nick.txt", "w");
        fwrite($fop, "$fis[0]|$fis[1]|$fis[2]|$fis[3]|$fis[4]|$fis[5]|$fis[6]|$fis[7]|$fis[8]|$fis[9]|");
        fclose($fop);
$fop = fopen("miners/$nick.txt", "w");
        fwrite($fop, "$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
        fclose($fop);
$fop = fopen("ndbzgtusrsz/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|");
        fclose($fop);
    include("icludekitainf/iras.php");
}
echo"<p align=\"left\"><small>$bad<br/>$lin<br/>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Aukcijonas</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>"; }

print'</card></wml>';

?>