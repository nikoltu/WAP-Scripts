<?
$koks_ip ="".$_SERVER['REMOTE_ADDR']."";
$browser=$_SERVER['HTTP_USER_AGENT'];
$pos=strpos($browser,'/');
if($pos!=0){$browser=substr($browser,0,$pos);}

if("84.15.15.11"== "$koks_ip" && "SIE-M55"== "$browser")
{
            echo "<wml><card title=\"Infomacija\">
    <p><small>Neprisijunges!<br/><br/>popo122@one.com</small><br/></p>

    </card>                                                                
    </wml>";exit;
            }
?>


  
