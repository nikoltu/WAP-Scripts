<?php
$skilai = explode("=", $names[skills]);
$total_skillss = 0;
for ($sca = 0; $sca < $names[kskil]; $sca++) {
   if ($skilai[$sca] !== "") {
      $ska = explode("|", $skilai[$sca]);
      $enemy_skill[$sca] = $ska[0];
      $enemy_skill_lvl[$sca] = $ska[1];
      $total_skillss++;
   }
}
?>