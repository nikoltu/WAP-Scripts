<?


/*






     s8 s9 s0                      r7
     s7     t1 t2               r5 r6
     s6                         r4
     s5 s4 s3 s1 r0 r9 r8 r3 r2 r1 o4
                s2
                t3   u7 u6 u5 u4 u3
                t4                 u2
                t5 t6 t7 t8 t9 t0 u1
*/

if($loc=="u7"){
$lok[0]="u6|I rytus ola";
$secury=0;
}
if($loca=="u7"){
$lokg[0]="u6|I rytus ola";
}

if($loc=="u6"){
$lok[0]="u5|I rytus ola";
$lok[1]="u7|I vakarus ola";
$secury=0;
}
if($loca=="u6"){
$lokg[0]="u5|I rytus ola";
$lokg[1]="u7|I vakarus ola";
}

if($loc=="u5"){
$lok[0]="u4|I rytus ola";
$lok[1]="u6|I vakarus ola";
$secury=0;
}
if($loca=="u5"){
$lokg[0]="u4|I rytus ola";
$lokg[1]="u6|I vakarus ola";
}

if($loc=="u4"){
$lok[0]="u3|I rytus ola";
$lok[1]="u5|I vakarus ola";
$secury=0;
}
if($loca=="u4"){
$lokg[0]="u3|I rytus ola";
$lokg[1]="u5|I vakarus ola";
}

if($loc=="u3"){
$lok[0]="u2|I pietus ola";
$lok[1]="u4|I vakarus ola";
$secury=0;
}
if($loca=="u3"){
$lokg[0]="u2|I pietus ola";
$lokg[1]="u4|I vakarus ola";
}

if($loc=="u2"){
$lok[0]="u1|I pietus ola";
$lok[1]="u3|I &#353;iaure ola";
$secury=0;
}
if($loca=="u2"){
$lokg[0]="u1|I pietus ola";
$lokg[1]="u3|I &#353;iaure ola";
}

if($loc=="u1"){
$lok[0]="t0|I vakarus ola";
$lok[1]="u2|I &#353;iaure ola";
$secury=0;
}
if($loca=="u1"){
$lokg[0]="t0|I vakarus ola";
$lokg[1]="u2|I &#353;iaure ola";
}

if($loc=="t0"){
$lok[0]="t9|I vakarus ola";
$lok[1]="u1|I rytus ola";
$secury=0;
}
if($loca=="t0"){
$lokg[0]="t9|I vakarus ola";
$lokg[1]="u1|I rytus ola";
}

if($loc=="t9"){
$lok[0]="t8|I vakarus ola";
$lok[1]="t0|I rytus ola";
$secury=0;
}
if($loca=="t9"){
$lokg[0]="t8|I vakarus ola";
$lokg[1]="t0|I rytus ola";
}

if($loc=="t8"){
$lok[0]="t7|I vakarus ola";
$lok[1]="t9|I rytus ola";
$secury=0;
}
if($loca=="t8"){
$lokg[0]="t7|I vakarus ola";
$lokg[1]="t9|I rytus ola";
}

if($loc=="t7"){
$lok[0]="t6|I vakarus ola";
$lok[1]="t8|I rytus ola";
$secury=0;
}
if($loca=="t7"){
$lokg[0]="t6|I vakarus ola";
$lokg[1]="t8|I rytus ola";
}

if($loc=="t6"){
$lok[0]="t5|I vakarus ola";
$lok[1]="t7|I rytus ola";
$secury=0;
}
if($loca=="t6"){
$lokg[0]="t5|I vakarus ola";
$lokg[1]="t7|I rytus ola";
}

if($loc=="t5"){
$lok[0]="t4|I &#353;iaure ola";
$lok[1]="t6|I rytus ola";
$secury=0;
}
if($loca=="t5"){
$lokg[0]="t4|I &#353;iaure ola";
$lokg[1]="t6|I rytus ola";
}

if($loc=="t4"){
$lok[0]="t3|I &#353;iaure ola";
$lok[1]="t5|I pietus ola";
$secury=0;
}
if($loca=="t4"){
$lokg[0]="t3|I &#353;iaure ola";
$lokg[1]="t5|I pietus ola";
}

if($loc=="t3"){
$lok[0]="s2|I &#353;iaure ola";
$lok[1]="t4|I pietus ola";
$secury=0;
}
if($loca=="t3"){
$lokg[0]="s2|I &#353;iaure ola";
$lokg[1]="t4|I pietus ola";
}

if($loc=="s2"){
$lok[0]="s1|I &#353;iaure ola";
$lok[1]="t3|I pietus ola";
$secury=0;
}
if($loca=="s2"){
$lokg[0]="s1|I &#353;iaure ola";
$lokg[1]="t3|I pietus ola";
}

if($loc=="t2"){
$lok[0]="t1|I vakarus ola";
$secury=0;
}
if($loca=="t2"){
$lokg[0]="t1|I vakarus ola";
}

if($loc=="t1"){
$lok[0]="s0|I &#353;iaure ola";
$lok[1]="t2|I rytus ola";
$secury=0;
}
if($loca=="t1"){
$lokg[0]="s0|I &#353;iaure ola";
$lokg[1]="t2|I rytus ola";
}

if($loc=="s0"){
$lok[0]="s9|I vakarus ola";
$lok[1]="t1|I pietus ola";
$secury=0;
}
if($loca=="s0"){
$lokg[0]="s9|I vakarus ola";
$lokg[1]="t1|I pietus ola";
}

if($loc=="s9"){
$lok[0]="s8|I vakarus ola";
$lok[1]="s0|I rytus ola";
$secury=0;
}
if($loca=="s9"){
$lokg[0]="s8|I vakarus ola";
$lokg[1]="s0|I rytus ola";
}

if($loc=="s8"){
$lok[0]="s7|I pietus ola";
$lok[1]="s9|I rytus ola";
$secury=0;
}
if($loca=="s8"){
$lokg[0]="s7|I pietus ola";
$lokg[1]="s9|I rytus ola";
}

if($loc=="s7"){
$lok[0]="s6|I pietus ola";
$lok[1]="s8|I &#353;iaure ola";
$secury=0;
}
if($loca=="s7"){
$lokg[0]="s6|I pietus ola";
$lokg[1]="s8|I &#353;iaure ola";
}

if($loc=="s6"){
$lok[0]="s5|I pietus ola";
$lok[1]="s7|I &#353;iaure ola";
$secury=0;
}
if($loca=="s6"){
$lokg[0]="s5|I pietus ola";
$lokg[1]="s7|I &#353;iaure ola";
}

if($loc=="s5"){
$lok[0]="s4|I rytus ola";
$lok[1]="s6|I &#353;iaure ola";
$secury=0;
}
if($loca=="s5"){
$lokg[0]="s4|I rytus ola";
$lokg[1]="s6|I &#353;iaure ola";
}

if($loc=="s4"){
$lok[0]="s3|I rytus ola";
$lok[1]="s5|I vakarus ola";
$secury=0;
}
if($loca=="s4"){
$lokg[0]="s3|I rytus ola";
$lokg[1]="s5|I vakarus ola";
}

if($loc=="s3"){
$lok[0]="s1|I rytus ola";
$lok[1]="s4|I vakarus ola";
$secury=0;
}
if($loca=="s3"){
$lokg[0]="s1|I rytus ola";
$lokg[1]="s4|I vakarus ola";
}

if($loc=="s1"){
$lok[0]="r0|I rytus ola";
$lok[1]="s3|I vakarus ola";
$lok[2]="s2|I pietus ola";
$secury=0;
}
if($loca=="s1"){
$lokg[0]="r0|I rytus ola";
$lokg[1]="s3|I vakarus ola";
$lokg[2]="s2|I pietus ola";
}

if($loc=="r0"){
$lok[0]="r9|I rytus ola";
$lok[1]="s1|I vakarus ola";
$secury=0;
}
if($loca=="r0"){
$lokg[0]="r9|I rytus ola";
$lokg[1]="s1|I vakarus ola";
}

if($loc=="r9"){
$lok[0]="r8|I rytus ola";
$lok[1]="r0|I vakarus ola";
$secury=0;
}
if($loca=="r9"){
$lokg[0]="r8|I rytus ola";
$lokg[1]="r0|I vakarus ola";
}


if($loc=="r8"){
$lok[0]="r3|I rytus ola";
$lok[1]="r9|I vakarus ola";
$secury=0;
}
if($loca=="r8"){
$lokg[0]="r3|I rytus ola";
$lokg[1]="r9|I vakarus ola";
}

if($loc=="r3"){
$lok[0]="r2|I rytus ola";
$lok[1]="r8|I vakarus ola";
$secury=0;
}
if($loca=="r3"){
$lokg[0]="r2|I rytus ola";
$lokg[1]="r8|I vakarus ola";
}


if($loc=="r7"){
$lok[0]="r6|I pietus ola";
$secury=0;
}
if($loca=="r7"){
$lokg[0]="r6|I pietus ola";
}

if($loc=="r6"){
$lok[0]="r5|I vakarus ola";
$lok[1]="r7|I &#353;iaure ola";
$secury=0;
}
if($loca=="r6"){
$lokg[0]="r5|I vakarus ola";
$lokg[1]="r7|I &#353;iaure ola";
}

if($loc=="r5"){
$lok[0]="r4|I pietus ola";
$lok[1]="r6|I rytus ola";
$secury=0;
}
if($loca=="r5"){
$lokg[0]="r4|I pietus ola";
$lokg[1]="r6|I rytus ola";
}

if($loc=="r4"){
$lok[0]="r2|I pietus ola";
$lok[1]="r5|I &#353;iaure ola";
$secury=0;
}
if($loca=="r4"){
$lokg[0]="r2|I pietus ola";
$lokg[1]="r5|I &#353;iature ola";
}

if($loc=="r2"){
$lok[0]="r1|I rytus ola";
$lok[1]="r3|I vakarus ola";
$lok[2]="r4|I &#353;iature ola";
$secury=0;
}
if($loca=="r2"){
$lokg[0]="r1|I rytus ola";
$lokg[1]="r3|I vakarus ola";
$lok[g2]="r4|I &#353;iature ola";
}

if($loc=="r1"){
$lok[0]="o4|I rytus ola";
$lok[1]="r2|I vakarus ola";
$secury=0;
}
if($loca=="r1"){
$lokg[0]="o4|I rytus ola";
$lokg[1]="r2|I vakarus ola";
}

if($loc=="o4"){
$lok[0]="o3|I rytus ola";
$lok[1]="r1|I vakarus ola";
$secury=0;
}
if($loca=="o4"){
$lokg[0]="o3|I rytus ola";
$lokg[1]="r1|I vakarus ola";
}




?>