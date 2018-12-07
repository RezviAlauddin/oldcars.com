<!DOCTYPE html>
<html>
<head>
	<title>Old Cars</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
	<script>
		function show_image(img_id){
			window.location ="show_product.php?product_code="+img_id;
		}
	</script>
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

<div class="slider">
	<div class="slider_footer">
		<h1 align="center"> Find cars within your limit</h1>

	<form action="models.php" method="post" >
		<div id="search_banner">
			
		<div id="search_one">
			

			<select name="model">
			<option value="fa-car" ><label><i class="fas fa-car"></i></label>Model</option>
			  <option value="nishan" >nishan</option>
			  <option value="ranger">ranger</option>
			  <option value="maruti">maruti</option>
			</select>

			<select>
			  <option value="null">Brand</option>
			  <option value="nishan">nishan</option>
			  <option value="ranger">ranger</option>
			  <option value="maruti">maruti</option>
			  <option value=""></option>
			</select>


			 <input type="submit" value="Advance Search" id="asearch">
		</div>

		</div>
		</form>

		</div>
</div>

	<div class="display">
		<h1 align="center"> Sample Models</h1>
				<?php 
		$conn = mysqli_connect("localhost","root","","oldcars");
		$product="SELECT* FROM product";
		 $input_qur = mysqli_query($conn,$product);
		 ?>
		 <table width="100%" >
		 	<tr>
		 <?php
		 $count=1;
		 while($row = mysqli_fetch_array($input_qur)){

		 	
		 	if($count<=3){


		 	echo "<td>";
		 	$img_id = $row['product_code'];

		 	?>
        <div class="container">

  			<img src="image/<?php echo $row['product_image'];?> " alt="Avatar" class="image" style="width:400px;height: 350px;"  >
  				<div class="middle" onclick="show_image(<?php echo $img_id;?>)">
    				<div class="text" onclick="show_image(<?php echo $img_id;?>)">Buy Now</div>
  				</div>
		</div>
		 	 
		<?php 

		echo "</td>";
		$count++;

	}else if ($count>3) {
		echo "</tr>";
		echo "<tr>";

		$count=1;
		# code...
	}
		
		?>
		
		<?php
	}

		?>
		</table>
	</div>

	<div class="footer"> 
		address and other things will be here
	</div>
</div>

</body>
</html>