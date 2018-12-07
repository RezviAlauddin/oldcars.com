<!DOCTYPE html>
<html>
<head>
	<title>Old Cars</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

</head>
<body class="s">
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
	<div class="signin">
		<table border="2px">
			<tr><th>Sign In</th></tr>
			<tr>
				<td><pre>
		<form action="#" method="POST">
			<p>Name 		:<input type="text" name="name">             </p>
			<p>Email            :<input type="email" name="email">         </p>
			<p>Password         :<input type="password" name="password">         </p>
			<p>Gender :
			<input type="radio" name="gender" value="male" checked>Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="others">Others</p>
			<p>Address :  <br>                 <textarea maxlength="100" height="10px" name="address"></textarea></p>
			 <input type="submit" name="login" value="Sign In" >
			</pre>
			</td>
			</tr>

		</form>
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								# code...
							
			if (isset($_POST)) {
				# code...

			$name=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$gender=$_POST['gender'];
			$address=$_POST['address'];
		$conn = mysqli_connect("localhost","root","","oldcars");
		$product="INSERT INTO user (email,username,password,gender,address,bought,sold)
		VALUES ('$email','$name','$password','$gender','$address',0,0)
		";
		if (mysqli_query($conn, $product)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
	}	
	}	?>
		</table>
	</div>
</div>
</body>
</html>