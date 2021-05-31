<?php

//suffle
$myArray = array("Football", "Baseball", "Hockey", "Tennis","Boxing");
shuffle($myArray); 
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
echo "<br/>";

//array_key_exists
$a = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$a);
echo "<br/>";

//array_change_key_case
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "orange");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
echo "<br/>";

//array_conbine
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "orange");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
echo "<br/>";

//end
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
echo "<br/>";

//compact
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
echo "<br/>";

//array_flip
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
echo "<br/>";

//array_diff
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
echo "<br/>";

//array_intersect
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
echo "<br/>";

//array_values
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
echo "<br/>";

//array_push
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
echo "<br/>";

//array_pop
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); 
print_r($a);
array_pop($a);
print_r($a);
echo "<br/>";

//explode
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
echo "<br/>";

//implode
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;

?>