<?php
$buah = array(
array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);

array_push($buah, array("NAMA" => "PISANG", "HARGA" => 5000, "RASA" => "MANIS"));

echo 'Soal 4a <br><br>';
rsort($buah);
$lenght = count($buah);
for ($i=0; $i < $lenght; $i++) { 
echo $buah[$i]["NAMA"].'<br>';
	# code...
}

echo "<br>";
echo 'Soal 4b <br><br>';

$like = 'k';
$result = array_filter($buah, function ($item) use ($like) {
    if (stripos($item['NAMA'], $like) !== false) {
        return true;
    }
    return false;
});
echo '<pre>';
print_r($result);
echo '</pre>';

echo '<br><br>Soal 4c<br>';
$like2 = 'MANIS';
$result2 = array_filter($buah, function ($item2) use ($like2) {
    if (stripos($item2['RASA'], $like2) !== false && $item2['HARGA'] <= 10000) {
        return true;
    }
    return false;
});
echo '<pre>';
print_r($result2);
echo '</pre>';
?>
