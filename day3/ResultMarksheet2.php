<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = $_POST['txt6'];

echo"c marks:$a <br>";
echo"c++ marks:$b <br>";
echo"java marks:$c <br>";
echo"python marks:$d <br>";
echo"php marks:$e <br>";
echo"css marks:$f <br>";
echo "<br><b>Total marks:</br>".($total=$a+$b+$c+$d+$e);

$percentage=($total/600.00)*100;
echo "<br><b>percentage:</b>$percentage";

if ($percentage>=80)
{
    $grade = "First division";
}
else if($percentage>=70)
{
    $grade = "second division";
}
else if($percentage>=45)
{
    $grade = "Third division";
}
 else {
     $grade = "fail";
 }
 
 echo "<br><b>student grade:</b> $grade";
 ?>

