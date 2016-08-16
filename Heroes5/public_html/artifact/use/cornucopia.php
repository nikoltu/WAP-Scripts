<?

$atype="pir-pir-shou-misc";
$z=$_POST['ak1'];
if(($z!=="1") and ($z!=="2") and ($z!=="3") and ($z!=="4")){
$z=1;}

$ttype="pir1-pir2-shou1-misc$z";
if($tju[det]=="1"){
mysql_query("UPDATE artifacts SET
det='0' where user='$user[username]' and name='$art'");
echo"<small>Nuimta</small><br/>";}
if($tju[det]=="0"){
$mtype=explode("-",$ttype);
for($gg=0; $gg<count($mtype); $gg++){
$uart=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and type LIKE '$mtype[$gg]'"));
if($uart[name]){
include_once("artifact/nouse/$uart[name].php");mysql_query("UPDATE artifacts SET det='0',type='$btype',ant='' where user='$user[username]' and name='$uart[name]'");
}}
mysql_query("UPDATE artifacts SET det='1',type='$ttype' where name='$art' and user='$user[username]'");
echo"<small>U&#382;d&#279;ta</small><br/>";}

?>