<?php 
echo 'SOAL 2a <br>';
$tgl = "2020-05-01";
echo substr($tgl, 0,2);
echo substr($tgl, 5,2);
echo substr($tgl, 8,2);

echo '<br>';
echo '<br>SOAL 2b';
echo '<br>';

$a = strtotime($tgl);
echo date("m-y-d", $a);

echo '<br>';
echo '<br>';
echo 'SOAL 2c <br>';
echo date('Y-m-d', strtotime('+6 months', strtotime($tgl)));

echo '<br>';
echo '<br>';
echo 'SOAL 2d <br>';
$tgl_lahir = "1997-10-06";
$lahir = new DateTime($tgl_lahir);
$hari_ini = new DateTime($tgl);
$diff = $hari_ini->diff($lahir);
echo $diff->y.' tahun';

?>