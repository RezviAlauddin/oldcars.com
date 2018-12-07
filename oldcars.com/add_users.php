<!DOCTYPE html>
<html>
<head>
	<title>Old Cars</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

</head>
<body>

<div class="main" >
	<div class="nav">
		<ul>
			<li id="home"><a href="home.php"><img src="image/logo1.jpg" width="200px" height="40px"></a></li>			
			<li id="home"><a href="home.php">Home</a></li>
			<li id="nav_right"><a href="users.php">ALL USERS</a></li>
			<li id="nav_right"><a href="all_sells.php">Sold Items</a></li>
			<li id="nav_right"><a href="admin.php">admin</a></li>
			<!-- <li id="nav_right"><input id="search" type="text" name="search"><input id="search" type="submit" name="search_btn" value="Search"></li>	 -->
		</ul>
	</div>
	<div>
		<table bgcolor="white" width="100%" height="350px"> 
			<tr><td><a href="add_product.php"> add product</a></td><td><a href="add_users.php">user panel</a></td><td></td></tr>
		</table>
	</div>

	<div>
		<form action="#" method="posr">
			<p> username :<input type="text" name="name"></p>
			<p> enail :<input type="email" name="email"></p>
			<input type="password" name="password">
			<p> gender :<input type="radio" name="gender" value="male">male<input type="radio" name="gender" value="female">female</p>
			<p>address :<input type="text" name="address" ></p>
			<input type="submit" name="submit">





		</form>
<?php
	if (isset($_POST)) {
				# code...
			
			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$gender=$_POST['gender'];
			$address=$_POST['address'];
		$conn = mysqli_connect("localhost","root","","oldcars");
		$product="INSERT INTO cart (email,username,password,gender,address,bought,sold)
		VALUES ('$email','$name','$password','$gender','$address',0,0)
		";
		if (mysqli_query($conn, $product)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
	}		?>
	</div>
</div>
</body>
</html>
