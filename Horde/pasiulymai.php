<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$ti = date("H:i"); 
echo"<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Pasiulimuose";
include("config.php");

if ($id == ""){
echo "<p align=\"center\"><small>
<b>Pasiulymai!</b><br/>
$lin<br/>
<a href=\"pasiulymai.php?id=irasyti&amp;nick=$nick&amp;pass=$pass\">Pasiulyti</a><br/>";
if ($nick == "$valdovas"){
echo "
<a href=\"pasiulymai.php?id=trinti&amp;nick=$nick&amp;pass=$pass\">Isvalyti</a><br/>
$lin<br/>"; }
echo "</small>
</p>";
$page = $_GET['page'];

$DATA_FILE = "txt/pasiulymai.txt";
$nuskk = file($DATA_FILE);
$viso_pm = count($nuskk);
$puslapiu_skaicius = 10;

if ($viso_pm == 0)
    {
echo"<p align=\"center\"><small>
Pasiulymu nera...</small><br/></p>"; 
}
        else
        {
echo"<p align=\"center\"><small>";

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

echo"$bbb[0]<br/>
---<br/>";
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
                echo"<a href=\"pasiulymai.php?id=&amp;page=$starto_skaicius&amp;nick=$nick&amp;pass=$pass\">($starto_skaicius)</a>";
       }
        $viso_puslapiai++;
            $starto_skaicius++;

        }

echo"</small></p>";

}
echo "<p align=\"center\"><small>
$lin<br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">I pradzia</a><br/></small>
</p>";
}

if ($id == "irasyti")
{
    if ($nick != "$nick")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small>
</p>";
}
else
{
echo "<p align=\"center\"><small>
<b>Irasyti pasiulyma.</b><br/>
$lin<br/>
Pasiulymas:<br/></small>
<input name=\"new\" type=\"text\" maxlength=\"300\" title=\"New\"/><br/>

<anchor>Irasyti<go href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=irasau\" method=\"post\">
<postfield name=\"new\" value=\"$(new)\"/>
</go></anchor><br/><small>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
</p>";
}
}

if ($id == "irasau")
{
    if ($nick != "$nick")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small>
</p>";
}
else
{
$new = $_POST['new'];

$arre = array("<", ">", "&", "^", "$", "%", "\n", "|");
$new = str_replace($arre, "", $new);

if ($new == ""){
$bed = "Neivedei pasiulymo!";
}

if ($bed == ""){

$bed = "Irasyta sekmingai!";

$date = date("Y.m.d");

$bll = fopen("txt/pasiulymai.txt","a");
fwrite($bll,"$new($vrd)|\n");
fclose($bll);
}

echo "<p align=\"center\"><small>
$bed<br/>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
</p>";
}
}

if ($id == "trinti")
{
    if ($nick != "$valdovas")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small>
</p>";
}
else
{
echo "<p align=\"center\"><small>
Trinti visas naujienas?<br/>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=taip\">Taip</a>|
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=\">Ne</a><br/></small>
</p>";
}
}

if ($id == "taip")
{
    if ($nick != "$valdovas")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small>
</p>";
}
else
{
$blll = fopen("txt/pasiulymai.txt","w");
fwrite($blll,"");
fclose($blll);


echo "<p align=\"center\"><small>
Istrinta<br/>
$lin<br/>
<a href=\"pasiulymai.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
</p>";
}
}

print'</card></wml>';
?>