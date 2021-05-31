<?php

//associatiive array
//key=value
//method 1
$a[0]=10;
$a['c']="computer";
$a['php'] = "web Devlopment";
$a[10]="Ten";
$a[50]=50.50;


//method 2
//always use this method to create an array 
$a=array(
0=>10,
"c"=>"computer",
"php" => "web devlopment",
10=>"Ten",
50=> 50.50
);
//print value
echo "c for ".$a['c'];

foreach ($a as $value)
{
	echo"<br> value is $value";
}foreach($a as $key=> $value)
{
	echo "<br/>key is <b>$key</b> and values is <b> $value</b>";
}

//3 inbuilt function todebug an array
echo "<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";