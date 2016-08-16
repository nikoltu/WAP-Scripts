<?php

header("Content-type: text/vnd.wap.wml");
header("Cache-control: no-store,no-cache,must-revalidate");

# Paima info is kur atejo, t.y. kokiu subodmenu :)

$serv = strtolower(htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES));

if(file_exists("sub/$serv.txt")){
	$e = explode("|", file_get_contents("sub/$serv.txt"));
	header("Location: $e[0]");
	}
	
#################################### Redirektinimo pabaiga... ########################################################

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml">
<wml><card id="index" title="Redirektai">';

$id = htmlspecialchars($_GET['id'], ENT_QUOTES);

if( $id == false ){
echo "<p align='center'>
<img src='img/baneris.gif' alt='bnr'/><br/>
<small>- - - - - -<br/>
Sveiki, cia galite u&#382;siregistruoti subdomena.<br/>
- - - - - -<br/>
- - - - - -<br/>
";  $is_viso = count(glob("sub/*.txt")); echo"
Jau u&#382;siregistravo $is_viso <br/>
- - - - - -<br/>
</small></p><p align='left'><small>
[&#187;]<a href='index.php?id=log'>Prisijungimas</a><br />
[&#187;]<a href='index.php?id=reg'>Registruoti</a><br/></small></p><p align='center'><small>
- - - - - -<br/>
<a href='http://kazok.failai.lt'>Wap Kazokai</a><br/>
- - - - - -<br/>
- - - - - -<br/>
&#169; JoKeRiS 2008<br/>
</small></p>";}



elseif( $id == log ){
echo "<p align='center'>
	Prisijungimas<br/><small>
	- - - - - -<br/>
	Subdomenas ( tavozodis.kaltaz.net ): <br /></small>
	<input type='text' name='sub' /><br /><small>
	Slaptazodis: <br /></small>
	<input type='text' name='p' /> <br /><small>
	<a href='meniu.php?sub=$(sub)&amp;p=$(p)'>Prisijungti</a><br/>
	- - - - -<br />
	<a href='index.php'>Atgal</a><br />
	</small></p>";

	
}




elseif( $id== 'reg' ){
	echo "<p align='center'>
	Registracija<br/><small>
	- - - - - -<br/>
	Tavo adresas(be http://):<br/></small>
	<input type='text' name='adr'/><br/>
	<small>Subdomenas:<br/></small>
	<input type='text' name='sub'/>.kaltaz.net<br/><small>
	Slapta&#382;odis:<br/></small>
	<input type='text' name='p'/><br/><small>
	<anchor>Registruoti<go href='index.php?id=reg2' method='post'>
	<postfield name='adr' value='$(adr)'/>
	<postfield name='sub' value='$(sub)'/>
	<postfield name='p' value='$(p)'/>
	
	</go></anchor><br/>
	- - - - - -<br/>
	<a href='index.php'>Atgal</a><br/></small></p>";
}





elseif($id == 'reg2'){
 
 //cia regas apdirbimai ir irasimai i sub/ dira
 
 $p = strtolower(trim(htmlspecialchars($_POST['p'], ENT_QUOTES)));
 
 $sub = strtolower(trim(htmlspecialchars($_POST['sub'], ENT_QUOTES)));
 
 $adr = strtolower(trim(htmlspecialchars($_POST['adr'], ENT_QUOTES)));
 

	
	if(substr_count($sub, ".") > 1){$klaida = 'Blogas subdomenas!';}
	if("$sub.kaltaz.net" == "www.kaltaz.net"){$klaida = 'Tokio negalima!';}
        if(file_exists("sub/$sub.kaltaz.net.txt")){$klaida = 'Toks subdomenas jau registruotas!';}
	$t = @file_get_contents('flod.txt');
	if($t > time()){$sec = $t-time();  $klaida = "Flood apsauga! Liko $sec s.";}
	if(empty($adr)){$klaida='Ne&#303;ved&#279;te savo adreso!';}
	if(empty($sub)){$klaida = 'Ne&#303;ved&#279;te subdomeno!';}
	if(empty($p)){$klaida = 'Ne&#303;ved&#279;te slapta&#382;od&#382;io!';}
	
	if($klaida == ""){$f = fopen("sub/$sub.kaltaz.net.txt", "w+");
		fwrite($f, "http://$adr|$p|");
		fclose($f);
		$tim = time()+180;
		$fp = fopen("flod.txt", "w");
		fwrite($fp, $tim);
		fclose($fp);
		$klaida ="S&#279;kmingai u&#382;registravote subdomena!<br/> J&#363;s&#371; subdomenas: $sub.kaltaz.net , slapta&#382;odis: $p .";
	}
	if($klaida != ""){
	 echo"<p align='center'><small>
	 $klaida<br/>
	 - - - - - -<br/>
	 <a href='index.php?'>&#302; prad&#382;i&#261;</a><br/></small></p>";}}
	 
	 ?>
</card></wml>