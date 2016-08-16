<?php
include_once("core.php");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo "<card id=\"index\" title=\"New! LGZZ.EU $dsghj\">";

                                       		$diena=date("z"); $liko=365-$diena - 299; 

$id = $_GET['id'];
$nick = $_GET['nick'];
$passs = $_GET['passs'];
$mo = $_GET['mo'];
$lin = "-------";
$dienu=(Date(" z "));
$laikas=(Date(" U "));
$rytoj = mktime(0,0,0,date("m"),date("d")+1,date("Y"));

$visozmn2 = glob("2servas/us_xgrx_inf147258369/*.txt");
for ($i = 0; $i<count($visozmn2); $i++)
$duomenys = "duomenys.txt";
$ff = "2servas/txt/on.txt";
$online2 = count(file($ff));
$tim = time() + 30;
$paspausta = file_get_contents("duomenys.txt");
$f = "txt/on.txt";
$online = count(file($f));
$tim = time() + 30;
$newas = file_get_contents("txt/new_data.txt");
$floo = file_get_contents("txt/reg_apsauga.txt");
$aa1 = file_get_contents("2servas/txt/pask_reg.txt");
$pask_reg = file_get_contents("txt/pask_reg.txt");
$visozmn = glob("us_xgrx_inf147258369/*.txt");
for ($i = 0; $i<count($visozmn); $i++)
$a = file_get_contents("txt/pask_reg.txt");



if ($id == "")
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $iskur = $_GET['f'];
    if ($iskur != "" && file_exists("us_xgrx_inf147258369/$iskur.txt"))
    {
        $a = file("txt/atv.txt");
        for ($i = 0; $i < count($a); $i++)
        {
            $b = explode("|", $a[$i]);
            if ($b[0] == $ip)
            {
                $l = "yra";
                break;
            }
        }

        if ($l != "yra")
        {
            $f = fopen("txt/atv.txt", "a");
            fwrite($f, "$ip|\n");
            fclose($f);
            $lp = explode("|", file_get_contents("us_xgrx_inf147258369/$iskur.txt"));
            if (!file_exists("kronoss/$iskur.txt"))
            {
                $kronu = 0;
            }
            else
            {
                $kronu = file_get_contents("kronoss/$iskur.txt");
            }
            $fop = fopen("kronoss/$iskur.txt", "w+");
            fwrite($fop, $kronu + 0.2);
            fclose($fop);
            chmod("kronoss/$iskur.txt", 0777);
            $penrt1 = fopen("atvesti/$iskur.txt", "a+");
            fwrite($penrt1, "$ip|\n");
            fclose($penrt1);
            chmod("atvesti/$iskur.txt", 0777);
        }
    }
    $kllll = file_get_contents("2servas/txt/max_on.txt");
    $ghkk1 = explode("|", $kllll);

    $klll = file_get_contents("txt/max_on.txt");
    $ghkk = explode("|", $klll);
				$bendrasmax =  $online + $online2;
				$onlinemax =  $ghkk[0] + $ghkk1[0];
echo "<p align=\"center\">";
    //include("reklas.php");
echo "<img src=\"imgs/logo.gif\" alt=\"logo\"/><br/>
<small>
$lin<br/>
Toki zaidima galite nusipirkti<br/>
<b>WapMaster.LT</b> saite<br/>$lin<br/>
Atnaujinta:[<b>$newas</b>]<br/>
$lin<br/>
Sveiki ateja i <b>LGZZ</b> zaidima,<br/>
pajungtas tik pirmasis pasaulis<br/>
$lin<br/>
<a href=\"index.php?id=logas\"><img src=\"http://tob.lt/imgs/log.gif\" alt=\"Prisijungti\"/></a><br/>
<a href=\"index.php?id=regas\"><img src=\"http://tob.lt/imgs/reg.gif\" alt=\"Registruotis\"/></a><br/>
<a href=\"index.php?id=inf\"><img src=\"http://tob.lt/imgs/inf.gif\" alt=\"Informacija\"/></a><br/>
$lin<br/></div>
Mes su jumis jau <b>0m 2men!</b><br/>$lin<br/>
<b>Viso prisijunge: [ $bendrasmax ]</b><br/>
<b>Daugiausia prisijunge: [ $onlinemax ]</b><br/>$lin<br/>
<b>1 serveris</b><br/>
Online: [<b> $online </b>]<br/>
Max Online: [<b> $ghkk[0] </b>]<br/><br/>";
echo "<b>2 Serveris</b><br/>";
echo "Online: [<b> $online2 </b>]<br/>";
echo "Max Online: [<b> $ghkk1[0] </b>]<br/>";
echo "<a href=\"index.php?id=idomu\">Idomu...</a><br/>$lin<br/>";
echo "<a href=\"index.php?id=reklamos\">!Reklamos!</a><br/>";
echo "Vieta jusu skaitliukui<br/>";
echo "$lin<br/>
<a href=\"index.php?id=kontaktai\">Kontaktai</a><br/>
&#169; Insaider</small></p>";
}

if ($id == "rkl")
{
    echo "<p align=\"center\"><small><b>Kaip ideti mokama reklama?</b><br/>
$lin</small></p>
<p align=\"left\"><small>
Mokamos reklamos kaina tik $sms_lt<br/>
Rodomos 3 naujausios reklamos<br/>
Reikia siusti sms siuo numeriu:<br/>
<b>$sms_nr</b><br/>
Zinuteje irasius:<br/>
<b>$sms_text reklama tavo_url saito_aprasymas</b><br/>
Url reikia rasyti be http://<br/>
<b>Pavyzdys:</b><br/>
$sms_text reklama PLAY.jup.lt geras zaidimas<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
$count<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "antras")
{
    echo "<p align=\"center\"><small><b>Info apie ANTRA pasauly</b><br/>
$lin</small></p>
<p align=\"left\"><small>
Atsidare serveris <b>2009-12-20</b> <br/>
XP: x3 <br/>
LvL: x3 <br/>
Kronu perkant: x3<br/>
Serveris vadinas: [High rates server] <br/>
Viksta konkursai del tikru pinigu po laimejimo, zaidejas gauna priza ir zaidimas padaromas restartas.<br/>
<a href=\"2servas/index.php?id=reg1\">[Registruotis]</a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "reklamos")
{
    echo "<p align=\"center\"><small><b><a href=\"reklama.php\">Kaip ideti mokama reklama?</a><br/></b><br/>
$lin</small></p>
<p align=\"left\"><small>";
$ka = file_get_contents("sms_reklama.txt");
$bla = explode("|", $ka);
$bla[0] =str_replace("", "", $bla[0]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
$bla[22] =str_replace("", "", $bla[22]);
echo"
1.<a href=\"http://$bla[0]\">$bla[1]</a><br/>
2.<a href=\"http://$bla[2]\">$bla[3]</a><br/>
3.<a href=\"http://$bla[4]\">$bla[5]</a><br/>
4.<a href=\"http://$bla[6]\">$bla[7]</a><br/>
5.<a href=\"http://$bla[8]\">$bla[9]</a><br/>
6.<a href=\"http://$bla[10]\">$bla[11]</a><br/>
7.<a href=\"http://$bla[12]\">$bla[13]</a><br/>
8.<a href=\"http://$bla[14]\">$bla[15]</a><br/>
9.<a href=\"http://$bla[16]\">$bla[17]</a><br/>
10.<a href=\"http://$bla[18]\">$bla[19]</a><br/>";
echo"</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "idomu")
{
    echo "<p align=\"center\"><small><b>Idomu...</b><br/>
$lin</small></p>";
$funkcija = fopen($duomenys, "r");
$sk = fread($funkcija, filesize($duomenys));
fclose($funkcija);
$sk = $sk + 1;
$funkcija = fopen($duomenys, "w");
fwrite($funkcija, "$sk");
fclose($funkcija);
echo"<p align=\"left\"><small>
Siais metais praejo [$laikas] sekundziu<br/>
Siais metais praejo [$dienu] dienos<br/>";
echo "Rytoj bus [".date("Y-m-d", $rytoj);
echo"]<br/>";
echo "Sitas puslapis jau buvo atvertas [$paspausta] kartus</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "kontaktai")
{
    echo "<p align=\"center\"><small>Kontaktai<br/>
$lin</small></p>
<p align=\"left\"><small><br/>
<b>Tomas</b><br/>
Skype:<img src=\"http://mystatus.skype.com/smallicon/insaider36\" alt=\"Skype\"/> insaider36<br/>
xwap.lt@gmail.com<br/>

</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "regas")
{
    echo "<p align=\"center\"><small><b>Pasirinkite pasauli kuriame zaisite</b><br/>
</small></p>
<p align=\"center\"><small>
----------<br/>
<b>2 pasaulis</b><br/>
<u>REKOMENDUOJAMAS</u><br/>
Prizas: <img src=\"imgs/prizas.gif\" alt=\"prizas\"/><br/>
<a href=\"index.php?id=apiepriza\"><b>Apie raunda</b></a><br/>
Paskutinis uzsiregistravo: $aa1<br/>
<b>Is viso zmoniu:</b> "; echo count($visozmn2);
echo"<br/>Pasaulis atsidare: [2009-12-20]<br/>
<a href=\"2servas/index.php?id=reg1\"><b>Registruotis siame pasaulyje!</b></a><br/>
----------<br/>
<b>1 pasaulis</b><br/>
Prizas: <img src=\"imgs/20lt.gif\" alt=\"prizas\"/><br/>
<a href=\"index.php?id=apiepriza1\"><b>Apie raunda</b></a><br/>
Paskutinis uzsiregistravo: $a<br/>
<b>Is viso zmoniu:</b> "; echo count($visozmn);
echo"<br/> Pasaulis atsidare: [2009-10-02]<br/>
<a href=\"index.php?id=reg1\"><b>Registruotis siame pasaulyje!</b></a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "logas")
{
    echo "<p align=\"center\"><small><b>Pasirinkite pasauli kuriame zaisite</b><br/>
</small></p>
<p align=\"center\"><small>
----------<br/>
<b>Prisijungti</b><br/>
<a href=\"index.php?id=log\"><b>1 pasaulis!</b></a><br/>
----------<br/>
<b>Prisijungti</b><br/>
<a href=\"2servas/index.php?id=log\"><b>2 pasaulis!</b></a><br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "apiepriza")
{
    echo "<p align=\"center\"><small><b>Raundas</b><br/>
</small></p>
<p align=\"center\"><small>
----------<br/>
Prasidejo:<b>2009-12-20</b><br/>
Baigsis: <b>2010-05-01</b><br/><br/>
Apie priza<br/>$lin<br/>
Priza laimes tas kas tures daugiausia xp<br/>
Atsiskaitysime: banku, pervedimu, saskaitos papildymais<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "apiepriza1")
{
    echo "<p align=\"center\"><small><b>Raundas</b><br/>
</small></p>
<p align=\"center\"><small>
----------<br/>
Prasidejo:<b>2009-10-02</b><br/>
Baigsis: <b>2010-02-01</b><br/><br/>
Apie priza<br/>$lin<br/>
Priza laimes tas kas tures daugiausia xp<br/>
Atsiskaitysime: banku, pervedimu, saskaitos papildymais<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "news")
{
    echo "<p align=\"left\"><small><b>Naujienos</b><br/>
$lin</small></p>
<p align=\"left\"><small><br/>
[2009-12-17] Idejau i index.php reklama, dabar galesite reklaminti kitus zaidimus ar ka pan. Bet reklama kainoja 1LT<br/>
<br/>
[2009-12-16] Pakeiciau zaideju informacija.Paspaude ant zaidejo rodis geriau ir suprantamiau.<br/>
<br/>
[2009-12-15] Sutvarkytas Kariu pulkai.<br/>
<br/>
[2009-12-15] Idejau Dienos top. Galima laimeti prizus. Viska suzinosite ten nueja.<br/>
<br/>
[2009-12-15] Idejau Kovu arena.<br/>
<br/>
[2009-12-14] Idejau Tamsusis slenis. Rasite Kovu laukas-> Tamsusis slenis.<br/>
<br/>
[2009-12-13] Idejau pasiulymus. Rasite pagrindineme meniu apacioje. <br/>
<br/>
[2009-12-12] Idejau Topic istorija.<br/>
<br/>
[2009-12-10] Sutvarkytas forumas.<br/>
<br/>
[2009-12-05] Idejau Kazino. Rasite Miestas->Kazino. Galesite islosti arba pralosti ;D<br/>
<br/>
[2009-12-02] Idetas balsavima. Rasite Miestas->Balsavimas.<br/>
<br/>
[2009-11-30] Idetas siuklynas.<br/>
<br/>
[2009-10-25] Ziauriai pakeiciau index.php faila.<br/>
<br/>
[2009-10-02] Sukurtas zaidimas ;]<br/>
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
</small></p>
";
}

if ($id == "inf")
{
    $infor = file_get_contents("info.txt");
    echo "
<p align=\"center\"><small>
<b>Informacija</b><br/>
$lin<br/></small></p>
<p align=\"left\"><small>
$infor
</small></p>
<p align=\"center\"><small>
$lin<br/>
<a href=\"index.php\">Atgal</a><br/>
$lin<br/>
&#169;spawn</small></p>";
}

if ($id == "log")
{
    print "
        <p align=\"center\"><small>
<form action=\"index.php?id=log2\" method=\"post\">
    Nikas (mazosiomis raidemis):<br/></small>
<input name=\"nick\" type=\"text\" maxlength=\"15\" title=\"Nikas\"/><br/>

    <small>Slaptazodis:<br/></small>
<input name=\"pass\" type=\"password\" maxlength=\"300\" title=\"Slaptazodis\"/><br/>

<input type=\"submit\" title=\"lgzz.eu\" value=\"Prisijungti\"/>
    <postfield name=\"pass\" value=\"$(pass)\"/>
    <postfield name=\"nick\" value=\"$(nick)\"/>
</go></anchor><small><br/>$lin<br/><a href=\"index.php\">Atgal</a><br/></small>
    </p>";
}

if ($id == "log2")
{
    $nick = $_POST['nick'];
    $pass = md5($_POST['pass']);
    print "<p align=\"center\"><small><b>Jungiamasi...<br/></b>
    <a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">Spauskite sia nuoroda...</a></small></p>    ";
}

if ($id == "reg1")
{
    echo "<p align=\"center\"><small>
<b>Pasirinkite rase</b><br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Human\">Human</a></b><br/>
<img src=\"imgs/human.gif\" alt=\"Foto\"/><br/>
Neturi jokiu bonusu<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Elf\">Elf</a></b><br/>
<img src=\"imgs/elf.gif\" alt=\"Foto\"/><br/>
+5% Atakos bonus<br/>
+10% Gyvybiu bonus<br/>
+5% Patirties bonus<br/>
+5% Medkirtystes bonus<br/>
-10% Kasimo bonus<br/>
-10% Kalvininkavimo bonus<br/>
-5% Zvejybos bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Dark_elf\">Dark elf</a></b><br/>
<img src=\"imgs/dark_elf.gif\" alt=\"Foto\"/><br/>
+5% Atakos bonus<br/>
+5% Gynybos bonus<br/>
+5% Gyvybiu bonus<br/>
-5% Kasimo bonus<br/>
-5% Kalvininkavimo bonus<br/>
-5% Zvejybos bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Orc\">Orc</a></b><br/>
<img src=\"imgs/orc.gif\" alt=\"Foto\"/><br/>
+10% Atakos bonus<br/>
+10% Medziokles bonus<br/>
-5% Kasimo bonus<br/>
-5% Zvejybos bonus<br/>
-10% Crafting bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Attacer\">Attacer</a></b><br/>
<img src=\"imgs/attacer.gif\" alt=\"Foto\"/><br/>
+15% Atakos bonus<br/>
-10% Gynybos bonus<br/>
-5% Gyvybiu bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Dwarf\">Dwarf</a></b><br/>
<img src=\"imgs/dwarf.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-10% Gyvybiu bonus<br/>
+10% Kasimo bonus<br/>
+10% Kalvininkavimo bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Fisher\">Fisher</a></b><br/>
<img src=\"imgs/fisher.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-10% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+20% Zvejybos bonus<br/>
+10% kepimo bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Farmer\">Farmer</a></b><br/>
<img src=\"imgs/farmer.gif\" alt=\"Foto\"/><br/>
-5% Atakos bonus<br/>
-5% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+10% Kepimo bonus<br/>
+5% Medziokles bonus<br/>
+5% Medkirtystes bonus<br/>
$lin<br/>
<b><a href=\"index.php?id=reg&amp;mo=Crafter\">Crafter</a></b><br/>
<img src=\"imgs/crafter.gif\" alt=\"Foto\"/><br/>
-10% Atakos bonus<br/>
-5% Gyvybiu bonus<br/>
-10% Gynybos bonus<br/>
+20% Crafting bonus<br/>
+5% Medkirtystes bonus<br/>
$lin<br/>

<a href=\"index.php\">Atgal</a><br/>
$lin<br/>
&#169;spawn</small></p>";
}

if ($id == "reg")
{
    $mo = $_GET['mo'];
    echo "
<p align=\"center\"><small>
<form action=\"index.php?id=reg2&amp;mo=$mo\" method=\"post\">
<b>Nick gali buti tik is mazuju raidziu, didziosios raides bus paverstos mazosiom!<br/>
Nenaudokite spec. simboliu!<br/></b>

	Nickas:<br/></small>
<input name=\"nick\" maxlength=\"15\" title=\"Nikas\"/><br/>

        <small>Slaptazodis:<br/></small><input name=\"passs\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>

	<small>Pakartoti slaptazodi:<br/></small><input name=\"passs2\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>

<input type=\"submit\" title=\"lgzz.eu\" value=\"Registruotis\"/>
    <postfield name=\"nick\" value=\"$(nick)\"/>
    <postfield name=\"passs\" value=\"$(passs)\"/>
    <postfield name=\"passs2\" value=\"$(passs2)\"/></go></anchor><br/>
<small>$lin<br/><a href=\"index.php\">Atgal</a><br/></small>
    </p>";
}

if ($id == "reg2")
{
    $mo = $_GET['mo'];
    $lik = $floo - time();
    if (time() < $floo)
    {
        echo "<p align=\"center\"><small><b>Antiflood! Registruotis galesi uz $lik sekundziu</b><br/>
$lin<br/>
<a href=\"index.php?id=reg\">Atgal</a><br/>
<a href=\"index.php\">I pradzia</a></small></p>";
    }
    else
    {
        $nick = strtolower($_POST['nick']);
        $passs = $_POST['passs'];
        $passs2 = $_POST['passs2'];

        $nick = strtolower($nick);

        $nick = ereg_replace("[^A-Za-z0-9]", "", $nick);
        $passs = ereg_replace("[^A-Za-z0-9]", "", $passs);
        $passs2 = ereg_replace("[^A-Za-z0-9]", "", $passs2);


        if ($passs == "")
        {
            $klaida = "Neivestas slaptazodis!";
        }

        if ($passs2 == "")
        {
            $klaida = "Nepakartojai slaptazodzio!";
        }

        if ($passs != $passs2)
        {
            $klaida = "Slaptazodziai nesutampa!";
        }

        if (strlen($passs) < 3)
        {
            $klaida = "Slaptazodis per trumpas!";
        }

        if (strlen($passs) > 20)
        {
            $klaida = "Slaptazodis per ilgas!";
        }

        if ($nick == "")
        {
            $klaida = "Neivestas nikas!";
        }

        if (file_exists("us_xgrx_inf147258369/$nick.txt"))
        {
            $klaida = "Toks nikas jau uzregistruotas!";
        }

        if (strlen($nick) < 3)
        {
            $klaida = "Nikas per trumpas!";
        }

        if (strlen($nick) > 20)
        {
            $klaida = "Nikas per ilgas!";
        }
        if ($mo == "Human")
        {
            $a = "aaa";
        }
        if ($mo == "Elf")
        {
            $a = "aaa";
        }
        if ($mo == "Dark_elf")
        {
            $a = "aaa";
        }
        if ($mo == "Attacer")
        {
            $a = "aaa";
        }
        if ($mo == "Orc")
        {
            $a = "aaa";
        }
        if ($mo == "Dwarf")
        {
            $a = "aaa";
        }
        if ($mo == "Fisher")
        {
            $a = "aaa";
        }
        if ($mo == "Farmer")
        {
            $a = "aaa";
        }
        if ($mo == "Crafter")
        {
            $a = "aaa";
        }

        if ($a == "")
        {
            $klaida = "Bloga rase!";
        }

        if ($klaida != "")
        {
            print "
        <p align=\"center\"><small>$klaida<br/>
$lin<br/>
<a href=\"registracija.php\">Atgal</a><br/>
<a href=\"index.php\">I pradzia</a><br/></small>
</p>";
        }
        else
        {
            echo "
    <p align=\"center\"><small><b>Jus uzregistruotas sekmingai!<br/></b>
Jusu nick: <b>$nick</b><br/>
$lin<br/>
<a href=\"index.php?id=log\">Prisijungti</a><br/></small></p>";

            $nick = trim($nick);
            $passs = md5($passs);
            $nick = ereg_replace("[^A-Za-z0-9]", "", $nick);
            $passs = ereg_replace("[^A-Za-z0-9]", "", $passs);
            $passs2 = ereg_replace("[^A-Za-z0-9]", "", $passs2);

            $regai = "us_xgrx_inf147258369";
            $jega = "1";
            $gyvybes = "7";
            $gyvybess = "7";
            $sugebejimas = "1";
            $pinigai = "500";
            $wins = "0";
            $loses = "0";
            $ginklo_att = "0";
            $ginklas = "Beginklis";
            $gynyba = "1";

            $uzregintas = date("Y-m-d");
            $pask = time();

            $nicko = "$nick.txt";

            $atidarymas = fopen("us_xgrx_inf147258369/$nicko", "w+");
            fwrite($atidarymas, "1|$passs|$nick|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask|+|0|$gynyba|0|$mo|10|12.1|aps_kodas|0|Be_sarvu|0|\n");
            fclose($atidarymas);
            chmod("us_xgrx_inf147258369/$nicko", 0777);

            $pmi = "priv_zin";

            $atidaryma = fopen("$pmi/$nicko", "w+");
            fwrite($atidaryma, "@SISTEMA|Hello, tikiuos nuolat cia lankysies, ir tau cia patiks. Pries pradedant zaisti pirmiausiai perskaityk INFORMACIJA, kuri randasi pagrindiniame meniu, ir isidemek ISTATYMUS, kuriuos rasi mieste. Sekmes!||\n");
            fclose($atidaryma);
            chmod("$pmi/$nicko", 0777);

            $mins = "miners";

            $fop = fopen("$mins/$nicko", "w+");
            fwrite($fop, "0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|1|1|\n");
            fclose($fop);
            chmod("$mins/$nicko", 0777);

            $fop = fopen("fyshers/$nicko", "w+");
            fwrite($fop, "1|0|0|0|0|0|0|0|0|\n");
            fclose($fop);
            chmod("fyshers/$nicko", 0777);

            $fopy = fopen("txt/pask_reg.txt", "w");
            fwrite($fopy, "$nick");
            fclose($fopy);

            $fop = fopen("lyyygiz/$nicko", "w+");
            fwrite($fop, "100000");
            fclose($fop);
            chmod("lyyygiz/$nicko", 0777);

            $fopy = fopen("txt/reg_apsauga.txt", "w");
            fwrite($fopy, "$tim");
            fclose($fopy);
        }
    }
}

print '</card></wml>';
?>