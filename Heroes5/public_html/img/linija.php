<?php

echo"<small>Norint gauti <b>7 kreditus</b> jums reikia paskambinti numeriu <b>890070015</b> atid&#382;iai isklausykite diktuojama koda ir ira&#353;yti koda &#382;emiau esanciame laukelyje</small><br/><small>Skambucio kaina <b>5 Litai</b></small><br/>$line<br/>
<small>Norint gauti <b>40 kredit&#371;</b> jums reikia paskambinti numeriu <b>890086001</b> atid&#382;iai isklausykite diktuojama koda ir ira&#353;yti koda &#382;emiau esanciame laukelyje</small><br/><small>Skambucio kaina <b>25 Litai</b></small><br/>
$line<br/><b>Paslauga tinka TEO, bites(bite,labas) ir omnitel(EXTRA,ezys) klientams</b><br/>
$line<br/><input type=\"text\" name=\"cod\"/><br/><small><anchor>Gauti kreditus<go method=\"post\" href=\"index.php?id=$id&amp;action=linija2\">
<postfield name=\"code\" value=\"$(cod)\"/></go></anchor></small><br/>$line<br/><small><a href=\"index.php?id=$id\">$home</a></small>";