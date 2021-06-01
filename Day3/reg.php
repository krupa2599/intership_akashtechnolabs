<!DOCTYPE html> 
<html> 
<head> 
 <title>Registation form</title> 
 <style type="text/css"> 
*{ 
 padding:0px; 
 margin: 0px; 
} 
form 
{ 
 background-color:lightskyblue; 
 width: 340px; 
 height: 380px; 
 margin: auto; 
 margin-top: 50px; 
 font-size: 20px; 
 border-radius: 5px; 
 color: white; 
 box-shadow: 5px 5px 5px black;
 } 
input 
{
	margin: 5px; 
 border-radius: 10px; 
 padding: 5px; 
 border: none; 
} 
form h3 
{ 
 text-align: center; 
 padding-top:5px; 
 color: orange; 
} 
table 
{ 
 margin-left: 15px; 
} 
input[type="submit"],[type="reset"] 
{ 
 padding: 5px; 
 width: 80px; 
 background-color:black; 
 color: white; 
 border: none; 
 border-radius: 15px; 
 font-size: 18px;
}
input[type="submit"]:hover,[type="reset"]:hover 
{ 
 background-color: white; 
 color: black; 
} 
h3 a 
{ 
 margin-top: 5px; 
 color: white; 
 font-size: 15px; 
} 
h3 a:hover 
{ 
 color: orange; 
} 
</style> 
</head> 
<body> 
 <form method="post" action="reg2.php"> 
 <table> 
 <tr><h3>Registation Here</h3></tr> 
 <tr> 
 <td>User name</td> 
<td><input type="text" name="uname" placeholder="Enter user name"></td>
</tr>
<tr> 
<td>Password</td> 
<td><input type="password" name="pass" placeholder="Enter password"></td> 
</tr> 
<tr> 
<td>Email Id</td> 
<td><input type="email" name="emailid" placeholder="Enter email id"></td> 
</tr> 
<tr> 
<td>Number</td> 
<td> 
<input type="text" name="num" placeholder="Enter number"></td> 
</tr> 
<td> Birth Date </td> 
<td><input type="Date" name="BDate"> </td>
 </select> 
</td> 
</tr> 
<tr>
<td>Gender</td> 
<td><input type="radio" name="gen" value="male">Male 
<input type="radio" name="gen" value="female">Female 
</td> 
</tr> 

<td>
	<input type="submit" name="sub" value="submit"> 
<input type="reset" name="set" value="reset"> 
</td> 
</tr> 
<tr><td colspan="2"><h3><a href="loginform2.php">Login</a></h3></td></tr> 
</table> 
</form> 
</body> 
</html>



















