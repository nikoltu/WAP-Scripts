<?php



$narsykle_mano = $_SERVER['HTTP_USER_AGENT'];
$narsykle_mano = substr($narsykle_mano, 0, 3);
if ($narsykle_mano == "Moz")
{
    $msg = "Draudziama ieiti su PC.";
}

if ($narsykle_mano == "Win")
{
    $msg = "Draudziama ieiti su PC.";
}

if ($narsykle_mano == "SIE")
{
    $msg = "Tau cia negalima.";
}

if ($narsykle_mano == "Nok")
{
    $msg = "Tau cia negalima.";
}

if ($narsykle_mano == "Ope")
{
    $msg = "Draudziama ieiti su PC.";
}

if ($narsykle_mano == "Son")
{
    $msg = "Tau cia negalima.";
}

if ($narsykle_mano == "Sam")
{
    $msg = "Tau cia negalima.";
}

if ($narsykle_mano == "SEC")
{
    $msg = "Tau cia negalima.";
}

if ($narsykle_mano == "MOT")
{
    $msg = "Tau cia negalima.";
}
if ($narsykle_mano == "WapSi")
{
    $msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "cURL ")
{
    $msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "porta")
{
    $msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "Reqwi")
{
    $msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "Iwp-t")
{
    $msg = "Draudziama ieiti su kompiuteriu.";
}

if ($msg != "")
{
    echo "
<p align=\"center\">
$msg<br/></p>
</card>
</wml>";
    exit;
}

$textas = $_GET['sms'];
$siuntejo_nr = $_GET['from'];
$tr_nr = $_GET['to'];
$kaina = $_GET['amount'];
$smss = explode(" ", $textas);
$rakt = strtolower($smss[0]);
$nic = strtolower(ereg_replace("[^A-Za-z0-9]", "", $smss[1]));
$ko = strtolower(ereg_replace("[^A-Za-z0-9]", "", $smss[2]));
$dar = strtolower(ereg_replace("[^A-Za-z0-9]", "", $smss[3]));

$laikas = date("Y-m-d H:i");
echo "Atlikta<br/>
 Aciu kad zaidziate - orda5.uzeik.in";

if ($nic == "reklama")
{
    $irasas_reklamai = "$smss[3] $smss[4] $smss[5] $smss[6] $smss[7]";
    $irasas_reklamai = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"),
        "", $irasas_reklamai));
    $smss[2] = htmlspecialchars(str_replace(array("^", "%", "$", "\n", "|"), "", $smss[2]));
    $foo = @fopen("txt/rkl.txt", "a");
    @fwrite($foo, "$smss[2]|$irasas_reklamai|\n");
    @fclose($foo);
}
if (file_exists("ndbzgtusrsz/$nic.txt"))
{

    $inf = @explode("|", @file_get_contents("ndbzgtusrsz/$nic.txt"));
    if (!file_exists("kronoss/$nic.txt"))
    {
        $kr = 0;
    }
    else
    {
        $kr = file_get_contents("kronoss/$nic.txt");
    }


    if (!file_exists("rutuliai/$nic.txt"))
    {
        $rutuliu = 0;
    }
    else
    {
        $rutuliu = file_get_contents("rutuliai/$nic.txt");
    }


    if (!file_exists("pupos/$nic.txt"))
    {
        $pupa = 0;
    }
    else
    {
        $pupa = file_get_contents("pupos/$nic.txt");
    }

//////////////////// 50 CENTU ////////////////////////////////////////////////////////////
    if ($kaina == '50')
    {

        $nnn2 = file("txt/konk_dal.ly");
        $kiek2 = count($nnn2);
        for ($i2 = 0; $i2 < $kiek2; $i2++)
        {
            $et2 = explode("|", $nnn2[$i2]);
            if ($et2[0] == $nic)
            {
                $yrans = "yra";
                break;
            }
        }
        if ($yrans != "yra")
        {
            $open = @fopen("txt/konk_dal.ly", "a");
            @fwrite($open, "$nic|$inf[19]|\n");
            @fclose($open);
        }

        if ($ko == "ns")
        {
        
       $open = @fopen("txt/ns_dalyviai.txt", "a");
            @fwrite($open, "$nic|\n");
            @fclose($open); }
 }

    //////////////////////// 1 LITAS //////////////////////////////////////////////////////
    if ($kaina == '100')
    {



        if ($ko == "crystal")
        {
            $kr = $kr + 1;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }



    }

    //////////////////////// 2 LITAi //////////////////////////////////////////////////////

    if ($kaina == '200')
    {
        if ($ko == "crystal")
        {
            $kr = $kr + 3;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

    }

    //////////////////////// 3 LITAi //////////////////////////////////////////////////////

    if ($kaina == '300')
    {

        if ($ko == "unban")
        {
            $nkh2 = file("txt/nick_bans.txt");
            $kiek_nkh2 = count($nkh2);
            for ($py2 = 0; $py2 < $kiek_nkh2; $py2++)
            {
                $kly2 = explode("|", $nkh2[$py2]);
                if ($nic == $kly2[0])
                {
                    $nkh2[$py2] = "";
                    $fpz2 = fopen("txt/nick_bans.txt", "w");
                    fwrite($fpz2, implode($nkh2));
                    fclose($fpz2);
                }
            }
        }


        if ($ko == "crystal")
        {
            $kr = $kr + 5;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

    }

    //////////////////////// 4 LITAi //////////////////////////////////////////////////////

    if ($kaina == '400')
    {
        if ($ko == "crystal")
        {
            $kr = $kr + 7;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }


    }

    //////////////////////// 7 LITAi //////////////////////////////////////////////////////

    if ($kaina == '700')
    {
        if ($ko == "crystal")
        {
            $kr = $kr + 15;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

    }

    //////////////////////// 9 LITAi //////////////////////////////////////////////////////

    if ($kaina == '900')
    {
        if ($ko == "crystal")
        {
            $kr = $kr + 21;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

    }

    //////////////////////// 10 LITu //////////////////////////////////////////////////////

    if ($kaina == '1000')
    {
        if ($ko == "crystal")
        {
            $kr = $kr + 25;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
        if ($ko == "akcija")
        {
            $kr = $kr + 45;
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }

    }

    //////////////////////// 5 LITAi //////////////////////////////////////////////////////

    if ($kaina == '500')
    {
        if ($ko == "mod")
        {
                    $open = @fopen("txt/mods.txt", "a");
            @fwrite($open, "$nic|mod|\n");
            @fclose($open);
        }
        if ($ko == "crystal")
        {
            $kr = $kr + 10;            
            $open = @fopen("kronoss/$nic.txt", "w");
            @fwrite($open, "$kr");
            @fclose($open);
            @chmod("kronoss/$nic.txt", 0777);
        }
    }



}


$fyyy = @fopen("txt/sms_log.txt", "a+");
@fwrite($fyyy, "$siuntejo_nr|$textas|$laikas|$tr_nr|$kaina|$nic|\n");
@fclose($fyyy);
$kai = round(($kaina / 100), 0) + file_get_contents("txt/uzdirbta.txt");
$fyyyy = @fopen("txt/uzdirbta.txt", "w");
@fwrite($fyyyy, "$kai");
@fclose($fyyyy);

?>