<!DOCTYPE html>
<html>
<head>
	<title>Old Cars</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

</head>
<body>
<div class="main" style="background-color: #ff9900;">
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
	<div>
		<table>
			<tr>

<?php

		$conn = mysqli_connect("localhost","root","","oldcars");
		if(isset($_GET['product_code'])){
			$pro_code=$_GET['product_code'];
                if($conn){
                    $my_qur = "SELECT * FROM product WHERE product_code = '$pro_code'";

                    $result = mysqli_query($conn,$my_qur);

                    if($result){
                        while ($row = mysqli_fetch_array($result)) {

                        	$id=$row['product_id'];
                        	$name=$row['product_name'];
                        	$code=$row['product_code'];
                        	$image=$row['product_image'];
                        	# code...
                        }
                        echo "<td>";

                        ?>

                     <img src="image/<?php echo $image ?>" alt="Avatar" class="image" style="width:400px;height: 350px; text-align: center;
                     "  >

<?php
 echo "</td><td></td><td>";
 ?>
 <form action="#" method="POST" align="center" >
 	
 
 <?php

 echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Product Name :".$name."<br>";
 echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Product Code :".$code."<br><br>";
 echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp How much you want to Buy?";
 ?>
 <p><input type="number" name="amount" min="0" onclick="submit"></p>
 <input type="submit" name="submit" value="ADD TO CART" style="background-color: #33cc33; height: 50px;width: 110px; border-radius: 14px;">


 </form>
 <?php

							if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $amount=$_POST['amount'];
  $cart="INSERT INTO cart (product_code,product_name,amount)
		VALUES ('$code','$name','$amount')
		";
		if (mysqli_query($conn, $cart)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $cart . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
	}		

		}
	}
}

?>
</tr>
</table>
</div>

</div>


</body>
</html>