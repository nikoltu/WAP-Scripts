<?
/*
Copyright (c) Bo Knudsen php@zazz.dk
http://www.zazz.dk
http://www.boligmester.dk
*/
?>
<? header("content-type:text/vnd.wap.wml"); ?> 
<? print '<?xml version="1.0"?>'; ?> 
<? print '<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN"'; ?> 
<? print '"http://www.wapforum.org/DTD/wml_1.1.xml">'; ?> 

<wml> 
<card title="Zazz WAPMail (Zazz)"> 
<p> 
<?
include("serverinfo.inc.php");
$fp = fsockopen($server, $port);
$dummy = fgets($fp, 1024);
fputs($fp, "USER $bruger\r\n");
$dummy = fgets($fp, 1024);
fputs($fp, "PASS $adgangskode\r\n");
$tredjeLinje = fgets($fp, 1024);
fputs($fp, "STAT\r\n");
$mails = fgets($fp, 1024);
$mails = split(" ", $mails);
$no_of_mails = $mails[1];
if (!$showmail)
{
   
   for ($i = 1; $i <= $no_of_mails; $i++)
   {
        fputs($fp, "TOP $i 0\r\n");
        while (substr($linje = fgets($fp, 1024), 0, 2) != chr(13).chr(10)) 
      {
            if (substr($linje, 0, 9) == "Subject: ") 
         {
                $emne = htmlspecialchars(substr($linje, 9));
            }
            if (substr($linje, 0, 6) == "From: ") 
         {
                $fra = htmlspecialchars(substr($linje, 6));
            }
            if (substr($linje, 0, 6) == "Date: ") 
         {
                $dato = htmlspecialchars(substr($linje, 6));
            }
        }
      echo "$i.) <a href=\"$PHP_SELF?showmail=$i\">".$emne."</a><br/>\n";
   }
}
if ($showmail) 
{
   echo "<a href=\"$PHP_SELF\">Tilbage</a> til oversigten.<br/>";
   fputs($fp, "RETR $showmail\r\n");
    $dummy = fgets($fp, 1024);

    while (substr($linje = fgets($fp, 1024), 0, 2) != chr(13).chr(10)) 
   {
        if (substr($linje, 0, 9) == "Subject: ") 
      {
            $emne = htmlspecialchars(substr($linje, 9));
        }
        if (substr($linje, 0, 6) == "From: ") 
      {
            $fra = htmlspecialchars(substr($linje, 6));
        }
        if (substr($linje, 0, 4) == "To: ") 
      {
            $til = htmlspecialchars(substr($linje, 4));
        }
        if (substr($linje, 0, 6) == "Date: ") 
      {
            $dato = htmlspecialchars(substr($linje, 6));
        }
    }
echo "Dato: ".$dato."<br/>\n";
echo "Fra: ".$fra."<br/>\n";
echo "Til: ".$til."<br/>\n";
echo "Emne: ".$emne."<br/>\n";
$posttekst="----------------<br/>";
while (substr($linje = fgets($fp, 1024), 0, 3) != ".".chr(13).chr(10)) 
   {
        $posttekst .= $linje;
    }
    $no_html = strip_tags($posttekst);
   $start = strpos ($no_html, "quoted-printable");
   $start=$start+17;
   $no_htmlstart = substr($no_html, $start);
   $slut=strpos($no_htmlstart, "------=");
   $no_htmlslut= substr($no_html, $start, $slut);
   
   echo "----------------<br/>".$no_htmlslut;
}
?>
</p> 
</card> 
</wml>

