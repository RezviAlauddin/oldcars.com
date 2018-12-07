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
	<div class="sell">
		<form action="models.php" method="post">
			<p>Car name:<input type="text" name="cname"></p>
			<p>Car Model: <input type="text" name="model"></p>
			<p>Company:<input type="text" name="company"></p>
			<p>Sample Picture:<input type="file" name="Picture1"><input type="file" name="Picture2"><input type="file" name="Picture3"></p>
			<input type="submit" name="sell" value="Post Add">
		</form>
	</div>
</div>
</body>
</html>