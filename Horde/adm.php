<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$dsghj = date("H:i Y-m-d");
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Valdymo CP";
include ("config.php");





if ($id == "meniu")
{
    if ($stat == "mod")
    {
    echo "<p align=\"left\"><small>Mod meniu<br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban\">Deti bana</a><br/>
$iconas<a href=\"bals.php?nick=$nick&amp;pass=$pass&amp;id=keisti\">Keisti balsavima</a><br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ban_logs\">Ban logai</a><br/>";
    }
    if ($vrd == "@$nick")
    {
        $uzd = file_get_contents("txt/uzdirbta.txt");
        $nkh22 = file("txt/sms_log.txt");
        $kieknkh2 = count($nkh22);
        for ($py22 = 0; $py22 < $kieknkh2; $py22++)
        {
            $kly22 = explode("|", $nkh22[$py22]);
            $lkk = substr($kly22[2], 0, 10);
            if ($lkk != $ll1)
            {
                $nkh22[$py22] = "";
                $fpz222 = fopen("txt/sms_log.txt", "w");
                fwrite($fpz222, implode($nkh22));
                fclose($fpz222);
            }
        }
        $log_file = "txt/sms_log.txt";
        $nuskk = file($log_file);
        $viso_logu = count($nuskk);

        $lol = 0;
        for ($nx = 0; $nx < $viso_logu; $nx++)
        {
            $dfsg = explode("|", $nuskk[$nx]);
            $blet = $dfsg[4];
            $lol = $lol + $blet;
        }
        $a = $lol / 100;
        $uzd2 = round($uzd / 3, 0);
        echo "$lin<br/>Admin meniu<br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=nuimti_mod\">Atimti moda</a><br/>";
    if ($nick == "$valdovas")
    {
        echo "$lin<br/>$valdovas meniu<br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">Duoti moda</a><br/>
$iconas<a href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=krd\">Duot kr / Atimt kr</a><br/>
$iconas<a href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=index_topic\">Indexo topicas</a><br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=sms_log\">Siandien sms logai ($viso_logu/$a)</a><br/>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=empty_ban_logs\">Valyti banu logus</a><br/>"; 
}
echo"
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban\">Nuimti bana</a><br/>
$iconas<a href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=trint\">Trinti nick</a></small></p>
";
    }
    echo "$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>";
}










if ($id == "ban_logs")
{
    if ($stat != "mod")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Ban logai<br/>
$lin</small></p>";

        $log_file = "txt/ban_log.txt";
        $nuskk = file($log_file);
        $viso_logu = count($nuskk);
        $puslapiu_skaicius = 5;
        if ($viso_logu == 0)
        {
            echo " <p align=\"left\"><small>
        Dar niekas nieko nebanino<br/></small></p>";
        }
        else
        {
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
            if ($viso_logu <= $page * $puslapiu_skaicius)
            {
                $iki = $viso_logu;
            }
            echo '<p align="left"><small>';
            for ($g = $nuo; $g < $iki; $g++)
            {
                $g6 = array_reverse($nuskk);
                $k6 = explode("|", $g6[$g]);
                $bn_l = round(($k6[1]) / 60, 0);
                echo "
<u>Kam ban</u>: $k6[0]<br/>
<u>Kuriam laikui</u>: $bn_l minutems<br/>
<u>Kas uzbanino</u>: $k6[3]<br/>
<u>Kodel</u>: $k6[2]<br/>
<u>Kada</u>: $k6[4]<br/>
<br/>";
            }
            echo '</small></p>';
            $viso_puslapiu = $viso_logu / $puslapiu_skaicius;
            $viso_puslapiai = 0;
            $starto_skaicius = 1;
            while ($viso_puslapiai < $viso_puslapiu)
            {
                if ($page == $starto_skaicius)
                {
                    echo "<p align=\"left\"><small>[$starto_skaicius]</small></p>";
                }
                else
                {
                    echo "<p align=\"left\"><small><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=ban_logs&amp;page=$starto_skaicius\">[$starto_skaicius]</a></small></p>";
                }
                $viso_puslapiai++;
                $starto_skaicius++;

            }
        }

        echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "mod_ban")
{
    if ($stat != "mod")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        $kam = $_GET['kam'];
        echo "<p align=\"left\"><small>Deti kovotojui bana!<br/>
-<br/>
Nickas:<br/></small></p>";
        if ($kam != "")
        {
            echo "<p align=\"left\"><small>$kam<br/></small></p>";
        }
        else
        {
            echo "<p align=\"left\"><small>
<input name=\"kam_ban\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"$kam\"/><br/></small></p>";
        }
        echo "<p align=\"left\">
<small>Laikas (minutemis):<br/>
<input name=\"laiks\" type=\"text\" format=\"*N\" maxlength=\"5\" title=\"laikas\" value=\"\"/><br/>
Kodel banini:<br/>
<input name=\"kuode\" type=\"text\" maxlength=\"180\" title=\"kode\" value=\"\"/><br/>
- <anchor>Baninti<go href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_baninu&amp;kam=$kam\" method=\"post\">
    <postfield name=\"kam_ban\" value=\"$(kam_ban)\"/>
    <postfield name=\"laiks\" value=\"$(laiks)\"/>
    <postfield name=\"kuode\" value=\"$(kuode)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "mod_baninu")
{
    if ($stat != "mod")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        $kam = $_GET['kam'];
        if ($kam == "")
        {
            $kam_ban = $_POST['kam_ban'];
        }
        else
        {
            $kam_ban = $kam;
        }
        $laiks = $_POST['laiks'];
        $kuode = $_POST['kuode'];
        if ($kam_ban == "")
        {
            $er = "Nenurodei ka baninti";
        }
        if ($kuode == "")
        {
            $er = "Nenurodei kodel banini";
        }
        if ($laiks == "")
        {
            $er = "Nenurodei kokiam laikui uzbaninti";
        }
        if (!file_exists("ndbzgtusrsz/$kam_ban.txt"))
        {
            $er = "Sis zaidejas neuzregistruotas!";
        }
        if ($laiks > 99999)
        {
            $er = "Tokiam laikui baninti negali";
        }
        if ($laiks == 0)
        {
            $er = "Tokiam laikui baninti negali";
        }
        if ($kam_ban == $nick)
        {
            $er = "Saves baninti negalima";
        }
        $g6 = file("txt/nick_bans.txt");
        $kiek_g6 = count($g6);
        for ($pf = 0; $pf < $kiek_g6; $pf++)
        {
            $k6 = explode("|", $g6[$pf]);
            if ($kam_ban == $k6[0])
            {
                $er = "Sis zaidejas jau uzbanintas";
            }
        }
        if ($kam_ban == "ArChAnGeL")
        {
            $er = "Suski tu kurva! nebandyk manes banint, gaidy nx!";
        }
        if ($er == "")
        {
            $arre = array("<", ">", "&", "^", "%", "\n", "|");
            $kuode = str_replace($arre, "", $kuode);
            $laiks2 = $laiks * 60;
            $ban_time = time() + $laiks2;
            $fp = fopen("txt/nick_bans.txt", "a");
            fwrite($fp, "$kam_ban|$ban_time|$kuode|$vrd|\n");
            fclose($fp);
            $iras = $ban_time - time();
            $fp6 = fopen("txt/ban_log.txt", "a");
            fwrite($fp6, "$kam_ban|$iras|$kuode|$vrd|$laikas|\n");
            fclose($fp6);
            $er = "Uzbaninta";
        }
        echo "<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "daryti_modu")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[&lt;] Atgal</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Daryti modu<br/>
$lin<br/>
Nickas:<br/>
<input name=\"kam_mod\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"\"/><br/>
- <anchor>Daryti<go href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=darau_mod\" method=\"post\">
    <postfield name=\"kam_mod\" value=\"$(kam_mod)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "darau_mod")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        $kam_mod = $_POST['kam_mod'];
        if ($kam_mod == "")
        {
            $er = "Nenurodei kam suteikti mod";
        }
        if (!file_exists("ndbzgtusrsz/$kam_mod.txt"))
        {
            $er = "Sis zaidejas neuzregistruotas!";
        }
        $nv = file("txt/mods.txt");
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            if ($kam_mod == $kv[0])
            {
                $er = "Sis zaidejas jau moderatorius!";
            }
        }
        if ($er == "")
        {

            $fp1 = fopen("txt/mods.txt", "a");
            fwrite($fp1, "$kam_mod|mod|\n");
            fclose($fp1);
            $er = "$kam_mod padarei moderatoriumi";
        }
        echo "<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "nuimti_mod")
{
    if ($vrd !== "@$nick")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Nuimti mod<br/>
$lin<br/>
Nickas:<br/>
<input name=\"kam_mod\" type=\"text\" maxlength=\"50\" title=\"ka\" value=\"\"/><br/>
- <anchor>Nuimti<go href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=nuimu_mod\" method=\"post\">
    <postfield name=\"kam_mod\" value=\"$(kam_mod)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "nuimu_mod")
{
    if ($vrd !== "@$nick")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        $kam_mod = $_POST['kam_mod'];
        if ($kam_mod == "@$nick")
        {
            $er = "Eik nx!";
        }
        if ($kam_mod == "")
        {
            $er = "Nenurodei kam nuimti mod";
        }
        if (!file_exists("ndbzgtusrsz/$kam_mod.txt"))
        {
            $er = "Sis zaidejas neuzregistruotas!";
        }
        if ($er == "")
        {
            $nkh2y = file("txt/mods.txt");
            $kiek_nkh2y = count($nkh2y);
            for ($py2y = 0; $py2y < $kiek_nkh2y; $py2y++)
            {
                $kly2y = explode("|", $nkh2y[$py2y]);
                if ($kam_mod == $kly2y[0])
                {
                    $nkh2y[$py2y] = "";
                    $fpz2y = fopen("txt/mods.txt", "w");
                    fwrite($fpz2y, implode($nkh2y));
                    fclose($fpz2y);
                }
            }
            $er = "$kam_mod nuemei moderatoriaus statusa";
        }
        echo "<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=daryti_modu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "unban")
{
    if ($vrd !== "@$nick")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        $nv = array_reverse(file("txt/nick_bans.txt"));
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            $uzb_lv = $kv[1] - time();
            $uzb_lv2 = round(($uzb_lv) / 60, 0);

            echo "<p align=\"left\"><small>
<u>Kan:</u> $kv[0]<br/>
<u>Uzbanintas del:</u> $kv[2]<br/>
<u>Uzbanino:</u> $kv[3]<br/>
<u>Banas dar tesis:</u> $uzb_lv2 minutes<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban2&amp;kam=$kv[0]\">- Nuimti ban</a><br/><br/>
</small></p>";
        }

        echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "unban2")
{
    if ($vrd !== "@$nick")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        $kam = $_GET['kam'];

        $er = "Atbaninta";
        $nv = file("txt/nick_bans.txt");
        $kiek_nv = count($nv);
        for ($pv = 0; $pv < $kiek_nv; $pv++)
        {
            $kv = explode("|", $nv[$pv]);
            if ($kam == $kv[0])
            {
                $nv[$pv] = "";
                $fpv = fopen("txt/nick_bans.txt", "w");
                fwrite($fpv, implode($nv));
                fclose($fpv);
                break;
            }
        }

        echo "<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=unban\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "sms_log")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        $log_file = "txt/sms_log.txt";
        $nuskk = file($log_file);
        $viso_logu = count($nuskk);

        $lol = 0;
        for ($nx = 0; $nx < $viso_logu; $nx++)
        {
            $dfsg = explode("|", $nuskk[$nx]);
            $blet = $dfsg[4];
            $lol = $lol + $blet;
        }
        $a = $lol / 100;

        echo "<p align=\"left\"><small>Siandienos SmS logai<br/>
Logu $viso_logu<br/>
Uzdirbta $a Lt<br/>
-</small></p>";

        $puslapiu_skaicius = 10;
        if ($viso_logu == 0)
        {
            echo " <p align=\"left\"><small>
        Dar niekas nesiunte mokamu sms<br/></small></p>";
        }
        else
        {
            echo"<p align=\"left\"><small>";
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
            if ($viso_logu <= $page * $puslapiu_skaicius)
            {
                $iki = $viso_logu;
            }
          
            for ($g = $nuo; $g < $iki; $g++)
            {
                $g6 = array_reverse($nuskk);
                $k6 = explode("|", $g6[$g]);
                $lk = substr($k6[2], 0, 10);
                if ($lk == $ll1)

$kaina = $k6[4] / 100;

                {
                    echo "
<u>Siuntejas</u>: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$k6[5]\">$k6[5]</a><br/>
<u>Siuntejo nr.</u>: +$k6[0]<br/>
<u>Gavimo nr.</u>: $k6[3]<br/>
<u>Kaina</u>: $kaina lt<br/>
<u>Zinutes tekstas</u>: $k6[1]<br/>
<u>Siuntimo laikas</u>: $k6[2]<br/>
-<br/>";
                }
            }            $viso_puslapiu = $viso_logu / $puslapiu_skaicius;
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
                    echo "<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=sms_log&amp;page=$starto_skaicius\">[$starto_skaicius]</a>";
                }
                $viso_puslapiai++;
                $starto_skaicius++;

            }
echo"</small></p>";
        }
 
        echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "empty_ban_logs")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Isvalyta<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
        $fp6 = fopen("txt/ban_log.txt", "w");
        fwrite($fp6, "");
        fclose($fp6);
    }
}

if ($id == "duoti_lvl")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Duoti XP<br/>
$lin<br/>
Nick:<br/>
<input name=\"kam2\" type=\"text\" maxlength=\"50\" title=\"kam\" value=\"\"/><br/>
XP kiekis:<br/>
<input name=\"xp2\" type=\"text\" format=\"*N\" maxlength=\"100\" title=\"XP\" value=\"\"/><br/>
- <anchor>Toliau<go href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=duoti_lvl2\" method=\"post\">
    <postfield name=\"kam2\" value=\"$(kam2)\"/>
    <postfield name=\"xp2\" value=\"$(xp2)\"/>
</go></anchor><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
    }
}

if ($id == "duoti_lvl2")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[^] Atgal</a></small></p>";
    }
    else
    {
        $kam2 = $_POST['kam2'];
        $xp2 = $_POST['xp2'];
        if ($kam2 == "")
        {
            $er = "<b>Nenurodei kam duosi lygiu</b>";
        }
        if (!file_exists("ndbzgtusrsz/$kam2.txt"))
        {
            $er = "<b>Sis zaidejas neuzregistruotas!</b>";
        }
        if ($er == "")
        {

            $NKMi = file_get_contents("ndbzgtusrsz/$kam2.txt");
            $infa = explode("|", $NKMi);
            $xp1 = $infa[19];
            $lv1 = $infa[0];
            $xp_gal1 = $xp1 + $xp2;


            $lvl = 99999;
            $enda = 99999;
            $qq = 1.1;
            for ($rr = 1; $rr < 99999; $rr++)
            {
                if ($rr == 1)
                {
                    $qq = 1.1;
                }
                else
                {
                    $qq = $qq * 1.1;
                }
                if ($qq >= $xp_gal1 / 10 && $enda != $rr)
                {
                    $lvl = $rr;
                    $enda = $rr + 1;
                    $buves = $qq;
                }
                if ($enda == $rr)
                {
                    $lieka = round($buves * 10, 1);
                    break;
                }
            }

            $fdkjg = "$lvl" - "$lv1";
            $kiekupp = ($fdkjg * 2) + $points;
            $fpr = fopen("ndbzgtusrsz/$kam2.txt", "w");
            fwrite($fpr, "$lvl|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$kiekupp|$infa[16]|$infa[17]|$infa[18]|$xp_gal1|$lieka|$infa[21]|$infa[22]|$infa[23]||\n");
            fclose($fpr);
            $er = "Davei $xp2 XP, to $kam2";
        }
        echo "<p align=\"center\"><small><b>$er</b><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=duoti_lvl\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>
";
    }
}

/////////////////Pervesti pinigu///////////////////////

if ($id == "pervesti")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
    }
    else
    {
        $kam = $_GET['kam'];
        echo "<p align=\"center\"><small>
Pinigus gaus $kam<br/>
<b>Kiek pervesi?<br/></b></small>
<input name=\"howy\" type=\"text\" format=\"*N\" maxlength=\"20\" title=\"Kiek?\"/><br/>
<anchor>Pervesti<go href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=pervesti2&amp;kam=$kam\" method=\"post\">
    <postfield name=\"howy\" value=\"$(howy)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>
";
    }
}

if ($id == "pervesti2")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>";
    }
    else
    {
        $kam = $_GET['kam'];
        $howy = $_POST['howy'];

        if (!file_exists("ndbzgtusrsz/$kam.txt"))
        {
            $er = "Sis zaidejas neuzregistruotas!";
        }
        if ($kam == $nick)
        {
            $er = "Sau pervest negalima";
        }
        if ($pinigai < $howy)
        {
            $er = "Neturi tiek pinigu";
        }
        if ($er == "")
        {
            $us = @file_get_contents("ndbzgtusrsz/$kam.txt");
            $infa = explode("|", $us);
            $gavejo_pinigai = $infa[7];
            $piny = round(($pinigai - $howy), 2);
            $fp4 = fopen("$gameriai", "w");
            fwrite($fp4, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$piny|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
            fclose($fp4);
            $gavejo_piny = round(($gavejo_pinigai + $howy), 2);
            $fp1 = fopen("$geimeriai/$kam.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$gavejo_piny|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|$infa[14]|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            fclose($fp1);
            $er = "Pervedei $howy to $kam";
        }
        echo "<p align=\"center\"><small>$er<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=pervesti&amp;kam=$kam\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
    }
}

if ($id == "trint_tema")
{
    if ($vrd == "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Istrinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
        $nkh2 = file("txt/temos.txt");
        $kiek_nkh2 = count($nkh2);
        for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
        {
            $kly2 = explode("|", $nkh2[$py2]);
            if ($te == $kly2[1])
            {
                $nkh2[$py2] = "";
                $fpz2 = fopen("txt/temos.txt", "w");
                fwrite($fpz2, implode($nkh2));
                fclose($fpz2);
                break;
            }
        }
        unlink("frm_temos/$te.txt");
    }
}

if ($id == "rakint_tema")
{
    if ($vrd == "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Uzrakinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
        $nkh2 = file("txt/temos.txt");
        $kiek_nkh2 = count($nkh2);
        for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
        {
            $kly2 = explode("|", $nkh2[$py2]);
            if ($te == $kly2[1])
            {
                $lko = time();
                $nkh2[$py2] = "$lko|$kly2[1]|$kly2[2]|taip|$kly2[4]";
                $fpz2 = fopen("txt/temos.txt", "w");
                fwrite($fpz2, implode($nkh2));
                fclose($fpz2);
                break;
            }
        }
    }
}

if ($id == "atrakint_tema")
{
    if ($vrd == "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Atrakinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
        $nkh2 = file("txt/temos.txt");
        $kiek_nkh2 = count($nkh2);
        for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
        {
            $kly2 = explode("|", $nkh2[$py2]);
            if ($te == $kly2[1])
            {
                $lko = time();
                $nkh2[$py2] = "$lko|$kly2[1]|$kly2[2]|ne|$kly2[4]";
                $fpz2 = fopen("txt/temos.txt", "w");
                fwrite($fpz2, implode($nkh2));
                fclose($fpz2);
                break;
            }
        }
    }
}

if ($id == "kabint_tema")
{
    if ($vrd == "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Prikabinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
        $nkh2 = file("txt/temos.txt");
        $kiek_nkh2 = count($nkh2);
        for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
        {
            $kly2 = explode("|", $nkh2[$py2]);
            if ($te == $kly2[1])
            {
                $lko = time();
                $nkh2[$py2] = "$lko|$kly2[1]|Prikabinta|$kly2[3]|$kly2[4]";
                $fpz2 = fopen("txt/temos.txt", "w");
                fwrite($fpz2, implode($nkh2));
                fclose($fpz2);
                break;
            }
        }
    }
}

if ($id == "nukabint_tema")
{
    if ($vrd == "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Nukabinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/>
</small></p>";
        $nkh2 = file("txt/temos.txt");
        $kiek_nkh2 = count($nkh2);
        for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
        {
            $kly2 = explode("|", $nkh2[$py2]);
            if ($te == $kly2[1])
            {
                $lko = time();
                $nkh2[$py2] = "$lko|$kly2[1]|Laisva|$kly2[3]|$kly2[4]";
                $fpz2 = fopen("txt/temos.txt", "w");
                fwrite($fpz2, implode($nkh2));
                fclose($fpz2);
                break;
            }
        }
    }
}

if ($id == "trint_kom")
{
    if ($vrd == "@$valdovas")
    {
        if (file_exists("frm_temos/$te.txt"))
        {
            echo "<p align=\"center\"><small><b>Istrinta<br/></b>
$lin<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=skaityti_tema&amp;ka=$te\">I tema</a><br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">I foruma</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small></p>";
            $nkh2 = file("frm_temos/$te.txt");
            $kiek_nkh2 = count($nkh2);
            for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
            {
                $kly2 = explode("|", $nkh2[$py2]);
                if ($kj == $kly2[4])
                {
                    $nkh2[$py2] = "";
                    $fpz2 = fopen("frm_temos/$te.txt", "w");
                    fwrite($fpz2, implode($nkh2));
                    fclose($fpz2);
                    break;
                }
            }
        }
    }
}

print '</card></wml>';
?>

