<?php 
 
//count()
$arr= array('K','N','C','A');
echo "count : ";
echo count($arr);

//array _count_values()
$arr=array("Apple","atmoshphere","maths","php");
$newarr= array_count_values($arr);
echo "<br/>";
foreach($newarr as $key=> $value)
{
	echo "<br/>array_count_value $key is <strong>$value</strong>";
}

//array_sum()
$myarray=array(1,2,3,4,5,6);
echo "<br/><br/>sum :";
echo array_sum($myarray);

//array_product()
$a=array(1,2,3);
echo "<br><br>array product :";
echo array_product($a);

//array_reverse()
$a=array('A','B','C','D');
echo "<br><br>array reverse :";
$revarr=array_reverse($a);
print_r($arr);

//in_array()
$a=array('c','php','c++','java');
echo "<br><br>in_array :";
$temp=in_array('php',$a);
echo $temp;

//array_rand()
$a=array('c','c++','php');
echo "<br><br>array_rand :";
$indexofarray=array_rand($a);
echo $a[$indexofarray];

//select multiple key at random
$arr = array('c',' c++', 'java', 'android','php');
$indexofarray = array_rand ($arr,2);//Returns Array Index
echo"<br><br>multiple key at random :";
foreach ($indexofarray as $key=>$value)
{
echo "<br/>$key -<strong>" . $arr[$value]."</strong>";
}

//array_unique()
$arr=array('c','c++','android','java','php');
echo"<br><br> array unique :";
print_r (array_unique ($arr));

//array_merge()
$arr1 = array('yellow','blue','black','pink','white');
$arr2 = array(10,20,30,40,50);
echo"<br><br> array merge :";
$NewArr = array_merge ($arr1,$arr2);
print_r ($NewArr);

//array_search()
$myarr = array('krupa', 'vimi','sim', 'jiya', 'piyu');
echo "<br><br>array search :";
$check = array_search('vimi', $myarr);
echo $check; // Return Index

//range()
$arr = range("11", "15");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
//method 2
$a = range('a','z');
print_r($a);
$year = range(1999,2030);
echo "<br><select>";
foreach ($year as $value) 
{
	echo "<option>$value</option>";
}
echo "</select>";

//sort
$arr = array(85,5,65,35,25,55);
echo"<br><br>sorting :";
sort($arr);
print_r($arr);

//rsort()
$arr = array(85,5,65,35,25,55);
echo"<br><br>reverse sorting :";
rsort($arr);
print_r($arr);

//asort()
$arr = array(85,5,65,35,25,55);
echo"<br><br>sorting :";
asort($arr);
print_r($arr);

//ksort()
$arr = array("Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green");
echo"<br><br>key sort :";
ksort($arr);
foreach ($arr as $key => $value) 
{
	echo "<br />$key - $value ";
}

//krsort()
$arr = array("Banana" => "Yellow", "Apple" => "Red", "Mango" => "Green");
echo"<br><br>key reverse sort :";
krsort($arr);
foreach ($arr as $key => $value)
{
	echo "<br />$key - $value ";
}


?>