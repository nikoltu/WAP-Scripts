<?php
$id = $_GET['id'];
$kodas = $_GET['kodas'];
include("root.php");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: text/vnd.wap.wml");

print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<!DOCTYPE wml PUBLIC \"-//WAPFORUM//DTD WML 1.2//EN\"". " \"http://www.wapforum.org/DTD/wml12.dtd\">";
echo "<wml>
<card id=\"spawn\" title=\"TAVO REKLAMA\">";


$time1=time();
$time = $time1 - 2592000; //reklamos terminas 1menesis gali keisti sekundem 
$sqlDell="DELETE LOW_PRIORITY FROM reklama where laikas < '$time' ";
mysql_query($sqlDell) or die(mysql_error());
$reklamu=mysql_num_rows(mysql_query("SELECT * FROM reklama"));
if($id=="")
{
echo "<p align=\"center\">";
echo "<small>--- ---- ---</small><br/>";
echo "<small>Random reklama:</small><br/>";
echo "<small>--- ---- ---</small><br/>";
$nusk = mysql_query("SELECT * FROM reklama ORDER BY RAND() DESC LIMIT 1");
while($view = mysql_fetch_array($nusk)) {
$antraste = $view["antraste"];
$url = $view["url"];
print"<small><a href=\"http://$url\">$antraste</a></small><br/>"; }
if($reklamu=="0"){print"<small><a href=\"index.php\">* Reklama *</a></small><br/>";}
echo "<small>--- ---- ---</small><br/>";
echo "<small>Nori pirkti reklama 1men uz 3LT siusk teksta:</small><br/>";
echo "<small><b>LGZZ</b></small><br/>";
echo "<small>Numeriu:</small><br/>";
echo "<small><b>1679</b></small><br/>";
echo "<small>Ir gausite koda kur ivesite i apacioje pateikta langeli</small><br/>";
echo"Reklama bus index <b>Virsuje</b><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small>Jusu kodas:</small><br/>";
echo "<input type=\"text\" name=\"kodas\" value=\"\" maxlength=\"8\"/><br/>";
echo "<a href=\"rek.php?id=jungtis&amp;kodas=$(kodas)\">JUNGTIS</a><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small>Siuo metu kaitoliojasi reklamu: $reklamu </small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"http://lgzz.eu\">:: I Pagrindini ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo"</p></card></wml>";
exit;
}
if($id==jungtis)
{
$nusk = mysql_query("SELECT HIGH_PRIORITY kodas,antraste,url,laikas FROM reklama where kodas='$kodas' LIMIT 1");
while ( $view = mysql_fetch_array($nusk) ){
$kodo = $view["kodas"];
$antraste = $view["antraste"];
$url = $view["url"];
$laikas = $view["laikas"];
$liko=$laikas - $time;
echo "<p align=\"center\">";
echo "<small>Prisijungta Sekmingai.</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small>Liko laiko: $liko s.</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small>Adresas:<br/> http://$url <b><a href=\"rek.php?id=keistiurl&amp;kodas=$kodas\">[keisti]</a></b></small><br/>";
echo "<small>Antraste:<br/> $antraste <b><a href=\"rek.php?id=keistianr&amp;kodas=$kodas\">[keisti]</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">:: Atsijungti ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}

$kodas2 = mysql_num_rows(mysql_query("SELECT * FROM reklama WHERE kodas='$kodas'"));
if($kodas2 == 0){ 
echo "<p align=\"center\">";
echo "<small>Blogai ivestas Kodas</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">Atgal</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}
echo"</p></card></wml>";
exit;
}

if($id==keistiurl)
{
$nusk = mysql_query("SELECT HIGH_PRIORITY kodas,antraste,url,laikas FROM reklama where kodas='$kodas' LIMIT 1");
while ( $view = mysql_fetch_array($nusk) ){
$kodo = $view["kodas"];
$antraste = $view["antraste"];
$url = $view["url"];
$laikas = $view["laikas"];
echo "<p align=\"center\">";
echo "<small>Adresas(be http://):</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<input type=\"text\" name=\"adresas\" value=\"\" maxlength=\"60\"/><br/>";
echo "<anchor title=\"keisti\">Keisti";
echo "<go method=\"post\" href=\"rek.php?id=keistiurl1&amp;kodas=$kodas\">";
echo "<postfield name=\"adresas\" value=\"$(adresas)\"/>";
echo "</go>";
echo "</anchor><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php?id=jungtis&amp;kodas=$kodas\">:: Atgal ::</a></b></small><br/>";
echo "<small><b><a href=\"rek.php\">:: Atsijungti ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}

$kodas2 = mysql_num_rows(mysql_query("SELECT * FROM reklama WHERE kodas='$kodas'"));
if($kodas2 == 0){ 
echo "<p align=\"center\">";
echo "<small>Blogai ivestas Kodas</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">Atgal</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}
echo"</p></card></wml>";
exit;
}

if($id==keistiurl1)
{
$nusk = mysql_query("SELECT HIGH_PRIORITY kodas,antraste,url,laikas FROM reklama where kodas='$kodas' LIMIT 1");
while ( $view = mysql_fetch_array($nusk) ){
$kodo = $view["kodas"];
$antraste = $view["antraste"];
$url = $view["url"];
$laikas = $view["laikas"];
$adresas = $_POST['adresas'];
$adresas = substr($adresas, 0, 31);
$adresas = htmlspecialchars($adresas);
$querys = "update  reklama set url ='$adresas' where kodas='$kodas' limit 1";
mysql_query($querys) or die(mysql_error());
echo "<p align=\"center\">";
echo "<small>Pakeista.</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php?id=jungtis&amp;kodas=$kodas\">:: Atgal ::</a></b></small><br/>";
echo "<small><b><a href=\"rek.php\">:: Atsijungti ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}

$kodas2 = mysql_num_rows(mysql_query("SELECT * FROM reklama WHERE kodas='$kodas'"));
if($kodas2 == 0){ 
echo "<p align=\"center\">";
echo "<small>Blogai ivestas Kodas</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">Atgal</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}
echo"</p></card></wml>";
exit;
}
if($id==keistianr)
{
$nusk = mysql_query("SELECT HIGH_PRIORITY kodas,antraste,url,laikas FROM reklama where kodas='$kodas' LIMIT 1");
while ( $view = mysql_fetch_array($nusk) ){
$kodo = $view["kodas"];
$antraste = $view["antraste"];
$url = $view["url"];
$laikas = $view["laikas"];
echo "<p align=\"center\">";
echo "<small>Antraste max 30:</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<input type=\"text\" name=\"antrt\" value=\"\" maxlength=\"33\"/><br/>";
echo "<anchor title=\"keisti\">Keisti";
echo "<go method=\"post\" href=\"rek.php?id=keistianr1&amp;kodas=$kodas\">";
echo "<postfield name=\"antrt\" value=\"$(antrt)\"/>";
echo "</go>";
echo "</anchor><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php?id=jungtis&amp;kodas=$kodas\">:: Atgal ::</a></b></small><br/>";
echo "<small><b><a href=\"rek.php\">:: Atsijungti ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}

$kodas2 = mysql_num_rows(mysql_query("SELECT * FROM reklama WHERE kodas='$kodas'"));
if($kodas2 == 0){ 
echo "<p align=\"center\">";
echo "<small>Blogai ivestas Kodas</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">Atgal</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}
echo"</p></card></wml>";
exit;
}

if($id==keistianr1)
{
$nusk = mysql_query("SELECT HIGH_PRIORITY kodas,antraste,url,laikas FROM reklama where kodas='$kodas' LIMIT 1");
while ( $view = mysql_fetch_array($nusk) ){
$kodo = $view["kodas"];
$antraste = $view["antraste"];
$url = $view["url"];
$laikas = $view["laikas"];
$antrt = $_POST['antrt'];
$antrt = substr($antrt, 0, 31);
$antrt = htmlspecialchars($antrt);
$querys = "update  reklama set antraste ='$antrt' where kodas='$kodas' limit 1";
mysql_query($querys) or die(mysql_error());
echo "<p align=\"center\">";
echo "<small>Pakeista.</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php?id=jungtis&amp;kodas=$kodas\">:: Atgal ::</a></b></small><br/>";
echo "<small><b><a href=\"rek.php\">:: Atsijungti ::</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}

$kodas2 = mysql_num_rows(mysql_query("SELECT * FROM reklama WHERE kodas='$kodas'"));
if($kodas2 == 0){ 
echo "<p align=\"center\">";
echo "<small>Blogai ivestas Kodas</small><br/>";
echo "<small>--- ---- ---</small><br/>";
echo "<small><b><a href=\"rek.php\">Atgal</a></b></small><br/>";
echo "<small>--- ---- ---</small><br/>";
}
echo"</p></card></wml>";
exit;
}

?>
