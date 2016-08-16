<?php

$narsykleee = $REMOTE_ADDR;
$narsykle_mano = $HTTP_USER_AGENT;

/////////////////Jungimasis///////////////////////
$page = ereg_replace("[^0-9]","",$_GET['page']);
$id = ereg_replace("[^A-Za-z0-9_]","",$_GET['id']);
$nick = ereg_replace("[^A-Za-z0-9]","",$_GET['nick']);
$pass = ereg_replace("[^A-Za-z0-9]","",$_GET['pass']);

$admin = "spawn";
$dyra = "us_xgrx_inf147258369";
$geimeriai = "$dyra/$nick.txt";

    $nuskaitymas = @file_get_contents($geimeriai);
    $info = explode("|", $nuskaitymas);

if ($pass != $info[1]){
        $klaida = "Neteisingas slaptazodis!"; }
if ($pass == ""){
        $klaida = "Jus neivedete savo slaptazodzio!"; }
if (!file_exists($geimeriai)){
        $klaida = "Sis zaidejas neuzregistruotas!"; }
if ($nick == ""){
        $klaida = "Neivedete nicko!"; }
if ($info[18] == "Human"){ $a = "aaa"; }
if ($info[18] == "Elf"){ $a = "aaa"; }
if ($info[18] == "Dark_elf"){ $a = "aaa"; }
if ($info[18] == "Attacer"){ $a = "aaa"; }
if ($info[18] == "Orc"){ $a = "aaa"; }
if ($info[18] == "Dwarf"){ $a = "aaa"; }
if ($info[18] == "Fisher"){ $a = "aaa"; }
if ($info[18] == "Farmer"){ $a = "aaa"; }
if ($info[18] == "Crafter"){ $a = "aaa"; }
if ($a == ""){
    $klaida = "Blogi duomenys!";
    }
if ($klaida != ""){
        print "
<p align=\"center\"><small><b>$klaida<br/>-----</b><br/>
<a href=\"index.php?id=log\">Atgal</a></small></p>
                </card>
                </wml>";
                exit;
         }

$nlp2 = file("txt/nick_bans.txt");
$kiek_nlp2 = count($nlp2);
for($l2=0; $l2 < $kiek_nlp2; $l2++) {
$koo2 = explode("|",$nlp2[$l2]);
$uzb_lik2 = $koo2[1]-time();
$uzb_lik22 = round(($uzb_lik2)/60,0);
if ($nick == "$koo2[0]"){
if (time() < $koo2[1]){
echo"<p align=\"center\"><small><b>Tu uzbanintas.<br/></b>
<b>Del:</b> $koo2[2]<br/>
<b>Tave uzbanino:</b> $koo2[3]<br/>
<b>Banas dar tesis:</b> $uzb_lik22 minutes<br/>
Noredami nusiimti ban siuskite sms zinute numeriu <b>1679</b> su textu <b>LGZS3 $nick unban</b><br/>
Kaina <b>3LT</b>
</small></p>
</card></wml>";
exit; }}}

/////////////////configas///////////////////////

$id = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['id']);
$nick = ereg_replace("[^A-Za-z0-9]","",$_GET['nick']);
$pass = ereg_replace("[^A-Za-z0-9]","",$_GET['pass']);
$vs = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['vs']);
$kas = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kas']);
$page = ereg_replace("[^0-9]","",$_GET['page']);
$sk = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['sk']);
$ka = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['ka']);
$kam = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kam']);
$kd = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kd']);
$te = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['te']);
$kj = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kj']);
$da = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['da']);
$kan = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['kan']);
$mo = ereg_replace("[^A-Za-z0-9@*-? .,!_]","",$_GET['mo']);


$lin = "---------";
$dira = "us_xgrx_inf147258369";
$gameriai = "$dira/$nick.txt";
$akademijoslaikas = time() + 20800;
$pamokulaikas = time() + 27000;
$akademijosfailas = file_get_contents("txt/akademijoslaikas.txt");
$pamokufailas = file_get_contents("txt/pamokulaikas.txt");
$likolaiko = round(($akademijosfailas-time())/60,0); 
$likolaiko2 = round(($pamokufailas-time())/60,0); 

    $nusk = @file_get_contents($gameriai);
    $inf = explode("|", $nusk);
$jega = $inf[3];
$gyvybes = $inf[4];
$gyvybess = $inf[5];
$sugebejimas = $inf[6];
$pinigai = $inf[7];
$wins = $inf[8];
$loses = $inf[9];
$ginklo_att = $inf[10];
$ginklas = $inf[11];
$uzregintas = $inf[12];
$pask_prisijungimas = $inf[13];
$p = $inf[14];
$points = $inf[15];
$gynyba = $inf[16];
$floo = $inf[17];
$rase = $inf[18];
$exp = $inf[19];
$ex_left = $inf[20];
$aps_kodas = $inf[21];
$sarvu_prot = $inf[22];
$sarvai = $inf[23];


if ($pinigai > 1000000000){ $pinigai = 1000000000; }

$tim = time()+10;

$stat = "Narys"; $vrd = "$nick";
$nvve = file("txt/mods.txt");
$kiek_nvve = count($nvve);
for($pvve=0; $pvve < $kiek_nvve; $pvve++) {
$kvve = explode("|",$nvve[$pvve]);
if ($nick == $kvve[0]){
$stat = "mod";
if ($kvve[1] == "mod"){
$vrd = "*$nick";
}
if ($kvve[1] == "Adminas"){
$vrd = "@$nick"; }
}}
$lygis = 99999; 
$end = 99999; 
$q = 1.1;
for ($r=1; $r<99999; $r++){ 
if ($r==1){ $q = 1.1; } else { $q = $q*1.1; }

if ($q >= $exp/10 && $end != $r){ $lygis = $r; $end = $r+1; $buve = $q;}
if ($end==$r){ $left = round($buve*10,1); break; }
}

$miners = "miners/$nick.txt";
    $nuskt = @file_get_contents($miners);
    $in = explode("|", $nuskt);
$iron_ores = $in[0];
$zalvario_ores = $in[1];
$sidabro_ores = $in[2];
$aukso_ores = $in[3];
$iron_baru = $in[4];
$zalvario_baru = $in[5];
$sidabro_baru = $in[6];
$aukso_baru = $in[7];
$bronze_swordu = $in[8];
$spyziaus_swordu = $in[9];
$zalvario_swordu = $in[10];
$vario_swordu = $in[11];
$gelezies_swordu = $in[12];
$plieno_swordu = $in[13];
$sidabro_swordu = $in[14];
$aukso_swordu = $in[15];
$dragon_swordu = $in[16];
$bronze_sarvu = $in[17];
$spyziaus_sarvu = $in[18];
$zalvario_sarvu = $in[19];
$vario_sarvu = $in[20];
$gelezies_sarvu = $in[21];
$plieno_sarvu = $in[22];
$sidabro_sarvu = $in[23];
$aukso_sarvu = $in[24];
$dragon_sarvu = $in[25];
	$mining_lvl = $in[26];
	$smithing_lvl = $in[27];

    $nusktr = @file_get_contents("fyshers/$nick.txt");
    $fis = explode("|", $nusktr);
$fishing = $fis[0];
$slieku = $fis[1];
$teslos = $fis[2];
$karosu = $fis[3];
$eseriu = $fis[4];
$lynu = $fis[5];
$raudziu = $fis[6];
$karpiu = $fis[7];
$starkiu = $fis[8];
$lydeku = $fis[9];

if ($rase == "Elf"){
$jega2 = round(($jega*1.05),1);
$gyvybess2 = round(($gyvybess*1.1),1);
$sugebejimas2 = round(($sugebejimas*1.05),1);
$gynyba2 = $gynyba;
$mining_lvl2 = round(($mining_lvl*0.9),1);
$smithing_lvl2 = round(($smithing_lvl*0.9),1);
$fishing2 = round(($fishing*0.95),1);  }
if ($rase == "Dark_elf"){
$jega2 = round(($jega*1.05),1);
$gyvybess2 = round(($gyvybess*1.05),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*1.05),1);
$mining_lvl2 = round(($mining_lvl*0.95),1);
$smithing_lvl2 = round(($smithing_lvl*0.95),1);
$fishing2 = round(($fishing*0.95),1); }
if ($rase == "Human"){
$jega2 = $jega;
$gyvybess2 = $gyvybess;
$sugebejimas2 = $sugebejimas;
$gynyba2 = $gynyba;
$mining_lvl2 = $mining_lvl;
$smithing_lvl2 = $smithing_lvl;
$fishing2 = $fishing; }
if ($rase == "Orc"){
$jega2 = round(($jega*1.1),1);
$gyvybess2 = $gyvybess;
$sugebejimas2 = $sugebejimas;
$gynyba2 = $gynyba;
$mining_lvl2 = round(($mining_lvl*0.95),1);
$smithing_lvl2 = $smithing_lvl;
$fishing2 = round(($fishing*0.95),1); }
if ($rase == "Attacer"){
$jega2 = round(($jega*1.15),1);
$gyvybess2 = round(($gyvybess*0.95),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.9),1);
$mining_lvl2 = $mining_lvl;
$smithing_lvl2 = $smithing_lvl;
$fishing2 = $fishing; }
if ($rase == "Dwarf"){
$jega2 = round(($jega*0.9),1);
$gyvybess2 = round(($gyvybess*0.9),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = $gynyba;
$mining_lvl2 = round(($mining_lvl*1.1),1);
$smithing_lvl2 = round(($smithing_lvl*1.1),1);
$fishing2 = $fishing; }
if ($rase == "Fisher"){
$jega2 = round(($jega*0.9),1);
$gyvybess2 = round(($gyvybess*0.9),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.9),1);
$mining_lvl2 = $mining_lvl;
$smithing_lvl2 = $smithing_lvl;
$fishing2 = round(($fishing*1.2),1); }
if ($rase == "Farmer"){
$jega2 = round(($jega*0.95),1);
$gyvybess2 = round(($gyvybess*0.95),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.9),1);
$mining_lvl2 = $mining_lvl;
$smithing_lvl2 = $smithing_lvl;
$fishing2 = $fishing; }
if ($rase == "Crafter"){
$jega2 = round(($jega*0.9),1);
$gyvybess2 = round(($gyvybess*0.95),1);
$sugebejimas2 = $sugebejimas;
$gynyba2 = round(($gynyba*0.9),1);
$mining_lvl2 = $mining_lvl;
$smithing_lvl2 = $smithing_lvl;
$fishing2 = $fishing; }

include("icludekitainf/nuskait2.php");

$damage = "$jega2"+"$ginklo_att";
$defense = $gynyba2+$sarvu_prot+$dari[53]+$dari[55]+$dari[57]+$dari[59];

$pask_prisijungimas = time();

/////Dienos top/////
 if (!file_exists("xp-top/$nick.txt"))
{
            $fop = fopen("xp-top/$nick.txt", "w+");
            fwrite($fop, "$exp|0|$nick|");
  fclose($fop);
}
$expam = file_get_contents("xp-top/$nick.txt");
$timfa = explode("|", $expam);
if ($timfa[0] != $exp)
{
            $fopp = fopen("xp-top/$nick.txt", "w");
            fwrite($fopp, "$timfa[0]|$exp|$nick|");
  fclose($fopp);
}

  $likol = @file_get_contents("txt/dienos_top_time.txt");
  $likoll = round(($likol-time())/60,0);
  $mmmm2 = explode("-",$likoll);

if ($likoll == "-$mmmm2[1]")
{

            foreach (glob("xp-top/*.txt") as $a)
        {
            $name2 = str_replace(array("xp-top/", ".txt"), "", $a);
            $exx = explode("|", file_get_contents($a));
$byrkaaa = $exx[1]-$exx[0];
if ($exx[1] == 0)
{ $byrkaaa = 0; }
$byrkat = round($byrkaaa,1);
            $arr[] = array("$byrkat", "$name2");
}
   rsort($arr);

    for ($k = 0; $k < 5; $k++)
{
            if (!file_exists("kronoss/{$arr[$k][1]}.txt"))
            {
                $krou = 0;
            }
            else
            {
                $krou = file_get_contents("kronoss/{$arr[$k][1]}.txt");
            }
            if ($k == '0')
            {
                $krp = '10';
            }
            $fop = fopen("kronoss/{$arr[$k][1]}.txt", "w+");
            fwrite($fop, $krou + $krp);
            fclose($fop);
            chmod("kronoss/{$arr[$k][1]}.txt", 0777);
        }


    $dirraa = glob("xp-top/*");        for($itt=0; $itt<count($dirraa); $itt++)
{
@unlink("$dirraa[$itt]");
}
$laiko = time()+24*60*60;
   $fop = fopen("txt/dienos_top_time.txt", "w+");
   fwrite($fop, $laiko);
   fclose($fop);
 }

/////////////////Online///////////////////////

$timl = 210+time();
$time = time();
$f = "txt/on.txt";
$nesk = file($f);
$sk = count($nesk);
$inn = $vrd;
$fp = fopen($f, "w+");
for($i=0; $i<$sk; $i++)
{ list($nix, $timf) = explode("|", $nesk[$i]); if($nix !== $inn && $timf>$time) {
fwrite($fp,$nesk[$i]); }}
fwrite($fp, "$inn|$timl|$kur|\n");
fclose($fp);
$online = count(file($f));

$ll1 = date("Y-m-d");
$ll2 =date("H:i");
$laikas = "$ll1 $ll2";

$klll = file_get_contents("txt/max_on.txt");
$ghkk = explode("|",$klll);
$max_onl = $ghkk[0];
$max_on_tim = $ghkk[1];
if ($online >= $max_onl){
$fp55 = fopen("txt/max_on.txt", "w");
fwrite($fp55,"$online|$laikas|");
fclose($fp55);
 }

$nkh2 = file("txt/nick_bans.txt");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if (time() > $kly2[1]){
$nkh2[$py2] = "";
$fpz2 = fopen("txt/nick_bans.txt","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}}

if ($points > 0){ echo"<p align=\"center\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points\">Turi $points nepanaudotus lygio taskus</a><br/>
$lin<br/></small></p>";
}

if ($p == "+"){echo"<p align=\"center\"><small><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">Yra nauju pm</a><br/>$lin<br/></small></p>"; }

if (!file_exists("kitaaainf/$nick.ly")){ 
$fp5g5 = fopen("kitaaainf/$nick.ly", "w");
fwrite($fp5g5,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp5g5); 
@chmod("kitaaainf/$nick.ly",0777); }
if (!file_exists("darinfos/$nick.ly")){ 
$fp5g5 = fopen("darinfos/$nick.ly", "w");
fwrite($fp5g5,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp5g5); 
@chmod("darinfos/$nick.ly",0777); }
if (@count(@explode("|",@file_get_contents("kitaaainf/$nick.ly"))) < 60){ 
include("icludekitainf/nuskait.php");
$fp5g5 = fopen("kitaaainf/$nick.ly", "w");
fwrite($fp5g5,"$kit[0]|$kit[1]|$kit[2]|$kit[3]|$kit[4]|$kit[5]|$kit[6]|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp5g5); 
@chmod("kitaaainf/$nick.ly",0777); }
include("icludekitainf/nuskait.php");
if ($kit[11]=="" or $kit[11]=="0"){ $kit[11]=1; include("icludekitainf/iras.php"); }
if ($kit[25]=="" or $kit[25]=="0"){ $kit[25]=1; include("icludekitainf/iras.php"); }
if ($kit[28]=="" or $kit[28]=="0"){ $kit[28]=1; include("icludekitainf/iras.php"); }
if ($kit[37]=="" or $kit[37]=="0"){ $kit[37]=1; include("icludekitainf/iras.php"); }


if ($dari[1]<time() && $dari[0] == "+"){  
$fp5g5 = fopen("darinfos/$nick.ly", "w");
fwrite($fp5g5,"0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|");
fclose($fp5g5);  }
/*
0-lazdinine mesk
1-bambukine
2-spiningas
3-bronze pick
4-spyzinis
5-Gelezinis
6-Plieninis
7-bronze axe
8-spyzinis
9-Gelezinis
10-Plieninis
11-medkirt lvl
12-Alksnis
13-Ieva
14-Gluosnis
15-Topolis
16-Klevas
17-Azuolas
18-Maumedis
19-Uosis
20-Berzas
21-Skroblas
22-Sekvoja
18-Alksnis bow
19-Ieva
20-Gluosnis
21-Topolis
22-Klevas
23-Azuolas
24-Maumedis
24-streliui antgaliai
25-crafting
26-kociukai
27-streles
28-medziokles lvl
29-balandziu
30-zuikiu
31-fazanu
32-tetervinu
33-stirnu
34-elniu
35-briedziu
36-sernu
37-kepimo lvl
38-karosiuku keptu
39-eseriu
40-lynu
41-raudziu
42-karpiu
43-starkiu
44-lydeku
45-balandziu
46-zuikiu
47-fazanu
48-tetervinu
49-stirnu
50-elniu
51-briedziu
52-sernu
53-ar turi banka
54-banke bapkiu



darinfos masyvas:

0-ar isrinktasis
1-irinktojo time
2-dragon akmenu
3-apdirbtu dragon akmenu
4-brown material
5-gray material
6-white material
7-yellow material
8-orange material
9-green material
10-red material
11-black material
////////Apdirbti materialai
12-brown material
13-gray material
14-white material
15-yellow material
16-orange material
17-green material
18-red material
19-black material

20-bronze helm
21-spyz helm
22-zal helm
23-var helm
24-gel helm
25-pli helm
26-sid helm
27-auks helm
28-dra helm
////////Pirstines
29-brown material
30-gray material
31-white material
32-yellow material
33-orange material
34-green material
35-red material
36-black material
////////batai
37-brown material
38-gray material
39-white material
40-yellow material
41-orange material
42-green material
43-red material
44-black material
////////apsiaustai
45-brown material
46-gray material
47-white material
48-yellow material
49-orange material
50-green material
51-red material
52-black material

53-salmo prot
54-salmas
55-pirstiniu prot
56-pirstines
57-batu prot
58-batai
59-aps prot
60-aps

61-veziu
62-kardzuviu
63-rykliu

///keptu
64-veziu
65-kardzuviu
66-rykliu

*/
?>
