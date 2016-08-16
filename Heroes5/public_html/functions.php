<?php
function strsp($txt){ $txt=str_replace(array(',','_','-','. ',' .','...','..','...','..'),'.',$txt);
$txt=str_ireplace(array(' lt ',' com ',' net ',' org ',' biz ',' ru ',' in '),array('.lt ','.com ','.net ','.org ','.biz ','.ru ','.in '),$txt);
$txt=str_replace(array(',','_','-','. ',' .','...','..','...','..'),'.',$txt);
return $txt; }
function apsauga_rkl($txt){
while(strpos($txt,'  ')!==false){$txt=str_replace('  ',' ',$txt);}
If(strpos($txt,'http://')!=false){ echo'Reklama!'; } $txt=strsp($txt); $tx=explode(' ',$txt);
foreach($tx as $m){
if(checkdnsrr($m) && strpos($m,'.')!==false){ echo'Reklama! ('.$m.')<br/>Dar pareklamuosi gausi block<br/><anchor>Atgal<prev/></anchor></p></card></wml>'; exit; }
}
}
function skaicius($a){ return intval(ereg_replace('[^0-9]','',$a));  }
function sendpm($to,$text,$from='!@SYS'){ @include_once('smilies.php');
$date = date('m-d H:i');
$pm=@mysql_query("INSERT INTO pm(nick, name, text, date, active) VALUES ('$to','$from','$text','[$date]','0')");
$pm1=@mysql_query("UPDATE users SET new_pm=new_pm+1, all_pm=all_pm+1 WHERE username='$to' LIMIT 1");
if(!$pm || !$pm1){return false;}
return true; }
function addlog($text){ mysql_query("insert into aukatas(text) values('$text')"); }
function dayexp($nick,$exp=1){  $a=mysql_fetch_array(mysql_query("select dien, dexp from users where username='$nick'")); if($a['dien']!=date('d')){ newday(); } $dexp=intval($a['dexp'])+1; mysql_query("update users set dexp='$dexp' where username='$nick'"); }
function newday(){
$a=mysql_fetch_array(mysql_query("select username,dexp,dien from users order by dexp desc limit 1")); mysql_query("update users set kred=kred+1 where username='".$a['username']."'");
sendpm($a['username'],'Sveikiname uzemus 1 vieta dienos tope. Jus gavote kredita.');
addlog('Dienos top 1kr laimejo '.$a['username']);
mysql_query("update users set dien='".date('d')."', dexp='0'");
mysql_query("update ally set dien='".date('d')."', dpoints='0'");
$aldata=mysql_query('select * from ally order by dpoints desc limit 0,2'); $j=0;
while($al=mysql_fetch_array($aldata)){$j++; if($j==1){ $tp=$al['gold']*0.03;
$tp+=10000; mysql_query("update users set kred=kred+2, gold=gold+$tp where username='{$al[vadas]}'"); sendpm($al['vadas'],'Kadangi jusu klanas uzeme 1 vieta dienos tope, tai jus gavote 2kreditus ir '.$tp.' aukso!');
mysql_query("update users set kred=kred+0.2, gold=gold+$tp where ally='{$al[id]}' and username!='{$al[vadas]}'"); }
if($j==2){ $tp=$al['gold']*0.01;
mysql_query("update users set kred=kred+1, gold=gold+$tp where username='{$al[vadas]}'"); sendpm($al['vadas'],'Kadangi jusu klanas uzeme 2 vieta dienos tope, tai jus gavote 1 kredita ir '.$tp.' aukso!');
mysql_query("update users set kred=kred+0.2, gold=gold+$tp where ally='{$al[id]}' and username!='{$al[vadas]}'"); }
}
}
function add_art($art,$count=1){}
function use_art($art){ global $user; if(!file_exists('artifact/new/'.$art)){return;}
$a=mysql_fetch_array(mysql_query("select * from artifacts where name='$art' and user='$user[username]'")); if($a['kiek']<0){return false;}
$b=explode('|',file_get_contents('artifact/new/'.$art));
$data=explode(';',$b[3]);
$curr='+'; $ndd=1;
if($a['det']){$curr='-'; $ndd=0;}
foreach($data as $da){ $dm=explode(':',$da); $dat[]=$dm[0].'='.$dm[0].$curr; } $data=implode(',',$dat);
mysql_query("update artifacts set det='$ndd' where name='$art' and user='$user[username]'"); if($data) return mysql_query("update users set $data where username='$user[username]'");
return true; }
function allyattack($from,$to){ $f=mysql_fetch_array(mysql_query('select * from ally where id=\''.$from.'\''));
if($f===false){echo'Blogas mano aliansas!'; return false;} $t=mysql_fetch_array(mysql_query('select * from ally where id=\''.$to.'\''));
if($t===false){echo'Blogas prieso aliansas!'; return false;}
if($f['puolimai']<1){echo'Jau nebeturite ejimu! Palaukite kitos dienos!'; return false;}
if($f['rest']>time()){echo 'Buriai kariu grizta is musio. Jiems pasirengti naujai kovai reikia laiko! Palaukite '.($f['rest']-time()).'s'; return false; }
if($t['rest2']>time()){echo 'Priesas nesenai buvo stiprai sumustas. Jis gales kovoti tik po '.($t['rest2']-time()).'s'; return false; }
if($from==$to){echo 'Savo armijos pulti negalima!'; return; }
if($f['units']<1){ echo'Be armijos pulti negalima'; return; }
if($t['units']<1){ echo'Priesas armijos neturi, todel kova negali ivykti'; return; }
if($f['gold']<5000){echo'Kova kainuoja 5000 aukso. Jus tiek neturite!'; return;} else { mysql_query("update ally set gold=gold-5000 where id='$from'"); }
error_reporting(0);
$dmg1=$f['atk']-$t['def']; $dmg2=$t['atk']-$f['def'];
if($dmg1<0){$dmg1=0;}
if($dmg2<0){$dmg2=0;}
//echo 'Rez: '.$dmg1.':'.$dmg2.'<br/>';
if($dmg1<$dmg2){ echo'Pralaimejote...<br/>'; $ng=round($f['gold']*0.1);
if($ng<0){$ng=0;}
echo 'Praradote aukso: '.$ng.'<br/>';
$pon=mt_rand(5,15); $ot=$f['points'];
$f['points']-=$pon;
$f['dpoints']-=$pon;
if($f['points']<0){$f['points']=0;}
if($f['dpoints']<0){$f['dpoints']=0;}
echo'Praradote ta&#353;k&#371;: '.($ot-$f['points']).'<br/>';
$dmg=$dmg2-$dmg1;
$hp=$f['hp']/$f['units'];
$dm=floor($dmg/$hp);
if($dm<0){$dm=0;}
$f['def']-=($f['def']/$f['units'])*$dm;
$f['atk']-=($f['atk']/$f['units'])*$dm;
$f['units']-=$dm;
if($f['units']<0){$f['units']=0;}
echo'Praradote armijos: '.$dm.'<br/>';
if($f['def']<0){$f['def']=0;}
if($f['atk']<0){$f['atk']=0;}
mysql_query("update ally set loses=loses+1, gold=gold-$ng, points='{$f[points]}', dpoints='{$f[dpoints]}', puolimai=puolimai-1, units='{$f[units]}', rest=".(time()+300).", rest2=".(time()+1600).", def='{$f[def]}', atk='{$f[atk]}' where id='{$f[id]}'");
mysql_query("update ally set gold=gold+$ng, wins=wins+1, points=points+5, dpoints=points+5 rest=".(time()+300)." where id='{$t[id]}'");
}
else { echo'Laim&#279;jote!<br/>';
$ng=round($t['gold']*0.1);
if($ng<0){$ng=0;}
echo'Gavote aukso: '.$ng.'<br/>Gavote ta&#353;k&#371;: 5<br/>';
$ptc=mt_rand(5,15);
$t['points']-=$ptc;
$t['dpoints']-=$ptc;
if($t['points']<0){$t['points']=0;}
if($t['dpoints']<0){$t['dpoints']=0;}
$dmg=$dmg1-$dmg2;
$hp=$t['hp']/$t['units'];
$dm=floor($dmg/$hp);
if($dm<0){$dm=0;}
$t['atk']-=($t['atk']/$t['units'])*$dm;
$t['def']-=($t['def']/$t['units'])*$dm;
if($t['def']<0){$t['def']=0;}
if($t['atk']<0){$t['atk']=0;}
$t['units']-=$dm;
if($t['units']<0){$t['units']=0;}
mysql_query("update ally set loses=loses+1, gold=gold-$ng, points='{$t[points]}', dpoints='{$t[dpoints]}', def='{$t[def]}', atk='{$t[atk]}', units='{$t[units]}', rest2=".(time()+1600)." where id='{$t[id]}'");
mysql_query("update ally set gold=gold+$ng, wins=wins+1, points=points+5, dpoints=dpoints+5, puolimai=puolimai-1, rest=".(time()+300)." where id='{$f[id]}'");
}
}
?>