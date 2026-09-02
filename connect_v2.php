<!-- Form Connection File to my phpMyAdmin Database -->
<?php
	// Get values from form...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Database Connection...
	$conn = new mysqli('localhost', '_ANellas', 'ttuBguibxrRnAEK8', 'ANellas_Music_Database_phpForm');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	} else {
		$result = $conn->prepare("insert into contact(name, email, message) 
			values(?, ?, ?)");
		$result->bind_param("sss",$name, $email, $message);
		$result->execute();
		echo "Submission successful, thank you we will be in touch with you soon.";
		$result->close();
		$conn->close();
	}
?>
