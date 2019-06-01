<?php
	$username=$_POST['user'];
	$password=$_POST['psw'];
	$repass=$_POST['psw-repeat'];

	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$repass=stripcslashes($repass);

	$conn = new mysqli("localhost","root","","PlaystationHub");
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$query="Select * from Users where username='$username'";
	$result=$conn->query($query);
	if($result->num_rows>0){
		echo "username already exists";
		header("location:index.html");
	}
	elseif ($result->num_rows==0) {
		$query="Insert into Users(username,password) Values('$username',SHA1('$password'));";
		if($conn->query($query)){
			header("location:index.html");
		}
	}
	else{
		die("Failed to query database");
	} 
?>