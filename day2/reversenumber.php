<?php

$num=56789;
$revnum=0;

while($num>1){
    $reminder=$num%10;
    $revnum=($revnum*10)+$reminder;
    $num=$num/10;
}
echo"$num is reverse number is $revnum";
?>