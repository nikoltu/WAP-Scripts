<?php
$buy=$_GET['buy'];
if($buy=="rain"){
echo"<small>Nusipirke Patirties liet&#371; jus 4 valandas po kovos gausite 2 kartus daugiau patirties.<b>Pastaba</b>:Jei pirksite Patirties liet&#371; pakartotinai dar nepasibaigus laikui, likes laikas dings.</small>";}
if($buy=="frenzy"){
echo"<small>Nusipirke frenzy jus nurodyta kieki valandu po kovos ilsesites 3 kartus trumpiau. Taciau nebutina visa laika kovoti. Jus galesite bet kada sustabdyti frenzy poveiki. Sustabdzius frenzy niekur nedings tad galesite prasitesti veliau.<b>Pastaba</b>:Jei pirksite frenzy pakartotinai dar nepasibaigus laikui, likes laikas dings.</small>";}
if($buy=="igd"){
echo"<small>Zaidime galima tureti 8skirtingus igudzius. Nusipirke si pirkini galesi ture 9igudzius. (MAX 12).</small>";}
echo"<br/>$line<br/><small><a href=\"index.php?id=$id&amp;action=krd\">I Kreditus</a></small><br/><small><a href=\"index.php?id=$id\">$home</a></small>";

?>