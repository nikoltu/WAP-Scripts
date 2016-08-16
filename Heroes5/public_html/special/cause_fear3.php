<?
echo"<small>Jus i&#353;sigandes tod&#279;l praleidote &#279;jim&#261;</small><br/>";
mysql_query("update army set fear='0' where unit='$army_unit[$who]' and username='$battle[heroe]'");
?>