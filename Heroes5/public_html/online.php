<?
$time = time();
$ontime = $time + 300;
if ($user[time] < $time) {
        $on = $user[time] - $user[login];
        mysql_query("UPDATE users SET llogin='$user[time]', login='$time', time='$ontime', place='$place', online=online+$on WHERE session='$id' LIMIT 1");
}
else {
        mysql_query("UPDATE users SET time='$ontime', place='$place' WHERE session='$id' LIMIT 1");
}


?>