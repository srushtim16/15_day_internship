<?php
//count
$a = array('c','c++','php','java','html','2');
echo count($a);
echo "<br/>";

//array_count_values
$a = array("c","php","java","c","2");
$b = array_count_values($a);

foreach ($b as $key => $value){
    echo "<br/>$key - <strong>$value</strong>";
}
echo "<br/>";

//array_sum
$m = array(1,4,6,9);
echo array_sum($m);
echo "<br/>";

//array_product
$a = array(1,2,3,5,6);
echo array_product($a);
echo "<br/>";

//array_reverse
$a = array ('c','c++','java','php');
$r =array_reverse($a);
print_r($r);
echo "<br/>";

//in_array
$a = array ('c','c++','java','php');
$temp = in_array('php',$a);
echo $temp;
echo "<br/>";

//select multiple keys at random 
 $a = array ('c','c++','java','php','html');
 $b = array_rand($a,2);
 
 foreach ($b as $key => $value)
 {
     echo "<br />$key - <strong>".$a[$value]."</strong>";
 }
 echo "<br/>";
    
 //array_unique
 $a = array ('c','c++','java','php','html');
 print_r(array_unique($a));
 echo "<br/>";
 
 //array_merge
 $arr1 = array('c','c++','android','java','php');
 $arr2 = array(10,20,30,40,50);
 $NewArr = array_merge($arr1,$arr2);
 print_r($NewArr);
 echo "<br/>";
 
 //array_search
 $myarr = array('c', 'c++','android', 'java', 'php');
 $check = array_search('android', $myarr);
 echo $check;
echo "<br/>"; 
 
 //range
 $arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
echo "<br/>";

//sort
$arr = array(80,60,80,40,2,74);
sort($arr);
print_r($arr);
echo "<br/>";

//rsort
$arr = array(80,60,80,40,2,54);
rsort($arr);
print_r($arr);
echo "<br/>";

//asort
$arr = array(80,60,50,80,3,74);
asort($arr);
print_r($arr);
echo "<br/>";

//ksort 
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
echo "<br/>";

//krsort
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>