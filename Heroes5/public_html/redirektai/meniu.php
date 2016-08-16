<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml><card id="index" title="Redirektai">';

$id = htmlspecialchars($_GET['id']);
$sub = htmlspecialchars($_GET['sub']);
$p = htmlspecialchars($_GET['p']);

if(!file_exists("sub/$sub.txt")){echo "
<p align='center'> Toks subdomenas neregistruotas!<br/></p></card></wml>";exit;}

list($subd,$pass)=explode("|", file_get_contents("sub/$sub.txt"));

if($p != $pass){
 echo "<p align='center'> 
 Neteisingas slaptazodis!<br/>
 ---<br/>
 <a href='index.php'>I pradzia</a><br/></p></card></wml>";exit;}

if(empty($id)){
echo "<p align='center'> 
Subdomeno valdymo panele<br/>
<small>----------<br/></small></p><p align='left'><small>
 
&#187; <a href='meniu.php?sub=$sub&amp;p=$p&amp;id=keisti'>Keisti adresa</a><br/>

</small></p><p align='center'><small>
----------<br/>
Jei turite klausimu kreipkites email: nzn<br/>
----------<br/>
<a href='index.php'>Atsijungti</a><br/>
 </small></p></card></wml>";exit;}

if($id == "keisti"){
echo "<p align='center'> 
Cia galite pakeisti adresa i kuri nukreipia musu subdomenas<br/><small>
----------<br/>
Adresas(be http://)<br/></small>
<input type='text' name='text'/><br/><small>
<anchor>+Keisti+<go href='meniu.php?sub=$sub&amp;p=$p&amp;id=keicia' method='post'>
<postfield name='text' value='$(text)'/></go></anchor><br/>
----------<br/>
<a href='meniu.php?sub=$sub&amp;p=$p'>Atgal</a><br/></small></p></card></wml>
";exit;
}

if($id == "keicia"){

	$text = strtolower(trim(htmlspecialchars($_POST['text'], ENT_QUOTES)));
	if(empty($text)){echo "
<p align='center'> Neivedete adreso!<br/></p></card></wml>";exit;}

$f = fopen("sub/$sub.txt", "w");
fwrite($f, "http://$text|$p|");
fclose($f);

echo "<p align='center'> 
 Pakeista sekmingai!<br/><small>
 ----------<br/>
 <a href='meniu.php?sub=$sub&amp;p=$p'>I meniu</a><br/></small></p></card></wml>";exit;


}







echo "</card></wml>";
?>