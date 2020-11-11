<?php 

echo 'Soal 3a <br>';
$array = [20,10,100,30,15,5];
sort($array);
$arrlength = count($array);
for($x = 0; $x < $arrlength; $x++) {
  echo $array[$x];
  echo "<br>";
}

echo '<br>';
rsort($array);
$arlength = count($array);
for($x = 0; $x < $arlength; $x++) {
  echo $array[$x];
  echo "<br>";
}

echo '<br> soal 3b <br>';
array_push($array, "180");
print_r($array);

echo '<br><br> soal 3c <br>';
array_splice($array, 1, 1);
print_r($array);
?>