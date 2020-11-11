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

$filterBy = 'k';

// $result = array_filter($buah[0]['NAMA'], function ($item) use ($input) {
//     if (stripos($item, $input) !== false) {
//         return true;
//     }
//     return false;
// });

// $new = array_filter($buah, function ($var) {
//     return ($var[1]['NAMA'] == 'k');
// });


// $req = array_filter($buah, function ($v) {
//     return in_array('req', $v);
// });

$filter = array('K');
$newArray = array_filter($buah, function($e) use ($filter){
                                                //    ^ import criteria
    return in_array($e['NAMA'], $filter);
});
print_r($newArray);

?>