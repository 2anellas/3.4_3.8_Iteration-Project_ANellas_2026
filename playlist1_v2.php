<?php
	session_start();
	if (!isset($_SESSION['login_user'])) {
		header("location:01_login_v2.php");
	}
	else {
		$User = $_SESSION['login_user'];
	}
?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
			
		<title>Graeme's Music: Playlist 1</title>
		
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
			
			<!-- Connects Page to SQL Database -->
			<?php
			
				//Get the connection to the database
				require_once("Music_Database_mysqli.php");
			
			?>
			
			<!-- Header -->
			<div class="header">
			
				<img src="images/Screen Shot 2026-08-07 at 6.00.42 PM.png"/>
			
			</div>
			
			<!-- Main Content -->
			<div class="content">
				
				<div class="playlist-flex">
					
					<!-- Holds Data Table -->
					<div class="query-box">

						<h1>Playlist #1</h1>
						<h2>Music tracks sorted by Song title and then Artist(s) Z - A</h2>
						
						<!-- Field Name Headings -->
						<div class="field-names">
							<div><h2>Song_ID</h2></div>
							<div><h2>Title</h2></div>
							<div><h2>Artist</h2></div>
							<div><h2>Album</h2></div>
							<div><h2>Genre</h2></div>
							<div><h2>Duration</h2></div>
						</div>
						
						<!-- SQL Query 1 -->
						<?php
				$query = ("SELECT s.Song_ID, s.Title, r.Artist, album.Album, h.Genre, s.Duration FROM songdetails AS s INNER JOIN album ON s.Album_ID = album.Album_ID JOIN songtoartist j ON s.Song_ID = j.Song_ID JOIN artist r ON r.Artist_ID = j.Artist_ID JOIN songtogenre k ON s.Song_ID = k.Song_ID JOIN genre h ON h.Genre_ID = k.Genre_ID ORDER BY s.Title DESC, r.Artist DESC;");
	
				//Runs and stores the query using the variable $con (see nav.php) and $query
				$result = mysqli_query($conn,$query);

				//runs in a while loop
				while($output=mysqli_fetch_array($result))
					
				{
			?>
						<!-- Data Entries -->
						<div class="field-output">
							<div data-label="Song_ID"><p><?php echo $output['Song_ID'];  ?></p></div>
							<div data-label="Title"><p><?php echo $output['Title'];  ?></p></div>
							<div data-label="Artist"><p><?php echo $output['Artist'];  ?></p></div>
							<div data-label="Album"><p><?php echo $output['Album'];  ?></p></div>
							<div data-label="Genre"><p><?php echo $output['Genre'];  ?></p></div>
							<div data-label="Duration"><p><?php echo $output['Duration'];  ?></p></div>
						</div>
						
						<?php
					
				//closes the output while loop
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
