<?
$inf=$_GET['inf'];
if($inf==""){
if($user[informacija]=="0"){
mysql_query("UPDATE users SET informacija='1' where username='$user[username]'");}
echo"<small><b><a href=\"index.php?id=$id&amp;action=infor&amp;inf=kaip\">KAIP &#382;AISTI?!</a></b></small><br/>
<small><a href=\"index.php?id=$id&amp;action=infor&amp;inf=tai\">Taisykl&#279;s</a></small><br/>";}
if($inf=="tai"){
echo"<small>&#381;aid&#279;j&#371; taisykl&#279;s bei pareigos.</small><br/></p><p><small><b>[1]</b>.Grieztai draudziama reklamuoti/platinti kitas svetaines/online games.!</small><br/>
<small><b>[2]</b>.Draudziama pardavineti nick/acc</small><br/>
<small><b>[3]</b>.Draudziama pardavineti auksa/artifaktus/karius uz realius pinigus. &#352;is zaidimas skirtas ne tam!</small><br/>
<small><b>[4]</b>.Neizeidineti kitu. Pastebejus toki zaideja tiesiog patileti ir apie ji pranesti administracijai.</small><br/>
<small><b>[5]</b>.Radus bug&#261; nedelsiant prane&#353;ti administratoriui.</small><br/>
<small><b>[6]</b>.Aptikus pa&#382;eid&#279;j&#261; apie j&#303; prane&#353;ti administracijai.</small><br/>
</p><p align=\"center\">
<small>Administratoriaus taisykl&#279;s bei pareigos.</small><br/></p><p><small><b>[1]</b>.Kartkart&#279;mis atnaujinti &#382;aidim&#261;.</small><br/>
<small><b>[2]</b>.Administratorius visada teisus.</small><br/>
<small><b>[3]</b>.Jei vis d&#279;l to administratorius neteisus - &#382;iur&#279;ti administratoriaus taisykli&#371; bei pareig&#371; antr&#261; punkt&#261;.</small><br/>";

echo"</p><p align=\"center\">
$line<br/><small><b>[!]</b>.Uz taisykliu pazeidimus ban ar net istrinimas!</small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
if($inf=="kaip"){
echo"</p><p><small><b>[1]</b>.Siame zaidime pagrindis tikslas yra keltis lygi kovojant ir buti stipriausiu!</small><br/>
<small><b>[2]</b>.Naujokams keltis lygi geriausia kovojant Pavienese salyse - kapitolijus - miesto pozemiai arba naujoku zeme - enroto miskai - zaliasis miskas!</small><br/>
<small><b>[3]</b>.Jus gaunate 500 aukso kas 4valandas uz kuri galite pirkti karius! Aukso taip pat galima gauti vikdant uzduotys pvz. Naujoku zeme - enroto miskai - zaliasis miskas - reindzeris teodoras</small><br/>
<small><b>[4]</b>.Nesijaudinkite jei kovoje zuvo visa jusu armija. Jus po pralaimejimo gausite kariu vel tik negalesite kuri laika kovoti.</small><br/>
<small><b>[5]</b>.Jei jus po pralaimejimo negavote kariu reiskia jog barakuose esanciuose mano pilije yra dar gyvu kariu</small><br/>

</p><p align=\"center\"><small><b>[!].</b>Jei dar kazkas neaisku ar kazko neradote informacijos skyrelije betkada galite paklausi administratoriaus. <a href=\"index.php?id=$id&amp;action=nick_info&amp;name=@Makatas\">@Makatas</a></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}
?>