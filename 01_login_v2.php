<?php
	ob_start();
	session_start();
		$error = NULL;
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				// connect php
				require "Music_Database_mysqli.php";
				
				// username and password from form
				$myusername = mysqli_real_escape_string($conn,$_POST["username"]);
				$mypassword = mysqli_real_escape_string($conn,$_POST["password"]);
				
				$query = "SELECT User_ID FROM users WHERE User_ID = '$myusername' and Password = '$mypassword'";
				
				$result = mysqli_query($conn,$query);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
				$count = mysqli_num_rows($result);
				
			if ($count == 1) {
				$_SESSION['login_user'] = $myusername;

    			// check if the user is 'Graeme'
    			if ($myusername == "Graeme" || $myusername == "graeme") {
        			$_SESSION['admin'] = true;
    			} else {
        			$_SESSION['admin'] = false;
    				}

    			header("location:index_v2.php");
			} else {
    			$error = "Error Invalid Username or Password";
			}
		}
	ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
	
	<head>
			
		<title>Graeme's Music: Login Page</title>
		
		<!-- Meta Data -->
		<meta charset="utf-8">
		
		<!-- Compatible with Microsoft Edge Browser -->
		<meta http-equipv="X-UA-Compatible" content="IE=edge">
		
		<!-- Needed for Website to be Responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Keywords for Search Engine -->
		<meta name="Keywords" content="Music, Genres, Albums"/>
		<meta name="Author" content="Ana Nellas"/>
		<meta name="Description" content="Login Page for Graeme's Music"/>
		
		<!-- css Stylesheet -->
		<link rel="stylesheet" href="css/style_v2.css">
		
		<!-- Icons -->
		<script src="https://kit.fontawesome.com/9f28203115.js" crossorigin="anonymous"></script>
		
		<!-- Javascript File -->
		<script src="js/script.js" defer></script>
			
	</head>
	
	<body>
		
		<!-- Holds Website Together -->
		<div class="grid-container">
			
			<div class="nav">
				
				<!-- Left Non Admin Nav -->
				<h1 class="fa-solid fa-bars burger" id="burger"></h1>
				
				<ul class="nav-links nav-links-left" id="navLinksLeft">
      				<li><a href="01_login_v1.php">Login</a></li>
    			</ul>
			
			</div>
			
			<div class="header">
			
				<!-- Header is not used on administrative pages -->
			
			</div>
			
			<div class="content">
				
				<div class="admin">
				
					<h1>GRAEME'S MUSIC</h1>
					
				<!-- Login Box -->
				<div class="form-box">
					
					<h1>Login</h1>
					
					<form method = "post" id = "01_login">

						<h4><label for = "login">Name:</label></h4>
						<input type = "text" name = "username" placeholder = "Enter username" required/><br/><br/>

						<h4><label for = "password">Password:</label></h4>
						<input type = "password" name = "password" placeholder = "Enter password" required/><br/><br/>

						<input type = "submit" value = "Submit"/><br/>

					</form>
				
					
				
				</div>
				
				</div>
				
			</div>
			
			<!-- Footer Space -->
			<div class="footer">
			
				<h5>&copy; Copyright ANellas Tawa College All Rights Reserved 2025</h5>
			
			</div>
			
		</div>
		
		<!-- nav javascript -->
		<script src="js/nav_v2.js"></script>
		
	</body>
	
</html>
