<?php
//associative array
//method 1
$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "web development" ;
$a[5] = "five";
$a[12] = 35.2;

//method 2

$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "web development",
    5 => "five",
    12 => 35.2
);

echo "c for".$a['c'];

foreach ($a as $value){
    echo "<br>value is $value";
}
foreach ($a as $key => $value) {
    echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
?>