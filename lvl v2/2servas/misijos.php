<?php  
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Misijos";
include("config.php"); 

if ($id == ""){ 
if (!file_exists("misjos/$nick.txt")){ 
$fp1 = fopen("misjos/$nick.txt","w+");
fwrite($fp1,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp1);
chmod("misjos/$nick.txt", 0777);
} 
$mi = file_get_contents("misjos/$nick.txt");
$m = explode("|",$mi); 
$ivykdyta = substr_count($mi, "+");

echo"<p align=\"center\"><small>
<b>Misijos ($ivykdyta/50)</b><br/>
(nebutina visas vykdyti is eiles, jos nera isdestytos pagal sunkuma)<br/>
$lin<br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=dar\">&gt; dar misiju &gt;</a><br/>
</small></p>
<p align=\"left\"><small>";
echo"<b>1) </b>"; if ($m[0] == "+"){ echo"+ Nuzudyti ziurkiu vada<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=1\">Nuzudyti ziurkiu vada</a><br/>"; }
echo"<b>2) </b>";if ($m[1] == "+"){ echo"+ Sugauti 5 karosus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=2\">Sugauti 5 karosus</a><br/>"; }
echo"<b>3) </b>";if ($m[2] == "+"){ echo"+ Pagaminti 5 bronze kardus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=3\">Pagaminti 5 bronze kardus</a><br/>"; }
echo"<b>4) </b>";if ($m[3] == "+"){ echo"+ Nuzudyti dwarfu priesa<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=4\">Nuzudyti dwarfu priesa</a><br/>"; }
echo"<b>5) </b>";if ($m[4] == "+"){ echo"+ Sugauti 10 eseriu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=5\">Sugauti 10 eseriu</a><br/>"; }
echo"<b>6) </b>";if ($m[5] == "+"){ echo"+ Apginkluoti elfus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=6\">Apginkluoti elfus</a><br/>"; }
echo"<b>7) </b>";if ($m[6] == "+"){ echo"+ Atnesk dvarfam medziagu patrankai<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=7\">Atnesk dvarfam medziagu patrankai</a><br/>"; }
echo"<b>8) </b>";if ($m[7] == "+"){ echo"+ Sugauti 10 lynu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=8\">Sugauti 10 lynu</a><br/>"; }
echo"<b>9) </b>";if ($m[8] == "+"){ echo"+ Nukalti varini karda<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=9\">Nukalti varini karda</a><br/>"; }
echo"<b>10) </b>";if ($m[9] == "+"){ echo"+ Nukalti 10 zalvariniu kardu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=10\">Nukalti 10 zalvariniu kardu</a><br/>"; }
echo"<b>11) </b>";if ($m[10] == "+"){ echo"+ Nuzudyti sudu demona<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=11\">Nuzudyti sudu demona</a><br/>"; }
echo"<b>12) </b>";if ($m[11] == "+"){ echo"+ Sugauti 10 raudziu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=12\">Sugauti 10 raudziu</a><br/>"; }
echo"<b>13) </b>";if ($m[12] == "+"){ echo"+ Apginkluoti humanu karius<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=13\">Apginkluoti humanu karius</a><br/>"; }
echo"<b>14) </b>";if ($m[13] == "+"){ echo"+ Nukalti 10 gelezies kardu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=14\">Nukalti 10 gelezies kardu</a><br/>"; }
echo"<b>15) </b>";if ($m[14] == "+"){ echo"+ Sugauti 10 karpiu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=15\">Sugauti 10 karpiu</a><br/>"; }
echo"<b>16) </b>";if ($m[15] == "+"){ echo"+ Nukalti plieno sarvus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=16\">Nukalti plieno sarvus</a><br/>"; }
echo"<b>17) </b>";if ($m[16] == "+"){ echo"+ Iszudyti klajokliu gauja<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=17\">Iszudyti klajokliu gauja</a><br/>"; }
echo"<b>18) </b>";if ($m[17] == "+"){ echo"+ Sugauti 10 starkiu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=18\">Sugauti 10 starkiu</a><br/>"; }
echo"<b>19) </b>";if ($m[18] == "+"){ echo"+ Apginkluoti dark elfu slapta buri<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=19\">Apginkluoti dark elfu slapta buri</a><br/>"; }
echo"<b>20) </b>";if ($m[19] == "+"){ echo"+ Nukalti sidabro karda<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=20\">Nukalti sidabro karda</a><br/>"; }
echo"<b>21) </b>";if ($m[20] == "+"){ echo"+ Nukalti sidabro sarvus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=21\">Nukalti sidabro sarvus</a><br/>"; }
echo"<b>22) </b>";if ($m[21] == "+"){ echo"+ Sugauti 10 lydeku<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=22\">Sugauti 10 lydeku</a><br/>"; }
echo"<b>23) </b>";if ($m[22] == "+"){ echo"+ Pamaitinti nuskurusia tauta<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=23\">Pamaitinti nuskurusia tauta</a><br/>"; }
echo"<b>24) </b>";if ($m[23] == "+"){ echo"+ Apginkluoti nykstukus"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=24\">Apginkluoti nykstukus</a><br/>"; }
echo"<b>25) </b>";if ($m[24] == "+"){ echo"+ Nukauti misku drakona<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=25\">Nukauti misku drakona</a><br/>"; }
echo"<b>26) </b>";if ($m[25] == "+"){ echo"+ Nukalti aukso karda<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=26\">Nukalti aukso karda</a><br/>"; }
echo"<b>27) </b>";if ($m[26] == "+"){ echo"+ Nukalti aukso sarvus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=27\">Nukalti aukso sarvus</a><br/>"; }
echo"<b>28) </b>";if ($m[27] == "+"){ echo"+ Apginkluoti orcus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=28\">Apginkluoti orcus</a><br/>"; }
echo"<b>29) </b>";if ($m[28] == "+"){ echo"+ Atnesti dragon karda<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=29\">Atnesti dragon karda</a><br/>"; }
echo"<b>30) </b>";if ($m[29] == "+"){ echo"+ Atnesti dragon sarvus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=30\">Atnesti dragon sarvus</a><br/>"; }

echo"</small></p>
<p align=\"center\"><small>
$lin<br/>
Betkuria misija galite pereiti siusdami sms zinute su tekstu: <b>lgzz3 $nick misija misijos_nr</b><br/>
Siusti numeriu: <b>1679</b><br/>
Kaina: <b>3LT</b><br/>
Sms teksto pavyzdys: <b>3lgzz3 $nick misija 5</b><br/>
P.S. Jus gausite ivykdyta misija bet ne atlygi<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "dar"){ 
if (!file_exists("misjos/$nick.txt")){ 
$fp1 = fopen("misjos/$nick.txt","w+");
fwrite($fp1,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp1);
chmod("misjos/$nick.txt", 0644);
} 
$mi = file_get_contents("misjos/$nick.txt");
$m = explode("|",$mi); 
$ivykdyta = substr_count($mi, "+");

echo"<p align=\"center\"><small>
<b>Misijos ($ivykdyta/50)</b><br/>
(nebutina visas vykdyti is eiles, jos nera isdestytos pagal sunkuma)<br/>
$lin<br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=\">&lt; Atgal &lt;</a><br/>
</small></p>
<p align=\"left\"><small>";
echo"<b>31) </b>";if ($m[30] == "+"){ echo"+ Atnesti alksniu<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=31\">Atnesti alksniu</a><br/>"; }
echo"<b>32) </b>";if ($m[31] == "+"){ echo"+ Apginkluoti lankininkus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=32\">Apginkluoti lankininkus</a><br/>"; }
echo"<b>33) </b>";if ($m[32] == "+"){ echo"+ Pavaisinti svecius<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=33\">Pavaisinti svecius</a><br/>"; }
echo"<b>34) </b>";if ($m[33] == "+"){ echo"+ Padeti pastatyti nameli<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=34\">Padeti pastatyti nameli</a><br/>"; }
echo"<b>35) </b>";if ($m[34] == "+"){ echo"+ Apginti medkircius<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=35\">Apginti medkircius</a><br/>"; }
echo"<b>36) </b>";if ($m[35] == "+"){ echo"+ Pageti medziotojams<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=36\">Pageti medziotojams</a><br/>"; }
echo"<b>37) </b>";if ($m[36] == "+"){ echo"+ Padeti elfams<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=37\">Padeti elfams</a><br/>"; }
echo"<b>38) </b>";if ($m[37] == "+"){ echo"+ Pamaitinti dwarfu zveri<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=38\">Pamaitinti dwarfu zveri</a><br/>"; }
echo"<b>39) </b>";if ($m[38] == "+"){ echo"+ Gelbeti nuo bado<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=39\">Gelbeti nuo bado</a><br/>"; }
echo"<b>40) </b>";if ($m[39] == "+"){ echo"+ Padeti zvejui<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=40\">Padeti zvejui</a><br/>"; }
echo"<b>41) </b>";if ($m[40] == "+"){ echo"+ Apginkluoti galingus lankininkus<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=41\">Apginkluoti galingus lankininkus</a><br/>"; }
echo"<b>42) </b>";if ($m[41] == "+"){ echo"+ Nuzudyti keistaji serna<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=42\">Nuzudyti keistaji serna</a><br/>"; }
echo"<b>43) </b>";if ($m[42] == "+"){ echo"+ Padeti surengti puota<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=43\">Padeti surengti puota</a><br/>"; }
echo"<b>44) </b>";if ($m[43] == "+"){ echo"+ Padeti fermeriui<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=44\">Padeti fermeriui</a><br/>"; }
echo"<b>45) </b>";if ($m[44] == "+"){ echo"+ Padeti surengti ypatinga medziokle<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=45\">Padeti surengti ypatinga medziokl</a><br/>"; }
echo"<b>46) </b>";if ($m[45] == "+"){ echo"+ Isgelbeti fermerio uki<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=46\">Isgelbeti fermerio uki</a><br/>"; }
echo"<b>47) </b>";if ($m[46] == "+"){ echo"+ Atgabenti medziotojams daug maisto<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=47\">Atgabenti medziotojams daug maisto</a><br/>"; }
echo"<b>48) </b>";if ($m[47] == "+"){ echo"+ Padeti laivo statyboje<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=48\">Padeti laivo statyboje</a><br/>"; }
echo"<b>49) </b>";if ($m[48] == "+"){ echo"+ Padeti valdovams medziokleje<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=49\">Padeti valdovams medziokleje</a><br/>"; }
echo"<b>50) </b>";if ($m[49] == "+"){ echo"+ Numalsinti misko demonu sukilima<br/>"; } else { echo"- <a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=misija&amp;ka=50\">Numalsinti misko demonu sukilima</a><br/>"; }
echo"</small></p>
<p align=\"center\"><small>
$lin<br/>
Betkuria misija galite pereiti siusdami sms zinute su tekstu: <b>lygis3 $nick misija misijos_nr</b><br/>
Siusti numeriu: <b>1371</b><br/>
Kaina: <b>3LT</b><br/>
Sms teksto pavyzdys: <b>3lgzz3 $nick misija 5</b><br/>
P.S. Jus gausite ivykdyta misija bet ne atlygi<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "misija" && $ka >= 1 && $ka <= 50){ 
echo"<p align=\"center\"><small>
<b>Misija</b><br/>$lin<br/></small></p>"; 
if ($ka == 50){ $m = "Misko demonai susibure ir siekia sunaikinti medziotojus bei medkircius. Tu privalai papirkti demonus, 
atnesk 10 plieno kirviu, 100 keptu sernu, 200 azuolu ir 100 azuolo lanku.<br/>
<b>Atlygis</b>:<br/>+100 medkirtystes, +50 medziokles, +50 kepimo, +50 crafting lygiu"; }

if ($ka == 49){ $m = "Valdovu medzioklei reikia lanku, atnesk 50 klevo ir 50 azuolo lanku.<br/>
<b>Atlygis</b>:<br/>+50 medkirtystes ir +100 crafting lygiu"; }

if ($ka == 48){ $m = "Zvejai statosi laiva, atnesk jiems 100 klevu ir 100 azuolu.<br/>
<b>Atlygis</b>:<br/>+200 medkirtystes lygiu"; }

if ($ka == 47){ $m = "Medziotojams ir ju sunu bandai reikia daug maisto, atnesk jiems 10 sernu ir 10 briedziu.<br/>
<b>Atlygis</b>:<br/>+50 medziokles lygiu"; }

if ($ka == 46){ $m = "Fermerio uki siauba kazkokie keisti vilkai, jie 200 lygio, nuzudyk juos.<br/>
<b>Atlygis</b>:<br/>+200XP"; }

if ($ka == 45){ $m = "Medziotojai rengia ypatinga medziokle, atnesk jiems 20 topolio lanku ir 400 streliu.<br/>
<b>Atlygis</b>:<br/>+20 medkirtystes ir +30 crafting lygiu"; }

if ($ka == 44){ $m = "Fermeriui rekia priestato, bet jis neturi medienos, atnesk jam 50 topoliu ir 100 gluosniu.<br/>
<b>Atlygis</b>:<br/>+30 medkirtystes lygiu"; }

if ($ka == 43){ $m = "Puotai reikia 10 stirnu, sumedziok ir atnesk, virejai pagamins patiekalus.<br/>
<b>Atlygis</b>:<br/>+10 medziokles lygiu"; }

if ($ka == 42){ $m = "Medziotojams miske trukdo kazkoks keistas sernas, jo lygis 150, nuzudyk ji.<br/>
<b>Atlygis</b>:<br/>+100 XP"; }

if ($ka == 41){ $m = "Turi apginkluoti keleta galingu lankininku, atnesk jiems 20 gluosnio lanku.<br/>
<b>Atlygis</b>:<br/>+10 medkirtystes ir +10 crafting lygiu"; }

if ($ka == 40){ $m = "Zvejas gaminosi valti, taciau jam pritruko medienos, atnesk 30 gluosniu.<br/>
<b>Atlygis</b>:<br/>+20 medkirtystes lygiu"; }

if ($ka == 39){ $m = "Uzklupo badas, turi paruosti 50 keptu tetervinu.<br/>
<b>Atlygis</b>:<br/>+15 medziokles ir +15 kepimo lygiu"; }

if ($ka == 38){ $m = "Dwarfai laiko kazkoki keista zveri, tu turi ji pamaitinti, atnesk 20 nekeptu fazanu.<br/>
<b>Atlygis</b>:<br/>+10 medziokles lygiu"; }

if ($ka == 37){ $m = "Elfams reikia lanku, atnesk jiems 20 ievos lanku.<br/>
<b>Atlygis</b>:<br/>+10 medkirtystes ir +10 crafting lygiu"; }

if ($ka == 36){ $m = "Medziotojams prireike labai daug streliu, atnesk jiems 500 streliu.<br/>
<b>Atlygis</b>:<br/>+30 crafting lygio"; }

if ($ka == 35){ $m = "Medkircius miske uzpuldineja kazkoks keistas zveris, nuzudyk ji, jis 100 lygio.<br/>
<b>Atlygis</b>:<br/>+50 XP"; }

if ($ka == 34){ $m = "Vienam zmogeliui reikia medienos namelio statybai, atnesk jam 20 alksniu ir 10 ievu.<br/>
<b>Atlygis</b>:<br/>+10 medkirtystes lygiu"; }

if ($ka == 33){ $m = "Vyksta svente, turi atnesti 5 keptos zuikienos ir 10 keptu balandziu.<br/>
<b>Atlygis</b>:<br/>+10 medziokles ir +10 kepimo lygiu"; }

if ($ka == 32){ $m = "Lankininku pulkeliui reikia lanku ir streliu, atnesk jiems 5 alksnio lankus ir 100 streliu.<br/>
<b>Atlygis</b>:<br/>+20 crafting lygiu"; }

if ($ka == 31){ $m = "Zvejui prireike medienos plaustui, atnesk jam 30 alksniu.<br/>
<b>Atlygis</b>:<br/>+10 medkirtystes lygiu"; }

if ($ka == 1){ $m = "Ziurkes pradejo stekenti musu karalyste, todel privalai nuzudyti ju vada. vadas 20 lygio.<br/>
<b>Atlygis</b>:<br/>10 xp"; }

if ($ka == 2){ $m = "Turi atnesti 5 karosus.<br/>
<b>Atlygis</b>:<br/>+3 zvejybos lygiai"; }

if ($ka == 3){ $m = "Turi pagaminti ir atiduoti 5 bronze kardus.<br/>
<b>Atlygis</b>:<br/>+2 kasimo lygiai, +2 kalvininkavimo lygiai"; }

if ($ka == 4){ $m = "Dwarfu tauta jau keli metai stekena nuozmus priesai, nuzudzius ju vada kapituliuos ir visa tauta. tad pirmyn zudyti 50 lygio vadeiva! :)<br/>
<b>Atlygis</b>:<br/>30 xp"; }

if ($ka == 5){ $m = "Turi atnesti 10 eseriu.<br/>
<b>Atlygis</b>:<br/>+5 zvejybos lygiai"; }

if ($ka == 6){ $m = "10-ciai elfu geriausiu kariu reikia kardu, pagamink 10 spyziaus kardu ir atnesk jiems.<br/>
<b>Atlygis</b>:<br/>+5 kasimo lygiu, +5 kalvininkavimo lygiu"; }

if ($ka == 7){ $m = "Dwarfai statosi patranka, jiems reikia 50 gelezies plyteliu.<br/>
<b>Atlygis</b>:<br/>+10 kasimo lygiu, +5 kalvininkavimo lygiu"; }

if ($ka == 8){ $m = "Turi atnesti 10 lynu.<br/>
<b>Atlygis</b>:<br/>+7 zvejybos lygiu"; }

if ($ka == 9){ $m = "Attaceriu snipui reikia kardo, atnesk jam varini kada.<br/>
<b>Atlygis</b>:<br/>+10 kasimo lygiu, +10 kalvininkavimo lygiu"; }

if ($ka == 10){ $m = "Attaceriu slaptajam buriui reikia ginklu. Atnesk 10 zalvario kardu.<br/>
<b>Atlygis</b>:<br/>+15 kasimo lygiu, +10 kalvininkavimo lygiu"; }

if ($ka == 11){ $m = "Musu karalyste pradejo puldineti sudu demonas, nuzudyk ji! jis 150 lygio.<br/>
<b>Atlygis</b>:<br/>60 xp"; }

if ($ka == 12){ $m = "Turi atnesti 10 raudziu.<br/>
<b>Atlygis</b>:<br/>+10 zvejybos lygiu"; }

if ($ka == 13){ $m = "10-ciai humanu geriausiu kariu reikia kardu bei sarvu, pagamink 10 vario kardu ir sarvu ir atnesk jiems.<br/>
<b>Atlygis</b>:<br/>+30 kasimo lygiu, +30 kalvininkavimo lygiu"; }

if ($ka == 14){ $m = "Kazkam reikia 10 gelezies kardu. atnesk juos.<br/>
<b>Atlygis</b>:<br/>+30 kasimo lygiu, +30 kalvininkavimo lygiu"; }

if ($ka == 15){ $m = "Turi atnesti 10 karpiu.<br/>
<b>Atlygis</b>:<br/>+15 zvejybos lygiu"; }

if ($ka == 16){ $m = "Dark elfu vadui reikia sarvu. nukalk plieno sarvus ir atnesk jam.<br/>
<b>Atlygis</b>:<br/>+10 kasimo lygiu, +5 kalvininkavimo lygiu"; }

if ($ka == 17){ $m = "Kartais musu gyventojus uzpuola nematyta klajokliu gentis, tu turi ja issudyti. klajokliu lygis 200.<br/>
<b>Atlygis</b>:<br/>200 xp"; }

if ($ka == 18){ $m = "Turi atnesti 10 starkiu.<br/>
<b>Atlygis</b>:<br/>+15 zvejybos lygiu"; }

if ($ka == 19){ $m = "10-ciai dark elfu geriausiu kariu reikia kardu bei sarvu, pagamink 10 plieno kardu ir sarvu ir atnesk jiems.<br/>
<b>Atlygis</b>:<br/>+40 kasimo lygiu, +40 kalvininkavimo lygiu"; }

if ($ka == 20){ $m = "elfu karaliui reikia kardo, nunesk jam sidabro karda.<br/>
<b>Atlygis</b>:<br/>+15 kasimo lygiu, +10 kalvininkavimo lygiu"; }

if ($ka == 21){ $m = "elfu karaliui reikia sarvu, nunesk jam sidabro sarvus.<br/>
<b>Atlygis</b>:<br/>+15 kasimo lygiu, +15 kalvininkavimo lygiu"; }

if ($ka == 22){ $m = "Turi atnesti 10 lydeku.<br/>
<b>Atlygis</b>:<br/>+20 zvejybos lygiu"; }

if ($ka == 23){ $m = "Turi pamaitinti nuskureliu tauta. atgabenk jiems 20 karpiu, 20 starkiu ir 10 lydeku.<br/>
<b>Atlygis</b>:<br/>+50 zvejybos lygiu"; }

if ($ka == 24){ $m = "Nykstukus istiko problema. jiems reikia ginklu, atgabenk jiems 30 spyziniu kardu ir 30 spyziniu sarvu.<br/>
<b>Atlygis</b>:<br/>+20 kasimo lygiu, +20 kalvininkavimo lygiu"; }

if ($ka == 25){ $m = "Musu miska stekena baisus drakonas, nuzudyk ji. drakonas 300 lygio<br/>
<b>Atlygis</b>:<br/>300 xp"; }

if ($ka == 26){ $m = "Sajungininku karaliui reikia kardo, nunesk jam ausko karda.<br/>
<b>Atlygis</b>:<br/>+50 kasimo lygiu, +50 kalvininkavimo lygiu"; }

if ($ka == 27){ $m = "Sajungininku karaliui reikia sarvu, nunesk jam ausko sarvus.<br/>
<b>Atlygis</b>:<br/>+60 kasimo lygiu, +60 kalvininkavimo lygiu"; }

if ($ka == 28){ $m = "Orcams reikia kardu bei sarvu. nunesk jiem 10 sidabro kardu bei sarvu.<br/>
<b>Atlygis</b>:<br/>+200 kasimo lygiu, +200 kalvininkavimo lygiu"; }

if ($ka == 29){ $m = "Dievams reikia kardo, nunesk jiems dragon karda.<br/>
<b>Atlygis</b>:<br/>+100 kasimo lygiu, +100 kalvininkavimo lygiu, 500 xp, 50 zvejybos lygiu"; }

if ($ka == 30){ $m = "Dievams reikia sarvu, nunesk jiems dragon sarvus.<br/>
<b>Atlygis</b>:<br/>+150 kasimo lygiu, +150 kalvininkavimo lygiu, 700 xp, 70 zvejybos lygiu"; }

echo"<p align=\"left\"><small>$m<br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=vykdau&amp;ka=$ka\">&gt;&gt;&gt;Vykdyti misija&gt;&gt;&gt;</a><br/>
</small></p><p align=\"center\"><small>
$lin<br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "vykdau" && $ka >= 1 && $ka <= 50){
$mi = file_get_contents("misjos/$nick.txt");
$m = explode("|",$mi); 
if ($m[$ka-1] == "+"){ $zin = "<b>Si misija jau ivykdyta!</b>"; }
if ($zin == ""){ 
include("icludekitainf/nuskait.php"); 

if ($ka == 50){ if ($kit[10] < 10 or $kit[52] < 100 or $kit[17] < 200 or $kit[23] < 100){ $zin = "Tiek reikiamu daiktu neturi!"; 
} else { $zin = "Atlikta. gavai +100 medkirtystes, +50 medziokles, +50 kepimo, +50 crafting lygiu"; 
$kit[10] = $kit[10]-10; 
$kit[52] = $kit[52]-100;
$kit[17] = $kit[17]-200;
$kit[23] = $kit[23]-100;
$kit[11] = $kit[11]+100; 
$kit[28] = $kit[28]+50; 
$kit[37] = $kit[37]+50; 
$kit[25] = $kit[25]+50; 
$m[49] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 49){ if ($kit[22] < 50 or $kit[23] < 50){ $zin = "Tiek klevo arba azuolo lanku neturi!"; 
} else { $zin = "Atlikta. gavai +50 medkirtystes ir +100 crafting lygiu"; 
$kit[22] = $kit[22]-50; 
$kit[23] = $kit[23]-50;
$kit[11] = $kit[11]+50; 
$kit[25] = $kit[25]+100; 
$m[48] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 48){ if ($kit[16] < 100 or $kit[17] < 100){ $zin = "Tiek klevu arba azuolu neturi!"; 
} else { $zin = "Atlikta. gavai +200 medkirtystes lygiu"; 
$kit[16] = $kit[16]-100; 
$kit[17] = $kit[17]-100;
$kit[11] = $kit[11]+200; 
$m[47] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 47){ if ($kit[35] < 10 or $kit[36] < 10){ $zin = "Tiek briedzio mesos arba sernienos neturi!"; 
} else { $zin = "Atlikta. gavai +50 medziokles lygiu"; 
$kit[35] = $kit[35]-10; 
$kit[36] = $kit[36]-10;
$kit[28] = $kit[28]+50; 
$m[46] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 46){ $att = round(((200*2)/4),1); $att2 = round(((200*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 200xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 200+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$m[45] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 45){ if ($kit[21] < 20 or $kit[27] < 400){ $zin = "Tiek topolio lanku arba streliu neturi!"; 
} else { $zin = "Atlikta. gavai +20 medkirtystes ir +30 crafting lygiu"; 
$kit[21] = $kit[21]-20; 
$kit[27] = $kit[27]-400;
$kit[11] = $kit[11]+20; 
$kit[25] = $kit[25]+30; 
$m[44] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 44){ if ($kit[14] < 100 or $kit[15] < 50){ $zin = "Tiek gluosniu arba topoliu neturi!"; 
} else { $zin = "Atlikta. gavai +30 medkirtystes lygiu"; 
$kit[14] = $kit[14]-100; 
$kit[15] = $kit[15]-50;
$kit[11] = $kit[11]+30; 
$m[43] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 43){ if ($kit[33] < 10){ $zin = "Tiek stirnu neturi!"; 
} else { $zin = "Atlikta. gavai +10 medziokles lygiu"; 
$kit[33] = $kit[33]-10; 
$kit[28] = $kit[28]+10; 
$m[42] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 42){ $att = round(((150*2)/4),1); $att2 = round(((150*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 100xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 100+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$m[41] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 41){ if ($kit[20] < 20){ $zin = "Tiek gluosnio lanku neturi!"; 
} else { $zin = "Atlikta. gavai +10 medkirtystes ir +10 crafting lygiu"; 
$kit[20] = $kit[20]-20; 
$kit[11] = $kit[11]+10; 
$kit[25] = $kit[25]+10; 
$m[40] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 40){ if ($kit[14] < 30){ $zin = "Tiek gluosniu neturi!"; 
} else { $zin = "Atlikta. gavai +20 medkirtystes lygiu"; 
$kit[14] = $kit[14]-30; 
$kit[11] = $kit[11]+20; 
$m[39] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 39){ if ($kit[48] < 50){ $zin = "Tiek keptu tetervinu neturi!"; 
} else { $zin = "Atlikta. gavai +15 medziokles ir +15 kepimo lygiu"; 
$kit[48] = $kit[48]-50; 
$kit[28] = $kit[28]+15; 
$kit[37] = $kit[37]+15;
$m[38] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 38){ if ($kit[31] < 20){ $zin = "Tiek fazanu neturi!"; 
} else { $zin = "Atlikta. gavai +10 medziokles lygiu"; 
$kit[31] = $kit[31]-20; 
$kit[28] = $kit[28]+10; 
$m[37] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 37){ if ($kit[19] < 20){ $zin = "Tiek ievos lanku neturi!"; 
} else { $zin = "Atlikta. gavai +10 medkirtystes ir +10 crafting lygiu"; 
$kit[19] = $kit[19]-20; 
$kit[11] = $kit[11]+10; 
$kit[25] = $kit[25]+10; 
$m[36] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 36){ if ($kit[27] < 500){ $zin = "Tiek streliu neturi!"; 
} else { $zin = "Atlikta. gavai +30 crafting lygiu"; 
$kit[27] = $kit[27]-500; 
$kit[25] = $kit[25]+30; 
$m[35] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 35){ $att = round(((100*2)/4),1); $att2 = round(((100*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 50xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 50+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$m[34] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 34){ if ($kit[12] < 20 or $kit[13] < 10){ $zin = "Tiek reikalingu medziu neturi!"; 
} else { $zin = "Atlikta. gavai +10 medkirtystes lygiu"; 
$kit[12] = $kit[12]-20; 
$kit[13] = $kit[13]-10; 
$kit[11] = $kit[11]+10; 
$m[33] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 33){ if ($kit[46] < 5 or $kit[45] < 10){ $zin = "Tiek keptu zuikiu arba balandziu neturi!"; 
} else { $zin = "Atlikta. gavai +10 medziokles ir +10 kepimo lygiu"; 
$kit[46] = $kit[46]-5; 
$kit[45] = $kit[45]-10; 
$kit[28] = $kit[28]+10; 
$kit[37] = $kit[37]+10; 
$m[32] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 32){ if ($kit[18] < 5 or $kit[27] < 100){ $zin = "Tiek lanku arba streliu neturi!"; 
} else { $zin = "Atlikta. gavai +20 crafting lygiu"; 
$kit[18] = $kit[18]-5; 
$kit[27] = $kit[27]-100; 
$kit[25] = $kit[25]+20; 
$m[31] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 31){ if ($kit[12] < 30){ $zin = "Tiek alksniu neturi!"; 
} else { $zin = "Atlikta. gavai +10 medkirtystes lygiu"; 
$kit[12] = $kit[12]-30; 
$kit[11] = $kit[11]+10; 
$m[30] = "+"; 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
include("icludekitainf/iras.php");
}}

if ($ka == 30){ if ($dragon_sarvu < 1){ $zin = "Siu sarvu neturi!"; } else { $zin = "Atlikta. gavai +150 kasimo lygiu, +150 kalvininkavimo lygiu, 700xp, 70 zvejybos lygiu"; 
$dragon_sarvu = $dragon_sarvu-1; 
$mining_lvl = $mining_lvl+150; 
$smithing_lvl = $smithing_lvl+150; 
$fp1 = fopen("fyshers/$nick.txt","w");
$fishing = $fishing+70; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$xpas = 700+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|+|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 29){ if ($dragon_swordu < 1){ $zin = "Sio kardo neturi!"; } else { $zin = "Atlikta. gavai +100 kasimo lygiu, +100 kalvininkavimo lygiu, 500xp, 50 zvejybos lygiu"; 
$dragon_swordu = $dragon_swordu-1; 
$mining_lvl = $mining_lvl+100; 
$smithing_lvl = $smithing_lvl+100; 
$fp1 = fopen("fyshers/$nick.txt","w");
$fishing = $fishing+50; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$xpas = 500+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$inf[4]|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|+|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 28){ if ($sidabro_swordu < 10 or $sidabro_sarvu < 10){ $zin = "Tiek ginklu neturi!"; } else { $zin = "Atlikta. gavai +200 kasimo lygiu, +200 kalvininkavimo lygiu"; 
$sidabro_swordu = $sidabro_swordu-10;
$sidabro_sarvu = $sidabro_sarvu-10; 
$mining_lvl = $mining_lvl+200; 
$smithing_lvl = $smithing_lvl+200; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|+|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 27){ if ($aukso_sarvu < 1){ $zin = "Siu sarvu neturi!"; } else { $zin = "Atlikta. gavai +60 kasimo lygiu, +60 kalvininkavimo lygiu"; 
$aukso_sarvu = $aukso_sarvu-1; 
$mining_lvl = $mining_lvl+60; 
$smithing_lvl = $smithing_lvl+60; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|+|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 26){ if ($aukso_swordu < 1){ $zin = "Sio kardo neturi!"; } else { $zin = "Atlikta. gavai +50 kasimo lygiu, +50 kalvininkavimo lygiu"; 
$aukso_swordu = $aukso_swordu-1; 
$mining_lvl = $mining_lvl+50; 
$smithing_lvl = $smithing_lvl+50; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|+|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 25){ $att = round(((300*2)/4),1); $att2 = round(((300*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 300xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 300+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|+|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 24){ if ($spyziaus_swordu < 30 or $spyziaus_sarvu < 30){ $zin = "Tiek ginklu neturi!"; } else { $zin = "Atlikta. gavai +20 kasimo lygiu, +20 kalvininkavimo lygiu"; 
$spyziaus_swordu = $spyziaus_swordu-30;
$spyziaus_sarvu = $spyziaus_sarvu-30; 
$mining_lvl = $mining_lvl+20; 
$smithing_lvl = $smithing_lvl+20; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|+|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 23){ 
if ($lydeku < 10 or $starkiu < 20 or $karpiu < 20){ $zin = "Tiek zuvu neturi!"; } else { $zin = "Atlikta. gavai +50 zvejybos lygiu"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$lydeku = $lydeku-10; 
$starkiu = $starkiu-20; 
$karpiu = $karpiu-20; 
$fishing = $fishing+50; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|+|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 22){ 
if ($lydeku < 10){ $zin = "Tiek lydeku neturi!"; } else { $zin = "Atlikta. gavai +20 zvejybos lygiu"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$lydeku = $lydeku-10; 
$fishing = $fishing+20; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|+|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 21){ if ($sidabro_sarvu < 1){ $zin = "Siu sarvu neturi!"; } else { $zin = "Atlikta. gavai +15 kasimo lygiu, +15 kalvininkavimo lygiu"; 
$sidabro_sarvu = $sidabro_sarvu-1; 
$mining_lvl = $mining_lvl+15; 
$smithing_lvl = $smithing_lvl+15; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|+|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 20){ if ($sidabro_swordu < 1){ $zin = "Sio kardo neturi!"; } else { $zin = "Atlikta. gavai +15 kasimo lygiu, +10 kalvininkavimo lygiu"; 
$sidabro_swordu = $sidabro_swordu-1; 
$mining_lvl = $mining_lvl+15; 
$smithing_lvl = $smithing_lvl+10; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|+|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 19){ if ($plieno_swordu < 10 or $plieno_sarvu < 10){ $zin = "Tiek ginklu neturi!"; } else { $zin = "Atlikta. gavai +40 kasimo lygiu, +40 kalvininkavimo lygiu"; 
$plieno_swordu = $plieno_swordu-10;
$plieno_sarvu = $plieno_sarvu-10; 
$mining_lvl = $mining_lvl+40; 
$smithing_lvl = $smithing_lvl+40; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|+|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 18){ 
if ($starkiu < 10){ $zin = "Tiek starkiu neturi!"; } else { $zin = "Atlikta. gavai +15 zvejybos lygiu"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$starkiu = $starkiu-10; 
$fishing = $fishing+15; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|+|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 17){ $att = round(((200*2)/4),1); $att2 = round(((200*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 200xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 200+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|+|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 16){ if ($plieno_sarvu < 1){ $zin = "Siu sarvu neturi!"; } else { $zin = "Atlikta. gavai +10 kasimo lygiu, +5 kalvininkavimo lygiu"; 
$plieno_sarvu = $plieno_sarvu-1; 
$mining_lvl = $mining_lvl+10; 
$smithing_lvl = $smithing_lvl+5; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|+|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 15){ 
if ($karpiu < 10){ $zin = "Tiek karpiu neturi!"; } else { $zin = "Atlikta. gavai +15 zvejybos lygiu"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$karpiu = $karpiu-10; 
$fishing = $fishing+15; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|+|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 14){ if ($gelezies_swordu < 10){ $zin = "Tiek kardu neturi!"; } else { $zin = "Atlikta. gavai +30 kasimo lygiu, +30 kalvininkavimo lygiu"; 
$gelezies_swordu = $gelezies_swordu-10; 
$mining_lvl = $mining_lvl+30; 
$smithing_lvl = $smithing_lvl+30; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|+|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 13){ if ($vario_swordu < 10 or $vario_sarvu < 10){ $zin = "Tiek ginklu neturi!"; } else { $zin = "Atlikta. gavai +30 kasimo lygiu, +30 kalvininkavimo lygiu"; 
$vario_swordu = $vario_swordu-10;
$vario_sarvu = $vario_sarvu-10; 
$mining_lvl = $mining_lvl+30; 
$smithing_lvl = $smithing_lvl+30; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|+|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 12){ 
if ($raudziu < 10){ $zin = "Tiek raudziu neturi!"; } else { $zin = "Atlikta. gavai +10 zvejybos lygiu"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$raudziu = $raudziu-10; 
$fishing = $fishing+10; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|+|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 11){ $att = round(((150*2)/4),1); $att2 = round(((150*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 60xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 60+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|+|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 10){ if ($zalvario_swordu < 10){ $zin = "Tiek kardu neturi!"; } else { $zin = "Atlikta. gavai +15 kasimo lygiu, +10 kalvininkavimo lygiu"; 
$zalvario_swordu = $zalvario_swordu-10; 
$mining_lvl = $mining_lvl+15; 
$smithing_lvl = $smithing_lvl+10; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|+|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 9){ if ($vario_swordu < 1){ $zin = "Neturi varinio kardo!"; } else { $zin = "Atlikta. gavai +10 kasimo lygiu, +10 kalvininkavimo lygiu"; 
$vario_swordu = $vario_swordu-1; 
$mining_lvl = $mining_lvl+10; 
$smithing_lvl = $smithing_lvl+10; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|+|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 8){ 
if ($lynu < 5){ $zin = "Tiek lynu neturi!"; } else { $zin = "Atlikta. gavai +7 zvejybos lygius"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$lynu = $lynu-10; 
$fishing = $fishing+7; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|+|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 7){ if ($iron_baru < 50){ $zin = "Nepakanka plyteliu"; } else { $zin = "Atlikta. gavai +10 kasimo lygiu, +5 kalvininkavimo lygius"; 
$iron_baru = $iron_baru-50; 
$mining_lvl = $mining_lvl+10; 
$smithing_lvl = $smithing_lvl+5; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|+|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 6){ if ($spyziaus_swordu < 10){ $zin = "Nepakanka kardu"; } else { $zin = "Atlikta. gavai +5 kasimo lygius, +5 kalvininkavimo lygius"; 
$spyziaus_swordu = $spyziaus_swordu-10; 
$mining_lvl = $mining_lvl+5; 
$smithing_lvl = $smithing_lvl+5; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|+|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 5){ 
if ($eseriu < 10){ $zin = "Tiek eseriu neturi!"; } else { $zin = "Atlikta. gavai +5 zvejybos lygius"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$eseriu = $eseriu-10; 
$fishing = $fishing+5; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|$m[3]|+|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 4){ $att = round(((50*2)/4),1); $att2 = round(((50*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 30xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 30+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|$m[2]|+|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 3){ if ($bronze_swordu < 5){ $zin = "Nepakanka kardu"; } else { $zin = "Atlikta. gavai +2 kasimo lygius, +2 kalvininkavimo lygius"; 
$bronze_swordu = $bronze_swordu-5; 
$mining_lvl = $mining_lvl+2; 
$smithing_lvl = $smithing_lvl+2; 
$fp1 = fopen("$miners","w");
fwrite($fp1,"$iron_ores|$zalvario_ores|$sidabro_ores|$aukso_ores|$iron_baru|$zalvario_baru|$sidabro_baru|$aukso_baru|$bronze_swordu|$spyziaus_swordu|$zalvario_swordu|$vario_swordu|$gelezies_swordu|$plieno_swordu|$sidabro_swordu|$aukso_swordu|$dragon_swordu|$bronze_sarvu|$spyziaus_sarvu|$zalvario_sarvu|$vario_sarvu|$gelezies_sarvu|$plieno_sarvu|$sidabro_sarvu|$aukso_sarvu|$dragon_sarvu|$mining_lvl|$smithing_lvl|\n");
fclose($fp1); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|$m[1]|+|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 2){ 
if ($karosu < 5){ $zin = "Tiek karosu neturi!"; } else { $zin = "Atlikta. gavai +3 zvejybos lygius"; 
$fp1 = fopen("fyshers/$nick.txt","w");
$karosu = $karosu-5; 
$fishing = $fishing+3; 
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"$m[0]|+|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

if ($ka == 1){ $att = round(((20*2)/4),1); $att2 = round(((20*2)/4),1);
$penk = 5*$att; $ket = 4*$att; $tri = 3*$att; $two = 2*$att;
if ($two > $defense) { $gyvs = $gyvybes-$att; }
if ($two <= $defense) { $att = $att-round(($att/4),1); $gyvs = $gyvybes-$att; }
if ($tri <= $defense) { $att = $att-round(($att/3),1); $gyvs = $gyvybes-$att; }
if ($ket <= $defense) { $att = $att-round(($att/2),1); $gyvs = $gyvybes-$att; }
if ($penk <= $defense) { $att = 0; $gyvs = $gyvybes-$att; }
if ($gyvybes <= $att) { $prakisai = "+"; }
if ($damage <= $att2) { $prakisai = "+"; }
if ($prakisai=="+"){ $zin = "<b>Tu pralaimejai..</b><br/>Ir praradai puse pinigu<br/>";
$los = "$loses"+"1";
$pinigai = round(($pinigai)/2,0);
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|0|$inf[5]|$inf[6]|$inf[7]|$inf[8]|$los|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$inf[19]|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp);
} else {
$netekai = $gyvybes-$gyvs;
$zin = "<b>Tu Laimejai!<br/></b>Gavai 10xp<br/>Praradai gyvybiu: $netekai";
$winai = "$wins"+"1";
$xpas = 10+$exp; 
$fp = fopen("$gameriai","w");
fwrite($fp,"$inf[0]|$inf[1]|$inf[2]|$inf[3]|$gyvs|$inf[5]|$inf[6]|$inf[7]|$winai|$inf[9]|$inf[10]|$inf[11]|$inf[12]|$inf[13]|$inf[14]|$inf[15]|$inf[16]|$inf[17]|$inf[18]|$xpas|$inf[20]||$inf[22]|$inf[23]||\n");
fclose($fp); 
$fp = fopen("misjos/$nick.txt","w");
fwrite($fp,"+|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
fclose($fp); 
}}

}
echo"<p align=\"center\"><small><b>$zin</b><br/>
$lin<br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}
 
print'</card></wml>';

?>