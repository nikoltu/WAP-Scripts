<?php
include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Kazino"; 
include("config.php"); 

    if (!file_exists("kronoss/$nick.txt"))
    {
        $kronu = 0;
    }
    else
    {
        $kronu = file_get_contents("kronoss/$nick.txt");
    }

if ($id == "")
{
echo"<p align=\"center\"><small>
[&#171;]<b>Kazino Namai</b>[&#187;]<br/>
<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=atspek\">Atspek Skaiciu</a>[&#187;]<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=kortos\">Atspek Korta</a>[&#187;]<br/><br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I Pradzia</a>[&#187;]</small></p>";
}

if ($id == "atspek")
{

echo"<p align=\"center\"><small>
[&#171;]<b>Atspek Skaiciu</b>[&#187;]<br/>
<br/>
Turite Pinigu : $pinigai<br/>
<br/>

Statoma Suma:<br/>
<form action=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=speju\" method=\"post\">
<input name=\"statau\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek pinigu?\"/><br/>

Skaicius Nuo 0 iki 5<br/>

<input name=\"skaiciuss\" type=\"text\" maxlength=\"1\" format=\"*N\" title=\"Skaicius\"/><br/>

[&#187;]<input type=\"submit\" title=\"lgzz.eu\" value=\"Speti\"/>
    <postfield name=\"statau\" value=\"$(statau)\"/>
    <postfield name=\"skaiciuss\" value=\"$(skaiciuss)\"/>
</go></anchor>[&#171;]<br/>
<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">I Pradzia</a>[&#187;]</small></p>";
}
if ($id=="speju")
{

$statau = ereg_replace("[^0-9]", "", $_POST['statau']);

$skaiciuss = ereg_replace("[^0-9]", "", $_POST['skaiciuss']);

$speku = rand(0,5);

if ($statau == "")
{
$bbc = "Nenurodei Kiek Pinigu Pastatai!";
 }
if ($skaiciuss == "")
{
$bbc = "Nenurodei skaiciaus!";
}
if ($skaiciuss > 5)
{
$bbc = "Pasirinktas skaicius per didelis!";
}
if ($statau > $pinigai)
{
$bbc = "Neuztenka Pinigu";
}
if ($bbc == "")
{
if ($skaiciuss != $speku)
{
$pin = "$pinigai"-"$statau";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);


$bbc = "Nepasiseke! Laimingas Skaicius Buvo <b>$speku</b><br/>
Jus praradote <b>$statau</b> Pinigu";
}
else
{
if ($skaiciuss == $speku)
{

$pin="$pinigai"+"$statau";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

$bbc = "Sveikinu! Atspejote!<br/>
Skaicius: <b>$speku</b>, Jus Ji Atspejote, Gaunate <b>$statau</b> Pinigu";
} } }

echo"<p align=\"center\"><small>$bbc<br/>
$lin<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=atspek\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I Pradzia</a>[&#187;]</small></p>";
}
 
if($id == "kortos")
{
   echo"<p align=\"center\"><small>[&#171;]<b>Atspek
Korta</b>[&#187;]<br/>
<br/>
Turite Pinigu : $pinigai<br/>
<br/>

Statoma Pinigu Suma:<br/>
<form action=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=kortos2\" method=\"post\">
<input name=\"suma\" maxlength=\"20\" format=\"*N\" value=\"\"/><br/>

Pasirinkite Korta:<br/>";
echo"<select name=\"skas\">";
echo"<option value=\"1\">Bartukas</option>";
echo"<option value=\"2\">Dama</option>";
echo"<option value=\"3\">Karalius</option>";
echo"</select><br/>";

echo"<input type=\"submit\" title=\"lgzz.eu\" value=\"Speti\"/>
    <postfield name=\"suma\" value=\"$(suma)\"/>
    <postfield name=\"skas\" value=\"$(skas)\"/>
</go></anchor>[&#171;]<br/>
<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">I Pradzia</a>[&#187;]</small></p>
</p>";
} 

if($id == "kortos2")
{

$suma = $_POST['suma'];
$skas = $_POST['skas'];

$aaa = rand(1,3);

    if ($suma > $pinigai)
{ $bad = "Tiek Pinigu Neturi!"; }

    if ($suma == "")
{ $bad = "Nenurodei Kiek Pinigu Pastatai!"; }

    if ($skas == "")
{ $bad = "Nepasirinkai Kortos!"; }

if ($aaa == 1)
{ $korta = "Bartukas"; }

if ($aaa == 2)
{ $korta = "Dama"; }

if ($aaa == 3)
{ $korta = "Karalius"; }

   if ($bad == "")
{
   if ($skas != $aaa)
{ $bad = "Deja Bet Laiminga Korta<br/>
Buvo $korta<br/>
Prarandate <b>$suma</b> Pinigu";

$pin = "$pinigai"-"$suma";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
 }
else
{
   if ($skas == $aaa)
{
 $bad = "Sveikinu! Atspejai! Korta Buvo: $korta Beabejo Ji Buvo Laiminga. Sveikinu! Laimejote <b>$suma</b> Pinigu!";

$pin = "$pinigai"+"$suma";

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pin|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$floo|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);
 } } }

echo"<p align=\"center\"><small>
$bad<br/>
<br/>
[&#171;]<a href=\"kazino.php?nick=$nick&amp;pass=$pass&amp;id=kortos\">Atgal</a>[&#187;]<br/>
[&#171;]<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I Pradzia</a>[&#187;]</small></p>";
}

print'</card></wml>';

?>