<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo"<card id=\"index\" title=\"$dsghj\">";
$kur = "Kazkur zaidime...";
include("config.php");
/////////////////Pagr meniu///////////////////////

if ($id == "") {
if (file_get_contents("txt/klanu.txt") < time()){
$op = glob("klaniukos/*.ta");
for ($i = 0; $i < count($op); $i++){
$dfd = file($op[$i]);
for($t=0; $t<count($dfd); $t++){
$fdp = explode("|",$dfd[$t]);
$cyks2 = explode("|",file_get_contents("us_xgrx_inf/$fdp[0].txt"));
if (!file_exists("kronoss/$fdp[0].txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$fdp[0].txt"); }
if ($t==0){
$gavo = count($dfd)*0.01;
$tau = "Kaip ir priklauso, kas 3h, is pulko gavai $gavo kronos, pritrauk i savo pulka dar daugiau zmoniu ir gausi daugiau ;)";
 } else { $gavo = 0.01;
$tau = "Kaip ir priklauso, kas 3h, is pulko gavai $gavo kronos ;)";  }
 $atidaryma = fopen("priv_zin/$fdp[0].txt", "a");
        fwrite($atidaryma, "@SISTEMA|$tau|$laikas|\n");
        fclose($atidaryma);
 $fop = fopen("kronoss/$fdp[0].txt", "w+");
        fwrite($fop,$kronu+$gavo);
        fclose($fop);
     @chmod("kronoss/$fdp[0].txt",0777);
 $fop = fopen("us_xgrx_inf/$fdp[0].txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);
}}
 $fopt = fopen("txt/klanu.txt", "w");
        fwrite($fopt,time()+3*60*60);
        fclose($fopt);
}

$bukis = explode("|",file_get_contents("txt/konk.ly"));
if (($bukis[1]+(3*24*60*60))<time()){
$da = file("txt/konk_dal.ly");
$kiek2 = count($da);
for($y=0; $y<$kiek2; $y++){
$nar = explode("|",$da[$y]);
$infa = explode("|", @file_get_contents("us_xgrx_inf/$nar[0].txt"));
$ski = round($infa[19]-$nar[1],1);
$arr[]=array($ski,$nar[0]);
}
rsort($arr);

$open = fopen("txt/konk_rez.ly","a");
        fwrite($open, "$bukis[0]|{$arr[0][1]}|{$arr[1][1]}|{$arr[2][1]}|\n");
        fclose($open);

for($f=0; $f<3; $f++){
if (!file_exists("kronoss/{$arr[$f][1]}.txt")){ $krou = 0; } else { $krou = file_get_contents("kronoss/{$arr[$f][1]}.txt"); }
if ($f == '0'){ $krp = '3'; }
if ($f == '1'){ $krp = '2'; }
if ($f == '2'){ $krp = '1'; }
$fop = fopen("kronoss/{$arr[$f][1]}.txt", "w+");
        fwrite($fop,$krou+$krp);
        fclose($fop); chmod("kronoss/{$arr[$f][1]}.txt",0777);
 }


$open = fopen("txt/konk_dal.ly","w");
        fwrite($open, "");
        fclose($open);
$open = fopen("txt/konk.ly","w+");
        fwrite($open, "$laikas|$time|\n");
        fclose($open);
}

$topic = @file_get_contents("txt/topic.txt");
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
echo"<p align=\"center\"><small>
<img src=\"imgs/logo.gif\" alt=\"logo\"/><br/>
$lin<br/>
$topic<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=topic\">^Keisti^</a><br/>
$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos\">&#171;KRONOS [$kronu]&#187;</a><br/>";
include("icludekitainf/nuskait2.php");
if ($dari[0] != "+"){ echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=isr\">&#171;Tapk isrinktuoju!&#187;</a><br/>"; }
else {
$isrl = round(((($dari[1]-time())/60)/60)/24,0);
echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=isr2\">&#171;Isrinktuoju dar busi $isrl d&#187;</a><br/>";}
echo"</b>
$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=atv\">&#171;Zaideju atvedimas uz kronas&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">&#171;Miestas&#187;</a><br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=mining\">&#171;Kasykla&#187;</a><br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=klanai\">&#171;Kariu pulkai&#187;</a><br/>
<a href=\"kova.php?nick=$nick&amp;pass=$pass&amp;id=kautis\">&#171;Kovu laukas&#187;</a><br/>
<a href=\"zvejoti.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Upe&#187;</a><br/>
<a href=\"miskas.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Miskas&#187;</a><br/></b>
$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nick\">&#171;Apie $vrd&#187;</a><br/>
<a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Daiktai uzdeti ant kuno&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">&#171;Inventorius&#187;</a><br/>
<a href=\"misijos.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Misijos&#187;</a><br/></b>
$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">&#171;Mano meniu&#187;</a><br/>
<a href=\"konkursas.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Konkursas&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top\">&#171;Topai&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=roundai\">&#171;Roundai&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=rases\">&#171;Statistika&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=paieska\">&#171;Ieskoti zaidejo&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=informacija\">&#171;Informacija&#187;</a><br/></b>
<a href=\"index.php\">&#171;Atsijungti&#171;</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=on\">Dabar zaidime: $online</a><br/>
Max online: $max_onl<br/>
[$max_on_tim]<br/>";
echo"
$lin<br/>&#169;spawn</small></p>";
$prisij = time();
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}

if ($id == "isr2"){
$isrl = round(((($dari[1]-time())/60)/60)/24,0);
echo"<p align=\"center\"><small><b>Isrinktuoju dar busi $isrl d</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
Isrinktieji gali daug daugiau nei kiti zaidejai ;)<br/><br/>

<b>Buvima isrinktuoju gali prasitesi, reikia siusti sms, ikainiai ir laikas pateikti zemiau</b><br/>
<br/>
<b>+1 menuo<br/></b>
SMS: <b>smsas3 $nick isr2</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>3LT</b><br/>

<b><br/>+2 menesiai<br/></b>
SMS: <b>smsas5 $nick isr2</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>5LT</b>
<br/><br/>
<b>Arba galite prasitesti uz kronas:</b><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pirktisr2\">&#187;1 menuo [10 kronu]&#187;</a><br/>
<br/>
Jeigu neprasitesite buvimo isrinktuoju tai jus po $isrl d tapsite vel papratu zaideju, o jusu turimi isrinktuju daiktai dings.<br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
</small></p>"; }

if ($id == "isr"){ echo"<p align=\"center\"><small><b>Tapk isrinktuoju!</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
Isrinktieji gali daug daugiau nei kiti zaidejai.<br/>
Tapes isrinktuoju galesite gaminti dragon daiktus, ieiti i mirties sala,
ten rasite nauju galingu kariu, kurie ismes dragon akmenu (is ju gaminami dragon daiktai),
ivairiu materialu (apsiaustu, batu, pirstiniu gamybai).<br/>
galesite gaminti salmus, batus, apsiaustus pirstines (uz gamyba gausite itin daug XP), bei juos nesioti (jie prides gynybos).<br/>
Zvejodami galesite pagauti daugiau vandens gyventoju, tokiu kaip veziai, kardzuves, rykliai ir kt.<br/>
<b>Norint tapti isrinktuoju reikia siusti sms, ikainiai ir laikas pateikti zemiau</b><br/>
<br/>
<b>1 menuo<br/></b>
SMS: <b>LGZS3 $nick isr</b><br/>
Numeriu: <b>1679</b><br/>
Kaina: <b>3LT</b><br/>

<b><br/>2 menesiai<br/></b>
SMS: <b>LGZS5 $nick isr</b><br/>
Numeriu: <b>1679</b><br/>
Kaina: <b>5LT</b>
<br/><br/>
<b>Arba galite moketi kronomis:</b><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pirktisr\">&#187;1 menuo [10 kronu]&#187;</a><br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
</small></p>"; }

if ($id=="pirktisr"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if ($kronu<10){ $bad = "Neuztenka kronu!"; }

if ($bad==""){ $bad = "Sekmingai pasidarete isrinktuoju ;)";
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu-10);
fclose($fp);
$dari[0]="+";
$dari[1]=time()+30*60*60*24;
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$bad</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}
if ($id=="pirktisr2"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if ($kronu<10){ $bad = "Neuztenka kronu!"; }

if ($bad==""){ $bad = "Sekmingai prasitesete ;)";
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu-10);
fclose($fp);
$dari[0]="+";
$dari[1]=$dari[1]+30*60*60*24;
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$bad</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}

if ($id == "kronos"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
echo"<p align=\"center\"><small><b>Kronu naudojimas [$kronu]</b><br/>$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=1\">&#171;Pirkti XP&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=13\">&#171;Pirkti lygio tasku&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=3\">&#171;Pirkti pinigu&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=4\">&#171;Pirkti ginklu&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=5\">&#171;Pirkti sarvu&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=6\">&#171;Pirkti kasimo&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=7\">&#171;Pirkti kalvininkavimo&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=8\">&#171;Pirkti zvejybos&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=9\">&#171;Pirkti kepimo&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=10\">&#171;Pirkti crafting&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=11\">&#171;Pirkti medziokles&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos2&amp;ka=12\">&#171;Pirkti medkirtystes&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=keistrase\">&#171;Keistis rase [5 kronos]&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pirktimod\">&#171;Pirkti mod [60 kronu]&#187;</a><br/>
</b>$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronu\">&#171;KAIP GAUTI KRONU?&#187;</a><br/></b>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "keistrase") {
echo"<p align=\"center\"><small>
<b>Pasirinkite rase</b><br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Human\">Human</a></b><br/>
<img src=\"imgs/human.gif\" alt=\"Foto\"/><br/>
Neturi jokiu bonusu<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Elf\">Elf</a></b><br/>
<img src=\"imgs/elf.gif\" alt=\"Foto\"/><br/>
+5% Atakos bonus<br/>
+10% Gyvybiu bonus<br/>
+5% Patirties bonus<br/>
+5% Medkirtystes bonus<br/>
-10% Kasimo bonus<br/>
-10% Kalvininkavimo bonus<br/>
-5% Zvejybos bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Dark_elf\">Dark elf</a></b><br/>
<img src=\"imgs/dark_elf.gif\" alt=\"Foto\"/><br/>
+5% Atakos bonus<br/>
+5% Gynybos bonus<br/>
+5% Gyvybiu bonus<br/>
-5% Kasimo bonus<br/>
-5% Kalvininkavimo bonus<br/>
-5% Zvejybos bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Orc\">Orc</a></b><br/>
<img src=\"imgs/orc.gif\" alt=\"Foto\"/><br/>
+10% Atakos bonus<br/>
+10% Medziokles bonus<br/>
-5% Kasimo bonus<br/>
-5% Zvejybos bonus<br/>
-10% Crafting bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Attacer\">Attacer</a></b><br/>
<img src=\"imgs/attacer.gif\" alt=\"Foto\"/><br/>
+15% Atakos bonus<br/>
-10% Gynybos bonus<br/>
-5% Gyvybiu bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Dwarf\">Dwarf</a></b><br/>
<img src=\"imgs/dwarf.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-10% Gyvybiu bonus<br/>
+10% Kasimo bonus<br/>
+10% Kalvininkavimo bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Fisher\">Fisher</a></b><br/>
<img src=\"imgs/fisher.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-10% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+20% Zvejybos bonus<br/>
+10% kepimo bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Farmer\">Farmer</a></b><br/>
<img src=\"imgs/farmer.gif\" alt=\"Foto\"/><br/>
-5% Atakos bonus<br/>
-5% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+10% Kepimo bonus<br/>
+5% Medziokles bonus<br/>
+5% Medkirtystes bonus<br/>
$lin<br/>
<b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=krase&amp;mo=Crafter\">Crafter</a></b><br/>
<img src=\"imgs/crafter.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-5% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+20% Crafting bonus<br/>
+5% Medkirtystes bonus<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>"; }

if ($id=="krase"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if ($kronu<5){ $bad = "Neuztenka kronu!"; }
if ($mo == "Human"){ $a = "aaa"; }
if ($mo == "Elf"){ $a = "aaa"; }
if ($mo == "Dark_elf"){ $a = "aaa"; }
if ($mo == "Attacer"){ $a = "aaa"; }
if ($mo == "Orc"){ $a = "aaa"; }
if ($mo == "Dwarf"){ $a = "aaa"; }
if ($mo == "Fisher"){ $a = "aaa"; }
if ($mo == "Farmer"){ $a = "aaa"; }
if ($mo == "Crafter"){ $a = "aaa"; }
if ($a == ""){$bad = "Bloga rase!"; }
if ($bad==""){ $bad = "Rase pakeista sekmingai ;)";
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,$kronu-5);
fclose($fp);

$prisij = time();
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$mo|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small>$bad<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}


if ($id == "pirktimod"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
if ($kronu < 60){ echo"<p align=\"center\"><small><b>Nepakanka kronu!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos\">Atgal</a></small></p>"; }
else {
$nv = file("txt/mods.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
if ($nick == $kv[0]){
$er = "<b>Tu jau moderatorius!</b>"; }}
if ($er == "") {
$kronu = $kronu-60;
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kronu");
fclose($fp);
$fp1 = fopen("txt/mods.txt","a");
fwrite($fp1,"$nick|mod|\n");
fclose($fp1);
$er = "<b>Atlikta, skemes, moderatoriau ;) neprisidirbk tik ;)</b>";
}
echo"<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
}}

if ($id == "kronos2"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
echo"<p align=\"center\"><small><b>Kronu naudojimas [$kronu]</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>";
if ($ka == '1'){ $perk = "<b>XP pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=xp&amp;kj=1\">100 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=xp&amp;kj=2\">300 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=xp&amp;kj=3\">500 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=xp&amp;kj=4\">700 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=xp&amp;kj=5\">1000 [5 kronos]</a><br/>";
 }
if ($ka == '2'){ $perk = "<b>Zuvu pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=1\">100 karosu [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=2\">80 eseriu [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=3\">65 lynai [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=4\">50 raudziu [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=5\">40 karpiu [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=6\">25 starkiai [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zu&amp;kj=7\">15 lydeku [1 krona]</a><br/>";
 }
if ($ka == '3'){ $perk = "<b>Pinigu pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=pi&amp;kj=1\">100000 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=pi&amp;kj=2\">300000 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=pi&amp;kj=3\">500000 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=pi&amp;kj=4\">700000 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=pi&amp;kj=5\">1000000 [5 kronos]</a><br/>
";
 }
if ($ka == '4'){ $perk = "<b>Ginklu pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=gi&amp;kj=1\">Plienini karda [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=gi&amp;kj=2\">Sidabrini kardas [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=gi&amp;kj=3\">Aukso kardas [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=gi&amp;kj=4\">Dragon kardas [7 kronos]</a><br/>";
 }
if ($ka == '5'){ $perk = "<b>Sarvu pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=sa&amp;kj=1\">Plienino sarvai [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=sa&amp;kj=2\">Sidabro sarvai [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=sa&amp;kj=3\">Aukso sarvai [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=sa&amp;kj=4\">Dragon sarvai [7 kronos]</a><br/>";
 }
if ($ka == '6'){ $perk = "<b>Kasimo lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kas&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kas&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kas&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kas&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kas&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '7'){ $perk = "<b>Kalvininkavimo lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kal&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kal&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kal&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kal&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kal&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '8'){ $perk = "<b>Zvejybos lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zv&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zv&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zv&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zv&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=zv&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '9'){ $perk = "<b>Kepimo lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kp&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kp&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kp&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kp&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kp&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '10'){ $perk = "<b>Crafting lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=cr&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=cr&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=cr&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=cr&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=cr&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '11'){ $perk = "<b>Medziokles lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=md&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=md&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=md&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=md&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=md&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
if ($ka == '12'){ $perk = "<b>Medkirtystes lygio pirkimas</b><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kh&amp;kj=1\">50 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kh&amp;kj=2\">100 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kh&amp;kj=3\">200 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kh&amp;kj=4\">300 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=kh&amp;kj=5\">500 [5 kronos]</a><br/>";
 }
 if ($ka == '13'){ $perk = "<b>Lygio tasku pirkimas</b><br/>
 Perkant lygio taskus jusu bendras lygis nekils todel busite galingesnis nors lygis nepakis, taip lengviau galesite iveikti kitus zaidejus<br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=po&amp;kj=1\">1 [1 krona]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=po&amp;kj=2\">2 [2 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=po&amp;kj=3\">3 [3 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=po&amp;kj=4\">5 [4 kronos]</a><br/>
#<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=po&amp;kj=5\">7 [5 kronos]</a><br/>";
 }
echo"$perk<br/></small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "nkr"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$kj=ereg_replace("[^0-9]","",$kj);
if ($ka == "xp"){ $df = "ok"; }
if ($ka == "zu"){ $df = "ok"; }
if ($ka == "pi"){ $df = "ok"; }
if ($ka == "gi"){ $df = "ok"; }
if ($ka == "sa"){ $df = "ok"; }
if ($ka == "kas"){ $df = "ok"; }
if ($ka == "kal"){ $df = "ok"; }
if ($ka == "zv"){ $df = "ok"; }
if ($ka == "kp"){ $df = "ok"; }
if ($ka == "cr"){ $df = "ok"; }
if ($ka == "md"){ $df = "ok"; }
if ($ka == "kh"){ $df = "ok"; }
if ($ka == "po"){ $df = "ok"; }
if ($df != "ok"){ $bad = "Error 1 !"; }

if ($ka == "xp" or $ka == "pi" or $ka == "kas" or $ka == "kal" or $ka == "zv" or $ka == "kp" or $ka == "cr" or $ka == "md" or $ka == "kh" or $ka == "po"){ if ($kronu < $kj){ $bad = "Neuztenka kronu!"; }
if ($kj <= 0 or $kj > 5){ $bad = "Error 2 !"; }}
if ($ka == "zu" && $kronu < 1){ $bad = "Neuztenka kronu!"; }
if ($ka == "gi" or $ka == "sa"){ if ($kronu < $kj){ $bad = "Neuztenka kronu!"; }
if ($kj <= 0 or $kj > 4){ $bad = "Error 3 !"; } }

if ($bad == ""){ $bad = "Nupirkta :)";
if ($ka == "xp"){
if ($kj==1){ $kronu = $kronu-1; $xpls = 100; }
if ($kj==2){ $kronu = $kronu-2; $xpls = 300; }
if ($kj==3){ $kronu = $kronu-3; $xpls = 500; }
if ($kj==4){ $kronu = $kronu-4; $xpls = 700; }
if ($kj==5){ $kronu = $kronu-5; $xpls = 1000; }
$expt = $exp+$xpls;
$lvl = 99999;
$enda = 99999;
$qq = 1.1;
for ($rr=1; $rr<99999; $rr++){
if ($rr==1){ $qq = 1.1; } else { $qq = $qq*1.1; }
if ($qq >= $expt/10 && $enda != $rr){ $lvl = $rr; $enda = $rr+1; $buves = $qq; }
if ($enda==$rr){ $left = round($buves*10,1); break; }
} $skirtums = $lvl-$lygis; $points = $points+($skirtums*2);
$lygis = $lvl; $ex_left = $left; $exp = $expt; }

if ($ka == "po"){
if ($kj==1){ $kronu = $kronu-1; $points = $points+1; }
if ($kj==2){ $kronu = $kronu-2; $points = $points+2; }
if ($kj==3){ $kronu = $kronu-3; $points = $points+3; }
if ($kj==4){ $kronu = $kronu-4; $points = $points+5; }
if ($kj==5){ $kronu = $kronu-5; $points = $points+7; } }

if ($ka == "zu"){
if ($kj == 1){ $karosu=$karosu+100; }
if ($kj == 2){ $eseriu=$eseriu+80; }
if ($kj == 3){ $lynu=$lynu+65; }
if ($kj == 4){ $raudziu=$raudziu+50; }
if ($kj == 5){ $karpiu=$karpiu+40; }
if ($kj == 6){ $starkiu=$starkiu+25; }
if ($kj == 7){ $lydeku=$lydeku+15; }
$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1); $kronu = $kronu-1;
}

if ($ka == "pi"){
if ($kj==1){ $kronu = $kronu-1; $pinigai = $pinigai+100000; }
if ($kj==2){ $kronu = $kronu-2; $pinigai = $pinigai+300000; }
if ($kj==3){ $kronu = $kronu-3; $pinigai = $pinigai+500000; }
if ($kj==4){ $kronu = $kronu-4; $pinigai = $pinigai+700000; }
if ($kj==5){ $kronu = $kronu-5; $pinigai = $pinigai+1000000; }}

if ($ka == "gi"){
if ($kj==1){ $kronu = $kronu-1; $in[13] = $in[13]+1; }
if ($kj==2){ $kronu = $kronu-2; $in[14] = $in[14]+1; }
if ($kj==3){ $kronu = $kronu-4; $in[15] = $in[15]+1; }
if ($kj==4){ $kronu = $kronu-7; $in[16] = $in[16]+1; }
$fp = fopen("miners/$nick.txt","w");
fwrite($fp,"$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
fclose($fp); }

if ($ka == "sa"){
if ($kj==1){ $kronu = $kronu-1; $in[22] = $in[22]+1; }
if ($kj==2){ $kronu = $kronu-2; $in[23] = $in[23]+1; }
if ($kj==3){ $kronu = $kronu-4; $in[24] = $in[24]+1; }
if ($kj==4){ $kronu = $kronu-7; $in[25] = $in[25]+1; }
$fp = fopen("miners/$nick.txt","w");
fwrite($fp,"$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
fclose($fp); }

if ($ka == "kas"){
if ($kj==1){ $kronu = $kronu-1; $in[26] = $in[26]+50; }
if ($kj==2){ $kronu = $kronu-2; $in[26] = $in[26]+100; }
if ($kj==3){ $kronu = $kronu-3; $in[26] = $in[26]+200; }
if ($kj==4){ $kronu = $kronu-4; $in[26] = $in[26]+300; }
if ($kj==5){ $kronu = $kronu-5; $in[26] = $in[26]+500; }
$fp = fopen("miners/$nick.txt","w");
fwrite($fp,"$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
fclose($fp); }

if ($ka == "zv"){
if ($kj == 1){ $fishing=$fishing+50; $kronu = $kronu-1; }
if ($kj == 2){ $fishing=$fishing+100; $kronu = $kronu-2; }
if ($kj == 3){ $fishing=$fishing+200; $kronu = $kronu-3; }
if ($kj == 4){ $fishing=$fishing+300; $kronu = $kronu-4; }
if ($kj == 5){ $fishing=$fishing+500; $kronu = $kronu-5; }
$fp1 = fopen("fyshers/$nick.txt","w");
fwrite($fp1,"$fishing|$slieku|$teslos|$karosu|$eseriu|$lynu|$raudziu|$karpiu|$starkiu|$lydeku|\n");
fclose($fp1);
}

if ($ka == "kal"){
if ($kj==1){ $kronu = $kronu-1; $in[27] = $in[27]+50; }
if ($kj==2){ $kronu = $kronu-2; $in[27] = $in[27]+100; }
if ($kj==3){ $kronu = $kronu-3; $in[27] = $in[27]+200; }
if ($kj==4){ $kronu = $kronu-4; $in[27] = $in[27]+300; }
if ($kj==5){ $kronu = $kronu-5; $in[27] = $in[27]+500; }
$fp = fopen("miners/$nick.txt","w");
fwrite($fp,"$in[0]|$in[1]|$in[2]|$in[3]|$in[4]|$in[5]|$in[6]|$in[7]|$in[8]|$in[9]|$in[10]|$in[11]|$in[12]|$in[13]|$in[14]|$in[15]|$in[16]|$in[17]|$in[18]|$in[19]|$in[20]|$in[21]|$in[22]|$in[23]|$in[24]|$in[25]|$in[26]|$in[27]|");
fclose($fp); }

if ($ka == "kp"){
include("icludekitainf/nuskait.php");
if ($kj==1){ $kronu = $kronu-1; $kit[37] = $kit[37]+50; }
if ($kj==2){ $kronu = $kronu-2; $kit[37] = $kit[37]+100; }
if ($kj==3){ $kronu = $kronu-3; $kit[37] = $kit[37]+200; }
if ($kj==4){ $kronu = $kronu-4; $kit[37] = $kit[37]+300; }
if ($kj==5){ $kronu = $kronu-5; $kit[37] = $kit[37]+500; }
include("icludekitainf/iras.php"); }

if ($ka == "cr"){
include("icludekitainf/nuskait.php");
if ($kj==1){ $kronu = $kronu-1; $kit[25] = $kit[25]+50; }
if ($kj==2){ $kronu = $kronu-2; $kit[25] = $kit[25]+100; }
if ($kj==3){ $kronu = $kronu-3; $kit[25] = $kit[25]+200; }
if ($kj==4){ $kronu = $kronu-4; $kit[25] = $kit[25]+300; }
if ($kj==5){ $kronu = $kronu-5; $kit[25] = $kit[25]+500; }
include("icludekitainf/iras.php"); }

if ($ka == "md"){
include("icludekitainf/nuskait.php");
if ($kj==1){ $kronu = $kronu-1; $kit[28] = $kit[28]+50; }
if ($kj==2){ $kronu = $kronu-2; $kit[28] = $kit[28]+100; }
if ($kj==3){ $kronu = $kronu-3; $kit[28] = $kit[28]+200; }
if ($kj==4){ $kronu = $kronu-4; $kit[28] = $kit[28]+300; }
if ($kj==5){ $kronu = $kronu-5; $kit[28] = $kit[28]+500; }
include("icludekitainf/iras.php"); }

if ($ka == "kh"){
include("icludekitainf/nuskait.php");
if ($kj==1){ $kronu = $kronu-1; $kit[11] = $kit[11]+50; }
if ($kj==2){ $kronu = $kronu-2; $kit[11] = $kit[11]+100; }
if ($kj==3){ $kronu = $kronu-3; $kit[11] = $kit[11]+200; }
if ($kj==4){ $kronu = $kronu-4; $kit[11] = $kit[11]+300; }
if ($kj==5){ $kronu = $kronu-5; $kit[11] = $kit[11]+500; }
include("icludekitainf/iras.php"); }

$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kronu");
fclose($fp);

$prisij = time();
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small><b>$bad<br/></b>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "kronu"){ echo"<p align=\"center\"><small><b>Kronu pirkimas</b><br/>$lin<br/></small></p>
<p align=\"left\"><small>
<b>1 krona<br/></b>
SMS: <b>LGZZ1 $nick kron</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>1LT</b><br/>
<b><br/>3 kronos<br/></b>
SMS: <b>smsas2 $nick kron</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>2LT</b><br/>

<b><br/>5 kronos<br/></b>
SMS: <b>smsas3 $nick kron</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>3LT</b><br/>

<b><br/>7 kronos<br/></b>
SMS: <b>smsas4 $nick kron</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>4LT</b><br/>

<b><br/>10 kronu<br/></b>
SMS: <b>smsas5 $nick kron</b><br/>
Numeriu: <b>1371</b><br/>
Kaina: <b>5LT</b>
<br/></small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
</small></p>"; }

if ($id == "meniu"){
$zzz = file("priv_zin/$nick.txt");
$kiek_pmu = count($zzz);
echo"<p align=\"center\"><small><b>Meniu</b><br/>$lin<br/><b>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">&#171;PM dezute ($kiek_pmu)&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=keisti_pass\">&#171;Keisti slaptazodi&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles\">&#171;Smiles&#187;</a></b><br/>
";
if ($stat == "mod"){ echo"$lin<br/>Moderatoriaus meniu<br/><b>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban\">&#171;Deti ban&#187;</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ban_logs\">&#171;Ban logai&#187;</a><br/></b>"; }
if ($nick == "wumas" or $nick == "spawn"){
$uzd = file_get_contents("txt/uzdirbta.txt");
$nkh22 = file("txt/sms_log.txt");
$kieknkh2 = count($nkh22);
for($py22=0; $py22 < $kieknkh2; $py22++) {
$kly22 = explode("|",$nkh22[$py22]);
$lkk = substr($kly22[2], 0, 10);
if ($lkk != $ll1 ){
$nkh22[$py22] = "";
$fpz222 = fopen("txt/sms_log.txt","w");
fwrite($fpz222,implode($nkh22));
fclose($fpz222);
}}
$log_file = "txt/sms_log.txt";
$nuskk = file($log_file);
$viso_logu = count($nuskk);

$lol=0;
for($nx=0; $nx<$viso_logu; $nx++) {
$dfsg = explode("|",$nuskk[$nx]);
$blet=$dfsg[4];
$lol=$lol+$blet; }
$a = $lol/100;
$uzd2 = round($uzd/3,0);
echo"$lin<br/>Admino meniu<br/><b>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">&#171;Duoti mod&#187;</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_mod\">&#171;Nuimti mod&#187;</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban\">&#171;Nuimti ban&#187;</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=sms_log\">&#171;Siandienos sms logai ($viso_logu - $a Lt | $uzd Lt)&#187;</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=empty_ban_logs\">&#171;Valyti ban logus&#187;</a><br/></b>$lin<br/>
Turi isviso surinkes $uzd Lt, is ju bus ismokama $uzd2 Lt, kai ismokama suma pasieks 10lt tada gausi slaptazodi nuo hosto.<br/>
"; }
echo"$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/>
</small></p>"; }

if ($id == "rkl"){
echo"<p align=\"center\"><small><b>Kaip ideti mokama reklama?</b><br/>
$lin</small></p>
<p align=\"left\"><small>
Mokamos reklamos kaina tik 1lt<br/>
Rodomos 3 naujausios reklamos<br/>
Reikia siusti sms siuo numeriu:<br/>
<b>1371</b><br/>
Zinuteje irasius:<br/>
<b>lygis1 reklama tavo_url saito_aprasymas</b><br/>
Url reikia rasyti be http://<br/>
<b>Pavyzdys:</b><br/>
lygis1 reklama XgrX.xz.lt geras zaidimas<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
</small></p>
";  }

if ($id == "miestas"){ $nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Forume"){ $vik[] = $et[0]; }}
$frm_on = count($vik);
echo"<p align=\"center\"><small><b>Miestas</b><br/>
$lin<br/><b>
<a href=\"aukcijonas.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Aukcijonas&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=istatymai\">&#171;Istatymu lenta&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valdzia\">&#171;Valdzia&#187;</a><br/>
<a href=\"bankas.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Bankas&#187;</a><br/>
<a href=\"parda.php?nick=$nick&amp;pass=$pass&amp;id=parde\">&#171;Turgus&#187;</a><br/>
<a href=\"kasimas_kalve.php?nick=$nick&amp;pass=$pass&amp;id=kalve\">&#171;Kalve&#187;</a><br/>
<a href=\"dirbtuves.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Dirbtuves&#187;</a><br/>
<a href=\"krosnele.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Krosnele&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pokalbiai\">&#171;Pokalbiu namai&#187;</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">&#171;Forum klub ($frm_on)&#187;</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kalejimas\">&#171;Kalejimas&#187;</a><br/></b>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
</small></p>
";  }

if ($id == "valdzia"){
echo"<p align=\"center\"><small><b>Valdzia<br/></b>
$lin<br/>
</small></p>";
echo'<p align="left"><small>';
echo"<b>Valdovas</b>:<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=wumas\">@wumas</a><br/>";
echo"<b>Padejejai, tvarkos priziuretojai</b>:<br/>";
$nv = file("txt/mods.txt");
$kiek_nv = count($nv);
for($pv=0; $pv < $kiek_nv; $pv++) {
$kv = explode("|",$nv[$pv]);
if ($kv[1] == "mod"){
echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kv[0]\">*$kv[0]</a><br/>";
}}
echo'</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";

}

if ($id == "kalejimas"){
echo"<p align=\"center\"><small><b>Zmones esantys kalejime ir negalintys zaisti<br/></b>
$lin<br/>
</small></p>";
echo'<p align="left"><small>';
$nph = array_reverse(file("txt/nick_bans.txt"));
$kiek_nph = count($nph);
for($oh=0; $oh < $kiek_nph; $oh++) {
$oph = explode("|",$nph[$oh]);
$uz_lkh = $oph[1]-time();
$uz_lk2h = round(($uz_lkh)/60,0);
echo"
<b>Kalinys</b>: $oph[0]<br/>
<b>Iseis uz</b>: $uz_lk2h minuciu<br/>
<b>Nubaustas del</b>: $oph[2]<br/>
<b>Nubaude</b>: $oph[3]<br/>
<br/>"; }
echo'</small></p>';
echo"<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";
}

if ($id == "istatymai"){
echo"<p align=\"center\"><small><b>Istatymai, taisykles<br/></b>
Ju turi laikytis visi be isimciu, nusizengus iskart i kalejima<br/>
$lin<br/>
<b>Bendros taisykles visiems:</b><br/>
</small></p>
<p align=\"left\"><small>
- Nekenkti sistemai;<br/>
- Aptikus kenkeja apie ji iskart pranesti adminui arba jo padejejams;<br/>
- Nuolat pranesti apie pastebetas klaidas ir bugus;<br/>
- Neniekinti kitu zaideju;<br/>
- Necheatinti;<br/>
- Neikyret adminui!;<br/>
- Draudziama apsimetineti modais ar adminu!;<br/>
- Draudziama kurti debiliskas temas forume;<br/>
- Draudziama forume kurti temas kurios butu skirtos man (wumas), pvz: wumas padek ar Ar galeciau buti modu ir kt.<br/>
</small></p>
<p align=\"center\"><small><b>Moderatoriu (padejeju) taisykles:</b><br/></small></p>
<p align=\"left\"><small>
- Nuolatos trinti is forumo nesamoningas temas;<br/>
- Labai gerai zinoti pries tai isvardintas taisykles;<br/>
- Nebaninti be reikalo;<br/>
- Nesikelti pries kitus zaidejus del savo statuso;<br/>
- Reklamuoti si zaidima;<br/>
- Tuos kas kenkia sistemai is karto baninti ilgiausiam laikui ir iskarto apie tai pranesti adminui<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<b>Uz siu taisykliu sulauzyma i kalejima (ban) be ispejimo arba net nick istrinimas! Tad laikykites taisykliu ir problemu nekils :)</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";
}

/////////////////Inventorius///////////////////////

if ($id == "inventory"){
include("icludekitainf/nuskait.php");
include("icludekitainf/nuskait2.php");
echo"<p align=\"center\"><small><b>Inventorius</b><br/>
(Rudos, metalu plyteles, ginklai / (^)-uzsideti ginkla)<br/>
$lin</small></p><p align=\"left\"><small>";
if ($dari[2] > 0){ echo"<b>Dragon akmenu</b>: $dari[2]<br/>"; }
if ($dari[3] > 0){ echo"<b>Apdirbtu dragon akmenu</b>: $dari[3]<br/>"; }
if ($dari[4] > 0){ echo"<b>Brown material</b>: $dari[4]<br/>"; }
if ($dari[5] > 0){ echo"<b>Gray material</b>: $dari[5]<br/>"; }
if ($dari[6] > 0){ echo"<b>White material</b>: $dari[6]<br/>"; }
if ($dari[7] > 0){ echo"<b>Yellow material</b>: $dari[7]<br/>"; }
if ($dari[8] > 0){ echo"<b>Orange material</b>: $dari[8]<br/>"; }
if ($dari[9] > 0){ echo"<b>Green material</b>: $dari[9]<br/>"; }
if ($dari[10] > 0){ echo"<b>Red material</b>: $dari[10]<br/>"; }
if ($dari[11] > 0){ echo"<b>Black material</b>: $dari[11]<br/>"; }
if ($dari[12] > 0){ echo"<b>Apdirbtu brown material</b>: $dari[12]<br/>"; }
if ($dari[13] > 0){ echo"<b>Apdirbtu gray material</b>: $dari[13]<br/>"; }
if ($dari[14] > 0){ echo"<b>Apdirbtu white material</b>: $dari[14]<br/>"; }
if ($dari[15] > 0){ echo"<b>Apdirbtu yellow material</b>: $dari[15]<br/>"; }
if ($dari[16] > 0){ echo"<b>Apdirbtu orange material</b>: $dari[16]<br/>"; }
if ($dari[17] > 0){ echo"<b>Apdirbtu green material</b>: $dari[17]<br/>"; }
if ($dari[18] > 0){ echo"<b>Apdirbtu red material</b>: $dari[18]<br/>"; }
if ($dari[19] > 0){ echo"<b>Apdirbtu black material</b>: $dari[19]<br/>"; }

if ($dari[20] > 0){ echo"<b>Bronze salmu</b>: $dari[20] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=bro\">(^)</a><br/>"; }
if ($dari[21] > 0){ echo"<b>Spyziaus salmu</b>: $dari[21] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=spy\">(^)</a><br/>"; }
if ($dari[22] > 0){ echo"<b>Zalvario salmu</b>: $dari[22] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=zal\">(^)</a><br/>"; }
if ($dari[23] > 0){ echo"<b>Vario salmu</b>: $dari[23] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=var\">(^)</a><br/>"; }
if ($dari[24] > 0){ echo"<b>Gelezies salmu</b>: $dari[24] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=gel\">(^)</a><br/>"; }
if ($dari[25] > 0){ echo"<b>Plieno salmu</b>: $dari[25] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=pli\">(^)</a><br/>"; }
if ($dari[26] > 0){ echo"<b>Sidabro salmu</b>: $dari[26] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=sid\">(^)</a><br/>"; }
if ($dari[27] > 0){ echo"<b>Aukso salmu</b>: $dari[27] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=auk\">(^)</a><br/>"; }
if ($dari[28] > 0){ echo"<b>Dragon salmu</b>: $dari[28] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_salm&amp;ka=dra\">(^)</a><br/>"; }

if ($dari[29] > 0){ echo"<b>Brown pirstiniu</b>: $dari[29] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=bro\">(^)</a><br/>"; }
if ($dari[30] > 0){ echo"<b>Gray pirstiniu</b>: $dari[30] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=gra\">(^)</a><br/>"; }
if ($dari[31] > 0){ echo"<b>White pirstiniu</b>: $dari[31] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=whi\">(^)</a><br/>"; }
if ($dari[32] > 0){ echo"<b>Yellow pirstiniu</b>: $dari[32] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=yel\">(^)</a><br/>"; }
if ($dari[33] > 0){ echo"<b>Orange pirstiniu</b>: $dari[33] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=ora\">(^)</a><br/>"; }
if ($dari[34] > 0){ echo"<b>Green pirstiniu</b>: $dari[34] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=gre\">(^)</a><br/>"; }
if ($dari[35] > 0){ echo"<b>Red pirstiniu</b>: $dari[35] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=red\">(^)</a><br/>"; }
if ($dari[36] > 0){ echo"<b>Black pirstiniu</b>: $dari[36] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_pirst&amp;ka=bla\">(^)</a><br/>"; }

if ($dari[37] > 0){ echo"<b>Brown batu</b>: $dari[37] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=bro\">(^)</a><br/>"; }
if ($dari[38] > 0){ echo"<b>Gray batu</b>: $dari[38] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=gra\">(^)</a><br/>"; }
if ($dari[39] > 0){ echo"<b>White batu</b>: $dari[39] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=whi\">(^)</a><br/>"; }
if ($dari[40] > 0){ echo"<b>Yellow batu</b>: $dari[40] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=yel\">(^)</a><br/>"; }
if ($dari[41] > 0){ echo"<b>Orange batu</b>: $dari[41] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=ora\">(^)</a><br/>"; }
if ($dari[42] > 0){ echo"<b>Green batu</b>: $dari[42] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=gre\">(^)</a><br/>"; }
if ($dari[43] > 0){ echo"<b>Red batu</b>: $dari[43] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=red\">(^)</a><br/>"; }
if ($dari[44] > 0){ echo"<b>Black batu</b>: $dari[44] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_bat&amp;ka=bla\">(^)</a><br/>"; }

if ($dari[45] > 0){ echo"<b>Brown apsiaustu</b>: $dari[45] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=bro\">(^)</a><br/>"; }
if ($dari[46] > 0){ echo"<b>Gray apsiaustu</b>: $dari[46] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=gra\">(^)</a><br/>"; }
if ($dari[47] > 0){ echo"<b>White apsiaustu</b>: $dari[47] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=whi\">(^)</a><br/>"; }
if ($dari[48] > 0){ echo"<b>Yellow apsiaustu</b>: $dari[48] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=yel\">(^)</a><br/>"; }
if ($dari[49] > 0){ echo"<b>Orange apsiaustu</b>: $dari[49] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=ora\">(^)</a><br/>"; }
if ($dari[50] > 0){ echo"<b>Green apsiaustu</b>: $dari[50] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=gre\">(^)</a><br/>"; }
if ($dari[51] > 0){ echo"<b>Red apsiaustu</b>: $dari[51] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=red\">(^)</a><br/>"; }
if ($dari[52] > 0){ echo"<b>Black apsiaustu</b>: $dari[52] <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_aps&amp;ka=bla\">(^)</a><br/>"; }

if ($kit[0] > 0){ echo"<b>Lazdininiu meskeriu</b>: $kit[0]<br/>"; }
if ($kit[1] > 0){ echo"<b>Bambukiniu meskeriu</b>: $kit[1]<br/>"; }
if ($kit[2] > 0){ echo"<b>Spiningu</b>: $kit[2]<br/>"; }
if ($kit[3] > 0){ echo"<b>Bronze kirtikliu</b>: $kit[3]<br/>"; }
if ($kit[4] > 0){ echo"<b>Spyziniu kirtikliu</b>: $kit[4]<br/>"; }
if ($kit[5] > 0){ echo"<b>Geleziniu kirtikliu</b>: $kit[5]<br/>"; }
if ($kit[6] > 0){ echo"<b>Plieniniu kirtikliu</b>: $kit[6]<br/>"; }
if ($kit[7] > 0){ echo"<b>Bronze kirviu</b>: $kit[7]<br/>"; }
if ($kit[8] > 0){ echo"<b>Spyziniu kirviu</b>: $kit[8]<br/>"; }
if ($kit[9] > 0){ echo"<b>Geleziniu kirviu</b>: $kit[9]<br/>"; }
if ($kit[10] > 0){ echo"<b>Plieniniu kirviu</b>: $kit[10]<br/>"; }
if ($kit[12] > 0){ echo"<b>Alksnio malku</b>: $kit[12]<br/>"; }
if ($kit[13] > 0){ echo"<b>Ievos malku</b>: $kit[13]<br/>"; }
if ($kit[14] > 0){ echo"<b>Gluosnio malku</b>: $kit[14]<br/>"; }
if ($kit[15] > 0){ echo"<b>Topolio malku</b>: $kit[15]<br/>"; }
if ($kit[16] > 0){ echo"<b>Klevo malku</b>: $kit[16]<br/>"; }
if ($kit[17] > 0){ echo"<b>Azuolo malku</b>: $kit[17]<br/>"; }
if ($kit[24] > 0){ echo"<b>Streliu antgaliu</b>: $kit[24]<br/>"; }
if ($kit[26] > 0){ echo"<b>Streliu koteliu</b>: $kit[26]<br/>"; }
if ($kit[27] > 0){ echo"<b>Streliu</b>: $kit[27]<br/>"; }
if ($kit[18] > 0){ echo"<b>Alksnio lanku</b>: $kit[18]<br/>"; }
if ($kit[19] > 0){ echo"<b>Ievos lanku</b>: $kit[19]<br/>"; }
if ($kit[20] > 0){ echo"<b>Gluosnio lanku</b>: $kit[20]<br/>"; }
if ($kit[21] > 0){ echo"<b>Topolio lanku</b>: $kit[21]<br/>"; }
if ($kit[22] > 0){ echo"<b>Klevo lanku</b>: $kit[22]<br/>"; }
if ($kit[23] > 0){ echo"<b>Azuolo lanku</b>: $kit[23]<br/>"; }
if ($kit[29] > 0){ echo"<b>Nekeptu balandziu</b>: $kit[29]<br/>"; }
if ($kit[30] > 0){ echo"<b>Nekeptos zuikienos</b>: $kit[30]<br/>"; }
if ($kit[31] > 0){ echo"<b>Nekeptu fazanu</b>: $kit[31]<br/>"; }
if ($kit[32] > 0){ echo"<b>Nekeptu tetervinu</b>: $kit[32]<br/>"; }
if ($kit[33] > 0){ echo"<b>Nekeptos stirnienos</b>: $kit[33]<br/>"; }
if ($kit[34] > 0){ echo"<b>Nekeptos elnienos</b>: $kit[34]<br/>"; }
if ($kit[35] > 0){ echo"<b>Nekeptos briedzio mesos</b>: $kit[35]<br/>"; }
if ($kit[36] > 0){ echo"<b>Nekeptos sernienos</b>: $kit[36]<br/>"; }
if ($dari[61] > 0){ echo"<b>Veziu</b>: $dari[61]<br/>"; }
if ($dari[62] > 0){ echo"<b>Kardzuviu</b>: $dari[62]<br/>"; }
if ($dari[63] > 0){ echo"<b>Rykliu</b>: $dari[63]<br/>"; }

if ($kit[38] > 0){ echo"<b>Keptu karosu</b>: $kit[38] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=kar\">(Valgyti)</a><br/>"; }
if ($kit[39] > 0){ echo"<b>Keptu eseriu</b>: $kit[39] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=ese\">(Valgyti)</a><br/>"; }
if ($kit[40] > 0){ echo"<b>Keptu lynu</b>: $kit[40] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=lyn\">(Valgyti)</a><br/>"; }
if ($kit[41] > 0){ echo"<b>Keptu raudziu</b>: $kit[41] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=rau\">(Valgyti)</a><br/>"; }
if ($kit[42] > 0){ echo"<b>Keptu karpiu</b>: $kit[42] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=karp\">(Valgyti)</a><br/>"; }
if ($kit[43] > 0){ echo"<b>Keptu starkiu</b>: $kit[43] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=sta\">(Valgyti)</a><br/>"; }
if ($kit[44] > 0){ echo"<b>Keptu lydeku</b>: $kit[44] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=lyd\">(Valgyti)</a><br/>"; }
if ($kit[45] > 0){ echo"<b>Keptu balandziu</b>: $kit[45] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=bal\">(Valgyti)</a><br/>"; }
if ($kit[46] > 0){ echo"<b>Keptos zuikienos</b>: $kit[46] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=zui\">(Valgyti)</a><br/>"; }
if ($kit[47] > 0){ echo"<b>Keptu fazanu</b>: $kit[47] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=faz\">(Valgyti)</a><br/>"; }
if ($kit[48] > 0){ echo"<b>Keptu tetervinu</b>: $kit[48] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=tet\">(Valgyti)</a><br/>"; }
if ($kit[49] > 0){ echo"<b>Keptos stirnienos</b>: $kit[49] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=sti\">(Valgyti)</a><br/>"; }
if ($kit[50] > 0){ echo"<b>Keptos elnienos</b>: $kit[50] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=eln\">(Valgyti)</a><br/>"; }
if ($kit[51] > 0){ echo"<b>Keptos briedzio mesos</b>: $kit[51] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=bri\">(Valgyti)</a><br/>"; }
if ($kit[52] > 0){ echo"<b>Keptos sernienos</b>: $kit[52] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=ser\">(Valgyti)</a><br/>"; }
if ($dari[64] > 0){ echo"<b>Keptu veziu</b>: $dari[64] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=vez\">(Valgyti)</a><br/>"; }
if ($dari[65] > 0){ echo"<b>Keptu kardzuviu</b>: $dari[65] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=kard\">(Valgyti)</a><br/>"; }
if ($dari[66] > 0){ echo"<b>Keptu rykliu</b>: $dari[66] <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valgyti&amp;ka=ryk\">(Valgyti)</a><br/>"; }

if ($iron_ores > 0){ echo"<b>Gelezies rudu</b>: $iron_ores<br/>"; }
if ($zalvario_ores > 0){ echo"<b>Zalvario rudu</b>: $zalvario_ores<br/>"; }
if ($sidabro_ores > 0){ echo"<b>Sidabro rudu</b>: $sidabro_ores<br/>"; }
if ($aukso_ores > 0){ echo"<b>Aukso rudu</b>: $aukso_ores<br/>"; }
if ($iron_baru > 0){ echo"<b>Gelezies plyteliu</b>: $iron_baru<br/>"; }
if ($zalvario_baru > 0){ echo"<b>Zalvario plyteliu</b>: $zalvario_baru<br/>"; }
if ($sidabro_baru > 0){ echo"<b>Sidabro plyteliu</b>: $sidabro_baru<br/>"; }
if ($aukso_baru > 0){ echo"<b>Aukso plyteliu</b>: $aukso_baru<br/>"; }
if ($bronze_swordu > 0){ echo"<b>Bronze kardu</b>: $bronze_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=bro\">(^)</a><br/>"; }
if ($spyziaus_swordu > 0){ echo"<b>Spyziaus kardu</b>: $spyziaus_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=spy\">(^)</a><br/>"; }
if ($zalvario_swordu > 0){ echo"<b>Zalvario kardu</b>: $zalvario_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=zal\">(^)</a><br/>"; }
if ($vario_swordu > 0){ echo"<b>Vario kardu</b>: $vario_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=var\">(^)</a><br/>"; }
if ($gelezies_swordu > 0){ echo"<b>Gelezies kardu</b>: $gelezies_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=gel\">(^)</a><br/>"; }
if ($plieno_swordu > 0){ echo"<b>Plieno kardu</b>: $plieno_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=pli\">(^)</a><br/>"; }
if ($sidabro_swordu > 0){ echo"<b>Sidabro kardu</b>: $sidabro_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=sid\">(^)</a><br/>"; }
if ($aukso_swordu > 0){ echo"<b>Aukso kardu</b>: $aukso_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=auk\">(^)</a><br/>"; }
if ($dragon_swordu > 0){ echo"<b>Dragon kardu</b>: $dragon_swordu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_weap&amp;ka=dra\">(^)</a><br/>"; }
if ($bronze_sarvu > 0){ echo"<b>Bronze sarvu</b>: $bronze_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=bro\">(^)</a><br/>"; }
if ($spyziaus_sarvu > 0){ echo"<b>Spyziaus sarvu</b>: $spyziaus_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=spy\">(^)</a><br/>"; }
if ($zalvario_sarvu > 0){ echo"<b>Zalvario sarvu</b>: $zalvario_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=zal\">(^)</a><br/>"; }
if ($vario_sarvu > 0){ echo"<b>Vario sarvu</b>: $vario_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=var\">(^)</a><br/>"; }
if ($gelezies_sarvu > 0){ echo"<b>Gelezies sarvu</b>: $gelezies_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=gel\">(^)</a><br/>"; }
if ($plieno_sarvu > 0){ echo"<b>Plieno sarvu</b>: $plieno_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=pli\">(^)</a><br/>"; }
if ($sidabro_sarvu > 0){ echo"<b>Sidabro sarvu</b>: $sidabro_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=sid\">(^)</a><br/>"; }
if ($aukso_sarvu > 0){ echo"<b>Aukso sarvu</b>: $aukso_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=auk\">(^)</a><br/>"; }
if ($dragon_sarvu > 0){ echo"<b>Dragon sarvu</b>: $dragon_sarvu <a href=\"used.php?nick=$nick&amp;pass=$pass&amp;id=use_sar&amp;ka=dra\">(^)</a><br/>"; }
if ($slieku > 0){ echo"<b>Slieku</b>: $slieku<br/>"; }
if ($teslos > 0){ echo"<b>Teslos</b>: $teslos<br/>"; }
if ($karosu > 0){ echo"<b>Karosu</b>: $karosu<br/>"; }
if ($eseriu > 0){ echo"<b>Eseriu</b>: $eseriu<br/>"; }
if ($lynu > 0){ echo"<b>Lynu</b>: $lynu<br/>"; }
if ($raudziu > 0){ echo"<b>Raudziu</b>: $raudziu<br/>"; }
if ($karpiu > 0){ echo"<b>Karpiu</b>: $karpiu<br/>"; }
if ($starkiu > 0){ echo"<b>Starkiu</b>: $starkiu<br/>"; }
if ($lydeku > 0){ echo"<b>Lydeku</b>: $lydeku<br/>"; }
echo"</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a>
</small></p>";
}

if ($id == "valgyti"){

if ($ka == "kar"){ $zuv = $kit[38];
$kit[38] = $kit[38]-1;
$plus = 2;
}
if ($ka == "ese"){ $zuv = $kit[39];
$kit[39] = $kit[39]-1;
$plus = 4;
}
if ($ka == "lyn"){ $zuv = $kit[40];
$kit[40] = $kit[40]-1;
$plus = 6;
}
if ($ka == "rau"){ $zuv = $kit[41];
$kit[41] = $kit[41]-1;
$plus = 10;
}
if ($ka == "karp"){ $zuv = $kit[42];
$kit[42] = $kit[42]-1;
$plus = 15;
}
if ($ka == "sta"){ $zuv = $kit[43];
$kit[43] = $kit[43]-1;
$plus = 40;
}
if ($ka == "lyd"){ $zuv = $kit[44];
$kit[44] = $kit[44]-1;
$plus = 60;
}
if ($ka == "bal"){ $zuv = $kit[45];
$kit[45] = $kit[45]-1;
$plus = 5;
}
if ($ka == "zui"){ $zuv = $kit[46];
$kit[46] = $kit[46]-1;
$plus = 20;
}
if ($ka == "faz"){ $zuv = $kit[47];
$kit[47] = $kit[47]-1;
$plus = 25;
}
if ($ka == "tet"){ $zuv = $kit[48];
$kit[48] = $kit[48]-1;
$plus = 30;
}
if ($ka == "sti"){ $zuv = $kit[49];
$kit[49] = $kit[49]-1;
$plus = 50;
}
if ($ka == "eln"){ $zuv = $kit[50];
$kit[50] = $kit[50]-1;
$plus = 70;
}
if ($ka == "bri"){ $zuv = $kit[51];
$kit[51] = $kit[51]-1;
$plus = 80;
}
if ($ka == "ser"){ $zuv = $kit[52];
$kit[52] = $kit[52]-1;
$plus = 100;
}

if ($ka == "vez"){ $zuv = $dari[64];
$dari[64] = $dari[64]-1;
$plus = 120;
}
if ($ka == "kard"){ $zuv = $dari[65];
$dari[65] = $dari[65]-1;
$plus = 150;
}
if ($ka == "ryk"){ $zuv = $dari[66];
$dari[66] = $dari[66]-1;
$plus = 200;
}

if ($zuv < 1) { $er = "Sio maisto neturi!"; }

if ($er == ""){
$er="Suvalgyta... Nem :) Prideta gyvybiu: <u>$plus</u>.";
$gyvybes = $gyvybes+$plus;
if ($gyvybes > $gyvybess2){ $gyvybes = $gyvybess2; $er="Suvalgyta... Nem :) Prideta gyvybiu: <u>$plus</u>, tavo gyvybes jau pilnos."; }
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
include("icludekitainf/iras.php");
include("icludekitainf/iras2.php");
}
echo"<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inventory\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

/////////////////Informacija///////////////////////

if ($id == "informacija") {
$infor = file_get_contents("info.txt");
echo"<p align=\"center\"><small>
<b>Informacija</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
$infor
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
$lin<br/>
&#169;spawn</small></p>"; }

/////////////////keisti topic///////////////////////

if ($id == "topic"){ echo"<p align=\"center\"><small>";
if ($stat == "admin" or $nick == "pumass"){ echo"Topic pakeitimas nemokamas."; } else {
echo"Topic pakeitimas kainuoja 50000."; } echo"<br/>
$lin<br/></small>
<input name=\"topic\" type=\"text\" maxlength=\"100\" title=\"Topicas\" value=\"\"/><br/>

<anchor>Keisti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=topic2\" method=\"post\">
    <postfield name=\"topic\" value=\"$(topic)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small>
    </p>"; }

if ($id == "topic2") {
$topic = $_POST['topic'];

if ($pinigai < 50000 && $stat=="Narys") { echo"<p align=\"center\"><small><b>Neuztenka pinigu!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>"; }

else{ echo"<p align=\"center\"><small><b>Topic pakeistas!</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";

if ($stat=="Narys"){
$pin = "$pinigai"-"50000";

$arr = array("<",">","&","^","%","'",'"',"$","\n","|");
$topic = str_replace($arr,"",$topic);

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp); }
$fpa = fopen("txt/topic.txt","w");
fwrite($fpa, "$topic ($vrd)");
fclose($fpa);
} }

/////////////////PM///////////////////////

if ($id == "pm") {
echo"<p align=\"center\"><small>
<b>PM</b><br/>
$lin<br/></small></p>";

$pm_direktorija = 'priv_zin';
$DATA_FILE = "$pm_direktorija/$nick.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 6;

if ($viso_pm == 0)
    {
echo " <p align=\"center\"><small>
        PM tuscia.<br/></small></p>"; }
        else
        {
if ($page == "")
    { $page = 1; }

        $next = $page + 1;
        $back = $page - 1;

        if ($page == 1)
        { $nuo = 0;
            $iki = $puslapiu_skaicius; }
        else
        { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
            $iki = $page * $puslapiu_skaicius; }

if ($viso_pm <= $page * $puslapiu_skaicius)
        { $iki = $viso_pm; }
echo '<p align="left"><small>';

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {    $int = explode('|', $masyvo_apvertimas[$c]);

                $nuo_ko = $int[0];
                $zinute = stripslashes($int[1]);
                $siunt_data = $int[2];
                $masyw = array("@","*");
                $nuo_ko2 = str_replace($masyw,"",$nuo_ko);
             if ($nuo_ko == "@SISTEMA"){
echo "<b>&#187; @XgrX</b>: $zinute<br/><br/>"; } else {
if ($nuo_ko2 == $nick){
$vrdr = $int[4];
if ($int[4] == "spawn"){ $vrdr = "@$int[4]"; }
if ($int[4] != "spawn"){ if (in_array("$int[4]\n",file("txt/mods.txt"))){ $vrdr = "*$int[4]"; }}

echo "<i><b>&#171; to: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$int[4]\">$vrdr</a></b> - $zinute<br/>[$siunt_data]</i><br/><br/>
";
} else {
echo "<b>&#187; <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nuo_ko2\">$nuo_ko</a></b>: $zinute<br/><i>[$siunt_data]</i><br/>
                <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inr&amp;sk=$int[3]\">Atsakyti</a><br/><br/>";
        }}      }
echo '</small></p>';

         $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "<p align=\"center\"><small>[$starto_skaicius]</small></p>";
        }
        else
        {
                echo "<p align=\"center\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm&amp;page=$starto_skaicius\">($starto_skaicius)</a></small></p>";
        }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
if ($viso_pm >= 200) {
$fff = fopen("priv_zin/$nick.txt","w+");
fwrite($fff,"");
fclose($fff);
}}
echo'<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
echo"
<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valyti_pm\">Valyti PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valyti_pm2\">Trinti issiustas PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valyti_pm3\">Trinti gautas PM</a><br/>
$lin<br/>
&#171; - issiusta, &#187; - gauta<br/>
Auto PM isvalymas kas 200 PM<br/>
Dabar yra: $viso_pm PM<br/>
$lin<br/>
<b>Rasyti PM</b><br/>
$lin<br/>
Kam:<br/></small>
<input name=\"kam\" type=\"text\" maxlength=\"30\" title=\"Nickas\" value=\"\"/><br/>
<small>Zinute:<br/></small>
<input name=\"zinute\" type=\"text\" maxlength=\"200\" title=\"Zinute\" value=\"\"/><br/>

<anchor>Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm\" method=\"post\">
    <postfield name=\"kam\" value=\"$(kam)\"/>
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor><br/>
<small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Pradzion</a></small>
    </p>";

$fp1 = fopen("$gameriai","w");
fwrite($fp1,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|-|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp1);
}

if ($id == "inr")
{
$sk = $_GET['sk'];
$arrr=file("priv_zin/$nick.txt");
for($t = 0; $t<count($arrr); $t++){
$e=explode("|",$arrr[$t]);
if ($e[3] == $sk){
        $nuo_ko = $e[0];
        $zin = stripslashes($e[1]);
        $lkk = $e[2];
        $masyw = array("@","*");
        $nuo_ko2 = str_replace($masyw,"",$nuo_ko);
echo'<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
    echo "
    <p align=\"center\"><small><b>Atsakyti</b><br/>
    $lin</small></p>
    <p align=\"left\"><small>
<u><b>$nuo_ko</b> rase</u>: $zin<br/><br/>
Atsakymas:<br/></small>
<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\" value=\"\"/><br/>

<anchor>Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm&amp;kam=$nuo_ko2\" method=\"post\">
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor></p>
<p align=\"center\"><small><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">I PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
    </p>";break;
}}

}

if ($id == "valyti_pm") {
$fff = fopen("priv_zin/$nick.txt","w+");
fwrite($fff,"");
fclose($fff);
echo"<p align=\"center\"><small><b>Isvalyta</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "valyti_pm2") {
$nv = file("priv_zin/$nick.txt");
for($pv=0; $pv < count($nv); $pv++) {
$kv = explode("|",$nv[$pv]);
                $masyw = array("@","*");
                $kv[0] = str_replace($masyw,"",$kv[0]);
if ($kv[0] == $nick){
$nv[$pv] = "";
$fpv2 = fopen("priv_zin/$nick.txt","w");
fwrite($fpv2,implode($nv));
fclose($fpv2);
 }}
echo"<p align=\"center\"><small><b>Issiustos zinutes istrintos</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}
if ($id == "valyti_pm3") {
$nv = file("priv_zin/$nick.txt");
for($pv=0; $pv < count($nv); $pv++) {
$kv = explode("|",$nv[$pv]);
                $masyw = array("@","*");
                $kv[0] = str_replace($masyw,"",$kv[0]);
if ($kv[0] != $nick){
$nv[$pv] = "";
$fpv2 = fopen("priv_zin/$nick.txt","w");
fwrite($fpv2,implode($nv));
fclose($fpv2);
 }}
echo"<p align=\"center\"><small><b>Gautos zinutes istrintos</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "siusti_pm") {
if (time() < $floo){ echo"<p align=\"center\"><small><b>Palauk kelias sekundes</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">I pm</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; }
else{
if ($_GET['kam'] == ''){ $kam = $_POST['kam']; } else { $kam = $_GET['kam']; }
$zinute = $_POST['zinute'];
$zinute = str_replace("$","$$",$zinute);
$zinute = str_replace("|","l",$zinute);
$zinute = str_replace("\n"," ",$zinute);
$zinute = htmlspecialchars($zinute);

include("smilesreplace.php");
if (substr_count($zinute, "<img src=")>5){ $bad = "Perdaug smailu!"; }

if ($lygis < 20){ $bad = "Rasyti galesi tik nuo 20lvl!"; }
if ($kam == "") { $bad = "Nenurodei kam siusti PM!"; }
if (strlen($zinute) > 350){$bad = "Zinute per ilga!"; }
if ($kam == "$nick") { $bad = "Sau siusti negalima!"; }
if ($zinute == "") { $bad = "Neparasei zinutes!"; }
if (!file_exists("us_xgrx_inf/$kam.txt")){
        $bad = "Sis zaidejas neuzregistruotas!"; }
if (!file_exists("priv_zin/$kam.txt")){
        $bad = "Sio zaidejo PM nesukurta!"; }

if ($bad == "") {

$bad = "Issiusta!";
$DATA_FILE = "priv_zin/$kam.txt";

$kiek_psgv = file($DATA_FILE);
$kiek_pas_gaveja = count($kiek_psgv);
if ($kiek_pas_gaveja > 199){
$opena = fopen($DATA_FILE, "w");
        fwrite($opena, "");
        fclose($opena); }
$kodr = rand(1,10000000000);
  $openas = fopen($DATA_FILE, "a");
        fwrite($openas, "$vrd|$zinute|$laikas|$kodr|\n");
        fclose($openas);
      $openas = fopen("priv_zin/$nick.txt", "a");
        fwrite($openas, "$nick|$zinute|$laikas|$kodr|$kam|\n");
        fclose($openas);

$NKM = file_get_contents("us_xgrx_inf/$kam.txt");
 $infa = explode("|", $NKM);
$fp1 = fopen("us_xgrx_inf/$kam.txt","w");
fwrite($fp1,"$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
fclose($fp1);

$lks = time();
$lks2 = time()+15;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$lks2|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small><b>$bad</b><br/>"; echo stripslashes($zinute);
echo"<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">I PM</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I Foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small>
    </p>"; }}

/////////////////topas///////////////////////

if ($id == "top") { echo"<p align=\"center\"><small>
<b>Top</b><br/>
$lin<br/></small></p><p align=\"left\"><small>";
if ($ka == "" or $ka == 1){ echo"Lygiu|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=1\">Lygiu</a>|"; }
if ($ka == 2){ echo"Pinigu|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=2\">Pinigu</a>|"; }
if ($ka == 3){ echo"Misiju|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=3\">Misiju</a>|"; }
if ($ka == 4){ echo"Kalvininkavimo|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=4\">Kalvininkavimo</a>|"; }
if ($ka == 5){ echo"Kasimo|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=5\">Kasimo</a>|"; }
if ($ka == 6){ echo"Zvejybos|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=6\">Zvejybos</a>|"; }
if ($ka == 7){ echo"Kronu|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=7\">Kronu</a>|"; }
if ($ka == 8){ echo"Medkirtystes|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=8\">Medkirtystes</a>|"; }
if ($ka == 9){ echo"Crafting|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=9\">Crafting</a>|"; }
if ($ka == 10){ echo"Medziokles|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=10\">Medziokles</a>|"; }
if ($ka == 11){ echo"Kepimo|"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=11\">Kepimo</a>|"; }
if ($ka == 12){ echo"Atvestu zaideju"; } else { echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=12\">Atvestu zaideju</a>"; }

echo"</small></p><p align=\"center\"><small>
$lin<br/>
</small></p>";
echo'<p align="left"><small>';

if ($ka == "" or $ka == 1){
foreach(glob("us_xgrx_inf/*.txt") as $a){
$name=str_replace(array("us_xgrx_inf/",".txt"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[0]","$name");
} }
if ($ka == 2){
foreach(glob("us_xgrx_inf/*.txt") as $a){
$name=str_replace(array("us_xgrx_inf/",".txt"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[7]","$name");
} }
if ($ka == 3){
foreach(glob("us_xgrx_inf/*.txt") as $a){
$name=str_replace(array("us_xgrx_inf/",".txt"),"",$a);
$ex=@file_get_contents("misjos/$name.txt");
$exx = substr_count($ex, "+");
$arr[]=array("$exx","$name");
} }
if ($ka == 4){
foreach(glob("miners/*.txt") as $a){
$name=str_replace(array("miners/",".txt"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[27]","$name");
} }
if ($ka == 5){
foreach(glob("miners/*.txt") as $a){
$name=str_replace(array("miners/",".txt"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[26]","$name");
} }
if ($ka == 6){
foreach(glob("fyshers/*.txt") as $a){
$name=str_replace(array("fyshers/",".txt"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[0]","$name");
} }
if ($ka == 7){
foreach(glob("kronoss/*.txt") as $a){
$name=str_replace(array("kronoss/",".txt"),"",$a);
$ex=file_get_contents($a);
$arr[]=array("$ex","$name");
} }
if ($ka == 8){
foreach(glob("kitaaainf/*.ly") as $a){
$name=str_replace(array("kitaaainf/",".ly"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[11]","$name");
} }
if ($ka == 9){
foreach(glob("kitaaainf/*.ly") as $a){
$name=str_replace(array("kitaaainf/",".ly"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[25]","$name");
} }
if ($ka == 10){
foreach(glob("kitaaainf/*.ly") as $a){
$name=str_replace(array("kitaaainf/",".ly"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[28]","$name");
} }
if ($ka == 11){
foreach(glob("kitaaainf/*.ly") as $a){
$name=str_replace(array("kitaaainf/",".ly"),"",$a);
$ex=explode("|",file_get_contents($a));
$arr[]=array("$ex[37]","$name");
} }
if ($ka == 12){
foreach(glob("atvesti/*.txt") as $a){
$name=str_replace(array("atvesti/",".txt"),"",$a);
$ex=count(file($a));
$arr[]=array("$ex","$name");
} }
rsort($arr);
for($f=0; $f<20; $f++){ $nr = $f+1;
echo"$nr) <b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ({$arr[$f][0]})<br/>"; }
echo'</small></p>';
$sk = count($arr);
echo"<p align=\"center\"><small><br/>
$lin<br/>
Viso: $sk<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a></small></p>";
}

/////////////////oNLINE///////////////////////

if ($id == "on"){
$nuskk = array_unique(file("txt/on.txt"));
sort($nuskk);
$viso_tm = count($nuskk);
$puslapiu_skaicius = 20;

echo "<p align=\"center\"><small><b>Dabar zaidzia ($viso_tm):</b><br/>
$lin<br/></small></p>";
echo'<p align="left"><small>';


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
$et=explode("|",$nuskk[$c]);
$masyw = array("@","*");
$et[0] = ereg_replace("[^a-z0-9*@]","",$et[0]);
$onlpy = str_replace($masyw,"",$et[0]);
if ($onlpy!=""){
echo"<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$et[0]</a> - $et[2]<br/>";  }}

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
echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=on&amp;page=$starto_skaicius\">($starto_skaicius)</a>"; }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
echo'</small></p>';
echo "<p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
}

/////////////////useriu paieska///////////////////////

if ($id == "paieska") { echo"<p align=\"center\"><small>
<b>Zaidejo paieska</b><br/>
$lin<br/>
Zaidejo nickas:<br/></small>
<input name=\"ko\" type=\"text\" maxlength=\"20\" title=\"useris\" value=\"\"/><br/>

<anchor>Ieskoti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie\" method=\"post\">
    <postfield name=\"ko\" value=\"$(ko)\"/>
</go></anchor><br/><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/></small>
    </p>";
}

/////////////////Apie nick///////////////////////

if ($id == "apie") {
$ka = $_GET['ka'];
if ($ka == ""){
$ka = $_POST['ko']; } else {
$ka = $ka; }
if (!file_exists("us_xgrx_inf/$ka.txt")){ echo"<p align=\"center\"><small><b>Sis zaidejas neuzregistruotas!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>"; } else {

 $ki = explode("|",file_get_contents("kitaaainf/$ka.ly"));
  $fys = explode("|",file_get_contents("fyshers/$ka.txt"));
$us = @file_get_contents("us_xgrx_inf/$ka.txt");
$infa = explode("|", $us);
$dem = "$infa[3]"+"$infa[10]";

$paskuti = round((((time()-$infa[17])+10)/60)/60,0);

$fope = @file_get_contents("miners/$ka.txt");
$mino_lvls = explode("|", $fope);

$statu = "Narys"; $vrdll = $ka;
$nvve = file("txt/mods.txt");
$kiek_nvve = count($nvve);
for($pvve=0; $pvve < $kiek_nvve; $pvve++) {
$kvve = explode("|",$nvve[$pvve]);
if ($ka == $kvve[0]){ if ($kvve[1] == "mod"){ $statu = "Moderatorius"; $vrdll = "*$ka"; }}
if ($ka == $kvve[0]){ if ($kvve[1] == "Adminas"){ $statu = "Adminas"; $vrdll = "@$ka"; }}
}

$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
$masyw = array("@","*");
$onlpy = str_replace($masyw,"",$et[0]);
if ($ka == $onlpy){
echo"<p align=\"center\"><img src=\"imgs/online.gif\" alt=\"Online\"/><br/></p>"; }}
echo'<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
if ($infa[0] < 10) { $ss = "Muzikas :)"; }
if ($infa[0] < 50) { if ($infa[0] >= 10) { $ss = "Eilinis"; }}
if ($infa[0] < 100) { if ($infa[0] >= 50) { $ss = "Karys"; }}
if ($infa[0] < 200) { if ($infa[0] >= 100) { $ss = "Geras karys"; }}
if ($infa[0] < 300) { if ($infa[0] >= 200) { $ss = "Riteris"; }}
if ($infa[0] < 400) { if ($infa[0] >= 300) { $ss = "Super riteris"; }}
if ($infa[0] >= 400) { $ss = "Herojus"; }
if (!file_exists("misjos/$ka.txt")){ $ivm = 0; } else { $ivm = substr_count(file_get_contents("misjos/$ka.txt"), "+"); }

$img1 = strtolower($infa[18]);
if (!file_exists("kronoss/$ka.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$ka.txt"); }
if ($infa[18] == "Elf"){$minp = round(($mino_lvls[26]*0.9),1);
$smip = round(($mino_lvls[27]*0.9),1);
$fip = round(($fys[0]*0.95),1);
$craf = $ki[25];
$medziokl = $ki[28];
$medk = round(($ki[11]*1.05),1);
$kep = $ki[37];
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "+5";
$kep_proc = "-0";
$jega_proc = "+5";
$gyvybess_proc = "+10";
$sugebejimas_proc = "+5";
$gynyba_proc = "-0";
$mining_lvl_proc = "-10";
$smithing_lvl_proc = "-10";
$fishing_proc = "-5"; }
if ($infa[18] == "Dark_elf"){$minp = round(($mino_lvls[26]*0.95),1);
$smip = round(($mino_lvls[27]*0.95),1);
$fip = round(($fys[0]*0.95),1);
$craf = $ki[25];
$medziokl = $ki[28];
$medk =$ki[11];
$kep = $ki[37];
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "-0";
$kep_proc = "-0";
$jega_proc = "+5";
$gyvybess_proc = "+5";
$sugebejimas_proc = "-0";
$gynyba_proc = "+5";
$mining_lvl_proc = "-5";
$smithing_lvl_proc = "-5";
$fishing_proc = "-5"; }
if ($infa[18] == "Human"){$minp = $mino_lvls[26];
$smip = $mino_lvls[27];
$fip = $fys[0];
$craf = $ki[25];
$medziokl = $ki[28];
$medk = $ki[11];
$kep = $ki[37];
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "-0";
$kep_proc = "-0";
$jega_proc = "-0";
$gyvybess_proc = "-0";
$sugebejimas_proc = "-0";
$gynyba_proc = "-0";
$mining_lvl_proc = "-0";
$smithing_lvl_proc = "-0";
$fishing_proc = "-0"; }
if ($infa[18] == "Orc"){$minp = round(($mino_lvls[26]*0.95),1);
$smip = $mino_lvls[27];
$fip = round(($fys[0]*0.95),1);
$craf = round(($ki[25]*0.90),1);
$medziokl = round(($ki[28]*1.1),1);
$medk = $ki[11];
$kep = $ki[37];
$craf_proc = "-10";
$medziokl_proc = "+10";
$medk_proc = "-0";
$kep_proc = "-0";
$jega_proc = "+10";
$gyvybess_proc = "-0";
$sugebejimas_proc = "-0";
$gynyba_proc = "-0";
$mining_lvl_proc = "-5";
$smithing_lvl_proc = "-0";
$fishing_proc = "-5"; }
if ($infa[18] == "Attacer"){$minp = $mino_lvls[26];
$smip = $mino_lvls[27];
$fip = $fys[0];
$craf = $ki[25];
$medziokl = $ki[28];
$medk = $ki[11];
$kep = $ki[37];
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "-0";
$kep_proc = "-0";
$jega_proc = "+15";
$gyvybess_proc = "-5";
$sugebejimas_proc = "-0";
$gynyba_proc = "-10";
$mining_lvl_proc = "-0";
$smithing_lvl_proc = "-0";
$fishing_proc = "-0"; }
if ($infa[18] == "Dwarf"){$minp = round(($mino_lvls[26]*1.1),1);
$smip = round(($mino_lvls[27]*1.1),1);
$fip = $fys[0];
$craf = $ki[25];
$medziokl = $ki[28];
$medk = $ki[11];
$kep = $ki[37];
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "-0";
$kep_proc = "-0";
$jega_proc = "-10";
$gyvybess_proc = "-10";
$sugebejimas_proc = "-0";
$gynyba_proc = "-0";
$mining_lvl_proc = "+10";
$smithing_lvl_proc = "+10";
$fishing_proc = "-0"; }
if ($infa[18] == "Fisher"){$minp = $mino_lvls[26];
$smip = $mino_lvls[27];
$fip = round(($fys[0]*1.2),1);
$craf = $ki[25];
$medziokl = $ki[28];
$medk = $ki[11];
$kep = round(($ki[37]*1.1),1);
$craf_proc = "-0";
$medziokl_proc = "-0";
$medk_proc = "-0";
$kep_proc = "+10";
$jega_proc = "-10";
$gyvybess_proc = "-10";
$sugebejimas_proc = "-0";
$gynyba_proc = "-10";
$mining_lvl_proc = "-0";
$smithing_lvl_proc = "-0";
$fishing_proc = "+20"; }
if ($infa[18] == "Farmer"){$minp = $mino_lvls[26];
$smip = $mino_lvls[27];
$fip = $fys[0];
$craf = $ki[25];
$medziokl = round(($ki[28]*1.05),1);
$medk = round(($ki[11]*1.05),1);
$kep = round(($ki[37]*1.1),1);
$craf_proc = "-0";
$medziokl_proc = "+5";
$medk_proc = "+5";
$kep_proc = "+10";
$jega_proc = "-5";
$gyvybess_proc = "-5";
$sugebejimas_proc = "-0";
$gynyba_proc = "-10";
$mining_lvl_proc = "-0";
$smithing_lvl_proc = "-0";
$fishing_proc = "-0"; }
if ($infa[18] == "Crafter"){$minp = $mino_lvls[26];
$smip = $mino_lvls[27];
$fip = $fys[0];
$craf = round(($ki[25]*1.2),1);
$medziokl = $ki[28];
$medk = round(($ki[11]*1.05),1);
$kep =$ki[37];
$craf_proc = "+20";
$medziokl_proc = "-0";
$medk_proc = "+5";
$kep_proc = "-0";
$jega_proc = "-10";
$gyvybess_proc = "-5";
$sugebejimas_proc = "-0";
$gynyba_proc = "-10";
$mining_lvl_proc = "-0";
$smithing_lvl_proc = "-0";
$fishing_proc = "-0"; }

if ($nick != $ka){
echo"<p align=\"left\"><small>
<b>Nick</b>: $vrdll ($statu)<br/>
<b>Lygis</b>: $infa[0]<br/>
<b>Rangas</b>: $ss<br/>
<b>Rase</b>: $infa[18]<br/>
<img src=\"imgs/$img1.gif\" alt=\"prev\"/><br/>
<b>Kronos</b>: $kronu<br/>
<b>Pinigai</b>: $infa[7]<br/>
<b>Kasimas</b>: $minp ($mino_lvls[26] $mining_lvl_proc%)<br/>
<b>Kalvininkavimas</b>: $smip ($mino_lvls[27] $smithing_lvl_proc%)<br/>
<b>Zvejyba</b>: $fip ($fys[0] $fishing_proc%)<br/>
<b>Medkirtyste</b>: $medk ($ki[11] $medk_proc%)<br/>
<b>Crafting</b>: $craf ($ki[25] $craf_proc%)<br/>
<b>Medziokle</b>: $medziokl ($ki[28] $medziokl_proc%)<br/>
<b>Kepimas</b>: $kep ($ki[37] $kep_proc%)<br/>
<b>Ivykdyta misiju</b>: $ivm / 50<br/>
<b>Laimeta kovu</b>: $infa[8]<br/>
<b>Pralaimeta kovu</b>: $infa[9]<br/>";
$sa = "";
$na = "";
$op = glob("klaniukos/*.ta");
for ($i = 0; $i < count($op); $i++){
$dfd = file($op[$i]);
for($t=0; $t<count($dfd); $t++){
$saju = str_replace(array("klaniukos/",".ta"),"",$op[$i]);
$fdp = explode("|",$dfd[$t]);
if ($ka == $fdp[0] && $t==0){ if ($sa==""){ $sa="$saju"; } else {$sa="$sa, $saju"; }}
if ($ka == $fdp[0] && $t>0){ if ($na==""){ $na="$saju"; } else {$na="$na, $saju"; } }

}}
if ($sa!=""){ echo"<b>Ikure pulka</b>: $sa<br/>"; }
if ($na!=""){ echo"<b>Priklauso pulkui</b>: $na<br/>"; }
echo"<b>Paskutinis veiksmas pries</b>: $paskuti h<br/>
<b>Uzregistruotas</b>: $infa[12]<br/>
</small></p>
<p align=\"center\"><small>$lin<br/></small></p>";
if ($stat == "mod"){ echo"<p align=\"center\"><small>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=pervesti&amp;kam=$ka\">Pervesti pinigu</a><br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban&amp;kam=$infa[2]\">Baninti</a><br/>
</small></p>"; }
echo"<p align=\"center\"><small>
<b>Siusti PM</b><br/>
Zinute:<br/></small>
<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\"/><br/>
<anchor>Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm&amp;kam=$ka\" method=\"post\">
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor>
<small><br/>$lin<br/><b>Pervesti kronu (kiekis, pvz: 2 ar 0.1):<br/></b></small>
<input name=\"kiek\" type=\"text\" maxlength=\"5\" title=\"Kiek\"/><br/>
<anchor>Pervesti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_kronu&amp;kam=$ka\" method=\"post\">
<postfield name=\"kiek\" value=\"$(kiek)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}
if ($nick == $ka){
$img = strtolower($rase);
if (!file_exists("kronoss/$ka.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$ka.txt"); }

echo"<p align=\"left\"><small>
<b>Nick</b>: $vrdll ($statu)<br/>
<b>Lygis</b>: $lygis<br/>
<b>Turi XP</b>: $exp<br/>
<b>Lygis pakils kai tures</b>: $left XP<br/>
<b>Rangas</b>: $ss<br/>
<b>Rase</b>: $rase<br/>
<img src=\"imgs/$img.gif\" alt=\"prev\"/><br/>
 &nbsp; <b>Gyvybiu lygis</b>: $gyvybess2 ($gyvybess $gyvybess_proc%)<br/>
 &nbsp; <b>Jega</b>: $jega2 ($jega $jega_proc%)<br/>
 &nbsp; <b>Patirtis</b>: $sugebejimas2 ($sugebejimas $sugebejimas_proc%)<br/>
 &nbsp; <b>Gynyba</b>: $gynyba2 ($gynyba $gynyba_proc%)<br/>
 &nbsp; <b>Kasimas</b>: $mining_lvl2 ($mining_lvl $mining_lvl_proc%)<br/>
 &nbsp; <b>Kalvininkavimas</b>: $smithing_lvl2 ($smithing_lvl $smithing_lvl_proc%)<br/>
 &nbsp; <b>Zvejyba</b>: $fishing2 ($fishing $fishing_proc%)<br/>
 &nbsp; <b>Medkirtyste</b>: $medk ($ki[11] $medk_proc%)<br/>
 &nbsp; <b>Crafting</b>: $craf ($ki[25] $craf_proc%)<br/>
 &nbsp; <b>Medziokle</b>: $medziokl ($ki[28] $medziokl_proc%)<br/>
 &nbsp; <b>Kepimas</b>: $kep ($ki[37] $kep_proc%)<br/>
<b>Gyvybes</b>: $gyvybes/$gyvybess2<br/> ";
$det = round(($gyvybes*10)/$gyvybess2,0);
if ($det == 0){ echo"[----------]"; }
if ($det == 1){ echo"[*---------]"; }
if ($det == 2){ echo"[**--------]"; }
if ($det == 3){ echo"[***-------]"; }
if ($det == 4){ echo"[****------]"; }
if ($det == 5){ echo"[*****-----]"; }
if ($det == 6){ echo"[******----]"; }
if ($det == 7){ echo"[*******---]"; }
if ($det == 8){ echo"[********--]"; }
if ($det == 9){ echo"[*********-]"; }
if ($det == 10){ echo"[**********]"; }
echo"<br/>
<b>Damage</b>: $damage ($jega2+$ginklo_att)<br/>
<b>Defence</b>: $defense ($gynyba2+$sarvu_prot+$dari[53]+$dari[55]+$dari[57]+$dari[59])<br/>
<b>Kronos</b>: $kronu<br/>
<b>Pinigai</b>: $pinigai<br/>
<b>Ivykdyta misiju</b>: $ivm / 50<br/>
<b>Laimeta kovu</b>: $wins<br/>
<b>Pralaimeta kovu</b>: $loses<br/>";
$sa = "";
$na = "";
$op = glob("klaniukos/*.ta");
for ($i = 0; $i < count($op); $i++){
$dfd = file($op[$i]);
for($t=0; $t<count($dfd); $t++){
$saju = str_replace(array("klaniukos/",".ta"),"",$op[$i]);
$fdp = explode("|",$dfd[$t]);
if ($ka == $fdp[0] && $t==0){ if ($sa==""){ $sa="$saju"; } else {$sa="$sa, $saju"; }}
if ($ka == $fdp[0] && $t>0){ if ($na==""){ $na="$saju"; } else {$na="$na, $saju"; } }

}}
if ($sa!=""){ echo"<b>Ikure pulka</b>: $sa<br/>"; }
if ($na!=""){ echo"<b>Priklauso pulkui</b>: $na<br/>"; }
echo"<b>Paskutinis veiksmas pries</b>: $paskuti h<br/>
<b>Uzregistruotas</b>: $uzregintas<br/>
</small></p>
<p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}}}

/////////////////keisti pass///////////////////////

if ($id == "keisti_pass"){ echo"<p align=\"center\"><small><b>
Slaptazodzio keitimas</b><br/>
Nenaudokit spec. simboliu, jie panaikinami<br/>

$lin<br/>
Slaptazodis<br/></small>
<input name=\"pass1\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
<small>Pakartoti slaptazodi<br/></small>
<input name=\"pass2\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
<anchor>Keisti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=keiciu_pass\" method=\"post\">
    <postfield name=\"pass1\" value=\"$(pass1)\"/>
<postfield name=\"pass2\" value=\"$(pass2)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=main\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
    </p>"; }

if ($id == "keiciu_pass") {
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$pass1 = ereg_replace("[^A-Za-z0-9_-]","",$pass1);
$pass2 = ereg_replace("[^A-Za-z0-9_-]","",$pass2);

if ($pass1 == "") { $er = "Neivestas pirmas slaptazodis"; }
if ($pass2 == "") { $er = "Neivestas antrasis slaptazodis"; }
if ($pass1 != $pass2) { $er = "Slaptazodziai nesutampa!"; }

if ($er == ""){ $er = "Slaptazodis pakeistas!<br/>Jei esi susiejes zyma tai turi ir ja pakeisti, nes jungiantis su senaja rasys kad blogas slaptazodis";
$pass2 = md5($pass2);
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$pass2|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
}
echo"<p align=\"center\"><small><b>$er<br/></b>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass2&amp;id=keisti_pass\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if ($id == "use_points"){
if ($points > 0){ echo"<p align=\"center\"><small><b>Turi <u>$points</u> nepanaudotus lygio taskus</b><br/>
Pasirink koki lygi pakelsi<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=jega\">+1 Jegos</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=gyvybes\">+1 Gyvybiu</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=gynyba\">+1 Gynybos</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=patirtis\">+1 Patirties</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; } else { echo"<p align=\"center\"><small><b>Nu nu, ka cia sugalvojai?! Visus lygio taskus jau isnaudojai</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; }
}

if ($id == "use_points2"){
if ($points > 0){ echo"<p align=\"center\"><small><b>Atlikta</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
$ka = $_GET['ka'];
if ($ka == "jega"){ $jega = $jega+1; }
if ($ka == "gyvybes"){ $gyvybess = $gyvybess+1; }
if ($ka == "gynyba"){ $gynyba = $gynyba+1; }
if ($ka == "patirtis"){ $sugebejimas = $sugebejimas+1; }
$points = $points-1;
$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
} else { echo"<p align=\"center\"><small><b>Nu nu, ka cia sugalvojai?! Visus lygio taskus jau isnaudojai</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>"; }
}

if ($id == "pokalbiai"){//<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">NON-STOP sale ($non_on)</a><br/>
$nnn=file("txt/on.txt");
$kiek=count($nnn);
for($i=0; $i<$kiek; $i++) {
$et=explode("|",$nnn[$i]);
if ($et[2]=="Pokalbiuose"){ $pok[] = $et[0]; }
if ($et[2]=="Viktorinoje"){ $vik[] = $et[0]; }
if ($et[2]=="NON-STOP"){ $non[] = $et[0]; }}
$pok_on = count($pok);
$vikte_on = count($vik);
$non_on = count($non);
echo"
<p align=\"center\"><small>
<b>Pokalbiu namai</b><br/>
$lin<br/>
<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">Pokalbiu kambarys ($pok_on)</a><br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorinos sale ($vikte_on)</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>"; }

if ($id == "siusti_kronu"){
if (!file_exists("kronoss/$nick.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$nick.txt"); }
$kiek=ereg_replace("[^0-9.]","",$_POST['kiek']);
$hex=explode(".",$kiek);
if (count($hex)>2){ $bl = "Prasome ivesti norima kieki!"; }
if (strlen($hex[1]) > 2){ $bl = "Prasome ivesti norima kieki!"; }
if ($kam == $nick){ $bl = "Sau? pz gudras..."; }
if (!file_exists("us_xgrx_inf/$kam.txt")){ $bl = "Sis zaidejas neregistruotas!"; }
if (empty($kiek)){ $bl = "Neivestas kiekis!"; }
if (empty($kam)){ $bl = "Sis zaidejas neregistruotas!"; }
if ($kronu < $kiek){ $bl = "Tiek kronu neturi!"; }

if ($bl == ''){
$bl = "Pervesta ;)";
$kronu = $kronu-$kiek;
$fp = fopen("kronoss/$nick.txt","w");
fwrite($fp,"$kronu");
fclose($fp);
if (!file_exists("kronoss/$kam.txt")){ $kron = 0; } else { $kron = file_get_contents("kronoss/$kam.txt"); }
$kron = $kron+$kiek;
$fp = fopen("kronoss/$kam.txt","w+");
fwrite($fp,"$kron");
fclose($fp);
@chmod("kronoss/$kam.txt",0777);
$atidaryma = fopen("priv_zin/$kam.txt", "a");
        fwrite($atidaryma, "@SISTEMA|$vrd pervede tau $kiek kronu||\n");
        fclose($atidaryma);
$cyks2 = explode("|",file_get_contents("us_xgrx_inf/$kam.txt"));
 $fop = fopen("us_xgrx_inf/$kam.txt", "w");
        fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
        fclose($fop);
}
echo"<p align=\"center\"><small><b>$bl</b><br/>
$lin<br/>
<a href=\"zaisti.php?id=apie&amp;nick=$nick&amp;pass=$pass&amp;ka=$kam\">Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/></small></p>";
}


if ($id == "roundai") { echo"<p align=\"center\"><small>
<b>Roundai</b><br/>$lin<br/>Roundas baigsis, kai kasnors uzmus lyyygi<br/><b>TOP:</b><br/></small></p><p align=\"left\"><small>";
$zinutis = "";
$a = glob("lyyygiz/*.txt");
for ($i = 0; $i < count($a); $i++){
$b = file_get_contents($a[$i]);
$name = str_replace(array("lyyygiz/",".txt"),"",$a[$i]);
$arr[]=array("$b","$name"); }
sort($arr);
for($f=0; $f<10; $f++){ $nr = $f+1;
echo"$nr) <b><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a></b> ({$arr[$f][0]}/100000)<br/>"; }

 $rou = explode("|",file_get_contents("txt/round.txt"));
echo"<br/>";
if ($rou[0] == 0){
 echo"Kolkas nesibaige ne vienas roundas<br/>"; } else {
echo"Jau ivyko $rou[0] roundai<br/></b>";
$laim = explode("!",$rou[1]);
$nuo = explode("!",$rou[2]);
$iki = explode("!",$rou[3]);
for ($i = 0; $i < $rou; $i++){
$ra = $i+1;
echo"<u>$ra</u> roundas vyko nuo $nuo[$i] iki $iki[$i], ji laimejo $laim[$i]<br/><br/>"; }
}
echo"</small></p><p align=\"center\"><small>$lin<br/>Roundo laimetojas gauna 30 kronu<br/>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/></small></p>";
}

if ($id == "rases"){
$a = glob("us_xgrx_inf/*.txt");
for ($i = 0; $i<count($a); $i++){
$b = explode("|",file_get_contents($a[$i]));
if ($b[18]=="Elf"){ $elfu[] = $i; }
if ($b[18]=="Dark_elf"){ $dark[] = $i; }
if ($b[18]=="Human"){ $hum[] = $i; }
if ($b[18]=="Orc"){ $orcu[] = $i; }
if ($b[18]=="Attacer"){ $attac[] = $i; }
if ($b[18]=="Dwarf"){ $dwarfu[] = $i; }
if ($b[18]=="Fisher"){ $fishu[] = $i; }
if ($b[18]=="Farmer"){ $farm[] = $i; }
if ($b[18]=="Crafter"){ $cra[] = $i; }
}
$u1 = count($elfu);
$u2 = count($dark);
$u3 = count($hum);
$u4 = count($attac);
$u5 = count($dwarfu);
$u6 = count($fishu);
$u7 = count($orcu);
$u8 = count($farm);
$u9 = count($cra);
$pr1 = round(($u1*100)/count($a),1);
$pr2 = round(($u2*100)/count($a),1);
$pr3 = round(($u3*100)/count($a),1);
$pr4 = round(($u4*100)/count($a),1);
$pr5 = round(($u5*100)/count($a),1);
$pr6 = round(($u6*100)/count($a),1);
$pr7 = round(($u7*100)/count($a),1);
$pr8 = round(($u8*100)/count($a),1);
$pr9 = round(($u9*100)/count($a),1);

$n = glob("darinfos/*.ly");
for ($i = 0; $i<count($a); $i++){
$b = explode("|",file_get_contents($n[$i]));
if ($b[0]=="+"){ $isr[] = $i; }}
echo"<p align=\"center\"><small><b>Statistika</b><br/>$lin<br/></small></p>
<p align=\"left\"><small><b>Is viso zmoniu:</b> "; echo count($a); echo"<br/>
<b>Is ju isrinktuju:</b> "; echo count($isr); echo"<br/>
<br/>
<b>Rasiu statistika</b><br/>
Elf: <b>$u1 [$pr1 %]</b><br/>
<img src=\"gd.php?ka=$pr1\" alt=\"juosta\"/><br/>
Dark elf: <b>$u2 [$pr2 %]</b><br/>
<img src=\"gd.php?ka=$pr2\" alt=\"juosta\"/><br/>
Human: <b>$u3 [$pr3 %]</b><br/>
<img src=\"gd.php?ka=$pr3\" alt=\"juosta\"/><br/>
Orc: <b>$u7 [$pr7 %]</b><br/>
<img src=\"gd.php?ka=$pr7\" alt=\"juosta\"/><br/>
Attacer: <b>$u4 [$pr4 %]</b><br/>
<img src=\"gd.php?ka=$pr4\" alt=\"juosta\"/><br/>
Dwarf: <b>$u5 [$pr5 %]</b><br/>
<img src=\"gd.php?ka=$pr5\" alt=\"juosta\"/><br/>
Fisher: <b>$u6 [$pr6 %]</b><br/>
<img src=\"gd.php?ka=$pr6\" alt=\"juosta\"/><br/>
Farmer: <b>$u8 [$pr8 %]</b><br/>
<img src=\"gd.php?ka=$pr8\" alt=\"juosta\"/><br/>
Crafter: <b>$u9 [$pr9 %]</b><br/>
<img src=\"gd.php?ka=$pr9\" alt=\"juosta\"/><br/>
</small></p><p align=\"center\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Atgal</a><br/></small></p>";
}

if ($id == "smiles"){
echo"<p align=\"center\">
<small><b>Smiles (1/2)</b><br/>
$lin<br/></small></p>
<p align=\"left\">
:) <img src=\"smiles/1.gif\" alt=\":)\"/><br/>
:D <img src=\"smiles/2.gif\" alt=\":D\"/><br/>
=) <img src=\"smiles/3.gif\" alt=\"=)\"/><br/>
:P <img src=\"smiles/4.gif\" alt=\":P\"/><br/>
:( <img src=\"smiles/5.gif\" alt=\":(\"/><br/>
:* <img src=\"smiles/6.gif\" alt=\":*\"/><br/>
:sex <img src=\"smiles/7.gif\" alt=\":sex\"/><br/>
:fuck1 <img src=\"smiles/8.gif\" alt=\":fuck1\"/><br/>
:ne1 <img src=\"smiles/9.gif\" alt=\":ne1\"/><br/>
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
:geda <img src=\"smiles/22.gif\" alt=\":geda\"/><br/>
:mojuoja","<img src=\"smiles/23.gif\" alt=\":mojuoja\"/><br/>
:cry <img src=\"smiles/24.gif\" alt=\":cry\"/><br/>
:pasikeles <img src=\"smiles/25.gif\" alt=\":pasikeles\"/><br/>
:? <img src=\"smiles/26.gif\" alt=\":?\"/><br/>
:ploja <img src=\"smiles/27.gif\" alt=\":ploja\"/><br/>
:flood <img src=\"smiles/28.gif\" alt=\":flood\"/><br/>
:ha <img src=\"smiles/29.gif\" alt=\":ha\"/><br/>
:yay <img src=\"smiles/30.gif\" alt=\":yay\"/><br/>
:yes <img src=\"smiles/31.gif\" alt=\":yes\"/><br/>
:aga <img src=\"smiles/32.gif\" alt=\":aga\"/><br/>
:ciki <img src=\"smiles/33.gif\" alt=\":ciki\"/><br/>
:liudnas <img src=\"smiles/34.gif\" alt=\":liudnas\"/><br/>
:graso <img src=\"smiles/35.gif\" alt=\":graso\"/><br/>
:/ <img src=\"smiles/36.gif\" alt=\":/\"/><br/>
:cool <img src=\"smiles/37.gif\" alt=\":cool\"/><br/>
:gun <img src=\"smiles/38.gif\" alt=\":gun\"/><br/>
:Z <img src=\"smiles/39.gif\" alt=\":Z\"/><br/>
:roze <img src=\"smiles/40.gif\" alt=\":roze\"/><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles2\">&gt;&gt;&gt;Kitas puslapis&gt;&gt;&gt;</a><br/>
</p><p align=\"center\">
<small>$lin<br/><a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a></small></p>";
}

if ($id == "smiles2"){
echo"<p align=\"center\">
<small><b>Smiles (2/2)</b><br/>
$lin<br/></small></p>
<p align=\"left\">
:yee <img src=\"smiles/41.gif\" alt=\":yee\"/><br/>
:welcome <img src=\"smiles/42.gif\" alt=\":welcome\"/><br/>
:@ <img src=\"smiles/43.gif\" alt=\":@\"/><br/>
:fight <img src=\"smiles/44.gif\" alt=\" :fight\"/><br/>
:vemiu <img src=\"smiles/45.gif\" alt=\" :vemiu\"/><br/>
:stiprus <img src=\"smiles/46.gif\" alt=\" :stiprus\"/><br/>
:hug <img src=\"smiles/47.gif\" alt=\" :hug\"/><br/>
:kuklus <img src=\"smiles/48.gif\" alt=\" :kuklus\"/><br/>
:nuobodu <img src=\"smiles/49.gif\" alt=\" :nuobodu\"/><br/>
3/ <img src=\"smiles/50.gif\" alt=\" 3/\"/><br/>
:devil <img src=\"smiles/51.gif\" alt=\" :devil\"/><br/>
:smoke <img src=\"smiles/52.gif\" alt=\" :smoke\"/><br/>
:nono <img src=\"smiles/53.gif\" alt=\" :nono\"/><br/>
:kvaily <img src=\"smiles/54.gif\" alt=\" :kvaily\"/><br/>
:fuck2 <img src=\"smiles/55.gif\" alt=\" :fuck2\"/><br/>
:sirdis <img src=\"smiles/56.gif\" alt=\" :sirdis\"/><br/>
:nustebes <img src=\"smiles/57.gif\" alt=\" :nustebes\"/><br/>
:kiss <img src=\"smiles/58.gif\" alt=\" :kiss\"/><br/>
=/ <img src=\"smiles/59.gif\" alt=\" =/\"/><br/>
:ne2 <img src=\"smiles/60.gif\" alt=\" :ne2\"/><br/>
:neas <img src=\"smiles/61.gif\" alt=\" :neas\"/><br/>
:skanu <img src=\"smiles/62.gif\" alt=\" :skanu\"/><br/>
:ok <img src=\"smiles/63.gif\" alt=\" :ok\"/><br/>
:svajingas <img src=\"smiles/64.gif\" alt=\" :svajingas\"/><br/>
:iesko <img src=\"smiles/65.gif\" alt=\" :iesko\"/><br/>
:sorry <img src=\"smiles/66.gif\" alt=\" :sorry\"/><br/>
:stink <img src=\"smiles/67.gif\" alt=\" :stink\"/><br/>
:love <img src=\"smiles/68.gif\" alt=\" :love\"/><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles\">&lt;&lt;&lt;ankstesnis puslapis&lt;&lt;&lt;</a><br/>
</p><p align=\"center\">
<small>$lin<br/><a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a></small></p>";
}

if ($id == "atv"){
echo'<p align="center">';
if (!file_exists("atvesti/$nick.txt")){ $atvede = 0; } else { $atvede=count(file("atvesti/$nick.txt")); }
echo"<small><b>Lankytoju atvedimas</b><br/>
$lin<br/>
Uz kiekviena atvesta unikalu lankytoja iskart gaunate 0.2 kronos<br/>
Jums reikia reklamuoti sia nuoroda:<br/><b>http://artixas.puslapiai.lt/index.php?f=$nick</b><br/>
Jau atvedete lankytoju:<br/><b>$atvede</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I Pradzia</a><br/></small>
";
echo'</p>';
}

echo"
</card>
</wml>";

?>
