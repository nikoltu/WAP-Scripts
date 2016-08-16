<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>';
$laikokiekdbrrealibeje = date("H:i:s");
echo "<card id=\"index\" title=\"ORDA by Insaider\">";
$kur = "Zaidime";
include ("config.php");
$zzz = file("priv_zin/$nick.txt");
$kiek_pmu = count($zzz);
$dienoslaikas = file_get_contents("dienoslaikas/$nick.txt")-time();
/////////////////Pagr meniu///////////////////////

if ($id == "")
{
    if (file_get_contents("txt/klanu.txt") < time())
    {
        $op = glob("klaniukos/*.ta");
        for ($i = 0; $i < count($op); $i++)
        {
            $dfd = file($op[$i]);
            for ($t = 0; $t < count($dfd); $t++)
            {
                $fdp = explode("|", $dfd[$t]);
                $cyks2 = explode("|", file_get_contents("ndbzgtusrsz/$fdp[0].txt"));
                if (!file_exists("kronoss/$fdp[0].txt"))
                {
                    $kronu = 0;
                }
                else
                {
                    $kronu = file_get_contents("kronoss/$fdp[0].txt");
                }
                if ($t == 0)
                {
                    $gavo = count($dfd) * 0.02;
                    $tau = "Kaip ir visada, tavo gaujos nariai moka tau uz stoga, tad kas 3h gauni po $gavo kreditus, pritrauk i savo gauja dar daugiau kovotoju ir gausi ju daugiau ;)";
                }
                else
                {
                    $gavo = 0.02;
                    $tau = "Kaip ir visada, kas 3h, is pulko gavai $gavo kreditus, turek gauju daug ir gauk kreditu daugiau ;)";
                }
                $atidaryma = fopen("priv_zin/$fdp[0].txt", "a");
                fwrite($atidaryma, "@admin|$tau|$laikas|\n");
                fclose($atidaryma);
                $fop = fopen("kronoss/$fdp[0].txt", "w+");
                fwrite($fop, $kronu + $gavo);
                fclose($fop);
                @chmod("kronoss/$fdp[0].txt", 0777);
                $fop = fopen("$geimeriai/$fdp[0].txt", "w");
                fwrite($fop, "$cyks2[0]|$cyks2[1]|$cyks2[2]|$cyks2[3]|$cyks2[4]|$cyks2[5]|$cyks2[6]|$cyks2[7]|$cyks2[8]|$cyks2[9]|$cyks2[10]|$cyks2[11]|$cyks2[12]|$cyks2[13]|+|$cyks2[15]|$cyks2[16]|$cyks2[17]|$cyks2[18]|$cyks2[19]|$cyks2[20]|$cyks2[21]|$cyks2[22]|$cyks2[23]|$cyks2[24]|$cyks2[25]|");
                fclose($fop);
            }
        }
        $fopt = fopen("txt/klanu.txt", "w");
        fwrite($fopt, time() + 3 * 60 * 60);
        fclose($fopt);
    }

    $bukis = explode("|", file_get_contents("txt/konk.ly"));
    if (($bukis[1] + (3 * 24 * 60 * 60)) < time())
    {
        $da = file("txt/konk_dal.ly");
        $kiek2 = count($da);
        for ($y = 0; $y < $kiek2; $y++)
        {
            $nar = explode("|", $da[$y]);
            $infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
            $ski = round($infa[19] - $nar[1], 1);
            $arr[] = array($ski, $nar[0]);
        }
        rsort($arr);

        $open = fopen("txt/konk_rez.ly", "a");
        fwrite($open, "$bukis[0]|{$arr[0][1]}|{$arr[1][1]}|{$arr[2][1]}|\n");
        fclose($open);

        for ($f = 0; $f < 3; $f++)
        {
            if (!file_exists("kronoss/{$arr[$f][1]}.txt"))
            {
                $krou = 0;
            }
            else
            {
                $krou = file_get_contents("kronoss/{$arr[$f][1]}.txt");
            }
            if ($f == '0')
            {
                $krp = '3';
            }
            if ($f == '1')
            {
                $krp = '2';
            }
            if ($f == '2')
            {
                $krp = '1';
            }
            $fop = fopen("kronoss/{$arr[$f][1]}.txt", "w+");
            fwrite($fop, $krou + $krp);
            fclose($fop);
            chmod("kronoss/{$arr[$f][1]}.txt", 0777);
        }


        $open = fopen("txt/konk_dal.ly", "w");
        fwrite($open, "");
        fclose($open);
        $open = fopen("txt/konk.ly", "w+");
        fwrite($open, "$laikas|$time|\n");
        fclose($open);
    }

    $topic = @file_get_contents("txt/topic.txt");
    if (!file_exists("kronoss/$nick.txt"))
    {
        $kronu = 0;
    }
    else
    {
        $kronu = file_get_contents("kronoss/$nick.txt");
    }

    echo "<p align=\"center\"><small>






</small></p>";

    if (!file_exists("rutuliai/$nick.txt"))
    {
        $rutuliu = 0;
    }
    else
    {
        $rutuliu = file_get_contents("rutuliai/$nick.txt");
    }

    if ($rutuliu > 4)
{
$kas = "$nick";

$mam = file_get_contents("txt/renka.txt");

if (substr_count($mam, "$kas")<1)

$julija = fopen("txt/renka.txt", "a+");
        fwrite($julija, "$kas|\n");
fclose($julija);
}

$bibys = count(file("txt/renka.txt"));

if ($bibys > 0)
{
echo"<p align=\"center\"><small>
</small></p>";
}

echo"<p align=\"center\">
<small>
$laikokiekdbrrealibeje<br/>
$lin<br/>
Amzius: $amzius<br/>
Iki mokesciu surinkimo<b>  "; echo round((file_get_contents("dienoslaikas/$nick.txt")-time())/60,0); echo"</b>  min.<br/>
$lin<br/>
$topic (<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$topic_keitejas\">$topic_keitejo</a>)";
    if ($stat == "mod")
    {    echo "<a href=\"topic.php?nick=$nick&amp;pass=$pass\">(R)</a>
"; }
echo"<br/>
$lin<br/>
<a href=\"new.php?nick=$nick&amp;pass=$pass&amp;id=\">Naujienos [$data]</a><br/>
<b><a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=\">::Pasiulymai::</a></b><br/>
$lin<br/>";
    if ($stat == "mod")
    {    echo "[^]<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">MOD meniu</a>[^]<br/>$lin<br/>
"; }


echo"
</small></p>";



    echo"<p align=\"left\"><small>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">Pranesimai($kiek_pmu)</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kristalai\">Kristalai($kronu)</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Zaidimo meniu</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=atv\">Zaideju atvedimas uz kristalus,prizus!</a><br/>
$lin<br/>
$iconas<a href=\"pilis.php?nick=$nick&amp;pass=$pass\">Mano pilis</a><br/>
$iconas<a href=\"darbininkai.php?nick=$nick&amp;pass=$pass\">Darbininkai</a><br/>
$iconas<a href=\"sleptuves.php?nick=$nick&amp;pass=$pass\">Sleptuves</a><br/>
$iconas<a href=\"sachtos.php?nick=$nick&amp;pass=$pass\">Sachtu statyba</a><br/>
$iconas<a href=\"lentpjuves.php?nick=$nick&amp;pass=$pass\">Lentpjuviu statyba</a><br/>
$iconas<a href=\"fermos.php?nick=$nick&amp;pass=$pass\">Fermu statyba</a><br/>
$iconas<a href=\"kareivines.php?nick=$nick&amp;pass=$pass\">Kareviniu statyba</a><br/>
$iconas<a href=\"karo_laukas.php?nick=$nick&amp;pass=$pass\">Karo laukas</a>";

    if ($karolaukekovoja > 0)
    {
        echo "[$karolaukekovoja]";
    }
    if ($sachtu > 0)
    {
        echo "<br/>$iconas<a href=\"sachtose.php?nick=$nick&amp;pass=$pass\">Sachtos($sachtu)</a>[$sachtininku]";
    }
    if ($lentpjuviu > 0)
    {
        echo "<br/>$iconas<a href=\"lentpjuvese.php?nick=$nick&amp;pass=$pass\">Lentpjuves($lentpjuviu)</a>[$lentpjuvininku]";
    }
    if ($fermu > 0)
    {
        echo "<br/>$iconas<a href=\"fermose.php?nick=$nick&amp;pass=$pass\">Fermos($fermu)</a>[$fermeriu]";
    }
    if ($kareiviniu > 0)
    {
        echo "<br/>$iconas<a href=\"kareivinese.php?nick=$nick&amp;pass=$pass\">Karevines($kareiviniu)</a>[$kareiiviineseee]";
    }
echo"
<br/>Ejimai<b>($turiejimu)</b><br/>
$lin<br/>";

    $nnn = file("txt/on.txt");
    $kiek = count($nnn);
    for ($i = 0; $i < $kiek; $i++)
    {
        $et = explode("|", $nnn[$i]);
        if ($et[2] == "Viktorinoje")
        {
            $vik[] = $et[0];
        }
    }
    $vikte_on = count($vik);

    echo "
$iconas<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">Viktorina ($vikte_on)</a><br/>
";

echo "
$iconas<a href=\"bals.php?nick=$nick&amp;pass=$pass&amp;id=\">Balsavimas</a><br/>
$iconas<a href=\"topas.php?nick=$nick&amp;pass=$pass&amp;id=top\">Topai</a><br/>
</small></p><p align=\"center\"><small>
$lin<br/>
Online <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=on\"><b>$online</b></a><br/>
Online max <b>$max_onl</b><br/>
$lin<br/>
Skaitliuko vieta<br/>
$lin<br/>
&#169;<a href=\"http://insaider.xwap.lt\">Insaider</a><br/>
</small></p>";




    if ($dienoslaikas < 0)
    {
        echo "";

$time=time()+60*60; file_put_contents("dienoslaikas/$nick.txt",$time);
$auakso=15 * $fermeriu + $aukso; file_put_contents("pastatai/auksas/$nick.txt",$auakso);
$medieana=10 * $lentpjuvininku + $medienos; file_put_contents("pastatai/mediena/$nick.txt",$medieana);
$geleziez =10 * $sachtininku + $gelezies; file_put_contents("pastatai/gelezis/$nick.txt",$geleziez);
file_put_contents("ejimai/$nick.txt",25);
$amziuz =$amziausdienos + 1; file_put_contents("age/$nick.txt",$amziuz);
$verguuzzz = round(($karolaukekovoja / 10), 0) + $vergu; file_put_contents("kariai/vergai/$nick.txt",$verguuzzz);
}


    $prisij = time();
    $fp = fopen("$gameriai", "w");
    fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$prisij|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
    fclose($fp);
}



if ($id == "kristalai")
{
    if (!file_exists("kronoss/$nick.txt"))
    {
        $kronu = 0;
    }
    else
    {
        $kronu = file_get_contents("kronoss/$nick.txt");
    }
    echo "<p align=\"left\"><small>Kristalai<b>($kronu)</b><br/>-<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kristalu\">Pirkti Kristalus</a><br/>
-<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=auksa&amp;kj=1\">100000 aukso (1)</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=gelezi&amp;kj=1\">100000 gelezi (1)</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=nkr&amp;ka=mediena&amp;kj=1\">100000 mediena (1)</a><br/>
--<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}

if ($id == "nkr")
{
    if (!file_exists("kronoss/$nick.txt"))
    {
        $kronu = 0;
    }
    else
    {
        $kronu = file_get_contents("kronoss/$nick.txt");
    }
    $kj = ereg_replace("[^0-9]", "", $kj);
    if ($ka == "auksa" or $ka == "mediena" or $ka == "gelezi")
    {
        $df = "ok";
    }
    if ($df != "ok")
    {
        $bad = "Error 1 !";
    }

    if ($ka == "auksa" or $ka == "gelezi" or $ka == "mediena")
    {
    if ($ka == "auksa" && $kronu < 1)
    {
        $bad = "Neuztenka kristalu!";
    }
    if ($ka == "gelezi" && $kronu < 1)
    {
        $bad = "Neuztenka kristalu!";
    }
    if ($ka == "mediena" && $kronu < 1)
    {
        $bad = "Neuztenka kristalu!";
    }

    }

    if ($bad == "")
    {
        $bad = "Nusipirkai sekmingai :)";

        if ($ka == "auksa")
        {
            if ($kj == 1)
            {
                $auksviso = $aukso + 100000;
            }
            $fp1 = fopen("pastatai/auksas/$nick.txt", "w");
            fwrite($fp1, "$auksviso");
            fclose($fp1);
            $kronu = $kronu - 1;
        }

        if ($ka == "mediena")
        {
            if ($kj == 1)
            {
                $medienozviso = $medienos + 100000;
            }
            $fp1 = fopen("pastatai/mediena/$nick.txt", "w");
            fwrite($fp1, "$medienozviso");
            fclose($fp1);
            $kronu = $kronu - 1;
        }

        if ($ka == "gelezi")
        {
            if ($kj == 1)
            {
                $gelezviso = $gelezies + 100000;
            }
            $fp1 = fopen("pastatai/gelezis/$nick.txt", "w");
            fwrite($fp1, "$gelezviso");
            fclose($fp1);
            $kronu = $kronu - 1;
        }


        $fp = fopen("kronoss/$nick.txt", "w");
        fwrite($fp, "$kronu");
        fclose($fp);
    }

    echo "<p align=\"left\"><small>$bad<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=kronos\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "kristalu")
{
	

    echo "<p align=\"left\"><small>
Kristalu pirkimas<br/>
-<br/>
SMS: <b>$sms1 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina1</b><br/>
Kristalu: <b>1</b><br/>
-<br/>
SMS: <b>$sms2 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina2</b><br/>
Kristalu: <b>3</b><br/>
-<br/>
SMS: <b>$sms3 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina3</b><br/>
Kristalu: <b>5</b><br/>
-<br/>
SMS: <b>$sms4 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina4</b><br/>
Kristalu: <b>7</b><br/>
-<br/>
SMS: <b>$sms5 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina5</b><br/>
Kristalu: <b>10</b><br/>
-<br/>
SMS: <b>$sms7 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina7</b><br/>
Kristalu: <b>15</b><br/>
-<br/>
SMS: <b>$sms9 $nick crystal</b><br/>
Numeriu: <b>$nr2</b><br/>
Kaina: <b>$kaina9</b><br/>
Kristalu: <b>21</b><br/>
-<br/>
SMS: <b>$sms10 $nick crystal</b><br/>
Numeriu: <b>$nr</b><br/>
Kaina: <b>$kaina10</b><br/>
Kristalu: <b>25</b><br/>



$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
</small></p>";
}




if ($id == "meniu")
{
    echo "<p align=\"left\"><small>$vrd meniu<br/>
-<br/>
$iconas<a href=\"topic.php?nick=$nick&amp;pass=$pass&amp;id=\">Keisti topica</a><br/>
$iconas<a href=\"icon.php?nick=$nick&amp;pass=$pass&amp;id=\">Keisti iconus</a><br/>
$iconas<a href=\"linijos.php?nick=$nick&amp;pass=$pass&amp;id=\">Keisti linijas</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valdzia\">Zaidimo valdzia</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=keisti_pass\">Keisti slaptazodi</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles\">Smiles</a><br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=paieska\">Ieskoti kovotojo</a><br/>
$lin<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I zaidima</a><br/>
</small></p>"; }











if ($id == "rkl")
{
    echo "<p align=\"left\"><small><b>Kaip ideti mokama reklama?</b><br/>
-</small><small>
Mokamos reklamos kaina tik 1lt<br/>
Rodomos 3 naujausios reklamos<br/>
Reikia siusti sms siuo numeriu:<br/>
<b>$nr</b><br/>
Zinuteje irasius:<br/>
<b>$sms1 reklama tavo_url saito_aprasymas</b><br/>
Url reikia rasyti be http://<br/>
<b>Pavyzdys:</b><br/>
$sms1 reklama gamys.xz.lt geras zaidimas<br/>
</small><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\"></a>[&lt;] Zaidimas<br/>
</small></p>
";
}

if ($id == "miestas")
{
    $nnn = file("txt/on.txt");
    $kiek = count($nnn);
    for ($i = 0; $i < $kiek; $i++)
    {
        $et = explode("|", $nnn[$i]);
        if ($et[2] == "Forume")
        {
            $vik[] = $et[0];
        }
    }
    $frm_on = count($vik);
    echo "<p align=\"left\"><small>
-<br/>
<a href=\"bals.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Balsavimas</a><br/>
-<br/>
<a href=\"forumas.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Forumas ($frm_on)</a><br/>";

    $nnn = file("txt/on.txt");
    $kiek = count($nnn);
    for ($i = 0; $i < $kiek; $i++)
    {
        $et = explode("|", $nnn[$i]);
        if ($et[2] == "Chate")
        {
            $pok[] = $et[0];
        }
        if ($et[2] == "Viktorinoje")
        {
            $vik[] = $et[0];
        }
        if ($et[2] == "NON-STOP")
        {
            $non[] = $et[0];
        }
    }
    $pok_on = count($pok);
    $vikte_on = count($vik);
    $non_on = count($non);

    echo "<a href=\"pokalbiai.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Chatas ($pok_on)</a><br/>
<a href=\"vikte.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Viktorina ($vikte_on)</a><br/>
<a href=\"ns.php?nick=$nick&amp;pass=$pass&amp;id=\">[&#187;] Non-stop ($non_on)</a><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";
}

if ($id == "valdzia")
{
    echo "<p align=\"left\"><small>Valdzia<br/>
-<br/>
</small></p>";
echo '<p align="left"><small>';
    echo "Valdovas<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=ArChAnGeL\">@ArChAnGeL</a> (kurejas)<br/>
<br/>";
    echo "
Adminai:<br/>";
    $nv = file("txt/mods.txt");
    $kiek_nv = count($nv);
    for ($pv = 0; $pv < $kiek_nv; $pv++)
    {
        $kv = explode("|", $nv[$pv]);
        if ($kv[1] == "Adminas")
        {
            echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kv[0]\">@$kv[0]</a> (Adminas)<br/>";
        }
    }
    echo "
Modai:<br/>";
    $nv = file("txt/mods.txt");
    $kiek_nv = count($nv);
    for ($pv = 0; $pv < $kiek_nv; $pv++)
    {
        $kv = explode("|", $nv[$pv]);
        if ($kv[1] == "mod")
        {
            echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kv[0]\">*$kv[0]</a> (Moderatorius)<br/>";
        }
    }
    echo '</small></p>';
    echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";

}

if ($id == "kalejimas")
{
    echo "<p align=\"left\"><small>Kovotojai esantys kalejime ir negalintys zaisti<br/>
-<br/>
</small></p>";
    echo '<p align="left"><small>';
    $nph = array_reverse(file("txt/nick_bans.txt"));
    $kiek_nph = count($nph);
    for ($oh = 0; $oh < $kiek_nph; $oh++)
    {
        $oph = explode("|", $nph[$oh]);
        $uz_lkh = $oph[1] - time();
        $uz_lk2h = round(($uz_lkh) / 60, 0);
        echo "
<b>Kalinys</b>: $oph[0]<br/>
<b>Iseis uz</b>: $uz_lk2h minuciu<br/>
<b>Nubaustas del</b>: $oph[2]<br/>
<b>Nubaude</b>: $oph[3]<br/>
<br/>";
    }
    echo '</small></p>';
    echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}

if ($id == "istatymai")
{
    echo "<p align=\"left\"><small>Istatymai, taisykles<br/>
Ju turi laikytis visi be isimciu, nusizengus iskart i kalejima<br/>
-<br/>
Bendros taisykles visiems:<br/>
</small><small>
- Nekenkti sistemai;<br/>
- Aptikus kenkeja apie ji iskart pranesti adminui arba jo padejejams;<br/>
- Nuolat pranesti apie pastebetas klaidas ir bugus;<br/>
- Neniekinti kitu zaideju;<br/>
- Necheatinti;<br/>
- Neikyret adminui!;<br/>
- Draudziama apsimetineti modais ar adminu!;<br/>
- Draudziama kurti debiliskas temas forume;<br/>
- Draudziama forume kurti temas kurios butu skirtos man ($admin), pvz: $admin padek ar Ar galeciau buti modu ir kt.<br/>
</small><small
>Moderatoriu (padejeju) taisykles:<br/></small></p>
<p align=\"left\"><small>
- Nuolatos trinti is forumo nesamoningas temas;<br/>
- Labai gerai zinoti pries tai isvardintas taisykles;<br/>
- Nebaninti be reikalo;<br/>
- Nesikelti pries kitus zaidejus del savo statuso;<br/>
- Reklamuoti si zaidima;<br/>
- Tuos, kas kenkia sistemai is karto baninti ilgiausiam laikui ir iskarto apie tai pranesti adminui<br/>
</small><small>
-<br/>
Uz siu taisykliu sulauzyma i kalejima (ban) be ispejimo arba net nick istrinimas! Tad laikykites taisykliu ir problemu nekils :)<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small></p>";
}


/////////////////PM///////////////////////

if ($id == "pm")
{
    echo "<p align=\"left\"><small>
PM dezute.<br/>
-<br/></small></p>";

    $pm_direktorija = 'priv_zin';
    $DATA_FILE = "$pm_direktorija/$nick.txt";
    $nuskk = file($DATA_FILE);
    $viso_pm = count($nuskk);
    $puslapiu_skaicius = 10;

    if ($viso_pm == 0)
    {
        echo " <p align=\"left\"><small>
        PM dezute tuscia.<br/></small></p>";
    }
    else
    {

        echo " <p align=\"left\"><small>";

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

        if ($viso_pm <= $page * $puslapiu_skaicius)
        {
            $iki = $viso_pm;
        }        $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
            $int = explode('|', $masyvo_apvertimas[$c]);

            $nuo_ko = $int[0];
            $zinute = stripslashes($int[1]);
            $siunt_data = $int[2];
            $masyw = array("@", "*");
            $nuo_ko2 = str_replace($masyw, "", $nuo_ko);
            if ($nuo_ko == "@spider")
            {
                echo "<b>@spider:</b> [$zinute]<br/>
[$siunt_data]<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inr&amp;sk=$int[3]\">[&#187;] Atsakyti</a><br/><br/>";
            }
            else
            {
                if ($nuo_ko2 == $nick)
                {
                    $vrdr = $int[4];
                    if ($int[4] == "$admin")
                    {
                        $vrdr = "@$int[4]";
                    }
                    if ($int[4] != "$admin")
                    {
                        if (in_array("$int[4]\n", file("txt/mods.txt")))
                        {
                            $vrdr = "*$int[4]";
                        }
                    }

                    echo "&#171; tavo: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$int[4]\">$vrdr</a> - [$zinute]<br/>[$siunt_data]<br/><br/>
";
                }
                else
                {
                    echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nuo_ko2\">$nuo_ko</a>: [$zinute]<br/>[$siunt_data]<br/>
                <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=inr&amp;sk=$int[3]\">[&#187;] Atsakyti</a><br/><br/>";
                }
            }
        }

        $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

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
                echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm&amp;page=$starto_skaicius\">[$starto_skaicius]</a>";
            }
            $viso_puslapiai++;
            $starto_skaicius++;

        }

        echo"</small></p>";

        if ($viso_pm >= 199)
        {
            $fff = fopen("priv_zin/$nick.txt", "w+");
            fwrite($fff, "");
            fclose($fff);
        }
    }
    echo '<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
    echo "
<p align=\"left\"><small>
-<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=valyti_pm\">Istrinti visas zinutes</a><br/>
-<br/>
Auto pm valimas kas 200 PM<br/>
Turi zinuciu: $viso_pm PM<br/>
-<br/>
Rasyti PM<br/>
-<br/>
Kam:<br/>
<input name=\"kam\" type=\"text\" maxlength=\"30\" title=\"Nickas\" value=\"\"/><br/>
Zinute:<br/>
<input name=\"zinute\" type=\"text\" maxlength=\"200\" title=\"Zinute\" value=\"\"/><br/>

<anchor>[&#187;] Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm\" method=\"post\">
    <postfield name=\"kam\" value=\"$(kam)\"/>
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor></small><br/>
<small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small>
    </p>";

    $fp1 = fopen("$gameriai", "w");
    fwrite($fp1, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|-|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
    fclose($fp1);
}

if ($id == "inr")
{
    $sk = $_GET['sk'];
    $arrr = file("priv_zin/$nick.txt");
    for ($t = 0; $t < count($arrr); $t++)
    {
        $e = explode("|", $arrr[$t]);
        if ($e[3] == $sk)
        {
            $nuo_ko = $e[0];
            $zin = stripslashes($e[1]);
            $lkk = $e[2];
            $masyw = array("@", "*");
            $nuo_ko2 = str_replace($masyw, "", $nuo_ko);
            echo '<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
            echo "
    <p align=\"left\"><small>Atsakyti<br/>
    -</small></p>
    <p align=\"left\"><small>
<u>$nuo_ko tau rase</u>: [$zin]<br/><br/>
Tavo atsakymas:<br/>
<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\" value=\"\"/><br/>

<anchor>[&#187;] Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm&amp;kam=$nuo_ko2\" method=\"post\">
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor></small></p>
<p align=\"left\"><small><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] I PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
    </p>";
            break;
        }
    }

}

if ($id == "valyti_pm")
{
    $fff = fopen("priv_zin/$nick.txt", "w+");
    fwrite($fff, "");
    fclose($fff);
    echo "<p align=\"left\"><small>Zinutes istrintos!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "valyti_pm2")
{
    $nv = file("priv_zin/$nick.txt");
    for ($pv = 0; $pv < count($nv); $pv++)
    {
        $kv = explode("|", $nv[$pv]);
        $masyw = array("@", "*");
        $kv[0] = str_replace($masyw, "", $kv[0]);
        if ($kv[0] == $nick)
        {
            $nv[$pv] = "";
            $fpv2 = fopen("priv_zin/$nick.txt", "w");
            fwrite($fpv2, implode($nv));
            fclose($fpv2);
        }
    }
    echo "<p align=\"left\"><small>Issiustos zinutes istrintos!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
if ($id == "valyti_pm3")
{
    $nv = file("priv_zin/$nick.txt");
    for ($pv = 0; $pv < count($nv); $pv++)
    {
        $kv = explode("|", $nv[$pv]);
        $masyw = array("@", "*");
        $kv[0] = str_replace($masyw, "", $kv[0]);
        if ($kv[0] != $nick)
        {
            $nv[$pv] = "";
            $fpv2 = fopen("priv_zin/$nick.txt", "w");
            fwrite($fpv2, implode($nv));
            fclose($fpv2);
        }
    }
    echo "<p align=\"left\"><small>Gautos zinutes istrintos<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "siusti_pm")
{
    if (time() < $floo)
    {
        echo "<p align=\"left\"><small>Palauk kelias sekundes!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] I PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        if ($_GET['kam'] == '')
        {
            $kam = $_POST['kam'];
        }
        else
        {
            $kam = $_GET['kam'];
        }
        $zinute = $_POST['zinute'];
        $zinute = str_replace("$", "$$", $zinute);
        $zinute = str_replace("|", "l", $zinute);
        $zinute = str_replace("\n", " ", $zinute);
        $zinute = htmlspecialchars($zinute);

        include ("smilesreplace.php");
        if (substr_count($zinute, "<img src=") > 5)
        {
            $bad = "Perdaug smailu!";
        }

        if ($turixp < 500)
        {
            $bad = "Rasyti galesi tik nuo 500xp!";
        }
        if ($kam == "")
        {
            $bad = "Nenurodei kam siusti PM!";
        }
        if (strlen($zinute) > 350)
        {
            $bad = "Zinute per ilga!";
        }
        if ($kam == "$nick")
        {
            $bad = "Sau siusti negalima!";
        }
        if ($zinute == "")
        {
            $bad = "Neparasei zinutes!";
        }
        if (!file_exists("ndbzgtusrsz/$kam.txt"))
        {
            $bad = "Sis kovotojas neuzregistruotas!";
        }
        if (!file_exists("priv_zin/$kam.txt"))
        {
            $bad = "Sio zaidejo PM nesukurta!";
        }

        if ($bad == "")
        {

            $bad = "Tavo zinute issiusta!";
            $DATA_FILE = "priv_zin/$kam.txt";

            $kiek_psgv = file($DATA_FILE);
            $kiek_pas_gaveja = count($kiek_psgv);
            if ($kiek_pas_gaveja > 199)
            {
                $opena = fopen($DATA_FILE, "w");
                fwrite($opena, "");
                fclose($opena);
            }
            $kodr = rand(1, 10000000000);
            $openas = fopen($DATA_FILE, "a");
            fwrite($openas, "$vrd|$zinute|$laikas|$kodr|\n");
            fclose($openas);
            $openas = fopen("priv_zin/$nick.txt", "a");
            fwrite($openas, "$nick|$zinute|$laikas|$kodr|$kam|\n");
            fclose($openas);

            $NKM = file_get_contents("ndbzgtusrsz/$kam.txt");
            $infa = explode("|", $NKM);
            $fp1 = fopen("ndbzgtusrsz/$kam.txt", "w");
            fwrite($fp1, "$infa[0]|$infa[1]|$infa[2]|$infa[3]|$infa[4]|$infa[5]|$infa[6]|$infa[7]|$infa[8]|$infa[9]|$infa[10]|$infa[11]|$infa[12]|$infa[13]|+|$infa[15]|$infa[16]|$infa[17]|$infa[18]|$infa[19]|$infa[20]|$infa[21]|$infa[22]|$infa[23]|$infa[24]|\n");
            fclose($fp1);

            $lks = time();
            $lks2 = time() + 15;
            $fp = fopen("ndbzgtusrsz", "w");
            fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$lks2|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
            fclose($fp);
        }
        echo "<p align=\"left\"><small><u>$bad</u><br/>-<br/>";
        echo stripslashes($zinute);
        echo "<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=pm\">[^] I PM</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small>
    </p>";
    }
}

/////////////////oNLINE///////////////////////

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
            echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$onlpy\">$et[0]</a> - $et[2]<br/>";
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
            echo "<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=on&amp;page=$starto_skaicius\">[$starto_skaicius]</a>";
        }
        $viso_puslapiai++;
        $starto_skaicius++;

    }
    echo '</small></p>';
    echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

/////////////////useriu paieska///////////////////////

if ($id == "paieska")
{
    echo "<p align=\"left\"><small>
Kovotojo paieska<br/>
-<br/>
Kovotojo nickas:<br/>
<input name=\"ko\" type=\"text\" maxlength=\"20\" title=\"useris\" value=\"\"/><br/>

<anchor>[&#187;] Ieskoti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie\" method=\"post\">
    <postfield name=\"ko\" value=\"$(ko)\"/>
</go></anchor><br/></small><small>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
    </p>";
}

/////////////////Apie nick///////////////////////

if ($id == "apie")
{
    $ka = $_GET['ka'];
    if ($ka == "")
    {
        $ka = $_POST['ko'];
    }
    else
    {
        $ka = $ka;
    }
    if (!file_exists("ndbzgtusrsz/$ka.txt"))
    {
        echo "<p align=\"left\"><small>Sis kovotojas neuzregistruotas!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {

        $ki = explode("|", file_get_contents("kitaaainf/$ka.ly"));
        $fys = explode("|", file_get_contents("fyshers/$ka.txt"));
        $us = @file_get_contents("ndbzgtusrsz/$ka.txt");
        $infa = explode("|", $us);
        $dem = "$infa[3]" + "$infa[10]";

        $paskuti = round((((time() - $infa[17]) + 10) / 60) / 60, 0);

        $fope = @file_get_contents("miners/$ka.txt");
        $mino_lvls = explode("|", $fope);

        $statu = "Narys";
        $vrdll = $ka;
        $nvve = file("txt/mods.txt");
        $kiek_nvve = count($nvve);
        for ($pvve = 0; $pvve < $kiek_nvve; $pvve++)
        {
            $kvve = explode("|", $nvve[$pvve]);
            if ($ka == $kvve[0])
            {
                if ($kvve[1] == "mod")
                {
                    $statu = "Moderatorius";
                    $vrdll = "*$ka";
                }
            }
            if ($ka == $kvve[0])
            {
                if ($kvve[1] == "Adminas")
                {
                    $statu = "Adminas";
                    $vrdll = "@$ka";
                }
            }
        }

        $nnn = file("txt/on.txt");
        $kiek = count($nnn);
        for ($i = 0; $i < $kiek; $i++)
        {
            $et = explode("|", $nnn[$i]);
            $masyw = array("@", "*");
            $onlpy = str_replace($masyw, "", $et[0]);
            if ($ka == $onlpy)
            {
                echo "<p align=\"left\"><small><b>[!]</b> Prisijunges ($et[2])</small><br/></p>";
            }
        }
        echo '<onevent type="onenterforward"><refresh>
<setvar name="zinute" value=""/>
</refresh></onevent>';
        if ($infa[0] < 10)
        {
            $ss = "Naujokelis ;)";
        }
        if ($infa[0] < 50)
        {
            if ($infa[0] >= 10)
            {
                $ss = "Pazenges";
            }
        }
        if ($infa[0] < 100)
        {
            if ($infa[0] >= 50)
            {
                $ss = "geras karis :)";
            }
        }
        if (!file_exists("misjos/$ka.txt"))
        {
            $ivm = 0;
        }
        else
        {
            $ivm = substr_count(file_get_contents("misjos/$ka.txt"), "+");
        }

        $img1 = strtolower($infa[18]);
        if (!file_exists("kronoss/$ka.txt"))
        {
            $kronu = 0;
        }
        else
        {
            $kronu = file_get_contents("kronoss/$ka.txt");
        }
        if ($infa[18] == "karys")
        {
            $minp = round(($mino_lvls[26] * 0.9), 1);
            $smip = round(($mino_lvls[27] * 0.9), 1);
            $fip = round(($fys[0] * 0.95), 1);
            $craf = $ki[25];
            $medziokl = $ki[28];
            $medk = round(($ki[11] * 1.05), 1);
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
            $fishing_proc = "-5";
        }
        if ($infa[18] == "banditas")
        {
            $minp = round(($mino_lvls[26] * 0.95), 1);
            $smip = round(($mino_lvls[27] * 0.95), 1);
            $fip = round(($fys[0] * 0.95), 1);
            $craf = $ki[25];
            $medziokl = $ki[28];
            $medk = $ki[11];
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
            $fishing_proc = "-5";
        }
        if ($infa[18] == "piratas")
        {
            $minp = $mino_lvls[26];
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
            $fishing_proc = "-0";
        }
        if ($infa[18] == "fermeris")
        {
            $minp = round(($mino_lvls[26] * 0.95), 1);
            $smip = $mino_lvls[27];
            $fip = round(($fys[0] * 0.95), 1);
            $craf = round(($ki[25] * 0.90), 1);
            $medziokl = round(($ki[28] * 1.1), 1);
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
            $fishing_proc = "-5";
        }
        if ($infa[18] == "Vedzitas")
        {
            $minp = $mino_lvls[26];
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
            $fishing_proc = "-0";
        }
        if ($infa[18] == "Fryzas")
        {
            $minp = round(($mino_lvls[26] * 1.1), 1);
            $smip = round(($mino_lvls[27] * 1.1), 1);
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
            $fishing_proc = "-0";
        }
        if ($infa[18] == "Gohanas")
        {
            $minp = $mino_lvls[26];
            $smip = $mino_lvls[27];
            $fip = round(($fys[0] * 1.2), 1);
            $craf = $ki[25];
            $medziokl = $ki[28];
            $medk = $ki[11];
            $kep = round(($ki[37] * 1.1), 1);
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
            $fishing_proc = "+20";
        }
        if ($infa[18] == "Buu")
        {
            $minp = $mino_lvls[26];
            $smip = $mino_lvls[27];
            $fip = $fys[0];
            $craf = $ki[25];
            $medziokl = round(($ki[28] * 1.05), 1);
            $medk = round(($ki[11] * 1.05), 1);
            $kep = round(($ki[37] * 1.1), 1);
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
            $fishing_proc = "-0";
        }
        if ($infa[18] == "Vezlys")
        {
            $minp = $mino_lvls[26];
            $smip = $mino_lvls[27];
            $fip = $fys[0];
            $craf = round(($ki[25] * 1.2), 1);
            $medziokl = $ki[28];
            $medk = round(($ki[11] * 1.05), 1);
            $kep = $ki[37];
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
            $fishing_proc = "-0";
        }

        if (!file_exists("pupos/$ka.txt"))
        {
            $pupa = 0;
        }
        else
        {
            $pupa = file_get_contents("pupos/$ka.txt");
        }


        if (!file_exists("rutuliai/$ka.txt"))
        {
            $rutuliu = 0;
        }
        else
        {
            $rutuliu = file_get_contents("rutuliai/$ka.txt");
        }


        if ($nick != $ka)
        {

$timas = time();
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$mm[2] = $timas;
include("icludekitainf/mm.php");
$mm = @explode("|",@file_get_contents("kitokiainf/$nick.txt"));
$liko = round(($mm[2]-time())/60,0);
$mm2 = explode("-",$lik);
if ($liko == "-$mm2[2]"){
$timas2 = time()+1000*1000*1000*1000*1000*1000;}
include("icludekitainf/mm.php");

        $mm = @explode("|",@file_get_contents("kitokiainf/$ka.txt"));

            echo "<p align=\"left\"><small>
-<br/>
<b>:+:  $vrdll info  :+:</b><br/>
-<br/>
$iconas<a href=\"on_kova.php?nick=$nick&amp;pass=$pass&amp;id=&amp;ka=$ka\">Pulti $ka</a><br/>
-<br/>
<img src=\"imgs/$img1.jpg\" alt=\"prev\"/><br/>-<br/>
Nickas: <b>$vrdll</b> ($statu)<br/>
Kovotojas: <b>$infa[18]</b><br/>
Turi xp: <b>$turixpka</b><br/>
Sachtu: <b>$sachtuka</b><br/>
Lentpjuviu: <b>$lentpjuviuka</b><br/>
Kareiviniu: <b>$kareiviniuka</b><br/>
Fermu: <b>$fermuka</b><br/>
Aukso: <b>$auksoka</b><br/>
Medienos: <b>$medienoska</b><br/>
Gelezies: <b>$gelezieska</b><br/>
Darbininku : <b>$darbininkuka </b><br/>
Vergu: <b>$verguka</b><br/>";
            $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
                        if ($na == "")
                        {
                            $na = "$saju";
                        }
                        else
                        {
                            $na = "$na, $saju";
                        }
                    }

                }
            }
            if ($sa != "")
            {
                echo "Vadovauja buriams: <b>$sa</b> <br/><br/>";
            }
            if ($na != "")
            {
                echo "Priklauso buriams: <b>$na</b><br/><br/>";
            }
            echo "
Paskutini kart zaide pries: <b>$paskuti h</b><br/>
Uzsiregino: <b>$infa[12]</b><br/>
</small></p>
<p align=\"left\"><small>-<br/></small></p>";
            if ($stat == "mod")
            {
                echo "<p align=\"left\"><small>
$iconas<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=mod_ban&amp;kam=$infa[2]\">Banint</a><br/>-<br/>
</small></p>";
            }
            echo "<p align=\"left\"><small>
Siusti PM<br/>
Zinute:<br/>
<input name=\"zinute\" type=\"text\" maxlength=\"300\" title=\"Zinute\"/><br/>
<anchor>[&#187;] Siusti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_pm&amp;kam=$ka\" method=\"post\">
<postfield name=\"zinute\" value=\"$(zinute)\"/>
</go></anchor></small><small><br/>-<br/>Pervesti kristalu (kiekis, pvz: 2 ar 0.1):<br/>
<input name=\"kiek\" type=\"text\" maxlength=\"5\" title=\"Kiek\"/><br/>
<anchor>[&#187;] Pervesti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=siusti_kronu&amp;kam=$ka\" method=\"post\">
<postfield name=\"kiek\" value=\"$(kiek)\"/>
</go></anchor></small><small><br/>
--<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
        }
        if ($nick == $ka)
        {
            $img = strtolower($rase);
            if (!file_exists("kronoss/$ka.txt"))
            {
                $kronu = 0;
            }
            else
            {
                $kronu = file_get_contents("kronoss/$ka.txt");
            }

        $mm = @explode("|",@file_get_contents("kitokiainf/$ka.txt"));

            echo "<p align=\"left\"><small>
-<br/>
<b>:+:  $vrdll info  :+:</b><br/>
-<br/>
<img src=\"imgs/$img.jpg\" alt=\"prev\"/><br/>-<br/>
Nickas: <b>$vrdll</b> ($statu)<br/>
Kovotojas: <b>$infa[18]</b><br/>
Turi xp: <b>$turixp</b><br/>
Sachtu: <b>$sachtu</b><br/>
Lentpjuviu: <b>$lentpjuviu</b><br/>
Kareiviniu: <b>$kareiviniu</b><br/>
Fermu: <b>$fermu</b><br/>
Aukso: <b>$aukso</b><br/>
Medienos: <b>$medienos</b><br/>
Gelezies: <b>$gelezies</b><br/>
Darbininku : <b>$darbininku </b><br/>
Vergu: <b>$vergu</b><br/>";
            $sa = "";
            $na = "";
            $op = glob("klaniukos/*.ta");
            for ($i = 0; $i < count($op); $i++)
            {
                $dfd = file($op[$i]);
                for ($t = 0; $t < count($dfd); $t++)
                {
                    $saju = str_replace(array("klaniukos/", ".ta"), "", $op[$i]);
                    $fdp = explode("|", $dfd[$t]);
                    if ($ka == $fdp[0] && $t == 0)
                    {
                        if ($sa == "")
                        {
                            $sa = "$saju";
                        }
                        else
                        {
                            $sa = "$sa, $saju";
                        }
                    }
                    if ($ka == $fdp[0] && $t > 0)
                    {
                        if ($na == "")
                        {
                            $na = "$saju";
                        }
                        else
                        {
                            $na = "$na, $saju";
                        }
                    }

                }
            }
            if ($sa != "")
            {
                echo "Vadovauja buriams: <b>$sa</b><br/><br/>";
            }
            if ($na != "")
            {
                echo "Priklauso buriams: <b>$na</b><br/><br/>";
            }
            echo "
Paskutini karta zaide pries: <b>$paskuti h</b><br/>
Uzregistruotas: <b>$uzregintas</b><br/>
</small></p>
<p align=\"left\"><small>--<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
        }
    }
}

/////////////////keisti pass///////////////////////

if ($id == "keisti_pass")
{
    echo "<p align=\"left\"><small>Slaptazodzio keitimas<br/>
Nenaudokit spec. simboliu, jie bus panaikinami!<br/>

-<br/>
Slaptazodis:<br/>
<input name=\"pass1\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
Pakartoti slaptazodi:<br/>
<input name=\"pass2\" type=\"password\" maxlength=\"30\" title=\"Pass\"/><br/>
<anchor>[&#187;] Keisti<go href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=keiciu_pass\" method=\"post\">
    <postfield name=\"pass1\" value=\"$(pass1)\"/>
<postfield name=\"pass2\" value=\"$(pass2)\"/>
</go></anchor></small><small><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=main\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
    </p>";
}

if ($id == "keiciu_pass")
{
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $pass1 = ereg_replace("[^A-Za-z0-9_-]", "", $pass1);
    $pass2 = ereg_replace("[^A-Za-z0-9_-]", "", $pass2);

    if ($pass1 == "")
    {
        $er = "Neivestas pirmas slaptazodis!";
    }
    if ($pass2 == "")
    {
        $er = "Neivestas antrasis slaptazodis!";
    }
    if ($pass1 != $pass2)
    {
        $er = "Slaptazodziai nesutampa!";
    }

    if ($er == "")
    {
        $er = "Slaptazodis pakeistas!<br/>Jei esi susiejes zyma, tai turi ir ja pakeisti, nes jungiantis su senaja rasys, kad blogas slaptazodis!";
        $pass2 = ($pass2);
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$pass2|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
    }
    echo "<p align=\"left\"><small>$er<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass2&amp;id=keisti_pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "use_points")
{
    if ($points > 0)
    {
        echo "<p align=\"left\"><small>- $points nepanaudoti lvl taskai<br/>
Pasirink, koki lygi pakelsi?<br/>
-<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=jega\">[&#187;] Jegos</a> (+2)<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=gyvybes\">[&#187;] Gyvybiu</a> (+2)<br/>
<a 
href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=gynyba\">[&#187;] Gynybos</a> (+2)<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=use_points2&amp;ka=patirtis\">[&#187;] Patirties</a> (+2)<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>-<br/>Nu blet, ka cia sumislyjai?! Visus lvl taskus jau isgadinai. Ramiau savanaudi ;D<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

if ($id == "use_points2")
{
    if ($points > 0)
    {
        echo "<p align=\"left\"><small>-<br/>Atlikta, saunuolis vaikeliuk ;D<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
        $ka = $_GET['ka'];
        if ($ka == "jega")
        {
            $jega = $jega + 2;
        }
        if ($ka == "gyvybes")
        {
            $gyvybess = $gyvybess + 2;
        }
        if ($ka == "gynyba")
        {
            $gynyba = $gynyba + 2;
        }
        if ($ka == "patirtis")
        {
            $sugebejimas = $sugebejimas + 2;
        }
        $points = $points - 2;
        $fp = fopen("$gameriai", "w");
        fwrite($fp, "$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
        fclose($fp);
    }
    else
    {
        echo "<p align=\"left\"><small>-<br/>Nu blet, ka cia sumislyjai?! Visus lvl taskus jau isgadinai. Ramiau savanaudi ;D<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>";
    }
}

  if ($id == "siusti_kronu")
{
    if (!file_exists("kronoss/$nick.txt"))
    {
        $kronu = 0;
    }
    else
    {
        $kronu = file_get_contents("kronoss/$nick.txt");
    }
    $kiek = ereg_replace("[^0-9.]", "", $_POST['kiek']);
    $hex = explode(".", $kiek);
    if (count($hex) > 2)
    {
        $bl = "Prasome ivesti norima kieki!";
    }
    if (strlen($hex[1]) > 2)
    {
        $bl = "Prasome ivesti norima kieki!";
    }
    if ($kam == $nick)
    {
        $bl = "Sau!?.. pyze gudrus...";
    }
    if (!file_exists("ndbzgtusrsz/$kam.txt"))
    {
        $bl = "Sis zaidejas neregistruotas!";
    }
    if (empty($kiek))
    {
        $bl = "Neivestas kiekis!";
    }
    if (empty($kam))
    {
        $bl = "Sis zaidejas neregistruotas!";
    }
    if ($kronu < $kiek)
    {
        $bl = "Tiek kreditu neturi!";
    }

    if ($bl == '')
    {
        $bl = "Pervesta sekmingai ligtais ;)";
        $kronu = $kronu - $kiek;
        $fp = fopen("kronoss/$nick.txt", "w");
        fwrite($fp, "$kronu");
        fclose($fp);
        if (!file_exists("kronoss/$kam.txt"))
        {
            $kron = 0;
        }
        else
        {
            $kron = file_get_contents("kronoss/$kam.txt");
        }
        $kron = $kron + $kiek;
        $fp = fopen("kronoss/$kam.txt", "w+");
        fwrite($fp, "$kron");
        fclose($fp);
        @chmod("kronoss/$kam.txt", 0777);
        $atidaryma = fopen("priv_zin/$kam.txt", "a");
        fwrite($atidaryma, "@admin|<b>$vrd</b> pervede tau <b>$kiek</b> kreditu||\n");













    }
    echo "<p align=\"left\"><small>$bl<br/>
$lin<br/>
<a href=\"zaisti.php?id=apie&amp;nick=$nick&amp;pass=$pass&amp;ka=$kam\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/></small></p>";
}

if ($id == "rases")
{
    $a = glob("ndbzgtusrsz/*.txt");
    for ($i = 0; $i < count($a); $i++)
    {
        $b = explode("|", file_get_contents($a[$i]));
        if ($b[18] == "karys")
        {
            $elfu[] = $i;
        }
        if ($b[18] == "banditas")
        {
            $dark[] = $i;
        }
        if ($b[18] == "piratas")
        {
            $hum[] = $i;
        }
        if ($b[18] == "fermeris")
        {
            $orcu[] = $i;
        }
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
    $pr1 = round(($u1 * 100) / count($a), 1);
    $pr2 = round(($u2 * 100) / count($a), 1);
    $pr3 = round(($u3 * 100) / count($a), 1);
    $pr4 = round(($u4 * 100) / count($a), 1);
    $pr5 = round(($u5 * 100) / count($a), 1);
    $pr6 = round(($u6 * 100) / count($a), 1);
    $pr7 = round(($u7 * 100) / count($a), 1);
    $pr8 = round(($u8 * 100) / count($a), 1);
    $pr9 = round(($u9 * 100) / count($a), 1);

    $n = glob("darinfos/*.ly");
    for ($i = 0; $i < count($a); $i++)
    {
        $b = explode("|", file_get_contents($n[$i]));
        if ($b[0] == "+")
        {
            $isr[] = $i;
        }
    }
    echo "<p align=\"left\"><small>Zaideju statistika<br/>-<br/></small></p>
<p align=\"left\"><small>Is viso zaideju: ";
    echo count($a);
    echo "<br/>
Is ju super zaideju: ";
    echo count($isr);
    echo "<br/>
Viso gauju: "; echo count(glob("klaniukos/*.ta"));
echo"<br/><br/>
Kariu: $u1 ($pr1 %)<br/>
Banditu: $u2 ($pr2 %)<br/>
Piratu: $u3 ($pr3 %)<br/>
Fermeriu: $u7 ($pr7 %)<br/>
</small></p><p align=\"left\"><small>$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/></small></p>";
}

if ($id == "smiles")
{
    echo "<p align=\"left\">
<small>Smiles (1/2)<br/>
-<br/>
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
:mojuoja", "<img src=\"smiles/23.gif\" alt=\":mojuoja\"/><br/>
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
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles2\">[&#187;] Kitas puslapis</a><br/>$lin<br/><a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "smiles2")
{
    echo "<p align=\"left\">
<small>Smiles (2/2)<br/>
$lin<br/>
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
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=smiles\">[&#187;] Ankstesnis puslapis</a><br/>
$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a></small></p>";
}

if ($id == "atv")
{
    echo '<p align="left">';
    if (!file_exists("atvesti/$nick.txt"))
    {
        $atvede = 0;
    }
    else
    {
        $atvede = count(file("atvesti/$nick.txt"));
    }
    echo "<small>Zaideju atvedimo adresas<br/>
-<br/>
Uz kiekviena atvesta unikalu zaideja, iskart gaunate 0.1 kristalo.<br/>
Jums reikia reklamuoti sia nuoroda:<br/><b>http://orda5.uzeik.in/index.php?f=$nick</b><br/>
-<br/>
Jus jau atvedet zaideju:<br/> <b>$atvede</b><br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
";
    echo '</p>';
}

echo "
</card>
</wml>";

?>