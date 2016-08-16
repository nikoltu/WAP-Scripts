<?php
$skills = explode("=", $user[skills]);
$total_skills = 0;
for ($sc = 0; $sc < $user[kskil]; $sc++) {
   if ($skills[$sc] !== "") {
      $sk = explode("|", $skills[$sc]);
      $user_skill[$sc] = $sk[0];
      $user_skill_lvl[$sc] = $sk[1];
      $total_skills++;
   }
}
?>