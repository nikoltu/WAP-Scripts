<?php
function level($lvl) {
        $level[1] = 1000;
        $level[2] = 2000;
        $level[3] = 3200;
        $level[4] = 4600;
        $level[5] = 6200;
        $level[6] = 8000;
        $level[7] = 10000;
        $level[8] = 12200;
        $level[9] = 14700;
        $level[10] = 17500;
        $level[11] = 20600;
        $level[12] = 24320;
        $level[13] =34320;
        for ($l = 13; $l <= $lvl; $l++) {
                $d = $level[$l-1] - $level[$l-2];
                $level[$l] = floor($d * 1.2) + $level[$l-1];
        }
        return $level;
}
?>