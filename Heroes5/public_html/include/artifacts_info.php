<?php
$art=addslashes(htmlspecialchars($_GET['art']));
$tr=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$art'"));
if($tr[kiek]=="0"){
mysql_query("DELETE FROM artifacts where kiek='0' and user='$user[username]'");}
if(!$tr[name]){
echo"<small>&#353;io artifakto neturite</small>";}
else {
$name2=$artifact_name[$art];
$apr2=$apr[$art];
echo"<img src=\"img/artifact/$art.gif\" alt=\"$name2\"/><br/>";
echo"<small><b>$tr[kiek] $name2</b></small><br/>$line<br/><small>$apr2</small><br/>$line<br/>";
if(eregi("potion","$tr[type]")){
$ga="Gerti";}
if(eregi("ins","$tr[type]")){
$ga="Gaminti";}
if(eregi("-","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="Naudoti";}}
elseif(eregi("left_hand","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="Imti i kaire ranka";}}
elseif(eregi("shou","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="Apsisiausti";}}
elseif(eregi("right_hand","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="Imti i de&#353;ine ranka";}}
elseif(eregi("torso","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="Apsirengti";}}
elseif(eregi("boots","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiauti";}
else {
$ga="Apsiauti";}}
elseif(eregi("neck","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="U&#382;sid&#279;ti ant kaklo";}}
elseif(eregi("head","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}
else {
$ga="U&#382;sid&#279;ti ant galvos";}}
elseif(eregi("pir","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}}
if(eregi("misc","$tr[type]")){
if($tr[det]=="1"){
$ga="Nusiimti";}}
if((!eregi("pir","$tr[type]")) and (!eregi("misc","$tr[type]")) or (eregi("-","$tr[type]"))){
if((eregi("-","$tr[type]")) and (substr_count("$tr[type]","pir")<2)){
echo"<small>Pasirinkite kurioje rankoje naudosite(1-2)</small><input type=\"text\" name=\"pr\" size=\"1\"/><br/>";}
if((eregi("-","$tr[type]")) and ($tr[det]!=="1")){
$kra=substr_count("$tr[type]","misc");
if($kra>0){
echo"<small>Pasirinkite kurioje aksesuaru vietoje naudosite artifakt&#261;(1-4)</small><input type=\"text\" name=\"ak1\" size=\"1\"/><br/>";}
if($kra>1){
echo"<small>Kadangi artifaktui reikia keli&#371; aksesuar&#371; viet&#371; pasirinkite dar(1-4)</small><input type=\"text\" name=\"ak2\" size=\"1\"/><br/>";}
if($kra>2){
echo"<small>Kadangi artifaktui reikia keli&#371; aksesuar&#371; viet&#371; pasirinkite dar(1-4)</small><input type=\"text\" name=\"ak3\" size=\"1\"/><br/>";}
if($kra>3){
echo"<small>Kadangi artifaktui reikia keli&#371; aksesuar&#371; viet&#371; pasirinkite dar(1-4)</small><input type=\"text\" name=\"ak4\" size=\"1\"/><br/>";}
}
echo"<br/><small><anchor>$ga<go method=\"post\" href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]\"><postfield name=\"gam\" value=\"taip\"/><postfield name=\"ak1\" value=\"$(ak1)\"/><postfield name=\"ak2\" value=\"$(ak2)\"/><postfield name=\"ak3\" value=\"$(ak3)\"/><postfield name=\"pr\" value=\"$(pr)\"/><postfield name=\"ak4\" value=\"$(ak4)\"/></go></anchor></small>";}
elseif(eregi("pir","$tr[type]")){
if($tr[det]=="1"){
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=1\">Nusiimti</a></small>";}
if($tr[det]=="0"){
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=1\">U&#382;sid&#279;ti ant kair&#279;s rankos</a></small>";
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=2\">U&#382;sid&#279;ti ant de&#353;in&#279;s rankos</a></small>";}}
elseif(eregi("misc","$tr[type]")){


if($tr[det]=="1"){
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=1\">Nusiimti</a></small>";}
if($tr[det]=="0"){
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=1\">Naudoti pirmoje vietoje</a></small>";

echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=2\">Naudoti antroje vietoje</a></small>";
echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=3\">Naudoti trecioje vietoje</a></small>";

echo"<br/><small><a href=\"index.php?action=useart&amp;id=$id&amp;art=$tr[name]&amp;z=4\">Naudoti ketvirtoje vietoje</a></small>";}}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";}


?>