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
			
		<title>Graeme's Music: Home Page</title>
		
		<!-- Meta Data -->
		<meta charset="utf-8">
		
		<!-- Compatible with Microsoft Edge Browser -->
		<meta http-equipv="X-UA-Compatible" content="IE=edge">
		
		<!-- Needed for Website to be Responsive -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Keywords for Search Engine -->
		<meta name="Keywords" content="Music, Genres, Albums"/>
		<meta name="Author" content="Ana Nellas"/>
		<meta name="Description" content="Graeme's Music"/>
		
		<!-- css Stylesheet -->
		<link rel="stylesheet" href="css/style_v3.css">
		
		<!-- Icons -->
		<script src="https://kit.fontawesome.com/9f28203115.js" crossorigin="anonymous"></script>
		
		<!-- Javascript File -->
		<script src="js/accordion.js" defer></script>
			
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
			
			<!-- Website Header -->
			<div class="header">
			
				<img src="images/Banner.png"/>
			
			</div>
			
			<!-- Main Content for Home Page -->
			<div class="content">
				
				<!-- Welcome Section -->
				<div class="panel panel-1">
				
					<div class="text">
					
						<h1>WELCOME TO GRAEME'S MUSIC</h1>
						
						<h2>EXPLORE NEW SOUNDS</h2>
						
						<p>Music is constantly evolving, and so is our library. Browse newly released albums, trending artists, and hidden gems recommended by listeners around the world. Find fresh sounds, revisit iconic records, and build playlists that match every vibe.</p>
					
					</div>
					
					<div class="image">
					
						<img src="images/image2-edited.jpg"/>
						
						<p>Attribution: Wikimedia Commons | Paramore Concert</p>
						
					</div>
				
				</div>
				
				<!-- Album Carousel -->
				<div class="panel panel-2">
				
					<h1><span class="fa fa-solid fa-star"></span>FEATURED ALBUMS</h1>
					
					<div class="album-carousel">

        <button class="album-carousel-btn album-prev">
            <span class="fa fa-solid fa-arrow-left"></span>
        </button>

        <div class="album-carousel-window">

            <!-- Album 1 -->
            <div class="album-card active">
                <img src="images/album1-edited.jpg" alt="1 Album Name by Artist Name">

                <div class="album-info">
                    <h3>For You</h3>
                    <p>Selena Gomez</p>
                </div>
            </div>


            <!-- Album 2 -->
            <div class="album-card">
                <img src="images/album2-edited.jpg" alt="2 Album Name by Artist Name">

                <div class="album-info">
                    <h3>News of the World</h3>
                    <p>Queen</p>
                </div>
            </div>


            <!-- Album 3 -->
            <div class="album-card">
                <img src="images/album3-edited.jpg" alt="3 Album Name by Artist Name">

                <div class="album-info">
                    <h3>The Unknown</h3>
                    <p>NovaTrax</p>
                </div>
            </div>

        </div>

        <button class="album-carousel-btn album-next" >
            <span class="fa fa-solid fa-arrow-right"></span>
        </button>

    </div>
					
					<p>Discover albums that define moments, moods, and memories. From chart-topping pop anthems to timeless classics, our collection brings together music from every genre and generation. Whether you’re searching for energetic beats, relaxing acoustic tracks, or deep lyrical storytelling, there’s an album waiting to become your next favourite soundtrack.</p>
				
				</div>
				
				<!-- Accordion and Video -->
				<div class="panel panel-3">
				
					<div class="video">
					
						<iframe width="560" height="315" src="https://www.youtube.com/embed/hXCwQB9De88?si=9IWtfopHIxGKJqNl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					
					</div>
					
					<div class="accordion-container">
					
						<div class="accordion-item">
					
						<button class="accordion">WHY ALBUMS MATTER</button>
						<div class="section">
							<p>Albums tell a story beyond a single song. They capture emotion, creativity, and artistic vision in a way that connects listeners to the music on a deeper level. Every track contributes to the journey, creating an experience that’s meant to be heard from beginning to end.</p>
						</div>
					
					</div>
					
					<div class="accordion-item">
					
						<button class="accordion">GENRES</button>
						<div class="section">
							
							<ul>
								<li>Pop</li>
								<li>Hip-Hop & Rap</li>
								<li>Rock</li>
								<li>Indie</li>
								<li>Electronic</li>
								<li>Jazz</li>
								<li>Country</li>
								<li>Classical</li>
							</ul>
							
							<p>No matter your taste, there’s always something new to discover.</p>
							
						</div>

					
					</div>
					
					<div class="accordion-item">
					
						<button class="accordion">BUILD YOUR LIBRARY</button>
						<div class="section">
							<p>Every music fan has a unique taste, and building a collection is a great way to showcase the albums that matter most to you. Whether you're drawn to chart-topping hits, timeless classics, or hidden gems waiting to be discovered, exploring different artists and genres helps create a collection that reflects your personal musical journey.

<br><br>Our extensive database makes it easy to browse albums from every era and style. From legendary records that shaped music history to the latest releases making waves today, there's always something new to add to your collection. Explore, discover, and grow a library of music that you'll keep coming back to for years to come.
</p>
						</div>
										
					</div>	
						
					</div>
					
				</div>
				
				<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="fa fa-solid fa-arrow-up"></span></button>
				
			</div>
			
			<!-- Footer Space -->
			<div class="footer">
			
				<h5>&copy; Copyright ANellas Tawa College All Rights Reserved 2025</h5>
			
			</div>
			
		</div>
		
		<!-- back to top button javascript -->
		<script src="js/backtotop.js"></script>
		
		<!-- nav javascript -->
		<script src="js/nav_v2.js"></script>
		
		<!-- carousel javascript -->
		<script type="text/javascript" src="js/image_carousel.js"></script>
		
	</body>
	
</html>
