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
			<li id="home"><a href="home.php"><img src="image/logo1.jpg" width="200px" height="40px"></a></li>			
			<li id="home"><a href="home.php">Home</a></li>
			<li id="nav_right"><a href="users.php">ALL USERS</a></li>
			<li id="nav_right"><a href="all_sells.php">Sold Items</a></li>
			<li id="nav_right"><a href="admin.php">admin</a></li>




			<!-- <li id="nav_right"><input id="search" type="text" name="search"><input id="search" type="submit" name="search_btn" value="Search"></li>	 -->
		</ul>
	</div>

	<div class="display">
		<h1 align="center"> ALL USERS</h1>
				<?php 
						 	
		 	
		 	$id =$name=$email=$password=0;
		$conn = mysqli_connect("localhost","root","","oldcars");
		$product="SELECT* FROM user";
		 $input_qur = mysqli_query($conn,$product);
		 ?>
		 <table width="100%" >
		 	
		 <?php
		 $count=1;
		 while($row = mysqli_fetch_array($input_qur)){

		 	


		 	
		 	$id = $row['id'];
		 	$name=$row['username'];
		 	$email=$row['email'];
		 	$password=$row['password'];
		 	$gender=$row['gender'];
		 	$address=$row['address'];
		 	echo "<tr><td>".$id."</td><td>".$name."</td><td>".$email."</td><td>".$password."</td><td>".$gender."</td><td>".$address."</td></tr><br>";


	}

		?>
		</table>
	</div>
</div>
</body>
</html>
