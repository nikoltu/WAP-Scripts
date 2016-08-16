<?php

if(!in_array($_SERVER['REMOTE_ADDR'], array('195.216.233.21','195.216.233.20'))) die("Klaida");


$narsykle_mano = $_SERVER['HTTP_USER_AGENT'];
$narsykle_mano = substr($narsykle_mano, 0, 3);
if ($narsykle_mano == "Moz")

{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "Win")
{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "SIE")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Nok")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Ope")
{ $msg = "Draudziama ieiti su PC."; }

if ($narsykle_mano == "Son")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "Sam")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "SEC")
{ $msg = "Tau cia negalima."; }

if ($narsykle_mano == "MOT")
{ $msg = "Tau cia negalima."; }
if ($narsykle_mano == "WapSi")
{
$msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "cURL ")
{
$msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "porta")
{
$msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "Reqwi")
{
$msg = "Draudziama ieiti su kompiuteriu.";
}
if ($narsykle_mano == "Iwp-t")
{
$msg = "Draudziama ieiti su kompiuteriu.";
}

if ($msg != "")
{
echo"
<p align=\"center\">
Tau cia negalima<br/>
------</p>
</card>
</wml>";
exit;
} 

$textas = $_GET['sms']; 
$siuntejo_nr = $_GET['from']; 
$tr_nr = $_GET['to']; 
$kaina = $_GET['amount']; 
$smss = explode(" ",$textas); 
$rakt = strtolower($smss[0]); 
$nic = strtolower(ereg_replace("[^A-Za-z0-9]","",$smss[1])); 
$ko = strtolower(ereg_replace("[^A-Za-z0-9]","",$smss[2])); 
$dar = strtolower(ereg_replace("[^A-Za-z0-9]","",$smss[3])); 

$laikas = date("Y-m-d H:i"); 
 echo"Atlikta<br/>
 Aciu kad zaidziate"; 
 
     if ($nic == "reklama"){ 
$irasas_reklamai = "$smss[3] $smss[4] $smss[5] $smss[6] $smss[7]"; 
$irasas_reklamai = htmlspecialchars(str_replace(array("^","%","$","\n","|"),"",$irasas_reklamai)); 
$smss[2] = htmlspecialchars(str_replace(array("^","%","$","\n","|"),"",$smss[2])); 
$foo = @fopen("txt/rkl.txt", "a"); 
        @fwrite($foo,"$smss[2]|$irasas_reklamai|\n");
        @fclose($foo); }
                                if (file_exists("us_xgrx_inf147258369/$nic.txt")){ 
                               
$inf = @explode("|",@file_get_contents("us_xgrx_inf147258369/$nic.txt")); 
if (!file_exists("kronoss/$nic.txt")){ $kr = 0; } else { $kr = file_get_contents("kronoss/$nic.txt"); }

    
        if ($kaina == '100'){ 

    $nnn2=file("txt/konk_dal.ly");
$kiek2=count($nnn2);
for($i2=0; $i2<$kiek2; $i2++) {
$et2=explode("|",$nnn2[$i2]);
if ($et2[0]==$nic){ $yrans = "yra"; break; }}
if ($yrans != "yra"){
$open = @fopen("txt/konk_dal.ly","a");
        @fwrite($open, "$nic|$inf[19]|\n");
        @fclose($open);
}

    
    }
    
       //////////////////////// 0.50 LITAS //////////////////////////////////////////////////////
    if ($kaina == '50'){ 
    
    if ($ko == "stoju"){ 
if (file_exists("klaniukos/$dar.ta")){ 
$open = @fopen("klaniukos/$dar.ta","a");
        @fwrite($open, "$nic|\n");
        @fclose($open); }}
    
    if ($ko == "kron"){ 
    $kr=$kr+1; 
    $open = @fopen("kronoss/$nic.txt","w");
        @fwrite($open, "$kr");
        @fclose($open); 
        @chmod("kronoss/$nic.txt",0777); }
    }
    
       //////////////////////// 2 LITAi //////////////////////////////////////////////////////
    
    if ($kaina == '200'){ 
    if ($ko == "kron"){ 
    $kr=$kr+3; 
    $open = @fopen("kronoss/$nic.txt","w");
        @fwrite($open, "$kr");
        @fclose($open); @chmod("kronoss/$nic.txt",0777); }
    }

       //////////////////////// 3 LITAi //////////////////////////////////////////////////////
    
    if ($kaina == '300'){ 
    
    if ($ko == "unban"){ 
$nkh2 = file("txt/nick_bans.txt");
$kiek_nkh2 = count($nkh2);
for($py2=0; $py2 < $kiek_nkh2; $py2++) {
$kly2 = explode("|",$nkh2[$py2]);
if ($nic == $kly2[0]){
$nkh2[$py2] = "";
$fpz2 = fopen("txt/nick_bans.txt","w");
fwrite($fpz2,implode($nkh2));
fclose($fpz2);
}} }
    
if ($ko == "pulkas"){ 
if (!file_exists("klaniukos/$dar.ta")){ 
$open = @fopen("klaniukos/$dar.ta","w+");
        @fwrite($open, "$nic|\n<br/>");
        @fclose($open); @chmod("klaniukos/$dar.ta",0777);  }}
        
if ($ko == "isr"){ 
$nick = $nic; 
include("icludekitainf/nuskait2.php"); 
$dari[0]="+"; 
$dari[1]=time()+30*60*60*24; 
include("icludekitainf/iras2.php");
}

if ($ko == "isr2"){ 
$nick = $nic; 
include("icludekitainf/nuskait2.php"); 
$dari[1]=$dari[1]+30*60*60*24; 
include("icludekitainf/iras2.php");
}
    
        $mnr = strtolower(ereg_replace("[^0-9]","",$smss[3])); 
    if ($ko == "misija" && $mnr >= 1 && $mnr <= 50){ 
$mi = file_get_contents("misjos/$nic.txt");
$m = explode("|",$mi); 
$m[$mnr-1] = "+";
$fo222 = @fopen("misjos/$nic.txt", "w"); 
@fwrite($fo222,"$m[0]|$m[1]|$m[2]|$m[3]|$m[4]|$m[5]|$m[6]|$m[7]|$m[8]|$m[9]|$m[10]|$m[11]|$m[12]|$m[13]|$m[14]|$m[15]|$m[16]|$m[17]|$m[18]|$m[19]|$m[20]|$m[21]|$m[22]|$m[23]|$m[24]|$m[25]|$m[26]|$m[27]|$m[28]|$m[29]|$m[30]|$m[31]|$m[32]|$m[33]|$m[34]|$m[35]|$m[36]|$m[37]|$m[38]|$m[39]|$m[40]|$m[41]|$m[42]|$m[43]|$m[44]|$m[45]|$m[46]|$m[47]|$m[48]|$m[49]|$m[50]|$m[51]|$m[52]|$m[53]|$m[54]|$m[55]|$m[56]|$m[57]|$m[58]|$m[59]|");
@fclose($fo222); 
}

    if ($ko == "kron"){ 
    $kr=$kr+5; 
    $open = @fopen("kronoss/$nic.txt","w");
        @fwrite($open, "$kr");
        @fclose($open); @chmod("kronoss/$nic.txt",0777); }

    }

       //////////////////////// 4 LITAi //////////////////////////////////////////////////////
    
    if ($kaina == '400'){ 
    if ($ko == "kron"){ 
    $kr=$kr+7; 
    $open = @fopen("kronoss/$nic.txt","w");
        @fwrite($open, "$kr");
        @fclose($open); @chmod("kronoss/$nic.txt",0777); }
    }
    
       //////////////////////// 5 LITAi //////////////////////////////////////////////////////
    
    if ($kaina == '500'){ 
    if ($ko == "kron"){ 
    $kr=$kr+10; 
    $open = @fopen("kronoss/$nic.txt","w");
        @fwrite($open, "$kr");
        @fclose($open); @chmod("kronoss/$nic.txt",0777); }
        
    if ($ko == "isr"){ 
$nick = $nic; 
include("icludekitainf/nuskait2.php"); 
$dari[0]="+"; 
$dari[1]=time()+60*60*60*24; 
include("icludekitainf/iras2.php");
}

    if ($ko == "isr2"){ 
$nick = $nic; 
include("icludekitainf/nuskait2.php"); 
$dari[1]=$dari[1]+60*60*60*24; 
include("icludekitainf/iras2.php");
}
    }



                                    } 
                                    
                                    
        $fyyy = @fopen("txt/sms_log.txt","a+"); 
        @fwrite($fyyy,"$siuntejo_nr|$textas|$laikas|$tr_nr|$kaina|\n");
        @fclose($fyyy); 
        $kai = round(($kaina/100),0)+file_get_contents("txt/uzdirbta.txt");
        $fyyyy = @fopen("txt/uzdirbta.txt","w"); 
        @fwrite($fyyyy,"$kai");
        @fclose($fyyyy); 

?>