<?php

include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Dienos tope";
include("config.php");

if ($id == "")
{
  $likoll = @file_get_contents("txt/dienos_top_time.txt");
  $likolll = round(($likoll-time())/60/60,1);
  echo"<p align=\"center\"><small>
<b>Varzybos kiekviena diena!</b><br/>$lin<br/>
Visi zaidejai nuolatos dalyvauja varzybose!<br/>
 Kiekviena diena zaidejas, gaves daugiausia (xp), gauna prizus!<br/>
<b>Prizai:</b><br/>
1 vieta - 10 kronu !<br/>
I priza labiausiai pretenduojanciu zaideju sarasa rasite apacioj!<br/>
$lin<br/>
Pasibaigs po::<b>$likolll</b> h.<br/>
$lin<br/>
</small></p>";

            foreach (glob("xp-top/*.txt") as $a)
        {
            $name = str_replace(array("xp-top/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
$byrkaa = $ex[1]-$ex[0];
if ($ex[1] == 0)
{ $byrkaa = 0; }
$byrka = round($byrkaa,1);
            $arr[] = array("$byrka", "$name");
        }

$page = $_GET['page'];
$viso_pm = count($arr);
$puslapiu_skaicius = 20;

if ($viso_pm == 0)
    {
echo"<p align=\"left\"><small>Topu nera...<br/></small></p>"; 
}
        else
        {

echo"<p align=\"left\"><small>";

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
        { $iki = $viso_pm; }          rsort($arr);
    for ($f = $nuo; $f < $iki; $f++)
    {
        $open = fopen("txt/top_rez.txt", "w+");
        fwrite($open, "{$arr[0][1]}|{$arr[1][1]}|{$arr[2][1]}|{$arr[3][1]}|{$arr[4][1]}|\n");
        fclose($open);

        $nr = $f + 1;
        echo "$nr) <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]} ({$arr[$f][0]})</a><br/>";
    }

 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "[$starto_skaicius]";
        }
        else
        {
                echo"<a href=\"d-top.php?id=&amp;page=$starto_skaicius&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[$starto_skaicius]</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
    echo"</small></p>";
    $ska = count($arr);
        $open = fopen("txt/snd_prisijunge.txt", "w+");
        fwrite($open, "$ska");        fclose($open);
    }
echo"<p align=\"left\"><small>
$lin<br/>
Dalyviu: $ska<br/>$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Pradzia</a><br/></small></p>";
  }

if ($id == "prizai")
{

 $prt = explode ("|", file_get_contents("txt/top_rez.txt"));

$dsghja = date("H:i"); 
   echo"<p align=\"center\"><small>
$lin<br/>
XP day top laimi vienas zaidejas surinkes daugiausiai expierence (XP) <br/>
$lin<br/>
<b>Prizai:</b><br/>
1 vieta - 10 kronu<br/>
<br/>
<a href=\"d-top.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Pradzia</a><br/></small></p>";

 }

print'</card></wml>';

?>