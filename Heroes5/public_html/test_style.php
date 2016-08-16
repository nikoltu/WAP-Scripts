<?php
include ("style.class.php");
$style = new Style;
echo $style->headers();
echo $style->start_page("tampyk.uzeik.in");
echo $style->pagrindiniis_meniu();
echo $style->end_page();
?>
