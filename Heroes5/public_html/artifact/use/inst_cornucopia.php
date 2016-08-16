<?

$atype="ins";
$ineed="everflowing_crystal_cloak-ring_of_infinite_gems-eversmoking_ring_of_sulfur-everpouring_vidal_of_mercury";
$what="cornucopia";
$what2="inst_cornucopia";
if($_POST['gam']=="taip"){

$inst=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$what2'"));
if(!$inst[name]){
echo"<small>Taip negalima</small></p></card></wml>";exit;}

$nart=explode("-",$ineed);
include_once("names/artifacts.php");
$g=0;
for($i=0; $i<count($nart); $i++){
$reikart=$nart[$i];
$ari[$i]=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$reikart'"));
if(!$ari[$i][name]){
$nam=$artifact_name[$reikart];
echo"<small>Jus neturite $nam</small><br/>";
$g++;}
}
if($g=="0"){
echo"<small>Pagaminta</small>";
if($inst[kiek]-1<1){
mysql_query("delete from artifacts where user='$user[username]' and name='$what2'");}
else {
mysql_query("update artifacts set kiek=kiek-1 where user='$user[username]' and name='$what2'");}
$gmt=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$what'"));
if(!$gmt[name]){
include_once("artifact/use/$what.php");

mysql_query("insert into artifacts (user,name,kiek,type) values ('$user[username]','$what','1','$atype')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+1 where name='$what' and user='$user[username]'");}

for($j=0; $j<count($nart); $j++){
$aria[$j]=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$nart[$j]'"));
$nn=$aria[$j][name];
if($aria[$j][kiek]-1<"1"){
mysql_query("delete from artifacts where user='$user[username]' and name='$nn'");}
else {
mysql_query("update artifacts set kiek=kiek-1 where user='$user[username]' and name='$nn'");}
}


}
}
?>