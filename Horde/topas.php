<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Topuose"; 
include("config.php");

if ($id == "top")
{
    echo "<p align=\"left\"><small>";
    if ($ka == "")
    {
        echo "XP TOP<br/>";
    }
    else
    {
        echo "<a href=\"topas.php?nick=$nick&amp;pass=$pass&amp;id=top&amp;ka=\">XP TOP</a><br/>";
    }

    echo "</small></p><p align=\"left\"><small>
-<br/>
</small></p>";
    echo '<p align="left"><small>';
    if ($ka == "")
    {
        foreach (glob("pastatai/xp/*.txt") as $a)
        {
            $name = str_replace(array("pastatai/xp/", ".txt"), "", $a);
            $ex = explode("|", file_get_contents($a));
            $arr[] = array("$ex[0]", "$name");
        }
    }
$page = $_GET['page'];
$viso_pm = count($arr);
$puslapiu_skaicius = 20;

if ($viso_pm == 0)
    {
echo"<p align=\"left\"><small>Topu nera!<br/></small></p>"; 
}
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
    rsort($arr);
    for ($f = $nuo; $f < $iki; $f++)
    {
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
                echo"<a href=\"topas.php?id=top&amp;page=$starto_skaicius&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[$starto_skaicius]</a>";

       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
    echo '</small></p>';
    $sk = count($arr);
    echo "<p align=\"left\"><small><br/>
-<br/>
Viso: $sk<br/>
$lin<br/>
$iconas<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Zaidimas</a></small></p>";
}


print'</card></wml>';

?>