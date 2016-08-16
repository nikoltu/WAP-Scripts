<?
include_once("loc4.php");
/*
               v5
               v4 v3 v2 v1 u0 u9 u8
                                   q0
                         q7       q9
                         q6       q8
                  p0 q1 q2 q3 q4 q5
     p4 p3       p9
        p2       p8          n2  n1 m0
     o0 p1       p7           n3     m9
     o9          p6           n4     m8
     o8 o7       p5          n5 n6 [m7
        o6       n9                 m6 
        o5       n8   m1 m2 m3 m4 m5  o4 o3 o2 o1 n0 n7   l0
                  l7 l8 l9
                 [j2]
*/

if($loc=="o3"){
$lok[0]="o2|I rytus ola";
$lok[1]="o4|I vakarus ola";
$secury=0;
}
if($loca=="o3"){
$lokg[0]="o2|I rytus ola";
$lokg[1]="o4|I vakarus ola";
}

if($loc=="p4"){
$lok[0]="p3|I rytus ola";
$secury=0;
}
if($loca=="p4"){
$lokg[0]="p3|I rytus ola";
}

if($loc=="p3"){
$lok[0]="p2|I pietus ola";
$lok[1]="p4|I vakarus ola";
$secury=0;
}
if($loca=="p3"){
$lokg[0]="p2|I pietus ola";
$lokg[1]="p4|I vakarus ola";
}

if($loc=="p2"){
$lok[0]="p1|I pietus ola";
$lok[1]="p3|I &#353;iaure ola";
$secury=0;
}
if($loca=="p2"){
$lokg[0]="p1|I pietus ola";
$lokg[1]="p3|I &#353;iaure ola";
}

if($loc=="p1"){
$lok[0]="o0|I vakarus ola";
$lok[1]="p2|I &#353;iaure ola";
$secury=0;
}
if($loca=="p1"){
$lokg[0]="o0|I vakarus ola";
$lokg[1]="p2|I &#353;iaure ola";
}

if($loc=="o0"){
$lok[0]="o9|I pietus ola";
$lok[1]="p1|I rytus ola";
$secury=0;
}
if($loca=="o0"){
$lokg[0]="o9|I pietus ola";
$lokg[1]="p1|I rytus ola";
}

if($loc=="o9"){
$lok[0]="o8|I pietus ola";
$lok[1]="o0|I &#353;iaure ola";
$secury=0;
}
if($loca=="o9"){
$lokg[0]="o8|I pietus ola";
$lokg[1]="o0|I &#353;iaure ola";
}

if($loc=="o8"){
$lok[0]="o7|I rytus ola";
$lok[1]="o9|I &#353;iaure ola";
$secury=0;
}
if($loca=="o8"){
$lokg[0]="o7|I rytus ola";
$lokg[1]="o9|I &#353;iaure ola";
}


if($loc=="o7"){
$lok[0]="o6|I pietus ola";
$lok[1]="o8|I vakarus ola";
$secury=0;
}
if($loca=="o7"){
$lokg[0]="o6|I pietus ola";
$lokg[1]="o8|I vakarus ola";
}

if($loc=="o6"){
$lok[0]="o5|I pietus ola";
$lok[1]="o7|I &#353;iaure ola";
$secury=0;
}
if($loca=="o6"){
$lokg[0]="o5|I pietus ola";
$lokg[1]="o7|I &#353;iaure ola";
}

if($loc=="o5"){
$lok[0]="o2|I pietus ola";
$lok[1]="o6|I &#353;iaure ola";
$secury=0;
}
if($loca=="o5"){
$lokg[0]="o2|I pietus ola";
$lokg[1]="o6|I &#353;iaure ola";
}

if($loc=="o2"){
$lok[0]="o1|I rytus ola";
$lok[1]="o3|I vakarus ola";
$lok[2]="o5|I &#353;iaure ola";
$secury=0;
}
if($loca=="o2"){
$lokg[0]="o1|I rytus ola";
$lokg[1]="o3|I vakarus ola";
$lokg[2]="o5|I &#353;iaure ola";
}

if($loc=="o1"){
$lok[0]="n0|I rytus ola";
$lok[1]="o2|I vakarus ola";
$secury=0;
}
if($loca=="o1"){
$lokg[0]="n0|I rytus ola";
$lokg[1]="o2|I vakarus ola";
}


if($loc=="n0"){
$lok[0]="n7|I rytus ola";
$lok[1]="o1|I vakarus ola";
$secury=0;
}
if($loca=="n0"){
$lokg[0]="n7|I rytus ola";
$lokg[1]="o1|I vakarus ola";
}

if($loc=="v5"){
$lok[0]="v4|I pietus ola";
$secury=0;
}
if($loca=="v5"){
$lokg[0]="v4|I pietus ola";
}

if($loc=="v4"){
$lok[0]="v3|I rytus ola";
$lok[1]="v5|I &#353;iaure ola";
$secury=0;
}
if($loca=="v4"){
$lokg[0]="v3|I rytus ola";
$lokg[1]="v5|I &#353;iaure ola";
}

if($loc=="v3"){
$lok[0]="v2|I rytus ola";
$lok[1]="v4|I vakarus ola";
$secury=0;
}
if($loca=="v3"){
$lokg[0]="v2|I rytus ola";
$lokg[1]="v4|I vakarus ola";
}

if($loc=="v2"){
$lok[0]="v1|I rytus ola";
$lok[1]="v3|I vakarus ola";
$secury=0;
}
if($loca=="v2"){
$lokg[0]="v1|I rytus ola";
$lokg[1]="v3|I vakarus ola";
}

if($loc=="v1"){
$lok[0]="u0|I rytus ola";
$lok[1]="v2|I vakarus ola";
$secury=0;
}
if($loca=="v1"){
$lokg[0]="u0|I rytus ola";
$lokg[1]="v2|I vakarus ola";
}

if($loc=="u0"){
$lok[0]="u9|I rytus ola";
$lok[1]="v1|I vakarus ola";
$secury=0;
}
if($loca=="u0"){
$lokg[0]="u9|I rytus ola";
$lokg[1]="v1|I vakarus ola";
}

if($loc=="u9"){
$lok[0]="u8|I rytus ola";
$lok[1]="u0|I vakarus ola";
$secury=0;
}
if($loca=="u9"){
$lokg[0]="u8|I rytus ola";
$lokg[1]="u0|I vakarus ola";
}

if($loc=="u8"){
$lok[0]="q0|I pietus ola";
$lok[1]="u9|I vakarus ola";
$secury=0;
}
if($loca=="u8"){
$lokg[0]="q0|I pietus ola";
$lokg[1]="u9|I vakarus ola";
}

if($loc=="q0"){
$lok[0]="q9|I pietus ola";
$lok[1]="u8|I &#353;iaure ola";
$secury=0;
}
if($loca=="q0"){
$lokg[0]="q9|I pietus ola";
$lokg[1]="u8|I &#353;iaure ola";
}

if($loc=="q9"){
$lok[0]="q8|I pietus ola";
$lok[1]="q0|I &#353;iaure ola";
$secury=0;
}
if($loca=="q9"){
$lokg[0]="q8|I pietus ola";
$lokg[1]="q0|I &#353;iaure ola";
}

if($loc=="q8"){
$lok[0]="q5|I pietus ola";
$lok[1]="q9|I &#353;iaure ola";
$secury=0;
}
if($loca=="q8"){
$lokg[0]="q5|I pietus ola";
$lokg[1]="q9|I &#353;iaure ola";
}

if($loc=="q5"){
$lok[0]="q4|I vakarus ola";
$lok[1]="q8|I &#353;iaure ola";
$secury=0;
}
if($loca=="q5"){
$lokg[0]="q4|I vakarus ola";
$lokg[1]="q8|I &#353;iaure ola";
}

if($loc=="q4"){
$lok[0]="q3|I vakarus ola";
$lok[1]="q5|I rytus ola";
$secury=0;
}
if($loca=="q4"){
$lokg[0]="q3|I vakarus ola";
$lokg[1]="q5|I rytus ola";
}

if($loc=="q3"){
$lok[0]="q2|I vakarus ola";
$lok[1]="q4|I rytus ola";
$secury=0;
}
if($loca=="q3"){
$lokg[0]="q2|I vakarus ola";
$lokg[1]="q4|I rytus ola";
}


if($loc=="q7"){
$lok[0]="q6|I pietus ola";
$secury=0;
}
if($loca=="q7"){
$lokg[0]="q6|I pietus ola";
}

if($loc=="q6"){
$lok[0]="q2|I pietus ola";
$lok[1]="q7|I &#353;iaure ola";
$secury=0;
}
if($loc=="q6"){
$lokg[0]="q2|I pietus ola";
$lokg[1]="q7|I &#353;iaure ola";
}


if($loc=="q2"){
$lok[0]="q1|I vakarus ola";
$lok[1]="q3|I rytus ola";
$lok[2]="q6|I &#353;iaure ola";
$secury=0;
}
if($loca=="q2"){
$lokg[0]="q1|I vakarus ola";
$lokg[1]="q3|I rytus ola";
$lokg[2]="q6|I &#353;iaure ola";
}


if($loc=="q1"){
$lok[0]="p0|I vakarus ola";
$lok[1]="q2|I rytus ola";
$secury=0;
}
if($loca=="q1"){
$lokg[0]="p0|I vakarus ola";
$lokg[1]="q2|I rytus ola";
}


if($loc=="p0"){
$lok[0]="p9|I pietus ola";
$lok[1]="q1|I rytus ola";
$secury=0;
}
if($loca=="p0"){
$lokg[0]="p9|I pietus ola";
$lokg[1]="q1|I rytus ola";
}


if($loc=="p9"){
$lok[0]="p8|I pietus ola";
$lok[1]="p0|I &#353;iaure ola";
$secury=0;
}
if($loca=="p9"){
$lokg[0]="p8|I pietus ola";
$lokg[1]="p0|I &#353;iaure ola";
}

if($loc=="p8"){
$lok[0]="p7|I pietus ola";
$lok[1]="p9|I &#353;iaure ola";
$secury=0;
}
if($loca=="p8"){
$lokg[0]="p7|I pietus ola";
$lokg[1]="p9|I &#353;iaure ola";
}


if($loc=="p7"){
$lok[0]="p6|I pietus ola";
$lok[1]="p8|I &#353;iaure ola";
$secury=0;
}
if($loca=="p7"){
$lokg[0]="p6|I pietus ola";
$lokg[1]="p8|I &#353;iaure ola";
}

if($loc=="p6"){
$lok[0]="p5|I pietus ola";
$lok[1]="p7|I &#353;iaure ola";
$secury=0;
}
if($loca=="p6"){
$lokg[0]="p5|I pietus ola";
$lokg[1]="p7|I &#353;iaure ola";
}


if($loc=="p5"){
$lok[0]="n9|I pietus ola";
$lok[1]="p6|I &#353;iaure ola";
$secury=0;
}
if($loca=="p5"){
$lokg[0]="n9|I pietus ola";
$lokg[1]="p6|I &#353;iaure ola";
}

if($loc=="n9"){
$lok[0]="n8|I pietus ola";
$lok[1]="p5|I &#353;iaure ola";
$secury=0;
}
if($loca=="n9"){
$lokg[0]="n8|I pietus ola";
$lokg[1]="p5|I &#353;iaure ola";
}


if($loc=="n8"){
$lok[0]="n7|I pietus ola";
$lok[1]="n9|I &#353;iaure ola";
$secury=0;
}
if($loca=="n8"){
$lokg[0]="n7|I pietus ola";
$lokg[1]="n9|I &#353;iaure ola";
}

if($loc=="n7"){
$lok[0]="n0|I vakarus ola";
$lok[1]="l7|I pietus ola";
$lok[2]="n8|I &#353;iaure ola";
$secury=0;
}
if($loca=="n7"){
$lokg[0]="n0|I vakarus ola";
$lokg[1]="l7|I pietus ola";
$lokg[2]="n8|I &#353;iaure ola";
}

if($loc=="n6"){
$lok[0]="n5|I vakarus ola";
$secury=0;
}
if($loca=="n6"){
$lokg[0]="n5|I vakarus ola";
}

if($loc=="n5"){
$lok[0]="n6|I rytus ola";
$lok[1]="n4|I &#353;iaure ola";
$secury=0;
}
if($loca=="n5"){
$lokg[0]="n6|I rytus ola";
$lokg[1]="n4|I &#353;iaure ola";
}

if($loc=="n4"){
$lok[0]="n5|I pietus ola";
$lok[1]="n3|I &#353;iaure ola";
$secury=0;
}
if($loca=="n4"){
$lokg[0]="n5|I pietus ola";
$lokg[1]="n3|I &#353;iaure ola";
}


if($loc=="n3"){
$lok[0]="n4|I pietus ola";
$lok[1]="n2|I &#353;iaure ola";
$secury=0;
}
if($loca=="n3"){
$lokg[0]="n4|I pietus ola";
$lokg[1]="n2|I &#353;iaure ola";
}


if($loc=="n2"){
$lok[0]="n1|I rytus ola";
$lok[1]="n3|I pietus ola";
$secury=0;
}
if($loca=="n2"){
$lokg[0]="n1|I rytus ola";
$lokg[1]="n3|I pietus ola";
}


if($loc=="n1"){
$lok[0]="m0|I rytus ola";
$lok[1]="n2|I vakarus ola";
$secury=0;
}
if($loca=="n1"){
$lokg[0]="m0|I rytus ola";
$lokg[1]="n2|I vakarus ola";
}

if($loc=="m0"){
$lok[0]="m9|I pietus ola";
$lok[1]="n1|I vakarus ola";
$secury=0;
}
if($loca=="m0"){
$lokg[0]="m9|I pietus ola";
$lokg[1]="n1|I vakarus ola";
}


if($loc=="m9"){
$lok[0]="m8|I pietus ola";
$lok[1]="m0|I &#353;iaure ola";
$secury=0;
}
if($loca=="m9"){
$lokg[0]="m8|I pietus ola";
$lokg[1]="m0|I &#353;iaure ola";
}


if($loc=="m8"){
$lok[0]="m7|I pietus ola";
$lok[1]="m9|I &#353;iaure ola";
$secury=0;
}
if($loca=="m8"){
$lokg[0]="m7|I pietus ola";
$lokg[1]="m9|I &#353;iaure ola";
}

if($loc=="m7"){
$lok[0]="m6|I pietus ola";
$lok[1]="m8|I &#353;iaure ola";
$secury=0;
}
if($loca=="m7"){
$lokg[0]="m6|I pietus ola";
$lokg[1]="m8|I &#353;iaure ola";
}

if($loc=="m6"){
$lok[0]="m5|I pietus ola";
$lok[1]="m7|I &#353;iaure ola";
$secury=0;
}
if($loca=="m6"){
$lokg[0]="m5|I pietus ola";
$lokg[1]="m7|I &#353;iaure ola";
}

if($loc=="m5"){
$lok[0]="m4|I vakarus ola";
$lok[1]="m6|I &#353;iaure ola";
$secury=0;
}
if($loca=="m5"){
$lokg[0]="m4|I rytus ola";
$lokg[1]="m6|I &#353;iaure ola";
}

if($loc=="m4"){
$lok[0]="m3|I vakarus ola";
$lok[1]="m5|I rytus ola";
$secury=0;
}
if($loca=="m4"){
$lokg[0]="m3|I vakarus ola";
$lokg[1]="m5|I rytus ola";
}

if($loc=="m3"){
$lok[0]="m2|I vakarus ola";
$lok[1]="m4|I rytus ola";
$secury=0;
}
if($loca=="m3"){
$lokg[0]="m2|I vakarus ola";
$lokg[1]="m4|I rytus ola";
}



if($loc=="m2"){
$lok[0]="m1|I vakarus ola";
$lok[1]="m3|I rytus ola";
$secury=0;
}
if($loca=="m2"){
$lokg[0]="m1|I vakarus ola";
$lokg[1]="m3|I rytus ola";
}

if($loc=="m1"){
$lok[0]="l0|I pietus ola";
$lok[1]="m2|I rytus ola";
$secury=0;
}
if($loca=="m1"){
$lokg[0]="l0|I pietus ola";
$lokg[1]="m2|I rytus ola";
}

if($loc=="l0"){
$lok[0]="l9|I pietus ola";
$lok[1]="m1|I &#353;iaure ola";
$secury=0;
}
if($loca=="l0"){
$lokg[0]="l9|I pietus ola";
$lokg[1]="m1|I &#353;iaure ola";
}

if($loc=="l9"){
$lok[0]="l8|I vakarus ola";
$lok[1]="l0|I &#353;iaure ola";
$secury=0;
}
if($loca=="l9"){
$lokg[0]="l8|I vakarus ola";
$lokg[1]="l0|I &#353;iaure ola";
}

if($loc=="l8"){
$lok[0]="l9|I rytus ola";
$lok[1]="l7|I vakarus ola";
$secury=0;
}
if($loca=="l8"){
$lokg[0]="l9|I rytus ola";
$lokg[1]="l7|I vakarus ola";
}

if($loc=="l7"){
$lok[0]="l8|I rytus ola";
$lok[1]="j2|I pietus prie i&#353;plaukimo i&#353; olos";
$lok[2]="n7|I &#353;iaure ola";
$secury=0;
}
if($loca=="l7"){
$lokg[0]="l8|I rytus ola";
$lokg[1]="j2|I pietus prie i&#353;plaukimo i&#353; olos";
$lokg[2]="n7|I &#353;iaure ola";
}



if($loc=="j2"){
$lok[0]="k2|Plaukti i&#353; olos";
$lok[1]="l7|Ola i &#353;iaure";
$secury=0;
}
if($loca=="j2"){
$lokg[0]="k2|Plaukti i&#353; olos";
$lokg[1]="l7|Ola i &#353;iaure";
}


?>