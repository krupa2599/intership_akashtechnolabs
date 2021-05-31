<?php

//numerical array
//method 1
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="c";
$a[4]="4";

//method 2
//index dynamic array
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="c";
$a[]="4";

//method 3
//always use this method to create an array
$a= array(10,20,30,"c","c++",10.50,"php");
//print array value
echo $a[3];
 
//3 inbuilt functiond todebug an array
 for($i=0;$i<count($a);$i++)
 {
 	echo "<br>".$a[$i];

 }

echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";