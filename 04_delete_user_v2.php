<?php
session_start();
if ($_SESSION['login_user'] !== "Graeme") {
		header("location:index_v3.php");
}
if (!isset($_SESSION['login_user'])) {
	header("location:01_login_v3.php");
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
			
		<title>Graeme's Music: Delete User</title>
		
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
		<link rel="stylesheet" href="css/style_v3.css">
		
		<!-- Icons -->
		<script src="https://kit.fontawesome.com/9f28203115.js" crossorigin="anonymous"></script>
		
		<!-- Javascript File -->
		<script src="js/script.js" defer></script>

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="images/music-notes.png">
			
	</head>
	
	<body>
		
		<!-- Holds website together -->
		<div class="grid-container">
			
			<!-- Holds website together -->
		<div class="grid-container">
			
			<!-- Navigation Bar -->
			<div class="nav">
				
				<!-- Left Side -->
				<h1 class="fa-solid fa-bars burger" id="burger"></h1>
				
				<ul class="nav-links nav-links-left" id="navLinksLeft">
					<li><a href="index_v3.php"><span class="fa fa-solid fa-house"></span>Home</a></li>
					<li><a href="playlist1_v3.php"><span class="fa fa-solid fa-headphones"></span>Playlist 1</a></li>
					<li><a href="playlist2_v2.php"><span class="fa fa-solid fa-headphones"></span>Playlist 2</a></li>
					<li><a href="contact_v3.php"><span class="fa fa-solid fa-phone"></span>Contact</a></li>
    			</ul>
				
				
				<!-- Right Side -->
				<h1 class="fa-solid fa-circle-user" id="userControls"></h1>
				
				<ul class="nav-links nav-links-right" id="navLinksRight">
					<li><a href="01_login_v3.php">Log Out</a></li>
					
					<?php
						if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
					?>
					
						<li><a href="02_add_user_v2.php">Add User</a></li>
						<li><a href="03_update_password_v2.php">Update Password</a></li>
						<li><a href="04_delete_user_v2.php">Delete User</a></li>
					<?php
						}
					?>
					
				</ul>
			
			</div>
			
			<div class="header">
			
				<!-- No Header on Admin Pages -->
			
			</div>
			
			<div class="content content-bg">
				
				<div class="admin">
				
					<h1>GRAEME'S MUSIC</h1>
				
				<!-- Delete User Form -->
				<div class="form-box">
					
					<h1>Delete User</h1>
					
					<form method = "post" id = "04_delete_user">

						<h4><label for = 'login'>Name:</label></h4>
						<input type="text" name = "UserName" placeholder="Enter user name"/><br/><br/>
						
						<h4><input type="submit" value="Delete" /></h4>

					</form>
					
					<!-- PHP for Deleting User -->
					<?php
							
								require "Music_Database_mysqli.php";
								print"<p class = 'red'>Connected to Server</p>";
							
								if (isset($_POST['UserName'])) {
									$UserID = $_POST['UserName'];
									
									// create a variable to store sql code for 'delete users' query
									$deletequery = "DELETE FROM users WHERE User_ID = '$UserID'";
									
									if (mysqli_query($conn, $deletequery))
									{
										echo "<p class = 'grey'>Record Deleted</p>";
									}
									else 
									{
										echo "<p class = 'grey'>Error Deleting Record</p>";
									}
								}
							
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
