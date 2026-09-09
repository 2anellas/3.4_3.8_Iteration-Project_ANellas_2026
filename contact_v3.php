<?php
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:01_login_v3.php");
	}
	else {
		$User = $_SESSION['login_user'];
	}
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
			
				<img src="images/Banner.png"/>
			
			</div>
			
			<div class="content">
			
				<div class="contact-flex">
					
					<div class="message-box">

						<h1>LEAVE A MESSAGE</h1>
						
						<p>Need to contact us? Please don’t hesitate to fill out a contact form. We aim to get back to you as soon as possible!</p>
						
						<hr>
						
						<p><span class="fa fa-solid fa-phone"></span><span class="bold">Phone Number: </span> <span class="underline">04-232 8184 (Tawa College)</span></p>
						
						<p><span class="fa fa-solid fa-envelope"></span><span class="bold">Email: </span> <span class="underline">2anellas@tawacollege.school.nz</span></p>

					</div>
					
					<!-- Contact Form -->
					<div class="contact-box">

						<form action="connect_v1.php" method="post" id="contact_form">
							
							<h4><label for="name">Name:</label></h4>
                        	<input input type="text" id="name" name="name" placeholder="Your full name"/><br/><br/>
						
                        	<h4><label for="email">Email:</label></h4>
                        	<input type="text" id="email" name="email" placeholder="Your email address"/><br/><br/>
							
							<h4><label for="message">Message:</label></h4>
							<textarea id="body" name="message" placeholder="Write something..."></textarea>
							
							<input type="submit" value="Submit">
							
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
