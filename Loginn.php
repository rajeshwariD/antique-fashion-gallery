

<?php

session_start();

$db=mysqli_connect("localhost","root","","fashion1");

if(isset($_POST['login_btn']))
{
	
	
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password= mysqli_real_escape_string($db,$_POST['password']);
	
	
	$sql= "SELECT * FROM mytable1 WHERE username= '$username' AND password='$password'";
	$result=mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		
		$_SESSION['message']="you are now logged in";
		$_SESSION['username']=$username;
		header("location:reghome.php");
		
	}
	
	else
	{
		
		$_SESSION['message']="username/password combination is incorrect";
		
	}
}

?>








<html>
<head>
<title>Fashion auction</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<!--  main content starts-->

<div class="main_wrapper">

<!--  navigation content starts-->
<div id="navbar"> 

<pre>
                                             <img src="fashion/a.jpg" style="width:550px;">
</pre>
<font size="5" color="red"><br><br>
<a href="indexx.php"> Home </a><a href="Register.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegistration </a><a href="loginn.php">&nbsp&nbsp&nbsp&nbspLogin </a>
</font>

</div>
<!--  navigation content ends-->

<!--   content area starts-->
<div class="content_wrapper"> 





<div class="header">
<h2 class="h2"> Login </h2>
</div>

<?php

if(isset($_SESSION['message']))
{
	echo "<div id='error_msg'>" .$_SESSION['message'] ."</div>";
	unset($_SESSION['message']);
}

?>

<form action="loginn.php" method="POST">

<table class="table" align="center">

<tr>
<td> Username: </td>
<td><input type="text" id="username" class="textinput" name="username" /></td>
</tr>


<tr>
<td> Password: </td>
<td><input type="password" id="password" class="textinput" name="password" /></td>
</tr>

<tr>
<td>  </td>
<td><input type="submit" name="login_btn" value="Login" /></td>
</tr>

</table>

</form>






</div>
<!--   content area ends-->

<!--  footer content starts-->
<div class="footer"> Leading bidding site.... </div>
<!--  footer content ends-->

</div>

<!--  main content ends-->

</body>
</html>
