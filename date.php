<?php

$format     = mktime(0,0,0,date(11),date(23),date(20));
echo date('Y-m-d', $format);
echo "<br>";
echo "Mengubah format: ";
echo date('m-y-d', $format);

$enam_bulan     = mktime(0,0,0,date(11)+6,date(23),date(20));
$a        		= date("m-y-d", $enam_bulan);
echo "<br> Enam Bulan kedepan: $a";

$lahir = new Datetime('1997-06-04');
$today = new DateTime('2020-11-23');
  $y = $today->diff($lahir)->y;
  //bulan
  $m = $today->diff($lahir)->m;
  //hari
  $d = $today->diff($lahir)->d;
  echo "<br>Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>