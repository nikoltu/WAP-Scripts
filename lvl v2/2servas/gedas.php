<?php

// Sukure Mantas S. aka trenktaz
// Http://www.mantas.lt
// mantas@mantas.lt
// ICQ UIN 31072511

// Apskaiciuojam kiek liko laiko iki mano gimdienio

$diena = "02";         // Gimdienio diena
$menuo = "10";        // Gimdienio menuo 
$metai = date("Y");   // Sie metai
$menuo_dabar = date("n"); // Dabartinis menuo
$diena_dabar = date("j"); // Dabartine diena

// Tikrinam ar esamas menuo nedidesnis uz gimdienio

if ($menuo > $menuo_dabar) {
  print '&nbsp;&nbsp;Iki vieneriu metu su jumis liko<br>&nbsp;liko&nbsp;<b>';
  print ((int)((mktime (0,0,0,$menuo,$diena,$metai) - time(void))/86400));
  print '</b>&nbsp;d.';    
} 

// Tikrinam ar sendien ne gimdienis

elseif (($diena == $diena_dabar) && ($menuo == $menuo_dabar)) {
  print 'Vieneri metai su jumis siandien !!!!';
}

// Jei sendien ne mano gimdienis ir menuo didesnis uz gimdieni -> skaiciuojam sekancius metus

else {
$metai = $metai + 1;
  print '&nbsp;&nbsp;Iki vieneriu metu su jumis liko<br>&nbsp;liko&nbsp;<b>';
  print ((int)((mktime (0,0,0,$menuo,$diena,$metai) - time(void))/86400));
  print '</b>&nbsp;d.';    
}

?>