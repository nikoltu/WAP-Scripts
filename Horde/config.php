<?php


$wata = '[&#187;]';

$sms0 = '';
$sms1 = 'OR1';
$sms2 = 'OR2';
$sms3 = 'OR3';
$sms4 = 'OR4';
$sms5 = 'OR5';
$sms7 = 'OR7';
$sms9 = 'OR9';
$sms10 = 'OR10';

$kaina0 = 'lt';
$kaina1 = '1lt';
$kaina2 = '2lt';
$kaina3 = '3lt';
$kaina4 = '4lt';
$kaina5 = '5lt';
$kaina7 = '7lt';
$kaina9 = '9lt';
$kaina10 = '10lt';

$nr = "1371";
$nr2 = "1679";

$narsykleee = $REMOTE_ADDR;
$narsykle_mano = $HTTP_USER_AGENT;

    $fp55 = fopen("kitokiainf/max_on.txt", "w");
    fwrite($fp55, "$online|$laikas|");
    fclose($fp55);

/////////////////Jungimasis///////////////////////
$page = ereg_replace("[^0-9]", "", $_GET['page']);
$id = ereg_replace("[^A-Za-z0-9_]", "", $_GET['id']);
$nick = ereg_replace("[^A-Za-z0-9]", "", $_GET['nick']);
$pass = ereg_replace("[^A-Za-z0-9]", "", $_GET['pass']);

$geimeriai = "ndbzgtusrsz/$nick.txt";

$nuskaitymas = @file_get_contents($geimeriai);
$info = explode("|", $nuskaitymas);

if ($pass != $info[1])
{
    $klaida = "Neteisingas slaptazodis!";
}
if ($pass == "")
{
    $klaida = "Jus neivedete savo slaptazodzio!";
}
if (!file_exists($geimeriai))
{
    $klaida = "Sis zaidejas neuzregistruotas!";
}
if ($nick == "")
{
    $k2laida = "Neivedet1e nicko!";
}
if ($info[18] == "Igoris")
{
    $a = "aaa";
}
if ($info[18] == "Olegas")
{
    $a = "aaa";
}
if ($info[18] == "Erikas")
{
    $a = "aaa";
}

if ($klaida != "")
{
    print "
<p align=\"left\"><small>$klaida<br/>--<br/>
<a href=\"index.php?id=log\">[^] Atgal</a></small></p>
                </card>
                </wml>";
    exit;
}

/*
if ($nick != "$botasssssssssssssssssssssssssss")
{
    print "
<p align=\"center\"><b>
<a href=\"http://orda5.uzeik.in\">Keliames cia!!</a></b></p>
                </card>
                </wml>";
    exit;
}
*/

$nlp2 = file("txt/nick_bans.txt");
$kiek_nlp2 = count($nlp2);
for ($l2 = 0; $l2 < $kiek_nlp2; $l2++)
{
    $koo2 = explode("|", $nlp2[$l2]);
    $uzb_lik2 = $koo2[1] - time();
    $uzb_lik22 = round(($uzb_lik2) / 60, 0);
    if ($nick == "$koo2[0]")
    {
        if (time() < $koo2[1])
        {
            echo "<p align=\"left\"><small>Tu uzbanintas.<br/>
Del: $koo2[2]<br/>
Tave uzbanino: $koo2[3]<br/>
Banas dar tesis: $uzb_lik22 minutes<br/>
Noredami atsibaninti siuskite sms zinute numeriu <b>$nr</b> su textu <b>$sms3 $nick unban</b><br/>
Kaina - <b>$kaina3</b>
</small></p>
</card></wml>";
            exit;
        }
    }
}

/////////////////configas///////////////////////

        $mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
list ($nrs) = explode("/", $_SERVER['HTTP_USER_AGENT']);
if ($mm[4] != "$nrs"){
$mm[4] = $nrs;
include("icludekitainf/mm.php"); }

$id = ereg_replace("[^A-Za-z0-9@*-? .,!_]", "", $_GET['id']);
$nick = ereg_replace("[^A-Za-z0-9]", "", $_GET['nick']);
$pass = ereg_replace("[^A-Za-z0-9]", "", $_GET['pass']);
$vs = ereg_replace("[^A-Z1a-z210-9@*-? .,!_]", "", $_GET['vs']);
$kas = ereg_replace("[^A-1Za-z0-9@*-? .,!_]", "", $_GET['kas']);
$page = ereg_replace("[^0-9]", "", $_GET['page']);
$sk = ereg_replace("[^A-Za1-z0-9@*-? .,!_]", "", $_GET['sk']);
$ka = ereg_replace("[^A-Za-z0-9@*-? .,!_]", "", $_GET['ka']);
$kam = ereg_replace("[^A-Za-z01-9@*-? .,!_]", "", $_GET['kam']);
$kd = ereg_replace("[^A-Za1-z0-9@*-? .,!_]", "", $_GET['kd']);
$te = ereg_replace("[^A-Za-z0-9@*-? .,!_]", "", $_GET['te']);
$kj = ereg_replace("[^A-Za-z110-9@*-? .,!_]", "", $_GET['kj']);
$da = ereg_replace("[^A-Za1-z0-9@*-? .,!_]", "", $_GET['da']);
$kan = ereg_replace("[^A-Za1-z0-19@*-? .,!_]", "", $_GET['kan']);
$mo = ereg_replace("[^A-1Za-z0-9@*-? .,!_]", "", $_GET['mo']);
$m = explode("|",file_get_contents("zona/$nick.txt"));



$bals_stat = file_get_contents("bals/$nick.txt");



$p_mirties_zeme = file_get_contents("map/mirties_zeme/$nick.txt");


$p_akmenys = file_get_contents("map/akmenys/$nick.txt");
$p_saltinis = file_get_contents("map/saltinis/$nick.txt");
$p_ola = file_get_contents("map/ola/$nick.txt");
$p_griuvesiai = file_get_contents("map/griuvesiai/$nick.txt");
$p_krioklys = file_get_contents("map/krioklys/$nick.txt");
$p_krioklys1 = file_get_contents("map/krioklys1/$nick.txt");
$p_krioklys2 = file_get_contents("map/krioklys2/$nick.txt");





$data = file_get_contents("txt/new1_data.txt");
$kristalu = file_get_contents("kronoss/$nick.txt");
$lin = file_get_contents("txt/linijos/$nick.txt");
$iconas = file_get_contents("txt/icons/$nick.txt");
$gameriai = "ndbzgtusrsz/$nick.txt";
$kreditai = file_get_contents("kronoss/$nick.txt");
$topic_keitejo = file_get_contents("txt/topic_keitejo.txt");
$topic_keitejas = file_get_contents("txt/topic_keitejas.txt");

$karolaukekovoja = file_get_contents("kariai/karolauke/$nick.txt");
$sa25chtu = file_get_contents("pastatai/sachtos/$nick.txt");
$len3tpjuviu = file_get_contents("pastatai/lentpjuves/$nick.txt");
$kar55eiviniu = file_get_contents("pastatai/kareivines/$nick.txt");
$fermu = file_get_contents("pastatai/fermos/$nick.txt");
$aukso = file_get_contents("pastatai/auksas/$nick.txt");
$med43ienos = file_get_contents("pastatai/mediena/$nick.txt");
$gelezies = file_get_contents("pastatai/gelezis/$nick.txt");
$tur35ixp = file_get_contents("pastatai/xp/$nick.txt");
$tur43iejimu = file_get_contents("ejimai/$nick.txt");

$banke = file_get_contents("banke/$nick.txt");
$sle453ptuvejemed = file_get_contents("banke/mediena/$nick.txt");
$sleptgelez = file_get_contents("banke/gelezis/$nick.txt");

$fermeriu = file_get_contents("kariai/fermeriai/$nick.txt");
$len532tpjuvininku = file_get_contents("kariai/lentpjuviai/$nick.txt");
$sacht463ininku = file_get_contents("kariai/sachtininkai/$nick.txt");



$amziausdienos = file_get_contents("age/$nick.txt");
$amzius = round(($amziausdienos / 10000), 0);




$darbininku = file_get_contents("kariai/darbininkai/$nick.txt");
$lankininku = file_get_contents("kariai/lankininkai/$nick.txt");
$riteriu = file_get_contents("kariai/riteriai/$nick.txt");
$padegeju = file_get_contents("kariai/padegejai/$nick.txt");
$sunkiujuriteriu = file_get_contents("kariai/sunkiejiriteriai/$nick.txt");
$ietininku = file_get_contents("kariai/ietininkai/$nick.txt");
$lankininkusukardais = file_get_contents("kariai/lankininkaisukardais/$nick.txt");
$raiteliu = file_get_contents("kariai/raiteliai/$nick.txt");
$sakalininku = file_get_contents("kariai/sakalininkai/$nick.txt");
$kar868iusuarbaletais = file_get_contents("kariai/kariaisuarbaletais/$nick.txt");
$negru = file_get_contents("kariai/negrai/$nick.txt");
$kariusukuokomis = file_get_contents("kariai/kariaisukuokomis/$nick.txt");

$kareiiviineseee = $lankininku + $riteriu + $padegeju + $sunkiujuriteriu + $ietininku + $lankininkusukardais + $raiteliu + $sakalininku + $kariusuarbaletais + $negru + $kariusukuokomis;









$sachtuka = file_get_contents("pastatai/sachtos/$ka.txt");
$lentpjuviuka = file_get_contents("pastatai/lentpjuves/$ka.txt");
$kareiviniuka = file_get_contents("pastatai/kareivines/$ka.txt");
$fermuka = file_get_contents("pastatai/fermos/$ka.txt");
$auksoka = file_get_contents("pastatai/auksas/$ka.txt");
$medienoska = file_get_contents("pastatai/mediena/$ka.txt");
$gelezieska = file_get_contents("pastatai/gelezis/$ka.txt");
$turixpka = file_get_contents("pastatai/xp/$ka.txt");
$darbininkuka = file_get_contents("kariai/darbininkai/$ka.txt");

$lankininkuka = file_get_contents("kariai/lankininkai/$ka.txt");
$riteriuka = file_get_contents("kariai/riteriai/$ka.txt");
$padegejuka = file_get_contents("kariai/padegejai/$ka.txt");
$sunkiujuriteriuka = file_get_contents("kariai/sunkiejiriteriai/$ka.txt");
$ietininkuka = file_get_contents("kariai/ietininkai/$ka.txt");
$lankininkusukardaiska = file_get_contents("kariai/lankininkaisukardais/$ka.txt");
$raiteliuka = file_get_contents("kariai/raiteliai/$ka.txt");
$sakalininkuka = file_get_contents("kariai/sakalininkai/$ka.txt");
$kariusuarbaletaiska = file_get_contents("kariai/kariaisuarbaletais/$ka.txt");
$negruka = file_get_contents("kariai/negrai/$ka.txt");
$kariusukuokomiska = file_get_contents("kariai/kariaisukuokomis/$ka.txt");







$sachtosevietu = $sachtu * 30 - $sachtininku;
$fermosevietu = $fermu * 20 - $fermeriu;
$lentpjuvesevietu = $lentpjuviu * 30 - $lentpjuvininku;

$kareivinesevt = $kareiviniu * 50;
$kareivinesevietu = $kareivinesevt - $lankininku - $riteriu - $padegeju - $sunkiujuriteriu - $ietininku - $lankininkusukardais - $raiteliu - $sakalininku - $kariusuarbaletais - $negru - $kariusukuokomis;

$jega1 = $lankininku * 1;

$je8ga3 = $padegeju * 3;
$jega4 = $sunkujuriteriu * 5;
$je56ga5 = $ietininku * 6;
$jega6 = $lankininkusukardais * 8;
$jega7 = $raiteliu * 10;
$jeg55a8 = $sakalininku * 11;
$jega9 = $kariusuarbaletais * 14;
$jeg5a10 = $negru * 15;
$jega11 = $kariusukuokomis * 20;


$tavojega= $jega1 + $jega2 + $jega3 + $jega4 + $jega5 + $jega6 + $jega7 + $jega8 +$jega9 + $jega10 + $jega11;

$tavoginyba = $jega1 + $jega2 + $jega3 + $jega4 + $jega56425 + $jega6 + $jega7 + $jega8 +$jega9 + $jega10 + $jega11;




$jegaka1 = $lankininkuka * 1;
$jegaka2 = $riteriuka * 2;
$jegaka3 = $padegejuka * 3;
$jegaka4 = $sunkiujuriteriuka * 5;
$jegaka5 = $ietininkuka * 6;
$jegaka6 = $lankininkusukardaiska * 8;
$jegaka7 = $raiteliuka * 10;
$jegaka8 = $sakalininkuka * 11;
$jegaka9 = $kariusuarbaletaiska * 14;
$jegaka10 = $negruka * 15;
$jegaka11 = $kariusukuokomiska * 20;






$kajega = $jegaka1 + $jegaka2 + $jegaka3 + $jegaka4 + $jegaka5 + $jegaka6 + $jegaka7 + $jegaka8 +$jegaka9 + $jegaka10 + $jegaka11;

$kaginyb = $jegaka1 + $jegaka2 + $jegaka3 + $jegaka4 + $jegaka5 + $jegaka6 + $jegaka7 + $jegaka8 +$jegaka9 + $jegaka10 + $jegaka11;



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

$tim = time() + 5;

if ($pinigai > 1000000000)
{
    $pinigai = 1000000000;
}

$stat = "Narys";
$vrd = "$nick";
$nvve = file("txt/mods.txt");
$kiek_nvve = count($nvve);
for ($pvve = 0; $pvve < $kiek_nvve; $pvve++)
{
    $kvve = explode("|", $nvve[$pvve]);
    if ($nick == $kvve[0])
    {
        $stat = "mod";
        if ($kvve[1] == "mod")
        {
            $vrd = "*$nick";
        }
        if ($kvve[1] == "Adminas")
        {
            $vrd = "@$nick";
        }
    }
}
$lygis = 99999;
$end = 99999;
$q = 1.1;
for ($r = 1; $r < 99999; $r++)
{
    if ($r == 1)
    {
        $q = 1.1;
    }
    else
    {
        $q = $q * 1.1;
    }

    if ($q >= $exp / 10 && $end != $r)
    {
        $lygis = $r;
        $end = $r + 1;
        $buve = $q;
    }
    if ($end == $r)
    {
        $left = round($buve * 10, 1);
        break;
    }
}

if ($rase == "karys")
{
    $jega2 = round(($jega * 1.1), 1);
    $gyvybess2 = round(($gyvybess * 1.05), 1);
    $sugebejimas2 = round(($sugebejimas * 1.05), 1);
    $gynyba2 = round(($gynyba * 1.05), 1);
    $mining_lvl2 = $mining_lvl;
    $smithing_lvl2 = $smithing_lvl;
    $fishing2 = $fishing;
}
if ($rase == "banditas")
{
    $jega2 = round(($jega * 1.1), 1);
    $gyvybess2 = $gyvybess;
    $sugebejimas2 = $sugebejimas;
    $gynyba2 = round(($gynyba * 1.15), 1);
    $mining_lvl2 = $mining_lvl;
    $smithing_lvl2 = $smithing_lvl;
    $fishing2 = $fishing;
}
if ($rase == "piratas")
{
    $jega2 = round(($jega * 1.05), 1);
    $gyvybess2 = round(($gyvybess * 1.05), 1);
    $sugebejimas2 = round(($sugebejimas * 1.05), 1);
    $gynyba2 = round(($gynyba * 1.05), 1);
    $mining_lvl2 = $mining_lvl;
    $smithing_lvl2 = $smithing_lvl;
    $fishing2 = round(($fishing * 1.05), 1);
}
if ($rase == "fermeris")
{
    $jega2 = $jega;
    $gyvybess2 = $gyvybess;
    $sugebejimas2 = round(($sugebejimas * 1.1), 1);
    $gynyba2 = $gynyba;
    $mining_lvl2 = round(($mining_lvl * 1.15), 1);
    $smithing_lvl2 = $smithing_lvl;
    $fishing2 = $fishing;
}

include ("icludekitainf/nuskait2.php");

$damage = "$jega2" + "$ginklo_att";
$defense = $gynyba2 + $sarvu_prot + $dari[53] + $dari[55] + $dari[57] + $dari[59];


/////////////////Online///////////////////////

$timl = 320 + time();
$tims = time();
$f = "txt/on.txt";
$nesk = file($f);
$sk = count($nesk);
$inn = $vrd;
$fp = fopen($f, "w+");
for ($i = 0; $i < $sk; $i++)
{
    list($nix, $timf) = explode("|", $nesk[$i]);
    if ($nix !== $inn && $timf > $tims)
    {
        fwrite($fp, $nesk[$i]);
    }
}
fwrite($fp, "$inn|$timl|$kur|\n");
fclose($fp);
$online = count(file($f));

$ll1 = date("Y-m-d");
$ll2 = date("H:i");
$laikas = "$ll1 $ll2";

$klll = file_get_contents("txt/max_on.txt");
$ghkk = explode("|", $klll);
$max_onl = $ghkk[0];
$max_on_tim = $ghkk[1];
if ($online >= $max_onl)
{
    $fp55 = fopen("txt/max_on.txt", "w");
    fwrite($fp55, "$online|$laikas|");
    fclose($fp55);
}


$kiekonline = $inn;
$kiekonline2 = round(($inn), 0);



    if ($kiekofdfd < 0)
    {
        echo "";

file_put_contents("txt/onlaiko/$nick.txt",0);
}







$nkh2 = file("txt/nick_bans.txt");
$kiek_nkh2 = count($nkh2);
for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
{
    $kly2 = explode("|", $nkh2[$py2]);
    if (time() > $kly2[1])
    {
        $nkh2[$py2] = "";
        $fpz2 = fopen("txt/nick_bans.txt", "w");
        fwrite($fpz2, implode($nkh2));
        fclose($fpz2);
    }
}



?>
