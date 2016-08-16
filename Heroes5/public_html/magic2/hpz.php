<?


if(($army_trk[$who]<1) and ($army_mag[$who]=="hipnoze")){
mysql_query("DELETE FROM army where username='$battle[heroe]' and magic='hipnoze' and unit='$army_unit[$who]'");
$who=0;
}

mysql_query("UPDATE army SET trk=trk-1 where magic='hipnoze' and username='$battle[heroe]' and unit='$army_unit[$who]'");


?>