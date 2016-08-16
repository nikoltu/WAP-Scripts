<?php

include_once("core.php");

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo"<card id=\"index\" title=\"LGZZ.EU $dsghj\">";
$kur = "Akademija";
include("config.php"); 

if ($id == ""){ 

if (time() < $akademijosfailas)
    {
if($ak1 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake zvejybos pamoka</i></small></p>";

}

if($ak2 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake rinkimo pamoka</i></small></p>";

}

if($ak3 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake kasimo pamoka</i></small></p>";

}

if($ak4 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake kalvininkaimo pamoka</i></small></p>";

}

if($ak5 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake medkirtystes pamoka</i></small></p>";

}

if($ak6 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake juvelyrikos pamoka</i></small></p>";

}

if($ak7 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake crafting pamoka</i></small></p>";

}

if($ak8 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake medziokles pamoka</i></small></p>";

}

if($ak9 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake kepimo pamoka</i></small></p>";

}

if($ak10 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake gynybos pamoka</i></small></p>";

}

if($ak11 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake jegos pamoka</i></small></p>";

}

if($ak12 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake gyvybiu pamoka</i></small></p>";

}

if($ak13 > 0){

echo "<p align=\"center\"><small><i>Jus esate uzsisake patirties pamoka</i></small></p>";

}

        foreach (glob("akademija/*.txt") as $a)
        {
            $name = str_replace(array("akademija/", ".txt"), "", $a);
            $exe = explode("|", file_get_contents($a));
            $arr[] = array("$exe[0]", "$name");

        }
$kiek2 = count($arr);
if($kiek2 != 0){
    rsort($arr);
}
    rsort($arr);
$kiek = count($arr);

        echo "<p align=\"center\"><small>$lin<br/><u>Iki pamoku akademijoje liko <b>$likolaiko</b> min</u><br/>$lin<br/>
$lin<br/></small></p>";
echo "<p align=\"left\"><small>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=uzsakyti\">Uzsisakyti/Pakeisti pamoka</a><br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=atsisakyti\">Atsisakyti pamoku</a><br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=sarasas\">Uzsirasiusiuju sarasas</a>($kiek)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=informacija\">Informacija</a><br/>
$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a><br/><br/></small></p>";

    }

else
{

if($ak1 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates zvejybos pamoka</i></small></p>";

}

if($ak2 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates rinkimo pamoka</i></small></p>";

}

if($ak3 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates kasimo pamoka</i></small></p>";

}

if($ak4 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates kalvininkaimo pamoka</i></small></p>";

}

if($ak5 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates medkirtystes pamoka</i></small></p>";

}

if($ak6 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates juvelyrikos pamoka</i></small></p>";

}

if($ak7 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates crafting pamoka</i></small></p>";

}

if($ak8 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates medziokles pamoka</i></small></p>";

}

if($ak9 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates kepimo pamoka</i></small></p>";

}

if($ak10 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates gynybos pamoka</i></small></p>";

}

if($ak11 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates jegos pamoka</i></small></p>";

}

if($ak12 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates gyvybiu pamoka</i></small></p>";

}

if($ak13 > 0){

echo "<p align=\"center\"><small><i>Jus dabar mokinates patirties pamoka</i></small></p>";

}

 echo "<p align=\"center\"><small>$lin<br/><i>Akademijoje vyksta pamokos,jos dar truks <b>$likolaiko2</b> min</i><br/>$lin<br/>
</small></p>";

echo "<p align=\"left\"><small>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=sarasas\">Uzsirasiusiuju sarasas</a><br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=informacija\">Informacija</a><br/>
$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a></small></p>";
}}

if($id == "uzsakyti"){

echo "<p align=\"center\"><small><i>Rinkis pamoka:</i><br/><br/></small></p>";

echo "<p align=\"left\"><small>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=zvejyba\">Zvejybos</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=rinkimas\">Rinkimo</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=kasimas\">Kasimo</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=kalvininkavimas\">Kalvininkavimo</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=medkirtyste\">Medkirtystes</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=juvelyrika\">Juvelyrikos</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=crafting\">Crafting</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=medziokle\">Medziokles</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=kepimas\">Kepimo</a>(100-100000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=gynyba\">Gynybos</a>(5-500000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=jega\">Jegos</a>(5-500000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=gyvybes\">Gyvybiu</a>(5-500000)<br/>
$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=patirtis\">Patirties</a>(5-500000)<br/><br/>
</small></p>";
echo "<p align=\"center\"><small>
<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">I akademija</a><br/>
<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">I miesta</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";

}

if($id == "zvejyba"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}
else{

echo"<small><i>Zvejybos pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 1;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "rinkimas"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}
else{

echo"<small><i>Rinkimo pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 0;
$ak2 = 1;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "kasimas"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}
else{

echo"<small><i>Kasimo pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 0;
$ak2 = 0;
$ak3 = 1;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "kalvininkavimas"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}
else{

echo"<small><i>Kalvininkavimo pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 1;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "medkirtyste"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}
else{

echo"<small><i>Medkirtystes pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 1;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "juvelyrika"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Juvelyrikos pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 1;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "crafting"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Craftingo pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 1;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "medziokle"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Medziokles pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 1;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }


$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "kepimas"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 100000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Kepimo pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 1;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 100000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "gynyba"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 500000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Gynybos pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 1;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 500000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "jega"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 500000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Jegos pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 1;
$ak12 = 0;
$ak13 = 0;

$pinigai = $pinigai - 500000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "gyvybes"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 500000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Gyvybiu pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 1;
$ak13 = 0;

$pinigai = $pinigai - 500000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "patirtis"){

if (time() > $akademijosfailas)
    {
echo"<small><i>Deja dabar vyksta pamokos...</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}

elseif($pinigai < 500000){
echo"<small><i>Nepakanka pinigu</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}
else{

echo"<small><i>Patirties pamoka uzsakyta sekmingai</i></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 1;

$pinigai = $pinigai - 500000;

$fp = fopen("$gameriai","w");
fwrite($fp,"$lygis|$inf[1]|$inf[2]|$jega|$gyvybes|$gyvybess|$sugebejimas|$pinigai|$wins|$loses|$ginklo_att|$ginklas|$uzregintas|$pask_prisijungimas|$p|$points|$gynyba|$tim|$rase|$exp|$ex_left||$sarvu_prot|$sarvai||\n");
fclose($fp);

            if (!file_exists("akademy/$nick.ta"))
            {
                $open = @fopen("akademy/$nick.ta", "w+");
                @fwrite($open, "$nick|\n");
                @fclose($open);
                @chmod("akademy/$nick.ta", 0777);
            }

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

}}

if($id == "atsisakyti"){

$akall = $ak1+$ak2+$ak3+$ak4+$ak5+$ak6+$ak7+$ak8+$ak9+$ak10+$ak11+$ak12+$ak13;

if($akall > 0){
echo"<small><b>Sekmingai atsisakei pamoku</b></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";

$ak1 = 0;
$ak2 = 0;
$ak3 = 0;
$ak4 = 0;
$ak5 = 0;
$ak6 = 0;
$ak7 = 0;
$ak8 = 0;
$ak9 = 0;
$ak10 = 0;
$ak11 = 0;
$ak12 = 0;
$ak13 = 0;

$fp13 = fopen("$akademija","w");
fwrite($fp13,"$ak1|$ak2|$ak3|$ak4|$ak5|$ak6|$ak7|$ak8|$ak9|$ak10|$ak11|$ak12|$ak13|$ak14|$ak15|$ak16|$ak17|$ak18|$ak19|$ak20|$ak21|$ak22|$ak23|$ak24|$ak25|$ak26|$ak27|$ak28|$ak29|$ak30|$ak31|$ak32|$ak33|$ak34|$ak35|$ak36|$ak37|$ak38|$ak39|$ak40|\n");
fclose($fp13);

        @unlink("akademija/$nick.txt"); 
        @unlink("akademy/$nick.ta"); 

}

elseif($akall < 1){
echo"<small><b>Nera ka atsaukti! Pamokos nei neturi uzsisakes.</b></small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
<br/>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">Iseiti</a>";
}}

if($id == "sarasas"){


        foreach (glob("akademija/*.txt") as $a)
        {
            $name = str_replace(array("akademija/", ".txt"), "", $a);
            $exe = explode("|", file_get_contents($a));
            $arr[] = array("$exe[0]", "$name");

        }
$kiek2 = count($arr);
if($kiek2 != 0){
    rsort($arr);
}
$kiek = count($arr);

echo"<p align=\"center\"><small>$lin<br/>Uzisrasiusiuju sarasas<br/>Jau uzsirase($kiek):<br/></small></p>";

if($kiek == 0){
echo "<p align=\"center\"><small>Dar niekas nera uzsirases y akademija<br/>
</small></p>
";
}

if($kiek != 0){

    for ($f = 0; $f < $kiek; $f++)
    {
        echo "<p align=\"center\"><small>$ico<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a>$ico</small></p>";
    }
}

echo "<p align=\"center\"><small><br/>
<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">I akademija</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=miestas\">I miesta</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a></small></p>";
}

if($id == "informacija"){
echo"<small>Tai nepaprasta akedemija.joje galima pakeisti pamokas,atsisakyti ir t.t,
mokomas dalykas prideda 100 lygiu mokomojo dalyko,o pamoka kainuoja 100000 pinigu.Arba galima mokintis 5 lygius y duomenis,tada pamoka kainuoja 500000.Bet kuriuo atveju dar likus laiko iki pamoku gali pakeisti savo sprendima,taciau tai kainuos papildomai,tiek pat pinigu.Praejus pamoku laikui jus gausite pm zinute su pranesimu apie ismokta pamoka,tada vel prasides laikas uzsirasymams y akademija.Beje tai tikrai geriausia akademija nes ir pamokos vyksta dazniau - kas 347 minutes.
</small>
<br/>$ico<a href=\"akademija.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a>
";
}
print'</card></wml>';

?>

