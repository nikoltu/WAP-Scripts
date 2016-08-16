<?

$war=mysql_fetch_array(mysql_query("SELECT hp FROM war where user='$user[username]' and machine='catapulta'"));

echo"<small>Katapultos kaina 15000aukso ir 5med&#382;iai.</small><br/><small>Gyvybi&#371;:1000.</small><br/>$line<br/>";
if($war[hp]){
echo"<small>Jus jau turite katapulta</small><br/>";}
else {
echo"<small><a href=\"index.php?id=$id&amp;action=catapulta\">Pirkti</a></small><br/>";}
?>