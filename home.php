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
<a href="indexx.php"> Home </a><a href="Register.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegistration </a><a href="loginn.php">&nbsp&nbsp&nbsp&nbspLogin </a>

</font>


</div>
<!--  navigation content ends-->

<!--   content area starts-->
<div class="content_wrapper"> 





<?php

if(isset($_SESSION['message']))
{
	echo "<div id='error_msg'>" .$_SESSION['message'] ."</div>";
	unset($_SESSION['message']);
}

?>

<div><h2 class="h2"> Welcome !</h2></div>





</div>
<!--   content area ends-->

<!--  footer content starts-->
<div class="footer">  Leading bidding site.... <img src="fashion/d.jpg" style="width:200px;"> <img src="fashion/e.jpg" style="width:200px;"> <img src="fashion/f.jpg" style="width:200px;"> <img src="fashion/g.jpg" style="width:200px;">
</div> 

<!--  footer content ends-->

</div>

<!--  main content ends-->

</body>
</html>
