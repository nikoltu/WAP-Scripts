<?
include_once("include/loc2.php");

/*

                                  a20
                         a17 a18 a19
                    a15 a16
                    a14 
                    a11 a12 a13
              a1        a10
a2 a3 a4 a5 a6 a7 a8 a9 a0 b1 f2 f3

b2 b3       b6 b7 b8  b9 b0 c1 f4 f5

c2 c3 [c4   c6 c7 c8 c9 c0 d1 f6 f7

d2 d3 d4 d5 d6 d7 d8 d9 d0 e1 f8 f9

e2 e3 e4 e5 e6 e7 e8 e9 e0 f1 f0 g1
*/

if($loc=="f8"){
$lok[0]="f9|I rytus";
$lok[1]="f0|I pietus";
$lok[2]="e1|I vakarus";
$lok[3]="f6|I &#353;iaure";
$secury=0;
}
if($loca=="f8"){
$lokg[0]="f9|I rytus";
$lokg[1]="f0|I pietus";
$lokg[2]="e1|I vakarus";
$lokg[3]="f6|I &#353;iaure";
}


if($loc=="f6"){
$lok[0]="f7|I rytus";
$lok[1]="f8|I pietus";
$lok[2]="d1|I vakarus";
$lok[3]="f4|I &#353;iaure";
$secury=0;
}
if($loca=="f6"){
$lokg[0]="f7|I rytus";
$lokg[1]="f8|I pietus";
$lokg[2]="d1|I vakarus";
$lokg[3]="f4|I &#353;iaure";
}



if($loc=="f4"){
$lok[0]="f5|I rytus";
$lok[1]="f6|I pietus";
$lok[2]="c1|I vakarus";
$lok[3]="f2|I &#353;iaure";
$secury=0;
}
if($loca=="f4"){
$lokg[0]="f5|I rytus";
$lokg[1]="f6|I pietus";
$lokg[2]="c1|I vakarus";
$lokg[3]="f2|I &#353;iaure";
}



if($loc=="f2"){
$lok[0]="f3|I rytus";
$lok[1]="f4|I pietus";
$lok[2]="b1|I vakarus";
$secury=0;
}
if($loca=="f2"){
$lokg[0]="f3|I rytus";
$lokg[1]="f4|I pietus";
$lokg[2]="b1|I vakarus";
}


if($loc=="e1"){
$lok[0]="f8|I rytus";
$lok[1]="f1|I pietus";
$lok[2]="d0|I vakarus";
$lok[3]="d1|I &#353;iaure";
$secury=0;
}
if($loca=="e1"){
$lokg[0]="f8|I rytus";
$lokg[1]="f1|I pietus";
$lokg[2]="d0|I vakarus";
$lokg[3]="d1|I &#353;iaure";
}


if($loc=="d1"){
$lok[0]="f6|I rytus";
$lok[1]="e1|I pietus";
$lok[2]="c0|I vakarus";
$lok[3]="c1|I &#353;iaure";
$secury=0;
}
if($loca=="d1"){
$lokg[0]="f6|I rytus";
$lokg[1]="e1|I pietus";
$lokg[2]="c0|I vakarus";
$lokg[3]="c1|I &#353;iaure";
}

if($loc=="c1"){
$lok[0]="f4|I rytus";
$lok[1]="d1|I pietus";
$lok[2]="b0|I vakarus";
$lok[3]="b1|I &#353;iaure prie kranto";
$secury=0;
}
if($loca=="c1"){
$lokg[0]="f4|I rytus";
$lokg[1]="d1|I pietus";
$lokg[2]="b0|I vakarus";
$lokg[3]="b1|I &#353;iaure prie kranto";
}

if($loc=="b1"){
$lok[0]="f2|I rytus pagal krant&#261;";
$lok[1]="c1|I pietus";
$lok[2]="a0|I vakarus";
$secury=0;
}
if($loca=="b1"){
$lokg[0]="f2|I rytus pagal krant&#261;";
$lokg[1]="c1|I pietus";
$lokg[2]="a0|I vakarus";
}


if($loc=="d0"){
$lok[0]="e1|I rytus";
$lok[1]="e0|I pietus";
$lok[2]="d9|I vakarus";
$lok[3]="c0|I &#353;iaure";
$secury=0;
}
if($loca=="d0"){
$lokg[0]="e1|I rytus";
$lokg[1]="e0|I pietus";
$lokg[2]="d9|I vakarus";
$lokg[3]="c0|I &#353;iaure";
}


if($loc=="d9"){
$lok[0]="d0|I rytus";
$lok[1]="e9|I pietus";
$lok[2]="d8|I vakarus";
$lok[3]="c9|I &#353;iaure";
$secury=0;
}
if($loca=="d9"){
$lokg[0]="d0|I rytus";
$lokg[1]="e9|I pietus";
$lokg[2]="d8|I vakarus";
$lokg[3]="c9|I &#353;iaure";
}


if($loc=="d8"){
$lok[0]="d9|I rytus";
$lok[1]="e8|I pietus";
$lok[2]="d7|I vakarus";
$lok[3]="c8|I &#353;iaure";
$secury=0;
}
if($loca=="d8"){
$lokg[0]="d9|I rytus";
$lokg[1]="e8|I pietus";
$lokg[2]="d7|I vakarus";
$lokg[3]="c8|I &#353;iaure";
}


if($loc=="d7"){
$lok[0]="d8|I rytus";
$lok[1]="e7|I pietus";
$lok[2]="d6|I vakarus";
$lok[3]="c7|I &#353;iaure";
$secury=0;
}
if($loca=="d7"){
$lokg[0]="d8|I rytus";
$lokg[1]="e7|I pietus";
$lokg[2]="d6|I vakarus";
$lokg[3]="c7|I &#353;iaure";
}


if($loc=="d6"){
$lok[0]="d7|I rytus";
$lok[1]="e6|I pietus";
$lok[2]="d5|I vakarus prie salos";
$lok[3]="c6|I &#353;iaure prie salos";
$secury=1;
}
if($loca=="d6"){
$lokg[0]="d7|I rytus";
$lokg[1]="e6|I pietus";
$lokg[2]="d5|I vakarus prie salos";
$lokg[3]="c6|I &#353;iaure prie salos";
}

/// part 1




if($loc=="d5"){
$lok[0]="d6|I rytus";
$lok[1]="e5|I pietus";
$lok[2]="d4|I vakarus";
$secury=1;
}
if($loca=="d5"){
$lokg[0]="d6|I rytus";
$lokg[1]="e5|I pietus";
$lokg[2]="d4|I vakarus";
}



if($loc=="d4"){
$lok[0]="c4|I&#353;lipti saloje";
$lok[1]="d5|I rytus palei sala";
$lok[2]="e4|I pietus";
$lok[3]="d3|I vakarus";
$secury=1;
}
if($loca=="d4"){
$lokg[0]="c4|I&#353;lipti saloje";
$lokg[1]="d5|I rytus palei sala";
$lokg[2]="e4|I pietus";
$lokg[3]="d3|I vakarus";
}



if($loc=="d3"){
$lok[0]="c3|I &#353;iaure";
$lok[1]="d4|I rytus prie prieplaukos";
$lok[2]="e3|I pietus";
$lok[3]="d2|I vakarus";
$secury=1;
}
if($loca=="d3"){
$lokg[0]="c3|I &#353;iaure";
$lokg[1]="d4|I rytus prie prieplaukos";
$lokg[2]="e3|I pietus";
$lokg[3]="d2|I vakarus";
}




if($loc=="d2"){
$lok[0]="c2|I &#353;iaure";
$lok[1]="d3|I rytus";
$lok[2]="e2|I pietus";
$secury=0;
}
if($loca=="d2"){
$lokg[0]="c2|I &#353;iaure";
$lokg[1]="d3|I rytus";
$lokg[2]="e2|I pietus";
}



if($loc=="c0"){
$lok[0]="b0|I &#353;iaure";
$lok[1]="d1|I rytus";
$lok[2]="d0|I pietus";
$lok[3]="c9|I vakarus";
$secury=0;
}
if($loca=="c0"){
$lokg[0]="b0|I &#353;iaure";
$lokg[1]="d1|I rytus";
$lokg[2]="d0|I pietus";
$lokg[3]="c9|I vakarus";
}



if($loc=="c9"){
$lok[0]="b9|I &#353;iaure";
$lok[1]="c0|I rytus";
$lok[2]="d9|I pietus";
$lok[3]="c8|I vakarus";
$secury=0;
}
if($loca=="c9"){
$lokg[0]="b9|I &#353;iaure";
$lokg[1]="c0|I rytus";
$lokg[2]="d9|I pietus";
$lokg[3]="c8|I vakarus";
}



if($loc=="c8"){
$lok[0]="b8|I &#353;iaure";
$lok[1]="c9|I rytus";
$lok[2]="d8|I pietus";
$lok[3]="c7|I vakarus";
$secury=0;
}
if($loca=="c8"){
$lokg[0]="b8|I &#353;iaure";
$lokg[1]="c9|I rytus";
$lokg[2]="d8|I pietus";
$lokg[3]="c7|I vakarus";
}



if($loc=="c7"){
$lok[0]="b7|I &#353;iaure";
$lok[1]="c8|I rytus";
$lok[2]="c6|I vakarus prie salos";
$lok[3]="d7|I pietus";
$secury=0;
}
if($loca=="c7"){
$lokg[0]="b7|I &#353;iaure";
$lokg[1]="c8|I rytus";
$lokg[2]="c6|I vakarus prie salos";
$lokg[3]="d7|I pietus";
}


if($loc=="c6"){
$lok[0]="b6|I &#353;iaure palei sala";
$lok[1]="c7|I rytus";
$lok[2]="d6|I pietus";
$secury=0;
}
if($loca=="c6"){
$lokg[0]="b6|I &#353;iaure palei sala";
$lokg[1]="c7|I rytus";
$lokg[2]="d6|I pietus";
}


if($loc=="c4"){
$lok[0]="d4|I vandenyn&#261;";
$secury=1;
}
if($loca=="c4"){
$lokg[0]="d4|I vandenyn&#261;";
}


if($loc=="c3"){
$lok[0]="b3|I &#353;iaure palei sala";
$lok[1]="c2|I vakarus";
$lok[2]="d3|I pietus";
$secury=0;
}
if($loca=="c3"){
$lokg[0]="b3|I &#353;iaure palei sala";
$lokg[1]="c2|I vakarus";
$lokg[2]="d3|I pietus";
}


if($loc=="c2"){
$lok[0]="b2|I &#353;iaure";
$lok[1]="c3|I rytus prie salos";
$lok[2]="d2|I pietus";
$secury=0;
}
if($loca=="c2"){
$lokg[0]="b2|I &#353;iaure";
$lokg[1]="c3|I rytus";
$lokg[2]="d2|I pietus";
}


if($loc=="b0"){
$lok[0]="c1|Nuo rifu i rytus";
$lok[1]="a0|Nuo rifu i &#353;iaure";
$lok[2]="b9|Nuo rifu i vakarus";
$lok[3]="c0|Nuo rifu i pietus";
$secury=0;
}
if($loca=="b0"){
$lokg[0]="c1|Nuo rifu i rytus";
$lokg[1]="a0|Nuo rifu i &#353;iaure";
$lokg[2]="b9|Nuo rifu i vakarus";
$lokg[3]="c0|Nuo rifu i pietus";
}



if($loc=="b9"){
$lok[0]="b0|Prie rifu";
$lok[1]="a9|I &#353;iaure";
$lok[2]="c9|I pietus";
$lok[3]="b8|I vakarus";
$secury=0;
}
if($loca=="b9"){
$lokg[0]="b9|Prie rifu";
$lokg[1]="a9|I &#353;iaure";
$lokg[2]="c9|I pietus";
$lokg[3]="b8|I vakarus";
}


if($loc=="b8"){
$lok[0]="b9|I rytus";
$lok[1]="a8|I &#353;iaure";
$lok[2]="c8|I pietus";
$lok[3]="b7|I vakarus";
$secury=0;
}
if($loca=="b8"){
$lokg[0]="b9|I rytus";
$lokg[1]="a8|I &#353;iaure";
$lokg[2]="c8|I pietus";
$lokg[3]="b7|I vakarus";
}


if($loc=="b7"){
$lok[0]="b8|I rytus";
$lok[1]="a7|I &#353;iaure";
$lok[2]="c7|I pietus";
$lok[3]="b6|I vakarus";
$secury=0;
}
if($loca=="b7"){
$lokg[0]="b8|I rytus";
$lokg[1]="a7|I &#353;iaure";
$lokg[2]="c7|I pietus";
$lokg[3]="b6|I vakarus";
}


if($loc=="b6"){
$lok[0]="b7|I rytus";
$lok[1]="a6|I &#353;iaure";
$lok[2]="c6|I pietus palei sala";
$secury=0;
}
if($loca=="b6"){
$lokg[0]="b7|I rytus";
$lokg[1]="a6|I &#353;iaure";
$lokg[2]="c6|I pietus palei sala";
}

if($loc=="b3"){
$lok[0]="b2|I vakarus";
$lok[1]="a3|I &#353;iaure";
$lok[2]="c3|I pietus palei sala";
$secury=0;
}
if($loca=="b3"){
$lokg[0]="b2|I vakarus";
$lokg[1]="a3|I &#353;iaure";
$lokg[2]="cc|I pietus palei sala";
}


if($loc=="b2"){
$lok[0]="b3|I rytus prie salos";
$lok[1]="a2|I &#353;iaure";
$lok[2]="c2|I pietus";
$secury=0;
}
if($loca=="b2"){
$lokg[0]="b3|I rytus prie salos";
$lokg[1]="a2|I &#353;iaure";
$lokg[2]="c2|I pietus";
}



if($loc=="a0"){
$lok[0]="a9|I vakarus";
$lok[1]="b1|I rytus";
$lok[2]="b0|I pietus";
$secury=0;
}
if($loca=="a0"){
$lokg[0]="a9|I vakarus";
$lokg[1]="b1|I rytus";
$lokg[2]="b0|I pietus";
}


if($loc=="a9"){
$lok[0]="a8|I vakarus";
$lok[1]="a0|I rytus";
$lok[2]="b9|I pietus";
$secury=0;
}
if($loca=="a9"){
$lokg[0]="a8|I vakarus";
$lokg[1]="a0|I rytus";
$lokg[2]="b9|I pietus";
}



if($loc=="a2"){
$lok[0]="b2|I pietus";
$lok[1]="a3|I rytus";
$secury=0;
}
if($loca=="a2"){
$lokg[0]="b2|I pietus";
$lokg[1]="a3|I rytus";
}


if($loc=="a3"){
$lok[0]="b3|Prie salos vakarin&#279;s pus&#279;s";
$lok[1]="a4|Prie salos &#353;iaurin&#279;s pus&#279;s";
$lok[2]="a2|I vakarus";
$secury=0;
}
if($loca=="a3"){
$lokg[0]="b3|Prie salos vakarin&#279;s pus&#279;s";
$lokg[1]="a4|I Prie salos &#353;iaurin&#279;s pus&#279;s";
$lokg[2]="a2|I vakarus";
}


if($loc=="a4"){
$lok[0]="a5|I rytus palei sala";
$lok[1]="a3|I vakarus";
$secury=0;
}
if($loca=="a4"){
$lokg[0]="a5|I rytus palei sala";
$lokg[1]="a3|I vakarus";
}


if($loc=="a5"){
$lok[0]="a4|I vakarus palei sala";
$lok[1]="a6|I rytus";
$secury=1;
}
if($loca=="a5"){
$lokg[0]="a4|I vakarus palei sala";
$lokg[1]="a6|I rytus";
}


if($loc=="a6"){
$lok[0]="a5|Prie salos &#353;iaurin&#279;s pus&#279;s";
$lok[1]="a7|I rytus";
$lok[2]="b6|I pietus";
$lok[3]="a1|I uost&#261;";
$secury=1;
}
if($loca=="a6"){
$lokg[0]="a5|Prie salos &#353;iaurin&#279;s pus&#279;s";
$lokg[1]="a7|I rytus";
$lokg[2]="b6|I pietus";
$lokg[3]="a1|I uost&#261;";
}



if($loc=="a7"){
$lok[0]="a6|I vakarus";
$lok[1]="a8|I rytus";
$lok[2]="b7|I pietus";
$secury=1;
}
if($loca=="a7"){
$lokg[0]="a6|I vakarus";
$lokg[1]="a8|I rytus";
$lokg[2]="b7|I pietus";}



if($loc=="a8"){
$lok[0]="a7|I vakarus";
$lok[1]="a9|I rytus";
$lok[3]="b8|I pietus";
$lok[2]="a10|Link s&#261;siaurio";
$secury=0;
}
if($loca=="a8"){
$lokg[0]="a7|I vakarus";
$lokg[3]="b8|I pietus";
$lokg[1]="a9|I rytus";
$lokg[2]="a10|Link s&#261;siaurio";}


if($loc=="a10"){
$lok[0]="a12|Iplaukti i s&#261;siauri";
$lok[1]="a8|Gri&#382;ti i vandenyna";
$secury=0;
}
if($loca=="a10"){
$lokg[0]="a12|Iplaukti i s&#261;siauri";
$lokg[1]="a8|Gri&#382;ti i vandenyna";}

if($loc=="a13"){
$lok[0]="a12|Plaukti atgal";
$secury=0;
}
if($loca=="a13"){
$lokg[0]="a12|Plaukti atgal";}


if($loc=="a12"){
$lok[0]="a13|I rytus tamsiu s&#261;siauriu";
$lok[1]="a11|I vakarus tamsiu s&#261;siauriu";
$lok[2]="a10|Link i&#353;plaukimo i&#353; s&#261;siaurio";
$secury=0;
}
if($loca=="a12"){
$lokg[0]="a13|I &#353;iaure tamsiu s&#261;siauriu";
$lokg[1]="a11|I pietus tamsiu s&#261;siauriu";
$lokg[2]="a10|Link i&#353;plaukimo i&#353; s&#261;siaurio";}

if($loc=="a11"){
$lok[0]="a14|I &#353;iaure tamsiu s&#261;siauriu";
$lok[1]="a12|I rytus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a11"){
$lokg[0]="a14|I &#353;iaure tamsiu s&#261;siauriu";
$lokg[1]="a12|I rytus tamsiu s&#261;siauriu";}

if($loc=="a14"){
$lok[0]="a15|I &#353;iaure tamsiu s&#261;siauriu";
$lok[1]="a11|I pietus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a14"){
$lokg[0]="a15|I &#353;iaure tamsiu s&#261;siauriu";
$lokg[1]="a11|I pietus tamsiu s&#261;siauriu";}

if($loc=="a15"){
$lok[0]="a16|I rytus tamsiu s&#261;siauriu";
$lok[1]="a14|I pietus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a15"){
$lokg[0]="a16|I rytus tamsiu s&#261;siauriu";
$lokg[1]="a14|I pietus tamsiu s&#261;siauriu";}

if($loc=="a16"){
$lok[0]="a17|I &#353;iaure tamsiu s&#261;siauriu";
$lok[1]="a15|I vakarus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a16"){
$lokg[0]="a17|I &#353;iaure tamsiu s&#261;siauriu";
$lokg[1]="a15|I vakarus tamsiu s&#261;siauriu";}

if($loc=="a17"){
$lok[0]="a18|I rytus tamsiu s&#261;siauriu";
$lok[1]="a16|I pietus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a17"){
$lokg[0]="a18|I rytus tamsiu s&#261;siauriu";
$lokg[1]="a16|I pietus tamsiu s&#261;siauriu";}

if($loc=="a18"){
$lok[0]="a19|Gylyn tamsiu s&#261;siauriu";
$lok[1]="a17|I vakarus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a18"){
$lokg[0]="a19|Gylyn tamsiu s&#261;siauriu";
$lokg[1]="a17|I vakarus tamsiu s&#261;siauriu";}

if($loc=="a19"){
$lok[0]="a18|I vakarus tamsiu s&#261;siauriu";
$lok[1]="a20|I s&#261;siaurio gyluma";
$secury=0;
}
if($loca=="a19"){
$lokg[0]="a18|I vakarus tamsiu s&#261;siauriu";
$lokg[1]="a20|I s&#261;siaurio gyluma";}

if($loc=="a20"){
$lok[0]="a19|I pietus tamsiu s&#261;siauriu";
$secury=0;
}
if($loca=="a20"){
$lokg[0]="a19|I pietus tamsiu s&#261;siauriu";}

if($loc=="a1"){
$lok[0]="a6|Plaukti i vandenyna";
$secury=1;
}
if($loca=="a1"){
$lokg[0]="a6|Plaukti i vandenyna";}


?>