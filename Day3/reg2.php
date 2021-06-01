<!DOCTYPE html> 
<html> 
<head> 
 <title></title> 
 <style type="text/css"> 
 *{ 
 margin: 0px;
 padding: 0px; 
 } 
 form 
 { 
 height: 300px; 
 width: 250px; 
 margin-top: 50px; 
 padding: 5px; 
 background-color: lightskyblue; 
 border-radius: 5px; 
 color: black; 
 } 
 </style> 
</head> 
<body> 
<center> 
<form> 
<?php 
 echo "Welcome<br><br>"; 
 if (isset($_POST['sub'])) 
 { 
 echo "User name:".$_POST["uname"]."<br>"; 
 echo "Password:".$_POST["pass"]."<br>"; 
 echo "Email:".$_POST["emailid"]."<br>"; 
 echo "Number:".$_POST["num"]."<br>";
 echo "Birth Date".$_POST["BDate"]."<br>"; 
 echo "Gender:".$_POST["gen"]."<br>"; 
 } 
?> 
</form> 
</center> 
</body> 
</html>