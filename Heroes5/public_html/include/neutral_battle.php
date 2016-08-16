<?
mysql_query("delete from artifacts where kiek<1");
mysql_query("delete from barak where kiek<1");
mysql_query("delete from army where quantity<1");

include_once("core/my_skills.php");
if ($user[battle] > time()) {
   $s = $user[battle] - $time;
   echo"<small><b>J&#363;s&#371; herojus yra pavarg&#281;s.</b></small><br/><small>Gal&#279;site kovoti po: <b>$s</b> sek.</small><br/>$line</p><p align=\"left\">";
if($j){
   include_once("names/lands.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $land = $land_name[$i];
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}
$m = addslashes(htmlspecialchars($_POST['event'])); if (!$m) { $m = ""; }
$queries++;
$battle = mysql_fetch_array(mysql_query("SELECT * FROM nbattle WHERE id='$m' LIMIT 1"));
if ($battle[active] == "1") {
   $queries++;
   $event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
if(($event[location]=="vartai") or ($event[location]=="castle") or ($event[location]=="tower1") or ($event[location]=="tower2") or ($event[location]=="tower3")){
$jap=6;}
    if ($event[id] > 0) {
      $queries++;
      mysql_query("DELETE FROM nbattle WHERE id='$m' LIMIT 1");
   }
   echo"<small><b>Neegzistuojantis &#303;vykis.</b></small><br/>$line</p><p align=\"left\">";
if($j){
   include_once("names/lands.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $land = $land_name[$i];
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
   mysql_close($db);
   exit;
}
if ($battle[id] == "") {
   $queries++;
   $event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
   if ($event[unit] == "") {
      echo"<small><b>Neegzistuojantis &#303;vykis.</b></small><br/>$line</p><p align=\"left\">";
if($j){
      include_once("names/lands.php");
      include_once("names/territories.php");
      include_once("names/territories2.php");
      $land = $land_name[$i];
      $territory = $territory_name[$j];
      $territory2 = $territory2_name[$k];
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
   else {
      $battle[heroe] = strtolower($user[username]);
      $battle[round] = 1;
      $ch = 30;
include_once("skils/luck.php");
      if (mt_rand(0, 100) >= $ch) {
         $battle[turn] = "d|1";
      }
      else {
         $battle[turn] = "a|1";
      }

      $battle[unit] = $event[unit];
      $battle[expierence] = $event[expierence];
      $battle[resource] = $event[resource];
      $battle[q_unit] = $event[q_unit];
      $battle[q_res] = $event[q_res];
      $battle[artifact] = $event[artifact];
      $queries++;
      mysql_query("UPDATE army SET hp='0' WHERE username='$battle[heroe]'");
      include("units/$battle[unit].php");
      $army_health[0] = $unit_info[health];
      include_once("core/unit_level.php");
      $level = level();
      $exp = floor($battle[expierence] / $battle[q_unit]);
      $lvl = expierence($exp);
      if ($lvl < 9) {
         $nextlvl = $level[$lvl+1] * $battle[q_unit];
         $left = $nextlvl - $battle[expierence];
      }
      if ($lvl > 1) {
         $kk = $k;
         $k = 0;
         include_once("core/level_up.php");
         $k = $kk;
      }
      $unit_health = $army_health[0];
      $queries++;
if(!file_exists("spec/res/$battle[heroe].txt")){
@file_put_contents("spec/res/$battle[heroe].txt","$battle[q_unit]");}
      mysql_query("INSERT INTO nbattle(id, health, heroe, round, turn, unit, expierence, resource, q_unit, q_res, artifact, time) VALUES ('$m', '$unit_health', '$battle[heroe]', '$battle[round]', '$battle[turn]', '$battle[unit]', '$battle[expierence]', '$battle[resource]', '$battle[q_unit]', '$battle[q_res]', '$battle[artifact]','$time')");
   }
}
if ($battle[heroe] !== strtolower($user[username])) {
   $c = mysql_fetch_array(mysql_query("SELECT place, time, username FROM users WHERE username='$battle[heroe]' LIMIT 1"));
   $queries++;
   if (($c[0] !== $place) or ($c[1] < $time)) {
      $name = strtolower($user[username]);
      $battle[round] = 1;
      $ch = 30;
include_once("skils/luck.php");
      if (mt_rand(0, 100) >= $ch) {
         $battle[turn] = "d|1";
      }
      else {
         $battle[turn] = "a|1";
      }
      $queries++;
      $event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
      include("units/$event[unit].php");
      $army_health[0] = $unit_info[health];
      include_once("core/unit_level.php");
      $level = level();
      $exp = floor($event[expierence] / $event[q_unit]);
      $lvl = expierence($exp);
      if ($lvl < 9) {
         $nextlvl = $level[$lvl+1] * $event[q_unit];
         $left = $nextlvl - $event[expierence];
      }
      if ($lvl > 1) {
         $kk = $k;
         $k = 0;
         include_once("core/level_up.php");
         $k = $kk;
      }
      $battle[unit] = $event[unit];
      $battle[heroe] = $name;
      $battle[q_unit] = $event[q_unit];
      $battle[health] = $army_health[0];
      $queries++;
      mysql_query("UPDATE nbattle SET heroe='$name', round='$battle[round]', turn='$battle[turn]', q_unit='$event[q_unit]', health='$battle[health]', time='$time' WHERE id='$m' LIMIT 1");
      $queries++;
      mysql_query("UPDATE army SET hp='0' WHERE username='$battle[heroe]'");
      }
   else {
      echo"<small><a href=\"index.php?action=nick_info&amp;i=$i&amp;j=$j&amp;k=$k&amp;id=$id&amp;name=$c[2]\">$c[2]</a>&nbsp;jau kaunasi &#353;ioje kovoje.</small><br/>$line</p><p align=\"left\">";
if($j){
      include_once("names/lands.php");
      include_once("names/territories.php");
      include_once("names/territories2.php");
      $land = $land_name[$i];
      $territory = $territory_name[$j];
      $territory2 = $territory2_name[$k];
      echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small></p></card></wml>";
      mysql_close($db);
      exit;
   }
}

$turn = explode("|", $battle[turn]);
if ($turn[0] == "d") {
   include("names/units.php");
   include("units/$battle[unit].php");
   $uunit_special = $unit_info[spec];
   $uunit_special2 = $unit_info[spec2];
   $uunit_special3 = $unit_info[spec3];
   $uunit_special4 = $unit_info[spec4];
   $uunit_special5 = $unit_info[spec5];
   $uunit_shoot = $unit_info[shoot];
   $army_attack[0] = $unit_info[attack];
   $army_defense[0] = $unit_info[defense];
   $army_health[0] = $unit_info[health];
   $army_min[0] = $unit_info[min];
   $army_max[0] = $unit_info[max];
   $expp = $unit_info[exp];
   include_once("core/unit_level.php");
   $level = level();
   $exp = floor($battle[expierence] / $battle[q_unit]);
   $lvl = expierence($exp);
   if ($lvl > 1) {
      $kk = $k;
      $k = 0;
      include_once("core/level_up.php");
      $k = $kk;
   }
   $uunit_attack = $army_attack[0];
include_once("magic2/weaknes.php");
   $uunit_defense = $army_defense[0];
   $uunit_health = $army_health[0];
   $uunit_max = $army_max[0];
   $uunit_min = $army_min[0];
   include("core/my_army.php");
   $who = mt_rand(1, $total_units) - 1;
   if ($army_hp[$who] == "0") {
      $exppp = $army_expierence[$who];
      include_once("core/unit_level.php");
      $exppp = floor($exppp / $army_quantity[$who]);
      $lvl = expierence($exppp);
      if ($lvl > 1) {
         $kk = $k;
         $k = 5;
         $army_health[$k] = $army_health[$who];
         include("core/level_up.php");
         $army_hp[$who] = $army_health[$k];
         $army_health[$who] = $army_health[$k];
         $k = $kk;
      }
      else {
         $army_hp[$who] = $army_health[$who];
      }
   }
$para=@file_get_contents("spec/paralyze/$battle[heroe].txt");
$sto=@file_get_contents("spec/stoning/$battle[heroe].txt");
$blind=@file_get_contents("spec/blind/$battle[heroe].txt");
$fear=@file_get_contents("spec/fear/$battle[heroe].txt");
if($fear=="$battle[unit]"){
include_once("special/cause_fear4.php");}
elseif($blind=="$battle[unit]"){
echo"<small>Monstras Apakes</small><br/>";}
elseif($para=="$battle[unit]"){
echo"<small>Monstras paraly&#382;iuotas</small><br/>";}
elseif($sto=="$battle[unit]"){
echo"<small>Monstras suakmen&#279;jes</small><br/>";}
else {
$cur10=@file_get_contents("spec/curse/$battle[heroe].txt");
if($cur10=="$battle[unit]"){
$uunit_max=$uunit_min;}
if(($uunit_special=="attack_all") or ($uunit_special2=="attack_all") or ($uunit_special3=="attack_all") or ($uunit_special4=="attack_all") or ($uunit_special5=="attack_all")){
$who=count($army_unit)-1;
for($x=0; $x<count($army_unit); $x++){
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
include_once("special/souls.php");include_once("special/ressurecting.php");

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
include_once("magic2/slayer.php");

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
$who=$who-1;
}
} else {
include_once("include/nt2.php");}}

   if (($battle[q_unit] > 0) and (($army_quantity[0] > 0) or ($army_quantity[1] > 0) or ($army_quantity[2] > 0) or ($army_quantity[3] > 0))) {
      echo"<small><anchor>&#187;&#187;&#187;<go method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;time=".time()."\"><postfield name=\"event\" value=\"$m\"/></go></anchor></small><br/>";
   }
}
elseif ($turn[0] == "a") {
   include("names/units.php");
   $turn[1]--;
   $time = addslashes(htmlspecialchars($_GET['time']));
$magi=addslashes(htmlspecialchars($_GET['magi']));
   if (($turn[1] > 0) and ($time !== "no")) {
      $who = $turn[1] - 1;
      include("units/$battle[unit].php");
      $uunit_special = $unit_info[spec];
      $uunit_special2 = $unit_info[spec2];
      $uunit_special3 = $unit_info[spec3];
      $uunit_special4 = $unit_info[spec4];
      $uunit_special5 = $unit_info[spec5];
      $army_attack[0] = $unit_info[attack];
      $army_defense[0] = $unit_info[defense];
      $army_health[0] = $unit_info[health];
      $army_min[0] = $unit_info[min];
      $army_max[0] = $unit_info[max];
      $expp = $unit_info[exp];
      include_once("core/unit_level.php");
      $level = level();
      $exp = floor($battle[expierence] / $battle[q_unit]);
      $lvl = expierence($exp);
      if ($lvl < 9) {
         $nextlvl = $level[$lvl+1] * $battle[q_unit];
         $left = $nextlvl - $battle[expierence];
      }
      if ($lvl > 1) {
         $kk = $k;
         $k = 0;
         include_once("core/level_up.php");
         $k = $kk;
      }
      $uunit_attack = $army_attack[0];
include_once("magic2/weaknes.php");
      $uunit_defense = $army_defense[0];
      $uunit_health = $army_health[0];
      $uunit_max = $army_max[0];
      $uunit_min = $army_min[0];
      $uunit_special = $unit_info[spec];
      $uunit_special2 = $unit_info[spec2];
      $uunit_special3 = $unit_info[spec3];
      $uunit_special4 = $unit_info[spec4];
      $uunit_special5 = $unit_info[spec5];
      include("core/my_army.php");
      $who = $turn[1] - 1;
include_once("magic2/hpz.php");

if($magi){
include_once("magic/$magi.php");
include_once("magic2/$magi.php");}
else {
$para4=@file_get_contents("spec/paralyze/$battle[heroe].tx");
$sto4=@file_get_contents("spec/stoning/$battle[heroe].tx");
$blind4=@file_get_contents("spec/blind/$battle[heroe].tx");
if($army_fear[$who]=="1"){
include_once("special/cause_fear3.php");}
elseif($para4=="$army_unit[$who]"){
echo"<small>Jus parali&#382;iuotas</small><br/>";}
elseif($blind4=="$army_unit[$who]"){
echo"<small>Jus apakes</small><br/>";}
elseif($sto4=="$army_unit[$who]"){
echo"<small>Jus suakmen&#279;jes</small><br/>";}
else {
$cur12=@file_get_contents("spec/curse/$battle[heroe].tx");
if($cur12=="$army_unit[$who]"){
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
         @$dmg = floor($dmg + $dmg * (($army_attack[$who] - $uunit_defense) * 2 / 100) + 1);
      }
      else {
         @$dmg = floor($dmg - $dmg * (($uunit_defense - $army_attack[$who]) * 1.5 / 100) + 1);
      }
      include("units/$army_unit[$who].php");
$shot2 = $unit_info[shoot];

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
if(($unit_info[spec]=="lightning") or ($unit_info[spec2]=="lightning") or ($unit_info[spec3]=="lightning") or ($unit_info[spec4]=="lightning") or ($unit_info[spec5]=="lightning")){
$dmg2=$army_quantity[$who]*10;
$dmg=$dmg+$dmg2;}
if(($unit_info[spec]=="age") or ($unit_info[spec2]=="age") or ($unit_info[spec3]=="age") or ($unit_info[spec4]=="age") or ($unit_info[spec5]=="age")){
$uunit_health=$uunit_health/2;}
$cur3=@file_get_contents("spec/curse/$battle[heroe].txt");
if(($unit_info[spec]=="curse") or ($unit_info[spec2]=="curse") or ($unit_info[spec3]=="curse") or ($unit_info[spec4]=="curse") or ($unit_info[spec5]=="curse")){
if($cur3!=="$battle[unit]"){
$sans2=rand("1","2");
if($sans2=="2"){
@file_put_contents("spec/curse/$battle[heroe].txt","$battle[unit]");}}}
$nuod3=@file_get_contents("spec/poison/$battle[heroe].txt");
if(($unit_info[spec]=="poisons") or ($unit_info[spec2]=="poisons") or ($unit_info[spec3]=="poisons") or ($unit_info[spec4]=="poisons") or ($unit_info[spec5]=="poisons")){
if($nuod3!=="$battle[unit]"){
@file_put_contents("spec/poison/$battle[heroe].txt","$battle[unit]");}}
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
include_once("artifact/act/bow_of_elven_cherrywood.php");include_once("artifact/act/bowstring_of_the_unicorn_mane.php");
include_once("artifact/act/angel_feather_arrows.php");
if($shot2=="1"){
include_once("magic2/agility.php");}
include_once("magic2/slayer.php");
include_once("skils/offense.php");
include_once("skils/archery.php");





      if ($dmg > 4 * $army_max[$who] *  $army_quantity[$who]) {
         $dmg = 4 * $army_max[$who] *  $army_quantity[$who];
      }
      if ($dmg < floor(0.3 * $army_min[$who] * $army_quantity[$who])) {
         $dmg = floor(0.3 * $army_min[$who] * $army_quantity[$who]);
      }
      $kill = 0;
if($nuod3=="$battle[unit]"){
if($battle[round]>9){
$raunds3=9;}
else {
$raunds3=$battle[round];}
$nuihp3=1-(0.1*$raunds3);
$uunit_health=$uunit_health[$who]*$nuihp3;
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
         mysql_query("UPDATE nbattle SET q_unit=q_unit-$kill, health='$battle[health]', expierence=$exp WHERE id='$m' LIMIT 1");
      }
      else {
         $battle[health] = $battle[health] - $dmg;
         $queries++;
         mysql_query("UPDATE nbattle SET health='$battle[health]' WHERE id='$m' LIMIT 1");
      }
      if ($kill >= $battle[q_unit]) {
         $kill = $battle[q_unit];
      }
      if (((substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) >= 10) and (substr($army_quantity[$who], strlen($army_quantity[$who]) - 2, 2) <= 20)) or ((substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$who]];
      }
      elseif (substr($army_quantity[$who], strlen($army_quantity[$who]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$who]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$who]];
      }
      if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
         $uunit_name = $unit_name_p3[$battle[unit]];
      }
      elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
         $uunit_name = $unit_name_s2[$battle[unit]];
      }
      else {
         $uunit_name = $unit_name_p2[$battle[unit]];
      }
      $uu = $unit_name_s1[$army_unit[$who]];
      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$who].gif\" alt=\"$uu\"/><br/>";
      echo"<small><u>$army_quantity[$who] $unit_name atakavo $battle[q_unit] $uunit_name.</u></small><br/>";
      $battle[q_unit] = $battle[q_unit] - $kill;
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
if(($unit_info[spec]=="death_stare") or ($unit_info[spec2]=="death_stare") or ($unit_info[spec3]=="death_stare") or ($unit_info[spec4]=="death_stare") or ($unit_info[spec5]=="death_stare")){
echo"<small>Panaudojo Mirties &#382;vilksnis</small><br/>";}
if(($unit_info[spec]=="lightning") or ($unit_info[spec2]=="lightning") or ($unit_info[spec3]=="lightning") or ($unit_info[spec4]=="lightning") or ($unit_info[spec5]=="lightning")){
echo"<small>Nutrenk&#279; &#382;aibu</small><br/>";}      echo"<small>Padar&#279; $dmg &#382;alos.</small><br/>";
if(($unit_info[spec]=="poisons") or ($unit_info[spec2]=="poisons") or ($unit_info[spec3]=="poisons") or ($unit_info[spec4]=="poisons") or ($unit_info[spec5]=="poisons")){
if($nuod3!=="$battle[unit]"){
echo"<small>U&#382;nuodijo</small><br/>";}}
if(($unit_info[spec]=="curse") or ($unit_info[spec2]=="curse") or ($unit_info[spec3]=="curse") or ($unit_info[spec4]=="curse") or ($unit_info[spec5]=="curse")){
if(($cur3!=="$battle[unit]") and ($sans2=="2")){
echo"<small>Prakeik&#279;</small><br/>";}}
$para1=@file_get_contents("spec/paralyze/$battle[heroe].txt");
if(($unit_info[spec]=="paralyze") or ($unit_info[spec2]=="paralyze") or ($unit_info[spec3]=="paralyze") or ($unit_info[spec4]=="paralyze") or ($unit_info[spec5]=="paralyze")){
if($para1!=="$battle[unit]"){
@file_put_contents("spec/paralyze/$battle[heroe].txt","$battle[unit]");
echo"<small>Suparali&#382;iavo.</small><br/>";}}
$sto1=@file_get_contents("spec/stoning/$battle[heroe].txt");
if(($unit_info[spec]=="stoning") or ($unit_info[spec2]=="stoning") or ($unit_info[spec3]=="stoning") or ($unit_info[spec4]=="stoning") or ($unit_info[spec5]=="stoning")){
if($sto1!=="$battle[unit]"){
@file_put_contents("spec/stoning/$battle[heroe].txt","$battle[unit]");
echo"<small>Pavert&#279; akmenimi.</small><br/>";}}
if($sto1=="$battle[unit]"){
@unlink("spec/stoning/$battle[heroe].txt");}
include_once("special/cause_fear2.php");
$blind1=@file_get_contents("spec/blind/$battle[heroe].txt");
if(($unit_info[spec]=="blinding") or ($unit_info[spec2]=="blinding") or ($unit_info[spec3]=="blinding") or ($unit_info[spec4]=="blinding") or ($unit_info[spec5]=="blinding")){
if(($uunit_special=="blind_immunity") or ($uunit_special2=="blind_immunity") or ($uunit_special3=="blind_immunity") or ($uunit_special4=="blind_immunity") or ($uunit_special5=="blind_immunity")){
echo"<small>Apakinti nepavyko</small><br/>";}
elseif($blind1!=="$battle[unit]"){
@file_put_contents("spec/blind/$battle[heroe].txt","$battle[unit]");
echo"<small>Apakino.</small><br/>";}}
if($blind1=="$battle[unit]"){
@unlink("spec/blind/$battle[heroe].txt");}
      if ($kill > 0) {
         echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
      }
      echo"<br/>";
include_once("special/souls2.php");include_once("special/ressurecting2.php");
if(file_exists("spec/$battle[heroe].txt")){
include_once("magic2/fw2.php");}
      $kill = 0;
$sto8=@file_get_contents("spec/stoning/$battle[heroe].txt");
$blind8=@file_get_contents("spec/blind/$battle[heroe].txt");
      if (($battle[q_unit] > 0) and ($shot2 == "0") and ($unit_info[spec] !== "no_retaliaton") and ($unit_info[spec2] !== "no_retaliaton") and ($unit_info[spec3] !== "no_retaliaton") and ($unit_info[spec4] !== "no_retaliaton") and ($unit_info[spec5] !== "no_retaliaton") and ($sto8!=="$battle[unit]") and ($blind8!=="$battle[unit]")) {
         if ($army_hp[$who] == "0") {
            $exppp = $army_expierence[$who];
            include_once("core/unit_level.php");
            $exppp = floor($exppp / $army_quantity[$who]);
            $lvl = expierence($exppp);
            if ($lvl > 1) {
               $kk = $k;
               $k = 5;
               $army_health[$k] = $army_health[$who];
               include("core/level_up.php");
               $army_hp[$who] = $army_health[$k];
               $army_health[$who] = $army_health[$k];
               $k = $kk;
            }
            else {
               $army_hp[$who] = $army_health[$who];
            }
         }
$cur13=@file_get_contents("spec/curse/$battle[heroe].txt");
if($cur13=="$battle[unit]"){
$uunit_max=$uunit_min;}
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
            @$dmg = floor($dmg + $dmg * (($uunit_attack - $army_defense[$who]) * 2 / 100) + 1);
         }
         else {
            @$dmg = floor($dmg - $dmg * (($army_defense[$who] - $uunit_attack) * 1.5 / 100) + 1);
         }
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
$nuod4=@file_get_contents("spec/poison/$battle[heroe].tx");
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
if($nuod4=="$army_unit[$who]"){
if($battle[round]>9){
$raunds4=9;}
else {
$raunds4=$battle[round];}
$nuihp4=1-(0.1*$raunds4);
$army_health[$who]=$army_health[$who]*$nuihp4;
}
         if ($dmg >= $army_hp[$who]) {
            $kill = 1;
            if ($dmg - $army_hp[$who] >= $army_health[$who]) {                                 $army_hp[$who] = $army_health[$who] - ($dmg - (floor($dmg/$army_health[$who]) * $army_health[$who]));
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
            mysql_query("UPDATE army SET quantity=quantity-$kill, hp=$army_hp[$who] WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
         }
         else {
            $army_hp[$who] = $army_health[$who] - $dmg;
            $queries++;
            mysql_query("UPDATE army SET hp='$army_hp[$who]' WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
         }
         if ($kill >= $army_quantity[$who]) {
            $kill = $army_quantity[$who];
            $queries++;
            mysql_query("DELETE FROM army WHERE username='$battle[heroe]' and unit='$army_unit[$who]' LIMIT 1");
         }
         $army_quantity[$who] = $army_quantity[$who] - $kill;
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
         echo"<small><u>$battle[q_unit] $unit_name kontraatakavo.</u></small><br/>";
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
         echo"<small>Padar&#279; $dmg &#382;alos.</small><br/>";
         if ($kill > 0) {
            echo"<small> Nu&#382;ud&#279; $kill $unit_name.</small>";
         }
         echo"<br/>";
include_once("special/souls.php");include_once("special/ressurecting.php");
         if ($turn[1] < $total_units) {
            echo"$line<br/>";
         }
      }
   }
}}
   elseif (($turn[1] > 0) and ($time == "no")) {
      include("core/my_army.php");
      $who = $turn[1] - 1;
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
      echo"<small><u>$army_quantity[$who] $unit_name praleido &#279;jim&#261;.</u></small><br/>";
   }
   else {
      include("core/my_army.php");
   }
   if (($turn[1] < $total_units) and ($battle[q_unit] > 0)) {
      $turn[1]--;
      if ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units <= $turn[1])) {
         $whoo = 0;
      }
      else {
         $whoo = $turn[1] + 1;
      }
      $turn[1]++;
      if (((substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 2, 2) >= 10) and (substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 2, 2) <= 20)) or ((substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 1, 1) == "0"))) {
         $unit_name = $unit_name_p3[$army_unit[$whoo]];
      }
      elseif (substr($army_quantity[$whoo], strlen($army_quantity[$whoo]) - 1, 1) == "1") {
         $unit_name = $unit_name_s1[$army_unit[$whoo]];
      }
      else {
         $unit_name = $unit_name_p1[$army_unit[$whoo]];
      }
      if (((substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) >= 10) and (substr($battle[q_unit], strlen($battle[q_unit]) - 2, 2) <= 20)) or ((substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "0"))) {
         $uunit_name = $unit_name_p3[$battle[unit]];
      }
      elseif (substr($battle[q_unit], strlen($battle[q_unit]) - 1, 1) == "1") {
         $uunit_name = $unit_name_s2[$battle[unit]];
      }
      else {
         $uunit_name = $unit_name_p2[$battle[unit]];
      }
      $uu = $unit_name_s1[$army_unit[$whoo]];
      if ($user[pics] > 0) echo"<img src=\"img/units/$army_unit[$whoo].gif\" alt=\"$uu\"/><br/>";
      echo"<small><b>Esate $army_quantity[$whoo] $unit_name</b></small><br/><small>Pasirinkite k&#261; atakuoti:</small><br/><small><anchor>$battle[q_unit] $uunit_name<go method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;time=".time()."\"><postfield name=\"event\" value=\"$m\"/></go></anchor></small><br/>$line<br/><small><anchor>Praleisti &#279;jim&#261;<go method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;time=no\"><postfield name=\"event\" value=\"$m\"/></go></anchor></small><br/>";
include_once("names/magic.php");
echo"<small>Jusu burtai</small><br/>";
$mag=mysql_query("SELECT name FROM magic where user='$user[username]'");
while($mag2=mysql_fetch_array($mag)){
$name=$mag2['name'];
echo"<small><anchor>$magic_name[$name]<go
method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;&amp;magi=$name&amp;time=".time()."\"><postfield name=\"event\" value=\"$m\"/></go></anchor></small><br/>$line<br/>";}   }
   else {
      if (($battle[q_unit] > 0) and (($army_quantity[0] > 0) or ($army_quantity[1] > 0) or ($army_quantity[2] > 0) or ($army_quantity[3] > 0))) {
      echo"<small><anchor>&#187;&#187;&#187;<go method=\"post\" href=\"index.php?action=nbattle&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k&amp;time=".time()."\"><postfield name=\"event\" value=\"$m\"/></go></anchor></small><br/>";
      }
   }
}
if ($battle[q_unit] == "0") {
   $event = mysql_fetch_array(mysql_query("SELECT * FROM map WHERE id='$m' LIMIT 1"));
   include_once("core/unit_level.php");
   $exp = floor($event[expierence] / $event[q_unit]);
   $lvl = expierence($exp);
   $expierence = ceil($expp * $event[q_unit] * ((10 + $lvl) / 10));
include_once("skils/learning.php");
if($user[rain]>time()){
$expierence=$expierence*2;}
   $btime = 180;
   if (($event[unit] == "bone_dragon") or ($event[unit]=="ghost_dragon") or ($event[unit]=="blood_dragon") or ($event[unit]=="hell_baron")) {
      $btime = $btime + 60;
   }
$mino=mysql_fetch_array(mysql_query("SELECT unit FROM army where username='$battle[heroe]' and unit='minotaur'"));
$mino2=mysql_fetch_array(mysql_query("SELECT unit FROM army where username='$battle[heroe]' and unit='minotaur_king'"));
$mino3=mysql_fetch_array(mysql_query("SELECT unit FROM army where username='$battle[heroe]' and unit='ghost_behemoth'"));
$mino4=mysql_fetch_array(mysql_query("SELECT unit FROM army where username='$battle[heroe]' and unit='supreme_archangel'"));
if($mino[unit]){
$btime=$btime-15;}
elseif($mino2[unit]){
$btime=$btime-15;}
elseif($mino3[unit]){
$btime=$btime-15;}
elseif($mino4[unit]){
$btime=$btime-15;}

include_once("skils/leadership1.php");
   if ($user[immortal] > time()) {
$btime = $btime/3;}
include_once("magic2/haste.php");
$gtime=time()+$btime;
   $exp = floor($expierence / $total_units);
   $queries++;
   mysql_query("UPDATE army SET expierence=expierence+$exp WHERE username='$battle[heroe]' LIMIT $total_units");
   $queries++;
   mysql_query("UPDATE nbattle SET q_unit='$event[q_unit]', active='1' WHERE id='$m' LIMIT 1");
   $queries++;
   mysql_query("DELETE FROM map WHERE id='$m' LIMIT 1");
@unlink("spec/stoning/$battle[heroe].tx");
@unlink("spec/blind/$battle[heroe].tx");
@unlink("spec/curse/$battle[heroe].tx");
@unlink("spec/poison/$battle[heroe].tx");
@unlink("spec/paralyze/$battle[heroe].tx");
@unlink("spec/stoning/$battle[heroe].txt");
@unlink("spec/blind/$battle[heroe].txt");
@unlink("spec/curse/$battle[heroe].txt");
@unlink("spec/poison/$battle[heroe].txt");
@unlink("spec/paralyze/$battle[heroe].txt");
@unlink("sp/weaknes/$battle[heroe].txt");
@unlink("spec/$battle[heroe].txt");
@unlink("spec/res/drk/$battle[heroe].txt");
@unlink("spec/res/vam/$battle[heroe].txt");
@unlink("spec/res/$battle[heroe].txt");

include_once("skils/necromanc.php");
if($necro>0){
$kec=round($event[q_unit]*$necro);

$unitsne=mysql_fetch_array(mysql_query("SELECT * FROM barak where user='$battle[heroe]' and unit='skeleton'"));
if(!$unitsne[unit]){
include_once("units/skeleton.php");
mysql_query("insert into barak (user,kiek,unit,atk,def,mindmg,maxdmg,healt,hp) values ('$battle[heroe]','$kec','skeleton','$unit_info[attack]','$unit_info[defense]','$unit_info[min]','$unit_info[max]','$unit_info[health]','$unit_info[health]')");}
else {
mysql_query("UPDATE barak SET kiek=kiek+$kec where user='$battle[heroe]' and unit='skeleton'");
}
}
mysql_query("delete from army where username='$battle[heroe]' and magic='reanim'");

   echo"$line<br/><small><b>J&#363;s laim&#279;jote!</b></small><br/><small><u>Gavote patirties: $expierence</u></small><br/>$line";
if ($battle[artifact] !== "") {
      include_once("names/artifacts.php");
$art=$artifact_name[$battle[artifact]];
      echo"<br/><small><u>Gavote 1 $art!</u></small><br/>";
      echo "<img src=\"img/artifact/$battle[artifact].gif\" alt=\"$art\"/><br/>";
      
      echo"$line";
include_once("artifact/use/$battle[artifact].php");
$art=mysql_fetch_array(mysql_query("SELECT * FROM artifacts where user='$user[username]' and name='$battle[artifact]'"));
if(!$art[name]){
mysql_query("insert into artifacts (user,name,kiek,type) values ('$user[username]','$battle[artifact]','1','$atype')");} else {
mysql_query("UPDATE artifacts SET kiek=kiek+1 where name='$battle[artifact]' and user='$user[username]'");}
   }
if ($event[resource] !== "") {
      include_once("core/resources.php");
      if ($event[resource] == "gold") {
         $event[q_res] = $event[q_res] * 10;
         $res = "Aukso";
         $ress = "Auksas";
      }
      else {
         $res = resource($event[resource], $event[q_res]);
         $ress = resource($event[resource], 1);
      }
      $res = strtolower($res);
      echo"<br/><small><u>Gavote $event[q_res] $res!</u></small><br/>";
      echo "<img src=\"img/resources/$event[resource].gif\" alt=\"$ress\"/><br/>";
      
      echo"$line";
      $queries++;
      mysql_query("UPDATE users SET battle='$gtime', expierence=expierence+$expierence, $event[resource]=$event[resource]+$event[q_res] WHERE username='$user[username]' LIMIT 1");
   }
   else {
      $queries++;
      mysql_query("UPDATE users SET battle='$gtime', expierence=expierence+$expierence WHERE username='$user[username]' LIMIT 1");
   }
   echo"</p><p align=\"left\">";
if($j){
   include_once("names/lands.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $land = $land_name[$i];
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
elseif (($army_quantity[0] < 1) and ($army_quantity[1] < 1) and ($army_quantity[2] < 1) and ($army_quantity[3] < 1)) {
   $btime = 600;
   if (($event[unit] == "bone_dragon") or ($event[unit]=="ghost_dragon") or ($event[unit]=="hell_baron")) {
      $btime = $btime + 120;
   }
include_once("skils/leadership2.php");
   if ($user[immortal] > time()){ $btime = $btime/3;}
include_once("magic2/haste.php");
$gtime=time()+$btime;   mysql_query("UPDATE users SET battle='$gtime' WHERE username='$user[username]' LIMIT 1");

@unlink("spec/stoning/$battle[heroe].tx");
@unlink("spec/blind/$battle[heroe].tx");
@unlink("spec/curse/$battle[heroe].tx");
@unlink("spec/poison/$battle[heroe].tx");
@unlink("spec/paralyze/$battle[heroe].tx");
@unlink("spec/stoning/$battle[heroe].txt");
@unlink("spec/blind/$battle[heroe].txt");
@unlink("spec/curse/$battle[heroe].txt");
@unlink("spec/poison/$battle[heroe].txt");
@unlink("spec/paralyze/$battle[heroe].txt");
@unlink("sp/weaknes/$battle[heroe].txt");
@unlink("spec/$battle[heroe].txt");
@unlink("spec/res/drk/$battle[heroe].txt");
@unlink("spec/res/vam/$battle[heroe].txt");
@unlink("spec/res/$battle[heroe].txt");

mysql_query("DELETE FROM nbattle where id='$m'");

   echo"$line<br/><small><b>J&#363;s pralaim&#279;jote!</b></small><br/>$line</p><p align=\"left\">";
if($j){
   include_once("names/lands.php");
   include_once("names/territories.php");
   include_once("names/territories2.php");
   $land = $land_name[$i];
   $territory = $territory_name[$j];
   $territory2 = $territory2_name[$k];
   echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j&amp;k=$k\">$territory2</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i&amp;j=$j\">$territory</a></small><br/>
<small><b>&#171;</b>&nbsp;<a href=\"index.php?action=map&amp;id=$id&amp;i=$i\">$land</a></small><br/>";}
else{
echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id&amp;action=castle&amp;pilis=$pilis\">Pilis</a></small><br/>";}

echo"<small><b>&#171;</b>&nbsp;<a href=\"index.php?id=$id\">$homet</a></small>";
   echo"</p></card></wml>";
   mysql_close($db);
   exit;
}
$turn[1]++;
echo"$line<br/>";
if ($turn[0] == "a") {
   echo"<small><u>J&#363;s&#371; eil&#279;</u></small><br/>";
   $t = $turn[1] - 1;
   if ($t< 1) {
      $t = 1;
   }
   echo"<small>&#278;jimas [$t/$total_units]</small><br/>";
}
else {
   echo"<small><u>Prie&#353;o eil&#279;</u></small><br/>";
   echo"<small>&#278;jimas [1/1]</small><br/>";
}
echo"<small>Raundas [$battle[round]]</small><br/>$line<br/><small><anchor>&#171; Pab&#279;gti<go method=\"post\" href=\"index.php?action=run&amp;id=$id\"><postfield name=\"mekeke\" value=\"$m\"/></go></anchor></small>";
if ($turn[0] == "d") {
   $turn[0] = "a";
   $turn[1] = 1;
}
else {
   $turn[1]++;
   if ($turn[1] == $total_units + 1) {
   }
   elseif ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units <= $turn[1])) {
      $turn[1] = 1;
      $turn[0] = "d";
      $battle[round]++;
   }
   elseif ((($army_quantity[$turn[1]-1] == "0") or ($army_quantity[$turn[1]-1] == "")) and ($total_units > $turn[1])) {
      $turn[1]++;
   }
}
$queries++;
mysql_query("UPDATE nbattle SET round='$battle[round]', turn='$turn[0]|$turn[1]' WHERE id='$m' LIMIT 1");
?>