<?php

session_start();


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
                                             <img src="fashion/t.jpg" style="width:550px;">
</pre>
<font size="5" color="red"><br><br>
<a href="indexx.php"> Home </a><a href ="product.php"> &nbsp&nbsp&nbsp&nbsp     View products available</<a href="Register.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegistration </a><a href="loginn.php">&nbsp&nbsp&nbsp&nbspLogin </a>
</font>

</div>
<!--  navigation content ends-->

<!--   content area starts-->
<div class="content_wrapper"> 




<div class="header">
<h1 class="h2"> WELCOME BACK </h1>
</div>

<?php

if(isset($_SESSION['message']))
{
	echo "<div id='error_msg'>" .$_SESSION['message'] ."</div>";
	unset($_SESSION['message']);
}

?>

<div><h4 class="h4"> Welcome <?php echo $_SESSION['username']; ?></h4></div>
<ul class="me"><li><a href="logout.php"><b>Logout</b></a></li></ul>




</div>
<!--   content area ends-->

<!--  footer content starts-->
<div class="footer">  Leading bidding site.... </div>
<!--  footer content ends-->

</div>

<!--  main content ends-->

</body>
</html>
