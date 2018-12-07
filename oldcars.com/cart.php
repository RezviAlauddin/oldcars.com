<!DOCTYPE html>
<html>
<head>
	<title>Old Cars</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

</head>
<body>
<div class="main">
	<div class="nav">
		<ul>
			<li id="home"><a href="index.php"><img src="image/logo1.jpg" width="200px" height="40px"></a></li>			
			<li id="home"><a href="index.php">Home</a></li>
			<li id="nav_right"><a href="login.php">LogIn</a></li>
			<li id="nav_right"><a href="signin.php">SingIn</a></li>
			<li id="nav_right"><a href="cart.php">Cart</a></li>
			<!-- <li id="nav_right"><input id="search" type="text" name="search"><input id="search" type="submit" name="search_btn" value="Search"></li>	 -->
		</ul>
	</div>
	<div style="background-color: orange;">
		<table style="text-align: center;"><tr><td>ID</td><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NAME</td><td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PRODUCT CODE</td><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  AMOUNT</td></tr></table>
<?php 

		$conn = mysqli_connect("localhost","root","","oldcars");
		$cart="SELECT* FROM cart";
		 $input_qur = mysqli_query($conn,$cart);

		 while($row = mysqli_fetch_array($input_qur)){
		 $amt=$row['amount'];
		 	if ($amt>0) {
		 	echo $row['id'].".&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ";
		 	echo $row['product_name']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		 	echo $row['product_code']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		 	echo $amt."<br>";
		 		# code...
		 	}
		 

 
	}

?></div>
<div align="center"><button style="height: 60PX;width: 100px; ">Proceed To Checkout</button></div>

	
</div>
</body>
</html>