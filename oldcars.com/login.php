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
	<div>

	</div>
	<div class="login">
		<table border="2px">
			<tr><th>Log In</th></tr>
			<tr>
				<td><pre>
		<form action="#" method="POST">

			<p>Email            :<input type="email" name="email">         </p>
			<p>Password         :<input type="password" name="password">         </p>
			
			 <input type="submit" name="login" value="Log In">

			</pre>
			</td>
			</tr>

		</form>
		</table>

    <body>
       <?php
            session_start();
            // $email = "";
            // $password = "";
            
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $email = valid_the_input($_POST['email']);
                $password = valid_the_input($_POST['password']);
                if($email != null && $password != null){
                    $conn = mysqli_connect("localhost","root","","oldcars");
                    if($conn){
                        $my_qur = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
                        $insert_qur = mysqli_query($conn,$my_qur);
                        $result = mysqli_num_rows($insert_qur);
                        if($result>0){
                            $_SESSION['user_email'] = $email;
                            $_SESSION['user_password'] = $password;
                            if($email == "rezvi@gmail.com" && $password == "admin"){
                                 header("Location:admin.php");

                            }
                            else{
                                header("Location:index.php");
                            }
                        }
                        else{
                            echo "Wrong Pass or Email!";
                            header("Location:login.php");
                        }
                    }
                    else{
                        echo "NOT CONNECTED";
                    }
                }
            }
            
            function valid_the_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
	</div>
</div>
</body>
</html>