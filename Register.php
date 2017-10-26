<html>
<head>
<title>Fashion auction-registration</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<pre>
                                             <img src="fashion/t.jpg" style="width:550px;">
</pre>
<font size="5" color="red"><br><br>
<a href="indexx.php"> Home </a><a href="Register.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegistration </a><a href="loginn.php">&nbsp&nbsp&nbsp&nbspLogin </a>
</font>


<?php

if(isset($_SESSION['message']))
{
	echo "<div id='error_msg'>" .$_SESSION['message'] ."</div>";
	unset($_SESSION['message']);
}

?>

<h2 class="h2">Sign Up</h2>

<form id="form" action="register.php" method="POST">

<table class="table" align="center">

<tr>
<td> Username: </td>
<td><input type="text" id="username" class="textinput" name="username" /></td>
</tr>

<tr>
<td> Email: </td>
<td><input type="email" id="email" class="textinput" name="email" /></td>
</tr>

<tr>
<td> Password: </td>
<td><input type="password" id="password" class="textinput" name="password" /></td>
</tr>

<tr>
<td> Confirm Password: </td>
<td><input type="password" id="password1" class="textinput" name="password1" /></td>
</tr>

<tr>
<td>  </td>
<td><input type="submit" name="register_btn" value="Register" /></td>
</tr>

</table>

</form>








</div>
<!--   content area ends-->

<!--  footer content starts-->
<div class="footer">  Leading bidding site.... </div>
<!--  footer content ends-->

</div>

<!--  main content ends-->

</body>
</html>

<!-- 

<?php

session_start();

$db=mysqli_connect("localhost","root","","fashion1");

if(isset($_POST['register_btn']))
{
	//session_start();
	
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password= mysqli_real_escape_string($db,$_POST['password']);
	$password1= mysqli_real_escape_string($db,$_POST['password1']);
	
	if($password==$password1)
	{
		//$password=md5($password);
		$sql="INSERT INTO mytable1 (username,email,password) VALUES('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message']="you are now logged in";
		$_SESSION['username']=$username;
		header("location:reghome.php");
		
	}
	
	else
	{
		//echo 'both password dont match';
		
		$_SESSION['message']="both passowrds dont match";
	}
	
}


?>
-->