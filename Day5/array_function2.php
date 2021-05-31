<?php
//shuffle()
$myArray = array("sprite", "coke", "pepsi", "jira msala");
echo "<br><br>shuffle :";
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}

//array_key_exists()
$arr = array("a" => "apple", "b" => "banana","c" => "car");
echo"<br><br> key exist :";
echo array_key_exists('a',$arr);

//array_change_key_case()
$arr = array("Banana" => "Yellow", "Apple" => "Red","Mango" => "Green");
echo"<br><br>change key case :";
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);

//array_combine()
$arr1 = array("red" , "yellow" , "green");
$arr2 = array("black","orange", "blue");
echo"<br><br> combine :";
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);

//end()
$myarr = array('1', '2','3', '5', '9');
echo"<br><br> End:";
echo end($myarr);

//compact()
$name = "Kru";
$subject = "parmar";
echo"<br><br> compact:";
$arr = compact("name", "surname");
print_r($arr);

//array_flip()
$arr = array("k" => "kru", "N" => "Nena", "J" => "Jiya");
echo"<br><br> flip:";
$fliparray = array_flip($arr);
print_r($fliparray);

//array_diff()
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
echo"<br><br>array diff.:";
$diff = array_diff($a, $b);
print_r($diff);

//array_intersect()
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
echo"<br><br>intersect :";
print_r(array_intersect($arr1,$arr2));

//array_values()
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
echo"<br><br>values :";
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}

//array_push()
$a=array("c","c++");
array_push($a,"java","php");
echo"<br><br>push :";
print_r($a);

//array_pop()
$a = array("c", "c++", "Java", "PHP", "ASP");
echo"<br><br>pop :";
array_pop($a); 
print_r($a);
array_pop($a); 
print_r($a);

//explode()
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
echo"<br><br>explode :";
print_r($arr);

//implode()
$arr = array("i","love","php","language");
echo"<br><br>implode :";
$mystring = implode(" ", $arr);
echo $mystring;

?>