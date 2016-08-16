<?

$atype="shou";
$ttype="shou1";
if($tju[det]=="1"){
mysql_query("UPDATE artifacts SET
det='0' where user='$user[username]' and name='$art'");
echo"<small>Nuimta</small><br/>";}
if($tju[det]=="0"){
$uart=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and det='1' and type LIKE '%$ttype%'"));
if($uart[name]){
include_once("artifact/nouse/$uart[name].php");mysql_query("UPDATE artifacts SET det='0',type='$btype' where user='$user[username]' and name='$uart[name]'");
}
mysql_query("UPDATE artifacts SET det='1',type='$ttype' where name='$art' and user='$user[username]'");
echo"<small>U&#382;d&#279;ta</small><br/>";}

?>