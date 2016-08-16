<?
include_once("loc3.php");
/*

f3 g2 g3 g4        g7 g8 g9 g0 h1 h2

f5 h3 h4 h5 h6 h7 h8            i2 i3 

f7 i5 i6  i7  i8  i9  i0    [j2]     j4 j5 

f9 i4 j6 j7  j8  j9  j0 k1 k2 k3 k4 k5

g1 k6 k7 k8 k9 k0  l1 l2  l3 l4  l5 l6

*/

if($loc=="h1"){
$lok[0]="g0|I vakarus";
$lok[1]="h2|I rytus";
$lok[2]="i2|I pietus";
$secury=0;
}
if($loca=="h1"){
$lokg[0]="g0|I vakarus";
$lokg[1]="h2|I rytus";
$lokg[2]="i2|I pietus";
}

if($loc=="g0"){
$lok[0]="g9|I vakarus palei ola";
$lok[1]="h1|I rytus palei ola";
$secury=0;
}
if($loca=="g0"){
$lokg[0]="g9|I vakarus palei ola";
$lokg[1]="h1|I rytus palei ola";
}

if($loc=="g9"){
$lok[0]="g8|I vakarus palei ola";
$lok[1]="g0|I rytus palei ola";
$secury=0;
}
if($loca=="g9"){
$lokg[0]="g8|I vakarus palei ola";
$lokg[1]="g0|I rytus palei ola";
}

if($loc=="g8"){
$lok[0]="g7|I vakarus";
$lok[1]="g9|I rytus palei ola";
$secury=0;
}
if($loca=="g8"){
$lokg[0]="g7|I vakarus";
$lokg[1]="g9|I rytus palei ola";
}

if($loc=="g7"){
$lok[0]="g8|I rytus";
$lok[1]="h8|I pietus";
$secury=0;
}
if($loca=="g7"){
$lokg[0]="g8|I rytus";
$lokg[1]="h8|I pietus";
}

if($loc=="g4"){
$lok[0]="g3|I vakarus";
$lok[1]="h5|I pietus";
$secury=0;
}
if($loca=="g4"){
$lokg[0]="g3|I vakarus";
$lokg[1]="h5|I pietus";
}

if($loc=="g3"){
$lok[0]="g2|I vakarus";
$lok[1]="h4|I pietus";
$lok[2]="g4|I rytus";
$secury=0;
}
if($loca=="g3"){
$lokg[0]="g2|I vakarus";
$lokg[1]="h4|I pietus";
$lokg[2]="g4|I rytus";
}

if($loc=="g2"){
$lok[0]="f3|I vakarus";
$lok[1]="h3|I pietus";
$lok[2]="g3|I rytus";
$secury=0;
}
if($loca=="g2"){
$lokg[0]="f3|I vakarus";
$lokg[1]="h3|I pietus";
$lokg[2]="g3|I rytus";
}

if($loc=="i2"){
$lok[0]="h1|I &#353;iaure palei ola";
$lok[1]="j4|I pietus palei ola";
$lok[2]="i3|I rytus";
$secury=0;
}
if($loca=="i2"){
$lokg[0]="h1|I &#353;iaure palei ola";
$lokg[1]="j4|I pietus palei ola";
$lokg[2]="i3|I rytus";
}

if($loc=="h8"){
$lok[0]="g7|I &#353;iaure palei ola";
$lok[1]="i0|I pietus palei ola";
$lok[2]="h7|I vakarus";
$secury=0;
}
if($loca=="h8"){
$lokg[0]="g7|I &#353;iaure palei ola";
$lokg[1]="i0|I pietus palei ola";
$lokg[2]="h7|I vakarus";
}

if($loc=="h7"){
$lok[0]="h8|I rytus prie olos";
$lok[1]="i9|I pietus";
$lok[2]="h6|I vakarus";
$secury=0;
}
if($loca=="h7"){
$lokg[0]="h8|I rytus prie olos";
$lokg[1]="i9|I pietus";
$lokg[2]="h6|I vakarus";
}

if($loc=="h6"){
$lok[0]="h7|I rytus";
$lok[1]="i8|I pietus";
$lok[2]="h5|I vakarus";
$secury=0;
}
if($loca=="h6"){
$lokg[0]="h7|I rytus";
$lokg[1]="i8|I pietus";
$lokg[2]="h5|I vakarus";
}

if($loc=="h5"){
$lok[0]="h6|I rytus";
$lok[1]="i7|I pietus";
$lok[2]="h4|I vakarus";
$lok[3]="g4|I &#353;iaure";
$secury=0;
}
if($loca=="h5"){
$lokg[0]="h6|I rytus";
$lokg[1]="i7|I pietus";
$lokg[2]="h4|I vakarus";
$lokg[3]="g4|I &#353;iaure";
}

if($loc=="h4"){
$lok[0]="h5|I rytus";
$lok[1]="i6|I pietus";
$lok[2]="h3|I vakarus";
$lok[3]="g3|I &#353;iaure";
$secury=0;
}
if($loca=="h4"){
$lokg[0]="h5|I rytus";
$lokg[1]="i6|I pietus";
$lokg[2]="h3|I vakarus";
$lokg[3]="g3|I &#353;iaure";
}

if($loc=="h3"){
$lok[0]="h4|I rytus";
$lok[1]="i5|I pietus";
$lok[2]="f5|I vakarus";
$lok[3]="g2|I &#353;iaure";
$secury=0;
}
if($loca=="h3"){
$lokg[0]="h4|I rytus";
$lokg[1]="i5|I pietus";
$lokg[2]="f5|I vakarus";
$lokg[3]="g2|I &#353;iaure";
}

if($loc=="j4"){
$lok[0]="k4|I pietus";
$lok[1]="j5|I rytus";
$lok[2]="i2|I &#353;iaure palei ola";
$secury=0;
}
if($loca=="j4"){
$lokg[0]="k4|I pietus";
$lokg[1]="j5|I rytus";
$lokg[2]="i2|I &#353;iaure palei ola";
}

if($loc=="i0"){
$lok[0]="j0|I pietus";
$lok[1]="i9|I vakarus";
$lok[2]="h8|I &#353;iaure palei ola";
$secury=0;
}
if($loca=="i0"){
$lokg[0]="j0|I pietus";
$lokg[1]="i9|I vakarus";
$lokg[2]="h8|I &#353;iaure palei ola";
}

if($loc=="i9"){
$lok[0]="i0|I rytus prie olos";
$lok[1]="j9|I pietus";
$lok[2]="i8|I vakarus";
$lok[3]="h7|I &#353;iaure";
$secury=0;
}
if($loca=="i9"){
$lokg[0]="i0|I rytus prie olos";
$lokg[1]="j9|I pietus";
$lokg[2]="i8|I vakarus";
$lokg[3]="h7|I &#353;iaure";
}

if($loc=="i8"){
$lok[0]="i9|I rytus";
$lok[1]="j8|I pietus";
$lok[2]="i7|I vakarus";
$lok[3]="h6|I &#353;iaure";
$secury=0;
}
if($loca=="i8"){
$lokg[0]="i9|I rytus";
$lokg[1]="j8|I pietus";
$lokg[2]="i7|I vakarus";
$lokg[3]="h6|I &#353;iaure";
}

if($loc=="i7"){
$lok[0]="i8|I rytus";
$lok[1]="j7|I pietus";
$lok[2]="i6|I vakarus";
$lok[3]="h5|I &#353;iaure";
$secury=0;
}
if($loca=="i7"){
$lokg[0]="i8|I rytus";
$lokg[1]="j7|I pietus";
$lokg[2]="i6|I vakarus";
$lokg[3]="h5|I &#353;iaure";
}

if($loc=="i6"){
$lok[0]="i7|I rytus";
$lok[1]="j6|I pietus";
$lok[2]="i5|I vakarus";
$lok[3]="h4|I &#353;iaure";
$secury=0;
}
if($loca=="i6"){
$lokg[0]="i7|I rytus";
$lokg[1]="j6|I pietus";
$lokg[2]="i5|I vakarus";
$lokg[3]="h4|I &#353;iaure";
}

if($loc=="i5"){
$lok[0]="i6|I rytus";
$lok[1]="i4|I pietus";
$lok[2]="f7|I vakarus";
$lok[3]="h3|I &#353;iaure";
$secury=0;
}
if($loca=="i5"){
$lokg[0]="i6|I rytus";
$lokg[1]="i4|I pietus";
$lokg[2]="f7|I vakarus";
$lokg[3]="h3|I &#353;iaure";
}

if($loc=="k4"){
$lok[0]="k5|I rytus";
$lok[1]="l5|I pietus";
$lok[2]="k3|I vakarus";
$lok[3]="j4|I &#353;iaure";
$secury=0;
}
if($loca=="k4"){
$lokg[0]="k5|I rytus";
$lokg[1]="l5|I pietus";
$lokg[2]="k3|I vakarus";
$lokg[3]="j4|I &#353;iaure";
}

if($loc=="k3"){
$lok[0]="k4|I rytus";
$lok[1]="l4|I pietus";
$lok[2]="k2|I vakarus palei ola";
$secury=0;
}
if($loca=="k3"){
$lokg[0]="k4|I rytus";
$lokg[1]="l4|I pietus";
$lokg[2]="k2|I vakarus";
}

if($loc=="k2"){
$lok[0]="k3|I rytus palei ola";
$lok[1]="l3|I pietus";
$lok[2]="k1|I vakarus palei ola";
$lok[3]="j2|Iplaukti i Ola";
$secury=0;
}
if($loca=="k2"){
$lokg[0]="k3|I rytus palei ola";
$lokg[1]="l3|I pietus";
$lokg[2]="k1|I vakarus palei ola";
$lokg[3]="j2|Iplaukti i Ola";
}

if($loc=="k1"){
$lok[0]="k2|I rytus palei ola";
$lok[1]="l2|I pietus";
$lok[2]="j0|I vakarus";
$secury=0;
}
if($loca=="k1"){
$lokg[0]="k2|I rytus";
$lokg[1]="l2|I pietus";
$lokg[2]="j0|I vakarus";
}

if($loc=="j0"){
$lok[0]="k1|I rytus";
$lok[1]="l1|I pietus";
$lok[2]="j9|I vakarus";
$lok[3]="i0|I &#353;iaure";
$secury=0;
}
if($loca=="j0"){
$lokg[0]="k1|I rytus";
$lokg[1]="l1|I pietus";
$lokg[2]="j9|I vakarus";
$lokg[3]="i0|I &#353;iaure";
}

if($loc=="j9"){
$lok[0]="j0|I rytus";
$lok[1]="k0|I pietus";
$lok[2]="j8|I vakarus";
$lok[3]="i9|I &#353;iaure";
$secury=0;
}
if($loca=="j9"){
$lokg[0]="j0|I rytus";
$lokg[1]="k0|I pietus";
$lokg[2]="j8|I vakarus";
$lokg[3]="i9|I &#353;iaure";
}

if($loc=="j8"){
$lok[0]="j9|I rytus";
$lok[1]="k9|I pietus";
$lok[2]="j7|I vakarus";
$lok[3]="i8|I &#353;iaure";
$secury=0;
}
if($loca=="j8"){
$lokg[0]="j9|I rytus";
$lokg[1]="k9|I pietus";
$lokg[2]="j7|I vakarus";
$lokg[3]="i8|I &#353;iaure";
}

if($loc=="j7"){
$lok[0]="j8|I rytus";
$lok[1]="k8|I pietus";
$lok[2]="j6|I vakarus";
$lok[3]="i7|I &#353;iaure";
$secury=0;
}
if($loca=="j7"){
$lokg[0]="j8|I rytus";
$lokg[1]="k8|I pietus";
$lokg[2]="j6|I vakarus";
$lokg[3]="i7|I &#353;iaure";
}

if($loc=="j6"){
$lok[0]="j7|I rytus";
$lok[1]="k7|I pietus";
$lok[2]="i4|I vakarus";
$lok[3]="i6|I &#353;iaure";
$secury=0;
}
if($loca=="j6"){
$lokg[0]="j7|I rytus";
$lokg[1]="k7|I pietus";
$lokg[2]="i4|I vakarus";
$lokg[3]="i6|I &#353;iaure";
}

if($loc=="i4"){
$lok[0]="j6|I rytus";
$lok[1]="k6|I pietus";
$lok[2]="f9|I vakarus";
$lok[3]="i5|I &#353;iaure";
$secury=0;
}
if($loca=="i4"){
$lokg[0]="j6|I rytus";
$lokg[1]="k6|I pietus";
$lokg[2]="f9|I vakarus";
$lokg[3]="i5|I &#353;iaure";
}

if($loc=="f9"){
$lok[0]="i4|I rytus";
$lok[1]="g1|I pietus";
$lok[2]="f8|I vakarus";
$lok[3]="f7|I &#353;iaure";
$secury=0;
}
if($loc=="f9"){
$lokg[0]="i4|I rytus";
$lokg[1]="g1|I pietus";
$lokg[2]="f8|I vakarus";
$lokg[3]="f7|I &#353;iaure";
}


if($loc=="f7"){
$lok[0]="i5|I rytus";
$lok[1]="f9|I pietus";
$lok[2]="f6|I vakarus";
$lok[3]="f5|I &#353;iaure";
$secury=0;
}
if($loca=="f7"){
$lokg[0]="i5|I rytus";
$lokg[1]="f9|I pietus";
$lokg[2]="f6|I vakarus";
$lokg[3]="f7|I &#353;iaure";
}



if($loc=="f5"){
$lok[0]="h3|I rytus";
$lok[1]="f7|I pietus";
$lok[2]="f4|I vakarus";
$lok[3]="f3|I &#353;iaure";
$secury=0;
}
if($loca=="f5"){
$lokg[0]="h3|I rytus";
$lokg[1]="f7|I pietus";
$lokg[2]="f4|I vakarus";
$lokg[3]="f3|I &#353;iaure";
}


if($loc=="f3"){
$lok[0]="g2|I rytus";
$lok[1]="f5|I pietus";
$lok[2]="f2|I vakarus";
$secury=0;
}
if($loca=="f3"){
$lokg[0]="g2|I rytus";
$lokg[1]="f5|I pietus";
$lokg[2]="f2|I vakarus";
}





?>