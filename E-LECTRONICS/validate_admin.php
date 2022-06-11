<?php
$host='localhost';
$user='root';
$password='';
$db='electronics';
$con=mysqli_connect($host,$user,$password,$db);
if(!$con)
{
    die("Could not connect".mysqli_connect_error());
}


/*
foreach($var as $key=>$value)
{
    $x=$value;        //ex: 1
}
$product = $_POST[$x];  //ex:mouse1
//the $_POST is an associative array that contains keys and values where keys are all the values of all name attributes present in the html form and values are the values given in the input tag
//since the html form is having only one name attribute, $_POST will contain only one value of name attribute
//array_keys() will generate an associative array with keys as 0,1,2,.... and values as values present under name attribute
*/


$var = array_keys($_POST);
foreach($var as $key=>$value)
{
    $x=$value;        //ex: 1
}
$product = $_POST[$x];  //ex:mouse1
$query="UPDATE products SET instock='$x' WHERE id='$product'";

if (mysqli_query($con, $query)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($con);
}
?>