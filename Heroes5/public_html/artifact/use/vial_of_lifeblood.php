<?

$atype="misc";
$z=$_GET['z'];
if(($z!=="1") and ($z!=="2") and ($z!=="3") and ($z!=="4")){
$z=1;}
$ttype="misc$z";
if($tju[det]=="1"){
mysql_query("UPDATE artifacts SET
det='0',ant='' where user='$user[username]' and name='$art'");
mysql_query("UPDATE army SET health=health-2 where username='$user[username]'");
echo"<small>Nuimta</small><br/>";}
if($tju[det]=="0"){
$z=$_GET['z'];
$uart=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and type LIKE '%$ttype%'"));
if($uart[name]){
include_once("artifact/nouse/$uart[name].php");mysql_query("UPDATE artifacts SET det='0',type='$btype',ant='' where user='$user[username]' and name='$uart[name]'");
}
mysql_query("UPDATE army SET health=health+2 where username='$user[username]'");
mysql_query("UPDATE artifacts SET det='1',type='$ttype',ant='$z' where name='$art' and user='$user[username]'");
echo"<small>U&#382;d&#279;ta</small><br/>";}

?>