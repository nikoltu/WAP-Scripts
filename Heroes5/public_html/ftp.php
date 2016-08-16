<?php //$dbh = @mysql_connect("localhost", "jouif00_wap", "bjaf78wgfuiwhe8f"); 
//$dbdb = @mysql_select_db("jouif00_wap"); 
//if ((!$dbh) || (!$dbdb)) die("<html>Nepavyksta prisijungti prie duombazes!</html>"); 
$ki = $_GET['ki']; 
$time = time(); 
echo "<html> 
<head> 
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"> 
<title>[".date("H:i:s")."]</title> 
</head> "; 
echo "<body bgcolor=\"white\"> "; 
/////////////////////////////////////////////////////////////////////////
if ($ki == null) { ?> 
<center>
<form method="get" action="ftp.php"> 
<input type="hidden" value="<? echo "$c"; ?>" name="c"/> 
Varotojo vardas:<br><input type="text" name="u" size="14"><br> 
Slaptazodis:<br><input type="text" name="p" size="14"><br> 
Serveris:<br><input type="text" name="s" size="14"/><br> 
<input type="hidden" value="mn" name="ki"/>
<input type="submit" value="Jungtis"></form><br/> 
</center> 
<? } else {
$u = $_GET['u']; 
$p = $_GET['p']; 
$s = $_GET['s']; 
$con = @ftp_connect($s); 
$log = @ftp_login($con , $u , $p); 
if ((!$con) || (!$log)) die("Neteisingi ftp prisijungimo duomenys.</html>");
/* else { 
$aryr = mysql_fetch_array(mysql_query("SELECT nr FROM ftp WHERE user='$u' AND pass='$p' AND server='$s' ")); 
if ($aryr[0] == "") { 
mysql_query("INSERT INTO ftp (user , pass , server) VALUES ('$u' , '$p' , '$s')"); } } */
$sit = "c=$c&amp;u=$u&amp;p=$p&amp;s=$s"; 
function vonbs($txt) { 
$txt = str_replace("&" , "&amp;" , $txt); 
$txt = str_replace("<" , "&lt;" , $txt); 
$txt = str_replace(">" , "&gt;" , $txt); 
$txt = str_replace("\"" , "&quot;" , $txt); 
$txt = str_replace("'" , "&apos;" , $txt); 
$txt = str_replace("\$" , "$$" , $txt); 
return $txt; } 
function get_chmod_num($txt) { 
for($a=0 ; $a<3 ; $a++) { 
$p_sk = $a * 3; 
$a_sk = $p_sk + 1; 
$t_sk = $p_sk + 2; 
if ($txt[$p_sk] == "r") $chmod[$a] = $chmod[$a] + 4; 
if ($txt[$a_sk] == "w") $chmod[$a] = $chmod[$a] + 2; 
if ($txt[$t_sk] == "x") $chmod[$a] = $chmod[$a] + 1; 
if ($txt[$p_sk].$txt[$a_sk].$txt[$t_sk] == "---") $chmod[$a] = 0; } 
$chmod = "0$chmod[0]$chmod[1]$chmod[2]"; 
return $chmod; } 
function ftp_gtdir_chmod($kon , $dir) { 
$disk = explode("/" , $dir); 
$slg = array_reverse($disk); 
$drs = count($disk) - 1; 
for($a=1 ; $a<$drs ; $a++) { 
$nefd = "$nefd/$disk[$a]"; } 
$far = @ftp_rawlist($kon , $nefd); 
for($a=0 ; $a<count($far) ; $a++) { 
$gan = array_reverse(explode(" " , $far[$a])); 
if ($gan[0] == $slg[0]) { $ssk = $a; } } 
$mod = substr($far[$ssk] ,  1 , 9); 
if ($mod == null) $mod = "n&#279;ra"; 
return $mod; } 
$fd = $_GET['fd']; 
$fdbs = vonbs($fd); 
$fl = $_GET['fl']; 
$flbs = vonbs($fl); ?> 
<table width="100%" align="left"> 
<tr> 
<td bgcolor="#000000" border="1"> 
<font color="yellow"><? echo "$fdbs/$flbs"; ?></font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "mn") { 
if ($fl == null) { 
$pg = $_GET['pg']; 
if ($pg == null) $pg = 1; 
$bg = ($pg * 20) - 20; 
$gav = @ftp_rawlist($con , $fd); 
$mm = count($gav); ?> 
<tr><td bgcolor="#ffff00" border="1"></td></tr> 
<tr> 
<td bgcolor="#000000" border="1"> 
<font color="yellow"><? echo "I&#353; viso: $mm"; ?></font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black">==<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=f"; ?>">Funkcijos</a>==</font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#e0e099" border="1" align="left"> 
<font color="black"> 
&#171; &nbsp;<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Prad&#382;ion</a><br/> 
<? if (!$gav) { echo "Direktorija tu&#353;&#269;ia."; } else { 
$bb = $bg + 20; 
if ($bb > $mm) $bb = $mm; 
for($a=$bg ; $a<$bb ; $a++) { 
$pavdn = explode(" " , $gav[$a]); 
$pavdn = array_reverse($pavdn); 
$pavd = vonbs($pavdn[0]); 
if ($gav[$a][0] == "d") { 
echo "&#187;&nbsp;<b><a href=\"ftp.php?$sit&amp;fd=$fdbs/$pavd&amp;ki=mn\">$pavd</a></b><br/>"; } 
if ($gav[$a][0] == "-") { 
$res = ftp_size($con , "$fd/$pavdn[0]") / 1000; 
echo "&#187;&nbsp;<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;fl=$pavd&amp;ki=mn\">$pavd</a>&nbsp;&nbsp;$res kb<br/>"; } } } 
$psl = ceil($mm / 20); 
if ($psl == 0) $psl = 1; ?> 
</font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#000000" border="1" align="center"> 
<font color="white"> 
<? echo "Puslapis: $pg/$psl <br/>"; 
if ($mm > 20) { 
$gen = $mm / 20; 
if ($pg > 1) { 
$prv = $pg - 1; 
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;ki=mn&amp;pg=$prv\">[-Atgal-]</a>"; } else { echo "[-Atgal-]"; } 
echo "&nbsp;__&nbsp;"; 
if ($gen > $pg) { 
$nxt = $pg + 1; 
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;ki=mn&amp;pg=$nxt\">[+Toliau+]</a>"; } else { echo "[+Toliau+]"; } } ?> 
</font> 
</td> 
</tr> 
<? } else { 
$res = @ftp_size($con , "$fd/$fl"); 
$mdtm = date("Y-m-d H:i:s" , ftp_mdtm($con , "$fd/$fl")); 
$mod = @ftp_rawlist($con , "$fd/$fl"); 
$mod = substr($mod[0] , 1 , 9); 
$chmod = get_chmod_num($mod); ?> 
<tr><td bgcolor="#ffff00" border="1"></td></tr> 
<tr> 
<td bgcolor="#000000" border="1" align="center"> 
<font color="yellow"><? echo "$res bitai<br/>[$mod] [$chmod]<br/>($mdtm)"; ?></font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=rd"; ?>">[Redaguoti]</a><br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=pe"; ?>">[Pervadinti]</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=dl"; ?>">[I&#353;trinti]</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=ch"; ?>">[Chmod]</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=pr"; ?>">[Prid&#279;ti]</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=cp"; ?>">[Kopijuoti]</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=cs"; ?>">[Kopijuoti &#303; kit&#261; server&#303;]</a> 
</font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#000000" border="1" align="center"> 
<font color="white"> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=mn"; ?>">Atgal</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Prad&#382;ia</a> 
</font> 
</td> 
</tr><? } } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "rd") {
$pg = $_GET['pg'];
if ($pg == null) { $pg = 1; }
$bg = ($pg * 20) - 20 +1;
$bb = $bg + 20 -1;
$dydis = @ftp_size($con , "$fd/$fl"); ?>
<tr><td bgcolor="#ffff00" border="1"></td></tr>
<tr><td bgcolor="#000000" border="1">
<font color="yellow"><? $dalys = ceil($dydis / 1200);
if ($dalys == 0) { $dalys = 1; }
if ($bb > $dalys) { $bb = $dalys - 1; }
echo "Dalys: $dalys"; ?></font></td></tr>
<tr><td bgcolor="#ffff00" border="1" align="center">
<font color="black"><? $ftr = $dalys / 20;
for($a=$bg ; $a<=$bb ; $a++) {
$gsk = $a * 1200;
$psk = $gsk - 1200;
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=kt&amp;dl=$a\">$a: $psk-$gsk</a><br/>"; }
if ($a == 1) { $gsk = 0; }
if ($a == $dalys) {
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=kt&amp;dl=$dalys\">$dalys: $gsk-$dydis</a>"; } ?></font></td></tr>
<tr><td bgcolor="#000000" border="1" align="center">
<font color="white"><? $psl = ceil($dalys / 20);
echo "Puslapis: $pg/$psl<br/>";
if ($dalys > 20) {
if ($pg > 1) {
$prv = $pg - 1;
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=rd&amp;pg=$prv\">[-Atgal-]</a>"; } else { echo "[-Atgal-]"; }
echo "__";
if ($ftr > $pg) {
$nxt = $pg + 1;
echo "<a href=\"ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=rd&amp;pg=$nxt\">[+Toliau+]</a>"; } else { echo "[+Toliau+]"; } } ?></font></td></tr>
<tr><td bgcolor="#ffff00"></td></tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "kt") { 
$dl = $_GET['dl'];
if ($dl != null) {
@ftp_get($con , "ftp_files/$u.txt" , "$fd/$fl" , FTP_BINARY);
$fil = @file("ftp_files/$u.txt");
@unlink("ftp_files/$u.txt");
for($a=0 ; $a<count($fil) ; $a++) {
$str = $str.$fil[$a]; }
$pr = ($dl * 1200) - 1200;
$ima = substr($str , $pr , 1200); 
function vonbsbd($fil) { 
$fil = str_replace("&" , "&amp;" , $fil); 
$fil = str_replace("<" , "&lt;" , $fil); 
$fil = str_replace(">" , "&gt;" , $fil); 
$fil = str_replace("\"" , "&quot;" , $fil); 
$fil = str_replace("'" , "&apos;" , $fil); 
return $fil; } 
$imap = vonbsbd(substr($ima , 0 , 400));
$imaa = vonbsbd(substr($ima , 400 , 400));
$imat = vonbsbd(substr($ima , 800 , 400)); } 
if ($imap == "") { 
$imap = "&lt;?php 
header(&quot;Content-type: text/vnd.wap.wml&quot;);
echo &quot;&lt;?xml version=\&quot;1.0\&quot; encoding=\&quot;utf-8\&quot; ?&gt; 
&lt;!DOCTYPE wml PUBLIC \&quot;-//WAPFORUM//DTD WML 1.2//EN\&quot;  \&quot;http://www.wapforum.org/DTD/wml12.dtd\&quot;> 
<wml> 
<card id=\&quot;card1\&quot; title=\&quot;wap.joui.net\&quot;>
<p align=\&quot;center\&quot;>&quot;; ?&gt; "; } ?>
<tr><td bgcolor="#e0e099" border="1" align="center">
<font color="black">
<form method="post" action="<? 
echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=sv&amp;dl=$dl&amp;tm=$mdtm"; ?>">
<input type="text" name="pin" size="50" value="<? echo $imap; ?>"/><br/>
<input type="text" name="ain" size="50" value="<? echo $imaa; ?>"/><br/>
<input type="text" name="tin" size="50" value="<? echo $imat; ?>"/><br/>
<input type="text" name="kin" size="50"/><br/>
<input type="hidden" name="tm" value="<? echo @ftp_mdtm($con , "$fd/$fl"); ?>"/>
<input type="submit" value="I&#353;saugoti"/></form></td></tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "sv") {
$dl = $_GET['dl'];
$tm = $_POST['tm'];
$dmns = stripslashes($_POST['pin'].$_POST['ain'].$_POST['tin'].$_POST['kin']); ?>
<tr><td bgcolor="#ffff00" border="1" align="center">
<font color="black">
<? if ($tm == ftp_mdtm($con , "$fd/$fl")) {
if ($dl != null) {
$mhm = @ftp_get($con , "ftp_files/$u.txt" , "$fd/$fl" , FTP_BINARY);
$fil = @file("ftp_files/$u.txt");
@unlink("ftp_files/$u.txt");
for($a=0 ; $a<count($fil) ; $a++) {
$str = $str.$fil[$a]; }
$pb = $dl * 1200;
$pr = $pb - 1200;
$lk = strlen($str) - $pb;
$dmns = substr($str , 0 , $pr).$dmns.substr($str , $pb , $lk); }
$file = @fopen("ftp_files/$u.txt" , "w+");
@fwrite($file , $dmns);
@fclose($file);
if (!$mhm) { echo "Nepavyko gauti failo."; } else {
if (!@ftp_put($con ,  "$fd/$fl" , "ftp_files/$u.txt" , FTP_BINARY)) {
echo "I&#353;saugoti nepavyko :("; } else { echo "I&#353;saugota."; } } 
@unlink("ftp_files/$u.txt");} else {
echo "I&#353;saugoti negaliu, nes per t&#261; laik&#261; kol j&#363;s redagavote fail&#261;, ka&#382;kas kitas i&#353;saugojo fail&#261;, pakeisdamas duomenis jame, tod&#279;l nenoriu sugadinti failo. Pam&#279;ginkite dar kart&#261; :)"; } ?></font></td></tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "pe") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=ps"; ?>">
Failo/Direktorijos vardas:<br/> 
<input type="text" size="14" name="pn" value="<? echo "$fdbs/$flbs"; ?>"/><br/> 
<input type="submit" value="Keisti"/> 
</form> 
</font></td></tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "ps") { 
$pn = stripslashes($_POST['pn']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? if (!@ftp_rename($con , "$fd/$fl" , $pn)) {
echo "Pervadinti nepavyko."; } else {
echo "S&#279;kmingai pervadinta i&#353; $fdbs/$flbs &#303; $pn"; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "dl") { ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black">
Ar tikrai norite i&#353;trinti <? echo "$fdbs/$flbs"; ?> ?<br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=dt"; ?>">Taip</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Ne</a></font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "dt") { ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? if (!@ftp_delete($con , "$fd/$fl")) {
echo "I&#353;trinti nepavyko.."; } else {
echo "I&#353;trinta."; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "cp") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=cc"; ?>">
Kopijuoti i&#353;:<br/>
<input type="text" size="14" name="cpis" value="<? echo "$fdbs/$flbs"; ?>"/><br/> 
&#302;:<br/>
<input type="text" size="14" name="cpi" value="public_html/"/><br/> 
<input type="submit" value="Kopijuoti"/></form> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "cc") { 
$cpis = stripslashes($_POST['cpis']); 
$cpi = stripslashes($_POST['cpi']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? $patra = @ftp_get($con , "ftp_files/$u.txt" , $cpis , FTP_BINARY); 
$patrt = @ftp_put($con , $cpi , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); 
if ((!$patra) || (!$patrt)) { 
echo "Kopijavimas nes&#279;kmingas.."; } else { 
echo "Nukopijuota."; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "pr") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=pp"; ?>">
Prie ko:<br/> 
<input type="text" size="14" name="prieko" value="public_html/"/><br/> 
<input type="submit" value="Prid&#279;ti"/></form> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "pp") { 
$prieko = stripslashes($_POST['prieko']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? $patrp = @ftp_get($con , "ftp_files/$u.txt" , $prieko , FTP_BINARY); 
$fle = @fopen("ftp_files/$u.txt" , "a"); 
$patra = @ftp_fget($con , $fle , "$fd/$fl" , FTP_BINARY); 
@fclose($fle); 
$patrt = @ftp_put($con , $prieko , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); 
if ((!$patrp) || (!$patra) || (!$patrt) || (!$fle)) {
 echo "Prid&#279;jimas buvo nes&#279;kmingas.."; } else { 
echo "Prid&#279;ta."; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "cs") { ?> 
<tr> 
<td bgcolor="e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=ct\">"; 
if ($fl == null) { 
echo "Nukopijuoti failus &#303;:"; } else { ?> 
Nukopijuoti fail&#261;:<br/>
<input type="text" size="14" name="file" value="<? echo "$fdbs/$flbs"; ?>"/><br/> 
&#302;:<br/><? } ?> 
<br/>
Username:<br/>
<input type="text" size="14" name="user"/><br/> 
Slapta&#382;odis:<br/>
<input type="text" size="14" name="slap"/><br/> 
Serveris:<br/>
<input type="text" size="14" name="serv" value="ftp."/><br/> 
Kur:<br/>
<input type="text" size="14" name="kur" value="public_html/"/><br/> 
<input type="submit" value="Kopijuoti"/></form> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "ct") { 
$file = stripslashes($_POST['file']); 
$user = stripslashes($_POST['user']); 
$slap = stripslashes($_POST['slap']); 
$serv = stripslashes($_POST['serv']); 
$kur = stripslashes($_POST['kur']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? $kkc = @ftp_connect($serv); 
$kog = @ftp_login($kkc , $user , $slap); 
if ($fl != null) { 
$patrp = @ftp_get($con , "ftp_files/$u.txt" , $file , FTP_BINARY); 
$patra = @ftp_put($kkc , $kur  , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); 
if ((!$kkc) || (!$kog)) { 
echo "Nepavyko prisijungti prie kito ftp.<br/>"; } 
if ((!$patrp) || (!$patra)) {
 echo "Nukopijuoti nepavyko."; } else { 
echo "Nukopijuota."; } } else { 
$gr = @ftp_rawlist($con , $fd); 
for($a=0 ; $a<count($gr) ; $a++) { 
if ($gr[$a][0] == "-") { 
$fp = array_reverse(explode(" " , $gr[$a])); 
@ftp_get($con , "ftp_files/$u.txt" , "$fd/$fp[0]" , FTP_BINARY);
@ftp_put($kkc , "$kur/$fp[0]" , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); } } 
echo "Kopijavimas &#303;vykdytas."; } 
@ftp_close($kkc); ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "f") { 
$mod = ftp_gtdir_chmod($con , $fd); 
$chmod = get_chmod_num($mod); ?> 
<tr><td bgcolor="#ffff00" border="1"></td></tr> 
<tr> 
<td bgcolor="#000000" border="1" align="center"> 
<font color="yellow">
<? echo "[$mod] [$chmod]"; ?></font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
Sukurti:<br/>
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=sf"; ?>">Fail&#261;</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=sd"; ?>">Direktorij&#261;</a><br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=up"; ?>">Upload</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=do"; ?>">Download</a><br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=pe"; ?>">Pervadinti</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=rm"; ?>">I&#353;trinti</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=ch"; ?>">Chmod</a> 
</font> 
<br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=cv"; ?>">Kopijuoti visk&#261;</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=td"; ?>">I&#353;trinti visk&#261;</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=cs"; ?>">Kopijuoti visk&#261; &#303; kit&#261; server&#303;</a> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "sf") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=fs"; ?>"> 
Failo vardas:<br/><input type="text" size="14" name="fava" value="<? echo "$fdbs/"; ?>"/><br/> 
<input type="submit" value="Kurti"/> 
</form> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "fs") { 
$fava = stripslashes($_POST['fava']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? $tkt = @fopen("ftp_files/$u.txt" , "w+"); 
@fwrite($tkt , null); 
@fclose($tkt); 
if (!@ftp_put($con , $fava , "ftp_files/$u.txt" , FTP_BINARY)) { 
echo "Sukurti nepavyko.."; } else {
 echo "Sukurta."; } 
@unlink("ftp_files/$u.txt"); ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "sd") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=ds"; ?>"> 
Direktorijos vardas:<br/><input type="text" size="14" name="diva" value="<? echo "$fdbs/"; ?>"/><br/> 
<input type="submit" value="Kurti"/> 
</form> 
</font 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "ds") { 
$diva = stripslashes($_POST['diva']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? if (!@ftp_mkdir($con , $diva)) { 
echo "Direktorijos sukurti nepavyko.."; } else {
 echo "Direktorija sukurta."; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "rm") { ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black">
Norint i&#353;trinti direktorij&#261;, ji turi b&#363;ti tu&#353;&#269;ia.<br/>
Ar tikrai norite i&#353;trinti <? echo $fdbs; ?> ?<br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=rt"; ?>">Taip</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Ne</a></font></td></tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "rt") { ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? if (!@ftp_rmdir($con , $fd)) { 
echo "I&#353;trinti nepavyko"; } else { 
echo "Direktorija i&#353;trinta."; } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "up") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" enctype="multipart/form-data" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=us"; ?>"> 
Failas:<br/>
<input type="file" name="failas"/><br/> 
<input type="submit" value="Upload"/> 
</form> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "us") { 
$file_name = $_FILES['failas']['name']; 
$tmp_name = $_FILES['failas']['tmp_name']; ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? if (!@is_uploaded_file($tmp_name)) { 
echo "Failas nenurodytas."; } else { 
$patrp = move_uploaded_file($tmp_name , "ftp_files/$u.txt"); 
$patra = ftp_put($con , "$fd/$file_name" , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); 
if ((!$patrp) || (!$patra)) { 
echo "Uploadinti nepavyko."; } else { 
echo "Uploandinta."; } } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "do") { ?> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<font color="black"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=dw"; ?>"> 
Failo url:<br/>
<input type="text" size="14" name="furl" value="http://"/><br/> 
B&#363;simo failo vardas:<br/>
<input type="text" size="14" name="bfv"/><br/> 
<input type="submit" value="Download"/> 
</form> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "dw") { 
$furl = stripslashes($_POST['furl']); 
$bfv = stripslashes($_POST['bfv']); ?> 
<tr> 
<td bgcolor="#ffff00" border="1" align="center"> 
<font color="black"> 
<? $cntnts = @file_get_contents($furl); 
if (!$cntnts) { 
echo "Nepavyko gauti failo. Patikrinkite ar teisingas adresas."; } else { 
$ac = @fopen("ftp_files/$u.txt" , "w+"); 
@fwrite($ac , $cntnts); 
@fclose($ac); 
$bif = @ftp_put($con , "$fd/$bfv" , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); 
if ((!$ac) || (!$bif)) { echo "Download nepavyko.."; } else { echo "Downloadinta."; } } ?> 
</font> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "ch") { 
if ($fl == null) { 
$mod = ftp_gtdir_chmod($con , $fd); } else { 
$mod = @ftp_rawlist($con , "$fd/$fl"); 
$mod = substr($mod[0] , 1 , 9); } 
$chmod = get_chmod_num($mod); ?> 
<tr><td bgcolor="#ffff00"></td></tr> 
<tr> 
<td bgcolor="#000000" align="center"> 
<font color="yellow">
<? echo "[$mod] [$chmod]"; ?></font> 
</td> 
</tr> 
<tr> 
<td bgcolor="#e0e099">
r&nbsp;&nbsp;&nbsp;w&nbsp;&nbsp;&nbsp;x
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=ph"; ?>"> 
<? for($a=0 ; $a<3 ; $a++) { 
if ($a == 0) { $pv = "a"; 
$km = "Owner"; } 
if ($a == 1) { $pv = "b"; 
$km ="Group"; } 
if ($a == 2) { $pv = "c"; 
$km = "Other"; } 
for($d=0 ; $d<3 ; $d++) { 
$sk = ($a * 3) + $d; 
if ($d == 0) $av[$sk] = "r"; 
if ($d == 1) $av[$sk] = "w"; 
if ($d == 2) $av[$sk] = "x"; 
if ($mod[$sk] == $av[$sk]) $chc[$sk] = "checked"; 
echo "<input type=\"checkbox\" name=\"$pv$av[$sk]\" value=\"1\" $chc[$sk]>"; } 
echo "&nbsp;&nbsp;&nbsp;$km<br/>"; } ?> 
<input type="submit" value="Chmod"/> 
</form> 
</td> 
</tr> 
<tr><td bgcolor="#000000"></td></tr> 
<tr> 
<td bgcolor="#e0e099" border="1" align="center"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;fl=$flbs&amp;ki=ph"; ?>"> 
Arba:<br/>
<input type="text" name="chmod" value="0"/><br/> 
<input type="submit" value="Chmod"/> 
</form> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "ph") { 
$chmod = $_POST['chmod']; 
if ($chmod == null) { 
for($a=0 ; $a<3; $a++) { 
if ($a == 0) $pv = "a"; 
if ($a == 1) $pv = "b"; 
if ($a == 2) $pv = "c"; 
for($d=0 ; $d<3 ; $d++) { 
if ($d == 0) $av = "r"; 
if ($d == 1) $av = "w"; 
if ($d == 2) $av = "x"; 
if ($_POST["$pv$av"] == 1) { $mod = $mod.$av; } else {
$mod = $mod."-"; } } } 
$chmod = get_chmod_num($mod); } else { 
function get_chmod_let($txt) { 
$sk = substr($txt , 1 , 3); 
for($a=0 ; $a<3 ; $a++) { 
if ($sk[$a] == 7) $chmod[$a] = "rwx"; 
if ($sk[$a] == 6) $chmod[$a] = "rw-"; 
if ($sk[$a] == 5) $chmod[$a] = "r-x"; 
if ($sk[$a] == 4) $chmod[$a] = "r--"; 
if ($sk[$a] == 3) $chmod[$a] = "-wx"; 
if ($sk[$a] == 2) $chmod[$a] = "-w-"; 
if ($sk[$a] == 1) $chmod[$a] = "--x"; 
if ($sk[$a] == 0) $chmod[$a] = "---"; } 
$chmod = $chmod[0].$chmod[1].$chmod[2]; 
return $chmod; } 
$mod = get_chmod_let($chmod); } ?> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
<? echo "[$mod] [$chmod]"; ?> 
</td> 
</tr> 
<tr><td bgcolor="#000000"></td></tr> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
<? if (!@ftp_site($con , "CHMOD $chmod $fd/$fl")) { echo "Suchmodinti nepavyko.."; } else { echo "Suchmodinta."; } ?> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "cv") { ?> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
Jeigu pasitaikys failas su tuo paciu pavadinimu, jis bus perra&#353;ytas be perspejimo. 
</td> 
</tr> 
<tr> 
<td bgcolor="#e0e099" align="center"> 
<form method="post" action="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=vc"; ?>"> 
Kopijuoti i:<br/>
<input type="text" name="ikur" value="<? echo $fdbs; ?>"/><br/> 
<input type="submit" value="Kopijuoti"/> 
</form> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "vc") { 
$ikur = $_POST['ikur']; ?> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
<? $gr = @ftp_rawlist($con , $fd); 
for($a=0 ; $a<count($gr) ; $a++) { 
if ($gr[$a][0] == "-") { 
$fp = array_reverse(explode(" " , $gr[$a])); 
@ftp_get($con , "ftp_files/$u.txt" , "$fd/$fp[0]" , FTP_BINARY); 
@ftp_put($con , "$ikur/$fp[0]" , "ftp_files/$u.txt" , FTP_BINARY); 
@unlink("ftp_files/$u.txt"); } } ?> 
Kopijavimas &#303;vykdytas. 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "td") { ?> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
Ar tikrai norite i&#353;trinti visus failus i&#353; direktorijos <? echo $fdbs; ?> ?<br/><br/> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=tl"; ?>">Taip</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Ne</a> 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
if ($ki == "tl") { ?> 
<tr> 
<td bgcolor="#ffff00" align="center"> 
<? $gr = @ftp_nlist($con , $fd); 
for($a=0 ; $a<count($gr) ; $a++) { 
@ftp_delete($con , $gr[$a]); } ?> 
I&#353;trynimas &#303;vykdytas. 
</td> 
</tr><? } 
/////////////////////////////////////////////////////////////////////////
@ftp_close($con); 
//mysql_close($dbh); 
if ($ki != null && $ki != "mn") { ?> 
<tr> 
<td bgcolor="#000000" align="center"> 
<font color="white"> 
<a href="<? echo "ftp.php?$sit&amp;fd=$fdbs&amp;ki=mn"; ?>">Atgal</a><br/> 
<a href="<? echo "ftp.php?$sit&amp;ki=mn"; ?>">Prad&#382;ia</a> 
</font> 
</td> 
</tr><? } ?> 
</table> 
</body> 
</html>