<?
if($action=="barak"){
echo"<small>Cia jus galite palikti savo armija kuri nedalivaus kovose ir negaus jose gaunamos patirtis<br/>$line<br/><a href=\"index.php?action=barak2&amp;id=$id\">[-]Palikti[-]</a><br/><a href=\"index.php?action=barak3&amp;id=$id\">[+]Pasiimti[+]</a><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="barak2"){
$usr=strtolower($user[username]);
$dele=mysql_query("SELECT unit,quantity FROM army where username='$usr'");
while($dele2=mysql_fetch_array($dele)){
$ag=$dele2['quantity'];
$agd=$dele2['unit'];
if($ag=="0"){
mysql_query("DELETE FROM army where unit='$agd' and quantity='$ag'");}}
echo"<select name=\"units\">";
$det=mysql_query("SELECT unit,quantity FROM army where username='$usr'");
while($row=mysql_fetch_array($det)){
$kie=$row['quantity'];
$uni=$row['unit'];
$uni2=$uni;
include("names/units.php");
if (((substr($kie, strlen($kie) - 2, 2) >= 10) and (substr($kie, strlen($kie) - 2, 2) <= 20)) or ((substr($kie, strlen($kie) - 1, 1) == "0"))) {
$uni = $unit_name_p3[$uni];
}
elseif (substr($kie, strlen($kie) - 1, 1) == "1") {
$uni = $unit_name_s1[$uni];
}
else {
$uni = $unit_name_p1[$uni];
}
echo"<option value=\"$uni2\"> $kie $uni</option>";}
echo"</select><br/><small><b>Kiek:</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><anchor>Siusti i barakus<go method=\"post\" href=\"index.php?action=barak4&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"quan\" value=\"$(quan)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="barak4"){
$units=$_POST['units'];
$quan=skaicius($_POST['quan']);
$usr=strtolower($user[username]);
if((empty($units)) or (empty($quan))){
echo"<small>Palikai tu&#353;cia laukeli</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$units'"));
if(!$unitas[unit]){
echo"<small>Tokios kariu ru&#353;ies neturite</small>";}
elseif($quan>$unitas[quantity]){
echo"<small>Neturite tiek kariu</small>";}
elseif($unitas[magic]=="hipnoze"){
echo"<small>Negalima palikti uzhipnotizuot&#371; kari&#371;</small>";}
elseif($unitas[magic]=="reanim"){
echo"<small>Negalima palikti reanimuot&#371; kari&#371;</small>";}
else {
$ex=($unitas[expierence]/$unitas[quantity])*$quan;
mysql_query("UPDATE army SET quantity=quantity-$quan,expierence=expierence-$ex where unit='$units' and username='$usr'");
$unitas3=mysql_fetch_array(mysql_query("SELECT * FROM barak where unit='$units' and user='$usr'"));
if(!$unitas3[unit]){
mysql_query("insert into barak (user,kiek,unit,atk,def,mindmg,maxdmg,healt,hp,exp) values ('$usr','$quan','$units','$unitas[attack]','$unitas[defense]','$unitas[min_damage]','$unitas[max_damage]','$unitas[health]','$unitas[hp]','$ex')");}
else {
mysql_query("UPDATE barak SET kiek=kiek+$quan,hp=$unitas[hp],exp=exp+$ex where user='$usr' and unit='$units'");
}
include("names/units.php");
if (((substr($quan, strlen($quan) - 2, 2) >= 10) and (substr($quan, strlen($quan) - 2, 2) <= 20)) or ((substr($quan, strlen($quan) - 1, 1) == "0"))) {
$units = $unit_name_p3[$units];
}
elseif (substr($quan, strlen($quan) - 1, 1) == "1") {
$units = $unit_name_s1[$units];
}
else {
$units = $unit_name_p1[$units];
}
echo"<small>Padejote $quan $units</small>";}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="barak3"){
$cod=mt_rand(1555, 666666);
@file_put_contents("counter/barakaps.txt","$cod");
$usr=strtolower($user[username]);
$dele=mysql_query("SELECT unit,kiek FROM barak where user='$usrp'");
while($dele2=mysql_fetch_array($dele)){
$ag=$dele2['kiek'];
$agd=$dele2['unit'];
if($ag=="0"){
mysql_query("DELETE FROM barak where unit='$agd' and kiek='$ag'");}}
echo"<select name=\"units\">";
$det=mysql_query("SELECT unit,kiek FROM barak where user='$usr'");
while($row=mysql_fetch_array($det)){
$kie=$row['kiek'];
$uni=$row['unit'];
$uni2=$uni;
include("names/units.php");
if (((substr($kie, strlen($kie) - 2, 2) >= 10) and (substr($kie, strlen($kie) - 2, 2) <= 20)) or ((substr($kie, strlen($kie) - 1, 1) == "0"))) {
$uni = $unit_name_p3[$uni];
}
elseif (substr($kie, strlen($kie) - 1, 1) == "1") {
$uni = $unit_name_s1[$uni];
}
else {
$uni = $unit_name_p1[$uni];
}
echo"<option value=\"$uni2\"> $kie $uni</option>";}
echo"</select><br/><small><b>Kiek:</b></small><br/><input type=\"text\" name=\"quan\" format=\"*N\"/><br/><small><anchor>Pasiimti i&#353; baraku<go method=\"post\" href=\"index.php?action=barak5&amp;id=$id\"><postfield name=\"units\" value=\"$(units)\"/>
<postfield name=\"codas\" value=\"$cod\"/>
<postfield name=\"quan\" value=\"$(quan)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($action=="barak5"){
$cod=@file_get_contents("counter/barakaps.txt");
if($_POST['codas']!=="$cod"){
echo"<small>Taip negalima.Turite eiti atgal ir v&#279;l imti</small></p></card></wml>";exit;}
$cod=mt_rand(1555, 666666);
@file_put_contents("counter/barakaps.txt","$cod");
$units=$_POST['units'];
$quan=skaicius($_POST['quan']);
$usr=strtolower($user[username]);
if((empty($units)) or (empty($quan))){
echo"<small>Palikai tu&#353;cia laukeli</small>";}
else {
$unitas=mysql_fetch_array(mysql_query("SELECT * FROM barak where user='$usr' and unit='$units'"));
if(!$unitas[unit]){
echo"<small>Tokios kariu ru&#353;ies neturite</small>";}
elseif($quan>$unitas[kiek]){
echo"<small>Neturite tiek kariu</small>";}
else {
$unia=mysql_query("SELECT COUNT(unit) AS num FROM army where username='$usr'");
$numu=($unia) ? mysql_result($unia, 0, 'num') : 0;
$unija=mysql_fetch_array(mysql_query("SELECT * FROM army where username='$usr' and unit='$units' and magic='hipnoze'"));
if($unija[unit]){
echo"<small>Negalite atsiimti nes turite tokios ru&#353;ies uzhipnotizuotu kari&#371;</small>";}
elseif($numu>="$toar"){
echo"I mu&#353;i galite pasiimti tik $toar ru&#353;iu karius";}
else {
$ex=($unitas[exp]/$unitas[kiek])*$quan;
mysql_query("UPDATE barak SET kiek=kiek-$quan,exp=exp-$ex where unit='$units' and user='$usr'");
$unitas3=mysql_fetch_array(mysql_query("SELECT * FROM army where unit='$units' and username='$usr'"));
if(!$unitas3[unit]){
mysql_query("insert into army (username,quantity,unit,attack,defense,min_damage,max_damage,health,hp,expierence) values ('$usr','$quan','$units','$unitas[atk]','$unitas[def]','$unitas[mindmg]','$unitas[maxdmg]','$unitas[healt]','$unitas[hp]','$ex')");}
else {
mysql_query("UPDATE army SET quantity=quantity+$quan,hp=$unitas[hp],expierence=expierence+$ex where username='$usr' and unit='$units'");
}
include("names/units.php");
if (((substr($quan, strlen($quan) - 2, 2) >= 10) and (substr($quan, strlen($quan) - 2, 2) <= 20)) or ((substr($quan, strlen($quan) - 1, 1) == "0"))) {
$units = $unit_name_p3[$units];
}
elseif (substr($quan, strlen($quan) - 1, 1) == "1") {
$units = $unit_name_s1[$units];
}
else {
$units = $unit_name_p1[$units];
}
echo"<small>Pasi&#279;m&#279;te $quan $units i&#353; baraku</small>";}}}
echo"<small><br/>$line<br/><a href=\"index.php?id=$id\">$home</a></small>";}
?>