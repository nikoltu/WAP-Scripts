<?php

class cViktorina
{
    var $klausimai  = "viktorinos_klausimai";
    var $table      = "viktorina";
    var $start      = 0;

    var $chat;
    var $chans;
    var $users;
    var $vstats;

    var $cid;
    var $pagalba;

    function cViktorina($cid)
    {
        $this->cid      = $cid;


        if ($this->Klausimas())
        {
            $this->start = 1;
            $this->Chek();
        }
    }

    function start()
    {
        if (!$this->start)
        {
            //$this->chat->chan_send($this->cid, "Prasideda viktorina!", 0, 1);
            $this->Naujas();
            $this->start = 1;
        }
    }

    function stop()
    {
        if ($this->start)
        {
            mysql_query("INSERT INTO `achat`
                SET   nick = '!@SYS',
                    text = 'Viktorina sustabdyta!'") or die(mysql_error());
            //mysql_query("insert into wapchat (mynick,mymess,messtime,kanalas) values ('!Sys','',".time().",'viktorina'");
            mysql_query("DELETE FROM `{$this->table}` WHERE cid = {$this->cid}");
            $this->start = 0;
        }
    }
 function error($func, $msg)
    {
        error("cViktorina::$func(): $msg");
    }

    function Klausimas()
    {   //SELECT * FROM viktorina LEFT JOIN viktorinos_klausimai ON (viktorina.id = viktorinos_klausimai.id) GROUP BY viktorina.id HAVING viktorina.cid = 2
        $sql = mysql_query("SELECT 
                              *
                            FROM 
                                $this->table
                            LEFT JOIN $this->klausimai ON ($this->table.id = $this->klausimai.id)
                            GROUP BY $this->table.id
                            HAVING $this->table.cid = $this->cid")
                    or $this->error("Klausimas", "sql klaida: ".mysql_error());
        return mysql_fetch_assoc($sql);
    }

    function Naujas()
    {
        //if ($klausimas = $this->Klausimas()) && ($klausimas['time']+)
            
        $result = mysql_query("SELECT * FROM `$this->klausimai` ORDER BY RAND() LIMIT 1") 
                or $this->error("Naujas", "sql klaida " . mysql_error());
        $kl = mysql_fetch_assoc($result);

        if ($this->Klausimas())
            mysql_query("UPDATE `$this->table`
                    SET
                        id = '{$kl['id']}',
                        ats = '".preg_replace('/[^\s]/', '*', $kl['atsakymas'])."',
                        time = " . time() . ",
                        new = 0
                    WHERE
                        cid = $this->cid
                ") or $this->error("Naujas", "sql klaida " . mysql_error());
        else
            mysql_query("INSERT INTO `$this->table`
                    SET   id = '{$kl['id']}',
                        cid = '{$this->cid}',
                        ats = '".preg_replace('/[^\s]/', '*', $kl['atsakymas'])."',
                        time = " . time() . ",
                        new = 0
                ") or $this->error("Naujas", "sql klaida: " . mysql_error());//str_repeat("*", strlen($kl['atsakymas']))
    }
    function ShowChr()
    {
        $klausimas = $this->Klausimas();
        $nats = $klausimas['ats'];
        //$string = preg_replace('/[A-z0-1]/', '*', $string); //A-z0-1
        //$string = preg_replace('/[^\s]/', '*', $string); //visi isskyrus tarpa
        if (substr_count($nats, '*') > 1)
        {
            while (substr_count($klausimas['ats'], '*') == substr_count($nats, '*'))
            {
                $i = rand(0,strlen($nats));
                if ($nats{$i} == '*') {
                    $nats{$i} = $klausimas['atsakymas']{$i};
                }
            }
            mysql_query("UPDATE `$this->table` SET ats = '{$nats}', time = ".time()." WHERE cid = $this->cid")
                or $this->error("ShowChr", "sql klaida " . mysql_error());
            $all = 0;
            while ($all < ceil(strlen(preg_replace('/[\s]/', '', $nats)) / 2)) $all=$all+1;//round(strlen($nats) / 2)
            //$this->chat->chan_send($this->cid, "Pagalba(".(strlen(preg_replace('/[\s]/', '', $nats)) - substr_count($nats, '*'))."/".$all."): {$nats}", 0, 1);
        }
        else
        {
            mysql_query("INSERT INTO `achat`
                SET   nick = '!@SYS',
                    text = 'Niekas neatsak&#279; teisingai. Atsakymas: {$klausimas['atsakymas']}'") or die(mysql_error());
            //mysql_query("insert into wapchat (mynick,mymess,messtime,kanalas) values ('!Sys','Niekas neatsake, atsakymas: {$klausimas['atsakymas']}',".time().",'viktorina'");
            mysql_query("UPDATE `$this->table` SET new = 1, time = ".time()." WHERE cid = {$this->cid}")
                    or $this->error("ShowChr", "sql klaida " . mysql_error());
        }
 }   

    function Chek()
    {
        if ($klinfo = $this->Klausimas())
        {
            if (($klinfo['new']) && ($klinfo['time']+30 < time()))
                $this->Naujas();
            elseif ((!$klinfo['new']) && ($klinfo['time']+14 < time()))
                $this->ShowChr();
        }
    }

    function TikrintiAtsakyma($atsakymas='')
    {
        if ($klinfo = $this->Klausimas())
        {
            $atsakymas = strtoupper($atsakymas);
            if ((!$klinfo['new']) && (strtoupper($klinfo['atsakymas']) == strtoupper($atsakymas)))
            {
$id=$_GET['id'];
$user=mysql_fetch_array(mysql_query("SELECT * FROM users where session='{$id}'"));
mysql_query("UPDATE users SET point=point+1,gold=gold+30 where username='$user[username]'");
$msg="gavo 30 aukso";                
                
                
                if(($user[point]+1 == "100") or ($user[point]+1 == "200") or ($user[point]+1 == "300") or ($user[point]+1 == "400") or ($user[point]+1 == "500") or ($user[point]+1 == "600") or ($user[point]+1 == "700") or ($user[point]+1 == "800") or ($user[point]+1 == "900") or ($user[point]+1 == "1000") or ($user[point]+1 == "1100") or ($user[point]+1 == "1200") or ($user[point]+1 == "1300") or ($user[point]+1 == "1400") or ($user[point]+1 == "1500") or ($user[point]+1 == "1600") or ($user[point]+1 == "1700") or ($user[point]+1 == "1800") or ($user[point]+1 == "1900") or ($user[point]+1 == "2000")) { 
mysql_query("UPDATE users SET kred=kred+1 where username='$user[username]'");
$msg="$msg bei <b>1 kredit&#261;!</b>";
}
                
                //$this->vstats->inc($user['id'], 1, $klinfo['taskai']);

$wisp=$user[point]+1;
                mysql_query("INSERT INTO `achat`
                    SET   nick = '!@SYS',
                        text = '$user[username]($wisp) atsak&#279; teisingai ir $msg.Atsakymas: {$klinfo['atsakymas']}'") or die(mysql_error());
                mysql_query("UPDATE `$this->table` SET new = 1, time = ".time()." WHERE cid = {$this->cid}")
                    or $this->error("TikrintiAtsakyma", "sql klaida " . mysql_error());
            }
        }
    }
}

class cViktorinaStats
{
    var $table = "vstats";


    
    function error($func, $msg)
    {
        error("cViktorinaStats::$func(): $msg");
    }
    
    function Pradeti($id)
    {
        $sql = mysql_query("SELECT * FROM `$this->table` WHERE id='{$id}'");
        $stats = mysql_fetch_assoc($sql);
        if (!$stats)
            mysql_query("INSERT INTO `$this->table` SET id = '{$id}', taskai = ''") 
                    or $this->error("Pradeti", "sql klaida: " . mysql_error());
        else
            return $stats['taskai'];
    }
    
    function GetCount($str)
    {
        $array = explode(';', $str);
        for ($i = 0; $i < count($array); $i = $i + 1)
        {
            $tmp = explode(':', $array[$i]);
            $count[$tmp[0]] = $tmp[1];
        }
        return $count;
    }
    
    function Count($id,$cid='')
    {
        $duom = $this->pradeti($id);
        if ($duom)
            $count = $this->GetCount($duom);
        if ($count)
        {
            if ($cid)
                $all = $count[$cid];
            else
            {
                $all=0;
                foreach($count as $value)
                    $all = $all + $value;
            }
        }
        else
            $all = 0;
            
        return $all;
    }


    function top($cid='')
    {
        $sql = mysql_query("SELECT * FROM `users`")
                or error(mysql_error());
        
        $list = array();
        while ($row = mysql_fetch_assoc($sql))
        {
            $tmplist[$row['username']] = $this->Count($row['ID'], $cid);
        }
        
        arSort($tmplist);
        Reset($tmplist);
        
        while(list($key, $val) = each($tmplist))
           $list[] = array('nick' => $key,'taskai' => $val);
        
        $i=0;
        
        while(($list[$i]['nick']) && ($i<10))
        {
            $topas .= ($i + 1).". {$list[$i]['nick']}({$list[$i]['taskai']}) ";
            $i = $i +1;
        }
        return "Viktorinos top10: ".$topas;
    }

    function inc($id,$cid,$taskai=1)
    {
        $duom = $this->pradeti($id);
        if ($duom)
            $count = $this->GetCount($duom);
            
        $count[$cid] = $count[$cid] + $taskai;
        foreach($count as $key=>$value)
            $zinute .= $key.":".$value.";";
        $taskai = substr($zinute, 0, -1);
           
        mysql_query("UPDATE `$this->table` SET taskai = '{$taskai}' WHERE id = {$id}");
    }
}
?>


  
