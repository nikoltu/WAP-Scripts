<?php
include_once("core.php");
$kur = "Siukslyne..."; 
include ("config.php");



if ($id == "") { 
$lj = glob("siuksl/*.txt"); 
for ($p=0; $p < count($lj); $p++){ 
$ei = explode("|",@file_get_contents($lj[$p])); 
if ($ei[6]+3*60*60*10<time()){

@unlink($lj[$p]); 
}}


echo"<div class=\"center\">Siukslynas</div>
     <div class=\"center\"><a href=\"siukslynas.php?nick=$nick&amp;pass=$pass&amp;id=idet\">Imesti</a></div>
     <br><div class=\"leftas\">"; 

$nuskk = glob("siuksl/*.txt"); 
$viso_tm = count($nuskk);
$puslapiu_skaicius = 20;

if ($nuskk == 0)
    {
echo "<div class=\"center\">Tuscia...</div>"; }
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
$pavd = str_replace(array("siuksl/",".txt"),"",$nuskk[$c]); 

$ka = $pavd;

echo"$e[1] $e[2] <a href=\"siukslynas.php?nick=$nick&amp;pass=$pass&amp;id=perku&amp;ka=$ka\">(imti)</a><br/>"; }

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
echo "<a href=\"siukslynas.php?nick=$nick&amp;pass=$pass&amp;id=&amp;page=$starto_skaicius\">($starto_skaicius)</a>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }}

echo"</div>
     <div class=\"center\"><br><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

if ($id == "perku" && file_exists("siuksl/$ka.txt")){ 
$kj=ereg_replace("[^0-9.]","",$kj); 
$e = explode("|",file_get_contents("siuksl/$ka.txt")); 
if ($bad == ""){ 
$bad = "Paemei!"; 

if($e[3]=="p"){ $pinigai=$pinigai+$e[1]; 
$fop = fopen("us_xgrx_inf147258369/$nick.txt", "w");
        fwrite($fop, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$pinigai|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|$inf[26]|$inf[27]|$inf[28]|$inf[29]|$inf[30]|$inf[31]|$inf[32]|$inf[33]|$inf[34]|$inf[35]|$inf[36]|$inf[37]|$inf[38]|$inf[39]|$inf[40]|");
        fclose($fop);
}
if($e[3]=="r"){ 
$in[$e[4]]=$in[$e[4]]+$e[1]; 
$fop1 = fopen("miners/$nick.txt", "w");
        fwrite($fop1, "$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|$in[28]|$in[29]|$in[30]|$in[31]|$in[32]|$in[33]|$in[34]|$in[35]|$in[36]|$in[37]|$in[38]|$in[39]|$in[40]|");
        fclose($fop1); }

if($e[3]=="x"){ 
$inw[$e[4]]=$inw[$e[4]]+$e[1]; 
$fop15 = fopen("material/$nick.txt", "w");
        fwrite($fop15, "$inw[0]|$inw[1]|$inw[2]|$inw[3]|$inw[4]|$inw[5]|$inw[6]|$inw[7]|$inw[8]|$inw[9]|$inw[10]|$inw[11]|$inw[12]|$inw[13]|$inw[14]|$inw[15]|$inw[16]|$inw[17]|$inw[18]|$inw[19]|$inw[20]|$inw[21]|$inw[22]|$inw[23]|$inw[24]|$inw[25]|$inw[26]|$inw[27]|$inw[28]|$inw[29]|$inw[30]|$inw[31]|$inw[32]|$inw[33]|$inw[34]|$inw[35]|$inw[36]|$inw[37]|$inw[38]|$inw[39]|");
        fclose($fop15); }

if($e[3]=="i"){ 
$ini[$e[4]]=$ini[$e[4]]+$e[1]; 
$fop15 = fopen("items/$nick.txt", "w");
        fwrite($fop15, "$ini[0]|$ini[1]|$ini[2]|$ini[3]|$ini[4]|$ini[5]|$ini[6]|$ini[7]|$ini[8]|$ini[9]|$ini[10]|$ini[11]|$ini[12]|$ini[13]|$ini[14]|$ini[15]|$ini[16]|$ini[17]|$ini[18]|$ini[19]|$ini[20]|$ini[21]|$ini[22]|$ini[23]|$ini[24]|$ini[25]|$ini[26]|$ini[27]|$ini[28]|$ini[29]|$ini[30]|$ini[31]|$ini[32]|$ini[33]|$ini[34]|$ini[35]|$ini[36]|$ini[37]|$ini[38]|$ini[39]|");
        fclose($fop15); }

if($e[3]=="g"){ 
$inr[$e[4]]=$inr[$e[4]]+$e[1]; 
$fop2 = fopen("rudos/$nick.txt", "w");
        fwrite($fop2, "$inr[0]|$inr[1]|$inr[2]|$inr[3]|$inr[4]|$inr[5]|$inr[6]|$inr[7]|$inr[8]|$inr[9]|$inr[10]|$inr[11]|$inr[12]|$inr[13]|$inr[14]|$inr[15]|$inr[16]|$inr[17]|$inr[18]|$inr[19]|$inr[20]|$inr[21]|$inr[22]|$inr[23]|$inr[24]|$inr[25]|$inr[26]|$inr[27]|$inr[28]|$inr[29]|$inr[30]|$inr[31]|$inr[32]|$inr[33]|$inr[34]|$inr[35]|$inr[36]|$inr[37]|$inr[38]|$inr[39]|");
        fclose($fop2); }

if($e[3]=="w"){ 
$ink[$e[4]]=$ink[$e[4]]+$e[1]; 
$fop4 = fopen("kitaj/$nick.txt", "w");
        fwrite($fop4, "$ink[0]|$ink[1]|$ink[2]|$ink[3]|$ink[4]|$ink[5]|$ink[6]|$ink[7]|$ink[8]|$ink[9]|$ink[10]|$ink[11]|$ink[12]|$ink[13]|$ink[14]|$ink[15]|$ink[16]|$ink[17]|$ink[18]|$ink[19]|$ink[20]|$ink[21]|$ink[22]|$ink[23]|$ink[24]|$ink[25]|$ink[26]|$ink[27]|$ink[28]|$ink[29]|$ink[30]|$ink[31]|$ink[32]|$ink[33]|$ink[34]|$ink[35]|$ink[36]|$ink[37]|$ink[38]|$ink[39]|");
        fclose($fop4); }

if($e[3]=="m"){ 
$inm[$e[4]]=$inm[$e[4]]+$e[1]; 
$fop7 = fopen("medz/$nick.txt", "w");
        fwrite($fop7, "$inm[0]|$inm[1]|$inm[2]|$inm[3]|$inm[4]|$inm[5]|$inm[6]|$inm[7]|$inm[8]|$inm[9]|$inm[10]|$inm[11]|$inm[12]|$inm[13]|$inm[14]|$inm[15]|$inm[16]|$inm[17]|$inm[18]|$inm[19]|$inm[20]|$inm[21]|$inm[22]|$inm[23]|$inm[24]|$inm[25]|$inm[26]|$inm[27]|$inm[28]|$inm[29]|$inm[30]|$inm[31]|$inm[32]|$inm[33]|$inm[34]|$inm[35]|$inm[36]|$inm[37]|$inm[38]|$inm[39]|");
        fclose($fop7); }


if($e[3]=="b"){ 
$inu[$e[4]]=$inu[$e[4]]+$e[1]; 
$fop8 = fopen("uoga/$nick.txt", "w");
        fwrite($fop8, "$inu[0]|$inu[1]|$inu[2]|$inu[3]|$inu[4]|$inu[5]|$inu[6]|$inu[7]|$inu[8]|$inu[9]|$inu[10]|$inu[11]|$inu[12]|$inu[13]|$inu[14]|$inu[15]|$inu[16]|$inu[17]|$inu[18]|$inu[19]|$inu[20]|$inu[21]|$inu[22]|$inu[23]|$inu[24]|$inu[25]|$inu[26]|$inu[27]|$inu[28]|$inu[29]|$inu[30]|$inu[31]|$inu[32]|$inu[33]|$inu[34]|$inu[35]|$inu[36]|$inu[37]|$inu[38]|$inu[39]|$inu[40]|$inu[41]|$inu[42]|$inu[43]|");
        fclose($fop8); }

if($e[3]=="e"){ 
$inq[$e[4]]=$inq[$e[4]]+$e[1]; 
$fop9 = fopen("uogyte/$nick.txt", "w");
        fwrite($fop9, "$inq[0]|$inq[1]|$inq[2]|$inq[3]|$inq[4]|$inq[5]|$inq[6]|$inq[7]|$inq[8]|$inq[9]|$inq[10]|$inq[11]|$inq[12]|$inq[13]|$inq[14]|$inq[15]|$inq[16]|$inq[17]|$inq[18]|$inq[19]|$inq[20]|$inq[21]|$inq[22]|$inq[23]|$inq[24]|$inq[25]|$inq[26]|$inq[27]|$inq[28]|$inq[29]|$inq[30]|$inq[31]|$inq[32]|$inq[33]|$inq[34]|$inq[35]|$inq[36]|$inq[37]|$inq[38]|$inq[39]|");
        fclose($fop9); }

if($e[3]=="u"){ 
$inj[$e[4]]=$inj[$e[4]]+$e[1]; 
$fop3 = fopen("juvelyrics/$nick.txt", "w");
        fwrite($fop3, "$inj[0]|$inj[1]|$inj[2]|$inj[3]|$inj[4]|$inj[5]|$inj[6]|$inj[7]|$inj[8]|$inj[9]|$inj[10]|$inj[11]|$inj[12]|$inj[13]|$inj[14]|$inj[15]|$inj[16]|$inj[17]|$inj[18]|$inj[19]|$inj[20]|$inj[21]|$inj[22]|$inj[23]|$inj[24]|$inj[25]|$inj[26]|$inj[27]|$inj[28]|$inj[29]|$inj[30]|$inj[31]|$inj[32]|$inj[33]|$inj[34]|$inj[35]|$inj[36]|$inj[37]|$inj[38]|$inj[40]|");
        fclose($fop3); }  

if($e[3]=="z"){ 
$fis[$e[4]]=$fis[$e[4]]+$e[1]; 
$fop4 = fopen("fyshers/$nick.txt", "w");
        fwrite($fop4, "$fis[0]|$fis[1]|$fis[2]|$fis[3]|$fis[4]|$fis[5]|$fis[6]|$fis[7]|$fis[8]|$fis[9]|$fis[10]|$fis[11]|$fis[12]|");
        fclose($fop4); }

if($e[3]=="k"){ 
include("icludekitainf/nuskait.php"); 
$kit[$e[4]]=$kit[$e[4]]+$e[1]; 
    include("icludekitainf/iras.php"); }
         if($e[3]=="o"){ 
include("icludekitainf/nuskait.php"); 
$dari[$e[4]]=$dari[$e[4]]+$e[1]; 
    include("icludekitainf/iras2.php"); }

@unlink("siuksl/$ka.txt"); 
        
}
echo"<br><div class=\"center\">$bad</div><br>
     <div class=\"center\"><a href=\"siukslynas.php?nick=$nick&amp;pass=$pass&amp;id=\">I siukslyna</a></div>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

if ($id == "idet"){ 
echo"<div class=\"center\">Siukslynas</div>
     <div class=\"leftas\">Ka mesi?</div>
     <div class=\"leftas\">
<form action='siukslynas.php?nick=$nick&amp;pass=$pass&amp;id=dedu' method='post'>
<select name=\"kan\">";
 if ($pinigai > 0){ echo"<option value=\"p7\">Pinigu [$pinigai]</option>"; }
if ($iron_ores > 0){ echo"<option value=\"r0\">Gelezies rudu [$iron_ores]</option>"; }
if ($zalvario_ores > 0){ echo"<option value=\"r1\">Zalvario rudu [$zalvario_ores]</option>"; }
if ($sidabro_ores > 0){ echo"<option value=\"r2\">Sidabro rudu [$sidabro_ores]</option>"; }
if ($aukso_ores > 0){ echo"<option value=\"r3\">Aukso rudu [$aukso_ores]</option>"; }
if ($titano_ores > 0){ echo"<option value=\"r28\">Titano rudu [$titano_ores]</option>"; }
if ($cosmic_ores > 0){ echo"<option value=\"r29\">Adamand rudu [$cosmic_ores]</option>"; }
if ($iron_baru > 0){ echo"<option value=\"r4\">Gelezies plyteliu [$iron_baru]</option>"; }
if ($zalvario_baru > 0){ echo"<option value=\"r5\">Zalvario plyteliu [$zalvario_baru]</option>"; }
if ($sidabro_baru > 0){ echo"<option value=\"r6\">Sidabro plyteliu [$sidabro_baru]</option>"; }
if ($aukso_baru > 0){ echo"<option value=\"r7\">Aukso plyteliu [$aukso_baru]</option>"; }
if ($titano_baru > 0){ echo"<option value=\"r30\">Titano plyteliu [$titano_baru]</option>"; }
if ($cosmic_baru > 0){ echo"<option value=\"r31\">Adamand plyteliu [$cosmic_baru]</option>"; }
if ($bronze_swordu > 0){ echo"<option value=\"r8\">Bronze kardu [$bronze_swordu]</option>"; }
if ($spyziaus_swordu > 0){ echo"<option value=\"r9\">Spyziaus kardu [$spyziaus_swordu]</option>"; }
if ($zalvario_swordu > 0){ echo"<option value=\"r10\">Zalvario kardu [$zalvario_swordu]</option>"; }
if ($vario_swordu > 0){ echo"<option value=\"r11\">Vario kardu [$vario_swordu]</option>"; }
if ($gelezies_swordu > 0){ echo"<option value=\"r12\">Gelezies kardu [$gelezies_swordu]</option>"; }
if ($plieno_swordu > 0){ echo"<option value=\"r13\">Plieno kardu [$plieno_swordu]</option>"; }
if ($sidabro_swordu > 0){ echo"<option value=\"r14\">Sidabro kardu [$sidabro_swordu]</option>"; }
if ($aukso_swordu > 0){ echo"<option value=\"r15\">Aukso kardu [$aukso_swordu]</option>"; }
if ($titano_swordu > 0){ echo"<option value=\"r32\">Titano kardu [$titano_swordu]</option>"; }
if ($cosmic_swordu > 0){ echo"<option value=\"r33\">Adamand kalaviju [$cosmic_swordu]</option>"; }
if ($dragon_swordu > 0){ echo"<option value=\"r16\">Dragon kardu [$dragon_swordu]</option>"; }
if ($bronze_sarvu > 0){ echo"<option value=\"r17\">Bronze sarvu [$bronze_sarvu]</option>"; }
if ($spyziaus_sarvu > 0){ echo"<option value=\"r18\">Spyziaus sarvu [$spyziaus_sarvu]</option>"; }
if ($zalvario_sarvu > 0){ echo"<option value=\"r19\">Zalvario sarvu [$zalvario_sarvu]</option>"; }
if ($vario_sarvu > 0){ echo"<option value=\"r20\">Vario sarvu [$vario_sarvu]</option>"; }
if ($gelezies_sarvu > 0){ echo"<option value=\"r21\">Gelezies sarvu [$gelezies_sarvu]</option>"; }
if ($plieno_sarvu > 0){ echo"<option value=\"r22\">Plieno sarvu [$plieno_sarvu]</option>"; }
if ($sidabro_sarvu > 0){ echo"<option value=\"r23\">Sidabro sarvu [$sidabro_sarvu]</option>"; }
if ($aukso_sarvu > 0){ echo"<option value=\"r24\">Aukso sarvu [$aukso_sarvu]</option>"; }
if ($titano_sarvu > 0){ echo"<option value=\"r34\">Titano sarvu [$titano_sarvu]</option>"; }
if ($cosmic_sarvu > 0){ echo"<option value=\"r35\">Adamand sarvu [$cosmic_sarvu]</option>"; }

if ($akm1 > 0){ echo"<option value=\"x0\">Blue material  [$akm1]</option>"; }
if ($akm2 > 0){ echo"<option value=\"x1\">Purple material  [$akm2]</option>"; }
if ($akm3 > 0){ echo"<option value=\"x2\">Apdirbtu blue material  [$akm3]</option>"; }
if ($akm4 > 0){ echo"<option value=\"x3\">Apdirbtu purple material  [$akm4]</option>"; }
if ($akm5 > 0){ echo"<option value=\"x4\">Blue apsiaustu  [$akm5]</option>"; }
if ($akm6 > 0){ echo"<option value=\"x5\">Purple apsiaustu  [$akm6]</option>"; }
if ($akm7 > 0){ echo"<option value=\"x6\">Blue batu  [$akm7]</option>"; }
if ($akm8 > 0){ echo"<option value=\"x7\">Purple batu  [$akm8]</option>"; }
if ($akm9 > 0){ echo"<option value=\"x8\">Blue pirstiniu  [$akm9]</option>"; }
if ($akm10 > 0){ echo"<option value=\"x9\">Purple pirstiniu  [$akm10]</option>"; }

if ($ang > 0){ echo"<option value=\"g0\">Anglies [$ang]</option>"; }
if ($miner > 0){ echo"<option value=\"g1\">Mineralu [$miner]</option>"; }
if ($krist > 0){ echo"<option value=\"g2\">Krsitalu [$krist]</option>"; }
if ($rune > 0){ echo"<option value=\"g3\">Runite rudu [$rune]</option>"; }
if ($brang > 0){ echo"<option value=\"g4\">Brangakmeniu [$brang]</option>"; }
if ($rune_baru > 0){ echo"<option value=\"g5\">Runite plyteliu [$rune_baru]</option>"; }
if ($rune_sarvu > 0){ echo"<option value=\"g6\">Runite_sarvu [$rune_sarvu]</option>"; }
if ($uns3 > 0){ echo"<option value=\"g9\">bronze skydu [$uns3]</option>"; }
if ($uns4 > 0){ echo"<option value=\"g10\">zalvario skydu [$uns4]</option>"; }
if ($uns5 > 0){ echo"<option value=\"g11\">vario skydu [$uns5]</option>"; }
if ($uns6 > 0){ echo"<option value=\"g12\">gelezies skydu [$uns6]</option>"; }
if ($uns7 > 0){ echo"<option value=\"g13\">plienio skydu [$uns7]</option>"; }
if ($uns8 > 0){ echo"<option value=\"g14\">sidabro skydu [$uns8]</option>"; }
if ($uns9 > 0){ echo"<option value=\"g15\">aukso skydu [$uns9]</option>"; }
if ($uns10 > 0){ echo"<option value=\"g16\">titano skydu [$uns10]</option>"; }
if ($uns11 > 0){ echo"<option value=\"g17\">adamand skydu [$uns11]</option>"; }
if ($uns12 > 0){ echo"<option value=\"g18\">rune skydu [$uns12]</option>"; }
if ($uns13 > 0){ echo"<option value=\"g19\">zeberklu [$uns13]</option>"; }
if ($uns14 > 0){ echo"<option value=\"g20\">undineliu [$uns14]</option>"; }
if ($uns17 > 0){ echo"<option value=\"g23\">Bronziniai antkeliai [$uns17]</option>"; }
if ($uns18 > 0){ echo"<option value=\"g24\">Zalvariniai antkeliai  [$uns18]</option>"; }
if ($uns19 > 0){ echo"<option value=\"g25\">Variniai vyriai  [$uns19]</option>"; }
if ($uns20 > 0){ echo"<option value=\"g26\">Gelezines apsaugos  [$uns20]</option>"; }
if ($uns21 > 0){ echo"<option value=\"g27\">Plieninis sutvirtinimas  [$uns21]</option>"; }
if ($uns22 > 0){ echo"<option value=\"g28\">Sidabrines kelnes  [$uns22]</option>"; }
if ($uns23 > 0){ echo"<option value=\"g29\">Auksinio drakono apavas  [$uns23]</option>"; }
if ($uns24 > 0){ echo"<option value=\"g30\">Titan kelnes [$uns24]</option>"; }
if ($uns25 > 0){ echo"<option value=\"g31\">Adamand kelnes  [$uns25]</option>"; }
if ($uns26 > 0){ echo"<option value=\"g32\">Rune sijonas  [$uns26]</option>"; }
if ($uns31 > 0){ echo"<option value=\"g37\">Volcanic rudu  [$uns31]</option>"; }
if ($uns32 > 0){ echo"<option value=\"g38\">Volcanic plyteliu  [$uns32]</option>"; }
if ($uns33 > 0){ echo"<option value=\"g39\">Volcanic sarvu  [$uns33]</option>"; }

if ($un1 > 0){ echo"<option value=\"m0\">Volcanic vyriai  [$un1]</option>"; }
if ($un2 > 0){ echo"<option value=\"m1\">Volcanic skydas  [$un2]</option>"; }
if ($un3 > 0){ echo"<option value=\"m2\">Berzo malka  [$un3]</option>"; }
if ($un4 > 0){ echo"<option value=\"m3\">Uosio malka [$un4]</option>"; }
if ($un5 > 0){ echo"<option value=\"m4\">Baobabo malka  [$un5]</option>"; }
if ($un6 > 0){ echo"<option value=\"m5\">Berzo lankas  [$un6]</option>"; }
if ($un7 > 0){ echo"<option value=\"m6\">Uosio lankas  [$un7]</option>"; }
if ($un8 > 0){ echo"<option value=\"m7\">Baobabo lankas  [$un8]</option>"; }
if ($un9 > 0){ echo"<option value=\"m8\">Maumedzio malka  [$un9]</option>"; }
if ($un10 > 0){ echo"<option value=\"m9\">Maumedzio lankas  [$un10]</option>"; }
if ($un11 > 0){ echo"<option value=\"m10\">Lokiu  [$un11]</option>"; }
if ($un12 > 0){ echo"<option value=\"m11\">Stumbru  [$un12]</option>"; }
if ($un13 > 0){ echo"<option value=\"m12\">Mamutu  [$un13]</option>"; }
if ($un14 > 0){ echo"<option value=\"m13\">Keptu lokiu  [$un14]</option>"; }
if ($un15 > 0){ echo"<option value=\"m14\">Keptu stumbru  [$un15]</option>"; }
if ($un16 > 0){ echo"<option value=\"m15\">Keptu mamutu  [$un16]</option>"; }
if ($un18 > 0){ echo"<option value=\"m17\">Lepsiu  [$un18]</option>"; }
if ($un19 > 0){ echo"<option value=\"m18\">Umedziu  [$un19]</option>"; }
if ($un20 > 0){ echo"<option value=\"m19\">Kazleku  [$un20]</option>"; }
if ($un21 > 0){ echo"<option value=\"m20\">Voverusku  [$un21]</option>"; }
if ($un22 > 0){ echo"<option value=\"m21\">Tilviku  [$un22]</option>"; }
if ($un23 > 0){ echo"<option value=\"m22\">Jautakiu  [$un23]</option>"; }
if ($un24 > 0){ echo"<option value=\"m23\">Silbaravikiu  [$un24]</option>"; }
if ($un25 > 0){ echo"<option value=\"m24\">Paazuoliu [$un25]</option>"; }
if ($un26 > 0){ echo"<option value=\"m25\">Raudonvirsiu [$un26]</option>"; }
if ($un27 > 0){ echo"<option value=\"m26\">Baravyku  [$un27]</option>"; }

if ($uu1 > 0){ echo"<option value=\"b0\">Serbentu  [$uu1]</option>"; }
if ($uu2 > 0){ echo"<option value=\"b1\">Vysniu  [$uu2]</option>"; }
if ($uu3 > 0){ echo"<option value=\"b2\">Avieciu  [$uu3]</option>"; }
if ($uu4 > 0){ echo"<option value=\"b3\">Braskiu  [$uu4]</option>"; }
if ($uu5 > 0){ echo"<option value=\"b4\">Slyvu  [$uu5]</option>"; }
if ($uu6 > 0){ echo"<option value=\"b5\">Agrastu  [$uu6]</option>"; }
if ($uu7 > 0){ echo"<option value=\"b6\">Vynuogiu  [$uu7]</option>"; }
if ($uu8 > 0){ echo"<option value=\"b7\">Gervuogiu  [$uu8]</option>"; }
if ($uu9 > 0){ echo"<option value=\"b8\">Melyniu  [$uu9]</option>"; }
if ($uu10 > 0){ echo"<option value=\"b9\">Zemuogiu  [$uu10]</option>"; }
if ($uu15 > 0){ echo"<option value=\"b14\">Medkirtystes amuletu  [$uu15]</option>"; }
if ($uu16 > 0){ echo"<option value=\"b15\">Kasimo amuletu  [$uu16]</option>"; }
if ($uu17 > 0){ echo"<option value=\"b16\">Kalviavimo amuletu  [$uu17]</option>"; }
if ($uu18 > 0){ echo"<option value=\"b17\">Crafting amuletu  [$uu18]</option>"; }
if ($uu19 > 0){ echo"<option value=\"b18\">Medziokles amuletu  [$uu19]</option>"; }
if ($uu20 > 0){ echo"<option value=\"b19\">Zvejybos amuletu [$uu20]</option>"; }
if ($uu21 > 0){ echo"<option value=\"b20\">Kepimo amuletu [$uu21]</option>"; }
if ($uu22 > 0){ echo"<option value=\"b21\">Jegos amuletu  [$uu22]</option>"; }
if ($uu23 > 0){ echo"<option value=\"b22\">Gyvybes amuletu  [$uu23]</option>"; }
if ($uu24 > 0){ echo"<option value=\"b23\">Rinkimo amuletu  [$uu24]</option>"; }
if ($uu25 > 0){ echo"<option value=\"b24\">Gynybos amuletu  [$uu25]</option>"; }
if ($uu26 > 0){ echo"<option value=\"b25\">Juvelyrikos amuletu  [$uu26]</option>"; }
if ($uu27 > 0){ echo"<option value=\"b26\">Neapdirbtu safyru  [$uu27]</option>"; }
if ($uu28 > 0){ echo"<option value=\"b27\">Neapdirbtu ametistu  [$uu28]</option>"; }
if ($uu29 > 0){ echo"<option value=\"b28\">Neapdirbtu rubinu  [$uu29]</option>"; }
if ($uu30 > 0){ echo"<option value=\"b29\">Neapdirbtu melachitu  [$uu30]</option>"; }
if ($uu31 > 0){ echo"<option value=\"b30\">Neapdirbtu nefritu  [$uu31]</option>"; }
if ($uu32 > 0){ echo"<option value=\"b31\">Neapdirbtu opalu  [$uu32]</option>"; }
if ($uu33 > 0){ echo"<option value=\"b32\">Neapdirbtu agatu  [$uu33]</option>"; }
if ($uu34 > 0){ echo"<option value=\"b33\">Neapdirbtu emeraldu  [$uu34]</option>"; }
if ($uu35 > 0){ echo"<option value=\"b34\">Neapdirbtu berilu  [$uu35]</option>"; }
if ($uu36 > 0){ echo"<option value=\"b35\">Neapdirbtu smaragdu  [$uu36]</option>"; }
if ($uu37 > 0){ echo"<option value=\"b36\">Neapdirbtu briliantu  [$uu37]</option>"; }
if ($uu38 > 0){ echo"<option value=\"b37\">Neapdirbtu deimantu  [$uu38]</option>"; }
if ($uu41 > 0){ echo"<option value=\"b40\">Katuogiu [$uu41]</option>"; }
if ($uu42 > 0){ echo"<option value=\"b41\">Vaivoru  [$uu42]</option>"; }
if ($uu43 > 0){ echo"<option value=\"b42\">Juoduju serbentu  [$uu43]</option>"; }
if ($uu44 > 0){ echo"<option value=\"b43\">Ginuciu  [$uu44]</option>"; }

if ($uuu1 > 0){ echo"<option value=\"e0\">Apdirbtu safyru [$uuu1]</option>"; }
if ($uuu2 > 0){ echo"<option value=\"e1\">Apdirbtu ametistu [$uuu2]</option>"; }
if ($uuu3 > 0){ echo"<option value=\"e2\">Apdirbtu rubinu [$uuu3]</option>"; }
if ($uuu4 > 0){ echo"<option value=\"e3\">Apdirbtu melachitu [$uuu4]</option>"; }
if ($uuu5 > 0){ echo"<option value=\"e4\">Apdirbtu nefritu [$uuu5]</option>"; }
if ($uuu6 > 0){ echo"<option value=\"e5\">Apdirbtu opalu [$uuu6]</option>"; }
if ($uuu7 > 0){ echo"<option value=\"e6\">Apdirbtu agatu [$uuu7]</option>"; }
if ($uuu8 > 0){ echo"<option value=\"e7\">Apdirbtu emeraldu [$uuu8]</option>"; }
if ($uuu9 > 0){ echo"<option value=\"e8\">Apdirbtu berilu [$uuu9]</option>"; }
if ($uuu10 > 0){ echo"<option value=\"e9\">Apdirbtu smaragdu [$uuu10]</option>"; }
if ($uuu11 > 0){ echo"<option value=\"e10\">Apdirbtu briliantu [$uuu11]</option>"; }
if ($uuu12 > 0){ echo"<option value=\"e11\">Apdirbtu deimantu [$uuu12]</option>"; }

if ($pzx1 > 0){ echo"<option value=\"i0\">Osmio rudu  [$pzx1]</option>"; }
if ($pzx2 > 0){ echo"<option value=\"i1\">Mangano rudu  [$pzx2]</option>"; }
if ($pzx3 > 0){ echo"<option value=\"i2\">Phoenix rudu  [$pzx3]</option>"; }
if ($pzx4 > 0){ echo"<option value=\"i3\">Vortex rudu  [$pzx4]</option>"; }
if ($pzx5 > 0){ echo"<option value=\"i4\">Osmio plyteliu  [$pzx5]</option>"; }
if ($pzx6 > 0){ echo"<option value=\"i5\">Mangano plyteliu  [$pzx6]</option>"; }
if ($pzx7 > 0){ echo"<option value=\"i6\">Phoenix plyteliu  [$pzx7]</option>"; }
if ($pzx8 > 0){ echo"<option value=\"i7\">Vortex plyteliu  [$pzx8]</option>"; }
if ($pzx9 > 0){ echo"<option value=\"i8\">Osmio apsaugos  [$pzx9]</option>"; }
if ($pzx10 > 0){ echo"<option value=\"i9\">Mangano kelnes  [$pzx10]</option>"; }
if ($pzx11 > 0){ echo"<option value=\"i10\">Phoenix sutvirtinimas  [$pzx11]</option>"; }
if ($pzx12 > 0){ echo"<option value=\"i11\">Vortex antkleliai  [$pzx12]</option>"; }
if ($pzx13 > 0){ echo"<option value=\"i12\">Osmio skydas  [$pzx13]</option>"; }
if ($pzx14 > 0){ echo"<option value=\"i13\">Mangano skydas  [$pzx14]</option>"; }
if ($pzx15 > 0){ echo"<option value=\"i14\">Phoenix skydas  [$pzx15]</option>"; }
if ($pzx16 > 0){ echo"<option value=\"i15\">Vortex skydas  [$pzx16]</option>"; }
if ($pzx17 > 0){ echo"<option value=\"i16\">Osmio sarvai  [$pzx17]</option>"; }
if ($pzx18 > 0){ echo"<option value=\"i17\">Mangano sarvai  [$pzx18]</option>"; }
if ($pzx19 > 0){ echo"<option value=\"i18\">Phoenix sarvai  [$pzx19]</option>"; }
if ($pzx20 > 0){ echo"<option value=\"i19\">Vortex sarvai  [$pzx20]</option>"; }
if ($pzx21 > 0){ echo"<option value=\"i20\">Osmio kardas  [$pzx21]</option>"; }
if ($pzx22 > 0){ echo"<option value=\"i21\">Mangano kardas  [$pzx22]</option>"; }
if ($pzx23 > 0){ echo"<option value=\"i22\">Phoenix kardas  [$pzx23]</option>"; }
if ($pzx24 > 0){ echo"<option value=\"i23\">Vortex kardas  [$pzx24]</option>"; }

if ($pzx26 > 0){ echo"<option value=\"i25\">Spanguoliu  [$pzx26]</option>"; }
if ($pzx27 > 0){ echo"<option value=\"i26\">Sermuksniu  [$pzx27]</option>"; }
if ($pzx28 > 0){ echo"<option value=\"i27\">Erskeciu  [$pzx28]</option>"; }
if ($pzx29 > 0){ echo"<option value=\"i28\">Brukniu  [$pzx29]</option>"; }
if ($pzx30 > 0){ echo"<option value=\"i29\">Umedziu  [$pzx30]</option>"; }
if ($pzx31 > 0){ echo"<option value=\"i30\">Babausiu  [$pzx31]</option>"; }
if ($pzx32 > 0){ echo"<option value=\"i31\">Makavyku  [$pzx32]</option>"; }
if ($pzx33 > 0){ echo"<option value=\"i32\">Piengrybiu  [$pzx33]</option>"; }

if ($ewt > 0){ echo"<option value=\"w0\">enchant weapon titan [$ewt]</option>"; }
if ($ewc > 0){ echo"<option value=\"w1\">enchant weapon Adamand [$ewc]</option>"; }
if ($tit1 > 0){ echo"<option value=\"w2\">titano kardas+1 [$tit1]</option>"; }
if ($tit2 > 0){ echo"<option value=\"w3\">titano kardas+2 [$tit2]</option>"; }
if ($tit3 > 0){ echo"<option value=\"w4\">titano kardas+3 [$tit3]</option>"; }
if ($tit4 > 0){ echo"<option value=\"w5\">titano kardas+4 [$tit4]</option>"; }
if ($tit5 > 0){ echo"<option value=\"w6\">titano kardas+5 [$tit5]</option>"; }
if ($tit6 > 0){ echo"<option value=\"w7\">titano kardas+6 [$tit6]</option>"; }
if ($tit7 > 0){ echo"<option value=\"w8\">titano kardas+7 [$tit7]</option>"; }
if ($tit8 > 0){ echo"<option value=\"w9\">titano kardas+8 [$tit8]</option>"; }
if ($tit9 > 0){ echo"<option value=\"w10\">titano kardas+10 [$tit10]</option>"; }
if ($tit10 > 0){ echo"<option value=\"w11\">titano kardas+10 [$tit10]</option>"; }
if ($tit11 > 0){ echo"<option value=\"w12\">titano kardas+11 [$tit11]</option>"; }
if ($tit12 > 0){ echo"<option value=\"w13\">titano kardas+12 [$tit12]</option>"; }
if ($tit13 > 0){ echo"<option value=\"w14\">titano kardas+13 [$tit13]</option>"; }
if ($tit14 > 0){ echo"<option value=\"w15\">titano kardas+14 [$tit14]</option>"; }
if ($tit15 > 0){ echo"<option value=\"w16\">titano kardas+15 [$tit15]</option>"; }
if ($tit16 > 0){ echo"<option value=\"w17\">titano kardas+16 [$tit16]</option>"; }
if ($cos1 > 0){ echo"<option value=\"w18\">adamand kardas+1 [$cos1]</option>"; }
if ($cos2 > 0){ echo"<option value=\"w19\">adamand kardas+2 [$cos2]</option>"; }
if ($cos3 > 0){ echo"<option value=\"w20\">adamand kardas+3 [$cos3]</option>"; }
if ($cos4 > 0){ echo"<option value=\"w21\">adamand kardas+4 [$cos4]</option>"; }
if ($cos5 > 0){ echo"<option value=\"w22\">adamand kardas+5 [$cos5]</option>"; }
if ($cos6 > 0){ echo"<option value=\"w23\">adamand kardas+6 [$cos6]</option>"; }
if ($cos7 > 0){ echo"<option value=\"w24\">adamand kardas+7 [$cos7]</option>"; }
if ($cos8 > 0){ echo"<option value=\"w25\">adamand kardas+8 [$cos8]</option>"; }
if ($cos9 > 0){ echo"<option value=\"w26\">adamand kardas+9 [$cos9]</option>"; }
if ($cos10 > 0){ echo"<option value=\"w27\">adamand kardas+10 [$cos10]</option>"; }
if ($cos11 > 0){ echo"<option value=\"w28\">adamand kardas+11 [$cos11]</option>"; }
if ($cos12 > 0){ echo"<option value=\"w29\">adamand kardas+12 [$cos12]</option>"; }
if ($cos13 > 0){ echo"<option value=\"w30\">adamand kardas+13 [$cos13]</option>"; }
if ($cos14 > 0){ echo"<option value=\"w31\">adamand kardas+14 [$cos14]</option>"; }
if ($cos15 > 0){ echo"<option value=\"w32\">adamand kardas+15 [$cos15]</option>"; }
if ($cos16 > 0){ echo"<option value=\"w33\">adamand kardas+16 [$cos16]</option>"; }
if ($swd1 > 0){ echo"<option value=\"w34\">sword of death+1 [$swd1]</option>"; }
if ($swd2 > 0){ echo"<option value=\"w35\">sword of death+2 [$swd2]</option>"; }
if ($swd3 > 0){ echo"<option value=\"w36\">sword of death+3 [$swd3]</option>"; }
if ($swd4 > 0){ echo"<option value=\"w37\">sword of death+4 [$swd4]</option>"; }
if ($swd5 > 0){ echo"<option value=\"w38\">sword of death+5 [$swd5]</option>"; }
if ($ews > 0){ echo"<option value=\"w39\">enchant weapon sod [$ews]</option>"; }


if ($dari[2] > 0){ echo"<option value=\"o2\">Dragon akmenu [$dari[2]]</option>"; }
if ($dari[3] > 0){ echo"<option value=\"o3\">Apdirbtu dragon akmenu [$dari[3]]</option>"; }
if ($dari[4] > 0){ echo"<option value=\"o4\">Brown material [$dari[4]]</option>"; }
if ($dari[5] > 0){ echo"<option value=\"o5\">Gray material [$dari[5]]</option>"; }
if ($dari[6] > 0){ echo"<option value=\"o6\">White material [$dari[6]]</option>"; }
if ($dari[7] > 0){ echo"<option value=\"o7\">Yellow material [$dari[7]]</option>"; }
if ($dari[8] > 0){ echo"<option value=\"o8\">Orange material [$dari[8]]</option>"; }
if ($dari[9] > 0){ echo"<option value=\"o9\">Green material [$dari[9]]</option>"; }
if ($dari[10] > 0){ echo"<option value=\"o10\">Rred material [$dari[10]]</option>"; }
if ($dari[11] > 0){ echo"<option value=\"o11\">Black material [$dari[11]]</option>"; }
if ($dari[20] > 0){ echo"<option value=\"o20\">Bronze salmu [$dari[20]]</option>"; }
if ($dari[21] > 0){ echo"<option value=\"o21\">Rune salmas [$dari[21]]</option>"; }
if ($dari[22] > 0){ echo"<option value=\"o22\">zalvario salmas [$dari[22]]</option>"; }
if ($dari[23] > 0){ echo"<option value=\"o23\">Vario salmas [$dari[23]]</option>"; }
if ($dari[24] > 0){ echo"<option value=\"o24\">Gelezies salmas [$dari[24]]</option>"; }
if ($dari[25] > 0){ echo"<option value=\"o25\">Plieno salmas [$dari[25]]</option>"; }
if ($dari[26] > 0){ echo"<option value=\"o26\">Sidabro salmas [$dari[26]]</option>"; }
if ($dari[27] > 0){ echo"<option value=\"o27\">Aukso salmas [$dari[27]]</option>"; }
if ($dari[28] > 0){ echo"<option value=\"o28\">Dragon salmas [$dari[28]]</option>"; }
if ($dari[36] > 0){ echo"<option value=\"o36\">Black pirstines [$dari[36]]</option>"; }
if ($dari[44] > 0){ echo"<option value=\"o44\">Black batai [$dari[44]]</option>"; }
if ($dari[52] > 0){ echo"<option value=\"o52\">Black apsaiustai [$dari[52]]</option>"; }
if ($dari[61] > 0){ echo"<option value=\"o61\">Veziai[$dari[61]]</option>"; }
if ($dari[62] > 0){ echo"<option value=\"o62\">Kardzuves [$dari[62]]</option>"; }
if ($dari[63] > 0){ echo"<option value=\"o63\">Rykliai [$dari[63]]</option>"; }
if ($med_amu > 0){ echo"<option value=\"u0\">Medzio Arbaletu [$med_amu]</option>"; }
if ($kal_amu > 0){ echo"<option value=\"u1\">Bronze Arbaletu [$kal_amu]</option>"; }
if ($zve_amu > 0){ echo"<option value=\"u2\">Sidabro Arbaletu [$zve_amu]</option>"; }
if ($pat_amu > 0){ echo"<option value=\"u3\">Aukso Arbaletu [$pat_amu]</option>"; }
if ($gyv_amu > 0){ echo"<option value=\"u4\">Platinos Arbaletu [$gyv_amu]</option>"; }
if ($gyn_amu > 0){ echo"<option value=\"u5\">Titano Arbaletu [$gyn_amu]</option>"; }
if ($jeg_amu > 0){ echo"<option value=\"u6\">Deimantiniu Arbaletu [$jeg_amu]</option>"; }
if ($pow_amu > 0){ echo"<option value=\"u7\">Power Arbaletu [$pow_amu]</option>"; }
if ($med_zied > 0){ echo"<option value=\"u8\">Pasventintu titano sarvu [$med_zied]</option>"; }
if ($kal_zied > 0){ echo"<option value=\"u9\">Pasventintu adamand sarvu [$kal_zied]</option>"; }
if ($pat_ausk > 0){ echo"<option value=\"u19\">Akumuliatoriu [$pat_ausk]</option>"; }
if ($gyv_ausk > 0){ echo"<option value=\"u20\">Banginiu [$gyv_ausk]</option>"; }
if ($gyn_ausk > 0){ echo"<option value=\"u21\">Keptu banginiu [$gyn_ausk]</option>"; }
if ($jeg_ausk > 0){ echo"<option value=\"u22\">Orku [$jeg_ausk]</option>"; }
if ($juvelyrics_lvl > 0){ echo"<option value=\"u24\">Keptu Orku [$juvelyrics_lvl]</option>"; }
if ($dragon_sarvu > 0){ echo"<option value=\"r25\">Dragon sarvu [$dragon_sarvu]</option>"; }
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

echo"</select>
     </div>
     <div class=\"leftas\">
     Kiek:<br/></small>
     <input type=\"number\"
	 <input name=\"da\" type=\"text\" maxlength=\"100\" format=\"*N\" title=\"info\" value=\"\" size=\"16\"/><br/>
     <input type='submit' value='Mesti'/></form>
     </div>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

if ($id == "dedu"){ 
$da = $_POST['da'];
$kj = $_POST['kj'];
$kan = $_POST['kan'];
if ($kan=="p7"){ $dkfl = "ok"; $pavd="Pinigu"; }
if ($kan=="r0"){ $dkfl = "ok"; $pavd="Gelezies rudu"; }
if ($kan=="r1"){ $dkfl = "ok"; $pavd="Zalvario rudu"; }
if ($kan=="r2"){ $dkfl = "ok"; $pavd="Sidabro rudu"; }
if ($kan=="r3"){ $dkfl = "ok"; $pavd="Aukso rudu"; }
if ($kan=="r28"){ $dkfl = "ok"; $pavd="Titano rudu"; }
if ($kan=="r29"){ $dkfl = "ok"; $pavd="Adamand rudu"; }
if ($kan=="r4"){ $dkfl = "ok"; $pavd="Gelezies plyteliu"; }
if ($kan=="r5"){ $dkfl = "ok"; $pavd="Zalvario plyteliu"; }
if ($kan=="r6"){ $dkfl = "ok"; $pavd="Sidabro plyteliu"; }
if ($kan=="r7"){ $dkfl = "ok"; $pavd="Aukso plyteliu"; }
if ($kan=="r30"){ $dkfl = "ok"; $pavd="Titano plyteliu"; }
if ($kan=="r31"){ $dkfl = "ok"; $pavd="Adamand plyteliu"; }
if ($kan=="r8"){ $dkfl = "ok"; $pavd="Bronze kardu"; }
if ($kan=="r9"){ $dkfl = "ok"; $pavd="Spyziaus kardu"; }
if ($kan=="r10"){ $dkfl = "ok"; $pavd="Zalvario kardu"; }
if ($kan=="r11"){ $dkfl = "ok"; $pavd="Vario kardu"; }
if ($kan=="r12"){ $dkfl = "ok"; $pavd="Gelezies kardu"; }
if ($kan=="r13"){ $dkfl = "ok"; $pavd="Plieno kardu"; }
if ($kan=="r14"){ $dkfl = "ok"; $pavd="Sidabro kardu"; }
if ($kan=="r15"){ $dkfl = "ok"; $pavd="Aukso kardu"; }
if ($kan=="r32"){ $dkfl = "ok"; $pavd="Titano kardu"; }
if ($kan=="r33"){ $dkfl = "ok"; $pavd="Adamand kalaviju"; }
if ($kan=="u0"){ $dkfl = "ok"; $pavd="Medzio Arbaletu"; }
if ($kan=="u1"){ $dkfl = "ok"; $pavd="Bronze Arbaletu"; }
if ($kan=="u2"){ $dkfl = "ok"; $pavd="Sidabro Arbaletu"; }
if ($kan=="u3"){ $dkfl = "ok"; $pavd="Aukso Arbaletu"; }
if ($kan=="u4"){ $dkfl = "ok"; $pavd="Platinos Arbaletu"; }
if ($kan=="u5"){ $dkfl = "ok"; $pavd="Titano Arbaletu"; }
if ($kan=="u6"){ $dkfl = "ok"; $pavd="Deimantiniu Arbaletu"; }
if ($kan=="u7"){ $dkfl = "ok"; $pavd="Power Arbaletu"; }
if ($kan=="u8"){ $dkfl = "ok"; $pavd="Pasventintu titano sarvu"; }
if ($kan=="u9"){ $dkfl = "ok"; $pavd="Pasventintu adamand sarvu"; }
if ($kan=="u19"){ $dkfl = "ok"; $pavd="Akumuliatoriu"; }
if ($kan=="u20"){ $dkfl = "ok"; $pavd="Banginiu"; }
if ($kan=="u21"){ $dkfl = "ok"; $pavd="Keptu Banginiu"; }
if ($kan=="u22"){ $dkfl = "ok"; $pavd="Orku"; }
if ($kan=="u24"){ $dkfl = "ok"; $pavd="Keptu Orku"; }

if ($kan=="x0"){ $dkfl = "ok"; $pavd="Blue materialu"; }
if ($kan=="x1"){ $dkfl = "ok"; $pavd="Purple materialu"; }
if ($kan=="x2"){ $dkfl = "ok"; $pavd="Apdirbtu blue materialu"; }
if ($kan=="x3"){ $dkfl = "ok"; $pavd="Apdirbtu purple materialu"; }
if ($kan=="x4"){ $dkfl = "ok"; $pavd="Blue apsiaustu"; }
if ($kan=="x5"){ $dkfl = "ok"; $pavd="Purple apsiaustu"; }
if ($kan=="x6"){ $dkfl = "ok"; $pavd="Blue batu"; }
if ($kan=="x7"){ $dkfl = "ok"; $pavd="Purple batu"; }
if ($kan=="x8"){ $dkfl = "ok"; $pavd="Blue pirstiniu"; }
if ($kan=="x9"){ $dkfl = "ok"; $pavd="Purple pirstiniu"; }

if ($kan=="i25"){ $dkfl = "ok"; $pavd="Spanguoliu"; }
if ($kan=="i26"){ $dkfl = "ok"; $pavd="Sermuksniu"; }
if ($kan=="i27"){ $dkfl = "ok"; $pavd="Erskeciu"; }
if ($kan=="i28"){ $dkfl = "ok"; $pavd="Brukniu"; }
if ($kan=="i29"){ $dkfl = "ok"; $pavd="Umedziu"; }
if ($kan=="i30"){ $dkfl = "ok"; $pavd="Bobausiu"; }
if ($kan=="i31"){ $dkfl = "ok"; $pavd="Makavyku"; }
if ($kan=="i32"){ $dkfl = "ok"; $pavd="Piengrybiu"; }

if ($kan=="r16"){ $dkfl = "ok"; $pavd="Dragon kardu"; }
if ($kan=="r17"){ $dkfl = "ok"; $pavd="Bronze sarvu"; }
if ($kan=="r18"){ $dkfl = "ok"; $pavd="Spyziaus sarvu"; }
if ($kan=="r19"){ $dkfl = "ok"; $pavd="Zalvario sarvu"; }
if ($kan=="r20"){ $dkfl = "ok"; $pavd="Vario sarvu"; }
if ($kan=="r21"){ $dkfl = "ok"; $pavd="Gelezies sarvu"; }
if ($kan=="r22"){ $dkfl = "ok"; $pavd="Plieno sarvu"; }
if ($kan=="r23"){ $dkfl = "ok"; $pavd="Sidabro sarvu"; }
if ($kan=="r24"){ $dkfl = "ok"; $pavd="Aukso sarvu"; }
if ($kan=="r34"){ $dkfl = "ok"; $pavd="Titano sarvu"; }
if ($kan=="r35"){ $dkfl = "ok"; $pavd="Adamand sarvu"; }
if ($kan=="r25"){ $dkfl = "ok"; $pavd="Dragon sarvu"; }
if ($kan=="z1"){ $dkfl = "ok"; $pavd="Slieku"; }
if ($kan=="z2"){ $dkfl = "ok"; $pavd="Teslos"; }
if ($kan=="z3"){ $dkfl = "ok"; $pavd="Karosu"; }
if ($kan=="z4"){ $dkfl = "ok"; $pavd="Eseriu"; }
if ($kan=="z5"){ $dkfl = "ok"; $pavd="Lynu"; }
if ($kan=="z6"){ $dkfl = "ok"; $pavd="Raudziu"; }
if ($kan=="z7"){ $dkfl = "ok"; $pavd="Karpiu"; }
if ($kan=="z8"){ $dkfl = "ok"; $pavd="Starkiu"; }
if ($kan=="z9"){ $dkfl = "ok"; $pavd="Lydeku"; }

if ($kan=="g0"){ $dkfl = "ok"; $pavd="Anglies"; }
if ($kan=="g1"){ $dkfl = "ok"; $pavd="Mineralu"; }
if ($kan=="g2"){ $dkfl = "ok"; $pavd="Kristalu"; }
if ($kan=="g3"){ $dkfl = "ok"; $pavd="Runite rudu"; }
if ($kan=="g4"){ $dkfl = "ok"; $pavd="Brangakmeniu"; }
if ($kan=="g5"){ $dkfl = "ok"; $pavd="Runite plyteliu"; }
if ($kan=="g6"){ $dkfl = "ok"; $pavd="Rune sarvu"; }
if ($kan=="g9"){ $dkfl = "ok"; $pavd="Bronziniu skydu"; }
if ($kan=="g10"){ $dkfl = "ok"; $pavd="zalvario skydu"; }
if ($kan=="g11"){ $dkfl = "ok"; $pavd="vario skydu"; }
if ($kan=="g12"){ $dkfl = "ok"; $pavd="gelezies skydu"; }
if ($kan=="g13"){ $dkfl = "ok"; $pavd="plieno skydu"; }
if ($kan=="g14"){ $dkfl = "ok"; $pavd="sidabro skydu"; }
if ($kan=="g15"){ $dkfl = "ok"; $pavd="aukso skydu"; }
if ($kan=="g16"){ $dkfl = "ok"; $pavd="titano skydu"; }
if ($kan=="g17"){ $dkfl = "ok"; $pavd="adamand skydu"; }
if ($kan=="g18"){ $dkfl = "ok"; $pavd="rune skydu"; }
if ($kan=="g19"){ $dkfl = "ok"; $pavd="Zeberklu"; }
if ($kan=="g20"){ $dkfl = "ok"; $pavd="Undineliu"; }
if ($kan=="g23"){ $dkfl = "ok"; $pavd="Bronziniai antkeliai"; }
if ($kan=="g24"){ $dkfl = "ok"; $pavd="Zalvariniai antkeliai"; }
if ($kan=="g25"){ $dkfl = "ok"; $pavd="Variniai vyriai"; }
if ($kan=="g26"){ $dkfl = "ok"; $pavd="Gelezines apsaugos"; }
if ($kan=="g27"){ $dkfl = "ok"; $pavd="Plieninis sutvirtinimas"; }
if ($kan=="g28"){ $dkfl = "ok"; $pavd="Sidabrines kelnes"; }
if ($kan=="g29"){ $dkfl = "ok"; $pavd="Auksinio drakono apavas"; }
if ($kan=="g30"){ $dkfl = "ok"; $pavd="Titan kelnes"; }
if ($kan=="g31"){ $dkfl = "ok"; $pavd="Adamand kelnes"; }
if ($kan=="g32"){ $dkfl = "ok"; $pavd="Rune sijonas"; }
if ($kan=="g37"){ $dkfl = "ok"; $pavd="Volcanic rudu"; }
if ($kan=="g38"){ $dkfl = "ok"; $pavd="Volcanic plyteliu"; }
if ($kan=="g39"){ $dkfl = "ok"; $pavd="Volcanic sarvu"; }

if ($kan=="m0"){ $dkfl = "ok"; $pavd="Volcanic vyriai"; }
if ($kan=="m1"){ $dkfl = "ok"; $pavd="Volcanic skydas"; }
if ($kan=="m2"){ $dkfl = "ok"; $pavd="Berzo malka"; }
if ($kan=="m3"){ $dkfl = "ok"; $pavd="Uosio malka"; }
if ($kan=="m4"){ $dkfl = "ok"; $pavd="Baobabo malka"; }
if ($kan=="m5"){ $dkfl = "ok"; $pavd="Berzo lankas"; }
if ($kan=="m6"){ $dkfl = "ok"; $pavd="Uosio lankas"; }
if ($kan=="m7"){ $dkfl = "ok"; $pavd="Baobabo lankas"; }
if ($kan=="m8"){ $dkfl = "ok"; $pavd="Maumedzio malka"; }
if ($kan=="m9"){ $dkfl = "ok"; $pavd="Maumedzio lankas"; }
if ($kan=="m10"){ $dkfl = "ok"; $pavd="Lokiu"; }
if ($kan=="m11"){ $dkfl = "ok"; $pavd="Stumru"; }
if ($kan=="m12"){ $dkfl = "ok"; $pavd="Mamutu"; }
if ($kan=="m13"){ $dkfl = "ok"; $pavd="Keptu lokiu"; }
if ($kan=="m14"){ $dkfl = "ok"; $pavd="Keptu stumbru"; }
if ($kan=="m15"){ $dkfl = "ok"; $pavd="Keptu mamutu"; }
if ($kan=="m17"){ $dkfl = "ok"; $pavd="Lepsiu"; }
if ($kan=="m18"){ $dkfl = "ok"; $pavd="Umedziu"; }
if ($kan=="m19"){ $dkfl = "ok"; $pavd="Kazleku"; }
if ($kan=="m20"){ $dkfl = "ok"; $pavd="Voverusku"; }
if ($kan=="m21"){ $dkfl = "ok"; $pavd="Tilviku"; }
if ($kan=="m22"){ $dkfl = "ok"; $pavd="Jautakiu"; }
if ($kan=="m23"){ $dkfl = "ok"; $pavd="Silvabaravikiu"; }
if ($kan=="m24"){ $dkfl = "ok"; $pavd="Paazuoliu"; }
if ($kan=="m25"){ $dkfl = "ok"; $pavd="Raudonvirsiu"; }
if ($kan=="m26"){ $dkfl = "ok"; $pavd="Baravyku"; }

if ($kan=="b0"){ $dkfl = "ok"; $pavd="Serbentu"; }
if ($kan=="b1"){ $dkfl = "ok"; $pavd="Vysniu"; }
if ($kan=="b2"){ $dkfl = "ok"; $pavd="Avieciu"; }
if ($kan=="b3"){ $dkfl = "ok"; $pavd="Braskiu"; }
if ($kan=="b4"){ $dkfl = "ok"; $pavd="Slyvu"; }
if ($kan=="b5"){ $dkfl = "ok"; $pavd="Agrastu"; }
if ($kan=="b6"){ $dkfl = "ok"; $pavd="Vynuogiu"; }
if ($kan=="b7"){ $dkfl = "ok"; $pavd="Gervuogiu"; }
if ($kan=="b8"){ $dkfl = "ok"; $pavd="Melyniu"; }
if ($kan=="b9"){ $dkfl = "ok"; $pavd="Zemuogiu"; }
if ($kan=="b14"){ $dkfl = "ok"; $pavd="Medkirtystes amuletu"; }
if ($kan=="b15"){ $dkfl = "ok"; $pavd="Kasimo amuletu"; }
if ($kan=="b16"){ $dkfl = "ok"; $pavd="Kalviavimo amuletu"; }
if ($kan=="b17"){ $dkfl = "ok"; $pavd="Crafting amuletu<"; }
if ($kan=="b18"){ $dkfl = "ok"; $pavd="Medziokles amuletu"; }
if ($kan=="b19"){ $dkfl = "ok"; $pavd="Zvejybos amuletu"; }
if ($kan=="b20"){ $dkfl = "ok"; $pavd="Kepimo amuletu"; }
if ($kan=="b21"){ $dkfl = "ok"; $pavd="Jegos amuletu"; }
if ($kan=="b22"){ $dkfl = "ok"; $pavd="Gyvybes amuletu"; }
if ($kan=="b23"){ $dkfl = "ok"; $pavd="Rinkimo amuletu"; }
if ($kan=="b24"){ $dkfl = "ok"; $pavd="Gynybos amuletu"; }
if ($kan=="b25"){ $dkfl = "ok"; $pavd="Juvelyrikos amuletu"; }
if ($kan=="b26"){ $dkfl = "ok"; $pavd="Neapdirbtu safyru"; }
if ($kan=="b27"){ $dkfl = "ok"; $pavd="Neapdirbtu ametistu"; }
if ($kan=="b28"){ $dkfl = "ok"; $pavd="Neapdirbtu rubinu"; }
if ($kan=="b29"){ $dkfl = "ok"; $pavd="Neapdirbtu melachitu"; }
if ($kan=="b30"){ $dkfl = "ok"; $pavd="Neapdirbtu nefritu"; }
if ($kan=="b31"){ $dkfl = "ok"; $pavd="Neapdirbtu opalu"; }
if ($kan=="b32"){ $dkfl = "ok"; $pavd="Neapdirbtu agatu"; }
if ($kan=="b33"){ $dkfl = "ok"; $pavd="Neapdirbtu emeraldu"; }
if ($kan=="b34"){ $dkfl = "ok"; $pavd="Neapdirbtu berilu"; }
if ($kan=="b35"){ $dkfl = "ok"; $pavd="Neapdirbtu smaragdu"; }
if ($kan=="b36"){ $dkfl = "ok"; $pavd="Neapdirbtu briliantu"; }
if ($kan=="b37"){ $dkfl = "ok"; $pavd="Neapdirbtu deimantu"; }
if ($kan=="b40"){ $dkfl = "ok"; $pavd="Katuogiu"; }
if ($kan=="b41"){ $dkfl = "ok"; $pavd="Vaivoru"; }
if ($kan=="b42"){ $dkfl = "ok"; $pavd="Juoduju serbentu"; }
if ($kan=="b43"){ $dkfl = "ok"; $pavd="Ginuciu"; }

if ($kan=="e0"){ $dkfl = "ok"; $pavd="Apdirbtu safyru"; }
if ($kan=="e1"){ $dkfl = "ok"; $pavd="Apdirbtu ametistu"; }
if ($kan=="e2"){ $dkfl = "ok"; $pavd="Apdirbtu rubinu"; }
if ($kan=="e3"){ $dkfl = "ok"; $pavd="Apdirbtu melachitu"; }
if ($kan=="e4"){ $dkfl = "ok"; $pavd="Apdirbtu nefritu"; }
if ($kan=="e5"){ $dkfl = "ok"; $pavd="Apdirbtu opalu"; }
if ($kan=="e6"){ $dkfl = "ok"; $pavd="Apdirbtu agatu"; }
if ($kan=="e7"){ $dkfl = "ok"; $pavd="Apdirbtu emeraldu"; }
if ($kan=="e8"){ $dkfl = "ok"; $pavd="Apdirbtu berilu"; }
if ($kan=="e9"){ $dkfl = "ok"; $pavd="Apdirbtu smaragdu"; }
if ($kan=="e10"){ $dkfl = "ok"; $pavd="Apdirbtu briliantu"; }
if ($kan=="e11"){ $dkfl = "ok"; $pavd="Apdirbtu deimantu"; }

if ($kan=="i0"){ $dkfl = "ok"; $pavd="Osmio rudu"; }
if ($kan=="i1"){ $dkfl = "ok"; $pavd="Mangano rudu"; }
if ($kan=="i2"){ $dkfl = "ok"; $pavd="Phoenix rudu"; }
if ($kan=="i3"){ $dkfl = "ok"; $pavd="Vortex rudu"; }
if ($kan=="i4"){ $dkfl = "ok"; $pavd="Osmio plyteliu"; }
if ($kan=="i5"){ $dkfl = "ok"; $pavd="Mangano plyteliu"; }
if ($kan=="i6"){ $dkfl = "ok"; $pavd="Phoenix plyteliu"; }
if ($kan=="i7"){ $dkfl = "ok"; $pavd="Vortex plyteliu"; }
if ($kan=="i8"){ $dkfl = "ok"; $pavd="Osmio koju apsaugos"; }
if ($kan=="i9"){ $dkfl = "ok"; $pavd="Mangano kelnes"; }
if ($kan=="i10"){ $dkfl = "ok"; $pavd="Phoenix sutvirtinimas"; }
if ($kan=="i11"){ $dkfl = "ok"; $pavd="Vortex antkeliai"; }
if ($kan=="i12"){ $dkfl = "ok"; $pavd="Osmio skydas"; }
if ($kan=="i13"){ $dkfl = "ok"; $pavd="Mangano skydas"; }
if ($kan=="i14"){ $dkfl = "ok"; $pavd="Phoenix skydas"; }
if ($kan=="i15"){ $dkfl = "ok"; $pavd="Vortex skydas"; }
if ($kan=="i16"){ $dkfl = "ok"; $pavd="Osmio sarvai"; }
if ($kan=="i17"){ $dkfl = "ok"; $pavd="Mangano sarvai"; }
if ($kan=="i18"){ $dkfl = "ok"; $pavd="Phoenix sarvai"; }
if ($kan=="i19"){ $dkfl = "ok"; $pavd="Vortex sarvai"; }
if ($kan=="i20"){ $dkfl = "ok"; $pavd="Osmio kardas"; }
if ($kan=="i21"){ $dkfl = "ok"; $pavd="Mangano kardas"; }
if ($kan=="i22"){ $dkfl = "ok"; $pavd="Phoenix kardas"; }
if ($kan=="i23"){ $dkfl = "ok"; $pavd="Vortex kardas"; }

if ($kan=="w0"){ $dkfl = "ok"; $pavd="enchant weapon titan"; }
if ($kan=="w1"){ $dkfl = "ok"; $pavd="enchant weapon Adamand"; }
if ($kan=="w2"){ $dkfl = "ok"; $pavd="titano kardu +1"; }
if ($kan=="w3"){ $dkfl = "ok"; $pavd="titano kardu +2"; }
if ($kan=="w4"){ $dkfl = "ok"; $pavd="titano kardu +3"; }
if ($kan=="w5"){ $dkfl = "ok"; $pavd="titano kardu +4"; }
if ($kan=="w6"){ $dkfl = "ok"; $pavd="titano kardu +5"; }
if ($kan=="w7"){ $dkfl = "ok"; $pavd="titano kardu +6"; }
if ($kan=="w8"){ $dkfl = "ok"; $pavd="titano kardu +7"; }
if ($kan=="w9"){ $dkfl = "ok"; $pavd="titano kardu +8"; }
if ($kan=="w10"){ $dkfl = "ok"; $pavd="titano kardu +9"; }
if ($kan=="w11"){ $dkfl = "ok"; $pavd="titano kardu +10"; }
if ($kan=="w12"){ $dkfl = "ok"; $pavd="titano kardu +11"; }
if ($kan=="w13"){ $dkfl = "ok"; $pavd="titano kardu +12"; }
if ($kan=="w14"){ $dkfl = "ok"; $pavd="titano kardu +13"; }
if ($kan=="w15"){ $dkfl = "ok"; $pavd="titano kardu +14"; }
if ($kan=="w16"){ $dkfl = "ok"; $pavd="titano kardu +15"; }
if ($kan=="w17"){ $dkfl = "ok"; $pavd="titano kardu +16"; }
if ($kan=="w18"){ $dkfl = "ok"; $pavd="adamand kardu +1"; }
if ($kan=="w19"){ $dkfl = "ok"; $pavd="adamand kardu +2"; }
if ($kan=="w20"){ $dkfl = "ok"; $pavd="adamand kardu +3"; }
if ($kan=="w21"){ $dkfl = "ok"; $pavd="adamand kardu +4"; }
if ($kan=="w22"){ $dkfl = "ok"; $pavd="adamand kardu +5"; }
if ($kan=="w23"){ $dkfl = "ok"; $pavd="adamand kardu +6"; }
if ($kan=="w24"){ $dkfl = "ok"; $pavd="adamand kardu +7"; }
if ($kan=="w25"){ $dkfl = "ok"; $pavd="adamand kardu +8"; }
if ($kan=="w26"){ $dkfl = "ok"; $pavd="adamand kardu +9"; }
if ($kan=="w27"){ $dkfl = "ok"; $pavd="adamand kardu +10"; }
if ($kan=="w28"){ $dkfl = "ok"; $pavd="adamand kardu +11"; }
if ($kan=="w29"){ $dkfl = "ok"; $pavd="adamand kardu +12"; }
if ($kan=="w30"){ $dkfl = "ok"; $pavd="adamand kardu +13"; }
if ($kan=="w31"){ $dkfl = "ok"; $pavd="adamand kardu +14"; }
if ($kan=="w32"){ $dkfl = "ok"; $pavd="adamand kardu +15"; }
if ($kan=="w33"){ $dkfl = "ok"; $pavd="adamand kardu +16"; }
if ($kan=="w34"){ $dkfl = "ok"; $pavd="sword of death +1"; }
if ($kan=="w35"){ $dkfl = "ok"; $pavd="sword of death +2"; }
if ($kan=="w36"){ $dkfl = "ok"; $pavd="sword of death +3"; }
if ($kan=="w37"){ $dkfl = "ok"; $pavd="sword of death +4"; }
if ($kan=="w38"){ $dkfl = "ok"; $pavd="sword of death +5"; }
if ($kan=="w39"){ $dkfl = "ok"; $pavd="enchant weapon sod"; }

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

if ($kan=="o2"){ $dkfl = "ok"; $pavd="Dragon akmenu"; }
if ($kan=="o3"){ $dkfl = "ok"; $pavd="Apdirbtu dragon akmenu"; }
if ($kan=="o4"){ $dkfl = "ok"; $pavd="Brown material"; }
if ($kan=="o5"){ $dkfl = "ok"; $pavd="Gray material"; }
if ($kan=="o6"){ $dkfl = "ok"; $pavd="White material"; }
if ($kan=="o7"){ $dkfl = "ok"; $pavd="Yellow material"; }
if ($kan=="o9"){ $dkfl = "ok"; $pavd="Orange material"; }
if ($kan=="o9"){ $dkfl = "ok"; $pavd="Green material"; }
if ($kan=="o10"){ $dkfl = "ok"; $pavd="Red material"; }
if ($kan=="o11"){ $dkfl = "ok"; $pavd="Black material"; }
if ($kan=="o20"){ $dkfl = "ok"; $pavd="Bronze salmas"; }
if ($kan=="o21"){ $dkfl = "ok"; $pavd="Rune salmas"; }
if ($kan=="o22"){ $dkfl = "ok"; $pavd="Zalvario salmas"; }
if ($kan=="o23"){ $dkfl = "ok"; $pavd="Vario salmas"; }
if ($kan=="o24"){ $dkfl = "ok"; $pavd="Gelezies salmas"; }
if ($kan=="o25"){ $dkfl = "ok"; $pavd="Plieno salmas"; }
if ($kan=="o26"){ $dkfl = "ok"; $pavd="Sidabro salmas"; }
if ($kan=="o27"){ $dkfl = "ok"; $pavd="Aukso salmas"; }
if ($kan=="o28"){ $dkfl = "ok"; $pavd="Dragon salmas"; }
if ($kan=="o36"){ $dkfl = "ok"; $pavd="Black pirstines"; }
if ($kan=="o44"){ $dkfl = "ok"; $pavd="Black batai"; }
if ($kan=="o52"){ $dkfl = "ok"; $pavd="Black apsiaustas"; }
if ($kan=="o61"){ $dkfl = "ok"; $pavd="Veziu"; }
if ($kan=="o62"){ $dkfl = "ok"; $pavd="Kardzuviu"; }
if ($kan=="o63"){ $dkfl = "ok"; $pavd="Rykliu"; }

include("icludekitainf/nuskait.php"); 
$hex=explode(".",$kj);
if ($dkfl != "ok"){ $bad = "Prasome pasirinkti siuksle!"; }
if ($da < 0){ $bad = "Tu ka durnas?!"; }
if ($da == ""){ $bad = "Prasome ivesti kieki!"; }
if ($kan == ""){ $bad = "Prasome pasirinkti siuksle!"; }

$c = substr($kan, 0, 1); 
if ($c == "p"){ $kint = $inf[7]; $inf[7]=$inf[7]-$da; $m = 7; }
if ($c == "r"){ $m = str_replace("r","",$kan);
$kint = $in[$m];  $in[$m]=$in[$m]-$da; }
if ($c == "w"){ $m = str_replace("w","",$kan);
$kint = $ink[$m];  $ink[$m]=$ink[$m]-$da; }
if ($c == "x"){ $m = str_replace("x","",$kan);
$kint = $inw[$m];  $inw[$m]=$inw[$m]-$da; }
if ($c == "i"){ $m = str_replace("i","",$kan);
$kint = $ini[$m];  $ini[$m]=$ini[$m]-$da; }
if ($c == "g"){ $m = str_replace("g","",$kan);
$kint = $inr[$m];  $inr[$m]=$inr[$m]-$da; }
if ($c == "u"){ $m = str_replace("u","",$kan);
$kint = $inj[$m];  $inj[$m]=$inj[$m]-$da; }
if ($c == "m"){ $m = str_replace("m","",$kan);
$kint = $inm[$m];  $inm[$m]=$inm[$m]-$da; }
if ($c == "b"){ $m = str_replace("b","",$kan);
$kint = $inu[$m];  $inu[$m]=$inu[$m]-$da; }
if ($c == "e"){ $m = str_replace("e","",$kan);
$kint = $inq[$m];  $inq[$m]=$inq[$m]-$da; }
if ($c == "z"){ $m = str_replace("z","",$kan);
$kint = $fis[$m];  $fis[$m]=$fis[$m]-$da; }
if ($c == "k"){ $m = str_replace("k","",$kan);
$kint = $kit[$m];  $kit[$m]=$kit[$m]-$da; }
if ($c == "o"){ $m = str_replace("o","",$kan);
$kint = $dari[$m];  $dari[$m]=$dari[$m]-$da; }

if ($kint < $da){  $bad = "<div class='klaida'>Klaida!</div>Tiek neturi!"; }

if ($bad == ""){  $bad = "Ismesta!"; 
$kodas = rand(0,999999999); 
$tim = time(); 
$fop = fopen("siuksl/$nick-$kodas.txt", "w+");
        fwrite($fop, "$nick|$da|$pavd|$c|$m|$laikas|$tim|$kj|\n");
        fclose($fop);
        chmod("siuksl/$nick-$kodas.txt",0777); 
$fop = fopen("fyshers/$nick.txt", "w");
        fwrite($fop, "$fis[0]|$fis[1]|$fis[2]|$fis[3]|$fis[4]|$fis[5]|$fis[6]|$fis[7]|$fis[8]|$fis[9]|$fis[10]|$fis[11]|");
        fclose($fop);
$fop5 = fopen("miners/$nick.txt", "w");
        fwrite($fop5, "$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|$in[28]|$in[29]|$in[30]|$in[31]|$in[32]|$in[33]|$in[34]|$in[35]|$in[36]|$in[37]|$in[38]|$in[39]|$in[40]|");
        fclose($fop5);
$fop4 = fopen("kitaj/$nick.txt", "w");
        fwrite($fop4, "$ink[0]|$ink[1]|$ink[2]|$ink[3]|$ink[4]|$ink[5]|$ink[6]|$ink[7]|$ink[8]|$ink[9]|$ink[10]|$ink[11]|$ink[12]|$ink[13]|$ink[14]|$ink[15]|$ink[16]|$ink[17]|$ink[18]|$ink[19]|$ink[20]|$ink[21]|$ink[22]|$ink[23]|$ink[24]|$ink[25]|$ink[26]|$ink[27]|$ink[28]|$ink[29]|$ink[30]|$ink[31]|$ink[32]|$ink[33]|$ink[34]|$ink[35]|$ink[36]|$ink[37]|$ink[38]|$ink[39]|");
        fclose($fop4);
$fop3 = fopen("juvelyrics/$nick.txt", "w");
        fwrite($fop3, "$inj[0]|$inj[1]|$inj[2]|$inj[3]|$inj[4]|$inj[5]|$inj[6]|$inj[7]|$inj[8]|$inj[9]|$inj[10]|$inj[11]|$inj[12]|$inj[13]|$inj[14]|$inj[15]|$inj[16]|$inj[17]|$inj[18]|$inj[19]|$inj[20]|$inj[21]|$inj[22]|$inj[23]|$inj[24]|$inj[25]|$inj[26]|$inj[27]|$inj[28]|$inj[29]|$inj[30]|$inj[31]|$inj[32]|$inj[33]|$inj[34]|$inj[35]|$inj[36]|$inj[37]|$inj[38]|$inj[40]|");
        fclose($fop3);
$fop2 = fopen("rudos/$nick.txt", "w");
        fwrite($fop2, "$inr[0]|$inr[1]|$inr[2]|$inr[3]|$inr[4]|$inr[5]|$inr[6]|$inr[7]|$inr[8]|$inr[9]|$inr[10]|$inr[11]|$inr[12]|$inr[13]|$inr[14]|$inr[15]|$inr[16]|$inr[17]|$inr[18]|$inr[19]|$inr[20]|$inr[21]|$inr[22]|$inr[23]|$inr[24]|$inr[25]|$inr[26]|$inr[27]|$inr[28]|$inr[29]|$inr[30]|$inr[31]|$inr[32]|$inr[33]|$inr[34]|$inr[35]|$inr[36]|$inr[37]|$inr[38]|$inr[39]|");
        fclose($fop2);
$fop15 = fopen("material/$nick.txt", "w");
        fwrite($fop15, "$inw[0]|$inw[1]|$inw[2]|$inw[3]|$inw[4]|$inw[5]|$inw[6]|$inw[7]|$inw[8]|$inw[9]|$inw[10]|$inw[11]|$inw[12]|$inw[13]|$inw[14]|$inw[15]|$inw[16]|$inw[17]|$inw[18]|$inw[19]|$inw[20]|$inw[21]|$inw[22]|$inw[23]|$inw[24]|$inw[25]|$inw[26]|$inw[27]|$inw[28]|$inw[29]|$inw[30]|$inw[31]|$inw[32]|$inw[33]|$inw[34]|$inw[35]|$inw[36]|$inw[37]|$inw[38]|$inw[39]|");
        fclose($fop15);
$fop16 = fopen("items/$nick.txt", "w");
        fwrite($fop16, "$ini[0]|$ini[1]|$ini[2]|$ini[3]|$ini[4]|$ini[5]|$ini[6]|$ini[7]|$ini[8]|$ini[9]|$ini[10]|$ini[11]|$ini[12]|$ini[13]|$ini[14]|$ini[15]|$ini[16]|$ini[17]|$ini[18]|$ini[19]|$ini[20]|$ini[21]|$ini[22]|$ini[23]|$ini[24]|$ini[25]|$ini[26]|$ini[27]|$ini[28]|$ini[29]|$ini[30]|$ini[31]|$ini[32]|$ini[33]|$ini[34]|$ini[35]|$ini[36]|$ini[37]|$ini[38]|$ini[39]|");
        fclose($fop16);
$fop7 = fopen("medz/$nick.txt", "w");
        fwrite($fop7, "$inm[0]|$inm[1]|$inm[2]|$inm[3]|$inm[4]|$inm[5]|$inm[6]|$inm[7]|$inm[8]|$inm[9]|$inm[10]|$inm[11]|$inm[12]|$inm[13]|$inm[14]|$inm[15]|$inm[16]|$inm[17]|$inm[18]|$inm[19]|$inm[20]|$inm[21]|$inm[22]|$inm[23]|$inm[24]|$inm[25]|$inm[26]|$inm[27]|$inm[28]|$inm[29]|$inm[30]|$inm[31]|$inm[32]|$inm[33]|$inm[34]|$inm[35]|$inm[36]|$inm[37]|$inm[38]|$inm[39]|");
        fclose($fop7);
$fop8 = fopen("uoga/$nick.txt", "w");
        fwrite($fop8, "$inu[0]|$inu[1]|$inu[2]|$inu[3]|$inu[4]|$inu[5]|$inu[6]|$inu[7]|$inu[8]|$inu[9]|$inu[10]|$inu[11]|$inu[12]|$inu[13]|$inu[14]|$inu[15]|$inu[16]|$inu[17]|$inu[18]|$inu[19]|$inu[20]|$inu[21]|$inu[22]|$inu[23]|$inu[24]|$inu[25]|$inu[26]|$inu[27]|$inu[28]|$inu[29]|$inu[30]|$inu[31]|$inu[32]|$inu[33]|$inu[34]|$inu[35]|$inu[36]|$inu[37]|$inu[38]|$inu[39]|$inu[40]|$inu[41]|$inu[42]|$inu[43]|");
        fclose($fop8);
$fop9 = fopen("uogyte/$nick.txt", "w");
        fwrite($fop9, "$inq[0]|$inq[1]|$inq[2]|$inq[3]|$inq[4]|$inq[5]|$inq[6]|$inq[7]|$inq[8]|$inq[9]|$inq[10]|$inq[11]|$inq[12]|$inq[13]|$inq[14]|$inq[15]|$inq[16]|$inq[17]|$inq[18]|$inq[19]|$inq[20]|$inq[21]|$inq[22]|$inq[23]|$inq[24]|$inq[25]|$inq[26]|$inq[27]|$inq[28]|$inq[29]|$inq[30]|$inq[31]|$inq[32]|$inq[33]|$inq[34]|$inq[35]|$inq[36]|$inq[37]|$inq[38]|$inq[39]|");
        fclose($fop9);
$fop5 = fopen("us_xgrx_inf147258369/$nick.txt", "w");
        fwrite($fop5, "$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]|$inf[21]|$inf[22]|$inf[23]|$inf[24]|$inf[25]|$inf[26]|$inf[27]|$inf[28]|$inf[29]|$inf[30]|$inf[31]|$inf[32]|$inf[33]|$inf[34]|$inf[35]|$inf[36]|$inf[37]|$inf[38]|$inf[39]|$inf[40]|");
        fclose($fop5);
    include("icludekitainf/iras.php");
    include("icludekitainf/iras2.php");
}

echo"<br><div class=\"center\">$bad</div><br>
     <div class=\"center\"><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></div>";}

print '</body></html>';

?>
