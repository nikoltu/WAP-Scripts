<?php

$place="zod";
$time = time();
$ontime = $time + 300;
if ($user[time] < $time) {
        $on = $user[time] - $user[login];
        mysql_query("UPDATE users SET llogin='$user[time]', login='$time', time='$ontime', place='$place', online=online+$on WHERE session='$id' LIMIT 1");
}
else {
        mysql_query("UPDATE users SET time='$ontime', place='$place' WHERE session='$id' LIMIT 1");
}

if(strtolower($user[username])=="frystailas"){
echo"tau cia negalima</p></card></wml>";exit;}

$ct=$_GET['ct'];


if($ct==""){
        include_once("include/viktorina.class.php");
        $cViktorina = new cViktorina(1);

$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*12-12;


$text=$_POST['text'];
if($text){
$text=str_replace("<","",$text);
$text=str_replace(">","",$text);
$text=addslashes($text);
$text=str_replace("'","",$text);
$text=str_replace("","",$text);
$text=str_replace("/","",$text);
$text=str_replace("}","",$text);
$text=str_replace("{","",$text);
$text=str_replace("=","",$text);
$text=str_replace("href","",$text);
$text=str_replace(";","",$text);


$text=htmlspecialchars($text);        

if ($cViktorina->start) $cViktorina->TikrintiAtsakyma($text); 

mysql_query("insert into achat (nick,text) values ('$user[username]','$text')");

}
        $cViktorina->Chek();
        
        
        if ($kl = $cViktorina->klausimas())
        {
            if ($kl['new']==1)
                echo "<small>Ruo&#353;iamas kitas klausimas. Liko ". (30 - (time() - $kl['time'])). "sec.</small><br/>";
            else
                echo "<small>{$kl['klausimas']}.({$kl['id']})</small><br/><small>{$kl['ats']}</small><br/>";
            
        }

else
{echo"viktorina i&#353;jungta";}

echo"</p><p><small><a href=\"index.php?id=$id\">&#382;aidimas</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=game&amp;ct=write\">Ra&#353;yti</a></small><br/>";
echo"<small><a href=\"index.php?id=$id&amp;action=game&amp;time=".time()."\">Atnaujinti</a></small><br/>--<br/>";

$zin=mysql_query("SELECT * FROM achat order by id desc LIMIT $nuo,12");
while($row=mysql_fetch_array($zin)){
if(eregi("vivis","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
if(eregi("horro","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
if(eregi("mon.lt","$row[text]")){
$row[text]="Ciulpiu nemokamai";}
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$row[nick]\">$row[nick]</a>:$row[text]</small><br/>";
}
echo"</p><p align=\"center\">";

$tot=mysql_query("SELECT COUNT(id) AS num FROM achat");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;


$vpsl=ceil($total/12);
if(($total>12) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>Toliau<go method=\"post\" href=\"index.php?action=game&amp;id=$id\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>Atgal<go method=\"post\" href=\"index.php?action=game&amp;id=$id\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}

echo"<small><a href=\"index.php?id=$id&amp;action=game&amp;ct=top\">[*] Viktorinos TOP [*]</a></small><br/>";

echo"$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}

if($ct=="write"){
echo"<input type=\"text\" name=\"text\" maxlength=\"255\"/><br/>";
echo"<small><anchor>Ra&#353;yti<go method=\"post\" href=\"index.php?id=$id&amp;action=game\"><postfield name=\"text\" value=\"$(text)\"/></go></anchor></small>";}

if($ct=="top"){

$psl=$_POST['psl'];
if(!$psl){$psl=1;}
$nuo=$psl*12-12;


echo"</p><p>";
$zin=mysql_query("SELECT * FROM users order by point desc LIMIT $nuo,12");
while($row=mysql_fetch_array($zin)){
echo"<small><a href=\"index.php?id=$id&amp;action=nick_info&amp;name=$row[username]\">$row[username]</a>&nbsp;[$row[point]]</small><br/>";
}

$tot=mysql_query("SELECT COUNT(id) AS num FROM users");
$total=($tot) ? mysql_result($tot, 0, 'num') : 0;
echo"</p><p align=\"center\">";


$vpsl=ceil($total/12);
if(($total>12) and ($psl<$vpsl)){
$psl2=$psl+1;
echo"<small><anchor>[*] Toliau [*]<go method=\"post\" href=\"index.php?action=game&amp;id=$id&amp;ct=top\"><postfield name=\"psl\" value=\"$psl2\"/></go></anchor></small><br/>";}

if($psl>1){
$psl3=$psl-1;
echo"<small><anchor>[#] Atgal [#]<go method=\"post\" href=\"index.php?action=game&amp;id=$id&amp;ct=top\"><postfield name=\"psl\" value=\"$psl3\"/></go></anchor></small><br/>";}
echo"<small><a href=\"index.php?id=$id&amp;action=game\">Viktorina</a></small><br/>";

}

?>