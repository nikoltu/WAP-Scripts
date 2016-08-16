<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
$kur = "Valdymo CP"; 
include("config.php"); 
if ($id == "") 
 
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {

   echo"<p align=\"left\"><small>
Zaidejai kurie turi maziau nei 10xp!<br/>
-<br/>
<a href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=trinti\">[#] Trinti nenaudojamus</a>
</small></p>";

  echo'<p align="left"><small>';

   $link="pastatai/xp/";
   $dir = glob($link."*");
   $eil=count($dir);

        for($it=0; $it<$eil; $it++)
{
$dr=str_replace($link,"",$dir[$it]); 
$dr=str_replace(".txt","",$dr); 
        $po = file_get_contents("pastatai/xp/$dr.txt"); 
        $pi = explode("|", $po); 
        if ($turixpka <= 10)
{

echo"
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$dr\">$dr</a>($pi[0])<br/>";

}
 }
   echo'</small></p>';

echo"<p align=\"left\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
 }

if ($id == "trinti") 
 
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {

echo'<p align="left"><small>';

   $linkk="pastatai/xp/";
   $dira = glob($linkk."*");
   $eill=count($dira);
        for($itt=0; $itt<$eill; $itt++)
{
$drr=str_replace($linkk,"",$dira[$itt]); 
$drr=str_replace(".txt","",$drr); 
        $poo = file_get_contents("ndbzgtusrsz/$drr.txt"); 
        $pit = explode("|", $poo); 
        if ($pit[0] <= 10)
{

        unlink("ndbzgtusrsz/$drr.txt"); 
unlink("priv_zin/$drr.txt"); 

}
 }

echo'</small></p>';

 echo"<p align=\"left\"><small>
Istrinta!!!<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
}
 }

if ($id == "krd")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>Kreditu davimas<br/>
-<br/>
Kam?:<br/>
<input name=\"kam_kronu\" type=\"text\" maxlength=\"50\" title=\"Kam\" value=\"\"/><br/>
Kiek?:<br/>
<input name=\"kiek_kronu\" type=\"text\" format=\"*N\" maxlength=\"10\" title=\"Kiek\" value=\"\"/><br/>
-<br/>";
echo "<select name=\"ka\">";
echo "<option value=\"plius\">Prideti</option>";
echo "<option value=\"minus\">Atimti</option>";
echo "</select><br/></small></p>";
echo"<p align=\"left\"><small>
<anchor>[&#187;] OK<go href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=duodu_krd\" method=\"post\">
    <postfield name=\"kam_kronu\" value=\"$(kam_kronu)\"/>
    <postfield name=\"kiek_kronu\" value=\"$(kiek_kronu)\"/>
    <postfield name=\"ka\" value=\"$(ka)\"/>
</go></anchor><br/></small></p>";
        echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
</p>";
    }
}

if ($id == "duodu_krd")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
$kam_kronu = ereg_replace("[^A-Za-z0-9_]", "", $_POST['kam_kronu']);

$kiek_kronu = ereg_replace("[^0-9]", "", $_POST['kiek_kronu']);

$ka = ereg_replace("[^A-Za-z0-9_]", "", $_POST['ka']);

if (!file_exists("ndbzgtusrsz/$kam_kronu.txt"))
{
$baad = "Sis zaidejas neuzregistruotas!";
}
if ($kam_kronu == "")
{
$baad = "Nenurodei kam suteikti kronu!";
}
if ($kiek_kronu == "")
{
$baad = "Nenurodei kiek suteikti kronu!";
}
if (!file_exists("kronoss/$kam_kronu.txt")){ $kronu = 0; } else { $kronu = file_get_contents("kronoss/$kam_kronu.txt");
}

if ($baad == ""){

if($ka == "plius"){
$kronu = $kronu+$kiek_kronu;
}
if($ka == "minus"){
$kronu = $kronu-$kiek_kronu;
}

$bll = fopen("kronoss/$kam_kronu.txt","w");
fwrite($bll,"$kronu");
fclose($bll);
$baad = "Sekmingai atlikta!";
}
echo"<p align=\"left\"><small>
$baad<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
</p>";
}
}

if ($id == "trint")
{
        if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
        echo "<p align=\"left\"><small>
Kovotojo istrinimas<br/>
-<br/>
Ka trint?:<br/>
<input name=\"ka_trint\" type=\"text\" maxlength=\"50\" title=\"Ka\" value=\"\"/><br/>
<anchor>[&#187;] Istrinti<go href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=trint2\" method=\"post\">
    <postfield name=\"ka_trint\" value=\"$(ka_trint)\"/>
</go></anchor><br/></small></p>";
        echo "<p align=\"left\"><small>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
</p>";
    }
}

if ($id == "trint2")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"left\"><small>
Tau cia negalima!<br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a></small></p>";
    }
    else
    {
$ka_trint = ereg_replace("[^A-Za-z0-9_]", "", $_POST['ka_trint']);

if (!file_exists("ndbzgtusrsz/$ka_trint.txt"))
{
$baaad = "Sis zaidejas neuzregistruotas!";
}
if ($ka_trint == "")
{
$baaad = "Nenurodei ka nori istrinti!";
}
if ($baaad == ""){

unlink("ndbzgtusrsz/$ka_trint.txt"); 

$baaad = "Sekmingai istrynei $ka_trint kovotoja!";
}
echo"<p align=\"left\"><small>
$baaad<br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">[^] Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/></small>
</p>";
}
}

if ($id == "index_topic")
{
    if ($vrd !== "@$valdovas")
    {
        echo "<p align=\"center\"><small><b>Tau cia negalima!</b><br/>
$lin<br/><a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">Atgal</a></small></p>"
;
    }
    else
    {
        echo "<p align=\"center\"><small><b>Indexo topico keitimas</b><br/>
$lin<br/>
Topic:<br/></small>
<input name=\"topic\" type=\"text\" maxlength=\"100\" title=\"Topic\" value=\"\"/><br/>

<anchor>Keisti<go href=\"pultas.php?nick=$nick&amp;pass=$pass&amp;id=index_topic2\" method=\"post\">
    <postfield name=\"topic\" value=\"$(topic)\"/>
</go></anchor><small><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
</p>";
}
}

if ($id == "index_topic2"){
$topic = $_POST['topic'];

$arre = array("<", ">", "&", "^", "$", "%", "\n", "|");
            $topic = str_replace($arre, "", $topic);
include("tsr.php");

$fop = fopen("txt/index_topic.txt", "w");
fwrite($fop, "$topic");
fclose($fop);
echo "<p align=\"center\"><small><b>Pakeista!</b><br/>
$lin<br/>
<a href=\"adm.php?nick=$nick&amp;pass=$pass&amp;id=meniu\">Atgal</a><br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">I pradzia</a><br/></small>
</p>";
}

print'</card></wml>';

?>