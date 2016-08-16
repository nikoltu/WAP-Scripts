<?php
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml><card id="index" title="KaltaZ.neT">';
$id = htmlspecialchars(trim($_GET['id']));
$k = htmlspecialchars(trim($_GET['k']));

if($k != "xujzizaxui_padla_nx"){
	echo "Tu ne adminas tad pisk nx is cia ;D </card></wml>";exit;
}



if($id == ""){
	echo "<p align='center'>
	Administracijos Panele<br/><small>
	----------<br/>
	<a href='admin.php?k=$k&amp;id=listas'>Sub. listas</a><br/>
	----------<br/>
	<a href='index.php'>Atsijungti</a><br/></small></p></card></wml>";exit;
}

if($id == "listas"){
	echo "<p align=\"center\"><small>
	Subdomenu listas:<br/>
	----------<br/>";
	
$gl = glob("sub/*.txt");
$c = count($gl);
$psl = htmlspecialchars($_GET['psl']);
if($c=="0"){echo "Nieko nera!<br/>";}
else{echo"</small></p><p align=\"left\"><small>";
if(!$psl){$psl=1;}
if($psl==1 && $c<10){$nuo=0; $iki=$c;}else{
$nuo=$psl*10-10; $iki=$psl*10;}
if($c<=$psl*10){$iki=$c;} 
$pp=ceil($c/10);

foreach(glob("sub/*.txt") as $b){
 $pav = str_replace(array(".txt","sub/"),"", $b);
 $ex = explode("|", file_get_contents($b));
 $flmt = filemtime($b);
 $arr[]=array($flmt,$ex[0],$ex[1],$pav);
	} rsort($arr);


for($o=$nuo; $o<$iki; $o++){
 
 echo "{$arr[$o][3]}<br/>
Redirektina i <a href='{$arr[$o][1]}'>{$arr[$o][1]}</a><br/>
Slaptazodis: {$arr[$o][2]}<br/>
<b>==========</b><br/>";	
	}
	echo "</small></p><p align=\"center\"><small>";
for($bb=1; $bb<$pp+1; $bb++){ 
if($psl==$bb){echo"&lt;$bb&gt;";}else{ 
echo"<a href=\"admin.php?psl=$bb&amp;id=listas&amp;k=$k\">($bb)</a>";}}
}
	echo "<br/>
	- - - - - -<br/><a href=\"admin.php?k=$k\">Atgal</a><br/>";
	echo "</small></p></card></wml>";exit;
}