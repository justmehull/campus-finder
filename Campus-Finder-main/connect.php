<?php
	$Name = $_POST['name'];
	$Email = $_POST['e-mail'];
	$College = $_POST['college'];
	$Password = $_POST['password'];
	$Contact = $_POST['contact'];
    $City = $_POST['city'];
    $Address = $_POST['address'];

	// Database connection
	$conn = new mysqli('localhost','root','','collegecompare');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email,College, Password, Contact, City , Address) values(?, ?, ?, ?,?, ?, ?)");
		$stmt->bind_param("sssssss", $Name, $Email,$College, $Password, $Contact, $City, $Address);
		$stmt->execute();
		
		echo "Registration successfully...";
		
		$stmt->close();
		$conn->close();
	}
	
?>
<a href=" login.html">Go to Login Page</a>


