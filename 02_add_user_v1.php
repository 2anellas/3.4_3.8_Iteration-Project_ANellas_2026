<?php
session_start();
if ($_SESSION['login_user'] !== "Graeme") {
		header("location:index_v2.php");
}
if (!isset($_SESSION['login_user'])) {
	header("location:01_login_v2.php");
	exit();
} else {
	$User = $_SESSION['login_user'];
}

// connect to php
require "Music_Database_mysqli.php";
?>


<!DOCTYPE html>
<html lang="en">
	
	<head>
			
		<title>Graeme's Music: Add User</title>
		
		<!-- Meta Data -->
		<meta charset="utf-8">
		
		<!-- Compatible with Microsoft Edge Browser -->
		<meta http-equipv="X-UA-Compatible" content="IE=edge">
		
		<!-- Needed for Website to be Responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Keywords for Search Engine -->
		<meta name="Keywords" content="Music, Genres, Albums"/>
		<meta name="Author" content="Ana Nellas"/>
		<meta name="Description" content="Admin Page for Graeme's Music"/>
		
		<!-- css Stylesheet -->
		<link rel="stylesheet" href="css/style_v2.css">
		
		<!-- Icons -->
		<script src="https://kit.fontawesome.com/9f28203115.js" crossorigin="anonymous"></script>
		
		<!-- Javascript File -->
		<script src="js/script.js" defer></script>
			
	</head>
	
	<body>
		
		<!-- Holds website together -->
		<div class="grid-container">
			
			<!-- Navigation Bar -->
			<div class="nav">
				
				<!-- Left Side -->
				<h1 class="fa-solid fa-bars burger" id="burger"></h1>
				
				<ul class="nav-links nav-links-left" id="navLinksLeft">
					<li><a href="index_v2.php">Home</a></li>
					<li><a href="playlist1_v2.php">Playlist 1</a></li>
					<li><a href="playlist2_v1.php">Playlist 2</a></li>
					<li><a href="contact_v2.php">Contact</a></li>
    			</ul>
				
				
				<!-- Right Side -->
				<h1 class="fa-solid fa-circle-user" id="userControls"></h1>
				
				<ul class="nav-links nav-links-right" id="navLinksRight">
					<li><a href="01_login_v2.php">Log Out</a></li>
					
					<?php
						if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
					?>
					
						<li><a href="02_add_user_v1.php">Add User</a></li>
						<li><a href="03_update_password_v1.php">Update Password</a></li>
						<li><a href="04_delete_user_v1.php">Delete User</a></li>
					<?php
						}
					?>
					
				</ul>
			
			</div>
			
			<div class="header">
			
				<!-- No header for admin pages -->
			
			</div>
			
			<div class="content">
				
				<div class="admin">
				
					<h1>GRAEME'S MUSIC</h1>
				
				<!-- Add User Form -->
				<div class="form-box">
					
					<h1>Add User</h1>
					
					<form method = "post" id = "02_add_user">

						<h4><label for = 'login'>New Name:</label><br/>
						<input type = "text" name= "username" placeholder = "Enter user name" required/></h4><br/>
							
						<h4><label for = 'login'>New Password:</label><br/>
						<input type = "password" name="password" placeholder = "Enter user password" required/></h4><br/>
							
						<h4><input type="submit" value="Insert"/></h4>

					</form>
					
					<!-- PHP to Add User -->
					<?php
							
						// connect to php
						require "Music_Database_mysqli.php";
						print"<p class = 'red'>Connected to Server</p>";
					
						if (isset($_POST['username'])) {
							$UserID = $_POST['username'];
							$PW = $_POST['password'];
							
						// create a variable to store sql code for the "Add Users" query
						$insertquery ="INSERT INTO users( User_ID, Password ) VALUES( '$UserID','$PW')";
							
						if (mysqli_query($conn,$insertquery))
						{
							echo"<p class = 'red'>Record Inserted</p>";
						}
						else
						{
							echo"<p class = 'red'>Error Inserting Record</p>";
						}}
						
						?>
				
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
