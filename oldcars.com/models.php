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
			<li id="nav_right"><a href="sell.php">Sell</a> </li>
			<!-- <li id="nav_right"><input id="search" type="text" name="search"><input id="search" type="submit" name="search_btn" value="Search"></li>	 -->
		</ul>
	</div>
	<div >
		<table border="1px" style="background-color: #cc6600;width: 100%;">
			
		<?php 
		$count=0;
		$model=$_POST['model'];
		$conn = mysqli_connect("localhost","root","","oldcars");
		$product="SELECT* FROM product WHERE product_name='$model' ";
		 $input_qur = mysqli_query($conn,$product);
		 echo "<tr>";

		 while($row = mysqli_fetch_array($input_qur)){
		 	echo "<td>";
		 	
		 	?>
		 <img src="image/<?php echo $row['product_image'];?> " height="250px" width="320px" >

		 </td><td>
		 	<?php
		echo "ID&nbsp &nbsp &nbsp :&nbsp &nbsp &nbsp".$row['product_id']."&nbsp <br> ";
		echo "Name :&nbsp &nbsp &nbsp".$row['product_name']."&nbsp<br> ";
		echo "Code :&nbsp &nbsp &nbsp".$row['product_code']."&nbsp <br> ";

		 	?>
		 	 </td>
		<?php 
		$count++;
		if ($count==3) {
			echo "</tr><tr>";
			$count=0;
			# code...
		}
	}

		?>
		</table>
	</div>
</div>
</body>
</html>