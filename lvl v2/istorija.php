<?php
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
<meta http-equiv=\"Content-Style-Type\" content=\"text/css\"/>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta http-equiv=\"Cache-Control\" content=\"no-cache\"/>";
$dsghj = date("H:i:s Y-m-d");
echo "<title>LGZZ.EU $dsghj</title>
<link rel=\"shortcut icon\" href=\"imgs/ico.ico\" type=\"image/x-icon\"/>
<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>";
$kur = "Topic Istorija";
include("config.php");

if ($id == "")
{
$page = $_GET['page'];
$DATA_FILE = "txt/istorija.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 5;

echo"<body class=\"body\"><div class='title'>[&#171;]Topic Istorija[&#187;]</div>";
echo"<div class='center'>";

if ($viso_pm == 0)
    {
echo"tuscia..."; 
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

           $masyvo_apvertimas = array_reverse($nuskk);

        for ($c = $nuo; $c < $iki; $c++)
        {
            $bbb = explode('|', $masyvo_apvertimas[$c]);

echo"$bbb[0]<br/><br/>";
}
 $viso_puslapiu = $viso_pm / $puslapiu_skaicius;

    $viso_puslapiai = 0;       $starto_skaicius = 1;
  while ($viso_puslapiai < $viso_puslapiu)
        {
        if ($page == $starto_skaicius)
        {
                 echo "";
        }
        else
        {
                echo"";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }
}
echo"</div>
<div class='back'>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass\">Y Pradzia</a>[&#187;]
</div>";
}
print '</body></html>';
?>