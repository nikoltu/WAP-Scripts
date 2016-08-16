<?php 
header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>'; 
$dsghj = date("H:i Y-m-d"); 
echo "<card id=\"index\" title=\"ORDA5 - The Best\">";
echo"Buriuose"; 
include("config.php"); 
$kovugavimolaikas = file_get_contents("txt/kglburiai.txt")-time();

if ($id == "klanai"){
echo"<p align=\"left\"><small>DBGT gaujos!<br/>-<br/>
<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=ikurt\">[&#187;] Ikurti savo gauja</a><br/>
-<br/></small></p>"; 
echo"<p align=\"left\"><small>
Rusiuoti gaujas pagal:<br/>";
if ($ka == ""){ echo"[Abecele]"; } else { echo"[<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=\">Abecele</a>]"; }
if ($ka == "kov"){ echo"[Laimetas kovas]"; } else { echo"[<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=kov\">Laimetas kovas</a>]"; }
if ($ka == "sum"){ echo"[Lygiu suma]"; } else { echo"[<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=sum\">Lygiu suma</a>]"; }
if ($ka == "vid"){ echo"[Lygiu vidurki]"; } else { echo"[<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=vid\">Lygiu vidurki</a>]"; }
if ($ka == "na"){ echo"[Nariu skaiciu]"; } else { echo"[<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;ka=na\">Nariu skaiciu</a>]"; }
echo"<br/><br/>"; 
$na = 0; 
$blo = glob("buriai/buriai/*.txt"); 
if ($ka == ""){ 
foreach($blo as $a){ 
$a = str_replace(array("buriai/buriai/",".txt"),"",$a);
$pons = file("buriai/buriai/$a.txt"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array("$a","$a");
} }
if ($ka == "kov"){ 
$laim = 0; 
foreach($blo as $a){ 
$a = str_replace(array("buriai/buriai/",".txt"),"",$a);
$pons = file("buriai/buriai/$a.txt"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
$laim = $laim+$infa[8]; }
$arr[]=array($laim,"$a");
} }
if ($ka == "sum"){ 
$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("buriai/buriai/",".txt"),"",$a);
$pons = file("buriai/buriai/$a.txt"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
$lvlv = $lvlv+$infa[0]; }
$arr[]=array($lvlv,"$a");
} }
if ($ka == "vid"){ 
foreach($blo as $a){ 
$lvlv = 0; 
$a = str_replace(array("buriai/buriai/",".txt"),"",$a);
$pons = file("buriai/buriai/$a.txt"); 
$n = count($pons); 
$na = $na+$n; 
for($t = 0; $t < count($pons); $t++){ 
$nar = explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
$lvlv = $lvlv+$infa[0]; }
$lvlv2 = round($lvlv/count($pons),1); 
$arr[]=array($lvlv2,"$a");
} }
if ($ka == "na"){ 
$lvlv = 0; 
foreach($blo as $a){ 
$a = str_replace(array("buriai/buriai/",".txt"),"",$a);
$pons = file("buriai/buriai/$a.txt"); 
$n = count($pons); 
$na = $na+$n; 
$arr[]=array($n,"$a");
} }

/*for($f=0; $f<count($blo); $f++){ 
$n = count(file("buriai/{$arr[$f][1]}.txt")); 
echo"- <a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>"; }
*/


$viso_tm = count($arr);
$puslapiu_skaicius = 20;

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($f = $nuo; $f < $iki; $f++){
    $n = count(file("buriai/{$arr[$f][1]}.ta")); 
echo"- <a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;ka={$arr[$f][1]}\">{$arr[$f][1]}</a> "; if ($ka != ""){ echo"[{$arr[$f][0]}]"; }else{ echo"[$n]"; }  echo"<br/>";    
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klanai&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }

echo"</small></p>"; 
echo"<p align=\"left\"><small>
-<br/>
Kovas gausit po "; echo round((file_get_contents("txt/kglburiai.txt")-time())/60,0); echo" min.<br/>
Viso gauju: "; echo count(glob("buriai/buriai/*.txt")); echo"<br/>
Juose nariu: $na<br/>
$lin<br/>
<a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=\">[&lt;] Zaidimas</a><br/>
</small></p>
";

    if ($kovugavimolaikas < 0)
    {
        echo "";

$time=time()+60*60; file_put_contents("txt/kglburiai.txt",$time);
$kovoz=0 + 10; file_put_contents("buriai/kovos/*.txt",$kovoz);
}

}


if ($id == "klan" && file_exists("buriai/topic/$ka.txt")){ 
if (!file_exists("buriai/topic/$ka.txt")){     
$atidarymasss = fopen("buriai/topicai/$ka.txt", "w");
        fwrite($atidarymasss, "Cia $ka topic, ji gali keisti tik gaujos nariai!");
        fclose($atidarymasss); 
chmod("sajungutopicai/$ka.ta",0777);       }
$tpc = file_get_contents("buriai/topic/$ka.txt"); 

$pons = @file("buriai/buriai/$ka.txt"); 
echo'<p align="left"><small>'; 
$laim = 0; 
$lvlv = 0; 
for($t = 0; $t < @count($pons); $t++){ 
$nary = @explode("|",$pons[$t]); 
if ($nary[0] == $nick){ $sajt = "narys"; }
$nar = @explode("|",$pons[$t]); 
$infa = explode("|", @file_get_contents("ndbzgtusrsz/$nar[0].txt"));
$laim = $laim+$infa[8]; 
$lvlv = $lvlv+$infa[0]; 
if ($nar[0] == $nick){ $saj = "narys"; }
if ($kure[0] == $nick){ $saj = "admins"; }

}
echo"<b>$ka<br/></b>
-<br/>";
if ($sajt != "narys"){ echo"
<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=stot&amp;ka=$ka\">[&#187;] Stoti i sia gauja</a><br/>-<br/>"; }
 echo"
$tpc<br/>"; 
 if ($sajt == "narys"){ echo"
<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=keistt&amp;ka=$ka\">[&#187;] Keisti</a><br/>"; }
 echo"-<br/></small></p><p align=\"left\"><small>"; 
 $kure = @explode("|",$pons[0]); 
echo"Burio vadas: <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$kure[0]\">$kure[0]</a><br/>
Nariai:<br/>";


$viso_tm = count($pons);
$puslapiu_skaicius = 20;

if ($page == ""){ $page = 1; }
        $next = $page + 1;
        $back = $page - 1;
if ($page == 1){ $nuo = 0; $iki = $puslapiu_skaicius; } else { $nuo = $page * $puslapiu_skaicius - $puslapiu_skaicius; $iki = $page * $puslapiu_skaicius; }
if ($viso_tm <= $page * $puslapiu_skaicius){ $iki = $viso_tm; }
        
        for ($t = $nuo; $t < $iki; $t++){
    $nar = @explode("|",$pons[$t]); 
echo"- <a href=\"zaisti.php?nick=$nick&amp;pass=$pass&amp;id=apie&amp;ka=$nar[0]\">$nar[0]</a>"; if ($sajt == "narys" && $nar[0] != $nick){ echo"[<a href=\"klanai.php?nick=$nick&amp;pass=$pass&amp;id=pervesti&amp;ka=$ka&amp;kas=$nar[0]\">Pervesti litu</a>]"; } echo"<br/>"; 
 }

         $viso_puslapiu = $viso_tm / $puslapiu_skaicius;

    $viso_puslapiai = 0;
        $starto_skaicius = 1;
        while ($viso_puslapiai < $viso_puslapiu){
        if ($page == $starto_skaicius){ echo "[$starto_skaicius]"; }else{ 
echo"<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=klan&amp;page=$starto_skaicius&amp;ka=$ka\">[$starto_skaicius]</a>"; }
        $viso_puslapiai++; $starto_skaicius++; }


$lvlv2 = round($lvlv/count($pons),1); 
echo"</small></p><p align=\"left\"><small>-<br/>"; 
if ($saj == "narys"){ echo"Tu esi sios gaujos narys!<br/>
<a href=\"buriai.php?nick=$nick&amp;pass=$pass&amp;id=stot&amp;ka=$ka\">[&#187;] Stoti dar karta i sia gauja</a><br/>
<a href=\"buriai.php?id=iseitissaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[&#187;] Iseiti is gaujos</a><br/>-<br/>"; }
if ($saj == "admins"){ echo"Tu esi sios gaujos vadas<br/>
<a href=\"buriai.php?id=istrintsaj&amp;nick=$nick&amp;pass=$pass&amp;ka=$ka\">[&#187;] Panaikinti gauja</a><br/>-<br/>"; }
echo"Nariu: "; echo count($pons); 
echo"<br/>
$lin<br/>
<a href=\"buriai.php?id=klanai&amp;nick=$nick&amp;pass=$pass\">[^] Atgal</a><br/>
<a href=\"zaisti.php?id=&amp;nick=$nick&amp;pass=$pass\">[&lt;] Zaidimas</a><br/>";
 echo'</small></p>'; 
}




print'</card></wml>';

?>