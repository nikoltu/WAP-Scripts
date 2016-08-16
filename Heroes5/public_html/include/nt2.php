<?
   $dmg = mt_rand($uunit_min * $battle[q_unit], $uunit_max *  $battle[q_unit]);
if (($uunit_special == "reduce_defense_40") or ($uunit_special2 == "reduce_defense_40") or ($uunit_special3 == "reduce_defense_40") or ($uunit_special4 == "reduce_defense_40") or ($uunit_special5 == "reduce_defense_40")) {
    $army_defense[$who]=$army_defense[$who]*0.6;  
   }
if (($uunit_special == "reduce_defense_80") or ($uunit_special2 == "reduce_defense_80") or ($uunit_special3 == "reduce_defense_80") or ($uunit_special4 == "reduce_defense_80") or ($uunit_special5 == "reduce_defense_80")) {
    $army_defense[$who]=$army_defense[$who]*0.2;  
   }
if (($uunit_special == "reduce_defense_100") or ($uunit_special2 == "reduce_defense_100") or ($uunit_special3 == "reduce_defense_100") or ($uunit_special4 == "reduce_defense_100") or ($uunit_special5 == "reduce_defense_100")) {
    $army_defense[$who]=0;
   }
include_once("magic2/stone_oda.php");

   if ($uunit_attack >= $army_defense[$who]) {
      $dmg = floor($dmg + $dmg * (($uunit_attack - $army_defense[$who]) * 2 / 100) + 1);
   }
   else {
      $dmg = floor($dmg - $dmg * (($army_defense[$who] - $uunit_attack) * 1.5 / 100) + 1);
   }

   /// SPECIALITIES

   if (($uunit_special == "attack_twice") or ($uunit_special2 == "attack_twice") or ($uunit_special3 == "attack_twice") or ($uunit_special4 == "attack_twice") or ($uunit_special5 == "attack_twice")) {
      $dmg = $dmg * 2;
   }
   if (($uunit_special == "hate_efreet") and (($army_unit[$who] == "efreet") or ($army_unit[$who] == "efreet_sultan"))) {
      $dmg = $dmg * 1.5;
   }
if (($uunit_special == "do_150_against_angels") and (($army_unit[$who] == "angel") or ($army_unit[$who] == "archangel"))) {
      $dmg = $dmg * 1.5;
   }
   if (($uunit_special == "do_150_against_dragons") and (($army_unit[$who] == "bone_dragon") or ($army_unit[$who]=="ghost_dragon"))) {
      $dmg = $dmg * 1.5;
   }
if(($uunit_special=="death_stare") or ($uunit_special2=="death_stare") or ($uunit_special3=="death_stare") or ($uunit_special4=="death_stare") or ($uunit_special5=="death_stare")){
$dmg2=mt_rand(1, 20);
$dmg2=$dmg2/10;
$dmg2=$dmg*$dmg2;
include_once("skils/resistance.php");
if($user[identify]=="thorgrim"){
$dmg2=$dmg2*0.95;}
$dmg=$dmg+$dmg2;}
if(($uunit_special=="lightning") or ($uunit_special2=="lightning") or ($uunit_special3=="lightning") or ($uunit_special4=="lightning") or ($uunit_special5=="lightning")){
$dmg2=$battle[q_unit]*10;
include_once("skils/resistance.php");if($user[identify]=="thorgrim"){
$dmg2=$dmg2*0.95;}
$dmg=$dmg+$dmg2;}
$cur=@file_get_contents("spec/curse/$battle[heroe].tx");
if(($uunit_special=="curse") or ($uunit_special2=="curse") or ($uunit_special3=="curse") or ($uunit_special4=="curse") or ($uunit_special5=="curse")){
if($cur!=="$army_unit[$who]"){
$sans=rand("1","2");
if($sans=="2"){
@file_put_contents("spec/curse/$battle[heroe].tx","$army_unit[$who]");}}}
if(($uunit_special=="age") or ($uunit_special2=="age") or ($uunit_special3=="age") or ($uunit_special4=="age") or ($uunit_special5=="age")){
$army_health[$who]=$army_health[$who]/2;}
$nuod=@file_get_contents("spec/poison/$battle[heroe].tx");if(($uunit_special=="poisons") or ($uunit_special2=="poisons") or ($uunit_special3=="poisons") or ($uunit_special4=="poisons") or ($uunit_special5=="poisons")){
if($nuod!=="$army_unit[$who]"){
@file_put_contents("spec/poison/$battle[heroe].tx","$army_unit[$who]");}}
if($user[identify]=="tazar"){
$dmg=$dmg*0.95;}
if($user[identify]=="neela"){
$dmg=$dmg*0.95;}
if($user[identify]=="mephala"){
$dmg=$dmg*0.95;}
include_once("skils/armorer.php");





   if ($dmg > 4 * $uunit_max *  $battle[q_unit]) {
      $dmg = 4 * $uunit_max *  $battle[q_unit];
   }
   if ($dmg < floor(0.3 * $uunit_min *  $battle[q_unit])) {
      $dmg = floor(0.3 * $uunit_min *  $battle[q_unit]);
   }
if($nuod=="$army_unit[$who]"){
if($battle[round]>9){
$raunds=9;}
else {
$raunds=$battle[round];}
$nuihp=1-(0.1*$raunds);
$army_health[$who]=$army_health[$who]*$nuihp;
}
   if ($dmg >= $army_hp[$who]) {
      $kill = 1;
      if ($dmg - $army_hp[$who] >= $army_health[$who]) {
         $army_hp[$who] = $army_health[$who] - ($dmg - (floor($dmg/$army_health[$who]) * $army_health[$who]));
         if ($army_unit[$who] == "wight") {
            $army_hp[$who] = $army_health[$who];
         }
include_once("skils/healing.php");
         $kill = $kill + floor($dmg/$army_health[$who]) - 1;
      }   
      else {
         $army_hp[$who] = $army_health[$who] - $dmg;
      }
      $queries++;
      mysql_query("UPDATE army SET hp=$army_hp[$who], quantity=quantity-$kill WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }
   else {
      $army_hp[$who] = $army_health[$who] - $dmg;
      $queries++;
      mysql_query("UPDATE army SET hp=$army_hp[$who] WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }

   if ($kill >= $army_quantity[$who]) {
      $kill = $army_quantity[$who];
      $queries++;
      mysql_query("DELETE FROM army WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
   }

   if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
      $unit_name = $unit_name_p3[$battle[unit]];
   }
   elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
      $unit_name = $unit_name_s1[$battle[unit]];
   }
   else {
      $unit_name = $unit_name_p1[$battle[unit]];
   }
   if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
      $uunit_name = $unit_name_p3[$army_unit[$who]];
   }
   elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
      $uunit_name = $unit_name_s2[$army_unit[$who]];
   }
   else {
      $uunit_name = $unit_name_p2[$army_unit[$who]];
   }
   $uu = $unit_name_s1[$battle[unit]];
   if ($user[pics] > 0) echo"<img src=\"img/units/$battle[unit].gif\" alt=\"$uu\"/><br/>";
   echo"<small><u>$battle[q_unit] $unit_name atakavo $army_quantity[$who] $uunit_name.</u></small><br/>";
   if ($kill > 0) {
      if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$who]];
      }
      elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
         $unit_name = $unit_name_s2[$army_unit[$who]];
      }
      else {
         $unit_name = $unit_name_p2[$army_unit[$who]];
      }
   }
if(($uunit_special=="death_stare") or ($uunit_special2=="death_stare") or ($uunit_special3=="death_stare") or ($uunit_special4=="death_stare") or ($uunit_special5=="death_stare")){
echo"<small>Panaudojo Mirties &#382;vilksnis</small><br/>";}
if(($uunit_special=="lightning") or ($uunit_special2=="lightning") or ($uunit_special3=="lightning") or ($uunit_special4=="lightning") or ($uunit_special5=="lightning")){
echo"<small>Nutrenk&#279; &#382;aibu</small><br/>";}
if(($uunit_special=="poisons") or ($uunit_special2=="poisons") or ($uunit_special3=="poisons") or ($uunit_special4=="poisons") or ($uunit_special5=="poisons")){
if($nuod!=="$army_unit[$who]"){
echo"<small>U&#382;nuodijo</small><br/>";}}
if(($uunit_special=="curse") or ($uunit_special2=="curse") or ($uunit_special3=="curse") or ($uunit_special4=="curse") or ($uunit_special5=="curse")){
if(($cur!=="$army_unit[$who]") and ($sans=="2")){
echo"<small>Prakeik&#279;</small><br/>";}}
echo"<small>Padar&#279; $dmg &#382;alos.</small><br/>";
include_once("special/cause_fear.php");

$para2=@file_get_contents("spec/paralyze/$battle[heroe].tx");
if(($uunit_special=="paralyze") or ($uunit_special2=="paralyze") or ($uunit_special3=="paralyze") or ($uunit_special4=="paralyze") or ($uunit_special5=="paralyze")){
if($para2!=="$army_unit[$who]"){
@file_put_contents("spec/paralyze/$battle[heroe].tx","$army_unit[$who]");
echo"<small>Suparali&#382;iavo.</small><br/>";}}
$blind2=@file_get_contents("spec/blind/$battle[heroe].tx");
if(($uunit_special=="blinding") or ($uunit_special2=="blinding") or ($uunit_special3=="blinding") or ($uunit_special4=="blinding") or ($uunit_special5=="blinding")){
if(($unit_info[spec]=="blind_immunity") or ($unit_info[spec2]=="blind_immunity") or ($unit_info[spec3]=="blind_immunity") or ($unit_info[spec4]=="blind_immunity") or ($unit_info[spec5]=="blind_immunity")){
echo"<small>Apakinti nepavyko</small><br/>";}
elseif($blind2!=="$army_unit[$who]"){
@file_put_contents("spec/blind/$battle[heroe].tx","$army_unit[$who]");
echo"<small>Apakino</small><br/>";}} if($blind2=="$army_unit[$who]"){
@unlink("spec/blind/$battle[heroe].tx");}
$sto2=@file_get_contents("spec/stoning/$battle[heroe].tx");
if(($uunit_special=="stoning") or ($uunit_special2=="stoning") or ($uunit_special3=="stoning") or ($uunit_special4=="stoning") or ($uunit_special5=="stoning")){
if($sto2!=="$army_unit[$who]"){
@file_put_contents("spec/stoning/$battle[heroe].tx","$army_unit[$who]");
echo"<small>Pavert&#279; akmenimi</small><br/>";}} if($sto2=="$army_unit[$who]"){
@unlink("spec/stoning/$battle[heroe].tx");}
   if ($kill > 0) {
      echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
   }
   echo"<br/>";
include_once("special/souls.php");
include_once("special/ressurecting.php");

if(file_exists("spec/$battle[heroe].txt")){
include_once("magic2/fw1.php");}
   $army_quantity[$who] = $army_quantity[$who] - $kill;
$sto7=@file_get_contents("spec/stoning/$battle[heroe].tx");
$blind7=@file_get_contents("spec/blind/$battle[heroe].tx");
include_once("artifact/act/crimson_shield_of_retribution.php");

   if (($army_quantity[$who] > 0) and ($uunit_shoot == "0") and ($uunit_special !== "no_retaliaton") and ($uunit_special2 !== "no_retaliaton") and ($uunit_special3 !== "no_retaliaton") and ($uunit_special4 !== "no_retaliaton") and ($uunit_special5 !== "no_retaliaton") and ($sto7!=="$army_unit[$who]") and ($blind7!=="$army_unit[$who]") or ($csor[name])) {
$cur11=@file_get_contents("spec/curse/$battle[heroe].tx");
if($cur11=="$army_unit[$who]"){
$army_max[$who]=$army_min[$who];}
include_once("magic2/luck.php");
include_once("magic2/bless.php");
include_once("magic2/malda.php");
      $dmg = mt_rand($army_min[$who] * $army_quantity[$who], $army_max[$who] *  $army_quantity[$who]);
include_once("skils/tactik.php");

if (($unit_info[spec] == "reduce_defense_40") or ($unit_info[spec2] == "reduce_defense_40") or ($unit_info[spec3] == "reduce_defense_40") or ($unit_info[spec4] == "reduce_defense_40") or ($unit_info[spec5] == "reduce_defense_40")) {
    $uunit_defense=$uunit_defense*0.6;  
   }
if (($unit_info[spec] == "reduce_defense_80") or ($unit_info[spec2] == "reduce_defense_80") or ($unit_info[spec3] == "reduce_defense_80") or ($unit_info[spec4] == "reduce_defense_80") or ($unit_info[spec5] == "reduce_defense_80")) {
    $uunit_defense=$uunit_defense*0.2;  
   }
if (($unit_info[spec] == "reduce_defense_100") or ($unit_info[spec2] == "reduce_defense_100") or ($unit_info[spec3] == "reduce_defense_100") or ($unit_info[spec4] == "reduce_defense_100") or ($unit_info[spec5] == "reduce_defense_100")) {
    $uunit_defense=0;  
   }
include_once("magic2/bloodlust.php");
include_once("magic2/dspy.php");
      if ($army_attack[$who] >= $uunit_defense) {
         $dmg = floor($dmg + $dmg * (($army_attack[$who] - $uunit_defense) * 2 / 100) + 1);
      }
      else {
         $dmg = floor($dmg - $dmg * (($uunit_defense - $army_attack[$who]) * 1.5 / 100) + 1);
      }
      include("units/$army_unit[$who].php");
$shot2=$unit_info[shoot];

      /// SPECIALITIES

      if (($unit_info[spec] == "attack_twice") or ($unit_info[spec2] == "attack_twice") or ($unit_info[spec3] == "attack_twice") or ($unit_info[spec4] == "attack_twice") or ($unit_info[spec5] == "attack_twice")) {
         $dmg = $dmg * 2;
      }
      if (($unit_info[spec] == "hate_efreet") and (($battle[unit] == "efreet") or ($battle[unit]  == "efreet_sultan"))) {
         $dmg = $dmg * 1.5;
      }
if (($unit_info[spec] == "do_150_against_angels") and (($battle[unit] == "angel") or ($battle[unit] == "archangel"))) {
      $dmg = $dmg * 1.5;
   }
      if (($unit_info[spec] == "do_150_against_dragons") and (($battle[unit] == "bone_dragon") or ($battle[unit]=="ghost_dragon"))) {
         $dmg = $dmg * 1.5;
      }
if(($unit_info[spec]=="death_stare") or ($unit_info[spec2]=="death_stare") or ($unit_info[spec3]=="death_stare") or ($unit_info[spec4]=="death_stare") or ($unit_info[spec5]=="death_stare")){
$dmg2=mt_rand(1, 20);
$dmg2=$dmg2/10;
$dmg2=$dmg*$dmg2;
$dmg=$dmg+$dmg2;}
      if (($user[identify] == "valeska") and (($army_unit[$who] == "archer") or ($army_unit[$who] == "marksman"))) {
         $dmg = floor($dmg * 1.15);
      }
if($user[identify]=="crag_hack"){
$dmg=floor($dmg*1.05);}
      if (($user[identify] == "kyrre") and (($army_unit[$who] == "elf") or ($army_unit[$who] == "grand_elf"))) {
         $dmg = floor($dmg * 1.1);
      }
      if (($user[identify] == "wystan") and (($army_unit[$who] == "lizardman") or ($army_unit[$who] == "lizard_warrior"))) {
         $dmg = floor($dmg * 1.15);
      }
      if (($user[identify] == "jabarkas") and (($army_unit[$who] == "orc") or ($army_unit[$who] == "orc_chieftan"))) {
         $dmg = floor($dmg * 1.2);
      }
if(($user[identify]=="orrin") and ($shot2=="1")){
$dmg=floor($dmg*1.05);}
include_once("artifact/act/bow_of_elven_cherrywood.php");
include_once("artifact/act/bowstring_of_the_unicorn_mane.php");
include_once("artifact/act/angel_feather_arrows.php");
if($shot2=="1"){
include_once("magic2/agility.php");}

include_once("skils/offense.php");
include_once("skils/archery.php");





      if ($dmg > 4 * $army_max[$who] *  $army_quantity[$who]) {
         $dmg = 4 * $army_max[$who] *  $army_quantity[$who];
      }
      if ($dmg < floor(0.3 * $army_min[$who] * $army_quantity[$who])) {
         $dmg = floor(0.3 * $army_min[$who] * $army_quantity[$who]);
      }
      $kill = 0;
$nuod2=@file_get_contents("spec/poison/$battle[heroe].txt");
if($nuod2=="$battle[unit]"){
if($battle[round]>9){
$raunds2=9;}
else {
$raunds2=$battle[round];}
$nuihp2=1-(0.1*$raunds2);
$uunit_health=$uunit_health[$who]*$nuihp2;
}
      if ($dmg >= $battle[health]) {
         $kill = 1;
         if ($dmg - $battle[health] >= $uunit_health) {
            $battle[health] = $battle[health] - $dmg;
            while ($battle[health] < 0) $battle[health] += $uunit_health;
            if ($battle[unit] == "wight") {
               $battle[health] = $uunit_health;
            }
            $kill = $kill + floor($dmg/$uunit_health) - 1;
         }
         else {
            $battle[health] = $battle[health] - $dmg;
         }
         $exp = floor((($battle[q_unit]-$kill)/$battle[q_unit]) * $battle[expierence]);
         $queries++;
         mysql_query("UPDATE nbattle SET q_unit=q_unit-$kill, health='$battle[health]', expierence='$exp' WHERE id='$m' LIMIT 1");
      }
      else {
         $battle[health] = $battle[health] - $dmg;
         $queries++;
         mysql_query("UPDATE nbattle SET health='$battle[health]' WHERE id='$m' LIMIT 1");
      }
      if ($kill >= $battle[q_unit]) {
         $kill = $battle[q_unit];
      }
      $battle[q_unit] = $battle[q_unit] - $kill;
      if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$who]];
      }
      elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$who]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$who]];
      }
      $uu = $unit_name_s1[$army_unit[$who]];
      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$who].gif\" alt=\"$uu\"/><br/>";
      echo"<small><u>$army_quantity[$who] $unit_name kontraatakavo.</u></small><br/>";
if(($unit_info[spec]=="death_stare") or ($unit_info[spec2]=="death_stare") or ($unit_info[spec3]=="death_stare") or ($unit_info[spec4]=="death_stare") or ($unit_info[spec5]=="death_stare")){
echo"<small>Panaudojo Mirties &#382;vilksnis</small><br/>";}

      if ($kill > 0) {
         if (((substr($kill, strlen($kill) - 2, 2) >= 10) and (substr($kill, strlen($kill) - 2, 2) <= 20)) or ((substr($kill, strlen($kill) - 1, 1) == "0"))) {
            $unit_name = $unit_name_p3[$battle[unit]];
         }
         elseif (substr($kill, strlen($kill) - 1, 1) == "1") {
            $unit_name = $unit_name_s2[$battle[unit]];
         }
         else {
            $unit_name = $unit_name_p2[$battle[unit]];
         }
      }
      echo"<small>Padar&#279; $dmg &#382;alos.</small>";
      if ($kill > 0) {
         echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
      }
      echo"<br/>";
include_once("special/souls2.php");include_once("special/ressurecting2.php");
   }

?>