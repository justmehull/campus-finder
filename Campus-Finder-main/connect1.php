<?php
	$College = $_POST['college'];
	$Email = $_POST['e-mail'];
	$Hear = $_POST['hear'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','campusfinder');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Adding(College,Email,Hear  ) values(?, ?, ?)");
		$stmt->bind_param("sss",$College, $Email,$Hear);
		$stmt->execute();
		
		echo "Details submitted successfully we will add it soon....";
		
		$stmt->close();
		$conn->close();
	}
	
?>
<a href=" index.html">Go to Home Page</a>


