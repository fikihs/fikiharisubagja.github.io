<?php 
$string = "AKU SUKA MAKAN NASI PADANG";

$arr = explode(" ",$string);
// print_r($arr);

for ($i=0; $i<=4; $i++) {
    for ($j=3; $j>=$i; $j--) {
        echo "  ";
    }for ($k=0; $k<=$i; $k++) {
        print_r($arr[$k]);

    }echo "<br>";
}

for ($i=4; $i>=0; $i--){
    for ($j=4; $j>=$i; $j--){
    	print_r($arr[$j]);
     }echo "<br>";
}
?>