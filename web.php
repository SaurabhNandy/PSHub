<?php	
	$conn = new mysqli("localhost","root","","PlaystationHub");
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	if($_POST['loginbtn'])
  	{
  		$name = $_POST['fname'];
  		$email = $_POST['email'];
  		$message = $_POST['text'];
  		$sql = "INSERT INTO  Fedback(name,email,Message)VALUES ('$name','$email','$message')";

		if ($conn->query($sql)) {
		//echo "New record created successfully <br> $name - $email - $message";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}	
  	}
  	header("location:index.html");
  	$conn->close();
?>
