<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$time = date("H:i Y-m-d");
echo "<card id=\"index\" title=\"ORDA by Insaider\">";

$id = $_GET['id'];
$nick = $_GET['nick'];
$passs = $_GET['passs'];
$mo = $_GET['mo'];
$lin = "--=====--";
$bnr = "<img src=\"/imgs/logo.gif\" alt=\"baneris\"/>";

$f = "txt/on.txt";
$online = count(file($f));
$tim = time() + 30;
$floo = file_get_contents("txt/reg_apsauga.txt");
$topic = file_get_contents("txt/index_topic.txt");
$pask_reg = file_get_contents("txt/pask_reg.txt");

if ($id == "")
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $iskur = $_GET['f'];
    if ($iskur != "" && file_exists("ndbzgtusrsz/$iskur.txt"))
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
            $lp = explode("|", file_get_contents("ndbzgtusrsz/$iskur.txt"));
            if (!file_exists("kronoss/$iskur.txt"))
            {
                $kronu = 0;
            }
            else
            {
                $kronu = file_get_contents("kronoss/$iskur.txt");
            }
            $fop = fopen("kronoss/$iskur.txt", "w+");
            fwrite($fop, $kronu + 0.1);
            fclose($fop);
            chmod("kronoss/$iskur.txt", 0777);
            $penrt1 = fopen("atvesti/$iskur.txt", "a+");
            fwrite($penrt1, "$ip|\n");
            fclose($penrt1);
            chmod("atvesti/$iskur.txt", 0777);
        }
    }
    $klll = file_get_contents("txt/max_on.txt");
    $ghkk = explode("|", $klll);
    echo "<p align=\"center\"><small>
<img src=\"http://pvz.kar.lt/orda/imgs/logo.gif\" alt=\"baneris\"/><br/>
$lin<br/>
<b>$topic</b><br/>
$lin<br/>
</small></p><p align=\"left\">
[&#187;] <a href=\"index.php?id=log\">Prisijungti</a><br/>
[&#187;] <a href=\"index.php?id=reg1\">Registruotis</a><br/>
</p><p align=\"center\"><small>
 $lin<br/>
<b><a href=\"index.php?id=on\">Online: [$online]</a></b><br/>
<b>Paskutinis uzsiregino:</b> <u>$pask_reg</u><br/>
$lin<br/>
Skaitliuko vieta<br/>
$lin<br/>
&#169;<a href=\"http://insaider.xwap.lt\">Insaider</a></small></p>";
}



if ($id == "on")
{
    $nuskk = array_unique(file("txt/on.txt"));
    sort($nuskk);
    $viso_tm = count($nuskk);
    $puslapiu_skaicius = 10;

    echo "<p align=\"left\"><small>Online ($viso_tm):<br/>
-<br/></small></p>";
    echo '<p align="left"><small>';


    if ($page == "")
    {
        $page = 1;
    }
    $next = $page + 1;
    $back = $page - 1;
    if ($page == 1)
    {
        $nuo = 0;
        $iki = $puslapiu_skaicius;
    }
    else
    {
        $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius;
        $iki = $page * $puslapiu_skaicius;
    }

    if ($viso_tm <= $page * $puslapiu_skaicius)
    {
        $iki = $viso_tm;
    }
    for ($c = $nuo; $c < $iki; $c++)
    {
        $et = explode("|", $nuskk[$c]);
        $masyw = array("@", "*");
        $et[0] = ereg_replace("[^A-Za-z0-9*@]", "", $et[0]);
        $onlpy = str_replace($masyw, "", $et[0]);
        if ($onlpy != "")
        {
            echo "$et[0] - $et[2]<br/>";
        }
    }

    $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
    $starto_skaicius = 1;
    while ($viso_puslapiai < $viso_puslapiu)
    {
        if ($page == $starto_skaicius)
        {
            echo "[$starto_skaicius]";
        }
        else
        {
            echo "<a href=\"index.php?id=on&amp;page=$starto_skaicius\">[$starto_skaicius]</a>";
        }
        $viso_puslapiai++;
        $starto_skaicius++;

    }
    echo '</small></p>';
    echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"index.php?id=\">[&lt;] Atgal</a></small></p>";
}

if ($id == "rkl")
{
    echo "<p align=\"left\"><small><b>Kaip ideti mokama reklama?</b><br/>
-<br/></small>
<small>
Mokamos reklamos kaina tik 1lt<br/>
Rodomos 3 naujausios reklamos<br/>
Reikia siusti sms siuo numeriu:<br/>
<b>1371</b><br/>
Zinuteje irasius:<br/>
<b>NGT reklama tavo_url saito_aprasymas</b><br/>
Url reikia rasyti be http://<br/>
<b>Pavyzdys:</b><br/>
NGT reklama ... geras zaidimas<br/>
-<br/>
</small>
<small>
<a href=\"index.php\">[&lt;] Zaidimas</a><br/>
</small></p>
";
}

if ($id == "inf")
{
    $infor = file_get_contents("info.txt");
    echo "
<p align=\"left\"><small>
<b>Svarbi informacija!</b><br/>
-</small>
<small>
$infor
</small>
<small>
$lin<br/>
<a href=\"index.php\">[&lt;] Zaidimas</a></small><br/>
</p>";
}

if ($id == "log")
{
    print "
        <p align=\"left\"><small>
<b>Nickas:</b><br/><input name=\"nick\" type=\"text\" maxlength=\"15\" title=\"Nikas\"/><br/>

    <b>Slaptazodis:</b><br/>
<input name=\"pass\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>

<anchor>:: Prisijungti ::<go href=\"index.php?id=log2\" method=\"post\">
    <postfield name=\"pass\" value=\"$(pass)\"/>
    <postfield name=\"nick\" value=\"$(nick)\"/>
</go></anchor><br/>$lin<br/><a href=\"index.php\">[&lt;] Zaidimas</a><br/></small>
    </p>";
}

if ($id == "log2")
{
    $nick = $_POST['nick'];
    $pass = ($_POST['pass']);
    print "<onevent type=\"ontimer\"><go href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\"/></onevent><timer value=\"1\"/><p align=\"center\"><br/><small><b>Sekmes zaidime...</b><br/>-<br/>Jeigu sistema neprijungia jusu prie zaidimo, tuomet<br/><a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">spausk cia ir prisijungsi!!</a></small></p>    ";
}











if ($id == "reg1")
{
    echo "<p align=\"center\"><small>
<b>Pasirinkite kovotoja</b><br/>
-<br/>
[ <a href=\"index.php?id=reg&amp;mo=Igoris\">Igoris</a> ]<br/>
<img src=\"imgs/igoris.gif\" alt=\"Foto\"/><br/>
-<br/>
[ <a href=\"index.php?id=reg&amp;mo=Olegas\">Olegas</a> ]<br/>
<img src=\"imgs/olegas.gif\" alt=\"Foto\"/><br/>
-<br/>
[ <a href=\"index.php?id=reg&amp;mo=Erikas\">Erikas</a> ]<br/>
<img src=\"imgs/erikas.gif\" alt=\"Foto\"/><br/>
$lin<br/>

<a href=\"index.php\">[&lt;] Zaidimas</a><br/></small>
</p>";
}

if ($id == "reg")
{
    $mo = $_GET['mo'];
    echo "
<p align=\"center\"><small>
Nenaudokite spec. simboliu!<br/>

	<b>Nickas:</b><br/><input name=\"nick\" maxlength=\"15\" title=\"Nikas\"/><br/>

        <b>Slaptazodis:</b><br/><input name=\"passs\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>

	<b>Pakartokite slaptazodi:</b><br/><input name=\"passs2\" type=\"password\" maxlength=\"30\" title=\"Slaptazodis\"/><br/>

<anchor>:: Registruotis ::<go href=\"index.php?id=reg2&amp;mo=$mo\" method=\"post\">
    <postfield name=\"nick\" value=\"$(nick)\"/>
    <postfield name=\"passs\" value=\"$(passs)\"/>
    <postfield name=\"passs2\" value=\"$(passs2)\"/></go></anchor><br/>
</small><small>$lin<br/><a href=\"index.php\">[&lt;] Zaidimas</a><br/></small>
    </p>";
}
if ($id == "reg2")
{
    $mo = $_GET['mo'];
    $lik = $floo - time();
    if (time() < $floo)
    {
        echo "<p align=\"left\"><small>Antiflood! Registruotis galesi uz $lik sekundziu<br/>
$lin<br/>
<a href=\"index.php?id=reg\">[^] Atgal</a><br/>
<a href=\"index.php\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        $nick = ($_POST['nick']);
        $passs = $_POST['passs'];
        $passs2 = $_POST['passs2'];

        $nick = ($nick);

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

        if ($passs == $nick)
        {
            $klaida = "Slaptazodis nesaugus, nedaryk slaptazodzio tokio, kaip nicko!";
        }

        if ($nick == "")
        {
            $klaida = "Neivestas nickas!";
        }

        if (file_exists("ndbzgtusrsz/$nick.txt"))
        {
            $klaida = "Toks nickas jau uzregistruotas!";
        }

        if (strlen($nick) < 4)
        {
            $klaida = "Nickas per trumpas!";
        }

        if (strlen($nick) > 20)
        {
            $klaida = "Nickas per ilgas!";
        }
        if ($mo == "Igoris")
        {
            $a = "aaa";
        }
        if ($mo == "Olegas")
        {
            $a = "aaa";
        }
        if ($mo == "Erikas")
        {
            $a = "aaa";
        }
        if ($a == "")
        {
            $klaida = "Blogas kovotojas!";
        }

        if ($klaida != "")
        {
            print "
        <p align=\"left\"><small>$klaida<br/>
$lin<br/>
<a href=\"registracija.php\">[^] Atgal</a><br/>
<a href=\"index.php\">[&lt;] Zaidimas</a><br/></small>
</p>";
        }
        else
        {
            echo "
    <p align=\"left\"><small><b>Jus uzregistruotas sekmingai!<br/></b>
Jusu nick: <b>$nick</b><br/>
Jusu pass: <b>$passs</b><br/>
Jusu kovotojas: <b>$mo</b><br/>
-<br/>
<a href=\"index.php?id=log\">:: Prisijungti ::</a><br/></small></p>";

            $nick = ($nick);
            $passs = ($passs);
            $nick = ereg_replace("[^A-Za-z0-9]", "", $nick);
            $passs = ereg_replace("[^A-Za-z0-9]", "", $passs);
            $passs2 = ereg_replace("[^A-Za-z0-9]", "", $passs2);

            $regai = "ndbzgtusrsz";
            $jega = "5";
            $gyvybes = "10";
            $gyvybess = "10";
            $sugebejimas = "1";
            $pinigai = "1000";
            $wins = "0";
            $loses = "0";
            $ginklo_att = "0";
            $ginklas = "Beginklis";
            $gynyba = "5";

            $uzregintas = date("Y-m-d");
            $pask = time();

            $nicko = "$nick.txt";

            $atidarymas = fopen("ndbzgtusrsz/$nicko", "w+");
            fwrite($atidarymas, "1|$passs|$nick|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask|+|0|$gynyba|0|$mo|10|12.1|aps_kodas|0|Be_sarvu|0|\n");
            fclose($atidarymas);
            chmod("ndbzgtusrsz/$nicko", 0777);

            $pmi = "priv_zin";

            $atidaryma = fopen("$pmi/$nicko", "w+");
            fwrite($atidaryma, "@insaider|Orda - the best game!!! Toki zaidima galite nuspirkti <b>WapMaster.LT</b> saite;)||\n");
            fclose($atidaryma);
            chmod("$pmi/$nicko", 0777);

            $fopy = fopen("txt/reg_apsauga.txt", "w");
            fwrite($fopy, "$tim");
            fclose($fopy);

            $fopy = fopen("txt/pask_reg.txt", "w");
            fwrite($fopy, "$nick");
            fclose($fopy);

            $fopy = fopen("kronoss/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("txt/linijos/$nick.txt", "w");
            fwrite($fopy, "--=====--");
            fclose($fopy);

            $fopy = fopen("txt/icons/$nick.txt", "w");
            fwrite($fopy, "[>]");
            fclose($fopy);


            $fopy = fopen("pastatai/sachtos/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("pastatai/lentpjuves/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("pastatai/kareivines/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("pastatai/fermos/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("pastatai/auksas/$nick.txt", "w");
            fwrite($fopy, "4000");
            fclose($fopy);

            $fopy = fopen("pastatai/mediena/$nick.txt", "w");
            fwrite($fopy, "3000");
            fclose($fopy);

            $fopy = fopen("pastatai/gelezis/$nick.txt", "w");
            fwrite($fopy, "3000");
            fclose($fopy);

            $fopy = fopen("pastatai/xp/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("ejimai/$nick.txt", "w");
            fwrite($fopy, "25");
            fclose($fopy);



            $fopy = fopen("kariai/karolauke/$nick.txt", "w");
            fwrite($fopy, "50");
            fclose($fopy);

            $fopy = fopen("kariai/fermeriai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/darbininkai/$nick.txt", "w");
            fwrite($fopy, "70");
            fclose($fopy);

            $fopy = fopen("kariai/vergai/$nick.txt", "w");
            fwrite($fopy, "50");
            fclose($fopy);

            $fopy = fopen("kariai/lankininkai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/riteriai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/padegejai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/sunkiejiriteriai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/ietininkai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/lankininkaisukardais/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/raiteliai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/sakalininkai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/kariaisuarbaletais/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/negrai/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);

            $fopy = fopen("kariai/kariaisukuokomis/$nick.txt", "w");
            fwrite($fopy, "0");
            fclose($fopy);
        }
    }
}

print '</card></wml>';
?>