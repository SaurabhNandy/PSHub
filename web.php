<?php	
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";

	// Create database
	$sql = "CREATE DATABASE IF NOT EXISTS myDB";
	if ($conn->query($sql) === TRUE) {
	//echo "Database created successfully";
	} else {
	echo "Error creating database: " . $conn->error;
	}
	

	$dbname = "myDB";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$sql = "CREATE TABLE IF NOT EXISTS myT(name VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,message VARCHAR(30) NOT NULL)";

	if ($conn->query($sql) === TRUE) {
	//echo "Table MyT created successfully";
	} else {
	echo "Error creating table: " . $conn->error;
	}

	if($_POST['loginbtn'])
  	{
  		$name = $_POST['fname'];
  		$email = $_POST['email'];
  		$message = $_POST['text'];
  		$sql = "INSERT INTO myT (name,email,message)VALUES ('$name','$email','$message')";

		if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully <br> $name - $email - $message";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}	
  	}
	//$sql = "INSERT INTO myT(username, name) VALUES('$em','$nm')";
	//$result = $conn->query($sql);
	$conn->close();
	
	/*
	$con = mysqli_connect("localhost","root","","my_db");
  //$db = mysqli_select_db("my_db", $con) or die(mysql_error());
  	if($_POST['loginbtn'])
  	{
  		$name = $_POST['fname'];
  		$email = $_POST['email'];
  		$message = $_POST['text'];
  		if(mysqli_query($con,"INSERT INTO members (name,email,message) 
	    VALUES ('$name','$email','$message')"))
	    {
	    	echo "Record added <br> $name - $email - $message";	
	    } else{
			echo "Error ", "<br>", mysqli_error($con);
		}	
  	}
  	*/
	?>