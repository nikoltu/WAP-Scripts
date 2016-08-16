<?
$buy=$_GET['buy'];
if(!$buy){
echo"<small><b>Turite kreditu:$user[kred]</b></small><br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=kred\">Kaip gauti kredit&#371; ?</a></small><br/>$line<br/></p><p><small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=gold1&amp;w=1\">5000 aukso(1kreditas)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=gold2&amp;w=2\">12000 aukso(2kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=gold3&amp;w=3\">20000 aukso(3kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=gold4&amp;w=4\">35000 aukso(5kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=gold5&amp;w=5\">50000 aukso(7kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=frenzy1&amp;w=1\">4 valandos frenzy(1kreditas)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=frenzy&amp;w=1\">[?]</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=frenzy2&amp;w=2\">9 valandos frenzy(2kreditai)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=frenzy&amp;w=1\">[?]</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=frenzy3&amp;w=3\">15 valand&#371; frenzy(3kreditas)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=frenzy&amp;w=1\">[?]</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=frenzy4&amp;w=4\">26 valandos frenzy(5kreditai)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=frenzy&amp;w=1\">[?]</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=frenzy5&amp;w=5\">40 valand&#371; frenzy(7kreditai)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=frenzy&amp;w=1\">[?]</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=exp1&amp;w=1\">2000 patirties (1kreditas)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=exp2&amp;w=2\">5000 patirties (2kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=exp3&amp;w=3\">8500 patirties (3kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=exp4&amp;w=4\">15000 patirties (5kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=exp5&amp;w=5\">22000 patirties (7kreditai)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=atk&amp;w=1\">+1 Atakos(1kreditas)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=def&amp;w=1\">+1 Gynybos(1kreditas)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=knw&amp;w=1\">+1 Isminties(1kreditas)</a></small><br/>
<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=pwr&amp;w=1\">+1 Galios(1kreditas)</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=cl&amp;w=1\">Ikurti alijansa(3kreditai)</a></small>
<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=sky1&amp;w=1\">+1 skill pointas(3kreditai)</a></small>
<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=sky2&amp;w=2\">+2 skill pointai(5kreditai)</a></small>
<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=rain&amp;w=2\">Patirties lietus(7kreditai)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=rain&amp;w=1\">[?]</a></small>
<br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=krd&amp;buy=igd&amp;w=2\">+1 vieta igud&#382;iui(20kreditu)</a><a href=\"index.php?id=$id&amp;action=krdinf&amp;buy=igd&amp;w=1\">[?]</a></small>
";
echo"</p><p align=\"center\">";}
else {
$gld=0;
$exp=0;
$at=0;
$df=0;
$pw=0;
$kn=0;
$fren=$user[immortal];
$kr=0;
$ski=0;
$igd2=0;
$rain=$user[rain];

if($buy=="cl"){
$kr=3;}
if($buy=="sky1"){
$kr=3;
$ski=1;}
if($buy=="sky2"){
$kr=5;
$ski=2;}
if($buy=="igd"){
$kr=20;
$igd2=1;}

if($buy=="gold1"){
$gld=5000;
$kr=1;}
if($buy=="gold2"){
$gld=12000;
$kr=2;}
if($buy=="gold3"){
$gld=20000;
$kr=3;}
if($buy=="gold4"){
$gld=35000;
$kr=5;}
if($buy=="gold5"){
$gld=50000;
$kr=7;}
if($buy=="rain"){
$rain2=4;
$kr=7;}
if($buy=="frenzy1"){
$fre=4;
$kr=1;}
if($buy=="frenzy2"){
$fre=9;
$kr=2;}
if($buy=="frenzy3"){
$fre=15;
$kr=3;}
if($buy=="frenzy4"){
$fre=26;
$kr=5;}
if($buy=="frenzy5"){
$fre=40;
$kr=7;}
if($rain2>0){
$rain=time()+3600*$rain2;}
if($fre>0){
$fren=time()+3600*$fre;}
if($buy=="exp1"){
$exp=2000;
$kr=1;}
if($buy=="exp2"){
$exp=5000;
$kr=2;}
if($buy=="exp3"){
$exp=8500;
$kr=3;}
if($buy=="exp4"){
$exp=15000;
$kr=5;}
if($buy=="exp5"){
$exp=22000;
$kr=7;}

if($buy=="atk"){
$at=1;
$kr=1;}
if($buy=="def"){
$df=1;
$kr=1;}
if($buy=="knw"){
$kn=1;
$kr=1;}
if($buy=="pwr"){
$pw=1;
$kr=1;}
$gad=explode("gold",$buy);
if($gad[1]){
$kk=$gld;
$pr="aukso";}
$gad=explode("exp",$buy);
if($gad[1]){
$kk=$exp;
$pr="patirties";}
$gad=explode("rain",$buy);
if(eregi("rain","$buy")){
$kk="4 h.";
$pr="Patirties lietaus";}
$gad=explode("frenzy",$buy);
if($gad[1]){
$kk="$fre h.";
$pr="frenzy";}
$gad=explode("sky",$buy);
if($gad[1]){
$kk="$ski";
$pr="skill point";}

if($buy=="atk"){
$kk=$at;
$pr="Atakos";}
if($buy=="igd"){
$kk=1;
$pr="Vieta igud&#382;iui";}
if($buy=="def"){
$kk=$df;
$pr="Gynybos";}
if($buy=="knw"){
$kk=$kn;
$pr="Isminties";}
if($buy=="pwr"){
$kk=$pw;
$pr="Galios";}
if(($user[kskil]=="12") and ($buy=="igd")){
echo"<small>Daugiau pirkti negalima</small>";}
elseif($user[kred]<$kr){
echo"<small>Nepakanka kredit&#371;</small>";} elseif($buy=="cl"){
if($user[ally]!=="0"){
echo"<small>Jus jau priklausote alijansui!</small>";}
else {
mysql_query("UPDATE users SET kred=kred-$kr where username='$user[username]'");
mysql_query("insert into ally (vadas) values ('$user[username]')");
$alid=mysql_fetch_array(mysql_query("SELECT id FROM ally where vadas='$user[username]'"));
mysql_query("UPDATE users SET ally='$alid[id]' where username='$user[username]'");
$dti=date("Y-m-d H:i:s");
mysql_query("insert into anews (id,data,text) values ('$alid[id]','$dti','Buvo ikurtas alijansas')");
echo"<small>Alijansas ikurtas</small>";}}
else {
mysql_query("UPDATE users SET gold=gold+$gld,expierence=expierence+$exp,immortal='$fren',attack=attack+$at,defense=defense+$df,power=power+$pw,knowledge=knowledge+$kn,kred=kred-$kr,skill_points=skill_points+$ski,kskil=kskil+$igd2,rain='$rain' where username='$user[username]'");
echo"<small>S&#279;kmingai nupirkta $kk $pr</small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";
?>